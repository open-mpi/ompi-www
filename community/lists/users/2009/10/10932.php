<?
$subject_val = "Re: [OMPI users] OMPI-1.2.0 is not getting installed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 02:35:55 2009" -->
<!-- isoreceived="20091021063555" -->
<!-- sent="Wed, 21 Oct 2009 08:35:50 +0200" -->
<!-- isosent="20091021063550" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.2.0 is not getting installed" -->
<!-- id="9b0da5ce0910202335i4f7b1d23x22b4283d44b49923_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40910201914r59fe9430g27d58188a6cd0960_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI-1.2.0 is not getting installed<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 02:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>In reply to:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, i can't help you here.
<br>
I have no experience with neither intel compilers nor IB
<br>
<p>Jody
<br>
<p>On Wed, Oct 21, 2009 at 4:14 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 20, 2009 at 6:48 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; Just curious:
</span><br>
<span class="quotelev2">&gt;&gt; Is there a particular reason why you want version 1.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. Our cluster is installed with Intel MKL-10.0. This version of MKL
</span><br>
<span class="quotelev1">&gt; contains a static blacs library which is compatible with OMPI-1.2 as told by
</span><br>
<span class="quotelev1">&gt; Intel support team.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/en-us/forums/intel-math-kernel-library/topic/69104/">http://software.intel.com/en-us/forums/intel-math-kernel-library/topic/69104/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to get it installed?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current version is 1.3.3!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 20, 2009 at 2:48 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160;&#160;&#160;&#160; Its required here to install Open MPI 1.2 on a HPC cluster with -
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cent
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OS 5.2 Linux, Mellanox IB card, switch and OFED-1.4.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But the configure is failing with:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_master openmpi-1.2]# ./configure
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --prefix=/opt/mpi/openmpi/1.2/intel
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-openib=/usr
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ..
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for sysfs_open_class in -lsysfs... no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: error: OpenIB support requested but required sysfs not found.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Aborting
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; even though the required rpms are available:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # rpm -qa | grep sysfs
</span><br>
<span class="quotelev3">&gt;&gt; &gt; sysfsutils-2.0.0-6
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libsysfs-2.0.0-6
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libsysfs-2.0.0-6
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What to do get install OMPI-1.2 specifically?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>In reply to:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
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
