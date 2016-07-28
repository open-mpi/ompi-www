<?
$subject_val = "Re: [OMPI users] error with Vprotocol pessimist";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 10:53:15 2008" -->
<!-- isoreceived="20080130155315" -->
<!-- sent="Wed, 30 Jan 2008 10:52:31 -0500" -->
<!-- isosent="20080130155231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with Vprotocol pessimist" -->
<!-- id="92A35935-8EDE-49C5-BCB8-1416576623AA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A09232.8040601_at_irisa.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] error with Vprotocol pessimist<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 10:52:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4922.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4922.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2008, at 10:05 AM, Thomas Ropars wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, I made a mistake ... I works fine for me too with LT 1.5.22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the problem is with LT 1.5.24
</span><br>
<span class="quotelev1">&gt; With this version, I only have in my sys_dl_open():
</span><br>
<span class="quotelev1">&gt; lt_module   module   = dlopen (filename, LT_LAZY_OR_NOW);
</span><br>
<p>Yoinks!  LT changed to private in 1.5.24?  That's certainly unexpected  
<br>
-- I thought that they were only going to make this change in the 2.x  
<br>
series (but I didn't pay close attention).  :-\
<br>
<p>I believe that all of our distribution tarballs are made with LT 2.x,  
<br>
so it shouldn't be an official problem.  I don't know if any of our  
<br>
developers use 1.5.24 (I don't).
<br>
<p>If you'd like to submit a patch to fix the problem for 1.5.24, if it's  
<br>
safe for all versions of LT, I'll be happy to apply it.
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
<li><strong>Next message:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4922.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4922.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
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
