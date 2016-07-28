<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  1 12:21:15 2006" -->
<!-- isoreceived="20060901162115" -->
<!-- sent="Fri, 1 Sep 2006 18:21:36 +0200" -->
<!-- isosent="20060901162136" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="20060901162136.GO6454_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C11D8B45.3B17%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-01 12:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1026.php">Ben Byer: "[OMPI devel] include file locations"</a>
<li><strong>Previous message:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 01, 2006 at 07:01:25AM -0600, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Do you agree to go on with two oob components, tcp and tcp6?
</span><br>
<span class="quotelev1">&gt; Yes, I think that's the right approach
</span><br>
<p>It's a deal. ;)
<br>
<p><span class="quotelev1">&gt; I think this can be supported nicely in the framework system. All we
</span><br>
<span class="quotelev1">&gt; have to do is set the IPv6 component's priority higher than IPv4.
</span><br>
<p>Do you mean that priority?:
<br>
<p>&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp6_priority&quot; (current value: &quot;0&quot;)
<br>
<p><p><span class="quotelev1">&gt; We then can deal with the &quot;try IPv6 first&quot; by traversing the component
</span><br>
<span class="quotelev1">&gt; list in priority order. As an example, see the RAS framework.
</span><br>
<p>Where is it done? It's outside the mca/oob directory, right?
<br>
My knowledge about orte is currently more or less limited to
<br>
this subdirectory ;)
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; it. In this case, we need both OOB components active, and we need a routing
</span><br>
<span class="quotelev1">&gt; table that tells us which one to use to talk to various processes. I suspect
</span><br>
<span class="quotelev1">&gt; the routing table belongs in the RML framework. If you look at the PLS
</span><br>
<span class="quotelev1">&gt; framework, you'll see where we &quot;front&quot; the select function to give you the
</span><br>
<span class="quotelev1">&gt; ability to specify a preferred selection. We might have to do the same thing
</span><br>
<span class="quotelev1">&gt; with the OOB to allow the RML to say &quot;send this buffer using this specific
</span><br>
<span class="quotelev1">&gt; OOB component&quot;, while still allowing it to say &quot;send this buffer using the
</span><br>
<span class="quotelev1">&gt; *best* component&quot;.
</span><br>
<p>Sounds good (but I don't have to do it on my own, do I?).
<br>
<p>Right now it looks like this:
<br>
<p>&nbsp;&nbsp;&nbsp;orterun -np 2 -host hostA,hostB some_command
<br>
<p>uses IPv4 and it is still working.
<br>
<p>&nbsp;&nbsp;&nbsp;orterun -mca oob ^tcp hostA,hostB some_command
<br>
<p>hangs. The HNP correctly generated the tcp6://-URIs, but I guess
<br>
the remote node tries to connect with its oob/tcp module (which
<br>
cannot handle IPv6 anymore).
<br>
<p>So I chmod 0 the mca_oob_tcp.so to prevent its loading, thus resulting
<br>
in a working IPv6 connection.
<br>
<p>(for now, I don't know why this happens (the hang), but at least
<br>
&nbsp;the oob/tcp6 component is working at all)
<br>
<p><span class="quotelev1">&gt; I suspect that backend processes (i.e., non-HNP processes) really will
</span><br>
<span class="quotelev1">&gt; only use one or the other.
</span><br>
<p>The question also arises for the btl/tcp component: if all nodes
<br>
should be able to communicate with each other, they must use the
<br>
same address family.
<br>
<p><p>Thanks for your help.
<br>
<p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Person1: Geil. Morgen um 9 muss ich Pr&#228;sentation halten. &#214;RKS!
Person2: Morgen um 9 werde ich eine Kaffeetasse halten.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1026.php">Ben Byer: "[OMPI devel] include file locations"</a>
<li><strong>Previous message:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
