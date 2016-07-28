<?
$subject_val = "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 09:47:24 2014" -->
<!-- isoreceived="20140408134724" -->
<!-- sent="Tue, 8 Apr 2014 13:47:20 +0000" -->
<!-- isosent="20140408134720" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ED2FB5F_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADkWibc9gAa4HXByE093ffhHR-uSjt-di4paCbPQVg8YKAE+8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 09:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24113.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Previous message:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>In reply to:</strong> <a href="24104.php">Anthony Alba: "[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24119.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="24119.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="24121.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>What MOFED version are you running?
<br>
<p>Best,
<br>
<p>Josh
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Anthony Alba
<br>
Sent: Tuesday, April 08, 2014 4:53 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify
<br>
<p>Hi all,
<br>
<p>Ran into a problem running the openshmem examples/ using OpenMPI 1.8 compiled with
<br>
--with-knem=/opt/knem-1.1.90mlnx2 --with-hcoll=/opt/mellanox/hcoll --with-mxm=/opt/mellanox/mxm
<br>
--with-fca=/opt/mellanox/fca
<br>
<p><p>lib/openmpi/mca_coll_hcoll.so has undefined symbol hcoll_group_destroy_notify
<br>
<p>I can't find this symbol anywere. The Mellanox libraries /opt/mellanox/hcoll/lib/*so don't export
<br>
this symbol. hcoll is v2.0.472.1
<br>
<p>It is used in ompi/mca/coll/hcoll/coll_hcoll_module.c:
<br>
<p>int hcoll_comm_attr_del_fn(MPI_Comm comm, int keyval, void *attr_val, void *extra)
<br>
{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mca_coll_hcoll_module_t *hcoll_module;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hcoll_module = (mca_coll_hcoll_module_t*) attr_val;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hcoll_group_destroy_notify(hcoll_module-&gt;hcoll_context);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
<p>}
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24112/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24113.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Previous message:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>In reply to:</strong> <a href="24104.php">Anthony Alba: "[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24119.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="24119.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="24121.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
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
