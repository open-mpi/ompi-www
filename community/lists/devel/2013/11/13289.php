<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 11:43:13 2013" -->
<!-- isoreceived="20131115164313" -->
<!-- sent="Fri, 15 Nov 2013 17:43:09 +0100" -->
<!-- isosent="20131115164309" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="52864F1D.2090300_at_debian.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="759417E5-3FE5-4C36-8694-BC227AEBE34A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64<br>
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 11:43:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15/11/2013 17:37, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Trying to replicate this, but I can't. I'm using the latest 1.6
</span><br>
<span class="quotelev1">&gt; tarball, not 1.6.5, so it is possible something was fixed - though I
</span><br>
<span class="quotelev1">&gt; believe we have committed very few changes as that series is about to
</span><br>
<span class="quotelev1">&gt; drop to &quot;deprecated&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First thing I encountered:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: unrecognized options: --disable-maintainer-mode,
</span><br>
<span class="quotelev1">&gt; --enable-ltdl-convenience
</span><br>
<span class="quotelev1">&gt;
</span><br>
the maintainer mode does matter.
<br>
<span class="quotelev1">&gt; So I removed those - no idea what they even do - but retained the rest
</span><br>
<span class="quotelev1">&gt; of your configure options. I then used your cmd line, substituting
</span><br>
<span class="quotelev1">&gt; &quot;hostname&quot; for &quot;foo&quot;, and everything ran just fine on an ssh-based
</span><br>
<span class="quotelev1">&gt; system. Here's my system info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux bend001 2.6.32-358.18.1.el6.x86_64 #1 SMP Wed Aug 28 17:19:38
</span><br>
<span class="quotelev1">&gt; UTC 2013 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well, I am testing on ia64, not x86_64. This one is OK.
<br>
<span class="quotelev1">&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>gcc (Debian 4.6.4-4) 4.6.4
<br>
<p>Sylvestre
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13289/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
