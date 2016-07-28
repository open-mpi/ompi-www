<?
$subject_val = "[OMPI users] OpenMPI 1.5.4 remote send hang on Windows 2008R2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 20:02:57 2012" -->
<!-- isoreceived="20120111010257" -->
<!-- sent="Tue, 10 Jan 2012 17:02:51 -0800" -->
<!-- isosent="20120111010251" -->
<!-- name="Randy Abernethy" -->
<!-- email="randy.abernethy_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.5.4 remote send hang on Windows 2008R2" -->
<!-- id="CAHJqfcJLwcOdsP3nsLH1KMrTe6eK9LTBt6FrAdVx6C29gkQbZQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.5.4 remote send hang on Windows 2008R2<br>
<strong>From:</strong> Randy Abernethy (<em>randy.abernethy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 20:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18129.php">Shaandar Nyamtulga: "[OMPI users]  Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I have run into an issue that appears to be related to sending messages to
<br>
multiple processes on a single remote host prior to the remote processes
<br>
sending messages to the origin. I have cooked the issue down to the
<br>
following:
<br>
<p><p>*Test Environment of 3 Identical Hosts:*
<br>
<p>&#183;         * Intel i7-2600K, 12GB ram, Intel GB Ethernet, DLink Switch
<br>
<p>&nbsp;&#183;       * Windows 2008R2 x64 with all current updates
<br>
<p>&#183;         * OMPI  (all three hosts report the same ompi_info and were
<br>
installed with the same binary)
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win64.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win64.exe</a>
<br>
<p>C:\GDX&gt;ompi_info -v ompi full --parsable
<br>
<p>package:Open MPI hpcfan_at_VISCLUSTER26 Distribution
<br>
<p>ompi:version:full:1.5.4
<br>
<p>ompi:version:svn:r25060
<br>
<p>ompi:version:release_date:Aug 18, 2011
<br>
<p>orte:version:full:1.5.4
<br>
<p>orte:version:svn:r25060
<br>
<p>orte:version:release_date:Aug 18, 2011
<br>
<p>opal:version:full:1.5.4
<br>
<p>opal:version:svn:r25060
<br>
<p>opal:version:release_date:Aug 18, 2011
<br>
<p>ident:1.5.4
<br>
<p><p><p>*Test Program:*
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>#define OMPI_IMPORTS
<br>
<p>#include &quot;C:\Program Files (x86)\OpenMPI_v1.5.4-x64\include\mpi.h&quot;
<br>
<p><p><p>int main(int argc, char *argv[])
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;int rank, size, i, msg;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Process %i of %i initialized\n&quot;, rank, size);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;if (0 == rank) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; i &lt; size; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i sending %i to %i\n&quot;, rank, i, i);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rank, 1, MPI_INT, i, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; i &lt; size; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;msg, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i received %i\n&quot;, rank, msg);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;else {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;msg, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i received %i\n&quot;, rank, msg);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rank, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i sent %i to %i\n&quot;, rank, rank, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;printf(&quot;Process %i exiting\n&quot;, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p><p><p>*Test Cases:*
<br>
<p>&#183;            X procs on the originating node: Working
<br>
<p>&#183;            X procs on the originating node and one proc on one or more
<br>
remote nodes: Working
<br>
<p>&#183;            X procs on the originating node and more than one proc on any
<br>
remote node:  Fails
<br>
<p>A test with two procs on the origin and one on each of two remote nodes
<br>
runs, however the same test with the two remote procs on the same machine
<br>
fails on the second remote send. Here are some test runs (the ^C indicates
<br>
a hang).
<br>
<p>C:\GDX&gt;mpirun -v -display-map -hostfile mpihosts -np 2 c:\gdx\distmsg.exe
<br>
<p><p><p>&nbsp;========================   JOB MAP   ========================
<br>
<p><p><p>&nbsp;Data for node: Yap     Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42094,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42094,1] Process rank: 1
<br>
<p><p><p>&nbsp;=============================================================
<br>
<p>Process 0 of 2 initialized
<br>
<p>Process 1 of 2 initialized
<br>
<p>Process 0 sending 1 to 1
<br>
<p>Process 1 received 0
<br>
<p>Process 1 sent 1 to 0
<br>
<p>Process 1 exiting
<br>
<p>Process 0 received 1
<br>
<p>Process 0 exiting
<br>
<p><p><p>C:\GDX&gt;mpirun -v -display-map -hostfile mpihosts -np 3 c:\gdx\distmsg.exe
<br>
<p><p><p>&nbsp;========================   JOB MAP   ========================
<br>
<p><p><p>&nbsp;Data for node: Yap     Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42014,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42014,1] Process rank: 1
<br>
<p><p><p>&nbsp;Data for node: chuuk   Num procs: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42014,1] Process rank: 2
<br>
<p><p><p>&nbsp;=============================================================
<br>
<p>connecting to chuuk
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>Process 0 of 3 initialized
<br>
<p>Process 1 of 3 initialized
<br>
<p>Process 0 sending 1 to 1
<br>
<p>Process 0 sending 2 to 2
<br>
<p>Process 1 received 0
<br>
<p>Process 1 sent 1 to 0
<br>
<p>Process 1 exiting
<br>
<p>Process 0 received 1
<br>
<p>Process 0 received 2
<br>
<p>Process 0 exiting
<br>
<p><p><p>C:\GDX&gt;mpirun -v -display-map -hostfile mpihosts -np 4 c:\gdx\distmsg.exe
<br>
<p><p><p>&nbsp;========================   JOB MAP   ========================
<br>
<p><p><p>&nbsp;Data for node: Yap     Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43894,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43894,1] Process rank: 1
<br>
<p><p><p>&nbsp;Data for node: chuuk   Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43894,1] Process rank: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43894,1] Process rank: 3
<br>
<p><p><p>&nbsp;=============================================================
<br>
<p>connecting to chuuk
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>Process 0 of 4 initialized
<br>
<p>Process 1 of 4 initialized
<br>
<p>Process 0 sending 1 to 1
<br>
<p>Process 0 sending 2 to 2
<br>
<p>Process 1 received 0
<br>
<p>Process 1 sent 1 to 0
<br>
<p>Process 1 exiting
<br>
<p>Process 0 sending 3 to 3
<br>
<p>^C
<br>
<p>C:\GDX&gt;mpirun -v -display-map -hostfile mpihosts -np 4 c:\gdx\distmsg.exe
<br>
<p><p><p>&nbsp;========================   JOB MAP   ========================
<br>
<p><p><p>&nbsp;Data for node: Yap     Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43310,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43310,1] Process rank: 1
<br>
<p><p><p>&nbsp;Data for node: chuuk   Num procs: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43310,1] Process rank: 2
<br>
<p><p><p>&nbsp;Data for node: kosrae  Num procs: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43310,1] Process rank: 3
<br>
<p><p><p>&nbsp;=============================================================
<br>
<p>connecting to chuuk
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>connecting to kosrae
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>Process 0 of 4 initialized
<br>
<p>Process 1 of 4 initialized
<br>
<p>Process 0 sending 1 to 1
<br>
<p>Process 0 sending 2 to 2
<br>
<p>Process 1 received 0
<br>
<p>Process 1 sent 1 to 0
<br>
<p>Process 1 exiting
<br>
<p>Process 0 sending 3 to 3
<br>
<p>Process 0 received 1
<br>
<p>Process 0 received 2
<br>
<p>Process 0 received 3
<br>
<p>Process 0 exiting
<br>
<p><p><p>C:\GDX&gt;mpirun -v -display-map -hostfile mpihosts -np 5 c:\gdx\distmsg.exe
<br>
<p><p><p>&nbsp;========================   JOB MAP   ========================
<br>
<p><p><p>&nbsp;Data for node: Yap     Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43590,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43590,1] Process rank: 1
<br>
<p><p><p>&nbsp;Data for node: chuuk   Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43590,1] Process rank: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43590,1] Process rank: 3
<br>
<p><p><p>&nbsp;Data for node: kosrae  Num procs: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43590,1] Process rank: 4
<br>
<p><p><p>&nbsp;=============================================================
<br>
<p>connecting to chuuk
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>connecting to kosrae
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>Process 0 of 5 initialized
<br>
<p>Process 1 of 5 initialized
<br>
<p>Process 0 sending 1 to 1
<br>
<p>Process 0 sending 2 to 2
<br>
<p>Process 1 received 0
<br>
<p>Process 1 sent 1 to 0
<br>
<p>Process 1 exiting
<br>
<p>Process 0 sending 3 to 3
<br>
<p>^C
<br>
<p><p><p>The remote process which is the target of the hung send seems to generate
<br>
significant ongoing CPU activity and &quot;Other&quot; I/O.
<br>
<p><p>*Workaround*
<br>
<p>Curiously swapping the send/receive order solves the problem.
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>#define OMPI_IMPORTS
<br>
<p>#include &quot;C:\Program Files (x86)\OpenMPI_v1.5.4-x64\include\mpi.h&quot;
<br>
<p><p><p>int main(int argc, char *argv[])
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;int rank, size, i, msg;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Process %i of %i initialized\n&quot;, rank, size);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;if (0 == rank) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; i &lt; size; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;msg, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i received %i\n&quot;, rank, msg);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; i &lt; size; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i sending %i to %i\n&quot;, rank, i, i);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rank, 1, MPI_INT, i, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;else {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rank, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i sent %i to %i\n&quot;, rank, rank, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;msg, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %i received %i\n&quot;, rank, msg);
<br>
<p>&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;printf(&quot;Process %i exiting\n&quot;, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p><p><p>C:\GDX&gt;mpirun -v -display-map -hostfile mpihosts -np 5 c:\gdx\distmsgb.exe
<br>
<p><p><p>&nbsp;========================   JOB MAP   ========================
<br>
<p><p><p>&nbsp;Data for node: Yap     Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43126,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43126,1] Process rank: 1
<br>
<p><p><p>&nbsp;Data for node: chuuk   Num procs: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43126,1] Process rank: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43126,1] Process rank: 3
<br>
<p><p><p>&nbsp;Data for node: kosrae  Num procs: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [43126,1] Process rank: 4
<br>
<p><p><p>&nbsp;=============================================================
<br>
<p>connecting to chuuk
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>connecting to kosrae
<br>
<p>username:administrator
<br>
<p>password:********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>Process 0 of 5 initialized
<br>
<p>Process 1 of 5 initialized
<br>
<p>Process 1 sent 1 to 0
<br>
<p>Process 0 received 4
<br>
<p>Process 0 received 1
<br>
<p>Process 0 received 2
<br>
<p>Process 0 received 3
<br>
<p>Process 0 sending 1 to 1
<br>
<p>Process 0 sending 2 to 2
<br>
<p>Process 0 sending 3 to 3
<br>
<p>Process 0 sending 4 to 4
<br>
<p>Process 0 exiting
<br>
<p>Process 1 received 0
<br>
<p>Process 1 exiting
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18129.php">Shaandar Nyamtulga: "[OMPI users]  Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
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
