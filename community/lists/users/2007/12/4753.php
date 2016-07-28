<?
$subject_val = "[OMPI users] No output from mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 26 04:08:16 2007" -->
<!-- isoreceived="20071226090816" -->
<!-- sent="Wed, 26 Dec 2007 14:38:10 +0530" -->
<!-- isosent="20071226090810" -->
<!-- name="Varun R" -->
<!-- email="nigen7_at_[hidden]" -->
<!-- subject="[OMPI users] No output from mpirun" -->
<!-- id="c647be930712260108h577539c3v6405263d94558dbc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] No output from mpirun<br>
<strong>From:</strong> Varun R (<em>nigen7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-26 04:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4754.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4752.php">kay kay: "[OMPI users] OpenMPI/Myrinet dynamic process management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Reply:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just installed Openmpi 1.2.2 on my new openSUSE 10.3 system. All my
<br>
programs(C++) compile well
<br>
with 'mpic++' but when I run them with 'mpirun' i get no output and I
<br>
immediately get back the prompt. I tried the options '--verbose' and
<br>
got nothing. When I tried '--debug-daemons' I get the following
<br>
output:
<br>
<p>Daemon [0,0,1] checking in as pid 6308 on host suse-nigen
<br>
[suse-nigen:06308] [0,0,1] orted: received launch callback
<br>
[suse-nigen:06308] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[suse-nigen:06308] [0,0,1] orted_recv_pls: received exit
<br>
<p><p>Also when I simply run the executable without mpirun it gives the right
<br>
output. I also tried inserting a long 'for' loop in the program to check if
<br>
it's getting executed at all and as I suspected mpirun still returns
<br>
immediately to the prompt. Here's my program:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>using namespace std;
<br>
<p>int main(int argc,char* argv[])
<br>
{
<br>
int rank,nproc;
<br>
cout&lt;&lt;&quot;Before&quot;&lt;&lt;endl;
<br>
<p>MPI_Init(&amp;argc,&amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
MPI_Comm_size(MPI_COMM_WORLD,&amp;nproc);
<br>
cout&lt;&lt;&quot;Middle&quot;&lt;&lt;endl;
<br>
MPI_Finalize();
<br>
<p>int a = 5;
<br>
for(int i=0; i&lt; 100000; i++)
<br>
for(int j=0; j&lt;10000; j++)
<br>
a += 4;
<br>
<p>if(rank == 0)
<br>
cout&lt;&lt;&quot;Rank 0&quot;&lt;&lt;endl;
<br>
<p>cout&lt;&lt;&quot;Over&quot;&lt;&lt;a&lt;&lt;endl;
<br>
<p>return 0;
<br>
}
<br>
<p>I also tried version 1.2.4 but still no luck. Could someone please tell me
<br>
what could be wrong here?
<br>
<p>Thanks,
<br>
Varun
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4753/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4754.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4752.php">kay kay: "[OMPI users] OpenMPI/Myrinet dynamic process management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Reply:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
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
