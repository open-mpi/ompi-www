<?
$subject_val = "Re: [OMPI users] FW: Win_flush_all";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 21:42:23 2015" -->
<!-- isoreceived="20151215024223" -->
<!-- sent="Mon, 14 Dec 2015 18:42:19 -0800" -->
<!-- isosent="20151215024219" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: Win_flush_all" -->
<!-- id="CAGKz=uJ42GDPy0+R045cSyavAE7Z+6eADd5j+Jy6B9x1VVJmjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="61BD36C35043184BB5E9C6E07E2C74AB1A5CB1E1_at_EX10MBOX02.pnnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] FW: Win_flush_all<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-14 21:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28160.php">Jingchao Zhang: "[OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28158.php">Palmer, Bruce J: "[OMPI users] FW: Win_flush_all"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bruce:
<br>
<p>The ARMCI-MPI (mpi3rma branch) test suite is a good way to determine if an
<br>
MPI-3 implementation supports passive target RMA properly. I haven't tested
<br>
against OpenMPI recently but will add it to Travis CI before the year is
<br>
over.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Monday, December 14, 2015, Palmer, Bruce J &lt;Bruce.Palmer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m trying to get some code working using request-based RMA (MPI_Rput,
</span><br>
<span class="quotelev1">&gt; MPI_Rget, MPI_Raccumulate). My understanding of the MPI 3.0 standard is
</span><br>
<span class="quotelev1">&gt; that after calling MPI_Wait on the request handle, the local buffers should
</span><br>
<span class="quotelev1">&gt; be safe to use. On calling MPI_Win_flush_all on the window used for RMA
</span><br>
<span class="quotelev1">&gt; operations, all operations should be completed on the remote processor.
</span><br>
<span class="quotelev1">&gt; Based on this, I would expect that the following program should work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int bytes = 4096;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Win win;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   void *buf;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Alloc_mem(bytes,MPI_INFO_NULL, &amp;win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Win_create(buf,bytes,1,MPI_INFO_NULL,MPI_COMM_WORLD,&amp;win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Win_flush_all(win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Win_free(&amp;win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return(0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, with openmpi-1.8.3 I&#226;&#128;&#153;m seeing a crash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node302:3689] *** An error occurred in MPI_Win_flush_all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node302:3689] *** reported by process [2431516673,0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node302:3689] *** on win rdma window 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node302:3689] *** MPI_ERR_RMA_SYNC: error executing rma sync
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node302:3689] *** MPI_ERRORS_ARE_FATAL (processes in this win will now
</span><br>
<span class="quotelev1">&gt; abort,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node302:3689] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m seeing similar failures for mvapich2-2.1 and mpich-3.2. Does anyone
</span><br>
<span class="quotelev1">&gt; know if this stuff is suppose to work? I&#226;&#128;&#153;ve had pretty good luck using the
</span><br>
<span class="quotelev1">&gt; original RMA calls (MPI_Put, MPI_Get and MPI_Accumulate) with
</span><br>
<span class="quotelev1">&gt; MPI_Lock/MPI_Unlock but the request-based calls are mostly a complete
</span><br>
<span class="quotelev1">&gt; failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bruce Palmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28160.php">Jingchao Zhang: "[OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28158.php">Palmer, Bruce J: "[OMPI users] FW: Win_flush_all"</a>
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
