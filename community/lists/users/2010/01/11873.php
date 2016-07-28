<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 15:01:14 2010" -->
<!-- isoreceived="20100125200114" -->
<!-- sent="Mon, 25 Jan 2010 15:01:08 -0500" -->
<!-- isosent="20100125200108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="4E9ECA0F-126C-4CE8-803C-EE938D19E499_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1264423971.25637.58.camel_at_boabdilmec" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 15:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11875.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="11875.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't have any clues offhand.  We *have* had problems with the Pathscale compiler in the past that were never resolved by their support crew.  However, they were of the &quot;variables weren't initialized and the process generally aborts&quot; kind of failure, not a &quot;persistent hang&quot; kind of failure.
<br>
<p>Can you tell where in MPI_Init the process is hanging?  E.g., can you build Open MPI with debugging enabled (such as by passing CFLAGS=-g to OMPI's configure line) and then attach a debugger to a hung process and see what it's stuck on?
<br>
<p><p>On Jan 25, 2010, at 7:52 AM, Rafael Arco Arredondo wrote:
<br>
<p><span class="quotelev1">&gt; Hello:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having some issues with Open MPI 1.4.1 and Pathscale compiler
</span><br>
<span class="quotelev1">&gt; (version 3.2). Open MPI builds successfully with the following configure
</span><br>
<span class="quotelev1">&gt; arguments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt; --with-sge --enable-static CC=pathcc CXX=pathCC F77=pathf90 F90=pathf90
</span><br>
<span class="quotelev1">&gt; FC=pathf90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (we have OpenFabrics 1.2 Infiniband drivers, by the way)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, applications hang on MPI_Init (or maybe MPI_Comm_rank or
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size, a basic hello-world anyway doesn't print 'Hello World
</span><br>
<span class="quotelev1">&gt; from node...'). I tried running them with and without SGE. Same result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This hello-world works flawlessly when I build Open MPI with gcc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt; --with-sge --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This successful execution runs in one machine only, so it shouldn't use
</span><br>
<span class="quotelev1">&gt; Infiniband, and it also works when several nodes are used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to build previous versions of Open MPI with Pathscale (1.2.6
</span><br>
<span class="quotelev1">&gt; and 1.3.2, particularly). I tried building version 1.4.1 both with
</span><br>
<span class="quotelev1">&gt; Pathscale 3.2 and Pathscale 3.1. No difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rafael Arco Arredondo
</span><br>
<span class="quotelev1">&gt; Centro de Servicios de Inform&#225;tica y Redes de Comunicaciones
</span><br>
<span class="quotelev1">&gt; Universidad de Granada
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11875.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="11875.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
