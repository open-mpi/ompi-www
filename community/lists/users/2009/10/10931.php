<?
$subject_val = "Re: [OMPI users] OMPI-1.2.0 is not getting installed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 22:14:12 2009" -->
<!-- isoreceived="20091021021412" -->
<!-- sent="Wed, 21 Oct 2009 07:44:07 +0530" -->
<!-- isosent="20091021021407" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.2.0 is not getting installed" -->
<!-- id="cb60cbc40910201914r59fe9430g27d58188a6cd0960_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0910200618v12bea4a0jc424660387b0c321_at_mail.gmail.com" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 22:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10930.php">yewyong: "[OMPI users] having trouble expanding our cluster"</a>
<li><strong>In reply to:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Reply:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Reply:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 20, 2009 at 6:48 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Just curious:
</span><br>
<span class="quotelev1">&gt; Is there a particular reason why you want version 1.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes. Our cluster is installed with Intel MKL-10.0. This version of MKL
<br>
contains a static blacs library which is compatible with OMPI-1.2 as told by
<br>
Intel support team.
<br>
<p><a href="http://software.intel.com/en-us/forums/intel-math-kernel-library/topic/69104/">http://software.intel.com/en-us/forums/intel-math-kernel-library/topic/69104/</a>
<br>
<p>Is it possible to get it installed?
<br>
Thanks,
<br>
Sangamesh
<br>
<p><span class="quotelev1">&gt; The current version is 1.3.3!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 20, 2009 at 2:48 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Its required here to install Open MPI 1.2 on a HPC cluster with -
</span><br>
<span class="quotelev1">&gt; Cent
</span><br>
<span class="quotelev2">&gt; &gt; OS 5.2 Linux, Mellanox IB card, switch and OFED-1.4.
</span><br>
<span class="quotelev2">&gt; &gt; But the configure is failing with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_master openmpi-1.2]# ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/mpi/openmpi/1.2/intel
</span><br>
<span class="quotelev2">&gt; &gt; --with-openib=/usr
</span><br>
<span class="quotelev2">&gt; &gt; ..
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt; &gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev2">&gt; &gt; checking for sysfs_open_class in -lsysfs... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: OpenIB support requested but required sysfs not found.
</span><br>
<span class="quotelev2">&gt; &gt; Aborting
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; even though the required rpms are available:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # rpm -qa | grep sysfs
</span><br>
<span class="quotelev2">&gt; &gt; sysfsutils-2.0.0-6
</span><br>
<span class="quotelev2">&gt; &gt; libsysfs-2.0.0-6
</span><br>
<span class="quotelev2">&gt; &gt; libsysfs-2.0.0-6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What to do get install OMPI-1.2 specifically?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10930.php">yewyong: "[OMPI users] having trouble expanding our cluster"</a>
<li><strong>In reply to:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Reply:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Reply:</strong> <a href="10933.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
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
