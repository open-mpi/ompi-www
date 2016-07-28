<?
$subject_val = "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS nothonored when checking whether gfortran and gfortran compilersare compatible: bug ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 22:52:32 2008" -->
<!-- isoreceived="20080828025232" -->
<!-- sent="Wed, 27 Aug 2008 22:53:43 -0400" -->
<!-- isosent="20080828025343" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS nothonored when checking whether gfortran and gfortran compilersare compatible: bug ?" -->
<!-- id="531893A968B34D40B36C7A6445BC828A01A27CA4_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="97BFB017-E49F-4E44-A5BD-001B5A4B4643_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS nothonored when checking whether gfortran and gfortran compilersare compatible: bug ?<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 22:53:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>In reply to:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
&nbsp;
<br>
I thought that the problem mentioned in the NEWS was only for Cray systems. I just checked ticket #1189 and this is exactly my case :-)
<br>
&nbsp;
<br>
Thanks a lot !
<br>
&nbsp;
<br>
Mehdi
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----Original Message----- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden] on behalf of Jeff Squyres 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wed 27/08/2008 18:00 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cc: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS nothonored when checking whether gfortran and gfortran compilersare compatible: bug ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry for the delay in replying.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Looks like this was fixed already in OMPI 1.2.5.  So if you upgrade to 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2.6, you should be good.  1.2.7 should be out Real Soon Now, too.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Aug 21, 2008, at 8:54 AM, Mehdi Bozzo-Rey wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">	&gt; Hello,
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Looks like a bug; did I miss something ?
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; My environment:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ###################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; [mbozzore_at_tyan04 openmpi-1.2.4]$ echo $CFLAGS
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; -I/home/mbozzore/pvfs-2.6.3/include
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; [mbozzore_at_tyan04 openmpi-1.2.4]$ echo $FFLAGS
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; [mbozzore_at_tyan04 openmpi-1.2.4]$ echo $LIBS
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; -lpvfs2 -lpthread
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; [mbozzore_at_tyan04 openmpi-1.2.4]$ echo $LDFLAGS
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; -L/export/pvfs-2.6.3/lib/
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ###################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Open MPI version : 1.2.4; same behaviour expected with 1.2.6
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; arguments given to configure:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ./configure --prefix=/export/ompi-124-pvfs263 --with-io-romio-
</span><br>
<span class="quotelev1">	&gt; flags=--with-file-system=pvfs+nfs
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; config.log:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ####################################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36703: checking if Fortran compiler works
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36759: gfortran -o conftest  -L/export/pvfs-2.6.3/lib/  
</span><br>
<span class="quotelev1">	&gt; conftest.f -lpvfs2 -lpthread &gt;&amp;5
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36762: $? = 0
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36768: ./conftest
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36771: $? = 0
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36793: result: yes
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36819: checking whether gfortran and gfortran compilers 
</span><br>
<span class="quotelev1">	&gt; are compatible
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36844: gfortran   -c conftestf90.f
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36851: $? = 0
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36861: gfortran  -c conftestf77.f
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36868: $? = 0
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36878: gfortran  -o conftest conftestf90.o conftestf77.o -
</span><br>
<span class="quotelev1">	&gt; lpvfs2 -lpthread
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; /usr/bin/ld: cannot find -lpvfs2
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36885: $? = 1
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36912: here is the F77 program:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;         subroutine Conf1_test()
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;         end
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36925: here is the F90 program:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;         program main
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;         call Conf1_test()
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;         end
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36950: result: no
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36952: WARNING: *** Fortran 77 and Fortran 90 compilers 
</span><br>
<span class="quotelev1">	&gt; are not link compatible
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36954: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36994: checking for extra arguments to build a shard library
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:37017: result: none needed
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:37416: checking if Fortran 90 compiler supports LOGICAL
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:37418: result: skipped
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:37780: checking if Fortran 90 compiler supports INTEGER
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:37782: result: skipped
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ####################################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; With an updated configure script:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ####################################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; [mbozzore_at_tyan04 openmpi-1.2.4]$ diff -U4 configure.orig configure.new
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; --- configure.orig      2008-08-21 09:49:01.000000000 -0400
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; +++ configure.new       2008-08-21 11:10:31.000000000 -0400
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; @@ -36874,10 +36874,10 @@
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;  # 1 is the command
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;  # 2 is actions to do if success
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;  # 3 is actions to do if fail
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; -echo &quot;configure:36878: $OMPI_F90 $FCFLAGS -o conftest conftestf90.o 
</span><br>
<span class="quotelev1">	&gt; conftestf77.o $LIBS&quot; &gt;&amp;5
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; -$OMPI_F90 $FCFLAGS -o conftest conftestf90.o conftestf77.o $LIBS 
</span><br>
<span class="quotelev1">	&gt; 1&gt;&amp;5 2&gt;&amp;1
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; +#echo &quot;NEW configure:36878: $OMPI_F90 $FCFLAGS $LDFLAGS -o conftest 
</span><br>
<span class="quotelev1">	&gt; conftestf90.o conftestf77.o $LIBS&quot; &gt;&amp;5
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; +$OMPI_F90 $FCFLAGS $LDFLAGS -o conftest conftestf90.o conftestf77.o 
</span><br>
<span class="quotelev1">	&gt; $LIBS 1&gt;&amp;5 2&gt;&amp;1
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;  ompi_status=$?
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;  # 1 is the message
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;  # 2 is whether to put a prefix or not
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ####################################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; config.log:
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ####################################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; NEW configure:36878: gfortran  -L/export/pvfs-2.6.3/lib/ -o conftest 
</span><br>
<span class="quotelev1">	&gt; conftestf90.o conftestf77.o -lpvfs2 -lpthread
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36885: $? = 0
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; configure:36956: result: yes
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; ####################################################################
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; From the FAQ: <a href="http://www.open-mpi.org/faq/?category=building#build-compiler-flags">http://www.open-mpi.org/faq/?category=building#build-compiler-flags</a>
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; LDFLAGS: Flags passed to the linker (not language-specific). This 
</span><br>
<span class="quotelev1">	&gt; flag is rarely required; Open MPI will usually pick up all LDFLAGS 
</span><br>
<span class="quotelev1">	&gt; that it needs by itself.
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Mehdi
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Mehdi Bozzo-Rey
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Open Source Solution Developer
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Platform OCS5
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Platform computing
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; Phone: +1 905 948 4649
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt;
</span><br>
<span class="quotelev1">	&gt; _______________________________________________
</span><br>
<span class="quotelev1">	&gt; users mailing list
</span><br>
<span class="quotelev1">	&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">	&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cisco Systems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>In reply to:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
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
