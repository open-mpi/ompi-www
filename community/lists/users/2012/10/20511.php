<?
$subject_val = "[OMPI users] 2 GB limitation of MPI_File_write_all";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 19 14:31:53 2012" -->
<!-- isoreceived="20121019183153" -->
<!-- sent="Fri, 19 Oct 2012 14:31:48 -0400" -->
<!-- isosent="20121019183148" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] 2 GB limitation of MPI_File_write_all" -->
<!-- id="50819C94.7000509_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJ_xm3D29AkPUDSOODRO1PztLW-ehE4A94=+riOE_r5oqa6QGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] 2 GB limitation of MPI_File_write_all<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-19 14:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19153.php">seshendra seshu: "[OMPI users] Regarding mpi programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Reply:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I get this error when trying to write 360 000 000 000 MPI_LONG:
<br>
<p>with Openmpi-1.4.5:
<br>
ERROR Returned by MPI_File_write_all: 35
<br>
ERROR_string Returned by MPI_File_write_all: MPI_ERR_IO: input/output error
<br>
<p>with Openmpi-1.6.2:
<br>
ERROR Returned by MPI_File_write_all: 13
<br>
ERROR_string Returned by MPI_File_write_all: MPI_ERR_ARG: invalid 
<br>
argument of some other kind
<br>
<p>First, the error in 1.6.2 seems to be less usefull to understand what 
<br>
happened for the user...
<br>
<p>Second, am I wrong to try to write that much MPI_LONG?  Is this 
<br>
limitation documented or to be fixed?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>=====================================================
<br>
Here is the code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype filetype;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File     fh;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long        *local_array;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status   status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nb_proc = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( MPI_COMM_WORLD, &amp;nb_proc );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (nb_proc != 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Test code for 1 process!\n&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort( MPI_COMM_WORLD, 1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size=90000000*4;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_array = new long[size];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(MPI_COMM_WORLD, &quot;2.6Gb&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_CREATE | MPI_MODE_WRONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;fh);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ierr = MPI_File_write_all(fh, local_array, size, MPI_LONG, 
<br>
&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;ERROR Returned by MPI_File_write_all: %d\n&quot;,ierr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* lCharPtr = new char[MPI_MAX_ERROR_STRING];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int lLongueur = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(ierr,lCharPtr, &amp;lLongueur);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;ERROR_string Returned by MPI_File_write_all: %s\n&quot;,lCharPtr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort( MPI_COMM_WORLD, 1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>~
<br>
<p>~
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19153.php">seshendra seshu: "[OMPI users] Regarding mpi programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Reply:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
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
