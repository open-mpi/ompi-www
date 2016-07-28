<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 18:53:34 2008" -->
<!-- isoreceived="20081020225334" -->
<!-- sent="Mon, 20 Oct 2008 15:45:00 -0700" -->
<!-- isosent="20081020224500" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="EA56FF6A-C66C-4E05-BF80-C138C48BED6E_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0801CEC7AFED846978515099D145DA512837377DC_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 18:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>In your code branch for the parallel run you could set an environment  
<br>
or internal variable when you call mpi_init. Can you parse the  
<br>
command line (arg 0) and figure out if you are running parallel or  
<br>
serial.
<br>
<p>Doug Reeder
<br>
On Oct 20, 2008, at 3:40 PM, Adams, Brian M wrote:
<br>
<p><span class="quotelev1">&gt; I work on an application (DAKOTA) that has opted for single  
</span><br>
<span class="quotelev1">&gt; binaries with source code to detect serial vs. MPI execution at run- 
</span><br>
<span class="quotelev1">&gt; time.  While I realize there are many other ways to handle this  
</span><br>
<span class="quotelev1">&gt; (wrapper scripts, command-line switches, different binaries for  
</span><br>
<span class="quotelev1">&gt; serial vs. MPI, etc.), I'm looking for a reliable way to detect (in  
</span><br>
<span class="quotelev1">&gt; source) whether a binary has been launched in serial or with orterun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We typically do this via detecting environment variables, so the  
</span><br>
<span class="quotelev1">&gt; easiest path for me would be to know an environment variable  
</span><br>
<span class="quotelev1">&gt; present when an application is invoked with orterun that is not  
</span><br>
<span class="quotelev1">&gt; typically present outside that MPI runtime environment.  Some  
</span><br>
<span class="quotelev1">&gt; candidates that came up in my particular environment include the  
</span><br>
<span class="quotelev1">&gt; following, but I don't know if any is a safe bet:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_gpr_replica_uri
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_paffinity_processor
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_yield_when_idle
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_cellid
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_jobid
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_num_procs
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_vpid
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_vpid_start
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_replica_uri
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_app_num
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_base_nodename
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_precondition_transports
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pls
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ras
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rds
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmgr
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd also welcome suggestions for other in-source tests that might  
</span><br>
<span class="quotelev1">&gt; reliably detect run via orterun.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; Brian M. Adams, PhD (briadam_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Optimization and Uncertainty Estimation
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories, Albuquerque, NM
</span><br>
<span class="quotelev1">&gt; <a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7054.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
