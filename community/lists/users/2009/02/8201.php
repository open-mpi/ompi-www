<?
$subject_val = "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 13:15:46 2009" -->
<!-- isoreceived="20090225181546" -->
<!-- sent="Wed, 25 Feb 2009 13:15:40 -0500" -->
<!-- isosent="20090225181540" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)" -->
<!-- id="F451CF28-DE39-4761-859C-7B23231D630E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 13:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8200.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8199.php">Ken Mighell: "[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8204.php">George Bosilca: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2009, at 12:25 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; We are trying to compile the code with Open MPI on a Mac Pro with 2  
</span><br>
<span class="quotelev1">&gt; quad-core Xeons using gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code seem to be running ... for the most part.  Unfortunately we  
</span><br>
<span class="quotelev1">&gt; keep getting a segfault
</span><br>
<span class="quotelev1">&gt; which spits out a variant of the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [oblix:21522] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oblix:21522] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oblix:21522] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [oblix:21522] Failing at address: 0xc0000710
</span><br>
<span class="quotelev1">&gt; [oblix:21522] [ 0] 2   libSystem.B.dylib                  0x92a892bb  
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
<span class="quotelev1">&gt; [oblix:21522] [ 3] 5   exe.out                            0x00013c38  
</span><br>
<span class="quotelev1">&gt; main + 40
</span><br>
<span class="quotelev1">&gt; [oblix:21522] [ 4] 6   exe.out                            0x00001936  
</span><br>
<span class="quotelev1">&gt; start + 54
</span><br>
<span class="quotelev1">&gt; [oblix:21522] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After some researching of the error message, and digging around in   
</span><br>
<span class="quotelev1">&gt; the Open MPI user's mailing list,
</span><br>
<span class="quotelev1">&gt; it appears that the bug may be in Open MPI.
</span><br>
<p>I'm not sure what you mean by this -- getting a stack trace out of  
<br>
Open MPI doesn't necessarily mean a bug in Open MPI.
<br>
<p>Can you get corefile and look and see what exactly failed?  Or run  
<br>
under a debugger to see where/how exactly the process fails?  From the  
<br>
stack trace above, it looks like the failure occurs in application  
<br>
code, not Open MPI...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8200.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8199.php">Ken Mighell: "[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8204.php">George Bosilca: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
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
