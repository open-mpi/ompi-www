<?
$subject_val = "[OMPI devel] XML output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 14:16:49 2009" -->
<!-- isoreceived="20090716181649" -->
<!-- sent="Thu, 16 Jul 2009 14:16:44 -0400" -->
<!-- isosent="20090716181644" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] XML output" -->
<!-- id="5F75D76D-5642-45E1-9A50-823EC33996E9_at_computer.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] XML output<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 14:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Previous message:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Reply:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Reply:</strong> <a href="6460.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>One of our users is seeing the following output with the XML option  
<br>
enabled (1.3.3):
<br>
<p>&lt;stdout rank=&quot;0&quot;&gt;time_mix_freq =     17&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;0&quot;&gt;Time m&lt;stdout rank=&quot;0&quot;&gt;ixing option:&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;0&quot;&gt;  avgfit -- time averaging&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;0&quot;&gt;  with timestep chosen to fit exactly into one day or  
<br>
coupling interval&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;0&quot;&gt;Averaging time steps are at step numbers2,17 each  
<br>
day&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;0&quot;&gt; &lt;/stdout&gt;
<br>
<p>It appears that the XML tags for the same task are being interleaved.  
<br>
Any idea if this is fixable?
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21698"</a>
<li><strong>Previous message:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Reply:</strong> <a href="6452.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<li><strong>Reply:</strong> <a href="6460.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
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
