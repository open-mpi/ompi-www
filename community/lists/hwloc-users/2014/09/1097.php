<?
$subject_val = "Re: [hwloc-users] hwloc-ls graphical output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 03:12:58 2014" -->
<!-- isoreceived="20140925071258" -->
<!-- sent="Thu, 25 Sep 2014 02:38:48 +0200" -->
<!-- isosent="20140925003848" -->
<!-- name="Dennis Jacobfeuerborn" -->
<!-- email="dennisml_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ls graphical output" -->
<!-- id="54236418.3070501_at_conversis.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54236040.1090104_at_conversis.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ls graphical output<br>
<strong>From:</strong> Dennis Jacobfeuerborn (<em>dennisml_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-24 20:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1098.php">Aulwes, Rob: "[hwloc-users] binding to thread"</a>
<li><strong>Previous message:</strong> <a href="1096.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>In reply to:</strong> <a href="1095.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25.09.2014 02:22, Dennis Jacobfeuerborn wrote:
<br>
<span class="quotelev1">&gt; On 25.09.2014 02:08, Dennis Jacobfeuerborn wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 25.09.2014 02:05, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dennis Jacobfeuerborn, le Thu 25 Sep 2014 02:01:48 +0200, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The question I guess is how does the command determine the availability
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of png as an output? Both cairo and libpng are installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It depends on the backends which were built into cairo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hm, I just recompiled 1.9 on my desktop system and now the graphical
</span><br>
<span class="quotelev2">&gt;&gt; output options are gone there too. Before I used the distribution
</span><br>
<span class="quotelev2">&gt;&gt; supplied version 1.4 and had the output options for png, pdf, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the cairo backends are available but it seems the newly compiled
</span><br>
<span class="quotelev2">&gt;&gt; version of hwloc refuses to use them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I just recompiled again but using version 1.4.3 and the graphical
</span><br>
<span class="quotelev1">&gt; output options reappeared. I also tried version 1.5.2 and this version
</span><br>
<span class="quotelev1">&gt; will not show the graphical output options anymore so it seems something
</span><br>
<span class="quotelev1">&gt; has changed between 1.4 and 1.5 that changes the output options in some way.
</span><br>
<p>I found the reason though I'm not sure what the proper fix is. In
<br>
version 1.4 the hwloc-ls command is apparently a symlink to lstopo
<br>
whereas in all later versions it is a symlink to lstopo-no-graphics.
<br>
Using lstopo directly shows the graphical output options.
<br>
How and where does the build process determine which of the two commands
<br>
to link to?
<br>
<p>Regards,
<br>
&nbsp;&nbsp;Dennis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1098.php">Aulwes, Rob: "[hwloc-users] binding to thread"</a>
<li><strong>Previous message:</strong> <a href="1096.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>In reply to:</strong> <a href="1095.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
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
