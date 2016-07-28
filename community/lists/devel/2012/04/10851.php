<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 10 01:38:22 2012" -->
<!-- isoreceived="20120410053822" -->
<!-- sent="Tue, 10 Apr 2012 01:38:16 -0400" -->
<!-- isosent="20120410053816" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243" -->
<!-- id="B08087ED-0B1F-4560-AC7D-3D83520A4D3D_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4F827A33.1020505_at_jp.fujitsu.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-10 01:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10852.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>In reply to:</strong> <a href="10844.php">ADACHI Tomoya: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adachi,
<br>
<p>You're right indeed, I should have multiplied the displacement by the extent of the datatype.
<br>
Thanks for catching this! Commit r26259 is supposed to fix this.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Apr 9, 2012, at 01:57 , ADACHI Tomoya wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This fix seems insufficient for multibyte datatypes...
</span><br>
<span class="quotelev1">&gt; The correct increment of the pointers is length * extent, isn't it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2012/04/06 23:50), bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-04-06 10:50:04 EDT (Fri, 06 Apr 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 26243
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26243">https://svn.open-mpi.org/trac/ompi/changeset/26243</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Don't forget to move the pointers after the copy (only affects large data
</span><br>
<span class="quotelev2">&gt;&gt; transfers).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/datatype/ompi_datatype.h |     5 ++++-
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 4 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/datatype/ompi_datatype.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/datatype/ompi_datatype.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/datatype/ompi_datatype.h	2012-04-06 10:50:04 EDT (Fri, 06 Apr 2012)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -289,8 +289,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;      while( 0 != count ) {
</span><br>
<span class="quotelev2">&gt;&gt;          length = INT_MAX;
</span><br>
<span class="quotelev2">&gt;&gt;          if( ((size_t)length)&gt;  count ) length = (int32_t)count;
</span><br>
<span class="quotelev2">&gt;&gt; -        rc = opal_datatype_copy_content_same_ddt(&amp;type-&gt;super, count, pDestBuf, pSrcBuf );
</span><br>
<span class="quotelev2">&gt;&gt; +        rc = opal_datatype_copy_content_same_ddt(&amp;type-&gt;super, length,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                  pDestBuf, pSrcBuf );
</span><br>
<span class="quotelev2">&gt;&gt;          if( 0 != rc ) return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +        pDestBuf += (ptrdiff_t)length;
</span><br>
<span class="quotelev2">&gt;&gt; +        pSrcBuf  += (ptrdiff_t)length;
</span><br>
<span class="quotelev2">&gt;&gt;          count -= (size_t)length;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      return 0;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#229;&#175;&#140;&#229;&#163;&#171;&#233;&#128;&#154;&#230;&#160;&#170;&#229;&#188;&#143;&#228;&#188;&#154;&#231;&#164;&#190; &#230;&#172;&#161;&#228;&#184;&#150;&#228;&#187;&#163;TC&#233;&#150;&#139;&#231;&#153;&#186;&#230;&#156;&#172;&#233;&#131;&#168;
</span><br>
<span class="quotelev1">&gt; &#227;&#130;&#189;&#227;&#131;&#149;&#227;&#131;&#136;&#227;&#130;&#166;&#227;&#130;&#167;&#227;&#130;&#162;&#233;&#150;&#139;&#231;&#153;&#186;&#231;&#181;&#177;&#230;&#139;&#172;&#233;&#131;&#168; &#231;&#172;&#172;&#229;&#155;&#155;&#233;&#150;&#139;&#231;&#153;&#186;&#233;&#131;&#168;
</span><br>
<span class="quotelev1">&gt; &#229;&#174;&#137;&#233;&#129;&#148; &#231;&#159;&#165;&#228;&#185;&#159; (ADACHI Tomoya) (adachi.tomoya_at_[hidden])
</span><br>
<span class="quotelev1">&gt; tel: 7103-8632(&#229;&#134;&#133;&#231;&#183;&#154;) 044-754-8769(&#229;&#164;&#150;&#231;&#183;&#154;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10852.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>In reply to:</strong> <a href="10844.php">ADACHI Tomoya: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
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
