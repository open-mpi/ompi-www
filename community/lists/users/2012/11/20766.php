<?
$subject_val = "Re: [OMPI users] Multiple RPM build fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 08:38:00 2012" -->
<!-- isoreceived="20121126133800" -->
<!-- sent="Mon, 26 Nov 2012 08:37:56 -0500" -->
<!-- isosent="20121126133756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple RPM build fails" -->
<!-- id="732889DC-68E2-4F36-B432-2D597E22D020_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMrN5-mi67Oav_wgXno=Kj1Hgt8ptSjGVHfeB8+AqDSoe=MTXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple RPM build fails<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 08:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>In reply to:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 26, 2012, at 7:41 AM, Jakub Nowacki wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the information. Sorry that I'm posting it here but bugs mailing list/Trac rejected my e-mail.
</span><br>
<p>No worries; the bugs list is *only* for mails from Trac.
<br>
<p><span class="quotelev1">&gt;  I've tested the SRPM and I was able to compile it correctly on both RHEL 5 and CentOS 6 with multiple packages on, i.e:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'build_all_in_one_rpm 0' --define 'configure_options --with-sge' /usr/src/redhat/SPECS/openmpi-
</span><br>
<span class="quotelev1">&gt; 1.6.3.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, the modified spec-file seems to fix the issue.
</span><br>
<p>Great!  Thanks for the update.
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
<li><strong>Next message:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>In reply to:</strong> <a href="20765.php">Jakub Nowacki: "Re: [OMPI users] Multiple RPM build fails"</a>
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
