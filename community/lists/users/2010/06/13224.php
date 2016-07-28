<?
$subject_val = "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the	samemachine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 14:18:18 2010" -->
<!-- isoreceived="20100604181818" -->
<!-- sent="Fri, 4 Jun 2010 21:18:05 +0300" -->
<!-- isosent="20100604181805" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM failure with mixed 32/64-bit procs on the	samemachine" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F201E8BD62DD_at_hasmsx504.ger.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM failure with mixed 32/64-bit procs on the	samemachine<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 14:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13225.php">Peter Thompson: "[OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>In reply to:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
<li><strong>Reply:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This would be a quite serious limitation from my point of view. I'm a library developer, and my library is used in heterogeneous environment. Since 32b executables regularly work on 64b machines, they get intermixed by the users with 64b executables on the same machine. Switching to another BTL would incur serious performance issues...
<br>
<p>I noticed an SM bug report that looks similar to mine and was reportedly fixed in 1.4.2. I'm going to check that version. If it still fails, what would be the effort to fix this?
<br>
<p>--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Friday, June 04, 2010 17:26
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine
<br>
<p>I doubt that we have tested this kind of scenario much (specifically with shared memory).  I guess I'm not too surprised that it doesn't work -- to my knowledge, you're the first person to ask for heterogeneous *on the same server*.  As such, I don't know if we'll do much work to support it (there could be some gnarly issues with address ranges inside shared memory). 
<br>
<p>But your point is noted that we should not hang/crash in such a scenario.  I'll file a bug to at least detect this scenario and indicate that we do not support it.
<br>
<p><p><p>On Jun 3, 2010, at 10:29 AM, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have two processes, one a 32bit and another a 64bit, running on the same 64bit machine. When running with TCP BTL everything works fine, however with SM BTL it's not.
</span><br>
<span class="quotelev1">&gt; In one application the processes just got stuck - one in Send and the other in Recv. In another application I even saw a segfault inside the MPI libraries in one of the processes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is such scenario officially supported by SM BTL?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.3.3
</span><br>
<span class="quotelev1">&gt; Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
---------------------------------------------------------------------
Intel Israel (74) Limited
This e-mail and any attachments may contain confidential material for
the sole use of the intended recipient(s). Any review or distribution
by others is strictly prohibited. If you are not the intended
recipient, please contact the sender and delete all copies.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13225.php">Peter Thompson: "[OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="13223.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>In reply to:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
<li><strong>Reply:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
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
