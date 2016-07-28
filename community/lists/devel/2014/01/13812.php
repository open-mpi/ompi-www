<?
$subject_val = "Re: [OMPI devel] out-of-date item in README?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 10:29:08 2014" -->
<!-- isoreceived="20140118152908" -->
<!-- sent="Sat, 18 Jan 2014 07:28:58 -0800" -->
<!-- isosent="20140118152858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] out-of-date item in README?" -->
<!-- id="C3570942-4AE6-451E-A308-54A4D2BC349F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17DFA4gp-XvyFViHpcHnswm6KMp5SreeiTYo5WWvt4m5Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-18 10:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13813.php">Paul Hargrove: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>Previous message:</strong> <a href="13811.php">Ralph Castain: "Re: [OMPI devel] gcc sync atomics broken in 1.7"</a>
<li><strong>In reply to:</strong> <a href="13810.php">Paul Hargrove: "[OMPI devel] out-of-date item in README?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13813.php">Paul Hargrove: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>Reply:</strong> <a href="13813.php">Paul Hargrove: "Re: [OMPI devel] out-of-date item in README?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since you confirm that it does indeed work, I'm happy to edit the readme - thanks!
<br>
<p>On Jan 17, 2014, at 9:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The README in trunk and v1.7 both read:
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
<span class="quotelev1">&gt; This item in the README entered v1.5 in r25845 and was syned to trunk in r26034.
</span><br>
<span class="quotelev1">&gt; The 02/23/2012 date for r25845 comes weeks AFTER I had resolved problems I was having when testing v1.5 on OpenBSD (<a href="http://www.open-mpi.org/community/lists/devel/2012/01/10300.php">http://www.open-mpi.org/community/lists/devel/2012/01/10300.php</a>).  So, I am not sure why it was decided that ROMIO was broken on OpenBSD in 1.5.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13813.php">Paul Hargrove: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>Previous message:</strong> <a href="13811.php">Ralph Castain: "Re: [OMPI devel] gcc sync atomics broken in 1.7"</a>
<li><strong>In reply to:</strong> <a href="13810.php">Paul Hargrove: "[OMPI devel] out-of-date item in README?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13813.php">Paul Hargrove: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>Reply:</strong> <a href="13813.php">Paul Hargrove: "Re: [OMPI devel] out-of-date item in README?"</a>
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
