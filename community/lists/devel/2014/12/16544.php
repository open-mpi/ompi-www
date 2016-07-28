<?
$subject_val = "Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 10:40:07 2014" -->
<!-- isoreceived="20141212154007" -->
<!-- sent="Fri, 12 Dec 2014 08:40:01 -0700" -->
<!-- isosent="20141212154001" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV" -->
<!-- id="20141212154001.GE31431_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16RDTxbGqeWtjSRwmLxeZG+0Vnum7twqfuDSbz59ZVRbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 10:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16545.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16543.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16520.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, I thought we already cleaned that up in 1.8. I will take a look
<br>
today.
<br>
<p>BTW, can you send me the sn/xpmem.h file from your machine. I might have
<br>
an idea what is going wrong. Can't seen to find the link the SGI's
<br>
tarball on their oss site.
<br>
<p>-Nathan
<br>
<p>On Thu, Dec 11, 2014 at 06:53:00PM -0800, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    I think I've reported this earlier in the 1.8 series.
</span><br>
<span class="quotelev1">&gt;    If I compile on an SGI UV (e.g. blacklight at PSC) configure picks up the
</span><br>
<span class="quotelev1">&gt;    presence of xpmem headers and enables the vader BTL.
</span><br>
<span class="quotelev1">&gt;    However, the port of vader to SGI's &quot;flavor&quot; of xpmem is incomplete and
</span><br>
<span class="quotelev1">&gt;    the following build failure results:
</span><br>
<span class="quotelev1">&gt;    make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/brashear/hargrove/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/BLD/ompi/mca/btl/vader'
</span><br>
<span class="quotelev1">&gt;      CC       btl_vader_module.lo
</span><br>
<span class="quotelev1">&gt;    In file included from
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader.h:60,
</span><br>
<span class="quotelev1">&gt;                     from
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:29:
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_endpoint.h:76:
</span><br>
<span class="quotelev1">&gt;    error: expected specifier-qualifier-list before 'xpmem_apid_t'
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:
</span><br>
<span class="quotelev1">&gt;    In function 'init_vader_endpoint':
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:197:
</span><br>
<span class="quotelev1">&gt;    error: 'struct &lt;anonymous&gt;' has no member named 'apid'
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:
</span><br>
<span class="quotelev1">&gt;    In function 'mca_btl_vader_endpoint_destructor':
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:682:
</span><br>
<span class="quotelev1">&gt;    error: 'struct &lt;anonymous&gt;' has no member named 'apid'
</span><br>
<span class="quotelev1">&gt;    /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/openmpi-1.8.4rc2/ompi/mca/btl/vader/btl_vader_module.c:683:
</span><br>
<span class="quotelev1">&gt;    error: 'struct &lt;anonymous&gt;' has no member named 'apid'
</span><br>
<span class="quotelev1">&gt;    make[2]: *** [btl_vader_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt;    make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/brashear/hargrove/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/BLD/ompi/mca/btl/vader'
</span><br>
<span class="quotelev1">&gt;    make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;    make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/brashear/hargrove/OMPI/openmpi-1.8.4rc2-linux-x86_64-uv/BLD/ompi'
</span><br>
<span class="quotelev1">&gt;    make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;    This can trivially be fixed in configure if one doesn't recognize the SGI
</span><br>
<span class="quotelev1">&gt;    variant of xpmem.
</span><br>
<span class="quotelev1">&gt;    I think (untested) that the following is sufficient:
</span><br>
<span class="quotelev1">&gt;    --- ./ompi/mca/btl/vader/configure.m4~  2014-12-11 18:51:11.499654000
</span><br>
<span class="quotelev1">&gt;    -0800
</span><br>
<span class="quotelev1">&gt;    +++ ./ompi/mca/btl/vader/configure.m4   2014-12-11 18:51:52.289654000
</span><br>
<span class="quotelev1">&gt;    -0800
</span><br>
<span class="quotelev1">&gt;    @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev1">&gt;         AC_ARG_WITH([xpmem],
</span><br>
<span class="quotelev1">&gt;                     [AC_HELP_STRING([--with-xpmem(=DIR)],
</span><br>
<span class="quotelev1">&gt;                     [Build with XPMEM kernel module support, searching for
</span><br>
<span class="quotelev1">&gt;    headers in DIR])])
</span><br>
<span class="quotelev1">&gt;    -    OMPI_CHECK_WITHDIR([xpmem], [$with_xpmem], [include/xpmem.h
</span><br>
<span class="quotelev1">&gt;    include/sn/xpmem.h])
</span><br>
<span class="quotelev1">&gt;    +    OMPI_CHECK_WITHDIR([xpmem], [$with_xpmem], [include/xpmem.h])
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;         AC_ARG_WITH([xpmem-libdir],
</span><br>
<span class="quotelev1">&gt;                     [AC_HELP_STRING([--with-xpmem-libdir=DIR],
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16520.php">http://www.open-mpi.org/community/lists/devel/2014/12/16520.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16544/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16545.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16543.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16520.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
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
