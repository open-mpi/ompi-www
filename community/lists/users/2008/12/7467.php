<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 14:10:39 2008" -->
<!-- isoreceived="20081208191039" -->
<!-- sent="Mon, 08 Dec 2008 11:14:10 -0800" -->
<!-- isosent="20081208191410" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="493D7202.30104_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081208184937.GA22639_at_DOME" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 14:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7466.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7464.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
<a class="moz-txt-link-abbreviated" href="mailto:douglas.guptill@dal.ca">douglas.guptill@dal.ca</a> wrote:<br>
<blockquote cite="mid20081208184937.GA22639@DOME" type="cite">
  <pre wrap="">Proceeding from that, it seems that "mpi_recv" is implemented as 
  "poll forever until the message comes"
and NOT as 
   "sleep until the message comes" 

I had assumed, until now, that mpi_recv would be implemented as the
second.
  </pre>
</blockquote>
It isn't a binary situation.&nbsp; The first extreme you mention is "consume
a lot of resources and spring into action as soon as there is work to
do."&nbsp; The second extreme you mention is "don't use any extra resources,
but take a loooong time to wake up once there is something to do".&nbsp;
There are a bunch of alternatives in-between.&nbsp; E.g., "don't use as much
resource and wake up kind of fast when there is something to do."<br>
<br>
OMPI's yield behavior is such an in-between alternative.<br>
<blockquote cite="mid20081208184937.GA22639@DOME" type="cite">
  <pre wrap="">If "mpi_recv" is implemented as "poll forever", openmpi (or any MPI
with the same implementation) would seem to be unsuitable for my
application, since the application is using two cpus, but only getting
real work out of one.
  </pre>
</blockquote>
I could imagine another alternative.&nbsp; Construct a wrapper function that
intercepts MPI_Recv and turn it into something like<br>
<br>
PMPI_Irecv<br>
while ( ! done ) {<br>
&nbsp;&nbsp;&nbsp; nanosleep(short);<br>
&nbsp;&nbsp;&nbsp; PMPI_Test(&amp;done);<br>
}<br>
<br>
I don't know how useful this would be for your particular case.<br>
<br>
Douglas Guptill wrote:
<blockquote cite="mid20081208185252.GB22639@DOME" type="cite">
  <pre wrap="">On Mon, Dec 08, 2008 at 08:56:59PM +1100, Terry Frankcombe wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">As Eugene said:  Why are you desperate for an idle CPU?
    </pre>
  </blockquote>
  <pre wrap=""><!---->So I can run another job.  :-)
  </pre>
</blockquote>
But in that case, be careful what you measure.&nbsp; If a process is
performing a lot of yields, it may be running up the CPU utilization,
but a new process that you submit may still get a lot of time.<br>
<br>
I think of an automobile-traffic analogy.&nbsp; Let's say you have a bunch
of cars that will all yield to an ambulance.&nbsp; If there is no ambulance
on the road, it looks like there is a lot of traffic and a vehicle will
not be able to go fast.&nbsp; But, if you put the ambulance on the road, all
those vehicles yield and the ambulance goes pretty fast -- on a road
that just minutes ago looked congested.<br>
<br>
In both cases (OMPI yield and the traffic analogy), things would be
better if there were no traffic whatsoever.&nbsp; But, if processes are
yielding, then the appearance of congestion is not a reliable
indication of how well an added process will perform.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7466.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7464.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
