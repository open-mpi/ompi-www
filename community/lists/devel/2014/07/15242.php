<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 07:45:25 2014" -->
<!-- isoreceived="20140724114525" -->
<!-- sent="Thu, 24 Jul 2014 11:45:24 +0000" -->
<!-- isosent="20140724114524" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="B8F6A201-D994-4833-835F-B988F79B4962_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="066E69D1-51CB-4112-9F18-BAB579B34AB7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 07:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15243.php">Christoph Niethammer: "[OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>Previous message:</strong> <a href="15241.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Annual SVN account maintenance"</a>
<li><strong>In reply to:</strong> <a href="15240.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried it myself -- &quot;make distcheck&quot; succeeds for both a nightly tarball (openmpi-1.8.2rc2r32302) and in a git or svn checkout on RHEL 6.5.
<br>
<p>I do not have easy access to RHEL 7 or SLES 12 beta.
<br>
<p>Can someone analyze this and figure out what the difference is?
<br>
<p><p><p>On Jul 24, 2014, at 6:21 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am getting reports of similar failures from Cisco QA.  They have clean/fresh checkouts of the OMPI tree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not seem to happen on RHEL 6.5, but does happen on RHEL 7 and SLES 12 (beta).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's the difference?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2014, at 6:12 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this is a command line we use:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cd ./contrib/dist/linux
</span><br>
<span class="quotelev2">&gt;&gt; ./contrib/dist/make_tarball -greekonly
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild  --define '_topdir /var/tmp//OFED_topdir' --define 'dist %{nil}' --target x86_64 --define '_name openmpi' --define 'mpi_selector /usr/bin/mpi-selector' --define 'use_mpi_selector 1' --define 'install_shell_scripts 1' --define 'shell_scripts_basename mpivars' --define '_usr /usr' --define 'ofed 0' --define '_prefix /usr/mpi/gcc/openmpi-1.8.2rc2' --define '_defaultdocdir /usr/mpi/gcc/openmpi-1.8.2rc2' --define '_mandir %{_prefix}/share/man' --define '_datadir %{_prefix}/share' --define 'mflags -j 4' --define 'configure_options    --with-fca=/opt/mellanox/fca --with-hcoll=/opt/mellanox/hcoll  --with-mxm=/opt/mellanox/mxm  --with-knem=/opt/knem-1.1.1.90mlnx --with-platform=contrib/platform/mellanox/optimized  ' --define 'use_default_rpm_opt_flags 1' openmpi-1.8.2rc2-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 24, 2014 at 11:58 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 07/24/2014 10:15 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; the problem occurs when build is started from src.rpm (and probably from
</span><br>
<span class="quotelev2">&gt;&gt; tarball as well):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; try make distcheck and use src tree from tarball.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I did now make distcheck from the rc2 tarball, and it all worked. I don't know what the srpm does differently than an ./configure &amp;&amp; make though.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 24, 2014 at 10:57 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev2">&gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev2">&gt;&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15238.php">http://www.open-mpi.org/community/lists/devel/2014/07/15238.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15239.php">http://www.open-mpi.org/community/lists/devel/2014/07/15239.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15240.php">http://www.open-mpi.org/community/lists/devel/2014/07/15240.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15243.php">Christoph Niethammer: "[OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>Previous message:</strong> <a href="15241.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Annual SVN account maintenance"</a>
<li><strong>In reply to:</strong> <a href="15240.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
