<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 17 08:31:39 2005" -->
<!-- isoreceived="20050617133139" -->
<!-- sent="Fri, 17 Jun 2005 09:31:30 -0400" -->
<!-- isosent="20050617133130" -->
<!-- name="Tim Mattox" -->
<!-- email="tmattox_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Further thoughts" -->
<!-- id="ea86ce220506170631788ca743_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="bd372e429e826812d2a9d82c95a606f2_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Mattox (<em>tmattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-17 08:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Jeff Squyres: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Jeff Squyres: "Re: [O-MPI users] Further thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
This has been an interesting discussion to follow.  Here are my thoughts
<br>
on the RPM packaging...
<br>
<p>On 6/16/05, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; We've also got the &quot;announce&quot; mailing list -- a low volume list just
</span><br>
<span class="quotelev1">&gt; for announcing new releases (and *exciting* messages about products you
</span><br>
<span class="quotelev1">&gt; might be interested in... just kidding.).
</span><br>
;-)
<br>
<p>[snip]
<br>
<span class="quotelev1">&gt; We actually got a lot of help in this area from Greg Kurtzer from LBL
</span><br>
<span class="quotelev1">&gt; (of cAos/Warewulf/Centos fame).  He helped us a bunch with our
</span><br>
<span class="quotelev1">&gt; [previously extremely lame] LAM/MPI .spec file, and then offered to
</span><br>
<span class="quotelev1">&gt; write one for Open MPI (which he did about a month or two ago).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some random user questions about RPMs, though:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Would you prefer an all-in-one Open MPI RPM, or would you prefer
</span><br>
<span class="quotelev1">&gt; multiple RPMs (e.g., openmpi-doc, openmpi-devel, openmpi-runtime,
</span><br>
<span class="quotelev1">&gt; ...etc.)?
</span><br>
<p>I prefer split RPMs.  The fingrained split you mention works well for
<br>
thin/diskless-nodes, but a simple split of runtime vs everything-else
<br>
would be &quot;good enough&quot;.  The primary problem with an all-in-one RPM
<br>
would be the footprint of the non-MPI packages that satisfy MPI's
<br>
dependence tree, especially the compilers.
<br>
<p><span class="quotelev1">&gt; 2. We're definitely going to provide an SRPM suitable for &quot;rpmbuild
</span><br>
<span class="quotelev1">&gt; --rebuild&quot;.  However, we're not 100% sure that it's worthwhile to
</span><br>
<span class="quotelev1">&gt; provide binary RPMs because everyone's cluster/development systems seem
</span><br>
<span class="quotelev1">&gt; to be &quot;one off&quot; from standard Linux distros.  Do you want a binary
</span><br>
<span class="quotelev1">&gt; RPM(s)?  If so, for which distros?  (this is one area where vendors
</span><br>
<span class="quotelev1">&gt; tend to have dramatically different views than academics/researchers)
</span><br>
<p>If you supply fairly clean SRPMs, I think the distros themselves can
<br>
do the binary RPM building themselves.  At least that is easy enough
<br>
for cAos to do.  I guess the problem lies in the disparity in the distribution
<br>
release cycle and Open MPI's expected release cycle.  Certain RedHat
<br>
distribution versions shipped with amazingly old versions of LAM/MPI,
<br>
which I recall caused no end of trouble on the LAM/MPI mailing lists
<br>
with questions from long-ago fixed bugs.  How much is it worth to
<br>
the Open MPI team to be able to answer those questions with:
<br>
rpm -Uvh <a href="http://open-mpi.org/..../open-mpi-1.0-fixed.x86_64.rpm">http://open-mpi.org/..../open-mpi-1.0-fixed.x86_64.rpm</a>
<br>
rather than having to explain how to do &quot;rpmbuild --rebuild&quot;.
<br>
<p>I'll suggest that eventually you will want binary RPMs for SUSE 9.3 and
<br>
CentOS 4 and/or Scientific Linux 4 in both i386 &amp; x86_64 flavors.
<br>
I'm sure you will get demand for a lot of Fedora Core flavors, but I think
<br>
that road leads to madness...  I think it might work out better to try and
<br>
get Open MPI into Dag Wieers RPM/APT/YUM repositories... see:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://dag.wieers.com/home-made/apt/">http://dag.wieers.com/home-made/apt/</a>
<br>
or the still-under-construction RPMforge site:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://rpmforge.net/">http://rpmforge.net/</a>
<br>
<p>That's more than my two cents...
<br>
<pre>
-- 
Tim Mattox - tmattox_at_[hidden]
  <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Jeff Squyres: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Jeff Squyres: "Re: [O-MPI users] Further thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
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
