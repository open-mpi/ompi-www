<?
$subject_val = "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 16:57:04 2015" -->
<!-- isoreceived="20150224215704" -->
<!-- sent="Tue, 24 Feb 2015 21:57:03 +0000" -->
<!-- isosent="20150224215703" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?" -->
<!-- id="F25C4186-8957-457C-9C04-AF4AE0B1277B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1424812177880.48416_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 16:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26390.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26388.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2015, at 4:09 PM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you mean --disable-shared instead of --disable-dlopen?
</span><br>
<p>Ah, sorry -- my eyes read one thing, and my brain read another.  :-)
<br>
<p><span class="quotelev1">&gt; And I am still confused.  With &quot;--disable-shared&quot; I get a bigger static library than without it?
</span><br>
<p>I see that Libtool chooses to give slightly different command line arguments to the linker when we build --disable-shared vs. --enable-shared.  I assume there's some slight mojo difference in there; I wouldn't worry about it.
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
<li><strong>Next message:</strong> <a href="26390.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26388.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
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
