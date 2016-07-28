<?
$subject_val = "[OMPI users] Profiling OpenMPI routines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 17:49:20 2009" -->
<!-- isoreceived="20091001214920" -->
<!-- sent="Thu, 1 Oct 2009 14:48:56 -0700" -->
<!-- isosent="20091001214856" -->
<!-- name="Aniruddha Marathe" -->
<!-- email="marathe.aniruddha_at_[hidden]" -->
<!-- subject="[OMPI users] Profiling OpenMPI routines" -->
<!-- id="f93233e90910011448madbfab3w4c91c30875b311a5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Profiling OpenMPI routines<br>
<strong>From:</strong> Aniruddha Marathe (<em>marathe.aniruddha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 17:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10866.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
<li><strong>Reply:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am trying to profile (get the call graph/call sequence of) Open MPI
<br>
communication routines using GNU Profiler (gprof) since the
<br>
communication calls are implemented using macros and it's harder to
<br>
trace them statically. In order to do that I compiled the OpenMPI
<br>
source code with following options supplied to 'configure' tool:
<br>
<p>./configure CFLAGS=-pg CPPFLAGS=-pg --enable-debug
<br>
--prefix=/home/amarathe/mpi/svn_openmpi/install
<br>
<p>When I recompiled my test MPI application that does MPI_Send and
<br>
MPI_Recv with the new library, it generated gmon.out file as expected
<br>
(I ran it as 'mpirun -np 2 send_recv'). However, running 'gprof' on
<br>
this file didn't provide any information such as the call graphs for
<br>
MPI_Send or MPI_Recv. Following is the only function call that I see
<br>
in the output:
<br>
<p>$ gprof send_recv gmon.out
<br>
...
<br>
...
<br>
%   cumulative   self              self     total
<br>
time   seconds   seconds    calls  Ts/call  Ts/call  name
<br>
0.00      0.00     0.00       25     0.00     0.00  data_start
<br>
...
<br>
...
<br>
<p>I would like to know if anyone has done something similar with gprof
<br>
or any other open source tool with OpenMPI code.
<br>
<p>(I found a similar, fairly recent post on the mailing list, but it
<br>
seems to talk about profiling the MPI application itself and not the
<br>
OpenMPI library routines -
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/04/8999.php">http://www.open-mpi.org/community/lists/users/2009/04/8999.php</a>)
<br>
<p>Thanks &amp; Regards,
<br>
Aniruddha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10866.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
<li><strong>Reply:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
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
