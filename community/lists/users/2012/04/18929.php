<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 15:42:55 2012" -->
<!-- isoreceived="20120403194255" -->
<!-- sent="Tue, 3 Apr 2012 19:42:35 +0000" -->
<!-- isosent="20120403194235" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock" -->
<!-- id="CBA0A6C0.D560%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1532424.WWyCUA07Wk_at_sarge.rettenberger.homelinux.net" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 15:42:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<li><strong>Previous message:</strong> <a href="18928.php">Sebastian Rettenberger: "[OMPI users] Using One-sided communication with lock/unlock"</a>
<li><strong>In reply to:</strong> <a href="18928.php">Sebastian Rettenberger: "[OMPI users] Using One-sided communication with lock/unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<li><strong>Reply:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/3/12 12:01 PM, &quot;Sebastian Rettenberger&quot; &lt;rettenbs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I posted the bug report a week ago, but unfortunately I didn't get any
</span><br>
<span class="quotelev1">&gt;response:
</span><br>
<span class="quotelev1">&gt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3067">https://svn.open-mpi.org/trac/ompi/ticket/3067</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The example (see bug report) is very simple, however it still fails.
</span><br>
<span class="quotelev1">&gt;Other MPI 
</span><br>
<span class="quotelev1">&gt;versions work fine (e.g. Intel MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is a real show stopper for me. Any help is appreciated.
</span><br>
<p>Your code is actually erroneous, as you are trying to enter two access
<br>
epochs simultaneously on the same window.  The text at issue is the 3rd
<br>
paragraph of section 11.4 of MPI-2.2:
<br>
<p>&nbsp;&nbsp;Distinct access epochs for win at the same process must be disjoint.
<br>
&nbsp;&nbsp;On the other hand, epochs pertaining to different win arguments
<br>
&nbsp;&nbsp;may overlap. Local operations or other MPI calls may also occur
<br>
&nbsp;&nbsp;during an epoch.
<br>
<p><p>Both lock calls will start a distinct access epoch on win, so you must
<br>
complete the local lock before attempting to start the remote lock.
<br>
<p>This is actually a stupid and pointless rule in the MPI-2 one-sided
<br>
chapter.  I'm not entirely sure why I took advantage of it when I
<br>
implemented the one-sided code, but I did, so I had to make the
<br>
implementation not allow multiple access epochs.  The other
<br>
implementations you mention probably didn't optimize lock in a way that
<br>
made supporting multiple access epochs simultaneously difficult, and
<br>
therefore allow them.
<br>
<p>The good news is that MPI-3 removed the access epoch restriction and as
<br>
part of the 1.7 release (hopefully this year), we'll have an MPI-3
<br>
compliant one-sided implementation.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<li><strong>Previous message:</strong> <a href="18928.php">Sebastian Rettenberger: "[OMPI users] Using One-sided communication with lock/unlock"</a>
<li><strong>In reply to:</strong> <a href="18928.php">Sebastian Rettenberger: "[OMPI users] Using One-sided communication with lock/unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
<li><strong>Reply:</strong> <a href="18930.php">Sebastian Rettenberger: "Re: [OMPI users] [EXTERNAL] Using One-sided communication with lock/unlock"</a>
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
