<?
$subject_val = "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 04:47:25 2012" -->
<!-- isoreceived="20120625084725" -->
<!-- sent="Mon, 25 Jun 2012 10:48:30 +0200" -->
<!-- isosent="20120625084830" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpiexec hanging when running &amp;quot;hello world&amp;quot; on 2 EC2 windows instances" -->
<!-- id="4FE825DE.70007_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000001cd516f$a2be1b80$e83a5280$_at_greenbutton.com" -->
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
<strong>Date:</strong> 2012-06-25 04:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19657.php">³ÂËÉ: "[OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19655.php">Mohamad Ali Rostami: "[OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19648.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<p>The WMI worked for you, that's great. Was it difficult for you to 
<br>
configure everything?
<br>
<p>For the hanging problem, it's quite similar to another thread: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/01/18128.php">http://www.open-mpi.org/community/lists/users/2012/01/18128.php</a>
<br>
<p>I wasn't able to solve that one yet, it's a complicated one. But the 
<br>
easy solution is to switch the send and recv sequence for root process. 
<br>
Could you please have a try on that?
<br>
<p><p>Shiqing
<br>
<p><p>On 2012-06-23 8:40 PM, Peter Soukalopoulos wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No problems executing notepad.exe remotely -- process with id 2416 
</span><br>
<span class="quotelev1">&gt; created on remote node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From 10.244.166.37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Users\greenbutton&gt;wmic /node:10.243.1.134 process call create 
</span><br>
<span class="quotelev1">&gt; notepad.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executing (Win32_Process)-&gt;Create()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Method execution successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Out Parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; instance of __PARAMETERS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ProcessId = 2416;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ReturnValue = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No problems running the MPI command on notepad.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From 10.244.166.37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Users\greenbutton&gt;mpirun -np 2 -host 10.244.166.37,10.243.1.134 
</span><br>
<span class="quotelev1">&gt; c:\windows\system32\notepad.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connecting to 10.243.1.134
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Works; blocked until notepad.exe killed on both nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running my command MPIHello still does not work across nodes; I 
</span><br>
<span class="quotelev1">&gt; believe there is a MPI communication problem between the processes, 
</span><br>
<span class="quotelev1">&gt; ie. MPI_Send/Recv. It worked with 2 processes but not 4. How do I go 
</span><br>
<span class="quotelev1">&gt; about resolving that? Is there a problem with the build settings of my 
</span><br>
<span class="quotelev1">&gt; executable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\mpi\exe&gt;mpirun -np 2 -host 10.244.166.37,10.243.1.134 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connecting to 10.243.1.134
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
<span class="quotelev1">&gt; WE have 2 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello 1 Processor 1 at node AMAZONA-BMCKVD6 reporting for duty
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (works -- output from rank 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\mpi\exe&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\mpi\exe&gt;mpirun -np 4 -host 10.244.166.37,10.243.1.134 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connecting to 10.243.1.134
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
<span class="quotelev1">&gt; (hangs -- no output from ranks 1,2 or 3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please assist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Regards,/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, 22 June 2012 8:11 p.m.
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Peter Soukalopoulos
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; 
</span><br>
<span class="quotelev1">&gt; on 2 EC2 windows instances
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI potentially uses WMI to launch remote processes, so the 
</span><br>
<span class="quotelev1">&gt; WMI has to be configured correctly. There are two links talking about 
</span><br>
<span class="quotelev1">&gt; how to set it up in README.WINDOWS file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://community.spiceworks.com/topic/578">http://community.spiceworks.com/topic/578</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For testing whether it works or not, you can use following command:
</span><br>
<span class="quotelev1">&gt; wmic /node:remote_node_ip process call create notepad.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then log onto the other Windows, check in the task manager if the 
</span><br>
<span class="quotelev1">&gt; notepad.exe process is created (don't forget to delete it afterwards).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that works, this command will also work:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host host1 host2 notepad.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please try to run the above two test commands, if they all works you 
</span><br>
<span class="quotelev1">&gt; application should also work. Just let me know if you have any 
</span><br>
<span class="quotelev1">&gt; question or trouble with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2012-06-22 7:00 AM, Peter Soukalopoulos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am a new comer to Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have spent the last day trying to diagnose why a &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt;     MPI application compiled with OpenMPI v1.6.1 (64 bit) hangs when
</span><br>
<span class="quotelev1">&gt;     run on two EC2 Windows instances. I note they are running on
</span><br>
<span class="quotelev1">&gt;     different subnets so I'm using the mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt;     10.0.0.0/8 parameter. My two hosts are
</span><br>
<span class="quotelev1">&gt;     10.242.73.81,10.116.114.238. I've placed the executable in the
</span><br>
<span class="quotelev1">&gt;     same path on both machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Diagnostic info requested is attached along with sample
</span><br>
<span class="quotelev1">&gt;     application source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     When I run two processes on one instance -- the command succeeds:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     C:\mpi\exe&gt;mpiexec -n 2 -host 10.242.73.81 --mca
</span><br>
<span class="quotelev1">&gt;     btl_tcp_if_include 10.0.0.0/8 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     WE have 2 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello 1 Processor 1 at node AMAZONA-BMCKVD6 reporting for duty
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     When I run across two hosts, the executable is launched on both
</span><br>
<span class="quotelev1">&gt;     instances but the process hangs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     C:\mpi\exe&gt;mpiexec -n 4 -host 10.242.73.81,10.116.114.238 --mca
</span><br>
<span class="quotelev1">&gt;     btl_tcp_if_include 10.0.0.0/8 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     connecting to 10.116.114.238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     username:greenbutton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     password:*********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Save Credential?(Y/N) n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     WE have 4 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Re-running with debug:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     C:\mpi\exe&gt;mpiexec -n 4 -host 10.242.73.81,10.116.114.238 -d --mca
</span><br>
<span class="quotelev1">&gt;     btl_tcp_if_include 10.0.0.0/8 MPIHello.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01240] procdir:
</span><br>
<span class="quotelev1">&gt;     C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\0\0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01240] jobdir:
</span><br>
<span class="quotelev1">&gt;     C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01240] top:
</span><br>
<span class="quotelev1">&gt;     openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01240] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01240] mpiexec: reset PATH: C:\Program Files
</span><br>
<span class="quotelev1">&gt;     (x86)\OpenMPI_v1.6-x64\bin;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01240] mpiexec: reset LD_LIBRARY_PATH: C:\Program
</span><br>
<span class="quotelev1">&gt;     Files (x86)\OpenMPI_v1.6-x64\lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     connecting to 10.116.114.238
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     username:greenbutton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     password:*********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Save Credential?(Y/N) n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:02728] procdir:
</span><br>
<span class="quotelev1">&gt;     C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1\0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:02728] jobdir:
</span><br>
<span class="quotelev1">&gt;     C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:02728] top:
</span><br>
<span class="quotelev1">&gt;     openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:02728] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:02728] [[63746,1],0] node[0].name AMAZONA-BMCKVD6
</span><br>
<span class="quotelev1">&gt;     daemon 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:02728] [[63746,1],0] node[1].name 10 daemon 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01500] procdir:
</span><br>
<span class="quotelev1">&gt;     C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1\2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01500] jobdir:
</span><br>
<span class="quotelev1">&gt;     C:\Users\GREENB~1\AppData\Local\Temp\2\openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0\63746\1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01500] top:
</span><br>
<span class="quotelev1">&gt;     openmpi-sessions-greenbutton_at_AMAZONA-BMCKVD6_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01500] tmp: C:\Users\GREENB~1\AppData\Local\Temp\2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01500] [[63746,1],2] node[0].name AMAZONA-BMCKVD6
</span><br>
<span class="quotelev1">&gt;     daemon 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AMAZONA-BMCKVD6:01500] [[63746,1],2] node[1].name 10 daemon 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     WE have 4 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'd appreciate any guidance to getting this example to run on two
</span><br>
<span class="quotelev1">&gt;     instances on disparate subnets on Windows Server 2008 R2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks in advance for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /Regards, /
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /Peter /
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Peter Soukalopoulos*
</span><br>
<span class="quotelev1">&gt;     *Development Team Leader | GreenButton Limited *|
</span><br>
<span class="quotelev1">&gt;     www.greenbutton.com &lt;<a href="http://www.greenbutton.com/">http://www.greenbutton.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Level 13, Simpl House, 40 Mercer Street, Wellington, New Zealand
</span><br>
<span class="quotelev1">&gt;     Mobile: +64 22 632 5023| peter.soukalopoulos_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:peter.soukalopoulos_at_[hidden]&gt; | Skype: psoukal |
</span><br>
<span class="quotelev1">&gt;     HQ: +644 499 0424
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This message contains confidential information, intended only for
</span><br>
<span class="quotelev1">&gt;     the person(s) named above, which may also be privileged. Any use,
</span><br>
<span class="quotelev1">&gt;     distribution, copying or disclosure by any other person is
</span><br>
<span class="quotelev1">&gt;     strictly prohibited. In such case, you should delete this message
</span><br>
<span class="quotelev1">&gt;     and kindly notify the sender via reply e-mail. Please advise
</span><br>
<span class="quotelev1">&gt;     immediately if you or your employer does not consent to Internet
</span><br>
<span class="quotelev1">&gt;     e-mail for messages of this kind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **                                                                         **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **                                                                         **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19657.php">³ÂËÉ: "[OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19655.php">Mohamad Ali Rostami: "[OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19648.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
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
