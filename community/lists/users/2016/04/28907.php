<?
$subject_val = "Re: [OMPI users] Wrong values when reading file with MPI IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 18:16:10 2016" -->
<!-- isoreceived="20160407221610" -->
<!-- sent="Fri, 08 Apr 2016 00:17:31 +0200" -->
<!-- isosent="20160407221731" -->
<!-- name="David Froger" -->
<!-- email="david.froger.ml_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrong values when reading file with MPI IO" -->
<!-- id="146006745156.6528.12846052634804322351_at_mael" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5706CEB6.7010901_at_central.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Wrong values when reading file with MPI IO<br>
<strong>From:</strong> David Froger (<em>david.froger.ml_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-07 18:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28908.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Maybe in reply to:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right, thanks a lot Edgar!
<br>
<p>Quoting Edgar Gabriel (2016-04-07 23:18:46)
<br>
<span class="quotelev1">&gt; I found the bug in your code. The displacement of the file view has to 
</span><br>
<span class="quotelev1">&gt; be given in absolute bytes, not in multiples of etypes.
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt;   The disp displacement argument specifies the position (absolute offset 
</span><br>
<span class="quotelev1">&gt; in bytes from the begin-
</span><br>
<span class="quotelev1">&gt;         ning of the file) where the view begins.
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you change your code to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_File_set_view(f, i0*sizeof(double), MPI_DOUBLE, MPI_DOUBLE, &quot;native&quot;,
</span><br>
<span class="quotelev1">&gt;                        MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you'll get the correct answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/7/2016 2:25 PM, david.froger.ml_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What version of Open MPI did you execute your test with?
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.8.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28908.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Maybe in reply to:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
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
