<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 08:13:59 2008" -->
<!-- isoreceived="20080923121359" -->
<!-- sent="Tue, 23 Sep 2008 08:11:41 -0400" -->
<!-- isosent="20080923121141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="83F324E4-2910-4963-BFF5-454F66818EBA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080923104054.GB6663_at_brakk.ethz.ch" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 08:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6696.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6695.php">Jed Brown: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It actually is expected behavior.  Open MPI's wrappers do not  
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6696.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6695.php">Jed Brown: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
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
