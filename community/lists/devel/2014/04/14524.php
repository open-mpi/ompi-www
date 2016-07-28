<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 17:57:51 2014" -->
<!-- isoreceived="20140414215751" -->
<!-- sent="Mon, 14 Apr 2014 14:56:29 -0700" -->
<!-- isosent="20140414215629" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="BD577C28-0CE5-4493-9586-F87C89107DCD_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAO1KyabExmdsoJY4YrkKTgFjbuUdOvWqfaqWiAE1VrkxbcLEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 17:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14525.php">Gilles Gouaillardet: "[OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Previous message:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that is a bad practice that should be fixed :-(
<br>
<p>I have no issue with the MCA param approach. As Jeff said, we have done similar things elsewhere, and the impact is limited solely to the places that need it.
<br>
<p><p>On Apr 14, 2014, at 1:12 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; sorry, it is always 1:0:0 for all releases and not 0:0:0 as I mentioned.
</span><br>
<span class="quotelev1">&gt; but still - it is always 1:0:0.
</span><br>
<span class="quotelev1">&gt; agree that it is bad and ambiguous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ofa claims that ABI does not change at all and verbs.h API/ABI is exactly as in spec for all toolkit generations.
</span><br>
<span class="quotelev1">&gt; The non-spec experimental verbs infra availability can be tested with autotools macros.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 14, 2014 at 10:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 3:27 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; this was true if all external libraries were maintaining ABI compatibility indicator properly with libtool.
</span><br>
<span class="quotelev2">&gt; &gt; Let`s check your favorite, libibverbs :), the version is always 0.0.0 in libibverbs.so.0.0.0 so openib btl will not fail on link.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; ls -l /usr/lib/libibverbs*
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root root    19 Dec 16 06:59 /usr/lib/libibverbs.so -&gt; libibverbs.so.1.0.0*
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root root    19 Dec 16 06:59 /usr/lib/libibverbs.so.1 -&gt; libibverbs.so.1.0.0*
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root 52060 Dec  3 11:43 /usr/lib/libibverbs.so.1.0.0*
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, my libibverbs has shared library version 1.0.0, not 0.0.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The libibverbs can have experimental verbs included but libibverbs version still will be indicating the libtool version is &quot;0:0:0&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's bad software release methodology.  You should fix *that*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shared libraries have version numbers for a reason.  They should be used properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So, the only way for sysadmin/user to know if he has a right version of libibvers installed is to check verbs.getVersion() and see if it is matches to one which includes experimental verbs and then he will know that there is a problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but for us, the most powerful case is the one that you described: compare ompi_info output on head and compute node and warn user if differ.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, to provide an infrastructure to digitize release notes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure -- registering an MCA param like I described does all of these things without needing any new infrastructure in OMPI.  You could put such version numbers in today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14520.php">http://www.open-mpi.org/community/lists/devel/2014/04/14520.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14523.php">http://www.open-mpi.org/community/lists/devel/2014/04/14523.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14525.php">Gilles Gouaillardet: "[OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Previous message:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
