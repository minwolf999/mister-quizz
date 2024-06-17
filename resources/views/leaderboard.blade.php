@extends('app')

@section('content')

<a class="top-right-corner red-btn" href="{{ route('home') }}">Back ></a>

<center>
    <table class="styled-table" style="margin: 50px;">
        <tr>
            <td>Username</td>
            <td>Total Xp</td>
            <td>Good answer</td>
        </tr>
        @foreach ($users as $user)
        <?php
            sscanf($user -> art, "%d/%d", $userArtScore, $maxArtScore);
            sscanf($user -> geography, "%d/%d", $userGeographyScore, $maxGeographyScore);
            sscanf($user -> history, "%d/%d", $userHistoryScore, $maxHistoryScore);
            sscanf($user -> science, "%d/%d", $userScienceScore, $maxScienceScore);
            sscanf($user -> sports, "%d/%d", $userSportsScore, $maxSportsScore);

            $userScore = $userArtScore + $userGeographyScore + $userHistoryScore + $userScienceScore + $userSportsScore;
            $maxScore = $maxArtScore + $maxGeographyScore + $maxHistoryScore + $maxScienceScore + $maxSportsScore;
        ?>
            <tr>
                <td>{{ $user -> username }}</td>
                <td>{{ $user -> xp }}</td>
                <td><?php echo $userScore . "/" . $maxScore ?></td>
            </tr>
        @endforeach
    </table>
</center>

@endsection