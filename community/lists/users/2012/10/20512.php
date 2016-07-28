<?
$subject_val = "Re: [OMPI users] 2 GB limitation of MPI_File_write_all";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 19 16:45:52 2012" -->
<!-- isoreceived="20121019204552" -->
<!-- sent="Fri, 19 Oct 2012 16:45:43 -0400" -->
<!-- isosent="20121019204543" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 GB limitation of MPI_File_write_all" -->
<!-- id="5081BBF7.30304_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50819C94.7000509_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 GB limitation of MPI_File_write_all<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-19 16:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20513.php">William Au: "[OMPI users] Question on MPI_Reduce_scatter limit"</a>
<li><strong>Previous message:</strong> <a href="20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>In reply to:</strong> <a href="20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Reply:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eric
<br>
<p>Have you tried to create a user-defined MPI type
<br>
(say MPI_Type_Contiguous or MPI_Type_Vector) and pass them
<br>
to the MPI function calls, instead of MPI_LONGs?
<br>
Then you could use the new type and the new number
<br>
(i.e., an integer number smaller than &quot;size&quot;, and
<br>
smaller than the maximum integer 2,147,483,647 )
<br>
in the MPI function calls (e.g., MPI_File_write_all).
<br>
Maybe the &quot;invalid argument&quot; error message relates to this.
<br>
If I remember right, the 'number of elements' in MPI calls
<br>
is a positive integer (int, 32 bits).
<br>
<p>See these threads about this workaround:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/02/8100.php">http://www.open-mpi.org/community/lists/users/2009/02/8100.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14816.php">http://www.open-mpi.org/community/lists/users/2010/11/14816.php</a>
<br>
<p>Also, not MPI but C.
<br>
I wonder if you need to declare &quot;size&quot; as 'long int',
<br>
or maybe 'long long int', to represent/hold correctly
<br>
the large value that you want
<br>
(360,000,000,000 &gt; 2,147,483,647).
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 10/19/2012 02:31 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error when trying to write 360 000 000 000 MPI_LONG:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with Openmpi-1.4.5:
</span><br>
<span class="quotelev1">&gt; ERROR Returned by MPI_File_write_all: 35
</span><br>
<span class="quotelev1">&gt; ERROR_string Returned by MPI_File_write_all: MPI_ERR_IO: input/output error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with Openmpi-1.6.2:
</span><br>
<span class="quotelev1">&gt; ERROR Returned by MPI_File_write_all: 13
</span><br>
<span class="quotelev1">&gt; ERROR_string Returned by MPI_File_write_all: MPI_ERR_ARG: invalid
</span><br>
<span class="quotelev1">&gt; argument of some other kind
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, the error in 1.6.2 seems to be less usefull to understand what
</span><br>
<span class="quotelev1">&gt; happened for the user...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, am I wrong to try to write that much MPI_LONG? Is this
</span><br>
<span class="quotelev1">&gt; limitation documented or to be fixed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt; Here is the code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; MPI_Datatype filetype;
</span><br>
<span class="quotelev1">&gt; MPI_File fh;
</span><br>
<span class="quotelev1">&gt; long *local_array;
</span><br>
<span class="quotelev1">&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int nb_proc = 0;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size( MPI_COMM_WORLD, &amp;nb_proc );
</span><br>
<span class="quotelev1">&gt; if (nb_proc != 1) {
</span><br>
<span class="quotelev1">&gt; printf( &quot;Test code for 1 process!\n&quot; );
</span><br>
<span class="quotelev1">&gt; MPI_Abort( MPI_COMM_WORLD, 1 );
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; int size=90000000*4;
</span><br>
<span class="quotelev1">&gt; local_array = new long[size];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_File_open(MPI_COMM_WORLD, &quot;2.6Gb&quot;,
</span><br>
<span class="quotelev1">&gt; MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int ierr = MPI_File_write_all(fh, local_array, size, MPI_LONG, &amp;status);
</span><br>
<span class="quotelev1">&gt; if (ierr != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; printf(&quot;ERROR Returned by MPI_File_write_all: %d\n&quot;,ierr);
</span><br>
<span class="quotelev1">&gt; char* lCharPtr = new char[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev1">&gt; int lLongueur = 0;
</span><br>
<span class="quotelev1">&gt; MPI_Error_string(ierr,lCharPtr, &amp;lLongueur);
</span><br>
<span class="quotelev1">&gt; printf(&quot;ERROR_string Returned by MPI_File_write_all: %s\n&quot;,lCharPtr);
</span><br>
<span class="quotelev1">&gt; MPI_Abort( MPI_COMM_WORLD, 1 );
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~
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
<li><strong>Next message:</strong> <a href="20513.php">William Au: "[OMPI users] Question on MPI_Reduce_scatter limit"</a>
<li><strong>Previous message:</strong> <a href="20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>In reply to:</strong> <a href="20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Reply:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
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
