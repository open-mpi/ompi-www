<?
$subject_val = "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 13:57:42 2013" -->
<!-- isoreceived="20130930175742" -->
<!-- sent="Mon, 30 Sep 2013 20:57:40 +0300" -->
<!-- isosent="20130930175740" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt-relay patch - create pid file when run as daemon" -->
<!-- id="CAAO1KyaFcpAYkLKVeedevM1QOzAYT-0nGZsSvLNc-iyoBwnOkg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="211222231.369.1380539301308.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt-relay patch - create pid file when run as daemon<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-30 13:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Christoph Niethammer: "[MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Christoph Niethammer: "[MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
/var/run is only writable to root, but script uses it explicitly.
<br>
maybe it is worse to add fallback if non-root user starts mtt-relay.
<br>
<p><p>On Mon, Sep 30, 2013 at 2:08 PM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As on many systems init scripts and the handling of services is based on
</span><br>
<span class="quotelev1">&gt; pid files I extended the mtt-relay script as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If run with the --daemon option
</span><br>
<span class="quotelev1">&gt; * Create file /var/run/mtt-relay.pid  if it does not exist and write the
</span><br>
<span class="quotelev1">&gt; pid of the background process into it.
</span><br>
<span class="quotelev1">&gt; * exit with return value 1 if /var/run/mtt-relay.pid file exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patch is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Christoph Niethammer: "[MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Christoph Niethammer: "[MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
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
