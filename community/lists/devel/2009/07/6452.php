<?
$subject_val = "Re: [OMPI devel] XML output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 14:37:26 2009" -->
<!-- isoreceived="20090716183726" -->
<!-- sent="Thu, 16 Jul 2009 12:37:10 -0600" -->
<!-- isosent="20090716183710" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML output" -->
<!-- id="73F5FA26-3690-4D55-A697-3A6F2A17CFC0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5F75D76D-5642-45E1-9A50-823EC33996E9_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML output<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 14:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Previous message:</strong> <a href="6451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6450.php">Greg Watson: "[OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Reply:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird. It doesn't look like it is actually interleaving, does it? It  
<br>
looks more like a leading tag was incorrectly inserted between the m  
<br>
and i in &quot;mixing&quot; for some reason.
<br>
<p>I'll take a look at the code to see what might have triggered that...
<br>
<p>On Jul 16, 2009, at 12:16 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of our users is seeing the following output with the XML option  
</span><br>
<span class="quotelev1">&gt; enabled (1.3.3):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;time_mix_freq =     17&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;Time m&lt;stdout rank=&quot;0&quot;&gt;ixing option:&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;  avgfit -- time averaging&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;  with timestep chosen to fit exactly into one day  
</span><br>
<span class="quotelev1">&gt; or coupling interval&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;Averaging time steps are at step numbers2,17 each  
</span><br>
<span class="quotelev1">&gt; day&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt; &lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that the XML tags for the same task are being  
</span><br>
<span class="quotelev1">&gt; interleaved. Any idea if this is fixable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6453.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Previous message:</strong> <a href="6451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6450.php">Greg Watson: "[OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Reply:</strong> <a href="6456.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
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
