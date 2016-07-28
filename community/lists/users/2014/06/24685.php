<?
$subject_val = "[OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 14:25:14 2014" -->
<!-- isoreceived="20140620182514" -->
<!-- sent="Fri, 20 Jun 2014 20:25:10 +0200" -->
<!-- isosent="20140620182510" -->
<!-- name="Ivanov, Aleksandar (INR)" -->
<!-- email="aleksandar.ivanov_at_[hidden]" -->
<!-- subject="[OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update." -->
<!-- id="0CDC5C0A257A5D40A5DCDC6E58F28E5EA62A74C820_at_KIT-MSX-07.kit.edu" -->
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
<strong>Subject:</strong> [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.<br>
<strong>From:</strong> Ivanov, Aleksandar (INR) (<em>aleksandar.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 14:25:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24684.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir or Madam,
<br>
<p>I am using the openmpi 1.6.5 library compiled with IFORT / ICC 13.1.5. Since a recent update of our machine I started generating mpi errors. The code crashes after completing approx. 24 % from the total job. The same code and input were run before on the same machine and no such problems were ever observed. The actual error message is attached.
<br>
I presume that after the update an incompatibility between the infiniband-stack and the openmpi library might have been introduced. I think that the suggested  &quot;out of memory problem&quot; should not be causing the malfunction, since the application uses only 1GB of the total 32 GB available.
<br>
<p>I would appreciate your help and ideas how to clarify this issue.
<br>
<p>Thank you in advance
<br>
<p>Best Regards
<br>
<p>Aleksandar Ivanov
<br>
<p><p><p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24685/openmpi.log">openmpi.log</a>
</ul>
<!-- attachment="openmpi.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24684.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
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
