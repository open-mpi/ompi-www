<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 15:43:02 2014" -->
<!-- isoreceived="20140414194302" -->
<!-- sent="Mon, 14 Apr 2014 19:43:01 +0000" -->
<!-- isosent="20140414194301" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="8F0C508B-E996-4A91-A788-E43406209DFE_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAO1KyaH9uBcE+OsCFx5C6Etqv91MMnfS=kRCjbw0+6_EBi9jA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 15:43:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2014, at 3:27 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; this was true if all external libraries were maintaining ABI compatibility indicator properly with libtool.
</span><br>
<span class="quotelev1">&gt; Let`s check your favorite, libibverbs :), the version is always 0.0.0 in libibverbs.so.0.0.0 so openib btl will not fail on link.
</span><br>

<br>
?
<br>

<br>
-----
<br>
&#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; ls -l /usr/lib/libibverbs*
<br>
lrwxrwxrwx 1 root root    19 Dec 16 06:59 /usr/lib/libibverbs.so -&gt; libibverbs.so.1.0.0*
<br>
lrwxrwxrwx 1 root root    19 Dec 16 06:59 /usr/lib/libibverbs.so.1 -&gt; libibverbs.so.1.0.0*
<br>
-rwxr-xr-x 1 root root 52060 Dec  3 11:43 /usr/lib/libibverbs.so.1.0.0*
<br>
-----
<br>

<br>
As you can see, my libibverbs has shared library version 1.0.0, not 0.0.0.
<br>

<br>
<span class="quotelev1">&gt; The libibverbs can have experimental verbs included but libibverbs version still will be indicating the libtool version is &quot;0:0:0&quot;.
</span><br>

<br>
That's bad software release methodology.  You should fix *that*.
<br>

<br>
Shared libraries have version numbers for a reason.  They should be used properly.
<br>

<br>
<span class="quotelev1">&gt; So, the only way for sysadmin/user to know if he has a right version of libibvers installed is to check verbs.getVersion() and see if it is matches to one which includes experimental verbs and then he will know that there is a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but for us, the most powerful case is the one that you described: compare ompi_info output on head and compute node and warn user if differ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, to provide an infrastructure to digitize release notes.
</span><br>

<br>
Sure -- registering an MCA param like I described does all of these things without needing any new infrastructure in OMPI.  You could put such version numbers in today.
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
