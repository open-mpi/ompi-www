<?
$subject_val = "Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 18:11:22 2009" -->
<!-- isoreceived="20091214231122" -->
<!-- sent="Tue, 15 Dec 2009 00:10:33 +0100" -->
<!-- isosent="20091214231033" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures" -->
<!-- id="4B26C5E9.8070004_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FE8D5735-79E5-4635-B2DC-3443DA9A01DA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hanging vs Stopping behaviour in communication	failures<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 18:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11537.php">Dmitry Zaletnev: "[OMPI users] NFS and openmpi through different NICs"</a>
<li><strong>Previous message:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>In reply to:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 9, 2009, at 3:47 AM, Constantinos Makassikis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; sometimes when running Open MPI jobs, the application hangs. By looking the
</span><br>
<span class="quotelev2">&gt;&gt; output I get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ic17][[34562,1],74][../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv   
</span><br>
<span class="quotelev2">&gt;&gt; ] mca_btl_tcp_frag_recv: readv failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would expect Open MPI to eventually quit with an error at such situations.
</span><br>
<span class="quotelev2">&gt;&gt; Is the observed behaviour (i.e.: hanging) the intended one ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That does seem weird.  I would think that we should abort rather than hang.  But then again, the code is fairly hairy there -- there are many corner cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; If so, what would be the reason(s) behind choosing the hanging over the
</span><br>
<span class="quotelev2">&gt;&gt; stopping ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It *looks* like the code is supposed to retry the connection here, but perhaps something is not operating correctly (or perhaps it *is* trying to reconnect and the network is failing to reconnect for some reason...?).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I don't really know whether it is trying to reconnect. What is sure, is
<br>
that last time it happened, the destination node could indeed not be
<br>
reached (i.e.: couldn't ssh it nor did it repond to ping).
<br>
<span class="quotelev1">&gt; How often does this happen?  Is it in the middle of the application run, or at the very beginning?  
</span><br>
Did not happen very often: only after long and intensive usage of the
<br>
nodes. As for the time in the application execution, I couldn't figure
<br>
it out. Maybe it would be a good idea I modify the source code so that
<br>
I keep track of the progress.
<br>
<span class="quotelev1">&gt; Do you have any other network issues where connections get dropped, etc.?  Do you have any firewalls running on your cluster machines
</span><br>
To my knowledge there hasn't been any other network issues.
<br>
There are no firewalls.
<br>
<p>I don't know if the current information is sufficient to answer with
<br>
certainty. I am going to try and look for more info whenever it occurs
<br>
again. About that, are there some options I could use in Open MPI to
<br>
gather more info ? Are there any other things I should pay attention
<br>
to ?
<br>
<p>Thanks for your help,
<br>
<p><pre>
--
Constantinos
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11537.php">Dmitry Zaletnev: "[OMPI users] NFS and openmpi through different NICs"</a>
<li><strong>Previous message:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>In reply to:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<!-- nextthread="start" -->
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
