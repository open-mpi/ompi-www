<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 10:17:30 2011" -->
<!-- isoreceived="20110428141730" -->
<!-- sent="Thu, 28 Apr 2011 10:17:23 -0400" -->
<!-- isosent="20110428141723" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="BDD19306-B5AC-407C-B8C7-8E85E6573D70_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DFD9E196-B173-4152-827C-885D72479E3F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_cpc_include rdmacm questions<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 10:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16382.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16371.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is the output of running with verbose 100, mpirun --mca btl_openib_cpc_include rdmacm --mca btl_base_verbose 100 NPmpi
<br>
<p>
<br><p>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: Looking for btl components
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: Looking for btl components
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: opening btl components
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: found loaded component ofud
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component ofud has no register function
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component ofud open function successful
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: found loaded component openib
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component openib has no register function
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component openib open function successful
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: found loaded component self
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component self has no register function
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component self open function successful
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: found loaded component sm
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component sm has no register function
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component sm open function successful
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: found loaded component tcp
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component tcp has no register function
<br>
[nyx0665.engin.umich.edu:06399] mca: base: components_open: component tcp open function successful
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: opening btl components
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: found loaded component ofud
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component ofud has no register function
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component ofud open function successful
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: found loaded component openib
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component openib has no register function
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component openib open function successful
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: found loaded component self
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component self has no register function
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component self open function successful
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: found loaded component sm
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component sm has no register function
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component sm open function successful
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: found loaded component tcp
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component tcp has no register function
<br>
[nyx0666.engin.umich.edu:07210] mca: base: components_open: component tcp open function successful
<br>
[nyx0665.engin.umich.edu:06399] select: initializing btl component ofud
<br>
[nyx0665.engin.umich.edu:06399] select: init of component ofud returned failure
<br>
[nyx0665.engin.umich.edu:06399] select: module ofud unloaded
<br>
[nyx0665.engin.umich.edu:06399] select: initializing btl component openib
<br>
[nyx0666.engin.umich.edu:07210] select: initializing btl component ofud
<br>
[nyx0666.engin.umich.edu:07210] select: init of component ofud returned failure
<br>
[nyx0666.engin.umich.edu:07210] select: module ofud unloaded
<br>
[nyx0666.engin.umich.edu:07210] select: initializing btl component openib
<br>
[nyx0665.engin.umich.edu:06399] openib BTL: rdmacm IP address not found on port
<br>
[nyx0665.engin.umich.edu:06399] openib BTL: rdmacm CPC unavailable for use on mthca0:1; skipped
<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;Local host:           nyx0665.engin.umich.edu
<br>
&nbsp;&nbsp;Local device:         mthca0
<br>
&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;CPCs attempted:       rdmacm
<br>
--------------------------------------------------------------------------
<br>
[nyx0665.engin.umich.edu:06399] select: init of component openib returned failure
<br>
[nyx0665.engin.umich.edu:06399] select: module openib unloaded
<br>
[nyx0665.engin.umich.edu:06399] select: initializing btl component self
<br>
[nyx0665.engin.umich.edu:06399] select: init of component self returned success
<br>
[nyx0665.engin.umich.edu:06399] select: initializing btl component sm
<br>
[nyx0665.engin.umich.edu:06399] select: init of component sm returned success
<br>
[nyx0665.engin.umich.edu:06399] select: initializing btl component tcp
<br>
[nyx0665.engin.umich.edu:06399] select: init of component tcp returned success
<br>
[nyx0666.engin.umich.edu:07210] openib BTL: rdmacm IP address not found on port
<br>
[nyx0666.engin.umich.edu:07210] openib BTL: rdmacm CPC unavailable for use on mthca0:1; skipped
<br>
[nyx0666.engin.umich.edu:07210] select: init of component openib returned failure
<br>
[nyx0666.engin.umich.edu:07210] select: module openib unloaded
<br>
[nyx0666.engin.umich.edu:07210] select: initializing btl component self
<br>
[nyx0666.engin.umich.edu:07210] select: init of component self returned success
<br>
[nyx0666.engin.umich.edu:07210] select: initializing btl component sm
<br>
[nyx0666.engin.umich.edu:07210] select: init of component sm returned success
<br>
[nyx0666.engin.umich.edu:07210] select: initializing btl component tcp
<br>
[nyx0666.engin.umich.edu:07210] select: init of component tcp returned success
<br>
0: nyx0665
<br>
1: nyx0666
<br>
[nyx0666.engin.umich.edu:07210] btl: tcp: attempting to connect() to address 10.164.2.153 on port 516
<br>
[nyx0665.engin.umich.edu:06399] btl: tcp: attempting to connect() to address 10.164.2.154 on port 4
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes   1948 times --&gt;      0.14 Mbps in      53.29 usec
<br>
&nbsp;&nbsp;1:       2 bytes   1876 times --&gt;      0.29 Mbps in      52.74 usec
<br>
&nbsp;&nbsp;2:       3 bytes   1896 times --&gt;      0.43 Mbps in      53.04 usec
<br>
&nbsp;&nbsp;3:       4 bytes   1256 times --&gt;      0.57 Mbps in      53.55 usec
<br>
&nbsp;&nbsp;4:       6 bytes   1400 times --&gt;      0.85 Mbps in      54.03 usec
<br>
&nbsp;&nbsp;5:       8 bytes    925 times --&gt; mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 6399 on node nyx0665.engin.umich.edu exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>[nyx0665.engin.umich.edu:06398] 1 more process has sent help message help-mpi-btl-openib-cpc-base.txt / no cpcs for port
<br>
[nyx0665.engin.umich.edu:06398] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
<p>
<br><p>
<p><p>We were being bit by a number of codes hanging in collectives, and was resolved by using rdmacm.  We tried setting this as default till the two bugs in bugzilla are resolved as a work around. Then we hit this problem on our DDR/SDR gear.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 28, 2011, at 8:07 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 27, 2011, at 10:02 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Argh, our messed up environment with three generations on infiniband bit us,
</span><br>
<span class="quotelev2">&gt;&gt; Setting openib_cpc_include to rdmacm causes ib to not be used on our old DDR ib on some of our hosts.  Note that jobs will never run across our old DDR ib and our new QDR stuff where rdmacm does work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm -- odd.  I use RDMACM on some old DDR (and SDR!) IB hardware and it seems to work fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any indication as to why OMPI is refusing to use rdmacm on your older hardware, other than &quot;No OF connection schemes reported...&quot;?  Try running with --mca btl_base_verbose 100 (beware: it will be a truckload of output).  Make sure that you have rdmacm support available on those machines, both in OMPI and in OFED/the OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am doing some testing with:
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl_openib_cpc_include=rdmacm,oob,xoob
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I want to know is there a way to tell mpirun to 'dump all resolved mca settings'  Or something similar. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure what you're asking here -- do you want to override MCA params on specific hosts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16382.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16371.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
