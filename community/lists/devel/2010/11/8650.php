<?
$subject_val = "[OMPI devel] Question about barrier()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 12:52:42 2010" -->
<!-- isoreceived="20101101165242" -->
<!-- sent="Mon, 1 Nov 2010 09:46:28 -0700" -->
<!-- isosent="20101101164628" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI devel] Question about barrier()" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E708E31990_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Question about barrier()<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Question%20about%20barrier()"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-01 12:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Reply:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Maybe reply:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>&nbsp;
<br>
<p>I have the following small program where the rank-0 process  does sleep
<br>
and then all the processes perform barrier().
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int rank, nprocs;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0) sleep(60);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello, world.  I am %d of %d\n&quot;, rank,
<br>
nprocs);fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>When I run this program on two nodes consuming 16 cores, I see that the
<br>
non rank-0 processes which are in wait mode for rank-0 process to
<br>
complete barrier() are consuming only user time. I was expecting this
<br>
behavior and there are no questions about it.
<br>
<p>&nbsp;
<br>
<p>However if I initialize MPI threads by replacing MPI_Init() with
<br>
MPI_Init_thread(), I see quite a different behavior of this program.
<br>
While rank-0 process is sleeping, all non rank-0 processes seem to be
<br>
spending time in kernel mode (thus increasing system time) instead of
<br>
waiting in user mode.
<br>
<p>&nbsp;
<br>
<p>Following is the sar output on the node where rank-0 process is running
<br>
<p>Node1&gt; sar 2 10
<br>
<p>Linux 2.6.18-128.1.10.el5-perfctr (Node1)  10/29/2010
<br>
<p>&nbsp;
<br>
<p>02:33:51 PM       CPU     %user     %nice   %system   %iowait    %steal
<br>
%idle
<br>
<p>02:33:53 PM       all      6.69      0.00     80.88      0.00      0.00
<br>
12.44
<br>
<p>02:33:55 PM       all      6.56      0.00     81.00      0.00      0.00
<br>
12.44
<br>
<p>02:33:57 PM       all      6.62      0.00     80.89      0.00      0.00
<br>
12.49
<br>
<p>02:33:59 PM       all      6.68      0.00     80.89      0.00      0.00
<br>
12.43
<br>
<p>02:34:01 PM       all      6.69      0.00     81.00      0.00      0.00
<br>
12.31
<br>
<p>02:34:03 PM       all      6.75      0.00     80.76      0.00      0.00
<br>
12.49
<br>
<p>02:34:05 PM       all      6.75      0.00     80.82      0.00      0.00
<br>
12.43
<br>
<p>02:34:07 PM       all      6.75      0.00     81.19      0.00      0.00
<br>
12.06
<br>
<p>02:34:09 PM       all      6.93      0.00     80.64      0.00      0.00
<br>
12.43
<br>
<p>02:34:11 PM       all      6.75      0.00     80.81      0.00      0.00
<br>
12.44
<br>
<p>Average:          all      6.72      0.00     80.89      0.00      0.00
<br>
12.40
<br>
<p>&nbsp;
<br>
<p>And following is the sar output on the second node:
<br>
<p>Node2&gt; sar 2 10
<br>
<p>Linux 2.6.18-128.1.10.el5-perfctr (Node2)  10/29/2010
<br>
<p>&nbsp;
<br>
<p>02:33:48 PM       CPU     %user     %nice   %system   %iowait    %steal
<br>
%idle
<br>
<p>02:33:50 PM       all      6.37      0.00     93.63      0.00      0.00
<br>
0.00
<br>
<p>02:33:52 PM       all      6.19      0.00     93.81      0.00      0.00
<br>
0.00
<br>
<p>02:33:54 PM       all      6.31      0.00     93.69      0.00      0.00
<br>
0.00
<br>
<p>02:33:56 PM       all      6.50      0.00     93.50      0.00      0.00
<br>
0.00
<br>
<p>02:33:58 PM       all      6.81      0.00     93.19      0.00      0.00
<br>
0.00
<br>
<p>02:34:00 PM       all      6.56      0.00     93.44      0.00      0.00
<br>
0.00
<br>
<p>02:34:02 PM       all      6.50      0.00     93.50      0.00      0.00
<br>
0.00
<br>
<p>02:34:04 PM       all      6.50      0.00     93.50      0.00      0.00
<br>
0.00
<br>
<p>02:34:06 PM       all      6.56      0.00     93.44      0.00      0.00
<br>
0.00
<br>
<p>02:34:08 PM       all      6.68      0.00     93.32      0.00      0.00
<br>
0.00
<br>
<p>Average:          all      6.50      0.00     93.50      0.00      0.00
<br>
0.00
<br>
<p>&nbsp;
<br>
<p>Can someone please explain the difference in behavior of barrier() call
<br>
when I use MPI_Init() vs MPI_Init_thread()?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p>Ph: 972 765 8093
<br>
<p>ananda.mudar_at_[hidden]
<br>
<p>&nbsp;
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Reply:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Maybe reply:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
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
