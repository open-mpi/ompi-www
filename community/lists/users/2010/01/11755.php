<?
$subject_val = "Re: [OMPI users] Can't read values with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 15:07:54 2010" -->
<!-- isoreceived="20100113200754" -->
<!-- sent="Wed, 13 Jan 2010 13:07:23 -0700 (MST)" -->
<!-- isosent="20100113200723" -->
<!-- name="David O. Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't read values with MPI-IO" -->
<!-- id="41392.128.165.0.81.1263413243.squirrel_at_webmail.lanl.gov" -->
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
<strong>Date:</strong> 2010-01-13 15:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<li><strong>Previous message:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="11751.php">Lu&#237;s Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11760.php">Luís Miranda: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="11760.php">Luís Miranda: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed you never checked the return code from your MPI_File_read
<br>
statement.  If you had used your own mpi() function, it would state
<br>
something like this:
<br>
<p>MPI_FILE_READ(116): Cannot read from a file opened with amode MPI_MODE_WRONLY
<br>
<p>-david
<br>
<p><p>| Hi, i have this program, that write the rank of a process  on a file.
<br>
| Every
<br>
| processes write the rank on the same file. Whe i try to read that value,
<br>
| is
<br>
| always zero.
<br>
|
<br>
|
<br>
| #include &lt;stdio.h&gt;  /*IO stuff lives here*/
<br>
| #include &lt;stdlib.h&gt; /*exit lives here*/
<br>
| #include &lt;mpi.h&gt;    /*MPI and MPI-IO live here*/
<br>
|
<br>
|
<br>
| //GLobal variables
<br>
| int rank;
<br>
|
<br>
| void mpi(int error_code){
<br>
|
<br>
|   if (error_code != MPI_SUCCESS) {
<br>
|
<br>
|     char error_string[BUFSIZ];
<br>
|     int length_of_error_string, error_class;
<br>
|
<br>
|     MPI_Error_class(error_code, &amp;error_class);
<br>
|     MPI_Error_string(error_class, error_string, &amp;length_of_error_string);
<br>
|     fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
<br>
|     MPI_Error_string(error_code, error_string, &amp;length_of_error_string);
<br>
|     fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
<br>
|   //  send_error = TRUE;
<br>
|   }
<br>
| }
<br>
|
<br>
| int main(int argc, char *argv[]){
<br>
|
<br>
|   int size;
<br>
|
<br>
|   MPI_File fh;
<br>
|
<br>
|   MPI_Init(&amp;argc, &amp;argv);
<br>
|
<br>
|   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
|   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
|
<br>
|   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
|
<br>
| /*
<br>
|   MPI_MODE_RDONLY --- read only,
<br>
|   MPI_MODE_RDWR --- reading and writing,
<br>
|   MPI_MODE_WRONLY --- write only,
<br>
|   MPI_MODE_CREATE --- create the file if it does not exist,
<br>
|   MPI_MODE_EXCL --- error if creating file that already exists,
<br>
|   MPI_MODE_DELETE_ON_CLOSE --- delete file on close,
<br>
|   MPI_MODE_UNIQUE_OPEN --- file will not be concurrently opened elsewhere,
<br>
|   MPI_MODE_SEQUENTIAL --- file will only be accessed sequentially,
<br>
|   MPI_MODE_APPEND --- set initial position of all file pointers to end of
<br>
| file.
<br>
|  */
<br>
|
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //OPEN FILE
<br>
| // abertura do ficheiro
<br>
|   //printf(&quot;[%d] - A abrir ficheiro\n&quot;, rank);
<br>
|   mpi(MPI_File_open(MPI_COMM_WORLD, &quot;buffer.io&quot;, MPI_MODE_CREATE |
<br>
| MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh));
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
|
<br>
| //calcular quantidade de bytes a escrever no ficheiro
<br>
|   //MPI_Offset totalNumberOfIntegers
<br>
|
<br>
| //DEFINE OFFSET
<br>
| //definir o offset
<br>
|   MPI_Offset myOffset = (MPI_Offset)(rank * sizeof(int));
<br>
|   mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //CHECK OFFSET
<br>
| // verificar a posi&#231;&#227;o no ficheiro
<br>
|   MPI_Offset myCurrentOffset;
<br>
|
<br>
|   MPI_File_get_position(fh, &amp;myCurrentOffset);
<br>
|   printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //WRITE RANK IN THE FILE
<br>
| // escrita do ficheiro
<br>
|   MPI_Status mpiStatus;
<br>
|   int write=9;
<br>
|
<br>
|   mpi(MPI_File_write(fh, &amp;write, sizeof(int), MPI_BYTE, &amp;mpiStatus));
<br>
|   printf(&quot;[%d] - Escreveu no ficheiro o valor '%d'\n&quot;, rank, rank );
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //CALCULATE FILE SIZE
<br>
| //calcular quantidade de bytes a ler do ficheiro
<br>
|   int numberOfBytes;
<br>
|   MPI_Offset totalNumberOfBytes, numberOfBytesToRead;
<br>
|
<br>
|   MPI_File_get_size(fh, &amp;totalNumberOfBytes);
<br>
|   numberOfBytesToRead = totalNumberOfBytes / size;
<br>
|   numberOfBytes = (int) numberOfBytesToRead;
<br>
|   printf(&quot;[%d] - A preparar para ler %d bytes\n&quot;, rank, numberOfBytes);
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //RESET OFFSET
<br>
| //restaurar valor inicial do offset
<br>
|   myOffset = (MPI_Offset)(rank * sizeof(int));
<br>
|   mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //CHECK OFFSET
<br>
| // verificar a posi&#231;&#227;o no ficheiro
<br>
|   MPI_File_get_position(fh, &amp;myCurrentOffset);
<br>
|   printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //READ FILE
<br>
| //leitura do ficheiro
<br>
|   int readBuffer=0;
<br>
|   // MPI_Status mpiStatus;
<br>
|   MPI_File_read(fh, &amp;readBuffer, sizeof(int) , MPI_INT,
<br>
| MPI_STATUS_IGNORE);
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|   printf(&quot;[%d] - Leu do ficheiro o valor '%d'\n&quot;, rank, readBuffer );
<br>
|   MPI_Barrier(MPI_COMM_WORLD);
<br>
|
<br>
| //CLOSE FILE
<br>
| // fecho do ficheiro
<br>
|   MPI_File_close(&amp;fh);
<br>
|   MPI_File_delete(&quot;buffer.io&quot;, MPI_INFO_NULL );
<br>
|
<br>
| //end program
<br>
|   MPI_Finalize();
<br>
|
<br>
|   return(0);
<br>
|
<br>
| }
<br>
|
<br>
| --
<br>
| Cumprimentos
<br>
|
<br>
| Lu&#237;s Miranda
<br>
| _______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<li><strong>Previous message:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="11751.php">Lu&#237;s Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11760.php">Luís Miranda: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="11760.php">Luís Miranda: "Re: [OMPI users] Can't read values with MPI-IO"</a>
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
