<?
$subject_val = "[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 21:41:24 2013" -->
<!-- isoreceived="20130405014124" -->
<!-- sent="Thu, 4 Apr 2013 21:41:18 -0400" -->
<!-- isosent="20130405014118" -->
<!-- name="Alan Sayre" -->
<!-- email="ansayre62_at_[hidden]" -->
<!-- subject="[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6" -->
<!-- id="CAGzRjXYj8VAhi0XXTgZ0ZHH92wOgg6+J656_t8-e9R8=OSTtOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6<br>
<strong>From:</strong> Alan Sayre (<em>ansayre62_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 21:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21680.php">Alan Sayre: "[OMPI users] configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
<li><strong>Reply:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build openmpi v.1.6.4 using a local build of gcc 4.7.2 on
<br>
rhel6.
<br>
<p>The configure and build scripts are attached. The config.log and
<br>
build.output are attached.
<br>
<p>The last few lines of the build output is:
<br>
<p>make[3]: Entering directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f77'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f77'
<br>
make[2]: Leaving directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f77'
<br>
Making all in mpi/f90
<br>
make[2]: Entering directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
<br>
make  all-recursive
<br>
make[3]: Entering directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
<br>
Making all in scripts
<br>
make[4]: Entering directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90/scripts'
<br>
make[4]: Nothing to be done for `all'.
<br>
make[4]: Leaving directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90/scripts'
<br>
make[4]: Entering directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
<br>
&nbsp;&nbsp;FC     mpi.lo
<br>
&nbsp;In file mpi-f90-interfaces.h:1586
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;real*16, intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration REAL*16 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1607
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;complex*32, intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration COMPLEX*32 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1670
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;real*16, dimension(*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration REAL*16 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1691
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;complex*32, dimension(*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration COMPLEX*32 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1754
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;real*16, dimension(1,*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration REAL*16 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1775
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;complex*32, dimension(1,*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration COMPLEX*32 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1838
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;real*16, dimension(1,1,*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration REAL*16 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1859
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;complex*32, dimension(1,1,*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration COMPLEX*32 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1922
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;real*16, dimension(1,1,1,*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration REAL*16 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1943
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>&nbsp;&nbsp;complex*32, dimension(1,1,1,*), intent(in) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration COMPLEX*32 not supported at (1)
<br>
&nbsp;In file mpi-f90-interfaces.h:1946
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.f90:37
<br>
<p>end subroutine MPI_Sizeof4DC32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Ambiguous interfaces 'mpi_sizeof4dc32' and 'mpi_sizeof4dr16' in
<br>
generic interface 'mpi_sizeof' at (1)
<br>
make[4]: *** [mpi.lo] Error 1
<br>
make[4]: Leaving directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>What I am doing wrong?
<br>
<p>Thanks,
<br>
<p>Alan
<br>
<p>







<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/build.out.bz2">build.out.bz2</a>
</ul>
<!-- attachment="build.out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/configure_openmpi-1.6.4-xxx.sh">configure_openmpi-1.6.4-xxx.sh</a>
</ul>
<!-- attachment="configure_openmpi-1.6.4-xxx.sh" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/make_openmpi-1.6.4-xxx.sh">make_openmpi-1.6.4-xxx.sh</a>
</ul>
<!-- attachment="make_openmpi-1.6.4-xxx.sh" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/tail.out">tail.out</a>
</ul>
<!-- attachment="tail.out" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/test.out">test.out</a>
</ul>
<!-- attachment="test.out" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21681/test.sh">test.sh</a>
</ul>
<!-- attachment="test.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21680.php">Alan Sayre: "[OMPI users] configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
<li><strong>Reply:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
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
