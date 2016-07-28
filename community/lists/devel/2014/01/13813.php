<?
$subject_val = "Re: [OMPI devel] out-of-date item in README?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 23:47:26 2014" -->
<!-- isoreceived="20140119044726" -->
<!-- sent="Sat, 18 Jan 2014 20:47:22 -0800" -->
<!-- isosent="20140119044722" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] out-of-date item in README?" -->
<!-- id="CAAvDA164duExRsuCEf1BfPz2ExGB06npqqAE07tJNNa63FRbZQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3570942-4AE6-451E-A308-54A4D2BC349F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] out-of-date item in README?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-18 23:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13814.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<li><strong>Previous message:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>In reply to:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Just to be clear - I can confirm only that &quot;make&quot; and &quot;make check&quot; pass.
<br>
Since it doesn't look like any ROMIO tests are included I cannot honestly
<br>
say that I've shown that it &quot;works&quot;.
<br>
<p>-Paul
<br>
<p><p>On Sat, Jan 18, 2014 at 7:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Since you confirm that it does indeed work, I'm happy to edit the readme -
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2014, at 9:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The README in trunk and v1.7 both read:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ROMIO is not supported on OpenBSD.  You will need to specify the
</span><br>
<span class="quotelev1">&gt;   --disable-io-romio flag to configure when building on OpenBSD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I have no current problems building it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./INST/bin/ompi_info --parsable | grep -e :arch: -e romio
</span><br>
<span class="quotelev1">&gt; config:arch:x86_64-unknown-openbsd5.3
</span><br>
<span class="quotelev1">&gt; mca:io:romio:version:mca:2.0
</span><br>
<span class="quotelev1">&gt; mca:io:romio:version:api:2.0
</span><br>
<span class="quotelev1">&gt; mca:io:romio:version:component:1.7.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This item in the README entered v1.5 in r25845 and was syned to trunk in
</span><br>
<span class="quotelev1">&gt; r26034.
</span><br>
<span class="quotelev1">&gt; The 02/23/2012 date for r25845 comes weeks AFTER I had resolved problems I
</span><br>
<span class="quotelev1">&gt; was having when testing v1.5 on OpenBSD (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10300.php">http://www.open-mpi.org/community/lists/devel/2012/01/10300.php</a>).  So, I
</span><br>
<span class="quotelev1">&gt; am not sure why it was decided that ROMIO was broken on OpenBSD in 1.5.
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13814.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<li><strong>Previous message:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>In reply to:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
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
