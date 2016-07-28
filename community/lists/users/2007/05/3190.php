<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  3 08:13:38 2007" -->
<!-- isoreceived="20070503121338" -->
<!-- sent="Thu, 03 May 2007 14:11:16 +0200" -->
<!-- isosent="20070503121116" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI compiling error" -->
<!-- id="4639D164.9020907_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4639CE27.1040409_at_ufe.cz" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-03 08:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Previous message:</strong> <a href="3189.php">Chaloupka Zden&#236;k: "[OMPI users] MPI compiling error"</a>
<li><strong>In reply to:</strong> <a href="3189.php">Chaloupka Zden&#236;k: "[OMPI users] MPI compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Chaloupka Zden&#236;k wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I tried to compile following code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; int main(int argv, char *argc[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argv, &amp;argc);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) printf(&quot;Starting program\n&quot;);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Pocet vstupnich parametru: %d a argumenty: %s\n&quot;, argv, *argc);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I get this error as an output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [chaloz_at_chaloupka src]$ mpicc main.cc
</span><br>
you try to compile a C file with an C++ ending with an C compiler, can you
<br>
try it either by renaming the file to 'main.c' or use the mpiCC/mpc++ wrapper!
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt; /tmp/ccBJb7ZI.o: In function
</span><br>
<span class="quotelev1">&gt; `__static_initialization_and_destruction_0(int,
</span><br>
<span class="quotelev1">&gt; int)':main.cc:(.text+0x23): undefined reference to
</span><br>
<span class="quotelev1">&gt; `std::ios_base::Init::Init()'
</span><br>
<span class="quotelev1">&gt; /tmp/ccBJb7ZI.o: In function `__tcf_0':main.cc:(.text+0x66): undefined
</span><br>
<span class="quotelev1">&gt; reference to `std::ios_base::Init::~Init()'
</span><br>
<span class="quotelev1">&gt; /tmp/ccBJb7ZI.o: In function
</span><br>
<span class="quotelev1">&gt; `MPI::Intracomm::convert_info_to_mpi_info(int, MPI::Info
</span><br>
<span class="quotelev1">&gt; const*)':main.cc:(.text._ZN3MPI9Intracomm24convert_info_to_mpi_infoEiPKNS_4InfoE[MPI::Intracomm::convert_info_to_mpi_info(int, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI::Info const*)]+0x1e): undefined reference to `operator
</span><br>
<span class="quotelev1">&gt; new[](unsigned long)'
</span><br>
<span class="quotelev1">&gt; /tmp/ccBJb7ZI.o: In function `MPI::Datatype::Get_contents(int, int, int,
</span><br>
<span class="quotelev1">&gt; int*, long*, MPI::Datatype*)
</span><br>
<span class="quotelev1">&gt; const':main.cc:(.text._ZNK3MPI8Datatype12Get_contentsEiiiPiPlPS0_[MPI::Datatype::Get_contents(int, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int, int, int*, long*, MPI::Datatype*) const]+0x2b): undefined reference
</span><br>
<span class="quotelev1">&gt; to `operator new[](unsigned long)'
</span><br>
<span class="quotelev1">&gt; :main.cc:(.text._ZNK3MPI8Datatype12Get_contentsEiiiPiPlPS0_[MPI::Datatype::Get_contents(int, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int, int, int*, long*, MPI::Datatype*) const]+0xb0): undefined reference
</span><br>
<span class="quotelev1">&gt; to `operator delete[](void*)'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and so on, it is much more longer. Has anyone idea what's wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MrCarlos
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>Previous message:</strong> <a href="3189.php">Chaloupka Zden&#236;k: "[OMPI users] MPI compiling error"</a>
<li><strong>In reply to:</strong> <a href="3189.php">Chaloupka Zden&#236;k: "[OMPI users] MPI compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3191.php">Adrian Knoth: "Re: [OMPI users] MPI compiling error"</a>
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
