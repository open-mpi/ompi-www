<?
$subject_val = "[OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 17 18:59:36 2011" -->
<!-- isoreceived="20110917225936" -->
<!-- sent="Sat, 17 Sep 2011 18:59:31 -0400" -->
<!-- isosent="20110917225931" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006D3_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-17 18:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17322.php">Evghenii Gaburov: "[OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="17320.php">Jeff Squyres: "Re: [OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Open-MPI 1.4.3 on Mellanox Infiniband hardware gives a latency of 250 microseconds with 256 MPI ranks on super-computer A (name is colosse).
<br>
<p>The same software gives a latency of 10 microseconds with MVAPICH2 and QLogic Infiniband hardware with 512 MPI ranks on super-computer B (name is guillimin).
<br>
<p><p>Here are the relevant information listed in <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>1. Check the FAQ first.
<br>
<p>done !
<br>
<p><p>2. The version of Open MPI that you're using.
<br>
<p>Open-MPI 1.4.3
<br>
<p><p>3. The config.log file from the top-level Open MPI directory, if available (please compress!).
<br>
<p>See below.
<br>
<p>Command file: <a href="http://pastebin.com/mW32ntSJ">http://pastebin.com/mW32ntSJ</a>
<br>
<p><p>4. The output of the &quot;ompi_info --all&quot; command from the node where you're invoking mpirun. 
<br>
<p>ompi_info -a on colosse: <a href="http://pastebin.com/RPyY9s24">http://pastebin.com/RPyY9s24</a>
<br>
<p><p>5. If running on more than one node -- especially if you're having problems launching Open MPI processes -- also include the output of the &quot;ompi_info -v ompi full --parsable&quot; command from each node on which you're trying to run. 
<br>
<p>I am not having problems launching Open-MPI processes.
<br>
<p><p>6. A detailed description of what is failing.
<br>
<p>Open-MPI 1.4.3 on Mellanox Infiniband hardware give a latency of 250 microseconds with 256 MPI ranks on super-computer A (name is colosse).
<br>
<p>The same software gives a latency of 10 microseconds with MVAPICH2 and QLogic Infiniband hardware on 512 MPI ranks on super-computer B (name is guillimin).
<br>
<p>Details follow.
<br>
<p><p>I am developing a distributed genome assembler that runs with the message-passing interface (I am a PhD student). 
<br>
It is called Ray. Link: <a href="http://github.com/sebhtml/ray">http://github.com/sebhtml/ray</a>
<br>
<p>I recently added the option -test-network-only so that Ray can be used to test the latency. Each MPI rank has to send 100000 messages (4000 bytes each), one by one.
<br>
The destination of any message is picked up at random.
<br>
<p><p>On colosse, a super-computer located at Laval University, I get an average latency of 250 microseconds with the test done in Ray.
<br>
<p>See <a href="http://pastebin.com/9nyjSy5z">http://pastebin.com/9nyjSy5z</a>
<br>
<p>On colosse, the hardware is Mellanox Infiniband QDR ConnectX and the MPI middleware is Open-MPI 1.4.3 compiled with gcc 4.4.2.
<br>
<p>colosse has 8 compute cores per node (Intel Nehalem).
<br>
<p><p>Testing the latency with ibv_rc_pingpong on colosse gives 11 microseconds. 
<br>
<p>&nbsp;&nbsp;local address:  LID 0x048e, QPN 0x1c005c, PSN 0xf7c66b
<br>
&nbsp;&nbsp;remote address: LID 0x018c, QPN 0x2c005c, PSN 0x5428e6
<br>
8192000 bytes in 0.01 seconds = 5776.64 Mbit/sec
<br>
1000 iters in 0.01 seconds = 11.35 usec/iter
<br>
<p>So I know that the Infiniband has a correct latency between two HCAs because of the output of ibv_rc_pingpong.
<br>
<p><p><p>Adding the parameter --mca btl_openib_verbose 1 to mpirun shows that Open-MPI detects the hardware correctly:
<br>
<p>[r107-n57][[59764,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x02c9, part ID 26428
<br>
[r107-n57][[59764,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Mellanox Hermon
<br>
<p>see <a href="http://pastebin.com/pz03f0B3">http://pastebin.com/pz03f0B3</a>
<br>
<p><p>So I don't think this is the problem described in the FAQ ( <a href="http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx-poor-latency">http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx-poor-latency</a> )
<br>
and on the mailing list ( <a href="http://www.open-mpi.org/community/lists/users/2007/10/4238.php">http://www.open-mpi.org/community/lists/users/2007/10/4238.php</a> ) because the INI values are found.
<br>
<p><p><p><p>Running the network test implemented in Ray on 32 MPI ranks, I get an average latency of 65 microseconds. 
<br>
<p>See <a href="http://pastebin.com/nWDmGhvM">http://pastebin.com/nWDmGhvM</a>
<br>
<p><p>Thus, with 256 MPI ranks I get an average latency of 250 microseconds and with 32 MPI ranks I get 65 microseconds.
<br>
<p><p>Running the network test on 32 MPI ranks again but only allowing the MPI rank 0 to send messages gives a latency of 10 microseconds for this rank.
<br>
See <a href="http://pastebin.com/dWMXsHpa">http://pastebin.com/dWMXsHpa</a>
<br>
<p><p><p>Because I get 10 microseconds in the network test in Ray when only the MPI rank sends messages, I would say that there may be some I/O contention.
<br>
<p>To test this hypothesis, I re-ran the test, but allowed only 1 MPI rank per node to send messages (there are 8 MPI ranks per node and a total of 32 MPI ranks).
<br>
Ranks 0, 8, 16 and 24 all reported 13 microseconds. See <a href="http://pastebin.com/h84Fif3g">http://pastebin.com/h84Fif3g</a>
<br>
<p>The next test was to allow 2 MPI ranks on each node to send messages. Ranks 0, 1, 8, 9, 16, 17, 24, and 25 reported 15 microseconds. 
<br>
See <a href="http://pastebin.com/REdhJXkS">http://pastebin.com/REdhJXkS</a>
<br>
<p>With 3 MPI ranks per node that can send messages, ranks 0, 1, 2, 8, 9, 10, 16, 17, 18, 24, 25, 26 reported 20 microseconds. See <a href="http://pastebin.com/TCd6xpuC">http://pastebin.com/TCd6xpuC</a>
<br>
<p>Finally, with 4 MPI ranks per node that can send messages, I got 23 microseconds. See <a href="http://pastebin.com/V8zjae7s">http://pastebin.com/V8zjae7s</a>
<br>
<p><p>So the MPI ranks on a given node seem to fight for access to the HCA port.
<br>
<p>Each colosse node has 1 port (ibv_devinfo) and the max_mtu is 2048 bytes. See <a href="http://pastebin.com/VXMAZdeZ">http://pastebin.com/VXMAZdeZ</a>
<br>
<p><p><p><p><p><p>At this point, some may think that there may be a bug in the network test itself. So I tested the same code on another super-computer.
<br>
<p>On guillimin, a super-computer located at McGill University, I get an average latency (with Ray -test-network-only) of 10 microseconds when running Ray on 512 MPI ranks.
<br>
<p>See <a href="http://pastebin.com/nCKF8Xg6">http://pastebin.com/nCKF8Xg6</a>
<br>
<p>On guillimin, the hardware is Qlogic Infiniband QDR and the MPI middleware is MVAPICH2 1.6.
<br>
<p>Thus, I know that the network test in Ray works as expected because results on guillimin show a latency of 10 microseconds for 512 MPI ranks.
<br>
<p>guillimin also has 8 compute cores per node (Intel Nehalem).
<br>
<p>On guillimin, each node has one port (ibv_devinfo) and the max_mtu of HCAs is 4096 bytes. See <a href="http://pastebin.com/35T8N5t8">http://pastebin.com/35T8N5t8</a>
<br>
<p><p><p><p><p><p><p><p>In Ray, only the following MPI functions are utilised:
<br>
<p>- MPI_Init
<br>
- MPI_Comm_rank
<br>
- MPI_Comm_size
<br>
- MPI_Finalize
<br>
<p>- MPI_Isend
<br>
<p>- MPI_Request_free
<br>
- MPI_Test
<br>
- MPI_Get_count
<br>
- MPI_Start
<br>
- MPI_Recv_init
<br>
- MPI_Cancel
<br>
<p>- MPI_Get_processor_name
<br>
<p><p><p><p>7. Please include information about your network: 
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>
<br>
<p>Type: Infiniband
<br>
<p>&nbsp;&nbsp;7.1. Which OpenFabrics version are you running?
<br>
<p><p>ofed-scripts-1.4.2-0_sunhpc1
<br>
<p>libibverbs-1.1.3-2.el5
<br>
libibverbs-utils-1.1.3-2.el5
<br>
libibverbs-devel-1.1.3-2.el5
<br>
<p><p>&nbsp;&nbsp;7.2. What distro and version of Linux are you running? What is your kernel version?
<br>
<p><p>CentOS release 5.6 (Final)
<br>
<p>Linux colosse1 2.6.18-238.19.1.el5 #1 SMP Fri Jul 15 07:31:24 EDT 2011 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p>&nbsp;&nbsp;7.3. Which subnet manager are you running? (e.g., OpenSM, a vendor-specific subnet manager, etc.)
<br>
<p>opensm-libs-3.3.3-1.el5_6.1
<br>
<p>&nbsp;&nbsp;7.4. What is the output of the ibv_devinfo command
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.7.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      5080:0200:008d:8f88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 5080:0200:008d:8f8b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       X6275_QDR_IB_2.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  active (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1222
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               659
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p><p><p>&nbsp;&nbsp;7.5. What is the output of the ifconfig command
<br>
<p>&nbsp;&nbsp;Not using IPoIB.
<br>
<p>&nbsp;&nbsp;7.6. If running under Bourne shells, what is the output of the &quot;ulimit -l&quot; command? 
<br>
<p>[sboisver12_at_colosse1 ~]$ ulimit -l
<br>
6000000
<br>
<p><p><p><p><p><p><p>The two differences I see between guillimin and colosse are 
<br>
<p>- Open-MPI 1.4.3 (colosse) v. MVAPICH2 1.6 (guillimin)
<br>
- Mellanox (colosse) v. QLogic (guillimin)
<br>
<p><p>Does anyone experienced such a high latency with Open-MPI 1.4.3 on Mellanox HCAs ?
<br>
<p><p><p><p><p><p>Thank you for your time.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&#233;bastien Boisvert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17322.php">Evghenii Gaburov: "[OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="17320.php">Jeff Squyres: "Re: [OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
