<?
$subject_val = "Re: [OMPI devel] Some questions about checkpoint/restart (7)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 09:07:38 2010" -->
<!-- isoreceived="20100318130738" -->
<!-- sent="Thu, 18 Mar 2010 09:07:34 -0400" -->
<!-- isosent="20100318130734" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Some questions about checkpoint/restart (7)" -->
<!-- id="B85F5CB5-0DCF-493C-B726-31A4B7123FAE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5152B832-348F-4B83-96CE-5DEC3FB1F7D9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Some questions about checkpoint/restart (7)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 09:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7634.php">George Bosilca: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>In reply to:</strong> <a href="7634.php">George Bosilca: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7663.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Reply:</strong> <a href="7663.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would agree with George's comment on this particular bug. I doubt  
<br>
that the problem is with the datatype engine, but it is more likely  
<br>
that it is a problem with how the crcp/bkmrk component uses the  
<br>
datatype engine. I'll have to look into it more later.
<br>
<p>-- Josh
<br>
<p>On Mar 18, 2010, at 9:00 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Takayuki,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_ddt_type_size return the size in bytes of the content of the  
</span><br>
<span class="quotelev1">&gt; datatype, ignoring the gaps. This function is useful to know the  
</span><br>
<span class="quotelev1">&gt; amount of data one has to send over the network, and obviously in  
</span><br>
<span class="quotelev1">&gt; this case one should avoid sending the useless gaps/spaces. This  
</span><br>
<span class="quotelev1">&gt; function correspond to the MPI_Type_size, as defined by the MPI  
</span><br>
<span class="quotelev1">&gt; standard. This is totally different from the sizeof operator in C/C+ 
</span><br>
<span class="quotelev1">&gt; +, as it doesn't include the gaps (spaces) in the middle of the  
</span><br>
<span class="quotelev1">&gt; datatype, i.e. there is no notion of alignment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to get the total span of the datatype you can use the  
</span><br>
<span class="quotelev1">&gt; get_extent or get_true_extent of the datatype. These two functions  
</span><br>
<span class="quotelev1">&gt; are similar to their counter-parts from the MPI standard. Please  
</span><br>
<span class="quotelev1">&gt; read the datatype chapter in the MPI 2.2 standard for more  
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is a problem with the code, it certainly doesn't come from  
</span><br>
<span class="quotelev1">&gt; the ompi_ddt_type_size function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2010, at 05:23 , Takayuki Seki wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7th question is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (7) The result of communication which use derived datatype after  
</span><br>
<span class="quotelev2">&gt;&gt; taking checkpoint is incorrect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Framework         : crcp
</span><br>
<span class="quotelev2">&gt;&gt; Component         : bkmrk
</span><br>
<span class="quotelev2">&gt;&gt; The source file   : ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c
</span><br>
<span class="quotelev2">&gt;&gt; The function name : traffic_message_append
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Framework         : datatype
</span><br>
<span class="quotelev2">&gt;&gt; The source file   : ompi/datatype/datatype.h
</span><br>
<span class="quotelev2">&gt;&gt; The function name : ompi_ddt_type_size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the code that causes the problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd {
</span><br>
<span class="quotelev2">&gt;&gt; char  x;
</span><br>
<span class="quotelev2">&gt;&gt; float a;
</span><br>
<span class="quotelev2">&gt;&gt; char  y;
</span><br>
<span class="quotelev2">&gt;&gt; float b;
</span><br>
<span class="quotelev2">&gt;&gt; int   c;
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; struct dd buf,ans_dd_buf;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;   buf.x = (char)1;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.y = (char)2;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else {
</span><br>
<span class="quotelev2">&gt;&gt;   buf.x = (char)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.a = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.y = (char)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.b = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.c = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.x = (char)1;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.y = (char)2;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* item number per a block */
</span><br>
<span class="quotelev2">&gt;&gt; b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
</span><br>
<span class="quotelev2">&gt;&gt; /* datatype per a block */
</span><br>
<span class="quotelev2">&gt;&gt; dt[0]  = dt[2] = MPI_BYTE;
</span><br>
<span class="quotelev2">&gt;&gt; dt[1]  = dt[3] = MPI_FLOAT;
</span><br>
<span class="quotelev2">&gt;&gt; dt[4]  = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt; /* disp per a block */
</span><br>
<span class="quotelev2">&gt;&gt; dp[0] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.x,&amp;st);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.a,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[1] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.y,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[2] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.b,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[3] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.c,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[4] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt; cc = MPI_Type_struct(ITEMNUM,&amp;b_l[0],&amp;dp[0],&amp;dt[0],&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev2">&gt;&gt; cc = MPI_Type_commit(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;   rank=%d pass-1 x-&gt;x =%d[%d] x-&gt;a=%d[%d] x-&gt;y=%d[%d] x-&gt;b= 
</span><br>
<span class="quotelev2">&gt;&gt; %d[%d] x-&gt;c=%d[%d]\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   ,rank
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.x) - (unsigned long)(&amp;buf.x)) ),dp[0]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.a) - (unsigned long)(&amp;buf.x)) ),dp[1]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.y) - (unsigned long)(&amp;buf.x)) ),dp[2]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.b) - (unsigned long)(&amp;buf.x)) ),dp[3]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.c) - (unsigned long)(&amp;buf.x)) ),dp[4]
</span><br>
<span class="quotelev2">&gt;&gt; );
</span><br>
<span class="quotelev2">&gt;&gt; fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Isend(&amp;buf,1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   sleep(SLPTIME);  /** take checkpoint at this point **/
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else { /* rank 1 */
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   sleep(SLPTIME);  /** take checkpoint at this point **/
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Irecv(&amp;buf,1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.x != buf.x) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.a != buf.a) { MPI_Abort(MPI_COMM_WORLD,1); }  /* The  
</span><br>
<span class="quotelev2">&gt;&gt; error occurs at this point */
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.y != buf.y) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.b != buf.b) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.c != buf.c) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Take checkpoint while Rank 0 and Rank 1 are performing sleep  
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Construct derived datatype from the structure dd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * I think that image of memory mapping of the derived datatype is  
</span><br>
<span class="quotelev2">&gt;&gt; as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             1111111111
</span><br>
<span class="quotelev2">&gt;&gt;   01234567890123456789
</span><br>
<span class="quotelev2">&gt;&gt;   --------------------
</span><br>
<span class="quotelev2">&gt;&gt;   X###AAAAY###BBBBCCCC
</span><br>
<span class="quotelev2">&gt;&gt;   --------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ### means space.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * ddt_size for /** Quick reference to the size of the datatype */ in
</span><br>
<span class="quotelev2">&gt;&gt; ompi_crcp_bkmrk_pml_traffic_message_ref_t structure is obtained by
</span><br>
<span class="quotelev2">&gt;&gt; ompi_ddt_type_size function in traffic_message_append function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if( NULL != datatype ) {
</span><br>
<span class="quotelev2">&gt;&gt;       ompi_ddt_type_size(datatype,
</span><br>
<span class="quotelev2">&gt;&gt;                          &amp;ddt_size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * I think that the returned value of ddt_size is wrong.
</span><br>
<span class="quotelev2">&gt;&gt; The obtained value is 14.(Does it means total size in the memory is  
</span><br>
<span class="quotelev2">&gt;&gt; 14bytes?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd {
</span><br>
<span class="quotelev2">&gt;&gt;   char  x;    -&gt; charactor is 1byte.
</span><br>
<span class="quotelev2">&gt;&gt;   float a;    -&gt; float     is 4byte.
</span><br>
<span class="quotelev2">&gt;&gt;   char  y;    -&gt; charactor is 1byte.
</span><br>
<span class="quotelev2">&gt;&gt;   float b;    -&gt; float     is 4byte.
</span><br>
<span class="quotelev2">&gt;&gt;   int   c;    -&gt; integer   is 4byte.
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * But the returned value of ddt_size should be 20bytes, considering  
</span><br>
<span class="quotelev2">&gt;&gt; the memory mapping.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Rank 1 receive messages of only 14bytes in the bkmrk.
</span><br>
<span class="quotelev2">&gt;&gt; The wrong result is obtained.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * t_mpi_question-7-ng.c : the error occurs.
</span><br>
<span class="quotelev2">&gt;&gt; Here's my debugging output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ft_event_post_drain_message:Irecv drain_msg_ref=c89200 rank=0  
</span><br>
<span class="quotelev2">&gt;&gt; tag=1000 cnt=1 ddt=14 to=c929b0 [datatype-&gt;size=1]
</span><br>
<span class="quotelev2">&gt;&gt; wait_quiesce_drained: x=1 a=142658605493679655240073216.000000 y=4  
</span><br>
<span class="quotelev2">&gt;&gt; b=0.000000 c=32
</span><br>
<span class="quotelev2">&gt;&gt;   /* 14bytes data is received, it is incorrect. values are wrong. */
</span><br>
<span class="quotelev2">&gt;&gt; drain_message_check_recv:datatype-&gt;size=1 14 count=1 1
</span><br>
<span class="quotelev2">&gt;&gt; ompi_ddt_copy_content_same_ddt:Start size=14 flag=102/4 count=1
</span><br>
<span class="quotelev2">&gt;&gt;   /* DT_FLAG_CONTIGUOUS is false. */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * t_mpi_question-7-ok.c : the error does not occur.
</span><br>
<span class="quotelev2">&gt;&gt; Here's my debugging output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ft_event_post_drain_message:Irecv drain_msg_ref=a51280 rank=0  
</span><br>
<span class="quotelev2">&gt;&gt; tag=1000 cnt=1 ddt=20 to=a5b6b0 [datatype-&gt;size=1]
</span><br>
<span class="quotelev2">&gt;&gt; wait_quiesce_drained: x=1 a=4329.100098 y=2 b=8474.730469 c=48
</span><br>
<span class="quotelev2">&gt;&gt;   /* 20bytes data is received correctly. */
</span><br>
<span class="quotelev2">&gt;&gt; drain_message_check_recv:datatype-&gt;size=1 20 count=1 1
</span><br>
<span class="quotelev2">&gt;&gt; ompi_ddt_copy_content_same_ddt:Start size=20 flag=186/4 count=1
</span><br>
<span class="quotelev2">&gt;&gt;   /* DT_FLAG_CONTIGUOUS is true. */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * difference list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.2$ diff -c t_mpi_question-7-ng.c t_mpi_question-7-ok.c
</span><br>
<span class="quotelev2">&gt;&gt; *** t_mpi_question-7-ng.c       Fri Feb 26 13:07:05 2010
</span><br>
<span class="quotelev2">&gt;&gt; --- t_mpi_question-7-ok.c       Fri Feb 26 13:20:25 2010
</span><br>
<span class="quotelev2">&gt;&gt; ***************
</span><br>
<span class="quotelev2">&gt;&gt; *** 8,16 ****
</span><br>
<span class="quotelev2">&gt;&gt; #define ITEMNUM 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd {
</span><br>
<span class="quotelev2">&gt;&gt; !   char  x;
</span><br>
<span class="quotelev2">&gt;&gt;   float a;
</span><br>
<span class="quotelev2">&gt;&gt; !   char  y;
</span><br>
<span class="quotelev2">&gt;&gt;   float b;
</span><br>
<span class="quotelev2">&gt;&gt;   int   c;
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; --- 8,16 ----
</span><br>
<span class="quotelev2">&gt;&gt; #define ITEMNUM 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd {
</span><br>
<span class="quotelev2">&gt;&gt; !   int   x;
</span><br>
<span class="quotelev2">&gt;&gt;   float a;
</span><br>
<span class="quotelev2">&gt;&gt; !   int   y;
</span><br>
<span class="quotelev2">&gt;&gt;   float b;
</span><br>
<span class="quotelev2">&gt;&gt;   int   c;
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; ***************
</span><br>
<span class="quotelev2">&gt;&gt; *** 31,52 ****
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.x = (char)1;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.y = (char)2;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   else {
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.x = (char)0;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.a = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.y = (char)0;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.b = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.c = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt; !   ans_dd_buf.x = (char)1;
</span><br>
<span class="quotelev2">&gt;&gt;   ans_dd_buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt; !   ans_dd_buf.y = (char)2;
</span><br>
<span class="quotelev2">&gt;&gt;   ans_dd_buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt;   ans_dd_buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- 31,52 ----
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.x = (int)1;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.y = (int)2;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   else {
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.x = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.a = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt; !     buf.y = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.b = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;     buf.c = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt; !   ans_dd_buf.x = (int)1;
</span><br>
<span class="quotelev2">&gt;&gt;   ans_dd_buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt; !   ans_dd_buf.y = (int)2;
</span><br>
<span class="quotelev2">&gt;&gt;   ans_dd_buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt;   ans_dd_buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***************
</span><br>
<span class="quotelev2">&gt;&gt; *** 54,60 ****
</span><br>
<span class="quotelev2">&gt;&gt;   b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /* datatype per a block */
</span><br>
<span class="quotelev2">&gt;&gt; !   dt[0]  = dt[2] = MPI_BYTE;
</span><br>
<span class="quotelev2">&gt;&gt;   dt[1]  = dt[3] = MPI_FLOAT;
</span><br>
<span class="quotelev2">&gt;&gt;   dt[4]  = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- 54,60 ----
</span><br>
<span class="quotelev2">&gt;&gt;   b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /* datatype per a block */
</span><br>
<span class="quotelev2">&gt;&gt; !   dt[0]  = dt[2] = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;   dt[1]  = dt[3] = MPI_FLOAT;
</span><br>
<span class="quotelev2">&gt;&gt;   dt[4]  = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.2$ cat t_mpi_question-7-ng.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define SLPTIME 60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define ITEMNUM 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd {
</span><br>
<span class="quotelev2">&gt;&gt; char  x;
</span><br>
<span class="quotelev2">&gt;&gt; float a;
</span><br>
<span class="quotelev2">&gt;&gt; char  y;
</span><br>
<span class="quotelev2">&gt;&gt; float b;
</span><br>
<span class="quotelev2">&gt;&gt; int   c;
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int ac,char **av)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; int rank,size,cc;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request req;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Status sts;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd buf,ans_dd_buf;
</span><br>
<span class="quotelev2">&gt;&gt; int b_l[ITEMNUM];
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Aint dp[ITEMNUM],st,cr;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype dt[ITEMNUM],newdt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;ac,&amp;av);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;   buf.x = (char)1;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.y = (char)2;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else {
</span><br>
<span class="quotelev2">&gt;&gt;   buf.x = (char)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.a = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.y = (char)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.b = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.c = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.x = (char)1;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.y = (char)2;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* item number per a block */
</span><br>
<span class="quotelev2">&gt;&gt; b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* datatype per a block */
</span><br>
<span class="quotelev2">&gt;&gt; dt[0]  = dt[2] = MPI_BYTE;
</span><br>
<span class="quotelev2">&gt;&gt; dt[1]  = dt[3] = MPI_FLOAT;
</span><br>
<span class="quotelev2">&gt;&gt; dt[4]  = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* disp per a block */
</span><br>
<span class="quotelev2">&gt;&gt; dp[0] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.x,&amp;st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.a,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[1] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.y,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[2] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.b,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[3] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.c,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[4] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cc = MPI_Type_struct(ITEMNUM,&amp;b_l[0],&amp;dp[0],&amp;dt[0],&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev2">&gt;&gt; cc = MPI_Type_commit(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;   rank=%d pass-1 x-&gt;x =%d[%d] x-&gt;a=%d[%d] x-&gt;y=%d[%d] x-&gt;b= 
</span><br>
<span class="quotelev2">&gt;&gt; %d[%d] x-&gt;c=%d[%d]\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   ,rank
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.x) - (unsigned long)(&amp;buf.x)) ),dp[0]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.a) - (unsigned long)(&amp;buf.x)) ),dp[1]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.y) - (unsigned long)(&amp;buf.x)) ),dp[2]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.b) - (unsigned long)(&amp;buf.x)) ),dp[3]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.c) - (unsigned long)(&amp;buf.x)) ),dp[4]
</span><br>
<span class="quotelev2">&gt;&gt; );
</span><br>
<span class="quotelev2">&gt;&gt; fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Isend(&amp;buf,1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   sleep(SLPTIME);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else {
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   sleep(SLPTIME);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Irecv(&amp;buf,1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;   rank=%d pass-2 %d %f %d %f %d \n&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   ,rank,buf.x,buf.a,buf.y,buf.b,buf.c); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.x != buf.x) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.a != buf.a) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.y != buf.y) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.b != buf.b) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.c != buf.c) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cc =  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; if (rank ==0) {
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; return(0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.2$ cat t_mpi_question-7-ok.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define SLPTIME 60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define ITEMNUM 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd {
</span><br>
<span class="quotelev2">&gt;&gt; int   x;
</span><br>
<span class="quotelev2">&gt;&gt; float a;
</span><br>
<span class="quotelev2">&gt;&gt; int   y;
</span><br>
<span class="quotelev2">&gt;&gt; float b;
</span><br>
<span class="quotelev2">&gt;&gt; int   c;
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int ac,char **av)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; int rank,size,cc;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request req;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Status sts;
</span><br>
<span class="quotelev2">&gt;&gt; struct dd buf,ans_dd_buf;
</span><br>
<span class="quotelev2">&gt;&gt; int b_l[ITEMNUM];
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Aint dp[ITEMNUM],st,cr;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype dt[ITEMNUM],newdt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;ac,&amp;av);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;   buf.x = (int)1;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.y = (int)2;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else {
</span><br>
<span class="quotelev2">&gt;&gt;   buf.x = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.a = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.y = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.b = (float)0;
</span><br>
<span class="quotelev2">&gt;&gt;   buf.c = (int)0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.x = (int)1;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.a = (float)4329.1003;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.y = (int)2;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.b = (float)8474.73;
</span><br>
<span class="quotelev2">&gt;&gt; ans_dd_buf.c = (int)48;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* item number per a block */
</span><br>
<span class="quotelev2">&gt;&gt; b_l[0] = b_l[1] = b_l[2] = b_l[3] = b_l[4] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* datatype per a block */
</span><br>
<span class="quotelev2">&gt;&gt; dt[0]  = dt[2] = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt; dt[1]  = dt[3] = MPI_FLOAT;
</span><br>
<span class="quotelev2">&gt;&gt; dt[4]  = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* disp per a block */
</span><br>
<span class="quotelev2">&gt;&gt; dp[0] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.x,&amp;st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.a,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[1] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.y,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[2] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.b,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[3] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Address(&amp;buf.c,&amp;cr);
</span><br>
<span class="quotelev2">&gt;&gt; dp[4] = (cr - st);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cc = MPI_Type_struct(ITEMNUM,&amp;b_l[0],&amp;dp[0],&amp;dt[0],&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev2">&gt;&gt; cc = MPI_Type_commit(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;   rank=%d pass-1 x-&gt;x =%d[%d] x-&gt;a=%d[%d] x-&gt;y=%d[%d] x-&gt;b= 
</span><br>
<span class="quotelev2">&gt;&gt; %d[%d] x-&gt;c=%d[%d]\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   ,rank
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.x) - (unsigned long)(&amp;buf.x)) ),dp[0]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.a) - (unsigned long)(&amp;buf.x)) ),dp[1]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.y) - (unsigned long)(&amp;buf.x)) ),dp[2]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.b) - (unsigned long)(&amp;buf.x)) ),dp[3]
</span><br>
<span class="quotelev2">&gt;&gt;   ,( (int)((unsigned long)(&amp;buf.c) - (unsigned long)(&amp;buf.x)) ),dp[4]
</span><br>
<span class="quotelev2">&gt;&gt; );
</span><br>
<span class="quotelev2">&gt;&gt; fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Isend(&amp;buf,1,newdt,1,1000,MPI_COMM_WORLD,&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   sleep(SLPTIME);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else {
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   sleep(SLPTIME);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Irecv(&amp;buf,1,newdt,0,1000,MPI_COMM_WORLD,&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;req,&amp;sts);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free(&amp;newdt);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;   rank=%d pass-2 %d %f %d %f %d \n&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   ,rank,buf.x,buf.a,buf.y,buf.b,buf.c); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.x != buf.x) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.a != buf.a) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.y != buf.y) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.b != buf.b) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt; if (ans_dd_buf.c != buf.c) { MPI_Abort(MPI_COMM_WORLD,1); }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cc =  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; if (rank ==0) {
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; return(0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7634.php">George Bosilca: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>In reply to:</strong> <a href="7634.php">George Bosilca: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7663.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>Reply:</strong> <a href="7663.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
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
