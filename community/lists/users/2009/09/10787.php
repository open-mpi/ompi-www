<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 13:45:44 2009" -->
<!-- isoreceived="20090927174544" -->
<!-- sent="Mon, 28 Sep 2009 01:45:38 +0800" -->
<!-- isosent="20090927174538" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="COL102-W53595083E63C66A1D18823A8D70_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="4AB90A42.9040604_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 13:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Loh,
<br>
<p>I used MPI_Init_thread(&amp;argc,&amp;argv, MPI_THREAD_MULTIPLE, &amp;provided); in my program and got provided = 0 which turns out to be the MPI_THREAD_SINGLE. Does this mean that I can not use MPI_THREAD_MULTIPLE model? I write a little program to test the multithreading and it worked sometimes and failed sometimes. It also hang there sometimes. Does this only because the MPI_THREAD_MULTIPLE is not supported or there are some bugs in the program? I attached the little program as follow:
<br>
<p>&nbsp;
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;pthread.h&gt;
<br>
#include &lt;fstream&gt;
<br>
#include &lt;sstream&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
using namespace std;
<br>
#define MSG_QUERY_SIZE 16  //sizeof(MPI_query_msg) = 16
<br>
<p>struct MPI_query_msg
<br>
{
<br>
&nbsp;int flag;   // -1:request cell; 0:query coordinate; 1:there is no cell to grant
<br>
&nbsp;int x;
<br>
&nbsp;int y;
<br>
&nbsp;int ignited;   // if x,y are not negative, then ignited: 0 is not ignited, 1 is ignited
<br>
};
<br>
<p>void* backRecv(void* arg)
<br>
{
<br>
&nbsp;int myid, nprocs;
<br>
&nbsp;pthread_mutex_init(&amp;_dealmutex2, NULL);
<br>
&nbsp;stringstream RANK;
<br>
&nbsp;MPI_Status status;
<br>
&nbsp;MPI_Request  req2;
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
<br>
&nbsp;int left = (myid - 1 + nprocs - 1) % (nprocs - 1);
<br>
&nbsp;int right = (myid + 1) % (nprocs - 1);
<br>
&nbsp;MPI_query_msg rMSG;
<br>
&nbsp;RANK &lt;&lt; myid;
<br>
&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; create background message recv&quot; &lt;&lt; endl;
<br>
&nbsp;int x, y;
<br>
&nbsp;//char c;
<br>
&nbsp;int m;
<br>
&nbsp;int count = 0;
<br>
&nbsp;string filename(&quot;f_&quot;);
<br>
&nbsp;filename += RANK.str();
<br>
&nbsp;filename += &quot;_backRecv.txt&quot;;
<br>
&nbsp;fstream fout(filename.c_str(), ios::out);
<br>
&nbsp;if(!fout)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;can not create the file &quot; &lt;&lt; filename &lt;&lt; endl;
<br>
&nbsp;&nbsp;fout.close();
<br>
&nbsp;&nbsp;exit(1);
<br>
&nbsp;}
<br>
<p>&nbsp;while(true)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;MPI_Recv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, MPI_ANY_SOURCE, 222, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;//MPI_Irecv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, MPI_ANY_SOURCE, 222, MPI_COMM_WORLD, &amp;req2);
<br>
&nbsp;&nbsp;//MPI_Wait(&amp;req2, &amp;status);
<br>
&nbsp;&nbsp;fout &lt;&lt; &quot;BACKREV:&quot; &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; rMSG.flag = &quot; &lt;&lt; rMSG.flag &lt;&lt; &quot; with tag 222&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;if(rMSG.flag == -1)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;fout &lt;&lt; &quot;*******backRecv FINISHED IN &quot; &lt;&lt; myid &lt;&lt; &quot;********&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;&nbsp;fout.close();
<br>
&nbsp;&nbsp;&nbsp;pthread_exit(NULL);
<br>
&nbsp;&nbsp;&nbsp;return 0;
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
&nbsp;int provided;
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
&nbsp;int i = 0, j = 0, m = 0;
<br>
&nbsp;//MPI_Status status;
<br>
&nbsp;MPI_Request  requ1, requ2;
<br>
&nbsp;MPI_Status status1, status2;
<br>
&nbsp;
<br>
&nbsp;MPI_Init_thread(&amp;argc,&amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
&nbsp;//MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid); 
<br>
&nbsp;pthread_mutex_init(&amp;_dealmutex, NULL);
<br>
&nbsp;
<br>
&nbsp;if(myid == nprocs - 1)  // the last one
<br>
&nbsp;{
<br>
&nbsp;&nbsp;if(provided == MPI_THREAD_MULTIPLE)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; got MPI_THREAD_MULTIPLE &quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; MPI_THREAD_MULTIPLE = &quot; &lt;&lt; MPI_THREAD_MULTIPLE &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; MPI_THREAD_SINGLE = &quot; &lt;&lt; MPI_THREAD_SINGLE &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; got provided = &quot; &lt;&lt; provided &lt;&lt; endl;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_query_msg sMSGqueue[50], rMSG;
<br>
&nbsp;&nbsp;for(i=0; i&lt;50; i++)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;sMSGqueue[i].flag = i;
<br>
&nbsp;&nbsp;&nbsp;sMSGqueue[i].x = i;
<br>
&nbsp;&nbsp;&nbsp;sMSGqueue[i].y = i;
<br>
&nbsp;&nbsp;&nbsp;sMSGqueue[i].ignited = i;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;while(j &lt; 50)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status2);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Irecv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;requ2);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Wait(&amp;requ2, &amp;status2);
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;MAIN(&quot; &lt;&lt; j &lt;&lt; &quot;): &quot; &lt;&lt; myid &lt;&lt; &quot; recvs from &quot;&lt;&lt; status2.MPI_SOURCE &lt;&lt; &quot; with tag = &quot; &lt;&lt; status2.MPI_TAG &lt;&lt; &quot; rMSG.flag = &quot; &lt;&lt; rMSG.flag &lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Send(&amp;(sMSGqueue[j]), MSG_QUERY_SIZE, MPI_CHAR, status2.MPI_SOURCE, status2.MPI_TAG, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Isend(&amp;(sMSGqueue[j]), MSG_QUERY_SIZE, MPI_CHAR, status2.MPI_SOURCE, status2.MPI_TAG, MPI_COMM_WORLD, &amp;requ1);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Wait(&amp;requ1, &amp;status1);
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;MAIN(&quot; &lt;&lt; j &lt;&lt; &quot;): &quot; &lt;&lt; myid &lt;&lt; &quot; sends to &quot;&lt;&lt; status2.MPI_SOURCE &lt;&lt; &quot; with tag = &quot; &lt;&lt; status2.MPI_TAG &lt;&lt; &quot; sMSGqueue[j].flag = &quot; &lt;&lt; sMSGqueue[j].flag &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;j++;
<br>
&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;int count = 0;
<br>
&nbsp;&nbsp;while(true)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status2);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Irecv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;requ2);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Wait(&amp;requ2, &amp;status2);
<br>
&nbsp;&nbsp;&nbsp;rMSG.flag = -1;
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, status2.MPI_SOURCE, status2.MPI_TAG, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Isend(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, status2.MPI_SOURCE, status2.MPI_TAG, MPI_COMM_WORLD, &amp;requ1);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Wait(&amp;requ1, &amp;status1);
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;MAIN sends termination to &quot; &lt;&lt; status2.MPI_SOURCE &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;count++;
<br>
&nbsp;&nbsp;&nbsp;if(count == myid)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;*******************************MAIN SUCESS!&quot; &lt;&lt; endl;
<br>
&nbsp;}
<br>
&nbsp;else
<br>
&nbsp;{
<br>
&nbsp;&nbsp;pret1 = pthread_create(&amp;pt1, NULL, backRecv, NULL);
<br>
&nbsp;&nbsp;if(pret1 != 0)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; myid &lt;&lt; &quot;backRecv Thread Create Failed.&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_query_msg sMSG, rMSG;
<br>
&nbsp;&nbsp;rMSG.flag = myid;
<br>
&nbsp;&nbsp;rMSG.x = myid;
<br>
&nbsp;&nbsp;rMSG.y = myid;
<br>
&nbsp;&nbsp;rMSG.ignited = myid;
<br>
&nbsp;&nbsp;sMSG.flag = myid;
<br>
&nbsp;&nbsp;sMSG.x = myid;
<br>
&nbsp;&nbsp;sMSG.y = myid;
<br>
&nbsp;&nbsp;sMSG.ignited = myid;
<br>
&nbsp;&nbsp;int left = (myid - 1 + nprocs - 1) % (nprocs - 1);
<br>
&nbsp;&nbsp;int right = (myid + 1) % (nprocs - 1);
<br>
&nbsp;&nbsp;while(true)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(&amp;sMSG, MSG_QUERY_SIZE, MPI_CHAR, nprocs-1, myid, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Isend(&amp;sMSG, MSG_QUERY_SIZE, MPI_CHAR, nprocs-1, myid, MPI_COMM_WORLD, &amp;requ1);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Wait(&amp;requ1, &amp;status1);
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;SLAVE: &quot; &lt;&lt; myid &lt;&lt; &quot; sends to &quot;&lt;&lt; nprocs-1 &lt;&lt; &quot; sMSG.x = &quot; &lt;&lt; sMSG.x &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, nprocs-1, myid, MPI_COMM_WORLD, &amp;status2);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Irecv(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, nprocs-1, myid, MPI_COMM_WORLD, &amp;requ2);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Wait(&amp;requ2, &amp;status2);
<br>
&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;SLAVE: &quot; &lt;&lt; myid &lt;&lt; &quot; recvs from &quot;&lt;&lt; nprocs-1 &lt;&lt; &quot; rMSG.flag = &quot; &lt;&lt; rMSG.flag &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, right, 222, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Isend(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, right, 222, MPI_COMM_WORLD, &amp;requ1);
<br>
&nbsp;&nbsp;&nbsp;//MPI_Wait(&amp;requ1, &amp;status1);
<br>
<p>&nbsp;&nbsp;&nbsp;if(rMSG.flag == -1)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Send(&amp;rMSG, MSG_QUERY_SIZE, MPI_CHAR, right, 222, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;for(j=0; j&lt;(myid+1)*300; ++j)
<br>
&nbsp;&nbsp;&nbsp;{}
<br>
&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;*******************************SLAVE&quot; &lt;&lt; myid &lt;&lt; &quot; SUCESS!&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;pthread_join(pt1, NULL);
<br>
&nbsp;}
<br>
&nbsp;MPI_Finalize();
<br>
}
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>BTW, if I want to create a background thread which is sort of like a deamon thread, how can I achieve that in MPI programs? Thanks.
<br>
&nbsp;
<br>
<p><p>Date: Tue, 22 Sep 2009 10:32:50 -0700
<br>
From: Eugene.Loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?
<br>
<p>guosong wrote: 
<br>
<p><p>Thanks for responding. I used a linux cluster. I think I would like to create a model that is multithreaded and each thread can make MPI calls. I attached test code as follow. It has two pthreads and there are MPI calls in both of those two threads. In the main function, there are also MPI calls. Should I use a full multithreading?I guess so.  It seems like the created threads are expected to make independent/concurrent message-passing calls.  Do read the link I sent.  You need to convert from MPI_Init to MPI_Init_thread(), asking for a full-multithreaded model and checking that you got it.  Also note in main() that the MPI_Isend() calls should be matched with MPI_Wait() or similar calls.  I guess the parent thread will sit in such calls while the child threads do their own message passing.  Good luck.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
&#212;&#188;&#187;&#225;&#203;&#181;&#178;&#187;&#199;&#229;&#181;&#216;&#183;&#189;&#163;&#191;&#192;&#180;&#202;&#212;&#202;&#212;&#206;&#162;&#200;&#237;&#181;&#216;&#205;&#188;&#215;&#238;&#208;&#194;msn&#187;&#165;&#182;&#175;&#185;&#166;&#196;&#220;&#163;&#161;
<br>
<a href="http://ditu.live.com/?form=TL&amp;swm=1">http://ditu.live.com/?form=TL&amp;swm=1</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10787/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10788.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
