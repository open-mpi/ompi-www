<?
$subject_val = "Re: [OMPI devel] modex getting corrupted";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 20:38:32 2016" -->
<!-- isoreceived="20160522003832" -->
<!-- sent="Sat, 21 May 2016 17:38:19 -0700" -->
<!-- isosent="20160522003819" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] modex getting corrupted" -->
<!-- id="A43CC069-7096-458D-BFFD-58CDED16C567_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDg7MomwOWT8VO366qGh30ddgW3qBE0L=zs+ucCkOhf1_Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] modex getting corrupted<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 20:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Previous message:</strong> <a href="19018.php">Paul Hargrove: "[OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>In reply to:</strong> <a href="19012.php">dpchoudh .: "[OMPI devel] modex getting corrupted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Reply:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please provide the exact code used for both send/recv - you likely have an error in the syntax
<br>
<p><p><span class="quotelev1">&gt; On May 20, 2016, at 9:36 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a naive question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My 'cluster' consists of two nodes, connected back to back with a proprietary link as well as GbE (over a switch).
</span><br>
<span class="quotelev1">&gt; I am calling OPAL_MODEX_SEND() and the modex consists of just this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct modex
</span><br>
<span class="quotelev1">&gt; {char name[20], unsigned mtu};
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mtu field is not currently being used. I bzero() the struct and have verified that the value being written to the 'name' field (this is similar to a PKEY for infiniband; the driver will translate this to a unique integer) is correct at the sending end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I do a OPAL_MODEX_RECV(), the value is completely corrupted. However, the size of the modex message is still correct (24 bytes)
</span><br>
<span class="quotelev1">&gt; What could I be doing wrong? (Both nodes are little endian x86_64 machines)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19012.php">http://www.open-mpi.org/community/lists/devel/2016/05/19012.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19019/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Previous message:</strong> <a href="19018.php">Paul Hargrove: "[OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>In reply to:</strong> <a href="19012.php">dpchoudh .: "[OMPI devel] modex getting corrupted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Reply:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
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
