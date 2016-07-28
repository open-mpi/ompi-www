<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages onNetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 10:57:27 2009" -->
<!-- isoreceived="20091202155727" -->
<!-- sent="Wed, 2 Dec 2009 10:57:23 -0500" -->
<!-- isosent="20091202155723" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages onNetBSD" -->
<!-- id="6C2F4CF6-66AE-45B2-8904-F37BA1919A2B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0BB3DBAA-2A17-49CC-B0D6-2BFC7BCD63AF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages onNetBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 10:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11368.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11368.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11380.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to jump into this late -- yes, opal/util/if.c is the exact place for this stuff.
<br>
<p>Ralph is exactly correct that this code has been touched by multiple people over a few years, so it's possible that it's a little krufty.  I certainly hope it isn't working by accident -- but given the context of his statement, he could have meant &quot;by accident&quot; only for FreeBSD.  Shrug.
<br>
<p>Aleksej's comments indicate that he was going to look at this issue next week -- that would be fabulous.  Since he has direct access to and assumedly much deeper knowledge of these platforms than we do, it might be best to see if he simply has an updated patch that we can apply.  We can double check it against the platforms that we know / test / etc.
<br>
<p><p>On Dec 2, 2009, at 10:40 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Given that it is working for us at the moment, and my current priorities, I doubt I'll get to this over the next 2-3 weeks. So if you have time and care to look at it before then, please do!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2009, at 8:45 PM, Kevin.Buckley_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Interesting - especially since the existing code works quite well over a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wide range of platforms. So I'm not quite so eager to declare it incorrect
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and only working by accident.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, I would welcome a proposed patch so we can look at it. This is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; always an important area for us, so the more discussion over how to do it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the better.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just reading through all this again whilst looking at the source code
</span><br>
<span class="quotelev2">&gt; &gt; for 1.3.3 as well, and I think what Aleskej was getting at was that
</span><br>
<span class="quotelev2">&gt; &gt; there's  already a block of:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if defined( __NetBSD__) || defined(__OpenBSD__) || defined(__FreeBSD__) || \
</span><br>
<span class="quotelev2">&gt; &gt;             defined(__386BSD__) || defined(__bsdi__) || defined(__APPLE__)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in there for the IPv6 (inet6) interfaces but NOT for the IPv4 (inet)
</span><br>
<span class="quotelev2">&gt; &gt; ones.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Indeed, the IPv6 stuff (the #if OPAL_WANT_IPV6 block) seems to be broken
</span><br>
<span class="quotelev2">&gt; &gt; down into
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef __linux__
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef __sun__
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the 6 OSes above.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There would seem to be no such distinction for the IPv4 interface block.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev2">&gt; &gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science
</span><br>
<span class="quotelev2">&gt; &gt; Victoria University of Wellington
</span><br>
<span class="quotelev2">&gt; &gt; New Zealand
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11368.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11368.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11380.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
