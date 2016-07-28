<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 15:19:37 2014" -->
<!-- isoreceived="20140508191937" -->
<!-- sent="Thu, 8 May 2014 15:19:33 -0400" -->
<!-- isosent="20140508191933" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="823F8286-A367-415E-9DEB-C627BF796BB5_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEBucnC1i3fiYL_W96-uR-67QtHYF8H==UC-actE9wdrwYFFDg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-08 15:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24320.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24320.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The segfault indicates that you overwrite outside of the allocated memory (and conflicts with the ptmalloc library). I&#146;m quite certain that you write outside the allocated array &#133;
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On May 8, 2014, at 15:16 , Spenser Gilliland &lt;spenser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George &amp; Mattheiu,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Alltoall should only return when all data is sent and received on
</span><br>
<span class="quotelev2">&gt;&gt; the current rank, so there shouldn't be any race condition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your right this is MPI not pthreads.  That should never happen. Duh!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the issue is with the way you define the send and receive
</span><br>
<span class="quotelev2">&gt;&gt; buffer in the MPI_Alltoall. You have to keep in mind that the
</span><br>
<span class="quotelev2">&gt;&gt; all-to-all pattern will overwrite the entire data in the receive
</span><br>
<span class="quotelev2">&gt;&gt; buffer. Thus, starting from a relative displacement in the data (in
</span><br>
<span class="quotelev2">&gt;&gt; this case matrix[wrank*wrows]), begs for troubles, as you will write
</span><br>
<span class="quotelev2">&gt;&gt; outside the receive buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The submatrix corresponding to matrix[wrank*wrows][0] to
</span><br>
<span class="quotelev1">&gt; matrix[(wrank+1)*wrows-1][:] is valid only on the wrank process.  This
</span><br>
<span class="quotelev1">&gt; is a block distribution of the rows like what MPI_Scatter would
</span><br>
<span class="quotelev1">&gt; produce.  As wrows is equal to N (matrix width/height) divided by
</span><br>
<span class="quotelev1">&gt; wsize, the number of mpi_all_t blocks in each message is equal to
</span><br>
<span class="quotelev1">&gt; wsize.  Therefore, there should be no writing outside the bounds of
</span><br>
<span class="quotelev1">&gt; the submatrix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On another note,
</span><br>
<span class="quotelev1">&gt; I just ported the example to use dynamic memory and now I'm getting
</span><br>
<span class="quotelev1">&gt; segfaults when I call MPI_Finalize().  Any idea what in the code could
</span><br>
<span class="quotelev1">&gt; have caused this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's paste binned here: <a href="https://gist.github.com/anonymous/a80e0679c3cbffb82e39">https://gist.github.com/anonymous/a80e0679c3cbffb82e39</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The result is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [sgillila_at_jarvis src]$ mpirun -npernode 2 transpose2 8
</span><br>
<span class="quotelev1">&gt; N = 8
</span><br>
<span class="quotelev1">&gt; Matrix =
</span><br>
<span class="quotelev1">&gt; 0:     0     1     2     3     4     5     6     7
</span><br>
<span class="quotelev1">&gt; 0:     8     9    10    11    12    13    14    15
</span><br>
<span class="quotelev1">&gt; 0:    16    17    18    19    20    21    22    23
</span><br>
<span class="quotelev1">&gt; 0:    24    25    26    27    28    29    30    31
</span><br>
<span class="quotelev1">&gt; 1:    32    33    34    35    36    37    38    39
</span><br>
<span class="quotelev1">&gt; 1:    40    41    42    43    44    45    46    47
</span><br>
<span class="quotelev1">&gt; 1:    48    49    50    51    52    53    54    55
</span><br>
<span class="quotelev1">&gt; 1:    56    57    58    59    60    61    62    63
</span><br>
<span class="quotelev1">&gt; Matrix =
</span><br>
<span class="quotelev1">&gt; 0:     0     8    16    24    32    40    48    56
</span><br>
<span class="quotelev1">&gt; 0:     1     9    17    25    33    41    49    57
</span><br>
<span class="quotelev1">&gt; 0:     2    10    18    26    34    42    50    58
</span><br>
<span class="quotelev1">&gt; 0:     3    11    19    27    35    43    51    59
</span><br>
<span class="quotelev1">&gt; 1:     4    12    20    28    36    44    52    60
</span><br>
<span class="quotelev1">&gt; 1:     5    13    21    29    37    45    53    61
</span><br>
<span class="quotelev1">&gt; 1:     6    14    22    30    38    46    54    62
</span><br>
<span class="quotelev1">&gt; 1:     7    15    23    31    39    47    55    63
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] Failing at address: 0x21da228
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] [ 0] /lib64/libpthread.so.0() [0x371480f500]
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] [ 1]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x75)
</span><br>
<span class="quotelev1">&gt; [0x7f2e85452575]
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3)
</span><br>
<span class="quotelev1">&gt; [0x7f2e85452bc3]
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] [ 3] transpose2(main+0x160) [0x4012a0]
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] [ 4] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3713c1ecdd]
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] [ 5] transpose2() [0x400d49]
</span><br>
<span class="quotelev1">&gt; [jarvis:09314] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 9314 on node
</span><br>
<span class="quotelev1">&gt; jarvis.cs.iit.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24320.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24320.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
