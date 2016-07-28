<?
$subject_val = "Re: [OMPI users] rpmbuild defining opt install path";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 13:12:05 2012" -->
<!-- isoreceived="20120627171205" -->
<!-- sent="Wed, 27 Jun 2012 13:12:00 -0400" -->
<!-- isosent="20120627171200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rpmbuild defining opt install path" -->
<!-- id="E2E3570A-FCD1-4776-A1E5-5EC4BB13E8A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FEA0233.8000708_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] rpmbuild defining opt install path<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 13:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19684.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19687.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19687.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 26, 2012, at 2:40 PM, Lloyd Brown wrote:
<br>
<p><span class="quotelev1">&gt; Is there an easy way with the .spec file and the rpmbuild command, for
</span><br>
<span class="quotelev1">&gt; me to override the path the OpenMPI RPM installs into, in /opt?
</span><br>
<span class="quotelev1">&gt; Basically, I'm already doing something like this:
</span><br>
<p>I think all you need to do is override the RPM-builtin names, like _prefix (and possibly some others).  For example, I did this in RHEL 6.2:
<br>
<p>rpmbuild --rebuild --define '_prefix /tmp/bogus' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/home/jsquyres/RPMS/SRPMS/openmpi-1.6-1.src.rpm
<br>
<p>Which resulted in:
<br>
<p>+ ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-unknown-linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix= --prefix=/tmp/bogus --exec-prefix=/tmp/bogus --bindir=/tmp/bogus/bin --sbindir=/tmp/bogus/sbin --sysconfdir=/tmp/bogus/etc --datadir=/tmp/bogus/share --includedir=/tmp/bogus/include --libdir=/tmp/bogus/lib64 --libexecdir=/tmp/bogus/libexec --localstatedir=/var --sharedstatedir=/var/lib --mandir=/usr/share/man --infodir=/usr/share/info
<br>
<p>For some reason, this didn't override localstatedir, sharedstatedir, mandir, and infodir (gotta love RPM! :-) ), so I did:
<br>
<p>rpmbuild --rebuild --define '_prefix /tmp/bogus' --define '_localstatedir /tmp/bogus/var' --define '_sharedstatedir /tmp/bogus/var/lib' --define '_mandir /tmp/bogus/share/man' --define '_infodir /tmp/bogus/share/info' /home/jsquyres/RPMS/SRPMS/openmpi-1.6-1.src.rpm
<br>
<p>When then gave me what I think you want:
<br>
<p>+ ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-unknown-linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix= --prefix=/tmp/bogus --exec-prefix=/tmp/bogus --bindir=/tmp/bogus/bin --sbindir=/tmp/bogus/sbin --sysconfdir=/tmp/bogus/etc --datadir=/tmp/bogus/share --includedir=/tmp/bogus/include --libdir=/tmp/bogus/lib64 --libexecdir=/tmp/bogus/libexec --localstatedir=/tmp/bogus/var --sharedstatedir=/tmp/bogus/var/lib --mandir=/tmp/bogus/share/man --infodir=/tmp/bogus/share/info
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19684.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19687.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19687.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
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
