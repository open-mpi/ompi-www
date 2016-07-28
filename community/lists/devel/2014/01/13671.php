<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 23:56:12 2014" -->
<!-- isoreceived="20140110045612" -->
<!-- sent="Thu, 9 Jan 2014 20:56:11 -0800" -->
<!-- isosent="20140110045611" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure" -->
<!-- id="CAAvDA15SjK+fitE6ii-z3CDG0OB6OTkmveXFrfsnvRX5+CGnxw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD12AF5E-9C17-4AB0-B5D6-C360600E3F2C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-09 23:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13672.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13670.php">Ralph Castain: "Re: [OMPI devel] MX and PSM in 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13673.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13673.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13678.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The problem has occurred with two builds (both PGI-based) on head nodes of
<br>
two clusters managed by TORQUE, not by SLURM.  Somehow configure on the
<br>
first picked up SLURM headers and libs, but not TM.  While the second
<br>
picked up the TM headers and libs.
<br>
<p>I'll try a gcc-based build on one of the systems ASAP.
<br>
Is there no way (w/o source mods) to know what datum is missing?
<br>
<p>-Paul
<br>
<p><p><p>On Thu, Jan 9, 2014 at 8:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From your ompi_info output, it looks like this is a slurm system - yes?
</span><br>
<span class="quotelev1">&gt; Wouldn't really matter anyway as we run fine on a head node without an
</span><br>
<span class="quotelev1">&gt; allocation, but worth clarifying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What the message is indicating is a failure of the modex - we are missing
</span><br>
<span class="quotelev1">&gt; an expected piece of data. I don't see anything obvious as the source of
</span><br>
<span class="quotelev1">&gt; the problem - works fine for me on all my machines, including on front end
</span><br>
<span class="quotelev1">&gt; of a slurm cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only possibly relevant thing I see is that this was built with PGI - any
</span><br>
<span class="quotelev1">&gt; chance you could try a gcc based build? All my tests are done with gcc, so
</span><br>
<span class="quotelev1">&gt; I'm wondering if PGI is the source of the trouble here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 6:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've now seen this same failure mode on another Linux system.
</span><br>
<span class="quotelev1">&gt; I forgot to mention before that the job is hung after issuing the error
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; Singleton runs fail in the same manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both are front-end machines and perhaps that is related to this failure;
</span><br>
<span class="quotelev1">&gt; for instance expecting an allocation because of the batch system detected
</span><br>
<span class="quotelev1">&gt; at configure time.  However, I would have expected a more informative error
</span><br>
<span class="quotelev1">&gt; message for that case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 5:03 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Trying to run on the front-end of one of our production Linux systems I
</span><br>
<span class="quotelev2">&gt;&gt; see the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:17692] [[42051,1],0] ORTE_ERROR_LOG: Data for specified key not
</span><br>
<span class="quotelev2">&gt;&gt; found in file
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-12.8/openmpi-1.7.4rc2r30168/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 505
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc01:17693] [[42051,1],1] ORTE_ERROR_LOG: Data for specified key not
</span><br>
<span class="quotelev2">&gt;&gt; found in file
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-12.8/openmpi-1.7.4rc2r30168/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 505
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;ompi_info --all&quot; output is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know what MCA param(s) to set to collect any additional
</span><br>
<span class="quotelev2">&gt;&gt; info needed to track down the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13672.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13670.php">Ralph Castain: "Re: [OMPI devel] MX and PSM in 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13673.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13673.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13678.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
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
