<?
$subject_val = "[OMPI users] error with checkpoint in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 13:17:35 2011" -->
<!-- isoreceived="20110511171735" -->
<!-- sent="Thu, 12 May 2011 00:17:30 +0700" -->
<!-- isosent="20110511171730" -->
<!-- name="Tran Hai Quan" -->
<!-- email="tranhaiquan.khtn_at_[hidden]" -->
<!-- subject="[OMPI users] error with checkpoint in openmpi" -->
<!-- id="BANLkTi==uoyYi+Y6-U42ym-HOh_Qi4ueXw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error with checkpoint in openmpi<br>
<strong>From:</strong> Tran Hai Quan (<em>tranhaiquan.khtn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-11 13:17:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16514.php">Peter Thompson: "[OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16512.php">Jeff Squyres: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi , I am working on mpi
<br>
I've have installed openmpi 1.4.3 with blcr included.
<br>
I ran a simple mpi application using a hostfile:
<br>
<p>pc1 slots=2 max-slots=2
<br>
pc2 slots=2 max-slots=2
<br>
<p>And, i ran command to run it with checkpoint supported
<br>
#mpirun --hostfile myhost -np 4 --am ft-enable-cr ./mpi_app
<br>
<p>When i checkpointed, i got an error:
<br>
<p>[pc1:04836] Error: expected_component: PID information unavailable!
<br>
--------------------------------------------------------------------------
<br>
Error: The local checkpoint contains invalid or incomplete metadata for
<br>
Process 3411083265.2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This usually indicates that the local checkpoint is invalid.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check the metadata file (snapshot_meta.data) in the following
<br>
directory:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/root/ompi_global_snapshot_4836.ckpt/0/opal_snapshot_2.ckpt
<br>
--------------------------------------------------------------------------
<br>
[pc1:04836] [[52049,0],0] ORTE_ERROR_LOG: Error in file snapc_full_global.c
<br>
at line 1054
<br>
<p>I'm glad if anyone can help me.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16514.php">Peter Thompson: "[OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16512.php">Jeff Squyres: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
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
