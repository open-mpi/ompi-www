<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 10:05:00 2006" -->
<!-- isoreceived="20060628140500" -->
<!-- sent="Wed, 28 Jun 2006 08:04:59 -0600" -->
<!-- isosent="20060628140459" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state" -->
<!-- id="1151503499.13451.14.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="44A2878A.1070202_at_fluent.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 10:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1485.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="1484.php">Patrick Jessee: "[OMPI users] Openmpi 1.1: startup problem caused by file descriptor state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1488.php">Patrick Jessee: "Re: [OMPI users] Openmpi 1.1: startup problem caused by	file	descriptor state"</a>
<li><strong>Reply:</strong> <a href="1488.php">Patrick Jessee: "Re: [OMPI users] Openmpi 1.1: startup problem caused by	file	descriptor state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2006-06-28 at 09:43 -0400, Patrick Jessee wrote:
<br>
<span class="quotelev1">&gt; Hello.  I've tracked down the source of the previously reported startup 
</span><br>
<span class="quotelev1">&gt; problem with Openmpi 1.1.  On startup, it fails with the messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev1">&gt;     :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This didn't happen with 1.0.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The trigger for this behavior is if standard input happens to be closed 
</span><br>
<span class="quotelev1">&gt; before calling mpirun.  In this particular case, mpirun was being 
</span><br>
<span class="quotelev1">&gt; started by a wrapper Bourne shell script that had standard input 
</span><br>
<span class="quotelev1">&gt; closed.  It's fairly easy to reproduce.  Interestingly, the problem is 
</span><br>
<span class="quotelev1">&gt; not seen if standard input is opened from an arbitrary device such as 
</span><br>
<span class="quotelev1">&gt; /dev/null.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the first MPI with which we've seen this behavior, and it didn't 
</span><br>
<span class="quotelev1">&gt; happen with 1.0.2 so something must have been introduced in 1.1.   
</span><br>
<span class="quotelev1">&gt; Perhaps 1.1 makes some assumptions about the state of the standard file 
</span><br>
<span class="quotelev1">&gt; descriptors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully this feedback is helpful to someone in resolving the problem.
</span><br>
<p>Yup, in order to fix some other things with standard input that users
<br>
rightly were complaining about, we changed some standard input handling
<br>
between 1.0.2 and 1.1. My recommendation is to just tie it to /dev/null
<br>
instead.  We're unlikely to fix this issue in the near future.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1485.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="1484.php">Patrick Jessee: "[OMPI users] Openmpi 1.1: startup problem caused by file descriptor state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1488.php">Patrick Jessee: "Re: [OMPI users] Openmpi 1.1: startup problem caused by	file	descriptor state"</a>
<li><strong>Reply:</strong> <a href="1488.php">Patrick Jessee: "Re: [OMPI users] Openmpi 1.1: startup problem caused by	file	descriptor state"</a>
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
