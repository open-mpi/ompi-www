<?
$subject_val = "Re: [OMPI users] Client-Server Shared Memory Transport";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 11:39:19 2016" -->
<!-- isoreceived="20160615153919" -->
<!-- sent="Wed, 15 Jun 2016 08:39:14 -0700" -->
<!-- isosent="20160615153914" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Client-Server Shared Memory Transport" -->
<!-- id="BBC028C0-1058-4F64-BE02-765728130228_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAL3xDfU584iujLDyDLDs7TMUr2cWs0aXLCVRyskJDHgf7QdaQA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 11:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29456.php">Louis Williams: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>In reply to:</strong> <a href="29456.php">Louis Williams: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh sure - just not shared memory
<br>
<p><span class="quotelev1">&gt; On Jun 15, 2016, at 8:29 AM, Louis Williams &lt;louis.williams_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, thanks for the quick reply. Is cross-job fast transport like InfiniBand supported? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Louis 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 14, 2016 at 3:53 PM Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Nope - we don&#226;&#128;&#153;t currently support cross-job shared memory operations. Nathan has talked about doing so for vader, but not at this time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 14, 2016, at 12:38 PM, Louis Williams &lt;louis.williams_at_[hidden] &lt;mailto:louis.williams_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am attempting to use the sm and vader BTLs between a client and server process, but it seems impossible to use fast transports (i.e. not TCP) between two independent groups started with two separate mpirun invocations. Am I correct, or is there a way to communicate using shared memory between a client and server like this? It seems this might be the case: <a href="https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495">https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495</a> &lt;<a href="https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495">https://github.com/open-mpi/ompi/blob/master/ompi/dpm/dpm.c#L495</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The server calls MPI::COMM_WORLD.Accept() and the client calls MPI::COMM_WORLD.Connect(). Each program is started with &quot;mpirun --np 1 --mca btl self,sm,vader &lt;exectuable&gt;&quot; where the executable is either the client or server program. When no BTL is specified, both establish a TCP connection just fine. But when the sm and vader BTLs are specified, immediately after the Connect() call, both client and server exit with the message, copied at the end. It seems as though intergroup communication can't use fast transport and only uses TCP. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, as expected, running the Accept() and Connect() calls within a single program with &quot;mpirun -np 2 --mca btl self,sm,vader ...&quot; uses shared memory as transport.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; mpirun --ompi-server &quot;3414491136.0;tcp://10.4.131.16:49775 &lt;<a href="http://10.4.131.16:49775/">http://10.4.131.16:49775/</a>&gt;&quot; -np 1 --mca btl self,vader ./server
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[50012,1],0]) is on host: MacBook-Pro-80
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[50010,1],0]) is on host: MacBook-Pro-80
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [MacBook-Pro-80.local:57315] [[50012,1],0] ORTE_ERROR_LOG: Unreachable in file dpm_orte.c at line 523
</span><br>
<span class="quotelev2">&gt;&gt; [MacBook-Pro-80:57315] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev2">&gt;&gt; [MacBook-Pro-80:57315] *** reported by process [7572553729,4294967296]
</span><br>
<span class="quotelev2">&gt;&gt; [MacBook-Pro-80:57315] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [MacBook-Pro-80:57315] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; [MacBook-Pro-80:57315] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [MacBook-Pro-80:57315] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process name: [[50012,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;   Exit code:    17
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Louis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29441.php">http://www.open-mpi.org/community/lists/users/2016/06/29441.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29441.php">http://www.open-mpi.org/community/lists/users/2016/06/29441.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29442.php">http://www.open-mpi.org/community/lists/users/2016/06/29442.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29442.php">http://www.open-mpi.org/community/lists/users/2016/06/29442.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29456.php">http://www.open-mpi.org/community/lists/users/2016/06/29456.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29456.php">Louis Williams: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>In reply to:</strong> <a href="29456.php">Louis Williams: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
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
