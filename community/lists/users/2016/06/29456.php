<?
$subject_val = "Re: [OMPI users] Client-Server Shared Memory Transport";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 11:29:26 2016" -->
<!-- isoreceived="20160615152926" -->
<!-- sent="Wed, 15 Jun 2016 15:29:11 +0000" -->
<!-- isosent="20160615152911" -->
<!-- name="Louis Williams" -->
<!-- email="louis.williams_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Client-Server Shared Memory Transport" -->
<!-- id="CAL3xDfU584iujLDyDLDs7TMUr2cWs0aXLCVRyskJDHgf7QdaQA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3A17B58A-3E3D-40BE-9DE5-B05467D06161_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Client-Server Shared Memory Transport<br>
<strong>From:</strong> Louis Williams (<em>louis.williams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 11:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29455.php">Sasso, John (GE Power, Non-GE): "[OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Reply:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, thanks for the quick reply. Is cross-job fast transport like
<br>
InfiniBand supported?
<br>
<p>Louis
<br>
<p>On Tue, Jun 14, 2016 at 3:53 PM Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nope - we don&#226;&#128;&#153;t currently support cross-job shared memory operations.
</span><br>
<span class="quotelev1">&gt; Nathan has talked about doing so for vader, but not at this time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2016, at 12:38 PM, Louis Williams &lt;louis.williams_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attempting to use the sm and vader BTLs between a client and server
</span><br>
<span class="quotelev1">&gt; process, but it seems impossible to use fast transports (i.e. not TCP)
</span><br>
<span class="quotelev1">&gt; between two independent groups started with two separate mpirun
</span><br>
<span class="quotelev1">&gt; invocations. Am I correct, or is there a way to communicate using shared
</span><br>
<span class="quotelev1">&gt; memory between a client and server like this? It seems this might be the
</span><br>
<span class="quotelev1">&gt; case: <a href="https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495">https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The server calls MPI::COMM_WORLD.Accept() and the client calls
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Connect(). Each program is started with &quot;mpirun --np 1
</span><br>
<span class="quotelev1">&gt; --mca btl self,sm,vader &lt;exectuable&gt;&quot; where the executable is either the
</span><br>
<span class="quotelev1">&gt; client or server program. When no BTL is specified, both establish a TCP
</span><br>
<span class="quotelev1">&gt; connection just fine. But when the sm and vader BTLs are specified,
</span><br>
<span class="quotelev1">&gt; immediately after the Connect() call, both client and server exit with the
</span><br>
<span class="quotelev1">&gt; message, copied at the end. It seems as though intergroup communication
</span><br>
<span class="quotelev1">&gt; can't use fast transport and only uses TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, as expected, running the Accept() and Connect() calls within a
</span><br>
<span class="quotelev1">&gt; single program with &quot;mpirun -np 2 --mca btl self,sm,vader ...&quot; uses shared
</span><br>
<span class="quotelev1">&gt; memory as transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun --ompi-server &quot;3414491136.0;tcp://10.4.131.16:49775&quot; -np 1
</span><br>
<span class="quotelev1">&gt; --mca btl self,vader ./server
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[50012,1],0]) is on host: MacBook-Pro-80
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[50010,1],0]) is on host: MacBook-Pro-80
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-80.local:57315] [[50012,1],0] ORTE_ERROR_LOG: Unreachable in
</span><br>
<span class="quotelev1">&gt; file dpm_orte.c at line 523
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-80:57315] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-80:57315] *** reported by process [7572553729,4294967296]
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-80:57315] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-80:57315] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-80:57315] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-80:57315] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[50012,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    17
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Louis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29441.php">http://www.open-mpi.org/community/lists/users/2016/06/29441.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29442.php">http://www.open-mpi.org/community/lists/users/2016/06/29442.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Previous message:</strong> <a href="29455.php">Sasso, John (GE Power, Non-GE): "[OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>Reply:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
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
