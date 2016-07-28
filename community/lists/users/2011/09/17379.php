<?
$subject_val = "[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 15:18:03 2011" -->
<!-- isoreceived="20110921191803" -->
<!-- sent="Wed, 21 Sep 2011 15:17:58 -0400" -->
<!-- isosent="20110921191758" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006FC_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E7883B4.7080309_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 15:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17378.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Yevgeny,
<br>
<p><p>You are right on comparing apples with apples.
<br>
<p>But MVAPICH2 is not installed on colosse, which is in the CLUMEQ consortium, a part of Compute Canada.
<br>
<p><p>Meanwhile, I contacted some people at SciNet, which is also part of Compute Canada. 
<br>
<p><p>They told me to try Open-MPI 1.4.3 with the Intel compiler with --mca btl self,ofud to use the ofud BTL instead of openib for OpenFabrics transport.
<br>
<p><p>This worked quite good -- I got a low latency of 35 microseconds. Yay !
<br>
<p><p>See <a href="http://pastebin.com/VpAd1NrK">http://pastebin.com/VpAd1NrK</a> for the Grid Engine submission script and for the Ray latency output.
<br>
<p><p><p><p><p>With  Open-MPI 1.4.3, gcc 4.4.2 and --mca btl self,ofud, the job hangs somewhere before Ray I presume because there is nothing in
<br>
the standard output and there is nothing in the standard error.
<br>
<p>One thing I noticed is that the load of a given node is 7, not 8, which is strange because there are, in theory, 8 instances of Ray on each node.
<br>
<p>See <a href="http://pastebin.com/gVMjQ9Ra">http://pastebin.com/gVMjQ9Ra</a>
<br>
<p><p><p><p><p>According to the Open-MPI mailing list, ofud &quot;was never really finished&quot;.
<br>
<p>See <a href="http://www.open-mpi.org/community/lists/users/2010/12/14977.php">http://www.open-mpi.org/community/lists/users/2010/12/14977.php</a>
<br>
<p><p>Could that unfinished status explain why it works with the Intel compiler but not with the GNU compiler ?
<br>
<p><p>libibverbs is utilised on the colosse if that matters.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&#233;bastien
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://github.com/sebhtml/ray">http://github.com/sebhtml/ray</a>
<br>
<p><span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : Yevgeny Kliteynik [kliteyn_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 20 septembre 2011 08:14
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc : S&#233;bastien Boisvert
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi S&#233;bastien,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand you correctly, you are running your application on two
</span><br>
<span class="quotelev1">&gt; different MPIs on two different clusters with two different IB vendors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you make a comparison more &quot;apples to apples&quot;-ish?
</span><br>
<span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt; - run the same version of Open MPI on both clusters
</span><br>
<span class="quotelev1">&gt; - run the same version of MVAPICH on both clusters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18-Sep-11 1:59 AM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI 1.4.3 on Mellanox Infiniband hardware gives a latency of 250 microseconds with 256 MPI ranks on super-computer A (name is colosse).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same software gives a latency of 10 microseconds with MVAPICH2 and QLogic Infiniband hardware with 512 MPI ranks on super-computer B (name is guillimin).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the relevant information listed in <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Check the FAQ first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; done !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. The version of Open MPI that you're using.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. The config.log file from the top-level Open MPI directory, if available (please compress!).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Command file: <a href="http://pastebin.com/mW32ntSJ">http://pastebin.com/mW32ntSJ</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. The output of the &quot;ompi_info --all&quot; command from the node where you're invoking mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info -a on colosse: <a href="http://pastebin.com/RPyY9s24">http://pastebin.com/RPyY9s24</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. If running on more than one node -- especially if you're having problems launching Open MPI processes -- also include the output of the &quot;ompi_info -v ompi full --parsable&quot; command from each node on which you're trying to run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not having problems launching Open-MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. A detailed description of what is failing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI 1.4.3 on Mellanox Infiniband hardware give a latency of 250 microseconds with 256 MPI ranks on super-computer A (name is colosse).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same software gives a latency of 10 microseconds with MVAPICH2 and QLogic Infiniband hardware on 512 MPI ranks on super-computer B (name is guillimin).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details follow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am developing a distributed genome assembler that runs with the message-passing interface (I am a PhD student).
</span><br>
<span class="quotelev2">&gt;&gt; It is called Ray. Link: <a href="http://github.com/sebhtml/ray">http://github.com/sebhtml/ray</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently added the option -test-network-only so that Ray can be used to test the latency. Each MPI rank has to send 100000 messages (4000 bytes each), one by one.
</span><br>
<span class="quotelev2">&gt;&gt; The destination of any message is picked up at random.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On colosse, a super-computer located at Laval University, I get an average latency of 250 microseconds with the test done in Ray.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://pastebin.com/9nyjSy5z">http://pastebin.com/9nyjSy5z</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On colosse, the hardware is Mellanox Infiniband QDR ConnectX and the MPI middleware is Open-MPI 1.4.3 compiled with gcc 4.4.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; colosse has 8 compute cores per node (Intel Nehalem).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Testing the latency with ibv_rc_pingpong on colosse gives 11 microseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    local address:  LID 0x048e, QPN 0x1c005c, PSN 0xf7c66b
</span><br>
<span class="quotelev2">&gt;&gt;    remote address: LID 0x018c, QPN 0x2c005c, PSN 0x5428e6
</span><br>
<span class="quotelev2">&gt;&gt; 8192000 bytes in 0.01 seconds = 5776.64 Mbit/sec
</span><br>
<span class="quotelev2">&gt;&gt; 1000 iters in 0.01 seconds = 11.35 usec/iter
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I know that the Infiniband has a correct latency between two HCAs because of the output of ibv_rc_pingpong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Adding the parameter --mca btl_openib_verbose 1 to mpirun shows that Open-MPI detects the hardware correctly:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [r107-n57][[59764,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt;&gt; [r107-n57][[59764,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; see <a href="http://pastebin.com/pz03f0B3">http://pastebin.com/pz03f0B3</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I don't think this is the problem described in the FAQ ( <a href="http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx-poor-latency">http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx-poor-latency</a> )
</span><br>
<span class="quotelev2">&gt;&gt; and on the mailing list ( <a href="http://www.open-mpi.org/community/lists/users/2007/10/4238.php">http://www.open-mpi.org/community/lists/users/2007/10/4238.php</a> ) because the INI values are found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running the network test implemented in Ray on 32 MPI ranks, I get an average latency of 65 microseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://pastebin.com/nWDmGhvM">http://pastebin.com/nWDmGhvM</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, with 256 MPI ranks I get an average latency of 250 microseconds and with 32 MPI ranks I get 65 microseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running the network test on 32 MPI ranks again but only allowing the MPI rank 0 to send messages gives a latency of 10 microseconds for this rank.
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://pastebin.com/dWMXsHpa">http://pastebin.com/dWMXsHpa</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because I get 10 microseconds in the network test in Ray when only the MPI rank sends messages, I would say that there may be some I/O contention.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To test this hypothesis, I re-ran the test, but allowed only 1 MPI rank per node to send messages (there are 8 MPI ranks per node and a total of 32 MPI ranks).
</span><br>
<span class="quotelev2">&gt;&gt; Ranks 0, 8, 16 and 24 all reported 13 microseconds. See <a href="http://pastebin.com/h84Fif3g">http://pastebin.com/h84Fif3g</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The next test was to allow 2 MPI ranks on each node to send messages. Ranks 0, 1, 8, 9, 16, 17, 24, and 25 reported 15 microseconds.
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://pastebin.com/REdhJXkS">http://pastebin.com/REdhJXkS</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With 3 MPI ranks per node that can send messages, ranks 0, 1, 2, 8, 9, 10, 16, 17, 18, 24, 25, 26 reported 20 microseconds. See <a href="http://pastebin.com/TCd6xpuC">http://pastebin.com/TCd6xpuC</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, with 4 MPI ranks per node that can send messages, I got 23 microseconds. See <a href="http://pastebin.com/V8zjae7s">http://pastebin.com/V8zjae7s</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the MPI ranks on a given node seem to fight for access to the HCA port.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each colosse node has 1 port (ibv_devinfo) and the max_mtu is 2048 bytes. See <a href="http://pastebin.com/VXMAZdeZ">http://pastebin.com/VXMAZdeZ</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point, some may think that there may be a bug in the network test itself. So I tested the same code on another super-computer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On guillimin, a super-computer located at McGill University, I get an average latency (with Ray -test-network-only) of 10 microseconds when running Ray on 512 MPI ranks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://pastebin.com/nCKF8Xg6">http://pastebin.com/nCKF8Xg6</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On guillimin, the hardware is Qlogic Infiniband QDR and the MPI middleware is MVAPICH2 1.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, I know that the network test in Ray works as expected because results on guillimin show a latency of 10 microseconds for 512 MPI ranks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; guillimin also has 8 compute cores per node (Intel Nehalem).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On guillimin, each node has one port (ibv_devinfo) and the max_mtu of HCAs is 4096 bytes. See <a href="http://pastebin.com/35T8N5t8">http://pastebin.com/35T8N5t8</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In Ray, only the following MPI functions are utilised:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Comm_size
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Finalize
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Isend
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Request_free
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Test
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Get_count
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Start
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Recv_init
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Cancel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - MPI_Get_processor_name
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7. Please include information about your network:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Type: Infiniband
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    7.1. Which OpenFabrics version are you running?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ofed-scripts-1.4.2-0_sunhpc1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-1.1.3-2.el5
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-utils-1.1.3-2.el5
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs-devel-1.1.3-2.el5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    7.2. What distro and version of Linux are you running? What is your kernel version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 5.6 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux colosse1 2.6.18-238.19.1.el5 #1 SMP Fri Jul 15 07:31:24 EDT 2011 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    7.3. Which subnet manager are you running? (e.g., OpenSM, a vendor-specific subnet manager, etc.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opensm-libs-3.3.3-1.el5_6.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    7.4. What is the output of the ibv_devinfo command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;              fw_ver:                         2.7.000
</span><br>
<span class="quotelev2">&gt;&gt;              node_guid:                      5080:0200:008d:8f88
</span><br>
<span class="quotelev2">&gt;&gt;              sys_image_guid:                 5080:0200:008d:8f8b
</span><br>
<span class="quotelev2">&gt;&gt;              vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt;&gt;              vendor_part_id:                 26428
</span><br>
<span class="quotelev2">&gt;&gt;              hw_ver:                         0xA0
</span><br>
<span class="quotelev2">&gt;&gt;              board_id:                       X6275_QDR_IB_2.5
</span><br>
<span class="quotelev2">&gt;&gt;              phys_port_cnt:                  1
</span><br>
<span class="quotelev2">&gt;&gt;                      port:   1
</span><br>
<span class="quotelev2">&gt;&gt;                              state:                  active (4)
</span><br>
<span class="quotelev2">&gt;&gt;                              max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;                              active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;                              sm_lid:                 1222
</span><br>
<span class="quotelev2">&gt;&gt;                              port_lid:               659
</span><br>
<span class="quotelev2">&gt;&gt;                              port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    7.5. What is the output of the ifconfig command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Not using IPoIB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    7.6. If running under Bourne shells, what is the output of the &quot;ulimit -l&quot; command?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sboisver12_at_colosse1 ~]$ ulimit -l
</span><br>
<span class="quotelev2">&gt;&gt; 6000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The two differences I see between guillimin and colosse are
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Open-MPI 1.4.3 (colosse) v. MVAPICH2 1.6 (guillimin)
</span><br>
<span class="quotelev2">&gt;&gt; - Mellanox (colosse) v. QLogic (guillimin)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone experienced such a high latency with Open-MPI 1.4.3 on Mellanox HCAs ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  S&#233;bastien Boisvert
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&#233;bastien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17378.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
