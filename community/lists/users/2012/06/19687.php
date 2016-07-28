<?
$subject_val = "Re: [OMPI users] rpmbuild defining opt install path";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 14:12:50 2012" -->
<!-- isoreceived="20120627181250" -->
<!-- sent="Wed, 27 Jun 2012 12:12:27 -0600" -->
<!-- isosent="20120627181227" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rpmbuild defining opt install path" -->
<!-- id="4FEB4D0B.3020401_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2E3570A-FCD1-4776-A1E5-5EC4BB13E8A1_at_cisco.com" -->
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
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 14:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19686.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a really good idea.  The trouble is that I need to have multiple
<br>
versions installed (eg. compiled with the various compilers), so I think
<br>
I still need to manipulate name in some way, so the packages will be
<br>
named differently.  But _prefix should definitely give me more
<br>
flexibility as to where it's installed.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 06/27/2012 11:12 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 26, 2012, at 2:40 PM, Lloyd Brown wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there an easy way with the .spec file and the rpmbuild command, for
</span><br>
<span class="quotelev2">&gt;&gt; me to override the path the OpenMPI RPM installs into, in /opt?
</span><br>
<span class="quotelev2">&gt;&gt; Basically, I'm already doing something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think all you need to do is override the RPM-builtin names, like _prefix (and possibly some others).  For example, I did this in RHEL 6.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild --define '_prefix /tmp/bogus' \
</span><br>
<span class="quotelev1">&gt;      /home/jsquyres/RPMS/SRPMS/openmpi-1.6-1.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which resulted in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-unknown-linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix= --prefix=/tmp/bogus --exec-prefix=/tmp/bogus --bindir=/tmp/bogus/bin --sbindir=/tmp/bogus/sbin --sysconfdir=/tmp/bogus/etc --datadir=/tmp/bogus/share --includedir=/tmp/bogus/include --libdir=/tmp/bogus/lib64 --libexecdir=/tmp/bogus/libexec --localstatedir=/var --sharedstatedir=/var/lib --mandir=/usr/share/man --infodir=/usr/share/info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some reason, this didn't override localstatedir, sharedstatedir, mandir, and infodir (gotta love RPM! :-) ), so I did:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild --define '_prefix /tmp/bogus' --define '_localstatedir /tmp/bogus/var' --define '_sharedstatedir /tmp/bogus/var/lib' --define '_mandir /tmp/bogus/share/man' --define '_infodir /tmp/bogus/share/info' /home/jsquyres/RPMS/SRPMS/openmpi-1.6-1.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When then gave me what I think you want:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-unknown-linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix= --prefix=/tmp/bogus --exec-prefix=/tmp/bogus --bindir=/tmp/bogus/bin --sbindir=/tmp/bogus/sbin --sysconfdir=/tmp/bogus/etc --datadir=/tmp/bogus/share --includedir=/tmp/bogus/include --libdir=/tmp/bogus/lib64 --libexecdir=/tmp/bogus/libexec --localstatedir=/tmp/bogus/var --sharedstatedir=/tmp/bogus/var/lib --mandir=/tmp/bogus/share/man --infodir=/tmp/bogus/share/info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19686.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
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
