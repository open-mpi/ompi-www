<?
$subject_val = "Re: [OMPI users] mpi+openshmem hybrid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 04:29:47 2014" -->
<!-- isoreceived="20140814082947" -->
<!-- sent="Thu, 14 Aug 2014 11:29:44 +0300" -->
<!-- isosent="20140814082944" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi+openshmem hybrid" -->
<!-- id="CAAO1KyaBobUKD6D3xU7pLsQAw7J7pNK6sn+poHkLfKWGPOJTQA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1408003503.595553712_at_f358.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi+openshmem hybrid<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 04:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25012.php">madhurima madhunapanthula: "[OMPI users] how MPI_Get can work with multiple memory regions attached to a window via MPI_Win_attach"</a>
<li><strong>Previous message:</strong> <a href="25010.php">Timur Ismagilov: "[OMPI users] mpi+openshmem hybrid"</a>
<li><strong>In reply to:</strong> <a href="25010.php">Timur Ismagilov: "[OMPI users] mpi+openshmem hybrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can use hybrid mode.
<br>
following code works for me with ompi 1.8.2
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;shmem.h&quot;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;start_pes(0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int version = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int subversion = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_proc = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int my_proc = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int comm_size = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int comm_rank = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_version(&amp;version, &amp;subversion);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout, &quot;MPI version: %d.%d\n&quot;, version, subversion);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_proc = _num_pes();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_proc = _my_pe();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout, &quot;PE#%d of %d\n&quot;, my_proc, num_proc);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout, &quot;Comm rank#%d of %d\n&quot;, comm_rank, comm_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>On Thu, Aug 14, 2014 at 11:05 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; I use Open MPI v1.9a132520.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I use hybrid mpi+openshmem?
</span><br>
<span class="quotelev1">&gt; Where can i read about?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some problems in simple programm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;shmem.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int proc, nproc;
</span><br>
<span class="quotelev1">&gt; int rank, size, len;
</span><br>
<span class="quotelev1">&gt; char version[MPI_MAX_LIBRARY_VERSION_STRING];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; start_pes(0);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compile with oshcc, with mpicc i got a compile error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. When i run this programm with mpirun/oshrun i got an output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1408002416.687274] [node1-130-01:26354:0] proto.c:64 MXM WARN mxm is
</span><br>
<span class="quotelev1">&gt; destroyed but still has pending receive requests
</span><br>
<span class="quotelev1">&gt; [1408002416.687604] [node1-130-01:26355:0] proto.c:64 MXM WARN mxm is
</span><br>
<span class="quotelev1">&gt; destroyed but still has pending receive requests
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If in programm, i use this code
</span><br>
<span class="quotelev1">&gt; start_pes(0);
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i got an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init or MPI_Init_thread twice is erroneous.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** reported by process [2397634561,140733193388033]
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26468] [[36585,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; routed_radix.c at line 395
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] [[36585,1],1] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; routed_radix.c at line 395
</span><br>
<span class="quotelev1">&gt; [compiler-2:02175] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [compiler-2:02175] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init or MPI_Init_thread twice is erroneous.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** reported by process [2397634561,140733193388033]
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26468] [[36585,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; routed_radix.c at line 395
</span><br>
<span class="quotelev1">&gt; [node1-130-01:26469] [[36585,1],1] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; routed_radix.c at line 395
</span><br>
<span class="quotelev1">&gt; [compiler-2:02175] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [compiler-2:02175] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25010.php">http://www.open-mpi.org/community/lists/users/2014/08/25010.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25012.php">madhurima madhunapanthula: "[OMPI users] how MPI_Get can work with multiple memory regions attached to a window via MPI_Win_attach"</a>
<li><strong>Previous message:</strong> <a href="25010.php">Timur Ismagilov: "[OMPI users] mpi+openshmem hybrid"</a>
<li><strong>In reply to:</strong> <a href="25010.php">Timur Ismagilov: "[OMPI users] mpi+openshmem hybrid"</a>
<!-- nextthread="start" -->
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
