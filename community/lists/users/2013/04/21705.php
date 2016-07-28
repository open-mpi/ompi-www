<?
$subject_val = "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 10 15:46:50 2013" -->
<!-- isoreceived="20130410194650" -->
<!-- sent="Wed, 10 Apr 2013 12:46:43 -0700" -->
<!-- isosent="20130410194643" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs: &amp;quot;hello&amp;quot; test in single machine" -->
<!-- id="942FCC36-631D-442A-80C2-BB4D67606694_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5165B61F.1030101_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-10 15:46:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21706.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21704.php">Rodrigo G&#243;mez V&#225;zquez: "[OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>In reply to:</strong> <a href="21704.php">Rodrigo G&#243;mez V&#225;zquez: "[OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21706.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Reply:</strong> <a href="21706.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Best guess is that there is some issue with getting TCP sockets on the system - once the procs are launched, they need to open a TCP socket and communicate back to mpirun. If the socket is &quot;stuck&quot; waiting to complete the open, things will hang.
<br>
<p>You might check to ensure there isn't some security setting in place that protects sockets - something like iptables, for example.
<br>
<p><p>On Apr 10, 2013, at 11:57 AM, Rodrigo G&#243;mez V&#225;zquez &lt;rodrigoggv_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having troubles with the program in a simulation server.
</span><br>
<span class="quotelev1">&gt; The system consists of several processors but all in the same node (more information of the specs. is in the attachments).
</span><br>
<span class="quotelev1">&gt; The system is quite new (few months) and a user reported me that it was not possible to run simulations on multiple processors in parallel.
</span><br>
<span class="quotelev1">&gt; We are using it for CFD-Simulations with OpenFOAM, which comes along with an own 1.5.3-version of OpenMPI (for more details you can look inside the &quot;ThirdParty software folder&quot; following this link: <a href="http://www.openfoam.org/archive/2.1.1/download/source.php">http://www.openfoam.org/archive/2.1.1/download/source.php</a>). The OS is an Ubuntu 12.04 Server distro (see uname.out in the attachments).
</span><br>
<span class="quotelev1">&gt; He tried to start a simulation in parallel using the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~: mpirun -np 4 &lt;solver-with-its-corresponding-parameters&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result the simulation does not start and there is no error message. It looks like the program is just waiting/looking for something. We can see shortly the 4 processes with their PIDs in the &quot;top&quot; processes list, but only for few tenths of second and with 0% use of CPU and 0.0% use of memory as well. In order to recover the command terminal we have to kill the process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same happens with the &quot;hello&quot; scripts that come along with the OpenMPI's sources:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :~$mpicc hello_c.c -o hello
</span><br>
<span class="quotelev1">&gt; :~$mpirun -np 4 hello
</span><br>
<span class="quotelev1">&gt; ... and here it hangs again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to execute other simpler processes, as recommended to check the installation. Let's see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :~$mpirun -np 4 hostname
</span><br>
<span class="quotelev1">&gt; simserver
</span><br>
<span class="quotelev1">&gt; simserver
</span><br>
<span class="quotelev1">&gt; simserver
</span><br>
<span class="quotelev1">&gt; simserver
</span><br>
<span class="quotelev1">&gt; :~$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works, as well as &quot;ompi_info&quot; does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since we use the same OpenFOAM version without problems in several computers over ubuntu-based distros, I supposed that there must be any kind of incompatibility problem, due to the hardware, but...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I repeated the tests with the OpenMPI version from the ubuntu repositories (1.4.3) and got the same result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be wonderful if anyone could give me a hint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am afraid, it may result a complicated issue, so please, let me know whatever relevant information missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance, guys
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rodrigo (Europe, GMT+2:00)
</span><br>
<span class="quotelev1">&gt; &lt;openmpi1.4.3_ompi_info.out.bz2&gt;&lt;uname.out&gt;&lt;cat_-proc-cpuinfo.out.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21706.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21704.php">Rodrigo G&#243;mez V&#225;zquez: "[OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>In reply to:</strong> <a href="21704.php">Rodrigo G&#243;mez V&#225;zquez: "[OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21706.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Reply:</strong> <a href="21706.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
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
