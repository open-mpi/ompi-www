<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 13:28:14 2006" -->
<!-- isoreceived="20061109182814" -->
<!-- sent="Thu, 9 Nov 2006 13:27:56 -0500" -->
<!-- isosent="20061109182756" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?" -->
<!-- id="8958145C-1DA7-4731-A850-BA5CED0F8689_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45536F6F.8020807_at_cs.indiana.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 13:27:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2166.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2164.php">Kenneth Chiu: "[OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>In reply to:</strong> <a href="2164.php">Kenneth Chiu: "[OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2166.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Reply:</strong> <a href="2166.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the name of the verbose argument is coll_base_verbose. You  
<br>
can check using ompi_info.
<br>
<p>ompi_info --param coll tuned | grep verbose
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_base_verbose&quot; (current  
<br>
value: &quot;0&quot;)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 9, 2006, at 1:11 PM, Kenneth Chiu wrote:
<br>
<p><span class="quotelev1">&gt; I am having a hanging problem using bcast that I'm trying to track
</span><br>
<span class="quotelev1">&gt; down.  I added the above, hoping to get some debugging output,
</span><br>
<span class="quotelev1">&gt; but didn't see any.  I am using slurm in batch mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      slurm -n 20 -b slurm_script.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and slurm_script.sh contains:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun -np $SLURM_NPROCS --mca coll_tuned_base_verbose 1 /u/ 
</span><br>
<span class="quotelev1">&gt; chiuk/cfd/main
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I also tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun -np $SLURM_NPROCS --mca coll ^tuned /u/chiuk/cfd/main
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but got the same hang.  This is on odin.cs.indiana.edu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2166.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2164.php">Kenneth Chiu: "[OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>In reply to:</strong> <a href="2164.php">Kenneth Chiu: "[OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2166.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Reply:</strong> <a href="2166.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
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
