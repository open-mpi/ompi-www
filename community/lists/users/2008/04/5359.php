<?
$subject_val = "Re: [OMPI users] problems with hostfile when doing MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 08:21:09 2008" -->
<!-- isoreceived="20080410122109" -->
<!-- sent="Thu, 10 Apr 2008 08:20:59 -0400" -->
<!-- isosent="20080410122059" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with hostfile when doing MPMD" -->
<!-- id="47FE062B.8080907_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0804100426p1120ae92ie2416b5ed7624a26_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 08:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This worked for me although I am not sure how extensive our 32/64 
<br>
interoperability support is.  I tested on Solaris using the TCP 
<br>
interconnect and a 1.2.5 version of Open MPI.  Also, we configure with 
<br>
the --enable-heterogeneous flag which may make a difference here.  Also 
<br>
this did not work for me over the sm btl.
<br>
<p>By the way, can you run a simple /bin/hostname across the two nodes?
<br>
<p><p>&nbsp;&nbsp;burl-ct-v20z-4 61 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpicc -m32 simple.c -o 
<br>
simple.32
<br>
&nbsp;&nbsp;burl-ct-v20z-4 62 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpicc -m64 simple.c -o 
<br>
simple.64
<br>
&nbsp;&nbsp;burl-ct-v20z-4 63 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun -gmca 
<br>
btl_tcp_if_include bge1 -gmca btl sm,self,tcp -host burl-ct-v20z-4 -np 3 
<br>
simple.32 : -host burl-ct-v20z-5 -np 3 simple.64
<br>
[burl-ct-v20z-4]I am #0/6 before the barrier
<br>
[burl-ct-v20z-5]I am #3/6 before the barrier
<br>
[burl-ct-v20z-5]I am #4/6 before the barrier
<br>
[burl-ct-v20z-4]I am #1/6 before the barrier
<br>
[burl-ct-v20z-4]I am #2/6 before the barrier
<br>
[burl-ct-v20z-5]I am #5/6 before the barrier
<br>
[burl-ct-v20z-5]I am #3/6 after the barrier
<br>
[burl-ct-v20z-4]I am #1/6 after the barrier
<br>
[burl-ct-v20z-5]I am #5/6 after the barrier
<br>
[burl-ct-v20z-5]I am #4/6 after the barrier
<br>
[burl-ct-v20z-4]I am #2/6 after the barrier
<br>
[burl-ct-v20z-4]I am #0/6 after the barrier
<br>
&nbsp;&nbsp;burl-ct-v20z-4 64 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun -V mpirun (Open 
<br>
MPI) 1.2.5r16572
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
&nbsp;&nbsp;burl-ct-v20z-4 65 =&gt;
<br>
<p><p>jody wrote:
<br>
<span class="quotelev1">&gt; i narrowed it down:
</span><br>
<span class="quotelev1">&gt; The majority of processes get stuck in MPI_Barrier.
</span><br>
<span class="quotelev1">&gt; My Test application looks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int iArgC, char *apArgV[]) {
</span><br>
<span class="quotelev1">&gt;     int iResult = 0;
</span><br>
<span class="quotelev1">&gt;     int iRank1;
</span><br>
<span class="quotelev1">&gt;     int iNum1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     char sName[256];
</span><br>
<span class="quotelev1">&gt;     gethostname(sName, 255);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;iArgC, &amp;apArgV);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank1);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;iNum1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;[%s]I am #%d/%d before the barrier\n&quot;, sName, iRank1, iNum1);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;[%s]I am #%d/%d after the barrier\n&quot;, sName, iRank1, iNum1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return iResult;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i make this call:
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 --debug-daemons --host aim-plankton -x DISPLAY
</span><br>
<span class="quotelev1">&gt; ./run_gdb.sh ./MPITest32 : -np 3 --host aim-fanta4 -x DISPLAY
</span><br>
<span class="quotelev1">&gt; ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (run_gdb.sh is a script which starts gdb in a xterm for each process)
</span><br>
<span class="quotelev1">&gt; Process 0 (on aim-plankton) passes the barrier and gets stuck in PMPI_Finalize,
</span><br>
<span class="quotelev1">&gt; all other processes get stuck in PMPI_Barrier,
</span><br>
<span class="quotelev1">&gt; Process 1 (on aim-plankton) displays the message
</span><br>
<span class="quotelev1">&gt;    [aim-plankton][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; Process 2 on (aim-plankton) displays the same message twice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 10, 2008 at 1:05 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;  Using a more realistic application than a simple &quot;Hello, world&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  even the --host version doesn't work correctly
</span><br>
<span class="quotelev2">&gt;&gt;  Called this way
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 3 --host aim-plankton ./QHGLauncher
</span><br>
<span class="quotelev2">&gt;&gt;  --read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
</span><br>
<span class="quotelev2">&gt;&gt;  ./QHGLauncher_64 --read-config=pureveg_new.cfg -o output.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  the application starts but seems to hang after a while.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Running the application in gdb:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./QHGLauncher
</span><br>
<span class="quotelev2">&gt;&gt;  --read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
</span><br>
<span class="quotelev2">&gt;&gt;  -x DISPLAY ./run_gdb.sh ./QHGLauncher_64 --read-config=pureveg_new.cfg
</span><br>
<span class="quotelev2">&gt;&gt;  -o bruzlopf -n 12
</span><br>
<span class="quotelev2">&gt;&gt;  --seasonality=3,data/cai_temp2.clim,data/cai_precip2.clim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  i can see that the processes on aim-fanta4 have indeed gotten stuck
</span><br>
<span class="quotelev2">&gt;&gt;  after a few initial outputs,
</span><br>
<span class="quotelev2">&gt;&gt;  and the processes on aim-plankton all have a messsage:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  [aim-plankton][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt;  connect() failed with errno=113
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If i opnly use aim-plankton alone or aim-fanta4 alone everythiung runs
</span><br>
<span class="quotelev2">&gt;&gt;  as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  BTW: i'm, using open MPI 1.2.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks
</span><br>
<span class="quotelev2">&gt;&gt;   Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 10, 2008 at 12:40 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; HI
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  In my network i have some 32 bit machines and some 64 bit machines.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  With --host i successfully call my application:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;   mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  -np 3 --host aim-fanta4 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  (MPITest64 has the same code as MPITest, but was compiled on the 64 bit machine)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  But when i use hostfiles:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;   mpirun -np 3 --hostfile hosts32 -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  -np 3 --hostfile hosts64 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  all 6 processes are started on the 64 bit machine aim-fanta4.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  hosts32:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;    aim-plankton slots=3
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  hosts64
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;   aim-fanta4 slots
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  Is this a bug or a feature?  ;)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5358.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
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
