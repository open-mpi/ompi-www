<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 08:37:31 2009" -->
<!-- isoreceived="20091210133731" -->
<!-- sent="Thu, 10 Dec 2009 13:37:23 +0000" -->
<!-- isosent="20091210133723" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="1260452243.24063.35.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1E26F1.9060602_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 08:37:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11498.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11453.php">Number Cruncher: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11446.php">Eugene Loh: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-12-08 at 10:14 +0000, Number Cruncher wrote:
<br>
<span class="quotelev1">&gt; Whilst MPI has traditionally been run on dedicated hardware, the rise of 
</span><br>
<span class="quotelev1">&gt; cheap multicore CPUs makes it very attractive for ISVs such as ourselves 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.cambridgeflowsolutions.com/">http://www.cambridgeflowsolutions.com/</a>) to build a *single* executable 
</span><br>
<span class="quotelev1">&gt; that can be run in batch mode on a dedicated cluster *or* interactively 
</span><br>
<span class="quotelev1">&gt; on a user's workstation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once you've taken the pain of writing a distributed-memory app (rather 
</span><br>
<span class="quotelev1">&gt; than shared-memory/multithreaded), MPI provides a transparent API to 
</span><br>
<span class="quotelev1">&gt; cover both use cases above. *However*, at the moment, the lack of 
</span><br>
<span class="quotelev1">&gt; select()-like behaviour (instead of polling) means we have to write 
</span><br>
<span class="quotelev1">&gt; custom code to avoid hogging a workstation. A runtime-selectable 
</span><br>
<span class="quotelev1">&gt; mechanism would be perfect!
</span><br>
<p>Speaking as an independent observer here (i.e. not a OMPI developer) I
<br>
don't think you'll find anyone who wouldn't view what you are asking for
<br>
as a good thing, it's something that has been and is continued to be
<br>
discussed often.  I for one would love to see it, whilst as Richard says
<br>
it can increase latency it can also reduce noise so help performance on
<br>
larger systems.
<br>
<p>As you say you are one of a new breed of MPI users and this feature
<br>
would most likely benefit you more than the traditional
<br>
dedicated-machine users of MPI, I expect it to become more of an issue
<br>
as MPI is adopted by a wider audience.  As OpenMPI is a open-source
<br>
project the question should not be what appetite is there amongst users
<br>
but is there any one user who is both motivated enough, able to do the
<br>
work and finally not busy doing other things.  I've implemented this
<br>
before and it's not an easy feature to add by any means and tends to be
<br>
very intrusive into the code-base which itself causes problems.
<br>
<p>There was another thread on this mailing list this week where Ralph
<br>
recommended setting the yield_when_idle mca param (&quot;--mca
<br>
yield_when_idle 1) which will cause threads to call sched_yield() when
<br>
polling.  The end result here is that they will still consume 100% of
<br>
idle CPU time but then other programs want to use the CPU the MPI
<br>
processes will not hog it but rather let the other processes use as much
<br>
CPU time as they want and just spin when the CPU would otherwise be
<br>
idle.  This is something I use daily and greatly increases the
<br>
responsiveness of systems which are mixing idle MPI with other
<br>
applications.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11498.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11453.php">Number Cruncher: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11446.php">Eugene Loh: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
