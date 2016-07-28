<?
$subject_val = "Re: [OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 13:59:26 2011" -->
<!-- isoreceived="20111124185926" -->
<!-- sent="Thu, 24 Nov 2011 11:59:18 -0700" -->
<!-- isosent="20111124185918" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="AFFE93BC-6676-47E1-9E77-484631C6173C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ECE91BA.5080104_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are the Open MPI processes spawned?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-24 13:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17825.php">Markus Stiller: "[OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17823.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17823.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17834.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17834.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2011, at 11:49 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph, Terry, all!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; again, two news: the good one and the second one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that would indeed break things. The 1.5 series isn't correctly checking connections across multiple interfaces until it finds one that works - it just uses the first one it sees. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yahhh!!
</span><br>
<span class="quotelev1">&gt; This behaviour - catch a random interface and hang forever if something is wrong with it - is somewhat less than perfect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From my perspective - the users one - OpenMPI should try to use eitcher *all* available networks (as 1.4 it does...), starting with the high performance ones, or *only* those interfaces on which the hostnames from the hostfile are bound to.
</span><br>
<p>It is indeed supposed to do the former - as I implied, this is a bug in the 1.5 series.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, there should be timeouts (if you cannot connect to a node within a minute you probably will never ever be connected...)
</span><br>
<p>We have debated about this for some time - there is a timeout mca param one can set, but we'll consider again making it default.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If some connection runs into a timeout a warning would be great (and a hint to take off the interface by oob_tcp_if_exclude, btl_tcp_if_exclude).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should it not?
</span><br>
<span class="quotelev1">&gt; Maybe you can file it as a &quot;call for enhancement&quot;...
</span><br>
<p>Probably the right approach at this time.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The solution is to specify -mca oob_tcp_if_include ib0. This will direct the run-time wireup across the IP over IB interface.
</span><br>
<span class="quotelev2">&gt;&gt; You will also need the -mca btl_tcp_if_include ib0 as well so the MPI comm goes exclusively over that network. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; YES! This works. Adding
</span><br>
<span class="quotelev1">&gt; -mca oob_tcp_if_include ib0 -mca btl_tcp_if_include ib0
</span><br>
<span class="quotelev1">&gt; to the command line of mpiexec helps me to run the 1.5.x programs, so I believe this is the workaround.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for this hint, Ralph! My fail to not to find it in the FAQ (I was so close :o) <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then I ran into yet another one issue. In <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt; the way to define MCA parameters over environment variables is described.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried it:
</span><br>
<span class="quotelev1">&gt; $ export OMPI_MCA_oob_tcp_if_include=ib0
</span><br>
<span class="quotelev1">&gt; $ export OMPI_MCA_btl_tcp_if_include=ib0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked it:
</span><br>
<span class="quotelev1">&gt; $ ompi_info --param all all | grep oob_tcp_if_include
</span><br>
<span class="quotelev1">&gt;                 MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &lt;ib0&gt;, data source: environment or cmdline)
</span><br>
<span class="quotelev1">&gt; $ ompi_info --param all all | grep btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;ib0&gt;, data source: environment or cmdline)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then I get again the hang-up issue!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==&gt; seem, mpiexec does not understand these environment variables! and only get the command line options. This should not be so?
</span><br>
<p>No, that isn't what is happening. The problem lies in the behavior of rsh/ssh. This environment does not forward environmental variables. Because of limits on cmd line length, we don't automatically forward MCA params from the environment, but only from the cmd line. It is an annoying limitation, but one outside our control.
<br>
<p>Put those envars in the default mca param file and the problem will be resolved.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I also tried to advise to provide the envvars by -x OMPI_MCA_oob_tcp_if_include -x OMPI_MCA_btl_tcp_if_include - nothing changed.
</span><br>
<p>I'm surprised by that - they should be picked up and forwarded. Could be a bug
<br>
<p><span class="quotelev1">&gt; Well, they are OMPI_ variables and should be provided in any case).
</span><br>
<p>No, they aren't - they are not treated differently than any other envar.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes and many thanks for all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Specifying both include and exclude should generate an error as those are mutually exclusive options - I think this was also missed in early 1.5 releases and was recently patched.
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 23, 2011, at 12:14 PM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/23/2011 2:02 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Ralph, hello all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Two news, as usual a good and a bad one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The good: we believe to find out *why* it hangs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The bad: it seem for me, this is a bug or at least undocumented feature of Open MPI /1.5.x.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In detail:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As said, we see mystery hang-ups if starting on some nodes using some permutation of hostnames. Usually removing &quot;some bad&quot; nodes helps, sometimes a permutation of node names in the hostfile is enough(!). The behaviour is reproducible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The machines have at least 2 networks:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *eth0* is used for installation, monitoring, ... - this ethernet is very slim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *ib0* - is the &quot;IP over IB&quot; interface and is used for everything: the file systems, ssh and so on. The hostnames are bound to the ib0 network; our idea was not to use eth0 for MPI at all.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all machines are available from any over ib0 (are in one network).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But on eth0 there are at least two different networks; especially the computer linuxbsc025 is in different network than the others and is not reachable from other nodes over eth0! (but reachable over ib0. The name used in the hostfile is resolved to the IP of ib0 ).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I believe that Open MPI /1.5.x tries to communicate over eth0 and cannot do it, and hangs. The /1.4.3 does not hang, so this issue is 1.5.x-specific (seen in 1.5.3 and 1.5.4). A bug?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also tried to disable the eth0 completely:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpiexec -mca btl_tcp_if_exclude eth0,lo  -mca btl_tcp_if_include ib0 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe if you give &quot;-mca btl_tcp_if_include ib0&quot; you do not need to specify the exclude parameter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...but this does not help. All right, the above command should disable the usage of eth0 for MPI communication itself, but it hangs just before the MPI is started, isn't it? (because one process lacks, the MPI_INIT cannot be passed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By &quot;just before the MPI is started&quot; do you mean while orte is launching the processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if you need to specify &quot;-mca oob_tcp_if_include ib0&quot; also but I think that may depend on which oob you are using.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now a question: is there a way to forbid the mpiexec to use some interfaces at all?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best wishes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S. Of course we know about the good idea to bring all nodes into the same net on eth0, but at this point it is impossible due of technical reason[s]...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S.2 I'm not sure that the issue is really rooted in the above mentioned misconfiguration of eth0, but I have no better idea at this point...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The map seem to be correctly build, also the output if the daemons seem to be the same (see helloworld.txt)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately, it appears that OMPI was not built with --enable-debug as there is no debug info in the output. Without a debug installation of OMPI, the ability to determine the problem is pretty limited.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well, this will be the next option we will activate. We also have another issue here, on (not) using uDAPL..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You should also try putting that long list of nodes in a hostfile - see if that makes a difference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It will process the nodes thru a different code path, so if there is some problem in --host,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this will tell us.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; No, with the host file instead of host list on command line the behaviour is the same.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But, I just found out that the 1.4.3 does *not* hang on this constellation. The next thing I will try will be the installation of 1.5.4 :o)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P.S. started:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec --hostfile hostfile-mini -mca odls_base_verbose 5 --leave-session-attached --display-map  helloworld 2&gt;&amp;1 | tee helloworld.txt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 21, 2011, at 9:33 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello Open MPI volks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We use OpenMPI 1.5.3 on our pretty new 1800+ nodes InfiniBand cluster, and we have some strange hangups if starting OpenMPI processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The nodes are named linuxbsc001,linuxbsc002,... (with some lacuna due of  offline nodes). Each node is accessible from each other over SSH (without password), also MPI programs between any two nodes are checked to run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So long, I tried to start some bigger number of processes, one process per node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpiexec -np NN  --host linuxbsc001,linuxbsc002,... MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now the problem: there are some constellations of names in the host list on which mpiexec reproducible hangs forever; and more surprising: other *permutation* of the *same* node names may run without any errors!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Example: the command in laueft.txt runs OK, the command in haengt.txt hangs. Note: the only difference is that the node linuxbsc025 is put on the end of the host list. Amazed, too?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Looking on the particular nodes during the above mpiexec hangs, we found the orted daemons started on *each* node and the binary on all but one node (orted.txt, MPI_FastTest.txt).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Again amazing that the node with no user process started (leading to hangup in MPI_Init of all processes and thus to hangup, I believe) was always the same, linuxbsc005, which is NOT the permuted item linuxbsc025...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This behaviour is reproducible. The hang-on only occure if the started application is a MPI application (&quot;hostname&quot; does not hang).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any Idea what is gonna on?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; P.S: no alias names used, all names are real ones
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc001: STDOUT: 24323 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc002: STDOUT:  2142 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc003: STDOUT: 69266 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc004: STDOUT: 58899 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc006: STDOUT: 68255 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc007: STDOUT: 62026 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc008: STDOUT: 54221 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc009: STDOUT: 55482 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc010: STDOUT: 59380 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc011: STDOUT: 58312 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc014: STDOUT: 56013 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc016: STDOUT: 58563 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc017: STDOUT: 54693 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc018: STDOUT: 54187 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc020: STDOUT: 55811 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc021: STDOUT: 54982 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc022: STDOUT: 50032 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc023: STDOUT: 54044 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc024: STDOUT: 51247 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc025: STDOUT: 18575 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc027: STDOUT: 48969 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc028: STDOUT: 52397 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc029: STDOUT: 52780 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc030: STDOUT: 47537 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc031: STDOUT: 54609 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc032: STDOUT: 52833 ?        SLl    0:00 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc025,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ timex /opt/MPI/openmpi-1.5.3/linux/intel/bin/mpiexec -np 27  --host linuxbsc001,linuxbsc002,linuxbsc003,linuxbsc004,linuxbsc005,linuxbsc006,linuxbsc007,linuxbsc008,linuxbsc009,linuxbsc010,linuxbsc011,linuxbsc014,linuxbsc016,linuxbsc017,linuxbsc018,linuxbsc020,linuxbsc021,linuxbsc022,linuxbsc023,linuxbsc024,linuxbsc027,linuxbsc028,linuxbsc029,linuxbsc030,linuxbsc031,linuxbsc032,linuxbsc025 MPI_FastTest.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc001: STDOUT: 24322 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc002: STDOUT:  2141 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc003: STDOUT: 69265 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc004: STDOUT: 58898 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 4 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc005: STDOUT: 65642 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 5 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc006: STDOUT: 68254 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 6 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc007: STDOUT: 62025 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 7 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc008: STDOUT: 54220 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 8 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc009: STDOUT: 55481 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 9 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc010: STDOUT: 59379 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 10 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc011: STDOUT: 58311 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 11 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc014: STDOUT: 56012 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 12 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc016: STDOUT: 58562 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 13 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc017: STDOUT: 54692 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 14 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc018: STDOUT: 54186 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 15 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc020: STDOUT: 55810 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 16 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc021: STDOUT: 54981 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 17 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc022: STDOUT: 50031 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 18 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc023: STDOUT: 54043 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 19 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc024: STDOUT: 51246 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 20 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc025: STDOUT: 18574 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 21 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc027: STDOUT: 48968 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 22 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc028: STDOUT: 52396 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 23 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc029: STDOUT: 52779 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 24 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc030: STDOUT: 47536 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 25 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc031: STDOUT: 54608 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 26 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc032: STDOUT: 52832 ?        Ss     0:00 /opt/MPI/openmpi-1.5.3/linux/intel/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 751435776 -mca orte_ess_vpid 27 -mca orte_ess_num_procs 28 --hnp-uri 751435776.0;tcp://134.61.194.2:33210 -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc005 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc006 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc007 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc008 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc009 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc010 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc011 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc014 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc016 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc017 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc018 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc020 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc021 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc022 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc023 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc024 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linuxbsc025 slots=1[linuxc2.rz.RWTH-Aachen.DE:22229] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxc2.rz.RWTH-Aachen.DE:22229] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxc2.rz.RWTH-Aachen.DE:22229] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc005    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc006    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc007    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc008    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc009    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc010    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc011    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc014    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc016    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc017    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc018    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc020    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 11
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc021    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc022    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc023    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc024    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Data for node: linuxbsc025    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [87,1] Process rank: 16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc007.rz.RWTH-Aachen.DE:07574] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc007.rz.RWTH-Aachen.DE:07574] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc007.rz.RWTH-Aachen.DE:07574] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc016.rz.RWTH-Aachen.DE:03146] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc016.rz.RWTH-Aachen.DE:03146] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc016.rz.RWTH-Aachen.DE:03146] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc005.rz.RWTH-Aachen.DE:22051] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc005.rz.RWTH-Aachen.DE:22051] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc005.rz.RWTH-Aachen.DE:22051] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc011.rz.RWTH-Aachen.DE:07131] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc011.rz.RWTH-Aachen.DE:07131] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc011.rz.RWTH-Aachen.DE:07131] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc025.rz.RWTH-Aachen.DE:43153] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc025.rz.RWTH-Aachen.DE:43153] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc025.rz.RWTH-Aachen.DE:43153] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc017.rz.RWTH-Aachen.DE:05044] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc017.rz.RWTH-Aachen.DE:05044] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc017.rz.RWTH-Aachen.DE:05044] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc018.rz.RWTH-Aachen.DE:01840] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc018.rz.RWTH-Aachen.DE:01840] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc018.rz.RWTH-Aachen.DE:01840] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc024.rz.RWTH-Aachen.DE:79549] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc024.rz.RWTH-Aachen.DE:79549] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc024.rz.RWTH-Aachen.DE:79549] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc022.rz.RWTH-Aachen.DE:73501] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc022.rz.RWTH-Aachen.DE:73501] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc022.rz.RWTH-Aachen.DE:73501] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc023.rz.RWTH-Aachen.DE:03364] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc023.rz.RWTH-Aachen.DE:03364] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc023.rz.RWTH-Aachen.DE:03364] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc006.rz.RWTH-Aachen.DE:16811] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc006.rz.RWTH-Aachen.DE:16811] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc006.rz.RWTH-Aachen.DE:16811] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc014.rz.RWTH-Aachen.DE:10206] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc014.rz.RWTH-Aachen.DE:10206] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc014.rz.RWTH-Aachen.DE:10206] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc008.rz.RWTH-Aachen.DE:00858] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc008.rz.RWTH-Aachen.DE:00858] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc008.rz.RWTH-Aachen.DE:00858] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc010.rz.RWTH-Aachen.DE:09727] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc010.rz.RWTH-Aachen.DE:09727] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc010.rz.RWTH-Aachen.DE:09727] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc020.rz.RWTH-Aachen.DE:06680] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc020.rz.RWTH-Aachen.DE:06680] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc020.rz.RWTH-Aachen.DE:06680] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc009.rz.RWTH-Aachen.DE:05145] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc009.rz.RWTH-Aachen.DE:05145] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc009.rz.RWTH-Aachen.DE:05145] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc021.rz.RWTH-Aachen.DE:01405] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc021.rz.RWTH-Aachen.DE:01405] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linuxbsc021.rz.RWTH-Aachen.DE:01405] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17825.php">Markus Stiller: "[OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17823.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17823.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17834.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17834.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
