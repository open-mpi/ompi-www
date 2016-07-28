<?
$subject_val = "Re: [OMPI users] ompi-checkpoint --term";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 19:25:38 2010" -->
<!-- isoreceived="20100331232538" -->
<!-- sent="Wed, 31 Mar 2010 20:25:33 -0300" -->
<!-- isosent="20100331232533" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint --term" -->
<!-- id="w2o9108753b1003311625z89542723rade3b83a08b9aa00_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640D4F47A24D7_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint --term<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 19:25:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12508.php">Jeff Squyres: "Re: [OMPI users] openmpi.ld.conf file"</a>
<li><strong>Previous message:</strong> <a href="12506.php">Addepalli, Srirangam V: "[OMPI users] ompi-checkpoint  --term"</a>
<li><strong>In reply to:</strong> <a href="12506.php">Addepalli, Srirangam V: "[OMPI users] ompi-checkpoint  --term"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 31, 2010 at 7:39 PM, Addepalli, Srirangam V
<br>
&lt;srirangam.v.addepalli_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello All.
</span><br>
<span class="quotelev1">&gt; I am trying to checkpoint a mpi application that has been started using the follwong mpirun command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -np 8 pw.x &#160;&lt; Ge46.pw.in &gt; Ge46.ph.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint 31396 ( Works) How ever when i try to terminate the process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint &#160;--term 31396 &#160;it never finishes. &#160;How do i bebug this issue.
</span><br>
<p>ompi-checkpoint is exactly ompi-checkpoint + sending SIGTERM to your
<br>
app. If ompi-checkpoint finishes, then your app is not dealing with
<br>
SIGTERM correctly.
<br>
<p>Make sure you're not ignoring SIGTERM, you need to either handle it or
<br>
let it kill your app. If it's a multithreaded app, make sure you can
<br>
&quot;distribute&quot; the SIGTERM to ALL the threads, i.e., when you receive
<br>
SIGTERM, notify all other threads that they should join or quit.
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12508.php">Jeff Squyres: "Re: [OMPI users] openmpi.ld.conf file"</a>
<li><strong>Previous message:</strong> <a href="12506.php">Addepalli, Srirangam V: "[OMPI users] ompi-checkpoint  --term"</a>
<li><strong>In reply to:</strong> <a href="12506.php">Addepalli, Srirangam V: "[OMPI users] ompi-checkpoint  --term"</a>
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
