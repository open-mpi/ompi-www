<?
$subject_val = "Re: [OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 14:10:56 2009" -->
<!-- isoreceived="20090218191056" -->
<!-- sent="Wed, 18 Feb 2009 11:10:51 -0800" -->
<!-- isosent="20090218191051" -->
<!-- name="Brian Austin" -->
<!-- email="baustin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="c826e2120902181110r243184d5he6e1258cb6e6c517_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c826e2120902151427v4278e814ydc287e7c0ea58f1e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_write_ordered does not truncate files<br>
<strong>From:</strong> Brian Austin (<em>baustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 14:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8091.php">-Gim: "[OMPI users] Error during ./configure."</a>
<li><strong>In reply to:</strong> <a href="8072.php">Brian Austin: "[OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Can you confirm - are you -really- using 1.1.2???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might consider updating to something more recent, like 1.3.0 or
</span><br>
<span class="quotelev2">&gt;&gt;at least 1.2.8. It would be interesting to know if you see the same
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<p><span class="quotelev1">&gt; Also, if you could include a short program that reproduces the
</span><br>
<span class="quotelev1">&gt; problem, that would be most helpful.
</span><br>
<p>Hi,
<br>
thanks for your replies.
<br>
<p>It's true, I was using 1.1.2.
<br>
I just switched to 1.3 and I see the same behavior.
<br>
Here's a sample program.
<br>
<p>int
<br>
main( int argc, char *argv[]){
<br>
<p>&nbsp;&nbsp;char a2_buff[3] = &quot;aa&quot;;
<br>
&nbsp;&nbsp;char b1_buff[2] = &quot;b&quot;;
<br>
<p>&nbsp;&nbsp;MPI_File fh;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
<p>&nbsp;&nbsp;//write long file aa
<br>
&nbsp;&nbsp;MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_CREATE | MPI_MODE_WRONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;fh );
<br>
<p>&nbsp;&nbsp;MPI_File_write_ordered( fh, a2_buff, 2, MPI_BYTE, &amp;status );
<br>
<p>&nbsp;&nbsp;MPI_File_close( &amp;fh );
<br>
&nbsp;&nbsp;//foo.txt now says &quot;aa&quot;
<br>
<p>&nbsp;&nbsp;//write short file b
<br>
&nbsp;&nbsp;MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_CREATE | MPI_MODE_WRONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;fh );
<br>
<p>&nbsp;&nbsp;MPI_File_write_ordered( fh, b1_buff, 1, MPI_BYTE, &amp;status );
<br>
<p>&nbsp;&nbsp;MPI_File_close( &amp;fh );
<br>
&nbsp;&nbsp;//foo.txt now says &quot;ba&quot;
<br>
&nbsp;&nbsp;//but I expect it to say &quot;b&quot;
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}//main
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8091.php">-Gim: "[OMPI users] Error during ./configure."</a>
<li><strong>In reply to:</strong> <a href="8072.php">Brian Austin: "[OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
