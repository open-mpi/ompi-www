<?
$subject_val = "[OMPI users] random MPI_UNIVERSE_SIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 09:31:15 2010" -->
<!-- isoreceived="20100218143115" -->
<!-- sent="Thu, 18 Feb 2010 15:31:06 +0100" -->
<!-- isosent="20100218143106" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="[OMPI users] random MPI_UNIVERSE_SIZE" -->
<!-- id="4B7D4F2A.7090307_at_laposte.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] random MPI_UNIVERSE_SIZE<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 09:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12104.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12102.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to use MPI_Comm_spawn (MPI-2 standard only) and I have an 
<br>
problem when I use MPI_UNIVERSE_SIZE. Here my code:
<br>
<p>int main( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int wsize=0, wrank=-1 ;
<br>
&nbsp;&nbsp;&nbsp;int usize=0, urank=-1 ;
<br>
&nbsp;&nbsp;&nbsp;int ier ;
<br>
&nbsp;&nbsp;&nbsp;int usize_attr=0, flag=0 ;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm MPI_COMM_UNIVERSE;
<br>
&nbsp;&nbsp;&nbsp;ier = MPI_Init( &amp;argc, &amp;argv ) ;
<br>
&nbsp;&nbsp;&nbsp;ier = MPI_Comm_size( MPI_COMM_WORLD, &amp;wsize ) ;
<br>
&nbsp;&nbsp;&nbsp;ier = MPI_Comm_rank( MPI_COMM_WORLD, &amp;wrank ) ;
<br>
&nbsp;&nbsp;&nbsp;ier = MPI_Comm_get_attr( MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, (void*) 
<br>
&amp;usize_attr, &amp;flag ) ;
<br>
&nbsp;&nbsp;&nbsp;if ( !flag ) { printf( &quot;[manager][error] This MPI does not support 
<br>
MPI_UNIVERSE_SIZE.\n&quot; ) ; return 1 ; }
<br>
&nbsp;&nbsp;&nbsp;if( wrank==0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ier = MPI_Comm_spawn( &quot;./worker&quot;, argv, ( wsize/2 &gt; 2 ? wsize/2 : 
<br>
2 ), MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;MPI_COMM_UNIVERSE, 
<br>
MPI_ERRCODES_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ier = MPI_Comm_size( MPI_COMM_UNIVERSE, &amp;usize ) ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ier = MPI_Comm_rank( MPI_COMM_UNIVERSE, &amp;urank ) ;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;printf( &quot;[manager] I am the process %d on %d in world (universe attr 
<br>
size: %d) and  %d on %d in universe\n&quot;, wrank, wsize, usize_attr, urank, 
<br>
usize ) ;
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>When I call MPI_Comm_get_attr() with MPI_UNIVERSE_SIZE, my variable 
<br>
u_size_attr is random. Any idea?
<br>
<p>Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12104.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12102.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
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
