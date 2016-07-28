<?
$subject_val = "[OMPI devel] memory leaks upon dup/split/create of communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 11:04:26 2014" -->
<!-- isoreceived="20140428150426" -->
<!-- sent="Mon, 28 Apr 2014 15:04:24 +0000" -->
<!-- isosent="20140428150424" -->
<!-- name="VandeVondele  Joost" -->
<!-- email="joost.vandevondele_at_[hidden]" -->
<!-- subject="[OMPI devel] memory leaks upon dup/split/create of communicators?" -->
<!-- id="908103EDB4893A42920B21D3568BFD930CC12687_at_MBX23.d.ethz.ch" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] memory leaks upon dup/split/create of communicators?<br>
<strong>From:</strong> VandeVondele  Joost (<em>joost.vandevondele_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 11:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14628.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>Reply:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>using openmpi 1.7.5 I observe quick growth of memory allocated by our program, and compiling it with '-O1 -g -fno-omit-frame-pointer -fsanitize=leak' using gcc 4.9, they seem to originate from within  openmpi. As an example:
<br>
<p>Direct leak of 32000 byte(s) in 200 object(s) allocated from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#0 0x7fbe57737793 in __interceptor_calloc ../../../../gcc/libsanitizer/lsan/lsan_interceptors.cc:89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#1 0x7fbe58526375 in mca_coll_base_comm_select ../../../../ompi/mca/coll/base/coll_base_comm_select.c:144
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#2 0x7fbe584d664b in ompi_comm_activate ../../ompi/communicator/comm_cid.c:692
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#3 0x7fbe584d2c7f in ompi_comm_split ../../ompi/communicator/comm.c:582
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#4 0x7fbe58501231 in PMPI_Comm_split /data/vjoost/openmpi-1.7.5/build/ompi/mpi/c/profile/pcomm_split.c:68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#5 0x7fbe587b6e84 in ompi_comm_split_f /data/vjoost/openmpi-1.7.5/build/ompi/mpi/fortran/mpif-h/profile/pcomm_split_f.c:74
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#6 0x1c0382e in __message_passing_MOD_mp_comm_split /data/vjoost/clean/cp2k/cp2k/src/common/message_passing.F:1592
<br>
<p>which corresponds to (coll_base_comm_select.c:144) :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* TODO -- remove me for 1.9.x */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm-&gt;c_coll.neigh = calloc (1, sizeof (*comm-&gt;c_coll.neigh));
<br>
<p>I'm wondering if this variable gets freed upon freeing the communicator.
<br>
<p>Thanks in advance,
<br>
<p>Joost
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14628.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>Reply:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
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
