<?
$subject_val = "Re: [OMPI users] Problem in remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 11:42:38 2010" -->
<!-- isoreceived="20100319154238" -->
<!-- sent="Fri, 19 Mar 2010 16:42:32 +0100 (CET)" -->
<!-- isosent="20100319154232" -->
<!-- name="uriz.49949_at_[hidden]" -->
<!-- email="uriz.49949_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in remote nodes" -->
<!-- id="1490.83.230.231.47.1269013352.squirrel_at_webmail.unavarra.es" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9108753b1003170951y3aed98a9kde02ed7a534b4cfb_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:uriz.49949_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20in%20remote%20nodes"><em>uriz.49949_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-19 11:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12382.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12380.php">Josh Hursey: "Re: [OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>In reply to:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12382.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12382.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The processes are running on the remote nodes but they don't give the
<br>
response to the origin node. I don't know why.
<br>
With the option --mca btl_base_verbose 30, I have the same problems and it
<br>
doesn't show any message.
<br>
<p>Thanks
<br>
<p><span class="quotelev1">&gt; On Wed, Mar 17, 2010 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2010, at 4:39 AM, &lt;uriz.49949_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone I'm a new Open MPI user and I have just installed Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a 6 nodes cluster with Scientific Linux. When I execute it in local it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works perfectly, but when I try to execute it on the remote nodes with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host &#160;option it hangs and gives no message. I think that the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be with the shared libraries but i'm not sure. In my opinion the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem is not ssh because i can access to the nodes with no password
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to check that Open MPI processes are actually running on
</span><br>
<span class="quotelev2">&gt;&gt; the remote nodes -- check with ps if you see any &quot;orted&quot; or other
</span><br>
<span class="quotelev2">&gt;&gt; MPI-related processes (e.g., your processes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any TCP firewall software running between the nodes? &#160;If so,
</span><br>
<span class="quotelev2">&gt;&gt; you'll need to disable it (at least for Open MPI jobs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also recommend running mpirun with the option --mca btl_base_verbose
</span><br>
<span class="quotelev1">&gt; 30 to troubleshoot tcp issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In some environments, you need to explicitly tell mpirun what network
</span><br>
<span class="quotelev1">&gt; interfaces it can use to reach the hosts. Read the following FAQ
</span><br>
<span class="quotelev1">&gt; section for more information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Item 7 of the FAQ might be of special interest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12382.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12380.php">Josh Hursey: "Re: [OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>In reply to:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12382.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12382.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
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
