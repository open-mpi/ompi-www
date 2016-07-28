<?
$subject_val = "Re: [OMPI users] GCC 4.9 and MPI_F08?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 05:52:03 2014" -->
<!-- isoreceived="20140814095203" -->
<!-- sent="Thu, 14 Aug 2014 11:52:00 +0200 (CEST)" -->
<!-- isosent="20140814095200" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC 4.9 and MPI_F08?" -->
<!-- id="477460400.925115.1408009920581.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="532C594B7920A549A2A91CB4312CC57640E3DE0C_at_ECS-EXG-P-MB01.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] GCC 4.9 and MPI_F08?<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 05:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25014.php">Maxime Boissonneault: "[OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25012.php">madhurima madhunapanthula: "[OMPI users] how MPI_Get can work with multiple memory regions attached to a window via MPI_Win_attach"</a>
<li><strong>In reply to:</strong> <a href="25009.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just gave gcc 4.9.0 a try and the mpi_f09 module is there but it seems to miss some functions:
<br>
<p>mpifort test.f90
<br>
/tmp/ccHCEbXC.o: In function `MAIN__':
<br>
test.f90:(.text+0x35a): undefined reference to `mpi_win_lock_all_'
<br>
test.f90:(.text+0x373): undefined reference to `mpi_win_lock_all_'
<br>
test.f90:(.text+0x964): undefined reference to `mpi_win_sync_'
<br>
test.f90:(.text+0x978): undefined reference to `mpi_win_sync_'
<br>
test.f90:(.text+0xb20): undefined reference to `mpi_win_sync_'
<br>
test.f90:(.text+0xb34): undefined reference to `mpi_win_sync_'
<br>
test.f90:(.text+0x1772): undefined reference to `mpi_win_unlock_all_'
<br>
test.f90:(.text+0x1786): undefined reference to `mpi_win_unlock_all_'
<br>
collect2: error: ld returned 1 exit status
<br>
<p><p>Here also some configure log content:
<br>
<p>OMPI_BUILD_FORTRAN_USEMPI_IGNORE_TKR_BINDINGS_FALSE='#'
<br>
OMPI_BUILD_FORTRAN_USEMPI_IGNORE_TKR_BINDINGS_TRUE=''
<br>
OMPI_BUILD_FORTRAN_USEMPI_TKR_BINDINGS_FALSE=''
<br>
OMPI_BUILD_FORTRAN_USEMPI_TKR_BINDINGS_TRUE='#'
<br>
OMPI_FORTRAN_IGNORE_TKR_PREDECL='!GCC$ ATTRIBUTES NO_ARG_CHECK ::'
<br>
OMPI_FORTRAN_IGNORE_TKR_TYPE='type(*), dimension(*)'
<br>
OMPI_FORTRAN_USEMPI_DIR='mpi/fortran/use-mpi-ignore-tkr'
<br>
OMPI_FORTRAN_USEMPI_LIB='-lmpi_usempi_ignore_tkr'
<br>
libmpi_usempi_ignore_tkr_so_version=''
<br>
libmpi_usempi_tkr_so_version='4:2:3'
<br>
#define OMPI_FORTRAN_IGNORE_TKR_PREDECL &quot;!GCC$ ATTRIBUTES NO_ARG_CHECK ::&quot;
<br>
#define OMPI_FORTRAN_IGNORE_TKR_TYPE 
<br>
#define OMPI_FORTRAN_HAVE_IGNORE_TKR 1
<br>
<p>configure:10267: result: yes (mpif.h, mpi and mpi_f08 modules)
<br>
configure:10417: checking which 'use mpi_f08' implementation to use
<br>
configure:58804: checking which mpi_f08 implementation to build
<br>
configure:58845: checking if building Fortran 'use mpi_f08' bindings
<br>
OMPI_F08_SUFFIX='_f08'
<br>
<p><p>Regards
<br>
Christoph Niethammer
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
----- Original Message -----
From: &quot;Marcus G Daniels&quot; &lt;mdaniels_at_[hidden]&gt;
To: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;, &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
Sent: Thursday, August 14, 2014 8:13:27 AM
Subject: Re: [OMPI users] GCC 4.9 and MPI_F08?
Hi Jeff,
Works for me!    
(With mpi_f08, GCC 4.9.1 absolutely insists on getting the finer details right on things like MPI_User_function types for MPI_Op_create.  So I'll assume the rest of the type checking is just as good, and be glad I took that minor detour..)
Thanks,
Marcus
-----Original Message-----
From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]] 
Sent: Wednesday, August 13, 2014 10:00 AM
To: Open MPI User's List
Cc: Daniels, Marcus G
Subject: Re: [OMPI users] GCC 4.9 and MPI_F08?
Marcus --
The fix was applied yesterday to the v1.8 branch.  Would you mind testing the v1.8 nightly tarball from last night, just to make sure it works for you?
    <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
On Aug 12, 2014, at 2:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; @#$%@#$%#@$%
&gt; 
&gt; I was very confused by this bug report, because in my mind, a) this functionality is on the SVN trunk, and b) we had moved the gcc functionality to the v1.8 branch long ago.
&gt; 
&gt; I just checked the SVN/Trac records:
&gt; 
&gt; 1. I'm right: this functionality *is* on the trunk.  If you build the OMPI SVN trunk with gcc/gfortran 4.9, you get the ignore TKR &quot;mpi&quot; module and the mpi_f08 module.  I just tried it myself to verify this.
&gt; 
&gt; 2. I'm (sorta) right: we CMR'ed the &quot;add the GCC ignore TKR functionality&quot; in <a href="https://svn.open-mpi.org/trac/ompi/ticket/4058">https://svn.open-mpi.org/trac/ompi/ticket/4058</a> for v1.7.5, but it looks like that CMR was botched somehow and the functionality wasn't applied (!) ...even though the log message says it was.  Sad panda.
&gt; 
&gt; I'll open a ticket to track this.  We'll have to see how the RM feels about putting this in at the last second; it may or may not make the cutoff for 1.8.2 (the freeze has already occurred).
&gt; 
&gt; 
&gt; 
&gt; On Aug 12, 2014, at 12:32 PM, Daniels, Marcus G &lt;mdaniels_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Hi Jeff,
&gt;&gt; 
&gt;&gt; On Tue, 2014-08-12 at 16:18 +0000, Jeff Squyres (jsquyres) wrote:
&gt;&gt;&gt; Can you send the output from configure, the config.log file, and the ompi_config.h file?
&gt;&gt; 
&gt;&gt; Attached.  configure.log comes from
&gt;&gt; 
&gt;&gt; (./configure --prefix=/usr/projects/eap/tools/openmpi/1.8.2rc3  2&gt;&amp;1) 
&gt;&gt; &gt; configure.log
&gt;&gt; 
&gt;&gt; Seems fishy that there is no &quot;checking for Fortran compiler support of !
&gt;&gt; GCC$ ATTRIBUTES NO_ARG_CHECK&quot;.
&gt;&gt; 
&gt;&gt; checking for Fortran compiler module include flag... -I checking 
&gt;&gt; Fortran compiler ignore TKR syntax... not cached; checking variants 
&gt;&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no 
&gt;&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES 
&gt;&gt; NO_ARG_CHECK... no checking for Fortran compiler support of !$PRAGMA 
&gt;&gt; IGNORE_TKR... no checking for Fortran compiler support of !DIR$ 
&gt;&gt; IGNORE_TKR... no checking for Fortran compiler support of !IBM* 
&gt;&gt; IGNORE_TKR... no checking Fortran compiler ignore TKR syntax... 
&gt;&gt; 0:real:!
&gt;&gt; checking if Fortran compiler supports ISO_C_BINDING... yes checking 
&gt;&gt; if building Fortran 'use mpi' bindings... yes checking if building 
&gt;&gt; Fortran 'use mpi_f08' bindings... no
&gt;&gt; 
&gt;&gt; Marcus
&gt;&gt; 
&gt;&gt; 
&gt;&gt; &lt;openmpi-1.8.2rc3-config.tar.gz&gt;
&gt; 
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: 
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: 
&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25004.php">http://www.open-mpi.org/community/lists/users/2014/08/25004.php</a>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25009.php">http://www.open-mpi.org/community/lists/users/2014/08/25009.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25014.php">Maxime Boissonneault: "[OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25012.php">madhurima madhunapanthula: "[OMPI users] how MPI_Get can work with multiple memory regions attached to a window via MPI_Win_attach"</a>
<li><strong>In reply to:</strong> <a href="25009.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
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
