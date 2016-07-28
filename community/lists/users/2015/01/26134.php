<?
$subject_val = "[OMPI users] -fgnu89-inline needed to avoid &quot;multiple definition of `lstat64'&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 16:29:28 2015" -->
<!-- isoreceived="20150108212928" -->
<!-- sent="Thu, 08 Jan 2015 15:29:02 -0600" -->
<!-- isosent="20150108212902" -->
<!-- name="Jesse Ziser" -->
<!-- email="ziser_at_[hidden]" -->
<!-- subject="[OMPI users] -fgnu89-inline needed to avoid &amp;quot;multiple definition of `lstat64'&amp;quot; error" -->
<!-- id="54AEF69E.5020907_at_arlut.utexas.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] -fgnu89-inline needed to avoid &quot;multiple definition of `lstat64'&quot; error<br>
<strong>From:</strong> Jesse Ziser (<em>ziser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 16:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Previous message:</strong> <a href="26133.php">VanEss.Michael: "[OMPI users] libpsm_infinipath issues?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When building OpenMPI 1.8.4 on Linux using gcc 4.8.2, the build fails for me 
<br>
with errors like:
<br>
<p>romio/.libs/libromio_dist.a(delete.o): In function `lstat64':
<br>
delete.c:(.text+0x0): multiple definition of `lstat64'
<br>
romio/.libs/libromio_dist.a(close.o):close.c:(.text+0x0): first defined here
<br>
romio/.libs/libromio_dist.a(fsync.o): In function `lstat64':
<br>
fsync.c:(.text+0x0): multiple definition of `lstat64'
<br>
romio/.libs/libromio_dist.a(close.o):close.c:(.text+0x0): first defined here
<br>
romio/.libs/libromio_dist.a(get_amode.o): In function `lstat64':
<br>
get_amode.c:(.text+0x0): multiple definition of `lstat64'
<br>
romio/.libs/libromio_dist.a(close.o):close.c:(.text+0x0): first defined here
<br>
<p>and so on for a bunch more files.  I think I (vaguely) understand the problem. 
<br>
&nbsp;&nbsp;I'm not sure whether a &quot;fix&quot; is possible or appropriate, but I'm reporting it 
<br>
anyway since I've tracked it down.
<br>
<p>It builds perfectly fine with gcc 4.2.0.  It also builds perfectly fine with 
<br>
gcc 4.8.2 if I supply CFLAGS=-fgnu89-inline on the ./configure command line 
<br>
(and that's our current workaround).  I hope this is safe to do.  The reason I 
<br>
tried using this flag was because of the following vaguely related-looking 
<br>
pages Google was kind enough to show me:
<br>
<p><a href="http://lifecs.likai.org/2009/06/multiple-definition-of-extern-inline.html">http://lifecs.likai.org/2009/06/multiple-definition-of-extern-inline.html</a>
<br>
<a href="https://gcc.gnu.org/gcc-4.3/porting_to.html">https://gcc.gnu.org/gcc-4.3/porting_to.html</a>
<br>
<p>These pages made it sound like the &quot;multiple definition&quot; errors are because of 
<br>
&quot;extern inline&quot; declarations being used somewhere and the fact that OpenMPI 
<br>
apparently uses -std=c99.  -fgnu89-inline simply requests the old pre-gcc-4.3 
<br>
GNU-specific interpretation of &quot;extern inline&quot;, instead of the c99 
<br>
interpretation, so the lstat64() function doesn't wind up in your object files.
<br>
<p>My best guess is that it has to do with the fact that we're using a modern 
<br>
compiler, but on a relatively old system (Red Hat Enterprise Linux 5.11) so 
<br>
lstat64() is being declared extern inline because the old system include files 
<br>
don't expect the new gcc behavior.  However, we haven't seen this before when 
<br>
building other packages, just OpenMPI.
<br>
<p>Perhaps there is a way to detect this and include the flag automatically.  I 
<br>
noticed one other message in the archives from someone else having this 
<br>
problem, but it was a while back and there were no replies.  So perhaps this 
<br>
would be helpful to others.
<br>
<p>Just to be thorough, I've attached the configure and make output for the case 
<br>
that triggers the issue.  I'm configuring with:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --prefix=/opt/depot/openmpi/1.8.4 CC=gcc CXX=g++ FC=gfortran
<br>
<p>Thank you,
<br>
<p>Jesse Ziser
<br>
Applied Research Laboratories:
<br>
The University of Texas at Austin
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26134/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26134/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Previous message:</strong> <a href="26133.php">VanEss.Michael: "[OMPI users] libpsm_infinipath issues?"</a>
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
