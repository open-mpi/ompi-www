<?
$subject_val = "[OMPI users] Problem running over IB with huge data set";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 15:18:06 2012" -->
<!-- isoreceived="20120227201806" -->
<!-- sent="Mon, 27 Feb 2012 21:18:01 +0100" -->
<!-- isosent="20120227201801" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running over IB with huge data set" -->
<!-- id="4F4BE4F9.10306_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Problem running over IB with huge data set<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 15:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18566.php">Shiqing Fan: "Re: [OMPI users] OpenMPI at windows"</a>
<li><strong>Previous message:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI users] ompi 1.5.5 mpicc linker problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff, Ralph, All Open MPI folks,
<br>
<p>We had an off-list discussion about an error in the Serpent program. Ralph said:
<br>
<p><span class="quotelev1"> &gt;We already have several tickets for that problem, each relating to a different 
</span><br>
scenario:
<br>
<span class="quotelev1"> &gt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2155">https://svn.open-mpi.org/trac/ompi/ticket/2155</a>
</span><br>
<span class="quotelev1"> &gt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2157">https://svn.open-mpi.org/trac/ompi/ticket/2157</a>
</span><br>
<span class="quotelev1"> &gt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2295">https://svn.open-mpi.org/trac/ompi/ticket/2295</a>
</span><br>
<p>I've build a quite small reproducer for the original issue (with a huge memory 
<br>
footprint) and have send it to you.
<br>
<p>The other week, another user got problemz if using huge data sets.
<br>
<p>A program, which runs without any problem with smaller data sets (in order of 
<br>
24Gb data in total and smaller), got problem with huge data sets (in order of 
<br>
100Gb data in total and more),
<br>
_if running over infiniband or IPoIB_.
<br>
<p>The program essentially hangs, mostly blocking the transport used. In some 
<br>
scenarios it crash.
<br>
The same program and data set run fine over ethernet or shared memory (yes, 
<br>
we've computers with 100ths of GB of memory). The behaviour is reproducible.
<br>
<p>Diverse errors are produced, some of them are listed below. Another thing is 
<br>
that in the most cases, if the program hangs, it also blocks the transport, that 
<br>
is another programs cannot run over the same interface (just as reported earlier).
<br>
<p>More fun: we also found some '#procs x #Nodes' combinations where the program 
<br>
run fine.
<br>
<p>I.e.,
<br>
30 and 60 processes over 6 nodes run through fine,
<br>
6 procs over 6 nodes - killed with a error message (see below)
<br>
12,18,36,61,62,64,66 procs over 6 nodes - hangs and block the interface.
<br>
<p>Well, we cannot give any warranty that that isn't a bug in the program itself, 
<br>
because it is just in development now. However, since the program works well for 
<br>
smaller sized data sets and over TCP and over ShMem, it smells like a MPI 
<br>
library error, thus this mail.
<br>
<p>Or maybe the puzzling behaviour may be a follow-up of any bugs in the program 
<br>
itself? If yes, what it could be and how we could try no find it?
<br>
<p>I did not attach a reproducer to this mail because the user do not want to 
<br>
spread the code all over the world, but can send it to you if you are interested 
<br>
in reproducing it. [The code is about matrix transpose of huge matrices and 
<br>
essentially calls MPI_Alltoallv, it is written a 'nice, well-structured' C++ 
<br>
code (nothing stays unwrapped) but is pretty small and readable].
<br>
<p>Ralph, Jeff, anybody - any interest in reproducing this issue?
<br>
<p>Best wishes,
<br>
Paul Kapinos
<br>
<p><p>P.S. Open MPI 1.5.3 used - still waiting for 1.5.5 ;-)
<br>
<p><p><p><p><p><p><p><p>Some error messages:
<br>
<p>with 6 procs over 6 Nodes:
<br>
------------------------------------------------------------------------------
<br>
mlx4: local QP operation err (QPN 7c0063, WQE index 0, vendor syndrome 6f, 
<br>
opcode = 5e)
<br>
[[8771,1],5][btl_openib_component.c:3316:handle_wc] from 
<br>
linuxbdc07.rz.RWTH-Aachen.DE to: linuxbdc04 error polling LP CQ with status 
<br>
LOCAL QP OPERATION ERROR status number 2 for wr_id 6afb70 opcode 0  vendor error 
<br>
111 qp_idx 3
<br>
mlx4: local QP operation err (QPN 18005f, WQE index 0, vendor syndrome 6f, 
<br>
opcode = 5e)
<br>
[[8771,1],2][btl_openib_component.c:3316:handle_wc] from 
<br>
linuxbdc03.rz.RWTH-Aachen.DE to: linuxbdc02 error polling LP CQ with status 
<br>
LOCAL QP OPERATION ERROR status number 2 for wr_id 6afb70 opcode 0  vendor error 
<br>
111 qp_idx 3
<br>
[[8771,1],1][btl_openib_component.c:3316:handle_wc] from 
<br>
linuxbdc02.rz.RWTH-Aachen.DE to: linuxbdc01 error polling LP CQ with status 
<br>
LOCAL QP OPERATION ERROR status number 2 for wr_id 6afb70 opcode 0  vendor error 
<br>
111 qp_idx 3
<br>
mlx4: local QP operation err (QPN 340057, WQE index 0, vendor syndrome 6f, 
<br>
opcode = 5e)
<br>
------------------------------------------------------------------------------
<br>
<p><p>with 61 processes using IPoIB:
<br>
mpiexec -mca btl ^openib -np 61 -host 1,2,3,4,5,6 a.out &lt; dim100G.in
<br>
------------------------------------------------------------------------------
<br>
[linuxbdc02.rz.RWTH-Aachen.DE][[21403,1],1][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() to 134.61.208.202 failed: Connection timed out (110)
<br>
[linuxbdc01.rz.RWTH-Aachen.DE][[21403,1],18][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() to 134.61.208.203 failed: Connection timed out (110)
<br>
[linuxbdc01.rz.RWTH-Aachen.DE][[21403,1],18][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() to 134.61.208.203 failed: Connection timed out (110)
<br>
------------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18565/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18566.php">Shiqing Fan: "Re: [OMPI users] OpenMPI at windows"</a>
<li><strong>Previous message:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI users] ompi 1.5.5 mpicc linker problem"</a>
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
