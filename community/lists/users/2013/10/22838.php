<?
$subject_val = "[OMPI users] ORTE_ERROR_LOG";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 01:27:51 2013" -->
<!-- isoreceived="20131025052751" -->
<!-- sent="Fri, 25 Oct 2013 08:27:50 +0300" -->
<!-- isosent="20131025052750" -->
<!-- name="Tommi Laiho" -->
<!-- email="tommilaiho_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE_ERROR_LOG" -->
<!-- id="DUB111-W1261073091461BB89485169D40D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] ORTE_ERROR_LOG<br>
<strong>From:</strong> Tommi Laiho (<em>tommilaiho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 01:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22839.php">Osman Khalid: "Re: [OMPI users] need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22841.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22841.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am trying to setup a simple two machines home cluster. Later I may increase the number to 4 machines. 
<br>
<p>I have a bridged modem so each of my machines has its own ip. 
<br>
<p>My target is now to calculate a simple OpenFOAM tutorial with two computers and together with 14 cores. 
<br>
<p>However when I run:
<br>
<p>mpirun /opt/openmpi-1.6.5/bin/mpirun -hostfile /home/tommi2/Desktop/machinefile -np 14 icofoam cavity -parallel
<br>
<p>&nbsp;I get this kind of error:
<br>
<p>[caelinux:31859] [[43391,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 104
<br>
[caelinux:31859] [[43391,1],0] could not get route to [[INVALID],INVALID]
<br>
[caelinux:31859] [[43391,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 81
<br>
<p>Please tell me what to do in order to fix this and thanks in advance. The reason is probably simple cos I am a Linux newbie. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22838/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22839.php">Osman Khalid: "Re: [OMPI users] need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22841.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22841.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
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
