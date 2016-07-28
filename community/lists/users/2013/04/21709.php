<?
$subject_val = "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 11 09:32:54 2013" -->
<!-- isoreceived="20130411133254" -->
<!-- sent="Thu, 11 Apr 2013 15:32:47 +0200" -->
<!-- isosent="20130411133247" -->
<!-- name="Rodrigo G&#243;mez V&#225;zquez" -->
<!-- email="rodrigoggv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs: &amp;quot;hello&amp;quot; test in single machine" -->
<!-- id="5166BB7F.7090401_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5165CAF8.5080306_at_gmail.com" -->
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
<strong>From:</strong> Rodrigo G&#243;mez V&#225;zquez (<em>rodrigoggv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-11 09:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with MPI functions"</a>
<li><strong>In reply to:</strong> <a href="21706.php">Rodrigo G&#243;mez V&#225;zquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Reply:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You were right, Ralph. I made a short test turning off the firewall and 
<br>
MPI ran as predicted. I am taking a look to the firewall rules, to 
<br>
figure out how to set it up properly, so that it does not interfere with 
<br>
OpenMPI's functionalities. I will post the required changes in those 
<br>
settings as soon as I find them out, just in case anyone needs that in 
<br>
the future.
<br>
Thanks again!
<br>
Rodrigo
<br>
<p>On 04/10/2013 10:26 PM, Rodrigo G&#243;mez V&#225;zquez wrote:
<br>
<span class="quotelev1">&gt; In fact we should have restrictive firewall settings, as long as I 
</span><br>
<span class="quotelev1">&gt; remember. I will check the rules again tomorrow morning. That's very 
</span><br>
<span class="quotelev1">&gt; interesting, I would expect such kind of problem if I were working 
</span><br>
<span class="quotelev1">&gt; with a cluster, but I haven't thought that it might lead also to 
</span><br>
<span class="quotelev1">&gt; problems for the internal communication in the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Ralph. I'll let you know if this was the actual reason of the 
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; Rodrigo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/10/2013 09:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Best guess is that there is some issue with getting TCP sockets on 
</span><br>
<span class="quotelev2">&gt;&gt; the system - once the procs are launched, they need to open a TCP 
</span><br>
<span class="quotelev2">&gt;&gt; socket and communicate back to mpirun. If the socket is &quot;stuck&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; waiting to complete the open, things will hang.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might check to ensure there isn't some security setting in place 
</span><br>
<span class="quotelev2">&gt;&gt; that protects sockets - something like iptables, for example.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2013, at 11:57 AM, Rodrigo G&#243;mez V&#225;zquez 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rodrigoggv_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having troubles with the program in a simulation server.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The system consists of several processors but all in the same node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (more information of the specs. is in the attachments).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The system is quite new (few months) and a user reported me that it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was not possible to run simulations on multiple processors in parallel.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are using it for CFD-Simulations with OpenFOAM, which comes along 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with an own 1.5.3-version of OpenMPI (for more details you can look 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inside the &quot;ThirdParty software folder&quot; following this link: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.openfoam.org/archive/2.1.1/download/source.php">http://www.openfoam.org/archive/2.1.1/download/source.php</a>). The OS 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is an Ubuntu 12.04 Server distro (see uname.out in the attachments).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He tried to start a simulation in parallel using the following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~: mpirun -np 4 &lt;solver-with-its-corresponding-parameters&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a result the simulation does not start and there is no error 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message. It looks like the program is just waiting/looking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something. We can see shortly the 4 processes with their PIDs in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;top&quot; processes list, but only for few tenths of second and with 0% 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use of CPU and 0.0% use of memory as well. In order to recover the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command terminal we have to kill the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same happens with the &quot;hello&quot; scripts that come along with the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI's sources:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :~$mpicc hello_c.c -o hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :~$mpirun -np 4 hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... and here it hangs again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to execute other simpler processes, as recommended to check 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the installation. Let's see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :~$mpirun -np 4 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :~$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Works, as well as &quot;ompi_info&quot; does.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since we use the same OpenFOAM version without problems in several 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computers over ubuntu-based distros, I supposed that there must be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any kind of incompatibility problem, due to the hardware, but...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, I repeated the tests with the OpenMPI version from the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ubuntu repositories (1.4.3) and got the same result.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be wonderful if anyone could give me a hint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am afraid, it may result a complicated issue, so please, let me 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know whatever relevant information missing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance, guys
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rodrigo (Europe, GMT+2:00)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;openmpi1.4.3_ompi_info.out.bz2&gt;&lt;uname.out&gt;&lt;cat_-proc-cpuinfo.out.bz2&gt;_______________________________________________ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with MPI functions"</a>
<li><strong>In reply to:</strong> <a href="21706.php">Rodrigo G&#243;mez V&#225;zquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Reply:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
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
