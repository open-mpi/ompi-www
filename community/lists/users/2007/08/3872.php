<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 09:31:37 2007" -->
<!-- isoreceived="20070816133137" -->
<!-- sent="Thu, 16 Aug 2007 09:31:26 -0400" -->
<!-- isosent="20070816133126" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="[OMPI users] Possible Memcpy bug in MPI_Comm_split" -->
<!-- id="1187271086.19138.173.camel_at_alpaca.lan" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 09:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="3871.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
I was running my OpenMPI 1.2.3 application under Valgrind and I observed
<br>
this error message:
<br>
<p>==14322== Source and destination overlap in memcpy(0x41F5BD0, 0x41F5BD8,
<br>
16)
<br>
==14322==    at 0x49070AD: memcpy (mc_replace_strmem.c:116)
<br>
==14322==    by 0x4A45CF4: ompi_ddt_copy_content_same_ddt
<br>
(in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
<br>
==14322==    by 0x7A6C386: ompi_coll_tuned_allgather_intra_bruck
<br>
(in /home/scratch/DMP/RHEL4-GCC4/lib/openmpi/mca_coll_tuned.so)
<br>
==14322==    by 0x4A29FFE: ompi_comm_split
<br>
(in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
<br>
==14322==    by 0x4A4E322: MPI_Comm_split
<br>
(in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
<br>
==14322==    by 0x400A26: main
<br>
(in /home/scratch/DMP/severian_tests/ompi/a.out)
<br>
<p>Attached is a reduced code example. I run it like:
<br>
<p>mpirun -np 3 valgrind ./a.out
<br>
<p>I only see this error if there are an odd number of processes! I don't
<br>
know if this is really a problem or not, though. My OMPI application
<br>
seems to work OK. However, the linux man page for memcpy says
<br>
overlapping range copying is undefined.
<br>
<p>Other details: x86_64 (one box, two dual-core opterons), RHEL 4.5,
<br>
OpenMPI-1.2.3 compiled with the RHEL-supplied GCC 4 (gcc4 (GCC) 4.1.1
<br>
20070105 (Red Hat 4.1.1-53)), valgrind 3.2.3. 
<br>
<p>Thanks,
<br>
Allen
<br>
<p><p><pre>
-- 
Allen Barnett
Transpire, Inc.
e-mail: allen_at_[hidden]
Ph: 518-887-2930


</pre>
<p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3872/main.c__charset_UTF-8">main.c__charset_UTF-8</a>
</ul>
<!-- attachment="main.c__charset_UTF-8" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3872/info.bz2">info.bz2</a>
</ul>
<!-- attachment="info.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="3871.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
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
