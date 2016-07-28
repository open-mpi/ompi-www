<?
$subject_val = "Re: [OMPI devel] Improvement of openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 10:15:02 2009" -->
<!-- isoreceived="20090806141502" -->
<!-- sent="Thu, 6 Aug 2009 10:14:56 -0400" -->
<!-- isosent="20090806141456" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improvement of openmpi.spec" -->
<!-- id="E745837A-2209-4929-B337-45D14E306415_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0908061541430.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Improvement of openmpi.spec<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 10:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2009, at 9:49 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev2">&gt; &gt; -Source: openmpi-%{version}.tar.$EXTENSION
</span><br>
<span class="quotelev2">&gt; &gt; +Source: %{name}-%{version}.tar.$EXTENSION
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does this mean that you're looking for a different tarball name?   
</span><br>
<span class="quotelev1">&gt; I'm not
</span><br>
<span class="quotelev2">&gt; &gt; sure that's good; the tarball should be an openmpi tarball,  
</span><br>
<span class="quotelev1">&gt; regardless of
</span><br>
<span class="quotelev2">&gt; &gt; what name it gets installed under (e.g., OFED builds an OMPI  
</span><br>
<span class="quotelev1">&gt; tarball 3-4
</span><br>
<span class="quotelev2">&gt; &gt; different ways [one for each compiler] and changes %name, but uses  
</span><br>
<span class="quotelev1">&gt; the same
</span><br>
<span class="quotelev2">&gt; &gt; tarball.  How about another param (hey, we've got something like  
</span><br>
<span class="quotelev1">&gt; 100, so
</span><br>
<span class="quotelev2">&gt; &gt; what's 101? ;-) ) for the tarball that defaults to &quot;openmpi&quot;?   
</span><br>
<span class="quotelev1">&gt; They if you
</span><br>
<span class="quotelev2">&gt; &gt; want to have a differently-named tarball, you can.
</span><br>
<span class="quotelev1">&gt; Well, maybe we could live with an openmpi tarball ... it was just to  
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; consistent. When I build bullmpi-a.b.c.src.rpm, I somehow expect the  
</span><br>
<span class="quotelev1">&gt; tar
</span><br>
<span class="quotelev1">&gt; file to be bullmpi-a.b.c.tar.gz.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not opposed to having another variable to set the name of the  
<br>
tarball if you want it.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="6603.php">Bogdan Costescu: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
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
