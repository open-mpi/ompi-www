<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 19:18:42 2012" -->
<!-- isoreceived="20120403231842" -->
<!-- sent="Wed, 04 Apr 2012 01:18:36 +0200" -->
<!-- isosent="20120403231836" -->
<!-- name="Sebastian Rettenberger" -->
<!-- email="rettenbs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock" -->
<!-- id="2382958.isitAmH1gj_at_sarge.rettenberger.homelinux.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CBA0A6C0.D560%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock<br>
<strong>From:</strong> Sebastian Rettenberger (<em>rettenbs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 19:18:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18931.php">Rohan Deshpande: "[OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18929.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<li><strong>In reply to:</strong> <a href="18929.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the hint. I thought that &quot;the same process&quot; refers to the locked 
<br>
window, not to the calling process.
<br>
<p>Maybe I can work around this restriction with a dummy window for 
<br>
synchronization ...
<br>
<p>Thanks again,
<br>
Sebastian
<br>
<p><p><span class="quotelev1">&gt; On 4/3/12 12:01 PM, &quot;Sebastian Rettenberger&quot; &lt;rettenbs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;I posted the bug report a week ago, but unfortunately I didn't get any
</span><br>
<span class="quotelev2">&gt; &gt;response:
</span><br>
<span class="quotelev2">&gt; &gt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3067">https://svn.open-mpi.org/trac/ompi/ticket/3067</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The example (see bug report) is very simple, however it still fails.
</span><br>
<span class="quotelev2">&gt; &gt;Other MPI
</span><br>
<span class="quotelev2">&gt; &gt;versions work fine (e.g. Intel MPI).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;This is a real show stopper for me. Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your code is actually erroneous, as you are trying to enter two access
</span><br>
<span class="quotelev1">&gt; epochs simultaneously on the same window.  The text at issue is the 3rd
</span><br>
<span class="quotelev1">&gt; paragraph of section 11.4 of MPI-2.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Distinct access epochs for win at the same process must be disjoint.
</span><br>
<span class="quotelev1">&gt;   On the other hand, epochs pertaining to different win arguments
</span><br>
<span class="quotelev1">&gt;   may overlap. Local operations or other MPI calls may also occur
</span><br>
<span class="quotelev1">&gt;   during an epoch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both lock calls will start a distinct access epoch on win, so you must
</span><br>
<span class="quotelev1">&gt; complete the local lock before attempting to start the remote lock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is actually a stupid and pointless rule in the MPI-2 one-sided
</span><br>
<span class="quotelev1">&gt; chapter.  I'm not entirely sure why I took advantage of it when I
</span><br>
<span class="quotelev1">&gt; implemented the one-sided code, but I did, so I had to make the
</span><br>
<span class="quotelev1">&gt; implementation not allow multiple access epochs.  The other
</span><br>
<span class="quotelev1">&gt; implementations you mention probably didn't optimize lock in a way that
</span><br>
<span class="quotelev1">&gt; made supporting multiple access epochs simultaneously difficult, and
</span><br>
<span class="quotelev1">&gt; therefore allow them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The good news is that MPI-3 removed the access epoch restriction and as
</span><br>
<span class="quotelev1">&gt; part of the 1.7 release (hopefully this year), we'll have an MPI-3
</span><br>
<span class="quotelev1">&gt; compliant one-sided implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18931.php">Rohan Deshpande: "[OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18929.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<li><strong>In reply to:</strong> <a href="18929.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<!-- nextthread="start" -->
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
