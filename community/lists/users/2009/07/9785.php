<?
$subject_val = "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 08:01:09 2009" -->
<!-- isoreceived="20090701120109" -->
<!-- sent="Wed, 1 Jul 2009 08:01:03 -0400" -->
<!-- isosent="20090701120103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp" -->
<!-- id="34654C41-6408-4E47-A2F1-9A65E0750DF4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4B2B29.6010802_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 08:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
<li><strong>Previous message:</strong> <a href="9784.php">Jose Gracia: "[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp"</a>
<li><strong>In reply to:</strong> <a href="9784.php">Jose Gracia: "[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
<li><strong>Reply:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Random thought: would it be easy for the output of cat /dev/knem to  
<br>
indicate whether IOAT hardware is present?
<br>
<p><p>On Jul 1, 2009, at 5:23 AM, Jose Gracia wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have problems running large jobs on a PC cluster with OpenMPI V1.3.
</span><br>
<span class="quotelev1">&gt; Typically the error appears only for processor count &gt;= 2048 (actually
</span><br>
<span class="quotelev1">&gt; cores), sometimes also bellow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The nodes (Intel Nehalem, 2 procs, 4 cores each) run (scientific?)  
</span><br>
<span class="quotelev1">&gt; linux.
</span><br>
<span class="quotelev1">&gt; $&gt; uname -a
</span><br>
<span class="quotelev1">&gt; Linux cl3fr1 2.6.18-128.1.10.el5 #1 SMP Thu May 7 12:48:13 EDT 2009
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code starts normally, reads it's input data sets (~4GB), does some
</span><br>
<span class="quotelev1">&gt; initialization and then continues the actual calculations. So time  
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt; that, it fails with the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one]
</span><br>
<span class="quotelev1">&gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory usage by the application should not be the problem. At this  
</span><br>
<span class="quotelev1">&gt; proc
</span><br>
<span class="quotelev1">&gt; count, the code uses only ~100MB per proc. Also, the code runs for  
</span><br>
<span class="quotelev1">&gt; lower
</span><br>
<span class="quotelev1">&gt; number of procs where it consumes more mem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also get the apparently secondary error messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],4] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv
</span><br>
<span class="quotelev1">&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster uses InfiniBand connections. I am aware only of the
</span><br>
<span class="quotelev1">&gt; following parameter changes (systemwide):
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_min_rnr_timer = 25
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_timeout = 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; ulimit -l
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attached:
</span><br>
<span class="quotelev1">&gt; 1) $&gt; ompi_info --all &gt; ompi_info.log
</span><br>
<span class="quotelev1">&gt; 2) stderr from the PBS: stderr.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help you may give!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Jose
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.log.gz&gt;+ export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; + OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; + module load compiler/intel mpi/openmpi/1.3-intel-11.0
</span><br>
<span class="quotelev1">&gt; ++ /opt/system/modules/3.2.6/Modules/3.2.6/bin/modulecmd bash load  
</span><br>
<span class="quotelev1">&gt; compiler/intel mpi/openmpi/1.3-intel-11.0
</span><br>
<span class="quotelev1">&gt; + eval LD_LIBRARY_PATH=/opt/mpi/openmpi/1.3-intel-11.0/lib:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/lib:/opt/compiler/intel//cc/11.0.074/idb/lib/intel64:/opt/ 
</span><br>
<span class="quotelev1">&gt; compiler/intel//fc/11.0.074/lib/intel64:/opt/compiler/intel//cc/ 
</span><br>
<span class="quotelev1">&gt; 11.0.074/lib/intel64 ';export' 'LD_LIBRARY_PATH;LOADEDMODULES=system/ 
</span><br>
<span class="quotelev1">&gt; maui/3.2.6p21:compiler/intel/11.0:mpi/openmpi/1.3-intel-11.0'  
</span><br>
<span class="quotelev1">&gt; ';export' 'LOADEDMODULES;MANPATH=/usr/local/man::/opt/system/modules/ 
</span><br>
<span class="quotelev1">&gt; default/man:/opt/compiler/intel//cc/11.0.074/man:/opt/compiler/ 
</span><br>
<span class="quotelev1">&gt; intel//fc/11.0.074/man:/opt/mpi/openmpi/1.3-intel-11.0/man'  
</span><br>
<span class="quotelev1">&gt; ';export' 'MANPATH;MPIDIR=/opt/mpi/openmpi/1.3-intel-11.0' ';export'  
</span><br>
<span class="quotelev1">&gt; 'MPIDIR;MPI_BIN_DIR=/opt/mpi/openmpi/1.3-intel-11.0/bin' ';export'  
</span><br>
<span class="quotelev1">&gt; 'MPI_BIN_DIR;MPI_INC_DIR=/opt/mpi/openmpi/1.3-intel-11.0/include'  
</span><br>
<span class="quotelev1">&gt; ';export' 'MPI_INC_DIR;MPI_LIB_DIR=/opt/mpi/openmpi/1.3-intel-11.0/ 
</span><br>
<span class="quotelev1">&gt; lib' ';export' 'MPI_LIB_DIR;MPI_MAN_DIR=/opt/mpi/openmpi/1.3- 
</span><br>
<span class="quotelev1">&gt; intel-11.0/man' ';export' 'MPI_MAN_DIR;MPI_VERSION=1.3-intel-11.0'  
</span><br>
<span class="quotelev1">&gt; ';export' 'MPI_VERSION;NLSPATH=/opt/compiler/intel//cc/11.0.074/idb/ 
</span><br>
<span class="quotelev1">&gt; intel64/locale/%l_%t/%N' ';export' 'NLSPATH;PATH=/opt/mpi/openmpi/ 
</span><br>
<span class="quotelev1">&gt; 1.3-intel-11.0/bin:/opt/compiler/intel//fc/11.0.074/bin/intel64:/opt/ 
</span><br>
<span class="quotelev1">&gt; compiler/intel//java/jre1.6.0_14/bin:/opt/compiler/intel//cc/ 
</span><br>
<span class="quotelev1">&gt; 11.0.074/bin/intel64:/nfs/home4/HLRS/hlrs/hpcjgrac/bin:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; bin:/usr/lib64/qt-3.3/bin:/opt/system/maui/3.2.6p21/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; kerberos/bin:/bin:/usr/bin' ';export' 'PATH;_LMFILES_=/opt/system/ 
</span><br>
<span class="quotelev1">&gt; modulefiles/system/maui/3.2.6p21:/opt/modulefiles/compiler/intel/ 
</span><br>
<span class="quotelev1">&gt; 11.0:/opt/modulefiles/mpi/openmpi/1.3-intel-11.0' ';export'  
</span><br>
<span class="quotelev1">&gt; '_LMFILES_;'
</span><br>
<span class="quotelev1">&gt; ++ LD_LIBRARY_PATH=/opt/mpi/openmpi/1.3-intel-11.0/lib:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib:/opt/compiler/intel//cc/11.0.074/idb/lib/intel64:/opt/compiler/ 
</span><br>
<span class="quotelev1">&gt; intel//fc/11.0.074/lib/intel64:/opt/compiler/intel//cc/11.0.074/lib/ 
</span><br>
<span class="quotelev1">&gt; intel64
</span><br>
<span class="quotelev1">&gt; ++ export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; ++ LOADEDMODULES=system/maui/3.2.6p21:compiler/intel/11.0:mpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.3-intel-11.0
</span><br>
<span class="quotelev1">&gt; ++ export LOADEDMODULES
</span><br>
<span class="quotelev1">&gt; ++ MANPATH=/usr/local/man::/opt/system/modules/default/man:/opt/ 
</span><br>
<span class="quotelev1">&gt; compiler/intel//cc/11.0.074/man:/opt/compiler/intel//fc/11.0.074/ 
</span><br>
<span class="quotelev1">&gt; man:/opt/mpi/openmpi/1.3-intel-11.0/man
</span><br>
<span class="quotelev1">&gt; ++ export MANPATH
</span><br>
<span class="quotelev1">&gt; ++ MPIDIR=/opt/mpi/openmpi/1.3-intel-11.0
</span><br>
<span class="quotelev1">&gt; ++ export MPIDIR
</span><br>
<span class="quotelev1">&gt; ++ MPI_BIN_DIR=/opt/mpi/openmpi/1.3-intel-11.0/bin
</span><br>
<span class="quotelev1">&gt; ++ export MPI_BIN_DIR
</span><br>
<span class="quotelev1">&gt; ++ MPI_INC_DIR=/opt/mpi/openmpi/1.3-intel-11.0/include
</span><br>
<span class="quotelev1">&gt; ++ export MPI_INC_DIR
</span><br>
<span class="quotelev1">&gt; ++ MPI_LIB_DIR=/opt/mpi/openmpi/1.3-intel-11.0/lib
</span><br>
<span class="quotelev1">&gt; ++ export MPI_LIB_DIR
</span><br>
<span class="quotelev1">&gt; ++ MPI_MAN_DIR=/opt/mpi/openmpi/1.3-intel-11.0/man
</span><br>
<span class="quotelev1">&gt; ++ export MPI_MAN_DIR
</span><br>
<span class="quotelev1">&gt; ++ MPI_VERSION=1.3-intel-11.0
</span><br>
<span class="quotelev1">&gt; ++ export MPI_VERSION
</span><br>
<span class="quotelev1">&gt; ++ NLSPATH=/opt/compiler/intel//cc/11.0.074/idb/intel64/locale/%l_%t/ 
</span><br>
<span class="quotelev1">&gt; %N
</span><br>
<span class="quotelev1">&gt; ++ export NLSPATH
</span><br>
<span class="quotelev1">&gt; ++ PATH=/opt/mpi/openmpi/1.3-intel-11.0/bin:/opt/compiler/intel//fc/ 
</span><br>
<span class="quotelev1">&gt; 11.0.074/bin/intel64:/opt/compiler/intel//java/jre1.6.0_14/bin:/opt/ 
</span><br>
<span class="quotelev1">&gt; compiler/intel//cc/11.0.074/bin/intel64:/nfs/home4/HLRS/hlrs/ 
</span><br>
<span class="quotelev1">&gt; hpcjgrac/bin:/usr/local/bin:/usr/lib64/qt-3.3/bin:/opt/system/maui/ 
</span><br>
<span class="quotelev1">&gt; 3.2.6p21/bin:/usr/kerberos/bin:/bin:/usr/bin
</span><br>
<span class="quotelev1">&gt; ++ export PATH
</span><br>
<span class="quotelev1">&gt; ++ _LMFILES_=/opt/system/modulefiles/system/maui/3.2.6p21:/opt/ 
</span><br>
<span class="quotelev1">&gt; modulefiles/compiler/intel/11.0:/opt/modulefiles/mpi/openmpi/1.3- 
</span><br>
<span class="quotelev1">&gt; intel-11.0
</span><br>
<span class="quotelev1">&gt; ++ export _LMFILES_
</span><br>
<span class="quotelev1">&gt; + module list
</span><br>
<span class="quotelev1">&gt; ++ /opt/system/modules/3.2.6/Modules/3.2.6/bin/modulecmd bash list
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;  1) system/maui/3.2.6p21         3) mpi/openmpi/1.3-intel-11.0
</span><br>
<span class="quotelev1">&gt;  2) compiler/intel/11.0
</span><br>
<span class="quotelev1">&gt; + eval
</span><br>
<span class="quotelev1">&gt; + cd /nfs/nas/homeB/home4/HLRS/hlrs/hpcjgrac/prace/benchmark/ 
</span><br>
<span class="quotelev1">&gt; applications/gadget/tmp/GADGET_NEHALEM- 
</span><br>
<span class="quotelev1">&gt; HLRS_StrongScaling_2048_i000083/n256p8t1_t001_i01
</span><br>
<span class="quotelev1">&gt; ++ date
</span><br>
<span class="quotelev1">&gt; + echo '&lt;jobstart at=&quot;Fri Jun 19 09:50:05 CEST 2009&quot; /&gt;'
</span><br>
<span class="quotelev1">&gt; + mpiexec time /nfs/nas/homeB/home4/HLRS/hlrs/hpcjgrac/prace/ 
</span><br>
<span class="quotelev1">&gt; benchmark/applications/gadget/tmp/GADGET_NEHALEM- 
</span><br>
<span class="quotelev1">&gt; HLRS_StrongScaling_2048_i000083/n256p8t1_t001_i01/GADGET_NEHALEM- 
</span><br>
<span class="quotelev1">&gt; HLRS_cname_NEHALEM-HLRS.exe param.txt
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],5][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],5][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],1][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],1][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],2][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],2][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],2][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],3][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],3][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],4][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],4][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],7][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n100501][[40339,1],7][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],4] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],7] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],6] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],5] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],1] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],2] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n100501:14587] [[40339,0],0]-[[40339,1],3] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1551][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1551][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1547][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201:3588] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev1">&gt; [n033201:3588] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n033201:3588] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [n033201:3588] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [n033102][[40339,1],1538][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033102][[40339,1],1543][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1549][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1545][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1545][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033102][[40339,1],1540][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033102][[40339,1],1540][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033102][[40339,1],1541][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033102][[40339,1],1536][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1544][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1550][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1550][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1548][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1548][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1546][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201][[40339,1],1546][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1553][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1555][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1555][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1556][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1552][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1552][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:804:rml_recv_cb] error in endpoint reply  
</span><br>
<span class="quotelev1">&gt; start connect
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1558][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1559][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033202][[40339,1],1557][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c:459:qp_create_one] error creating qp errno  
</span><br>
<span class="quotelev1">&gt; says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [n033201:03576] [[40339,0],193]-[[40339,1],1544]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033102:03498] [[40339,0],192]-[[40339,1],1538]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033102:03498] [[40339,0],192]-[[40339,1],1543]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033201:03576] [[40339,0],193]-[[40339,1],1551]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033102:03498] [[40339,0],192]-[[40339,1],1540]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033201:03576] [[40339,0],193]-[[40339,1],1549]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033202:03719] [[40339,0],194]-[[40339,1],1555]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [n033202:03719] [[40339,0],194]-[[40339,1],1552]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; Command exited with non-zero status 16
</span><br>
<span class="quotelev1">&gt; 64.36user 3.48system 1:20.39elapsed 84%CPU (0avgtext+0avgdata  
</span><br>
<span class="quotelev1">&gt; 0maxresident)k
</span><br>
<span class="quotelev1">&gt; 0inputs+0outputs (7major+125286minor)pagefaults 0swaps
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 1538 with PID 3501 on
</span><br>
<span class="quotelev1">&gt; node n033102 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [n100501:14587] 11 more processes have sent help message help-mpi- 
</span><br>
<span class="quotelev1">&gt; errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [n100501:14587] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to  
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt; ++ date
</span><br>
<span class="quotelev1">&gt; + echo '&lt;jobend at=&quot;Fri Jun 19 09:51:27 CEST 2009&quot; /&gt;'
</span><br>
<span class="quotelev1">&gt; &lt;ATT3807088.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
<li><strong>Previous message:</strong> <a href="9784.php">Jose Gracia: "[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp"</a>
<li><strong>In reply to:</strong> <a href="9784.php">Jose Gracia: "[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
<li><strong>Reply:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
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
