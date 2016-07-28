<?
$subject_val = "[OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and AlltoAll call";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 13:33:47 2009" -->
<!-- isoreceived="20090625173347" -->
<!-- sent="Thu, 25 Jun 2009 10:29:39 -0700" -->
<!-- isosent="20090625172939" -->
<!-- name="D'Auria, Raffaella" -->
<!-- email="dauria_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and AlltoAll call" -->
<!-- id="43F64E86355A744E9D51506B6C6783B904C36160_at_EM2.ad.ucla.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and AlltoAll call<br>
<strong>From:</strong> D'Auria, Raffaella (<em>dauria_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 13:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9719.php">Mostyn Lewis: "[OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9717.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
<li><strong>Reply:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I have been encountering a fatal type &quot;error polling LP CQ with status RETRY EXCEEDED ERROR status number 12&quot; whenever I try to run a simple MPI code (see below) that performs an AlltoAll call.
<br>
<p>We are running the OpenMPI 1.3.2 stack on top of the OFED 1.4.1 stack. Our cluster is composed of mostly Mellanox HCAs (MT_03B0140001) and some Qlogic (InfiniPath_QLE724) cards.
<br>
<p><p>The problem manifests itself as soon as the size of the vector, which components are being swapped between processes with the all to all call, is equal or larger than 68MB. 
<br>
<p>Please note that I have this problem only when at least one of the computational nodes in the host list of mpiexec is a node with the qlogic card InfiniPath_QLE724. 
<br>
<p>The code runs with no problem if all of the host in the host list of mpiexec have Mellanox HCA (MT_03B0140001). 
<br>
<p>Please note that I can run the OSU mpi tests and the example codes in the openmpi distribution across the nodes of our heterogeneous IB fabric with no problem. The only time, so far, we have encountered a problem is with the alltoall call when the vector which componets are swapped across nodes is larger than 68MB at least (as stated above).
<br>
<p>Please note that when I querry the nodes with ibstat or ibv_devinfo I see that the links are up. This is the ibv_devinfo from one of the Qlogic nodes:
<br>
<p>-----------------------------------------------
<br>
hca_id: ipath0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0011:7500:00ff:7530
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0011:7500:00ff:7530
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x1077
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 29216
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0x2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       InfiniPath_QLE7240
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               329
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
-----------------------------------------------
<br>
<p>This is the ibv_devinfo from one of the Mellanox nodes:
<br>
<p>-----------------------------------------------
<br>
hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         1.2.936
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c902:0027:c650
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c902:0027:c653
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_03B0140001
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               209
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
&nbsp;
<br>
-----------------------------------------------
<br>
<p>I was wondering whether, perhaps, this is a bug with the openMPI stack.
<br>
<p>Here is the code that causes the problem:
<br>
<p>-----------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;iostream&gt;
<br>
using namespace std;
<br>
<p>void a2a(double *a, double *b, int n1, int n2);
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;const int n1 = 4096, n2 = 4096, numIT = 100;
<br>
&nbsp;&nbsp;int rank, nproc;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;double *a = (double *)malloc(sizeof(*a)*n1*n2);
<br>
&nbsp;&nbsp;double *b = (double *)malloc(sizeof(*a)*n1*n2);
<br>
<p>&nbsp;&nbsp;if (rank==0) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Number of processes = &quot; &lt;&lt; nproc &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Alltoall data size per process = &quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; sizeof(*a)*n1*n2/(1024*1024) &lt;&lt; &quot; MB\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;for (int i=0; i&lt;n1*n2; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a[i] = (double) rand() / (RAND_MAX + 1.0);
<br>
<p>&nbsp;&nbsp;for (int i=0; i&lt;numIT; ++i) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double t1 = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a2a(a,b,n1,n2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double t2 = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank==0) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;iter %4d  wall-clock seconds = %.5e\n&quot;,i,t2-t1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;free(a); free(b);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>void a2a(double *a, double *b, const int n1, const int n2)
<br>
{
<br>
&nbsp;&nbsp;int nproc;
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
<br>
&nbsp;&nbsp;int cnt = n1*n2/nproc;
<br>
&nbsp;&nbsp;MPI_Alltoall(a, cnt, MPI_DOUBLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b, cnt, MPI_DOUBLE, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;return;
<br>
}
<br>
-----------------------------------------------
<br>
<p>Please note I compile the above program with: 
<br>
<p>mpic++ -o a2a a2a.cpp
<br>
<p>Please note that to avoid benign kind of warnings (coming from the
<br>
qlogic nodes) I had to specify the following MCA parameters in the /etc directory of the openmpi:
<br>
<p>btl_openib_max_inline_data = 0
<br>
btl_openib_ib_timeout = 30
<br>
<p>I run the code with:
<br>
<p>mpiexec -n 16 -hostfile mach1 ./a2a
<br>
<p>and mach1 is:
<br>
<p>-----------------------------------------------
<br>
n92  slots=6
<br>
n147 slots=4
<br>
n243 slots=6
<br>
-----------------------------------------------
<br>
<p>And here is the output I get if at least one of the nodes on which the
<br>
program is executed is a qlogic InfiniPath_QLE7240 one:
<br>
<p>-----------------------------------------------
<br>
<p>Number of processes = 16
<br>
Alltoall data size per process = 128 MB
<br>
[[11772,1],11][../../../../../ompi/mca/btl/openib/btl_openib_component.c:2929:handle_wc] from n243 to: n92 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 231193640 opcode 2  vendor error 0 qp_idx 3
<br>
[[11772,1],12][../../../../../ompi/mca/btl/openib/btl_openib_component.c:2929:handle_wc] from n243 to: n147 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 141569064 opcode 2  vendor error 0 qp_idx 3
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The total number of times that the sender wishes the receiver to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retry timeout, packet sequence, etc. errors before posting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;completion error.
<br>
<p>This error typically means that there is something awry within the
<br>
InfiniBand fabric itself.  You should note the hosts on which this
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.  
<br>
<p>Two MCA parameters can be used to control Open MPI's behavior with
<br>
respect to the retry count:
<br>
<p>* btl_openib_ib_retry_count - The number of times the sender will
<br>
&nbsp;&nbsp;attempt to retry (defaulted to 7, the maximum value).
<br>
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&nbsp;&nbsp;to 10).  The actual timeout value used is calculated as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>&nbsp;&nbsp;See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
<p>Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
<p>&nbsp;&nbsp;Local host:   n243
<br>
&nbsp;&nbsp;Local device: ipath0
<br>
&nbsp;&nbsp;Peer host:    n147
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 12 with PID 27613 on
<br>
node n243 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[i01:10608] 1 more process has sent help message help-mpi-btl-openib.txt / pp retry exceeded
<br>
[i01:10608] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>-----------------------------------------------
<br>
<p>Has anybody encountered a similar problem? Does anyone have an idea
<br>
how to fix it?
<br>
<p>Thanks a lot,
<br>
<p>Raffaella.
<br>
<p>N.B.: I am attaching a compressed file with config.log (in the openmpi dir) and the output of ompi_info --all.
<br>
<p><p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9718/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9718/ofed_info.all.gz">ofed_info.all.gz</a>
</ul>
<!-- attachment="ofed_info.all.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9719.php">Mostyn Lewis: "[OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9717.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
<li><strong>Reply:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
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
