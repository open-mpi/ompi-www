<?
$subject_val = "[OMPI users] mpi_comm_spawn question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 10:34:09 2014" -->
<!-- isoreceived="20140703143409" -->
<!-- sent="Thu, 3 Jul 2014 16:34:07 +0200" -->
<!-- isosent="20140703143407" -->
<!-- name="Milan Hodoscek" -->
<!-- email="milan_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_comm_spawn question" -->
<!-- id="21429.27103.403201.686460_at_ala.cmm.ki.si" -->
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
<strong>Subject:</strong> [OMPI users] mpi_comm_spawn question<br>
<strong>From:</strong> Milan Hodoscek (<em>milan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-03 10:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24745.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Previous message:</strong> <a href="24743.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24745.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Reply:</strong> <a href="24745.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Reply:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run the following setup in fortran without much
<br>
success:
<br>
<p>I have an MPI program, that uses mpi_comm_spawn which spawns some
<br>
interface program that communicates with the one that spawned it. This
<br>
spawned program then prepares some data and uses call system()
<br>
statement in fortran. Now if the program that is called from system is
<br>
not mpi program itself everything is running OK. But I want to run the
<br>
program with something like mpirun -n X ... and then this is a no go.
<br>
<p>Different versions of open mpi give different messages before they
<br>
either die or hang. I googled all the messages but all I get is just
<br>
links to some openmpi sources, so I would appreciate if someone can
<br>
help me explain how to run above setup. Given so many MCA options I
<br>
hope there is one which can run the above setup ??
<br>
<p>The message for 1.6 is the following:
<br>
... routed:binomial: connection to lifeline lost (+ PIDs and port numbers)
<br>
<p>The message for 1.8.1 is:
<br>
... FORKING HNP: orted --hnp --set-sid --report-uri 18 --singleton-died-pipe 19 -mca state_novm_select 1 -mca ess_base_jobid 3378249728
<br>
<p><p>If this is not trivial to solve problem I can provide a simple test
<br>
programs (we need 3) that show all of this.
<br>
<p>Thanks,
<br>
<p><p>Milan Hodoscek                      
<br>
--------------
<br>
National Institute of Chemistry              tel:+386-1-476-0278
<br>
Hajdrihova 19                                fax:+386-1-476-0300        
<br>
SI-1000 Ljubljana                            e-mail: milan_at_[hidden]      
<br>
Slovenia                                     web: <a href="http://a.cmm.ki.si">http://a.cmm.ki.si</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24745.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Previous message:</strong> <a href="24743.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24745.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Reply:</strong> <a href="24745.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Reply:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
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
