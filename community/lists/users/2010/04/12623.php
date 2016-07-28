<?
$subject_val = "Re: [OMPI users] btl_tcp_if_exclude param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 09:35:42 2010" -->
<!-- isoreceived="20100413133542" -->
<!-- sent="Tue, 13 Apr 2010 09:35:37 -0400" -->
<!-- isosent="20100413133537" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_exclude param" -->
<!-- id="4CB88F6E-F9B0-43D5-BC3E-3A9359CA64EC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="q2g3a37617f1004130617qd397ebf8v2a465a12395d66ed_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_tcp_if_exclude param<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-13 09:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12624.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12622.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Hibernating/Wakeup MPI processes"</a>
<li><strong>In reply to:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12624.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12624.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2010, at 9:17 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; My actual configuration is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl = ^tcp
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude = eth0,ib0,ib1
</span><br>
<span class="quotelev1">&gt; oob_tcp_include = eth1,lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But is it right? I have some doubt..
</span><br>
<p>It depends on what &quot;right&quot; is in your environment.  :-)
<br>
<p>Your default config excludes the BTL TCP, assumedly because you want OpenFabrics/IB to be the default transport for MPI messages.  That's probably good.  In the &quot;^tcp&quot; case, the BTL TCP isn't even loaded -- so the btl_tcp_if_exclude parameter isn't even used.  But if someone overrides the &quot;btl&quot; parameter and *does* load the TCP BTL, then the btl_tcp_if_exclude parameter will mean something.  
<br>
<p>So it's not harmful to have the btl_tcp_if_exclude parameter specified, even if it isn't used most of the time.
<br>
<p>The oob_tcp_include parameter tells OMPI how to use it's &quot;out of band&quot; channel for setup/teardown of the overall job, creating MPI data connections, etc.  You're telling it which devices it can use.  It probably would be ok to use &quot;eth1&quot; and drop the &quot;,lo&quot; part.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12624.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12622.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Hibernating/Wakeup MPI processes"</a>
<li><strong>In reply to:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12624.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12624.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
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
