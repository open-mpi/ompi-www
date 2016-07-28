<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 01:42:49 2006" -->
<!-- isoreceived="20061109064249" -->
<!-- sent="Thu, 9 Nov 2006 12:12:44 +0530" -->
<!-- isosent="20061109064244" -->
<!-- name="Chevchenkovic Chevchenkovic" -->
<!-- email="chevchenkovic_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Alloc_Mem Error" -->
<!-- id="1c16cdf90611082242u6be152c4t71e72b15c081d102_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Chevchenkovic Chevchenkovic (<em>chevchenkovic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 01:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2163.php">Åke Sandgren: "[OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>Previous message:</strong> <a href="2161.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
here is a sample code that I ran to allocate memory using MPI_Alloc_mem
<br>
call.
<br>
*************
<br>
&nbsp;#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int j, count = 100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *ap;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Errhandler_set( MPI_COMM_WORLD, MPI_ERRORS_RETURN );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_Alloc_mem( count, MPI_INFO_NULL, &amp;ap );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (err) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int errclass;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n Inside error!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;allocation failed&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n I m here in else part&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Access all of this memory */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Free_mem( ap );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
**********
<br>
<span class="quotelev1">&gt;mpirun -np 1 -hostfile nodelist ./memalloc
</span><br>
<span class="quotelev1">&gt;Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt;Failing at addr:0x38
</span><br>
<span class="quotelev1">&gt;[0] func:/usr/local/ofed/mpi/gcc/openmpi-1.1b1-1/lib64/libopal.so.0
</span><br>
[0x2aaaaadceb36]
<br>
<span class="quotelev1">&gt;[1] func:/lib64/libpthread.so.0 [0x33da90c380]
</span><br>
<span class="quotelev1">&gt;[2] func:/usr/local/ofed/mpi/gcc/openmpi-1.1b1-1/lib64/openmpi/mca_mpool_openib.so(mca_mpool_openib_free+0x12)
</span><br>
<p><span class="quotelev1">&gt;[0x2aaaac7d246c]
</span><br>
<span class="quotelev1">&gt;[3] func:/usr/local/ofed/mpi/gcc/openmpi-1.1b1-1/lib64/libmpi.so.0(mca_mpool_base_free+0x135)
</span><br>
[0x2aaaaab3c346]
<br>
<span class="quotelev1">&gt;[4] func:/usr/local/ofed/mpi/gcc/openmpi-1.1b1-1/lib64/libmpi.so.0(PMPI_Free_mem+0x1a)
</span><br>
[0x2aaaaab1f9ba]
<br>
<span class="quotelev1">&gt;[5] func:./memalloc(main+0x78) [0x400a30]
</span><br>
<span class="quotelev1">&gt;[6] func:/lib64/libc.so.6(__libc_start_main+0xdc) [0x33da01c4cc]
</span><br>
<span class="quotelev1">&gt;[7] func:./memalloc [0x400929]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2163.php">Åke Sandgren: "[OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>Previous message:</strong> <a href="2161.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
