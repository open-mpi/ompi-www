<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 15:22:08 2010" -->
<!-- isoreceived="20100125202208" -->
<!-- sent="Mon, 25 Jan 2010 21:21:55 +0100" -->
<!-- isosent="20100125202155" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="1264450915.7109.7.camel_at_y-boda.ydc.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E9ECA0F-126C-4CE8-803C-EE938D19E499_at_cisco.com" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 15:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1 - Do you have problems with openmpi 1.4 too? (I don't, haven't built
<br>
1.4.1 yet)
<br>
2 - There is a bug in the pathscale compiler with -fPIC and -g that
<br>
generates incorrect dwarf2 data so debuggers get really confused and
<br>
will have BIG problems debugging the code. I'm chasing them to get a
<br>
fix...
<br>
3 - Do you have an example code that have problems?
<br>
<p>On Mon, 2010-01-25 at 15:01 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm afraid I don't have any clues offhand.  We *have* had problems with the Pathscale compiler in the past that were never resolved by their support crew.  However, they were of the &quot;variables weren't initialized and the process generally aborts&quot; kind of failure, not a &quot;persistent hang&quot; kind of failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you tell where in MPI_Init the process is hanging?  E.g., can you build Open MPI with debugging enabled (such as by passing CFLAGS=-g to OMPI's configure line) and then attach a debugger to a hung process and see what it's stuck on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2010, at 7:52 AM, Rafael Arco Arredondo wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm having some issues with Open MPI 1.4.1 and Pathscale compiler
</span><br>
<span class="quotelev2">&gt; &gt; (version 3.2). Open MPI builds successfully with the following configure
</span><br>
<span class="quotelev2">&gt; &gt; arguments:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev2">&gt; &gt; --with-sge --enable-static CC=pathcc CXX=pathCC F77=pathf90 F90=pathf90
</span><br>
<span class="quotelev2">&gt; &gt; FC=pathf90
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (we have OpenFabrics 1.2 Infiniband drivers, by the way)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, applications hang on MPI_Init (or maybe MPI_Comm_rank or
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size, a basic hello-world anyway doesn't print 'Hello World
</span><br>
<span class="quotelev2">&gt; &gt; from node...'). I tried running them with and without SGE. Same result.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This hello-world works flawlessly when I build Open MPI with gcc:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev2">&gt; &gt; --with-sge --enable-static
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This successful execution runs in one machine only, so it shouldn't use
</span><br>
<span class="quotelev2">&gt; &gt; Infiniband, and it also works when several nodes are used.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I was able to build previous versions of Open MPI with Pathscale (1.2.6
</span><br>
<span class="quotelev2">&gt; &gt; and 1.3.2, particularly). I tried building version 1.4.1 both with
</span><br>
<span class="quotelev2">&gt; &gt; Pathscale 3.2 and Pathscale 3.1. No difference.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rafa
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Rafael Arco Arredondo
</span><br>
<span class="quotelev2">&gt; &gt; Centro de Servicios de Inform&#225;tica y Redes de Comunicaciones
</span><br>
<span class="quotelev2">&gt; &gt; Universidad de Granada
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
