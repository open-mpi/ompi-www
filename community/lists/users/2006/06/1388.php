<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  8 19:10:58 2006" -->
<!-- isoreceived="20060608231058" -->
<!-- sent="Thu, 8 Jun 2006 19:10:55 -0400 (EDT)" -->
<!-- isosent="20060608231055" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] F90 interfaces again" -->
<!-- id="Pine.LNX.4.64.0606081909360.20084_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B16DAE7A-8B90-4410-A8D2-69FAD1ECBC83_at_ieee.org" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-08 19:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1389.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<li><strong>In reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1389.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 8 Jun 2006, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;             call MPI_WAITALL(3,sp_request,MPI_STATUSES_IGNORE,ier)
</span><br>
<span class="quotelev1">&gt;                                                                   1
</span><br>
<span class="quotelev1">&gt; Error: Generic subroutine 'mpi_waitall' at (1) is not consistent with
</span><br>
<span class="quotelev1">&gt; a specific subroutine interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Issue, 3rd argument of MPI_WAITALL expects an integer array normally,
</span><br>
<span class="quotelev1">&gt; but this constant is permitted by the standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with OpenMPI 1.2a1r10186,  I can check the details of the
</span><br>
<span class="quotelev1">&gt; scripts and generated files next week for whatever is the latest
</span><br>
<span class="quotelev1">&gt; version.  But odds are this has not been spotted.
</span><br>
<p>Thanks for the bug report -- it does look like this is an issue we haven't 
<br>
dealt with yet.  I've filed a bug in our tracking system on the issue, and 
<br>
hopefully Jeff will be able to take a look in the near future.
<br>
<p>I'm pretty sure this will also be a problem for TESTALL, WAITSOME, and 
<br>
WAITANY.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1389.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<li><strong>In reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1389.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
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
