<?
$subject_val = "[OMPI users] How do I integrate OpenMPI with a local cluster and EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 18:39:35 2010" -->
<!-- isoreceived="20100417223935" -->
<!-- sent="Sat, 17 Apr 2010 16:39:28 -0600" -->
<!-- isosent="20100417223928" -->
<!-- name="Theodore Van Rooy" -->
<!-- email="theodore.vanrooy_at_[hidden]" -->
<!-- subject="[OMPI users] How do I integrate OpenMPI with a local cluster and EC2" -->
<!-- id="u2j3c8226f71004171539wa148b1f9r4aef43cd72eb698_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How do I integrate OpenMPI with a local cluster and EC2<br>
<strong>From:</strong> Theodore Van Rooy (<em>theodore.vanrooy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 18:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12674.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12679.php">Ralph Castain: "Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<li><strong>Reply:</strong> <a href="12679.php">Ralph Castain: "Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm trying to add EC2 instances into my local cluster with openMPI.  So far
<br>
openMPI works well on the local cluster, and I have set up passwordless SSH
<br>
between the local cluster and the Amazon EC2 instance.
<br>
<p>Howver, when I add the public DNS into a file (defaulthostfiletest)
<br>
<p>comp1 slots=2 max-slots=8
<br>
comp2 slots=2 max-slots=8
<br>
comp3 slots=2 max-slots=4
<br>
ec2-174-129-183-64.compute-1.amazonaws.com slots=2 max-slots=2
<br>
<p>and then run:
<br>
<p>[/home/ntlp/cashmoney/mainFrame]$mpirun -np 6 --hostfile defaulthostfiletest
<br>
hostname
<br>
foretell
<br>
foretell
<br>
augur
<br>
augur
<br>
predict
<br>
predict
<br>
<p>it works, but trying to use the amazon cluster I get:
<br>
<p>[/home/ntlp/cashmoney/mainFrame]$mpirun -np 8 --hostfile defaulthostfiletest
<br>
hostname (it hangs so I kill it)
<br>
^C^Cmpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ec2-174-129-183-64.compute-1.amazonaws.com - daemon did not report
<br>
back when launched
<br>
<p>Any advice?  are there any settings in /etc/sssh/sshd_config that I might
<br>
need to change?
<br>
<p>Theo
<br>
<pre>
-- 
Theodore Van Rooy
<a href="http://greentheo.scroggles.com">http://greentheo.scroggles.com</a>
-- 
Theodore Van Rooy
<a href="http://greentheo.scroggles.com">http://greentheo.scroggles.com</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12674.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12679.php">Ralph Castain: "Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<li><strong>Reply:</strong> <a href="12679.php">Ralph Castain: "Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
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
