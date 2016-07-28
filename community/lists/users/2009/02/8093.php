<?
$subject_val = "Re: [OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 15:53:24 2009" -->
<!-- isoreceived="20090218205324" -->
<!-- sent="Wed, 18 Feb 2009 14:53:13 -0600" -->
<!-- isosent="20090218205313" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="20090218205312.GL18534_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 15:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 18, 2009 at 11:10:51AM -0800, Brian Austin wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; Can you confirm - are you -really- using 1.1.2???
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You might consider updating to something more recent, like 1.3.0 or
</span><br>
<span class="quotelev3">&gt; &gt;&gt;at least 1.2.8. It would be interesting to know if you see the same
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, if you could include a short program that reproduces the
</span><br>
<span class="quotelev2">&gt; &gt; problem, that would be most helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thanks for your replies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's true, I was using 1.1.2.
</span><br>
<span class="quotelev1">&gt; I just switched to 1.3 and I see the same behavior.
</span><br>
<p>The Ordered-mode routines haven't changed in years and years, but for
<br>
a host of other reasons it's probably good you're working with 1.3
<br>
anyway.
<br>
<p><span class="quotelev1">&gt; Here's a sample program.
</span><br>
<p>thanks for sending this along. it makes the problem quite clear --
<br>
what you are seeing is exactly the behavior described by the MPI standard.
<br>
<p><span class="quotelev1">&gt;   //write long file aa
</span><br>
<span class="quotelev1">&gt;   MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev1">&gt;   	       MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev1">&gt; 	       MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_File_write_ordered( fh, a2_buff, 2, MPI_BYTE, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_File_close( &amp;fh );
</span><br>
<span class="quotelev1">&gt;   //foo.txt now says &quot;aa&quot;
</span><br>
<p>as you are seeing, this is all as it should be -- but you haven't done
<br>
anything tricky yet so of course it should all be fine.
<br>
<p><span class="quotelev1">&gt;   //write short file b
</span><br>
<span class="quotelev1">&gt;   MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev1">&gt; 	       MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev1">&gt; 	       MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_File_write_ordered( fh, b1_buff, 1, MPI_BYTE, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_File_close( &amp;fh );
</span><br>
<span class="quotelev1">&gt;   //foo.txt now says &quot;ba&quot;
</span><br>
<span class="quotelev1">&gt;   //but I expect it to say &quot;b&quot;
</span><br>
<p>now we get to a tricker thing.  
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node260.htm#Node260">http://www.mpi-forum.org/docs/mpi21-report-bw/node260.htm#Node260</a>
<br>
<p>When you open a file the &quot;default file
<br>
view&quot; is and initial location of the implicit and shared file pointers
<br>
mean MPI did exactly what you asked of it: write &quot;b&quot; to the 0th byte
<br>
in the file. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Initially, all processes view the file as a linear byte
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stream, and each process views data in its own native
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;representation (no data representation conversion is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;performed). (POSIX files are linear byte streams in the native
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;representation.) The file view can be changed via the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_FILE_SET_VIEW routine. 
<br>
<p>I think you might want MPI_MODE_APPEND, but be warned
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specifying MPI_MODE_APPEND only guarantees that all shared and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;individual file pointers are positioned at the initial end of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file when MPI_FILE_OPEN returns. Subsequent positioning of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file pointers is application dependent. In particular, the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implementation does not ensure that all writes are appended. 
<br>
<p><p>if you did not close the file between iterations, you'd get what you
<br>
expected, but the moment you re-opened the file, the shared file
<br>
pointer reset to 0.
<br>
<p>Now if I may provide a word of caution:  please think extra-hard if
<br>
you want to use shared file pointers.  They are implemented for
<br>
correctness, but not for performance.  You will likely see much better
<br>
performance if you use MPI_EXSCAN to compute every MPI process's offset
<br>
into the file (I presume each process is writing a variable number of
<br>
bytes, or you wouldn't consider ordered mode in the first place,
<br>
right?) and then do an MPI_FILE_WRITE_AT_ALL to carry out the
<br>
I/O collectively. 
<br>
<p>Follow up if that didn't make any sense to you.  I can provide
<br>
examples if need be.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
