<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 28 02:25:28 2007" -->
<!-- isoreceived="20070628062528" -->
<!-- sent="Thu, 28 Jun 2007 08:25:06 +0200" -->
<!-- isosent="20070628062506" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem with openib, was: send/recv during initialization" -->
<!-- id="F6AE2B5F-89BA-4932-BDE1-65E0B7E8407C_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46812B72.8020600_at_lfbs.rwth-aachen.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-28 02:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1783.php">Jeff Squyres: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1784.php">Georg Wassen: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1784.php">Georg Wassen: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 26, 2007, at 5:06 PM, Georg Wassen wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I temporarily worked around my former problem by using synchronous  
</span><br>
<span class="quotelev1">&gt; communication and shifting the initialization
</span><br>
<span class="quotelev1">&gt; into the first call of a collective operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But nevertheless, I found a performance bug in btl_openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I execute the attached sendrecv.c on 4 (or more) nodes of a  
</span><br>
<span class="quotelev1">&gt; Pentium D Cluster with Infinniband,
</span><br>
<span class="quotelev1">&gt; each receiving process gets only 8 messages in some seconds and  
</span><br>
<span class="quotelev1">&gt; then does nothing for at least 20 sec.
</span><br>
<span class="quotelev1">&gt; (I executed the following command and hit Ctrl-C 20 sec. after the  
</span><br>
<span class="quotelev1">&gt; last output)
</span><br>
<p>This sounds like it could be a progression issue.  When the openib  
<br>
BTL is used by itself, we crank the frequency of the file descriptor  
<br>
progression engine down very low because most progression will come  
<br>
from verbs (not select/poll).  I wonder if this is somehow related.
<br>
<p>FWIW: the reason you have to use PML_CALL() is by design.  The MPI  
<br>
API has all the error checking stuff for ensuring that MPI_INIT  
<br>
completed, error checking of parameters, etc.  We never invoke the  
<br>
top-level MPI API from elsewhere in the OMPI code base (except for  
<br>
from within ROMIO; we didn't want to wholesale changes to that  
<br>
package because it would make for extreme difficulty every time we  
<br>
imported a new version).  There's fault tolerance reasons why it's  
<br>
not good to call back up to the top level MPI API, too.
<br>
<p>But I agree with Andrew; if this is init-level stuff that is not  
<br>
necessary to be exchanged on a per-communicator basis, then the modex  
<br>
is probably your best bet.  Avoid using the RML directly if possible.
<br>
<p><span class="quotelev1">&gt; wassen_at_elrohir:~/src/mpi_test$ mpirun -np 4 -host  
</span><br>
<span class="quotelev1">&gt; pd-01,pd-02,pd-03,pd-04 -mca btl openib,self sendrecv
</span><br>
<span class="quotelev1">&gt; [3] received data[0]=1
</span><br>
<span class="quotelev1">&gt; [1] received data[0]=1
</span><br>
<span class="quotelev1">&gt; [1] received data[1]=2
</span><br>
<span class="quotelev1">&gt; [1] received data[2]=3
</span><br>
<span class="quotelev1">&gt; [1] received data[3]=4
</span><br>
<span class="quotelev1">&gt; [1] received data[4]=5
</span><br>
<span class="quotelev1">&gt; [1] received data[5]=6
</span><br>
<span class="quotelev1">&gt; [1] received data[6]=7
</span><br>
<span class="quotelev1">&gt; [1] received data[7]=8
</span><br>
<span class="quotelev1">&gt; [2] received data[0]=1
</span><br>
<span class="quotelev1">&gt; [2] received data[1]=2
</span><br>
<span class="quotelev1">&gt; [2] received data[2]=3
</span><br>
<span class="quotelev1">&gt; [2] received data[3]=4
</span><br>
<span class="quotelev1">&gt; [2] received data[4]=5
</span><br>
<span class="quotelev1">&gt; [2] received data[5]=6
</span><br>
<span class="quotelev1">&gt; [2] received data[6]=7
</span><br>
<span class="quotelev1">&gt; [2] received data[7]=8
</span><br>
<span class="quotelev1">&gt; [3] received data[1]=2
</span><br>
<span class="quotelev1">&gt; [3] received data[2]=3
</span><br>
<span class="quotelev1">&gt; [3] received data[3]=4
</span><br>
<span class="quotelev1">&gt; [3] received data[4]=5
</span><br>
<span class="quotelev1">&gt; [3] received data[5]=6
</span><br>
<span class="quotelev1">&gt; [3] received data[6]=7
</span><br>
<span class="quotelev1">&gt; [3] received data[7]=8
</span><br>
<span class="quotelev1">&gt; {20 sec. later...}
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I execute the same program with &quot;-mca btl udapl,self&quot; or &quot;-mca  
</span><br>
<span class="quotelev1">&gt; btl tcp,self&quot;, it runs fine and terminates in less than a second.
</span><br>
<span class="quotelev1">&gt; Tried with Open MPI 1.2.1 and 1.2.3. The test program runs fine  
</span><br>
<span class="quotelev1">&gt; with several other MPIs (intel-mpi and mvapich with InfinniBand, mp- 
</span><br>
<span class="quotelev1">&gt; mpich with SCI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope, my information suffices to reproduce the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Georg Wassen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps. I know that I could transmit the array in one MPI_Send, but  
</span><br>
<span class="quotelev1">&gt; this is extracted from my real problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------1st node-----------------------
</span><br>
<span class="quotelev1">&gt; wassen_at_pd-01:~$ /opt/infiniband/bin/ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;        fw_ver:                         1.2.0
</span><br>
<span class="quotelev1">&gt;        node_guid:                      0002:c902:0020:b680
</span><br>
<span class="quotelev1">&gt;        sys_image_guid:                 0002:c902:0020:b683
</span><br>
<span class="quotelev1">&gt;        vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;        vendor_part_id:                 25204
</span><br>
<span class="quotelev1">&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;        board_id:                       MT_0230000001
</span><br>
<span class="quotelev1">&gt;        phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                port:   1
</span><br>
<span class="quotelev1">&gt;                        state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                        port_lid:               1
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; wassen_at_pd-01:~$ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ib0       Protokoll:UNSPEC  Hardware Adresse 00-00-04-04- 
</span><br>
<span class="quotelev1">&gt; FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet Adresse:192.168.0.11  Bcast:192.168.0.255  Maske: 
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<span class="quotelev1">&gt;          inet6 Adresse: fe80::202:c902:20:b681/64  
</span><br>
<span class="quotelev1">&gt; G&#252;ltigkeitsbereich:Verbindung
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:260 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:331 errors:0 dropped:2 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          Kollisionen:0 Sendewarteschlangenl&#228;nge:128
</span><br>
<span class="quotelev1">&gt;          RX bytes:14356 (14.0 KiB)  TX bytes:24960 (24.3 KiB)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define NUM 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;     int myrank, count;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int data[NUM] = {1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16};
</span><br>
<span class="quotelev1">&gt;     int i, j;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;count);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (myrank == 0) {
</span><br>
<span class="quotelev1">&gt;       for (i=1; i&lt;count; i++) {
</span><br>
<span class="quotelev1">&gt; 	for (j=0; j&lt;NUM; j++) {
</span><br>
<span class="quotelev1">&gt; 	  MPI_Send(&amp;data[j], 1, MPI_INT, i, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;       for (j=0; j&lt;NUM; j++) {
</span><br>
<span class="quotelev1">&gt; 	MPI_Recv(&amp;data[j], 1, MPI_INT, 0, 99, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;[%d] received data[%d]=%d\n&quot;, myrank, j, data[j]);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info_all.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1783.php">Jeff Squyres: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1781.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1784.php">Georg Wassen: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1784.php">Georg Wassen: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
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
