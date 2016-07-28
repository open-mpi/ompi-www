<?
$subject_val = "[OMPI users] runtime warnings with MPI_File_write_ordered";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 15:25:18 2008" -->
<!-- isoreceived="20080717192518" -->
<!-- sent="Thu, 17 Jul 2008 12:25:14 -0700" -->
<!-- isosent="20080717192514" -->
<!-- name="Brian Austin" -->
<!-- email="baustin_at_[hidden]" -->
<!-- subject="[OMPI users] runtime warnings with MPI_File_write_ordered" -->
<!-- id="137fe0320807171225m5d16162cg9fb9b333571243a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] runtime warnings with MPI_File_write_ordered<br>
<strong>From:</strong> Brian Austin (<em>baustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-17 15:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Previous message:</strong> <a href="6090.php">Brian Austin: "[OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Reply:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry about my previous message, it was sent before I'd finished composing
<br>
it.
<br>
<p>Whenever I use MPI_File_write_ordered(), all but one process send the
<br>
following message to stderr.
<br>
ADIOI_GEN_DELETE (line 22): **io No such file or directory
<br>
<p>I have read
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/01/4936.php">http://www.open-mpi.org/community/lists/users/2008/01/4936.php</a>
<br>
which suggests that this message appears because my program is trying to
<br>
delete a file that does not exist, but my program does not explicitly delete
<br>
any files. I've included a test program to demonstrate the message.
<br>
<p>Is there anything I can do to avoid or suppress this message?
<br>
The message I referred to before says that I could &quot;ignore errors from
<br>
MPI_File_delete&quot;.  How do I do that?
<br>
<p>Thanks,
<br>
Brian
<br>
<p>int
<br>
main( int argc, char *argv[]){
<br>
<p>&nbsp;&nbsp;char buff[2] = &quot;a&quot;;
<br>
&nbsp;&nbsp;MPI_File fh;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
<p>&nbsp;&nbsp;MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_CREATE | MPI_MODE_WRONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;fh );
<br>
<p>&nbsp;&nbsp;MPI_File_write_ordered( fh, buff, 1, MPI_BYTE, &amp;status );
<br>
<p>&nbsp;&nbsp;MPI_File_close( &amp;fh );
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}//main
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Previous message:</strong> <a href="6090.php">Brian Austin: "[OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Reply:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
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
