<?
$subject_val = "Re: [OMPI devel] XML output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 15:01:47 2009" -->
<!-- isoreceived="20090716190147" -->
<!-- sent="Thu, 16 Jul 2009 13:01:31 -0600" -->
<!-- isosent="20090716190131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML output" -->
<!-- id="D2256655-C191-4638-AF4D-FEC053292DE1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="73F5FA26-3690-4D55-A697-3A6F2A17CFC0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-07-16 15:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6457.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21703"</a>
<li><strong>Previous message:</strong> <a href="6455.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6460.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Greg
<br>
<p>Any way your user can send me the print statements? I can't find  
<br>
anything wrong with the code - I'm wondering if he has some non- 
<br>
printing character in there that is causing a problem.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jul 16, 2009, at 12:37 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Weird. It doesn't look like it is actually interleaving, does it? It  
</span><br>
<span class="quotelev1">&gt; looks more like a leading tag was incorrectly inserted between the m  
</span><br>
<span class="quotelev1">&gt; and i in &quot;mixing&quot; for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll take a look at the code to see what might have triggered that...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2009, at 12:16 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One of our users is seeing the following output with the XML option  
</span><br>
<span class="quotelev2">&gt;&gt; enabled (1.3.3):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;time_mix_freq =     17&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;Time m&lt;stdout rank=&quot;0&quot;&gt;ixing option:&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;  avgfit -- time averaging&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;  with timestep chosen to fit exactly into one day  
</span><br>
<span class="quotelev2">&gt;&gt; or coupling interval&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;Averaging time steps are at step numbers2,17 each  
</span><br>
<span class="quotelev2">&gt;&gt; day&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt; &lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears that the XML tags for the same task are being  
</span><br>
<span class="quotelev2">&gt;&gt; interleaved. Any idea if this is fixable?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
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
<li><strong>Next message:</strong> <a href="6457.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21703"</a>
<li><strong>Previous message:</strong> <a href="6455.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>In reply to:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6460.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
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
