<?
$subject_val = "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 12:56:48 2014" -->
<!-- isoreceived="20140428165648" -->
<!-- sent="Mon, 28 Apr 2014 10:56:47 -0600" -->
<!-- isosent="20140428165647" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory leaks upon dup/split/create of communicators?" -->
<!-- id="20140428165647.GA89774_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="908103EDB4893A42920B21D3568BFD930CC12687_at_MBX23.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory leaks upon dup/split/create of communicators?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 12:56:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14635.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14629.php">VandeVondele  Joost: "[OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Reply:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, that isn't good. I will take a look and get a patch ready for
<br>
1.8.2.
<br>
<p>-Nathan
<br>
<p>On Mon, Apr 28, 2014 at 03:04:24PM +0000, VandeVondele  Joost wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using openmpi 1.7.5 I observe quick growth of memory allocated by our program, and compiling it with '-O1 -g -fno-omit-frame-pointer -fsanitize=leak' using gcc 4.9, they seem to originate from within  openmpi. As an example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Direct leak of 32000 byte(s) in 200 object(s) allocated from:
</span><br>
<span class="quotelev1">&gt;     #0 0x7fbe57737793 in __interceptor_calloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:89
</span><br>
<span class="quotelev1">&gt;     #1 0x7fbe58526375 in mca_coll_base_comm_select ../../../../ompi/mca/coll/base/coll_base_comm_select.c:144
</span><br>
<span class="quotelev1">&gt;     #2 0x7fbe584d664b in ompi_comm_activate ../../ompi/communicator/comm_cid.c:692
</span><br>
<span class="quotelev1">&gt;     #3 0x7fbe584d2c7f in ompi_comm_split ../../ompi/communicator/comm.c:582
</span><br>
<span class="quotelev1">&gt;     #4 0x7fbe58501231 in PMPI_Comm_split /data/vjoost/openmpi-1.7.5/build/ompi/mpi/c/profile/pcomm_split.c:68
</span><br>
<span class="quotelev1">&gt;     #5 0x7fbe587b6e84 in ompi_comm_split_f /data/vjoost/openmpi-1.7.5/build/ompi/mpi/fortran/mpif-h/profile/pcomm_split_f.c:74
</span><br>
<span class="quotelev1">&gt;     #6 0x1c0382e in __message_passing_MOD_mp_comm_split /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:1592
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which corresponds to (coll_base_comm_select.c:144) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* TODO -- remove me for 1.9.x */
</span><br>
<span class="quotelev1">&gt;     comm-&gt;c_coll.neigh = calloc (1, sizeof (*comm-&gt;c_coll.neigh));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm wondering if this variable gets freed upon freeing the communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joost
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14629.php">http://www.open-mpi.org/community/lists/devel/2014/04/14629.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14634/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14635.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14629.php">VandeVondele  Joost: "[OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Reply:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
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
