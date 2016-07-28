<?
$subject_val = "[OMPI users] FW: Win_flush_all";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 16:58:11 2015" -->
<!-- isoreceived="20151214215811" -->
<!-- sent="Mon, 14 Dec 2015 21:58:06 +0000" -->
<!-- isosent="20151214215806" -->
<!-- name="Palmer, Bruce J" -->
<!-- email="Bruce.Palmer_at_[hidden]" -->
<!-- subject="[OMPI users] FW: Win_flush_all" -->
<!-- id="61BD36C35043184BB5E9C6E07E2C74AB1A5CB1E1_at_EX10MBOX02.pnnl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="61BD36C35043184BB5E9C6E07E2C74AB1A5CA1A9_at_EX10MBOX02.pnnl.gov" -->
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
<strong>Subject:</strong> [OMPI users] FW: Win_flush_all<br>
<strong>From:</strong> Palmer, Bruce J (<em>Bruce.Palmer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-14 16:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Previous message:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Reply:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Reply:</strong> <a href="28161.php">Jeff Hammond: "Re: [OMPI users] FW: Win_flush_all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to get some code working using request-based RMA (MPI_Rput, MPI_Rget, MPI_Raccumulate). My understanding of the MPI 3.0 standard is that after calling MPI_Wait on the request handle, the local buffers should be safe to use. On calling MPI_Win_flush_all on the window used for RMA operations, all operations should be completed on the remote processor. Based on this, I would expect that the following program should work:
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int bytes = 4096;
<br>
&nbsp;&nbsp;MPI_Win win;
<br>
&nbsp;&nbsp;void *buf;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Alloc_mem(bytes,MPI_INFO_NULL, &amp;win);
<br>
&nbsp;&nbsp;MPI_Win_create(buf,bytes,1,MPI_INFO_NULL,MPI_COMM_WORLD,&amp;win);
<br>
&nbsp;&nbsp;MPI_Win_flush_all(win);
<br>
<p>&nbsp;&nbsp;MPI_Win_free(&amp;win);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return(0);
<br>
}
<br>
<p>However, with openmpi-1.8.3 I'm seeing a crash
<br>
<p>[node302:3689] *** An error occurred in MPI_Win_flush_all
<br>
[node302:3689] *** reported by process [2431516673,0]
<br>
[node302:3689] *** on win rdma window 3
<br>
[node302:3689] *** MPI_ERR_RMA_SYNC: error executing rma sync
<br>
[node302:3689] *** MPI_ERRORS_ARE_FATAL (processes in this win will now abort,
<br>
[node302:3689] ***    and potentially your MPI job)
<br>
<p>I'm seeing similar failures for mvapich2-2.1 and mpich-3.2. Does anyone know if this stuff is suppose to work? I've had pretty good luck using the original RMA calls (MPI_Put, MPI_Get and MPI_Accumulate) with MPI_Lock/MPI_Unlock but the request-based calls are mostly a complete failure.
<br>
<p>Bruce Palmer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Previous message:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Reply:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Reply:</strong> <a href="28161.php">Jeff Hammond: "Re: [OMPI users] FW: Win_flush_all"</a>
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
