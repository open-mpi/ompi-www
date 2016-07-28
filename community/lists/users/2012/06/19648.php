<?
$subject_val = "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 23 14:40:29 2012" -->
<!-- isoreceived="20120623184029" -->
<!-- sent="Sun, 24 Jun 2012 06:40:14 +1200" -->
<!-- isosent="20120623184014" -->
<!-- name="Peter Soukalopoulos" -->
<!-- email="peter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpiexec hanging when running &amp;quot;hello world&amp;quot; on 2 EC2 windows instances" -->
<!-- id="000001cd516f$a2be1b80$e83a5280$_at_greenbutton.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FE42898.4000909_at_hlrs.de" -->
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
<strong>From:</strong> Peter Soukalopoulos (<em>peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-23 14:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19649.php">Peter Soukalopoulos: "[OMPI users] Test message - no auto reply from forum for my last post"</a>
<li><strong>Previous message:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19656.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19656.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>&nbsp;
<br>
<p>No problems executing notepad.exe remotely - process with id 2416 created on
<br>
remote node.
<br>
<p><span class="quotelev1">&gt;From 10.244.166.37
</span><br>
<p>C:\Users\greenbutton&gt;wmic /node:10.243.1.134 process call create notepad.exe
<br>
<p>Executing (Win32_Process)-&gt;Create()
<br>
<p>Method execution successful.
<br>
<p>Out Parameters:
<br>
<p>instance of __PARAMETERS
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ProcessId = 2416;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ReturnValue = 0;
<br>
<p>};
<br>
<p>&nbsp;
<br>
<p>No problems running the MPI command on notepad.exe
<br>
<p><span class="quotelev1">&gt;From 10.244.166.37
</span><br>
<p>C:\Users\greenbutton&gt;mpirun -np 2 -host 10.244.166.37,10.243.1.134
<br>
c:\windows\system32\notepad.exe
<br>
<p>connecting to 10.243.1.134
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that the job aborted, but has no info as to the process
<br>
<p>that caused that situation.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>(Works; blocked until notepad.exe killed on both nodes)
<br>
<p>&nbsp;
<br>
<p>Running my command MPIHello still does not work across nodes; I believe
<br>
there is a MPI communication problem between the processes, ie.
<br>
MPI_Send/Recv. It worked with 2 processes but not 4. How do I go about
<br>
resolving that? Is there a problem with the build settings of my executable?
<br>
<p>&nbsp;
<br>
<p>C:\mpi\exe&gt;mpirun -np 2 -host 10.244.166.37,10.243.1.134 MPIHello.exe
<br>
<p>connecting to 10.243.1.134
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>WE have 2 processors
<br>
<p>Hello 1 Processor 1 at node AMAZONA-BMCKVD6 reporting for duty
<br>
<p>(works - output from rank 1)
<br>
<p>&nbsp;
<br>
<p>C:\mpi\exe&gt;
<br>
<p>C:\mpi\exe&gt;mpirun -np 4 -host 10.244.166.37,10.243.1.134 MPIHello.exe
<br>
<p>connecting to 10.243.1.134
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>WE have 4 processors
<br>
<p>(hangs - no output from ranks 1,2 or 3)
<br>
<p>&nbsp;
<br>
<p>Please assist.
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Peter
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Friday, 22 June 2012 8:11 p.m.
<br>
To: Open MPI Users
<br>
Cc: Peter Soukalopoulos
<br>
Subject: Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2
<br>
EC2 windows instances
<br>
<p>&nbsp;
<br>
<p>Hi Peter,
<br>
<p>The Open MPI potentially uses WMI to launch remote processes, so the WMI has
<br>
to be configured correctly. There are two links talking about how to set it
<br>
up in README.WINDOWS file:
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
application should also work. Just let me know if you have any question or
<br>
trouble with that.
<br>
<p><p>Shiqing
<br>
<p><p><p>On 2012-06-22 7:00 AM, Peter Soukalopoulos wrote:
<br>
<p>I am a new comer to Open MPI. 
<br>
<p>&nbsp;&nbsp;
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
<p>&nbsp;&nbsp;
<br>
<p>Diagnostic info requested is attached along with sample application source. 
<br>
<p>&nbsp;&nbsp;
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
<p>&nbsp;&nbsp;
<br>
<p>When I run across two hosts, the executable is launched on both instances
<br>
but the process hangs: 
<br>
<p>&nbsp;&nbsp;
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
<p>&nbsp;&nbsp;
<br>
<p>Re-running with debug: 
<br>
<p>C:\mpi\exe&gt;mpiexec -n 4 -host 10.242.73.81,10.116.114.238 -d --mca
<br>
btl_tcp_if_include 10.0.0.0/8 MPIHello.exe 
<br>
<p>&nbsp;&nbsp;
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
<p>&nbsp;&nbsp;
<br>
<p>I'd appreciate any guidance to getting this example to run on two instances
<br>
on disparate subnets on Windows Server 2008 R2. 
<br>
<p>&nbsp;&nbsp;
<br>
<p>Thanks in advance for your help. 
<br>
<p>&nbsp;&nbsp;
<br>
<p>Regards, 
<br>
<p>Peter 
<br>
<p>&nbsp;&nbsp;
<br>
<p>Peter Soukalopoulos 
<br>
Development Team Leader | GreenButton Limited | www.greenbutton.com
<br>
&lt;<a href="http://www.greenbutton.com/">http://www.greenbutton.com/</a>&gt; 
<br>
Level 13, Simpl House, 40 Mercer Street, Wellington, New Zealand 
<br>
Mobile: +64 22 632 5023| peter.soukalopoulos_at_[hidden] | Skype:
<br>
psoukal | HQ: +644 499 0424 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<p>&nbsp;&nbsp;
<br>
<p>****************************************************************************
<br>
*
<br>
**
<br>
**
<br>
** WARNING:  This email contains an attachment of a very suspicious type.
<br>
**
<br>
** You are urged NOT to open this attachment unless you are absolutely
<br>
**
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable
<br>
**
<br>
** damage to your computer and your files.  If you have any questions
<br>
**
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT.
<br>
**
<br>
**
<br>
**
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.
<br>
**
<br>
****************************************************************************
<br>
*
<br>
&nbsp;
<br>
<p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19649.php">Peter Soukalopoulos: "[OMPI users] Test message - no auto reply from forum for my last post"</a>
<li><strong>Previous message:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19656.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Reply:</strong> <a href="19656.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
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
