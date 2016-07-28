<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 13:49:44 2006" -->
<!-- isoreceived="20060412174944" -->
<!-- sent="Wed, 12 Apr 2006 11:49:34 -0600" -->
<!-- isosent="20060412174934" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SilverStorm IB" -->
<!-- id="op.s7wo4wh2ies9li_at_rygel.lnxi.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="op.s7wmoaz9ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 13:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1037.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>In reply to:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a quick follow-up:  Now even /without/ the debug flag, it just  
<br>
works.  I'm wondering if there was some sort of weird action going on with  
<br>
the subnet manager... but that's not Open MPI's problem.  Still, I'm quite  
<br>
pleased that it works, with almost no effort on my (or hopefully anybody  
<br>
else's) part.
<br>
<p>On Wed, 12 Apr 2006 10:56:24 -0600, Troy Telford  
<br>
&lt;ttelford_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 12 Apr 2006 10:04:18 -0600, Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've tested against the SilverStorm drivers for OS X with success,
</span><br>
<span class="quotelev2">&gt;&gt; but I don't think anyone has tried the Linux drivers.  A quick poll
</span><br>
<span class="quotelev2">&gt;&gt; of the developers show that none of us has access to a Linux cluster
</span><br>
<span class="quotelev2">&gt;&gt; using the SilverStorm stack, so we can't really look too deeply at
</span><br>
<span class="quotelev2">&gt;&gt; the problem.  If you compile with --enable-debug, are there any error
</span><br>
<span class="quotelev2">&gt;&gt; messages that show up?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; O.o ROFL.  Schr&#195;&#182;dinger's bug strikes again.  Turning on debugging has
</span><br>
<span class="quotelev1">&gt; changed the outcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I re-compiled, but this time with the following (additional) configure
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
<span class="quotelev1">&gt; One other thing I did is re-compile the benchmark (in this case, IMB, the
</span><br>
<span class="quotelev1">&gt; Intel MPI Benchmark).  The original benchmark (compiled with Open MPI,  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; that particular Open MPI was not compiled with the above options) does
</span><br>
<span class="quotelev1">&gt; generate some errors, but I may just need to take its advice and  
</span><br>
<span class="quotelev1">&gt; re-link...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***Begin Errors***
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in
</span><br>
<span class="quotelev1">&gt; shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared
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
<p><p><p><pre>
-- 
Troy Telford
Linux Networx
ttelford_at_[hidden]
(801) 649-1356
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1037.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>In reply to:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
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
