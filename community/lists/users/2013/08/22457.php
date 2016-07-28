<?
$subject_val = "Re: [OMPI users] openmpi-1.7.2 rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  9 18:14:28 2013" -->
<!-- isoreceived="20130809221428" -->
<!-- sent="Fri, 9 Aug 2013 22:14:26 +0000" -->
<!-- isosent="20130809221426" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.2 rpm" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7C9FAA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="520568D6.7020606_at_gmail.com" -->
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
<strong>Date:</strong> 2013-08-09 18:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22458.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Previous message:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>In reply to:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22458.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Reply:</strong> <a href="22458.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The specfile we provide is quite flexible -- read through the comments at the top to see what CLI options it allows.  The short version is that you want something like:
<br>
<p>rpmbuild --rebuild --define 'configure_options --enable-event-thread-support --enable-opal-multi-threads ...etc.' openmpi-1.7.2-1.src.rpm
<br>
<p><p>On Aug 9, 2013, at 6:10 PM, RoboBeans &lt;robobeans_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff. I was able to produce rpm using &quot;rpmbuild --rebuild openmpi-1.7.2-1.src.rpm&quot;. What is the correct way of passing additional config parameters if a user wish to. For example -enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once rpm is ready, I will get rid of older version of MPI completely and then install 1.7.2 version using this rpm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) yum remove openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) rpm -ivh openmpi-1.7.2-1.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/8/13 7:44 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The issue is that the buildrpm.sh script is not really intended for users.  It's for the OMPI developers who make the official Open MPI SRPM.  That usually ends up being me, so that script is somewhat tailored to my environment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You should be able to rpmbuild --rebuild the Open MPI SRPM if you want an RPM.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 7, 2013, at 9:54 PM, RoboBeans &lt;robobeans_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello everyone, I am trying to create rpm from openmpi source code but getting following error. Could someone please point what I am doing wrong? I have attached buildrpm.sh and openmpi.spec for your reference. Thanks for your time!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ./buildrpm.sh openmpi-1.7.2.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Found tarball: openmpi-1.7.2.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Found Open MPI version: 1.7.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Found specfile: openmpi.spec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep: /root/.rpmmacros: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Found RPM top dir: /usr/src/redhat
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Problem creating rpms: You do not have a /usr/src/redhat directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tree or you do not have write access to the /usr/src/redhat directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tree.  Please remedy and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;1_Warning.txt&gt;&lt;openmpi.spec&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="22458.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Previous message:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>In reply to:</strong> <a href="22456.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22458.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Reply:</strong> <a href="22458.php">RoboBeans: "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
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
