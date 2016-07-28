<?
$subject_val = "Re: [OMPI users] Trying to map to socket #0 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 10:24:59 2015" -->
<!-- isoreceived="20151207152459" -->
<!-- sent="Mon, 7 Dec 2015 16:24:36 +0100" -->
<!-- isosent="20151207152436" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to map to socket #0 on each node" -->
<!-- id="CAAbhqc5uGQZwj2EBNXyAjuUHm2NTSC1KXUYnKMs-XgEjW-b-Cg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5665A359.5030400_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trying to map to socket #0 on each node<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-07 10:24:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28141.php">Åke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couldn't it be that the slot list should be 0,1,2,3?
<br>
It depends on the setup.
<br>
You can get some more information about _what it does_ by using
<br>
--report-bindings (when/if it succeeds).
<br>
<p><p>2015-12-07 16:18 GMT+01:00 Carl Ponder &lt;cponder_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; *On 12/06/2015 11:07 AM, Carl Ponder wrote:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run a multi-node job but I want to map all of the processes
</span><br>
<span class="quotelev1">&gt; to cores on socket #0 only.
</span><br>
<span class="quotelev1">&gt; I'm having a hard time figuring out how to do this, the obvious
</span><br>
<span class="quotelev1">&gt; combinations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 --map-by core -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -cpu-set S0 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 --map-by ppr:4:node,ppr:4:socket -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -bind-to slot=0:0,2,4,6 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 -bind-to slot=0:0,0:2,0:4,0:6 -report-bindings ...
</span><br>
<span class="quotelev1">&gt; mpirun -n  8 -npernode 4 --map-by core:PE=2 -bind-to core -report-bindings
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all are reported as having conflicting resource requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * On 12/06/2015 11:28 AM, Ralph Castain wrote:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You want &quot;-bind-to socket -slot-list=0,2,4,6&quot;
</span><br>
<span class="quotelev1">&gt; Or if you want each process bound to a single core on the socket, then
</span><br>
<span class="quotelev1">&gt; change &#226;&#128;&#156;socket&#226;&#128;&#157; to &#226;&#128;&#156;core&#226;&#128;&#157; in the above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far I can't get this to work. Using the above form
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 *-bind-to socket --slot-list 0,2,4,6* -report-bindings ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it says that it's a mis-specification:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Conflicting directives for binding policy are causing the policy
</span><br>
<span class="quotelev1">&gt; to be redefined:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   New policy:   socket
</span><br>
<span class="quotelev1">&gt;   Prior policy:  SOCKET
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check that only one policy is defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I treat the socket-binding as redundant and just use this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 -*-slot-list 0,2,4,6* -report-bindings ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it looks like it's ignoring slots 0,2,4,6 available on the second node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A rank is missing its location specification:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Rank:        0
</span><br>
<span class="quotelev1">&gt;   Rank file:   (null)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All processes must have their location specified in the rank file. Either
</span><br>
<span class="quotelev1">&gt; add an entry to the file, or provide a default slot_list to use for
</span><br>
<span class="quotelev1">&gt; any unspecified ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (One question is whether it is interacting with Torque correctly).
</span><br>
<span class="quotelev1">&gt; Trying to force it to split the processes across nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 *-npernode 4 --slot-list 0,2,4,6* -report-bindings ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Conflicting directives for mapping policy are causing the policy
</span><br>
<span class="quotelev1">&gt; to be redefined:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   New policy:   RANK_FILE
</span><br>
<span class="quotelev1">&gt;   Prior policy:  UNKNOWN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check that only one policy is defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know what to do here? I'm using OpenMPI 1.10.1.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Carl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt; of the original message.
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28139.php">http://www.open-mpi.org/community/lists/users/2015/12/28139.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28140/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28141.php">Åke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="28139.php">Carl Ponder: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
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
