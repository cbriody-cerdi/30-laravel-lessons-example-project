<h2>
    {{ $job->title  }}
</h2>
<p>
    Congrats! your job  is  now  live  on  our  website.
</p>
<p>
    <a href="{{ url('/jobs/' . $job->id) }}" class="text-blue-500 underline">
        View Job
    </a>
</p>
