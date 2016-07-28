<?
$subject_val = "Re: [hwloc-devel] Problem with hwloc/myriexpress.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 09:46:36 2011" -->
<!-- isoreceived="20110203144636" -->
<!-- sent="Thu, 3 Feb 2011 15:46:29 +0100" -->
<!-- isosent="20110203144629" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Problem with hwloc/myriexpress.h" -->
<!-- id="20110203144629.GJ6134_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1225513835.1751158.1296743856075.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Problem with hwloc/myriexpress.h<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 09:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1897.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1895.php">Jeff Squyres: "[hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Maybe in reply to:</strong> <a href="1895.php">Jeff Squyres: "[hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1897.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 03 Feb 2011 15:37:36 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Since we're generating include/hwloc/config.h (i.e., the publicly-includable config.h file that is included by include/hwloc.h), automake is adding -I$(top_builddir)/include/hwloc.
</span><br>
<p>Urgl...
<br>
<p><span class="quotelev1">&gt; 1. We can use Automake's &quot;nostdinc&quot; flag to suppress this add-the-dash-I behavior.  
</span><br>
<span class="quotelev1">&gt;   PRO: extra -I goes away
</span><br>
<span class="quotelev1">&gt;   CON: we have to manually add a -I for other AC_CONFIG_HEADERS
</span><br>
Not really an issue.
<br>
<p><span class="quotelev1">&gt;   CON: doesn't solve the issue for embedding (*** this is a deal breaker)
</span><br>
<p>Indeed :/
<br>
<p><span class="quotelev1">&gt; 2. Rename myriexpress.h
</span><br>
<span class="quotelev1">&gt;   PRO: avoids the problem
</span><br>
<span class="quotelev1">&gt;   CON: breaks legacy apps who include &quot;hwloc/myriexpress.h&quot;
</span><br>
<span class="quotelev1">&gt;   CON: doesn't solve the real problem
</span><br>
<p>Yes, we have all sorts of such names: cuda.h, cpuset.h, rename.h, ...
<br>
<p><span class="quotelev1">&gt; 3. Move hwloc's public config.h in a new directory by itself (e.g., include/hwloc/config/config.h)
</span><br>
<span class="quotelev1">&gt;   PRO: works around the AM behavior
</span><br>
<span class="quotelev1">&gt;   PRO: fixes the issue for hwloc and for embedding
</span><br>
<span class="quotelev1">&gt;   PRO: avoids any other name potential conflicts with include/hwloc/*.h
</span><br>
<span class="quotelev1">&gt;   CON: kludgey -- leaves a bitter taste in your mouth
</span><br>
<p>I usually spit the bitter taste by saying &quot;bah, autostuff kludge, don't ask...&quot;
<br>
<p>In principle there'd be also applications including hwloc/config.h
<br>
themselves, but I doubt people actually ever did that.
<br>
<p><span class="quotelev1">&gt; 4. Don't use AC_CONFIG_HEADER (i.e., use sed+friends to generate include/hwloc/config.h ourselves)
</span><br>
<span class="quotelev1">&gt;   PRO: avoids the problem
</span><br>
<span class="quotelev1">&gt;   PRO: fixes the issue for hwloc and for embedding
</span><br>
<span class="quotelev1">&gt;   PRO: avoids any other name potential conflicts with include/hwloc/*.h
</span><br>
<span class="quotelev1">&gt;   CON: I don't want to code that up :-)
</span><br>
<p>I don't either :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1897.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1895.php">Jeff Squyres: "[hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Maybe in reply to:</strong> <a href="1895.php">Jeff Squyres: "[hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1897.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
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
