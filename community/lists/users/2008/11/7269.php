<?
$subject_val = "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 20:21:16 2008" -->
<!-- isoreceived="20081111012116" -->
<!-- sent="Mon, 10 Nov 2008 17:21:12 -0800 (PST)" -->
<!-- isosent="20081111012112" -->
<!-- name="Oleg V. Zhylin" -->
<!-- email="ovz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="937522.79559.qm_at_web56604.mail.re3.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C99CC1B-B17E-407A-9498-2A6AD733A733_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?<br>
<strong>From:</strong> Oleg V. Zhylin (<em>ovz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 20:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Previous message:</strong> <a href="7268.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;My goal is to run some software that uses MPI so for now I the most standard setup. 
<br>
<p><span class="quotelev1">&gt; Are you saying that you have libmpi_f90.so available and
</span><br>
<span class="quotelev1">&gt; when you try to run, you get missing symbol errors?  Or are
</span><br>
<span class="quotelev1">&gt; you failing to compile/link at all?
</span><br>
<p>&nbsp;&nbsp;Linking stage fails. When I use mpif90 to produce actual executable ld reports error that it can't find -lmpi_f90. The libmpi_f90.so is in /usr/libs but, again, as I've discovered ld doesn't even try to look for it. Maybe this is ld problem, or ld in conjunction with gfortran...
<br>
<p><span class="quotelev1">&gt; I always build via source (but I'm a developer, so my
</span><br>
<span class="quotelev1">&gt; bias is a little different ;-) ).  I'm unfamiliar with
</span><br>
<span class="quotelev1">&gt; Fedora's yum repositories...
</span><br>
<p>&nbsp;yum repositories for FC9 provide rpms for openmpi 1.2.4-2, but straightforward installation resulted in problem with -lmpi_f90. As I've said before I've tried this on two machines and their configurations are not exotic ones. I suppose the predicament is something obvious so I hope to here from people with openmpi experience under Fedora.
<br>
<p>WBR Oleg V. Zhylin   ovz_at_[hidden]
<br>
<p><p>--- On Mon, 11/10/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?
</span><br>
<span class="quotelev1">&gt; To: ovz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, November 10, 2008, 9:26 PM
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2008, at 2:18 PM, Oleg V. Zhylin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Right -- OMPI builds shared libraries by default.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What is the proper way to build static libraries from
</span><br>
<span class="quotelev1">&gt; RPM? Or tarball is the only option to accomplish this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can pass any options to OMPI's configure script
</span><br>
<span class="quotelev1">&gt; through the rpmbuild interface, such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild \
</span><br>
<span class="quotelev1">&gt;     --define 'configure_options CFLAGS=-g
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr/local/ofed --disable-shared
</span><br>
<span class="quotelev1">&gt; --enable-static' ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But be aware that static linking is not for the weak,
</span><br>
<span class="quotelev1">&gt; especially if you're using high-speed networks.  Check
</span><br>
<span class="quotelev1">&gt; out both of these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Really?  That's odd -- our mpif90 simply links
</span><br>
<span class="quotelev1">&gt; against
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -lmpi_f90, not specifically .a or .so.  You can
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpif90 --showme&quot; to see the command
</span><br>
<span class="quotelev1">&gt; that our
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrapper *would* execute.  You can also tweak the
</span><br>
<span class="quotelev1">&gt; flags that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI passes to the wrapper compilers; see this FAQ
</span><br>
<span class="quotelev1">&gt; entry:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, I suppose if removing -lmpi_f90 and other mpi
</span><br>
<span class="quotelev1">&gt; libs from command-line would defeat the purpose of building
</span><br>
<span class="quotelev1">&gt; an MPI executable. Moreover ld manual page says that on
</span><br>
<span class="quotelev1">&gt; platforms that support shared libraries it looks for .so
</span><br>
<span class="quotelev1">&gt; first and .a after that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's pretty standard behavior that has been around
</span><br>
<span class="quotelev1">&gt; for forever.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But I've tried Fedora Core 6 and 9 and both give
</span><br>
<span class="quotelev1">&gt; same result and on both strace shows that ld doesn't
</span><br>
<span class="quotelev1">&gt; attempt to look for libmpi_f90.so at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you saying that you have libmpi_f90.so available and
</span><br>
<span class="quotelev1">&gt; when you try to run, you get missing symbol errors?  Or are
</span><br>
<span class="quotelev1">&gt; you failing to compile/link at all?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone has experience building MPI on Fedora?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: building on Fedora should be little different than
</span><br>
<span class="quotelev1">&gt; building on other Linux systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are there any additional steps required other then yum
</span><br>
<span class="quotelev1">&gt; install openmpi*?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I always build via source (but I'm a developer, so my
</span><br>
<span class="quotelev1">&gt; bias is a little different ;-) ).  I'm unfamiliar with
</span><br>
<span class="quotelev1">&gt; Fedora's yum repositories...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Previous message:</strong> <a href="7268.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
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
