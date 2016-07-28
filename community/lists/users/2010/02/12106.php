<?
$subject_val = "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 13:46:16 2010" -->
<!-- isoreceived="20100218184616" -->
<!-- sent="Thu, 18 Feb 2010 13:46:05 -0500" -->
<!-- isosent="20100218184605" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn" -->
<!-- id="CA9D2B87-5C0D-4B9B-BFD8-F416E7E38265_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B7D5A5C.9070907_at_laposte.net" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 13:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12107.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator	created by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mathieu,
<br>
<p>Your MPI_COMM_UNIVERSE is a inter-communicator, and therefore the MPI_Comm_size and MPI_Comm_rank return the size, respectively the rank, in the local group. There is a special accessor for getting the remote group size (MPI_Comm_remote_size).
<br>
<p>Now regarding the previous question (about the attribute MPI_UNIVERSE_SIZE), your answer is in the MPI standard 2.2 page 346 line 35. The MPI_UNIVERSE_SIZE is not set in Open MPI.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 18, 2010, at 10:18 , Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another question on the same example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I ask the size on the inter-communitator (MPI_COMM_UNIVERSE in the example) between the spaner/parent and the spawned/children processes, the same number of processes than in MPI_COMM_WORLD is returned. I do not really understand because I expected my MPI_COMM_UNIVERSE be a higher communicator including here the group of MPI_COMM_SELF and the group of MPI_COMM_WORLD of my spawned application (./worker).
</span><br>
<span class="quotelev1">&gt; I think I missed something. Does someone can help me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mathieu Gontier wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use MPI_Comm_spawn (MPI-2 standard only) and I have an problem when I use MPI_UNIVERSE_SIZE. Here my code:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  int wsize=0, wrank=-1 ;
</span><br>
<span class="quotelev2">&gt;&gt;  int usize=0, urank=-1 ;
</span><br>
<span class="quotelev2">&gt;&gt;  int ier ;
</span><br>
<span class="quotelev2">&gt;&gt;  int usize_attr=0, flag=0 ;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm MPI_COMM_UNIVERSE;
</span><br>
<span class="quotelev2">&gt;&gt;  ier = MPI_Init( &amp;argc, &amp;argv ) ;
</span><br>
<span class="quotelev2">&gt;&gt;  ier = MPI_Comm_size( MPI_COMM_WORLD, &amp;wsize ) ;
</span><br>
<span class="quotelev2">&gt;&gt;  ier = MPI_Comm_rank( MPI_COMM_WORLD, &amp;wrank ) ;
</span><br>
<span class="quotelev2">&gt;&gt;  ier = MPI_Comm_get_attr( MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, (void*) &amp;usize_attr, &amp;flag ) ;
</span><br>
<span class="quotelev2">&gt;&gt;  if ( !flag ) { printf( &quot;[manager][error] This MPI does not support MPI_UNIVERSE_SIZE.\n&quot; ) ; return 1 ; }
</span><br>
<span class="quotelev2">&gt;&gt;  if( wrank==0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;      ier = MPI_Comm_spawn( &quot;./worker&quot;, argv, ( wsize/2 &gt; 2 ? wsize/2 : 2 ), MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;MPI_COMM_UNIVERSE, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;      ier = MPI_Comm_size( MPI_COMM_UNIVERSE, &amp;usize ) ;
</span><br>
<span class="quotelev2">&gt;&gt;      ier = MPI_Comm_rank( MPI_COMM_UNIVERSE, &amp;urank ) ;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  printf( &quot;[manager] I am the process %d on %d in world (universe attr size: %d) and  %d on %d in universe\n&quot;, wrank, wsize, usize_attr, urank, usize ) ;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I call MPI_Comm_get_attr() with MPI_UNIVERSE_SIZE, my variable u_size_attr is random. Any idea?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12107.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator	created by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
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
