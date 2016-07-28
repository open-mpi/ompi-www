<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  3 07:57:43 2007" -->
<!-- isoreceived="20070503115743" -->
<!-- sent="Thu, 03 May 2007 13:57:27 +0200" -->
<!-- isosent="20070503115727" -->
<!-- name="Chaloupka Zden&#236;k" -->
<!-- email="chaloupka_at_[hidden]" -->
<!-- subject="[OMPI users] MPI compiling error" -->
<!-- id="4639CE27.1040409_at_ufe.cz" -->
<!-- charset="ISO-8859-2" -->
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
<strong>From:</strong> Chaloupka Zden&#236;k (<em>chaloupka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-03 07:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Previous message:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Reply:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Reply:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I tried to compile following code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
int main(int argv, char *argc[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argv, &amp;argc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) printf(&quot;Starting program\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Pocet vstupnich parametru: %d a argumenty: %s\n&quot;, argv, *argc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>and I get this error as an output:
<br>
<p>[chaloz_at_chaloupka src]$ mpicc main.cc
<br>
/tmp/ccBJb7ZI.o: In function
<br>
`__static_initialization_and_destruction_0(int,
<br>
int)':main.cc:(.text+0x23): undefined reference to
<br>
`std::ios_base::Init::Init()'
<br>
/tmp/ccBJb7ZI.o: In function `__tcf_0':main.cc:(.text+0x66): undefined
<br>
reference to `std::ios_base::Init::~Init()'
<br>
/tmp/ccBJb7ZI.o: In function
<br>
`MPI::Intracomm::convert_info_to_mpi_info(int, MPI::Info
<br>
const*)':main.cc:(.text._ZN3MPI9Intracomm24convert_info_to_mpi_infoEiPKNS_4InfoE[MPI::Intracomm::convert_info_to_mpi_info(int, 
<br>
<p><p>MPI::Info const*)]+0x1e): undefined reference to `operator
<br>
new[](unsigned long)'
<br>
/tmp/ccBJb7ZI.o: In function `MPI::Datatype::Get_contents(int, int, int,
<br>
int*, long*, MPI::Datatype*)
<br>
const':main.cc:(.text._ZNK3MPI8Datatype12Get_contentsEiiiPiPlPS0_[MPI::Datatype::Get_contents(int, 
<br>
<p><p>int, int, int*, long*, MPI::Datatype*) const]+0x2b): undefined reference
<br>
to `operator new[](unsigned long)'
<br>
:main.cc:(.text._ZNK3MPI8Datatype12Get_contentsEiiiPiPlPS0_[MPI::Datatype::Get_contents(int, 
<br>
<p><p>int, int, int*, long*, MPI::Datatype*) const]+0xb0): undefined reference
<br>
to `operator delete[](void*)'
<br>
<p>and so on, it is much more longer. Has anyone idea what's wrong?
<br>
<p>MrCarlos
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Previous message:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Reply:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Reply:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
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
