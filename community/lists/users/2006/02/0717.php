<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 27 08:51:12 2006" -->
<!-- isoreceived="20060227135112" -->
<!-- sent="Mon, 27 Feb 2006 14:50:56 +0100" -->
<!-- isosent="20060227135056" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="440303C0.2060103_at_obs.ujf-grenoble.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="41E782A0-5A90-4978-9957-32600A009B3C_at_open-mpi.org" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.Valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-27 08:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0716.php">Emanuel Ziegler: "[OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
<p>Things are better with 1.0.2a9. However open-mpi is not functional as yet.
<br>
<p>- My new build script:
<br>
#! /bin/tcsh -v
<br>
setenv CC          &quot;cc&quot;
<br>
setenv CXX         &quot;CC&quot;
<br>
setenv F77         &quot;f77&quot;
<br>
setenv FC          &quot;f95&quot;
<br>
setenv CFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv CXXFLAGS    &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv FCFLAGS     &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv FFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv LD          &quot;ld -64&quot;
<br>
setenv LDFLAGS     &quot;-xtarget=opteron -xarch=amd64&quot;
<br>
setenv CXXLDFLAGS  &quot;-xtarget=opteron -xarch=amd64&quot;
<br>
./configure --prefix=/users/valiron/lib/openmpi-1.0.2a9
<br>
gmake
<br>
# gmake install
<br>
<p>- Configure went through with no errors
<br>
<p>- Make completed nicely, excepted compiling ompi/mpi/f90/mpi.f90 which 
<br>
took nearly half an hour to complete. I suspect the optimization flags 
<br>
in FFLAGS are not important for applications, and I could use -O0 or -O1 
<br>
instead.
<br>
<p>- I could compile/link a small piece of code (rotate.f)
<br>
valiron_at_icare ~/config &gt; mpif77 -xtarget=opteron -xarch=amd64 rotate.f
<br>
NOTICE: Invoking /opt/Studio11/SUNWspro/bin/f90 -f77 -ftrap=%none 
<br>
-I/users/valiron/lib/openmpi-1.0.2a9/include 
<br>
-I/users/valiron/lib/openmpi-1.0.2a9/include/openmpi/ompi 
<br>
-xtarget=opteron -xarch=amd64 rotate.f 
<br>
-L/users/valiron/lib/openmpi-1.0.2a9/lib -lmpi -lorte -lopal -lnsl 
<br>
-lsocket -lthread -lm -lnsl -lsocket -lthread -ldl
<br>
rotate.f:
<br>
&nbsp;MAIN rotate:
<br>
<p>- However the resulting executable fails to launch:
<br>
valiron_at_icare ~/config &gt; mpirun --prefix 
<br>
/users/valiron/lib/openmpi-1.0.2a9 -np 2 a.out
<br>
Segmentation fault (core dumped)
<br>
<p>- The problem seems buried into open-mpi:
<br>
valiron_at_icare ~/config &gt; pstack core
<br>
core 'core' of 27996:   mpirun --prefix 
<br>
/users/valiron/lib/openmpi-1.0.2a9 -np 2 a.out
<br>
&nbsp;fffffd7fff05dfe0 strlen () + 20
<br>
&nbsp;fffffd7fff0b6ab3 vsprintf () + 33
<br>
&nbsp;fffffd7fff2e4211 opal_vasprintf () + 41
<br>
&nbsp;fffffd7fff2e41c8 opal_asprintf () + 98
<br>
&nbsp;00000000004098a3 orterun () + 63
<br>
&nbsp;0000000000407214 main () + 34
<br>
&nbsp;000000000040708c ???????? ()
<br>
<p>What additional info could help to track the problem ?
<br>
Pierre.
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 24, 2006, at 12:17 PM, Pierre Valiron wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether f95 accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran flag to compile .f90 files... none
</span><br>
<span class="quotelev2">&gt;&gt; checking whether f77 and f95 compilers are compatible... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not  
</span><br>
<span class="quotelev2">&gt;&gt; link compatible
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Disabling Fortran 90/95 bindings
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the problem here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:32389: f95  -o conftest conftestf90.o conftestf77.o
</span><br>
<span class="quotelev1">&gt; ld: fatal: file conftestf77.o: wrong ELF class: ELFCLASS64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do a test in configure to check that both compilers are link- 
</span><br>
<span class="quotelev1">&gt; compatible to ensure that we don't run into any unexpected problems  
</span><br>
<span class="quotelev1">&gt; later.  The problem here is that the f77 test file was compiled with  
</span><br>
<span class="quotelev1">&gt; the proper 64 bit flags, but the f90 test was not.  This comes from a  
</span><br>
<span class="quotelev1">&gt; typo in your openmpi-build-icare.csh script.  The following line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;setenv  
</span><br>
<span class="quotelev1">&gt; FCLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv FCFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (i.e., &quot;FCFLAGS&quot;, not &quot;FCLAGS&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Then the make fails in orte/mca/pls/base with message
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_base_context.c&quot;, line 48: undefined symbol: MAXHOSTNAMELEN
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops.  This is my fault from a recent commit.  We fixed this, and  
</span><br>
<span class="quotelev1">&gt; after doing some sample builds with Sun Studio 11 on Solaris/SPARC  
</span><br>
<span class="quotelev1">&gt; (this is not one of the compilers/platforms we test with on a regular  
</span><br>
<span class="quotelev1">&gt; basis yet) we found another pair of minor issues that have now also  
</span><br>
<span class="quotelev1">&gt; been fixed.  Specifically, we think that these were Solaris issues --  
</span><br>
<span class="quotelev1">&gt; not SPARC issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just put 1.0.2a9 on the web site with all these fixes.  Can you  
</span><br>
<span class="quotelev1">&gt; give it a whirl and let us know how it goes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Soutenez le mouvement SAUVONS LA RECHERCHE :
<a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
       _/_/_/_/    _/       _/       Dr. Pierre VALIRON
      _/     _/   _/      _/   Laboratoire d'Astrophysique
     _/     _/   _/     _/    Observatoire de Grenoble / UJF
    _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
   _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
  _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
 _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
_/          _/_/        

</pre>
<p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0717/rotate.f.gz">rotate.f.gz</a>
</ul>
<!-- attachment="rotate.f.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0716.php">Emanuel Ziegler: "[OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
