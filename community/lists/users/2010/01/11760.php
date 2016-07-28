<?
$subject_val = "Re: [OMPI users] Can't read values with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 21:42:03 2010" -->
<!-- isoreceived="20100114024203" -->
<!-- sent="Thu, 14 Jan 2010 02:41:57 +0000" -->
<!-- isosent="20100114024157" -->
<!-- name="Lu&#237;s Miranda" -->
<!-- email="luistm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't read values with MPI-IO" -->
<!-- id="9eba811d1001131841s58945195iaaff729421fd093d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41392.128.165.0.81.1263413243.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't read values with MPI-IO<br>
<strong>From:</strong> Lu&#237;s Miranda (<em>luistm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 21:41:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11761.php">SpiduS Okami: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>In reply to:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know how i dind't see that. :)
<br>
I guess i'm still a noob in MPI.
<br>
<p>Thanks for the help
<br>
<p>On Wed, Jan 13, 2010 at 8:07 PM, David O. Gunter &lt;dog_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I noticed you never checked the return code from your MPI_File_read
</span><br>
<span class="quotelev1">&gt; statement.  If you had used your own mpi() function, it would state
</span><br>
<span class="quotelev1">&gt; something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_FILE_READ(116): Cannot read from a file opened with amode
</span><br>
<span class="quotelev1">&gt; MPI_MODE_WRONLY
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | Hi, i have this program, that write the rank of a process  on a file.
</span><br>
<span class="quotelev1">&gt; | Every
</span><br>
<span class="quotelev1">&gt; | processes write the rank on the same file. Whe i try to read that value,
</span><br>
<span class="quotelev1">&gt; | is
</span><br>
<span class="quotelev1">&gt; | always zero.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdio.h&gt;  /*IO stuff lives here*/
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdlib.h&gt; /*exit lives here*/
</span><br>
<span class="quotelev1">&gt; | #include &lt;mpi.h&gt;    /*MPI and MPI-IO live here*/
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //GLobal variables
</span><br>
<span class="quotelev1">&gt; | int rank;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | void mpi(int error_code){
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   if (error_code != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |     char error_string[BUFSIZ];
</span><br>
<span class="quotelev1">&gt; |     int length_of_error_string, error_class;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |     MPI_Error_class(error_code, &amp;error_class);
</span><br>
<span class="quotelev1">&gt; |     MPI_Error_string(error_class, error_string, &amp;length_of_error_string);
</span><br>
<span class="quotelev1">&gt; |     fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
</span><br>
<span class="quotelev1">&gt; |     MPI_Error_string(error_code, error_string, &amp;length_of_error_string);
</span><br>
<span class="quotelev1">&gt; |     fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
</span><br>
<span class="quotelev1">&gt; |   //  send_error = TRUE;
</span><br>
<span class="quotelev1">&gt; |   }
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | int main(int argc, char *argv[]){
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   int size;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   MPI_File fh;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; |   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | /*
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_RDONLY --- read only,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_RDWR --- reading and writing,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_WRONLY --- write only,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_CREATE --- create the file if it does not exist,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_EXCL --- error if creating file that already exists,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_DELETE_ON_CLOSE --- delete file on close,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_UNIQUE_OPEN --- file will not be concurrently opened
</span><br>
<span class="quotelev1">&gt; elsewhere,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_SEQUENTIAL --- file will only be accessed sequentially,
</span><br>
<span class="quotelev1">&gt; |   MPI_MODE_APPEND --- set initial position of all file pointers to end of
</span><br>
<span class="quotelev1">&gt; | file.
</span><br>
<span class="quotelev1">&gt; |  */
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //OPEN FILE
</span><br>
<span class="quotelev1">&gt; | // abertura do ficheiro
</span><br>
<span class="quotelev1">&gt; |   //printf(&quot;[%d] - A abrir ficheiro\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt; |   mpi(MPI_File_open(MPI_COMM_WORLD, &quot;buffer.io&quot;, MPI_MODE_CREATE |
</span><br>
<span class="quotelev1">&gt; | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh));
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //calcular quantidade de bytes a escrever no ficheiro
</span><br>
<span class="quotelev1">&gt; |   //MPI_Offset totalNumberOfIntegers
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //DEFINE OFFSET
</span><br>
<span class="quotelev1">&gt; | //definir o offset
</span><br>
<span class="quotelev1">&gt; |   MPI_Offset myOffset = (MPI_Offset)(rank * sizeof(int));
</span><br>
<span class="quotelev1">&gt; |   mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //CHECK OFFSET
</span><br>
<span class="quotelev1">&gt; | // verificar a posi&#231;&#227;o no ficheiro
</span><br>
<span class="quotelev1">&gt; |   MPI_Offset myCurrentOffset;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   MPI_File_get_position(fh, &amp;myCurrentOffset);
</span><br>
<span class="quotelev1">&gt; |   printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //WRITE RANK IN THE FILE
</span><br>
<span class="quotelev1">&gt; | // escrita do ficheiro
</span><br>
<span class="quotelev1">&gt; |   MPI_Status mpiStatus;
</span><br>
<span class="quotelev1">&gt; |   int write=9;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   mpi(MPI_File_write(fh, &amp;write, sizeof(int), MPI_BYTE, &amp;mpiStatus));
</span><br>
<span class="quotelev1">&gt; |   printf(&quot;[%d] - Escreveu no ficheiro o valor '%d'\n&quot;, rank, rank );
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //CALCULATE FILE SIZE
</span><br>
<span class="quotelev1">&gt; | //calcular quantidade de bytes a ler do ficheiro
</span><br>
<span class="quotelev1">&gt; |   int numberOfBytes;
</span><br>
<span class="quotelev1">&gt; |   MPI_Offset totalNumberOfBytes, numberOfBytesToRead;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   MPI_File_get_size(fh, &amp;totalNumberOfBytes);
</span><br>
<span class="quotelev1">&gt; |   numberOfBytesToRead = totalNumberOfBytes / size;
</span><br>
<span class="quotelev1">&gt; |   numberOfBytes = (int) numberOfBytesToRead;
</span><br>
<span class="quotelev1">&gt; |   printf(&quot;[%d] - A preparar para ler %d bytes\n&quot;, rank, numberOfBytes);
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //RESET OFFSET
</span><br>
<span class="quotelev1">&gt; | //restaurar valor inicial do offset
</span><br>
<span class="quotelev1">&gt; |   myOffset = (MPI_Offset)(rank * sizeof(int));
</span><br>
<span class="quotelev1">&gt; |   mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //CHECK OFFSET
</span><br>
<span class="quotelev1">&gt; | // verificar a posi&#231;&#227;o no ficheiro
</span><br>
<span class="quotelev1">&gt; |   MPI_File_get_position(fh, &amp;myCurrentOffset);
</span><br>
<span class="quotelev1">&gt; |   printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //READ FILE
</span><br>
<span class="quotelev1">&gt; | //leitura do ficheiro
</span><br>
<span class="quotelev1">&gt; |   int readBuffer=0;
</span><br>
<span class="quotelev1">&gt; |   // MPI_Status mpiStatus;
</span><br>
<span class="quotelev1">&gt; |   MPI_File_read(fh, &amp;readBuffer, sizeof(int) , MPI_INT,
</span><br>
<span class="quotelev1">&gt; | MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |   printf(&quot;[%d] - Leu do ficheiro o valor '%d'\n&quot;, rank, readBuffer );
</span><br>
<span class="quotelev1">&gt; |   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //CLOSE FILE
</span><br>
<span class="quotelev1">&gt; | // fecho do ficheiro
</span><br>
<span class="quotelev1">&gt; |   MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt; |   MPI_File_delete(&quot;buffer.io&quot;, MPI_INFO_NULL );
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | //end program
</span><br>
<span class="quotelev1">&gt; |   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   return(0);
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | --
</span><br>
<span class="quotelev1">&gt; | Cumprimentos
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Lu&#237;s Miranda
</span><br>
<span class="quotelev1">&gt; | _______________________________________________
</span><br>
<span class="quotelev1">&gt; | users mailing list
</span><br>
<span class="quotelev1">&gt; | users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
Cumprimentos
Lu&#237;s Miranda
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11761.php">SpiduS Okami: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>In reply to:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
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
