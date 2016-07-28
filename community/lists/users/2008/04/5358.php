<?
$subject_val = "Re: [OMPI users] problems with hostfile when doing MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 07:26:29 2008" -->
<!-- isoreceived="20080410112629" -->
<!-- sent="Thu, 10 Apr 2008 13:26:21 +0200" -->
<!-- isosent="20080410112621" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with hostfile when doing MPMD" -->
<!-- id="9b0da5ce0804100426p1120ae92ie2416b5ed7624a26_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0804100405w783b26a6sb9337a3a3380979f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with hostfile when doing MPMD<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 07:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5359.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5359.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5359.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i narrowed it down:
<br>
The majority of processes get stuck in MPI_Barrier.
<br>
My Test application looks like this:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int iArgC, char *apArgV[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iResult = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iRank1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iNum1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char sName[256];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gethostname(sName, 255);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;iArgC, &amp;apArgV);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;iNum1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%s]I am #%d/%d before the barrier\n&quot;, sName, iRank1, iNum1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%s]I am #%d/%d after the barrier\n&quot;, sName, iRank1, iNum1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return iResult;
<br>
}
<br>
<p><p>If i make this call:
<br>
mpirun -np 3 --debug-daemons --host aim-plankton -x DISPLAY
<br>
./run_gdb.sh ./MPITest32 : -np 3 --host aim-fanta4 -x DISPLAY
<br>
./run_gdb.sh ./MPITest64
<br>
<p>(run_gdb.sh is a script which starts gdb in a xterm for each process)
<br>
Process 0 (on aim-plankton) passes the barrier and gets stuck in PMPI_Finalize,
<br>
all other processes get stuck in PMPI_Barrier,
<br>
Process 1 (on aim-plankton) displays the message
<br>
&nbsp;&nbsp;&nbsp;[aim-plankton][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113
<br>
Process 2 on (aim-plankton) displays the same message twice.
<br>
<p>Any ideas?
<br>
<p>&nbsp;&nbsp;Thanks Jody
<br>
<p>On Thu, Apr 10, 2008 at 1:05 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  Using a more realistic application than a simple &quot;Hello, world&quot;
</span><br>
<span class="quotelev1">&gt;  even the --host version doesn't work correctly
</span><br>
<span class="quotelev1">&gt;  Called this way
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 3 --host aim-plankton ./QHGLauncher
</span><br>
<span class="quotelev1">&gt;  --read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
</span><br>
<span class="quotelev1">&gt;  ./QHGLauncher_64 --read-config=pureveg_new.cfg -o output.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  the application starts but seems to hang after a while.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Running the application in gdb:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./QHGLauncher
</span><br>
<span class="quotelev1">&gt;  --read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
</span><br>
<span class="quotelev1">&gt;  -x DISPLAY ./run_gdb.sh ./QHGLauncher_64 --read-config=pureveg_new.cfg
</span><br>
<span class="quotelev1">&gt;  -o bruzlopf -n 12
</span><br>
<span class="quotelev1">&gt;  --seasonality=3,data/cai_temp2.clim,data/cai_precip2.clim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  i can see that the processes on aim-fanta4 have indeed gotten stuck
</span><br>
<span class="quotelev1">&gt;  after a few initial outputs,
</span><br>
<span class="quotelev1">&gt;  and the processes on aim-plankton all have a messsage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [aim-plankton][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt;  connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If i opnly use aim-plankton alone or aim-fanta4 alone everythiung runs
</span><br>
<span class="quotelev1">&gt;  as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  BTW: i'm, using open MPI 1.2.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 10, 2008 at 12:40 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; HI
</span><br>
<span class="quotelev2">&gt;  &gt;  In my network i have some 32 bit machines and some 64 bit machines.
</span><br>
<span class="quotelev2">&gt;  &gt;  With --host i successfully call my application:
</span><br>
<span class="quotelev2">&gt;  &gt;   mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev2">&gt;  &gt;  -np 3 --host aim-fanta4 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev2">&gt;  &gt;  (MPITest64 has the same code as MPITest, but was compiled on the 64 bit machine)
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  But when i use hostfiles:
</span><br>
<span class="quotelev2">&gt;  &gt;   mpirun -np 3 --hostfile hosts32 -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev2">&gt;  &gt;  -np 3 --hostfile hosts64 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev2">&gt;  &gt;  all 6 processes are started on the 64 bit machine aim-fanta4.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  hosts32:
</span><br>
<span class="quotelev2">&gt;  &gt;    aim-plankton slots=3
</span><br>
<span class="quotelev2">&gt;  &gt;  hosts64
</span><br>
<span class="quotelev2">&gt;  &gt;   aim-fanta4 slots
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  Is this a bug or a feature?  ;)
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  Jody
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5359.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5359.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5359.php">Rolf Vandevaart: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
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
