<?
$subject_val = "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 03:23:59 2012" -->
<!-- isoreceived="20121108082359" -->
<!-- sent="Thu, 08 Nov 2012 09:23:52 +0100" -->
<!-- isosent="20121108082352" -->
<!-- name="Markus Wittmann" -->
<!-- email="markus.wittmann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE" -->
<!-- id="509B6C18.2030002_at_fau.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC903BEF307_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>From:</strong> Markus Wittmann (<em>markus.wittmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 03:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20661.php">Jeff Squyres: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>OK, that makes it clear.
<br>
<p>Thank you for the fast response.
<br>
<p>Regards,
<br>
Markus
<br>
<p>Am 07.11.2012 13:49, schrieb Iliev, Hristo:
<br>
<span class="quotelev1">&gt; Hello, Markus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openib BTL component is not thread-safe. It disables itself when
</span><br>
<span class="quotelev1">&gt; the thread support level is MPI_THREAD_MULTIPLE. See this rant from
</span><br>
<span class="quotelev1">&gt; one of my colleagues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11584.php">http://www.open-mpi.org/community/lists/devel/2012/10/11584.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A message is shown but only if the library was compiled with
</span><br>
<span class="quotelev1">&gt; developer-level debugging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI guys, could the debug-level message in
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:btl_openib_component_init() be replaced by a
</span><br>
<span class="quotelev1">&gt; help text, e.g. the same way that the help text about the amount of
</span><br>
<span class="quotelev1">&gt; registerable memory not being enough is shown. Looks like the case of
</span><br>
<span class="quotelev1">&gt; openib being disabled for no apparent reason when MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; is in effect is not isolated to our users only. Or at least could you
</span><br>
<span class="quotelev1">&gt; put somewhere in the FAQ an explicit statement that openib is not
</span><br>
<span class="quotelev1">&gt; only not thread-safe, but that it would disable itself in a
</span><br>
<span class="quotelev1">&gt; multithreaded environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards, Hristo -- Hristo Iliev, Ph.D. -- High Performance
</span><br>
<span class="quotelev1">&gt; Computing RWTH Aachen University, Center for Computing and
</span><br>
<span class="quotelev1">&gt; Communication Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany) Tel: +49 241 80 24367 --
</span><br>
<span class="quotelev1">&gt; Fax/UMS: +49 241 80 624367
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message----- From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Markus Wittmann
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, November 07, 2012 1:14 PM To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Problems with btl openib and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've compiled Open MPI 1.6.3 with --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; -with-tm - with-openib --enable-opal-multi-threads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I use for example the pingpong benchmark from the Intel MPI
</span><br>
<span class="quotelev2">&gt;&gt; Benchmarks, which call MPI_Init the btl openib is used and
</span><br>
<span class="quotelev2">&gt;&gt; everything
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When instead the benchmark calls MPI_Thread_init with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE as requested threading level the btl openib
</span><br>
<span class="quotelev2">&gt;&gt; fails to load but gives no further hints for the reason:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -v -n 2 -npernode 1 -gmca btl_base_verbose 200 ./imb-
</span><br>
<span class="quotelev2">&gt;&gt; tm-openmpi- ts pingpong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ... [l0519:08267] select: initializing btl component openib
</span><br>
<span class="quotelev2">&gt;&gt; [l0519:08267]
</span><br>
<span class="quotelev1">&gt; select:
</span><br>
<span class="quotelev2">&gt;&gt; init of component openib returned failure [l0519:08267] select:
</span><br>
<span class="quotelev2">&gt;&gt; module openib unloaded ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question is now, is currently just the support for
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREADM_MULTIPLE missing in the openib module or are there
</span><br>
<span class="quotelev2">&gt;&gt; other errors occurring and if so, how to identify them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached ist the config.log from the Open MPI build, the ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; output and the output of the IMB pingpong bechmarks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As system used were two nodes with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - OpenFabrics 1.5.3 - CentOS release 5.8 (Final) - Linux Kernel
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.18-308.11.1.el5 x86_64 - OpenSM 3.3.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [l0519] src &gt; ibv_devinfo hca_id: mlx4_0 transport:
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand (0) fw_ver:                         2.7.000 node_guid:
</span><br>
<span class="quotelev2">&gt;&gt; 0030:48ff:fff6:31e4 sys_image_guid:
</span><br>
<span class="quotelev2">&gt;&gt; 0030:48ff:fff6:31e7 vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt;&gt; vendor_part_id:                 26428 hw_ver:
</span><br>
<span class="quotelev2">&gt;&gt; 0xB0 board_id:                       SM_2122000001000
</span><br>
<span class="quotelev2">&gt;&gt; phys_port_cnt:                  1 port:   1 state:
</span><br>
<span class="quotelev2">&gt;&gt; PORT_ACTIVE (4) max_mtu:                2048 (4) active_mtu:
</span><br>
<span class="quotelev2">&gt;&gt; 2048 (4) sm_lid:                 48 port_lid:               278
</span><br>
<span class="quotelev2">&gt;&gt; port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards, Markus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Markus Wittmann, HPC Services Friedrich-Alexander-Universit&#228;t
</span><br>
<span class="quotelev2">&gt;&gt; Erlangen-N&#252;rnberg Regionales Rechenzentrum Erlangen (RRZE)
</span><br>
<span class="quotelev2">&gt;&gt; Martensstrasse 1, 91058 Erlangen, Germany Tel.: +49 9131 85-20104
</span><br>
<span class="quotelev2">&gt;&gt; markus.wittmann_at_[hidden] <a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Markus Wittmann, HPC Services
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
Regionales Rechenzentrum Erlangen (RRZE)
Martensstrasse 1, 91058 Erlangen, Germany
Tel.: +49 9131 85-20104
markus.wittmann_at_[hidden]
<a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20661.php">Jeff Squyres: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
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
