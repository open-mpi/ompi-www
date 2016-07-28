<?
$subject_val = "[OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 08:45:50 2014" -->
<!-- isoreceived="20140117134550" -->
<!-- sent="Fri, 17 Jan 2014 14:45:48 +0100" -->
<!-- isosent="20140117134548" -->
<!-- name="Julien Bodart" -->
<!-- email="julien.bodart_at_[hidden]" -->
<!-- subject="[OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0" -->
<!-- id="CACWXmz5W_aftZfxqW9z8hPwiR8ro8e0P_BWns7viJkN-VYOSzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0<br>
<strong>From:</strong> Julien Bodart (<em>julien.bodart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 08:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23377.php">Ralph Castain: "Re: [OMPI users] cluster checkpoint error"</a>
<li><strong>Previous message:</strong> <a href="23375.php">basma a.azeem: "[OMPI users] FW: cluster checkpoint error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
version: 1.6.5 (compiled with Intel compilers)
<br>
<p>command used:
<br>
mpirun --machinefile mfile --debug-daemons -np 16 myapp
<br>
<p>Description of the problem:
<br>
When myapp is compiled without optimizations everything runs fine
<br>
if compiled with -O3, then the application hangs. I cannot reproduce the
<br>
problem with a hello world test.
<br>
<p>when using --debug-daemons I see the following behavior (PATHTOAPPLICATION=
<br>
my path to the application)
<br>
<p># When compiling with -O3
<br>
#
<br>
&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 16
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, node8,  PATHTOAPPLICATION, 1413)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, node8,  PATHTOAPPLICATION, 1414)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, node8,  PATHTOAPPLICATION, 1415)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, node8,  PATHTOAPPLICATION, 1417)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, node8,  PATHTOAPPLICATION, 1418)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, node8,  PATHTOAPPLICATION, 1419)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (6, node8,  PATHTOAPPLICATION, 1420)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (7, node8,  PATHTOAPPLICATION, 1421)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (8, node8,  PATHTOAPPLICATION, 1422)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (9, node8,  PATHTOAPPLICATION, 1423)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (10, node8, PATHTOAPPLICATION, 1424)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (11, node8, PATHTOAPPLICATION, 1425)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (12, node8, PATHTOAPPLICATION, 1426)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (13, node8, PATHTOAPPLICATION, 1427)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (14, node8, PATHTOAPPLICATION, 1428)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (15, node8, PATHTOAPPLICATION, 1429)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
# and then hangs
<br>
<p>#when compiling with -O0 we go to the next step without problems:
<br>
<p>MPIR_server_arguments: NULL
<br>
[node8.isae.fr:01637] [[23120,0],1] orted_recv: received sync+nidmap from
<br>
local proc [[23120,1],0]
<br>
[node8.isae.fr:01637] [[23120,0],1] orted_recv: received sync+nidmap from
<br>
local proc [[23120,1],1]
<br>
[node8.isae.fr:01637] [[23120,0],1] orted_recv: received sync+nidmap from
<br>
local proc [[23120,1],2]
<br>
[node8.isae.fr:01637] [[23120,0],1] orted_recv: received sync+nidmap from
<br>
local
<br>
<p>...
<br>
<p>Thanks for your help,
<br>
<p>Julien
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23376/ompi_bug.tar.bz2">ompi_bug.tar.bz2</a>
</ul>
<!-- attachment="ompi_bug.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23377.php">Ralph Castain: "Re: [OMPI users] cluster checkpoint error"</a>
<li><strong>Previous message:</strong> <a href="23375.php">basma a.azeem: "[OMPI users] FW: cluster checkpoint error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI hangs when application compiled with -O3, runs fine with -O0"</a>
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
