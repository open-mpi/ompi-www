<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 13:54:29 2006" -->
<!-- isoreceived="20061109185429" -->
<!-- sent="Thu, 09 Nov 2006 13:53:59 -0500" -->
<!-- isosent="20061109185359" -->
<!-- name="Kenneth Chiu" -->
<!-- email="chiuk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?" -->
<!-- id="45537947.3070802_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8958145C-1DA7-4731-A850-BA5CED0F8689_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-11-09 13:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>In reply to:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Reply:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I mistyped that.  I should have known better than to
<br>
type rather than cut-and-paste.  A cut-and-paste from
<br>
shell script is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np $SLURM_NPROCS -mca coll_base_verbose 1 -mca coll_tuned_bcast_algorithm 0 /u/chiuk/cfd/main
<br>
<p>On 11/9/2006 1:27 PM, George Bosilca wrote:
<br>
<span class="quotelev1"> &gt; I think the name of the verbose argument is coll_base_verbose. You
</span><br>
<span class="quotelev1"> &gt; can check using ompi_info.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; ompi_info --param coll tuned | grep verbose
</span><br>
<span class="quotelev1"> &gt;                  MCA coll: parameter &quot;coll_base_verbose&quot; (current
</span><br>
<span class="quotelev1"> &gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;    george.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; On Nov 9, 2006, at 1:11 PM, Kenneth Chiu wrote:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev2"> &gt;&gt; I am having a hanging problem using bcast that I'm trying to track
</span><br>
<span class="quotelev2"> &gt;&gt; down.  I added the above, hoping to get some debugging output,
</span><br>
<span class="quotelev2"> &gt;&gt; but didn't see any.  I am using slurm in batch mode.
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt;      slurm -n 20 -b slurm_script.sh
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt; and slurm_script.sh contains:
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt;      mpirun -np $SLURM_NPROCS --mca coll_tuned_base_verbose 1 /u/
</span><br>
<span class="quotelev2"> &gt;&gt; chiuk/cfd/main
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt; By the way, I also tried:
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt;      mpirun -np $SLURM_NPROCS --mca coll ^tuned /u/chiuk/cfd/main
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt; but got the same hang.  This is on odin.cs.indiana.edu.
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt; Thanks.
</span><br>
<span class="quotelev2"> &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2"> &gt;&gt; users mailing list
</span><br>
<span class="quotelev2"> &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2"> &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; _______________________________________________
</span><br>
<span class="quotelev1"> &gt; users mailing list
</span><br>
<span class="quotelev1"> &gt; users_at_[hidden]
</span><br>
<span class="quotelev1"> &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>In reply to:</strong> <a href="2165.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>Reply:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
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
