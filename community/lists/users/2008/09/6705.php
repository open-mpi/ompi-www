<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 16:41:24 2008" -->
<!-- isoreceived="20080923204124" -->
<!-- sent="Tue, 23 Sep 2008 13:41:20 -0700 (PDT)" -->
<!-- isosent="20080923204120" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="77958.61689.qm_at_web34801.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="83F324E4-2910-4963-BFF5-454F66818EBA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] where is mpif.h ?<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 16:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6704.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In mpic++_wrapper-data.txt what do the following statments mean and where do they exactly point to??
<br>
&#160;
<br>
----------
<br>
includedir=${includedir}
<br>
libdir=${libdir}
<br>
----------
<br>
<p>--- On Tue, 9/23/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] where is mpif.h ?
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, September 23, 2008, 5:11 AM
<br>
<p>It actually is expected behavior.  Open MPI's wrappers do not  
<br>
automatically add -I for /usr/include or -L for /usr/lib because these  
<br>
directories are typically in the compiler's/linker's default search  
<br>
path, and having the wrapper compilers manually add them tends to  
<br>
screw up search ordering.
<br>
<p>You can change the default behavior of the wrapper compilers, though  
<br>
-- see this FAQ entry for details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
<br>
<p><p>On Sep 23, 2008, at 6:40 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Tue 2008-09-23 08:50, Simon Hammond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it should be there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't the path be automatically included by the mpif77 wrapper?  I
</span><br>
<span class="quotelev1">&gt; ran into this problem when building BLACS (my default OpenMPI 1.2.7
</span><br>
<span class="quotelev1">&gt; lives in /usr, MPICH2 is at /opt/mpich2).  The build tries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ /usr/bin/mpif90 -c -I. -fPIC  -Wno-unused-variable -g  
</span><br>
<span class="quotelev1">&gt; bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev1">&gt;  Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this succeeds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ /usr/bin/mpif90 -c -I. -I/usr/include -fPIC  -Wno-unused-variable  
</span><br>
<span class="quotelev1">&gt; -g   bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and this works fine as well
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ /opt/mpich2/mpif90 -c -I. -fPIC -Wno-unused-variable -g  
</span><br>
<span class="quotelev1">&gt; bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the expected behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed
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
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6704.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
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
