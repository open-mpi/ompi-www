<?
$subject_val = "Re: [OMPI users] 2 GB limitation of MPI_File_write_all";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 21 14:56:46 2012" -->
<!-- isoreceived="20121021185646" -->
<!-- sent="Sun, 21 Oct 2012 14:56:41 -0400" -->
<!-- isosent="20121021185641" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 GB limitation of MPI_File_write_all" -->
<!-- id="50844569.4000804_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALOaWgqwR1qjTdY_7bmO28FpYvX-HQ4whHE4Wh_AooKTgw_at_mail.gmail.com" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-21 14:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20517.php">Mahmood Naderan: "[OMPI users] Low cpu utilization due to high IO operations of openmpi"</a>
<li><strong>Previous message:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20616.php">Richard Shaw: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rayson,
<br>
<p>thanks for the informations!
<br>
<p>The problem now is that I am in the same situation that guy described:  
<br>
I must think of specific code to bypass that limitation and with the 
<br>
need to write an irregularly indexed array 
<br>
(<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi2/examples/moreio/irreg_f.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi2/examples/moreio/irreg_f.htm</a>), 
<br>
howcome will I bypass that &quot;bug&quot; efficiently?
<br>
<p>Thanks again!
<br>
<p>Eric
<br>
<p>Le 2012-10-20 10:12, Rayson Ho a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like it's also related to this problem reported by Scinet back in July:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">http://www.open-mpi.org/community/lists/users/2012/07/19762.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I think I found the issue, but I still have not followed up with
</span><br>
<span class="quotelev1">&gt; the ROMIO guys yet. And I was not sure if Scinet was waiting for the
</span><br>
<span class="quotelev1">&gt; fix or not - next time I visit U of Toronto, I will see if I can visit
</span><br>
<span class="quotelev1">&gt; the Scinet office and meet with the Scinet guys!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/08/19907.php">http://www.open-mpi.org/community/lists/users/2012/08/19907.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 19, 2012 at 4:45 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to create a user-defined MPI type
</span><br>
<span class="quotelev2">&gt;&gt; (say MPI_Type_Contiguous or MPI_Type_Vector) and pass them
</span><br>
<span class="quotelev2">&gt;&gt; to the MPI function calls, instead of MPI_LONGs?
</span><br>
<span class="quotelev2">&gt;&gt; Then you could use the new type and the new number
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., an integer number smaller than &quot;size&quot;, and
</span><br>
<span class="quotelev2">&gt;&gt; smaller than the maximum integer 2,147,483,647 )
</span><br>
<span class="quotelev2">&gt;&gt; in the MPI function calls (e.g., MPI_File_write_all).
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the &quot;invalid argument&quot; error message relates to this.
</span><br>
<span class="quotelev2">&gt;&gt; If I remember right, the 'number of elements' in MPI calls
</span><br>
<span class="quotelev2">&gt;&gt; is a positive integer (int, 32 bits).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See these threads about this workaround:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/02/8100.php">http://www.open-mpi.org/community/lists/users/2009/02/8100.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/11/14816.php">http://www.open-mpi.org/community/lists/users/2010/11/14816.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, not MPI but C.
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if you need to declare &quot;size&quot; as 'long int',
</span><br>
<span class="quotelev2">&gt;&gt; or maybe 'long long int', to represent/hold correctly
</span><br>
<span class="quotelev2">&gt;&gt; the large value that you want
</span><br>
<span class="quotelev2">&gt;&gt; (360,000,000,000 &gt; 2,147,483,647).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/19/2012 02:31 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get this error when trying to write 360 000 000 000 MPI_LONG:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Openmpi-1.4.5:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR Returned by MPI_File_write_all: 35
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR_string Returned by MPI_File_write_all: MPI_ERR_IO: input/output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Openmpi-1.6.2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR Returned by MPI_File_write_all: 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR_string Returned by MPI_File_write_all: MPI_ERR_ARG: invalid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument of some other kind
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, the error in 1.6.2 seems to be less usefull to understand what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happened for the user...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second, am I wrong to try to write that much MPI_LONG? Is this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; limitation documented or to be fixed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Datatype filetype;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File fh;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long *local_array;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int nb_proc = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_size( MPI_COMM_WORLD, &amp;nb_proc );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (nb_proc != 1) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf( &quot;Test code for 1 process!\n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Abort( MPI_COMM_WORLD, 1 );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int size=90000000*4;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local_array = new long[size];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_open(MPI_COMM_WORLD, &quot;2.6Gb&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int ierr = MPI_File_write_all(fh, local_array, size, MPI_LONG, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (ierr != MPI_SUCCESS) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;ERROR Returned by MPI_File_write_all: %d\n&quot;,ierr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char* lCharPtr = new char[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int lLongueur = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Error_string(ierr,lCharPtr, &amp;lLongueur);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;ERROR_string Returned by MPI_File_write_all: %s\n&quot;,lCharPtr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Abort( MPI_COMM_WORLD, 1 );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20517.php">Mahmood Naderan: "[OMPI users] Low cpu utilization due to high IO operations of openmpi"</a>
<li><strong>Previous message:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20616.php">Richard Shaw: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
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
