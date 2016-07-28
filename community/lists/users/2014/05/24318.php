<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 15:16:17 2014" -->
<!-- isoreceived="20140508191617" -->
<!-- sent="Thu, 8 May 2014 14:16:17 -0500" -->
<!-- isosent="20140508191617" -->
<!-- name="Spenser Gilliland" -->
<!-- email="spenser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAEBucnC1i3fiYL_W96-uR-67QtHYF8H==UC-actE9wdrwYFFDg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWD5fWhbyXo=5-CR-YxUp+8HhqLCncEwCdoEJ8Kn-X_Sg_at_mail.gmail.com" -->
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
<strong>From:</strong> Spenser Gilliland (<em>spenser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 15:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24319.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24317.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24319.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24319.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24320.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George &amp; Mattheiu,
<br>
<p><span class="quotelev1">&gt; The Alltoall should only return when all data is sent and received on
</span><br>
<span class="quotelev1">&gt; the current rank, so there shouldn't be any race condition.
</span><br>
<p>Your right this is MPI not pthreads.  That should never happen. Duh!
<br>
<p><span class="quotelev1">&gt; I think the issue is with the way you define the send and receive
</span><br>
<span class="quotelev1">&gt; buffer in the MPI_Alltoall. You have to keep in mind that the
</span><br>
<span class="quotelev1">&gt; all-to-all pattern will overwrite the entire data in the receive
</span><br>
<span class="quotelev1">&gt; buffer. Thus, starting from a relative displacement in the data (in
</span><br>
<span class="quotelev1">&gt; this case matrix[wrank*wrows]), begs for troubles, as you will write
</span><br>
<span class="quotelev1">&gt; outside the receive buffer.
</span><br>
<p>The submatrix corresponding to matrix[wrank*wrows][0] to
<br>
matrix[(wrank+1)*wrows-1][:] is valid only on the wrank process.  This
<br>
is a block distribution of the rows like what MPI_Scatter would
<br>
produce.  As wrows is equal to N (matrix width/height) divided by
<br>
wsize, the number of mpi_all_t blocks in each message is equal to
<br>
wsize.  Therefore, there should be no writing outside the bounds of
<br>
the submatrix.
<br>
<p>On another note,
<br>
I just ported the example to use dynamic memory and now I'm getting
<br>
segfaults when I call MPI_Finalize().  Any idea what in the code could
<br>
have caused this?
<br>
<p>It's paste binned here: <a href="https://gist.github.com/anonymous/a80e0679c3cbffb82e39">https://gist.github.com/anonymous/a80e0679c3cbffb82e39</a>
<br>
<p>The result is
<br>
<p>[sgillila_at_jarvis src]$ mpirun -npernode 2 transpose2 8
<br>
N = 8
<br>
Matrix =
<br>
&nbsp;0:     0     1     2     3     4     5     6     7
<br>
&nbsp;0:     8     9    10    11    12    13    14    15
<br>
&nbsp;0:    16    17    18    19    20    21    22    23
<br>
&nbsp;0:    24    25    26    27    28    29    30    31
<br>
&nbsp;1:    32    33    34    35    36    37    38    39
<br>
&nbsp;1:    40    41    42    43    44    45    46    47
<br>
&nbsp;1:    48    49    50    51    52    53    54    55
<br>
&nbsp;1:    56    57    58    59    60    61    62    63
<br>
Matrix =
<br>
&nbsp;0:     0     8    16    24    32    40    48    56
<br>
&nbsp;0:     1     9    17    25    33    41    49    57
<br>
&nbsp;0:     2    10    18    26    34    42    50    58
<br>
&nbsp;0:     3    11    19    27    35    43    51    59
<br>
&nbsp;1:     4    12    20    28    36    44    52    60
<br>
&nbsp;1:     5    13    21    29    37    45    53    61
<br>
&nbsp;1:     6    14    22    30    38    46    54    62
<br>
&nbsp;1:     7    15    23    31    39    47    55    63
<br>
[jarvis:09314] *** Process received signal ***
<br>
[jarvis:09314] Signal: Segmentation fault (11)
<br>
[jarvis:09314] Signal code: Address not mapped (1)
<br>
[jarvis:09314] Failing at address: 0x21da228
<br>
[jarvis:09314] [ 0] /lib64/libpthread.so.0() [0x371480f500]
<br>
[jarvis:09314] [ 1]
<br>
/opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x75)
<br>
[0x7f2e85452575]
<br>
[jarvis:09314] [ 2]
<br>
/opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3)
<br>
[0x7f2e85452bc3]
<br>
[jarvis:09314] [ 3] transpose2(main+0x160) [0x4012a0]
<br>
[jarvis:09314] [ 4] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3713c1ecdd]
<br>
[jarvis:09314] [ 5] transpose2() [0x400d49]
<br>
[jarvis:09314] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 9314 on node
<br>
jarvis.cs.iit.edu exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><pre>
-- 
Spenser Gilliland
Computer Engineer
Doctoral Candidate
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24319.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24317.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24319.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24319.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24320.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
