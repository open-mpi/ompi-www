<?
$subject_val = "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 12:35:24 2011" -->
<!-- isoreceived="20110614163524" -->
<!-- sent="Tue, 14 Jun 2011 12:35:19 -0400" -->
<!-- isosent="20110614163519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?" -->
<!-- id="CC6D3B22-1CE3-45C7-9DBD-3C617329156D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DF78613.6030100_at_Glasgow.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-14 12:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16720.php">Alan Nichols: "[OMPI users] OpenMPI roadmap"</a>
<li><strong>Previous message:</strong> <a href="16718.php">Michael Cugley: "[OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<li><strong>In reply to:</strong> <a href="16718.php">Michael Cugley: "[OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are they using a different version of gfortran to compile / link their application than what was used to compile / build Open MPI?
<br>
<p>FWIW: it's typically easier to use the same compilers to build Open MPI as the application.
<br>
<p><p>On Jun 14, 2011, at 12:02 PM, Michael Cugley wrote:
<br>
<p><span class="quotelev1">&gt; I do IT support for people who are using OpenMPI for research.  However, they are reporting the following warnings when compiling code with mpif90:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: warning: libgfortran.so.1, needed by /usr/lib64/openmpi/1.4-gcc/lib/libmpi_f90.so, may conflict with libgfortran.so.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running ldd on the resulting executable gives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    libmpi_f90.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libmpi_f90.so.0 (0x00002b5aac251000)
</span><br>
<span class="quotelev1">&gt;    libmpi_f77.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libmpi_f77.so.0 (0x00002b5aac454000)
</span><br>
<span class="quotelev1">&gt;    libmpi.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libmpi.so.0 (0x0000003df3600000)
</span><br>
<span class="quotelev1">&gt;    libopen-rte.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libopen-rte.so.0 (0x0000003df1a00000)
</span><br>
<span class="quotelev1">&gt;    libopen-pal.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libopen-pal.so.0 (0x0000003df1e00000)
</span><br>
<span class="quotelev1">&gt;    libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003df2e00000)
</span><br>
<span class="quotelev1">&gt;    libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003df2200000)
</span><br>
<span class="quotelev1">&gt;    libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003dff400000)
</span><br>
<span class="quotelev1">&gt;    libgfortran.so.3 =&gt; /usr/lib64/libgfortran.so.3 (0x00002b5aac6a3000)
</span><br>
<span class="quotelev1">&gt;    libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003df2a00000)
</span><br>
<span class="quotelev1">&gt;    libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x0000003e02c00000)
</span><br>
<span class="quotelev1">&gt;    libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003df3200000)
</span><br>
<span class="quotelev1">&gt;    libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003df2600000)
</span><br>
<span class="quotelev1">&gt;    libgfortran.so.1 =&gt; /usr/lib64/libgfortran.so.1 (0x00002b5aac999000)
</span><br>
<span class="quotelev1">&gt;    /lib64/ld-linux-x86-64.so.2 (0x0000003df1600000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like there are attempts to link to two versions of libgfortran, which aren't compatible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not familiar with OpenMPI myself, but the people using it would like to know how these warnings can be dealt with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Michael Cugley
</span><br>
<span class="quotelev1">&gt; School of Engineering IT Support
</span><br>
<span class="quotelev1">&gt; M.Cugley_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please direct IT support queries to itsupport_at_[hidden]
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16720.php">Alan Nichols: "[OMPI users] OpenMPI roadmap"</a>
<li><strong>Previous message:</strong> <a href="16718.php">Michael Cugley: "[OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<li><strong>In reply to:</strong> <a href="16718.php">Michael Cugley: "[OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
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
