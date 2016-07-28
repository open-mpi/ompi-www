<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 07:41:39 2010" -->
<!-- isoreceived="20101117124139" -->
<!-- sent="Wed, 17 Nov 2010 12:41:32 +0000" -->
<!-- isosent="20101117124132" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="7AE8255B-7028-479F-8DCC-93763B3FE598_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE3C308.9080600_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Chris Jewell (<em>chris.jewell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 07:41:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17 Nov 2010, at 11:56, Terry Dontje wrote:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You are absolutely correct, Terry, and the 1.4 release series does include the proper code. The point here, though, is that SGE binds the orted to a single core, even though other cores are also allocated. So the orted detects an external binding of one core, and binds all its children to that same core.
</span><br>
<span class="quotelev1">&gt; I do not think you are right here.  Chris sent the following which looks like OGE (fka SGE) actually did bind the hnp to multiple cores.  However that message I believe is not coming from the processes themselves and actually is only shown by the hnp.  I wonder if Chris adds a &quot;-bind-to-core&quot; option  we'll see more output from the a.out's before they exec unterm?
</span><br>
<p>As requested using 
<br>
<p>$ qsub -pe mpi 8 -binding linear:2 myScript.com'  
<br>
<p>and 
<br>
<p>'mpirun -mca ras_gridengine_verbose 100 --report-bindings -by-core -bind-to-core ./unterm'
<br>
<p>[exec5:06671] System has detected external process binding to cores 0028
<br>
[exec5:06671] ras:gridengine: JOB_ID: 59434
<br>
[exec5:06671] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec5/active_jobs/59434.1/pe_hostfile
<br>
[exec5:06671] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=2
<br>
[exec5:06671] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
<br>
[exec5:06671] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec5:06671] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec5:06671] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec5:06671] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
<p>No more info.  I note that the external binding is slightly different to what I had before, but our cluster is busier today :-)
<br>
<p>Chris
<br>
<p><p><pre>
--
Dr Chris Jewell
Department of Statistics
University of Warwick
Coventry
CV4 7AL
UK
Tel: +44 (0)24 7615 0778
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14806.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
