<?
$subject_val = "Re: [OMPI users] restricting a job to a set of hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 18:21:11 2012" -->
<!-- isoreceived="20120726222111" -->
<!-- sent="Fri, 27 Jul 2012 00:20:59 +0200" -->
<!-- isosent="20120726222059" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] restricting a job to a set of hosts" -->
<!-- id="D3A8FF42-A873-4AC1-BB01-A98C21A85934_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAM=OgihvaYuuQS1zHv4Lm-W4pPxcM5YeuDm_mSoRrSHemG0gtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] restricting a job to a set of hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 18:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>In reply to:</strong> <a href="19834.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19845.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19845.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 26.07.2012 um 23:58 schrieb Erik Nelson:
<br>
<p><span class="quotelev1">&gt; Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you. Our queue is backed up, so it will take a little while before I can try this. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume that by specifying the nodes this way, I don't need (and it would confuse 
</span><br>
<span class="quotelev1">&gt; the system) to add -nolocal. In other words, qsub will try to put the parent node 
</span><br>
<span class="quotelev1">&gt; somewhere in this set. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the idea?
</span><br>
<p>Depends what you refer to by &quot;parent node&quot;. I assume you mean the submit host. This is never included in any created selection of SGE unless it's an execution host too.
<br>
<p>The master host of the parallel job (i.e. the one where the jobscript with the `mpiexec` is running) will be used as a normal machine from MPI's point of view.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Erik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 26, 2012 at 4:48 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Am 26.07.2012 um 23:33 schrieb Erik Nelson:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a purely parallel job that runs ~100 processes. Each process has ~identical
</span><br>
<span class="quotelev2">&gt; &gt; overhead so the speed of the program is dominated by the slowest processor.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For this reason, I would like to restrict the job to a specific set of identical (fast)
</span><br>
<span class="quotelev2">&gt; &gt; processors on our cluster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I read the FAQ on -hosts and -hostfile, but it is still unclear to me what affect these
</span><br>
<span class="quotelev2">&gt; &gt; directives will have in a queuing environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Currently, I submit the job using the &quot;qsub&quot; command in the &quot;sge&quot; environment as :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             qsub -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where jobfile contains the command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             mpirun -np 101 -nolocal ./executable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would leave -nolocal out here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -l &quot;h=compute-5-[1-9]|compute-5-1[0-9]|compute-5-2[0-9]|compute-5-3[0-2]&quot; -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would like to restrict the job to nodes compute-5-1 to compute-5-32 on our machine,
</span><br>
<span class="quotelev2">&gt; &gt; each containing 8 cpu's (slots). How do I go about this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Erik
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Nelson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev1">&gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev1">&gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p : 214 645 5981
</span><br>
<span class="quotelev1">&gt; f : 214 645 5948
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
<li><strong>Next message:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>In reply to:</strong> <a href="19834.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19845.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19845.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
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
