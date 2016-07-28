<?
$subject_val = "[OMPI users] MCA base component file not found";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 05:43:56 2009" -->
<!-- isoreceived="20090123104356" -->
<!-- sent="Fri, 23 Jan 2009 10:43:51 +0000" -->
<!-- isosent="20090123104351" -->
<!-- name="Yongqi Sun" -->
<!-- email="sun_yongqi_at_[hidden]" -->
<!-- subject="[OMPI users] MCA base component file not found" -->
<!-- id="BAY140-W3F965A83C9EBAF388DF24FFCF0_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] MCA base component file not found<br>
<strong>From:</strong> Yongqi Sun (<em>sun_yongqi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 05:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7778.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
<li><strong>Reply:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p><p>Open MPI 1.3 is giving me the following warnigns no matter what executables I was launching, even a helloworld program:
<br>
<p>======================================
<br>
openmpi-1.3/examples$ mpiexec -np 2 hello
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_dash_host: file not found (ignored)
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_gridengine: file not found (ignored)
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_localhost: file not found (ignored)
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_hnp: file not found (ignored)
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_orted: file not found (ignored)
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_proxy: file not found (ignored)
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_iof_proxy: file not found (ignored)
<br>
[MyPC:06046] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_iof_svc: file not found (ignored)
<br>
[MyPC:06052] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_iof_proxy: file not found (ignored)
<br>
[MyPC:06052] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_iof_svc: file not found (ignored)
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
======================================
<br>
<p>How can I install these How can I suppress these warnings? I haven't found any instruction about this in FAQ.
<br>
<p>I installed Open MPI version 1.3 on my Linux multicore desktop, into the same folder with version 1.2.8. I installed by the simpliest configuration:
<br>
<p>$ configure --prefix=/usr/local
<br>
$ make all install
<br>
<p>Thanks a lot.
<br>
<p>Sun, Yongqi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7777/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7778.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
<li><strong>Reply:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
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
