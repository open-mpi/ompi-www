<?
$subject_val = "[OMPI users] Client-Server Shared Memory Transport";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 15:38:29 2016" -->
<!-- isoreceived="20160614193829" -->
<!-- sent="Tue, 14 Jun 2016 19:38:13 +0000" -->
<!-- isosent="20160614193813" -->
<!-- name="Louis Williams" -->
<!-- email="louis.williams_at_[hidden]" -->
<!-- subject="[OMPI users] Client-Server Shared Memory Transport" -->
<!-- id="CAL3xDfU6eoi1PbzcL2ZzcX23Tt5e+1rr59NDBkBemW-Q6+63Pg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Client-Server Shared Memory Transport<br>
<strong>From:</strong> Louis Williams (<em>louis.williams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 15:38:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29440.php">Nathan Hjelm: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Reply:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am attempting to use the sm and vader BTLs between a client and server
<br>
process, but it seems impossible to use fast transports (i.e. not TCP)
<br>
between two independent groups started with two separate mpirun
<br>
invocations. Am I correct, or is there a way to communicate using shared
<br>
memory between a client and server like this? It seems this might be the
<br>
case: <a href="https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495">https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495</a>
<br>
<p>The server calls MPI::COMM_WORLD.Accept() and the client calls
<br>
MPI::COMM_WORLD.Connect(). Each program is started with &quot;mpirun --np 1
<br>
--mca btl self,sm,vader &lt;exectuable&gt;&quot; where the executable is either the
<br>
client or server program. When no BTL is specified, both establish a TCP
<br>
connection just fine. But when the sm and vader BTLs are specified,
<br>
immediately after the Connect() call, both client and server exit with the
<br>
message, copied at the end. It seems as though intergroup communication
<br>
can't use fast transport and only uses TCP.
<br>
<p>Also, as expected, running the Accept() and Connect() calls within a single
<br>
program with &quot;mpirun -np 2 --mca btl self,sm,vader ...&quot; uses shared memory
<br>
as transport.
<br>
<p>$&gt; mpirun --ompi-server &quot;3414491136.0;tcp://10.4.131.16:49775&quot; -np 1 --mca
<br>
btl self,vader ./server
<br>
<p>At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[50012,1],0]) is on host: MacBook-Pro-80
<br>
&nbsp;&nbsp;Process 2 ([[50010,1],0]) is on host: MacBook-Pro-80
<br>
&nbsp;&nbsp;BTLs attempted: self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
[MacBook-Pro-80.local:57315] [[50012,1],0] ORTE_ERROR_LOG: Unreachable in
<br>
file dpm_orte.c at line 523
<br>
[MacBook-Pro-80:57315] *** An error occurred in MPI_Comm_accept
<br>
[MacBook-Pro-80:57315] *** reported by process [7572553729,4294967296]
<br>
[MacBook-Pro-80:57315] *** on communicator MPI_COMM_WORLD
<br>
[MacBook-Pro-80:57315] *** MPI_ERR_INTERN: internal error
<br>
[MacBook-Pro-80:57315] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[MacBook-Pro-80:57315] ***    and potentially your MPI job)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[50012,1],0]
<br>
&nbsp;&nbsp;Exit code:    17
<br>
--------------------------------------------------------------------------
<br>
<p>Thanks,
<br>
Louis
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29440.php">Nathan Hjelm: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI	1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Reply:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
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
