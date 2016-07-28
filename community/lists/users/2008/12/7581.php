<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 13:20:14 2008" -->
<!-- isoreceived="20081223182014" -->
<!-- sent="Tue, 23 Dec 2008 10:23:39 -0800" -->
<!-- isosent="20081223182339" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="49512CAB.8000102_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9247a3360812231004h441af573m55aea3dc486703ce_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sending message to the source(0) from other processors<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 13:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7580.php">Win Than Aung: "[OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7580.php">Win Than Aung: "[OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Win Than Aung wrote:
<br>
<p><span class="quotelev1">&gt; MPI_Recv(....) &lt;&lt; is it possible to receive the message sent from 
</span><br>
<span class="quotelev1">&gt; other sources? I tried MPI_ANY_SOURCE in place of source but it 
</span><br>
<span class="quotelev1">&gt; doesn't work out
</span><br>
<p>Yes of course.  Can you send a short example of what doesn't work?  The 
<br>
example should presumably be less than about 20 lines.  Here is an 
<br>
example that works:
<br>
<p>% cat a.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;int np, me, sbuf = -1, rbuf = -2;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
<br>
&nbsp;&nbsp;if ( np &lt; 2 ) MPI_Abort(MPI_COMM_WORLD,-1);
<br>
<p>&nbsp;&nbsp;if ( me == 1 ) MPI_Send(&amp;sbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;if ( me == 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
MPI_Recv(&amp;rbuf,1,MPI_INT,MPI_ANY_SOURCE,344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( rbuf == sbuf ) printf(&quot;Send/Recv self passed\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else                printf(&quot;Send/Recv self FAILED\n&quot;);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
% mpicc a.c
<br>
% mpirun -np 2 a.out
<br>
Send/Recv self passed
<br>
%
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7580.php">Win Than Aung: "[OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7580.php">Win Than Aung: "[OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
