<?
$subject_val = "Re: [OMPI users] Mac Ifort and gfortran together";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 20:22:31 2010" -->
<!-- isoreceived="20101216012231" -->
<!-- sent="Wed, 15 Dec 2010 20:22:20 -0500" -->
<!-- isosent="20101216012220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac Ifort and gfortran together" -->
<!-- id="15739149-3AE4-4150-9807-504EA3F6C2AF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF3FB24.40907_at_marine.rutgers.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 20:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14912.php">David Robertson: "[OMPI users] Mac Ifort and gfortran together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Reply:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Reply:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the ginormous delay in replying here; I blame SC'10, Thanksgiving, and the MPI Forum meeting last week...
<br>
<p><p>On Nov 29, 2010, at 2:12 PM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; I'm noticing a strange problem with Open MPI 1.4.2 on Mac OS X 10.6. We use both Intel Ifort 11.1 and gfortran 4.3 on the same machine and switch between them to test and debug code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had runtime problems when I compiled openmpi in my usual way of no shared libraries so I switched to shared and it runs now.
</span><br>
<p>What problems did you have?  OMPI should work fine when compiled statically.
<br>
<p><span class="quotelev1">&gt; However, in order for it to work with ifort I ended up needing to add the location of my intel compiled Open MPI libraries (/opt/intelsoft/openmpi/lib) to my DYLD_LIBRARY_PATH environment variable to to get codes to compile and/or run with ifort.
</span><br>
<p>Is this what Intel recommends for anything compiled with ifort on OS X, or is this unique to OMPI-compiled MPI applications?
<br>
<p><span class="quotelev1">&gt; The problem is that adding /opt/intelsoft/openmpi/lib to DYLD_LIBRARY_PATH broke my Open MPI for gfortran. Now when I try to compile with mpif90 for gfortran it thinks it's actually trying to compile with ifort still. As soon as I take the above path out of DYLD_LIBRARY_PATH everything works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, when I run ompi_info everything looks right except prefix. It says /opt/intelsoft/openmpi rather than /opt/gfortransoft/openmpi like it should. It should be noted that having /opt/intelsoft/openmpi in LD_LIBRARY_PATH does not produce the same effect.
</span><br>
<p>I'm not quite clear on your setup, but it *sounds* like you're somehow mixing up 2 different installations of OMPI -- one in /opt/intelsoft and the other in /opt/gfortransoft.
<br>
<p>Can you verify that you're using the &quot;right&quot; mpif77 (and friends) when you intend to, and so on?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14912.php">David Robertson: "[OMPI users] Mac Ifort and gfortran together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Reply:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Reply:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
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
