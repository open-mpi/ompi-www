<?
$subject_val = "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 10:43:19 2010" -->
<!-- isoreceived="20100604144319" -->
<!-- sent="Fri, 4 Jun 2010 08:43:04 -0600" -->
<!-- isosent="20100604144304" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine" -->
<!-- id="462BCCA3-18C6-4733-9219-2D8C0751BC81_at_sandia.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7C7A22FC-4AA1-41E6-886E-9BBF09612023_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 10:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Previous message:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>In reply to:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Reply:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff -
<br>
<p>Is indicating we don't support it really the right thing to do?  Given that SM should already have the proc data, it seems that setting the reachable bit to zero for the other process of different &quot;architecture&quot; is all that is required.
<br>
<p>Brian
<br>
<p>On Jun 4, 2010, at 8:26 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I doubt that we have tested this kind of scenario much (specifically with shared memory).  I guess I'm not too surprised that it doesn't work -- to my knowledge, you're the first person to ask for heterogeneous *on the same server*.  As such, I don't know if we'll do much work to support it (there could be some gnarly issues with address ranges inside shared memory). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But your point is noted that we should not hang/crash in such a scenario.  I'll file a bug to at least detect this scenario and indicate that we do not support it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2010, at 10:29 AM, Katz, Jacob wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I have two processes, one a 32bit and another a 64bit, running on the same 64bit machine. When running with TCP BTL everything works fine, however with SM BTL it&#146;s not.
</span><br>
<span class="quotelev2">&gt;&gt; In one application the processes just got stuck &#150; one in Send and the other in Recv. In another application I even saw a segfault inside the MPI libraries in one of the processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is such scenario officially supported by SM BTL?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI: 1.3.3
</span><br>
<span class="quotelev2">&gt;&gt; Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev2">&gt;&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev2">&gt;&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient, please contact the sender and delete all copies.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Previous message:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>In reply to:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Reply:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
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
