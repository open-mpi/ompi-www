<?
$subject_val = "[OMPI users] collective communications broken on more than 4 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 09:57:15 2009" -->
<!-- isoreceived="20091029135715" -->
<!-- sent="Thu, 29 Oct 2009 14:57:08 +0100" -->
<!-- isosent="20091029135708" -->
<!-- name="Vincent Loechner" -->
<!-- email="loechner_at_[hidden]" -->
<!-- subject="[OMPI users] collective communications broken on more than 4 cores" -->
<!-- id="E1N3VUy-00071D-Jt_at_gauvain.u-strasbg.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] collective communications broken on more than 4 cores<br>
<strong>From:</strong> Vincent Loechner (<em>loechner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 09:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello to the list,
<br>
<p>I came to a problem running a simple program with collective
<br>
communications, on a 6-core processors (6 local MPI processes).
<br>
It seems that the calls to collective communication are not
<br>
returning for some MPI processes, when the number of processes is
<br>
greater or equal to 5. It's reproduceable, on two different
<br>
architectures, with two different versions of OpenMPI (1.3.2 and
<br>
1.3.3). It was working correctly with OpenMPI version 1.2.7.
<br>
<p><p>I just wrote a very simple test, making 1000 calls to MPI_Barrier().
<br>
Running on an istanbul processor (6-core AMD Opteron) :
<br>
$ uname -a
<br>
Linux istanbool 2.6.31-14-generic #46-Ubuntu SMP Tue Oct 13 16:47:28 UTC 2009 
<br>
x86_64 GNU/Linux
<br>
with a OpenMPI ubuntu package, version 1.3.2.
<br>
Running with 5 or 6 MPI processes, it just hangs after a random
<br>
number of iterations, ranging from 3 to 600, and sometimes it
<br>
finishes correctly (about 1 time out of 8). Just ran :
<br>
'mpirun -n 6 ./testmpi'
<br>
Same behavior with more MPI processes.
<br>
<p>I tried the '--mca coll_basic_priority 50' option, the program has
<br>
more chance to finish -about one time out of 2, but also deadlocks
<br>
the other time after a random number of iterations.
<br>
<p>Without setting the coll_basic_priority option, I ran a debugger, and
<br>
found out that some processes are blocked in:
<br>
#0  0x00007f858f272f7a in opal_progress () from /usr/lib/libopen-pal.so.0
<br>
#1  0x00007f858f7524f5 in ?? () from /usr/lib/libmpi.so.0
<br>
#2  0x00007f8589e74c5a in ?? ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so
<br>
#3  0x00007f8589e7cefa in ?? ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so
<br>
#4  0x00007f858f767b32 in PMPI_Barrier () from /usr/lib/libmpi.so.0
<br>
#5  0x0000000000400c10 in main (argc=1, argv=0x7fff9d59acf8) at testmpi.c:24
<br>
<p>and the others in:
<br>
#0  0x00007f05799e933a in ?? () from /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00007f057dd22fba in opal_progress () from /usr/lib/libopen-pal.so.0
<br>
#2  0x00007f057e2024f5 in ?? () from /usr/lib/libmpi.so.0
<br>
#3  0x00007f0578924c5a in ?? ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so
<br>
#4  0x00007f057892cefa in ?? ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so
<br>
#5  0x00007f057e217b32 in PMPI_Barrier () from /usr/lib/libmpi.so.0
<br>
#6  0x0000000000400c10 in main (argc=1, argv=0x7fff1b55b4a8) at testmpi.c:24
<br>
<p><p>Seems that other collective communications are broken, my original
<br>
program was blocked after a call to MPI_Allreduce.
<br>
<p>I also made tests on a 4-core Intel core i7, openMPI version 1.3.3,
<br>
with exatly the same problem: calls to collective communication not
<br>
returning for some MPI processes when the number of processes is
<br>
greater or equal to 5.
<br>
<p>Below, some technical details on my configuration, input file,
<br>
example outputs. The output of ompi_info --all is attached to this
<br>
mail.
<br>
<p>Best regards,
<br>
-------------------------------------------------------------------------- 
<br>
Vincent LOECHNER             |    0---0  |  ICPS, LSIIT (UMR 7005),
<br>
&nbsp;PhD                         |   /|  /|  |  Equipe INRIA CAMUS,
<br>
&nbsp;Phone: +33 (0)368 85 45 37  |  0---0 |  |  Universit&#195;&#169; de Strasbourg
<br>
&nbsp;Fax  : +33 (0)368 85 45 47  |  | 0-|-0  |  P&#195;&#180;le API, Bd. S&#195;&#169;bastien Brant
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|  |/  |/   |  F-67412 ILLKIRCH Cedex
<br>
&nbsp;loechner_at_[hidden]         |  0---0    |  <a href="http://icps.u-strasbg.fr">http://icps.u-strasbg.fr</a>
<br>
--------------------------------------------------------------------------
<br>
<p><p>Input program:
<br>
//-------------------- testmpi.c -----------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#define MCW MPI_COMM_WORLD
<br>
<p>int main( int argc, char **argv )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n, r;       /* number of processes, process rank */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( MCW, &amp;n );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MCW, &amp;r );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for( i=0 ; i&lt;1000 ; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;(%d) %d\n&quot;, r, i ); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier( MCW );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return( 0 );
<br>
}
<br>
//-------------------- testmpi.c -----------------------------------
<br>
<p>Compilation line:
<br>
$ mpicc -O2 -Wall -g testmpi.c -o testmpi
<br>
<p>GCC version :
<br>
$ mpicc --version
<br>
gcc (Ubuntu 4.4.1-4ubuntu7) 4.4.1
<br>
<p>OpenMPI version : 1.3.2
<br>
$ ompi_info -v ompi full
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI buildd_at_crested Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3.2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r21054
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Apr 21, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3.2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r21054
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Apr 21, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r21054
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Apr 21, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.3.2
<br>
<p>--------------- example run (I hit ^C after a while)--------------------
<br>
$ mpirun  -n 6 ./testmpi
<br>
(0) 0
<br>
(0) 1
<br>
(0) 2
<br>
(0) 3
<br>
(1) 0
<br>
(1) 1
<br>
(1) 2
<br>
(2) 0
<br>
(2) 1
<br>
(2) 2
<br>
(2) 3
<br>
(3) 0
<br>
(3) 1
<br>
(3) 2
<br>
(4) 0
<br>
(4) 1
<br>
(4) 2
<br>
(4) 3
<br>
(5) 0
<br>
(5) 1
<br>
(5) 2
<br>
(5) 3
<br>
^Cmpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 10466 on node istanbool exited on 
<br>
signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
6 total processes killed (some possibly by mpirun during cleanup)
<br>
mpirun: clean termination accomplished
<br>
<p>$ mpirun  -n 6 ./testmpi
<br>
(0) 0
<br>
(0) 1
<br>
(0) 2
<br>
(0) 3
<br>
(0) 4
<br>
(0) 5
<br>
(0) 6
<br>
(0) 7
<br>
(0) 8
<br>
(0) 9
<br>
(1) 0
<br>
(1) 1
<br>
(1) 2
<br>
(1) 3
<br>
(1) 4
<br>
(1) 5
<br>
(1) 6
<br>
(1) 7
<br>
(1) 8
<br>
(1) 9
<br>
(2) 0
<br>
(2) 1
<br>
(2) 2
<br>
(2) 3
<br>
(2) 4
<br>
(2) 5
<br>
(2) 6
<br>
(2) 7
<br>
(2) 8
<br>
(2) 9
<br>
(3) 0
<br>
(3) 1
<br>
(3) 2
<br>
(3) 3
<br>
(3) 4
<br>
(3) 5
<br>
(3) 6
<br>
(3) 7
<br>
(3) 8
<br>
(4) 0
<br>
(4) 1
<br>
(4) 2
<br>
(4) 3
<br>
(4) 4
<br>
(4) 5
<br>
(4) 6
<br>
(4) 7
<br>
(4) 8
<br>
(4) 9
<br>
(5) 0
<br>
(5) 1
<br>
(5) 2
<br>
(5) 3
<br>
(5) 4
<br>
(5) 5
<br>
(5) 6
<br>
(5) 7
<br>
(5) 8
<br>
^Cmpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 10473 on node istanbool exited on 
<br>
signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
6 total processes killed (some possibly by mpirun during cleanup)
<br>
mpirun: clean termination accomplished
<br>
<p>--------------- end example run --------------------
<br>
<p><p><p>
<br><p>
<p><p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10999/ompi_info.all.gz">ompi_info.all.gz</a>
</ul>
<!-- attachment="ompi_info.all.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
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
