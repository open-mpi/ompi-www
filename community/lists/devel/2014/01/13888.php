<?
$subject_val = "Re: [OMPI devel] vader on SGI UV?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 16:38:54 2014" -->
<!-- isoreceived="20140123213854" -->
<!-- sent="Thu, 23 Jan 2014 13:38:53 -0800" -->
<!-- isosent="20140123213853" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vader on SGI UV?" -->
<!-- id="CAAvDA16wkLp7WzPxOhd7Z_pYZfZjEP5hgGvD642BcXi2pwEm6w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16Z5T+SHOyCB9kRvnJe30iMNkEztv_+qxDFkFFGRUtZ1w_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 16:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>Previous message:</strong> <a href="13887.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13886.php">Paul Hargrove: "[OMPI devel] vader on SGI UV?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>Reply:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've answered this one for myself:
<br>
&nbsp;&nbsp;NO: the vader blt does not build on an SGI UV
<br>
However, xpmem support isn't detected at configure time either.
<br>
So, there is no &quot;problem&quot; here.
<br>
<p>It might be nice to clarify in README that vader is for Cray's variant of
<br>
XPMEM only.
<br>
<p>++ Everything below this point is for the &quot;future&quot; milestone. ++
<br>
<p>If one ever does want vader/xpmem support on the SGI UV, I see 2 issues to
<br>
overcome:
<br>
<p>issue 1)
<br>
SGI puts the header in /usr/include/sn/xpmem.h
<br>
There is no --with-xpmem= value that will let configure find the header in
<br>
that location.
<br>
This is a &quot;good thing&quot; because if configure did find it, a build would fail
<br>
be default due to issue #2.
<br>
To support SGI's xpmem will require additional configure logic to look for
<br>
EITHER xpmem.h or sn/xpmem.h
<br>
<p>To work past issue #1 I did:
<br>
&nbsp;&nbsp;$ mkdir $HOME/xpmem
<br>
&nbsp;&nbsp;$ ln -s /usr/include/sn $HOME/xpmem/include
<br>
and configured ompi using --with-xpmem=$HOME/xpmem
<br>
That allowed be to see the second issue...
<br>
<p>issue 2)
<br>
There are some minor API differences in types in SGI's &quot;flavor&quot; of xpmem
<br>
which cause the build to fail.
<br>
In GASNet we support both variants and the following snippet shows how we
<br>
deal with the differences:
<br>
&nbsp;&nbsp;#if defined(HAVE_XPMEM_H)
<br>
&nbsp;&nbsp;&nbsp;/* Cray XPMEM */
<br>
&nbsp;&nbsp;&nbsp;#include &lt;xpmem.h&gt;
<br>
&nbsp;&nbsp;&nbsp;typedef struct xpmem_addr gasneti_xpmem_addr_t;
<br>
&nbsp;&nbsp;&nbsp;typedef xpmem_segid_t gasneti_xpmem_segid_t;
<br>
&nbsp;&nbsp;&nbsp;typedef xpmem_apid_t gasneti_xpmem_apid_t;
<br>
&nbsp;&nbsp;&nbsp;#define gasneti_xpmem_apid apid
<br>
&nbsp;&nbsp;#elif defined(HAVE_SN_XPMEM_H)
<br>
&nbsp;&nbsp;&nbsp;/* SGI XPMEM */
<br>
&nbsp;&nbsp;&nbsp;#include &lt;sn/xpmem.h&gt;
<br>
&nbsp;&nbsp;&nbsp;typedef xpmem_addr_t gasneti_xpmem_addr_t;
<br>
&nbsp;&nbsp;&nbsp;typedef int64_t gasneti_xpmem_segid_t;
<br>
&nbsp;&nbsp;&nbsp;typedef int64_t gasneti_xpmem_apid_t;
<br>
&nbsp;&nbsp;&nbsp;#define gasneti_xpmem_apid id
<br>
&nbsp;&nbsp;#endif
<br>
<p>The differences:
<br>
+ Cray's &quot;struct xpmem_addr&quot; vs SGI's &quot;xpmem_addr_t&quot;
<br>
+ SGI's uses int64_t instead of defining xpmem_segid_t  and xpmem_apid_t
<br>
+ SGI uses a struct member name of &quot;id&quot; vs Cray's &quot;apid&quot;
<br>
<p>Note that the different locations for the header has worked to our benefit
<br>
here by providing the variant detection mechanism without the need for
<br>
configure probes for the types and members (though one could go that route
<br>
if sufficiently paranoid about a variant between the two).
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 23, 2014 at 12:11 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the vader BTL known to work or not work on an SGI UV (w/ XPMEM support,
</span><br>
<span class="quotelev1">&gt; of course)?
</span><br>
<span class="quotelev1">&gt; I can easily attempt the build, but any test runs would enter a queue that
</span><br>
<span class="quotelev1">&gt; is about 1 week deep.
</span><br>
<span class="quotelev1">&gt; So, I am wondering if the attempt is worth pursuing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, does one need an explicit &quot;-mca btl self,vader&quot; or &quot;-mca btl
</span><br>
<span class="quotelev1">&gt; ^sm&quot;?
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13888/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>Previous message:</strong> <a href="13887.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13886.php">Paul Hargrove: "[OMPI devel] vader on SGI UV?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>Reply:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
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
