<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 10:29:03 2010" -->
<!-- isoreceived="20101202152903" -->
<!-- sent="Thu, 2 Dec 2010 10:28:58 -0500" -->
<!-- isosent="20101202152858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="72A81386-8444-409F-89BC-C422541CD496_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1291281923.2480.75.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] SWIG bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 10:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1654.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks great!  Probably much better than SWIG-based bindings that I would have come up with.
<br>
<p>One question: is there any value in having the $topology be a hash of public values instead of using the hwloc_get_obj_data() method?  I ask because in all the perl scripty-foo that I've written that parses &quot;lstopo -.xml&quot;, having the entire data structure available as a big hash has turned out to be quite useful, particularly on some heterogeneous development machines where the hwloc accessor functions can be misleading, or may require more logic than just trawling the data tree directly.
<br>
<p><p><p>On Dec 2, 2010, at 4:25 AM, Bernd Kallies wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a perl-wrapper lib for hwloc based on hwloc-1.0.2. It is written
</span><br>
<span class="quotelev1">&gt; manually because of the pointer things. However, the lib is not
</span><br>
<span class="quotelev1">&gt; complete. I use it mainly for discovering topologies. Supporting pinning
</span><br>
<span class="quotelev1">&gt; does not make sense for perl scripts to my opinion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm thinking about either submitting this to CPAN or to the hwloc dev
</span><br>
<span class="quotelev1">&gt; team. However, I first wanted to wait how things with hwloc 1.1 will
</span><br>
<span class="quotelev1">&gt; look, when the dust has settled somehow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any hints or ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached you find the man page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2010-11-30 at 11:07 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Would anyone object if I take a whack at making some SWIG bindings for hwloc?  I'm thinking specifically for perl (because that's my scripting language of choice), but I could probably be convinced to look at python as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (this would be for 1.2 at the earliest -- definitely not for 1.1)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Bernd Kallies
</span><br>
<span class="quotelev1">&gt; Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
</span><br>
<span class="quotelev1">&gt; Takustr. 7
</span><br>
<span class="quotelev1">&gt; 14195 Berlin
</span><br>
<span class="quotelev1">&gt; Tel: +49-30-84185-270
</span><br>
<span class="quotelev1">&gt; Fax: +49-30-84185-311
</span><br>
<span class="quotelev1">&gt; e-mail: kallies_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;Hwloc.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1654.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
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
