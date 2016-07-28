<?
$subject_val = "[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 04:52:42 2014" -->
<!-- isoreceived="20140408085242" -->
<!-- sent="Tue, 8 Apr 2014 16:52:41 +0800" -->
<!-- isosent="20140408085241" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify" -->
<!-- id="CADkWibc9gAa4HXByE093ffhHR-uSjt-di4paCbPQVg8YKAE+8Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 04:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24105.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24103.php">Hamid Saeed: "[OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Ran into a problem running the openshmem examples/ using OpenMPI 1.8
<br>
compiled with
<br>
--with-knem=/opt/knem-1.1.90mlnx2 --with-hcoll=/opt/mellanox/hcoll
<br>
--with-mxm=/opt/mellanox/mxm
<br>
--with-fca=/opt/mellanox/fca
<br>
<p><p>lib/openmpi/mca_coll_hcoll.so has undefined symbol
<br>
hcoll_group_destroy_notify
<br>
<p>I can't find this symbol anywere. The Mellanox libraries
<br>
/opt/mellanox/hcoll/lib/*so don't export
<br>
this symbol. hcoll is v2.0.472.1
<br>
<p>It is used in ompi/mca/coll/hcoll/coll_hcoll_module.c:
<br>
<p>int hcoll_comm_attr_del_fn(MPI_Comm comm, int keyval, void *attr_val, void
<br>
*extra)
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24105.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24103.php">Hamid Saeed: "[OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
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
