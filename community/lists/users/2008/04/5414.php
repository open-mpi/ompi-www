<?
$subject_val = "[OMPI users] How to restart a job twice";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 01:14:16 2008" -->
<!-- isoreceived="20080418051416" -->
<!-- sent="Thu, 17 Apr 2008 22:14:03 -0700" -->
<!-- isosent="20080418051403" -->
<!-- name="Tamer" -->
<!-- email="tamer_at_[hidden]" -->
<!-- subject="[OMPI users] How to restart a job twice" -->
<!-- id="104A81D1-02E0-4968-BA65-ED63028E7E04_at_caltech.edu" -->
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
<strong>Subject:</strong> [OMPI users] How to restart a job twice<br>
<strong>From:</strong> Tamer (<em>tamer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-18 01:14:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5413.php">Mukesh K Srivastava: "[OMPI users] GDB Debugging - GROMACS(v-3.3.3) Application with OpenMPI(v-1.2.5/v-1.2.6)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, I installed the developer's version r14519 and was able to  
<br>
get it running. I successfully checkpointed a parallel job and  
<br>
restarted it. My question is how can I checkpoint the restarted job?  
<br>
The problem is once the original job is terminated and restarted later  
<br>
on, the mpirun does not exist anymore (ps -efa|grep mpirun) and hence  
<br>
I do not know which PID I should use when I run the ompi-checkpoint on  
<br>
the restarted job. Any help would be greatly appreciated.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5413.php">Mukesh K Srivastava: "[OMPI users] GDB Debugging - GROMACS(v-3.3.3) Application with OpenMPI(v-1.2.5/v-1.2.6)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
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
