<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 17:15:28 2009" -->
<!-- isoreceived="20090120221528" -->
<!-- sent="Tue, 20 Jan 2009 17:15:22 -0500" -->
<!-- isosent="20090120221522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="05922EA5-0A5A-4BAA-9377-72045EB9DCF1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49764A59.4010009_at_ec-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 17:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
<li><strong>Previous message:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 20, 2009, at 5:04 PM, Olivier Marsden wrote:
<br>
<p><span class="quotelev1">&gt; f90 works correctly, when run simply as f90 or as /opt/sun/etc.../ 
</span><br>
<span class="quotelev1">&gt; f90, and binaries run properly (sun f90 appears
</span><br>
<span class="quotelev1">&gt; to give excellent performance, incidently!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the command  /opt/mpi_sun/bin/mpif90 --show-me
</span><br>
<span class="quotelev1">&gt; returns:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/marsden/sources/gcc_final/bin/gfortran -I/opt/mpi_gfortran4.4// 
</span><br>
<span class="quotelev1">&gt; include -pthread -I/opt/mpi_gfortran4.4//lib -L/opt/mpi_gfortran4.4// 
</span><br>
<span class="quotelev1">&gt; lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,-- 
</span><br>
<span class="quotelev1">&gt; export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<p>Interesting.
<br>
<p><span class="quotelev1">&gt; For what it's worth, and as you've probably guessed, I do have  
</span><br>
<span class="quotelev1">&gt; another version installation of openmpi.
</span><br>
<span class="quotelev1">&gt; In fact two, one with the system gcc/gfortran4.2, and one with a  
</span><br>
<span class="quotelev1">&gt; locally compiled gcc/gfortran4.4 .
</span><br>
<span class="quotelev1">&gt; These both work correctly.   The second installation seems to be  
</span><br>
<span class="quotelev1">&gt; interfering with my current attempt,
</span><br>
<span class="quotelev1">&gt; even though I exported all environment variables I can think of to  
</span><br>
<span class="quotelev1">&gt; point to sun compilers &amp; libraries first,
</span><br>
<span class="quotelev1">&gt; before configure &amp; compile.
</span><br>
<p>I have oodles of installations of OMPI on my machines; they don't  
<br>
interfere with each other.
<br>
<p>So let's see if we can figure out why yours don't seem to play well  
<br>
together:
<br>
<p>- Check that /opt/mpi_sun and /opt/mpi_gfortran* are actually distinct  
<br>
subdirectories; there's no hidden sym/hard links in there somewhere  
<br>
(where directories and/or individual files might accidentally be  
<br>
pointing to the other tree)
<br>
<p>- does &quot;env | grep mpi_&quot; show anything interesting / revealing?  What  
<br>
is your LD_LIBRARY_PATH set to?
<br>
<p>- what does ldd on the various .so files in /opt/mpi_sun/lib/ show?   
<br>
Are they linked against files in their own tree, or the other tree?
<br>
<p>- run &quot;mpif90 --showme&quot; through strace; does it show anything  
<br>
illuminating?
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
<li><strong>Next message:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
<li><strong>Previous message:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7742.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
