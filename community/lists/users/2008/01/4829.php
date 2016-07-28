<?
$subject_val = "Re: [OMPI users] getenv issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 23:14:58 2008" -->
<!-- isoreceived="20080115041458" -->
<!-- sent="Mon, 14 Jan 2008 22:12:36 -0600" -->
<!-- isosent="20080115041236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getenv issue" -->
<!-- id="6D3ACE11-DAB1-410C-AC19-4DAC079ADF9E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7D52BEC5-5507-48C6-9354-F30B168C487D_at_cchmc.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-14 23:12:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4830.php">Rajesh Sudarsan: "[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>Previous message:</strong> <a href="4828.php">Priya Natarajan: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>In reply to:</strong> <a href="4783.php">Prakash Velayutham: "[OMPI users] getenv issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
<li><strong>Reply:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, this mail slipped by me.
<br>
<p>The most common reason that I have seen this happen is if you are not  
<br>
using the TM support in Open MPI to launch the MPI processes on your  
<br>
allocated nodes.
<br>
<p>I do not have a TM system to test with, but I *believe* that TM will  
<br>
replicate your entire environment (including $PBS_JOBID) out on the  
<br>
back-end nodes before starting the job.
<br>
<p>Are you seeing cases where this is not happening?
<br>
<p>More below.
<br>
<p><p>On Jan 5, 2008, at 3:48 AM, Prakash Velayutham wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to start a simple MPI code below using Open MPI 1.2.4 and
</span><br>
<span class="quotelev1">&gt; Torque 2.2.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; cat pbs.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int gdb_var;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void main(argc, argv)
</span><br>
<span class="quotelev1">&gt; int argc;
</span><br>
<span class="quotelev1">&gt; char **argv;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank, size, ret;
</span><br>
<span class="quotelev1">&gt;     gdb_var = 0;
</span><br>
<span class="quotelev1">&gt;     char *jobid;
</span><br>
<span class="quotelev1">&gt;     ret = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     if (ret != 0) printf(&quot;ERROR with MPI initialization\n&quot;);
</span><br>
<span class="quotelev1">&gt;     ret = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     if (ret != 0) printf(&quot;ERROR with MPI ranking\n&quot;);
</span><br>
<span class="quotelev1">&gt;     ret = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     if (ret != 0) printf(&quot;ERROR with MPI sizes\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (0 == rank) {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Host %d ready to attach\n&quot;,rank);
</span><br>
<span class="quotelev1">&gt;         fflush(stdout);
</span><br>
<span class="quotelev1">&gt;         while (0 == gdb_var) sleep(5);
</span><br>
<span class="quotelev1">&gt;         jobid = getenv(&quot;PBS_JOBID&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Job id is %s\n&quot;, *jobid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't think you should be de-referncing jobid here.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (!jobid)
</span><br>
<span class="quotelev1">&gt;             error(&quot;PBS_JOBID not set in environment.  Code must be
</span><br>
<span class="quotelev1">&gt; run from a\n&quot;
</span><br>
<span class="quotelev1">&gt;                   &quot;  PBS script, perhaps interactively using \&quot;qsub -I
</span><br>
<span class="quotelev1">&gt; \&quot;&quot;);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>main() is supposed to return an int.  ;-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; mpiexec -np 4 --
</span><br>
<span class="quotelev1">&gt; prefix /usr/local/openmpi-1.2.4 ./pbs
</span><br>
<span class="quotelev1">&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmm.  This output doesn't seem to match the code above...?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As shown above, for some reason, PBS_JOBID is not getting set in the
</span><br>
<span class="quotelev1">&gt; MPI's environment, even though it is available at the shell level.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; echo $PBS_JOBID
</span><br>
<span class="quotelev1">&gt; 18.fructose.cchmc.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4830.php">Rajesh Sudarsan: "[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>Previous message:</strong> <a href="4828.php">Priya Natarajan: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>In reply to:</strong> <a href="4783.php">Prakash Velayutham: "[OMPI users] getenv issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
<li><strong>Reply:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
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
