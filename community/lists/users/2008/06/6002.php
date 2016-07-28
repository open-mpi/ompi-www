<?
$subject_val = "[OMPI users] checkpoint file contains nothing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 29 08:22:17 2008" -->
<!-- isoreceived="20080629122217" -->
<!-- sent="Sun, 29 Jun 2008 05:22:03 -0700 (PDT)" -->
<!-- isosent="20080629122203" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] checkpoint file contains nothing" -->
<!-- id="806298.45178.qm_at_web31004.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] checkpoint file contains nothing<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-29 08:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6003.php">Geoffroy Pignot: "[OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6001.php">Doug Roberts: "[OMPI users] Processes Not Restarting On Requested Hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have installed the openmpi-1.3a1r18651 and tried to checkpoint an mpi application. 
<br>
&nbsp;
<br>
raj_at_portal018:~/examples&gt; mpirun  -np 1 -am ft-enable-cr ./myapp.sh &amp;
<br>
&nbsp;
<br>
raj_at_portal018:~/examples&gt; ompi-checkpoint --term 30416
<br>
<p>&nbsp;
<br>
However, when i try to restart the checkped file, I get the following message. 
<br>
&nbsp;
<br>
&nbsp;
<br>
raj_at_portal018:~&gt; ompi-restart -v -machinefile portal018 ompi_global_snapshot_30416.ckpt
<br>
[portal018:20178] Checking for the existence of (/home/raj/ompi_global_snapshot_30416.ckpt)
<br>
[portal018:20178] Restarting from file (ompi_global_snapshot_30416.ckpt)
<br>
[portal018:20178]        Exec in self
<br>
--------------------------------------------------------------------------
<br>
mpirun could not find anything to do.
<br>
It is possible that you forgot to specify how many processes to run
<br>
via the &quot;-np&quot; argument.
<br>
--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
Any help will be very appreciated.
<br>
&nbsp;
<br>
Regards,
<br>
&nbsp;
<br>
Raj
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6003.php">Geoffroy Pignot: "[OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6001.php">Doug Roberts: "[OMPI users] Processes Not Restarting On Requested Hosts"</a>
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
