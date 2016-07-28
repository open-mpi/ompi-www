<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 10:40:21 2009" -->
<!-- isoreceived="20091202154021" -->
<!-- sent="Wed, 2 Dec 2009 08:40:09 -0700" -->
<!-- isosent="20091202154009" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="0BB3DBAA-2A17-49CC-B0D6-2BFC7BCD63AF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f0a9f6b293c1f4604826c87017c9dc09.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 10:40:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>Previous message:</strong> <a href="11367.php">Jonathan Ferland: "[OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>Reply:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>Reply:</strong> <a href="11380.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given that it is working for us at the moment, and my current priorities, I doubt I'll get to this over the next 2-3 weeks. So if you have time and care to look at it before then, please do!
<br>
<p>Thanks
<br>
<p>On Dec 1, 2009, at 8:45 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Interesting - especially since the existing code works quite well over a
</span><br>
<span class="quotelev2">&gt;&gt; wide range of platforms. So I'm not quite so eager to declare it incorrect
</span><br>
<span class="quotelev2">&gt;&gt; and only working by accident.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I would welcome a proposed patch so we can look at it. This is
</span><br>
<span class="quotelev2">&gt;&gt; always an important area for us, so the more discussion over how to do it
</span><br>
<span class="quotelev2">&gt;&gt; the better.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just reading through all this again whilst looking at the source code
</span><br>
<span class="quotelev1">&gt; for 1.3.3 as well, and I think what Aleskej was getting at was that
</span><br>
<span class="quotelev1">&gt; there's  already a block of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if defined( __NetBSD__) || defined(__OpenBSD__) || defined(__FreeBSD__) || \
</span><br>
<span class="quotelev1">&gt;             defined(__386BSD__) || defined(__bsdi__) || defined(__APPLE__)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in there for the IPv6 (inet6) interfaces but NOT for the IPv4 (inet)
</span><br>
<span class="quotelev1">&gt; ones.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, the IPv6 stuff (the #if OPAL_WANT_IPV6 block) seems to be broken
</span><br>
<span class="quotelev1">&gt; down into
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef __linux__
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef __sun__
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the 6 OSes above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There would seem to be no such distinction for the IPv4 interface block.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt; Computer Science
</span><br>
<span class="quotelev1">&gt; Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt; New Zealand
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>Previous message:</strong> <a href="11367.php">Jonathan Ferland: "[OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>Reply:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>Reply:</strong> <a href="11380.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
