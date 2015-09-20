<?php if(!defined('KIRBY')) exit ?>

title: Podcast
pages: false
files: true
fields:
  title:
    label: Title
    width: 1/2
    type:  text
  date:
    label: Date
    type: date
    width: 1/2
    default: today
  subtitle:
    label: Sub-Title
    type:  text     
  text:
    label: Text
    type:  textarea
