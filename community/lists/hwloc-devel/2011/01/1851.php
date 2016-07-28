<?
$subject_val = "Re: [hwloc-devel] Man pages and gather-topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 07:56:24 2011" -->
<!-- isoreceived="20110120125624" -->
<!-- sent="Thu, 20 Jan 2011 07:56:19 -0500" -->
<!-- isosent="20110120125619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Man pages and gather-topology" -->
<!-- id="BE63313B-7418-43F1-8AA8-57927B20A8F7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D382FCE.1000508_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Man pages and gather-topology<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 07:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1852.php">Jeff Squyres: "[hwloc-devel] hwloc-gather-topology[.sh]"</a>
<li><strong>Previous message:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1855.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 20, 2011, at 7:51 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; /usr/bin/install: cannot stat `./doxygen-doc/man/man3/HWLOC_API_VERSION.3': No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't reproduce this on my RHEL 5.5 unfortunately.
</span><br>
<p>I'm fixing the sed problem ATM (Linux sed allows -i with no argument; OS X sed -i requires an argument, so it was automatically slurping in &quot;-e&quot; as the edited file suffix and then implicitly still running the sed command anyway, even without the -e option -- gah!). 
<br>
<p>I'll look into the HWLOC_API_VERSION.3 issue next.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1852.php">Jeff Squyres: "[hwloc-devel] hwloc-gather-topology[.sh]"</a>
<li><strong>Previous message:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1855.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
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
