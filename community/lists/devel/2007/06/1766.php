<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 11:16:28 2007" -->
<!-- isoreceived="20070626151628" -->
<!-- sent="Tue, 26 Jun 2007 17:06:26 +0200" -->
<!-- isosent="20070626150626" -->
<!-- name="Georg Wassen" -->
<!-- email="wassen_at_[hidden]" -->
<!-- subject="[OMPI devel]  problem with openib, was: send/recv during initialization" -->
<!-- id="46812B72.8020600_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4680EDA3.3010603_at_lfbs.rwth-aachen.de" -->
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
<strong>From:</strong> Georg Wassen (<em>wassen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 11:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Previous message:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I temporarily worked around my former problem by using synchronous 
<br>
communication and shifting the initialization
<br>
into the first call of a collective operation.
<br>
<p>But nevertheless, I found a performance bug in btl_openib.
<br>
<p>When I execute the attached sendrecv.c on 4 (or more) nodes of a Pentium 
<br>
D Cluster with Infinniband,
<br>
each receiving process gets only 8 messages in some seconds and then 
<br>
does nothing for at least 20 sec.
<br>
(I executed the following command and hit Ctrl-C 20 sec. after the last 
<br>
output)
<br>
<p>wassen_at_elrohir:~/src/mpi_test$ mpirun -np 4 -host 
<br>
pd-01,pd-02,pd-03,pd-04 -mca btl openib,self sendrecv
<br>
[3] received data[0]=1
<br>
[1] received data[0]=1
<br>
[1] received data[1]=2
<br>
[1] received data[2]=3
<br>
[1] received data[3]=4
<br>
[1] received data[4]=5
<br>
[1] received data[5]=6
<br>
[1] received data[6]=7
<br>
[1] received data[7]=8
<br>
[2] received data[0]=1
<br>
[2] received data[1]=2
<br>
[2] received data[2]=3
<br>
[2] received data[3]=4
<br>
[2] received data[4]=5
<br>
[2] received data[5]=6
<br>
[2] received data[6]=7
<br>
[2] received data[7]=8
<br>
[3] received data[1]=2
<br>
[3] received data[2]=3
<br>
[3] received data[3]=4
<br>
[3] received data[4]=5
<br>
[3] received data[5]=6
<br>
[3] received data[6]=7
<br>
[3] received data[7]=8
<br>
{20 sec. later...}
<br>
mpirun: killing job...
<br>
<p>When I execute the same program with &quot;-mca btl udapl,self&quot; or &quot;-mca btl 
<br>
tcp,self&quot;, it runs fine and terminates in less than a second.
<br>
Tried with Open MPI 1.2.1 and 1.2.3. The test program runs fine with 
<br>
several other MPIs (intel-mpi and mvapich with InfinniBand, mp-mpich 
<br>
with SCI).
<br>
<p>I hope, my information suffices to reproduce the problem.
<br>
<p>Best regards,
<br>
Georg Wassen.
<br>
<p>ps. I know that I could transmit the array in one MPI_Send, but this is 
<br>
extracted from my real problem.
<br>
<p><p><p>--------------------1st node-----------------------
<br>
wassen_at_pd-01:~$ /opt/infiniband/bin/ibv_devinfo
<br>
hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         1.2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c902:0020:b680
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c902:0020:b683
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_0230000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>---------------------------------------------------------
<br>
wassen_at_pd-01:~$ /sbin/ifconfig
<br>
...
<br>
ib0       Protokoll:UNSPEC  Hardware Adresse 
<br>
00-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet Adresse:192.168.0.11  Bcast:192.168.0.255  
<br>
Maske:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 Adresse: fe80::202:c902:20:b681/64 
<br>
G&#252;ltigkeitsbereich:Verbindung
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:260 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:331 errors:0 dropped:2 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kollisionen:0 Sendewarteschlangenl&#228;nge:128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:14356 (14.0 KiB)  TX bytes:24960 (24.3 KiB)
<br>
-------------------------------------------------------
<br>
<p>


<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1766/sendrecv.c">sendrecv.c</a>
</ul>
<!-- attachment="sendrecv.c" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1766/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1766/ompi_info_all.txt.gz">ompi_info_all.txt.gz</a>
</ul>
<!-- attachment="ompi_info_all.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Previous message:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1763.php">Georg Wassen: "[OMPI devel] send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
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
