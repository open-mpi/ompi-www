<?
$subject_val = "Re: [OMPI users] Can't read values with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 13:55:27 2010" -->
<!-- isoreceived="20100113185527" -->
<!-- sent="Wed, 13 Jan 2010 11:55:22 -0700 (MST)" -->
<!-- isosent="20100113185522" -->
<!-- name="David O. Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't read values with MPI-IO" -->
<!-- id="20166.128.165.0.81.1263408922.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9eba811d1001130901u23a035b3r36cee6dabff3f1fb_at_mail.gmail.com" -->
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
<strong>From:</strong> David O. Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 13:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11751.php">Lu&#237;s Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Lu&#237;s,
<br>
<p>You opened the file with write-only mode which causes the subsequent read
<br>
to fail - although I do not know why the error checking fails to see that.
<br>
<p>If you change MPI_MODE_WRONLY to MPI_MODE_RDWR then your code works fine.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
| Hi, i have this program, that write the rank of a process  on a file.
| Every
| processes write the rank on the same file. Whe i try to read that value,
| is
| always zero.
|
|
| #include &lt;stdio.h&gt;  /*IO stuff lives here*/
| #include &lt;stdlib.h&gt; /*exit lives here*/
| #include &lt;mpi.h&gt;    /*MPI and MPI-IO live here*/
|
|
| //GLobal variables
| int rank;
|
| void mpi(int error_code){
|
|   if (error_code != MPI_SUCCESS) {
|
|     char error_string[BUFSIZ];
|     int length_of_error_string, error_class;
|
|     MPI_Error_class(error_code, &amp;error_class);
|     MPI_Error_string(error_class, error_string, &amp;length_of_error_string);
|     fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
|     MPI_Error_string(error_code, error_string, &amp;length_of_error_string);
|     fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
|   //  send_error = TRUE;
|   }
| }
|
| int main(int argc, char *argv[]){
|
|   int size;
|
|   MPI_File fh;
|
|   MPI_Init(&amp;argc, &amp;argv);
|
|   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
|   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
|
|   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
|
| /*
|   MPI_MODE_RDONLY --- read only,
|   MPI_MODE_RDWR --- reading and writing,
|   MPI_MODE_WRONLY --- write only,
|   MPI_MODE_CREATE --- create the file if it does not exist,
|   MPI_MODE_EXCL --- error if creating file that already exists,
|   MPI_MODE_DELETE_ON_CLOSE --- delete file on close,
|   MPI_MODE_UNIQUE_OPEN --- file will not be concurrently opened elsewhere,
|   MPI_MODE_SEQUENTIAL --- file will only be accessed sequentially,
|   MPI_MODE_APPEND --- set initial position of all file pointers to end of
| file.
|  */
|
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //OPEN FILE
| // abertura do ficheiro
|   //printf(&quot;[%d] - A abrir ficheiro\n&quot;, rank);
|   mpi(MPI_File_open(MPI_COMM_WORLD, &quot;buffer.io&quot;, MPI_MODE_CREATE |
| MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh));
|   MPI_Barrier(MPI_COMM_WORLD);
|
|
| //calcular quantidade de bytes a escrever no ficheiro
|   //MPI_Offset totalNumberOfIntegers
|
| //DEFINE OFFSET
| //definir o offset
|   MPI_Offset myOffset = (MPI_Offset)(rank * sizeof(int));
|   mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //CHECK OFFSET
| // verificar a posi&#231;&#227;o no ficheiro
|   MPI_Offset myCurrentOffset;
|
|   MPI_File_get_position(fh, &amp;myCurrentOffset);
|   printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //WRITE RANK IN THE FILE
| // escrita do ficheiro
|   MPI_Status mpiStatus;
|   int write=9;
|
|   mpi(MPI_File_write(fh, &amp;write, sizeof(int), MPI_BYTE, &amp;mpiStatus));
|   printf(&quot;[%d] - Escreveu no ficheiro o valor '%d'\n&quot;, rank, rank );
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //CALCULATE FILE SIZE
| //calcular quantidade de bytes a ler do ficheiro
|   int numberOfBytes;
|   MPI_Offset totalNumberOfBytes, numberOfBytesToRead;
|
|   MPI_File_get_size(fh, &amp;totalNumberOfBytes);
|   numberOfBytesToRead = totalNumberOfBytes / size;
|   numberOfBytes = (int) numberOfBytesToRead;
|   printf(&quot;[%d] - A preparar para ler %d bytes\n&quot;, rank, numberOfBytes);
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //RESET OFFSET
| //restaurar valor inicial do offset
|   myOffset = (MPI_Offset)(rank * sizeof(int));
|   mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //CHECK OFFSET
| // verificar a posi&#231;&#227;o no ficheiro
|   MPI_File_get_position(fh, &amp;myCurrentOffset);
|   printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //READ FILE
| //leitura do ficheiro
|   int readBuffer=0;
|   // MPI_Status mpiStatus;
|   MPI_File_read(fh, &amp;readBuffer, sizeof(int) , MPI_INT,
| MPI_STATUS_IGNORE);
|   MPI_Barrier(MPI_COMM_WORLD);
|   printf(&quot;[%d] - Leu do ficheiro o valor '%d'\n&quot;, rank, readBuffer );
|   MPI_Barrier(MPI_COMM_WORLD);
|
| //CLOSE FILE
| // fecho do ficheiro
|   MPI_File_close(&amp;fh);
|   MPI_File_delete(&quot;buffer.io&quot;, MPI_INFO_NULL );
|
| //end program
|   MPI_Finalize();
|
|   return(0);
|
| }
|
| --
| Cumprimentos
|
| Lu&#237;s Miranda
| _______________________________________________
| users mailing list
| users_at_[hidden]
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11751.php">Lu&#237;s Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
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
