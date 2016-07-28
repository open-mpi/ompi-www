<?
$subject_val = "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 02:34:57 2014" -->
<!-- isoreceived="20140430063457" -->
<!-- sent="Wed, 30 Apr 2014 15:35:00 +0900" -->
<!-- isosent="20140430063500" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?" -->
<!-- id="53609994.30506_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="908103EDB4893A42920B21D3568BFD930CC12C3D_at_MBX23.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 02:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>In reply to:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14672.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14672.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joost,
<br>
<p>i created #4581 and attached a patch (for the trunk) in order to solve
<br>
this leak (and two similar ones)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/04/29 5:18, VandeVondele Joost wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I applied the patch from ticket #4569 (to 1.8.1), and things improved (in particular the reported issue is gone). The next big leaks seems to relate to Cartesian communicators.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Direct leak of 9600 byte(s) in 300 object(s) allocated from:
</span><br>
<span class="quotelev1">&gt;     #0 0x7f7cd2c8e793 in __interceptor_calloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:89
</span><br>
<span class="quotelev1">&gt;     #1 0x7f7cd3a92552 in mca_topo_base_cart_create ../../../../ompi/mca/topo/base/topo_base_cart_create.c:89
</span><br>
<span class="quotelev1">&gt;     #2 0x7f7cd3a52bfd in PMPI_Cart_create /data/vjoost/openmpi-1.8.1/build/ompi/mpi/c/profile/pcart_create.c:103
</span><br>
<span class="quotelev1">&gt;     #3 0x7f7cd3d0f4bf in ompi_cart_create_f /data/vjoost/openmpi-1.8.1/build/ompi/mpi/fortran/mpif-h/profile/pcart_create_f.c:82
</span><br>
<span class="quotelev1">&gt;     #4 0x1bfdf6a in __message_passing_MOD_mp_cart_create /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:984
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Direct leak of 21600 byte(s) in 300 object(s) allocated from:
</span><br>
<span class="quotelev1">&gt;     #0 0x7f7cd2c8e3a8 in __interceptor_malloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:66
</span><br>
<span class="quotelev1">&gt;     #1 0x7f7cd3a3501f in opal_obj_new ../../opal/class/opal_object.h:467
</span><br>
<span class="quotelev1">&gt;     #2 0x7f7cd3a3501f in ompi_group_allocate ../../ompi/group/group_init.c:63
</span><br>
<span class="quotelev1">&gt;     #3 0x7f7cd3a2b192 in ompi_comm_fill_rest ../../ompi/communicator/comm.c:1827
</span><br>
<span class="quotelev1">&gt;     #4 0x7f7cd3a2b192 in ompi_comm_enable ../../ompi/communicator/comm.c:1782
</span><br>
<span class="quotelev1">&gt;     #5 0x7f7cd3a924d2 in mca_topo_base_cart_create ../../../../ompi/mca/topo/base/topo_base_cart_create.c:164
</span><br>
<span class="quotelev1">&gt;     #6 0x7f7cd3a52bfd in PMPI_Cart_create /data/vjoost/openmpi-1.8.1/build/ompi/mpi/c/profile/pcart_create.c:103
</span><br>
<span class="quotelev1">&gt;     #7 0x7f7cd3d0f4bf in ompi_cart_create_f /data/vjoost/openmpi-1.8.1/build/ompi/mpi/fortran/mpif-h/profile/pcart_create_f.c:82
</span><br>
<span class="quotelev1">&gt;     #8 0x1bfdf6a in __message_passing_MOD_mp_cart_create /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:984
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>In reply to:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14672.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14672.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?"</a>
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
