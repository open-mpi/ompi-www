<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 12:21:51 2014" -->
<!-- isoreceived="20140110172151" -->
<!-- sent="Fri, 10 Jan 2014 17:21:50 +0000" -->
<!-- isosent="20140110172150" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings" -->
<!-- id="36483C08-BA68-44CE-8B2A-26FB80758412_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14YpKF5paFjRv+eTomUXWsrbYXsr=pWqKm3Ahmtj_X3xA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 12:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13708.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13619.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed all of these except:
<br>
<p>- pushed hwloc fix upstream and waiting for equivalent of hwloc MTT testing to see how it fares
<br>
- we try not to edit ROMIO since it comes from upstream (i.e., we tolerate warnings in there)
<br>
<p><p>On Jan 9, 2014, at 3:48 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Some minor misc warnings from the current 1.7.4rc tarball:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On both FreeBSD and NetBSD, the symbol CACHE_LINE_SIZE used in ompi/mca/bcol/basesmuma/ appears to clash with a system-defined symbol.
</span><br>
<span class="quotelev1">&gt; FreeBSD-9/x86-64:
</span><br>
<span class="quotelev1">&gt;   CC       bcol_basesmuma_component.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma_component.c:25:
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma.h:51:1: warning: &quot;CACHE_LINE_SIZE&quot; redefined
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/sys/param.h:131,
</span><br>
<span class="quotelev1">&gt;                  from /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/opal/include/opal_config_bottom.h:366,
</span><br>
<span class="quotelev1">&gt;                  from ../../../../opal/include/opal_config.h:2518,
</span><br>
<span class="quotelev1">&gt;                  from ../../../../ompi/include/ompi_config.h:28,
</span><br>
<span class="quotelev1">&gt;                  from /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma_component.c:16:
</span><br>
<span class="quotelev1">&gt; /usr/include/machine/param.h:89:1: warning: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; NetBSD-5/x86:
</span><br>
<span class="quotelev1">&gt;   CC       bcol_basesmuma_component.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma_component.c:25:0:
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7.4rc2r30168/ompi/mca/bcol/basesmuma/bcol_basesmuma.h:51:0: warning: &quot;CACHE_LINE_SIZE&quot; redefined
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/param.h:184:0: note: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On OpenBSD the header malloc.h exists, but is NOT intended to be used:
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ grep -B2 'is obsolete' make.log 
</span><br>
<span class="quotelev1">&gt;   CC       bind.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/opal/mca/hwloc/hwloc172/hwloc/src/bind.c:17:
</span><br>
<span class="quotelev1">&gt; /usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use &lt;stdlib.h&gt;&quot;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       base/mpool_base_frame.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/base/mpool_base_frame.c:28:
</span><br>
<span class="quotelev1">&gt; /usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use &lt;stdlib.h&gt;&quot;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       base/mpool_base_lookup.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/base/mpool_base_lookup.c:29:
</span><br>
<span class="quotelev1">&gt; /usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use &lt;stdlib.h&gt;&quot;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       adio/common/malloc.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/io/romio/romio/adio/common/malloc.c:24:
</span><br>
<span class="quotelev1">&gt; /usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use &lt;stdlib.h&gt;&quot;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       mpool_grdma_module.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/grdma/mpool_grdma_module.c:34:
</span><br>
<span class="quotelev1">&gt; /usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use &lt;stdlib.h&gt;&quot;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   CC       mpool_grdma_component.lo
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/ompi/mca/mpool/grdma/mpool_grdma_component.c:34:
</span><br>
<span class="quotelev1">&gt; /usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use &lt;stdlib.h&gt;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13708.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13619.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
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
