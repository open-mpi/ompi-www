<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 15:01:01 2013" -->
<!-- isoreceived="20130820190101" -->
<!-- sent="Tue, 20 Aug 2013 12:00:56 -0700" -->
<!-- isosent="20130820190056" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..." -->
<!-- id="4DC6DA8B-44E1-4032-907F-C05EABDD15A6_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="69B021E7-BF40-41CE-902B-BCDD0737236D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 15:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12781.php">Christopher Samuel: "[OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Previous message:</strong> <a href="12779.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12771.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, please see r29052 - I believe this will address everyone's concerns. Please give it a test so we can verify it is clean - it worked for me, but I can't test all environments
<br>
<p><p>On Aug 20, 2013, at 7:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The error messages already output the name of the other proc, so that should be available. Besides, I just spent all yesterday afternoon auditing our MPI layers memory usage byte-by-byte and getting my ears burned about the need to reduce that footprint - not really thrilled about adding to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the key here is to only do this reduction when directed to do so. It only benefits really big scale, which is the exception and not the rule. And if someone in that scenario wants the error output, they can just ask for it (assuming their sys admin defaulted it to not include the hostname).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2013, at 3:18 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we don't want to lose the usefulness of the error messages (and don't care that much about the memory requirements), we can initialize this value with the string of the rank of the process in MPI_COMM_WORLD (instead of NULL). We will at least get an idea where to start looking in case of troubles &#133;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 20, 2013, at 04:20 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 19, 2013, at 6:07 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 19, 2013, at 8:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That's how it works now. My concern is with the error message scenario. IIRC, Jeff's issue was that the error message only contains the hostname of the proc that generates it - it doesn't tell you the hostname of the remote proc. Hence, we included that info in the proc_t.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is quite important for getting useful error messages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, IIRC we also provided an option to *not* send that info due to scaling concerns way back when. I wonder if we can resolve this simply by having Nathan set that option in his platform .conf files, and then removing ompi_proc_get_hostname completely. Since the IP-based comm channels will call modex_recv anyway, we'll get the hostname at that time. Otherwise, the errors print &quot;NULL&quot; for proc-&gt;hostname.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, that means that users of direct-launched apps on Nathan's systems will get less informative error messages - but they can always override Nathan's default param if they want better info. After all, the vast majority of users aren't running such big jobs as to care about this optimization.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm good with it.  It could also be (might already be) a run-time MCA param...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think it is - I'll check tonight
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We could also default the value to -1 (vs. 0 or 1), meaning: with np &lt;= N procs, send the hostname around, otherwise, don't send it (we can argue over the value of N -- e.g., 1024 or 2048).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That makes the most sense to me - for small jobs, the time difference is too tiny to measure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12781.php">Christopher Samuel: "[OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Previous message:</strong> <a href="12779.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12771.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
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
