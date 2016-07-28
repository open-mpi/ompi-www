<?
$subject_val = "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 07:54:32 2015" -->
<!-- isoreceived="20151008115432" -->
<!-- sent="Thu, 8 Oct 2015 13:54:29 +0200" -->
<!-- isosent="20151008115429" -->
<!-- name="simona bellavista" -->
<!-- email="afylot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] python, mpi and shell subprocess: orte_error_log" -->
<!-- id="CAC-_n52UVX-wWyz30E4fs6m-epPLcxMTo1inS0q2RCC+GJHFpQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAC-_n50OADzdR_1yALsg--1kQyTX04azuXw89sxxwWr57xM7MA_at_mail.gmail.com" -->
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
<strong>From:</strong> simona bellavista (<em>afylot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-08 07:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27845.php">Gilles Gouaillardet: "[OMPI users]  python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2015-10-08 12:09 GMT+02:00 simona bellavista &lt;afylot_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-10-07 14:59 GMT+02:00 Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7 October 2015 at 14:54, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have written a small code in python 2.7 for launching 4 independent
</span><br>
<span class="quotelev3">&gt;&gt; &gt; processes on the shell viasubprocess, using the library mpi4py. I am
</span><br>
<span class="quotelev2">&gt;&gt; getting
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ORTE_ERROR_LOG and I would like to understand where it is happening and
</span><br>
<span class="quotelev2">&gt;&gt; why.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is my code:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #!/usr/bin/python
</span><br>
<span class="quotelev3">&gt;&gt; &gt; import subprocess
</span><br>
<span class="quotelev3">&gt;&gt; &gt; import re
</span><br>
<span class="quotelev3">&gt;&gt; &gt; import sys
</span><br>
<span class="quotelev3">&gt;&gt; &gt; from mpi4py import MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; def main():
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     root='base'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     comm = MPI.COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     if comm.rank == 0:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         job = [root+str(i) for i in range(4)]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     else:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         job = None
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     job = comm.scatter(job, root=0)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     cmd=&quot;../../montepython/montepython/MontePython.py -conf
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ../config/default.conf -p ../config/XXXX.param -o ../chains/XXXX  -N
</span><br>
<span class="quotelev2">&gt;&gt; 10000 &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; XXXX.log&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     cmd_job = re.sub(r&quot;XXXX&quot;, job, cmd)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     subprocess.check_call(cmd_job, shell=True)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     return
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if __name__ == '__main__':
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   main()
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am running with the command:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -np 4 ./run.py
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is the error message that I get:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt; &gt; base/odls_base_default_fns.c at line 1762
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orted/orted_comm.c at line 916
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt; &gt; base/odls_base_default_fns.c at line 1762
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orted/orted_comm.c at line 916
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev3">&gt;&gt; &gt; experience performance degradation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Local host:  localhost
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   System call: open(2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Error:       No such file or directory (errno 2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I cannot understand where the error is happening. MontePython by itself
</span><br>
<span class="quotelev3">&gt;&gt; &gt; should not use mpibecause it should be serial.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is likely related to a bad interaction between the way Python's
</span><br>
<span class="quotelev2">&gt;&gt; subprocess is implemented and the MPI implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, you should not use mpi4py for such a simple trivial
</span><br>
<span class="quotelev2">&gt;&gt; parallelism, I recommend you to take a look at Python's
</span><br>
<span class="quotelev2">&gt;&gt; multiprocessing module.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If for any reason you want to go the MPI way, you should use MPI
</span><br>
<span class="quotelev2">&gt;&gt; dynamic process management, e.g. MPI.COMM_SELF.Spawn(...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalcin
</span><br>
<span class="quotelev2">&gt;&gt; ============
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist
</span><br>
<span class="quotelev2">&gt;&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev2">&gt;&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev2">&gt;&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev2">&gt;&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev2">&gt;&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27833.php">http://www.open-mpi.org/community/lists/users/2015/10/27833.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot figure out how spawn would work with a string-command. I tried
</span><br>
<span class="quotelev1">&gt; MPI.COMM_SELF.Spawn(cmd, args=None,maxproc=4) and it just hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I couldn't figure out how to run Spawn with a string-like command, in fact
<br>
the command that I want to run varies for each processor. Then I found a
<br>
work-around, that is quite ugly: I write each command I want to run to a
<br>
bash file, and then I run each bash-file on a different processor with
<br>
spawn (I still have to use subprocess to make each bash-file executable).
<br>
<p>But now I have the problem that the code hangs after execution of the bash
<br>
files. I provide a minimal example for this:
<br>
<p>#!/usr/bin/python
<br>
from mpi4py import MPI
<br>
<p>def main():
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm = MPI.COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_SELF.Spawn('./worker.sh', maxprocs=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return
<br>
<p>if __name__ == '__main__':
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;main()
<br>
<p>where worker.sh:
<br>
<p>#!/usr/bin/bash
<br>
<p>echo 'we are here'
<br>
<p>exit 0
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27845.php">Gilles Gouaillardet: "[OMPI users]  python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>In reply to:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
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
