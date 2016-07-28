<?
$subject_val = "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 09:15:49 2010" -->
<!-- isoreceived="20100517131549" -->
<!-- sent="Mon, 17 May 2010 09:15:44 -0400" -->
<!-- isosent="20100517131544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The&amp;quot; Missing Symbol&amp;quot; issue and OpenMPI on NetBSD" -->
<!-- id="13A5E4CD-E91F-45CA-B464-E621D417A6E3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0c65f3bed41f226054d1eb3654fe097a.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 09:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7943.php">Sylvain Jeaugey: "[OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7973.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7973.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 16, 2010, at 5:56 PM, &lt;Kevin.Buckley_at_[hidden]&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Have you tried building Open MPI with the --disable-dlopen configure flag?
</span><br>
<span class="quotelev2">&gt; &gt;  This will slurp all of OMPI's DSOs up into libmpi.so -- so there's no
</span><br>
<span class="quotelev2">&gt; &gt; dlopening at run-time.  Hence, your app (R) can dlopen libmpi.so, but then
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so doesn't dlopen anything else -- all of OMPI's plugins are
</span><br>
<span class="quotelev2">&gt; &gt; physically located in libmpi.so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given your reasoning, that's gotta be worth a shot: wilco.
</span><br>
<p>This issue has come up a few times on the list; I will add something to the FAQ about this.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7943.php">Sylvain Jeaugey: "[OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7973.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7973.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
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
