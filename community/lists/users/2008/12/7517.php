<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 08:37:20 2008" -->
<!-- isoreceived="20081212133720" -->
<!-- sent="Fri, 12 Dec 2008 08:37:14 -0500" -->
<!-- isosent="20081212133714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="96485920-C856-454D-8AE9-A63751635C88_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="493D7202.30104_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 08:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7518.php">Ralph Castain: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7516.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, Open MPI does have on its long-term roadmap to have &quot;blocking&quot;  
<br>
progress -- meaning that it'll (probably) spin aggressively for a  
<br>
while and if nothing &quot;interesting&quot; is happening, it'll go into a  
<br>
blocking mode and let the process block in some kind of OS call.
<br>
<p>Although we have some interesting ideas on how to do this, it's not  
<br>
entirely clear when we'll get this done.  There's been a few requests  
<br>
for this kind of feature before, but not a huge demand.  This is  
<br>
probably because most users running MPI jobs tend to devote the entire  
<br>
core/CPU/server to the MPI job and don't try to run other jobs  
<br>
concurrently on the same resources.
<br>
<p><p>On Dec 8, 2008, at 2:14 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; douglas.guptill_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Proceeding from that, it seems that &quot;mpi_recv&quot; is implemented as
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;poll forever until the message comes&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and NOT as
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;sleep until the message comes&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had assumed, until now, that mpi_recv would be implemented as the
</span><br>
<span class="quotelev2">&gt;&gt; second.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It isn't a binary situation.  The first extreme you mention is  
</span><br>
<span class="quotelev1">&gt; &quot;consume a lot of resources and spring into action as soon as there  
</span><br>
<span class="quotelev1">&gt; is work to do.&quot;  The second extreme you mention is &quot;don't use any  
</span><br>
<span class="quotelev1">&gt; extra resources, but take a loooong time to wake up once there is  
</span><br>
<span class="quotelev1">&gt; something to do&quot;.  There are a bunch of alternatives in-between.   
</span><br>
<span class="quotelev1">&gt; E.g., &quot;don't use as much resource and wake up kind of fast when  
</span><br>
<span class="quotelev1">&gt; there is something to do.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's yield behavior is such an in-between alternative.
</span><br>
<span class="quotelev2">&gt;&gt; If &quot;mpi_recv&quot; is implemented as &quot;poll forever&quot;, openmpi (or any MPI
</span><br>
<span class="quotelev2">&gt;&gt; with the same implementation) would seem to be unsuitable for my
</span><br>
<span class="quotelev2">&gt;&gt; application, since the application is using two cpus, but only  
</span><br>
<span class="quotelev2">&gt;&gt; getting
</span><br>
<span class="quotelev2">&gt;&gt; real work out of one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I could imagine another alternative.  Construct a wrapper function  
</span><br>
<span class="quotelev1">&gt; that intercepts MPI_Recv and turn it into something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PMPI_Irecv
</span><br>
<span class="quotelev1">&gt; while ( ! done ) {
</span><br>
<span class="quotelev1">&gt;     nanosleep(short);
</span><br>
<span class="quotelev1">&gt;     PMPI_Test(&amp;done);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how useful this would be for your particular case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Douglas Guptill wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 08, 2008 at 08:56:59PM +1100, Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As Eugene said:  Why are you desperate for an idle CPU?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I can run another job.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; But in that case, be careful what you measure.  If a process is  
</span><br>
<span class="quotelev1">&gt; performing a lot of yields, it may be running up the CPU  
</span><br>
<span class="quotelev1">&gt; utilization, but a new process that you submit may still get a lot  
</span><br>
<span class="quotelev1">&gt; of time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think of an automobile-traffic analogy.  Let's say you have a  
</span><br>
<span class="quotelev1">&gt; bunch of cars that will all yield to an ambulance.  If there is no  
</span><br>
<span class="quotelev1">&gt; ambulance on the road, it looks like there is a lot of traffic and a  
</span><br>
<span class="quotelev1">&gt; vehicle will not be able to go fast.  But, if you put the ambulance  
</span><br>
<span class="quotelev1">&gt; on the road, all those vehicles yield and the ambulance goes pretty  
</span><br>
<span class="quotelev1">&gt; fast -- on a road that just minutes ago looked congested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In both cases (OMPI yield and the traffic analogy), things would be  
</span><br>
<span class="quotelev1">&gt; better if there were no traffic whatsoever.  But, if processes are  
</span><br>
<span class="quotelev1">&gt; yielding, then the appearance of congestion is not a reliable  
</span><br>
<span class="quotelev1">&gt; indication of how well an added process will perform.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7518.php">Ralph Castain: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7516.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
