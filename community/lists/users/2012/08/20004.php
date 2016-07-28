<?
$subject_val = "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 18:28:00 2012" -->
<!-- isoreceived="20120824222800" -->
<!-- sent="Fri, 24 Aug 2012 18:27:55 -0400" -->
<!-- isosent="20120824222755" -->
<!-- name="Shanthini Kannan" -->
<!-- email="shanthinick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed" -->
<!-- id="CACY7q+mOR46qL4oROFOf4FRMLQR8FpK3NGpcyX_hcFvTad5YFg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="190F69E9-C73F-427E-AB25-276467F1593F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed<br>
<strong>From:</strong> Shanthini Kannan (<em>shanthinick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 18:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20005.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>In reply to:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20005.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Reply:</strong> <a href="20005.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had the OMPI lib directory added in /etc/ld.so.conf.
<br>
I also added it in LD_LIBRARY_PATH, but it made no difference.
<br>
When I call mpirun, should I specify the MCA in command-line?
<br>
Thanks!
<br>
<p>On Fri, Aug 24, 2012 at 2:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I suspect your LD_LIBRARY_PATH doesn't include the OMPI lib location
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2012, at 10:58 AM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am running mpptest over Open MPI (v1.5.4).
</span><br>
<span class="quotelev1">&gt; I get the following error saying component &quot;env&quot; in Framework &quot;ess&quot; is not
</span><br>
<span class="quotelev1">&gt; found. Am I missing something?  I am new to MPI and any help you can offer
</span><br>
<span class="quotelev1">&gt; is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      AV8
</span><br>
<span class="quotelev1">&gt; Framework: ess
</span><br>
<span class="quotelev1">&gt; Component: env
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [AV8:05354] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 120
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_ess_base_open failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Shanthini
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20005.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>In reply to:</strong> <a href="20003.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20005.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Reply:</strong> <a href="20005.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
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
