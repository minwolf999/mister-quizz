<?php

if (auth()->user()->xp < 1500) {
    $rank = "Quiz Aprentice";
} else if (auth()->user()->xp >= 1500 && auth()->user()->xp < 5000) {
    $rank = "Average Quizer";
} else if (auth()->user()->xp >= 5000 && auth()->user()->xp < 10000) {
    $rank = "Epic Quizer";
} else if (auth()->user()->xp >= 10000) {
    $rank = "Quiz Master";
}
?>

@extends('app')

@section('content')

<a class="top-right-corner red-btn" href="{{ route('home') }}">Back ></a>

<div style="margin-top:100px">
    <div class="profile-header">
        <p class="title profile-name">{{ auth()->user()->username }}</p>
        <p class="title profile-email">{{ auth()->user()->email }}</p>
    </div>

    <div class="profile-header">
        <p class="title profile-xp">{{ auth()->user()->xp }} XP</p>
    </div>

    <div class="profile-header">
        <p class="title profile-xp">Rank: <?php echo $rank ?></p>
    </div>

    <div>
        <p class="title art-xp">art : {{ auth()->user()->art }}</p>
        <p class="title geography-xp">geography : {{ auth()->user()->geography }}</p>
        <p class="title history-xp">history : {{ auth()->user()->history }}</p>
        <p class="title science-xp">science : {{ auth()->user()->science }}</p>
        <p class="title sports-xp">sports : {{ auth()->user()->sports }}</p>
    </div>
</div>



@endsection