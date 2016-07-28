<?
$subject_val = "Re: [OMPI users] ofed installation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 17:17:46 2013" -->
<!-- isoreceived="20131030211746" -->
<!-- sent="Wed, 30 Oct 2013 21:17:44 +0000" -->
<!-- isosent="20131030211744" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ofed installation" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F99D672_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAK7N9ppCMwK-UaeS7pdjaqVDGtPKiyDHrX61xiZFjDm5TV7cPw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ofed installation<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 17:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22870.php">Ralph Castain: "Re: [OMPI users] ofed installation"</a>
<li><strong>In reply to:</strong> <a href="22867.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22873.php">Elken, Tom: "Re: [OMPI users] ofed installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you'll have better luck with the OFED support channels -- this list is mainly about supporting Open MPI.
<br>
<p><p>On Oct 30, 2013, at 4:30 PM, Robo Beans &lt;robobeans_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I did try ofed forum: <a href="https://www.openfabrics.org/forum/7-installation/882-ofed-1532.html#882">https://www.openfabrics.org/forum/7-installation/882-ofed-1532.html#882</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but was wondering if group members faced similar issue as well while installing ofed and what steps they followed to resolve it? Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Robo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 30, 2013 at 1:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Looks to me like that's an error from the OFED installer, not something from OMPI. Have you tried their mailing list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2013, at 1:05 PM, Robo Beans &lt;robobeans_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to install ofed-1.5.3.2 on centos 6.4 using install.pl provided but getting following error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /lib/modules/2.6.32-358.el6.x86_64/build/scripts is required to build kernel-ib RPM.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; // info. about current kernel
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Linux scc-10-2-xx-xx-xyz.com 2.6.32-358.el6.x86_64 #1 SMP Fri Feb 22 00:31:26 UTC 2013 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If possible, could someone from the group please direct me what needs to be done to resolve this issue? Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Robo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22870.php">Ralph Castain: "Re: [OMPI users] ofed installation"</a>
<li><strong>In reply to:</strong> <a href="22867.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22873.php">Elken, Tom: "Re: [OMPI users] ofed installation"</a>
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
