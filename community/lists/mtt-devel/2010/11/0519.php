<?
$subject_val = "Re: [MTT devel] question about the test run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 15:09:21 2010" -->
<!-- isoreceived="20101104190921" -->
<!-- sent="Thu, 4 Nov 2010 15:09:16 -0400" -->
<!-- isosent="20101104190916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] question about the test run" -->
<!-- id="D47732BE-047F-4F2F-8136-443B091B6EDF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD30018.5090801_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] question about the test run<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 15:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0520.php">Quincey Koziol: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Previous message:</strong> <a href="0518.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>In reply to:</strong> <a href="0518.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0517.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2010, at 2:48 PM, DongInn Kim wrote:
<br>
<span class="quotelev1">&gt; simple_first:tests = &amp;find_executables( \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_eventhandle_example&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_example_callback_unsubscribe&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_multiplecomp&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_notify_logger&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_pingpong&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_polling_logger&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_simple_publisher&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_simple_subscriber&quot;, \
</span><br>
<span class="quotelev1">&gt;                    &quot;ftb_watchdog&quot;)
</span><br>
<p>If you know the names of your tests, you don't need to use &amp;find_executables.  You can just list them, like:
<br>
<p>simple_first:tests = ftb_eventhandle_example ftb_example_callback_unsubscribe ...etc.
<br>
<p><span class="quotelev1">&gt; But I don't think that those example codes are called to run at the &quot;Test Run&quot; phase.
</span><br>
<p>Are you filling in an MPI details section for them?  That is specified all the way up in the MPI Get phase.
<br>
<p>The exec field in the MPI details section should have the template executable line (probably &amp;test_executable() will be the majority of that line...?).
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
<li><strong>Next message:</strong> <a href="0520.php">Quincey Koziol: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Previous message:</strong> <a href="0518.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>In reply to:</strong> <a href="0518.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0517.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
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
