<?
$subject_val = "[OMPI devel] coll ml error with some nonblocking collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 10:55:01 2014" -->
<!-- isoreceived="20140915145501" -->
<!-- sent="Mon, 15 Sep 2014 14:54:59 +0000" -->
<!-- isosent="20140915145459" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] coll ml error with some nonblocking collectives" -->
<!-- id="1fe2f76a14664935ae7e6aed2ae6ebe1_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] coll ml error with some nonblocking collectives<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-15 10:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15829.php">Håkon Bugge: "[OMPI devel] External loopback"</a>
<li><strong>Previous message:</strong> <a href="15827.php">Alina Sklarevich: "Re: [OMPI devel] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15830.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Reply:</strong> <a href="15830.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if anyone else is seeing this failure. Not sure when this started but it is only on the trunk. Here is a link to my failures as well as an example below that. There are a variety of nonblocking collectives failing like this.
<br>
<p><p><a href="http://mtt.open-mpi.org/index.php?do_redir=2208">http://mtt.open-mpi.org/index.php?do_redir=2208</a>
<br>
<p><p>[rvandevaart_at_drossetti-ivy0 collective]$ mpirun --mca btl self,sm,tcp -host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 iallreduce
<br>
--------------------------------------------------------------------------
<br>
<p>ML detected an unrecoverable error on intrinsic communicator MPI_COMM_WORLD
<br>
<p>The program will now abort
<br>
--------------------------------------------------------------------------
<br>
[drossetti-ivy0.nvidia.com:04664] 3 more processes have sent help message help-mpi-coll-ml.txt / coll-ml-check-fatal-error
<br>
[rvandevaart_at_drossetti-ivy0 collective]$
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15829.php">Håkon Bugge: "[OMPI devel] External loopback"</a>
<li><strong>Previous message:</strong> <a href="15827.php">Alina Sklarevich: "Re: [OMPI devel] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15830.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Reply:</strong> <a href="15830.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
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
