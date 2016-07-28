<?
$subject_val = "[OMPI users] MPI_Allgather/MPI_Allgatherv with odd-number nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 22:24:44 2011" -->
<!-- isoreceived="20110308032444" -->
<!-- sent="Tue, 8 Mar 2011 11:24:39 +0800" -->
<!-- isosent="20110308032439" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allgather/MPI_Allgatherv with odd-number nodes" -->
<!-- id="AANLkTinN46LA-xvDm4wkwPSu5eP+2o8fu5Kf5HWDq0pz_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allgather/MPI_Allgatherv with odd-number nodes<br>
<strong>From:</strong> &#195;&#207;&#207;&#220;&#190;&#252; (<em>xjun.meng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-07 22:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15808.php">arep isa: "[OMPI users] Segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="15806.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am doing some tests using MPI_Allgatherv function recently. After these
<br>
tests, I found a wield problem of if.
<br>
<p>When I wanted to use the MPI_Allgatherv function to gather a large number of
<br>
data from some processes(for example, 2GB data per process). If the number
<br>
of processes was even number, the function worked well and my network card
<br>
can receive *and *send data at the same time at his max speed; But if the
<br>
number of processes was odd number, the problem came, I found my network
<br>
card can only receive *or *send data at the same time at the max speed.
<br>
<p>*My sample enviroments*: Openmpi 1.4.3, Linux 2.6.32
<br>
<p>*My source codes*:
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *psend_buf, *precv_buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int process_cnt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int repeat_time;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int *pele_cnt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int *pdipal;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;long buf_size;      // Assume the long keyword is 64-bits width
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;buf_size = 2000;    // 2000MB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;repeat_time = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype mpi_meta;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;process_cnt);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;precv_buf = (char*)malloc(buf_size * process_cnt * 1024 * 1024);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;psend_buf = (char*)malloc(buf_size * 1024 * 1024);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memset(precv_buf, 0, buf_size * process_cnt * 1024 * 1024);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memset(psend_buf, 1, buf_size * 1024 * 1024);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// new data type: 1MB per unit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_contiguous(1024 * 1024, MPI_CHAR, &amp;mpi_meta);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;mpi_meta);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pele_cnt = (int*)malloc(sizeof(int) * process_cnt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pdipal = (int*)malloc(sizeof(int) * process_cnt);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; process_cnt; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pele_cnt[i] = buf_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pdipal[i] = i * buf_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; repeat_time; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgatherv(psend_buf, buf_size, mpi_meta, precv_buf, pele_cnt,
<br>
pdipal, mpi_meta, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rank %d, used time = %.3f\n&quot;, rank, totle_time);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;free(psend_buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(precv_buf);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;free(pele_cnt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(pdipal);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;mpi_meta);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p>I guess the problem is because of the implementation of the algorithm of
<br>
MPI_Allgather. Did anybody meet the same problem and have any suggestions
<br>
for me? Thanks
<br>
<p>Best Regards
<br>
Xianjun
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15808.php">arep isa: "[OMPI users] Segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="15806.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
