<?
$subject_val = "Re: [OMPI users] Connection timed out with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 16:26:40 2014" -->
<!-- isoreceived="20140131212640" -->
<!-- sent="Fri, 31 Jan 2014 16:26:39 -0500 (EST)" -->
<!-- isosent="20140131212639" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out with multiple nodes" -->
<!-- id="alpine.LRH.2.02.1401311528190.17444_at_localhost.localdomain" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Connection timed out with multiple nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection timed out with multiple nodes<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 16:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<li><strong>Maybe in reply to:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; It's the failure on readv that's the source of the trouble. What
</span><br>
<span class="quotelev1">&gt; happens if you only if_include eth2? Does it work then?
</span><br>
<p>Still hangs, details follow ... tx!
<br>
<p>o Using only eth2 with verbosity gives:
<br>
<p>[roberpj_at_bro127:~/samples/mpi_test] 
<br>
/opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl 
<br>
tcp,sm,self --mca btl_tcp_if_include eth2 --mca btl_base_verbose 100 
<br>
--host bro127,bro128 ./a.out
<br>
[bro127:30120] mca: base: components_open: Looking for btl components
<br>
[bro128:00923] mca: base: components_open: Looking for btl components
<br>
[bro127:30120] mca: base: components_open: opening btl components
<br>
[bro127:30120] mca: base: components_open: found loaded component self
<br>
[bro127:30120] mca: base: components_open: component self has no register 
<br>
function
<br>
[bro127:30120] mca: base: components_open: component self open function 
<br>
successful
<br>
[bro127:30120] mca: base: components_open: found loaded component sm
<br>
[bro127:30120] mca: base: components_open: component sm has no register 
<br>
function
<br>
[bro127:30120] mca: base: components_open: component sm open function 
<br>
successful
<br>
[bro127:30120] mca: base: components_open: found loaded component tcp
<br>
[bro127:30120] mca: base: components_open: component tcp register function 
<br>
successful
<br>
[bro127:30120] mca: base: components_open: component tcp open function 
<br>
successful
<br>
[bro128:00923] mca: base: components_open: opening btl components
<br>
[bro128:00923] mca: base: components_open: found loaded component self
<br>
[bro128:00923] mca: base: components_open: component self has no register 
<br>
function
<br>
[bro128:00923] mca: base: components_open: component self open function 
<br>
successful
<br>
[bro128:00923] mca: base: components_open: found loaded component sm
<br>
[bro128:00923] mca: base: components_open: component sm has no register 
<br>
function
<br>
[bro128:00923] mca: base: components_open: component sm open function 
<br>
successful
<br>
[bro128:00923] mca: base: components_open: found loaded component tcp
<br>
[bro128:00923] mca: base: components_open: component tcp register function 
<br>
successful
<br>
[bro128:00923] mca: base: components_open: component tcp open function 
<br>
successful
<br>
[bro127:30120] select: initializing btl component self
<br>
[bro127:30120] select: init of component self returned success
<br>
[bro127:30120] select: initializing btl component sm
<br>
[bro127:30120] select: init of component sm returned success
<br>
[bro127:30120] select: initializing btl component tcp
<br>
[bro127:30120] select: init of component tcp returned success
<br>
[bro128:00923] select: initializing btl component self
<br>
[bro128:00923] select: init of component self returned success
<br>
[bro128:00923] select: initializing btl component sm
<br>
[bro128:00923] select: init of component sm returned success
<br>
[bro128:00923] select: initializing btl component tcp
<br>
[bro128:00923] select: init of component tcp returned success
<br>
Number of processes = 2
<br>
Test repeated 3 times for reliability
<br>
[bro127:30120] btl: tcp: attempting to connect() to address 10.29.4.128 on 
<br>
port 4
<br>
[bro128:00923] btl: tcp: attempting to connect() to address 10.29.4.127 on 
<br>
port 4
<br>
I am process 0 on node bro127
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
I am process 1 on node bro128
<br>
P1: Waiting to receive from to P0
<br>
[bro127][[6346,1],0][../../../../../../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
<br>
<p>o The top output and gdb full backtraces of both the mpirun (pid=30111)
<br>
and a.out (pid=30120) processes spinning on master node bro127 follow:
<br>
<p>[root_at_bro127:~] top -u roberpj
<br>
&nbsp;&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND
<br>
30120 roberpj   20   0  115m 5220 3228 R 100.0  0.0  12:39.25 ./a.out
<br>
29890 roberpj   20   0  115m 2428 1168 S  0.0  0.0   0:00.01 sshd: 
<br>
roberpj_at_pts/0
<br>
29895 roberpj   20   0  116m 2164 1604 S  0.0  0.0   0:00.04 -bash
<br>
30111 roberpj   20   0 83760 3660 2724 S  0.0  0.0   0:00.03 
<br>
/opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl 
<br>
tcp,sm,self --mca btl_tcp_if_include eth2 --mca btl_base_verbose 100 
<br>
--host bro127,bro128 ./a.out
<br>
<p>[root_at_bro127:~] gdb -p 30111
<br>
(gdb) bt full
<br>
#0  0x00002b8b385b6a28 in poll () from /lib64/libc.so.6
<br>
No symbol table info available.
<br>
#1  0x00002b8b36dcafbf in poll_dispatch (base=0x1e59970, arg=0xd, 
<br>
tv=0x3e8) at ../../../../openmpi-1.6.5/opal/event/poll.c:167
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = 31707344
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msec = 1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nfds = 13
<br>
#2  0x00002b8b36dc8ee6 in opal_event_base_loop (base=0x1e59970, flags=13) 
<br>
at ../../../../openmpi-1.6.5/opal/event/event.c:838
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evsel = 0x1e3d6c8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evbase = 0x1e1b660
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tv = {tv_sec = 1, tv_usec = 0}
<br>
#3  0x00002b8b36dc8d92 in opal_event_loop (flags=31824240) at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:766
<br>
No locals.
<br>
#4  0x00002b8b36dc8d78 in opal_event_dispatch () at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:702
<br>
No locals.
<br>
#5  0x000000000040749d in orterun (argc=15, argv=0x7fff92d55be8) at 
<br>
../../../../../openmpi-1.6.5/orte/tools/orterun/orterun.c:925
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmd_line = {super = {obj_magic_id = 0, obj_class = 0x2b8b37099b00, 
<br>
obj_reference_count = 1, cls_init_file_name = 0x41f490 
<br>
&quot;../../../../../openmpi-1.6.5/orte/tools/orterun/orterun.c&quot;, 
<br>
cls_init_lineno = 636}, lcl_mutex = {super = {obj_magic_id = 0, obj_class 
<br>
= 0x628860, obj_reference_count = 1, cls_init_file_name = 0x2b8b36e49f78 
<br>
&quot;../../../../openmpi-1.6.5/opal/util/cmd_line.c&quot;, cls_init_lineno = 944}, 
<br>
m_lock_pthread = {__data = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__lock = 0, __count = 0, __owner = 0, __nusers = 0, __kind 
<br>
= -1, __spins = 0, __list = {__prev = 0x0, __next = 0x0}}, __size = '\000' 
<br>
&lt;repeats 16 times&gt;&quot;\377, \377\377\377&quot;, '\000' &lt;repeats 19 times&gt;, __align 
<br>
= 0}, m_lock_atomic = {u = {lock = 0, sparc_lock = 0 '\000', padding = 
<br>
&quot;\000\000\000&quot;}}}, lcl_options = {super = {obj_magic_id = 0, obj_class = 
<br>
0x628660, obj_reference_count = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_file_name = 0x2b8b36e49f78 
<br>
&quot;../../../../openmpi-1.6.5/opal/util/cmd_line.c&quot;, cls_init_lineno = 939}, 
<br>
opal_list_sentinel = {super = {obj_magic_id = 16046253926196952813, 
<br>
obj_class = 0x2b8b37098ea0, obj_reference_count = 1, cls_init_file_name = 
<br>
0x2b8b36e40620 &quot;../../../openmpi-1.6.5/opal/class/opal_list.c&quot;, 
<br>
cls_init_lineno = 88}, opal_list_next = 0x7fff92d556d8, opal_list_prev = 
<br>
0x7fff92d556d8, item_free = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_refcount = 1, opal_list_item_belong_to = 
<br>
0x7fff92d556b0}, opal_list_length = 0}, lcl_argc = 0, lcl_argv = 0x0, 
<br>
lcl_params = {super = {obj_magic_id = 0, obj_class = 0x628660, 
<br>
obj_reference_count = 1, cls_init_file_name = 0x2b8b36e49f78 
<br>
&quot;../../../../openmpi-1.6.5/opal/util/cmd_line.c&quot;, cls_init_lineno = 940}, 
<br>
opal_list_sentinel = {super = {obj_magic_id = 16046253926196952813, 
<br>
obj_class = 0x2b8b37098ea0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_reference_count = 1, cls_init_file_name = 
<br>
0x2b8b36e40620 &quot;../../../openmpi-1.6.5/opal/class/opal_list.c&quot;, 
<br>
cls_init_lineno = 88}, opal_list_next = 0x7fff92d55760, opal_list_prev = 
<br>
0x7fff92d55760, item_free = 1, opal_list_item_refcount = 1, 
<br>
opal_list_item_belong_to = 0x7fff92d55738}, opal_list_length = 0}, 
<br>
lcl_tail_argc = 0, lcl_tail_argv = 0x0}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp_env_var = 0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;param = 0x1e23db0 &quot;\260\017\324\066\213+&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;app = 0x1e1cf10
<br>
#6  0x0000000000405354 in main (argc=15, argv=0x7fff92d55be8) at 
<br>
../../../../../openmpi-1.6.5/orte/tools/orterun/main.c:13
<br>
No locals.
<br>
(gdb)
<br>
<p>[root_at_bro127:~] gdb -p 30120
<br>
(gdb) bt full
<br>
#0  0x00002b27ae8f06f3 in __epoll_wait_nocancel () from /lib64/libc.so.6
<br>
No symbol table info available.
<br>
#1  0x00002b27ad085edc in epoll_dispatch (base=0x3, arg=0xa58850, tv=0x20) 
<br>
at ../../../../openmpi-1.6.5/opal/event/epoll.c:215
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;events = 0xa58850
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evep = 0xa58850
<br>
#2  0x00002b27ad087276 in opal_event_base_loop (base=0x3, flags=10848336) 
<br>
at ../../../../openmpi-1.6.5/opal/event/event.c:838
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evsel = 0xa58818
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evbase = 0xa570a0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tv = {tv_sec = 0, tv_usec = 0}
<br>
#3  0x00002b27ad087122 in opal_event_loop (flags=3) at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:766
<br>
No locals.
<br>
#4  0x00002b27ad0cac14 in opal_progress () at 
<br>
../../../openmpi-1.6.5/opal/runtime/opal_progress.c:189
<br>
No locals.
<br>
#5  0x00002b27b25f0c40 in mca_pml_ob1_recv (addr=0x3, count=10848336, 
<br>
datatype=0x20, src=-1, tag=128, comm=0x81, status=0x7fffef027478) at 
<br>
../../../../../../openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_irecv.c:105
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = 0x20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvreq = 0xb05580
<br>
#6  0x00002b27acfcb0f7 in PMPI_Recv (buf=0x3, count=10848336, type=0x20, 
<br>
source=-1, tag=128, comm=0x81, status=0x4026e0) at precv.c:78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true_lb = 3
<br>
#7  0x0000000000402b65 in main (argc=1, argv=0x7fffef0275d8) at 
<br>
mpi_test.c:72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;repeats = 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msgid = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myid = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procs = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = 5000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A = {1804289383, 846930886, 1681692777, 1714636915, 1957747793, 
<br>
424238335, 719885386, 1649760492, 596516649, 1189641421, 1025202362, 
<br>
1350490027, 783368690, 1102520059, 2044897763, 1967513926, 1365180540, 
<br>
1540383426, 304089172, 1303455736, 35005211, 521595368, 294702567, 
<br>
1726956429, 336465782, 861021530, 278722862, 233665123, 2145174067, 
<br>
468703135, 1101513929, 1801979802, 1315634022, 635723058, 1369133069, 
<br>
1125898167, 1059961393,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2089018456, 628175011, 1656478042, 1131176229, 1653377373, 
<br>
859484421, 1914544919, 608413784, 756898537, 1734575198, 1973594324, 
<br>
149798315, 2038664370, 1129566413, 184803526, 412776091, 1424268980, 
<br>
1911759956, 749241873, 137806862, 42999170, 982906996, 135497281, 
<br>
511702305, 2084420925, 1937477084, 1827336327, 572660336, 1159126505, 
<br>
805750846, 1632621729, 1100661313, 1433925857, 1141616124, 84353895, 
<br>
939819582, 2001100545,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1998898814, 1548233367, 610515434, 1585990364, 1374344043, 
<br>
760313750, 1477171087, 356426808, 945117276, 1889947178, 1780695788, 
<br>
709393584, 491705403, 1918502651, 752392754, 1474612399, 2053999932, 
<br>
1264095060, 1411549676, 1843993368, 943947739, 1984210012, 855636226, 
<br>
1749698586, 1469348094, 1956297539, 1036140795, 463480570, 2040651434, 
<br>
1975960378, 317097467, 1892066601, 1376710097, 927612902, 1330573317, 
<br>
603570492, 1687926652,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;660260756, 959997301, 485560280, 402724286, 593209441, 
<br>
1194953865, 894429689, 364228444, 1947346619, 221558440, 270744729, 
<br>
1063958031, 1633108117, 2114738097, 2007905771, 1469834481, 822890675, 
<br>
1610120709, 791698927, 631704567, 498777856, 1255179497, 524872353, 
<br>
327254586, 1572276965, 269455306, 1703964683, 352406219, 1600028624, 
<br>
160051528, 2040332871, 112805732, 1120048829, 378409503, 515530019, 
<br>
1713258270, 1573363368, 1409959708,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2077486715, 1373226340, 1631518149, 200747796, 289700723, 
<br>
1117142618, 168002245, 150122846, 439493451, 990892921, 1760243555, 
<br>
1231192379, 1622597488, 111537764, 338888228, 2147469841, 438792350, 
<br>
1911165193, 269441500, 2142757034, 116087764, 1869470124, 155324914, 
<br>
8936987, 1982275856, 1275373743, 387346491, 350322227, 841148365, 
<br>
1960709859, 1760281936, 771151432, 1186452551, 1244316437, 971899228, 
<br>
1476153275, 213975407, 1139901474,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1626276121, 653468858, 2130794395, 1239036029, 1884661237, 
<br>
1605908235, 1350573793, 76065818, 1605894428, 1789366143, 1987231011, 
<br>
1875335928, 1784639529...}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;namelen = 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processor_name = &quot;bro127&quot;, '\000' &lt;repeats 249 times&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stat = {MPI_SOURCE = -1395538283, MPI_TAG = 11047, MPI_ERROR = 1, 
<br>
_cancelled = 0, _ucount = 63}
<br>
(gdb)
<br>
<p>o The top output and gdb full backtraces of the orted (pid=922) and
<br>
a.out (pid=923) processes spinning on slave node bro128 are below:
<br>
<p>[root_at_bro128:~] top -u roberpj
<br>
&nbsp;&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND
<br>
&nbsp;&nbsp;&nbsp;923 roberpj   20   0  115m 5208 3220 R 98.5  0.0  33:46.47 ./a.out
<br>
&nbsp;&nbsp;&nbsp;922 roberpj   20   0 79456 2400 1524 S  0.0  0.0   0:00.02 
<br>
/opt/sharcnet/openmpi/1.6.5/intel-debug/bin/orted --daemonize -mca ess env 
<br>
-mca orte_ess_jobid 415891456 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 
<br>
2 --hnp-uri 415891456.0;tcp://10.27.2.127:47800;tcp://10.29.4.127:47800 
<br>
--mca btl tcp,sm,self --mca btl_tcp_if_include eth2 --mca btl_base_verbose 
<br>
100 -mca plm rsh
<br>
<p>[root_at_bro128:~] gdb -p 923
<br>
(gdb) bt full
<br>
#0  0x00002b0c7e5c86f3 in __epoll_wait_nocancel () from /lib64/libc.so.6
<br>
No symbol table info available.
<br>
#1  0x00002b0c7cd5dedc in epoll_dispatch (base=0x3, arg=0x1117850, 
<br>
tv=0x20) at ../../../../openmpi-1.6.5/opal/event/epoll.c:215
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;events = 0x1117850
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evep = 0x1117850
<br>
#2  0x00002b0c7cd5f276 in opal_event_base_loop (base=0x3, flags=17922128) 
<br>
at ../../../../openmpi-1.6.5/opal/event/event.c:838
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evsel = 0x1117818
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evbase = 0x11160a0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tv = {tv_sec = 0, tv_usec = 0}
<br>
#3  0x00002b0c7cd5f122 in opal_event_loop (flags=3) at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:766
<br>
No locals.
<br>
#4  0x00002b0c7cda2c14 in opal_progress () at 
<br>
../../../openmpi-1.6.5/opal/runtime/opal_progress.c:189
<br>
No locals.
<br>
#5  0x00002b0c822c8c40 in mca_pml_ob1_recv (addr=0x3, count=17922128, 
<br>
datatype=0x20, src=-1, tag=0, comm=0x80000, status=0x7fffe046a028) at 
<br>
../../../../../../openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_irecv.c:105
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = 0x20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvreq = 0x11c4580
<br>
#6  0x00002b0c7cca30f7 in PMPI_Recv (buf=0x3, count=17922128, type=0x20, 
<br>
source=-1, tag=0, comm=0x80000, status=0x4026e0) at precv.c:78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true_lb = 3
<br>
#7  0x0000000000402c40 in main (argc=1, argv=0x7fffe046a188) at 
<br>
mpi_test.c:76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;repeats = 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msgid = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myid = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procs = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = 5000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A = {1804289383, 846930886, 1681692777, 1714636915, 1957747793, 
<br>
424238335, 719885386, 1649760492, 596516649, 1189641421, 1025202362, 
<br>
1350490027, 783368690, 1102520059, 2044897763, 1967513926, 1365180540, 
<br>
1540383426, 304089172, 1303455736, 35005211, 521595368, 294702567, 
<br>
1726956429, 336465782, 861021530, 278722862, 233665123, 2145174067, 
<br>
468703135, 1101513929, 1801979802, 1315634022, 635723058, 1369133069, 
<br>
1125898167, 1059961393,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2089018456, 628175011, 1656478042, 1131176229, 1653377373, 
<br>
859484421, 1914544919, 608413784, 756898537, 1734575198, 1973594324, 
<br>
149798315, 2038664370, 1129566413, 184803526, 412776091, 1424268980, 
<br>
1911759956, 749241873, 137806862, 42999170, 982906996, 135497281, 
<br>
511702305, 2084420925, 1937477084, 1827336327, 572660336, 1159126505, 
<br>
805750846, 1632621729, 1100661313, 1433925857, 1141616124, 84353895, 
<br>
939819582, 2001100545,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1998898814, 1548233367, 610515434, 1585990364, 1374344043, 
<br>
760313750, 1477171087, 356426808, 945117276, 1889947178, 1780695788, 
<br>
709393584, 491705403, 1918502651, 752392754, 1474612399, 2053999932, 
<br>
1264095060, 1411549676, 1843993368, 943947739, 1984210012, 855636226, 
<br>
1749698586, 1469348094, 1956297539, 1036140795, 463480570, 2040651434, 
<br>
1975960378, 317097467, 1892066601, 1376710097, 927612902, 1330573317, 
<br>
603570492, 1687926652,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;660260756, 959997301, 485560280, 402724286, 593209441, 
<br>
1194953865, 894429689, 364228444, 1947346619, 221558440, 270744729, 
<br>
1063958031, 1633108117, 2114738097, 2007905771, 1469834481, 822890675, 
<br>
1610120709, 791698927, 631704567, 498777856, 1255179497, 524872353, 
<br>
327254586, 1572276965, 269455306, 1703964683, 352406219, 1600028624, 
<br>
160051528, 2040332871, 112805732, 1120048829, 378409503, 515530019, 
<br>
1713258270, 1573363368, 1409959708,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2077486715, 1373226340, 1631518149, 200747796, 289700723, 
<br>
1117142618, 168002245, 150122846, 439493451, 990892921, 1760243555, 
<br>
1231192379, 1622597488, 111537764, 338888228, 2147469841, 438792350, 
<br>
1911165193, 269441500, 2142757034, 116087764, 1869470124, 155324914, 
<br>
8936987, 1982275856, 1275373743, 387346491, 350322227, 841148365, 
<br>
1960709859, 1760281936, 771151432, 1186452551, 1244316437, 971899228, 
<br>
1476153275, 213975407, 1139901474,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1626276121, 653468858, 2130794395, 1239036029, 1884661237, 
<br>
1605908235, 1350573793, 76065818, 1605894428, 1789366143, 1987231011, 
<br>
1875335928, 1784639529...}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;namelen = 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processor_name = &quot;bro128&quot;, '\000' &lt;repeats 249 times&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stat = {MPI_SOURCE = 2090813077, MPI_TAG = 11020, MPI_ERROR = 1, 
<br>
_cancelled = 0, _ucount = 63}
<br>
(gdb)
<br>
<p>[root_at_bro128:~] gdb -p 922
<br>
(gdb) bt full
<br>
#0  0x00002ae5a0deea28 in poll () from /lib64/libc.so.6
<br>
No symbol table info available.
<br>
#1  0x00002ae59f602fbf in poll_dispatch (base=0x9bb7a0, arg=0x9, tv=0x3e8) 
<br>
at ../../../../openmpi-1.6.5/opal/event/poll.c:167
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = 10183248
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msec = 1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nfds = 9
<br>
#2  0x00002ae59f600ee6 in opal_event_base_loop (base=0x9bb7a0, flags=9) at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:838
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evsel = 0x9b6848
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evbase = 0x9b6880
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tv = {tv_sec = 1, tv_usec = 0}
<br>
#3  0x00002ae59f600d92 in opal_event_loop (flags=10205088) at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:766
<br>
No locals.
<br>
#4  0x00002ae59f600d78 in opal_event_dispatch () at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:702
<br>
No locals.
<br>
#5  0x00002ae59f596fcc in orte_daemon (argc=28, argv=0x7fff5899f2a8) at 
<br>
../../../openmpi-1.6.5/orte/orted/orted_main.c:846
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;launch = {parent = {obj_magic_id = 47165708974200, obj_class = 
<br>
0x2ae59f338980, obj_reference_count = -1621913208, cls_init_file_name = 
<br>
0x5d13aee &lt;Address 0x5d13aee out of bounds&gt;, cls_init_lineno = 
<br>
-1581336208}, type = 1 '\001', base_ptr = 0x614298 &quot;&quot;, pack_ptr = 0x0, 
<br>
unpack_ptr = 0x0, bytes_allocated = 140734679872168, bytes_used = 0}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag = 0 '\000'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;command = 0 '\000'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fd = -1618098584
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmd_line = 0x15a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;log_file = 
<br>
&quot;@\360\231X\377\177\000\000O\360\231X\377\177\000\000\200B2\237\345*\000\000\020\360\231X\377\177&quot;, 
<br>
'\000' &lt;repeats 26 times&gt;, 
<br>
&quot;\020\360B\241\345*\000\000\000\000\000\341\063\261\376\377\000\221\276\241\345*\000\000\200\360\231X\377\177\000\000~J2\237\345*\000\000\000\260\276\241\345*\000\000\000\320&#208;&#160;\345*\000\000\000\000\000\000\000\000\000\000\020\360\231X\377\177\000\000\200\360\231X\377\177\000\000\000\000\000\000\000\000\000\000P\341\231X\377\177\000\000\327\\&#210;&#160;\345*\000\000\000\320&#208;&#160;\345*\000\000\262B2\237\345*\000\000\000\000\000\000\000\000\000\000\226a2\237\345*\000\000&#216;&#143;S\237\345*\000\000\070\360\231X\377\177\000\000@\360\231X\377\177\000\000O\360\231X\377\177\000\000\200B2\237\345*\000\000\020\360\231X\377\177&quot;, 
<br>
'\000' &lt;repeats 26 times&gt;, 
<br>
&quot;0\361B\241\345*\000\000\200\360\231X\377\177\000\000~J2\237\345*\000\000\000\260\276\241\345*\000\000\000\320&#208;&#160;\345*&quot;, 
<br>
'\000' &lt;repeats 12 times&gt;, &quot;@\300\063\261\376\377\000\000\366\302d&gt;\313U&quot;, 
<br>
'\000' &lt;repeats 16 times&gt;&quot;\214&quot;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jobidstring = 0x2ae59f325fd0 &quot;H\211\303d\213\004%\030&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rml_uri = 0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer = 0xa13d60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname = 
<br>
&quot;\332\023@\000\000\000\000\000&#230;&#177;&#142;\223\000\000\000\000\070\365\330\003\000\000\000\000.\000\000\000\000\000\000\000P:&#209;&#160;\345*\000\000\000\000\000\000\000\000\000\000\220\361\231X\377\177\000\000H&lt;&#209;&#160;\345*\000\000\210\373&#209;&#160;\345*\000\000\001&quot;, 
<br>
'\000' &lt;repeats 15 times&gt;, &quot;\001\000\000\000\000\000\000\000\250&quot;, 
<br>
&lt;incomplete sequence \371\215\237&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starttime = {tv_sec = 1391200366, tv_usec = 945156}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setuptime = {tv_sec = 47165708932320, tv_usec = 140734679871488}
<br>
#6  0x0000000000402556 in main (argc=10205088, argv=0x9) at 
<br>
../../../../../openmpi-1.6.5/orte/tools/orted/orted.c:62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;umask_str = 0xfffffffffffffdfc &lt;Address 0xfffffffffffffdfc out of 
<br>
bounds&gt;
<br>
(gdb)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<li><strong>Maybe in reply to:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
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
