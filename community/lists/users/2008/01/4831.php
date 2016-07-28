<?
$subject_val = "Re: [OMPI users] getenv issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 06:44:42 2008" -->
<!-- isoreceived="20080115114442" -->
<!-- sent="Tue, 15 Jan 2008 06:44:14 -0500" -->
<!-- isosent="20080115114414" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getenv issue" -->
<!-- id="A8070C98-0E2D-415C-A056-F2A13BB3DB9D_at_cchmc.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6D3ACE11-DAB1-410C-AC19-4DAC079ADF9E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] getenv issue<br>
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 06:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4830.php">Rajesh Sudarsan: "[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>In reply to:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Sorry that I did not come back to clean up this request. Actually, it  
<br>
was a stupid user (my) error. I had not included stdlib.h in my  
<br>
source. Sorry again and thanks for the effort.
<br>
<p>Prakash
<br>
<p>On Jan 14, 2008, at 11:12 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, this mail slipped by me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The most common reason that I have seen this happen is if you are not
</span><br>
<span class="quotelev1">&gt; using the TM support in Open MPI to launch the MPI processes on your
</span><br>
<span class="quotelev1">&gt; allocated nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have a TM system to test with, but I *believe* that TM will
</span><br>
<span class="quotelev1">&gt; replicate your entire environment (including $PBS_JOBID) out on the
</span><br>
<span class="quotelev1">&gt; back-end nodes before starting the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you seeing cases where this is not happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2008, at 3:48 AM, Prakash Velayutham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to start a simple MPI code below using Open MPI 1.2.4 and
</span><br>
<span class="quotelev2">&gt;&gt; Torque 2.2.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; cat pbs.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int gdb_var;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void main(argc, argv)
</span><br>
<span class="quotelev2">&gt;&gt; int argc;
</span><br>
<span class="quotelev2">&gt;&gt; char **argv;
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rank, size, ret;
</span><br>
<span class="quotelev2">&gt;&gt;    gdb_var = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    char *jobid;
</span><br>
<span class="quotelev2">&gt;&gt;    ret = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    if (ret != 0) printf(&quot;ERROR with MPI initialization\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    ret = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;    if (ret != 0) printf(&quot;ERROR with MPI ranking\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    ret = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;    if (ret != 0) printf(&quot;ERROR with MPI sizes\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    if (0 == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;Host %d ready to attach\n&quot;,rank);
</span><br>
<span class="quotelev2">&gt;&gt;        fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;        while (0 == gdb_var) sleep(5);
</span><br>
<span class="quotelev2">&gt;&gt;        jobid = getenv(&quot;PBS_JOBID&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;Job id is %s\n&quot;, *jobid);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think you should be de-referncing jobid here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if (!jobid)
</span><br>
<span class="quotelev2">&gt;&gt;            error(&quot;PBS_JOBID not set in environment.  Code must be
</span><br>
<span class="quotelev2">&gt;&gt; run from a\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                  &quot;  PBS script, perhaps interactively using \&quot;qsub -I
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main() is supposed to return an int.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; mpiexec -np 4 --
</span><br>
<span class="quotelev2">&gt;&gt; prefix /usr/local/openmpi-1.2.4 ./pbs
</span><br>
<span class="quotelev2">&gt;&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  This output doesn't seem to match the code above...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As shown above, for some reason, PBS_JOBID is not getting set in the
</span><br>
<span class="quotelev2">&gt;&gt; MPI's environment, even though it is available at the shell level.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; echo $PBS_JOBID
</span><br>
<span class="quotelev2">&gt;&gt; 18.fructose.cchmc.org
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas why?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4830.php">Rajesh Sudarsan: "[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>In reply to:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
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
