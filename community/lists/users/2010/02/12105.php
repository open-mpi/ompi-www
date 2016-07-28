<?
$subject_val = "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 10:18:58 2010" -->
<!-- isoreceived="20100218151858" -->
<!-- sent="Thu, 18 Feb 2010 16:18:52 +0100" -->
<!-- isosent="20100218151852" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn" -->
<!-- id="4B7D5A5C.9070907_at_laposte.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B7D4F2A.7090307_at_laposte.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 10:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12104.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12103.php">Mathieu Gontier: "[OMPI users] random MPI_UNIVERSE_SIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another question on the same example.
<br>
<p>When I ask the size on the inter-communitator (MPI_COMM_UNIVERSE in the 
<br>
example) between the spaner/parent and the spawned/children processes, 
<br>
the same number of processes than in MPI_COMM_WORLD is returned. I do 
<br>
not really understand because I expected my MPI_COMM_UNIVERSE be a 
<br>
higher communicator including here the group of MPI_COMM_SELF and the 
<br>
group of MPI_COMM_WORLD of my spawned application (./worker).
<br>
I think I missed something. Does someone can help me?
<br>
<p>Thank you.
<br>
<p>Mathieu Gontier wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use MPI_Comm_spawn (MPI-2 standard only) and I have an 
</span><br>
<span class="quotelev1">&gt; problem when I use MPI_UNIVERSE_SIZE. Here my code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int wsize=0, wrank=-1 ;
</span><br>
<span class="quotelev1">&gt;   int usize=0, urank=-1 ;
</span><br>
<span class="quotelev1">&gt;   int ier ;
</span><br>
<span class="quotelev1">&gt;   int usize_attr=0, flag=0 ;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm MPI_COMM_UNIVERSE;
</span><br>
<span class="quotelev1">&gt;   ier = MPI_Init( &amp;argc, &amp;argv ) ;
</span><br>
<span class="quotelev1">&gt;   ier = MPI_Comm_size( MPI_COMM_WORLD, &amp;wsize ) ;
</span><br>
<span class="quotelev1">&gt;   ier = MPI_Comm_rank( MPI_COMM_WORLD, &amp;wrank ) ;
</span><br>
<span class="quotelev1">&gt;   ier = MPI_Comm_get_attr( MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, (void*) 
</span><br>
<span class="quotelev1">&gt; &amp;usize_attr, &amp;flag ) ;
</span><br>
<span class="quotelev1">&gt;   if ( !flag ) { printf( &quot;[manager][error] This MPI does not support 
</span><br>
<span class="quotelev1">&gt; MPI_UNIVERSE_SIZE.\n&quot; ) ; return 1 ; }
</span><br>
<span class="quotelev1">&gt;   if( wrank==0 ) {
</span><br>
<span class="quotelev1">&gt;       ier = MPI_Comm_spawn( &quot;./worker&quot;, argv, ( wsize/2 &gt; 2 ? wsize/2 
</span><br>
<span class="quotelev1">&gt; : 2 ), MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;MPI_COMM_UNIVERSE, 
</span><br>
<span class="quotelev1">&gt; MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;       ier = MPI_Comm_size( MPI_COMM_UNIVERSE, &amp;usize ) ;
</span><br>
<span class="quotelev1">&gt;       ier = MPI_Comm_rank( MPI_COMM_UNIVERSE, &amp;urank ) ;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   printf( &quot;[manager] I am the process %d on %d in world (universe attr 
</span><br>
<span class="quotelev1">&gt; size: %d) and  %d on %d in universe\n&quot;, wrank, wsize, usize_attr, 
</span><br>
<span class="quotelev1">&gt; urank, usize ) ;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I call MPI_Comm_get_attr() with MPI_UNIVERSE_SIZE, my variable 
</span><br>
<span class="quotelev1">&gt; u_size_attr is random. Any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12104.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12103.php">Mathieu Gontier: "[OMPI users] random MPI_UNIVERSE_SIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
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
