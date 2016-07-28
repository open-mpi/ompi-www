<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 10:47:44 2008" -->
<!-- isoreceived="20080115154744" -->
<!-- sent="Tue, 15 Jan 2008 10:47:28 -0500" -->
<!-- isosent="20080115154728" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="478CD590.10306_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="478CD411.4010909_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mixed myrinet/non-myrinet nodes<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 10:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matt,
<br>
<p>M Jones wrote:
<br>
<span class="quotelev1">&gt; I thought that we would be able to use a single open-mpi build to
</span><br>
<span class="quotelev1">&gt; support both networks (and users would be able to request mx nodes if
</span><br>
<span class="quotelev1">&gt; they need them using the batch queuing system, which they are
</span><br>
<span class="quotelev1">&gt; already accustomed to).  Am I missing something (or just doing
</span><br>
<p>I don't know if the error you get is related, but you can only use the 
<br>
MX BTL if you want to use another BTL at the same time. The MX MTL is 
<br>
exclusive, that's a design constraint of the MTL layer in OpenMPI. Using 
<br>
both the MX BTL and TCP BTL together should work fine (I didn't test it 
<br>
recently though).
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
