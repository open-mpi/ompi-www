<?
$subject_val = "[OMPI users] OPENMPI_ORTE_LOG_ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 12:57:08 2013" -->
<!-- isoreceived="20130122175708" -->
<!-- sent="Tue, 22 Jan 2013 18:57:04 +0100" -->
<!-- isosent="20130122175704" -->
<!-- name="Ada Mancuso" -->
<!-- email="mancuso.ada_at_[hidden]" -->
<!-- subject="[OMPI users] OPENMPI_ORTE_LOG_ERROR" -->
<!-- id="CAEQVjDMUnAjOxjaQ5nDUioLKcj4Ju6c+ttRWk976wi_Tfy8C9A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OPENMPI_ORTE_LOG_ERROR<br>
<strong>From:</strong> Ada Mancuso (<em>mancuso.ada_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 12:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>Previous message:</strong> <a href="21187.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Reply:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm trying to run my mpi program using open mpi 1.7 rc5 on 4 machines using
<br>
the command:
<br>
mpirun -np4 -hostfile file a.out
<br>
but i get the following message errors:
<br>
ORTE_ERROR_LOG: A message is attempting to be sent to a process whose
<br>
contact information is unknown in file
<br>
../../../../../ompi/orte/mca/rml/oob/rml_oob_send.c
<br>
attempted to send to [[21341,0],2]: tag 15
<br>
ORTE_ERROR_LOG: A message is attempting to be sent to a process whose
<br>
contact information is unknown in file
<br>
../../../../ompi/orte/mca/grpcomm/base/grpcomm_base_xcast.c
<br>
The file etc/hosts is composed by ipaddress hostname, I have exchange ssh
<br>
keys among the machines and ssh login works without requiring
<br>
authentication password. Surprisingly if I try to run my program with at
<br>
most 2 hosts, and so the file hosts contains only two hosts, it works but
<br>
if i try to run my program with more than two hosts i have this error; mpi
<br>
works well on each machine and I also tried to run my program with
<br>
different couple of machines in order to be sure that no machine could be
<br>
the problem.
<br>
Can you help me please?
<br>
Ada
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21188/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>Previous message:</strong> <a href="21187.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Reply:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
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
