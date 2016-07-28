<?
$subject_val = "Re: [OMPI users] Configure failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 16:13:10 2015" -->
<!-- isoreceived="20150427201310" -->
<!-- sent="Mon, 27 Apr 2015 22:12:38 +0200" -->
<!-- isosent="20150427201238" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure" -->
<!-- id="553E9836.40807_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6765E6B5-A98A-415A-9345-5422B1A9CF47_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure failure<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-27 16:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/27/2015 8:54 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Marco --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you run into this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The m4 line in question that seems to be the problem is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      [AS_VAR_SET(type_var, [`cat conftestval`])]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does `cat foo` in cygwin result in a ^M in the resulting shell string?  If so, is there a standard way to get rid of it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>On cygwin it works fine:
<br>
<p>configure:33436: checking size of Fortran CHARACTER
<br>
configure:33504: gcc -std=gnu99 -DNDEBUG -ggdb -O2 -pipe 
<br>
-Wimplicit-function-dec
<br>
laration 
<br>
-fdebug-prefix-map=/pub/devel/openmpi/openmpi-1.8.5rc3-1.x86_64/build=/
<br>
usr/src/debug/openmpi-1.8.5rc3-1 
<br>
-fdebug-prefix-map=/pub/devel/openmpi/openmpi-1
<br>
.8.5rc3-1.x86_64/src/openmpi-1.8.5rc3=/usr/src/debug/openmpi-1.8.5rc3-1 
<br>
-finline
<br>
-functions -fno-strict-aliasing -fexceptions -I. -c conftest.c
<br>
configure:33511: $? = 0
<br>
configure:33521: gfortran -ggdb -O2 -pipe 
<br>
-fdebug-prefix-map=/pub/devel/openmpi/
<br>
openmpi-1.8.5rc3-1.x86_64/build=/usr/src/debug/openmpi-1.8.5rc3-1 
<br>
-fdebug-prefix
<br>
-map=/pub/devel/openmpi/openmpi-1.8.5rc3-1.x86_64/src/openmpi-1.8.5rc3=/usr/src/
<br>
debug/openmpi-1.8.5rc3-1 -fexceptions  conftestf.f90 conftest.o -o 
<br>
conftest  -fe
<br>
xceptions
<br>
configure:33528: $? = 0
<br>
configure:33572: ./conftest
<br>
configure:33579: $? = 0
<br>
configure:33595: result: 1
<br>
configure:33618: checking for C type corresponding to CHARACTER
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
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
