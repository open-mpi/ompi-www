<?
$subject_val = "Re: [hwloc-devel] Priority of env vars vs. application options";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 09:16:30 2009" -->
<!-- isoreceived="20091028131630" -->
<!-- sent="Wed, 28 Oct 2009 09:16:26 -0400" -->
<!-- isosent="20091028131626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Priority of env vars vs. application options" -->
<!-- id="9A3257D6-3CFF-4DAE-AAD0-6A8A7F0AA8F4_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091027233836.GH4661_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Priority of env vars vs. application options<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 09:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That seems quite confusing.
<br>
<p>I would think that consistency across all tools is best:
<br>
<p>- command line
<br>
- env variable
<br>
- compiled-in defaults
<br>
<p>If you're in an environment where you can't pass command line options,  
<br>
then use the environment (either explicitly set or unset it).
<br>
<p>Just my $0.02...
<br>
<p><p>On Oct 27, 2009, at 7:38 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Wed 28 Oct 2009 00:04:48 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; So I am not sure which order is the best.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe provide the two possibilities, i.e. two series of en vars, one
</span><br>
<span class="quotelev1">&gt; that comes before the application configuration and the other that  
</span><br>
<span class="quotelev1">&gt; comes
</span><br>
<span class="quotelev1">&gt; after?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0266.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
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
