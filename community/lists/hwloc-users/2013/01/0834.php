<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 02:13:19 2013" -->
<!-- isoreceived="20130129071319" -->
<!-- sent="Tue, 29 Jan 2013 08:13:12 +0100" -->
<!-- isosent="20130129071312" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="51077688.3060502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A3BEF280-E68D-4230-BA09-29D48A7258F5_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] OpenGL GPU detection code<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 02:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0835.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0833.php">Stefan Eilemann: "[hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0833.php">Stefan Eilemann: "[hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0835.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0835.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/01/2013 09:53, Stefan Eilemann a &#233;crit :
<br>
<span class="quotelev1">&gt; Bonjour Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we've been dragging our feet a bit to get the GPU detection code merged into upstream, and I'm trying to get back to this now. Since we fixed a minor issue, I've merged our changes against the current svn trunk and opened a ticket on our side to get this stuff merged by you:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="https://github.com/BlueBrain/hwloc/issues/1">https://github.com/BlueBrain/hwloc/issues/1</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an up-to-date diff downloadable from the ticket. Feel free to open a similar bug on your end, if that's useful for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please comment on the integration and/or merge it into upstream.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stefan.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello Stefan,
<br>
<p>Your patch misses the core side of the code that actually enables this
<br>
new discovery as far as I see. We changed the way to do that in v1.6 for
<br>
plugin support, and we already have a SVN &quot;display&quot; branch that contains
<br>
your code with proper plugin support, based on your old code
<br>
<a href="https://svn.open-mpi.org/svn/hwloc/branches/display">https://svn.open-mpi.org/svn/hwloc/branches/display</a>
<br>
<p>The diff between this branch and trunk is
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/changeset?old_path=%2Ftrunk&amp;old=5190&amp;new_path=%2Fbranches%2Fdisplay&amp;new=5255">https://svn.open-mpi.org/trac/hwloc/changeset?old_path=%2Ftrunk&amp;old=5190&amp;new_path=%2Fbranches%2Fdisplay&amp;new=5255</a>
<br>
(new files are not shown on this page, click on them on the top to view
<br>
their contents)
<br>
<p>Could you send a diff against this branch instead?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0835.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0833.php">Stefan Eilemann: "[hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0833.php">Stefan Eilemann: "[hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0835.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0835.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
