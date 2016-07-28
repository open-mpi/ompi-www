<?
$subject_val = "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 14:27:03 2008" -->
<!-- isoreceived="20081110192703" -->
<!-- sent="Mon, 10 Nov 2008 14:26:57 -0500" -->
<!-- isosent="20081110192657" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="1C99CC1B-B17E-407A-9498-2A6AD733A733_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="263948.85685.qm_at_web56603.mail.re3.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 14:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7264.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2008, at 2:18 PM, Oleg V. Zhylin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Right -- OMPI builds shared libraries by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the proper way to build static libraries from RPM? Or  
</span><br>
<span class="quotelev1">&gt; tarball is the only option to accomplish this?
</span><br>
<p>You can pass any options to OMPI's configure script through the  
<br>
rpmbuild interface, such as:
<br>
<p>rpmbuild \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--define 'configure_options CFLAGS=-g --with-openib=/usr/local/ 
<br>
ofed --disable-shared --enable-static' ...
<br>
<p>But be aware that static linking is not for the weak, especially if  
<br>
you're using high-speed networks.  Check out both of these:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps</a>
<br>
<p><span class="quotelev2">&gt;&gt; Really?  That's odd -- our mpif90 simply links against
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_f90, not specifically .a or .so.  You can run
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpif90 --showme&quot; to see the command that our
</span><br>
<span class="quotelev2">&gt;&gt; wrapper *would* execute.  You can also tweak the flags that
</span><br>
<span class="quotelev2">&gt;&gt; OMPI passes to the wrapper compilers; see this FAQ entry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I suppose if removing -lmpi_f90 and other mpi libs from  
</span><br>
<span class="quotelev1">&gt; command-line would defeat the purpose of building an MPI executable.  
</span><br>
<span class="quotelev1">&gt; Moreover ld manual page says that on platforms that support shared  
</span><br>
<span class="quotelev1">&gt; libraries it looks for .so first and .a after that.
</span><br>
<p>That's pretty standard behavior that has been around for forever.
<br>
<p><span class="quotelev1">&gt; But I've tried Fedora Core 6 and 9 and both give same result and on  
</span><br>
<span class="quotelev1">&gt; both strace shows that ld doesn't attempt to look for libmpi_f90.so  
</span><br>
<span class="quotelev1">&gt; at all.
</span><br>
<p>Are you saying that you have libmpi_f90.so available and when you try  
<br>
to run, you get missing symbol errors?  Or are you failing to compile/ 
<br>
link at all?
<br>
<p><span class="quotelev1">&gt; Does anyone has experience building MPI on Fedora?
</span><br>
<p>FWIW: building on Fedora should be little different than building on  
<br>
other Linux systems.
<br>
<p><span class="quotelev1">&gt; Are there any additional steps required other then yum install  
</span><br>
<span class="quotelev1">&gt; openmpi*?
</span><br>
<p><p>I always build via source (but I'm a developer, so my bias is a little  
<br>
different ;-) ).  I'm unfamiliar with Fedora's yum repositories...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7264.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
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
