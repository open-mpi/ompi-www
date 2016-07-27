<?
$subject_val = "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 10:31:11 2013" -->
<!-- isoreceived="20131002143111" -->
<!-- sent="Wed, 2 Oct 2013 14:31:09 +0000" -->
<!-- isosent="20131002143109" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt-relay patch - create pid file when run as daemon" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9163A5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyaFcpAYkLKVeedevM1QOzAYT-0nGZsSvLNc-iyoBwnOkg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 10:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/04/0616.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/09/0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/09/0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It might also be desirable not to chain this functionality to --daemon, but rather create a new option, such as --pidfile=FILENAME.  Then you write to that FILENAME if --pidfile is specified.
<br>
<p>Also -- don't you need to remove the pidfile when mtt-relay exits?  Note that this should be done not only when mtt-relay exits normally, but also if mtt-relay exits abnormally (e.g., ctrl-c or a local call to exit(), etc.).
<br>
<p><p><p>On Sep 30, 2013, at 1:57 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; /var/run is only writable to root, but script uses it explicitly.
</span><br>
<span class="quotelev1">&gt; maybe it is worse to add fallback if non-root user starts mtt-relay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 30, 2013 at 2:08 PM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As on many systems init scripts and the handling of services is based on pid files I extended the mtt-relay script as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If run with the --daemon option
</span><br>
<span class="quotelev1">&gt; * Create file /var/run/mtt-relay.pid  if it does not exist and write the pid of the background process into it.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/04/0616.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/09/0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/09/0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
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
