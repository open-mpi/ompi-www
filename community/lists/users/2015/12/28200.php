<?
$subject_val = "[OMPI users] hcoll API in 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 21:58:08 2015" -->
<!-- isoreceived="20151223025808" -->
<!-- sent="Wed, 23 Dec 2015 13:58:04 +1100" -->
<!-- isosent="20151223025804" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="[OMPI users] hcoll API in 1.10.1" -->
<!-- id="007c01d13d2d$be93e080$3bbba180$_at_nci.org.au" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] hcoll API in 1.10.1<br>
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-22 21:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28199.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It's probably in plain sight somewhere and I missed it, but is there a
<br>
minimum version of hcoll needed to build 1.10.1?
<br>
<p>We have 2.0.0, which allows us to build 1.10.0, but 1.10.1 fails with
<br>
missing entries in the hcoll_collectives_t structure:
<br>
<p>&nbsp;&nbsp;CC       coll_hcoll_module.lo
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In function
<br>
'mca_coll_hcoll_mem_release_cb':
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:60: warning:
<br>
implicit declaration of function 'hcoll_mem_unmap'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In function
<br>
'hcoll_comm_attr_del_fn':
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:166:
<br>
warning: implicit declaration of function 'hcoll_group_destroy_notify'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In function
<br>
'mca_coll_hcoll_comm_query':
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:263:
<br>
warning: implicit declaration of function
<br>
'hcoll_check_mem_release_cb_needed'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:317: error:
<br>
'hcoll_collectives_t' has no member named 'coll_alltoallv'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:318: error:
<br>
'hcoll_collectives_t' has no member named 'coll_gatherv'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:324: error:
<br>
'hcoll_collectives_t' has no member named 'coll_igatherv'
<br>
<p>It looks like PR567 in the 1.10 branch that added the new references.
<br>
<p>Cheers,
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28199.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
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
