<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 17:50:42 2013" -->
<!-- isoreceived="20130121225042" -->
<!-- sent="Mon, 21 Jan 2013 22:50:20 +0000" -->
<!-- isosent="20130121225020" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317D1398_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D58A4B5E6148C419C6AD6334962375D2E738DC4_at_UWMBX01.uw.lu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 17:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="21172.php">Victor Vysotskiy: "[OMPI users] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Maybe reply:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report.  I've fixed the leak in our development branch and it should make its way to both the 1.6 and 1.7 release series.
<br>
<p>Brian
<br>
<p><p>On 1/21/13 6:53 AM, &quot;Victor Vysotskiy&quot; &lt;victor.vysotskiy_at_[hidden]&lt;mailto:victor.vysotskiy_at_[hidden]&gt;&gt; wrote:
<br>
<p>Since my question unanswered for 4 days, I repeat the original post.
<br>
<p><p>Dear Developers,
<br>
<p>I am running into memory problems when creating/allocating MPI's window and its memory frequently. Below is listed a sample code reproducing the problem:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#define NEL    8
<br>
#define NTIMES 1000000
<br>
<p>int main (int argc,char *argv[]) {
<br>
&nbsp;&nbsp;int       i;
<br>
&nbsp;&nbsp;double    w[NEL];
<br>
&nbsp;&nbsp;MPI_Aint  win_size,warr_size;
<br>
&nbsp;&nbsp;MPI_Win  *win;
<br>
<p>&nbsp;&nbsp;win_size=sizeof(MPI_Win);
<br>
&nbsp;&nbsp;warr_size=sizeof(MPI_DOUBLE)*NEL;
<br>
<p><p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;for(i=0;i&lt;NTIMES;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alloc_mem(win_size,MPI_INFO_NULL,&amp;win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_create(w,warr_size,sizeof(double),MPI_INFO_NULL,MPI_COMM_WORLD,win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_free(win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Free_mem(win);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>During of the execution of this program it is eating more and more memory, regardless of Linux distribution and gcc version used. Indeed, I have already reproduced the problem on 32-bit Ubuntu 12.04.1 &amp;&amp; gcc-4.6.3, and 64-bit Cent OS 5.8 &amp;&amp; gcc 4.6.2. For instance,  below is listed the corresponding Valgrind's (massif) results on the runtime memory usage:
<br>
<p>Command:            ./mleak.win
<br>
ms_print arguments: massif.out.15028
<br>
&nbsp;&nbsp;n       time(ms)         total(B)   useful-heap(B) )
<br>
&nbsp;&nbsp;1         10,960        4,290,024        3,986,911
<br>
&nbsp;&nbsp;2         26,979        5,248,248        4,562,911
<br>
&nbsp;&nbsp;3         42,586        6,174,440        5,118,311
<br>
&nbsp;&nbsp;4         54,892        6,904,736        5,556,391
<br>
&nbsp;&nbsp;5         69,562        7,771,088        6,074,535
<br>
&nbsp;&nbsp;6         79,334        8,351,144        6,422,575
<br>
&nbsp;&nbsp;7         90,920        9,038,208        6,834,799
<br>
&nbsp;&nbsp;8        103,449        9,787,760        7,286,215
<br>
&nbsp;&nbsp;9        115,984       10,534,056        7,734,511
<br>
&nbsp;10        130,692       11,407,016        8,258,287
<br>
&nbsp;11        146,637       12,352,376        8,825,503
<br>
&nbsp;12        155,095       12,854,016        9,126,487
<br>
&nbsp;13        163,884       13,376,016        9,439,687
<br>
&nbsp;14        173,036       13,919,256        9,765,631
<br>
&nbsp;15        182,559       14,484,488       10,104,751
<br>
&nbsp;16        192,465       15,072,688       10,457,671
<br>
&nbsp;17        202,770       15,684,768       10,824,919
<br>
&nbsp;18        213,499       16,321,768       11,207,119
<br>
&nbsp;19        224,658       16,984,608       11,604,823
<br>
&nbsp;20        236,275       17,674,320       12,018,631
<br>
&nbsp;21        248,366       18,392,040       12,449,263
<br>
&nbsp;22        260,954       19,138,960       12,897,415
<br>
&nbsp;23        274,111       19,916,152       13,363,711
<br>
&nbsp;24        287,781       20,724,912       13,848,967
<br>
&nbsp;25        302,012       21,566,552       14,353,951
<br>
&nbsp;26        316,817       22,442,344       14,879,407
<br>
&nbsp;27        332,189       23,353,664       15,426,199
<br>
&nbsp;28        348,179       24,301,984       15,995,191
<br>
&nbsp;29        364,829       25,288,816       16,587,271
<br>
&nbsp;30        373,404       25,797,176       16,892,287
<br>
&nbsp;31        382,159       26,315,736       17,203,423
<br>
&nbsp;32        391,086       26,844,696       17,520,799
<br>
&nbsp;33        400,196       27,384,336       17,844,583
<br>
&nbsp;34        409,491       27,934,808       18,174,847
<br>
&nbsp;35        418,958       28,496,328       18,511,759
<br>
&nbsp;36        428,621       29,069,168       18,855,463
<br>
&nbsp;37        438,478       29,653,488       19,206,055
<br>
&nbsp;38        448,539       30,249,560       19,563,679
<br>
&nbsp;39        458,806       30,857,640       19,928,527
<br>
&nbsp;40        469,271       31,477,920       20,300,695
<br>
&nbsp;41        479,955       32,110,680       20,680,351
<br>
&nbsp;42        490,849       32,756,120       21,067,615
<br>
&nbsp;43        501,960       33,414,552       21,462,655
<br>
&nbsp;44        513,294       34,086,232       21,865,663
<br>
&nbsp;45        524,859       34,771,392       22,276,759
<br>
&nbsp;46        536,729       35,470,304       22,696,087
<br>
&nbsp;47        548,772       36,183,304       23,123,887
<br>
&nbsp;48        561,047       36,910,624       23,560,279
<br>
&nbsp;49        573,561       37,652,544       24,005,431
<br>
&nbsp;50        579,928       38,029,080       24,231,343
<br>
&nbsp;51        586,337       38,409,376       24,459,511
<br>
&nbsp;52        592,820       38,793,496       24,689,983
<br>
&nbsp;53        599,367       39,181,456       24,922,759
<br>
&nbsp;54        605,983       39,573,296       25,157,863
<br>
&nbsp;55        612,664       39,969,056       25,395,319
<br>
&nbsp;56        619,412       40,368,776       25,635,151
<br>
&nbsp;57        626,225       40,772,488       25,877,359
<br>
&nbsp;58        633,113       41,180,248       26,122,015
<br>
&nbsp;59        640,071       41,592,088       26,369,119
<br>
&nbsp;60        647,095       42,008,048       26,618,695
<br>
&nbsp;61        654,192       42,428,168       26,870,767
<br>
&nbsp;62        661,358       42,852,488       27,125,359
<br>
&nbsp;63        668,594       43,281,040       27,382,471
<br>
&nbsp;64        675,905       43,713,880       27,642,175
<br>
<p><p>On the other hand, the MPICH2 and  MVAPICH2 binaries are always used a constant amount of memory during the execution of this test.
<br>
<p>Could you please comment on the problem?
<br>
<p>Enclosed please find the source code, and the corresponding valgrind's output generated via  the ''--tool=massif --time-unit=ms&quot; option.
<br>
<p>Regards,
<br>
Victor.
<br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21181/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="21172.php">Victor Vysotskiy: "[OMPI users] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Maybe reply:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
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
