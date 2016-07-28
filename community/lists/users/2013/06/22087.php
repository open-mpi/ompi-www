<?
$subject_val = "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 13 11:48:51 2013" -->
<!-- isoreceived="20130613154851" -->
<!-- sent="Thu, 13 Jun 2013 10:48:44 -0500" -->
<!-- isosent="20130613154844" -->
<!-- name="Corey Allen" -->
<!-- email="corey.allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO" -->
<!-- id="CALv0Z8U_Jb4PSsVJ55k_H8AB2wUMyDeai2jBvoHbyO5XB6e1jw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANjXV6_uyOHsJTaJgBA=Zqt4m+k57f98r=sBnX__uVPqTjjokw_at_mail.gmail.com" -->
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
<strong>From:</strong> Corey Allen (<em>corey.allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-13 11:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>In reply to:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had to spend a while searching C++ forums until I understood what you
<br>
meant. Thank you for the &quot;pointer&quot;.
<br>
<p>Just for completeness in case anyone gets this post as a Google result:
<br>
<p>char *data = new char(25);      // pointer to character initialized with 25
<br>
char *data = new char[25];      // pointer to character array of length 25
<br>
<p>As I mentioned, I'm relatively &quot;new&quot; to C++. This wasn't an MPI problem at
<br>
all.
<br>
<p><p>On Wed, Jun 12, 2013 at 6:50 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You appear to be using new and delete[] together.  Instead you should
</span><br>
<span class="quotelev1">&gt; be using new[] and delete[] and new and delete together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 12, 2013 at 4:44 PM, Corey Allen
</span><br>
<span class="quotelev1">&gt; &lt;corey.allen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have done a search on this and I haven't found an explanation. I am
</span><br>
<span class="quotelev1">&gt; not a
</span><br>
<span class="quotelev2">&gt; &gt; C/C++ nor MPI expert. I am getting a strange error when I use the C++ new
</span><br>
<span class="quotelev2">&gt; &gt; keyword to allocate memory and then call a file read on OpenMPI. (Tech
</span><br>
<span class="quotelev2">&gt; &gt; detail: 4-core Intel running Ubuntu 64-bit and OpenMPI 1.4.5. Everything
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; local. Total processes is 5.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the source code you can see three different approaches to allocating
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; memory for the char array where the file's contents will go. With the
</span><br>
<span class="quotelev2">&gt; &gt; C-style and MPI Alloc choices, there is no error even with buffer sizes
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt; &gt; the MB range. However, if I use the C++ new keyword, I get an error for
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev2">&gt; &gt; read larger than 24 bytes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I say, I'm not a C/C++ expert, but if I'm writing C++ code I was under
</span><br>
<span class="quotelev2">&gt; &gt; the impression it was wise to use the C++ new approach rather than
</span><br>
<span class="quotelev1">&gt; malloc.
</span><br>
<span class="quotelev2">&gt; &gt; Am I missing something in getting this to work with MPI?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Error (the important bit):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** glibc detected *** MPIIO_Test: free(): invalid next size (fast):
</span><br>
<span class="quotelev2">&gt; &gt; 0x00000000015524e0 ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[]){
</span><br>
<span class="quotelev2">&gt; &gt;     int  my_rank;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Status status ;
</span><br>
<span class="quotelev2">&gt; &gt;     int errorCode;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_File _filehandle;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Open File
</span><br>
<span class="quotelev2">&gt; &gt;     errorCode = MPI_File_open(MPI_COMM_WORLD, &quot;TEST1A&quot;, MPI_MODE_RDONLY,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_INFO_NULL, &amp;_filehandle);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (errorCode != 0)
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;         int errorStringLen;
</span><br>
<span class="quotelev2">&gt; &gt;         char *errorString = (char*) malloc(MPI_MAX_ERROR_STRING);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         // Get MPI file I/O error string and print it
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Error_string(errorCode, errorString, &amp;errorStringLen);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot;MPI Error opening Data File: %s \n&quot;, errorString);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         free(errorString);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Works with new at 24, fails at 25
</span><br>
<span class="quotelev2">&gt; &gt;     int dataLength = 25, numBytesRead;
</span><br>
<span class="quotelev2">&gt; &gt;     char *data = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; //    data = (char*) malloc(dataLength);
</span><br>
<span class="quotelev2">&gt; &gt;     data = new char(dataLength);
</span><br>
<span class="quotelev2">&gt; &gt; //    MPI_Alloc_mem(dataLength, MPI_INFO_NULL, &amp;data);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // File I/O
</span><br>
<span class="quotelev2">&gt; &gt;     errorCode = MPI_File_read_at(_filehandle, my_rank*dataLength, data,
</span><br>
<span class="quotelev2">&gt; &gt; dataLength, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Get_count(&amp;status, MPI_CHAR, &amp;numBytesRead);
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Rank: %d Start: %d Expected: %d Read: %d \n&quot;, my_rank,
</span><br>
<span class="quotelev2">&gt; &gt; my_rank*dataLength, dataLength, numBytesRead);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (errorCode != 0)
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;         int errorStringLen;
</span><br>
<span class="quotelev2">&gt; &gt;         char *errorString = (char*) malloc(MPI_MAX_ERROR_STRING);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         // Get MPI file I/O error string and print it
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Error_string(errorCode, errorString, &amp;errorStringLen);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot;MPI Error reading from Data File: %s \n&quot;, errorString);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         free(errorString);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Free memory
</span><br>
<span class="quotelev2">&gt; &gt; //    free(data);
</span><br>
<span class="quotelev2">&gt; &gt;     delete[] data;
</span><br>
<span class="quotelev2">&gt; &gt; //    MPI_Free_mem(data);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     // Close file
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_File_close(&amp;_filehandle);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22087/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
<li><strong>In reply to:</strong> <a href="22086.php">Brian Budge: "Re: [OMPI users] Unexpected Behavior with C++ New Memory Allocation and MPI IO"</a>
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
