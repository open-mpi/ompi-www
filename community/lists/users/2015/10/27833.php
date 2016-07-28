<?
$subject_val = "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 08:59:44 2015" -->
<!-- isoreceived="20151007125944" -->
<!-- sent="Wed, 7 Oct 2015 15:59:20 +0300" -->
<!-- isosent="20151007125920" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] python, mpi and shell subprocess: orte_error_log" -->
<!-- id="CAEcYPwBq3fM_pwdeBApMCouozheSyCmg8vdO4KZ17ggUwMdgUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAC-_n51LQyvviRwbERRpJjDV6eDqfnOovqgO+93OrBrp0EvDgA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] python, mpi and shell subprocess: orte_error_log<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 08:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27834.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27832.php">simona bellavista: "[OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27832.php">simona bellavista: "[OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7 October 2015 at 14:54, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have written a small code in python 2.7 for launching 4 independent
</span><br>
<span class="quotelev1">&gt; processes on the shell viasubprocess, using the library mpi4py. I am getting
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG and I would like to understand where it is happening and why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/usr/bin/python
</span><br>
<span class="quotelev1">&gt; import subprocess
</span><br>
<span class="quotelev1">&gt; import re
</span><br>
<span class="quotelev1">&gt; import sys
</span><br>
<span class="quotelev1">&gt; from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; def main():
</span><br>
<span class="quotelev1">&gt;     root='base'
</span><br>
<span class="quotelev1">&gt;     comm = MPI.COMM_WORLD
</span><br>
<span class="quotelev1">&gt;     if comm.rank == 0:
</span><br>
<span class="quotelev1">&gt;         job = [root+str(i) for i in range(4)]
</span><br>
<span class="quotelev1">&gt;     else:
</span><br>
<span class="quotelev1">&gt;         job = None
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     job = comm.scatter(job, root=0)
</span><br>
<span class="quotelev1">&gt;     cmd=&quot;../../montepython/montepython/MontePython.py -conf
</span><br>
<span class="quotelev1">&gt; ../config/default.conf -p ../config/XXXX.param -o ../chains/XXXX  -N 10000 &gt;
</span><br>
<span class="quotelev1">&gt; XXXX.log&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cmd_job = re.sub(r&quot;XXXX&quot;, job, cmd)
</span><br>
<span class="quotelev1">&gt;     subprocess.check_call(cmd_job, shell=True)
</span><br>
<span class="quotelev1">&gt;     return
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if __name__ == '__main__':
</span><br>
<span class="quotelev1">&gt;   main()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running with the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ./run.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the error message that I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c at line 1762
</span><br>
<span class="quotelev1">&gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orted/orted_comm.c at line 916
</span><br>
<span class="quotelev1">&gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c at line 1762
</span><br>
<span class="quotelev1">&gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orted/orted_comm.c at line 916
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev1">&gt; not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev1">&gt; experience performance degradation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:  localhost
</span><br>
<span class="quotelev1">&gt;   System call: open(2)
</span><br>
<span class="quotelev1">&gt;   Error:       No such file or directory (errno 2)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot understand where the error is happening. MontePython by itself
</span><br>
<span class="quotelev1">&gt; should not use mpibecause it should be serial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is likely related to a bad interaction between the way Python's
<br>
subprocess is implemented and the MPI implementation.
<br>
<p>Anyway, you should not use mpi4py for such a simple trivial
<br>
parallelism, I recommend you to take a look at Python's
<br>
multiprocessing module.
<br>
<p>If for any reason you want to go the MPI way, you should use MPI
<br>
dynamic process management, e.g. MPI.COMM_SELF.Spawn(...).
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27834.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27832.php">simona bellavista: "[OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27832.php">simona bellavista: "[OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
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
