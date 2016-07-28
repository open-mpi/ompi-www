<?
$subject_val = "Re: [OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 16:28:06 2009" -->
<!-- isoreceived="20090218212806" -->
<!-- sent="Wed, 18 Feb 2009 14:24:03 -0700" -->
<!-- isosent="20090218212403" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="F75FC916-6C4B-40EF-9C1A-E7AAC60DEFD2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090218205312.GL18534_at_mcs.anl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 16:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rob
<br>
<p>Guess I'll display my own ignorance here:
<br>
<p><span class="quotelev2">&gt;&gt;  MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;  	       MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev2">&gt;&gt; 	       MPI_INFO_NULL, &amp;fh );
</span><br>
<p><p>Since the file was opened with MPI_MODE_CREATE, shouldn't it have been  
<br>
truncated so the prior contents were removed? I think that's the root  
<br>
of the confusion here. It appears that MPI_MODE_CREATE doesn't cause  
<br>
the opened file to be truncated, but instead just leaves it &quot;as-is&quot;.
<br>
<p>Is that correct?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Feb 18, 2009, at 1:53 PM, Robert Latham wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Feb 18, 2009 at 11:10:51AM -0800, Brian Austin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you confirm - are you -really- using 1.1.2???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might consider updating to something more recent, like 1.3.0 or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at least 1.2.8. It would be interesting to know if you see the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, if you could include a short program that reproduces the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem, that would be most helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your replies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's true, I was using 1.1.2.
</span><br>
<span class="quotelev2">&gt;&gt; I just switched to 1.3 and I see the same behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Ordered-mode routines haven't changed in years and years, but for
</span><br>
<span class="quotelev1">&gt; a host of other reasons it's probably good you're working with 1.3
</span><br>
<span class="quotelev1">&gt; anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a sample program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for sending this along. it makes the problem quite clear --
</span><br>
<span class="quotelev1">&gt; what you are seeing is exactly the behavior described by the MPI  
</span><br>
<span class="quotelev1">&gt; standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  //write long file aa
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;  	       MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev2">&gt;&gt; 	       MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_write_ordered( fh, a2_buff, 2, MPI_BYTE, &amp;status );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_close( &amp;fh );
</span><br>
<span class="quotelev2">&gt;&gt;  //foo.txt now says &quot;aa&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as you are seeing, this is all as it should be -- but you haven't done
</span><br>
<span class="quotelev1">&gt; anything tricky yet so of course it should all be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  //write short file b
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; 	       MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev2">&gt;&gt; 	       MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_write_ordered( fh, b1_buff, 1, MPI_BYTE, &amp;status );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_close( &amp;fh );
</span><br>
<span class="quotelev2">&gt;&gt;  //foo.txt now says &quot;ba&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  //but I expect it to say &quot;b&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now we get to a tricker thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node260.htm#Node260">http://www.mpi-forum.org/docs/mpi21-report-bw/node260.htm#Node260</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you open a file the &quot;default file
</span><br>
<span class="quotelev1">&gt; view&quot; is and initial location of the implicit and shared file pointers
</span><br>
<span class="quotelev1">&gt; mean MPI did exactly what you asked of it: write &quot;b&quot; to the 0th byte
</span><br>
<span class="quotelev1">&gt; in the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Initially, all processes view the file as a linear byte
</span><br>
<span class="quotelev1">&gt; 	stream, and each process views data in its own native
</span><br>
<span class="quotelev1">&gt; 	representation (no data representation conversion is
</span><br>
<span class="quotelev1">&gt; 	performed). (POSIX files are linear byte streams in the native
</span><br>
<span class="quotelev1">&gt; 	representation.) The file view can be changed via the
</span><br>
<span class="quotelev1">&gt; 	MPI_FILE_SET_VIEW routine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you might want MPI_MODE_APPEND, but be warned
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Specifying MPI_MODE_APPEND only guarantees that all shared and
</span><br>
<span class="quotelev1">&gt; 	individual file pointers are positioned at the initial end of
</span><br>
<span class="quotelev1">&gt; 	file when MPI_FILE_OPEN returns. Subsequent positioning of
</span><br>
<span class="quotelev1">&gt; 	file pointers is application dependent. In particular, the
</span><br>
<span class="quotelev1">&gt; 	implementation does not ensure that all writes are appended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you did not close the file between iterations, you'd get what you
</span><br>
<span class="quotelev1">&gt; expected, but the moment you re-opened the file, the shared file
</span><br>
<span class="quotelev1">&gt; pointer reset to 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if I may provide a word of caution:  please think extra-hard if
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
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
<li><strong>Next message:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8093.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8095.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
