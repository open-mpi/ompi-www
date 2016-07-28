<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  9 01:57:46 2012" -->
<!-- isoreceived="20120409055746" -->
<!-- sent="Mon, 09 Apr 2012 14:57:07 +0900" -->
<!-- isosent="20120409055707" -->
<!-- name="ADACHI Tomoya" -->
<!-- email="adachi.tomoya_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243" -->
<!-- id="4F827A33.1020505_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="201204061450.q36Eo5Fq004716_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243<br>
<strong>From:</strong> ADACHI Tomoya (<em>adachi.tomoya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-09 01:57:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10845.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10851.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
<li><strong>Reply:</strong> <a href="10851.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>This fix seems insufficient for multibyte datatypes...
<br>
The correct increment of the pointers is length * extent, isn't it?
<br>
<p>(2012/04/06 23:50), bosilca_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2012-04-06 10:50:04 EDT (Fri, 06 Apr 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26243
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26243">https://svn.open-mpi.org/trac/ompi/changeset/26243</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Don't forget to move the pointers after the copy (only affects large data
</span><br>
<span class="quotelev1">&gt; transfers).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;     trunk/ompi/datatype/ompi_datatype.h |     5 ++++-
</span><br>
<span class="quotelev1">&gt;     1 files changed, 4 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/datatype/ompi_datatype.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/datatype/ompi_datatype.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/datatype/ompi_datatype.h	2012-04-06 10:50:04 EDT (Fri, 06 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -289,8 +289,11 @@
</span><br>
<span class="quotelev1">&gt;       while( 0 != count ) {
</span><br>
<span class="quotelev1">&gt;           length = INT_MAX;
</span><br>
<span class="quotelev1">&gt;           if( ((size_t)length)&gt;  count ) length = (int32_t)count;
</span><br>
<span class="quotelev1">&gt; -        rc = opal_datatype_copy_content_same_ddt(&amp;type-&gt;super, count, pDestBuf, pSrcBuf );
</span><br>
<span class="quotelev1">&gt; +        rc = opal_datatype_copy_content_same_ddt(&amp;type-&gt;super, length,
</span><br>
<span class="quotelev1">&gt; +                                                  pDestBuf, pSrcBuf );
</span><br>
<span class="quotelev1">&gt;           if( 0 != rc ) return rc;
</span><br>
<span class="quotelev1">&gt; +        pDestBuf += (ptrdiff_t)length;
</span><br>
<span class="quotelev1">&gt; +        pSrcBuf  += (ptrdiff_t)length;
</span><br>
<span class="quotelev1">&gt;           count -= (size_t)length;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       return 0;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
$BIY;NDL3t&lt;02q&lt;R(B $B&lt;!@$Be(BTC$B3+H/K\It(B
$B%=%U%H%&amp;%'%&quot;3+H/E}3gIt(B $BBh;M3+H/It(B
$B0BC#(B $BCNLi(B (ADACHI Tomoya) (adachi.tomoya_at_[hidden])
tel: 7103-8632($BFb@~(B) 044-754-8769($B30@~(B)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10845.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10843.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10851.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
<li><strong>Reply:</strong> <a href="10851.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
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
