<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:43:15 2010" -->
<!-- isoreceived="20101025174315" -->
<!-- sent="Mon, 25 Oct 2010 19:43:11 +0200" -->
<!-- isosent="20101025174311" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="AANLkTimTZR-ujGAiX_A8+ua4e3b2kC5+GEkxWmP4VkUT_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="SNT134-w548BE7E7EF0D0E05C878BDCB410_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-10-25 13:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14600.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 25, 2010 at 19:35, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have to use #PBS to submit any jobs in my cluster.
</span><br>
<span class="quotelev1">&gt; I cannot use command line to hang a job on my cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You don't need a cluster to run MPI jobs, can you run the job on whatever
<br>
you development machine is?  Does it hang there?
<br>
<p>PBS interactive jobs are started with qsub -I.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where should I put the (gdb --batch -ex 'bt full' -ex 'info reg' -pid
</span><br>
<span class="quotelev1">&gt; ZOMBIE_PID) in the script ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>On the line after &quot;mpirun ...&quot;, assuming that control returns to there after
<br>
the hang.  You didn't answer whether that was the case.
<br>
<p><p><span class="quotelev1">&gt; And how to get ZOMBIE_PID from the script ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Simplest is &quot;pgrep $COMMAND&quot;, or use ps.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14600.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14597.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14595.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
