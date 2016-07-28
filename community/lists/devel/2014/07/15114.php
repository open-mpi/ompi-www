<?
$subject_val = "Re: [OMPI devel] openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 04:05:10 2014" -->
<!-- isoreceived="20140712080510" -->
<!-- sent="Sat, 12 Jul 2014 10:05:08 +0200 (CEST)" -->
<!-- isosent="20140712080508" -->
<!-- name="olivier.lahaye1_at_[hidden]" -->
<!-- email="olivier.lahaye1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi.spec" -->
<!-- id="1945238037.128357107.1405152308379.JavaMail.root_at_spooler6-g27.priv.proxad.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="526F6756-5086-4A3F-B642-71642FA97590_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi.spec<br>
<strong>From:</strong> <a href="mailto:olivier.lahaye1_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi.spec"><em>olivier.lahaye1_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-12 04:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15115.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT access borked"</a>
<li><strong>Previous message:</strong> <a href="15113.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15116.php">Mike Dubman: "Re: [OMPI devel] openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="15116.php">Mike Dubman: "Re: [OMPI devel] openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a bad idea to remove the %{?dist} IMHO.
<br>
<p>To generate a generic src.rpm, you should use the following command:
<br>
<p>rpmbuild -ts tarball --define 'dist %{nil}'
<br>
or
<br>
rpmbuild -bs openmpi.spec --define 'dist %{nil}'
<br>
<p>This can be put in the main Maikefile:
<br>
<p>srpm: tarball_bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rpmbuild -ts openmpi-$(VERSION).tar.bz2 --define 'dist %{nil}'
<br>
<p><p>And you should keep the %{?dist} is the release tag so when built, the rpm
<br>
is clearly identified for a specific distro.
<br>
<p>My 2 cents.
<br>
<p>Best regards,
<br>
<p>PS: By the way, %{?dist} is not the arch, it's the distro tag.
<br>
AFAIK, the values for main distros I know are:
<br>
rhel6 =&gt; .el6
<br>
rhel7 =&gt; .el6
<br>
centos6 =&gt; .el6
<br>
centos7 =&gt; .el7.centos
<br>
fedora-# =&gt; .fc#
<br>
Mandriva =&gt; .mdvYYYY.r when YYYY.r is the release such as 2013.1
<br>
Mageia =&gt; ?
<br>
<p>Olivier.
<br>
<p>----- Mail original -----
<br>
<span class="quotelev1">&gt; De: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#195;&#128;: &quot;Open MPI Developers List&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169;: Jeudi 10 Juillet 2014 22:27:12
</span><br>
<span class="quotelev1">&gt; Objet: Re: [OMPI devel] openmpi.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mike and I talked in IM.  The results of our chat was Mike's commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/32205">https://svn.open-mpi.org/trac/ompi/changeset/32205</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2014, at 9:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; The following commit
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/32147">https://svn.open-mpi.org/trac/ompi/changeset/32147</a> does some harm:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; the line 202 in the change causes openmpi.src.rpm to contain arch
</span><br>
<span class="quotelev2">&gt; &gt; in the rpm name, i.e. openmpi-1.8.2a1-1.el6.src.rpm
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The src.rpm should be arch agnostic.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; what do you think?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15097.php">http://www.open-mpi.org/community/lists/devel/2014/07/15097.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15103.php">http://www.open-mpi.org/community/lists/devel/2014/07/15103.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15115.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT access borked"</a>
<li><strong>Previous message:</strong> <a href="15113.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15116.php">Mike Dubman: "Re: [OMPI devel] openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="15116.php">Mike Dubman: "Re: [OMPI devel] openmpi.spec"</a>
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
