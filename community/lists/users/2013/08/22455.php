<?
$subject_val = "Re: [OMPI users] openmpi-1.7.2 rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  8 10:44:28 2013" -->
<!-- isoreceived="20130808144428" -->
<!-- sent="Thu, 8 Aug 2013 14:44:27 +0000" -->
<!-- isosent="20130808144427" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.2 rpm" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7C20B6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52032469.1020609_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.2 rpm<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-08 10:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Previous message:</strong> <a href="22454.php">Jonathan Barber: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>In reply to:</strong> <a href="22453.php">RoboBeans: "[OMPI users] openmpi-1.7.2 rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Reply:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue is that the buildrpm.sh script is not really intended for users.  It's for the OMPI developers who make the official Open MPI SRPM.  That usually ends up being me, so that script is somewhat tailored to my environment.
<br>
<p>You should be able to rpmbuild --rebuild the Open MPI SRPM if you want an RPM.
<br>
<p><p>On Aug 7, 2013, at 9:54 PM, RoboBeans &lt;robobeans_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone, I am trying to create rpm from openmpi source code but getting following error. Could someone please point what I am doing wrong? I have attached buildrpm.sh and openmpi.spec for your reference. Thanks for your time!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # ./buildrpm.sh openmpi-1.7.2.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; Found tarball: openmpi-1.7.2.tar.gz
</span><br>
<span class="quotelev1">&gt; --&gt; Found Open MPI version: 1.7.2
</span><br>
<span class="quotelev1">&gt; --&gt; Found specfile: openmpi.spec
</span><br>
<span class="quotelev1">&gt; grep: /root/.rpmmacros: No such file or directory
</span><br>
<span class="quotelev1">&gt; --&gt; Found RPM top dir: /usr/src/redhat
</span><br>
<span class="quotelev1">&gt; Problem creating rpms: You do not have a /usr/src/redhat directory
</span><br>
<span class="quotelev1">&gt; tree or you do not have write access to the /usr/src/redhat directory
</span><br>
<span class="quotelev1">&gt; tree.  Please remedy and try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;1_Warning.txt&gt;&lt;openmpi.spec&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Previous message:</strong> <a href="22454.php">Jonathan Barber: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>In reply to:</strong> <a href="22453.php">RoboBeans: "[OMPI users] openmpi-1.7.2 rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Reply:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
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
