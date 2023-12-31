<?php

/** Template: Display -> Masonry Grid */
CurlyWeeklyClassShortcodes::set_dependency('wcs-isotope');

?>

<div class="wcs-timetable wcs-timetable--grid">
	<h2 v-if="filter_var(options.show_title)">{{options.title}}</h2>
	<isotope ref="cpt" :options='getIsotopeOptions()' :list="schedule_events" v-images-loaded:on.progress="layout" @filter="isFilteredVal()" class="wcs-timetable__grid wcs-timetable__parent">
	  <div v-for="event in schedule_events" :key="event.id" class="wcs-class wcs-iso-item" :class="event | eventCSS | eventCSSIsotope(event)">
	    <div class="wcs-class__inner" :key="event.id">
				<div v-if="event.thumbnail" class="wcs-class__image">
          <img v-on:click="openModal( event, options, $event )" :src="event.thumbnail" :title="event.title" class="wcs-modal-call xtd-shadow--normal-normal">
        </div>
        <div class="wcs-class__title h2 wcs-modal-call" :title="event.title" v-on:click="openModal( event, options, $event )" v-html="event.title"></div>
				<div class="wcs-class__time h4 color-primary">
          <span>{{event.start | moment( options.label_dateformat ? options.label_dateformat : 'DD MMMM' ) }}</span>
					<template v-if="isMultiDay(event)">
						- {{ event.end | moment( options.label_dateformat ? options.label_dateformat : 'MM/DD' ) }}
					</template>
        </div>
			  <div v-if="filter_var(options.show_excerpt)" class="wcs-class__excerpt" v-html="event.excerpt"></div>
				<div v-if=" ( filter_var( options.show_wcs_room ) && event.terms.wcs_room ) || ( filter_var( options.show_wcs_instructor ) && event.terms.wcs_instructor )" class="wcs-class__meta">
          <div v-if="filter_var( options.show_wcs_room ) && event.terms.wcs_room">
            <span class='wcs-class__meta-label'>{{options.label_wcs_room}}</span>
            <taxonomy-list :options="options" :tax="'wcs_room'" :event="event" v-on:open-modal="openModal"></taxonomy-list>
          </div>
          <div v-if="filter_var( options.show_wcs_instructor ) && event.terms.wcs_instructor">
            <span class='wcs-class__meta-label'>{{options.label_wcs_instructor}}</span>
            <taxonomy-list :options="options" :tax="'wcs_instructor'" :event="event" v-on:open-modal="openModal"></taxonomy-list>
          </div>
        </div>
			</div>
	  </div>
		<div class="wcs-isotope-item" :key="'test-1'"></div>
		<div class="wcs-isotope-gutter" :key="'test-2'"></div>
	</isotope>
	<div v-show="isZero()" class="wcs-timetable__zero-data wcs-timetable__zero-data-container">
		<h3>{{options.zero}}</h3>
	</div>
	<button-more v-if="hasMoreButton()" v-on:add-events="addEvents" :more="options.label_more" :color="options.color_special_contrast"></button-more>
</div><!-- .wcs-timetable -->
