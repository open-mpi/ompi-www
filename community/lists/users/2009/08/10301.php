<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 10:23:38 2009" -->
<!-- isoreceived="20090811142338" -->
<!-- sent="Tue, 11 Aug 2009 07:23:33 -0700" -->
<!-- isosent="20090811142333" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="07A48D32-6374-4542-861C-F9FA9A10922A_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0908110703h7fee79c4q61e08ce974ddf2d0_at_mail.gmail.com" -->
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
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 10:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11-Aug-09, at 7:03 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Sigh - too early in the morning for this old brain, I fear...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are right - the ranks are fine, and local rank doesn't matter.  
</span><br>
<span class="quotelev1">&gt; It sounds like a problem where the TCP messaging is getting a  
</span><br>
<span class="quotelev1">&gt; message ack'd from someone other than the process that was supposed  
</span><br>
<span class="quotelev1">&gt; to recv the message. This should cause us to abort, but we were just  
</span><br>
<span class="quotelev1">&gt; talking on the phone that the abort procedure may not be working  
</span><br>
<span class="quotelev1">&gt; correctly. Or it could be (as Jeff suggests) that the version  
</span><br>
<span class="quotelev1">&gt; mismatch is also preventing us from properly aborting too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I fear we are back to trying to find these other versions on your  
</span><br>
<span class="quotelev1">&gt; nodes...
</span><br>
<p>Well, the old version is still on the nodes (in /usr/lib as default  
<br>
for OS X)...
<br>
<p>I can try and clean those all out by hand but I'm still confused why  
<br>
the old version would be used - how does openMPI find the right library?
<br>
<p>Note again, that I get these MCA warnings on the server when just  
<br>
running ompi_info and I *have* cleaned out /usr/lib on the server.  So  
<br>
I really don't understand how on the server I can still have a library  
<br>
issue.  Is there a way to trace at runtime what library an executable  
<br>
is dynamically linking to?  Can I rebuild openmpi statically?
<br>
<p>Thanks,  Jody
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 11, 2009 at 7:43 AM, Klymak Jody &lt;jklymak_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11-Aug-09, at 6:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason your job is hanging is sitting in the orte-ps output. You  
</span><br>
<span class="quotelev1">&gt; have multiple processes declaring themselves to be the same MPI  
</span><br>
<span class="quotelev1">&gt; rank. That definitely won't work.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [xserve03.local][[61029,1],4][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected  
</span><br>
<span class="quotelev1">&gt; process identifier [[61029,1],3]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is why is that happening? We use Torque all the time,  
</span><br>
<span class="quotelev1">&gt; so we know that the basic support is correct. It -could- be related  
</span><br>
<span class="quotelev1">&gt; to lib confusion, but I can't tell for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be clear, this is not going through torque at this point.   
</span><br>
<span class="quotelev1">&gt; Its just vanilla ssh, for which this code worked with 1.1.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you rebuild OMPI with --enable-debug, and rerun the job with the  
</span><br>
<span class="quotelev1">&gt; following added to your cmd line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca plm_base_verbose 5 --debug-daemons -mca odls_base_verbose 5
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10300.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
