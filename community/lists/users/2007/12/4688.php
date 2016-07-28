<?
$subject_val = "Re: [OMPI users] unable to open osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 10:49:50 2007" -->
<!-- isoreceived="20071217154950" -->
<!-- sent="Mon, 17 Dec 2007 10:48:29 -0500" -->
<!-- isosent="20071217154829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to open osc pt2pt" -->
<!-- id="4B74F60F-713A-4158-9D0E-F1DB1A531A74_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6ce0ac130712170746l25686b7dj12135ae7eea3de72_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unable to open osc pt2pt<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 10:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4748.php">de Almeida, Valmor F.: "Re: [OMPI users] unable to open osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you care, this is actually the result of a complex issue that was  
<br>
just recently discussed on the OMPI devel list.  You can see a full  
<br>
explanation there if you're interested.
<br>
<p><p>On Dec 17, 2007, at 10:46 AM, Brian Granger wrote:
<br>
<p><span class="quotelev1">&gt; This should be fixed in the subversion trunk of mpi4py.  Can you do an
</span><br>
<span class="quotelev1">&gt; update to that version and retry.  If it still doesn't work, post to
</span><br>
<span class="quotelev1">&gt; the mpi4py list and we will see what we can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2007 8:25 AM, de Almeida, Valmor F. &lt;dealmeidav_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting these messages (below) when running mpi4py python codes.
</span><br>
<span class="quotelev2">&gt;&gt; Always one message per mpi process. The codes seem to run  
</span><br>
<span class="quotelev2">&gt;&gt; correctly. Any
</span><br>
<span class="quotelev2">&gt;&gt; ideas why this is happening and how to avoid it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Valmor de Almeida
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 python helloworld.py
</span><br>
<span class="quotelev2">&gt;&gt; [xeon0:05998] mca: base: component_find: unable to open osc pt2pt:  
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [xeon0:05999] mca: base: component_find: unable to open osc pt2pt:  
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World!! I am process 0 of 2 on xeon0.
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World!! I am process 1 of 2 on xeon0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4689.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4687.php">Brian Granger: "Re: [OMPI users] unable to open osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4748.php">de Almeida, Valmor F.: "Re: [OMPI users] unable to open osc pt2pt"</a>
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
