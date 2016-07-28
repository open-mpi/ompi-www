<?
$subject_val = "[OMPI devel] Intel ifort / Libtool 2.x problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 11:16:36 2008" -->
<!-- isoreceived="20080521151636" -->
<!-- sent="Wed, 21 May 2008 11:16:16 -0400" -->
<!-- isosent="20080521151616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Intel ifort / Libtool 2.x problem" -->
<!-- id="0333261D-1402-4593-A1F3-94FF565508A8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Intel ifort / Libtool 2.x problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 11:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heads up: Tim switched over the trunk tarballs yesterday to use  
<br>
Libtool 2.2.4, Autoconf 2.62, and Automake 1.10.1.
<br>
<p>MTT shows that there is a problem with ifort and LT 2.2.4 and Fortran  
<br>
shared libraries on Linux -- LT seems to be dropping the necessary  
<br>
compiler flags to build Fortran shared libraries.  I did some more  
<br>
testing and have filed a bug report with our friendly neighborhood  
<br>
Libtool developers.  I'll file an OMPI trac ticket when my message  
<br>
arrives in the bug-libtool list web archives.
<br>
<p>For the time being, if you want to build with the Intel compilers, you  
<br>
must pass -fPIC in FCFLAGS:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=icc CXX=icpc FC=ifort F77=ifort FCFLAGS=-fPIC ...
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
<li><strong>Next message:</strong> <a href="3959.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
