<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (7)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 05:23:05 2010" -->
<!-- isoreceived="20100318092305" -->
<!-- sent="Thu, 18 Mar 2010 18:23:52 +0900" -->
<!-- isosent="20100318092352" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (7)" -->
<!-- id="4BA1F128.9000905_at_np.css.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (7)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 05:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7633.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Previous message:</strong> <a href="7631.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (6)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7633.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Reply:</strong> <a href="7633.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Reply:</strong> <a href="7634.php">George Bosilca: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
7th question is as follows:
<br>
<p>(7) The result of communication which use derived datatype after taking checkpoint is incorrect.
<br>
<p>Framework         : crcp
<br>
Component         : bkmrk
<br>
The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
<br>
The function name : traffic_message_append
<br>
<p>Framework         : datatype
<br>
The source file   : ompi/datatype/datatype.h
<br>
The function name : ompi_ddt_type_size
<br>
<p>Here's the code that causes the problem:
<br>
<p>struct dd {
<br>
&nbsp;&nbsp;char  x;
<br>
&nbsp;&nbsp;float a;
<br>
&nbsp;&nbsp;char  y;
<br>
&nbsp;&nbsp;float b;
<br>
&nbsp;&nbsp;int   c;
<br>
};
<br>
struct dd buf,ans_dd_buf;
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.x = (char)1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)4329.1003;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.y = (char)2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)48;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.x = (char)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.y = (char)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)0;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;ans_dd_buf.x = (char)1;
<br>
&nbsp;&nbsp;ans_dd_buf.a = (float)4329.1003;
<br>
&nbsp;&nbsp;ans_dd_buf.y = (char)2;
<br>
&nbsp;&nbsp;ans_dd_buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;ans_dd_buf.c = (int)48;
<br>
<p>&nbsp;&nbsp;/* item number per a block */
<br>
&nbsp;&nbsp;b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
<br>
&nbsp;&nbsp;/* datatype per a block */
<br>
&nbsp;&nbsp;dt[0]  = dt[2] = MPI_BYTE;
<br>
&nbsp;&nbsp;dt[1]  = dt[3] = MPI_FLOAT;
<br>
&nbsp;&nbsp;dt[4]  = MPI_INT;
<br>
&nbsp;&nbsp;/* disp per a block */
<br>
&nbsp;&nbsp;dp[0] = 0;
<br>
&nbsp;&nbsp;MPI_Address(&amp;buf.x,&amp;st);
<br>
&nbsp;&nbsp;MPI_Address(&amp;buf.a,&amp;cr);
<br>
&nbsp;&nbsp;dp[1] = (cr - st);
<br>
&nbsp;&nbsp;MPI_Address(&amp;buf.y,&amp;cr);
<br>
&nbsp;&nbsp;dp[2] = (cr - st);
<br>
&nbsp;&nbsp;MPI_Address(&amp;buf.b,&amp;cr);
<br>
&nbsp;&nbsp;dp[3] = (cr - st);
<br>
&nbsp;&nbsp;MPI_Address(&amp;buf.c,&amp;cr);
<br>
&nbsp;&nbsp;dp[4] = (cr - st);
<br>
&nbsp;&nbsp;cc = MPI_Type_struct(ITEMNUM,&amp;b_l[0],&amp;dp[0],&amp;dt[0],&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;cc = MPI_Type_commit(&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;printf(&quot;   rank=%d pass-1 x-&gt;x =%d[%d] x-&gt;a=%d[%d] x-&gt;y=%d[%d] x-&gt;b=%d[%d] x-&gt;c=%d[%d]\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.x) - (unsigned long)(&amp;buf.x)) ),dp[0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.a) - (unsigned long)(&amp;buf.x)) ),dp[1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.y) - (unsigned long)(&amp;buf.x)) ),dp[2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.b) - (unsigned long)(&amp;buf.x)) ),dp[3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.c) - (unsigned long)(&amp;buf.x)) ),dp[4]
<br>
&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buf,1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else { /* rank 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);  /** take checkpoint at this point **/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;buf,1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;if (ans_dd_buf.x != buf.x) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.a != buf.a) { MPI_Abort(MPI_COMM_WORLD,1); }  /* The error occurs at this point */
<br>
&nbsp;&nbsp;if (ans_dd_buf.y != buf.y) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.b != buf.b) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.c != buf.c) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
<p>* Take checkpoint while Rank 0 and Rank 1 are performing sleep function
<br>
<p>* Construct derived datatype from the structure dd.
<br>
<p>* I think that image of memory mapping of the derived datatype is as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1111111111
<br>
&nbsp;&nbsp;&nbsp;&nbsp;01234567890123456789
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;X###AAAAY###BBBBCCCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------
<br>
<p>### means space.
<br>
<p>* ddt_size for /** Quick reference to the size of the datatype */ in
<br>
&nbsp;&nbsp;ompi_crcp_bkmrk_pml_traffic_message_ref_t structure is obtained by
<br>
&nbsp;&nbsp;ompi_ddt_type_size function in traffic_message_append function.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != datatype ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_ddt_type_size(datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ddt_size);
<br>
<p>* I think that the returned value of ddt_size is wrong.
<br>
&nbsp;&nbsp;The obtained value is 14.(Does it means total size in the memory is 14bytes?)
<br>
<p>&nbsp;&nbsp;struct dd {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char  x;    -&gt; charactor is 1byte.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float a;    -&gt; float     is 4byte.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char  y;    -&gt; charactor is 1byte.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float b;    -&gt; float     is 4byte.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int   c;    -&gt; integer   is 4byte.
<br>
&nbsp;&nbsp;};
<br>
<p>* But the returned value of ddt_size should be 20bytes, considering the memory mapping.
<br>
<p>* Rank 1 receive messages of only 14bytes in the bkmrk.
<br>
&nbsp;&nbsp;The wrong result is obtained.
<br>
<p>* t_mpi_question-7-ng.c : the error occurs.
<br>
&nbsp;&nbsp;Here's my debugging output.
<br>
<p>&nbsp;&nbsp;ft_event_post_drain_message:Irecv drain_msg_ref=c89200 rank=0 tag=1000 cnt=1 ddt=14 to=c929b0 [datatype-&gt;size=1]
<br>
&nbsp;&nbsp;wait_quiesce_drained: x=1 a=142658605493679655240073216.000000 y=4 b=0.000000 c=32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* 14bytes data is received, it is incorrect. values are wrong. */
<br>
&nbsp;&nbsp;drain_message_check_recv:datatype-&gt;size=1 14 count=1 1
<br>
&nbsp;&nbsp;ompi_ddt_copy_content_same_ddt:Start size=14 flag=102/4 count=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* DT_FLAG_CONTIGUOUS is false. */
<br>
<p><p>* t_mpi_question-7-ok.c : the error does not occur.
<br>
&nbsp;&nbsp;Here's my debugging output.
<br>
<p>&nbsp;&nbsp;ft_event_post_drain_message:Irecv drain_msg_ref=a51280 rank=0 tag=1000 cnt=1 ddt=20 to=a5b6b0 [datatype-&gt;size=1]
<br>
&nbsp;&nbsp;wait_quiesce_drained: x=1 a=4329.100098 y=2 b=8474.730469 c=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* 20bytes data is received correctly. */
<br>
&nbsp;&nbsp;drain_message_check_recv:datatype-&gt;size=1 20 count=1 1
<br>
&nbsp;&nbsp;ompi_ddt_copy_content_same_ddt:Start size=20 flag=186/4 count=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* DT_FLAG_CONTIGUOUS is true. */
<br>
<p>* difference list
<br>
<p>-bash-3.2$ diff -c t_mpi_question-7-ng.c t_mpi_question-7-ok.c
<br>
*** t_mpi_question-7-ng.c       Fri Feb 26 13:07:05 2010
<br>
--- t_mpi_question-7-ok.c       Fri Feb 26 13:20:25 2010
<br>
***************
<br>
*** 8,16 ****
<br>
&nbsp;&nbsp;#define ITEMNUM 5
<br>
<p>&nbsp;&nbsp;struct dd {
<br>
!   char  x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float a;
<br>
!   char  y;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float b;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int   c;
<br>
&nbsp;&nbsp;};
<br>
--- 8,16 ----
<br>
&nbsp;&nbsp;#define ITEMNUM 5
<br>
<p>&nbsp;&nbsp;struct dd {
<br>
!   int   x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float a;
<br>
!   int   y;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float b;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int   c;
<br>
&nbsp;&nbsp;};
<br>
***************
<br>
*** 31,52 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
!     buf.x = (char)1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)4329.1003;
<br>
!     buf.y = (char)2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)48;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
!     buf.x = (char)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)0;
<br>
!     buf.y = (char)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
!   ans_dd_buf.x = (char)1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ans_dd_buf.a = (float)4329.1003;
<br>
!   ans_dd_buf.y = (char)2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ans_dd_buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ans_dd_buf.c = (int)48;
<br>
<p>--- 31,52 ----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
!     buf.x = (int)1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)4329.1003;
<br>
!     buf.y = (int)2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)48;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
!     buf.x = (int)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)0;
<br>
!     buf.y = (int)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
!   ans_dd_buf.x = (int)1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ans_dd_buf.a = (float)4329.1003;
<br>
!   ans_dd_buf.y = (int)2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ans_dd_buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ans_dd_buf.c = (int)48;
<br>
<p>***************
<br>
*** 54,60 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* datatype per a block */
<br>
!   dt[0]  = dt[2] = MPI_BYTE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dt[1]  = dt[3] = MPI_FLOAT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dt[4]  = MPI_INT;
<br>
<p>--- 54,60 ----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* datatype per a block */
<br>
!   dt[0]  = dt[2] = MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dt[1]  = dt[3] = MPI_FLOAT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dt[4]  = MPI_INT;
<br>
<p><p>-bash-3.2$ cat t_mpi_question-7-ng.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define SLPTIME 60
<br>
<p>#define ITEMNUM 5
<br>
<p>struct dd {
<br>
&nbsp;&nbsp;char  x;
<br>
&nbsp;&nbsp;float a;
<br>
&nbsp;&nbsp;char  y;
<br>
&nbsp;&nbsp;float b;
<br>
&nbsp;&nbsp;int   c;
<br>
};
<br>
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;struct dd buf,ans_dd_buf;
<br>
&nbsp;&nbsp;int b_l[ITEMNUM];
<br>
&nbsp;&nbsp;MPI_Aint dp[ITEMNUM],st,cr;
<br>
&nbsp;&nbsp;MPI_Datatype dt[ITEMNUM],newdt;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.x = (char)1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)4329.1003;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.y = (char)2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)48;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.x = (char)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.y = (char)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)0;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;ans_dd_buf.x = (char)1;
<br>
&nbsp;&nbsp;ans_dd_buf.a = (float)4329.1003;
<br>
&nbsp;&nbsp;ans_dd_buf.y = (char)2;
<br>
&nbsp;&nbsp;ans_dd_buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;ans_dd_buf.c = (int)48;
<br>
<p>&nbsp;&nbsp;/* item number per a block */
<br>
&nbsp;&nbsp;b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
<br>
<p>&nbsp;&nbsp;/* datatype per a block */
<br>
&nbsp;&nbsp;dt[0]  = dt[2] = MPI_BYTE;
<br>
&nbsp;&nbsp;dt[1]  = dt[3] = MPI_FLOAT;
<br>
&nbsp;&nbsp;dt[4]  = MPI_INT;
<br>
<p>&nbsp;&nbsp;/* disp per a block */
<br>
&nbsp;&nbsp;dp[0] = 0;
<br>
&nbsp;&nbsp;MPI_Address(&amp;buf.x,&amp;st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.a,&amp;cr);
<br>
&nbsp;&nbsp;dp[1] = (cr - st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.y,&amp;cr);
<br>
&nbsp;&nbsp;dp[2] = (cr - st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.b,&amp;cr);
<br>
&nbsp;&nbsp;dp[3] = (cr - st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.c,&amp;cr);
<br>
&nbsp;&nbsp;dp[4] = (cr - st);
<br>
<p>&nbsp;&nbsp;cc = MPI_Type_struct(ITEMNUM,&amp;b_l[0],&amp;dp[0],&amp;dt[0],&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;cc = MPI_Type_commit(&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d pass-1 x-&gt;x =%d[%d] x-&gt;a=%d[%d] x-&gt;y=%d[%d] x-&gt;b=%d[%d] x-&gt;c=%d[%d]\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.x) - (unsigned long)(&amp;buf.x)) ),dp[0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.a) - (unsigned long)(&amp;buf.x)) ),dp[1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.y) - (unsigned long)(&amp;buf.x)) ),dp[2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.b) - (unsigned long)(&amp;buf.x)) ),dp[3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.c) - (unsigned long)(&amp;buf.x)) ),dp[4]
<br>
&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buf,1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;buf,1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d pass-2 %d %f %d %f %d \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank,buf.x,buf.a,buf.y,buf.b,buf.c); fflush(stdout);
<br>
&nbsp;&nbsp;if (ans_dd_buf.x != buf.x) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.a != buf.a) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.y != buf.y) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.b != buf.b) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.c != buf.c) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
<p>&nbsp;&nbsp;cc =  MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank ==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;return(0);
<br>
}
<br>
<p>-bash-3.2$ cat t_mpi_question-7-ok.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define SLPTIME 60
<br>
<p>#define ITEMNUM 5
<br>
<p>struct dd {
<br>
&nbsp;&nbsp;int   x;
<br>
&nbsp;&nbsp;float a;
<br>
&nbsp;&nbsp;int   y;
<br>
&nbsp;&nbsp;float b;
<br>
&nbsp;&nbsp;int   c;
<br>
};
<br>
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;int rank,size,cc;
<br>
&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;struct dd buf,ans_dd_buf;
<br>
&nbsp;&nbsp;int b_l[ITEMNUM];
<br>
&nbsp;&nbsp;MPI_Aint dp[ITEMNUM],st,cr;
<br>
&nbsp;&nbsp;MPI_Datatype dt[ITEMNUM],newdt;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.x = (int)1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)4329.1003;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.y = (int)2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)48;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.x = (int)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.a = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.y = (int)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.b = (float)0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf.c = (int)0;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;ans_dd_buf.x = (int)1;
<br>
&nbsp;&nbsp;ans_dd_buf.a = (float)4329.1003;
<br>
&nbsp;&nbsp;ans_dd_buf.y = (int)2;
<br>
&nbsp;&nbsp;ans_dd_buf.b = (float)8474.73;
<br>
&nbsp;&nbsp;ans_dd_buf.c = (int)48;
<br>
<p>&nbsp;&nbsp;/* item number per a block */
<br>
&nbsp;&nbsp;b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
<br>
<p>&nbsp;&nbsp;/* datatype per a block */
<br>
&nbsp;&nbsp;dt[0]  = dt[2] = MPI_INT;
<br>
&nbsp;&nbsp;dt[1]  = dt[3] = MPI_FLOAT;
<br>
&nbsp;&nbsp;dt[4]  = MPI_INT;
<br>
<p>&nbsp;&nbsp;/* disp per a block */
<br>
&nbsp;&nbsp;dp[0] = 0;
<br>
&nbsp;&nbsp;MPI_Address(&amp;buf.x,&amp;st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.a,&amp;cr);
<br>
&nbsp;&nbsp;dp[1] = (cr - st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.y,&amp;cr);
<br>
&nbsp;&nbsp;dp[2] = (cr - st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.b,&amp;cr);
<br>
&nbsp;&nbsp;dp[3] = (cr - st);
<br>
<p>&nbsp;&nbsp;MPI_Address(&amp;buf.c,&amp;cr);
<br>
&nbsp;&nbsp;dp[4] = (cr - st);
<br>
<p>&nbsp;&nbsp;cc = MPI_Type_struct(ITEMNUM,&amp;b_l[0],&amp;dp[0],&amp;dt[0],&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;cc = MPI_Type_commit(&amp;newdt);
<br>
&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d pass-1 x-&gt;x =%d[%d] x-&gt;a=%d[%d] x-&gt;y=%d[%d] x-&gt;b=%d[%d] x-&gt;c=%d[%d]\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.x) - (unsigned long)(&amp;buf.x)) ),dp[0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.a) - (unsigned long)(&amp;buf.x)) ),dp[1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.y) - (unsigned long)(&amp;buf.x)) ),dp[2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.b) - (unsigned long)(&amp;buf.x)) ),dp[3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,( (int)((unsigned long)(&amp;buf.c) - (unsigned long)(&amp;buf.x)) ),dp[4]
<br>
&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buf,1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;buf,1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newdt);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;printf(&quot;   rank=%d pass-2 %d %f %d %f %d \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;,rank,buf.x,buf.a,buf.y,buf.b,buf.c); fflush(stdout);
<br>
&nbsp;&nbsp;if (ans_dd_buf.x != buf.x) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.a != buf.a) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.y != buf.y) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.b != buf.b) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;if (ans_dd_buf.c != buf.c) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
<p>&nbsp;&nbsp;cc =  MPI_Finalize();
<br>
&nbsp;&nbsp;if (rank ==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;return(0);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7633.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Previous message:</strong> <a href="7631.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (6)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7633.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Reply:</strong> <a href="7633.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Reply:</strong> <a href="7634.php">George Bosilca: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
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
