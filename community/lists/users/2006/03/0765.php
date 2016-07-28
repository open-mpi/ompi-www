<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 20:02:49 2006" -->
<!-- isoreceived="20060303010249" -->
<!-- sent="Thu, 2 Mar 2006 17:02:43 -0800" -->
<!-- isosent="20060303010243" -->
<!-- name="Andy Selle" -->
<!-- email="aselle_at_[hidden]" -->
<!-- subject="[OMPI users] C++ bool type reduction failing" -->
<!-- id="20060303010243.GA17272_at_graphics.stanford.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Andy Selle (<em>aselle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 20:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0766.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
<li><strong>Reply:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to do a reduction using a bool type using the C++ bindings.  I am
<br>
using this sample program to test:
<br>
<p>---------------------------------------------
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc,char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank=MPI::COMM_WORLD.Get_rank();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{bool test=true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bool result;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Allreduce(&amp;test,&amp;result,1,MPI::BOOL,MPI::LOR);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;rank &quot;&lt;&lt;rank&lt;&lt;&quot; got in=&quot;&lt;&lt;test&lt;&lt;&quot; out=&quot;&lt;&lt;result&lt;&lt;std::endl;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
---------------------------------------------
<br>
<p>The result of running this on OpenMPI is:
<br>
---------------------------------------------
<br>
[div:17034] *** An error occurred in MPI_Allreduce: the reduction operation
<br>
MPI_LOR is not defined on the MPI_CXX_BOOL datatype
<br>
[div:17034] *** on communicator MPI_COMM_WORLD
<br>
[div:17034] *** MPI_ERR_OP: invalid reduce operation
<br>
[div:17034] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[div:17034] [0,0,0] ORTE_ERROR_LOG: Not found in file pls_base_proxy.c at line
<br>
183
<br>
---------------------------------------------
<br>
<p>Alternatively on LAM this works fine and I get:
<br>
<p>---------------------------------------------
<br>
aselle_at_div mpi $ mpirun -np 4 ./reduce.lam
<br>
rank 0 got in=1 out=1
<br>
rank 1 got in=1 out=1
<br>
rank 2 got in=1 out=1
<br>
rank 3 got in=1 out=1
<br>
---------------------------------------------
<br>
<p>Looking at OpenMPI's source it doesn't seem like there is a type map entry for
<br>
the bool case in the op_predefined.c
<br>
<p>---------
<br>
#undef current_func
<br>
#define current_func(a, b) ((a) || (b))
<br>
/* C integer */
<br>
FUNC_FUNC(lor, int, int)
<br>
FUNC_FUNC(lor, long, long)
<br>
FUNC_FUNC(lor, short, short)
<br>
FUNC_FUNC(lor, unsigned_short, unsigned short)
<br>
FUNC_FUNC(lor, unsigned, unsigned)
<br>
FUNC_FUNC(lor, unsigned_long, unsigned long)
<br>
#if HAVE_LONG_LONG
<br>
FUNC_FUNC(lor, long_long_int, long long int)
<br>
FUNC_FUNC(lor, long_long, long long)
<br>
FUNC_FUNC(lor, unsigned_long_long, unsigned long long)
<br>
#endif
<br>
/* Logical */
<br>
#if OMPI_HAVE_FORTRAN_LOGICAL
<br>
FUNC_FUNC(lor, fortran_logical, ompi_fortran_logical_t)
<br>
#endif
<br>
<p>I am using OpenMPI 1.0.1.
<br>
<p>-Andy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0766.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
<li><strong>Reply:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
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
