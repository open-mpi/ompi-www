<?
$subject_val = "[OMPI users] Can you set the gid of the processes created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 09:40:40 2011" -->
<!-- isoreceived="20110907134040" -->
<!-- sent="Wed, 07 Sep 2011 07:38:04 -0600" -->
<!-- isosent="20110907133804" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Can you set the gid of the processes created by mpirun?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275C8BEF52_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Can you set the gid of the processes created by mpirun?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 09:38:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17170.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The mpirun command is invoked when the user's group is 'set group' to group 650.  When the rank 0 process creates files, they have group ownership 650.  But the user's login group is group 1040. The child processes that get started on other nodes run with group 1040, and the files they create have group ownership 1040.
<br>
<p>Is there a way to tell mpirun to start the child processes with the same uid and gid as the rank 0 process?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17170.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
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
