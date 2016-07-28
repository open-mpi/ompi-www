<?
$subject_val = "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 28 19:50:46 2008" -->
<!-- isoreceived="20081229005046" -->
<!-- sent="Sun, 28 Dec 2008 19:50:40 -0500" -->
<!-- isosent="20081229005040" -->
<!-- name="Win Than Aung" -->
<!-- email="keshunli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI, transfer data from multiple sources to one destination" -->
<!-- id="9247a3360812281650i65a44467t2209ebee5647efa7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU149-W170BC60F18C4C2E0A14AE3CBE60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI, transfer data from multiple sources to one destination<br>
<strong>From:</strong> Win Than Aung (<em>keshunli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-28 19:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>In reply to:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please refer to following code, which sends data to root from multiple cour
<br>
<p><p>There is only one receive, so it receives only one message.  When you
<br>
specify the element count for the receive, you're only specifying the size
<br>
of the buffer into which the message will be received.  Only after the
<br>
message has been received can you inquire how big the message actually was.
<br>
<p>Here is an example:
<br>
<p>% cat a.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;int np, me, peer, value;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
<br>
<p>&nbsp;&nbsp;value = me * me + 1;
<br>
&nbsp;&nbsp;if ( me == 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for ( peer = 0; peer &lt; np; peer++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( peer != 0 )
<br>
MPI_Recv(&amp;value,1,MPI_INT,peer,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;peer %d had value %d\n&quot;, peer, value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else MPI_Send(&amp;value,1,MPI_INT,0,343,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
% mpirun -np 3 a.out
<br>
peer 0 had value 1
<br>
peer 1 had value 2
<br>
peer 2 had value 5
<br>
%
<br>
<p>Alternatively,
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define MAXNP 1024
<br>
int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;int np, me, peer, value, values[MAXNP];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
<br>
&nbsp;&nbsp;if ( np &gt; MAXNP ) MPI_Abort(MPI_COMM_WORLD,-1);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
<br>
&nbsp;&nbsp;value = me * me + 1;
<br>
<p>&nbsp;&nbsp;MPI_Gather(&amp;value, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;values, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if ( me == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for ( peer = 0; peer &lt; np; peer++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;peer %d had value %d\n&quot;, peer, values[peer]);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
% mpirun -np 3 a.out
<br>
peer 0 had value 1
<br>
peer 1 had value 2
<br>
peer 2 had value 5
<br>
%
<br>
On Sun, Dec 28, 2008 at 7:45 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  HI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to transfer data from multiple sources to one destination.
</span><br>
<span class="quotelev1">&gt; The requirement is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) The sources and destination nodes may work asynchronously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) Each source node generates data package in their own paces.
</span><br>
<span class="quotelev1">&gt;     And, there may be many packages to send. Whenever, a data package
</span><br>
<span class="quotelev1">&gt;     is generated , it should be sent to the desination node at once.
</span><br>
<span class="quotelev1">&gt;     And then, the source node continue to work on generating the next
</span><br>
<span class="quotelev1">&gt;     package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) There is only one destination node , which must receive all data
</span><br>
<span class="quotelev1">&gt;     package generated from the source nodes.
</span><br>
<span class="quotelev1">&gt;     Because the source and destination nodes may work asynchronously,
</span><br>
<span class="quotelev1">&gt;     the destination node should not wait for a specific source node until
</span><br>
<span class="quotelev1">&gt;     the source node sends out its data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The destination node should be able to receive data package
</span><br>
<span class="quotelev1">&gt;     from anyone source node whenever the data package is available in a
</span><br>
<span class="quotelev1">&gt;     source node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What MPI function should be used to implement the protocol above ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use MPI_Send/Recv, they are blocking function. The destination
</span><br>
<span class="quotelev1">&gt; node have to wait for one node until its data is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The communication overhead is too high.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use MPI_Bsend, the destination node has to use MPI_Recv to ,
</span><br>
<span class="quotelev1">&gt; a Blocking receive for a message .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This can make the destination node wait for only one source node and
</span><br>
<span class="quotelev1">&gt; actually other source nodes may have data avaiable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help or comment is appreciated !!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dec. 28 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; It's the same Hotmail(R). If by &quot;same&quot; you mean up to 70% faster. Get your
</span><br>
<span class="quotelev1">&gt; account now.&lt;<a href="http://windowslive.com/online/hotmail?ocid=TXT_TAGLM_WL_hotmail_acq_broad1_122008">http://windowslive.com/online/hotmail?ocid=TXT_TAGLM_WL_hotmail_acq_broad1_122008</a>&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>In reply to:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
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
