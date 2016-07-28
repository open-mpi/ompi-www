<?
$subject_val = "Re: [OMPI devel] Some questions about checkpoint/restart (9)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 04:58:51 2010" -->
<!-- isoreceived="20100402085851" -->
<!-- sent="Fri, 02 Apr 2010 17:59:27 +0900" -->
<!-- isosent="20100402085927" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Some questions about checkpoint/restart (9)" -->
<!-- id="4BB5B1EF.2050700_at_np.css.fujitsu.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BB57362.8000504_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Some questions about checkpoint/restart (9)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 04:59:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7690.php">hu yaohui: "[OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7688.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>In reply to:</strong> <a href="7686.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (9)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt;  1) t_mpi_question-9-packunpack.c
</span><br>
<p>I did not put the program in 9th mail.
<br>
<p>The program is as follows:
<br>
<p>-bash-3.2$ cat t_mpi_question-9-packunpack.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define SLPTIME 60
<br>
<p>#define WORKBUFSIZ 64
<br>
<p>struct dd {
<br>
&nbsp;&nbsp;&nbsp;int  x;
<br>
&nbsp;&nbsp;&nbsp;int  a;
<br>
&nbsp;&nbsp;&nbsp;int  y;
<br>
&nbsp;&nbsp;&nbsp;int  b;
<br>
&nbsp;&nbsp;&nbsp;int  c;
<br>
};
<br>
<p>int main(int ac,char **av)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank,size,cc,j,i;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status sts;
<br>
&nbsp;&nbsp;&nbsp;struct dd buf,ans_dd_buf;
<br>
&nbsp;&nbsp;&nbsp;char workbuf[WORKBUFSIZ];
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;ac,&amp;av);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.x = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.a = 4329;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.y = 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.b = 8474;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.c = 48;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.x = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.a = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.y = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.b = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf.c = 0;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;ans_dd_buf.x = 1;
<br>
&nbsp;&nbsp;&nbsp;ans_dd_buf.a = 4329;
<br>
&nbsp;&nbsp;&nbsp;ans_dd_buf.y = 2;
<br>
&nbsp;&nbsp;&nbsp;ans_dd_buf.b = 8474;
<br>
&nbsp;&nbsp;&nbsp;ans_dd_buf.c = 48;
<br>
<p>&nbsp;&nbsp;&nbsp;j=0; /* position */
<br>
&nbsp;&nbsp;&nbsp;memset((void *)&amp;workbuf[0],0,WORKBUFSIZ);
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Pack(&amp;buf.x,1,MPI_INT,&amp;workbuf[0],WORKBUFSIZ,&amp;j,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Pack(&amp;buf.a,1,MPI_INT,&amp;workbuf[0],WORKBUFSIZ,&amp;j,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Pack(&amp;buf.y,1,MPI_INT,&amp;workbuf[0],WORKBUFSIZ,&amp;j,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Pack(&amp;buf.b,1,MPI_INT,&amp;workbuf[0],WORKBUFSIZ,&amp;j,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Pack(&amp;buf.c,1,MPI_INT,&amp;workbuf[0],WORKBUFSIZ,&amp;j,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;workbuf[0],j,MPI_PACKED,1,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep start \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(SLPTIME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; rank=%d sleep end   \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;workbuf[0],WORKBUFSIZ,MPI_PACKED,0,1000,MPI_COMM_WORLD,&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;sts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Unpack(&amp;workbuf[0],WORKBUFSIZ,&amp;j,&amp;buf.x,1,MPI_INT,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Unpack(&amp;workbuf[0],WORKBUFSIZ,&amp;j,&amp;buf.a,1,MPI_INT,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Unpack(&amp;workbuf[0],WORKBUFSIZ,&amp;j,&amp;buf.y,1,MPI_INT,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Unpack(&amp;workbuf[0],WORKBUFSIZ,&amp;j,&amp;buf.b,1,MPI_INT,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc=MPI_Unpack(&amp;workbuf[0],WORKBUFSIZ,&amp;j,&amp;buf.c,1,MPI_INT,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cc != MPI_SUCCESS) { MPI_Abort(MPI_COMM_WORLD,-1); }
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d pass-3 %d %d %d %d %d \n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,rank,buf.x,buf.a,buf.y,buf.b,buf.c); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;if (ans_dd_buf.x != buf.x) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;&nbsp;if (ans_dd_buf.a != buf.a) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;&nbsp;if (ans_dd_buf.y != buf.y) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;&nbsp;if (ans_dd_buf.b != buf.b) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
&nbsp;&nbsp;&nbsp;if (ans_dd_buf.c != buf.c) { MPI_Abort(MPI_COMM_WORLD,1); }
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;if (rank ==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;   rank=%d program end \n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;return(0);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7690.php">hu yaohui: "[OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7688.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>In reply to:</strong> <a href="7686.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (9)"</a>
<!-- nextthread="start" -->
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
