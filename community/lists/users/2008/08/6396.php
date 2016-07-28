<?
$subject_val = "[OMPI users] run OpenMPI job on heterogeneous processor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 12:02:57 2008" -->
<!-- isoreceived="20080820160257" -->
<!-- sent="Wed, 20 Aug 2008 12:02:14 -0400" -->
<!-- isosent="20080820160214" -->
<!-- name="Mi Yan" -->
<!-- email="miyan_at_[hidden]" -->
<!-- subject="[OMPI users] run OpenMPI job on heterogeneous processor" -->
<!-- id="OFDDD98CB4.75BCB4CD-ON852574AB.005712E1-852574AB.00581918_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] run OpenMPI job on heterogeneous processor<br>
<strong>From:</strong> Mi Yan (<em>miyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 12:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6397.php">Ralph Castain: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Previous message:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6397.php">Ralph Castain: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Reply:</strong> <a href="6397.php">Ralph Castain: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have one MPI  job consisting of two  parts.  One is  &quot;foo_x86&quot;, the other
<br>
is &quot;foo_ppc&quot;, and there is  MPI communication between &quot;foo_x86&quot; and
<br>
&quot;foo_ppc&quot;.
<br>
&nbsp;&nbsp;&nbsp;&quot;foo_x86&quot; is built on X86 box &quot;b1&quot;,   &quot;foo_pcc&quot; is built  on  PPC box
<br>
&quot;b2&quot;.    Anyone can tell me how to start this MPI job?
<br>
<p>I tried &quot;mpirun   -np 1 foo_x86 : -np 1 foo_ppc  -H b1,b2&quot;
<br>
<p>I tried the above command on &quot;b1&quot;, the X86 box,   and  I got &quot;foo_ppc:
<br>
Exec Format error&quot;
<br>
&nbsp;I tired  on &quot;b2&quot;, the PPC box, and I got  &quot;foo_x86: Exec format error&quot;
<br>
<p>Anybody has a clue?   Thanks in advance.
<br>
<p>Mi Yan
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6397.php">Ralph Castain: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Previous message:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6397.php">Ralph Castain: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Reply:</strong> <a href="6397.php">Ralph Castain: "Re: [OMPI users] run OpenMPI job on heterogeneous processor"</a>
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
