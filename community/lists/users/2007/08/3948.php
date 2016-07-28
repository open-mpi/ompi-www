<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 11:51:28 2007" -->
<!-- isoreceived="20070830155128" -->
<!-- sent="Thu, 30 Aug 2007 17:51:19 +0200" -->
<!-- isosent="20070830155119" -->
<!-- name="Murat Knecht" -->
<!-- email="MKNECHT_at_[hidden]" -->
<!-- subject="[OMPI users] Circumvent --host or dynamically read host info?" -->
<!-- id="OF4AC7422E.28B1FBAD-ONC1257347.0055F5D3-C1257347.0056EE35_at_de.ibm.com" -->
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
<strong>From:</strong> Murat Knecht (<em>MKNECHT_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 11:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3949.php">Ron Brightwell: "[OMPI users] Cluster'07 - Early registration ending"</a>
<li><strong>Previous message:</strong> <a href="3947.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3953.php">Ralph H Castain: "Re: [OMPI users] Circumvent --host or dynamically read host info?"</a>
<li><strong>Reply:</strong> <a href="3953.php">Ralph H Castain: "Re: [OMPI users] Circumvent --host or dynamically read host info?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a question regarding the --host(file) option of mpirun. Whenever I
<br>
try to fork a process on another node using Spawn(), I get the following
<br>
message:
<br>
<p>Verify that you have mapped the allocated resources properly using the
<br>
--host specification.
<br>
<p>I understand this can be fixed by providing the hostnames which will be
<br>
used either by --host or by using a hostfile containing the names and
<br>
possibly the slots available.
<br>
This may be an acceptable solution, if one wants to start the same process
<br>
on several blades, but what about starting a parent process which then
<br>
initiates different child processes on other blades?
<br>
In this scenario mpirun initially does not need the information of which
<br>
other blades exist, but is only supposed to start the parent process
<br>
locally. Surely, there must be a way not to previously specify blades, but
<br>
to load this information at runtime, especially in a changing landscape
<br>
where nodes are added at runtime.
<br>
Is there a way to avoid this --host option?
<br>
<p>I'm using the latest version of OpenMPI (1.2.3).
<br>
<p>Best regards,
<br>
Murat
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3949.php">Ron Brightwell: "[OMPI users] Cluster'07 - Early registration ending"</a>
<li><strong>Previous message:</strong> <a href="3947.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3953.php">Ralph H Castain: "Re: [OMPI users] Circumvent --host or dynamically read host info?"</a>
<li><strong>Reply:</strong> <a href="3953.php">Ralph H Castain: "Re: [OMPI users] Circumvent --host or dynamically read host info?"</a>
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
