<script setup>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import timeGridPlugin from '@fullcalendar/timegrid'
import moment from 'moment';
// import '../../public/lib/moment-locale';

moment.locale('fr');

import { ref } from 'vue'

const calendarOptions = {
    plugins: [dayGridPlugin, interactionPlugin, timeGridPlugin],
    initialView: 'timeGridWeek',
    weekends: false,
    locale: 'fr',
    buttonText: {
        today: 'Aujourd\'hui',
        month: 'Mois',
        week: 'Semaine',
        day: 'Jour',
        list: 'Liste'
    },
    contentHeight: 'auto',
    slotMinTime: '08:00:00',
    slotMaxTime: '18:30:00',
    slotLabelInterval: '00:30:00',
    allDaySlot: false,
    nowIndicator: true,
    slotLabelFormat: {
        hour: 'numeric',
        minute: '2-digit',
        omitZeroMinute: false,
        meridiem: 'short'
    },
    dateClick: function (info) {
        dateSelected.value = moment(info.dateStr).locale("fr").format('DD MMMM YYYY');
        hourSelected.value = moment(info.dateStr).format('HH:mm');
        thirtyMinutes.value = moment(info.dateStr).add(30, 'm').format('HH:mm');
        oneHour.value = moment(info.dateStr).add(1, 'h').format('HH:mm');
    },
}

const closePannel = () => {
    dateSelected.value = '';
}

const dateSelected = ref('');
const hourSelected = ref('');
const thirtyMinutes = ref('');
const oneHour = ref('');

const newCreneau = async () => {
    try {
        const response = await fetch('http://localhost:8000/api/creneaux', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            // body: JSON.stringify({
            //     date: dateSelected.value,
            //     hour: hourSelected.value,
            // }),
        });
    } catch (error) {
        console.error(error);

    }
}

</script>
<template>
    <section class="calendar-content">
        <!-- <button @click="toggleWeekends">toggle weekends</button> -->
        <FullCalendar :options="calendarOptions" />
        <div class="pannel" v-if="dateSelected">
            <button class="close" :onclick="closePannel">x</button>
            <h2>{{ dateSelected }}</h2>
            <form action="" method="POST">
                <fieldset>
                    <div>
                        <input type="radio" id="thirtyMinutes" name="duration" value="30">
                        <label for="thirtyMinutes">De {{ hourSelected }} à {{ thirtyMinutes }}</label>
                    </div>
                    <div>
                        <input type="radio" id="oneHour" name="duration" value="60">
                        <label for="oneHour">De {{ hourSelected }} à {{ oneHour }}</label>
                    </div>
                    <button type="submit">Réserver</button>
                </fieldset>
            </form>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.pannel {
    background-color: rgba($color: #000000, $alpha: .9);
    width: 100%;
    z-index: 1;
    padding: 1rem;
    color: white;
    position: relative;

    .close {
        border: none;
        background: none;
        color: white;
        font-size: 1.5rem;
        position: absolute;
        right: .5rem;
        top: .5rem;
        cursor: pointer;
    }
}
</style>