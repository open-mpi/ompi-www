<?
$subject_val = "[MTT devel] mtt-relay patch - create pid file when run as daemon";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 07:08:27 2013" -->
<!-- isoreceived="20130930110827" -->
<!-- sent="Mon, 30 Sep 2013 13:08:21 +0200 (CEST)" -->
<!-- isosent="20130930110821" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[MTT devel] mtt-relay patch - create pid file when run as daemon" -->
<!-- id="211222231.369.1380539301308.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="486651604.362.1380539208862.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> [MTT devel] mtt-relay patch - create pid file when run as daemon<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-30 07:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/08/0612.php">Jeff Squyres (jsquyres): "[MTT devel] Migrating www.open-mpi.org"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Reply:</strong> <a href="0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>As on many systems init scripts and the handling of services is based on pid files I extended the mtt-relay script as follows:
<br>
<p>If run with the --daemon option
<br>
* Create file /var/run/mtt-relay.pid  if it does not exist and write the pid of the background process into it.
<br>
* exit with return value 1 if /var/run/mtt-relay.pid file exists.
<br>
<p>Patch is attached.
<br>
<p>Best regards
<br>
Christoph Niethammer
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0613/mtt-relay.patch">mtt-relay.patch</a>
</ul>
<!-- attachment="mtt-relay.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/08/0612.php">Jeff Squyres (jsquyres): "[MTT devel] Migrating www.open-mpi.org"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<li><strong>Reply:</strong> <a href="0614.php">Mike Dubman: "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
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
