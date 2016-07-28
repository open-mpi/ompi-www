<?
$subject_val = "Re: [OMPI devel] trunk build failure on NetBSD-5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 04:29:50 2012" -->
<!-- isoreceived="20120217092950" -->
<!-- sent="Fri, 17 Feb 2012 01:29:45 -0800" -->
<!-- isosent="20120217092945" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on NetBSD-5.0" -->
<!-- id="CAAvDA15iYu82giwHYyEQ60PHV9CPNY=f8SO9nbtDpm7kmsSN2Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15K6z0SrFqJc92HD_j_=uF1H3whn81iKDQJMDLrPcm2+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on NetBSD-5.0<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 04:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10472.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10470.php">Paul Hargrove: "[OMPI devel] trunk build failure on OpenBSD-5.0"</a>
<li><strong>In reply to:</strong> <a href="10469.php">Paul Hargrove: "[OMPI devel] trunk build failure on NetBSD-5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10480.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Reply:</strong> <a href="10480.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've confirmed that NO similar problem is present in the 1.5 branch.
<br>
<p>-Paul
<br>
<p>On Fri, Feb 17, 2012 at 12:49 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The following small patch was require to build the ompi trunk on
</span><br>
<span class="quotelev1">&gt; NetBSD-5.0.
</span><br>
<span class="quotelev1">&gt; I am not sure if this was the proper header in which to add this include,
</span><br>
<span class="quotelev1">&gt; but it is the first one that needs &quot;struct timeval&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.7a1r25944/opal/dss/dss_types.h~   2012-02-17
</span><br>
<span class="quotelev1">&gt; 00:30:09.000000000 -0800
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.7a1r25944/opal/dss/dss_types.h    2012-02-17
</span><br>
<span class="quotelev1">&gt; 00:34:04.000000000 -0800
</span><br>
<span class="quotelev1">&gt; @@ -31,6 +31,10 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#ifdef OPAL_HAVE_SYS_TIME_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/time.h&gt; /* for struct timeval */
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  typedef uint8_t opal_data_type_t;  /** data type indicators */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10471/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10472.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10470.php">Paul Hargrove: "[OMPI devel] trunk build failure on OpenBSD-5.0"</a>
<li><strong>In reply to:</strong> <a href="10469.php">Paul Hargrove: "[OMPI devel] trunk build failure on NetBSD-5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10480.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Reply:</strong> <a href="10480.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
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
