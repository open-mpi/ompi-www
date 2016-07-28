<?
$subject_val = "Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 13:18:50 2012" -->
<!-- isoreceived="20120308181850" -->
<!-- sent="Thu, 8 Mar 2012 19:18:39 +0100" -->
<!-- isosent="20120308181839" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR" -->
<!-- id="5A417383-040C-485B-8658-3924453491C6_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="49CF7D2C430CF64F8CD8846494DE652F04ABD0A2_at_ORSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 13:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18716.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18714.php">Linton, Tom: "[OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>In reply to:</strong> <a href="18714.php">Linton, Tom: "[OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 08.03.2012 um 19:02 schrieb Linton, Tom:
<br>
<p><span class="quotelev1">&gt; We have a legacy application that runs fine on our cluster using Intel MPI. We ported it to OpenMPI so that we could use BLCR and it runs fine but checkpointing is not working properly:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. when we checkpoint with more than 1 core, it executes with the error:
</span><br>
<span class="quotelev1">&gt;            mpirun noticed that process rank 1 with PID 8260 on node tscco28017 exited on signal 4 (Illegal instruction).
</span><br>
<p>was the appication and Open MPI compiled on one and the same machine and the cpu type is the same across the involved nodes?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 2. checkpointing with 1 core works
</span><br>
<span class="quotelev1">&gt; 3. we have a simple test program that exercises MPI with multiple cores and it checkpoints fine on multiple cores
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can you suggest how to debug this problem?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Some additional information:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. I execute the program like this: mpirun -am ft-enable-cr -n 2 -machinefile machines program inputfile
</span><br>
<span class="quotelev1">&gt; 2. when I checkpoint it, I see that the checkpoint directories are created but the file &#147;global_snapshot_meta.data&#148; is not complete, there is no restart-appfile, the &#147;snapshot_meta.data&#148; files are not complete, and there are no dump files for the individual processes.
</span><br>
<span class="quotelev1">&gt; 3. the command &#147;ompi-checkpoint&#148; doesn&#146;t return; I have to control-C to kill it after checkpointing.
</span><br>
<span class="quotelev1">&gt; 4. We are using Open MPI 1.4.4 with BLCR 0.8.4
</span><br>
<span class="quotelev1">&gt; 5. I have attached &#147;ompi_info.txt&#148;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Tom
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="18716.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18714.php">Linton, Tom: "[OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>In reply to:</strong> <a href="18714.php">Linton, Tom: "[OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
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
