<?
$subject_val = "Re: [OMPI users] python-mrmpi() failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 08:05:35 2012" -->
<!-- isoreceived="20120906120535" -->
<!-- sent="Thu, 6 Sep 2012 08:05:30 -0400" -->
<!-- isosent="20120906120530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] python-mrmpi() failed" -->
<!-- id="E8AEFB84-8702-432C-9FB0-0C34451B02D8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="82764594-CBFD-45EC-A577-2C0833A3D5E9_at_yahoo.com.mx" -->
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
<strong>Subject:</strong> Re: [OMPI users] python-mrmpi() failed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 08:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
<li><strong>Previous message:</strong> <a href="20139.php">Jeff Squyres: "Re: [OMPI users] Regarding the Pthreads"</a>
<li><strong>In reply to:</strong> <a href="20123.php">mariana Vargas: "[OMPI users] python-mrmpi() failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2012, at 3:09 PM, mariana Vargas wrote:
<br>
<p><span class="quotelev1">&gt; I 'am new in this, I have some codes that use mpi for python and I  
</span><br>
<span class="quotelev1">&gt; just installed (openmpi, mrmpi, mpi4py) in my home (from a  cluster  
</span><br>
<span class="quotelev1">&gt; account) without apparent errors and I tried to perform this simple  
</span><br>
<span class="quotelev1">&gt; test in python and I get the following error related with openmpi,  
</span><br>
<span class="quotelev1">&gt; could you help to figure out what is going on? I attach as many  
</span><br>
<span class="quotelev1">&gt; informations as possible...
</span><br>
<p>I think I know what's happening here.
<br>
<p>It's a complicated linker issue that we've discussed before -- I'm not sure whether it was on this users list or the OMPI developers list.  
<br>
<p>The short version is that you should remove your prior Open MPI installation, and then rebuild Open MPI with the --disable-dlopen configure switch.  See if that fixes the problem.
<br>
<p><span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mariana
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From a python console
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; from mrmpi import mrmpi
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; mr=mrmpi()
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] mca: base: component_find: unable to open /home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib/openmpi/mca_paffinity_hwloc: /home/mvargas/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_paffinity_hwloc.so: undefined symbol: opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] mca: base: component_find: unable to open /home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib/openmpi/mca_carto_auto_detect: /home/mvargas/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_carto_auto_detect.so: undefined symbol:  
</span><br>
<span class="quotelev1">&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] mca: base: component_find: unable to open /home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib/openmpi/mca_carto_file: /home/mvargas/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_carto_file.so: undefined symbol:  
</span><br>
<span class="quotelev1">&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] mca: base: component_find: unable to open /home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib/openmpi/mca_shmem_mmap: /home/mvargas/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] mca: base: component_find: unable to open /home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib/openmpi/mca_shmem_posix: /home/mvargas/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_shmem_posix.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] mca: base: component_find: unable to open /home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib/openmpi/mca_shmem_sysv: /home/mvargas/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; [ferrari:23417] Local abort before MPI_INIT completed successfully;  
</span><br>
<span class="quotelev1">&gt; not able to aggregate error messages, and not able to guarantee that  
</span><br>
<span class="quotelev1">&gt; all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/mvargas/idl/pro/LibsSDSSS/idlutilsv5_4_15/bin:/usr/local/itt/ 
</span><br>
<span class="quotelev1">&gt; idl70/bin:/opt/local/bin:/home/mvargas/bin:/home/mvargas/lib:/home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib/openmpi/:/home/mvargas:/home/vargas/bin/:/home/mvargas/idl/ 
</span><br>
<span class="quotelev1">&gt; pro/LibsSDSSS/idlutilsv5_4_15/bin:/usr/local/itt/idl70/bin:/opt/local/ 
</span><br>
<span class="quotelev1">&gt; bin:/home/mvargas/bin:/home/mvargas/lib:/home/mvargas/lib/openmpi/:/ 
</span><br>
<span class="quotelev1">&gt; home/mvargas:/home/vargas/bin/:/usr/lib64/qt3.3/bin:/usr/kerberos/bin:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/bin:/bin:/usr/bin:/opt/pbs/bin:/opt/pbs/lib/xpbs/bin:/opt/ 
</span><br>
<span class="quotelev1">&gt; envswitcher/bin:/opt/pvm3/lib:/opt/pvm3/lib/LINUX64:/opt/pvm3/bin/ 
</span><br>
<span class="quotelev1">&gt; LINUX64:/opt/c3-4/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/mpich2/lib:/home/mvargas/lib:/home/mvargas/:/home/mvargas/ 
</span><br>
<span class="quotelev1">&gt; lib64:/home/mvargas/lib/openmpi/:/usr/lib64/openmpi/1.4-gcc/lib/:/user/ 
</span><br>
<span class="quotelev1">&gt; local/:/usr/local/mpich2/lib:/home/mvargas/lib:/home/mvargas/:/home/ 
</span><br>
<span class="quotelev1">&gt; mvargas/lib64:/home/mvargas/lib/openmpi/:/usr/lib64/openmpi/1.4-gcc/ 
</span><br>
<span class="quotelev1">&gt; lib/:/user/local/:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version: openmpi-1.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --bynode --tag-output ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:package:Open MPI mvargas_at_ferrari Distribution
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:30:48:95:99:CC
</span><br>
<span class="quotelev1">&gt;          inet addr:192.168.2.1  Bcast:192.168.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::230:48ff:fe95:99cc/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:4739875255 errors:0 dropped:1636 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:5196871012 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;          RX bytes:4959384349297 (4.5 TiB)  TX bytes:3933641883577 (3.5  
</span><br>
<span class="quotelev1">&gt; TiB)
</span><br>
<span class="quotelev1">&gt;          Memory:ef300000-ef320000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:30:48:95:99:CD
</span><br>
<span class="quotelev1">&gt;          inet addr:128.2.116.104  Bcast:128.2.119.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.248.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::230:48ff:fe95:99cd/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:2645952109 errors:0 dropped:13353 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:2974763570 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;          RX bytes:2024044043824 (1.8 TiB)  TX bytes:3390935387820 (3.0  
</span><br>
<span class="quotelev1">&gt; TiB)
</span><br>
<span class="quotelev1">&gt;          Memory:ef400000-ef420000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:143359307 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:143359307 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:80413513464 (74.8 GiB)  TX bytes:80413513464 (74.8  
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; &lt;files.tar.gz&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
<li><strong>Previous message:</strong> <a href="20139.php">Jeff Squyres: "Re: [OMPI users] Regarding the Pthreads"</a>
<li><strong>In reply to:</strong> <a href="20123.php">mariana Vargas: "[OMPI users] python-mrmpi() failed"</a>
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
