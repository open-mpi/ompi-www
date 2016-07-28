<?
$subject_val = "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 14:08:30 2013" -->
<!-- isoreceived="20130425180830" -->
<!-- sent="Thu, 25 Apr 2013 23:38:23 +0530" -->
<!-- isosent="20130425180823" -->
<!-- name="Padma Pavani" -->
<!-- email="gpadmapavani_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1" -->
<!-- id="CANUQSWBBPDbZvJ+8iWGyPCh_5j5LLRXJGzm1iUKNBaD-GZUtHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1<br>
<strong>From:</strong> Padma Pavani (<em>gpadmapavani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 14:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21796.php">Vladimir Yamshchikov: "[OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Reply:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Reply:</strong> <a href="21830.php">Dave Love: "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Team,
<br>
<p>I am facing some problem while running HPL benchmark.
<br>
<p><p><p>I am using Intel mpi -4.0.1 with Qlogic-OFED-1.5.4.1  to run benchmark and
<br>
also tried with openmpi-1.4.0 but getting same error.
<br>
<p><p>Error File :
<br>
<p>[compute-0-1.local:06936] [[14544,1],25] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file rml_oob_send.c at line 105
<br>
[compute-0-1.local:06936] [[14544,1],25] could not get route to
<br>
[[INVALID],INVALID]
<br>
[compute-0-1.local:06936] [[14544,1],25] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file base/plm_base_proxy.c at line 86
<br>
[compute-0-1.local:06975] [[14544,1],27] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file rml_oob_send.c at line 105
<br>
[compute-0-1.local:06975] [[14544,1],27] could not get route to
<br>
[[INVALID],INVALID]
<br>
[compute-0-1.local:06975] [[14544,1],27] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file base/plm_base_proxy.c at line 86
<br>
[compute-0-1.local:06990] [[14544,1],19] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is unknown in
<br>
file rml_oob_send.c at line 105
<br>
[compute-0-1.local:06990] [[14544,1],19] could not get route to
<br>
[[INVALID],INVALID]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21796.php">Vladimir Yamshchikov: "[OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Reply:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Reply:</strong> <a href="21830.php">Dave Love: "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
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
