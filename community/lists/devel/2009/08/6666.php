<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 23:17:09 2009" -->
<!-- isoreceived="20090818031709" -->
<!-- sent="Mon, 17 Aug 2009 21:16:56 -0600" -->
<!-- isosent="20090818031656" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="81D64E99-6C3C-4633-81BD-5D90F57B5443_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="31E3666D-7C27-4A97-B58D-A8B12ED356BD_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML request<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 23:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6671.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6671.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6673.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be done on trunk with r21826 - would you please give it a try  
<br>
and let me know if that meets requirements? If so, I'll move it to  
<br>
1.3.4.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 17, 2009, at 6:42 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, you'd just need issue the start tag prior to any other XML  
</span><br>
<span class="quotelev1">&gt; output, then the end tag when it's guaranteed all XML other output  
</span><br>
<span class="quotelev1">&gt; has been sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 17, 2009, at 7:44 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All things are possible - some just a tad more painful than others.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like you want the mpirun tags to flow around all output  
</span><br>
<span class="quotelev2">&gt;&gt; during the run - i.e., there is only one pair of mpirun tags that  
</span><br>
<span class="quotelev2">&gt;&gt; surround anything that might come out of the job. True?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, that would be trivial.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 14, 2009, at 9:25 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be possible to get mpirun to issue start and end tags if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the -xml option is used? Currently there is no way to determine  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the output starts and finishes, which makes parsing the XML  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tricky, particularly if something else generates output (e.g. the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell). Something like this would be ideal:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stdout&gt;...&lt;/stdout&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stderr&gt;...&lt;/stderr&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we could get it in 1.3.4 even better. :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6671.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6671.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6673.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
