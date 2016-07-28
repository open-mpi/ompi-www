<?
$subject_val = "[OMPI users] error mesages appeared but program runs successfully?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 04:55:52 2010" -->
<!-- isoreceived="20101203095552" -->
<!-- sent="Fri, 3 Dec 2010 17:55:47 +0800" -->
<!-- isosent="20101203095547" -->
<!-- name="Daofeng Li" -->
<!-- email="lidaof_at_[hidden]" -->
<!-- subject="[OMPI users] error mesages appeared but program runs successfully?" -->
<!-- id="AANLkTikSwaGzCa88Acrz9oPww1x8neDwNyNttYMWnzmq_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error mesages appeared but program runs successfully?<br>
<strong>From:</strong> Daofeng Li (<em>lidaof_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 04:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14986.php">Peter Kjellström: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Previous message:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>i am currently try to use the OpenMPI package
<br>
i install it at my home directory
<br>
./configure --prefix=$HOME --enable-mpi-threads
<br>
make
<br>
make install
<br>
<p>and the i add the ~/bin to the path and ~/lib to the ld_library_path to my
<br>
.bashrc file
<br>
<p>everything seems normal as i can run the example programs:
<br>
mpirun -n 8 hello_cxx
<br>
mpirun -n 8 hello_f77
<br>
mpirun -n 8 hello_c
<br>
etc...
<br>
<p>but error messages appeas:
<br>
<p>$ mpirun -n 8 hello_cxx
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[[32727,1],1]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: localhost.localdomain
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
CMA: unable to open /dev/infiniband/rdma_cm
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
Hello, world!  I am 1 of 8
<br>
Hello, world!  I am 0 of 8
<br>
Hello, world!  I am 3 of 8
<br>
Hello, world!  I am 5 of 8
<br>
Hello, world!  I am 7 of 8
<br>
Hello, world!  I am 4 of 8
<br>
Hello, world!  I am 6 of 8
<br>
Hello, world!  I am 2 of 8
<br>
[localhost.localdomain:30503] 7 more processes have sent help message
<br>
help-mpi-btl-base.txt / btl:no-nics
<br>
[localhost.localdomain:30503] Set MCA parameter &quot;orte_base_help_aggregate&quot;
<br>
to 0 to see all help / error messages
<br>
<p>i am wondering whether i install openmpi the right way
<br>
anyone would give some suggestions?
<br>
<p>thanks in advance.
<br>
<p>Best Regards.
<br>
<pre>
-- 
Daofeng Li
College of Biological Science
China Agricultural University
Beijing
China
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14985/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14986.php">Peter Kjellström: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Previous message:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Reply:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
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
