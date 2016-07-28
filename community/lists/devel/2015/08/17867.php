<?
$subject_val = "[OMPI devel] pgi and fortran in master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 06:51:09 2015" -->
<!-- isoreceived="20150826105109" -->
<!-- sent="Wed, 26 Aug 2015 03:50:55 -0700" -->
<!-- isosent="20150826105055" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] pgi and fortran in master" -->
<!-- id="CAAvDA16x9sBDN+LsEfGzrMk4HwZUqAr6hNLMfYkbsnufAD+1Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] pgi and fortran in master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 06:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Previous message:</strong> <a href="17866.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Reply:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like current and past PGI fortran compilers that are happy with
<br>
1.8.x and 1.10.x are unhappy with master:
<br>
<p>/bin/sh ../../../../libtool  --tag=FC   --mode=compile pgf90
<br>
-DHAVE_CONFIG_H -I.
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen
<br>
-I../../../../ompi/mpiext/cuda/c
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df
<br>
-I../../../..
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/orte/include
<br>
-I../../../../orte/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/oshmem/include
<br>
<p>-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/hwloc/hwloc1110/hwloc/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc1110/hwloc/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-I../../../../ompi/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include
<br>
-I../../../../ompi/mpi/fortran/use-mpi-ignore-tkr -I.
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df
<br>
&nbsp;-g -c -o cart_create_f08.lo
<br>
/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90
<br>
libtool: compile:  pgf90 -DHAVE_CONFIG_H -I.
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen
<br>
-I../../../../ompi/mpiext/cuda/c
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df
<br>
-I../../../..
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/orte/include
<br>
-I../../../../orte/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/oshmem/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/hwloc/hwloc1110/hwloc/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc1110/hwloc/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-I../../../../ompi/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include
<br>
-I../../../../ompi/mpi/fortran/use-mpi-ignore-tkr -I.
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df
<br>
-g -c
<br>
/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90
<br>
&nbsp;-fpic -o .libs/cart_create_f08.o
<br>
PGF90-S-0166-mpi_fortran_weights_empty cannot be a common block and a
<br>
subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_unweighted cannot be a common block and a
<br>
subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_statuses_ignore cannot be a common block and a
<br>
subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_status_ignore cannot be a common block and a
<br>
subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_errcodes_ignore cannot be a common block and a
<br>
subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-
<br>
2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_argvs_null cannot be a common block and a
<br>
subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-
<br>
gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_argv_null cannot be a common block and a
<br>
subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-g
<br>
ea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_in_place cannot be a common block and a subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-ge
<br>
a935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_bottom cannot be a common block and a subprogram
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea9
<br>
35df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_create_f08
<br>
make[2]: *** [cart_create_f08.lo] Error 1
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Previous message:</strong> <a href="17866.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Reply:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
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
