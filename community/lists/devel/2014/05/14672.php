<?
$subject_val = "Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 03:53:36 2014" -->
<!-- isoreceived="20140501075336" -->
<!-- sent="Thu, 1 May 2014 07:53:32 +0000" -->
<!-- isosent="20140501075332" -->
<!-- name="VandeVondele  Joost" -->
<!-- email="joost.vandevondele_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?" -->
<!-- id="908103EDB4893A42920B21D3568BFD930CC1344A_at_MBX23.d.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53609994.30506_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?<br>
<strong>From:</strong> VandeVondele  Joost (<em>joost.vandevondele_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-01 03:53:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14673.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,

I tested your patch on top of 1.8.1, and it fixes the cartesian comm leaks, thanks!

Meanwhile, I had a look at the leaks of 

#include &lt;mpi.h&gt;

int main (int argc, char *argv[]) {
    MPI_Init(&amp;argc, &amp;argv);
    MPI_Finalize();
}

which ideally should have no leaks at all, as this would simplify leak hunting very significantly, since it would make automated regression testing much easier (both on the mpi user side of thing, i.e. our main interest, but also from the devel side).

The summary is 

SUMMARY: LeakSanitizer: 29057 byte(s) leaked in 84 allocation(s).

with the full traces attached (against the slightly patched 1.8.1)

BTW, in case you wonder how to get these traces, just build openmpi with '-g -fno-omit-frame-pointer' and the application with  '-g -fno-omit-frame-pointer -fsanitize=leak' using gcc 4.9.0, it is very convenient.

Joost

________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
Sent: Wednesday, April 30, 2014 8:35 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] memory leaks upon dup/split/create    of      communicators?

Joost,

i created #4581 and attached a patch (for the trunk) in order to solve
this leak (and two similar ones)

Cheers,

Gilles

On 2014/04/29 5:18, VandeVondele Joost wrote:
&gt; Hi,
&gt;
&gt; I applied the patch from ticket #4569 (to 1.8.1), and things improved (in particular the reported issue is gone). The next big leaks seems to relate to Cartesian communicators.
&gt;
&gt; Direct leak of 9600 byte(s) in 300 object(s) allocated from:
&gt;     #0 0x7f7cd2c8e793 in __interceptor_calloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:89
&gt;     #1 0x7f7cd3a92552 in mca_topo_base_cart_create ../../../../ompi/mca/topo/base/topo_base_cart_create.c:89
&gt;     #2 0x7f7cd3a52bfd in PMPI_Cart_create /data/vjoost/openmpi-1.8.1/build/ompi/mpi/c/profile/pcart_create.c:103
&gt;     #3 0x7f7cd3d0f4bf in ompi_cart_create_f /data/vjoost/openmpi-1.8.1/build/ompi/mpi/fortran/mpif-h/profile/pcart_create_f.c:82
&gt;     #4 0x1bfdf6a in __message_passing_MOD_mp_cart_create /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:984
&gt;
&gt; Direct leak of 21600 byte(s) in 300 object(s) allocated from:
&gt;     #0 0x7f7cd2c8e3a8 in __interceptor_malloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:66
&gt;     #1 0x7f7cd3a3501f in opal_obj_new ../../opal/class/opal_object.h:467
&gt;     #2 0x7f7cd3a3501f in ompi_group_allocate ../../ompi/group/group_init.c:63
&gt;     #3 0x7f7cd3a2b192 in ompi_comm_fill_rest ../../ompi/communicator/comm.c:1827
&gt;     #4 0x7f7cd3a2b192 in ompi_comm_enable ../../ompi/communicator/comm.c:1782
&gt;     #5 0x7f7cd3a924d2 in mca_topo_base_cart_create ../../../../ompi/mca/topo/base/topo_base_cart_create.c:164
&gt;     #6 0x7f7cd3a52bfd in PMPI_Cart_create /data/vjoost/openmpi-1.8.1/build/ompi/mpi/c/profile/pcart_create.c:103
&gt;     #7 0x7f7cd3d0f4bf in ompi_cart_create_f /data/vjoost/openmpi-1.8.1/build/ompi/mpi/fortran/mpif-h/profile/pcart_create_f.c:82
&gt;     #8 0x1bfdf6a in __message_passing_MOD_mp_cart_create /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:984
&gt;
&gt; Joost
&gt;

_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14658.php">http://www.open-mpi.org/community/lists/devel/2014/04/14658.php</a>

<br>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14672/memleaks_1.8.1.txt">memleaks_1.8.1.txt</a>
</ul>
<!-- attachment="memleaks_1.8.1.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14673.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
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
