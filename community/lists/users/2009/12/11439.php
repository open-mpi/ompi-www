<?
$subject_val = "[OMPI users] How to detect a failure to start-up and MPI_Init()?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 10:40:50 2009" -->
<!-- isoreceived="20091206154050" -->
<!-- sent="Sun, 6 Dec 2009 17:40:41 +0200" -->
<!-- isosent="20091206154041" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="[OMPI users] How to detect a failure to start-up and MPI_Init()?" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F201C8C98E5D_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> [OMPI users] How to detect a failure to start-up and MPI_Init()?<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-06 10:40:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11441.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11441.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Is there a way to detect a situation than one of the processes in an MPI application exits without even calling MPI_Init()?
<br>
I have a case in which all the processes except one are stuck forever in MPI_Init(), and that one exits before being able to call MPI_Init()...
<br>
I tried using the mca params that I thought might be related - orte_startup_timeout, orte_abort_timeout, but that didn't help.
<br>
<p>Thanks!
<br>
--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>---------------------------------------------------------------------
<br>
Intel Israel (74) Limited
<br>
<p>This e-mail and any attachments may contain confidential material for
<br>
the sole use of the intended recipient(s). Any review or distribution
<br>
by others is strictly prohibited. If you are not the intended
<br>
recipient, please contact the sender and delete all copies.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11441.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Reply:</strong> <a href="11441.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
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
