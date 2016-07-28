<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 14:10:39 2006" -->
<!-- isoreceived="20061109191039" -->
<!-- sent="Thu, 09 Nov 2006 14:10:08 -0500" -->
<!-- isosent="20061109191008" -->
<!-- name="Kenneth Chiu" -->
<!-- email="chiuk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where does the output for	-mca	coll_tuned_base_verbose go?" -->
<!-- id="45537D10.1090800_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F5DF3C22-4C30-41FB-8EB7-70CD88619134_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-11-09 14:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<li><strong>Previous message:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>In reply to:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That does seem to be the problem.  I'm looking into it more.
<br>
<p>On 11/9/2006 2:00 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Did you compile Open MPI in debug mode ? Without the debug mode no  
</span><br>
<span class="quotelev1">&gt; output will be available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 9, 2006, at 1:53 PM, Kenneth Chiu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I mistyped that.  I should have known better than to
</span><br>
<span class="quotelev2">&gt;&gt; type rather than cut-and-paste.  A cut-and-paste from
</span><br>
<span class="quotelev2">&gt;&gt; shell script is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      mpirun -np $SLURM_NPROCS -mca coll_base_verbose 1 -mca  
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_bcast_algorithm 0 /u/chiuk/cfd/main
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/9/2006 1:27 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the name of the verbose argument is coll_base_verbose. You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can check using ompi_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --param coll tuned | grep verbose
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA coll: parameter &quot;coll_base_verbose&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 9, 2006, at 1:11 PM, Kenneth Chiu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having a hanging problem using bcast that I'm trying to track
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; down.  I added the above, hoping to get some debugging output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but didn't see any.  I am using slurm in batch mode.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      slurm -n 20 -b slurm_script.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and slurm_script.sh contains:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mpirun -np $SLURM_NPROCS --mca coll_tuned_base_verbose 1 /u/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; chiuk/cfd/main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By the way, I also tried:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mpirun -np $SLURM_NPROCS --mca coll ^tuned /u/chiuk/cfd/main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but got the same hang.  This is on odin.cs.indiana.edu.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<li><strong>Previous message:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<li><strong>In reply to:</strong> <a href="2167.php">George Bosilca: "Re: [OMPI users] Where does the output for -mca	coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
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
