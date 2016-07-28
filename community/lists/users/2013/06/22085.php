<?
$subject_val = "[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 12 19:45:00 2013" -->
<!-- isoreceived="20130612234500" -->
<!-- sent="Wed, 12 Jun 2013 18:44:51 -0500" -->
<!-- isosent="20130612234451" -->
<!-- name="Corey Allen" -->
<!-- email="corey.allen_at_[hidden]" -->
<!-- subject="[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO" -->
<!-- id="CALv0Z8XuCMMWmwVTh3M_ULg8QHC+MVhJTFb+PAUpORL6gG=ZyQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO<br>
<strong>From:</strong> Corey Allen (<em>corey.allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-12 19:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Previous message:</strong> <a href="22084.php">Brian Budge: "[OMPI users] design advice for multi-threaded load balancing application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Reply:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have done a search on this and I haven't found an explanation. I am not a
<br>
C/C++ nor MPI expert. I am getting a strange error when I use the C++ new
<br>
keyword to allocate memory and then call a file read on OpenMPI. (Tech
<br>
detail: 4-core Intel running Ubuntu 64-bit and OpenMPI 1.4.5. Everything is
<br>
local. Total processes is 5.)
<br>
<p>In the source code you can see three different approaches to allocating the
<br>
memory for the char array where the file's contents will go. With the
<br>
C-style and MPI Alloc choices, there is no error even with buffer sizes in
<br>
the MB range. However, if I use the C++ new keyword, I get an error for any
<br>
read larger than 24 bytes.
<br>
<p>As I say, I'm not a C/C++ expert, but if I'm writing C++ code I was under
<br>
the impression it was wise to use the C++ new approach rather than malloc.
<br>
Am I missing something in getting this to work with MPI?
<br>
<p>Error (the important bit):
<br>
<p>*** glibc detected *** MPIIO_Test: free(): invalid next size (fast):
<br>
0x00000000015524e0 ***
<br>
<p>Code:
<br>
<p>int main(int argc, char* argv[]){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  my_rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int errorCode;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File _filehandle;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Open File
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errorCode = MPI_File_open(MPI_COMM_WORLD, &quot;TEST1A&quot;, MPI_MODE_RDONLY,
<br>
MPI_INFO_NULL, &amp;_filehandle);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (errorCode != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int errorStringLen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *errorString = (char*) malloc(MPI_MAX_ERROR_STRING);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Get MPI file I/O error string and print it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(errorCode, errorString, &amp;errorStringLen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MPI Error opening Data File: %s \n&quot;, errorString);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(errorString);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Works with new at 24, fails at 25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int dataLength = 25, numBytesRead;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *data = NULL;
<br>
//    data = (char*) malloc(dataLength);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;data = new char(dataLength);
<br>
//    MPI_Alloc_mem(dataLength, MPI_INFO_NULL, &amp;data);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// File I/O
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errorCode = MPI_File_read_at(_filehandle, my_rank*dataLength, data,
<br>
dataLength, MPI_CHAR, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_CHAR, &amp;numBytesRead);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Rank: %d Start: %d Expected: %d Read: %d \n&quot;, my_rank,
<br>
my_rank*dataLength, dataLength, numBytesRead);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (errorCode != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int errorStringLen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *errorString = (char*) malloc(MPI_MAX_ERROR_STRING);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Get MPI file I/O error string and print it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(errorCode, errorString, &amp;errorStringLen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MPI Error reading from Data File: %s \n&quot;, errorString);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(errorString);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Free memory
<br>
//    free(data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;delete[] data;
<br>
//    MPI_Free_mem(data);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Close file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;_filehandle);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Previous message:</strong> <a href="22084.php">Brian Budge: "[OMPI users] design advice for multi-threaded load balancing application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Reply:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
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
