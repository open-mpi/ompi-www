<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 09:43:07 2009" -->
<!-- isoreceived="20090811134307" -->
<!-- sent="Tue, 11 Aug 2009 06:43:02 -0700" -->
<!-- isosent="20090811134302" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="BDF7DE75-7AAB-42DD-896E-EED56C40F556_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0908110628g3ac423dg6bbeccc1a49b42e3_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-11 09:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10296.php">Mike Dubman: "[OMPI users] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>In reply to:</strong> <a href="10295.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11-Aug-09, at 6:28 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The reason your job is hanging is sitting in the orte-ps output. You  
</span><br>
<span class="quotelev1">&gt; have multiple processes declaring themselves to be the same MPI  
</span><br>
<span class="quotelev1">&gt; rank. That definitely won't work.
</span><br>
<p>Its the &quot;local rank&quot; if that makes any difference...
<br>
<p>Any thoughts on this output?
<br>
<p>[xserve03.local][[61029,1],4][btl_tcp_endpoint.c: 
<br>
486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process  
<br>
identifier [[61029,1],3]
<br>
<p><span class="quotelev1">&gt; The question is why is that happening? We use Torque all the time,  
</span><br>
<span class="quotelev1">&gt; so we know that the basic support is correct. It -could- be related  
</span><br>
<span class="quotelev1">&gt; to lib confusion, but I can't tell for sure.
</span><br>
<p>Just to be clear, this is not going through torque at this point.  Its  
<br>
just vanilla ssh, for which this code worked with 1.1.5.
<br>
<p><p><span class="quotelev1">&gt; Can you rebuild OMPI with --enable-debug, and rerun the job with the  
</span><br>
<span class="quotelev1">&gt; following added to your cmd line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca plm_base_verbose 5 --debug-daemons -mca odls_base_verbose 5
</span><br>
<p>Working on this...
<br>
<p>Thanks,  Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10296.php">Mike Dubman: "[OMPI users] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>In reply to:</strong> <a href="10295.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10298.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
