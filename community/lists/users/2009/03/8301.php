<?
$subject_val = "Re: [OMPI users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 16:16:26 2009" -->
<!-- isoreceived="20090304211626" -->
<!-- sent="Wed, 4 Mar 2009 13:16:22 -0800" -->
<!-- isosent="20090304211622" -->
<!-- name="Jan Lindheim" -->
<!-- email="lindheim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RETRY EXCEEDED ERROR" -->
<!-- id="20090304211620.GG30193_at_cacr.caltech.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56F588CB-2A51-4A48-BC09-6F66FC41E4EA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Jan Lindheim (<em>lindheim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 16:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 04, 2009 at 04:02:06PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This *usually* indicates a physical / layer 0 problem in your IB  
</span><br>
<span class="quotelev1">&gt; fabric.  You should do a diagnostic on your HCAs, cables, and switches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Increasing the timeout value should only be necessary on very large IB  
</span><br>
<span class="quotelev1">&gt; fabrics and/or very congested networks.
</span><br>
<p>Thanks Jeff!
<br>
What is considered to be very large IB fabrics?
<br>
I assume that with just over 180 compute nodes,
<br>
our cluster does not fall into this category.
<br>
<p>Jan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2009, at 3:28 PM, Jan Lindheim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I found several reports on the openmpi users mailing list from users,
</span><br>
<span class="quotelev2">&gt; &gt;who need to bump up the default value for btl_openib_ib_timeout.
</span><br>
<span class="quotelev2">&gt; &gt;We also have some applications on our cluster, that have problems,
</span><br>
<span class="quotelev2">&gt; &gt;unless we set this value from the default 10 to 15:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;[24426,1],122][btl_openib_component.c:2905:handle_wc] from shc174  
</span><br>
<span class="quotelev2">&gt; &gt;to: shc175
</span><br>
<span class="quotelev2">&gt; &gt;error polling LP CQ with status RETRY EXCEEDED ERROR status number  
</span><br>
<span class="quotelev2">&gt; &gt;12 for
</span><br>
<span class="quotelev2">&gt; &gt;wr_id 250450816 opcode 11048 qp_idx 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;This is seen with OpenMPI 1.3 and OpenFabrics 1.4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Is this normal or is it an indicator of other problems, maybe  
</span><br>
<span class="quotelev2">&gt; &gt;related to
</span><br>
<span class="quotelev2">&gt; &gt;hardware?
</span><br>
<span class="quotelev2">&gt; &gt;Are there other parameters that need to be looked at too?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks for any insight on this!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Regards,
</span><br>
<span class="quotelev2">&gt; &gt;Jan Lindheim
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
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
