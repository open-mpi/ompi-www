<?
$subject_val = "Re: [OMPI users] No output from mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 08:42:56 2007" -->
<!-- isoreceived="20071231134256" -->
<!-- sent="Mon, 31 Dec 2007 19:12:49 +0530" -->
<!-- isosent="20071231134249" -->
<!-- name="Varun R" -->
<!-- email="nigen7_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No output from mpirun" -->
<!-- id="c647be930712310542y4bf7279cwcaf9271b97b69c1e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E7C7E7B8-A6E0-460E-8C2E-31DCC09C5D39_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Varun R (<em>nigen7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 08:42:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4761.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4759.php">Neeraj Chourasia: "[OMPI users] orte in persistent mode"</a>
<li><strong>In reply to:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Reply:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the 'mpirun' is the one from OpenMPI. And btw mpich worked perfectly
<br>
for me. It's only ompi that's giving me these problems. Do I have to setup
<br>
ssh or something? Because I remember doing that for mpich.
<br>
<p>On Dec 31, 2007 4:15 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 26.12.2007 um 10:08 schrieb Varun R:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just installed Openmpi 1.2.2 on my new openSUSE 10.3 system. All
</span><br>
<span class="quotelev2">&gt; &gt; my programs(C++) compile well with 'mpic++' but when I run them
</span><br>
<span class="quotelev2">&gt; &gt; with 'mpirun' i get no output and I immediately get back the
</span><br>
<span class="quotelev2">&gt; &gt; prompt. I tried the options '--verbose' and got nothing. When I
</span><br>
<span class="quotelev2">&gt; &gt; tried '--debug-daemons' I get the following output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Daemon [0,0,1] checking in as pid 6308 on host suse-nigen
</span><br>
<span class="quotelev2">&gt; &gt; [suse-nigen:06308] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev2">&gt; &gt; [suse-nigen:06308] [0,0,1] orted_recv_pls: received message from
</span><br>
<span class="quotelev2">&gt; &gt; [0,0,0]
</span><br>
<span class="quotelev2">&gt; &gt; [suse-nigen:06308] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also when I simply run the executable without mpirun it gives the
</span><br>
<span class="quotelev2">&gt; &gt; right output. I also tried inserting a long 'for' loop in the
</span><br>
<span class="quotelev2">&gt; &gt; program to check if it's getting executed at all and as I suspected
</span><br>
<span class="quotelev2">&gt; &gt; mpirun still returns immediately to the prompt. Here's my program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is the mpirun the one from Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; using namespace std;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc,char* argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; int rank,nproc;
</span><br>
<span class="quotelev2">&gt; &gt; cout&lt;&lt;&quot;Before&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;nproc);
</span><br>
<span class="quotelev2">&gt; &gt; cout&lt;&lt;&quot;Middle&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int a = 5;
</span><br>
<span class="quotelev2">&gt; &gt; for(int i=0; i&lt; 100000; i++)
</span><br>
<span class="quotelev2">&gt; &gt; for(int j=0; j&lt;10000; j++)
</span><br>
<span class="quotelev2">&gt; &gt; a += 4;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if(rank == 0)
</span><br>
<span class="quotelev2">&gt; &gt; cout&lt;&lt;&quot;Rank 0&quot;&lt;&lt;endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cout&lt;&lt;&quot;Over&quot;&lt;&lt;a&lt;&lt;endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also tried version 1.2.4 but still no luck. Could someone please
</span><br>
<span class="quotelev2">&gt; &gt; tell me what could be wrong here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Varun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4761.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4759.php">Neeraj Chourasia: "[OMPI users] orte in persistent mode"</a>
<li><strong>In reply to:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Reply:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
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
