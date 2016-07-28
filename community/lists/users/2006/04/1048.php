<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 22:59:17 2006" -->
<!-- isoreceived="20060413025917" -->
<!-- sent="Wed, 12 Apr 2006 22:59:03 -0400" -->
<!-- isosent="20060413025903" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SilverStorm IB" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF671B9B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] SilverStorm IB" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 22:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1047.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1051.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1051.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, the &quot;has a different size...&quot; errors means that you may not have been linking against the shared libraries that you thought you were.  This typically means that the executable expected to find an object in a library of a given size, but the actual size of the object was different.  So some kind of mismatch was occurring, and the segv at the end was therefore not surprising.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 12, 2006 10:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SilverStorm IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 12 Apr 2006 10:04:18 -0600, Brian Barrett 
</span><br>
<span class="quotelev1">&gt; &lt;brbarret_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We've tested against the SilverStorm drivers for OS X with success,
</span><br>
<span class="quotelev2">&gt; &gt; but I don't think anyone has tried the Linux drivers.  A quick poll
</span><br>
<span class="quotelev2">&gt; &gt; of the developers show that none of us has access to a Linux cluster
</span><br>
<span class="quotelev2">&gt; &gt; using the SilverStorm stack, so we can't really look too deeply at
</span><br>
<span class="quotelev2">&gt; &gt; the problem.  If you compile with --enable-debug, are there 
</span><br>
<span class="quotelev1">&gt; any error
</span><br>
<span class="quotelev2">&gt; &gt; messages that show up?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; O.o ROFL.  Schr&#246;dinger's bug strikes again.  Turning on 
</span><br>
<span class="quotelev1">&gt; debugging has  
</span><br>
<span class="quotelev1">&gt; changed the outcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I re-compiled, but this time with the following (additional) 
</span><br>
<span class="quotelev1">&gt; configure  
</span><br>
<span class="quotelev1">&gt; options:
</span><br>
<span class="quotelev1">&gt; 	--enable-debug
</span><br>
<span class="quotelev1">&gt; 	--enable-mem-debug
</span><br>
<span class="quotelev1">&gt; 	--enable-mem-profile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now it is working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I'll try it again with only the --enable-debug, and no mem-debug,  
</span><br>
<span class="quotelev1">&gt; mem-profile).  Still...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One other thing I did is re-compile the benchmark (in this 
</span><br>
<span class="quotelev1">&gt; case, IMB, the  
</span><br>
<span class="quotelev1">&gt; Intel MPI Benchmark).  The original benchmark (compiled with 
</span><br>
<span class="quotelev1">&gt; Open MPI, but  
</span><br>
<span class="quotelev1">&gt; that particular Open MPI was not compiled with the above 
</span><br>
<span class="quotelev1">&gt; options) does  
</span><br>
<span class="quotelev1">&gt; generate some errors, but I may just need to take its advice 
</span><br>
<span class="quotelev1">&gt; and re-link...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***Begin Errors***
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different 
</span><br>
<span class="quotelev1">&gt; size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in 
</span><br>
<span class="quotelev1">&gt; shared object,  
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size 
</span><br>
<span class="quotelev1">&gt; in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2a99610600
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xa8
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Troy Telford
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1047.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1051.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1051.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
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
