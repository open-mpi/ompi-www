<?
$subject_val = "[OMPI users] Can't read values with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 12:01:12 2010" -->
<!-- isoreceived="20100113170112" -->
<!-- sent="Wed, 13 Jan 2010 17:01:05 +0000" -->
<!-- isosent="20100113170105" -->
<!-- name="Lu&#237;s Miranda" -->
<!-- email="luistm_at_[hidden]" -->
<!-- subject="[OMPI users] Can't read values with MPI-IO" -->
<!-- id="9eba811d1001130901u23a035b3r36cee6dabff3f1fb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Can't read values with MPI-IO<br>
<strong>From:</strong> Lu&#237;s Miranda (<em>luistm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 12:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, i have this program, that write the rank of a process  on a file.  Every
<br>
processes write the rank on the same file. Whe i try to read that value, is
<br>
always zero.
<br>
<p><p>#include &lt;stdio.h&gt;  /*IO stuff lives here*/
<br>
#include &lt;stdlib.h&gt; /*exit lives here*/
<br>
#include &lt;mpi.h&gt;    /*MPI and MPI-IO live here*/
<br>
<p><p>//GLobal variables
<br>
int rank;
<br>
<p>void mpi(int error_code){
<br>
<p>&nbsp;&nbsp;if (error_code != MPI_SUCCESS) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char error_string[BUFSIZ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int length_of_error_string, error_class;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_class(error_code, &amp;error_class);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(error_class, error_string, &amp;length_of_error_string);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(error_code, error_string, &amp;length_of_error_string);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%3d: %s\n&quot;, rank, error_string);
<br>
&nbsp;&nbsp;//  send_error = TRUE;
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p>int main(int argc, char *argv[]){
<br>
<p>&nbsp;&nbsp;int size;
<br>
<p>&nbsp;&nbsp;MPI_File fh;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
<p>/*
<br>
&nbsp;&nbsp;MPI_MODE_RDONLY --- read only,
<br>
&nbsp;&nbsp;MPI_MODE_RDWR --- reading and writing,
<br>
&nbsp;&nbsp;MPI_MODE_WRONLY --- write only,
<br>
&nbsp;&nbsp;MPI_MODE_CREATE --- create the file if it does not exist,
<br>
&nbsp;&nbsp;MPI_MODE_EXCL --- error if creating file that already exists,
<br>
&nbsp;&nbsp;MPI_MODE_DELETE_ON_CLOSE --- delete file on close,
<br>
&nbsp;&nbsp;MPI_MODE_UNIQUE_OPEN --- file will not be concurrently opened elsewhere,
<br>
&nbsp;&nbsp;MPI_MODE_SEQUENTIAL --- file will only be accessed sequentially,
<br>
&nbsp;&nbsp;MPI_MODE_APPEND --- set initial position of all file pointers to end of
<br>
file.
<br>
&nbsp;*/
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//OPEN FILE
<br>
// abertura do ficheiro
<br>
&nbsp;&nbsp;//printf(&quot;[%d] - A abrir ficheiro\n&quot;, rank);
<br>
&nbsp;&nbsp;mpi(MPI_File_open(MPI_COMM_WORLD, &quot;buffer.io&quot;, MPI_MODE_CREATE |
<br>
MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh));
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p><p>//calcular quantidade de bytes a escrever no ficheiro
<br>
&nbsp;&nbsp;//MPI_Offset totalNumberOfIntegers
<br>
<p>//DEFINE OFFSET
<br>
//definir o offset
<br>
&nbsp;&nbsp;MPI_Offset myOffset = (MPI_Offset)(rank * sizeof(int));
<br>
&nbsp;&nbsp;mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//CHECK OFFSET
<br>
// verificar a posi&#231;&#227;o no ficheiro
<br>
&nbsp;&nbsp;MPI_Offset myCurrentOffset;
<br>
<p>&nbsp;&nbsp;MPI_File_get_position(fh, &amp;myCurrentOffset);
<br>
&nbsp;&nbsp;printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//WRITE RANK IN THE FILE
<br>
// escrita do ficheiro
<br>
&nbsp;&nbsp;MPI_Status mpiStatus;
<br>
&nbsp;&nbsp;int write=9;
<br>
<p>&nbsp;&nbsp;mpi(MPI_File_write(fh, &amp;write, sizeof(int), MPI_BYTE, &amp;mpiStatus));
<br>
&nbsp;&nbsp;printf(&quot;[%d] - Escreveu no ficheiro o valor '%d'\n&quot;, rank, rank );
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//CALCULATE FILE SIZE
<br>
//calcular quantidade de bytes a ler do ficheiro
<br>
&nbsp;&nbsp;int numberOfBytes;
<br>
&nbsp;&nbsp;MPI_Offset totalNumberOfBytes, numberOfBytesToRead;
<br>
<p>&nbsp;&nbsp;MPI_File_get_size(fh, &amp;totalNumberOfBytes);
<br>
&nbsp;&nbsp;numberOfBytesToRead = totalNumberOfBytes / size;
<br>
&nbsp;&nbsp;numberOfBytes = (int) numberOfBytesToRead;
<br>
&nbsp;&nbsp;printf(&quot;[%d] - A preparar para ler %d bytes\n&quot;, rank, numberOfBytes);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//RESET OFFSET
<br>
//restaurar valor inicial do offset
<br>
&nbsp;&nbsp;myOffset = (MPI_Offset)(rank * sizeof(int));
<br>
&nbsp;&nbsp;mpi(MPI_File_seek(fh, myOffset, MPI_SEEK_SET));
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//CHECK OFFSET
<br>
// verificar a posi&#231;&#227;o no ficheiro
<br>
&nbsp;&nbsp;MPI_File_get_position(fh, &amp;myCurrentOffset);
<br>
&nbsp;&nbsp;printf (&quot;[%d] - My current offset is %lld\n&quot;, rank, myCurrentOffset);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//READ FILE
<br>
//leitura do ficheiro
<br>
&nbsp;&nbsp;int readBuffer=0;
<br>
&nbsp;&nbsp;// MPI_Status mpiStatus;
<br>
&nbsp;&nbsp;MPI_File_read(fh, &amp;readBuffer, sizeof(int) , MPI_INT, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;printf(&quot;[%d] - Leu do ficheiro o valor '%d'\n&quot;, rank, readBuffer );
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>//CLOSE FILE
<br>
// fecho do ficheiro
<br>
&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
&nbsp;&nbsp;MPI_File_delete(&quot;buffer.io&quot;, MPI_INFO_NULL );
<br>
<p>//end program
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return(0);
<br>
<p>}
<br>
<p><pre>
-- 
Cumprimentos
Lu&#237;s Miranda
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="11754.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="11755.php">David O. Gunter: "Re: [OMPI users] Can't read values with MPI-IO"</a>
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
