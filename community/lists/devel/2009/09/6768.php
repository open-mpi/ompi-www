<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 09:11:55 2009" -->
<!-- isoreceived="20090904131155" -->
<!-- sent="Fri, 04 Sep 2009 15:06:04 +0200" -->
<!-- isosent="20090904130604" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="1252069564.2636.280.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="alpine.DEB.2.00.0909041346190.31624_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 09:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6769.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Previous message:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>In reply to:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-09-04 at 13:55 +0200, Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; On Fri, 4 Sep 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I haven't looked at the code deeply, so forgive me if I'm parsing this wrong: 
</span><br>
<span class="quotelev2">&gt; &gt; is the code actually reading the file into one list and then moving the 
</span><br>
<span class="quotelev2">&gt; &gt; values to another list?  If so, that seems a little hackish.  Can't it just 
</span><br>
<span class="quotelev2">&gt; &gt; read directly to the target list?
</span><br>
<span class="quotelev1">&gt; On the basic approach, I would have another suggestion, reducing parsing 
</span><br>
<span class="quotelev1">&gt; and maybe a bit less hackish : do not introduce another file but only a 
</span><br>
<span class="quotelev1">&gt; keyword indicating that further overriding is disabled (&quot;fixed&quot;, 
</span><br>
<span class="quotelev1">&gt; &quot;restricted&quot;, &quot;read-only&quot; ?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You would therefore write in your configuration file something like:
</span><br>
<span class="quotelev1">&gt; notifier_threshold_severity=notice fixed
</span><br>
<span class="quotelev1">&gt; or more generally :
</span><br>
<span class="quotelev1">&gt; key=value flags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe we don't have a way to differenciate flags at the end with the 
</span><br>
<span class="quotelev1">&gt; current parser, so maybe a leading &quot;!&quot; or &quot;%&quot; or any other strong 
</span><br>
<span class="quotelev1">&gt; character would be simpler to implement while still ensuring 
</span><br>
<span class="quotelev1">&gt; retro-compatibility.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Sylvain,
<br>
<p>The current parser eats up all characters after the &quot;=&quot;: everything that
<br>
is between the &quot;=&quot; and the eol is considered as the paramter's value.
<br>
So the second approach you're proposing seems better to me.
<br>
<p>But if we do this, the extesension I proposed in my RFC will be harder
<br>
to implement:
<br>
<p>============
<br>
This new functionality can be extended in the future in the following
<br>
way: allow the administrator to specify boundaries within which an MCA
<br>
parameter is allowed to be changed by a higher priority setting. This
<br>
means that the administrator should declare min and max values (or even
<br>
a set of discrete values) for any such parameter. Then, any higher
<br>
priority setting will be done only if the new value belongs to the
<br>
declared set.
<br>
============
<br>
<p>But actually, may be that extension is not desirable at all. In that
<br>
case, I agree that your prposal is a very good compromise:
<br>
. single parser (though it should be enhanced)
<br>
. single configuration file
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6769.php">Ralph Castain: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Previous message:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>In reply to:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
