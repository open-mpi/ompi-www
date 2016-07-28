<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 27 06:18:54 2006" -->
<!-- isoreceived="20060227111854" -->
<!-- sent="Mon, 27 Feb 2006 06:18:45 -0500" -->
<!-- isosent="20060227111845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11" -->
<!-- id="41E782A0-5A90-4978-9957-32600A009B3C_at_open-mpi.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="43FF3FA2.6010207_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-27 06:18:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0716.php">Emanuel Ziegler: "[OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2006, at 12:17 PM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether f95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f90 files... none
</span><br>
<span class="quotelev1">&gt; checking whether f77 and f95 compilers are compatible... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not  
</span><br>
<span class="quotelev1">&gt; link compatible
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Disabling Fortran 90/95 bindings
</span><br>
<p>I see the problem here:
<br>
<p>configure:32389: f95  -o conftest conftestf90.o conftestf77.o
<br>
ld: fatal: file conftestf77.o: wrong ELF class: ELFCLASS64
<br>
<p>We do a test in configure to check that both compilers are link- 
<br>
compatible to ensure that we don't run into any unexpected problems  
<br>
later.  The problem here is that the f77 test file was compiled with  
<br>
the proper 64 bit flags, but the f90 test was not.  This comes from a  
<br>
typo in your openmpi-build-icare.csh script.  The following line:
<br>
<p>&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;setenv  
<br>
FCLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
<p>should be:
<br>
<p>setenv FCFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
<p>(i.e., &quot;FCFLAGS&quot;, not &quot;FCLAGS&quot;).
<br>
<p><span class="quotelev1">&gt; Then the make fails in orte/mca/pls/base with message
</span><br>
<span class="quotelev1">&gt; &quot;pls_base_context.c&quot;, line 48: undefined symbol: MAXHOSTNAMELEN
</span><br>
<p>Oops.  This is my fault from a recent commit.  We fixed this, and  
<br>
after doing some sample builds with Sun Studio 11 on Solaris/SPARC  
<br>
(this is not one of the compilers/platforms we test with on a regular  
<br>
basis yet) we found another pair of minor issues that have now also  
<br>
been fixed.  Specifically, we think that these were Solaris issues --  
<br>
not SPARC issues.
<br>
<p>I just put 1.0.2a9 on the web site with all these fixes.  Can you  
<br>
give it a whirl and let us know how it goes?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0716.php">Emanuel Ziegler: "[OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
