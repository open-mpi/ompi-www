<?
$subject_val = "[OMPI users] Help!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 13:37:27 2009" -->
<!-- isoreceived="20090902173727" -->
<!-- sent="Thu, 3 Sep 2009 01:32:06 +0800" -->
<!-- isosent="20090902173206" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="[OMPI users] Help!" -->
<!-- id="COL102-W434CB791EE4C1F94F1B062A8F00_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] Help!<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 13:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10563.php">George Tsigaridas: "[OMPI users] Open MPI in a PC network running Windows XP"</a>
<li><strong>Previous message:</strong> <a href="10561.php">Lenny Verkhovsky: "Re: [OMPI users] Help: Infiniband interface hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
<li><strong>Reply:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am new to open MPI
<br>
<p>I have a simple program below:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;pthread.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
using namespace std;
<br>
<p>&nbsp;
<br>
<p>void* backID(void* arg)
<br>
{
<br>
&nbsp;int myid;
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; create background ID&quot; &lt;&lt; endl;
<br>
&nbsp;int v;
<br>
&nbsp;MPI_Status status;
<br>
&nbsp;int m;
<br>
&nbsp;int x, y;
<br>
&nbsp;int count = 0;
<br>
<p>&nbsp;while(true)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;MPI_Recv(&amp;m, 1, MPI_INT, MPI_ANY_SOURCE, 222, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; &quot; with tag 222&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;MPI_Send(&amp;m, 1, MPI_INT, status.MPI_SOURCE, 333, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; replies &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; endl;
<br>
&nbsp;&nbsp;count++;
<br>
&nbsp;&nbsp;if(count == 50)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;pthread_exit(NULL);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;};
<br>
}
<br>
<p><p>void* backRecv(void* arg)
<br>
{
<br>
&nbsp;int myid;
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; create background message recv&quot; &lt;&lt; endl;
<br>
&nbsp;int x, y;
<br>
&nbsp;MPI_Status status;
<br>
&nbsp;int m;
<br>
&nbsp;int count = 0;
<br>
<p><p>&nbsp;while(true)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;MPI_Recv(&amp;m, 1, MPI_INT, MPI_ANY_SOURCE, 333, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; &quot; with tag 333&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;count++;
<br>
&nbsp;&nbsp;if(count == 50)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;pthread_exit(NULL);
<br>
&nbsp;&nbsp;} 
<br>
&nbsp;};
<br>
}
<br>
<p>int main(int argc, char **argv) 
<br>
{
<br>
&nbsp;int myid = 0;
<br>
&nbsp;int nprocs = 0;
<br>
&nbsp;pthread_t pt1 = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pthread_t pt2 = 0;;
<br>
&nbsp;int pret1 = 0;
<br>
&nbsp;int pret2 = 0;
<br>
&nbsp;int i = 0, j = 0, t = 0;
<br>
&nbsp;MPI_Status status;
<br>
&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid); 
<br>
&nbsp;&nbsp;pret1 = pthread_create(&amp;pt1, NULL, backRecv, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(pret1 != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot;backRecv Thread Create Failed.&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;pret2 = pthread_create(&amp;pt2, NULL, backID, NULL);
<br>
&nbsp;if(pret2 != 0)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot;backID Thread Create Failed.&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;}
<br>
&nbsp;sleep(5);
<br>
&nbsp;for(i=0; i&lt;50; ++i)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;t = (myid + 1) * i;
<br>
&nbsp;&nbsp;MPI_Send(&amp;myid, 1, MPI_INT, (myid+1)%nprocs, 222, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; sends to &quot;&lt;&lt; (myid+1)%nprocs &lt;&lt; &quot; &quot; &lt;&lt; myid &lt;&lt; endl;
<br>
&nbsp;}
<br>
<p>&nbsp;pthread_join(pt1, NULL);
<br>
&nbsp;pthread_join(pt2, NULL);
<br>
&nbsp;MPI_Finalize();
<br>
}
<br>
<p>&nbsp;
<br>
<p>I create two sub-threads in each main thread and want to see if they can work as a background receiver. But when I run it I got segmentation fault. I do not know why. If I only create one thread, it works fine. The error message I got is:
<br>
<p>#0  0x00002b5d3c80a940 in mca_btl_sm_alloc () from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
<br>
(gdb) bt
<br>
#0  0x00002b5d3c80a940 in mca_btl_sm_alloc () from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00002b5d3bbb91ca in mca_pml_ob1_send_request_start_copy () from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
<br>
#2  0x00002b5d3bbadc86 in mca_pml_ob1_send () from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
<br>
#3  0x00002b5d3945571d in PMPI_Send () from /act/openmpi/gnu/lib/libmpi.so.0
<br>
#4  0x0000000000409139 in main (argc=1, argv=0x7fff718e4db8) at ptest.cpp:125
<br>
This message is from gdb. 
<br>
<p>Any help will be appreciated. 
<br>
<p>Thanks in advance.
<br>
<p>vincent
<br>
<p>_________________________________________________________________
<br>
&#212;&#188;&#187;&#225;&#203;&#181;&#178;&#187;&#199;&#229;&#181;&#216;&#183;&#189;&#163;&#191;&#192;&#180;&#202;&#212;&#202;&#212;&#206;&#162;&#200;&#237;&#181;&#216;&#205;&#188;&#215;&#238;&#208;&#194;msn&#187;&#165;&#182;&#175;&#185;&#166;&#196;&#220;&#163;&#161;
<br>
<a href="http://ditu.live.com/?form=TL&amp;swm=1">http://ditu.live.com/?form=TL&amp;swm=1</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10563.php">George Tsigaridas: "[OMPI users] Open MPI in a PC network running Windows XP"</a>
<li><strong>Previous message:</strong> <a href="10561.php">Lenny Verkhovsky: "Re: [OMPI users] Help: Infiniband interface hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
<li><strong>Reply:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
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
