<?
$subject_val = "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 11 10:28:12 2013" -->
<!-- isoreceived="20130311142812" -->
<!-- sent="Mon, 11 Mar 2013 17:28:07 +0300" -->
<!-- isosent="20130311142807" -->
<!-- name="Svyatoslav Korneev" -->
<!-- email="svyatoslav.korneev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129" -->
<!-- id="CA+jNUxZ=ns1Cxgf1=vZnZGZr4WUGF4M6vL0an2Fvm_8n_TihGw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58FD1935-3426-4BBC-9390-961050B78610_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129<br>
<strong>From:</strong> Svyatoslav Korneev (<em>svyatoslav.korneev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-11 10:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Previous message:</strong> <a href="21518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>In reply to:</strong> <a href="21518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Reply:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thank you for your answer.
<br>
<p>But below 129 code runs well even with these warnings.
<br>
<p>I have following warnings:
<br>
<p>1. WARNING: There are more than one active ports on host
<br>
'compute-0-0.local'
<br>
<p>2. WARNING: Failed to open &quot;OpenIB-cma-1&quot; [DAT_INVALID_ADDRESS:].
<br>
<p>3. open_hca: getaddr_netdev ERROR: Success. Is
<br>
ib1 configured?
<br>
<p>4. open_hca: device mthca0 not found
<br>
<p>5. library load failure: libdaplscm.so.2: cannot open shared object
<br>
file: No such file or directory
<br>
<p>6. WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.
<br>
<p><p>It's looks messy, but these warnings are not critical, or I'm not right ?
<br>
<p>Warnings 1-3 denote  the unconfigured second port, should I configure
<br>
network interface for it ? I tried to solve warning 6 by manual, but
<br>
it does not work.  What about warning 5, what is this library
<br>
libdaplscm.so.2?
<br>
<p>How do you think, may be it would be better to install MLNX_OFED on my
<br>
nodes as I have NIC from this brand ?
<br>
<p>Regards,
<br>
Svyatoslav
<br>
<p>On Mon, Mar 11, 2013 at 4:04 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Did the check the FAQ entries listed on all the warning messages that you're getting?  You should probably fix those first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2013, at 4:30 AM, &quot;Svyatoslav Korneev&quot; &lt;svyatoslav.korneev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Community,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have 4 computing nodes and front-end. Computing nodes connected via
</span><br>
<span class="quotelev2">&gt;&gt; IB and Ethernet and fron-end has Ethernet only. Computing node has 4
</span><br>
<span class="quotelev2">&gt;&gt; CPU on board, each CPU has 16 cores, total number of cores per node is
</span><br>
<span class="quotelev2">&gt;&gt; 64. The IB network controller is Mellanox MT26428, IB switch is Qlogic
</span><br>
<span class="quotelev2">&gt;&gt; 12000. I installed Rock Cluster Linux 6.1 on my cluster, and this
</span><br>
<span class="quotelev2">&gt;&gt; system has OpenMPI from the box. ompi_info gives the version of OpenMP
</span><br>
<span class="quotelev2">&gt;&gt; is 1.6.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good news that IB and OpendMPI with IB support working from the box,
</span><br>
<span class="quotelev2">&gt;&gt; but I face a really strange bug. If I try to run HelloWord on more
</span><br>
<span class="quotelev2">&gt;&gt; then 129 processes with IB support it gives me Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; error. I have this error even if I try to start it on one node. Below
</span><br>
<span class="quotelev2">&gt;&gt; 129 processes everything is working fine, on 1 node or on 4 nodes
</span><br>
<span class="quotelev2">&gt;&gt; except warning messages (listing bellow). Without IB support
</span><br>
<span class="quotelev2">&gt;&gt; everything working fine on arbitrary number of processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anybody have an idea regarding my issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Warning messages for HelloWord, running on two processes (each process
</span><br>
<span class="quotelev2">&gt;&gt; per node):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_openib_verbose 1 --mca btl ^tcp -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; machinefile -n 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: default
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: There are more than one active ports on host
</span><br>
<span class="quotelev2">&gt;&gt; 'compute-0-0.local', but the
</span><br>
<span class="quotelev2">&gt;&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev2">&gt;&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev2">&gt;&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev2">&gt;&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev2">&gt;&gt; values.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt;      btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: default
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Failed to open &quot;OpenIB-cma-1&quot; [DAT_INVALID_ADDRESS:].
</span><br>
<span class="quotelev2">&gt;&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev2">&gt;&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev2">&gt;&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev2">&gt;&gt; the dat.conf file.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-0.local:20229:  open_hca: getaddr_netdev ERROR: Success. Is
</span><br>
<span class="quotelev2">&gt;&gt; ib1 configured?
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-0.local:20229:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-0.local:20229:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-1.local:58701:  open_hca: getaddr_netdev ERROR: Success. Is
</span><br>
<span class="quotelev2">&gt;&gt; ib1 configured?
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-1.local:58701:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-1.local:58701:  open_hca: device mthca0 not found
</span><br>
<span class="quotelev2">&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev2">&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev2">&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev2">&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; DAT: library load failure: libdaplscm.so.2: cannot open shared object
</span><br>
<span class="quotelev2">&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev2">&gt;&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev2">&gt;&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev2">&gt;&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev2">&gt;&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev2">&gt;&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev2">&gt;&gt; physical memory on your machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev2">&gt;&gt; parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Local host:              compute-0-0.local
</span><br>
<span class="quotelev2">&gt;&gt;  Registerable memory:     32768 MiB
</span><br>
<span class="quotelev2">&gt;&gt;  Total memory:            262125 MiB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev2">&gt;&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local:20227] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / default subnet prefix
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local:20227] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev2">&gt;&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local:20227] 9 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-udapl.txt / dat_ia_open fail
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local:20227] 3 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / reg mem limit low
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
<li><strong>Next message:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Previous message:</strong> <a href="21518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>In reply to:</strong> <a href="21518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Reply:</strong> <a href="21520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
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
