<?
$subject_val = "Re: [OMPI users] segfault when resuming on different host";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 17:25:54 2011" -->
<!-- isoreceived="20111229222554" -->
<!-- sent="Thu, 29 Dec 2011 15:25:06 -0700" -->
<!-- isosent="20111229222506" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when resuming on different host" -->
<!-- id="4EFCE8C2.6020701_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEmAH8b18a4pMfM2ZFjq189bXr_gv3CnMeQMynmGfx=nmQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault when resuming on different host<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 17:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18076.php">Dmitry N. Mikushin: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>In reply to:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>When I use cr_{run,checkpoint,restart} to start a checkpoint and restart
<br>
a single-threaded, single-process app on a different host, it works,
<br>
even with prelinking enabled.  That's kinda why I assumed the problem
<br>
was with the OpenMPI code, and didn't look at the BLCR FAQ that closely,
<br>
to be honest.
<br>
<p>Having said that, I did temporarily disable prelink on my two hosts, and
<br>
tried my MPI test again, and it seemed to work.  I'll have to do more
<br>
tests with something more intense (xhpl, maybe), and so on, but
<br>
preliminary results look good.
<br>
<p>Thanks for pointing me in the right direction.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 12/29/2011 02:31 PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Often this type of problem is due to the 'prelink' option in Linux.
</span><br>
<span class="quotelev1">&gt; BLCR has a FAQ item that discusses this issue and how to resolve it:
</span><br>
<span class="quotelev1">&gt;   <a href="https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would give that a try. If that does not help then you might want to
</span><br>
<span class="quotelev1">&gt; try checkpointing a single (non-MPI) process on one node with BLCR and
</span><br>
<span class="quotelev1">&gt; restart it on the other node. If that fails, then it is likely a
</span><br>
<span class="quotelev1">&gt; BLCR/system configuration issue that is the cause. If it does work,
</span><br>
<span class="quotelev1">&gt; then we can dig more into the Open MPI causes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if disabling prelink works for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18076.php">Dmitry N. Mikushin: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>In reply to:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
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
