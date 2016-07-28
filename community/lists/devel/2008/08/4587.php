<?
$subject_val = "Re: [OMPI devel] memcpy MCA framework";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 11:29:13 2008" -->
<!-- isoreceived="20080818152913" -->
<!-- sent="Mon, 18 Aug 2008 17:29:07 +0200 (CEST)" -->
<!-- isosent="20080818152907" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memcpy MCA framework" -->
<!-- id="Pine.LNX.4.64.0808181715140.7264_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="04541B28-4375-4EDE-87C8-E3C2D52C641C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memcpy MCA framework<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 11:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4588.php">Bogdan Costescu: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4586.php">Ralph Castain: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; We don't really need a finer grain knowledge about the processor at 
</span><br>
<span class="quotelev1">&gt; compile time.
</span><br>
<p>There are some other open-source projects which have already done 
<br>
something very similar if not identical; one of them is the media 
<br>
player mplayer (<a href="http://www.mplayerhq.hu/">http://www.mplayerhq.hu/</a>). Why not using these as 
<br>
starting points ?
<br>
<p><span class="quotelev1">&gt; The second question is how and when to figure out which of the 
</span><br>
<span class="quotelev1">&gt; available memcpy functions give the best performance.
</span><br>
<p>This depends a lot on whether the job has the nodes all by itself or 
<br>
the nodes are shared with other jobs - if so, the data transfer 
<br>
between CPU and RAM while benchmarking can be significantly skewed.
<br>
<p><span class="quotelev1">&gt; On a homogeneous architecture, this might be a one node selection [I 
</span><br>
<span class="quotelev1">&gt; don't imagine using the modex to spread this information]
</span><br>
<p>Hmm, doesn't sound nice to have n-1 nodes waiting while 1 node does 
<br>
the test. Maybe run it on all nodes and compare results ? And warn the 
<br>
user if different mempcy versions would be chosen..
<br>
<p><span class="quotelev1">&gt; The really annoying thing here, is that in the best case [in a 
</span><br>
<span class="quotelev1">&gt; perfect world] this should be done once per cluster.
</span><br>
<p>... and, in the view of node sharing pointed above, when the 
<br>
benchmarking can have the nodes all by itself. This sounds very much 
<br>
like the collectives tuning, with MCA params to give the admin or user 
<br>
view of how the best performance can be achieved.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4588.php">Bogdan Costescu: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4586.php">Ralph Castain: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
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
