<?
$subject_val = "[OMPI users] mpif77 report Old-style type declaration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 04:42:32 2008" -->
<!-- isoreceived="20080508084232" -->
<!-- sent="Thu, 8 May 2008 16:55:21 +0800" -->
<!-- isosent="20080508085521" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="[OMPI users] mpif77 report Old-style type declaration" -->
<!-- id="OFF9E0364B.E5013DCC-ON48257443.002FCDF9-48257443.002FE5A4_at_cn.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] mpif77 report Old-style type declaration<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 04:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5641.php">Mukesh K Srivastava: "[OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>Previous message:</strong> <a href="5639.php">Ingo Josopait: "[OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5642.php">Terry Frankcombe: "Re: [OMPI users] mpif77 report Old-style type declaration"</a>
<li><strong>Reply:</strong> <a href="5642.php">Terry Frankcombe: "Re: [OMPI users] mpif77 report Old-style type declaration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I am using openmpi to compile Fortran program on RHEL5.2 x86 machine. Open
<br>
MPI 1.2.5-2 is installed. mpif77 gave following error.
<br>
<p>[root_at_xblade08 dtyp]# mpif77   -c -o freal16_f.o freal16_f.f
<br>
&nbsp;In file freal16_f.f:67
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real*16 real16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration REAL*16 not supported at (1)
<br>
[root_at_xblade08 dtyp]# vi freal16_f.f
<br>
67      real*16 real16
<br>
[root_at_xblade08 dtyp]# which mpif77
<br>
/usr/bin/mpif77
<br>
[root_at_xblade08 dtyp]# file /usr/bin/mpif77
<br>
/usr/bin/mpif77: symbolic link to `/etc/alternatives/mpif77'
<br>
[root_at_xblade08 dtyp]# file /etc/alternatives/mpif77
<br>
/etc/alternatives/mpif77: symbolic link to
<br>
`/usr/bin/opal_wrapper-1.2.5-gcc-32'
<br>
[root_at_xblade08 dtyp]# rpm -qf /usr/bin/opal_wrapper-1.2.5-gcc-32
<br>
openmpi-devel-1.2.5-2.el5
<br>
[root_at_xblade08 dtyp]# mpif77 -v
<br>
Using built-in specs.
<br>
Target: i386-redhat-linux
<br>
Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
<br>
--infodir=/usr/share/info --enable-shared --enable-threads=posix
<br>
--enable-checking=release --with-system-zlib --enable-__cxa_atexit
<br>
--disable-libunwind-exceptions --enable-libgcj-multifile
<br>
--enable-languages=c,c++,objc,obj-c++,java,fortran,ada
<br>
--enable-java-awt=gtk --disable-dssi --enable-plugin
<br>
--with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic
<br>
--host=i386-redhat-linux
<br>
Thread model: posix
<br>
gcc version 4.1.2 20071124 (Red Hat 4.1.2-41)
<br>
<p><p>Since mpif77 is one compiler wrapper, how can I get the detailed compiler,
<br>
environment variables and arguments to the file compile freal16_f.f? I have
<br>
another file named freal8_f.f, with the sentence &quot;real*8 real8&quot;. But mpif77
<br>
can compile it smoothly.
<br>
<p>Thanks!
<br>
<p>Wen Hao Wang
<br>
Email: wangwhao_at_[hidden]
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5640/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5641.php">Mukesh K Srivastava: "[OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>Previous message:</strong> <a href="5639.php">Ingo Josopait: "[OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5642.php">Terry Frankcombe: "Re: [OMPI users] mpif77 report Old-style type declaration"</a>
<li><strong>Reply:</strong> <a href="5642.php">Terry Frankcombe: "Re: [OMPI users] mpif77 report Old-style type declaration"</a>
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
