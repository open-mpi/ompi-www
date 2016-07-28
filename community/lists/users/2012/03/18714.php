<?
$subject_val = "[OMPI users] Illegal Instruction on Checkpoint with BLCR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 13:02:50 2012" -->
<!-- isoreceived="20120308180250" -->
<!-- sent="Thu, 8 Mar 2012 18:02:38 +0000" -->
<!-- isosent="20120308180238" -->
<!-- name="Linton, Tom" -->
<!-- email="tom.linton_at_[hidden]" -->
<!-- subject="[OMPI users] Illegal Instruction on Checkpoint with BLCR" -->
<!-- id="49CF7D2C430CF64F8CD8846494DE652F04ABD0A2_at_ORSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Illegal Instruction on Checkpoint with BLCR<br>
<strong>From:</strong> Linton, Tom (<em>tom.linton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 13:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18715.php">Reuti: "Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>Previous message:</strong> <a href="18713.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18715.php">Reuti: "Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>Reply:</strong> <a href="18715.php">Reuti: "Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a legacy application that runs fine on our cluster using Intel MPI. We ported it to OpenMPI so that we could use BLCR and it runs fine but checkpointing is not working properly:
<br>
<p>1. when we checkpoint with more than 1 core, it executes with the error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that process rank 1 with PID 8260 on node tscco28017 exited on signal 4 (Illegal instruction).
<br>
2. checkpointing with 1 core works
<br>
3. we have a simple test program that exercises MPI with multiple cores and it checkpoints fine on multiple cores
<br>
<p>Can you suggest how to debug this problem?
<br>
<p>Some additional information:
<br>
<p>1. I execute the program like this: mpirun -am ft-enable-cr -n 2 -machinefile machines program inputfile
<br>
2. when I checkpoint it, I see that the checkpoint directories are created but the file &quot;global_snapshot_meta.data&quot; is not complete, there is no restart-appfile, the &quot;snapshot_meta.data&quot; files are not complete, and there are no dump files for the individual processes.
<br>
3. the command &quot;ompi-checkpoint&quot; doesn't return; I have to control-C to kill it after checkpointing.
<br>
4. We are using Open MPI 1.4.4 with BLCR 0.8.4
<br>
5. I have attached &quot;ompi_info.txt&quot;
<br>
<p>Thanks
<br>
Tom
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18714/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18715.php">Reuti: "Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>Previous message:</strong> <a href="18713.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18715.php">Reuti: "Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
<li><strong>Reply:</strong> <a href="18715.php">Reuti: "Re: [OMPI users] Illegal Instruction on Checkpoint with BLCR"</a>
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
