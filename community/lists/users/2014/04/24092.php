<?
$subject_val = "Re: [OMPI users] Fortran MPI module and gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 16:43:55 2014" -->
<!-- isoreceived="20140407204355" -->
<!-- sent="Mon, 7 Apr 2014 20:43:53 +0000" -->
<!-- isosent="20140407204353" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran MPI module and gfortran" -->
<!-- id="C475C750-1387-49A3-AFB9-CA6995CAE4E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="533865DD.7020106_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran MPI module and gfortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 16:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2014, at 2:43 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The mpi.mod file that is created from both the openmpi-1.7.4 and openmpi-1.8rc1 tarballs does not seem to be generating interface blocks for the Fortran API - whether the calls use choice buffers or not.
</span><br>
<p>Can you be a bit more specific -- are there *no* interface blocks in the mpi module? Or just less than expected?
<br>
<p>In 1.7.x (and 1.8), all versions of gfortran should be using the &quot;tkr&quot; implementation of the mpi module, which should only include MPI subroutines that have no choice buffers (e.g., MPI_INIT, MPI_FINALIZE, ... etc.).
<br>
<p><span class="quotelev1">&gt; I initially tried the default gfortran on my system - 4.7.2.  The configure commands are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt; export FC=gfortran
</span><br>
<span class="quotelev1">&gt; export F90=gfortran
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/wws/openmpi_gfortran  \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-fortran --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;    --enable-mpirun-prefix-by-default  \
</span><br>
<span class="quotelev1">&gt;    2&gt;&amp;1 | tee config.gfortran.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The relevant configure output reads:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; checking if building Fortran mpif.h bindings... yes
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler module include flag... -I
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !IBM* IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 0:real:!
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<p>That looks right.
<br>
<p><span class="quotelev1">&gt; I have also tried using a version of the 4.9 trunk that I generated from a March 18th, 2014 snapshot of the gcc trunk.  This latter compiler supports some of the TS 29 features.  (I set the latter by setting PATH to find the 4.9 compilers first.  I also set the F90 and FC environment variables to point to the 4.9 compiler.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/local/gcc-trunk/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt; export FC=/usr/local/gcc-trunk/bin/gfortran
</span><br>
<span class="quotelev1">&gt; export F90=/usr/local/gcc-trunk/bin/gfortran
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/wws/openmpi_gfortran49  \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-fortran --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;    --enable-mpirun-prefix-by-default  \
</span><br>
<span class="quotelev1">&gt;    2&gt;&amp;1 | tee config.gfortran49.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure output is identical to the 4.7 compiler.  Note that it did NOT recognize that gfortran now supports the !GCC$ ATTRIBUTE NO_ARG_CHECK directive, nor did it recognize that gfortran also accepts 'TYPE(*), DIMENSION(*)'.
</span><br>
<p>That's correct, too, but for a few obscure reasons:
<br>
<p>1. I think there's been some churn on the gfortran HEAD recently; I had an older version that worked (I'm afraid I don't know/remember the exact date of the checkout), but I was comparing notes with the MPICH guys doing the Fortran module stuff and they had a slightly newer gfortran checkout that *didn't* work.  Then I updated my gfortran checkout to be slightly newer than theirs, and it *did* work.
<br>
<p>I realize this is a a very fuzzy, anecdotal story with very few details, but the point is that I think there's been some instability at the gfortran development head (which is probably to be expected -- it's the development head, after all).
<br>
<p>2. TYPE(*), DIMENSION(*) is not sufficient for MPI choice buffers -- it doesn't allow scalars.  So we don't use it.
<br>
<p>3. There's currently a bug in OMPI since 1.7.5 that affects the new gfortran 4.9 usage that I haven't had a chance to fix yet (it isn't super-high-priority because gfortran 4.9 isn't released yet).  Hence, OMPI still doesn't use the gfortran 4.9 goodness so that it avoids this bug.  :-\  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/4157">https://svn.open-mpi.org/trac/ompi/ticket/4157</a> for more details.
<br>
<p><span class="quotelev1">&gt; I have also verified with strace that the proper mpi.mod file is being accessed when I am trying to USE the mpi module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not dug into the openmpi code yet.  Just wondering if this is a known problem before I start?  Or did I do something wrong during configure?
</span><br>
<p><p>If you're using subroutines like MPI_INIT and other non-choice-buffer interfaces, they should be there in mpi.mod.
<br>
<p>Let me know if they're not -- we can dig further.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24093.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24091.php">Noam Bernstein: "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
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
