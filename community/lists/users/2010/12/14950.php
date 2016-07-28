<?
$subject_val = "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 01:33:22 2010" -->
<!-- isoreceived="20101201063322" -->
<!-- sent="Wed, 1 Dec 2010 06:33:35 -0000" -->
<!-- isosent="20101201063335" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3" -->
<!-- id="002f01cb9121$aed8e770$0c8ab650$_at_org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CF58B30.5060108_at_hlrs.de" -->
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
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 01:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14951.php">Hicham Mouline: "[OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="../../2010/11/14949.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="../../2010/11/14949.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14952.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14952.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 30 November 2010 23:39
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Hicham Mouline; Rainer Keller
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] failure to launch MPMD program on win32 w
</span><br>
<span class="quotelev1">&gt; 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have boost on my Windows, so I made a very similar program just
</span><br>
<span class="quotelev1">&gt; using MPI, and everything works just fine for me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D:\work\OpenMPI\tests\CXX&gt;more hello.cpp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main ( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI::Init ( argc, argv );
</span><br>
<span class="quotelev1">&gt;    size = MPI::COMM_WORLD.Get_size ( );
</span><br>
<span class="quotelev1">&gt;    rank = MPI::COMM_WORLD.Get_rank ( );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Process # %d \n&quot;, rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI::Finalize ( );
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D:\work\OpenMPI\tests\CXX&gt;mpirun -np 3 hello.exe : -np 3 hello.exe
</span><br>
<span class="quotelev1">&gt; Process # 2
</span><br>
<span class="quotelev1">&gt; Process # 4
</span><br>
<span class="quotelev1">&gt; Process # 0
</span><br>
<span class="quotelev1">&gt; Process # 3
</span><br>
<span class="quotelev1">&gt; Process # 5
</span><br>
<span class="quotelev1">&gt; Process # 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May be something related to boost?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I've had this issue with -np 3 : -np 3 but not with -np 2: -np 2 or -np 1: -np 4 or other combinations.
<br>
I've also rebuilt from vs2008 with the libs advapi32.lib Ws2_32.lib shlwapi.lib as visible in the text file: share\openmpi\mpic++.exe-wrapper-data.txt, and the problem seemed to stop happening.
<br>
<p>so now it is working.
<br>
<p>I assume I will be able to do this on several windows boxes? Do they need to be all 32bit or 64bit or can I mix?
<br>
<p>regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14951.php">Hicham Mouline: "[OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="../../2010/11/14949.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="../../2010/11/14949.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14952.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14952.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
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
