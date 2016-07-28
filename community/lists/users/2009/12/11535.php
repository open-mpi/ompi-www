<?
$subject_val = "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 15:29:52 2009" -->
<!-- isoreceived="20091214202952" -->
<!-- sent="Mon, 14 Dec 2009 15:29:46 -0500" -->
<!-- isosent="20091214202946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hanging vs Stopping behaviour in communication failures" -->
<!-- id="FE8D5735-79E5-4635-B2DC-3443DA9A01DA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1F6418.2080108_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hanging vs Stopping behaviour in communication failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 15:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11536.php">Constantinos Makassikis: "Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures"</a>
<li><strong>Previous message:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11467.php">Constantinos Makassikis: "[OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11536.php">Constantinos Makassikis: "Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures"</a>
<li><strong>Reply:</strong> <a href="11536.php">Constantinos Makassikis: "Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2009, at 3:47 AM, Constantinos Makassikis wrote:
<br>
<p><span class="quotelev1">&gt; sometimes when running Open MPI jobs, the application hangs. By looking the
</span><br>
<span class="quotelev1">&gt; output I get the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ic17][[34562,1],74][../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv   
</span><br>
<span class="quotelev1">&gt; ] mca_btl_tcp_frag_recv: readv failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would expect Open MPI to eventually quit with an error at such situations.
</span><br>
<span class="quotelev1">&gt; Is the observed behaviour (i.e.: hanging) the intended one ?
</span><br>
<p>That does seem weird.  I would think that we should abort rather than hang.  But then again, the code is fairly hairy there -- there are many corner cases.
<br>
<p><span class="quotelev1">&gt; If so, what would be the reason(s) behind choosing the hanging over the
</span><br>
<span class="quotelev1">&gt; stopping ?
</span><br>
<p>It *looks* like the code is supposed to retry the connection here, but perhaps something is not operating correctly (or perhaps it *is* trying to reconnect and the network is failing to reconnect for some reason...?).
<br>
<p>How often does this happen?  Is it in the middle of the application run, or at the very beginning?  Do you have any other network issues where connections get dropped, etc.?  Do you have any firewalls running on your cluster machines?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11536.php">Constantinos Makassikis: "Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures"</a>
<li><strong>Previous message:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11467.php">Constantinos Makassikis: "[OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11536.php">Constantinos Makassikis: "Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures"</a>
<li><strong>Reply:</strong> <a href="11536.php">Constantinos Makassikis: "Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures"</a>
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
