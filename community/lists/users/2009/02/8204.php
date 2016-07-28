<?
$subject_val = "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 16:24:38 2009" -->
<!-- isoreceived="20090225212438" -->
<!-- sent="Wed, 25 Feb 2009 16:24:31 -0500" -->
<!-- isosent="20090225212431" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)" -->
<!-- id="83E811A1-18DF-4B83-A609-71B03C3A0E93_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="90E47DE5-A000-4BFE-9B67-D0A5E7956241_at_noao.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 16:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8205.php">Ken Mighell: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="8199.php">Ken Mighell: "[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8205.php">Ken Mighell: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on this info from the error report it appears that the segfault  
<br>
is generated directly in you application main function. Somehow, you  
<br>
call a function at address 0xffffffff, which doesn't make much sense.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 25, 2009, at 12:25 , Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; [oblix:21522] [ 0] 2   libSystem.B.dylib                  0x92a892bb  
</span><br>
<span class="quotelev1">&gt; _sigtramp + 43
</span><br>
<span class="quotelev1">&gt; [oblix:21522] [ 1] 3   ???                                0xffffffff  
</span><br>
<span class="quotelev1">&gt; 0x0 + 4294967295
</span><br>
<span class="quotelev1">&gt; [oblix:21522] [ 2] 4   exe.out                            0x0001281b  
</span><br>
<span class="quotelev1">&gt; MAIN__ + 4875
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8205.php">Ken Mighell: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="8199.php">Ken Mighell: "[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8205.php">Ken Mighell: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
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
