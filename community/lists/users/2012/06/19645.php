<?
$subject_val = "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 04:09:58 2012" -->
<!-- isoreceived="20120622080958" -->
<!-- sent="Fri, 22 Jun 2012 10:11:04 +0200" -->
<!-- isosent="20120622081104" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpiexec hanging when running &amp;quot;hello world&amp;quot; on 2 EC2 windows instances" -->
<!-- id="4FE42898.4000909_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14431_1340341240_q5M50ajj011617_09a101cd5033$f4a01b20$dde05160$_at_greenbutton.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 04:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19646.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19644.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19643.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19648.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<p>The Open MPI potentially uses WMI to launch remote processes, so the WMI 
<br>
has to be configured correctly. There are two links talking about how to 
<br>
set it up in README.WINDOWS file:
<br>
<p><a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
<br>
<a href="http://community.spiceworks.com/topic/578">http://community.spiceworks.com/topic/578</a>
<br>
<p>For testing whether it works or not, you can use following command:
<br>
wmic /node:remote_node_ip process call create notepad.exe
<br>
<p>then log onto the other Windows, check in the task manager if the 
<br>
notepad.exe process is created (don't forget to delete it afterwards).
<br>
<p>If that works, this command will also work:
<br>
mpirun -np 2 -host host1 host2 notepad.exe
<br>
<p>Please try to run the above two test commands, if they all works you 
<br>
application should also work. Just let me know if you have any question 
<br>
or trouble with that.
<br>
<p><p>Shiqing
<br>
<p><p><p>On 2012-06-22 7:00 AM, Peter Soukalopoulos wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a new comer to Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have spent the last day trying to diagnose why a &quot;hello world&quot; MPI 
</span><br>
<span class="quotelev1">&gt; application compiled with OpenMPI v1.6.1 (64 bit) hangs when run on 
</span><br>
<span class="quotelev1">&gt; two EC2 Windows instances. I note they are running on different 
</span><br>
<span class="quotelev1">&gt; subnets so I'm using the mca btl_tcp_if_include 10.0.0.0/8 parameter. 
</span><br>
<span class="quotelev1">&gt; My two hosts are 10.242.73.81,10.116.114.238. I've placed the 
</span><br>
<span class="quotelev1">&gt; executable in the same path on both machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diagnostic info requested is attached along with sample application 
</span><br>
<span class="quotelev1">&gt; source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run two processes on one instance -- the command succeeds:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\mpi\exe&gt;mpiexec -n 2 -host 10.242.73.81 --mca btl_tcp_if_include 
</span><br>
<span class="quotelev1">&gt; 10.0.0.0/8 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WE have 2 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello 1 Processor 1 at node AMAZONA-BMCKVD6 reporting for duty
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run across two hosts, the executable is launched on both 
</span><br>
<span class="quotelev1">&gt; instances but the process hangs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\mpi\exe&gt;mpiexec -n 4 -host 10.242.73.81,10.116.114.238 --mca 
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include 10.0.0.0/8 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connecting to 10.116.114.238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; username:greenbutton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; password:*********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Save Credential?(Y/N) n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WE have 4 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re-running with debug:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\mpi\exe&gt;mpiexec -n 4 -host 10.242.73.81,10.116.114.238 -d --mca 
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include 10.0.0.0/8 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01240] procdir: 
</span><br>
<span class="quotelev1">&gt; C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\0\0 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01240] jobdir: 
</span><br>
<span class="quotelev1">&gt; C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\0 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01240] top: 
</span><br>
<span class="quotelev1">&gt; openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01240] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01240] mpiexec: reset PATH: C:\Program Files 
</span><br>
<span class="quotelev1">&gt; (x86)\OpenMPI_v1.6-x64\bin;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01240] mpiexec: reset LD_LIBRARY_PATH: C:\Program 
</span><br>
<span class="quotelev1">&gt; Files (x86)\OpenMPI_v1.6-x64\lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connecting to 10.116.114.238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; username:greenbutton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; password:*********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Save Credential?(Y/N) n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:02728] procdir: 
</span><br>
<span class="quotelev1">&gt; C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1\0 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:02728] jobdir: 
</span><br>
<span class="quotelev1">&gt; C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:02728] top: 
</span><br>
<span class="quotelev1">&gt; openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:02728] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:02728] [[63746,1],0] node[0].name AMAZONA-BMCKVD6 
</span><br>
<span class="quotelev1">&gt; daemon 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:02728] [[63746,1],0] node[1].name 10 daemon 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01500] procdir: 
</span><br>
<span class="quotelev1">&gt; C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1\2 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01500] jobdir: 
</span><br>
<span class="quotelev1">&gt; C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01500] top: 
</span><br>
<span class="quotelev1">&gt; openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01500] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01500] [[63746,1],2] node[0].name AMAZONA-BMCKVD6 
</span><br>
<span class="quotelev1">&gt; daemon 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [AMAZONA-BMCKVD6:01500] [[63746,1],2] node[1].name 10 daemon 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WE have 4 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd appreciate any guidance to getting this example to run on two 
</span><br>
<span class="quotelev1">&gt; instances on disparate subnets on Windows Server 2008 R2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Regards, /
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter /
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Peter****Soukalopoulos*
</span><br>
<span class="quotelev1">&gt; *Development Team Leader | **GreenButton Limited *| 
</span><br>
<span class="quotelev1">&gt; www.greenbutton.com &lt;<a href="http://www.greenbutton.com/">http://www.greenbutton.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Level 13, Simpl House, 40 Mercer Street, Wellington, New Zealand
</span><br>
<span class="quotelev1">&gt; Mobile: +64 22 632 5023|peter.soukalopoulos_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:peter.soukalopoulos_at_[hidden]&gt;| Skype: psoukal | 
</span><br>
<span class="quotelev1">&gt; HQ: +644 499 0424
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Description: Description: GreenButton_words_small Description: 
</span><br>
<span class="quotelev1">&gt; cid:image003.jpg_at_01CC4E01.BA075BC0
</span><br>
<span class="quotelev1">&gt; This message contains confidential information, intended only for 
</span><br>
<span class="quotelev1">&gt; the person(s) named above, which may also be privileged. Any use, 
</span><br>
<span class="quotelev1">&gt; distribution, copying or disclosure by any other person is strictly 
</span><br>
<span class="quotelev1">&gt; prohibited. In such case, you should delete this message and kindly 
</span><br>
<span class="quotelev1">&gt; notify the sender via reply e-mail. Please advise immediately if you 
</span><br>
<span class="quotelev1">&gt; or your employer does not consent to Internet e-mail for messages of 
</span><br>
<span class="quotelev1">&gt; this kind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-19645/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-19645/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19646.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19644.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19643.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19648.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
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
