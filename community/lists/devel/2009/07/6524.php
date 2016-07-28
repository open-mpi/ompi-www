<?
$subject_val = "[OMPI devel] ob1 question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 10:22:46 2009" -->
<!-- isoreceived="20090724142246" -->
<!-- sent="Fri, 24 Jul 2009 16:22:40 +0200" -->
<!-- isosent="20090724142240" -->
<!-- name="Sebastian Rinke" -->
<!-- email="rinke_at_[hidden]" -->
<!-- subject="[OMPI devel] ob1 question" -->
<!-- id="20090724162240.50572rc3jnpzv25s_at_mail.tu-chemnitz.de" -->
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
<strong>Subject:</strong> [OMPI devel] ob1 question<br>
<strong>From:</strong> Sebastian Rinke (<em>rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 10:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Testing a new BTL component I get SIGSEGV
<br>
in mca_pml_ob1_recv_request_progress_frag().
<br>
<p>I found that recvreq points to an unmapped
<br>
memory location. As far as I understand recvreq
<br>
is taken directly from the PML header of the
<br>
message received?
<br>
<p>To better understand the message flow, could you please
<br>
describe me the protocol how ob1 transmits the data
<br>
(with control messages)?
<br>
<p>I have implemented the following BTL functions:
<br>
<p>add_procs
<br>
del_procs
<br>
finalize
<br>
alloc
<br>
free
<br>
prepare_src
<br>
send
<br>
component_progress
<br>
<p>Thx in advance
<br>
<p>Sebastian.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6525.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
