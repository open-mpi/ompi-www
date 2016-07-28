<?
$subject_val = "[OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 11:53:36 2008" -->
<!-- isoreceived="20080821155336" -->
<!-- sent="Thu, 21 Aug 2008 11:54:44 -0400" -->
<!-- isosent="20080821155444" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="[OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?" -->
<!-- id="531893A968B34D40B36C7A6445BC828A01CF66ED_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 11:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6405.php">Francesco Iannone: "[OMPI users]  Memory allocation with PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="6403.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>Reply:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>Looks like a bug; did I miss something ?
<br>
<p>&nbsp;
<br>
<p>My environment:
<br>
<p>###################################################
<br>
<p>[mbozzore_at_tyan04 openmpi-1.2.4]$ echo $CFLAGS
<br>
<p>-I/home/mbozzore/pvfs-2.6.3/include
<br>
<p>[mbozzore_at_tyan04 openmpi-1.2.4]$ echo $FFLAGS
<br>
<p>&nbsp;
<br>
<p>[mbozzore_at_tyan04 openmpi-1.2.4]$ echo $LIBS
<br>
<p>-lpvfs2 -lpthread
<br>
<p>[mbozzore_at_tyan04 openmpi-1.2.4]$ echo $LDFLAGS
<br>
<p>-L/export/pvfs-2.6.3/lib/
<br>
<p>###################################################
<br>
<p>&nbsp;
<br>
<p>Open MPI version : 1.2.4; same behaviour expected with 1.2.6
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>arguments given to configure:
<br>
<p>&nbsp;
<br>
<p>./configure --prefix=/export/ompi-124-pvfs263
<br>
--with-io-romio-flags=--with-file-system=pvfs+nfs
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>config.log:
<br>
<p>&nbsp;
<br>
<p>####################################################################
<br>
<p>configure:36703: checking if Fortran compiler works
<br>
<p>configure:36759: gfortran -o conftest  -L/export/pvfs-2.6.3/lib/
<br>
conftest.f -lpvfs2 -lpthread &gt;&amp;5
<br>
<p>configure:36762: $? = 0
<br>
<p>configure:36768: ./conftest
<br>
<p>configure:36771: $? = 0
<br>
<p>configure:36793: result: yes
<br>
<p>configure:36819: checking whether gfortran and gfortran compilers are
<br>
compatible
<br>
<p>configure:36844: gfortran   -c conftestf90.f
<br>
<p>configure:36851: $? = 0
<br>
<p>configure:36861: gfortran  -c conftestf77.f
<br>
<p>configure:36868: $? = 0
<br>
<p>configure:36878: gfortran  -o conftest conftestf90.o conftestf77.o
<br>
-lpvfs2 -lpthread
<br>
<p>/usr/bin/ld: cannot find -lpvfs2
<br>
<p>collect2: ld returned 1 exit status
<br>
<p>configure:36885: $? = 1
<br>
<p>configure:36912: here is the F77 program:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine Conf1_test()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>configure:36925: here is the F90 program:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call Conf1_test()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>configure:36950: result: no
<br>
<p>configure:36952: WARNING: *** Fortran 77 and Fortran 90 compilers are
<br>
not link compatible
<br>
<p>configure:36954: WARNING: *** Disabling MPI Fortran 90/95 bindings
<br>
<p>configure:36994: checking for extra arguments to build a shard library
<br>
<p>configure:37017: result: none needed
<br>
<p>configure:37416: checking if Fortran 90 compiler supports LOGICAL
<br>
<p>configure:37418: result: skipped
<br>
<p>configure:37780: checking if Fortran 90 compiler supports INTEGER
<br>
<p>configure:37782: result: skipped
<br>
<p>####################################################################
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>With an updated configure script:
<br>
<p>&nbsp;
<br>
<p>####################################################################
<br>
<p>[mbozzore_at_tyan04 openmpi-1.2.4]$ diff -U4 configure.orig configure.new
<br>
<p>--- configure.orig      2008-08-21 09:49:01.000000000 -0400
<br>
<p>+++ configure.new       2008-08-21 11:10:31.000000000 -0400
<br>
<p>@@ -36874,10 +36874,10 @@
<br>
<p>&nbsp;
<br>
<p>&nbsp;# 1 is the command
<br>
<p>&nbsp;# 2 is actions to do if success
<br>
<p>&nbsp;# 3 is actions to do if fail
<br>
<p>-echo &quot;configure:36878: $OMPI_F90 $FCFLAGS -o conftest conftestf90.o
<br>
conftestf77.o $LIBS&quot; &gt;&amp;5
<br>
<p>-$OMPI_F90 $FCFLAGS -o conftest conftestf90.o conftestf77.o $LIBS 1&gt;&amp;5
<br>
2&gt;&amp;1
<br>
<p>+#echo &quot;NEW configure:36878: $OMPI_F90 $FCFLAGS $LDFLAGS -o conftest
<br>
conftestf90.o conftestf77.o $LIBS&quot; &gt;&amp;5
<br>
<p>+$OMPI_F90 $FCFLAGS $LDFLAGS -o conftest conftestf90.o conftestf77.o
<br>
$LIBS 1&gt;&amp;5 2&gt;&amp;1
<br>
<p>&nbsp;ompi_status=$?
<br>
<p>&nbsp;
<br>
<p>&nbsp;# 1 is the message
<br>
<p>&nbsp;# 2 is whether to put a prefix or not
<br>
<p>####################################################################
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>config.log:
<br>
<p>####################################################################
<br>
<p>NEW configure:36878: gfortran  -L/export/pvfs-2.6.3/lib/ -o conftest
<br>
conftestf90.o conftestf77.o -lpvfs2 -lpthread
<br>
<p>configure:36885: $? = 0
<br>
<p>configure:36956: result: yes
<br>
<p>####################################################################
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;From the FAQ:
</span><br>
<a href="http://www.open-mpi.org/faq/?category=building#build-compiler-flags">http://www.open-mpi.org/faq/?category=building#build-compiler-flags</a>
<br>
<p>&nbsp;
<br>
<p>LDFLAGS: Flags passed to the linker (not language-specific). This flag
<br>
is rarely required; Open MPI will usually pick up all LDFLAGS that it
<br>
needs by itself.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Mehdi
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Mehdi Bozzo-Rey &lt;mailto:mbozzore_at_[hidden]&gt; 
<br>
<p>Open Source Solution Developer
<br>
<p>Platform OCS5
<br>
&lt;<a href="http://www.platform.com/Products/platform-open-cluster-stack5">http://www.platform.com/Products/platform-open-cluster-stack5</a>&gt; 
<br>
<p>Platform computing
<br>
<p>Phone: +1 905 948 4649
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6405.php">Francesco Iannone: "[OMPI users]  Memory allocation with PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="6403.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>Reply:</strong> <a href="6440.php">Jeff Squyres: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
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
