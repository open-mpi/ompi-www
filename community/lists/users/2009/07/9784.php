<?
$subject_val = "[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 05:24:02 2009" -->
<!-- isoreceived="20090701092402" -->
<!-- sent="Wed, 01 Jul 2009 11:23:53 +0200" -->
<!-- isosent="20090701092353" -->
<!-- name="Jose Gracia" -->
<!-- email="gracia_at_[hidden]" -->
<!-- subject="[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp" -->
<!-- id="4A4B2B29.6010802_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp<br>
<strong>From:</strong> Jose Gracia (<em>gracia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 05:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9785.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9783.php">David Ronis: "[OMPI users] Network Problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9785.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<li><strong>Reply:</strong> <a href="9785.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have problems running large jobs on a PC cluster with OpenMPI V1.3.
<br>
Typically the error appears only for processor count &gt;= 2048 (actually 
<br>
cores), sometimes also bellow.
<br>
<p>The nodes (Intel Nehalem, 2 procs, 4 cores each) run (scientific?) linux.
<br>
$&gt; uname -a
<br>
Linux cl3fr1 2.6.18-128.1.10.el5 #1 SMP Thu May 7 12:48:13 EDT 2009 
<br>
x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>The code starts normally, reads it's input data sets (~4GB), does some 
<br>
initialization and then continues the actual calculations. So time after 
<br>
that, it fails with the following error message:
<br>
<p>[n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] 
<br>
error creating qp errno says Cannot allocate memory
<br>
<p>Memory usage by the application should not be the problem. At this proc 
<br>
count, the code uses only ~100MB per proc. Also, the code runs for lower 
<br>
number of procs where it consumes more mem.
<br>
<p><p>I also get the apparently secondary error messages:
<br>
<p>[n100501:14587] [[40339,0],0]-[[40339,1],4] mca_oob_tcp_msg_recv: readv 
<br>
failed: Connection reset by peer (104)
<br>
<p><p>The cluster uses InfiniBand connections. I am aware only of the 
<br>
following parameter changes (systemwide):
<br>
btl_openib_ib_min_rnr_timer = 25
<br>
btl_openib_ib_timeout = 20
<br>
<p>$&gt; ulimit -l
<br>
unlimited
<br>
<p><p>I attached:
<br>
1) $&gt; ompi_info --all &gt; ompi_info.log
<br>
2) stderr from the PBS: stderr.log
<br>
<p><p>Thanks for any help you may give!
<br>
<p>Cheers,
<br>
Jose
<br>
<p><p>

<br><p>
+ export OMP_NUM_THREADS=1
<br>
+ OMP_NUM_THREADS=1
<br>
+ module load compiler/intel mpi/openmpi/1.3-intel-11.0
<br>
++ /opt/system/modules/3.2.6/Modules/3.2.6/bin/modulecmd bash load compiler/intel mpi/openmpi/1.3-intel-11.0
<br>
+ eval LD_LIBRARY_PATH=/opt/mpi/openmpi/1.3-intel-11.0/lib:/usr/local/lib:/opt/compiler/intel//cc/11.0.074/idb/lib/intel64:/opt/compiler/intel//fc/11.0.074/lib/intel64:/opt/compiler/intel//cc/11.0.074/lib/intel64 ';export' 'LD_LIBRARY_PATH;LOADEDMODULES=system/maui/3.2.6p21:compiler/intel/11.0:mpi/openmpi/1.3-intel-11.0' ';export' 'LOADEDMODULES;MANPATH=/usr/local/man::/opt/system/modules/default/man:/opt/compiler/intel//cc/11.0.074/man:/opt/compiler/intel//fc/11.0.074/man:/opt/mpi/openmpi/1.3-intel-11.0/man' ';export' 'MANPATH;MPIDIR=/opt/mpi/openmpi/1.3-intel-11.0' ';export' 'MPIDIR;MPI_BIN_DIR=/opt/mpi/openmpi/1.3-intel-11.0/bin' ';export' 'MPI_BIN_DIR;MPI_INC_DIR=/opt/mpi/openmpi/1.3-intel-11.0/include' ';export' 'MPI_INC_DIR;MPI_LIB_DIR=/opt/mpi/openmpi/1.3-intel-11.0/lib' ';export' 'MPI_LIB_DIR;MPI_MAN_DIR=/opt/mpi/openmpi/1.3-intel-11.0/man' ';export' 'MPI_MAN_DIR;MPI_VERSION=1.3-intel-11.0' ';export' 'MPI_VERSION;NLSPATH=/opt/compiler/intel//cc/11.0.074/idb/intel64/locale/%l_%t/%N' ';export' 'NLSPATH;PATH=/opt/mpi/openmpi/1.3-intel-11.0/bin:/opt/compiler/intel//fc/11.0.074/bin/intel64:/opt/compiler/intel//java/jre1.6.0_14/bin:/opt/compiler/intel//cc/11.0.074/bin/intel64:/nfs/home4/HLRS/hlrs/hpcjgrac/bin:/usr/local/bin:/usr/lib64/qt-3.3/bin:/opt/system/maui/3.2.6p21/bin:/usr/kerberos/bin:/bin:/usr/bin' ';export' 'PATH;_LMFILES_=/opt/system/modulefiles/system/maui/3.2.6p21:/opt/modulefiles/compiler/intel/11.0:/opt/modulefiles/mpi/openmpi/1.3-intel-11.0' ';export' '_LMFILES_;'
<br>
++ LD_LIBRARY_PATH=/opt/mpi/openmpi/1.3-intel-11.0/lib:/usr/local/lib:/opt/compiler/intel//cc/11.0.074/idb/lib/intel64:/opt/compiler/intel//fc/11.0.074/lib/intel64:/opt/compiler/intel//cc/11.0.074/lib/intel64
<br>
++ export LD_LIBRARY_PATH
<br>
++ LOADEDMODULES=system/maui/3.2.6p21:compiler/intel/11.0:mpi/openmpi/1.3-intel-11.0
<br>
++ export LOADEDMODULES
<br>
++ MANPATH=/usr/local/man::/opt/system/modules/default/man:/opt/compiler/intel//cc/11.0.074/man:/opt/compiler/intel//fc/11.0.074/man:/opt/mpi/openmpi/1.3-intel-11.0/man
<br>
++ export MANPATH
<br>
++ MPIDIR=/opt/mpi/openmpi/1.3-intel-11.0
<br>
++ export MPIDIR
<br>
++ MPI_BIN_DIR=/opt/mpi/openmpi/1.3-intel-11.0/bin
<br>
++ export MPI_BIN_DIR
<br>
++ MPI_INC_DIR=/opt/mpi/openmpi/1.3-intel-11.0/include
<br>
++ export MPI_INC_DIR
<br>
++ MPI_LIB_DIR=/opt/mpi/openmpi/1.3-intel-11.0/lib
<br>
++ export MPI_LIB_DIR
<br>
++ MPI_MAN_DIR=/opt/mpi/openmpi/1.3-intel-11.0/man
<br>
++ export MPI_MAN_DIR
<br>
++ MPI_VERSION=1.3-intel-11.0
<br>
++ export MPI_VERSION
<br>
++ NLSPATH=/opt/compiler/intel//cc/11.0.074/idb/intel64/locale/%l_%t/%N
<br>
++ export NLSPATH
<br>
++ PATH=/opt/mpi/openmpi/1.3-intel-11.0/bin:/opt/compiler/intel//fc/11.0.074/bin/intel64:/opt/compiler/intel//java/jre1.6.0_14/bin:/opt/compiler/intel//cc/11.0.074/bin/intel64:/nfs/home4/HLRS/hlrs/hpcjgrac/bin:/usr/local/bin:/usr/lib64/qt-3.3/bin:/opt/system/maui/3.2.6p21/bin:/usr/kerberos/bin:/bin:/usr/bin
<br>
++ export PATH
<br>
++ _LMFILES_=/opt/system/modulefiles/system/maui/3.2.6p21:/opt/modulefiles/compiler/intel/11.0:/opt/modulefiles/mpi/openmpi/1.3-intel-11.0
<br>
++ export _LMFILES_
<br>
+ module list
<br>
++ /opt/system/modules/3.2.6/Modules/3.2.6/bin/modulecmd bash list
<br>
Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;1) system/maui/3.2.6p21         3) mpi/openmpi/1.3-intel-11.0
<br>
&nbsp;&nbsp;2) compiler/intel/11.0
<br>
+ eval
<br>
+ cd /nfs/nas/homeB/home4/HLRS/hlrs/hpcjgrac/prace/benchmark/applications/gadget/tmp/GADGET_NEHALEM-HLRS_StrongScaling_2048_i000083/n256p8t1_t001_i01
<br>
++ date
<br>
+ echo '&lt;jobstart at=&quot;Fri Jun 19 09:50:05 CEST 2009&quot; /&gt;'
<br>
+ mpiexec time /nfs/nas/homeB/home4/HLRS/hlrs/hpcjgrac/prace/benchmark/applications/gadget/tmp/GADGET_NEHALEM-HLRS_StrongScaling_2048_i000083/n256p8t1_t001_i01/GADGET_NEHALEM-HLRS_cname_NEHALEM-HLRS.exe param.txt
<br>
[n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],5][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],5][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n100501][[40339,1],1][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],1][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n100501][[40339,1],2][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],2][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],2][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n100501][[40339,1],3][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],3][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n100501][[40339,1],4][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],4][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n100501][[40339,1],7][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n100501][[40339,1],7][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n100501:14587] [[40339,0],0]-[[40339,1],4] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n100501:14587] [[40339,0],0]-[[40339,1],7] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n100501:14587] [[40339,0],0]-[[40339,1],6] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n100501:14587] [[40339,0],0]-[[40339,1],5] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n100501:14587] [[40339,0],0]-[[40339,1],1] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n100501:14587] [[40339,0],0]-[[40339,1],2] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n100501:14587] [[40339,0],0]-[[40339,1],3] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033201][[40339,1],1551][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1551][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033201][[40339,1],1547][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201:3588] *** An error occurred in MPI_Sendrecv
<br>
[n033201:3588] *** on communicator MPI_COMM_WORLD
<br>
[n033201:3588] *** MPI_ERR_OTHER: known error not in list
<br>
[n033201:3588] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[n033102][[40339,1],1538][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033102][[40339,1],1543][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1549][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1545][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1545][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033102][[40339,1],1540][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033102][[40339,1],1540][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033102][[40339,1],1541][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033102][[40339,1],1536][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1544][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1550][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1550][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033201][[40339,1],1548][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1548][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033201][[40339,1],1546][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201][[40339,1],1546][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033202][[40339,1],1553][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033202][[40339,1],1555][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033202][[40339,1],1555][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033202][[40339,1],1556][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033202][[40339,1],1552][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033202][[40339,1],1552][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply start connect
<br>
[n033202][[40339,1],1558][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033202][[40339,1],1559][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033202][[40339,1],1557][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n033201:03576] [[40339,0],193]-[[40339,1],1544] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033102:03498] [[40339,0],192]-[[40339,1],1538] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033102:03498] [[40339,0],192]-[[40339,1],1543] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033201:03576] [[40339,0],193]-[[40339,1],1551] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033102:03498] [[40339,0],192]-[[40339,1],1540] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033201:03576] [[40339,0],193]-[[40339,1],1549] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033202:03719] [[40339,0],194]-[[40339,1],1555] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[n033202:03719] [[40339,0],194]-[[40339,1],1552] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
Command exited with non-zero status 16
<br>
64.36user 3.48system 1:20.39elapsed 84%CPU (0avgtext+0avgdata 0maxresident)k
<br>
0inputs+0outputs (7major+125286minor)pagefaults 0swaps
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 1538 with PID 3501 on
<br>
node n033102 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[n100501:14587] 11 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[n100501:14587] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
++ date
<br>
+ echo '&lt;jobend at=&quot;Fri Jun 19 09:51:27 CEST 2009&quot; /&gt;'
<br>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9784/ompi_info.log.gz">ompi_info.log.gz</a>
</ul>
<!-- attachment="ompi_info.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9785.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9783.php">David Ronis: "[OMPI users] Network Problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9785.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<li><strong>Reply:</strong> <a href="9785.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
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
