<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 12:56:28 2006" -->
<!-- isoreceived="20060412165628" -->
<!-- sent="Wed, 12 Apr 2006 10:56:24 -0600" -->
<!-- isosent="20060412165624" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SilverStorm IB" -->
<!-- id="op.s7wmoaz9ies9li_at_rygel.lnxi.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EF4BA4F6-590F-421E-BB0B-3B28054F8566_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-04-12 12:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1036.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1038.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1038.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 12 Apr 2006 10:04:18 -0600, Brian Barrett &lt;brbarret_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; We've tested against the SilverStorm drivers for OS X with success,
</span><br>
<span class="quotelev1">&gt; but I don't think anyone has tried the Linux drivers.  A quick poll
</span><br>
<span class="quotelev1">&gt; of the developers show that none of us has access to a Linux cluster
</span><br>
<span class="quotelev1">&gt; using the SilverStorm stack, so we can't really look too deeply at
</span><br>
<span class="quotelev1">&gt; the problem.  If you compile with --enable-debug, are there any error
</span><br>
<span class="quotelev1">&gt; messages that show up?
</span><br>
<p>O.o ROFL.  Schr&#195;&#182;dinger's bug strikes again.  Turning on debugging has  
<br>
changed the outcome.
<br>
<p>I re-compiled, but this time with the following (additional) configure  
<br>
options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mem-debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mem-profile
<br>
<p>Now it is working.
<br>
<p>(I'll try it again with only the --enable-debug, and no mem-debug,  
<br>
mem-profile).  Still...
<br>
<p>One other thing I did is re-compile the benchmark (in this case, IMB, the  
<br>
Intel MPI Benchmark).  The original benchmark (compiled with Open MPI, but  
<br>
that particular Open MPI was not compiled with the above options) does  
<br>
generate some errors, but I may just need to take its advice and re-link...
<br>
<p>***Begin Errors***
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_errhandler_null' has different size in  
<br>
shared object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_datatype_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_int' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_byte' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_sum' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_float' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_world' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_double' has different size in shared object,  
<br>
consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_op_null' has different size in shared  
<br>
object, consider re-linking
<br>
IMB-MPI1.ss: Symbol `ompi_mpi_comm_self' has different size in shared  
<br>
object, consider re-linking
<br>
Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
<br>
Failing at addr:0x2a99610600
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xa8
<br>
****
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1036.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1038.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1038.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
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
