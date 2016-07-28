<?
$subject_val = "[OMPI users] python, mpi and shell subprocess: orte_error_log";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 07:54:30 2015" -->
<!-- isoreceived="20151007115430" -->
<!-- sent="Wed, 7 Oct 2015 13:54:27 +0200" -->
<!-- isosent="20151007115427" -->
<!-- name="simona bellavista" -->
<!-- email="afylot_at_[hidden]" -->
<!-- subject="[OMPI users] python, mpi and shell subprocess: orte_error_log" -->
<!-- id="CAC-_n51LQyvviRwbERRpJjDV6eDqfnOovqgO+93OrBrp0EvDgA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] python, mpi and shell subprocess: orte_error_log<br>
<strong>From:</strong> simona bellavista (<em>afylot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 07:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27833.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27831.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27833.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27833.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have written a small code in python 2.7 for launching 4 independent
<br>
processes on the shell viasubprocess, using the library mpi4py. I am
<br>
getting ORTE_ERROR_LOG and I would like to understand where it is happening
<br>
and why.
<br>
<p>This is my code:
<br>
<p>#!/usr/bin/python
<br>
import subprocess
<br>
import re
<br>
import sys
<br>
from mpi4py import MPI
<br>
<p>def main():
<br>
&nbsp;&nbsp;&nbsp;&nbsp;root='base'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm = MPI.COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if comm.rank == 0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;job = [root+str(i) for i in range(4)]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;job = None
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;job = comm.scatter(job, root=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cmd=&quot;../../montepython/montepython/MontePython.py -conf
<br>
../config/default.conf -p ../config/XXXX.param -o ../chains/XXXX  -N
<br>
10000 &gt; XXXX.log&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cmd_job = re.sub(r&quot;XXXX&quot;, job, cmd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subprocess.check_call(cmd_job, shell=True)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return
<br>
<p>if __name__ == '__main__':
<br>
&nbsp;&nbsp;main()
<br>
<p>I am running with the command:
<br>
<p>mpirun -np 4 ./run.py
<br>
<p>This is the error message that I get:
<br>
<p>[localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
<br>
base/odls_base_default_fns.c at line 1762
<br>
[localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
<br>
orted/orted_comm.c at line 916
<br>
[localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
<br>
base/odls_base_default_fns.c at line 1762
<br>
[localhost:51087] [[51455,0],0] ORTE_ERROR_LOG: Not found in file
<br>
orted/orted_comm.c at line 916
<br>
--------------------------------------------------------------------------
<br>
A system call failed during shared memory initialization that should
<br>
not have.  It is likely that your MPI job will now either abort or
<br>
experience performance degradation.
<br>
<p>&nbsp;&nbsp;Local host:  localhost
<br>
&nbsp;&nbsp;System call: open(2)
<br>
&nbsp;&nbsp;Error:       No such file or directory (errno 2)
<br>
--------------------------------------------------------------------------
<br>
<p><p>I cannot understand where the error is happening. MontePython by
<br>
itself should not use mpibecause it should be serial.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27833.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27831.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27833.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Reply:</strong> <a href="27833.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
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
