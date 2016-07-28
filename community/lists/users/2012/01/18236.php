<?
$subject_val = "[OMPI users] OpenMPI failed when running across two mac machines";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 13:02:12 2012" -->
<!-- isoreceived="20120120180212" -->
<!-- sent="Fri, 20 Jan 2012 13:02:06 -0500" -->
<!-- isosent="20120120180206" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI failed when running across two mac machines" -->
<!-- id="11901DB1-DA84-4F3D-A02C-A30F029C846A_at_GMAIL.COM" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI failed when running across two mac machines<br>
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 13:02:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18237.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Previous message:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Reply:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are distributing OpenMPI as part of software suite. Therefore, the prefix we used for building is not expected to be the same when running on customer's machine. However, we did manage to get it running by setting OPLA_PREFIX, PATH and LD_LIBARAY_PATH on Linux). We tried do the same thing on Mac by using  DYLD_LIBRARY_PATH instead of LD_LIBARAY_PATH. Unfortunately, we run into below error:
<br>
dyld: lazy symbol binding failed: Symbol not found: _orte_daemon
<br>
<p><p>After looking at orte/mca/plm/rsh/plm_rsh_module.c, we realized that the problem is DYLD_LIBARAY_PATH is not setting before launching orted. Instead plm_rsh_module.c still tries to set LD_LIBRARY_PATH. We had a patch for this and it seems to address the issue. We will be thrilled if the attached patch will be accepted.
<br>
<p><p>Teng
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18236/plm_rsh_module.c.patch">plm_rsh_module.c.patch</a>
</ul>
<!-- attachment="plm_rsh_module.c.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18237.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Previous message:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Reply:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
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
