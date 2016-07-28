<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 17:14:02 2008" -->
<!-- isoreceived="20080923211402" -->
<!-- sent="Tue, 23 Sep 2008 17:13:54 -0400" -->
<!-- isosent="20080923211354" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="1C7B1C96-FDE3-4042-9FFB-5D342B0167BB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="77958.61689.qm_at_web34801.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2008-09-23 17:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Previous message:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6742.php">Shafagh Jafer: "[OMPI users] which -lmpi is picked?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See that FAQ entry I pointed to.
<br>
<p>${includedir} is the default &quot;include&quot; directory that came in from  
<br>
running OMPI's configure (defaults to $prefix/include).  Likewise for $ 
<br>
{libdir}; it's the &quot;library&quot; directory that came in from running  
<br>
OMPI's configure (defaults to $prefix/lib).
<br>
<p><p>On Sep 23, 2008, at 4:41 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; In mpic++_wrapper-data.txt what do the following statments mean and  
</span><br>
<span class="quotelev1">&gt; where do they exactly point to??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; includedir=${includedir}
</span><br>
<span class="quotelev1">&gt; libdir=${libdir}
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Tue, 9/23/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] where is mpif.h ?
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, September 23, 2008, 5:11 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It actually is expected behavior.  Open MPI's wrappers do not
</span><br>
<span class="quotelev1">&gt; automatically add -I for /usr/include or -L for /usr/lib because these
</span><br>
<span class="quotelev1">&gt; directories are typically in the compiler's/linker's default search
</span><br>
<span class="quotelev1">&gt; path, and having the wrapper compilers manually add them tends to
</span><br>
<span class="quotelev1">&gt; screw up search ordering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can change the default behavior of the wrapper compilers, though
</span><br>
<span class="quotelev1">&gt; -- see this FAQ entry for details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2008, at 6:40 AM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue 2008-09-23 08:50, Simon Hammond wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, it should be there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't the path be automatically included by the mpif77  
</span><br>
<span class="quotelev1">&gt; wrapper?  I
</span><br>
<span class="quotelev2">&gt; &gt; ran into this problem when building BLACS (my default OpenMPI 1.2.7
</span><br>
<span class="quotelev2">&gt; &gt; lives in /usr, MPICH2 is at /opt/mpich2).  The build tries
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ /usr/bin/mpif90 -c -I. -fPIC  -Wno-unused-variable -g
</span><br>
<span class="quotelev2">&gt; &gt; bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev2">&gt; &gt;  Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but this succeeds
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ /usr/bin/mpif90 -c -I. -I/usr/include -fPIC  -Wno-unused-variable
</span><br>
<span class="quotelev2">&gt; &gt; -g   bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and this works fine as well
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ /opt/mpich2/mpif90 -c -I. -fPIC -Wno-unused-variable -g
</span><br>
<span class="quotelev2">&gt; &gt; bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this the expected behavior?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jed
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
<span class="quotelev1">&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>Previous message:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6705.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6742.php">Shafagh Jafer: "[OMPI users] which -lmpi is picked?"</a>
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
