<?
$subject_val = "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 15:07:45 2015" -->
<!-- isoreceived="20150323190745" -->
<!-- sent="Mon, 23 Mar 2015 16:07:26 -0300" -->
<!-- isosent="20150323190726" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled" -->
<!-- id="5510646E.1090604_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="45EC54EC-27EA-4268-9CAF-9065FD7C38F4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled<br>
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-23 15:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26505.php">Mark Santcroos: "[OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26503.php">CUDENNEC Loic: "[OMPI users] [CFP MCSoC/GIM2P] Special Session on General Issues in Many-core Programming &amp; Programmability"</a>
<li><strong>In reply to:</strong> <a href="26471.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15-03-2015 11:34, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; If it's the same with multiple released versions of open MPI, it sounds like a problem with your compiler, I'm afraid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be honest, I didn't try to make a representative va args test program that uses it the same was OMPI does - I just whipped up a quick va args test. Meaning: OMPI may well be using va args differently than my example and be exposing a problem with va args in your compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you upgrade your compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<p>Hi there
<br>
<p>The user ... was not very sympathetic to the idea of upgrading the 
<br>
compiler, so I leaved it as it was.
<br>
<p>For the posterity, if anyone faces a similar problem, try the 
<br>
'./configure' option '--disable-io-romio'.
<br>
<p>Thank you for your time, Jeff.
<br>
<p>[ ]'s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26505.php">Mark Santcroos: "[OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26503.php">CUDENNEC Loic: "[OMPI users] [CFP MCSoC/GIM2P] Special Session on General Issues in Many-core Programming &amp; Programmability"</a>
<li><strong>In reply to:</strong> <a href="26471.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
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
