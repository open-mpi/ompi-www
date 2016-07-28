<?
$subject_val = "[OMPI users] Distribute app over open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 11:10:17 2009" -->
<!-- isoreceived="20091106161017" -->
<!-- sent="Fri, 6 Nov 2009 08:10:12 -0800 (PST)" -->
<!-- isosent="20091106161012" -->
<!-- name="Arnaud Westenberg" -->
<!-- email="arnaud_westenberg_at_[hidden]" -->
<!-- subject="[OMPI users] Distribute app over open mpi" -->
<!-- id="331795.32121.qm_at_web43142.mail.sp1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Distribute app over open mpi<br>
<strong>From:</strong> Arnaud Westenberg (<em>arnaud_westenberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 11:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11092.php">Kritiraj Sajadah: "[OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Reply:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Reply:</strong> <a href="11101.php">Terry Frankcombe: "Re: [OMPI users] Distribute app over open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Sorry for the newbie question, but I'm having a hard time finding the answer, as I'm not even familiar with the terminology...
<br>
<p>I've setup a small cluster on Ubuntu (hardy) and everything is working great, including slurm etc. If I run the well known 'Pi' program I get the proper results returned from all the nodes.
<br>
<p>However, I'm looking for a way such that I wouldn't need to install the application on each node, nor on the shared nfs. Currently I get the obvious error that the app is not found on the nodes on which it isn't installed.
<br>
<p>The idea is that the master node would thus distribute the required (parts of the) program to the slave nodes so they can perform the assigned work.
<br>
<p>Reason is that I want to run an FEA package on a much larger (redhat) cluster we currently use for CDF calculations. I really don't want to mess up the cluster as we bought it already configured and compiling new versions of the FEA package on it turns out to be a missing library nightmare.
<br>
<p>Thanks for your help.
<br>
<p>Regards,
<br>
<p><p>Arnaud
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11092.php">Kritiraj Sajadah: "[OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Reply:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>Reply:</strong> <a href="11101.php">Terry Frankcombe: "Re: [OMPI users] Distribute app over open mpi"</a>
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
