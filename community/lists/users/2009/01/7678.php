<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 12:47:04 2009" -->
<!-- isoreceived="20090112174704" -->
<!-- sent="Mon, 12 Jan 2009 10:46:23 -0700" -->
<!-- isosent="20090112174623" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="496B81EF.4040702_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44170A9F-4EC2-49B3-A7CC-68A76AF43F93_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock on large numbers of processors<br>
<strong>From:</strong> Justin (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 12:46:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7677.php">Jeff Squyres: "Re: [OMPI users] problem with xfmpi_sane"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7510.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,  has this deadlock been fixed in the 1.3 source yet?
<br>
<p>Thanks,
<br>
<p>Justin
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 11, 2008, at 5:30 PM, Justin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The more I look at this bug the more I'm convinced it is with openMPI 
</span><br>
<span class="quotelev2">&gt;&gt; and not our code.  Here is why:  Our code generates a 
</span><br>
<span class="quotelev2">&gt;&gt; communication/execution schedule.  At each timestep this schedule is 
</span><br>
<span class="quotelev2">&gt;&gt; executed and all communication and execution is performed.  Our 
</span><br>
<span class="quotelev2">&gt;&gt; problem is AMR which means the communication schedule may change from 
</span><br>
<span class="quotelev2">&gt;&gt; time to time.  In this case the schedule has not changed in many 
</span><br>
<span class="quotelev2">&gt;&gt; timesteps meaning the same communication schedule is being used as 
</span><br>
<span class="quotelev2">&gt;&gt; the last X (x being around 20 in this case) timesteps.
</span><br>
<span class="quotelev2">&gt;&gt; Our code does have a very large communication problem.  I have been 
</span><br>
<span class="quotelev2">&gt;&gt; able to reduce the hang down to 16 processors and it seems to me the 
</span><br>
<span class="quotelev2">&gt;&gt; hang occurs when he have lots of work per processor.  Meaning if I 
</span><br>
<span class="quotelev2">&gt;&gt; add more processors it may not hang but reducing processors makes it 
</span><br>
<span class="quotelev2">&gt;&gt; more likely to hang.
</span><br>
<span class="quotelev2">&gt;&gt; What is the status on the fix for this particular freelist deadlock?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George is actively working on it because it is the &quot;last&quot; issue 
</span><br>
<span class="quotelev1">&gt; blocking us from releasing v1.3.  I fear that if he doesn't get it 
</span><br>
<span class="quotelev1">&gt; fixed by tonight, we'll have to push v1.3 to next year (see 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5029.php">http://www.open-mpi.org/community/lists/devel/2008/12/5029.php</a> and 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/12/7499.php">http://www.open-mpi.org/community/lists/users/2008/12/7499.php</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7677.php">Jeff Squyres: "Re: [OMPI users] problem with xfmpi_sane"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7510.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
