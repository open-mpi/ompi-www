<?
$subject_val = "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 14:18:30 2008" -->
<!-- isoreceived="20081110191830" -->
<!-- sent="Mon, 10 Nov 2008 11:18:25 -0800 (PST)" -->
<!-- isosent="20081110191825" -->
<!-- name="Oleg V. Zhylin" -->
<!-- email="ovz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="263948.85685.qm_at_web56603.mail.re3.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F42FE93-4D57-4186-926C-5A4BD2A1D43F_at_cisco.com" -->
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
<strong>Date:</strong> 2008-11-10 14:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7261.php">Jeff Squyres: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Right -- OMPI builds shared libraries by default.
</span><br>
<p>What is the proper way to build static libraries from RPM? Or tarball is the only option to accomplish this?
<br>
<p><span class="quotelev1">&gt; Really?  That's odd -- our mpif90 simply links against
</span><br>
<span class="quotelev1">&gt; -lmpi_f90, not specifically .a or .so.  You can run
</span><br>
<span class="quotelev1">&gt; &quot;mpif90 --showme&quot; to see the command that our
</span><br>
<span class="quotelev1">&gt; wrapper *would* execute.  You can also tweak the flags that
</span><br>
<span class="quotelev1">&gt; OMPI passes to the wrapper compilers; see this FAQ entry:
</span><br>
<p><p>Well, I suppose if removing -lmpi_f90 and other mpi libs from command-line would defeat the purpose of building an MPI executable. Moreover ld manual page says that on platforms that support shared libraries it looks for .so first and .a after that. But I've tried Fedora Core 6 and 9 and both give same result and on both strace shows that ld doesn't attempt to look for libmpi_f90.so at all.
<br>
<p>Does anyone has experience building MPI on Fedora? Are there any additional steps required other then yum install openmpi*?
<br>
<p>WBR Oleg V. Zhylin   ovz_at_[hidden]
<br>
<p><p>--- On Mon, 11/10/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?
</span><br>
<span class="quotelev1">&gt; To: ovz_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, November 10, 2008, 8:40 PM
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2008, at 8:27 AM, Oleg V. Zhylin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  I would like to to build OpenMPI from
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.8-1.src.rpm. I've tried plain rpmbuild  and
</span><br>
<span class="quotelev1">&gt; rpmbuild ... --define 'build_all_in_one_rpm 1' but
</span><br>
<span class="quotelev1">&gt; resulting rpm doesn't conain any *.a libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right -- OMPI builds shared libraries by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  I think this is a problem because I've straced
</span><br>
<span class="quotelev1">&gt; mpif90 and discovered that ld invoked from gfortran only
</span><br>
<span class="quotelev1">&gt; looks for libmpi_f90.a in response to -lmpi_f90 inroduced by
</span><br>
<span class="quotelev1">&gt; mpif90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Really?  That's odd -- our mpif90 simply links against
</span><br>
<span class="quotelev1">&gt; -lmpi_f90, not specifically .a or .so.  You can run
</span><br>
<span class="quotelev1">&gt; &quot;mpif90 --showme&quot; to see the command that our
</span><br>
<span class="quotelev1">&gt; wrapper *would* execute.  You can also tweak the flags that
</span><br>
<span class="quotelev1">&gt; OMPI passes to the wrapper compilers; see this FAQ entry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
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
<li><strong>Next message:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7261.php">Jeff Squyres: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
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
