<?
$subject_val = "[OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 03:48:52 2014" -->
<!-- isoreceived="20140109084852" -->
<!-- sent="Thu, 9 Jan 2014 00:48:50 -0800" -->
<!-- isosent="20140109084850" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings" -->
<!-- id="CAAvDA14YpKF5paFjRv+eTomUXWsrbYXsr=pWqKm3Ahmtj_X3xA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 03:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13620.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>Previous message:</strong> <a href="13618.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<li><strong>Reply:</strong> <a href="13707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some minor misc warnings from the current 1.7.4rc tarball:
<br>
<p>On both FreeBSD and NetBSD, the symbol CACHE_LINE_SIZE used
<br>
in ompi/mca/bcol/basesmuma/ appears to clash with a system-defined symbol.
<br>
FreeBSD-9/x86-64:
<br>
&nbsp;&nbsp;CC       bcol_basesmuma_component.lo
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma_component.c:25:
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma.h:51:1:
<br>
warning: &quot;CACHE_LINE_SIZE&quot; redefined
<br>
In file included from /usr/include/sys/param.h:131,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/opal/include/opal_config_bottom.h:366,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../opal/include/opal_config.h:2518,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../ompi/include/ompi_config.h:28,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma_component.c:16:
<br>
/usr/include/machine/param.h:89:1: warning: this is the location of the
<br>
previous definition
<br>
NetBSD-5/x86:
<br>
&nbsp;&nbsp;CC       bcol_basesmuma_component.lo
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma_component.c:25:0:
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma.h:51:0:
<br>
warning: &quot;CACHE_LINE_SIZE&quot; redefined
<br>
/usr/include/sys/param.h:184:0: note: this is the location of the previous
<br>
definition
<br>
<p><p>On OpenBSD the header malloc.h exists, but is NOT intended to be used:
<br>
-bash-4.2$ grep -B2 'is obsolete' make.log
<br>
&nbsp;&nbsp;CC       bind.lo
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/opal/mca/hwloc/hwloc172/hwloc/src/bind.c:17:
<br>
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use
<br>
&lt;stdlib.h&gt;&quot;
<br>
<pre>
--
  CC       base/mpool_base_frame.lo
In file included from
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/base/mpool_base_frame.c:28:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use
&lt;stdlib.h&gt;&quot;
--
  CC       base/mpool_base_lookup.lo
In file included from
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/base/mpool_base_lookup.c:29:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use
&lt;stdlib.h&gt;&quot;
--
  CC       adio/common/malloc.lo
In file included from
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/io/romio/romio/adio/common/malloc.c:24:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use
&lt;stdlib.h&gt;&quot;
--
  CC       mpool_grdma_module.lo
In file included from
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/grdma/mpool_grdma_module.c:34:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use
&lt;stdlib.h&gt;&quot;
--
  CC       mpool_grdma_component.lo
In file included from
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/grdma/mpool_grdma_component.c:34:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use
&lt;stdlib.h&gt;&quot;
-Paul
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13620.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - warnings for pointer/integer of different size"</a>
<li><strong>Previous message:</strong> <a href="13618.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<li><strong>Reply:</strong> <a href="13707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
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
