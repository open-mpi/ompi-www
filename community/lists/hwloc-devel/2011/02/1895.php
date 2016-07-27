<?
$subject_val = "[hwloc-devel] Problem with hwloc/myriexpress.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 09:37:19 2011" -->
<!-- isoreceived="20110203143719" -->
<!-- sent="Thu, 3 Feb 2011 09:37:15 -0500" -->
<!-- isosent="20110203143715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Problem with hwloc/myriexpress.h" -->
<!-- id="F4E0BBFA-6742-4F41-8275-E0623E8FDAF3_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Problem with hwloc/myriexpress.h<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 09:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1894.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3142)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Maybe reply:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Reply:</strong> <a href="1897.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Maybe reply:</strong> <a href="1898.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oracle recently pinged me with a problem in an OMPI build regarding the hwloc/myriexpress.h -- somehow #include &quot;myriexpress.h&quot; is picking up opal/mca/paffinity/hwloc/hwloc/include/hwloc/myriexpress.h instead of the system's myriexpress.h.  This causes badness; see <a href="https://svn.open-mpi.org/trac/ompi/ticket/2690">https://svn.open-mpi.org/trac/ompi/ticket/2690</a>.
<br>
<p>I tracked down why this was happening: automake is adding a -I to any directory where AC_CONFIG_HEADERS is used to generate a header file.  Since we're generating include/hwloc/config.h (i.e., the publicly-includable config.h file that is included by include/hwloc.h), automake is adding -I$(top_builddir)/include/hwloc.
<br>
<p>For VPATH builds, this clearly isn't a problem (because it's relative to the build tree, not the source tree).  But for non-VPATH builds, #include ordering can (and does) get wonked.
<br>
<p>Unfortunately, the -I is added by Automake in a place where we can't simply filter it out with some m4 / shell scripting.  Specifically: it's hard-coded directly into Makefile.in -- before configure is run.
<br>
<p>Possible solutions:
<br>
<p>1. We can use Automake's &quot;nostdinc&quot; flag to suppress this add-the-dash-I behavior.  
<br>
&nbsp;&nbsp;PRO: extra -I goes away
<br>
&nbsp;&nbsp;CON: we have to manually add a -I for other AC_CONFIG_HEADERS
<br>
&nbsp;&nbsp;CON: doesn't solve the issue for embedding (*** this is a deal breaker)
<br>
<p>2. Rename myriexpress.h
<br>
&nbsp;&nbsp;PRO: avoids the problem
<br>
&nbsp;&nbsp;CON: breaks legacy apps who include &quot;hwloc/myriexpress.h&quot;
<br>
&nbsp;&nbsp;CON: doesn't solve the real problem
<br>
<p>3. Move hwloc's public config.h in a new directory by itself (e.g., include/hwloc/config/config.h)
<br>
&nbsp;&nbsp;PRO: works around the AM behavior
<br>
&nbsp;&nbsp;PRO: fixes the issue for hwloc and for embedding
<br>
&nbsp;&nbsp;PRO: avoids any other name potential conflicts with include/hwloc/*.h
<br>
&nbsp;&nbsp;CON: kludgey -- leaves a bitter taste in your mouth
<br>
<p>4. Don't use AC_CONFIG_HEADER (i.e., use sed+friends to generate include/hwloc/config.h ourselves)
<br>
&nbsp;&nbsp;PRO: avoids the problem
<br>
&nbsp;&nbsp;PRO: fixes the issue for hwloc and for embedding
<br>
&nbsp;&nbsp;PRO: avoids any other name potential conflicts with include/hwloc/*.h
<br>
&nbsp;&nbsp;CON: I don't want to code that up :-)
<br>
<p>It seems like #3 and #4 are the best solutions.  I'm not excited about doing #4, so I'd prefer #3, even though it's a bit icky.
<br>
<p>Any other suggestions?
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
<li><strong>Next message:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Previous message:</strong> <a href="1894.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3142)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Maybe reply:</strong> <a href="1896.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Reply:</strong> <a href="1897.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
<li><strong>Maybe reply:</strong> <a href="1898.php">Samuel Thibault: "Re: [hwloc-devel] Problem with hwloc/myriexpress.h"</a>
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
