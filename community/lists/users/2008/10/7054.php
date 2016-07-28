<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 19:38:12 2008" -->
<!-- isoreceived="20081020233812" -->
<!-- sent="Mon, 20 Oct 2008 17:38:05 -0600" -->
<!-- isosent="20081020233805" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="DBF391DA-E633-4050-9024-9B49B7564B1B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EA56FF6A-C66C-4E05-BF80-C138C48BED6E_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 19:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends on what you are trying to do. If you intend to use this  
<br>
solely with OMPI 1.2.x, then you could use some of those. However,  
<br>
they are risky as they are in general internal to OMPI's  
<br>
infrastructure - and thus, subject to change from one release to  
<br>
another.
<br>
<p>We do have some environmental variables that we guarantee to be  
<br>
&quot;stable&quot; across releases. You could look for OMPI_COMM_WORLD_SIZE, or  
<br>
OMPI_UNIVERSE_SIZE (there are a couple of others as well, but any of  
<br>
these would do).
<br>
<p>However, these will only tell you that the job was launched via OMPI's  
<br>
mpirun - it won't tell you that it was a parallel job. It could be a  
<br>
serial job that just happened to be launched by mpirun. For example,  
<br>
we set the same environmental params when we execute &quot;mpirun hostname&quot;  
<br>
- mpirun has no way of knowing the parallel vs serial nature of the  
<br>
app it is launching, so it sets all the variables required by a  
<br>
parallel job just-in-case.
<br>
<p>Likewise, these variables will only tell you it is a parallel job  
<br>
launched by OMPI. If you use another MPI (e.g., MVAPICH), none of  
<br>
these would be set - yet it would still be a parallel job.
<br>
<p>So it boils down to your particular mode of operation. If you only run  
<br>
with OMPI, and you would only launch via OMPI's mpirun if you wanted  
<br>
to execute in a parallel mode, then you could look for either of those  
<br>
two environmental params. Otherwise, you may have to do as Doug  
<br>
suggests and create your own &quot;flag&quot;.
<br>
<p>Ralph
<br>
<p>On Oct 20, 2008, at 4:45 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In your code branch for the parallel run you could set an  
</span><br>
<span class="quotelev1">&gt; environment or internal variable when you call mpi_init. Can you  
</span><br>
<span class="quotelev1">&gt; parse the command line (arg 0) and figure out if you are running  
</span><br>
<span class="quotelev1">&gt; parallel or serial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Oct 20, 2008, at 3:40 PM, Adams, Brian M wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I work on an application (DAKOTA) that has opted for single  
</span><br>
<span class="quotelev2">&gt;&gt; binaries with source code to detect serial vs. MPI execution at run- 
</span><br>
<span class="quotelev2">&gt;&gt; time.  While I realize there are many other ways to handle this  
</span><br>
<span class="quotelev2">&gt;&gt; (wrapper scripts, command-line switches, different binaries for  
</span><br>
<span class="quotelev2">&gt;&gt; serial vs. MPI, etc.), I'm looking for a reliable way to detect (in  
</span><br>
<span class="quotelev2">&gt;&gt; source) whether a binary has been launched in serial or with orterun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We typically do this via detecting environment variables, so the  
</span><br>
<span class="quotelev2">&gt;&gt; easiest path for me would be to know an environment variable  
</span><br>
<span class="quotelev2">&gt;&gt; present when an application is invoked with orterun that is not  
</span><br>
<span class="quotelev2">&gt;&gt; typically present outside that MPI runtime environment.  Some  
</span><br>
<span class="quotelev2">&gt;&gt; candidates that came up in my particular environment include the  
</span><br>
<span class="quotelev2">&gt;&gt; following, but I don't know if any is a safe bet:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_gpr_replica_uri
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_mpi_paffinity_processor
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_mpi_yield_when_idle
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ns_nds
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ns_nds_cellid
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ns_nds_jobid
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ns_nds_num_procs
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ns_nds_vpid
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ns_nds_vpid_start
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ns_replica_uri
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_app_num
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_base_nodename
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_precondition_transports
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_pls
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ras
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rds
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rmaps
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rmgr
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_universe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd also welcome suggestions for other in-source tests that might  
</span><br>
<span class="quotelev2">&gt;&gt; reliably detect run via orterun.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; Brian M. Adams, PhD (briadam_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; Optimization and Uncertainty Estimation
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories, Albuquerque, NM
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7053.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
