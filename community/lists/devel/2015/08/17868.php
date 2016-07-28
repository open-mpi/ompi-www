<?
$subject_val = "Re: [OMPI devel] pgi and fortran in master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 10:23:14 2015" -->
<!-- isoreceived="20150826142314" -->
<!-- sent="Wed, 26 Aug 2015 14:23:10 +0000" -->
<!-- isosent="20150826142310" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pgi and fortran in master" -->
<!-- id="1440598296492.9370_at_nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16x9sBDN+LsEfGzrMk4HwZUqAr6hNLMfYkbsnufAD+1Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pgi and fortran in master<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 10:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17869.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17867.php">Paul Hargrove: "[OMPI devel] pgi and fortran in master"</a>
<li><strong>In reply to:</strong> <a href="17867.php">Paul Hargrove: "[OMPI devel] pgi and fortran in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Reply:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tested this against the PGI 15.7 compiler and I see the same thing. It appears that we get this error on some of the files called out in ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h as not having an &quot;easy-peasy&quot; solution. All the other files compile just fine.  I checked the list of failing files against the list called out in the mpi-f-interfaces-bind.h file.  The mpi-f-interfaces-bind.h file calls out 32 files, but here is the list of files that are failing which is a subset of them (20). Maybe that is a clue to what is going wrong.
<br>
<p><p>&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_create_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_get_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_map_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_sub_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_comm_get_attr_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_comm_test_inter_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_dist_graph_create_adjacent_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_dist_graph_create_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_dist_graph_neighbors_count_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_graph_create_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_info_get_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_info_get_valuelen_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_intercomm_merge_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_op_commutative_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_op_create_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_type_get_attr_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_win_get_attr_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_win_test_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_file_get_atomicity_f08
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_file_set_atomicity_f08
<br>
<p><p><p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
<br>
Sent: Wednesday, August 26, 2015 6:50 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] pgi and fortran in master
<br>
<p>It looks like current and past PGI fortran compilers that are happy with 1.8.x and 1.10.x are unhappy with master:
<br>
<p>/bin/sh ../../../../libtool  --tag=FC   --mode=compile pgf90 -DHAVE_CONFIG_H -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08 -I../../../../opal/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen -I../../../../ompi/mpiext/cuda/c   -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df -I../../../.. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/orte/include -I../../../../orte/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/oshmem/include   -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include -I../../../../ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I../../../../ompi/mpi/fortran/use-mpi-ignore-tkr -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df  -g -c -o cart_create_f08.lo /scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90
<br>
libtool: compile:  pgf90 -DHAVE_CONFIG_H -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08 -I../../../../opal/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen -I../../../../ompi/mpiext/cuda/c -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df -I../../../.. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/orte/include -I../../../../orte/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/oshmem/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include -I../../../../ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I../../../../ompi/mpi/fortran/use-mpi-ignore-tkr -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df -g -c /scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90  -fpic -o .libs/cart_create_f08.o
<br>
PGF90-S-0166-mpi_fortran_weights_empty cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_unweighted cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_statuses_ignore cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_status_ignore cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_errcodes_ignore cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_argvs_null cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_argv_null cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_in_place cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
PGF90-S-0166-mpi_fortran_bottom cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
<br>
&nbsp;&nbsp;0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_create_f08
<br>
make[2]: *** [cart_create_f08.lo] Error 1
<br>
<p><p>-Paul
<br>
<p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
-----------------------------------------------------------------------------------
This email message is for the sole use of the intended recipient(s) and may contain
confidential information.  Any unauthorized review, use, disclosure or distribution
is prohibited.  If you are not the intended recipient, please contact the sender by
reply email and destroy all copies of the original message.
-----------------------------------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17869.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17867.php">Paul Hargrove: "[OMPI devel] pgi and fortran in master"</a>
<li><strong>In reply to:</strong> <a href="17867.php">Paul Hargrove: "[OMPI devel] pgi and fortran in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Reply:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
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
