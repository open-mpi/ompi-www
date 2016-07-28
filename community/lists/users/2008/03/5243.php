<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 13:48:53 2008" -->
<!-- isoreceived="20080319174853" -->
<!-- sent="Wed, 19 Mar 2008 10:48:19 -0700" -->
<!-- isosent="20080319174819" -->
<!-- name="Michael Jennings" -->
<!-- email="mej_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="20080319174817.GB8468_at_lbl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1205889516.21502.110.camel_at_livia" -->
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
<strong>Date:</strong> 2008-03-19 13:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<li><strong>Previous message:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5274.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5274.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, 18 March 2008, at 18:18:36 (-0700),
<br>
Christopher Irving wrote:
<br>
<p><span class="quotelev1">&gt; Well you're half correct.  You're thinking that _prefix is always
</span><br>
<span class="quotelev1">&gt; defined as /usr.
</span><br>
<p>No, actually I'm not. :)
<br>
<p><span class="quotelev1">&gt; But in the case were install_in_opt is defined they have redefined
</span><br>
<span class="quotelev1">&gt; _prefix to be /opt/%{name}/%{version} in which case it is fine for
</span><br>
<span class="quotelev1">&gt; one of the openmpi rpms to claim that directory with a %dir
</span><br>
<span class="quotelev1">&gt; directive.
</span><br>
<p>Except that you should never do that.  First off, RPMs should never
<br>
install in /opt by default.  Secondly, the correct way to support
<br>
installing in /opt is to list the necessary prefixes in the RPM
<br>
headers so that the --prefix option (or the --relocate option) may be
<br>
used at install time.  OpenMPI already has hooks (IIRC) for figuring
<br>
things out intelligently based on invocation prefix, so it should fit
<br>
quite nicely into this model.
<br>
<p>Obviously RPMs only intended for local use can do anything they want,
<br>
but RPMs which install in /opt should never be redistributed.
<br>
<p><span class="quotelev1">&gt; However I think you missed the point.  I'm not suggesting they need
</span><br>
<span class="quotelev1">&gt; to a %{_prefix} statement in the %files section, I'm just pointing
</span><br>
<span class="quotelev1">&gt; out what's not the source of the duplicated files. In other words
</span><br>
<span class="quotelev1">&gt; %dir %{_prefix} is not the same as %{_prefix} and wont cause all the
</span><br>
<span class="quotelev1">&gt; files in _prefix to be included.
</span><br>
<p>That's correct.
<br>
<p><span class="quotelev1">&gt; It can't be safely ignored when it causes rpm build to fail.
</span><br>
<p>The warning by itself should never cause rpmbuild to fail.  If it
<br>
does, the problem lies elsewhere.  Nothing in either the rpm 4.4 nor 5
<br>
code can cause failure at that point.
<br>
<p><span class="quotelev1">&gt; Also you don't want to use an %exclude because that would prevent
</span><br>
<span class="quotelev1">&gt; the specified files from ever getting included which is not the
</span><br>
<span class="quotelev1">&gt; desired result.
</span><br>
<p>If you use %exclude in only one of the locations where the file is
<br>
listed (presumably the &quot;less correct&quot; one), it will solve the problem.
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
<li><strong>Next message:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<li><strong>Previous message:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5242.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5274.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5274.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
