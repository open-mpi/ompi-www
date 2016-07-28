<?
$subject_val = "[OMPI users] Allgather in inter-communicator bug,";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 18:00:26 2010" -->
<!-- isoreceived="20100519220026" -->
<!-- sent="Wed, 19 May 2010 18:00:21 -0400" -->
<!-- isosent="20100519220021" -->
<!-- name="Battalgazi YILDIRIM" -->
<!-- email="yildirimga_at_[hidden]" -->
<!-- subject="[OMPI users] Allgather in inter-communicator bug," -->
<!-- id="AANLkTin_aldw2YgHMDeIgIhDE8yr9Hf7MsrIiGW15AmT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Allgather in inter-communicator bug,<br>
<strong>From:</strong> Battalgazi YILDIRIM (<em>yildirimga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 18:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13093.php">Sang Chul Choi: "[OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Previous message:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>I am trying to use intercommunicator ::Allgather between two child process.
<br>
I have fortran and Python code,
<br>
I am using mpi4py for python. It seems that ::Allgather is not working
<br>
properly in my desktop.
<br>
<p>&nbsp;I have contacted first mpi4py developers (Lisandro Dalcin), he simplified
<br>
my problem and provided two example files (python.py and fortran.f90,
<br>
please see below).
<br>
<p>We tried with different MPI vendors, the following example worked correclty(
<br>
it means the final print out should be array('i', [1, 2, 3, 4, 5, 6, 7, 8])
<br>
)
<br>
<p>However, it is not giving correct answer in my two desktop (Redhat and
<br>
ubuntu) both
<br>
using OPENMPI
<br>
<p>Could yo look at this problem please?
<br>
<p>If you want to follow our discussion before you, you can go to following
<br>
link:
<br>
<a href="http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e">http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e</a>
<br>
<p>yildirim_at_memosa:~/python_intercomm$ more python.py
<br>
from mpi4py import MPI
<br>
from array import array
<br>
import os
<br>
<p>progr = os.path.abspath('a.out')
<br>
child = MPI.COMM_WORLD.Spawn(progr,[], 8)
<br>
n = child.remote_size
<br>
a = array('i', [0]) * n
<br>
child.Allgather([None,MPI.INT],[a,MPI.INT])
<br>
child.Disconnect()
<br>
print a
<br>
<p>yildirim_at_memosa:~/python_intercomm$ more fortran.f90
<br>
program main
<br>
&nbsp;use mpi
<br>
&nbsp;implicit none
<br>
&nbsp;integer :: parent, rank, val, dummy, ierr
<br>
&nbsp;call MPI_Init(ierr)
<br>
&nbsp;call MPI_Comm_get_parent(parent, ierr)
<br>
&nbsp;call MPI_Comm_rank(parent, rank, ierr)
<br>
&nbsp;val = rank + 1
<br>
&nbsp;call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dummy, 0, MPI_INTEGER, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent, ierr)
<br>
&nbsp;call MPI_Comm_disconnect(parent, ierr)
<br>
&nbsp;call MPI_Finalize(ierr)
<br>
end program main
<br>
<p>yildirim_at_memosa:~/python_intercomm$ mpif90 fortran.f90
<br>
yildirim_at_memosa:~/python_intercomm$ python python.py
<br>
array('i', [0, 0, 0, 0, 0, 0, 0, 0])
<br>
<p><p><pre>
-- 
B. Gazi YILDIRIM
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13092/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13093.php">Sang Chul Choi: "[OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Previous message:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
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
