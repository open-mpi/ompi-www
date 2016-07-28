<?
$subject_val = "Re: [MTT devel] MTTGDS issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 11:16:55 2010" -->
<!-- isoreceived="20100212161655" -->
<!-- sent="Fri, 12 Feb 2010 11:16:48 -0500" -->
<!-- isosent="20100212161648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTTGDS issues" -->
<!-- id="B158888C-E84F-42FF-AB85-BF17B01C0B2F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B74FE5D.2040609_at_argus-cv.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTTGDS issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 11:16:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0487.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>In reply to:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2010, at 2:08 AM, Igor Ivanov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; *** WARNING: Could not run module
</span><br>
<span class="quotelev2">&gt;&gt;     MTT::Test::Analyze::Performance::NetPipe:PreReport: Undefined
</span><br>
<span class="quotelev2">&gt;&gt;     subroutine &amp;MTT::Test::Analyze::Performance::NetPipe::PreReport called
</span><br>
<span class="quotelev2">&gt;&gt;     at (eval 335838) line 1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; [II] It is the same thing as with &quot;analyze_module&quot; warning you got before. There are set of values that we would like to store in datastore but they do not exist in original analyzer. To avoid conflict with original mtt procedure _pre_process_phase call is done to get info from special function integrated into original analyzers as PreReport.
</span><br>
<p>Gotcha.  I just committed some fixes for this (test for PreReport existence before trying to call it).
<br>
<p><span class="quotelev2">&gt;&gt; *** ERROR: Module aborted: MTT::Reporter::MTTGDS:Finalize: Nested
</span><br>
<span class="quotelev2">&gt;&gt;     quantifiers in regex; marked by &lt;-- HERE in m/\s[\S/\\]*mpi2c++ &lt;--
</span><br>
<span class="quotelev2">&gt;&gt;     HERE _test.*/ at /home/jsquyres/svn/mtt/lib/MTT/Reporter/MTTGDS.pm line
</span><br>
<span class="quotelev2">&gt;&gt;     498.
</span><br>
<p>I just submitted some fixes for this, too.  I think it's a safer way to extract the mca params.
<br>
<p><span class="quotelev2">&gt;&gt; Is there a way to re-submit my data to GDS?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [II] Yes. You can upload data (datafile.yaml) from local place to datastore using bquery.pl --upload. Place for collected data can be controlled by &quot;repository_tempdir&quot;, &quot;repository_dirname_prefix&quot;
</span><br>
<span class="quotelev1">&gt; [VBench]
</span><br>
<span class="quotelev1">&gt; repository_tempdir=&amp;scratch_root()/gds_data
</span><br>
<span class="quotelev1">&gt; repository_dirname_prefix=gds
</span><br>
<span class="quotelev1">&gt; submit_failed_results_to_gds=0
</span><br>
<p>Cool; good to know.  I'll just re-run stuff for now and re-submit -- easy enough.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0487.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>In reply to:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
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
