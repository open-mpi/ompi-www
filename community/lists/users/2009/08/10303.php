<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 11:12:00 2009" -->
<!-- isoreceived="20090811151200" -->
<!-- sent="Tue, 11 Aug 2009 09:11:53 -0600" -->
<!-- isosent="20090811151153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="71d2d8cc0908110811s697aaf98h45dce2ef4109c4d7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07A48D32-6374-4542-861C-F9FA9A10922A_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 11:11:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, it's the lib confusion that's the problem - this is the problem:
<br>
<p>[saturna.cluster:07360] [[14551,0],0] ORTE_ERROR_LOG: Buffer type (described
<br>
<span class="quotelev1">&gt; vs non-described) mismatch - operation not allowed in file
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c at line 2475
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Have you tried configuring with --enable-mpirun-prefix-by-default? This
<br>
would help avoid the confusion. You also should check your path to ensure
<br>
that it is correct as well (make sure that mpirun is the one you expect, and
<br>
that you are getting the corresponding remote orted).
<br>
<p>Ralph
<br>
<p>On Tue, Aug 11, 2009 at 8:23 AM, Klymak Jody &lt;jklymak_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11-Aug-09, at 7:03 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sigh - too early in the morning for this old brain, I fear...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are right - the ranks are fine, and local rank doesn't matter. It
</span><br>
<span class="quotelev1">&gt; sounds like a problem where the TCP messaging is getting a message ack'd
</span><br>
<span class="quotelev1">&gt; from someone other than the process that was supposed to recv the message.
</span><br>
<span class="quotelev1">&gt; This should cause us to abort, but we were just talking on the phone that
</span><br>
<span class="quotelev1">&gt; the abort procedure may not be working correctly. Or it could be (as Jeff
</span><br>
<span class="quotelev1">&gt; suggests) that the version mismatch is also preventing us from properly
</span><br>
<span class="quotelev1">&gt; aborting too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I fear we are back to trying to find these other versions on your
</span><br>
<span class="quotelev1">&gt; nodes...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, the old version is still on the nodes (in /usr/lib as default for OS
</span><br>
<span class="quotelev1">&gt; X)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can try and clean those all out by hand but I'm still confused why the
</span><br>
<span class="quotelev1">&gt; old version would be used - how does openMPI find the right library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note again, that I get these MCA warnings on the server when just running
</span><br>
<span class="quotelev1">&gt; ompi_info and I *have* cleaned out /usr/lib on the server.  So I really
</span><br>
<span class="quotelev1">&gt; don't understand how on the server I can still have a library issue.  Is
</span><br>
<span class="quotelev1">&gt; there a way to trace at runtime what library an executable is dynamically
</span><br>
<span class="quotelev1">&gt; linking to?  Can I rebuild openmpi statically?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 11, 2009 at 7:43 AM, Klymak Jody &lt;jklymak_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11-Aug-09, at 6:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The reason your job is hanging is sitting in the orte-ps output. You have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple processes declaring themselves to be the same MPI rank. That
</span><br>
<span class="quotelev3">&gt;&gt;&gt; definitely won't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Its the &quot;local rank&quot; if that makes any difference...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on this output?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [xserve03.local][[61029,1],4][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack]
</span><br>
<span class="quotelev2">&gt;&gt; received unexpected process identifier [[61029,1],3]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The question is why is that happening? We use Torque all the time, so we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know that the basic support is correct. It -could- be related to lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confusion, but I can't tell for sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to be clear, this is not going through torque at this point.  Its
</span><br>
<span class="quotelev2">&gt;&gt; just vanilla ssh, for which this code worked with 1.1.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Can you rebuild OMPI with --enable-debug, and rerun the job with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following added to your cmd line?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca plm_base_verbose 5 --debug-daemons -mca odls_base_verbose 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Working on this...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,  Jody
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
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
