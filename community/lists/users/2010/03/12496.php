<?
$subject_val = "Re: [OMPI users] OPEN_MPI macro for mpif.h?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 09:09:23 2010" -->
<!-- isoreceived="20100331130923" -->
<!-- sent="Wed, 31 Mar 2010 09:09:18 -0400" -->
<!-- isosent="20100331130918" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPEN_MPI macro for mpif.h?" -->
<!-- id="F50E7C1D-271C-4CD7-AD4A-DAF6F8CDD235_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201003292210.02544.bernreuther_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPEN_MPI macro for mpif.h?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 09:09:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12495.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12465.php">Martin Bernreuther: "[OMPI users] OPEN_MPI macro for mpif.h?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2010, at 4:10 PM, Martin Bernreuther wrote:
<br>
<p><span class="quotelev1">&gt; looking at the Open MPI mpi.h include file there's a preprocessor macro
</span><br>
<span class="quotelev1">&gt; OPEN_MPI defined, as well as e.g. OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION
</span><br>
<span class="quotelev1">&gt; and OMPI_RELEASE_VERSION. version.h e.g. also defines OMPI_VERSION
</span><br>
<span class="quotelev1">&gt; This seems to be missing in mpif.h and therefore something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; #ifdef OPEN_MPI
</span><br>
<span class="quotelev1">&gt;        write( *, '(&quot;MPI library: OpenMPI&quot;,I2,&quot;.&quot;,I2,&quot;.&quot;,I2)' ) &amp;
</span><br>
<span class="quotelev1">&gt; &amp;            OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION, OMPI_RELEASE_VERSION
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; doesn't work for a FORTRAN openmpi program.
</span><br>
<p>Correct.  The reason we didn't do this is because not all Fortran compilers will submit your code through a preprocessor.  For example:
<br>
<p>-----
<br>
shell% cat bogus.h
<br>
#define MY_VALUE 1
<br>
shell% cat bogus.f90
<br>
program main
<br>
#include &quot;bogus.h&quot;
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;integer a
<br>
&nbsp;&nbsp;a = MY_VALUE
<br>
end program
<br>
shell% ln -s bogus.f90 bogus-preproc.F90
<br>
shell% gfortran bogus.f90
<br>
Warning: bogus.f90:2: Illegal preprocessor directive
<br>
bogus.f90:5.14:
<br>
<p>&nbsp;&nbsp;a = MY_VALUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Symbol 'my_value' at (1) has no IMPLICIT type
<br>
shell% gfortran bogus-preproc.F90
<br>
shell% 
<br>
-----
<br>
<p>That's one example.  I used gfortran here; I learned during the process that include'd files are not preprocessed by gfortran, but #include'd files are (regardless of the filename of the main source file).  The moral of the story here is that it's a losing game for our wrappers to try and keep up with what file extensions and/or compiler switches enable preprocessing, and trying to determine whether mpif.h was include'd or #include'd.  :-(
<br>
<p>That being said, I have a [very] dim recollection of adding some -D's to the wrapper compiler command line so that -DOPEN_MPI would be defined and we wouldn't have to worry about all the .f90 vs. .F90 / include vs. #include muckety muck...  I don't remember what happened with that, though...
<br>
<p>Are you enough of a fortran person to know whether -D is pretty universally supported among Fortran compilers?  It wouldn't be too hard to add a configure test to see if -D is supported.  Would you have any time/interest to create a patch for this, perchance?
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
<li><strong>Next message:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12495.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12465.php">Martin Bernreuther: "[OMPI users] OPEN_MPI macro for mpif.h?"</a>
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
