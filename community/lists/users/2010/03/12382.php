<?
$subject_val = "Re: [OMPI users] Problem in remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 11:57:26 2010" -->
<!-- isoreceived="20100319155726" -->
<!-- sent="Fri, 19 Mar 2010 09:57:17 -0600" -->
<!-- isosent="20100319155717" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in remote nodes" -->
<!-- id="FB781C54-FC1F-4EE9-BA39-487B172B37C8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1490.83.230.231.47.1269013352.squirrel_at_webmail.unavarra.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in remote nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 11:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you configure OMPI with --enable-debug? You should do this so that more diagnostic output is available.
<br>
<p>You can also add the following to your cmd line to get more info:
<br>
<p>--debug --debug-daemons --leave-session-attached
<br>
<p>Something is likely blocking proper launch of the daemons and processes so you aren't getting to the btl's at all.
<br>
<p><p>On Mar 19, 2010, at 9:42 AM, uriz.49949_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; The processes are running on the remote nodes but they don't give the
</span><br>
<span class="quotelev1">&gt; response to the origin node. I don't know why.
</span><br>
<span class="quotelev1">&gt; With the option --mca btl_base_verbose 30, I have the same problems and it
</span><br>
<span class="quotelev1">&gt; doesn't show any message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 17, 2010 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 17, 2010, at 4:39 AM, &lt;uriz.49949_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi everyone I'm a new Open MPI user and I have just installed Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a 6 nodes cluster with Scientific Linux. When I execute it in local it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works perfectly, but when I try to execute it on the remote nodes with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --host  option it hangs and gives no message. I think that the problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could be with the shared libraries but i'm not sure. In my opinion the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem is not ssh because i can access to the nodes with no password
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might want to check that Open MPI processes are actually running on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the remote nodes -- check with ps if you see any &quot;orted&quot; or other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI-related processes (e.g., your processes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any TCP firewall software running between the nodes?  If so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you'll need to disable it (at least for Open MPI jobs).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also recommend running mpirun with the option --mca btl_base_verbose
</span><br>
<span class="quotelev2">&gt;&gt; 30 to troubleshoot tcp issues.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In some environments, you need to explicitly tell mpirun what network
</span><br>
<span class="quotelev2">&gt;&gt; interfaces it can use to reach the hosts. Read the following FAQ
</span><br>
<span class="quotelev2">&gt;&gt; section for more information:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Item 7 of the FAQ might be of special interest.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12381.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
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
