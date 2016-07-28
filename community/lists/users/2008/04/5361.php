<?
$subject_val = "Re: [OMPI users] problems with hostfile when doing MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 09:17:55 2008" -->
<!-- isoreceived="20080410131755" -->
<!-- sent="Thu, 10 Apr 2008 09:17:46 -0400" -->
<!-- isosent="20080410131746" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with hostfile when doing MPMD" -->
<!-- id="47FE137A.4090005_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0804100550y682a592dj40405d1e9e224762_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-04-10 09:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5362.php">Bailey, Eric: "[OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a CentOS Linux box, I see the following:
<br>
<p><span class="quotelev1"> &gt; grep 113 /usr/include/asm-i386/errno.h
</span><br>
#define	EHOSTUNREACH	113	/* No route to host */
<br>
<p>I have also seen folks do this to figure out the errno.
<br>
<p><span class="quotelev1"> &gt; perl -e 'die$!=113'
</span><br>
No route to host at -e line 1.
<br>
<p>I am not sure why this is happening, but you could also check the Open 
<br>
MPI User's Mailing List Archives where there are other examples of 
<br>
people running into this error.  A search of &quot;113&quot; had a few hits.
<br>
<p><a href="http://www.open-mpi.org/community/lists/users">http://www.open-mpi.org/community/lists/users</a>
<br>
<p>Also, I assume you would see this problem with or without the 
<br>
MPI_Barrier if you add this parameter to your mpirun line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca mpi_preconnect_all 1
<br>
<p>The MPI_Barrier is causing the bad behavior because by default 
<br>
connections are setup up lazily. Therefore only when the MPI_Barrier 
<br>
call is made and we start communicating and establishing connections do 
<br>
we start seeing the communication problems.
<br>
<p>Rolf
<br>
<p>jody wrote:
<br>
<span class="quotelev1">&gt; Rolf,
</span><br>
<span class="quotelev1">&gt; I was able to run hostname on the two noes that way,
</span><br>
<span class="quotelev1">&gt; and also a simplified version of my testprogram (without a barrier)
</span><br>
<span class="quotelev1">&gt; works. Only MPI_Barrier shows bad behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know what this message means?
</span><br>
<span class="quotelev1">&gt; [aim-plankton][0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; Does it give an idea what could be the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 10, 2008 at 2:20 PM, Rolf Vandevaart
</span><br>
<span class="quotelev1">&gt; &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  This worked for me although I am not sure how extensive our 32/64
</span><br>
<span class="quotelev2">&gt;&gt;  interoperability support is.  I tested on Solaris using the TCP
</span><br>
<span class="quotelev2">&gt;&gt;  interconnect and a 1.2.5 version of Open MPI.  Also, we configure with
</span><br>
<span class="quotelev2">&gt;&gt;  the --enable-heterogeneous flag which may make a difference here.  Also
</span><br>
<span class="quotelev2">&gt;&gt;  this did not work for me over the sm btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  By the way, can you run a simple /bin/hostname across the two nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   burl-ct-v20z-4 61 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpicc -m32 simple.c -o
</span><br>
<span class="quotelev2">&gt;&gt;  simple.32
</span><br>
<span class="quotelev2">&gt;&gt;   burl-ct-v20z-4 62 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpicc -m64 simple.c -o
</span><br>
<span class="quotelev2">&gt;&gt;  simple.64
</span><br>
<span class="quotelev2">&gt;&gt;   burl-ct-v20z-4 63 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun -gmca
</span><br>
<span class="quotelev2">&gt;&gt;  btl_tcp_if_include bge1 -gmca btl sm,self,tcp -host burl-ct-v20z-4 -np 3
</span><br>
<span class="quotelev2">&gt;&gt;  simple.32 : -host burl-ct-v20z-5 -np 3 simple.64
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-4]I am #0/6 before the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-5]I am #3/6 before the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-5]I am #4/6 before the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-4]I am #1/6 before the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-4]I am #2/6 before the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-5]I am #5/6 before the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-5]I am #3/6 after the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-4]I am #1/6 after the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-5]I am #5/6 after the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-5]I am #4/6 after the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-4]I am #2/6 after the barrier
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-4]I am #0/6 after the barrier
</span><br>
<span class="quotelev2">&gt;&gt;   burl-ct-v20z-4 64 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun -V mpirun (Open
</span><br>
<span class="quotelev2">&gt;&gt;  MPI) 1.2.5r16572
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;   burl-ct-v20z-4 65 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; i narrowed it down:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; The majority of processes get stuck in MPI_Barrier.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; My Test application looks like this:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; int main(int iArgC, char *apArgV[]) {
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     int iResult = 0;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     int iRank1;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     int iNum1;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     char sName[256];
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     gethostname(sName, 255);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     MPI_Init(&amp;iArgC, &amp;apArgV);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank1);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;iNum1);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     printf(&quot;[%s]I am #%d/%d before the barrier\n&quot;, sName, iRank1, iNum1);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     printf(&quot;[%s]I am #%d/%d after the barrier\n&quot;, sName, iRank1, iNum1);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;     return iResult;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; }
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; If i make this call:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; mpirun -np 3 --debug-daemons --host aim-plankton -x DISPLAY
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; ./run_gdb.sh ./MPITest32 : -np 3 --host aim-fanta4 -x DISPLAY
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; (run_gdb.sh is a script which starts gdb in a xterm for each process)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Process 0 (on aim-plankton) passes the barrier and gets stuck in PMPI_Finalize,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; all other processes get stuck in PMPI_Barrier,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Process 1 (on aim-plankton) displays the message
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;    [aim-plankton][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; connect() failed with errno=113
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Process 2 on (aim-plankton) displays the same message twice.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Any ideas?
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;   Thanks Jody
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; On Thu, Apr 10, 2008 at 1:05 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  Using a more realistic application than a simple &quot;Hello, world&quot;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  even the --host version doesn't work correctly
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  Called this way
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  mpirun -np 3 --host aim-plankton ./QHGLauncher
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  --read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  ./QHGLauncher_64 --read-config=pureveg_new.cfg -o output.txt
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  the application starts but seems to hang after a while.
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  Running the application in gdb:
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./QHGLauncher
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  --read-config=pureveg_new.cfg -o output.txt  : -np 3 --host aim-fanta4
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  -x DISPLAY ./run_gdb.sh ./QHGLauncher_64 --read-config=pureveg_new.cfg
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  -o bruzlopf -n 12
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  --seasonality=3,data/cai_temp2.clim,data/cai_precip2.clim
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  i can see that the processes on aim-fanta4 have indeed gotten stuck
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  after a few initial outputs,
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  and the processes on aim-plankton all have a messsage:
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  [aim-plankton][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  connect() failed with errno=113
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  If i opnly use aim-plankton alone or aim-fanta4 alone everythiung runs
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  as expected.
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  BTW: i'm, using open MPI 1.2.2
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;  Thanks
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;   Jody
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; On Thu, Apr 10, 2008 at 12:40 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt; HI
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  In my network i have some 32 bit machines and some 64 bit machines.
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  With --host i successfully call my application:
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;   mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  -np 3 --host aim-fanta4 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  (MPITest64 has the same code as MPITest, but was compiled on the 64 bit machine)
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  But when i use hostfiles:
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;   mpirun -np 3 --hostfile hosts32 -x DISPLAY ./run_gdb.sh ./MPITest :
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  -np 3 --hostfile hosts64 -x DISPLAY ./run_gdb.sh ./MPITest64
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  all 6 processes are started on the 64 bit machine aim-fanta4.
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  hosts32:
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;    aim-plankton slots=3
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  hosts64
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;   aim-fanta4 slots
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  Is this a bug or a feature?  ;)
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;  Jody
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  =========================
</span><br>
<span class="quotelev2">&gt;&gt;  rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  781-442-3043
</span><br>
<span class="quotelev2">&gt;&gt;  =========================
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5362.php">Bailey, Eric: "[OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5360.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
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
