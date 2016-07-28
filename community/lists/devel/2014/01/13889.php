<?
$subject_val = "Re: [OMPI devel] vader on SGI UV?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 16:54:01 2014" -->
<!-- isoreceived="20140123215401" -->
<!-- sent="Thu, 23 Jan 2014 14:53:58 -0700" -->
<!-- isosent="20140123215358" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vader on SGI UV?" -->
<!-- id="20140123215358.GB38575_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16wkLp7WzPxOhd7Z_pYZfZjEP5hgGvD642BcXi2pwEm6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vader on SGI UV?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 16:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13890.php">Paul Hargrove: "[OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13888.php">Paul Hargrove: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>In reply to:</strong> <a href="13888.php">Paul Hargrove: "Re: [OMPI devel] vader on SGI UV?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it *should* work since the Cray and SGI variants are more or less
<br>
the same. I would have to take a look at their xpmem.h to see if
<br>
anything is different.
<br>
<p>-Nathan
<br>
<p>On Thu, Jan 23, 2014 at 01:38:53PM -0800, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    I've answered this one for myself:
</span><br>
<span class="quotelev1">&gt;      NO: the vader blt does not build on an SGI UV
</span><br>
<span class="quotelev1">&gt;    However, xpmem support isn't detected at configure time either.
</span><br>
<span class="quotelev1">&gt;    So, there is no &quot;problem&quot; here.
</span><br>
<span class="quotelev1">&gt;    It might be nice to clarify in README that vader is for Cray's variant of
</span><br>
<span class="quotelev1">&gt;    XPMEM only.
</span><br>
<span class="quotelev1">&gt;    ++ Everything below this point is for the &quot;future&quot; milestone. ++
</span><br>
<span class="quotelev1">&gt;    If one ever does want vader/xpmem support on the SGI UV, I see 2 issues to
</span><br>
<span class="quotelev1">&gt;    overcome:
</span><br>
<span class="quotelev1">&gt;    issue 1)
</span><br>
<span class="quotelev1">&gt;    SGI puts the header in /usr/include/sn/xpmem.h
</span><br>
<span class="quotelev1">&gt;    There is no --with-xpmem= value that will let configure find the header in
</span><br>
<span class="quotelev1">&gt;    that location.
</span><br>
<span class="quotelev1">&gt;    This is a &quot;good thing&quot; because if configure did find it, a build would
</span><br>
<span class="quotelev1">&gt;    fail be default due to issue #2.
</span><br>
<span class="quotelev1">&gt;    To support SGI's xpmem will require additional configure logic to look for
</span><br>
<span class="quotelev1">&gt;    EITHER xpmem.h or sn/xpmem.h
</span><br>
<span class="quotelev1">&gt;    To work past issue #1 I did:
</span><br>
<span class="quotelev1">&gt;      $ mkdir $HOME/xpmem
</span><br>
<span class="quotelev1">&gt;      $ ln -s /usr/include/sn $HOME/xpmem/include
</span><br>
<span class="quotelev1">&gt;    and configured ompi using --with-xpmem=$HOME/xpmem
</span><br>
<span class="quotelev1">&gt;    That allowed be to see the second issue...
</span><br>
<span class="quotelev1">&gt;    issue 2)
</span><br>
<span class="quotelev1">&gt;    There are some minor API differences in types in SGI's &quot;flavor&quot; of xpmem
</span><br>
<span class="quotelev1">&gt;    which cause the build to fail.
</span><br>
<span class="quotelev1">&gt;    In GASNet we support both variants and the following snippet shows how we
</span><br>
<span class="quotelev1">&gt;    deal with the differences:
</span><br>
<span class="quotelev1">&gt;      #if defined(HAVE_XPMEM_H)
</span><br>
<span class="quotelev1">&gt;       /* Cray XPMEM */
</span><br>
<span class="quotelev1">&gt;       #include &lt;xpmem.h&gt;
</span><br>
<span class="quotelev1">&gt;       typedef struct xpmem_addr gasneti_xpmem_addr_t;
</span><br>
<span class="quotelev1">&gt;       typedef xpmem_segid_t gasneti_xpmem_segid_t;
</span><br>
<span class="quotelev1">&gt;       typedef xpmem_apid_t gasneti_xpmem_apid_t;
</span><br>
<span class="quotelev1">&gt;       #define gasneti_xpmem_apid apid
</span><br>
<span class="quotelev1">&gt;      #elif defined(HAVE_SN_XPMEM_H)
</span><br>
<span class="quotelev1">&gt;       /* SGI XPMEM */
</span><br>
<span class="quotelev1">&gt;       #include &lt;sn/xpmem.h&gt;
</span><br>
<span class="quotelev1">&gt;       typedef xpmem_addr_t gasneti_xpmem_addr_t;
</span><br>
<span class="quotelev1">&gt;       typedef int64_t gasneti_xpmem_segid_t;
</span><br>
<span class="quotelev1">&gt;       typedef int64_t gasneti_xpmem_apid_t;
</span><br>
<span class="quotelev1">&gt;       #define gasneti_xpmem_apid id
</span><br>
<span class="quotelev1">&gt;      #endif
</span><br>
<span class="quotelev1">&gt;    The differences:
</span><br>
<span class="quotelev1">&gt;    + Cray's &quot;struct xpmem_addr&quot; vs SGI's &quot;xpmem_addr_t&quot;
</span><br>
<span class="quotelev1">&gt;    + SGI's uses int64_t instead of defining xpmem_segid_t  and xpmem_apid_t 
</span><br>
<span class="quotelev1">&gt;    + SGI uses a struct member name of &quot;id&quot; vs Cray's &quot;apid&quot;
</span><br>
<span class="quotelev1">&gt;    Note that the different locations for the header has worked to our benefit
</span><br>
<span class="quotelev1">&gt;    here by providing the variant detection mechanism without the need for
</span><br>
<span class="quotelev1">&gt;    configure probes for the types and members (though one could go that route
</span><br>
<span class="quotelev1">&gt;    if sufficiently paranoid about a variant between the two).
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Thu, Jan 23, 2014 at 12:11 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Nathan,
</span><br>
<span class="quotelev1">&gt;      Is the vader BTL known to work or not work on an SGI UV (w/ XPMEM
</span><br>
<span class="quotelev1">&gt;      support, of course)?
</span><br>
<span class="quotelev1">&gt;      I can easily attempt the build, but any test runs would enter a queue
</span><br>
<span class="quotelev1">&gt;      that is about 1 week deep.
</span><br>
<span class="quotelev1">&gt;      So, I am wondering if the attempt is worth pursuing.
</span><br>
<span class="quotelev1">&gt;      Additionally, does one need an explicit &quot;-mca btl self,vader&quot; or &quot;-mca
</span><br>
<span class="quotelev1">&gt;      btl ^sm&quot;?
</span><br>
<span class="quotelev1">&gt;      -Paul
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Future Technologies Group
</span><br>
<span class="quotelev1">&gt;      Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Future Technologies Group
</span><br>
<span class="quotelev1">&gt;    Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13889/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13890.php">Paul Hargrove: "[OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13888.php">Paul Hargrove: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>In reply to:</strong> <a href="13888.php">Paul Hargrove: "Re: [OMPI devel] vader on SGI UV?"</a>
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
