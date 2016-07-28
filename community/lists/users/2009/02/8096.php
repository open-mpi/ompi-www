<?
$subject_val = "Re: [OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 17:44:14 2009" -->
<!-- isoreceived="20090218224414" -->
<!-- sent="Wed, 18 Feb 2009 14:44:09 -0800" -->
<!-- isosent="20090218224409" -->
<!-- name="Brian Austin" -->
<!-- email="baustin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="c826e2120902181444o27d12b5bj6d9428ba17bb1c6a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c826e2120902181110r243184d5he6e1258cb6e6c517_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-18 17:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt;  MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the file was opened with MPI_MODE_CREATE, shouldn't it have been
</span><br>
<span class="quotelev1">&gt; truncated so the prior contents were removed? I think that's the root
</span><br>
<span class="quotelev1">&gt; of the confusion here. It appears that MPI_MODE_CREATE doesn't cause
</span><br>
<span class="quotelev1">&gt; the opened file to be truncated, but instead just leaves it &quot;as-is&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<p>I don't know whether this is the correct behavior, but it is the
<br>
correct origin of my confusion.
<br>
I suspected this would be attributed to the standard, but it is
<br>
contrary to what I'm used to with C's fopen:
<br>
I expected MPI_File_open( CREATE | WRONLY ) to act like fopen(&quot;w&quot;).
<br>
<p><span class="quotelev1">&gt; Now if I may provide a word of caution:  please think extra-hard if
</span><br>
<span class="quotelev1">&gt; you want to use shared file pointers.  They are implemented for
</span><br>
<span class="quotelev1">&gt; correctness, but not for performance.  You will likely see much better
</span><br>
<span class="quotelev1">&gt; performance if you use MPI_EXSCAN to compute every MPI process's
</span><br>
<span class="quotelev1">&gt; offset
</span><br>
<span class="quotelev1">&gt; into the file (I presume each process is writing a variable number of
</span><br>
<span class="quotelev1">&gt; bytes, or you wouldn't consider ordered mode in the first place,
</span><br>
<span class="quotelev1">&gt; right?) and then do an MPI_FILE_WRITE_AT_ALL to carry out the
</span><br>
<span class="quotelev1">&gt; I/O collectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Follow up if that didn't make any sense to you.  I can provide
</span><br>
<span class="quotelev1">&gt; examples if need be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<p>Thanks, Rob, for the tip. I don't have enough experience to know which
<br>
functions are fastest. The shared pointer just looked like the easiest
<br>
thing for me to code. This should be pretty easy for me to change.
<br>
<p>-Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
