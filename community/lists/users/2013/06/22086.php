<?
$subject_val = "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 12 19:50:32 2013" -->
<!-- isoreceived="20130612235032" -->
<!-- sent="Wed, 12 Jun 2013 16:50:25 -0700" -->
<!-- isosent="20130612235025" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO" -->
<!-- id="CANjXV6_uyOHsJTaJgBA=Zqt4m+k57f98r=sBnX__uVPqTjjokw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALv0Z8XuCMMWmwVTh3M_ULg8QHC+MVhJTFb+PAUpORL6gG=ZyQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-12 19:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22087.php">Corey Allen: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Previous message:</strong> <a href="22085.php">Corey Allen: "[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>In reply to:</strong> <a href="22085.php">Corey Allen: "[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22087.php">Corey Allen: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Reply:</strong> <a href="22087.php">Corey Allen: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You appear to be using new and delete[] together.  Instead you should
<br>
be using new[] and delete[] and new and delete together.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Wed, Jun 12, 2013 at 4:44 PM, Corey Allen
<br>
&lt;corey.allen_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have done a search on this and I haven't found an explanation. I am not a
</span><br>
<span class="quotelev1">&gt; C/C++ nor MPI expert. I am getting a strange error when I use the C++ new
</span><br>
<span class="quotelev1">&gt; keyword to allocate memory and then call a file read on OpenMPI. (Tech
</span><br>
<span class="quotelev1">&gt; detail: 4-core Intel running Ubuntu 64-bit and OpenMPI 1.4.5. Everything is
</span><br>
<span class="quotelev1">&gt; local. Total processes is 5.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the source code you can see three different approaches to allocating the
</span><br>
<span class="quotelev1">&gt; memory for the char array where the file's contents will go. With the
</span><br>
<span class="quotelev1">&gt; C-style and MPI Alloc choices, there is no error even with buffer sizes in
</span><br>
<span class="quotelev1">&gt; the MB range. However, if I use the C++ new keyword, I get an error for any
</span><br>
<span class="quotelev1">&gt; read larger than 24 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I say, I'm not a C/C++ expert, but if I'm writing C++ code I was under
</span><br>
<span class="quotelev1">&gt; the impression it was wise to use the C++ new approach rather than malloc.
</span><br>
<span class="quotelev1">&gt; Am I missing something in getting this to work with MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error (the important bit):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** MPIIO_Test: free(): invalid next size (fast):
</span><br>
<span class="quotelev1">&gt; 0x00000000015524e0 ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]){
</span><br>
<span class="quotelev1">&gt;     int  my_rank;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status ;
</span><br>
<span class="quotelev1">&gt;     int errorCode;
</span><br>
<span class="quotelev1">&gt;     MPI_File _filehandle;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Open File
</span><br>
<span class="quotelev1">&gt;     errorCode = MPI_File_open(MPI_COMM_WORLD, &quot;TEST1A&quot;, MPI_MODE_RDONLY,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, &amp;_filehandle);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (errorCode != 0)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         int errorStringLen;
</span><br>
<span class="quotelev1">&gt;         char *errorString = (char*) malloc(MPI_MAX_ERROR_STRING);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         // Get MPI file I/O error string and print it
</span><br>
<span class="quotelev1">&gt;         MPI_Error_string(errorCode, errorString, &amp;errorStringLen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;MPI Error opening Data File: %s \n&quot;, errorString);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         free(errorString);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Works with new at 24, fails at 25
</span><br>
<span class="quotelev1">&gt;     int dataLength = 25, numBytesRead;
</span><br>
<span class="quotelev1">&gt;     char *data = NULL;
</span><br>
<span class="quotelev1">&gt; //    data = (char*) malloc(dataLength);
</span><br>
<span class="quotelev1">&gt;     data = new char(dataLength);
</span><br>
<span class="quotelev1">&gt; //    MPI_Alloc_mem(dataLength, MPI_INFO_NULL, &amp;data);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // File I/O
</span><br>
<span class="quotelev1">&gt;     errorCode = MPI_File_read_at(_filehandle, my_rank*dataLength, data,
</span><br>
<span class="quotelev1">&gt; dataLength, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;     MPI_Get_count(&amp;status, MPI_CHAR, &amp;numBytesRead);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Rank: %d Start: %d Expected: %d Read: %d \n&quot;, my_rank,
</span><br>
<span class="quotelev1">&gt; my_rank*dataLength, dataLength, numBytesRead);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (errorCode != 0)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         int errorStringLen;
</span><br>
<span class="quotelev1">&gt;         char *errorString = (char*) malloc(MPI_MAX_ERROR_STRING);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         // Get MPI file I/O error string and print it
</span><br>
<span class="quotelev1">&gt;         MPI_Error_string(errorCode, errorString, &amp;errorStringLen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;MPI Error reading from Data File: %s \n&quot;, errorString);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         free(errorString);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Free memory
</span><br>
<span class="quotelev1">&gt; //    free(data);
</span><br>
<span class="quotelev1">&gt;     delete[] data;
</span><br>
<span class="quotelev1">&gt; //    MPI_Free_mem(data);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // Close file
</span><br>
<span class="quotelev1">&gt;     MPI_File_close(&amp;_filehandle);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22087.php">Corey Allen: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Previous message:</strong> <a href="22085.php">Corey Allen: "[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>In reply to:</strong> <a href="22085.php">Corey Allen: "[OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22087.php">Corey Allen: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>Reply:</strong> <a href="22087.php">Corey Allen: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
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
