<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 13:11:05 2006" -->
<!-- isoreceived="20060907171105" -->
<!-- sent="Thu, 07 Sep 2006 13:10:54 -0400" -->
<!-- isosent="20060907171054" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C125CADE.25C5A%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2E2C6A0B-1985-4B8A-B885-D1DA29FAE9D7_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 13:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/7/06 12:42 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I still wonder why we need any configuration &quot;magic&quot;. We don't want
</span><br>
<span class="quotelev1">&gt; to be the only one around supporting IPv4 OR IPv6. Supporting both of
</span><br>
<span class="quotelev1">&gt; them simultaneously can be interesting, and it does not require huge
</span><br>
<span class="quotelev1">&gt; changes. In fact, we have a problem only at the connection step,
</span><br>
<span class="quotelev1">&gt; everything else will be identically.
</span><br>
<p>The only configuration magic I'm talking about is adding relevant tests into
<br>
configure.m4 to test for the presence of IPv6 types/functions.  If they're
<br>
not there, then we need to #if out the relevant code in the components.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; In fact, as we're talking about the TCP layer, we might want to
</span><br>
<span class="quotelev1">&gt; finish the discussion we had a while ago, about merging the OOB and
</span><br>
<span class="quotelev1">&gt; the BTL in one component. They do have very similar functions, and
</span><br>
<span class="quotelev1">&gt; right now we have to maintain 2 components. I think it's more than
</span><br>
<span class="quotelev1">&gt; time to do the merge, and move the resulting component or whatever
</span><br>
<span class="quotelev1">&gt; down in the OPAL layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I even volunteer for that. Next week I will be away, so I will come
</span><br>
<span class="quotelev1">&gt; back with a design for the phone conference on ... well beginning of
</span><br>
<span class="quotelev1">&gt; october.
</span><br>
<p>Sounds good to me -- I'd be interested to see a design for such a beast.
<br>
There's a lot of implications, but can talk it over when you show the
<br>
design. :-)
<br>
&nbsp;
<br>
<pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1045.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1043.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1041.php">George Bosilca: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
