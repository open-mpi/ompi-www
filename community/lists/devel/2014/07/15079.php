<?
$subject_val = "[OMPI devel] trunk and fortran errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 06:33:17 2014" -->
<!-- isoreceived="20140709103317" -->
<!-- sent="Wed, 9 Jul 2014 13:33:16 +0300" -->
<!-- isosent="20140709103316" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk and fortran errors" -->
<!-- id="CAAO1KyYF9vRjg4pv8wm8WvV75HqGkzFAQ8RTR6FmSJe4pCmL6g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] trunk and fortran errors<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 06:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15078.php">Jeff Squyres (jsquyres): "[OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The latest svn/trunks fails to install on centos 5.7,5.8,5.9 but works fine
<br>
on others.
<br>
<p>after:
<br>
<p>./configure --with-platform=contrib/platform/mellanox/optimized
<br>
--with-knem=/opt/knem-0.9.7mlnx1 --with-fca=/opt/mellanox/fca
<br>
--with-ompi-param-check --enable-picky
<br>
--prefix=/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi_install1
<br>
&amp;&amp; make clean &amp;&amp; make install
<br>
<p><p>errors during &quot;make install&quot;:
<br>
<p>*10:58:23*  /bin/mkdir -p
<br>
'/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi_install1/include/openmpi/ompi/mpi/fortran/mpif-h'*10:58:23*
<br>
&nbsp;/usr/bin/install -c -m 644 bindings.h prototypes_mpi.h
<br>
status-conversion.h
<br>
'/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi_install1/include/openmpi/ompi/mpi/fortran/mpif-h'*10:58:23*
<br>
make[4]: Leaving directory
<br>
`/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/mpif-h'*10:58:23*
<br>
make[3]: Leaving directory
<br>
`/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/mpif-h'*10:58:23*
<br>
make[2]: Leaving directory
<br>
`/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/mpif-h'*10:58:23*
<br>
Making install in mpi/fortran/use-mpi-tkr*10:58:23* make[2]: Entering
<br>
directory `/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/use-mpi-tkr'*10:58:23*
<br>
&nbsp;&nbsp;PPFC     mpi.lo*10:58:25*  In file
<br>
mpi-f90-interfaces.h:2900*10:58:25* *10:58:25*      Included at
<br>
mpi.F90:45*10:58:25* *10:58:25*   use, intrinsic :: iso_c_binding,
<br>
only : c_ptr*10:58:25*  1*10:58:25* Error: Unclassifiable statement at
<br>
(1)*10:58:25*  In file mpi-f90-interfaces.h:2904*10:58:25* *10:58:25*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.F90:45*10:58:25* *10:58:25*   type(C_PTR) ::
<br>
baseptr*10:58:25*             1*10:58:25* Error: Derived type 'c_ptr'
<br>
at (1) is being used before it is defined*10:58:25*  In file
<br>
mpi-f90-interfaces.h:3121*10:58:25* *10:58:25*      Included at
<br>
mpi.F90:45*10:58:25* *10:58:25*   use, intrinsic :: iso_c_binding,
<br>
only : c_ptr*10:58:25*  1*10:58:25* Error: Unclassifiable statement at
<br>
(1)*10:58:25*  In file mpi-f90-interfaces.h:3127*10:58:25* *10:58:25*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at mpi.F90:45*10:58:25* *10:58:25*   type(C_PTR),
<br>
intent(out) :: baseptr*10:58:25*             1*10:58:25* Error:
<br>
Derived type 'c_ptr' at (1) is being used before it is
<br>
defined*10:58:25* make[2]: *** [mpi.lo] Error 1*10:58:25* make[2]:
<br>
Leaving directory
<br>
`/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/use-mpi-tkr'*10:58:25*
<br>
make[1]: *** [install-recursive] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15078.php">Jeff Squyres (jsquyres): "[OMPI devel] Shared library version numbers for 1.8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
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
