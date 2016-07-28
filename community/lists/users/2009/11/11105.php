<?
$subject_val = "Re: [OMPI users] sending/receiving large buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 05:45:35 2009" -->
<!-- isoreceived="20091109104535" -->
<!-- sent="Mon, 09 Nov 2009 11:45:29 +0100" -->
<!-- isosent="20091109104529" -->
<!-- name="Vincent Loechner" -->
<!-- email="loechner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending/receiving large buffers" -->
<!-- id="E1N7RkX-0000QD-Eb_at_gauvain.u-strasbg.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20091109044023.GA28891_at_stikine.its.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] sending/receiving large buffers<br>
<strong>From:</strong> Vincent Loechner (<em>loechner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 05:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
<li><strong>In reply to:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Reply:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Martin,
<br>
<p><span class="quotelev1">&gt; I expect problems with sizes larger than 2^31-1, but these array sizes
</span><br>
<span class="quotelev1">&gt; are still much smaller.
</span><br>
No, they are bigger, you allocate two arrays of 320 Mdouble :
<br>
2 * 320M * 8 = 5GB.
<br>
<p>Are your processes limited to 4GB virtual memory ?
<br>
<p>--Vincent
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
<li><strong>In reply to:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Reply:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
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
