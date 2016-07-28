<?
$subject_val = "[OMPI users] mpirun exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 10:58:59 2009" -->
<!-- isoreceived="20090319145859" -->
<!-- sent="Thu, 19 Mar 2009 15:58:52 +0100" -->
<!-- isosent="20090319145852" -->
<!-- name="Cristian KLEIN" -->
<!-- email="cristiklein_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun exit status" -->
<!-- id="49C25DAC.1030407_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] mpirun exit status<br>
<strong>From:</strong> Cristian KLEIN (<em>cristiklein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 10:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8515.php">Malone, Scott: "[OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Previous message:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Reply:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody,
<br>
<p>I've been using OpenMPI 1.3's mpirun in Makefiles and observed that the
<br>
exit status is not always the one I expect. For example, using an
<br>
incorrect machinefile makes mpirun return 0, whereas a non-zero value
<br>
would be expected:
<br>
<p>--- cut here ---
<br>
masternode:~/grid/myTests/hellompi$ env | grep OMPI
<br>
OMPI_MCA_plm_rsh_agent=ssh
<br>
OMPI_MCA_btl_tcp_if_exclude=lo,myri0
<br>
OMPI_MCA_btl=self,tcp
<br>
<p>masternode:~/grid/myTests/hellompi$ mpirun.openmpi -machinefile hostfile
<br>
./hellompi.openmpi; echo $?
<br>
ssh: incorrecthost2.example.com: Name or service not known
<br>
ssh: incorrecthost1.example.com: Name or service not known
<br>
[snip]
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>0
<br>
--- end here ---
<br>
<p>The problem comes from the fact that the exitstatus of a process is ORed
<br>
with 0xFF and OpenMPI does not take this into consideration. In my
<br>
example, the exit status generated was 65280, which has the lower 8 bits
<br>
zero.
<br>
<p>To solve this problem I suggest the attached patch. If the exitstatus
<br>
would become zero, it replaces it with 111, where 111 is obviously a
<br>
randomly chosen non-zero number. :D
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8514/exitstatus.diff">exitstatus.diff</a>
</ul>
<!-- attachment="exitstatus.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8515.php">Malone, Scott: "[OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Previous message:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Reply:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
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
