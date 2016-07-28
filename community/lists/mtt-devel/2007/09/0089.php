<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 14:06:07 2007" -->
<!-- isoreceived="20070906180607" -->
<!-- sent="Thu, 6 Sep 2007 14:06:01 -0400" -->
<!-- isosent="20070906180601" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] Why does OMPI.pm do a Copytree before it installs?" -->
<!-- id="20070906180601.GV12598_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 14:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Ethan Mallove: "[MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<li><strong>Reply:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why does Install/OMPI.pm &quot;cp&quot; all the sources to another
<br>
directory before building it?
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Evaluating: require MTT::Common::Copytree
<br>
&nbsp;&nbsp;Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
<br>
<span class="quotelev2">  &gt;&gt; copytree copying to &lt;scratch&gt;/installs/XfxU/src
</span><br>
&nbsp;&nbsp;Copying directory: &lt;scratch&gt;/sources/mpi_get__ompi-nightly-trunk/trunk
<br>
&nbsp;&nbsp;Running command: rm -rf trunk
<br>
&nbsp;&nbsp;Command complete, exit status: 0
<br>
&nbsp;&nbsp;Running command: cp -r &lt;scratch&gt;/sources/mpi_get__ompi-nightly-trunk/trunk .
<br>
&nbsp;&nbsp;...
<br>
<p>The above happens with or without --force. Wouldn't it be
<br>
more efficient to just have one set of sources and configure
<br>
using --prefix?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Ethan Mallove: "[MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<li><strong>Reply:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
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
