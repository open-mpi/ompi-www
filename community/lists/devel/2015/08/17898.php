<?
$subject_val = "Re: [OMPI devel] pgi and fortran in master";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 30 08:02:29 2015" -->
<!-- isoreceived="20150830120229" -->
<!-- sent="Sun, 30 Aug 2015 12:02:18 +0000" -->
<!-- isosent="20150830120218" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pgi and fortran in master" -->
<!-- id="B6F818A4-6418-4AD6-A5EC-C37C3BABA292_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1440598296492.9370_at_nvidia.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-30 08:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf --
<br>
<p>Can you ask your compiler guys something?  I don't know enough Fortran to say whether this is a bug or we're doing something wrong in OMPI.
<br>
<p>Here's the code in question (from ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90):
<br>
<p>-----
<br>
8  subroutine MPI_Cart_create_f08(comm_old,ndims,dims,periods,reorder,comm_cart,ierror)
<br>
9     use :: mpi_f08_types, only : MPI_Comm
<br>
10    ! See note in mpi-f-interfaces-bind.h for why we &quot;use mpi&quot; here and            
<br>
11    ! call a PMPI_* subroutine below.                                              
<br>
12    use :: mpi, only : PMPI_Cart_create
<br>
13    implicit none
<br>
-----
<br>
<p>The problem is occurring as a conflict between lines 9 and 12.
<br>
<p>The &quot;use :: FOO&quot; statement is somewhat analogous to an #include file in C: it imports a series of types and declarations for the compiler to use.
<br>
<p>However, Fortran has a special &quot;only&quot; clause that lets you selectively bring in only parts of the specified module.
<br>
<p>On line 9, we're importing the mpi_f08_types module, but supposedly only the declaration of the MPI_Comm type.
<br>
Similarly, on line 12, we're importing the mpi module, but supposedly only the declaration of the PMPI_Cart_create subroutine.
<br>
<p>The problem is that elsewhere in the mpi_f08_types and mpi modules, we have conflicting declarations for all the symbols listed in the error message (e.g., mpi_fortran_bottom).  Specifically:
<br>
<p>- in mpi_f08_types, mpi_fortran_bottom is &quot;integer, bind(C, name=&quot;mpi_fortran_bottom_&quot;) :: MPI_BOTTOM&quot;
<br>
- in mpi, mpi_fortran_bottom is &quot;common/mpi_fortran_bottom/MPI_BOTTOM&quot;
<br>
<p>(*** it's complicated as to why we do this -- don't ask, unless you really want to know! ***)
<br>
<p>My understanding was that the &quot;only&quot; clauses on lines 9 and 12 would make this ok -- i.e., the Fortran compiler should be ignoring the rest of the modules, and therefore ignore the apparently conflict.
<br>
<p>Can you ask your Fortran compiler guys what the Fortran language spec says about this?
<br>
<p><p><span class="quotelev1">&gt; On Aug 26, 2015, at 10:23 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just tested this against the PGI 15.7 compiler and I see the same thing. It appears that we get this error on some of the files called out in ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h as not having an &quot;easy-peasy&quot; solution. All the other files compile just fine.  I checked the list of failing files against the list called out in the mpi-f-interfaces-bind.h file.  The mpi-f-interfaces-bind.h file calls out 32 files, but here is the list of files that are failing which is a subset of them (20). Maybe that is a clue to what is going wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_create_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_get_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_map_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_sub_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_comm_get_attr_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_comm_test_inter_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_dist_graph_create_adjacent_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_dist_graph_create_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_dist_graph_neighbors_count_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_graph_create_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_info_get_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_info_get_valuelen_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_intercomm_merge_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_op_commutative_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_op_create_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_type_get_attr_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_win_get_attr_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_win_test_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_file_get_atomicity_f08
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_file_set_atomicity_f08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, August 26, 2015 6:50 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] pgi and fortran in master
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It looks like current and past PGI fortran compilers that are happy with 1.8.x and 1.10.x are unhappy with master:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=compile pgf90 -DHAVE_CONFIG_H -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08 -I../../../../opal/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen -I../../../../ompi/mpiext/cuda/c   -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df -I../../../.. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/orte/include -I../../../../orte/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/oshmem/include   -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include -I../../../../ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I../../../../ompi/mpi/fortran/use-mpi-ignore-tkr -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df  -g -c -o cart_create_f08.lo /scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgf90 -DHAVE_CONFIG_H -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08 -I../../../../opal/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen -I../../../../ompi/mpiext/cuda/c -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df -I../../../.. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/orte/include -I../../../../orte/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/oshmem/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc1110/hwloc/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/opal/mca/event/libevent2022/libevent/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include -I../../../../ompi/include -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/include -I../../../../ompi/mpi/fortran/use-mpi-ignore-tkr -I. -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df -g -c /scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90  -fpic -o .libs/cart_create_f08.o
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_weights_empty cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_unweighted cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_statuses_ignore cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_status_ignore cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_errcodes_ignore cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_argvs_null cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_argv_null cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_in_place cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt; PGF90-S-0166-mpi_fortran_bottom cannot be a common block and a subprogram (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2371-gea935df/ompi/mpi/fortran/use-mpi-f08/cart_create_f08.F90)
</span><br>
<span class="quotelev1">&gt;   0 inform,   0 warnings,   9 severes, 0 fatal for mpi_cart_create_f08
</span><br>
<span class="quotelev1">&gt; make[2]: *** [cart_create_f08.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17868.php">http://www.open-mpi.org/community/lists/devel/2015/08/17868.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17868.php">Rolf vandeVaart: "Re: [OMPI devel] pgi and fortran in master"</a>
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
