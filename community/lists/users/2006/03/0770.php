<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  3 09:07:57 2006" -->
<!-- isoreceived="20060303140757" -->
<!-- sent="Fri, 3 Mar 2006 15:07:52 +0100" -->
<!-- isosent="20060303140752" -->
<!-- name="Jose Pedro Garcia Mahedero" -->
<!-- email="jpgmahedero_at_[hidden]" -->
<!-- subject="[OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards" -->
<!-- id="b0ce60610603030607y28a8fcfag24a2cb232f03141a_at_mail.gmail.com" -->
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
<strong>From:</strong> Jose Pedro Garcia Mahedero (<em>jpgmahedero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-03 09:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0771.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<li><strong>Reply:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff --
<br>
<p><p>I've tried waht you told me and made some tests:
<br>
<p>cluster master machine
<br>
eth0 mpihosts_out --&gt; for outside use (getting its own ip via dhcp)
<br>
eth1,  mpihosts_cluster --&gt;  for cluster use (serves ip's to cluster nodes)
<br>
<p>&nbsp;-------  TESTS  1,2  -openmpi-1.0.2a9 ------
<br>
<p>1.- cd openmpi-1.0.1
<br>
2.- make clean
<br>
3.- cd openmpi-1.0.2a9
<br>
4.- ./configure
<br>
5.- make all install
<br>
<p><p><p>no parameters  /usr/local/etc/openmpi-mca-params.conf
<br>
mpirun -np 2  --hostfile mpihosts_cluster ping_pong
<br>
mpirun -np 2  --hostfile mpihosts_out ping_pong
<br>
<p>GIve the same results:
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x6
<br>
*** End of error message ***
<br>
[0] func:/usr/local/lib/libopal.so.0 [0x40101cb2]
<br>
[1] func:[0xffffe440]
<br>
[2] func:/usr/local/lib/openmpi/mca_btl_tcp.so [0x404541d6]
<br>
[3] func:/usr/local/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs+0x149)
<br>
[0x404502f9]
<br>
[4] func:/usr/local/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x155)
<br>
[0x40440e95]
<br>
[5] func:/usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xa2)
<br>
[0x40429492]
<br>
[6] func:/usr/local/lib/libmpi.so.0(ompi_mpi_init+0x3c7) [0x40088127]
<br>
[7] func:/usr/local/lib/libmpi.so.0(MPI_Init+0xf1) [0x4007cac1]
<br>
[8] func:ping_pong(main+0x22) [0x804e0e6]
<br>
[9] func:/lib/tls/libc.so.6(__libc_start_main+0xf4) [0x4024d974]
<br>
[10] func:ping_pong(__gxx_personality_v0+0x3a1) [0x804e021]
<br>
<p><p>&nbsp;-------  TESTS  3 openmpi-1.0.2a9 -------
<br>
into /usr/local/etc/openmpi-mca-params.conf
<br>
btl_tcp_if_include = eth1
<br>
<p>mpirun -np 2  --hostfile mpihosts_cluster ping_pong
<br>
<p>does NOTHING, it is stalled
<br>
<p><p>&nbsp;&nbsp;-------  TESTS  4 openmpi-1.0.2a9 -------
<br>
mpirun -np 2  --hostfile mpihosts_out ping_pong
<br>
btl_tcp_if_include = eth0
<br>
<p>OK
<br>
<p><p>-------- TESTS  5 openmpi-1.0.1-------
<br>
1.- cd openmpi-1.0.2a9
<br>
2.- make clean
<br>
3.- cd openmpi-1.0.1
<br>
4.- ./configure
<br>
5.- make all install
<br>
<p>no parameters  into /usr/local/etc/openmpi-mca-params.conf
<br>
mpirun -np 2  --hostfile mpihosts_out ping_pong
<br>
IT BLOCKS
<br>
<p>-------- TESTS  6 openmpi-1.0.1-------
<br>
<p>mpirun -np 2  --hostfile mpihosts_out ping_pong
<br>
into /usr/local/etc/openmpi-mca-params.conf
<br>
btl_tcp_if_include = eth0
<br>
<p>OK
<br>
<p>-------- TESTS  7 openmpi-1.0.1-------
<br>
<p>mpirun -np 2  --hostfile mpihosts_cluster ping_pong
<br>
into /usr/local/etc/openmpi-mca-params.conf
<br>
btl_tcp_if_include = eth1
<br>
<p>OK
<br>
<p>-----------------------------------
<br>
<p>So in my opinion it still doesn't work without having to set parameters in
<br>
the config file.
<br>
<p>I hope this helps. You all are doing a great job!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0770/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0771.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
<li><strong>Reply:</strong> <a href="0782.php">Jeff Squyres: "Re: [OMPI users] Using OMPI TESTING openmpi-1.0.2a9 with 2 ethernet cards"</a>
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
