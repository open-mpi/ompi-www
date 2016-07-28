<?
$subject_val = "Re: [OMPI users] OMPI-1.2.0 is not getting installed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:37:36 2009" -->
<!-- isoreceived="20091021163736" -->
<!-- sent="Wed, 21 Oct 2009 12:37:31 -0400" -->
<!-- isosent="20091021163731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.2.0 is not getting installed" -->
<!-- id="CB204E33-203F-47F5-876B-4DF76A37A86F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 12:37:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10934.php">Mike Hanby: "[OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Previous message:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>In reply to:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>It's looking for the function &quot;sysfs_open_class&quot; in libsysfs.  Does  
<br>
that symbol exist in your version of libsysfs?
<br>
<p>If not, you may need to downgrade your libsysfs.
<br>
<p>This is among the most complex stuff in such installs -- all the  
<br>
packages you're talking about are older versions, and therefore also  
<br>
have dependencies on older system software (e.g., libsysfs).  :(
<br>
<p>Is there any way you can upgrade your MKL to at least be able to use  
<br>
later versions of Open MPI 1.2.x?
<br>
<p><p>On Oct 20, 2009, at 10:14 PM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 20, 2009 at 6:48 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Just curious:
</span><br>
<span class="quotelev1">&gt; Is there a particular reason why you want version 1.2?
</span><br>
<span class="quotelev1">&gt; Yes. Our cluster is installed with Intel MKL-10.0. This version of  
</span><br>
<span class="quotelev1">&gt; MKL contains a static blacs library which is compatible with  
</span><br>
<span class="quotelev1">&gt; OMPI-1.2 as told by Intel support team.
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
<span class="quotelev1">&gt; The current version is 1.3.3!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 20, 2009 at 2:48 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Its required here to install Open MPI 1.2 on a HPC cluster  
</span><br>
<span class="quotelev1">&gt; with - Cent
</span><br>
<span class="quotelev2">&gt; &gt; OS 5.2 Linux, Mellanox IB card, switch and OFED-1.4.
</span><br>
<span class="quotelev2">&gt; &gt; But the configure is failing with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_master openmpi-1.2]# ./configure --prefix=/opt/mpi/openmpi/ 
</span><br>
<span class="quotelev1">&gt; 1.2/intel
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
<span class="quotelev2">&gt; &gt; configure: error: OpenIB support requested but required sysfs not  
</span><br>
<span class="quotelev1">&gt; found.
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10934.php">Mike Hanby: "[OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Previous message:</strong> <a href="10932.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>In reply to:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
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
