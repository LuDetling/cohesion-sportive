<script setup>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import timeGridPlugin from '@fullcalendar/timegrid'

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
}

</script>
<template>
    <section class="calendar-content">
        <!-- <button @click="toggleWeekends">toggle weekends</button> -->
        <FullCalendar :options="calendarOptions" />
    </section>
</template>

<style lang="scss"></style>