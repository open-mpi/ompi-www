<?
$subject_val = "[OMPI users] Problem with using MPI in a Python extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 11:08:44 2015" -->
<!-- isoreceived="20150917150844" -->
<!-- sent="Thu, 17 Sep 2015 17:08:40 +0200" -->
<!-- isosent="20150917150840" -->
<!-- name="Joel Hermanns" -->
<!-- email="joel.hermanns_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with using MPI in a Python extension" -->
<!-- id="4DDB632A-7F61-4B12-A2CB-6D6763CACD5A_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Problem with using MPI in a Python extension<br>
<strong>From:</strong> Joel Hermanns (<em>joel.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 11:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27606.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I&#146;m currently trying to use MPI within a Python extension (written in C++). I was able to compile the extension and import it correctly, but as soon as I run the function, which contains the MPI code, I get the following error:
<br>
<p>```
<br>
[aia256:15841] mca: base: component_find: unable to open /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_posix: /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_posix.so: undefined symbol: opal_shmem_base_framework (ignored)
<br>
[aia256:15841] mca: base: component_find: unable to open /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_mmap: /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
<br>
[aia256:15841] mca: base: component_find: unable to open /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_sysv: /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
<br>
...
<br>
```
<br>
<p>(for the full message please have a look at [1])
<br>
<p><p>I put together a minimal example to reproduce this problem, which can be found at [1]. Essentially, it is an extension that consist of only one function. The function basically just runs MPI_Init and MPI_Finalize. 
<br>
<p>Maybe someone has some ideas what I could try to do.
<br>
<p>Thanks in advance!
<br>
<p><p>Best,
<br>
Joel
<br>
<p><p>[1] <a href="https://github.com/jhedev/mpi_python">https://github.com/jhedev/mpi_python</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27606.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
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
