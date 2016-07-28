<?
$subject_val = "Re: [OMPI users] problem calling mpirun from script invoked with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 21:34:57 2009" -->
<!-- isoreceived="20091029013457" -->
<!-- sent="Wed, 28 Oct 2009 21:34:53 -0400" -->
<!-- isosent="20091029013453" -->
<!-- name="Luke Shulenburger" -->
<!-- email="lshulenburger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem calling mpirun from script invoked with mpirun" -->
<!-- id="b74576e70910281834m389b9ff2ic98616ea3124ce40_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0910281806o68555a0bh1dc82a6ac1011774_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem calling mpirun from script invoked with mpirun<br>
<strong>From:</strong> Luke Shulenburger (<em>lshulenburger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 21:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10996.php">Natarajan CS: "[OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="10994.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10994.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
<p>That's what I wanted to know.  And thanks for all the help!
<br>
<p>Luke
<br>
<p>On Wed, Oct 28, 2009 at 9:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I see. No, we don't copy your envars and ship them to remote nodes. Simple
</span><br>
<span class="quotelev1">&gt; reason is that we don't know which ones we can safely move, and which would
</span><br>
<span class="quotelev1">&gt; cause problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we do provide a mechanism for you to tell us which envars to move.
</span><br>
<span class="quotelev1">&gt; Just add:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your mpirun cmd line and we will pickup that value and move it. You can
</span><br>
<span class="quotelev1">&gt; use that option any number of times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know it's a tad tedious if you have to move many of them, but it's the
</span><br>
<span class="quotelev1">&gt; only safe mechanism we could devise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10996.php">Natarajan CS: "[OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="10994.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10994.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
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
