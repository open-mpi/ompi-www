<?
$subject_val = "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 16:18:40 2014" -->
<!-- isoreceived="20140428201840" -->
<!-- sent="Mon, 28 Apr 2014 20:18:37 +0000" -->
<!-- isosent="20140428201837" -->
<!-- name="VandeVondele  Joost" -->
<!-- email="joost.vandevondele_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?" -->
<!-- id="908103EDB4893A42920B21D3568BFD930CC12C3D_at_MBX23.d.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140428165647.GA89774_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> VandeVondele  Joost (<em>joost.vandevondele_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 16:18:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>In reply to:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Reply:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

I applied the patch from ticket #4569 (to 1.8.1), and things improved (in particular the reported issue is gone). The next big leaks seems to relate to Cartesian communicators.

Direct leak of 9600 byte(s) in 300 object(s) allocated from:
    #0 0x7f7cd2c8e793 in __interceptor_calloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:89
    #1 0x7f7cd3a92552 in mca_topo_base_cart_create ../../../../ompi/mca/topo/base/topo_base_cart_create.c:89
    #2 0x7f7cd3a52bfd in PMPI_Cart_create /data/vjoost/openmpi-1.8.1/build/ompi/mpi/c/profile/pcart_create.c:103
    #3 0x7f7cd3d0f4bf in ompi_cart_create_f /data/vjoost/openmpi-1.8.1/build/ompi/mpi/fortran/mpif-h/profile/pcart_create_f.c:82
    #4 0x1bfdf6a in __message_passing_MOD_mp_cart_create /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:984

Direct leak of 21600 byte(s) in 300 object(s) allocated from:
    #0 0x7f7cd2c8e3a8 in __interceptor_malloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:66
    #1 0x7f7cd3a3501f in opal_obj_new ../../opal/class/opal_object.h:467
    #2 0x7f7cd3a3501f in ompi_group_allocate ../../ompi/group/group_init.c:63
    #3 0x7f7cd3a2b192 in ompi_comm_fill_rest ../../ompi/communicator/comm.c:1827
    #4 0x7f7cd3a2b192 in ompi_comm_enable ../../ompi/communicator/comm.c:1782
    #5 0x7f7cd3a924d2 in mca_topo_base_cart_create ../../../../ompi/mca/topo/base/topo_base_cart_create.c:164
    #6 0x7f7cd3a52bfd in PMPI_Cart_create /data/vjoost/openmpi-1.8.1/build/ompi/mpi/c/profile/pcart_create.c:103
    #7 0x7f7cd3d0f4bf in ompi_cart_create_f /data/vjoost/openmpi-1.8.1/build/ompi/mpi/fortran/mpif-h/profile/pcart_create_f.c:82
    #8 0x1bfdf6a in __message_passing_MOD_mp_cart_create /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:984

Joost
________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Nathan Hjelm [hjelmn_at_[hidden]]
Sent: Monday, April 28, 2014 6:56 PM
To: Open MPI Developers
Subject: Re: [OMPI devel] memory leaks upon dup/split/create of communicators?

Hmm, that isn't good. I will take a look and get a patch ready for
1.8.2.

-Nathan

On Mon, Apr 28, 2014 at 03:04:24PM +0000, VandeVondele  Joost wrote:
&gt; Hi,
&gt;
&gt; using openmpi 1.7.5 I observe quick growth of memory allocated by our program, and compiling it with '-O1 -g -fno-omit-frame-pointer -fsanitize=leak' using gcc 4.9, they seem to originate from within  openmpi. As an example:
&gt;
&gt; Direct leak of 32000 byte(s) in 200 object(s) allocated from:
&gt;     #0 0x7fbe57737793 in __interceptor_calloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:89
&gt;     #1 0x7fbe58526375 in mca_coll_base_comm_select ../../../../ompi/mca/coll/base/coll_base_comm_select.c:144
&gt;     #2 0x7fbe584d664b in ompi_comm_activate ../../ompi/communicator/comm_cid.c:692
&gt;     #3 0x7fbe584d2c7f in ompi_comm_split ../../ompi/communicator/comm.c:582
&gt;     #4 0x7fbe58501231 in PMPI_Comm_split /data/vjoost/openmpi-1.7.5/build/ompi/mpi/c/profile/pcomm_split.c:68
&gt;     #5 0x7fbe587b6e84 in ompi_comm_split_f /data/vjoost/openmpi-1.7.5/build/ompi/mpi/fortran/mpif-h/profile/pcomm_split_f.c:74
&gt;     #6 0x1c0382e in __message_passing_MOD_mp_comm_split /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:1592
&gt;
&gt; which corresponds to (coll_base_comm_select.c:144) :
&gt;
&gt;     /* TODO -- remove me for 1.9.x */
&gt;     comm-&gt;c_coll.neigh = calloc (1, sizeof (*comm-&gt;c_coll.neigh));
&gt;
&gt; I'm wondering if this variable gets freed upon freeing the communicator.
&gt;
&gt; Thanks in advance,
&gt;
&gt; Joost
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14629.php">http://www.open-mpi.org/community/lists/devel/2014/04/14629.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>In reply to:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Reply:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
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
