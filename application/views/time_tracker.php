<!DOCTYPE html>
<!-- Copyright (C) 2014 Lawrence Livermore National Security, LLC.
  *  Produced at Lawrence Livermore National Laboratory (cf, DISCLAIMER).
  *  Written by Geoff Cleary <gcleary@llnl.gov>
  *  LLNL-CODE-642434
  *
  *  This file is part of Task Time Tracker, a client-side web app that allows
  *  you to track time spent on arbitrary tasks.
  *  For details, see <https://bitbucket.org/gcleary/time-tracker/wiki/Home>.
  *
  *  Task Time Tracker is free software; you can redistribute it and/or modify
  *  it under the terms of the GNU General Public License as published by the
  *  Free Software Foundation; either version 2 of the License, or (at your
  *  option) any later version.
  *
  *  Task Time Tracker is distributed in the hope that it will be useful, but
  *  WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
  *  or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License
  *  for more details.
  *
  *  You should have received a copy of the GNU General Public License along
  *  with Task Time Tracker.  If not, see <http://www.gnu.org/licenses/> or
  *  write to
  *      Free Software Foundation, Inc.,
  *      59 Temple Place, Suite 330,
  *      Boston, MA 02111-1307 USA
-->

<html lang="en">
    <head>
        <title>&#128339;</title>
        <meta charset='utf-8' />
        <link rel="stylesheet" href="<?php echo base_url('resources/css/time_tracker.css');?>">
        <script src="<?php echo base_url('resources/jquery/jquery-2.0.3.js');?>"></script>
        <script src="<?php echo base_url('resources/js/time_tracker.js');?>"></script>
    </head>
    <body>
        <form id="TaskForm">
            <input id="Form_TaskName" title="Enter your task's name here" type="text" placeholder="Project / Task" />
            <input id="StartTimer" type="hidden" />
            <button id="AddTaskButton" title="Add task" type="submit"></button>
            <button id="TrackTimeButton" title="Start new task" type="submit"></button>
        </form>
        <div id="TaskList">
            <div id="top_drop" class="drop_target"></div>
        </div>
    </body>
</html>
