<?
$subject_val = "Re: [MTT devel] Detail link error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 17:22:43 2015" -->
<!-- isoreceived="20150821212243" -->
<!-- sent="Fri, 21 Aug 2015 16:22:41 -0500" -->
<!-- isosent="20150821212241" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Detail link error" -->
<!-- id="CAANzjEnoV=xTDsN56SdD95k+qp7Eebqt_DT_ZRz9PXcSSaqaVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201508212050.t7LKouLa031919_at_d03av03.boulder.ibm.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Detail link error<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-21 17:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Josh Hursey: "[MTT devel] MTT DB Archive 2011-2013"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Geoffrey Paulsen: "[MTT devel] Detail link error"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Geoffrey Paulsen: "[MTT devel] Detail link error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report.
<br>
<p>This is a known problem with our aging Reporter interface and large
<br>
queries. PHP has a memory limit that we set, and large queries sometimes
<br>
exceed that. There is some work on a new Reporter that should avoid this
<br>
issue.
<br>
<p>In the mean time, you need to reduce the size of the original query using
<br>
the Summary view before moving to the Detail view.
<br>
<p><p>On Fri, Aug 21, 2015 at 3:50 PM, Geoffrey Paulsen &lt;gpaulsen_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; At
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?&amp;text_start_timestamp=past+24+hours&amp;show_start_timestamp=show&amp;text_http_username=all&amp;show_http_username=show&amp;text_local_username=all&amp;show_local_username=hide&amp;text_platform_name=all&amp;show_platform_name=show&amp;text_platform_hardware">http://mtt.open-mpi.org/index.php?&amp;text_start_timestamp=past+24+hours&amp;show_start_timestamp=show&amp;text_http_username=all&amp;show_http_username=show&amp;text_local_username=all&amp;show_local_username=hide&amp;text_platform_name=all&amp;show_platform_name=show&amp;text_platform_hardware</a>=all&amp;show_platform_hardware=show&amp;text_os_name=all&amp;show_os_name=show&amp;text_mpi_name=all&amp;show_mpi_name=show&amp;text_mpi_version=all&amp;show_mpi_version=show&amp;text_suite_name=all&amp;show_suite_name=show&amp;text_test_name=all&amp;show_test_name=hide&amp;text_np=all&amp;show_np=show&amp;text_full_command=&amp;show_full_command=show&amp;phase=test_run&amp;text_trial=
</span><br>
<span class="quotelev1">&gt; If I click on Details, I get:
</span><br>
<span class="quotelev1">&gt; Fatal error: Allowed memory size of 67108864 bytes exhausted (tried to
</span><br>
<span class="quotelev1">&gt; allocate 80 bytes) in /nfs/data/osl/www/
</span><br>
<span class="quotelev1">&gt; mtt.open-mpi.org/reporter/dashboard.inc on line 267
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Geoffrey Paulsen
</span><br>
<span class="quotelev1">&gt; Software Engineer, IBM Platform MPI
</span><br>
<span class="quotelev1">&gt; IBM Platform-MPI
</span><br>
<span class="quotelev1">&gt; Phone: 720-349-2832
</span><br>
<span class="quotelev1">&gt; Email: gpaulsen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.ibm.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/08/0651.php">http://www.open-mpi.org/community/lists/mtt-devel/2015/08/0651.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Josh Hursey: "[MTT devel] MTT DB Archive 2011-2013"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Geoffrey Paulsen: "[MTT devel] Detail link error"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Geoffrey Paulsen: "[MTT devel] Detail link error"</a>
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
