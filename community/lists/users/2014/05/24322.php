<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 16:48:16 2014" -->
<!-- isoreceived="20140508204816" -->
<!-- sent="Thu, 8 May 2014 16:48:10 -0400" -->
<!-- isosent="20140508204810" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="6B15FE48-F896-4DAC-86B3-09A00A32DD4B_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEBucnAq2+OpK3Lwrv9xx0HbwyA8=Br0PoiOLUvEA5KA7HUnPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoall with Vector Datatype<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 16:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24323.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24321.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24321.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Spenser,
<br>
<p>Here is basically what is happening. On the top left, I depicted the datatype resulting from the vector type. The two arrows point to the lower bound and upper bound (thus the extent) of the datatype. On the top right, the resized datatype, where the ub is now moved 2 elements after the lb, allowing for a nice interleaving of the data. Then the next line is the unrolled datatype representation, flatten to a 1D. Again it contains in red the data touched by the defined memory layout, as well as the extent (lb and ub).
<br>
<p>Now, let&#146;s move on the MPI_Alltoall call. The array is the one without colors, and then I put the datatype starting from the position you specified in the alltoall. As you can see as soon as you don&#146;t start at the origin of the allocated memory, you end-up writing outside of your data. This happens deep inside the MPI_Alltoall call (no validation at the MPI level).
<br>
<p>Hope this helps,
<br>
&nbsp;&nbsp;George.
<br>
<p><p>

<br><p>
<p>On May 8, 2014, at 16:02 , Spenser Gilliland &lt;spenser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Matthieu &amp; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks you both for helping me. I really appreciate it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A simple test would be to run it with valgrind, so that out of bound
</span><br>
<span class="quotelev2">&gt;&gt; reads and writes will be obvious.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran it through valgrind (i left the command line I used in there so
</span><br>
<span class="quotelev1">&gt; you can verify the methods)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting errors with valgrind inside the Alltoall function.  See
</span><br>
<span class="quotelev1">&gt; <a href="https://gist.github.com/anonymous/fbd83343f456f0688cea">https://gist.github.com/anonymous/fbd83343f456f0688cea</a> .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These errors do not occur in the stack allocated version.  See
</span><br>
<span class="quotelev1">&gt; <a href="https://gist.github.com/anonymous/f4dbcddbbc9fee0f508e">https://gist.github.com/anonymous/f4dbcddbbc9fee0f508e</a> .  I assume
</span><br>
<span class="quotelev1">&gt; this is due to valgrind being unable to detect stack corruption.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The segfault indicates that you overwrite outside of the allocated memory (and conflicts with the ptmalloc
</span><br>
<span class="quotelev2">&gt;&gt; library). I&#146;m quite certain that you write outside the allocated array &#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, my understanding is that Alltoall would utilize wsize multiplied
</span><br>
<span class="quotelev1">&gt; by the size of the data type indexes of the matrix and jump extent
</span><br>
<span class="quotelev1">&gt; bytes between communications.  Thus, I'm very lost as to why the
</span><br>
<span class="quotelev1">&gt; Alltoall is exceeding the bounds of my array.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Spenser
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 8, 2014 at 2:19 PM, Matthieu Brucher
</span><br>
<span class="quotelev1">&gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A simple test would be to run it with valgrind, so that out of bound
</span><br>
<span class="quotelev2">&gt;&gt; reads and writes will be obvious.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matthieu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2014-05-08 21:16 GMT+02:00 Spenser Gilliland &lt;spenser_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George &amp; Mattheiu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The Alltoall should only return when all data is sent and received on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the current rank, so there shouldn't be any race condition.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your right this is MPI not pthreads.  That should never happen. Duh!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the issue is with the way you define the send and receive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer in the MPI_Alltoall. You have to keep in mind that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all-to-all pattern will overwrite the entire data in the receive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer. Thus, starting from a relative displacement in the data (in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this case matrix[wrank*wrows]), begs for troubles, as you will write
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; outside the receive buffer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The submatrix corresponding to matrix[wrank*wrows][0] to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix[(wrank+1)*wrows-1][:] is valid only on the wrank process.  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a block distribution of the rows like what MPI_Scatter would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; produce.  As wrows is equal to N (matrix width/height) divided by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wsize, the number of mpi_all_t blocks in each message is equal to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wsize.  Therefore, there should be no writing outside the bounds of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the submatrix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On another note,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just ported the example to use dynamic memory and now I'm getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfaults when I call MPI_Finalize().  Any idea what in the code could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's paste binned here: <a href="https://gist.github.com/anonymous/a80e0679c3cbffb82e39">https://gist.github.com/anonymous/a80e0679c3cbffb82e39</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sgillila_at_jarvis src]$ mpirun -npernode 2 transpose2 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; N = 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matrix =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:     0     1     2     3     4     5     6     7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:     8     9    10    11    12    13    14    15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:    16    17    18    19    20    21    22    23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:    24    25    26    27    28    29    30    31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:    32    33    34    35    36    37    38    39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:    40    41    42    43    44    45    46    47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:    48    49    50    51    52    53    54    55
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:    56    57    58    59    60    61    62    63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matrix =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:     0     8    16    24    32    40    48    56
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:     1     9    17    25    33    41    49    57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:     2    10    18    26    34    42    50    58
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:     3    11    19    27    35    43    51    59
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:     4    12    20    28    36    44    52    60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:     5    13    21    29    37    45    53    61
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:     6    14    22    30    38    46    54    62
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:     7    15    23    31    39    47    55    63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] Failing at address: 0x21da228
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] [ 0] /lib64/libpthread.so.0() [0x371480f500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x75)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f2e85452575]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f2e85452bc3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] [ 3] transpose2(main+0x160) [0x4012a0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] [ 4] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3713c1ecdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] [ 5] transpose2() [0x400d49]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jarvis:09314] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 9314 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jarvis.cs.iit.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spenser Gilliland
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doctoral Candidate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Spenser Gilliland
</span><br>
<span class="quotelev1">&gt; Computer Engineer
</span><br>
<span class="quotelev1">&gt; Doctoral Candidate
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24322/alltoall_with_datatype.pdf">alltoall_with_datatype.pdf</a>
</ul>
<!-- attachment="alltoall_with_datatype.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24323.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24321.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24321.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
