<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 15:28:17 2008" -->
<!-- isoreceived="20080318192817" -->
<!-- sent="Tue, 18 Mar 2008 12:28:00 -0700" -->
<!-- isosent="20080318192800" -->
<!-- name="Michael Jennings" -->
<!-- email="mej_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="20080318192748.GT17772_at_lbl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1205867734.21502.70.camel_at_livia" -->
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
<strong>Subject:</strong> Re: [OMPI users] RPM build errors when creating multiple rpms<br>
<strong>From:</strong> Michael Jennings (<em>mej_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 15:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5240.php">Patrick Geoffray: "Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
<li><strong>Previous message:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, 18 March 2008, at 12:15:34 (-0700),
<br>
Christopher Irving wrote:
<br>
<p><span class="quotelev1">&gt; Now, if you removed line 651 and 653 from the new spec file it works
</span><br>
<span class="quotelev1">&gt; for both cases.  You wont get the files listed twice error because
</span><br>
<span class="quotelev1">&gt; although you have the statement %dir %{_prefix} on line 649 you
</span><br>
<span class="quotelev1">&gt; never have a line with just %{_prefix}.  So the _prefix directory
</span><br>
<span class="quotelev1">&gt; itself gets included but not all files underneath it.  You've
</span><br>
<span class="quotelev1">&gt; handled that by explicitly including all files and sub directories
</span><br>
<span class="quotelev1">&gt; on lines 672-681 and in the runtime.file.
</span><br>
<p>The only package which should own %{_prefix} is something like setup
<br>
or filesystem in the core OS package set.  No openmpi RPM should ever
<br>
own %{_prefix}, so it should never appear in %files, either by itself
<br>
or with %dir.
<br>
<p><span class="quotelev1">&gt; Going back to the original spec file, the one that came with the
</span><br>
<span class="quotelev1">&gt; source RPM, the problems where kind of reversed.  Building with the
</span><br>
<span class="quotelev1">&gt; 'install_in_opt 1' option worked just fine but when it wasn't set
</span><br>
<span class="quotelev1">&gt; you got the files listed twice error as I described in my original
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<p>&quot;files listed twice&quot; messages are not errors, per se, and can usually
<br>
be safely ignored.  Those who are truly bothered by them can always
<br>
add %exclude directives if they so choose.
<br>
<p>Michael
<br>
<p><pre>
-- 
Michael Jennings &lt;mej_at_[hidden]&gt;
Linux Systems and Cluster Admin
UNIX and Cluster Computing Group
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5240.php">Patrick Geoffray: "Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
<li><strong>Previous message:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
