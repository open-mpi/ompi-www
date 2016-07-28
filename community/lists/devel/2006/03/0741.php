<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar  4 13:40:36 2006" -->
<!-- isoreceived="20060304184036" -->
<!-- sent="Sat, 4 Mar 2006 13:40:27 -0500" -->
<!-- isosent="20060304184027" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C++ bool type reduction failing" -->
<!-- id="3895547D-E302-4DA7-A6B3-4CEA30BF0703_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060303200515.GA14373_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-04 13:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Previous message:</strong> <a href="0740.php">Leslie Watter: "[OMPI devel] MPI Applications"</a>
<li><strong>In reply to:</strong> <a href="0739.php">Andy Selle: "[OMPI devel] C++ bool type reduction failing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To tie up this thread for the web archives -- I just replied to the  
<br>
original post (short version: definite bug in OMPI, committed fix to  
<br>
trunk, will be in upcoming 1.0.2 release):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2006/03/0781.php">http://www.open-mpi.org/community/lists/users/2006/03/0781.php</a>
<br>
<p><p>On Mar 3, 2006, at 3:05 PM, Andy Selle wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the repeat from the user list, but in retrospect, it is  
</span><br>
<span class="quotelev1">&gt; probably
</span><br>
<span class="quotelev1">&gt; more appropriate on this list, but here goes:
</span><br>
<span class="quotelev1">&gt; I am trying to do a reduction using a bool type using the C++  
</span><br>
<span class="quotelev1">&gt; bindings.  I am
</span><br>
<span class="quotelev1">&gt; using this sample program to test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI::Init();
</span><br>
<span class="quotelev1">&gt;     int rank=MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {bool test=true;
</span><br>
<span class="quotelev1">&gt;     bool result;
</span><br>
<span class="quotelev1">&gt;     MPI::COMM_WORLD.Allreduce(&amp;test,&amp;result,1,MPI::BOOL,MPI::LOR);
</span><br>
<span class="quotelev1">&gt;     std::cout&lt;&lt;&quot;rank &quot;&lt;&lt;rank&lt;&lt;&quot; got in=&quot;&lt;&lt;test&lt;&lt;&quot;  
</span><br>
<span class="quotelev1">&gt; out=&quot;&lt;&lt;result&lt;&lt;std::endl;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The result of running this on OpenMPI is:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; [div:17034] *** An error occurred in MPI_Allreduce: the reduction  
</span><br>
<span class="quotelev1">&gt; operation
</span><br>
<span class="quotelev1">&gt; MPI_LOR is not defined on the MPI_CXX_BOOL datatype
</span><br>
<span class="quotelev1">&gt; [div:17034] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [div:17034] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [div:17034] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [div:17034] [0,0,0] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; pls_base_proxy.c at line
</span><br>
<span class="quotelev1">&gt; 183
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively on LAM this works fine and I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; aselle_at_div mpi $ mpirun -np 4 ./reduce.lam
</span><br>
<span class="quotelev1">&gt; rank 0 got in=1 out=1
</span><br>
<span class="quotelev1">&gt; rank 1 got in=1 out=1
</span><br>
<span class="quotelev1">&gt; rank 2 got in=1 out=1
</span><br>
<span class="quotelev1">&gt; rank 3 got in=1 out=1
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at OpenMPI's source it doesn't seem like there is a type  
</span><br>
<span class="quotelev1">&gt; map entry for
</span><br>
<span class="quotelev1">&gt; the bool case in the op_predefined.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; #undef current_func
</span><br>
<span class="quotelev1">&gt; #define current_func(a, b) ((a) || (b))
</span><br>
<span class="quotelev1">&gt; /* C integer */
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, int, int)
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, long, long)
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, short, short)
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, unsigned_short, unsigned short)
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, unsigned, unsigned)
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, unsigned_long, unsigned long)
</span><br>
<span class="quotelev1">&gt; #if HAVE_LONG_LONG
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, long_long_int, long long int)
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, long_long, long long)
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; /* Logical */
</span><br>
<span class="quotelev1">&gt; #if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev1">&gt; FUNC_FUNC(lor, fortran_logical, ompi_fortran_logical_t)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.0.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Previous message:</strong> <a href="0740.php">Leslie Watter: "[OMPI devel] MPI Applications"</a>
<li><strong>In reply to:</strong> <a href="0739.php">Andy Selle: "[OMPI devel] C++ bool type reduction failing"</a>
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
