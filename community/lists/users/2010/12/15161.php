<?
$subject_val = "Re: [OMPI users] Mac Ifort and gfortran together";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 21:28:31 2010" -->
<!-- isoreceived="20101216022831" -->
<!-- sent="Wed, 15 Dec 2010 21:28:23 -0500" -->
<!-- isosent="20101216022823" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac Ifort and gfortran together" -->
<!-- id="4D097947.2080504_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15739149-3AE4-4150-9807-504EA3F6C2AF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac Ifort and gfortran together<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 21:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/15/2010 8:22 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the ginormous delay in replying here; I blame SC'10, Thanksgiving, and the MPI Forum meeting last week...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 2:12 PM, David Robertson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm noticing a strange problem with Open MPI 1.4.2 on Mac OS X 10.6. We use both Intel Ifort 11.1 and gfortran 4.3 on the same machine and switch between them to test and debug code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had runtime problems when I compiled openmpi in my usual way of no shared libraries so I switched to shared and it runs now.
</span><br>
<span class="quotelev1">&gt; What problems did you have?  OMPI should work fine when compiled statically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, in order for it to work with ifort I ended up needing to add the location of my intel compiled Open MPI libraries (/opt/intelsoft/openmpi/lib) to my DYLD_LIBRARY_PATH environment variable to to get codes to compile and/or run with ifort.
</span><br>
<span class="quotelev1">&gt; Is this what Intel recommends for anything compiled with ifort on OS X, or is this unique to OMPI-compiled MPI applications?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that adding /opt/intelsoft/openmpi/lib to DYLD_LIBRARY_PATH broke my Open MPI for gfortran. Now when I try to compile with mpif90 for gfortran it thinks it's actually trying to compile with ifort still. As soon as I take the above path out of DYLD_LIBRARY_PATH everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, when I run ompi_info everything looks right except prefix. It says /opt/intelsoft/openmpi rather than /opt/gfortransoft/openmpi like it should. It should be noted that having /opt/intelsoft/openmpi in LD_LIBRARY_PATH does not produce the same effect.
</span><br>
<span class="quotelev1">&gt; I'm not quite clear on your setup, but it *sounds* like you're somehow mixing up 2 different installations of OMPI -- one in /opt/intelsoft and the other in /opt/gfortransoft.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that you're using the &quot;right&quot; mpif77 (and friends) when you intend to, and so on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well, yes, he has to use the MPI Fortran libraries compiled by ifort 
<br>
with his ifort application build, and the ones compiled by gfortran with 
<br>
a gfortran application build.  There's nothing &quot;strange&quot; about it; the 
<br>
PATH for mpif90 and DYLD_LIBRARY_PATH for the Fortran library have to be 
<br>
set correctly for each case.  If linking statically with the MPI Fortran 
<br>
library, you still must choose the one built with the compatible 
<br>
Fortran.  gfortran and ifort can share C run-time libraries but not the 
<br>
Fortran ones.  It's the same as on linux (and, likely, Windows).
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
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
