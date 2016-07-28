<?
$subject_val = "Re: [OMPI users] Problem specifying compiler (pgi)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 12:55:20 2009" -->
<!-- isoreceived="20090905165520" -->
<!-- sent="Sun, 6 Sep 2009 00:55:16 +0800" -->
<!-- isosent="20090905165516" -->
<!-- name="St Druid" -->
<!-- email="tq02ksu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem specifying compiler (pgi)" -->
<!-- id="1e36df0909050955v797cb253t5679b61546fd23ac_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4AA12CC3.9080105_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem specifying compiler (pgi)<br>
<strong>From:</strong> St Druid (<em>tq02ksu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-05 12:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
<li><strong>In reply to:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ben:
<br>
<p>On Fri, Sep 4, 2009 at 11:05 PM, Gus Correa&lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it a possible problem with your PATH?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very often Linux distributions (I suppose it is Linux, but maybe not)
</span><br>
<span class="quotelev1">&gt; have several MPI versions, plus others that may come with compilers,
</span><br>
<span class="quotelev1">&gt; etc, and their order on your path may not be what you want.
</span><br>
I agree the point, then you can export environment variables to
<br>
exchange compilers.
<br>
<p>OMPI_MPIFC=pgf90
<br>
<p>Good Luck!
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do &quot;which mpif90&quot; and &quot;which mpiexec&quot; tell?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried to use full path names to mpif90
</span><br>
<span class="quotelev1">&gt; *and* to mpiexec/mpirun ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /shared/ben/openmpi-1.3.3/bin/mpif90,
</span><br>
<span class="quotelev1">&gt; /shared/ben/openmpi-1.3.3/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben Mayer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using PGI 9.0-1 to compile OpenMPI 1.3.3. I use the following command
</span><br>
<span class="quotelev2">&gt;&gt; to configure OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/shared/ben/openmpi-1.3.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The PGI compilers are in the path. The make and make install complete
</span><br>
<span class="quotelev2">&gt;&gt; successfully. The problem that I am having is that why I actually run mpif90
</span><br>
<span class="quotelev2">&gt;&gt; (or any of other mpi* executables) it returns a message like &quot;gfortran: no
</span><br>
<span class="quotelev2">&gt;&gt; input files&quot;. When I compiler when those files it is calling gcc compilers.
</span><br>
<span class="quotelev2">&gt;&gt; There is also some vt* files (vtf90, etc) which appear to be for VampirTrace
</span><br>
<span class="quotelev2">&gt;&gt; integration. They point to the proper pgi compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what is going on here and how to fix it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ben Mayer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
B.W. Dong
State Key Laboratory of Superhard Materials,
Jilin University, Changchun, China. 130012
tq02ksu_at_[hidden] [ dbw07_at_[hidden] ]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
<li><strong>In reply to:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
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
