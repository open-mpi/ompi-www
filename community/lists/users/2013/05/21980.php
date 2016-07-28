<?
$subject_val = "Re: [OMPI users] OpenMPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 11:02:17 2013" -->
<!-- isoreceived="20130529150217" -->
<!-- sent="Wed, 29 May 2013 15:02:07 +0000" -->
<!-- isosent="20130529150207" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI installation" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7327FCD3E_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F648194_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI installation<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 11:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21981.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>In reply to:</strong> <a href="21977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; As a guess: I suggest looking for a package named openmpi-devel, or something
</span><br>
<span class="quotelev1">&gt; like that.
</span><br>
[Tom] 
<br>
Yes, you want  &quot;-devel&quot; in addition to the RPM you listed.  Going to the URL below, I see listed:
<br>
<p>openmpi-1.5.4-1.el6.x86_64.rpm - Open Message Passing Interface
<br>
openmpi-devel-1.5.4-1.el6.x86_64.rpm - Development files for openmpi
<br>
openmpi-psm-1.5.3-3.el6.x86_64.rpm - Open Message Passing Interface using InfiniPath
<br>
openmpi-psm-devel-1.5.3-3.el6.x86_64.rpm - Development files for openmpi using InfiniPath
<br>
<p>Also, If you have QLogic or Intel True Scale InfiniBand adapters, download the last two RPMs listed above to get an Open MPI built to use PSM (Performance Scaled Messaging) as a default for the best performance and stability on these adapters.
<br>
<p>-Tom
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 29, 2013, at 7:41 AM, alankrutha reddy
</span><br>
<span class="quotelev1">&gt; &lt;alankruthareddy46_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have downloaded openmpi from
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://pkgs.org/centos-6-rhel-6/centos-rhel-x86_64/openmpi-1.5.4">http://pkgs.org/centos-6-rhel-6/centos-rhel-x86_64/openmpi-1.5.4</a>-
</span><br>
<span class="quotelev1">&gt; 1.el6.x86_64.rpm.html
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And I have installed using rpm -i openmpi-1.5.4-1.el6.x86_64.rpm.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicc &amp; mpif77 are not generated. How to generate those binaries.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone help me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Alankrutha
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21981.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>In reply to:</strong> <a href="21977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI installation"</a>
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
