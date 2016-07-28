<?
$subject_val = "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 11:02:49 2009" -->
<!-- isoreceived="20090619150249" -->
<!-- sent="Fri, 19 Jun 2009 11:02:44 -0400" -->
<!-- isosent="20090619150244" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes" -->
<!-- id="82dde0906190802m14009b03l8e26385f6044aa4d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3BA5C7.1010805_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 11:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9642.php">SLIM H.A.: "[OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>Previous message:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not that long, 150 lines.
<br>
<p>Here it is:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>#define BUFLEN 25000
<br>
#define LOOPS 10
<br>
#define BUFFERS 4
<br>
<p>#define GROUP_SIZE 4
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int myid, numprocs, next, namelen;
<br>
&nbsp;&nbsp;&nbsp;int color, key, newid;
<br>
&nbsp;&nbsp;&nbsp;char buffer[BUFLEN], processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm world_comm, comp_comm, server_comm;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name,&amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_dup( MPI_COMM_WORLD, &amp;world_comm );
<br>
<p>&nbsp;&nbsp;&nbsp;if ( myid == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color = MPI_UNDEFINED;
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color = (myid - 1) / GROUP_SIZE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key = (myid - 1) % GROUP_SIZE;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_split( MPI_COMM_WORLD, color, key, &amp;comp_comm );
<br>
<p>&nbsp;&nbsp;&nbsp;if ( myid == 0 || (myid - 1) % GROUP_SIZE == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color = MPI_UNDEFINED;
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int r = myid - 2;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key = r - r / GROUP_SIZE;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_split( MPI_COMM_WORLD, color, key, &amp;server_comm );
<br>
&nbsp;&nbsp;&nbsp;if ( myid == 0 )
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Master [id = %d of %d] is running on %s\n&quot;, myid,
<br>
numprocs, processor_name);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int s_id;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( comp_comm, &amp;newid );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( (myid - 1) % GROUP_SIZE == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Compositor [id = %d, %d of %d] is running on %s\n&quot;,
<br>
myid, newid, numprocs, processor_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( server_comm, &amp;s_id );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Server [id = %d, %d, %d of %d] is running on %s\n&quot;,
<br>
myid, newid, s_id, numprocs, processor_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;if ( myid == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;next = 10;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Bcast( &amp;next, 1, MPI_INT, 0, world_comm );
<br>
&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;[%d] next = %d\n&quot;, myid, next );
<br>
<p>&nbsp;&nbsp;&nbsp;if ( myid &gt; 0 )
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( comp_comm, &amp;size );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( comp_comm, &amp;rank );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buffer[BUFLEN];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; LOOPS * ( size - 1 ); i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int which_source, which_tag;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Probe( MPI_ANY_SOURCE, MPI_ANY_TAG, comp_comm, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which_source = status.MPI_SOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which_tag = status.MPI_TAG;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Receiving buffer from %d, buffer = &quot;, which_source );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( buffer, BUFLEN, MPI_CHAR, which_source, which_tag,
<br>
comp_comm, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;%s\n&quot;, buffer );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request* request[BUFFERS];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int sent[ BUFFERS ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int index = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* buffer[BUFFERS];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; BUFFERS; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request* requester = (MPI_Request *) malloc( sizeof( MPI_Request
<br>
) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* c = (char *) malloc(BUFLEN * sizeof( MPI_Request ) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Should really check for failure, but not for this test */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request[ i ] = requester;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sent[ i ] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer[ i ] = c;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; LOOPS; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Sending buffer %d from %d\n&quot;, i, rank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf( buffer[ index ], &quot;hello from %d for the %d time&quot;, rank, i
<br>
);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( sent[ index ] )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sent[ index ] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait( request[ index ], &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend( buffer[ index ], BUFLEN, MPI_CHAR, 0, 99, comp_comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request[ index ] );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sent[ index ] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;index = ( index + 1 ) % BUFFERS;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Randomly sleep to fake a computation loop*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usleep( (unsigned long)(500000 * drand48()) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Clean up */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; BUFFERS; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( sent[ i ] )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sent[ i ] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait( request[ i ], &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free( request[ i ] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free( buffer[ i ] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Barrier( world_comm );
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return (0);
<br>
}
<br>
<p><p>On Fri, Jun 19, 2009 at 10:50 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mark Bolstad wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'll post the test code if requested (this email is already long)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yipes, how long is the test code?  Short enough to send, yes?  Please send.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9642.php">SLIM H.A.: "[OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>Previous message:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
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
