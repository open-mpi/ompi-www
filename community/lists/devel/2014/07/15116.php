<?
$subject_val = "Re: [OMPI devel] openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 08:24:59 2014" -->
<!-- isoreceived="20140712122459" -->
<!-- sent="Sat, 12 Jul 2014 15:24:58 +0300" -->
<!-- isosent="20140712122458" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi.spec" -->
<!-- id="CAAO1KyZm8fSyuT+Twam0PLmWsc79tior2xCKLgdm_6RaCQDpBQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1945238037.128357107.1405152308379.JavaMail.root_at_spooler6-g27.priv.proxad.net" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-12 08:24:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15115.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT access borked"</a>
<li><strong>In reply to:</strong> <a href="15114.php">olivier.lahaye1_at_[hidden]: "Re: [OMPI devel] openmpi.spec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you are right about setting 'dist %{nil}' will workaround about the src.rpm
<br>
filename issue.
<br>
but we are using contrib/dist/linux/buildrpm.sh script and not calling
<br>
rpmbuild directly.
<br>
<p>I don`t mind having %{?dist}  in the spec file, as long as this change is
<br>
backwards compatible:
<br>
<p>You can change buildrpm.sh +215 to include --define 'dist %{nil}' when
<br>
creating src.rpm and it will be fine for all.
<br>
<p><p><p>On Sat, Jul 12, 2014 at 11:05 AM, &lt;olivier.lahaye1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a bad idea to remove the %{?dist} IMHO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To generate a generic src.rpm, you should use the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild -ts tarball --define 'dist %{nil}'
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; rpmbuild -bs openmpi.spec --define 'dist %{nil}'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This can be put in the main Maikefile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; srpm: tarball_bz2
</span><br>
<span class="quotelev1">&gt;     rpmbuild -ts openmpi-$(VERSION).tar.bz2 --define 'dist %{nil}'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And you should keep the %{?dist} is the release tag so when built, the rpm
</span><br>
<span class="quotelev1">&gt; is clearly identified for a specific distro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 2 cents.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: By the way, %{?dist} is not the arch, it's the distro tag.
</span><br>
<span class="quotelev1">&gt; AFAIK, the values for main distros I know are:
</span><br>
<span class="quotelev1">&gt; rhel6 =&gt; .el6
</span><br>
<span class="quotelev1">&gt; rhel7 =&gt; .el6
</span><br>
<span class="quotelev1">&gt; centos6 =&gt; .el6
</span><br>
<span class="quotelev1">&gt; centos7 =&gt; .el7.centos
</span><br>
<span class="quotelev1">&gt; fedora-# =&gt; .fc#
</span><br>
<span class="quotelev1">&gt; Mandriva =&gt; .mdvYYYY.r when YYYY.r is the release such as 2013.1
</span><br>
<span class="quotelev1">&gt; Mageia =&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Mail original -----
</span><br>
<span class="quotelev2">&gt; &gt; De: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#195;&#128;: &quot;Open MPI Developers List&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#195;&#169;: Jeudi 10 Juillet 2014 22:27:12
</span><br>
<span class="quotelev2">&gt; &gt; Objet: Re: [OMPI devel] openmpi.spec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mike and I talked in IM.  The results of our chat was Mike's commit:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/32205">https://svn.open-mpi.org/trac/ompi/changeset/32205</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 10, 2014, at 9:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The following commit
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/32147">https://svn.open-mpi.org/trac/ompi/changeset/32147</a> does some harm:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the line 202 in the change causes openmpi.src.rpm to contain arch
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the rpm name, i.e. openmpi-1.8.2a1-1.el6.src.rpm
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The src.rpm should be arch agnostic.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; what do you think?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15097.php">http://www.open-mpi.org/community/lists/devel/2014/07/15097.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15103.php">http://www.open-mpi.org/community/lists/devel/2014/07/15103.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15114.php">http://www.open-mpi.org/community/lists/devel/2014/07/15114.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15116/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15115.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT access borked"</a>
<li><strong>In reply to:</strong> <a href="15114.php">olivier.lahaye1_at_[hidden]: "Re: [OMPI devel] openmpi.spec"</a>
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
