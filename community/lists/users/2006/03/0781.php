<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar  4 13:36:42 2006" -->
<!-- isoreceived="20060304183642" -->
<!-- sent="Sat, 4 Mar 2006 13:36:35 -0500" -->
<!-- isosent="20060304183635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ bool type reduction failing" -->
<!-- id="C2EDE610-FB55-4539-BEC3-924F302079E5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060303010243.GA17272_at_graphics.stanford.edu" -->
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
<strong>Date:</strong> 2006-03-04 13:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<li><strong>Previous message:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>In reply to:</strong> <a href="0765.php">Andy Selle: "[OMPI users] C++ bool type reduction failing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yoinks -- shame on me for not looking at the expanded reduction  
<br>
datatype/op tables in MPI-2 for C++.  Double shame on me because I  
<br>
wrote that section.  :-)
<br>
<p>I've committed the fix to the trunk; it'll be in the upcoming 1.0.2  
<br>
release.
<br>
<p><p>On Mar 2, 2006, at 8:02 PM, Andy Selle wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to do a reduction using a bool type using the C++  
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<li><strong>Previous message:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>In reply to:</strong> <a href="0765.php">Andy Selle: "[OMPI users] C++ bool type reduction failing"</a>
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
