<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 04:07:04 2006" -->
<!-- isoreceived="20060905080704" -->
<!-- sent="Tue, 5 Sep 2006 09:05:42 +0100 (GMT+01:00)" -->
<!-- isosent="20060905080542" -->
<!-- name="Eng. A.A. Isola" -->
<!-- email="alfonso.isola_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Lookup_name ERROR!!" -->
<!-- id="10d7d02dc1f.alfonso.isola_at_tin.it" -->
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
<strong>From:</strong> Eng. A.A. Isola (<em>alfonso.isola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 04:05:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1822.php">Peter Kjellström: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Previous message:</strong> <a href="1820.php">Paul Fons: "[OMPI users] Remote node processes stuck"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>1)Today I have compiled my first MPI application by using OPEN MPI 
<br>
compiler mpicc.
<br>
A very strange thing happens, a program that worked 
<br>
correctly with MPICH2 now gives me an error.
<br>
<p>I show you the error 
<br>
message that appears when I execute it:
<br>
<p>*** An error occurred in 
<br>
MPI_Lookup_name
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_NAME: 
<br>
invalid name argument
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[0.0.0]
<br>
-[0.1.0] mca_oob_tcp_msg_recv: readv failed with errno=104
<br>
<p>the 
<br>
instruction is:
<br>
<p>MPI_Lookup_name(argv[1],MPI_INFO_NULL,port_name);
<br>
<p>of 
<br>
course inside argv[1] there's the name that I write in the command 
<br>
line.....
<br>
<p>I repeat that this code work without problem in MPICH2.
<br>
And 
<br>
this means that I have used correctly the MPI protocol functions.
<br>
Is it 
<br>
possible that I have made a mistake in the Open MPI installation?
<br>
I 
<br>
have tested OPEN MPI with cpi.c example and works correctly.
<br>
<p>2)Why you 
<br>
don't create an installation guide similar to MPICH2, for ex. a .pdf 
<br>
file....
<br>
In fact by the only FAQ sometime is not very easy to 
<br>
understand the correct installation step.
<br>
<p>3)Open MPI doesn't need of a 
<br>
daemon? as the mpd or lamboot before to execute mpi applications? 
<br>
Maybe, is it called inside mpirun/mpiexec?
<br>
<p>Eng. A.A. Isola
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1822.php">Peter Kjellström: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Previous message:</strong> <a href="1820.php">Paul Fons: "[OMPI users] Remote node processes stuck"</a>
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
