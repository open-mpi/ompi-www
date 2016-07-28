<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 13:12:30 2006" -->
<!-- isoreceived="20061109181230" -->
<!-- sent="Thu, 09 Nov 2006 13:11:59 -0500" -->
<!-- isosent="20061109181159" -->
<!-- name="Kenneth Chiu" -->
<!-- email="chiuk_at_[hidden]" -->
<!-- subject="[OMPI users] Where does the output for -mca coll_tuned_base_verbose go?" -->
<!-- id="45536F6F.8020807_at_cs.indiana.edu" -->
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
<strong>From:</strong> Kenneth Chiu (<em>chiuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 13:11:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2163.php">&#197;ke Sandgren: "[OMPI users] configure tests broken for pthreads in some situations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>Reply:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having a hanging problem using bcast that I'm trying to track
<br>
down.  I added the above, hoping to get some debugging output,
<br>
but didn't see any.  I am using slurm in batch mode.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slurm -n 20 -b slurm_script.sh
<br>
<p>and slurm_script.sh contains:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np $SLURM_NPROCS --mca coll_tuned_base_verbose 1 /u/chiuk/cfd/main
<br>
<p>By the way, I also tried:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np $SLURM_NPROCS --mca coll ^tuned /u/chiuk/cfd/main
<br>
<p>but got the same hang.  This is on odin.cs.indiana.edu.
<br>
<p>Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2163.php">&#197;ke Sandgren: "[OMPI users] configure tests broken for pthreads in some situations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>Reply:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
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
