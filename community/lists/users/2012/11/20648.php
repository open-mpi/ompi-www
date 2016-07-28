<?
$subject_val = "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 07:49:11 2012" -->
<!-- isoreceived="20121107124911" -->
<!-- sent="Wed, 07 Nov 2012 12:49:05 +0000" -->
<!-- isosent="20121107124905" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903BEF307_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="509A5079.6040005_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 07:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20649.php">Ralph Castain: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20647.php">Markus Wittmann: "[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20647.php">Markus Wittmann: "[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20649.php">Ralph Castain: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20649.php">Ralph Castain: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Markus,
<br>
<p>The openib BTL component is not thread-safe. It disables itself when the
<br>
thread support level is MPI_THREAD_MULTIPLE. See this rant from one of my
<br>
colleagues:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2012/10/11584.php">http://www.open-mpi.org/community/lists/devel/2012/10/11584.php</a>
<br>
<p>A message is shown but only if the library was compiled with developer-level
<br>
debugging.
<br>
<p>Open MPI guys, could the debug-level message in
<br>
btl_openib_component.c:btl_openib_component_init() be replaced by a help
<br>
text, e.g. the same way that the help text about the amount of registerable
<br>
memory not being enough is shown. Looks like the case of openib being
<br>
disabled for no apparent reason when MPI_THREAD_MULTIPLE is in effect is not
<br>
isolated to our users only. Or at least could you put somewhere in the FAQ
<br>
an explicit statement that openib is not only not thread-safe, but that it
<br>
would disable itself in a multithreaded environment.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On Behalf Of Markus Wittmann
&gt; Sent: Wednesday, November 07, 2012 1:14 PM
&gt; To: users_at_[hidden]
&gt; Subject: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE
&gt; 
&gt; Hello,
&gt; 
&gt; I've compiled Open MPI 1.6.3 with --enable-mpi-thread-multiple -with-tm -
&gt; with-openib --enable-opal-multi-threads.
&gt; 
&gt; When I use for example the pingpong benchmark from the Intel MPI
&gt; Benchmarks, which call MPI_Init the btl openib is used and everything
works
&gt; fine.
&gt; 
&gt; When instead the benchmark calls MPI_Thread_init with
&gt; MPI_THREAD_MULTIPLE as requested threading level the btl openib fails to
&gt; load but gives no further hints for the reason:
&gt; 
&gt; mpirun -v -n 2 -npernode 1 -gmca btl_base_verbose 200 ./imb- tm-openmpi-
&gt; ts pingpong
&gt; 
&gt; ...
&gt; [l0519:08267] select: initializing btl component openib [l0519:08267]
select:
&gt; init of component openib returned failure [l0519:08267] select: module
&gt; openib unloaded ...
&gt; 
&gt; The question is now, is currently just the support for
&gt; MPI_THREADM_MULTIPLE missing in the openib module or are there other
&gt; errors occurring and if so, how to identify them.
&gt; 
&gt; Attached ist the config.log from the Open MPI build, the ompi_info output
&gt; and the output of the IMB pingpong bechmarks.
&gt; 
&gt; As system used were two nodes with:
&gt; 
&gt;   - OpenFabrics 1.5.3
&gt;   - CentOS release 5.8 (Final)
&gt;   - Linux Kernel 2.6.18-308.11.1.el5 x86_64
&gt;   - OpenSM 3.3.3
&gt; 
&gt; [l0519] src &gt; ibv_devinfo
&gt; hca_id: mlx4_0
&gt;         transport:                      InfiniBand (0)
&gt;         fw_ver:                         2.7.000
&gt;         node_guid:                      0030:48ff:fff6:31e4
&gt;         sys_image_guid:                 0030:48ff:fff6:31e7
&gt;         vendor_id:                      0x02c9
&gt;         vendor_part_id:                 26428
&gt;         hw_ver:                         0xB0
&gt;         board_id:                       SM_2122000001000
&gt;         phys_port_cnt:                  1
&gt;                 port:   1
&gt;                         state:                  PORT_ACTIVE (4)
&gt;                         max_mtu:                2048 (4)
&gt;                         active_mtu:             2048 (4)
&gt;                         sm_lid:                 48
&gt;                         port_lid:               278
&gt;                         port_lmc:               0x00
&gt; 
&gt; Thanks for the help in advance.
&gt; 
&gt; Regards,
&gt; Markus
&gt; 
&gt; 
&gt; --
&gt; Markus Wittmann, HPC Services
&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg Regionales
&gt; Rechenzentrum Erlangen (RRZE) Martensstrasse 1, 91058 Erlangen, Germany
&gt; Tel.: +49 9131 85-20104
&gt; markus.wittmann_at_[hidden]
&gt; <a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20648/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20649.php">Ralph Castain: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20647.php">Markus Wittmann: "[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20647.php">Markus Wittmann: "[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20649.php">Ralph Castain: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20649.php">Ralph Castain: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
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
