<?
$subject_val = "Re: [OMPI devel] u_int8_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 14:06:21 2011" -->
<!-- isoreceived="20110111190621" -->
<!-- sent="Tue, 11 Jan 2011 11:05:52 -0800" -->
<!-- isosent="20110111190552" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] u_int8_t" -->
<!-- id="4D2CAA10.4000200_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="60C5F417-CA9A-4411-8D80-03CBBD2DE1AC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] u_int8_t<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 14:05:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8857.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8855.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24219"</a>
<li><strong>In reply to:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8857.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Reply:</strong> <a href="8857.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Shrug.  If they're not used anywhere, I'd whack them.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Excellent.  They screw things up (at least for me).  Turns out, Solaris 
<br>
IB uses such types and has the sense to typedef them.  But such typedefs 
<br>
conflict with opal_config.h, which #define's them (for apparently no 
<br>
reason).
<br>
<p><span class="quotelev1">&gt;Do we have configure tests for them, or just #define's?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Configure tests.
<br>
<p><span class="quotelev1">&gt;On Jan 10, 2011, at 7:51 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Why do
</span><br>
<span class="quotelev2">&gt;&gt; u_int8_t
</span><br>
<span class="quotelev2">&gt;&gt; u_int16_t
</span><br>
<span class="quotelev2">&gt;&gt; u_int32_t
</span><br>
<span class="quotelev2">&gt;&gt; u_int64_t
</span><br>
<span class="quotelev2">&gt;&gt;get defined in opal_config.h?  I don't see them used anywhere in the OMPI/OPAL/ORTE code base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Okay, one exception, in opal/util/if.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#if defined(__DragonFly__)
</span><br>
<span class="quotelev2">&gt;&gt;#define IN_LINKLOCAL(i)        (((u_int32_t)(i) &amp; 0xffff0000) == 0xa9fe0000)
</span><br>
<span class="quotelev2">&gt;&gt;#endif
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Ah, and even this one exception you got rid of in r22869.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8857.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8855.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24219"</a>
<li><strong>In reply to:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8857.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Reply:</strong> <a href="8857.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
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
