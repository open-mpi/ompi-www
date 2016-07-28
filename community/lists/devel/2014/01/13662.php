<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 21:17:19 2014" -->
<!-- isoreceived="20140110021719" -->
<!-- sent="Thu, 9 Jan 2014 18:17:18 -0800" -->
<!-- isosent="20140110021718" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure" -->
<!-- id="CAAvDA147SJk0PR8mZdFyv0BbLjTjdB6joe0Tmm2kJD-ckrE9XQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16uAdJwMJtHUb5gQfDURSXzrKf0O8u_NAxt9ooQJSS7zQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 21:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13661.php">Paul Hargrove: "[OMPI devel] MX and PSM in 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13655.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've now seen this same failure mode on another Linux system.
<br>
I forgot to mention before that the job is hung after issuing the error
<br>
message.
<br>
Singleton runs fail in the same manner.
<br>
<p>Both are front-end machines and perhaps that is related to this failure;
<br>
for instance expecting an allocation because of the batch system detected
<br>
at configure time.  However, I would have expected a more informative error
<br>
message for that case.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 9, 2014 at 5:03 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Trying to run on the front-end of one of our production Linux systems I
</span><br>
<span class="quotelev1">&gt; see the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev1">&gt; [cvrsvc01:17692] [[42051,1],0] ORTE_ERROR_LOG: Data for specified key not
</span><br>
<span class="quotelev1">&gt; found in file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-12.8/openmpi-1.7.4rc2r30168/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev1">&gt; at line 505
</span><br>
<span class="quotelev1">&gt; [cvrsvc01:17693] [[42051,1],1] ORTE_ERROR_LOG: Data for specified key not
</span><br>
<span class="quotelev1">&gt; found in file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-12.8/openmpi-1.7.4rc2r30168/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev1">&gt; at line 505
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;ompi_info --all&quot; output is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know what MCA param(s) to set to collect any additional info
</span><br>
<span class="quotelev1">&gt; needed to track down the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13662/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13661.php">Paul Hargrove: "[OMPI devel] MX and PSM in 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13655.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
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
