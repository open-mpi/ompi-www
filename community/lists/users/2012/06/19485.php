<?
$subject_val = "Re: [OMPI users] Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  8 10:31:08 2012" -->
<!-- isoreceived="20120608143108" -->
<!-- sent="Fri, 8 Jun 2012 07:30:44 -0700" -->
<!-- isosent="20120608143044" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug when mixing sent types in version 1.6" -->
<!-- id="3B915031-93E6-4DEC-904F-91C7EFFFAFE0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21603_1339163039_4FD2019F_21603_8118_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E1D_at_THSONEA01CMS07P.one.grp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-08 10:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Previous message:</strong> <a href="19484.php">BOUVIER Benjamin: "[OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19484.php">BOUVIER Benjamin: "[OMPI users] Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 8, 2012, at 6:43 AM, BOUVIER Benjamin wrote:
<br>
<p><span class="quotelev1">&gt; # include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; # include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; # include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, size;
</span><br>
<span class="quotelev1">&gt;    const char someString[] = &quot;Can haz cheezburgerz?&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank( MPI_COMM_WORLD, &amp; rank );
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size( MPI_COMM_WORLD, &amp; size );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if ( rank == 0 )
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        int len = strlen( someString );
</span><br>
<span class="quotelev1">&gt;        int i;
</span><br>
<span class="quotelev1">&gt;        for( i = 1; i &lt; size; ++i)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;            MPI_Send( &amp;len, 1, MPI_INT, i, 0, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;            MPI_Send( &amp;someString, len+1, MPI_CHAR, i, 0, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        char buffer[ 128 ];
</span><br>
<span class="quotelev1">&gt;        int receivedLen;
</span><br>
<span class="quotelev1">&gt;        MPI_Status stat;
</span><br>
<span class="quotelev1">&gt;        MPI_Recv( &amp;receivedLen, 1, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;stat );
</span><br>
<span class="quotelev1">&gt;        printf( &quot;[Worker] Length : %d\n&quot;, receivedLen );
</span><br>
<span class="quotelev1">&gt;        MPI_Recv( buffer, receivedLen+1, MPI_CHAR, 0, 0, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;        printf( &quot;[Worker] String : %s\n&quot;, buffer );
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>I don't see anything obviously wrong with this code.
<br>
<p><span class="quotelev1">&gt; I know that there is a better way to send a string, by giving a maximum buffer size at the second MPI_Recv, but there is no the main topic here.
</span><br>
<span class="quotelev1">&gt; The launch works locally (i.e when the 2 processes are launched on one machine), but doesn't work when the 2 processes are dispatched in 2 machines through network (i.e one per host). In this case, the worker correctly reads the INT, and then master and worker block on the next call.
</span><br>
<p>That's very odd.
<br>
<p><span class="quotelev1">&gt; I have no issue when sending only char strings or only numbers. This only happens when sending char strings then numbers, or in the other order.
</span><br>
<p>That's even more odd.
<br>
<p>Can you run standard benchmarks like MPI net pipe, and/or the OSU benchmarks?  (across multiple nodes, that is)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19486.php">Rayson Ho: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Previous message:</strong> <a href="19484.php">BOUVIER Benjamin: "[OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19484.php">BOUVIER Benjamin: "[OMPI users] Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
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
