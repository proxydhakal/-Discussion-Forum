<div class="shadow-sm p-3 mb-5  rounded" style="background-color: #ECECEA;"><h3>Highlights</h3>
  <marquee direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="1" scrolldelay="1" style="height:297px;">
  @if(count($notic)>0)
  @foreach($notic as $notic)
  <div class="card"  >
    <div class="card-header">Group:{{$notic->group}}<br>Date:{{$notic->date}}</div>
    <div class="card-body"><p>Notice:{{$notic->notice}}</p></div>
    <a href="/noticedetails" class="btn">Readmore!!</a>
  </div>
  <br>
  @endforeach
  @endif
  </marquee>
</div>