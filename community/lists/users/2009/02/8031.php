<?
$subject_val = "[OMPI users] openmpi-mca-params.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 04:27:03 2009" -->
<!-- isoreceived="20090212092703" -->
<!-- sent="Thu, 12 Feb 2009 10:25:32 +0100" -->
<!-- isosent="20090212092532" -->
<!-- name="Nicolas Moulin" -->
<!-- email="nicolas.moulin_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-mca-params.conf" -->
<!-- id="4993EB0C.9030600_at_emse.fr" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-mca-params.conf<br>
<strong>From:</strong> Nicolas Moulin (<em>nicolas.moulin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 04:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8032.php">Siegmar Gross: "[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-4.3.2"</a>
<li><strong>Previous message:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>Reply:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I use openmpi. I have installed it in the directory :
<br>
/usr/lib64/openmpi/1.2.5-gcc/
<br>
<p>If I execute a test with openMPI (for exemple helloworld!!!) I have the
<br>
next problem:
<br>
/*[nmoulin_at_clusterdell ~/mpi-test]$ mpirun -np 4 mpi-test
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,1,1]: OpenIB on host node01 was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,1]: uDAPL on host node01 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,1,2]: OpenIB on host node02 was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,2]: uDAPL on host node02 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: OpenIB on host node01 was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: uDAPL on host node01 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,1,3]: OpenIB on host node02 was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,3]: uDAPL on host node02 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Hello world! from processor 0 out of 4
<br>
Hello world! from processor 1 out of 4
<br>
Hello world! from processor 2 out of 4
<br>
Hello world! from processor 3 out of 4
<br>
[nmoulin_at_clusterdell ~/mpi-test]$ */
<br>
<p>So the job is executated but there's some errors. Now, if I execute the
<br>
same job with
<br>
the mca parameters all is OK.....hum I think.
<br>
/*[nmoulin_at_clusterdell ~/mpi-test]$ mpirun -mca btl tcp,self -np 4 mpi-test
<br>
Hello world! from processor 0 out of 4
<br>
Hello world! from processor 1 out of 4
<br>
Hello world! from processor 3 out of 4
<br>
Hello world! from processor 2 out of 4
<br>
[nmoulin_at_clusterdell ~/mpi-test]$*/
<br>
<p>I've try to get the mca parameters in the file
<br>
/usr/lib64/openmpi/1.2.5-gcc/etc/openmpi-mca-params.conf
<br>
but it seems not to take into account....
<br>
Can you help me do that?
<br>
Kind regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8032.php">Siegmar Gross: "[OMPI users] openmpi-1.2.8: segmentation fault using Cygwin-1.5 and gcc-4.3.2"</a>
<li><strong>Previous message:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>Reply:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI users] openmpi-mca-params.conf"</a>
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
