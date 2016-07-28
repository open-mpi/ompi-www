<?
$subject_val = "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 18:37:16 2010" -->
<!-- isoreceived="20101130233716" -->
<!-- sent="Wed, 01 Dec 2010 00:39:28 +0100" -->
<!-- isosent="20101130233928" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3" -->
<!-- id="4CF58B30.5060108_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20101130060542.31128_at_web004.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 18:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14958.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>In reply to:</strong> <a href="14942.php">Hicham Mouline: "[OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14958.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14958.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I don't have boost on my Windows, so I made a very similar program just 
<br>
using MPI, and everything works just fine for me:
<br>
<p>D:\work\OpenMPI\tests\CXX&gt;more hello.cpp
<br>
<p># include &quot;mpi.h&quot;
<br>
<p>using namespace std;
<br>
<p>int main ( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI::Init ( argc, argv );
<br>
&nbsp;&nbsp;&nbsp;size = MPI::COMM_WORLD.Get_size ( );
<br>
&nbsp;&nbsp;&nbsp;rank = MPI::COMM_WORLD.Get_rank ( );
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Process # %d \n&quot;, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI::Finalize ( );
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>D:\work\OpenMPI\tests\CXX&gt;mpirun -np 3 hello.exe : -np 3 hello.exe
<br>
Process # 2
<br>
Process # 4
<br>
Process # 0
<br>
Process # 3
<br>
Process # 5
<br>
Process # 1
<br>
<p><p>May be something related to boost?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2010-11-30 12:05 PM, Hicham Mouline wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; I have successfully run 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 .\test.exe
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; when I try MPMP
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 .\test.exe : -np 3 .\test2.exe
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; where test and test2 are identical (just for a trial), I get this error:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; [hostname:04960] [[47427,1],0]-[[47427,0],0] mca_oob_tcp_peer_send_blocking: send() failed: Unknown error (10057)
</span><br>
<span class="quotelev1">&gt; [hostname:04960] [[47427,1],0] routed:binomial: Connection to lifeline [[47427,0],0] lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Granted this uses boost::mpi, but it worked for SPMD, and the source for the main function is trivial:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;boost/mpi.hpp&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; namespace mpi = boost::mpi;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    mpi::environment env(argc, argv);
</span><br>
<span class="quotelev1">&gt;    mpi::communicator world;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    std::cout&lt;&lt;  &quot;Process #&quot;&lt;&lt;  world.rank()&lt;&lt;  &quot; says&quot;&lt;&lt;  std::endl;
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as far as I understand, there should be 1 world with 6 processes, ranking 0 1 2 ,  3 4 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14958.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>In reply to:</strong> <a href="14942.php">Hicham Mouline: "[OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14958.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14958.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
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
