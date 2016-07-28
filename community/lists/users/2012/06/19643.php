<?
$subject_val = "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 01:00:40 2012" -->
<!-- isoreceived="20120622050040" -->
<!-- sent="Fri, 22 Jun 2012 17:00:30 +1200" -->
<!-- isosent="20120622050030" -->
<!-- name="Peter Soukalopoulos" -->
<!-- email="peter_at_[hidden]" -->
<!-- subject="[OMPI users] Mpiexec hanging when running &amp;quot;hello world&amp;quot; on 2 EC2 windows instances" -->
<!-- id="14431_1340341240_q5M50ajj011617_09a101cd5033$f4a01b20$dde05160$_at_greenbutton.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances<br>
<strong>From:</strong> Peter Soukalopoulos (<em>peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 01:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19644.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19642.php">Siegmar Gross: "[OMPI users] error in osc_rdma_data_mave.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am a new comer to Open MPI.
<br>
<p>&nbsp;
<br>
<p>I have spent the last day trying to diagnose why a &quot;hello world&quot; MPI
<br>
application compiled with OpenMPI v1.6.1 (64 bit) hangs when run on two EC2
<br>
Windows instances. I note they are running on different subnets so I'm using
<br>
the mca btl_tcp_if_include 10.0.0.0/8 parameter. My two hosts are
<br>
10.242.73.81,10.116.114.238. I've placed the executable in the same path on
<br>
both machines.
<br>
<p>&nbsp;
<br>
<p>Diagnostic info requested is attached along with sample application source.
<br>
<p>&nbsp;
<br>
<p>When I run two processes on one instance - the command succeeds:
<br>
<p>C:\mpi\exe&gt;mpiexec -n 2 -host 10.242.73.81 --mca btl_tcp_if_include
<br>
10.0.0.0/8 MPIHello.exe
<br>
<p>WE have 2 processors
<br>
<p>Hello 1 Processor 1 at node AMAZONA-BMCKVD6 reporting for duty
<br>
<p>&nbsp;
<br>
<p>When I run across two hosts, the executable is launched on both instances
<br>
but the process hangs:
<br>
<p>&nbsp;
<br>
<p>C:\mpi\exe&gt;mpiexec -n 4 -host 10.242.73.81,10.116.114.238 --mca
<br>
btl_tcp_if_include 10.0.0.0/8 MPIHello.exe
<br>
<p>connecting to 10.116.114.238
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>WE have 4 processors
<br>
<p>&nbsp;
<br>
<p>Re-running with debug:
<br>
<p>C:\mpi\exe&gt;mpiexec -n 4 -host 10.242.73.81,10.116.114.238 -d --mca
<br>
btl_tcp_if_include 10.0.0.0/8 MPIHello.exe
<br>
<p>&nbsp;
<br>
<p>[AMAZONA-BMCKVD6:01240] procdir:
<br>
C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-
<br>
BMCKVD6_0\63746\0\0
<br>
<p>[AMAZONA-BMCKVD6:01240] jobdir:
<br>
C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-
<br>
BMCKVD6_0\63746\0
<br>
<p>[AMAZONA-BMCKVD6:01240] top: openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
<br>
<p>[AMAZONA-BMCKVD6:01240] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
<br>
<p>[AMAZONA-BMCKVD6:01240] mpiexec: reset PATH: C:\Program Files
<br>
(x86)\OpenMPI_v1.6-x64\bin;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\Sy
<br>
stem32\WindowsPowerShell\v1.0\;
<br>
<p>[AMAZONA-BMCKVD6:01240] mpiexec: reset LD_LIBRARY_PATH: C:\Program Files
<br>
(x86)\OpenMPI_v1.6-x64\lib
<br>
<p>connecting to 10.116.114.238
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>[AMAZONA-BMCKVD6:02728] procdir:
<br>
C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-
<br>
BMCKVD6_0\63746\1\0
<br>
<p>[AMAZONA-BMCKVD6:02728] jobdir:
<br>
C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-
<br>
BMCKVD6_0\63746\1
<br>
<p>[AMAZONA-BMCKVD6:02728] top: openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
<br>
<p>[AMAZONA-BMCKVD6:02728] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
<br>
<p>[AMAZONA-BMCKVD6:02728] [[63746,1],0] node[0].name AMAZONA-BMCKVD6 daemon 0
<br>
<p>[AMAZONA-BMCKVD6:02728] [[63746,1],0] node[1].name 10 daemon 1
<br>
<p>[AMAZONA-BMCKVD6:01500] procdir:
<br>
C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-
<br>
BMCKVD6_0\63746\1\2
<br>
<p>[AMAZONA-BMCKVD6:01500] jobdir:
<br>
C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-
<br>
BMCKVD6_0\63746\1
<br>
<p>[AMAZONA-BMCKVD6:01500] top: openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
<br>
<p>[AMAZONA-BMCKVD6:01500] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
<br>
<p>[AMAZONA-BMCKVD6:01500] [[63746,1],2] node[0].name AMAZONA-BMCKVD6 daemon 0
<br>
<p>[AMAZONA-BMCKVD6:01500] [[63746,1],2] node[1].name 10 daemon 1
<br>
<p>WE have 4 processors
<br>
<p>&nbsp;
<br>
<p>I'd appreciate any guidance to getting this example to run on two instances
<br>
on disparate subnets on Windows Server 2008 R2.
<br>
<p>&nbsp;
<br>
<p>Thanks in advance for your help.
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Peter
<br>
<p>&nbsp;
<br>
<p>Peter Soukalopoulos 
<br>
Development Team Leader | GreenButton Limited |
<br>
&lt;<a href="http://www.greenbutton.com/">http://www.greenbutton.com/</a>&gt; www.greenbutton.com
<br>
Level 13, Simpl House, 40 Mercer Street, Wellington, New Zealand 
<br>
Mobile: +64 22 632 5023|  &lt;mailto:peter.soukalopoulos_at_[hidden]&gt;
<br>
peter.soukalopoulos_at_[hidden] | Skype: psoukal | HQ: +644 499 0424
<br>
<p>Description: Description: GreenButton_words_small               Description:
<br>
cid:image003.jpg_at_01CC4E01.BA075BC0
<br>
This message contains confidential information, intended only for the
<br>
person(s) named above, which may also be privileged. Any use, distribution,
<br>
copying or disclosure by any other person is strictly prohibited. In such
<br>
case, you should delete this message and kindly notify the sender via reply
<br>
e-mail. Please advise immediately if you or your employer does not consent
<br>
to Internet e-mail for messages of this kind.
<br>
<p>&nbsp;
<br>
<p><p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p><p>
<p>

<br><p>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-19643/image001.png" alt="image001.png">
<!-- attachment="image001.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-19643/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19643/MPIHello.zip">MPIHello.zip</a>
</ul>
<!-- attachment="MPIHello.zip" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19643/head.txt">head.txt</a>
</ul>
<!-- attachment="head.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19643/child.txt">child.txt</a>
</ul>
<!-- attachment="child.txt" -->
<hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19643/ompi_info.zip">ompi_info.zip</a>
</ul>
<!-- attachment="ompi_info.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19644.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19642.php">Siegmar Gross: "[OMPI users] error in osc_rdma_data_mave.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
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
