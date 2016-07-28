<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 21:42:32 2010" -->
<!-- isoreceived="20100714014232" -->
<!-- sent="Tue, 13 Jul 2010 18:42:07 -0700" -->
<!-- isosent="20100714014207" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="AANLkTinfQZTAF9PYEKxgoSiTvcSBi8kskyFXp5uz7PWM_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="86AB63EA-65F7-46D2-90DD-CCEE05A07089_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Hangs, No Error<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 21:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13627.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Like Ralph says, the slow down may not be coming from the kernel, but rather
<br>
on waiting for messages.  What MPI send/recv commands are you using?
<br>
<p>On Tue, Jul 13, 2010 at 11:53 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid that having 2 cores on a single machine will always outperform
</span><br>
<span class="quotelev1">&gt; having 1 core on each machine if any communication is involved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The most likely thing that is happening is that OMPI is polling waiting for
</span><br>
<span class="quotelev1">&gt; messages to arrive. You might look closer at your code to try and optimize
</span><br>
<span class="quotelev1">&gt; it better so that number-crunching can get more attention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Others on this list are far more knowledgeable than I am about doing such
</span><br>
<span class="quotelev1">&gt; things, so I'll let them take it from here. Glad it is now running!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 13, 2010, at 12:22 PM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following up. The sysadmin opened ports for machine to machine
</span><br>
<span class="quotelev1">&gt; communication and OpenMPI is running successfully with no errors in
</span><br>
<span class="quotelev1">&gt; connectivity_c, hello_c, or ring_c. Since, I have started to implement our
</span><br>
<span class="quotelev1">&gt; MPP software (finite element analysis) that we have, and upon running a
</span><br>
<span class="quotelev1">&gt; simple, 1 core on machine1, 1 core on machine2, job, I notice it is
</span><br>
<span class="quotelev1">&gt; considerably slower than a 2 core job on a single machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A quick look at top shows me kernel usage is almost twice what cpu usage
</span><br>
<span class="quotelev1">&gt; is! On a 16 core job, (8 cores per node so 2 nodes total) test, OpenMPI was
</span><br>
<span class="quotelev1">&gt; consuming ~65% of the cpu for kernel related items rather than
</span><br>
<span class="quotelev1">&gt; number-crunching related items...Granted, we are running on GigE, but this
</span><br>
<span class="quotelev1">&gt; is a finite element code we are running with no heavy data transfer within
</span><br>
<span class="quotelev1">&gt; it. I'm looking into benchmarking tools, but my sysadmin is not very open to
</span><br>
<span class="quotelev1">&gt; installing third party softwares. Do you have any suggestions for what I can
</span><br>
<span class="quotelev1">&gt; use that would be &quot;big name&quot; or guaranteed safe tools I can use to figure
</span><br>
<span class="quotelev1">&gt; out what's causing the hold up with all the kernel usage? I'm pretty sure
</span><br>
<span class="quotelev1">&gt; its network traffic but I have no way of telling (as far as I know because
</span><br>
<span class="quotelev1">&gt; I'm not a Linux whiz) with the standard tools in RHEL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all the help! I'm glad to get it finally working and I think
</span><br>
<span class="quotelev1">&gt; with a little tweaking it should be ready to go very soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Robert Walters
</span><br>
<span class="quotelev1">&gt; --- On *Sat, 7/10/10, Ralph Castain &lt;rhc_at_[hidden]&gt;* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Saturday, July 10, 2010, 4:37 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;static ports&quot; flag means something different - it is used when the
</span><br>
<span class="quotelev1">&gt; daemon is given a fixed port to use. In some installations, we lock every
</span><br>
<span class="quotelev1">&gt; daemon to the same port number so that each daemon can compute exactly how
</span><br>
<span class="quotelev1">&gt; to contact its peers (i.e., no contact info exchange required for wireup).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have a &quot;fixed range&quot;, but not &quot;static port&quot;, scenario. Hence the
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let us know how it goes - I agree it sounds like something to discuss with
</span><br>
<span class="quotelev1">&gt; the sysadmin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2010, at 1:47 PM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran oob_tcp_verbose 99 and I am getting something interesting I never got
</span><br>
<span class="quotelev1">&gt; before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [machine 2:22347] bind() failed: no port available in the range
</span><br>
<span class="quotelev1">&gt; [60001-60016]
</span><br>
<span class="quotelev1">&gt; [machine 2:22347] mca_oob_tcp_init: unable to create IPv4 listen socket:
</span><br>
<span class="quotelev1">&gt; Error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I never got that error before we messed with the iptables but now I get
</span><br>
<span class="quotelev1">&gt; that error... Very interesting, I will have to talk to my sysadmin again and
</span><br>
<span class="quotelev1">&gt; make sure he opened the right ports on my two test machines. It looks as
</span><br>
<span class="quotelev1">&gt; though there are no open ports. Another interesting thing is I see that the
</span><br>
<span class="quotelev1">&gt; Daemon is still report:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daemon [[28845,0],1] checking in as pid 22347 on host machine 2
</span><br>
<span class="quotelev1">&gt; Daemon [[28845,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which, I may be misunderstanding, should have been taken care of when I
</span><br>
<span class="quotelev1">&gt; specified what ports to use. I am telling it a static set of ports...
</span><br>
<span class="quotelev1">&gt; Anyhow, I will get with my sysadmin again and see what he says. At least
</span><br>
<span class="quotelev1">&gt; OpenMPI is correctly interpreting the range.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Sat, 7/10/10, Ralph Castain &lt;rhc_at_[hidden]&gt;* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Saturday, July 10, 2010, 3:21 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there multiple interfaces on your nodes? I'm wondering if we are using
</span><br>
<span class="quotelev1">&gt; a different network than the one where you opened these ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll get quite a bit of output, but you can turn on debug output in the
</span><br>
<span class="quotelev1">&gt; oob itself with -mca oob_tcp_verbose xx. The higher the number, the more you
</span><br>
<span class="quotelev1">&gt; get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2010, at 11:14 AM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe my administrator has opened the ports I requested. The problem I
</span><br>
<span class="quotelev1">&gt; am having now is that OpenMPI is not listening to my defined port
</span><br>
<span class="quotelev1">&gt; assignments in openmpi-mca-params.conf (looks like permission 644 on those
</span><br>
<span class="quotelev1">&gt; files should it be 755?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I perform netstat -ltnup I see that orted is listening 14 processes in
</span><br>
<span class="quotelev1">&gt; tcp but scaterred in the 26000ish port range when I specified 60001-60016 in
</span><br>
<span class="quotelev1">&gt; the mca-params file. Is there a parameter I am missing? In any case I am
</span><br>
<span class="quotelev1">&gt; still hanging as mentioned originally even with the port forwarding enabled
</span><br>
<span class="quotelev1">&gt; and specifications in mca-param enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other ideas on what might be causing the hang? Is there a more verbose
</span><br>
<span class="quotelev1">&gt; mode I can employ to see more deeply into the issue? I have run
</span><br>
<span class="quotelev1">&gt; --debug-daemons and --mca plm_base_verbose 99.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; --- On *Tue, 7/6/10, Robert Walters &lt;raw19896_at_[hidden]&gt;* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Robert Walters &lt;raw19896_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, July 6, 2010, 5:41 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your expeditious responses, Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to confirm with you, I should change openmpi-mca-params.conf to
</span><br>
<span class="quotelev1">&gt; include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_min_v4 = (My minimum port in the range)
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_range_v4 = (My port range)
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 = (My minimum port in the range)
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_range_v4 = (My port range)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, for a cluster of around 32-64 processes (8 processors per node), how
</span><br>
<span class="quotelev1">&gt; wide of a range will I require? I've noticed some entries in the mailing
</span><br>
<span class="quotelev1">&gt; list suggesting you need a few to get started and then it opens as
</span><br>
<span class="quotelev1">&gt; necessary. Will I be safe with 20 or should I go for 100?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for all of your help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt;* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, July 6, 2010, 5:31 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem isn't with ssh - the problem is that the daemons need to open a TCP
</span><br>
<span class="quotelev1">&gt; connection back to the machine where mpirun is running. If the firewall
</span><br>
<span class="quotelev1">&gt; blocks that connection, then we can't run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can get a range of ports opened, then you can specify the ports OMPI
</span><br>
<span class="quotelev1">&gt; should use for this purpose. If the sysadmin won't allow even that, then you
</span><br>
<span class="quotelev1">&gt; are pretty well hosed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2010, at 2:23 PM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, there is a system firewall. I don't think the sysadmin will allow it
</span><br>
<span class="quotelev1">&gt; to go disabled. Each Linux machine has the built-in RHEL firewall. SSH is
</span><br>
<span class="quotelev1">&gt; enabled through the firewall though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt;* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, July 6, 2010, 4:19 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the remote daemon is starting - is there a firewall in the
</span><br>
<span class="quotelev1">&gt; way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2010, at 2:04 PM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4.2 on RHEL. I have a cluster of AMD Opteron's and
</span><br>
<span class="quotelev1">&gt; right now I am just working on getting OpenMPI itself up and running. I have
</span><br>
<span class="quotelev1">&gt; a successful configure and make all install. LD_LIBRARY_PATH and PATH
</span><br>
<span class="quotelev1">&gt; variables were correctly edited. mpirun -np 8 hello_c successfully works on
</span><br>
<span class="quotelev1">&gt; all machines. I have setup my two test machines with DSA key pairs that
</span><br>
<span class="quotelev1">&gt; successfully work with each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem comes when I initiate my hostfile to attempt to communicate
</span><br>
<span class="quotelev1">&gt; across machines. The hostfile is setup correctly with &lt;host_name&gt; &lt;slots&gt;
</span><br>
<span class="quotelev1">&gt; &lt;max-slots&gt;. When running with all verbose options enabled &quot;mpirun --mca
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 99 --debug-daemons --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev1">&gt; oob_base_verbose 99 --mca pml_base_verbose 99 -hostfile hostfile -np 16
</span><br>
<span class="quotelev1">&gt; hello_c&quot; I receive the following text output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component rsh has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component rsh open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component slurm open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component tcp has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component tcp open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; Daemon was launched on machine2- beginning to initialize
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: component tcp has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: component tcp open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; Daemon [[1418,0],1] checking in as pid 1962 on host machine2
</span><br>
<span class="quotelev1">&gt; Daemon [[1418,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point the system hangs indefinitely. While running top on the
</span><br>
<span class="quotelev1">&gt; machine2 terminal, I see several things come up briefly. These items are:
</span><br>
<span class="quotelev1">&gt; sshd (root), tcsh (myuser), orted (myuser), and mcstransd (root). I was
</span><br>
<span class="quotelev1">&gt; wondering if sshd needs to be initiated by myuser? It is currently turned
</span><br>
<span class="quotelev1">&gt; off in sshd_config through UsePAM yes. This was setup by the sysadmin but it
</span><br>
<span class="quotelev1">&gt; can be worked around if this is necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in summary, mpirun works on each machine individually, but hangs when
</span><br>
<span class="quotelev1">&gt; initiated through a hostfile or with the -host flag. ./configure with
</span><br>
<span class="quotelev1">&gt; defaults and --prefix. LD_LIBRARY_PATH and PATH set up correctly. Any help
</span><br>
<span class="quotelev1">&gt; is appreciated. Thanks!
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13627.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13629.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
