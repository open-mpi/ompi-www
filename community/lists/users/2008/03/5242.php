<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 21:20:18 2008" -->
<!-- isoreceived="20080319012018" -->
<!-- sent="Tue, 18 Mar 2008 18:18:36 -0700" -->
<!-- isosent="20080319011836" -->
<!-- name="Christopher Irving" -->
<!-- email="cirving_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="1205889516.21502.110.camel_at_livia" -->
<!-- inreplyto="20080318192748.GT17772_at_lbl.gov" -->
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
<strong>From:</strong> Christopher Irving (<em>cirving_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 21:18:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5241.php">Chembeti, Ramesh (S&amp;T-Student): "[OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<li><strong>In reply to:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2008-03-18 at 12:28 -0700, Michael Jennings wrote: 
<br>
<span class="quotelev1">&gt; On Tuesday, 18 March 2008, at 12:15:34 (-0700),
</span><br>
<span class="quotelev1">&gt; Christopher Irving wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now, if you removed line 651 and 653 from the new spec file it works
</span><br>
<span class="quotelev2">&gt; &gt; for both cases.  You wont get the files listed twice error because
</span><br>
<span class="quotelev2">&gt; &gt; although you have the statement %dir %{_prefix} on line 649 you
</span><br>
<span class="quotelev2">&gt; &gt; never have a line with just %{_prefix}.  So the _prefix directory
</span><br>
<span class="quotelev2">&gt; &gt; itself gets included but not all files underneath it.  You've
</span><br>
<span class="quotelev2">&gt; &gt; handled that by explicitly including all files and sub directories
</span><br>
<span class="quotelev2">&gt; &gt; on lines 672-681 and in the runtime.file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only package which should own %{_prefix} is something like setup
</span><br>
<span class="quotelev1">&gt; or filesystem in the core OS package set.  No openmpi RPM should ever
</span><br>
<span class="quotelev1">&gt; own %{_prefix}, so it should never appear in %files, either by itself
</span><br>
<span class="quotelev1">&gt; or with %dir.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Well you're half correct.  You're thinking that _prefix is always
<br>
defined as /usr.  But in the case were install_in_opt is defined they
<br>
have redefined _prefix to be 
<br>
/opt/%{name}/%{version} in which case it is fine for one of the openmpi
<br>
rpms to claim that directory with a %dir directive. However I think you
<br>
missed the point.  I'm not suggesting they need to a %{_prefix}
<br>
statement in the %files section, I'm just pointing out what's not the
<br>
source of the duplicated files. In other words %dir %{_prefix} is not
<br>
the same as %{_prefix} and wont cause all the files in _prefix to be
<br>
included.
<br>
<p><span class="quotelev2">&gt; &gt; Going back to the original spec file, the one that came with the
</span><br>
<span class="quotelev2">&gt; &gt; source RPM, the problems where kind of reversed.  Building with the
</span><br>
<span class="quotelev2">&gt; &gt; 'install_in_opt 1' option worked just fine but when it wasn't set
</span><br>
<span class="quotelev2">&gt; &gt; you got the files listed twice error as I described in my original
</span><br>
<span class="quotelev2">&gt; &gt; message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;files listed twice&quot; messages are not errors, per se, and can usually
</span><br>
<span class="quotelev1">&gt; be safely ignored.  Those who are truly bothered by them can always
</span><br>
<span class="quotelev1">&gt; add %exclude directives if they so choose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<p>It can't be safely ignored when it causes rpm build to fail.  Also you
<br>
don't want to use an %exclude because that would prevent the specified
<br>
files from ever getting included which is not the desired result.  It's
<br>
much easier and makes a lot more sense to remove the source of the
<br>
duplicated inclusion.  Which is exactly what they did and why that's no
<br>
longer the problem with the new spec file.
<br>
<p>-C  
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5241.php">Chembeti, Ramesh (S&amp;T-Student): "[OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<li><strong>In reply to:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
