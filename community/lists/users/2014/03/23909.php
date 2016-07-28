<?
$subject_val = "[OMPI users] Segmentation Fault";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 03:26:06 2014" -->
<!-- isoreceived="20140321072606" -->
<!-- sent="Fri, 21 Mar 2014 12:56:06 +0530" -->
<!-- isosent="20140321072606" -->
<!-- name="madhurima madhunapanthula" -->
<!-- email="erankimadhu_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation Fault" -->
<!-- id="CAFqWg=TFxGjPc7p_-aj27Nh7rEMd6hjHAOxUNeUvFPcZFv4kBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation Fault<br>
<strong>From:</strong> madhurima madhunapanthula (<em>erankimadhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 03:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23910.php">Hamid Saeed: "[OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23908.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23927.php">Madison Stemm: "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="23927.php">Madison Stemm: "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Iam trying to link the jumpshot libraries with the graph500 (mpi_tuned_2d
<br>
sources).
<br>
After linkin the libraries and executing mpirun with the
<br>
graph500_mpi_custome_n binaries Iam getting the following segmenation fault.
<br>
I have no clue as to where the issue is. When I dont link the jumpshot
<br>
libraries with the Graph500(mpi_tuned_2d) sources the binaries run without
<br>
segfault error
<br>
<p>[mercado-26:14493] *** Process received signal ***
<br>
[mercado-26:14493] Signal: Segmentation fault (11)
<br>
[mercado-26:14493] Signal code: Address not mapped (1)
<br>
[mercado-26:14493] Failing at address: 0x694930
<br>
[mercado-26:14493] [ 0] /lib64/libpthread.so.0() [0x30a5a0f710]
<br>
[mercado-26:14493] [ 1] ./graph500_mpi_custom_8(MPI_Testany+0xfc) [0x425d3f]
<br>
[mercado-26:14493] [ 2]
<br>
./graph500_mpi_custom_8(_Z7run_bfslPlRK12bfs_settings+0x1619) [0x41d909]
<br>
[mercado-26:14493] [ 3] ./graph500_mpi_custom_8(main+0xcd7) [0x40fef7]
<br>
[mercado-26:14493] [ 4] /lib64/libc.so.6(__libc_start_main+0xfd)
<br>
[0x30a521ed1d]
<br>
[mercado-26:14493] [ 5] ./graph500_mpi_custom_8() [0x40eca9]
<br>
[mercado-26:14493] *** End of error message ***
<br>
Please guide me in fixing this issue
<br>
<p><pre>
-- 
Lokah samasta sukhinobhavanthu
Thanks,
Madhurima
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23909/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23910.php">Hamid Saeed: "[OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23908.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23927.php">Madison Stemm: "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="23927.php">Madison Stemm: "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
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
