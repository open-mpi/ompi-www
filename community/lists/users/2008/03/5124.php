<?
$subject_val = "[OMPI users] -prefix option to mpirun.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 09:28:27 2008" -->
<!-- isoreceived="20080304142827" -->
<!-- sent="Tue, 04 Mar 2008 14:28:20 +0000" -->
<!-- isosent="20080304142820" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="[OMPI users] -prefix option to mpirun." -->
<!-- id="1204640900.6621.20.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> [OMPI users] -prefix option to mpirun.<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 09:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5127.php">Aurélien Bouteiller: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5129.php">Doug Reeder: "Re: [OMPI users] -prefix option to mpirun."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I work for medium sized UK based ISV and am packaging open-mpi so that
<br>
is can be made available as an option to our users, so far I've been
<br>
very impressed by how smoothly things have gone but I've got one problem
<br>
which doesn't seem to be covered by the FAQ.
<br>
<p>We install openmpi to /opt/openmpi-1.2.5 and are using the modules
<br>
command to select which mpi to use, the modules command correctly sets
<br>
PATH to pick up mpicc and mpirun on the head node however the issue
<br>
comes with running a job, users need to specify -prefix on the mpirun
<br>
command line.  Is there a way to specify this in the environment so I
<br>
could make it happen automatically as part of the modules environment?
<br>
<p>I've searched the archives for this, the closest I can find is this
<br>
exchange in 2006, if I specify a full path to mpirun then it does the
<br>
right thing but is there a way to extend this functionality to the case
<br>
where mpirun is run from path?
<br>
<a href="http://www.open-mpi.org/community/lists/users/2006/01/0480.php">http://www.open-mpi.org/community/lists/users/2006/01/0480.php</a>
<br>
<p>Yours,  Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5127.php">Aurélien Bouteiller: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5129.php">Doug Reeder: "Re: [OMPI users] -prefix option to mpirun."</a>
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
