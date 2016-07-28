<?
$subject_val = "[OMPI devel] Open MPI 1.8.6 memory leak";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 16:49:06 2015" -->
<!-- isoreceived="20150701204906" -->
<!-- sent="Wed, 1 Jul 2015 20:48:57 +0000" -->
<!-- isosent="20150701204857" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI 1.8.6 memory leak" -->
<!-- id="8fa96e8327c4476396b2d522a6a19d41_at_DRHQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI 1.8.6 memory leak<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 16:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>Previous message:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>Reply:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There have been two reports on the user list about memory leaks.  I have reproduced this leak with LAMMPS.  Note that this has nothing to do with CUDA-aware features.  The steps that Stefan has provided make it easy to reproduce.
<br>
<p>Here are some more specific steps to reproduce derived from Stefan.
<br>
<p>1. clone LAMMPS (git clone git://git.lammps.org/lammps-ro.git&lt;<a href="http://git.lammps.org/lammps-ro.git">http://git.lammps.org/lammps-ro.git</a>&gt; lammps)
<br>
2. cd src/, compile with openMPI 1.8.6.  To do this, set your path to Open MPI and type &quot;make mpi&quot;
<br>
3. run the example listed in lammps/examples/melt. To do this, first copy &quot;lmp_mpi&quot; from the src directory into the melt directory.  Then you need to modify the in.melt file so that it will run for a while.  Change &quot;run 25&quot; to &quot;run        250000&quot;
<br>
4. you can run by mpirun -np 2 lmp_mpi &lt; in.melt
<br>
<p>For reference, here is both 1.8.5 and 1.8.6 memory consumption.  1.8.5 stays very stable where 1.8.6 almost triples after 6 minutes of running.
<br>
<p>Open MPI 1.8.5
<br>
<p>USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 59.0  0.0 329672 14584 pts/16   Rl   16:24   0:00 ./lmp_mpi_185_nocuda
<br>
32341    26908 60.0  0.0 329672 14676 pts/16   Rl   16:24   0:00 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 98.3  0.0 329672 14932 pts/16   Rl   16:24   0:30 ./lmp_mpi_185_nocuda
<br>
32341    26908 98.5  0.0 329672 14932 pts/16   Rl   16:24   0:30 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 98.9  0.0 329672 14960 pts/16   Rl   16:24   1:00 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.1  0.0 329672 14952 pts/16   Rl   16:24   1:00 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.1  0.0 329672 14960 pts/16   Rl   16:24   1:30 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.3  0.0 329672 14952 pts/16   Rl   16:24   1:30 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.2  0.0 329672 14960 pts/16   Rl   16:24   2:00 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.4  0.0 329672 14952 pts/16   Rl   16:24   2:00 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.3  0.0 329672 14960 pts/16   Rl   16:24   2:30 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.5  0.0 329672 14952 pts/16   Rl   16:24   2:30 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.4  0.0 329672 14960 pts/16   Rl   16:24   2:59 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.5  0.0 329672 14952 pts/16   Rl   16:24   3:00 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.4  0.0 329672 14960 pts/16   Rl   16:24   3:29 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.6  0.0 329672 14956 pts/16   Rl   16:24   3:30 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.4  0.0 329672 14960 pts/16   Rl   16:24   3:59 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.6  0.0 329672 14956 pts/16   Rl   16:24   4:00 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.4  0.0 329672 14960 pts/16   Rl   16:24   4:29 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.6  0.0 329672 14956 pts/16   Rl   16:24   4:30 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.5  0.0 329672 14960 pts/16   Rl   16:24   4:59 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.6  0.0 329672 14956 pts/16   Rl   16:24   5:00 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.5  0.0 329672 14960 pts/16   Rl   16:24   5:29 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.6  0.0 329672 14956 pts/16   Rl   16:24   5:29 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26907 99.5  0.0 329672 14960 pts/16   Rl   16:24   5:59 ./lmp_mpi_185_nocuda
<br>
32341    26908 99.6  0.0 329672 14956 pts/16   Rl   16:24   5:59 ./lmp_mpi_185_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
<p>Open MPI 1.8.6
<br>
<p>USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755  0.0  0.0 330288 15368 pts/16   Rl   16:10   0:00 ./lmp_mpi_186_nocuda
<br>
32341    26756  0.0  0.0 330284 15376 pts/16   Rl   16:10   0:00 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755  100  0.0 409856 94976 pts/16   Rl   16:10   0:30 ./lmp_mpi_186_nocuda
<br>
32341    26756  100  0.0 409848 94904 pts/16   Rl   16:10   0:30 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755  100  0.1 489292 174320 pts/16  Rl   16:10   1:00 ./lmp_mpi_186_nocuda
<br>
32341    26756  100  0.1 489288 174536 pts/16  Rl   16:10   1:00 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.9  0.1 568860 253928 pts/16  Rl   16:10   1:29 ./lmp_mpi_186_nocuda
<br>
32341    26756  100  0.1 568984 254168 pts/16  Rl   16:10   1:30 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.9  0.2 648620 333800 pts/16  Rl   16:10   1:59 ./lmp_mpi_186_nocuda
<br>
32341    26756  100  0.2 648616 333868 pts/16  Rl   16:10   2:00 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.8  0.3 728444 413516 pts/16  Rl   16:10   2:29 ./lmp_mpi_186_nocuda
<br>
32341    26756  100  0.3 728376 413800 pts/16  Rl   16:10   2:30 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.8  0.3 808332 493388 pts/16  Rl   16:10   2:59 ./lmp_mpi_186_nocuda
<br>
32341    26756 99.9  0.3 808328 493432 pts/16  Rl   16:10   2:59 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.7  0.4 888156 573260 pts/16  Rl   16:10   3:29 ./lmp_mpi_186_nocuda
<br>
32341    26756 99.9  0.4 888088 573328 pts/16  Rl   16:10   3:29 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.7  0.4 968108 653396 pts/16  Rl   16:10   3:59 ./lmp_mpi_186_nocuda
<br>
32341    26756 99.9  0.4 968232 653488 pts/16  Rl   16:10   3:59 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.7  0.5 1048252 733268 pts/16 Rl   16:10   4:29 ./lmp_mpi_186_nocuda
<br>
32341    26756 99.9  0.5 1048248 733384 pts/16 Rl   16:10   4:29 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.7  0.6 1128396 813404 pts/16 Rl   16:10   4:59 ./lmp_mpi_186_nocuda
<br>
32341    26756 99.9  0.6 1128328 813544 pts/16 Rl   16:10   4:59 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.7  0.6 1208736 893804 pts/16 Rl   16:10   5:29 ./lmp_mpi_186_nocuda
<br>
32341    26756 99.9  0.6 1208668 893968 pts/16 Rl   16:10   5:29 ./lmp_mpi_186_nocuda
<br>
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
<br>
32341    26755 99.7  0.7 1288880 973940 pts/16 Rl   16:10   5:59 ./lmp_mpi_186_nocuda
<br>
32341    26756 99.9  0.7 1288812 974128 pts/16 Rl   16:10   5:59 ./lmp_mpi_186_nocuda
<br>
<p><p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>Previous message:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>Reply:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
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
