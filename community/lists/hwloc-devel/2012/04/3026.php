<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 09:42:43 2012" -->
<!-- isoreceived="20120425134243" -->
<!-- sent="Wed, 25 Apr 2012 15:42:36 +0200" -->
<!-- isosent="20120425134236" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="CALT_uBSZoOXx8SGr0uXdQH96r2zkxDrPvYUtFaqBdp9sMVVazg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201204252213.42907.samuel_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo-nox strikes back<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 09:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3027.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3025.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3027.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3027.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3044.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would strongly vote to split the hwloc package to the core (ASCII
<br>
only, including ASCII only version of lstopo ) package and GUI package
<br>
which will bring GUI version of lstopo.
<br>
<p>This is also the way how this is handled in Ubuntu - please check the
<br>
packages
<br>
vim - Vi IMproved - enhanced vi editor
<br>
vim-gnome
<br>
<p>vim-gnome depends on vim-common
<br>
<p>I also believe that having two binaries of lstopo - similar to &quot;vim&quot; and
<br>
&quot;gvim&quot; will make the usage clear.
<br>
<p>I would vote to make lstopo ASCII only and introduce new GUI binary
<br>
&quot;lstopo-gui&quot; in the version 1.5
<br>
<p>Cheers
<br>
Jirka
<br>
<p><p><p>On Wed, Apr 25, 2012 at 2:13 PM, Chris Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wednesday 25 April 2012 19:38:00 Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; How do people feel about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like what you have is a conflict between the policies of
</span><br>
<span class="quotelev1">&gt; Debian (and hence Ubuntu) and the expectations of RHEL/CentOS users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Debian Policy is fairly clear on this matter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # 11.8.1 Providing X support and package priorities
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Programs that can be configured with support for the X Window System
</span><br>
<span class="quotelev1">&gt; # must be configured to do so and must declare any package
</span><br>
<span class="quotelev1">&gt; # dependencies necessary to satisfy their runtime requirements when
</span><br>
<span class="quotelev1">&gt; # using the X Window System.  [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It says you can split it into a separate package to provide GUI
</span><br>
<span class="quotelev1">&gt; functionality *only* if the &quot;package is of higher priority than the X
</span><br>
<span class="quotelev1">&gt; packages on which it depends&quot; (which I suspect is not the usual case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3027.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3025.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3027.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3027.php">Jeffrey Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3044.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
