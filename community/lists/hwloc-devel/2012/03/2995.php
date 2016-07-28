<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 16:27:11 2012" -->
<!-- isoreceived="20120327202711" -->
<!-- sent="Tue, 27 Mar 2012 16:27:00 -0400" -->
<!-- isosent="20120327202700" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417" -->
<!-- id="B27E29AA-6D4E-488C-90D8-A8C1E9DAEBC6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203210729.q2L7TIKE005200_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 16:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2996.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>Previous message:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2996.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>Reply:</strong> <a href="2996.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice --
<br>
<p>Is there a reason to not bring this to v1.4?
<br>
<p><p>On Mar 21, 2012, at 3:29 AM, bgoglin_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-21 03:29:17 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 4417
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4417">https://svn.open-mpi.org/trac/hwloc/changeset/4417</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add Port info attribute to network OS devices inside OpenFabrics PCI
</span><br>
<span class="quotelev1">&gt; devices so as to identify which interface corresponds to which port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't do it for all network OS devices because the dev_id sysfs
</span><br>
<span class="quotelev1">&gt; attribute for OFED (dev_id = port-1) is not strictly equivalent
</span><br>
<span class="quotelev1">&gt; to its generic meaning (shared nic id, 0 is most cases).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/NEWS                  |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/src/topology-libpci.c |    21 +++++++++++++++++++++                   
</span><br>
<span class="quotelev1">&gt;   2 files changed, 23 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/NEWS
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/NEWS	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/NEWS	2012-03-21 03:29:17 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -47,6 +47,8 @@
</span><br>
<span class="quotelev1">&gt;   + Instruction caches are enabled in lstopo by default. User --no-icaches
</span><br>
<span class="quotelev1">&gt;     to disable them.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt; +  + Add Port info attribute to network OS devices inside OpenFabrics PCI
</span><br>
<span class="quotelev1">&gt; +    devices so as to identify which interface corresponds to which port.
</span><br>
<span class="quotelev1">&gt;   + Remove support for &quot;Proc&quot; type name, it was superseded by &quot;PU&quot; in v1.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/topology-libpci.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology-libpci.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology-libpci.c	2012-03-21 03:29:17 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -25,6 +25,7 @@
</span><br>
<span class="quotelev1">&gt; #include &lt;hwloc/linux.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;dirent.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define CONFIG_SPACE_CACHESIZE 256
</span><br>
<span class="quotelev1">&gt; @@ -123,6 +124,7 @@
</span><br>
<span class="quotelev1">&gt; hwloc_linux_net_class_fillinfos(struct hwloc_topology *topology __hwloc_attribute_unused, struct hwloc_obj *obj, const char *osdevpath)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   FILE *fd;
</span><br>
<span class="quotelev1">&gt; +  struct stat st;
</span><br>
<span class="quotelev1">&gt;   char path[256];
</span><br>
<span class="quotelev1">&gt;   snprintf(path, sizeof(path), &quot;%s/address&quot;, osdevpath);
</span><br>
<span class="quotelev1">&gt;   fd = fopen(path, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -136,6 +138,25 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     fclose(fd);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; +  snprintf(path, sizeof(path), &quot;%s/device/infiniband&quot;, osdevpath);
</span><br>
<span class="quotelev1">&gt; +  if (!stat(path, &amp;st)) {
</span><br>
<span class="quotelev1">&gt; +    snprintf(path, sizeof(path), &quot;%s/dev_id&quot;, osdevpath);
</span><br>
<span class="quotelev1">&gt; +    fd = fopen(path, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt; +    if (fd) {
</span><br>
<span class="quotelev1">&gt; +      char hexid[16];
</span><br>
<span class="quotelev1">&gt; +      if (fgets(hexid, sizeof(hexid), fd)) {
</span><br>
<span class="quotelev1">&gt; +	char *eoid;
</span><br>
<span class="quotelev1">&gt; +	unsigned long port;
</span><br>
<span class="quotelev1">&gt; +	port = strtoul(hexid, &amp;eoid, 0);
</span><br>
<span class="quotelev1">&gt; +	if (eoid != hexid) {
</span><br>
<span class="quotelev1">&gt; +	  char portstr[16];
</span><br>
<span class="quotelev1">&gt; +	  snprintf(portstr, sizeof(portstr), &quot;%ld&quot;, port+1);
</span><br>
<span class="quotelev1">&gt; +	  hwloc_obj_add_info(obj, &quot;Port&quot;, portstr);
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +      fclose(fd);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; static void
</span><br>
<span class="quotelev1">&gt; hwloc_linux_lookup_net_class(struct hwloc_topology *topology, struct hwloc_obj *pcidev, const char *pcidevpath)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="2996.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>Previous message:</strong> <a href="2994.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2996.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>Reply:</strong> <a href="2996.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
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
