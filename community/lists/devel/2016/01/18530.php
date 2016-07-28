<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 12:03:15 2016" -->
<!-- isoreceived="20160126170315" -->
<!-- sent="Tue, 26 Jan 2016 17:03:13 +0000" -->
<!-- isosent="20160126170313" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="9AD11DC9-21C7-44DF-9FC6-2DBF0866E481_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16J5rxzb+Y8ytNtfeUQm6nCLbpkbnrAw0_wGSrNZSf=cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] tm-less tm module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 12:03:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18531.php">Geoffrey Paulsen: "[OMPI devel] Minutes from Telcon today"</a>
<li><strong>Previous message:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18522.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2016, at 6:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Excellent point about the --with-foo behavior.
</span><br>
<span class="quotelev1">&gt; If an admin knows what component name to grep for then they should &quot;--with-foo&quot; that component.
</span><br>
<span class="quotelev1">&gt; With language bindings the spelling is &quot;--enable-mpi-foo&quot;, but the principle is the same.
</span><br>
<span class="quotelev1">&gt; Adding new places to apply grep is entirely superfluous if use of those configure options is applied consistently/correctly.
</span><br>
<p>Agreed.  And it's not something that people frequently realize they can do; I get that.
<br>
<p><span class="quotelev1">&gt; Even so, if folks feel (as Nathan or Howard seem to) that a configure summary is useful, then I can't see any *harm* in adding it.
</span><br>
<span class="quotelev1">&gt; Since once the build is complete ompi_info can tell one essentially everything about the build, I don't think Jeff's &quot;slippery slope&quot;/&quot;eye chart&quot; concern is a real problem - the summary (if any) would remain very high level (such as a list of configured components and language bindings).
</span><br>
<p>Keep in mind:
<br>
<p>-----
<br>
$ l -d */mca/* | grep '^d' | wc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;67     603    4492
<br>
$ l -d */mca/*/* | grep '^d' | wc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;291    2619   21498
<br>
-----
<br>
<p>We have ~65 types of components (there's multiple &quot;common&quot;s), and 291 components.  I'm not sure how to show a summary of them.
<br>
<p>If people want to print a summary at the end of configure, that's fine.  But one of the mails said that we want to show schedulers and networks (today).  I think that covers the following frameworks:
<br>
<p>ras, plm, pml, mtl, btl, oob
<br>
<p>Can someone propose/mock up an output could look like using the real framework and component names?
<br>
<p><span class="quotelev1">&gt; If at the end of this line of discussion no new summary output is to be generated, then I stand my original proposal of having &quot;make install&quot; print a suggestion that admins run ompi_info to double-check what they have built/installed.
</span><br>
<span class="quotelev1">&gt; That helps the admin who doesn't know the name of the component for passing --with-foo, but might recognize it when they see it (e.g. &quot;ofi&quot;-vs-&quot;libfabric&quot;, &quot;verbs&quot;-vs-&quot;ibv&quot;, or &quot;pbs&quot;-vs-&quot;tm&quot;).
</span><br>
<p>I have no problem with that.
<br>
<p>(...I actually meant to send this last night and forgot...  But it's ok, because we talked about this topic on the Tuesday telecom, and decided to keep thinking about it -- whatever solution we come up with will likely need to be a bit creative.  Probably a good topic for the Dallas face-to-face meeting: <a href="https://github.com/open-mpi/ompi/wiki/Meeting-2016-02">https://github.com/open-mpi/ompi/wiki/Meeting-2016-02</a>)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18531.php">Geoffrey Paulsen: "[OMPI devel] Minutes from Telcon today"</a>
<li><strong>Previous message:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18522.php">Paul Hargrove: "Re: [OMPI devel] tm-less tm module"</a>
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
