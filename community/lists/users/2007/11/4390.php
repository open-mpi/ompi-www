<?
$subject_val = "[OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 11:02:53 2007" -->
<!-- isoreceived="20071102150253" -->
<!-- sent="Fri, 2 Nov 2007 16:02:48 +0100" -->
<!-- isosent="20071102150248" -->
<!-- name="himanshu khandelia" -->
<!-- email="hkhandelia_at_[hidden]" -->
<!-- subject="[OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)" -->
<!-- id="897c4ba20711020802t76e73d37s1fbaa7c4fbc2eec4_at_mail.gmail.com" -->
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
<strong>From:</strong> himanshu khandelia (<em>hkhandelia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-02 11:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4389.php">Oleg Morajko: "[OMPI users] MPI_Request and attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<li><strong>Reply:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This question is about the use of a simulation package called GROMACS.
<br>
<p>PS: On our cluster (quad-core nodes), GROMACS does not scale well
<br>
beyond 4 cpus. So, I wish to run two different simulations, while
<br>
requesting 2 nodes (1 simulation on each node) to best exploit the
<br>
policies of our MAUI scheduler.
<br>
<p>So, I am requesting 2 4-cpu nodes on a cluster using PBS. I want to
<br>
run a separate simulation on each 4-cpu node. However, on 2 nodes, the
<br>
speed for each simulation decreases (50 to 100%) if compared to a
<br>
simulation which runs in a job which requests only one node. I am
<br>
guessing this is because openmpi fails to assign all cpus of the same
<br>
node to one simulation ? Instead, cpus from different nodes are being
<br>
used to run simulation. This is what I have in the PBS script
<br>
<p>1.
<br>
########
<br>
mpirun -np 4  my-gromacs-executable-for-simulation-1 -np 4  &amp;
<br>
mpirun -np 4  my-gromacs-executable-for-simulation-1-np 4  &amp;
<br>
<p># (THE GROMACS EXECUTABLE DOES REQUIRE A REPEAT REQUEST FOR THE NUMBER
<br>
OF PROCESSORS)
<br>
<p>wait
<br>
########
<br>
<p>OPENMPI does have a mechanism whereby one can assign specific
<br>
processes to specific nodes
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
<br>
<p>So, I also tried all of the following in the PBS script where the
<br>
--bynode or the --byslot option is used
<br>
<p>2.
<br>
########
<br>
mpirun -np 4  --bynode my-gromacs-executable-for-simulation-1  -np 4 &amp;
<br>
mpirun -np 4  --bynode my-gromacs-executable-for-simulation-2  -np 4 &amp;
<br>
wait
<br>
########
<br>
<p>3.
<br>
########
<br>
mpirun -np 4  --byslot  my-gromacs-executable-for-simulation-1 -np 4 &amp;
<br>
mpirun -np 4  --byslot  my-gromacs-executable-for-simulation-2 -np 4 &amp;
<br>
wait
<br>
########
<br>
<p>But these methods also result in similar performance losses.
<br>
<p>So how does one assign the cpus properly using mpirun if running
<br>
different simulations in the same PBS job  ??
<br>
<p>Thank you for the help,
<br>
<p>-Himanshu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4391.php">Jon Mason: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4389.php">Oleg Morajko: "[OMPI users] MPI_Request and attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<li><strong>Reply:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
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
