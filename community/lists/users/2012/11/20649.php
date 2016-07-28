<?
$subject_val = "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 08:55:48 2012" -->
<!-- isoreceived="20121107135548" -->
<!-- sent="Wed, 7 Nov 2012 05:55:43 -0800" -->
<!-- isosent="20121107135543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE" -->
<!-- id="CAMD57oeD=ycY4WKGi=KArFhPLZM_OjexTWjV_Z9qP+in6yoUqQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 08:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20650.php">George Bosilca: "Re: [OMPI users] Communication round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we definitely should do so - will put it on the Trac system so it gets
<br>
done.
<br>
<p>Thanks - and sorry it wasn't already there.
<br>
<p><p><p>On Wed, Nov 7, 2012 at 4:49 AM, Iliev, Hristo &lt;iliev_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello, Markus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openib BTL component is not thread-safe. It disables itself when the
</span><br>
<span class="quotelev1">&gt; thread support level is MPI_THREAD_MULTIPLE. See this rant from one of my
</span><br>
<span class="quotelev1">&gt; colleagues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11584.php">http://www.open-mpi.org/community/lists/devel/2012/10/11584.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A message is shown but only if the library was compiled with
</span><br>
<span class="quotelev1">&gt; developer-level
</span><br>
<span class="quotelev1">&gt; debugging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI guys, could the debug-level message in
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:btl_openib_component_init() be replaced by a help
</span><br>
<span class="quotelev1">&gt; text, e.g. the same way that the help text about the amount of registerable
</span><br>
<span class="quotelev1">&gt; memory not being enough is shown. Looks like the case of openib being
</span><br>
<span class="quotelev1">&gt; disabled for no apparent reason when MPI_THREAD_MULTIPLE is in effect is
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; isolated to our users only. Or at least could you put somewhere in the FAQ
</span><br>
<span class="quotelev1">&gt; an explicit statement that openib is not only not thread-safe, but that it
</span><br>
<span class="quotelev1">&gt; would disable itself in a multithreaded environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; On Behalf Of Markus Wittmann
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, November 07, 2012 1:14 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've compiled Open MPI 1.6.3 with --enable-mpi-thread-multiple -with-tm -
</span><br>
<span class="quotelev2">&gt; &gt; with-openib --enable-opal-multi-threads.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I use for example the pingpong benchmark from the Intel MPI
</span><br>
<span class="quotelev2">&gt; &gt; Benchmarks, which call MPI_Init the btl openib is used and everything
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev2">&gt; &gt; fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When instead the benchmark calls MPI_Thread_init with
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_MULTIPLE as requested threading level the btl openib fails to
</span><br>
<span class="quotelev2">&gt; &gt; load but gives no further hints for the reason:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -v -n 2 -npernode 1 -gmca btl_base_verbose 200 ./imb- tm-openmpi-
</span><br>
<span class="quotelev2">&gt; &gt; ts pingpong
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; [l0519:08267] select: initializing btl component openib [l0519:08267]
</span><br>
<span class="quotelev1">&gt; select:
</span><br>
<span class="quotelev2">&gt; &gt; init of component openib returned failure [l0519:08267] select: module
</span><br>
<span class="quotelev2">&gt; &gt; openib unloaded ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The question is now, is currently just the support for
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREADM_MULTIPLE missing in the openib module or are there other
</span><br>
<span class="quotelev2">&gt; &gt; errors occurring and if so, how to identify them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached ist the config.log from the Open MPI build, the ompi_info output
</span><br>
<span class="quotelev2">&gt; &gt; and the output of the IMB pingpong bechmarks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As system used were two nodes with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   - OpenFabrics 1.5.3
</span><br>
<span class="quotelev2">&gt; &gt;   - CentOS release 5.8 (Final)
</span><br>
<span class="quotelev2">&gt; &gt;   - Linux Kernel 2.6.18-308.11.1.el5 x86_64
</span><br>
<span class="quotelev2">&gt; &gt;   - OpenSM 3.3.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [l0519] src &gt; ibv_devinfo
</span><br>
<span class="quotelev2">&gt; &gt; hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt; &gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev2">&gt; &gt;         fw_ver:                         2.7.000
</span><br>
<span class="quotelev2">&gt; &gt;         node_guid:                      0030:48ff:fff6:31e4
</span><br>
<span class="quotelev2">&gt; &gt;         sys_image_guid:                 0030:48ff:fff6:31e7
</span><br>
<span class="quotelev2">&gt; &gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt; &gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev2">&gt; &gt;         hw_ver:                         0xB0
</span><br>
<span class="quotelev2">&gt; &gt;         board_id:                       SM_2122000001000
</span><br>
<span class="quotelev2">&gt; &gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev2">&gt; &gt;                 port:   1
</span><br>
<span class="quotelev2">&gt; &gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                         sm_lid:                 48
</span><br>
<span class="quotelev2">&gt; &gt;                         port_lid:               278
</span><br>
<span class="quotelev2">&gt; &gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the help in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Markus
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Markus Wittmann, HPC Services
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg Regionales
</span><br>
<span class="quotelev2">&gt; &gt; Rechenzentrum Erlangen (RRZE) Martensstrasse 1, 91058 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt; &gt; Tel.: +49 9131 85-20104
</span><br>
<span class="quotelev2">&gt; &gt; markus.wittmann_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20650.php">George Bosilca: "Re: [OMPI users] Communication round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
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
