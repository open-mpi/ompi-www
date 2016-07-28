<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 07:46:40 2009" -->
<!-- isoreceived="20090817114640" -->
<!-- sent="Mon, 17 Aug 2009 05:44:12 -0600" -->
<!-- isosent="20090817114412" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="535CA1D6-5F4F-4BF3-8C49-04470C3A110C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0090A097-56E1-4AAB-935D-49385AAF8E06_at_computer.org" -->
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
<strong>Date:</strong> 2009-08-17 07:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All things are possible - some just a tad more painful than others.
<br>
<p>It looks like you want the mpirun tags to flow around all output  
<br>
during the run - i.e., there is only one pair of mpirun tags that  
<br>
surround anything that might come out of the job. True?
<br>
<p>If so, that would be trivial.
<br>
<p>On Aug 14, 2009, at 9:25 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it be possible to get mpirun to issue start and end tags if  
</span><br>
<span class="quotelev1">&gt; the -xml option is used? Currently there is no way to determine when  
</span><br>
<span class="quotelev1">&gt; the output starts and finishes, which makes parsing the XML tricky,  
</span><br>
<span class="quotelev1">&gt; particularly if something else generates output (e.g. the shell).  
</span><br>
<span class="quotelev1">&gt; Something like this would be ideal:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev1">&gt; &lt;map&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; &lt;/map&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout&gt;...&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;...&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we could get it in 1.3.4 even better. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6645.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
