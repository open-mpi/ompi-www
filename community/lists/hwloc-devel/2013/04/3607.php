<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  1 03:38:27 2013" -->
<!-- isoreceived="20130401073827" -->
<!-- sent="Mon, 01 Apr 2013 09:37:55 +0200" -->
<!-- isosent="20130401073755" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="51593953.3060809_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130331200923.GV6229_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v1.7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-01 03:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3608.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/03/3606.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/03/3606.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3608.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3608.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/03/2013 22:09, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm realizing that this was actually not settled on. I've just fixed my
</span><br>
<span class="quotelev1">&gt; previous text with the current syntax
</span><br>
<p><p>Everything you say below has been implemented for almost 3 months (r5233
<br>
on 2013/01/07).
<br>
Brice
<br>
<p><p>v1.7 NEWS bullet was updated to:
<br>
&nbsp;&nbsp;+ The HWLOC_COMPONENTS variable now excludes the components whose
<br>
&nbsp;&nbsp;&nbsp;&nbsp;names are prefixed with '-'.
<br>
<p><p>Author: bgoglin &lt;bgoglin_at_4b44e086-7f34-40ce-a3bd-00e031736276&gt;
<br>
Date:   Mon Jan 7 21:49:12 2013 +0000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Replace HWLOC_COMPONENTS=^foo,bar with -foo,-bar
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This way we can exclude some and force others at the same time
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;git-svn-id: <a href="https://svn.open-mpi.org/svn/hwloc/trunk&#64;5233">https://svn.open-mpi.org/svn/hwloc/trunk&#64;5233</a>
<br>
4b44e086-7f34-40ce-a3bd-00e031736276
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel Thibault, le Mon 07 Jan 2013 15:05:55 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Brice Goglin, le Mon 31 Dec 2012 10:05:41 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   + The HWLOC_COMPONENTS may now start with '-' to only define a list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     components to exclude.
</span><br>
<span class="quotelev2">&gt;&gt; I'm finding it not intuitive and not generic enough [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It means that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_COMPONENTS=-cuda,opencl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; disables cuda *and* opencl, while intuition would have told me that it
</span><br>
<span class="quotelev2">&gt;&gt; disables cuda but enables opencl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, one would for instance want to be able to do this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_COMPONENTS=x86,-cuda,-opencl,nvml
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To be able to enable x86 before the default linux, but disable cuda and
</span><br>
<span class="quotelev2">&gt;&gt; opencl, but enable nvml, as well as all the other usual plugins (without
</span><br>
<span class="quotelev2">&gt;&gt; having to know the list, which is important for future extensions).
</span><br>
<span class="quotelev1">&gt; I thought we agreed that it would be useful to be able to do it, and
</span><br>
<span class="quotelev1">&gt; using '-' instead of '^' was meant to avoid confusion with Open-MPI
</span><br>
<span class="quotelev1">&gt; which has the previous behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3608.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/03/3606.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/03/3606.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3608.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3608.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
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
