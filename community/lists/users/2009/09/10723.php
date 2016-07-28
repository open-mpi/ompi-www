<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 11:52:14 2009" -->
<!-- isoreceived="20090922155214" -->
<!-- sent="Tue, 22 Sep 2009 23:52:09 +0800" -->
<!-- isosent="20090922155209" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="COL102-W207D2539603EBE96410309A8DC0_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="4AB8F08F.4010002_at_sun.com" -->
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
<strong>Date:</strong> 2009-09-22 11:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for responding. I used a linux cluster. I think I would like to create a model that is multithreaded and each thread can make MPI calls. I attached test code as follow. It has two pthreads and there are MPI calls in both of those two threads. In the main function, there are also MPI calls. Should I use a full multithreading? Thanks again.
<br>
<p>&nbsp;
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
<p>pthread_mutex_t _dealmutex;
<br>
pthread_mutex_t _dealmutex1;
<br>
pthread_mutex_t _dealmutex2;
<br>
<p>void* backID(void* arg)
<br>
{
<br>
&nbsp;int myid;
<br>
&nbsp;pthread_mutex_init(&amp;_dealmutex1, NULL);
<br>
&nbsp;stringstream RANK;
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;RANK &lt;&lt; myid;
<br>
&nbsp;cout &lt;&lt; myid &lt;&lt; &quot; create background ID&quot; &lt;&lt; endl;
<br>
&nbsp;int v;
<br>
&nbsp;MPI_Status status;
<br>
&nbsp;MPI_Request  requ1, requ2;
<br>
&nbsp;int m;
<br>
&nbsp;int x, y;
<br>
&nbsp;int count = 0;
<br>
&nbsp;string filename(&quot;f_&quot;);
<br>
&nbsp;filename += RANK.str();
<br>
&nbsp;filename += &quot;_backID.txt&quot;;
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
&nbsp;while(true)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;MPI_Irecv(&amp;m, 1, MPI_INT, MPI_ANY_SOURCE, 222, MPI_COMM_WORLD, &amp;requ1);
<br>
&nbsp;&nbsp;MPI_Wait(&amp;requ1, &amp;status);
<br>
&nbsp;&nbsp;//fout &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; &quot; with tag 222&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;//pthread_mutex_lock(&amp;_dealmutex1);
<br>
&nbsp;&nbsp;//cout &lt;&lt; &quot;BACKID_REV:&quot; &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; &quot; with tag 222&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;fout &lt;&lt; &quot;BACKID_REV:&quot; &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; &quot; with tag 222&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;//fflush(stdout);
<br>
&nbsp;&nbsp;fout.flush();
<br>
<p>&nbsp;&nbsp;//pthread_mutex_unlock(&amp;_dealmutex1);
<br>
&nbsp;&nbsp;//m++;
<br>
&nbsp;&nbsp;MPI_Send(&amp;m, 1, MPI_INT, status.MPI_SOURCE, 333, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;//MPI_Isend(&amp;m, 1, MPI_INT, status.MPI_SOURCE, 333, MPI_COMM_WORLD, &amp;requ2);
<br>
&nbsp;&nbsp;//pthread_mutex_lock(&amp;_dealmutex1);
<br>
&nbsp;&nbsp;//fout &lt;&lt; myid &lt;&lt; &quot; replies &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; endl;
<br>
&nbsp;&nbsp;//cout &lt;&lt; &quot;BACKID_SEND:&quot; &lt;&lt; myid &lt;&lt; &quot; replies &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; endl;
<br>
&nbsp;&nbsp;fout &lt;&lt; &quot;BACKID_SEND:&quot; &lt;&lt; myid &lt;&lt; &quot; replies &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; endl;
<br>
&nbsp;&nbsp;//fflush(stdout);
<br>
&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;//pthread_mutex_unlock(&amp;_dealmutex);
<br>
&nbsp;&nbsp;count++;
<br>
&nbsp;&nbsp;//pthread_mutex_unlock(&amp;_dealmutex1);
<br>
&nbsp;&nbsp;if(count == 50)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;fout &lt;&lt; &quot;*******backID FINISHED IN &quot; &lt;&lt; myid &lt;&lt; &quot;********&quot; &lt;&lt; endl;
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
<p><p>void* backRecv(void* arg)
<br>
{
<br>
&nbsp;int myid;
<br>
&nbsp;pthread_mutex_init(&amp;_dealmutex2, NULL);
<br>
&nbsp;stringstream RANK;
<br>
&nbsp;MPI_Status status;
<br>
&nbsp;MPI_Request  requ2;
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
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
&nbsp;&nbsp;MPI_Irecv(&amp;m, 1, MPI_INT, MPI_ANY_SOURCE, 333, MPI_COMM_WORLD, &amp;requ2);
<br>
&nbsp;&nbsp;MPI_Wait(&amp;requ2, &amp;status);  
<br>
&nbsp;&nbsp;//pthread_mutex_lock(&amp;_dealmutex2);
<br>
&nbsp;&nbsp;fout &lt;&lt; &quot;BACKREV:&quot; &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; &quot; with tag 333&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;//cout &lt;&lt; &quot;BACKREV:&quot; &lt;&lt; myid &lt;&lt; &quot; recv from &quot; &lt;&lt; status.MPI_SOURCE &lt;&lt; &quot; m = &quot; &lt;&lt; m &lt;&lt; &quot; with tag 333&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;//fflush(stdout);
<br>
&nbsp;&nbsp;//pthread_mutex_unlock(&amp;_dealmutex);
<br>
&nbsp;&nbsp;//pthread_mutex_lock(&amp;_dealmutex);
<br>
&nbsp;&nbsp;count++;
<br>
&nbsp;&nbsp;//pthread_mutex_unlock(&amp;_dealmutex2);
<br>
&nbsp;&nbsp;if(count == 50)
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
&nbsp;//MPI_Status status;
<br>
&nbsp;MPI_Request  requ1;
<br>
&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid); 
<br>
&nbsp;pthread_mutex_init(&amp;_dealmutex, NULL);
<br>
&nbsp;
<br>
&nbsp;for(i=0; i&lt;50; ++i)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;t = (myid + 1) * i;
<br>
&nbsp;&nbsp;MPI_Isend(&amp;myid, 1, MPI_INT, (myid+1)%nprocs, 222, MPI_COMM_WORLD, &amp;requ1);
<br>
&nbsp;&nbsp;//MPI_Sendrecv(&amp;t, 1, MPI_INT, (myid+1)%nprocs, 222, &amp;j, 1, MPI_INT, (myid+1)%nprocs, 333, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;MAIN:&quot; &lt;&lt; myid &lt;&lt; &quot; sends to &quot;&lt;&lt; (myid+1)%nprocs &lt;&lt; &quot; &quot; &lt;&lt; myid &lt;&lt; endl;
<br>
&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;}
<br>
&nbsp;pret1 = pthread_create(&amp;pt1, NULL, backRecv, NULL);
<br>
&nbsp;if(pret1 != 0)
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
&nbsp;//for(i=0; i&lt;10; ++i)
<br>
&nbsp;//{
<br>
&nbsp;// c += i;
<br>
&nbsp;// MPI_Send(&amp;c, 1, MPI_CHAR, (myid+1)%nprocs, 111, MPI_COMM_WORLD);
<br>
&nbsp;// cout &lt;&lt; myid &lt;&lt; &quot; send &quot; &lt;&lt; (char)c &lt;&lt; &quot; to &quot; &lt;&lt; (myid+1)%nprocs &lt;&lt; endl;
<br>
&nbsp;//}
<br>
&nbsp;pthread_join(pt2, NULL);
<br>
&nbsp;cout &lt;&lt; &quot;*******************************THREAD 2 SUCESS!&quot; &lt;&lt; endl;
<br>
&nbsp;pthread_join(pt1, NULL);
<br>
&nbsp;cout &lt;&lt; &quot;*******************************THREAD 1 SUCESS!&quot; &lt;&lt; endl;
<br>
&nbsp;MPI_Finalize();
<br>
&nbsp;cout &lt;&lt; &quot;*******************************MAIN SUCESS!&quot; &lt;&lt; endl;
<br>
}
<br>
<p><p>This peice of code works fine sometimes. But it can fail too and segmentation will occur. I will read the reference you point out. Thanks.
<br>
&nbsp;
<br>
<p><p>Date: Tue, 22 Sep 2009 08:43:11 -0700
<br>
From: Eugene.Loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?
<br>
<p>guosong wrote: 
<br>
<p><p>Hi all,
<br>
I would like to write a multi-thread parallel program. I used pthread. Basicly, I want to create two background threads besides  the main thread(process). For example, if I use &quot;-np 4&quot;, the program should have 4 main processes on four processors and two background threads for each main process. So there should be 8 threads totally.Wouldn't there be 4 main threads and 8 &quot;slave&quot; threads for a total of 12 threads?  Anyhow, doesn't matter.
<br>
<p>I'm not sure where you're starting, but you should at least have a basic understanding of the different sorts of multithreaded programming models in MPI.  One is that each process is single threaded.  Another is the processes are multithreaded, but only the main thread makes MPI calls.  Another is multithreaded, but only one MPI call at a time.  Finally, there can be full multithreading.  You have to decide which of these programming models you want and which is supported by your MPI (or, if OMPI, how OMPI was built).
<br>
<p>For more information, try the MPI_Init_thread() man page or
<br>
<a href="http://www.mpi-forum.org./docs/mpi21-report.pdf">http://www.mpi-forum.org./docs/mpi21-report.pdf</a> ... see Section 12.4 on &quot;MPI and Threads&quot;.
<br>
<p>I wrote a test program and it worked unpredictable. Sometimes I got the result I want, but sometimes the program got segmentation fault. I used MPI_Isend and MPI_Irecv for sending and recving. I do not know why? I attached the error message as follow:
<br>
&nbsp;
<br>
[cheetah:29780] *** Process received signal ***
<br>
[cheetah:29780] Signal: Segmentation fault (11)
<br>
[cheetah:29780] Signal code: Address not mapped (1)
<br>
[cheetah:29780] Failing at address: 0x10
<br>
[cheetah:29779] *** Process received signal ***
<br>
[cheetah:29779] Signal: Segmentation fault (11)
<br>
[cheetah:29779] Signal code: Address not mapped (1)
<br>
[cheetah:29779] Failing at address: 0x10
<br>
[cheetah:29780] [ 0] /lib64/libpthread.so.0 [0x334b00de70]
<br>
[cheetah:29780] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so [0x2b90e1227940]
<br>
[cheetah:29780] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b90e05d61ca]
<br>
[cheetah:29780] [ 3] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b90e05cac86]
<br>
[cheetah:29780] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d) [0x2b90dde7271d]
<br>
[cheetah:29780] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]
<br>
[cheetah:29780] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]
<br>
[cheetah:29780] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334! a4d1e3d]
<br>
[cheetah:29780] *** End of error message ***
<br>
[cheetah:29779] [ 0] /lib64/libpthread.so.0 [0x334b00de70]
<br>
[cheetah:29779] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so [0x2b39785c0940]
<br>
[cheetah:29779] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b397796f1ca]
<br>
[cheetah:29779] [ 3] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b3977963c86]
<br>
[cheetah:29779] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d) [0x2b397520b71d]
<br>
[cheetah:29779] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]
<br>
[cheetah:29779] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]
<br>
[cheetah:29779] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334a4d1e3d]
<br>
[cheetah:29779] *** End of error message ***
<br>
<p>&nbsp;
<br>
I used gdb to &quot;bt&quot; the error and I got :
<br>
&nbsp;Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00002b90e1227940 in mca_btl_sm_alloc ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
<br>
(gdb) bt
<br>
#0  0x00002b90e1227940 in mca_btl_sm_alloc ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00002b90e05d61ca in mca_pml_ob1_send_request_start_copy ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
<br>
#2  0x00002b90e05cac86 in mca_pml_ob1_send ()
<br>
&nbsp;&nbsp;&nbsp;from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so
<br>
#3  0x00002b90dde7271d in PMPI_Send () from /act/openmpi/gnu/lib/libmpi.so.0
<br>
#4  0x0000000000409929 in backID (arg=0x0) at pt_muti.cpp:50
<br>
#5  0x000000334b0062f7 in start_thread () from /lib64/libpthread.so.0
<br>
#6  0x000000334a4d1e3d in clone () from /lib64/libc.so.6
<br>
So can anyone give me some suggestions or advice. Thanks very much. 		 	   		  
<br>
_________________________________________________________________
<br>
&#180;&#242;&#185;&#164;&#163;&#172;&#213;&#245;&#199;&#174;&#163;&#172;&#194;&#242;&#183;&#191;&#215;&#211;&#163;&#172;&#191;&#236;&#192;&#180;MClub&#210;&#187;&#198;&#240;&#161;&#177;&#189;&#240;&#206;&#221;&#178;&#216;&#189;&#191;&#161;&#177;&#163;&#161;
<br>
<a href="http://club.msn.cn/?from=10">http://club.msn.cn/?from=10</a>
<br>
--_8cf70815-85b5-44f5-8859-ebdc96183bbd_
<br>
Content-Type: text/html; charset=&quot;gb2312&quot;
<br>
Content-Transfer-Encoding: 8bit
<br>
<p>&lt;html&gt;
<br>
&lt;head&gt;
<br>
&lt;style&gt;&lt;!--
<br>
.hmmessage P
<br>
{
<br>
margin:0px;
<br>
padding:0px
<br>
}
<br>
body.hmmessage
<br>
{
<br>
font-size: 10pt;
<br>
font-family:Verdana
<br>
}
<br>
--&gt;&lt;/style&gt;
<br>
&lt;/head&gt;
<br>
&lt;body class='hmmessage'&gt;
<br>
Thanks for responding. I&amp;nbsp;used a&amp;nbsp;linux cluster. I think I would like to create a model that is&amp;nbsp;multithreaded and each&amp;nbsp;thread can make MPI calls.&amp;nbsp;I attached&amp;nbsp;test code as follow. It&amp;nbsp;has&amp;nbsp;two pthreads and there are MPI calls&amp;nbsp;in both of those two threads. In the main function, there&amp;nbsp;are also&amp;nbsp;MPI calls.&amp;nbsp;Should I&amp;nbsp;use a full multithreading? Thanks again.&lt;BR&gt;
<br>
&amp;nbsp;&lt;BR&gt;
<br>
&amp;nbsp;&lt;BR&gt;
<br>
#include &amp;lt;iostream&amp;gt;&lt;BR&gt;#include &amp;lt;pthread.h&amp;gt;&lt;BR&gt;#include &amp;lt;fstream&amp;gt;&lt;BR&gt;#include &amp;lt;sstream&amp;gt;&lt;BR&gt;#include &amp;lt;string.h&amp;gt;&lt;BR&gt;#include &quot;mpi.h&quot;&lt;BR&gt;using namespace std;&lt;BR&gt;
<br>
pthread_mutex_t _dealmutex;&lt;BR&gt;pthread_mutex_t _dealmutex1;&lt;BR&gt;pthread_mutex_t _dealmutex2;&lt;BR&gt;
<br>
void* backID(void* arg)&lt;BR&gt;{&lt;BR&gt;&amp;nbsp;int myid;&lt;BR&gt;&amp;nbsp;pthread_mutex_init(&amp;amp;_dealmutex1, NULL);&lt;BR&gt;&amp;nbsp;stringstream RANK;&lt;BR&gt;&amp;nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;amp;myid);&lt;BR&gt;&amp;nbsp;RANK &amp;lt;&amp;lt; myid;&lt;BR&gt;&amp;nbsp;cout &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; create background ID&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;int v;&lt;BR&gt;&amp;nbsp;MPI_Status status;&lt;BR&gt;&amp;nbsp;MPI_Request&amp;nbsp; requ1, requ2;&lt;BR&gt;&amp;nbsp;int m;&lt;BR&gt;&amp;nbsp;int x, y;&lt;BR&gt;&amp;nbsp;int count = 0;&lt;BR&gt;&amp;nbsp;string filename(&quot;f_&quot;);&lt;BR&gt;&amp;nbsp;filename += RANK.str();&lt;BR&gt;&amp;nbsp;filename += &quot;_backID.txt&quot;;&lt;BR&gt;&amp;nbsp;fstream fout(filename.c_str(), ios::out);&lt;BR&gt;&amp;nbsp;if(!fout)&lt;BR&gt;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;cout &amp;lt;&amp;lt; &quot;can not create the file &quot; &amp;lt;&amp;lt; filename &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout.close();&lt;BR&gt;&amp;nbsp;&amp;nbsp;exit(1);&lt;BR&gt;&amp;nbsp;}&lt;BR&gt;&amp;nbsp;while(true)&lt;BR&gt;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;MPI_Irecv(&amp;amp;m, 1, MPI_INT, MPI_ANY_SOURCE, 222, MPI_COMM_WORLD, &amp;amp;requ1);&lt;BR&gt;&amp;nbsp;&amp;nbsp;MPI_Wait(&amp;amp;requ1, &amp;amp;status);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//fout &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; recv from &quot; &amp;lt;&amp;lt; status.MPI_SOU<br>
RCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; &quot; with tag 222&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_lock(&amp;amp;_dealmutex1);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//cout &amp;lt;&amp;lt; &quot;BACKID_REV:&quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; recv from &quot; &amp;lt;&amp;lt; status.MPI_SOURCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; &quot; with tag 222&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout &amp;lt;&amp;lt; &quot;BACKID_REV:&quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; recv from &quot; &amp;lt;&amp;lt; status.MPI_SOURCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; &quot; with tag 222&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//fflush(stdout);&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout.flush();&lt;BR&gt;
<br>
&amp;nbsp;&amp;nbsp;//pthread_mutex_unlock(&amp;amp;_dealmutex1);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//m++;&lt;BR&gt;&amp;nbsp;&amp;nbsp;MPI_Send(&amp;amp;m, 1, MPI_INT, status.MPI_SOURCE, 333, MPI_COMM_WORLD);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//MPI_Isend(&amp;amp;m, 1, MPI_INT, status.MPI_SOURCE, 333, MPI_COMM_WORLD, &amp;amp;requ2);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_lock(&amp;amp;_dealmutex1);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//fout &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; replies &quot; &amp;lt;&amp;lt; status.MPI_SOURCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//cout &amp;lt;&amp;lt; &quot;BACKID_SEND:&quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; replies &quot; &amp;lt;&amp;lt; status.MPI_SOURCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout &amp;lt;&amp;lt; &quot;BACKID_SEND:&quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; replies &quot; &amp;lt;&amp;lt; status.MPI_SOURCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//fflush(stdout);&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout.flush();&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_unlock(&amp;amp;_dealmutex);&lt;BR&gt;&amp;nbsp;&amp;nbsp;count++;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_unlock(&amp;amp;_dealmutex1);&lt;BR&gt;&amp;nbsp;&amp;nbsp;if(count == 50)&lt;BR&gt;&amp;nbsp;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;fout &amp;lt;&amp;lt<br>
; &quot;*******backID FINISHED IN &quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot;********&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;fout.flush();&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;fout.close();&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;pthread_exit(NULL);&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;return 0;&lt;BR&gt;&amp;nbsp;&amp;nbsp;}&lt;BR&gt;&amp;nbsp;};&lt;BR&gt;}&lt;BR&gt;
<br>
&lt;BR&gt;void* backRecv(void* arg)&lt;BR&gt;{&lt;BR&gt;&amp;nbsp;int myid;&lt;BR&gt;&amp;nbsp;pthread_mutex_init(&amp;amp;_dealmutex2, NULL);&lt;BR&gt;&amp;nbsp;stringstream RANK;&lt;BR&gt;&amp;nbsp;MPI_Status status;&lt;BR&gt;&amp;nbsp;MPI_Request&amp;nbsp; requ2;&lt;BR&gt;&amp;nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;amp;myid);&lt;BR&gt;&amp;nbsp;RANK &amp;lt;&amp;lt; myid;&lt;BR&gt;&amp;nbsp;cout &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; create background message recv&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;int x, y;&lt;BR&gt;&amp;nbsp;//char c;&lt;BR&gt;&amp;nbsp;int m;&lt;BR&gt;&amp;nbsp;int count = 0;&lt;BR&gt;&amp;nbsp;string filename(&quot;f_&quot;);&lt;BR&gt;&amp;nbsp;filename += RANK.str();&lt;BR&gt;&amp;nbsp;filename += &quot;_backRecv.txt&quot;;&lt;BR&gt;&amp;nbsp;fstream fout(filename.c_str(), ios::out);&lt;BR&gt;&amp;nbsp;if(!fout)&lt;BR&gt;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;cout &amp;lt;&amp;lt; &quot;can not create the file &quot; &amp;lt;&amp;lt; filename &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout.close();&lt;BR&gt;&amp;nbsp;&amp;nbsp;exit(1);&lt;BR&gt;&amp;nbsp;}&lt;BR&gt;
<br>
&amp;nbsp;while(true)&lt;BR&gt;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;MPI_Irecv(&amp;amp;m, 1, MPI_INT, MPI_ANY_SOURCE, 333, MPI_COMM_WORLD, &amp;amp;requ2);&lt;BR&gt;&amp;nbsp;&amp;nbsp;MPI_Wait(&amp;amp;requ2, &amp;amp;status);&amp;nbsp;&amp;nbsp;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_lock(&amp;amp;_dealmutex2);&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout &amp;lt;&amp;lt; &quot;BACKREV:&quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; recv from &quot; &amp;lt;&amp;lt; status.MPI_SOURCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; &quot; with tag 333&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;fout.flush();&lt;BR&gt;&amp;nbsp;&amp;nbsp;//cout &amp;lt;&amp;lt; &quot;BACKREV:&quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; recv from &quot; &amp;lt;&amp;lt; status.MPI_SOURCE &amp;lt;&amp;lt; &quot; m = &quot; &amp;lt;&amp;lt; m &amp;lt;&amp;lt; &quot; with tag 333&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//fflush(stdout);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_unlock(&amp;amp;_dealmutex);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_lock(&amp;amp;_dealmutex);&lt;BR&gt;&amp;nbsp;&amp;nbsp;count++;&lt;BR&gt;&amp;nbsp;&amp;nbsp;//pthread_mutex_unlock(&amp;amp;_dealmutex2);&lt;BR&gt;&amp;nbsp;&amp;nbsp;if(count == 50)&lt;BR&gt;&amp;nbsp;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;fout &amp;lt;&amp;lt; &quot;*******backRecv FINISHED IN &quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot;********&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp<br>
;fout.flush();&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;fout.close();&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;pthread_exit(NULL);&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;return 0;&lt;BR&gt;&amp;nbsp;&amp;nbsp;}&amp;nbsp;&lt;BR&gt;&amp;nbsp;};&lt;BR&gt;}&lt;BR&gt;
<br>
int main(int argc, char **argv) &lt;BR&gt;{&lt;BR&gt;&amp;nbsp;int myid = 0;&lt;BR&gt;&amp;nbsp;int nprocs = 0;&lt;BR&gt;&amp;nbsp;pthread_t pt1 = 0;&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; pthread_t pt2 = 0;;&lt;BR&gt;&amp;nbsp;int pret1 = 0;&lt;BR&gt;&amp;nbsp;int pret2 = 0;&lt;BR&gt;&amp;nbsp;int i = 0, j = 0, t = 0;&lt;BR&gt;&amp;nbsp;//MPI_Status status;&lt;BR&gt;&amp;nbsp;MPI_Request&amp;nbsp; requ1;&lt;BR&gt;&amp;nbsp;MPI_Init(&amp;amp;argc,&amp;amp;argv);&lt;BR&gt;&amp;nbsp; &amp;nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;amp;nprocs);&lt;BR&gt;&amp;nbsp; &amp;nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;amp;myid); &lt;BR&gt;&amp;nbsp;pthread_mutex_init(&amp;amp;_dealmutex, NULL);&lt;BR&gt;&amp;nbsp;&lt;BR&gt;&amp;nbsp;for(i=0; i&amp;lt;50; ++i)&lt;BR&gt;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;t = (myid + 1) * i;&lt;BR&gt;&amp;nbsp;&amp;nbsp;MPI_Isend(&amp;amp;myid, 1, MPI_INT, (myid+1)%nprocs, 222, MPI_COMM_WORLD, &amp;amp;requ1);&lt;BR&gt;&amp;nbsp;&amp;nbsp;//MPI_Sendrecv(&amp;amp;t, 1, MPI_INT, (myid+1)%nprocs, 222, &amp;amp;j, 1, MPI_INT, (myid+1)%nprocs, 333, MPI_COMM_WORLD, &amp;amp;status);&lt;BR&gt;&amp;nbsp;&amp;nbsp;cout &amp;lt;&amp;lt; &quot;MAIN:&quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; sends to &quot;&amp;lt;&amp;lt; (myid+1)%nprocs &amp;lt;&amp;lt; &quot; &quot; &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;fflush(stdout);&lt;BR&gt;&amp;nbsp;}&lt;<br>
BR&gt;&amp;nbsp;pret1 = pthread_create(&amp;amp;pt1, NULL, backRecv, NULL);&lt;BR&gt;&amp;nbsp;if(pret1 != 0)&lt;BR&gt;&amp;nbsp;&amp;nbsp; &amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;cout &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot;backRecv Thread Create Failed.&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; exit(1);&lt;BR&gt;&amp;nbsp;&amp;nbsp; &amp;nbsp;}&lt;BR&gt;&amp;nbsp;pret2 = pthread_create(&amp;amp;pt2, NULL, backID, NULL);&lt;BR&gt;&amp;nbsp;if(pret2 != 0)&lt;BR&gt;&amp;nbsp;{&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; cout &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot;backID Thread Create Failed.&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; exit(1);&lt;BR&gt;&amp;nbsp;}&lt;BR&gt;&amp;nbsp;//for(i=0; i&amp;lt;10; ++i)&lt;BR&gt;&amp;nbsp;//{&lt;BR&gt;&amp;nbsp;//&amp;nbsp;c += i;&lt;BR&gt;&amp;nbsp;//&amp;nbsp;MPI_Send(&amp;amp;c, 1, MPI_CHAR, (myid+1)%nprocs, 111, MPI_COMM_WORLD);&lt;BR&gt;&amp;nbsp;//&amp;nbsp;cout &amp;lt;&amp;lt; myid &amp;lt;&amp;lt; &quot; send &quot; &amp;lt;&amp;lt; (char)c &amp;lt;&amp;lt; &quot; to &quot; &amp;lt;&amp;lt; (myid+1)%nprocs &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;//}&lt;BR&gt;&amp;nbsp;pthread_join(pt2, NULL);&lt;BR&gt;&amp;nbsp;cout &amp;lt;&amp;lt; &quot;*******************************THREAD 2 SUCESS!&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;n<br>
b
<br>
sp;pthread_join(pt1, NULL);&lt;BR&gt;&amp;nbsp;cout &amp;lt;&amp;lt; &quot;*******************************THREAD 1 SUCESS!&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;&amp;nbsp;MPI_Finalize();&lt;BR&gt;&amp;nbsp;cout &amp;lt;&amp;lt; &quot;*******************************MAIN SUCESS!&quot; &amp;lt;&amp;lt; endl;&lt;BR&gt;}&lt;BR&gt;&lt;BR&gt;
<br>
This peice of code works fine sometimes.&amp;nbsp;But it can fail too and segmentation will occur. I will read the reference you point out. Thanks.&lt;BR&gt;&amp;nbsp;&lt;BR&gt;
<br>
&lt;HR id=stopSpelling&gt;
<br>
Date: Tue, 22 Sep 2009 08:43:11 -0700&lt;BR&gt;From: Eugene.Loh_at_[hidden]&lt;BR&gt;To: users_at_[hidden]&lt;BR&gt;Subject: Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?&lt;BR&gt;&lt;BR&gt;guosong wrote: 
<br>
&lt;BLOCKQUOTE cite=midCOL102-W1609734903C2BD74E663ADA8DC0_at_phx.gbl&gt;
<br>
&lt;STYLE&gt;
<br>
.ExternalClass .ecxhmmessage P
<br>
{padding:0px;}
<br>
.ExternalClass body.ecxhmmessage
<br>
{font-size:10pt;font-family:Verdana;}
<br>
&lt;/STYLE&gt;
<br>
Hi all,&lt;BR&gt;I would like to write a multi-thread parallel program. I used pthread. Basicly, I want to create two background threads besides&amp;nbsp;&amp;nbsp;the main thread(process). For example, if I use&amp;nbsp;&quot;-np 4&quot;,&amp;nbsp;the program should have 4 main processes on four processors and two background threads for each main process. So there&amp;nbsp;should be 8 threads totally.&lt;/BLOCKQUOTE&gt;Wouldn't there be 4 main threads and 8 &quot;slave&quot; threads for a total of 12 threads?&amp;nbsp; Anyhow, doesn't matter.&lt;BR&gt;&lt;BR&gt;I'm not sure where you're starting, but you should at least have a basic understanding of the different sorts of multithreaded programming models in MPI.&amp;nbsp; One is that each process is single threaded.&amp;nbsp; Another is the processes are multithreaded, but only the main thread makes MPI calls.&amp;nbsp; Another is multithreaded, but only one MPI call at a time.&amp;nbsp; Finally, there can be full multithreading.&amp;nbsp; You have to decide which of these programming models you want and which is supported by your MPI (or, if <br>
OMPI, how OMPI was built).&lt;BR&gt;&lt;BR&gt;For more information, try the MPI_Init_thread() man page or&lt;BR&gt;&lt;A class=ecxmoz-txt-link-freetext href=&quot;<a href="http://www.mpi-forum.org./docs/mpi21-report.pdf">http://www.mpi-forum.org./docs/mpi21-report.pdf</a>&quot;&gt;<a href="http://www.mpi-forum.org./docs/mpi21-report.pdf</A">http://www.mpi-forum.org./docs/mpi21-report.pdf</A</a>&gt; ... see Section 12.4 on &quot;MPI and Threads&quot;.&lt;BR&gt;
<br>
&lt;BLOCKQUOTE cite=midCOL102-W1609734903C2BD74E663ADA8DC0_at_phx.gbl&gt;I wrote a test program and it worked unpredictable. Sometimes I got the result I want, but sometimes&amp;nbsp;the program got segmentation fault. I used MPI_Isend and MPI_Irecv for sending and recving. I do&amp;nbsp;not know why? I attached the error message as follow:&lt;BR&gt;&amp;nbsp;&lt;BR&gt;[cheetah:29780] *** Process received signal ***&lt;BR&gt;[cheetah:29780] Signal: Segmentation fault (11)&lt;BR&gt;[cheetah:29780] Signal code: Address not mapped (1)&lt;BR&gt;[cheetah:29780] Failing at address: 0x10&lt;BR&gt;[cheetah:29779] *** Process received signal ***&lt;BR&gt;[cheetah:29779] Signal: Segmentation fault (11)&lt;BR&gt;[cheetah:29779] Signal code: Address not mapped (1)&lt;BR&gt;[cheetah:29779] Failing at address: 0x10&lt;BR&gt;[cheetah:29780] [ 0] /lib64/libpthread.so.0 [0x334b00de70]&lt;BR&gt;[cheetah:29780] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so [0x2b90e1227940]&lt;BR&gt;[cheetah:29780] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b90e05d61ca]&lt;BR&gt;[cheetah:29780] [ 3] /act/openmpi/gnu/lib/openmpi/m<br>
ca_pml_ob1.so [0x2b90e05cac86]&lt;BR&gt;[cheetah:29780] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d) [0x2b90dde7271d]&lt;BR&gt;[cheetah:29780] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]&lt;BR&gt;[cheetah:29780] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]&lt;BR&gt;[cheetah:29780] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334! a4d1e3d]&lt;BR&gt;[cheetah:29780] *** End of error message ***&lt;BR&gt;[cheetah:29779] [ 0] /lib64/libpthread.so.0 [0x334b00de70]&lt;BR&gt;[cheetah:29779] [ 1] /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so [0x2b39785c0940]&lt;BR&gt;[cheetah:29779] [ 2] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b397796f1ca]&lt;BR&gt;[cheetah:29779] [ 3] /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so [0x2b3977963c86]&lt;BR&gt;[cheetah:29779] [ 4] /act/openmpi/gnu/lib/libmpi.so.0(PMPI_Send+0x13d) [0x2b397520b71d]&lt;BR&gt;[cheetah:29779] [ 5] pt_muti(_Z6backIDPv+0x29b) [0x409929]&lt;BR&gt;[cheetah:29779] [ 6] /lib64/libpthread.so.0 [0x334b0062f7]&lt;BR&gt;[cheetah:29779] [ 7] /lib64/libc.so.6(clone+0x6d) [0x334a4d1e3d]&lt;BR&gt;[cheetah:29779] *** End of error message ***&lt;BR&gt;&lt;BR&gt;&amp;nbsp<br>
;
<br>
&lt;BR&gt;I used gdb to &quot;bt&quot; the error and I got :&lt;BR&gt;&amp;nbsp;Program terminated with signal 11, Segmentation fault.&lt;BR&gt;#0&amp;nbsp; 0x00002b90e1227940 in mca_btl_sm_alloc ()&lt;BR&gt;&amp;nbsp;&amp;nbsp; from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so&lt;BR&gt;(gdb) bt&lt;BR&gt;#0&amp;nbsp; 0x00002b90e1227940 in mca_btl_sm_alloc ()&lt;BR&gt;&amp;nbsp;&amp;nbsp; from /act/openmpi/gnu/lib/openmpi/mca_btl_sm.so&lt;BR&gt;#1&amp;nbsp; 0x00002b90e05d61ca in mca_pml_ob1_send_request_start_copy ()&lt;BR&gt;&amp;nbsp;&amp;nbsp; from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so&lt;BR&gt;#2&amp;nbsp; 0x00002b90e05cac86 in mca_pml_ob1_send ()&lt;BR&gt;&amp;nbsp;&amp;nbsp; from /act/openmpi/gnu/lib/openmpi/mca_pml_ob1.so&lt;BR&gt;#3&amp;nbsp; 0x00002b90dde7271d in PMPI_Send () from /act/openmpi/gnu/lib/libmpi.so.0&lt;BR&gt;#4&amp;nbsp; 0x0000000000409929 in backID (arg=0x0) at pt_muti.cpp:50&lt;BR&gt;#5&amp;nbsp; 0x000000334b0062f7 in start_thread () from /lib64/libpthread.so.0&lt;BR&gt;#6&amp;nbsp; 0x000000334a4d1e3d in clone () from /lib64/libc.so.6&lt;BR&gt;So can anyone give me some suggestions or advice. Thanks very much.&lt;/BLOCKQUOTE&gt; 		 	   		  &lt;br /&gt;&lt;hr /&gt;&#176;&#209;MSN<br>
&#215;&#176;&#189;&#248;&#202;&#214;&#187;&#250;&#163;&#172;&#184;&#252;&#182;&#224;&#193;&#196;&#204;&#236;&#192;&#214;&#200;&#164;&#181;&#200;&#196;&#227;&#205;&#218;&#190;&#242;&#163;&#161; &lt;a href='<a href="http://mobile.msn.com.cn/">http://mobile.msn.com.cn/</a>' target='_new'&gt;&#193;&#162;&#191;&#204;&#207;&#194;&#212;&#216;&#163;&#161;&lt;/a&gt;&lt;/body&gt;
<br>
&lt;/html&gt;
<br>
--_8cf70815-85b5-44f5-8859-ebdc96183bbd_--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
