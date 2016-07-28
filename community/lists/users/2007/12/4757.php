<?
$subject_val = "Re: [OMPI users] No output from mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 30 17:45:37 2007" -->
<!-- isoreceived="20071230224537" -->
<!-- sent="Sun, 30 Dec 2007 23:45:28 +0100" -->
<!-- isosent="20071230224528" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No output from mpirun" -->
<!-- id="E7C7E7B8-A6E0-460E-8C2E-31DCC09C5D39_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c647be930712260108h577539c3v6405263d94558dbc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] No output from mpirun<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-30 17:45:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4758.php">Jim Kusznir: "[OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4756.php">Doug Reeder: "[OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
<li><strong>In reply to:</strong> <a href="4753.php">Varun R: "[OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4760.php">Varun R: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Reply:</strong> <a href="4760.php">Varun R: "Re: [OMPI users] No output from mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 26.12.2007 um 10:08 schrieb Varun R:
<br>
<p><span class="quotelev1">&gt; I just installed Openmpi 1.2.2 on my new openSUSE 10.3 system. All  
</span><br>
<span class="quotelev1">&gt; my programs(C++) compile well with 'mpic++' but when I run them  
</span><br>
<span class="quotelev1">&gt; with 'mpirun' i get no output and I immediately get back the  
</span><br>
<span class="quotelev1">&gt; prompt. I tried the options '--verbose' and got nothing. When I  
</span><br>
<span class="quotelev1">&gt; tried '--debug-daemons' I get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 6308 on host suse-nigen
</span><br>
<span class="quotelev1">&gt; [suse-nigen:06308] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev1">&gt; [suse-nigen:06308] [0,0,1] orted_recv_pls: received message from  
</span><br>
<span class="quotelev1">&gt; [0,0,0]
</span><br>
<span class="quotelev1">&gt; [suse-nigen:06308] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also when I simply run the executable without mpirun it gives the  
</span><br>
<span class="quotelev1">&gt; right output. I also tried inserting a long 'for' loop in the  
</span><br>
<span class="quotelev1">&gt; program to check if it's getting executed at all and as I suspected  
</span><br>
<span class="quotelev1">&gt; mpirun still returns immediately to the prompt. Here's my program:
</span><br>
<p>is the mpirun the one from Open MPI?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int rank,nproc;
</span><br>
<span class="quotelev1">&gt; cout&lt;&lt;&quot;Before&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;nproc);
</span><br>
<span class="quotelev1">&gt; cout&lt;&lt;&quot;Middle&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int a = 5;
</span><br>
<span class="quotelev1">&gt; for(int i=0; i&lt; 100000; i++)
</span><br>
<span class="quotelev1">&gt; for(int j=0; j&lt;10000; j++)
</span><br>
<span class="quotelev1">&gt; a += 4;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(rank == 0)
</span><br>
<span class="quotelev1">&gt; cout&lt;&lt;&quot;Rank 0&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cout&lt;&lt;&quot;Over&quot;&lt;&lt;a&lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried version 1.2.4 but still no luck. Could someone please  
</span><br>
<span class="quotelev1">&gt; tell me what could be wrong here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Varun
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
<li><strong>Next message:</strong> <a href="4758.php">Jim Kusznir: "[OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4756.php">Doug Reeder: "[OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
<li><strong>In reply to:</strong> <a href="4753.php">Varun R: "[OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4760.php">Varun R: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Reply:</strong> <a href="4760.php">Varun R: "Re: [OMPI users] No output from mpirun"</a>
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
