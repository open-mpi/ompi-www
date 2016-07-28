<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 10:03:21 2009" -->
<!-- isoreceived="20090811140321" -->
<!-- sent="Tue, 11 Aug 2009 08:03:16 -0600" -->
<!-- isosent="20090811140316" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="71d2d8cc0908110703h7fee79c4q61e08ce974ddf2d0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDF7DE75-7AAB-42DD-896E-EED56C40F556_at_uvic.ca" -->
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
<strong>Date:</strong> 2009-08-11 10:03:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh - too early in the morning for this old brain, I fear...
<br>
<p>You are right - the ranks are fine, and local rank doesn't matter. It sounds
<br>
like a problem where the TCP messaging is getting a message ack'd from
<br>
someone other than the process that was supposed to recv the message. This
<br>
should cause us to abort, but we were just talking on the phone that the
<br>
abort procedure may not be working correctly. Or it could be (as Jeff
<br>
suggests) that the version mismatch is also preventing us from properly
<br>
aborting too.
<br>
<p>So I fear we are back to trying to find these other versions on your
<br>
nodes...
<br>
<p><p>On Tue, Aug 11, 2009 at 7:43 AM, Klymak Jody &lt;jklymak_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11-Aug-09, at 6:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The reason your job is hanging is sitting in the orte-ps output. You have
</span><br>
<span class="quotelev2">&gt;&gt; multiple processes declaring themselves to be the same MPI rank. That
</span><br>
<span class="quotelev2">&gt;&gt; definitely won't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its the &quot;local rank&quot; if that makes any difference...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on this output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [xserve03.local][[61029,1],4][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack]
</span><br>
<span class="quotelev1">&gt; received unexpected process identifier [[61029,1],3]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The question is why is that happening? We use Torque all the time, so we
</span><br>
<span class="quotelev2">&gt;&gt; know that the basic support is correct. It -could- be related to lib
</span><br>
<span class="quotelev2">&gt;&gt; confusion, but I can't tell for sure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be clear, this is not going through torque at this point.  Its just
</span><br>
<span class="quotelev1">&gt; vanilla ssh, for which this code worked with 1.1.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Can you rebuild OMPI with --enable-debug, and rerun the job with the
</span><br>
<span class="quotelev2">&gt;&gt; following added to your cmd line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca plm_base_verbose 5 --debug-daemons -mca odls_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working on this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10299/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
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
