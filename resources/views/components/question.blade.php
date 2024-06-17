@props(['question'=>$question])

<div class="mb4">
    <p class="center title">{{ $question->question }}</p>

    <div class="checkboxes-wrapper" class="center">
        <center>
            @foreach ($question->answers as $answer)
                <input class="answer" type="radio" name="{{ $answer['question_id'] }}" value="{{ $answer['answer'] }}">{{ $answer['answer'] }}</input><br>
            @endforeach
        </center>
    </div>

    <div class="center line"></div>
</div>