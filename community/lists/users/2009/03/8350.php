<?
$subject_val = "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 06:12:22 2009" -->
<!-- isoreceived="20090306111222" -->
<!-- sent="Fri, 6 Mar 2009 11:13:03 +0000" -->
<!-- isosent="20090306111303" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application heavily using MPI_Barrier?" -->
<!-- id="3766f8c1d707edc49989c02a4ccd31e0_at_pittman.co.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D30873DF-DD8F-43CB-BEEF-9187CFC3CACB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application heavily using MPI_Barrier?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-06 06:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8351.php">Douglas Guptill: "Re: [OMPI users] threading bug?"</a>
<li><strong>Previous message:</strong> <a href="8349.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>In reply to:</strong> <a href="8314.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5 Mar 2009, at 15:25, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I don't remember who originally said it, but I've repeated the 
</span><br>
<span class="quotelev1">&gt; statement: any MPI program that relies on a barrier for correctness is 
</span><br>
<span class="quotelev1">&gt; an incorrect MPI application.
</span><br>
<p>I'm not 100% sure this holds although it's a good rule of thumb, I've 
<br>
certainly written programs which need barriers but that's using 
<br>
one-sided comms so is slightly different.
<br>
<p><span class="quotelev1">&gt; There's anecdotal evidence that throwing in a barrier every once in a 
</span><br>
<span class="quotelev1">&gt; while can help reduce unexpected messages (and other things), and 
</span><br>
<span class="quotelev1">&gt; therefore improve performance a bit.  But that's very application 
</span><br>
<span class="quotelev1">&gt; dependent, and usually not frequent.
</span><br>
<p>I've seen this a number off times, a number of algorithms work fairly 
<br>
well as long as things are vaguely in sync but slow down drastically if 
<br>
they are not, without barriers there is no way to recover from this 
<br>
slowdown.  Basically if one rank is slow for whatever reason other 
<br>
ranks try to communicate with it and the unexpected messages cause it 
<br>
to slow down further and you get a positive feedback loop.
<br>
<p>I sometimes feel that Barriers have a bad reputation and maybe it is 
<br>
because they can be used to hide sloppy coding and allow incorrect MPI 
<br>
applications to run, I don't see that as a reason not to use them 
<br>
however, just be sure you need one.
<br>
<p>On 5 Mar 2009, at 15:52, Shanyuan Gao wrote:
<br>
<span class="quotelev1">&gt; My current research is trying to rewrite some collective MPI 
</span><br>
<span class="quotelev1">&gt; operations to work with our system.  Barrier is my first step, maybe I 
</span><br>
<span class="quotelev1">&gt; will have bcast and reduce in the future.  I understand that some 
</span><br>
<span class="quotelev1">&gt; applications used too many unnecessary barriers.  But here what I want 
</span><br>
<span class="quotelev1">&gt; is just an application to measure the performance improvement versus 
</span><br>
<span class="quotelev1">&gt; normal MPI_Barrier.  And the improvement can only be measured if the 
</span><br>
<span class="quotelev1">&gt; barriers are executed many times.  I have done some synthetic tests, 
</span><br>
<span class="quotelev1">&gt; all I need now are real applications.
</span><br>
<p>I've done a lot of work on Barrier and on collectives in general, my 
<br>
advice would be to implement a non-blocking barrier, barriers can be 
<br>
slow and *always* delay the application for the duration of the 
<br>
barrier, if you can write a non-blocking barrier and pipeline it with 
<br>
your application steps then assuming the application is working well 
<br>
the CPU cost of the barrier is almost zero (I got it down to .15uS) and 
<br>
if the application isn't working well then the barrier will still bring 
<br>
it back in step.
<br>
<p>Another interesting challenge is to benchmark MPI_Barrier, it's not as 
<br>
easy as you might think...
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8351.php">Douglas Guptill: "Re: [OMPI users] threading bug?"</a>
<li><strong>Previous message:</strong> <a href="8349.php">Jeff Squyres: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>In reply to:</strong> <a href="8314.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
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
