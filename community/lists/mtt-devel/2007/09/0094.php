<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 10:50:36 2007" -->
<!-- isoreceived="20070911145036" -->
<!-- sent="Tue, 11 Sep 2007 10:50:32 -0400" -->
<!-- isosent="20070911145032" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?" -->
<!-- id="5C186F27-4E42-4772-A5C2-47AE689FD0DF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070906180601.GV12598_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-11 10:50:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Previous message:</strong> <a href="0093.php">Jeff Squyres: "Re: [MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>In reply to:</strong> <a href="0089.php">Ethan Mallove: "[MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's probably no good reason for this.  Feel free to change if  
<br>
you'd like...
<br>
<p>On Sep 6, 2007, at 2:06 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Why does Install/OMPI.pm &quot;cp&quot; all the sources to another
</span><br>
<span class="quotelev1">&gt; directory before building it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt;   Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copytree copying to &lt;scratch&gt;/installs/XfxU/src
</span><br>
<span class="quotelev1">&gt;   Copying directory: &lt;scratch&gt;/sources/mpi_get__ompi-nightly-trunk/ 
</span><br>
<span class="quotelev1">&gt; trunk
</span><br>
<span class="quotelev1">&gt;   Running command: rm -rf trunk
</span><br>
<span class="quotelev1">&gt;   Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt;   Running command: cp -r &lt;scratch&gt;/sources/mpi_get__ompi-nightly- 
</span><br>
<span class="quotelev1">&gt; trunk/trunk .
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above happens with or without --force. Wouldn't it be
</span><br>
<span class="quotelev1">&gt; more efficient to just have one set of sources and configure
</span><br>
<span class="quotelev1">&gt; using --prefix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Previous message:</strong> <a href="0093.php">Jeff Squyres: "Re: [MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>In reply to:</strong> <a href="0089.php">Ethan Mallove: "[MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
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
