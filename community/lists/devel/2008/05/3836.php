<?
$subject_val = "[OMPI devel] NO IP address found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 05:09:57 2008" -->
<!-- isoreceived="20080506090957" -->
<!-- sent="Tue, 6 May 2008 12:09:47 +0300" -->
<!-- isosent="20080506090947" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] NO IP address found" -->
<!-- id="453d39990805060209w3c820c16j408eb6931907d8f2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] NO IP address found<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 05:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Reply:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>running BW benchmark with btl_openib_max_lmc &gt;= 2 couses warning ( MPI from
<br>
the TRUNK ) !!!!
<br>
<p><p>&nbsp;#mpirun --bynode -np 40 -hostfile hostfile_ompi_arbel  -mca
<br>
btl_openib_max_lmc 2  ./mpi_p_LMC  -t bw -s 400000
<br>
BW (40) (size min max avg)  400000      321.493757      342.972837
<br>
329.493715
<br>
<p>&nbsp;#mpirun --bynode -np 40 -hostfile hostfile_ompi_arbel  -mca
<br>
btl_openib_max_lmc 3  ./mpi_p_LMC  -t bw -s 400000
<br>
[witch9][[7493,1],7][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch2][[7493,1],0][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch10][[7493,1],9][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch6][[7493,1],4][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch4][[7493,1],2][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch7][[7493,1],5][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch2][[7493,1],10][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch9][[7493,1],17][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch5][[7493,1],3][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch8][[7493,1],6][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch6][[7493,1],14][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch10][[7493,1],19][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch5][[7493,1],13][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch4][[7493,1],12][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch9][[7493,1],27][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch5][[7493,1],23][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch2][[7493,1],20][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch9][[7493,1],37][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch7][[7493,1],35][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch4][[7493,1],32][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch4][[7493,1],22][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch5][[7493,1],33][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch2][[7493,1],30][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch8][[7493,1],16][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch7][[7493,1],15][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch10][[7493,1],39][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch7][[7493,1],25][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch10][[7493,1],29][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch6][[7493,1],34][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch8][[7493,1],26][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch6][[7493,1],24][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
[witch8][[7493,1],36][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:989:create_message]
<br>
No IP address found
<br>
BW (40) (size min max avg)  400000      312.622582      334.037277
<br>
324.014814
<br>
<p>using -mca btl openib,self causes warning with LMC &gt;=10
<br>
<p><p>Best regards
<br>
Lenny.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Reply:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
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
