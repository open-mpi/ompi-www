<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 11:17:26 2009" -->
<!-- isoreceived="20090414151726" -->
<!-- sent="Tue, 14 Apr 2009 11:17:16 -0400" -->
<!-- isosent="20090414151716" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="49E4A8FC.7000600_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49E4A37C.6080602_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 11:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8905.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8908.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8908.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8910.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Orion, Prentice, list
<br>
<p>I had a related problem recently,
<br>
building OpenMPI with gcc, g++ and pgf90 8.0-4 on CentOS 5.2.
<br>
Configure would complete, but not make.
<br>
<p>See this thread for a workaround:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">http://www.open-mpi.org/community/lists/users/2009/04/8724.php</a>
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Orion,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no trouble getting thread support during configure with PGI 8.0-3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm mixing the pgf and gcc compilers which causes the trouble.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the config.log entry for the F77 test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:65969: checking if F77 compiler and POSIX threads work as is
</span><br>
<span class="quotelev1">&gt; configure:66066: gcc -DNDEBUG -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64 
</span><br>
<span class="quotelev1">&gt; -mtune=generic -fPIC -finline-functions -fno-strict-aliasing -I. -c 
</span><br>
<span class="quotelev1">&gt; conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'pthreadtest_':
</span><br>
<span class="quotelev1">&gt; conftest.c:12: warning: null argument where non-null required (argument 3)
</span><br>
<span class="quotelev1">&gt; conftest.c:14: warning: null argument where non-null required (argument 1)
</span><br>
<span class="quotelev1">&gt; conftest.c:16: warning: null argument where non-null required (argument 1)
</span><br>
<span class="quotelev1">&gt; conftest.c:16: warning: null argument where non-null required (argument 3)
</span><br>
<span class="quotelev1">&gt; configure:66073: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:66083: pgf95 -fastsse -fPIC conftestf.f conftest.o -o conftest 
</span><br>
<span class="quotelev1">&gt; -Wl,-z,noexecstack -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; conftestf.f:
</span><br>
<span class="quotelev1">&gt; conftest.o:(.data.DW.ref.__gcc_personality_v0[DW.ref.__gcc_personality_v0]+0x0): 
</span><br>
<span class="quotelev1">&gt; undefined reference to `__gcc_personality_v0'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like I need link to -lgcc_eh some how.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8905.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8908.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8908.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8910.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
