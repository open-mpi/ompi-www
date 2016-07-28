<?
$subject_val = "Re: [OMPI devel] XML output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 19:00:44 2009" -->
<!-- isoreceived="20090720230044" -->
<!-- sent="Mon, 20 Jul 2009 16:00:36 -0700" -->
<!-- isosent="20090720230036" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML output" -->
<!-- id="646A9F29-9C33-4915-9505-309654424B5B_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="51D01B4F-002C-4B20-B062-4CEE0AEC55FD_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 19:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6469.php">Jeff Squyres: "[OMPI devel] cross-complie changes"</a>
<li><strong>Previous message:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6460.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>This is working well in trunk. If it can go into 1.3.4 that would be  
<br>
great.
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<p>On Jul 16, 2009, at 10:05 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Okay, this is fixed in r21706 on the trunk. I will request it be  
</span><br>
<span class="quotelev1">&gt; pushed into 1.3.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for catching the problem.
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="6469.php">Jeff Squyres: "[OMPI devel] cross-complie changes"</a>
<li><strong>Previous message:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6460.php">Ralph Castain: "Re: [OMPI devel] XML output"</a>
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
