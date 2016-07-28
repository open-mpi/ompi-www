<?
$subject_val = "[OMPI users] python-mrmpi() failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 15:09:15 2012" -->
<!-- isoreceived="20120904190915" -->
<!-- sent="Tue, 4 Sep 2012 15:09:00 -0400" -->
<!-- isosent="20120904190900" -->
<!-- name="mariana Vargas" -->
<!-- email="mmarianav_at_[hidden]" -->
<!-- subject="[OMPI users] python-mrmpi() failed" -->
<!-- id="82764594-CBFD-45EC-A577-2C0833A3D5E9_at_yahoo.com.mx" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDD1F404-90D9-4F3E-89F3-670CF30E06D7_at_yahoo.com.mx" -->
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
<strong>Subject:</strong> [OMPI users] python-mrmpi() failed<br>
<strong>From:</strong> mariana Vargas (<em>mmarianav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 15:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20124.php">San B: "[OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<li><strong>Previous message:</strong> <a href="20122.php">David Warren: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
<li><strong>Reply:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I 'am new in this, I have some codes that use mpi for python and I  
<br>
just installed (openmpi, mrmpi, mpi4py) in my home (from a  cluster  
<br>
account) without apparent errors and I tried to perform this simple  
<br>
test in python and I get the following error related with openmpi,  
<br>
could you help to figure out what is going on? I attach as many  
<br>
informations as possible...
<br>
<p>Thanks.
<br>
<p>Mariana
<br>
<p><p>&nbsp;From a python console
<br>
<span class="quotelev3"> &gt;&gt;&gt; from mrmpi import mrmpi
</span><br>
<span class="quotelev3"> &gt;&gt;&gt; mr=mrmpi()
</span><br>
[ferrari:23417] mca: base: component_find: unable to open /home/ 
<br>
mvargas/lib/openmpi/mca_paffinity_hwloc: /home/mvargas/lib/openmpi/ 
<br>
mca_paffinity_hwloc.so: undefined symbol: opal_hwloc_topology (ignored)
<br>
[ferrari:23417] mca: base: component_find: unable to open /home/ 
<br>
mvargas/lib/openmpi/mca_carto_auto_detect: /home/mvargas/lib/openmpi/ 
<br>
mca_carto_auto_detect.so: undefined symbol:  
<br>
opal_carto_base_graph_get_host_graph_fn (ignored)
<br>
[ferrari:23417] mca: base: component_find: unable to open /home/ 
<br>
mvargas/lib/openmpi/mca_carto_file: /home/mvargas/lib/openmpi/ 
<br>
mca_carto_file.so: undefined symbol:  
<br>
opal_carto_base_graph_get_host_graph_fn (ignored)
<br>
[ferrari:23417] mca: base: component_find: unable to open /home/ 
<br>
mvargas/lib/openmpi/mca_shmem_mmap: /home/mvargas/lib/openmpi/ 
<br>
mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
<br>
[ferrari:23417] mca: base: component_find: unable to open /home/ 
<br>
mvargas/lib/openmpi/mca_shmem_posix: /home/mvargas/lib/openmpi/ 
<br>
mca_shmem_posix.so: undefined symbol: opal_show_help (ignored)
<br>
[ferrari:23417] mca: base: component_find: unable to open /home/ 
<br>
mvargas/lib/openmpi/mca_shmem_sysv: /home/mvargas/lib/openmpi/ 
<br>
mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[ferrari:23417] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file  
<br>
runtime/orte_init.c at line 79
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or  
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
[ferrari:23417] Local abort before MPI_INIT completed successfully;  
<br>
not able to aggregate error messages, and not able to guarantee that  
<br>
all other processes were killed!
<br>
<p><p><p>echo $PATH
<br>
<p>/home/mvargas/idl/pro/LibsSDSSS/idlutilsv5_4_15/bin:/usr/local/itt/ 
<br>
idl70/bin:/opt/local/bin:/home/mvargas/bin:/home/mvargas/lib:/home/ 
<br>
mvargas/lib/openmpi/:/home/mvargas:/home/vargas/bin/:/home/mvargas/idl/ 
<br>
pro/LibsSDSSS/idlutilsv5_4_15/bin:/usr/local/itt/idl70/bin:/opt/local/ 
<br>
bin:/home/mvargas/bin:/home/mvargas/lib:/home/mvargas/lib/openmpi/:/ 
<br>
home/mvargas:/home/vargas/bin/:/usr/lib64/qt3.3/bin:/usr/kerberos/bin:/ 
<br>
usr/local/bin:/bin:/usr/bin:/opt/pbs/bin:/opt/pbs/lib/xpbs/bin:/opt/ 
<br>
envswitcher/bin:/opt/pvm3/lib:/opt/pvm3/lib/LINUX64:/opt/pvm3/bin/ 
<br>
LINUX64:/opt/c3-4/
<br>
<p>echo $LD_LIBRARY_PATH
<br>
/usr/local/mpich2/lib:/home/mvargas/lib:/home/mvargas/:/home/mvargas/ 
<br>
lib64:/home/mvargas/lib/openmpi/:/usr/lib64/openmpi/1.4-gcc/lib/:/user/ 
<br>
local/:/usr/local/mpich2/lib:/home/mvargas/lib:/home/mvargas/:/home/ 
<br>
mvargas/lib64:/home/mvargas/lib/openmpi/:/usr/lib64/openmpi/1.4-gcc/ 
<br>
lib/:/user/local/:
<br>
<p>Version: openmpi-1.6
<br>
<p>

<br><p>
<p><p><p>mpirun --bynode --tag-output ompi_info -v ompi full --parsable
<br>
[1,0]&lt;stdout&gt;:package:Open MPI mvargas_at_ferrari Distribution
<br>
[1,0]&lt;stdout&gt;:ompi:version:full:1.6
<br>
[1,0]&lt;stdout&gt;:ompi:version:svn:r26429
<br>
[1,0]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
<br>
[1,0]&lt;stdout&gt;:orte:version:full:1.6
<br>
[1,0]&lt;stdout&gt;:orte:version:svn:r26429
<br>
[1,0]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
<br>
[1,0]&lt;stdout&gt;:opal:version:full:1.6
<br>
[1,0]&lt;stdout&gt;:opal:version:svn:r26429
<br>
[1,0]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
<br>
[1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
<br>
[1,0]&lt;stdout&gt;:ident:1.6
<br>
<p><p>eth0      Link encap:Ethernet  HWaddr 00:30:48:95:99:CC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.2.1  Bcast:192.168.2.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::230:48ff:fe95:99cc/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:4739875255 errors:0 dropped:1636 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:5196871012 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:4959384349297 (4.5 TiB)  TX bytes:3933641883577 (3.5  
<br>
TiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:ef300000-ef320000
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:30:48:95:99:CD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:128.2.116.104  Bcast:128.2.119.255  Mask: 
<br>
255.255.248.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::230:48ff:fe95:99cd/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:2645952109 errors:0 dropped:13353 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:2974763570 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:2024044043824 (1.8 TiB)  TX bytes:3390935387820 (3.0  
<br>
TiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:ef400000-ef420000
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:143359307 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:143359307 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:80413513464 (74.8 GiB)  TX bytes:80413513464 (74.8  
<br>
GiB)
<br>
<p><p><p><p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20123/files.tar.gz">files.tar.gz</a>
</ul>
<!-- attachment="files.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20124.php">San B: "[OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<li><strong>Previous message:</strong> <a href="20122.php">David Warren: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
<li><strong>Reply:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
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
