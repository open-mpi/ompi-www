<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:24:40 2010" -->
<!-- isoreceived="20101025172440" -->
<!-- sent="Mon, 25 Oct 2010 19:24:35 +0200" -->
<!-- isosent="20101025172435" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="AANLkTinFxAq3uBojbaBKxgJFt=OXZ-NO++JtjsjLM-B9_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="SNT134-w24A699A3795F2DCAE97163CB410_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 13:24:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14594.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 25, 2010 at 19:07, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I need to use #PBS parallel job script to submit a job on MPI cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Is it not possible to reproduce locally?  Most clusters have a way to submit
<br>
an interactive job (which would let you start this thing and then inspect
<br>
individual processes).  Ashley's Padb suggestion will certainly be better in
<br>
a non-interactive environment.
<br>
<p><p><span class="quotelev1">&gt; Where should I put the (gdb --batch -ex 'bt full' -ex 'info reg' -pid
</span><br>
<span class="quotelev1">&gt; ZOMBIE_PID) in the script ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Is control returning to your script after rank 0 has exited?  In that case,
<br>
you can just put this on the next line.
<br>
<p><p><span class="quotelev1">&gt; How to get the ZOMBIE_PID ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;ps&quot; from the command line, or getpid() from C code.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14594.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
