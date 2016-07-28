<?
$subject_val = "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 19:55:52 2015" -->
<!-- isoreceived="20150312235552" -->
<!-- sent="Thu, 12 Mar 2015 20:55:49 -0300" -->
<!-- isosent="20150312235549" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled" -->
<!-- id="55022785.7010405_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="12B5152F-5C77-4FED-BB1F-5DE98E7DE56D_at_cisco.com" -->
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
<strong>Date:</strong> 2015-03-12 19:55:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26463.php">Chris Paciorek: "[OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26470.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12-03-2015 20:44, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Gah; my mistake -- that va_end(fmt) should be va_end(list).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works for me with gcc 4.9.1 and icc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 15.0.2.164 Build 20150121
</span><br>
<p>Ah, ok.
<br>
<p>I've made the change, now it compiles and runs fine.
<br>
<p>[ ]'s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26463.php">Chris Paciorek: "[OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26470.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
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
