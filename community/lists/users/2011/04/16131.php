<?
$subject_val = "Re: [OMPI users] WRF run on multiple Nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 23:31:13 2011" -->
<!-- isoreceived="20110405033113" -->
<!-- sent="Tue, 5 Apr 2011 08:31:08 +0500" -->
<!-- isosent="20110405033108" -->
<!-- name="Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF run on multiple Nodes" -->
<!-- id="BANLkTi=fOQt5kovtVTOc43r-MA=bbc73uA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTin9KNwjD-bPTML10ND8pVwpq+iySA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF run on multiple Nodes<br>
<strong>From:</strong> Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 23:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Maybe in reply to:</strong> <a href="16068.php">Ahsan Ali: "[OMPI users] WRF run on multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Reply:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear John Hearns,
<br>
<p>&nbsp;The cluster is installed using Platform cluster Manager (PCM). LSF is
<br>
installed but no OpenMPI application is yet integrated with LSF.
<br>
&nbsp;WRF help gave me following instructions.
<br>
<p>mpirun -v -machinefile ~/mach.conf -np 2 wrf.exe
<br>
<p>Please talk to your computer manager about how to setup mach.conf and allow
<br>
communications between nodes.
<br>
<p>Ahsan,
<br>
&nbsp;you have a Dell cluster. Can we ask which company installed the
<br>
cluster, and who manages the cluster?
<br>
The company who installed it should have given you some documentation
<br>
on how to run MPI jobs.
<br>
<p>Also can we ask if there is a batch scheduler or workload management
<br>
software on this cluster?
<br>
I ask because if there is PBS, Gridengine, LSF etc. installed there
<br>
will be an 'integration; with OpenMPI
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Maybe in reply to:</strong> <a href="16068.php">Ahsan Ali: "[OMPI users] WRF run on multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Reply:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
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
