<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 13:34:18 2013" -->
<!-- isoreceived="20131002173418" -->
<!-- sent="Wed, 2 Oct 2013 17:34:16 +0000" -->
<!-- isosent="20131002173416" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9170BD_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5249931D.4090904_at_debian.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 13:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13041.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13039.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2013, at 11:05 AM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here are the options list:
</span><br>
<span class="quotelev1">&gt; configure: running /bin/bash './configure'  CFLAGS=&quot;-DNDEBUG -g -O2
</span><br>
<span class="quotelev1">&gt; -Wformat -Werror=format-security -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -pthread&quot; CPPFLAGS=&quot; -I/usr//include   -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; -I/usr/include/infiniband&quot; FFLAGS=&quot;-g -O2&quot; LDFLAGS=&quot;  -L/usr//lib&quot;
</span><br>
<span class="quotelev1">&gt; --enable-shared --disable-static  --prefix=/usr --with-mpi=open_mpi
</span><br>
<span class="quotelev1">&gt; --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<p>Hmm -- I'm confused here; it's not possible that you're getting an assertion failure with this configure line, for two reasons:
<br>
<p>1. The assert() in question will only be compiled in if you --enable-debug on the configure command line.
<br>
2. You supplied -DNDEBUG in CFLAGS, which means you've disabled all assert()s
<br>
<p>Can you verify that this is the correct configure line that you used to generate that error?  Or is something else going on?
<br>
<p><span class="quotelev2">&gt;&gt; 2. try the 1.7 branch using that same configuration
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The 1.6 series is reaching its planned end-of-life, so we are trying to decide how important it is to chase this down - i.e., if you see the same problem on Debian with 1.7, then this becomes far more important.
</span><br>
<span class="quotelev1">&gt; Sure, I will do that asap.
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev1">&gt; Do you have an eta for the 1.8 ? (if I remember correctly, 1.7 is a
</span><br>
<span class="quotelev1">&gt; development release).
</span><br>
<p>1.7 is a &quot;feature&quot; release.  OMPI 1.odd.x series are stable and tested; they're just not as time-tested out in the real world as OMPI 1.even.x series.
<br>
<p>We're anticipating 1.8 will be out in early 2014.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13041.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13039.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
