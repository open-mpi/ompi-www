<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 18:09:03 2010" -->
<!-- isoreceived="20100505220903" -->
<!-- sent="Wed, 05 May 2010 18:08:57 -0400" -->
<!-- isosent="20100505220857" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?" -->
<!-- id="4BE1EC79.3030608_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A3FCC9C-56DE-4DE4-A781-460CCC083CE9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 18:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Thank you.
<br>
Yes, I will give the user/researcher that TCP solution for now,
<br>
because he needs to start running his model with Open MPI.
<br>
He bought a brand new super-duper machine, with two-way Nehalem,
<br>
48GB RAM, etc, and so far he couldn't do any work,
<br>
which is frustrating.
<br>
<p>I googled around and found a few references to those kernel
<br>
errors reported by dmesg: &quot;*BAD*gran_size&quot;.
<br>
Actually, I don't really know if these kernel messages are
<br>
the reason for the problems I had with Open MPI.
<br>
In any case, the issue traces back
<br>
to &quot;mtrr&quot; (<a href="http://en.wikipedia.org/wiki/Memory_Type_Range_Registers">http://en.wikipedia.org/wiki/Memory_Type_Range_Registers</a>):
<br>
<p>dmesg | grep mtrr
<br>
mtrr_cleanup: can not find optimal value
<br>
please specify mtrr_gran_size/mtrr_chunk_size
<br>
mtrr: type mismatch for d0000000,10000000 old: write-back new: 
<br>
write-combining
<br>
<p>Eventually it backtracks to X, graphics cards and how they use memory.
<br>
<p>There are some diagnostics and solutions proposed here:
<br>
<p><a href="http://osdir.com/ml/fedora-list/2009-04/msg01308.html">http://osdir.com/ml/fedora-list/2009-04/msg01308.html</a>
<br>
<p>1) Don't start X.  I tried runlevel 3, but the same problems happened.
<br>
<p>2) Install the NVidia driver if your graphics card is NVidia.  It is
<br>
NVidia.  I downloaded the driver, but it won't install in FC-12,
<br>
at least not out of the box.
<br>
<p>3) Add the kernel parameter &quot;enable_mtrr_cleanup&quot; to grub.conf.
<br>
I tried, no game, nothing changed.
<br>
<p>I stopped here because I am not sure I will get anywhere down this road,
<br>
or even if the OpenMPI problem on Nehalem is related to mtrr.
<br>
<p>I am afraid this may be something screwed up really deep in the
<br>
FC-12 kernel.
<br>
(I am using 2.6.32.11-99.fc12.x86_64 #1 SMP x86_64 GNU/Linux.)
<br>
<p>All web pointers point to ... Fedora 9, 10, 11, 12.
<br>
I didn't find any references to those kernel errors on other
<br>
Linux distros.
<br>
On our CentOS cluster there are no such kernel error messages.
<br>
<p>OTOH, Jeff says he has Open MPI running with HT turned on,
<br>
&quot;sm&quot; turned on, etc on his Nehalem system.
<br>
Would Jeff be willing to disclose which
<br>
Linux distribution and kernel he uses on those boxen, perchance? :)
<br>
(Even in an off list email, if preferred, perhaps.)
<br>
<p>If anybody else has Open MPI working with hyperthreading and &quot;sm&quot;
<br>
on a Nehalem box, I would appreciate any information about the
<br>
Linux distro and kernel version being used.
<br>
<p>I don't administer the machine, but I would have stronger reasons
<br>
to convince the sys admin to switch from Fedora to
<br>
something else (CentOS, Ubuntu, Debian, whatever)
<br>
and see if it fixes the problem.
<br>
In the mid term, this would be a better solution
<br>
than running Open MPI over TCP.
<br>
At least it may be worth trying.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I saw similar issues in my former life when we encountered a Linux &quot;glitch&quot; in the way it handled proximity for shared memory - caused lockups under certain conditions. Turned out the problem was fixed in a later kernel version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Afraid I can't remember the versions involved any more, though....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless speed is a critical issue, I'd fall back to using TCP for now, maybe have someone over there look at a different kernel rev later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 5, 2010, at 11:30 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff, Ralph, list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the long email, and the delay to answer.
</span><br>
<span class="quotelev2">&gt;&gt; I had to test MPI/reboot the machine several times
</span><br>
<span class="quotelev2">&gt;&gt; to address the questions.
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully with answers to all your questions inline below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd actually be a little surprised if HT was the problem.  I run with HT enabled on my nehalem boxen all the time.  It's pretty surprising that Open MPI is causing a hard lockup of your system; user-level processes shouldn't be able to do that.
</span><br>
<span class="quotelev2">&gt;&gt; I hope I can do the same here!  :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Notes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. With HT enabled, as you noted, Linux will just see 2x as many cores as you actually have.  Depending on your desired workload, this may or may not help you.  But that shouldn't affect the correctness of running your MPI application.
</span><br>
<span class="quotelev2">&gt;&gt; I agree and that is what I seek.
</span><br>
<span class="quotelev2">&gt;&gt; Correctness first, performance later.
</span><br>
<span class="quotelev2">&gt;&gt; I want OpenMPI to work correctly, with or without hyperthreading,
</span><br>
<span class="quotelev2">&gt;&gt; and preferably using the &quot;sm&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt; In order, let's see what is possible, what works, what performs better.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reporting the most recent experiments with v1.4.2,
</span><br>
<span class="quotelev2">&gt;&gt; 1) hyperthreading turned ON,
</span><br>
<span class="quotelev2">&gt;&gt; 2) then HT turned OFF, on the BIOS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In both cases I tried
</span><br>
<span class="quotelev2">&gt;&gt; A) &quot;-mca btl ^sm&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; B) without it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Just in case, I checked and /proc/cpuinfo reports a number of cores
</span><br>
<span class="quotelev2">&gt;&gt; consistent with the BIOS setting for HT.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details below, but first off,
</span><br>
<span class="quotelev2">&gt;&gt; my conclusion is that HT OFF or ON makes *NO difference*.
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be with the &quot;sm&quot; btl.
</span><br>
<span class="quotelev2">&gt;&gt; When &quot;sm&quot; is on (default) OpenMPI breaks (at least on this computer).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################
</span><br>
<span class="quotelev2">&gt;&gt; 1) With hyperthreading turned ON:
</span><br>
<span class="quotelev2">&gt;&gt; ################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) with -mca btl ^sm (i.e. &quot;sm&quot; OFF):
</span><br>
<span class="quotelev2">&gt;&gt; Ran fine with 4,8,...,128 processes and fails with 256,
</span><br>
<span class="quotelev2">&gt;&gt; due to system limit on the number of open TCP connections,
</span><br>
<span class="quotelev2">&gt;&gt; as reported before with 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B) withOUT any -mca parameters (i.e. &quot;sm&quot; ON)&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Ran fine with 4,...,32, but failed with 64 processes,
</span><br>
<span class="quotelev2">&gt;&gt; with the same segfault and syslog error messages I reported
</span><br>
<span class="quotelev2">&gt;&gt; before for both 1.4.1 and 1.4.2.
</span><br>
<span class="quotelev2">&gt;&gt; (see below)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course np=64 is oversubscribing, but this is just a &quot;hello world&quot;
</span><br>
<span class="quotelev2">&gt;&gt; lightweight test.
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, in the previous experiments with both 1.4.1 and 1.4.2
</span><br>
<span class="quotelev2">&gt;&gt; the failures happened even earlier, with np = 16, which is the
</span><br>
<span class="quotelev2">&gt;&gt; exactly number of (virtual) processors with hyperthreading turned on,
</span><br>
<span class="quotelev2">&gt;&gt; i.e., with no oversubscription.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machine returns the prompt, but hangs right after.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could the failures be traced to some funny glitch in the
</span><br>
<span class="quotelev2">&gt;&gt; Fedora Core 12 (2.6.32.11-99.fc12.x86_6) SMP kernel?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gus_at_spinoza ~]$ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux spinoza.ldeo.columbia.edu 2.6.32.11-99.fc12.x86_64 #1 SMP Mon Apr 5 19:59:38 UTC 2010 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ********
</span><br>
<span class="quotelev2">&gt;&gt; ERROR messages:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sw/openmpi/1.4.2/gnu-4.4.3-4/bin/mpiexec -np 64 a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  4 22:28:15 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:------------[ cut here ]------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  4 22:28:15 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:invalid opcode: 0000 [#1] SMP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  4 22:28:15 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:last sysfs file: /sys/devices/system/cpu/cpu15/topology/physical_package_id
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  4 22:28:15 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Stack:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 63 with PID 6587 on node spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  4 22:28:15 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Call Trace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  4 22:28:15 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ************
</span><br>
<span class="quotelev2">&gt;&gt; ################################
</span><br>
<span class="quotelev2">&gt;&gt; 2) Now with hyperthreading OFF:
</span><br>
<span class="quotelev2">&gt;&gt; ################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) with -mca btl ^sm (i.e. &quot;sm&quot; OFF):
</span><br>
<span class="quotelev2">&gt;&gt; Ran fine with 4,8,...,128 processes and fails with 256,
</span><br>
<span class="quotelev2">&gt;&gt; due to system limit on the number of open TCP connections,
</span><br>
<span class="quotelev2">&gt;&gt; as reported before with 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt; This is exactly the same result as with HT ON.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B) withOUT any -mca parameters (i.e. &quot;sm&quot; ON)&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Ran fine with 4,...,32, but failed with 64 processes,
</span><br>
<span class="quotelev2">&gt;&gt; with the same syslog messages, but hung before showing
</span><br>
<span class="quotelev2">&gt;&gt; the Open MPI segfault message (see below).
</span><br>
<span class="quotelev2">&gt;&gt; So, again, very similar behavior as with HT ON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; My conclusion is that HT OFF or ON makes NO difference.
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be with the &quot;sm&quot; btl.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***********
</span><br>
<span class="quotelev2">&gt;&gt; ERROR MESSAGES
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_spinoza examples]# /opt/sw/openmpi/1.4.2/gnu-4.4.3-4/bin/mpiexec -np 64 a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  5 12:04:05 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:------------[ cut here ]------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  5 12:04:05 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:invalid opcode: 0000 [#1] SMP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  5 12:04:05 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:last sysfs file: /sys/devices/system/cpu/cpu7/topology/physical_package_id
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  5 12:04:05 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Stack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  5 12:04:05 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Call Trace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***********
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. To confirm: yes, TCP will be quite a bit slower than sm (but again, that depends on how much MPI traffic you're sending).  
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, the clarification is really important.
</span><br>
<span class="quotelev2">&gt;&gt; I suppose then that &quot;sm&quot; is preferred, if I can get it to work right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The main goal is to run yet another atmospheric model on this machine.
</span><br>
<span class="quotelev2">&gt;&gt; It is a typical domain decomposition problem,
</span><br>
<span class="quotelev2">&gt;&gt; with a bunch of 2D arrays being exchanged
</span><br>
<span class="quotelev2">&gt;&gt; across domain boundaries at each time step.
</span><br>
<span class="quotelev2">&gt;&gt; This is the MPI traffic.
</span><br>
<span class="quotelev2">&gt;&gt; There are probably some collectives too,
</span><br>
<span class="quotelev2">&gt;&gt; but I haven't checked out the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Yes, you can disable the 2nd thread on each core via Linux, but you need root-level access to do it.
</span><br>
<span class="quotelev2">&gt;&gt; I have root-level access.
</span><br>
<span class="quotelev2">&gt;&gt; However, so far I only learned the BIOS way, which requires a reboot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing it in Linux would be more convenient, avoiding reboots,
</span><br>
<span class="quotelev2">&gt;&gt; I suppose.
</span><br>
<span class="quotelev2">&gt;&gt; How do I do it in Linux.
</span><br>
<span class="quotelev2">&gt;&gt; Should I overwrite something in /proc ?
</span><br>
<span class="quotelev2">&gt;&gt; Something else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - is the /tmp directory on your local disk?
</span><br>
<span class="quotelev2">&gt;&gt; Yes.
</span><br>
<span class="quotelev2">&gt;&gt; And there is plenty of room in the / filesystem and the
</span><br>
<span class="quotelev2">&gt;&gt; /tmp directory:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_spinoza ~]# ll -d /tmp
</span><br>
<span class="quotelev2">&gt;&gt; drwxrwxrwt 22 root root 4096 2010-05-05 12:36 /tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_spinoza ~]# df -h
</span><br>
<span class="quotelev2">&gt;&gt; Filesystem            Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev2">&gt;&gt; /dev/mapper/vg_spinoza-lv_root
</span><br>
<span class="quotelev2">&gt;&gt;                      1.8T  504G  1.2T  30% /
</span><br>
<span class="quotelev2">&gt;&gt; tmpfs                  24G     0   24G   0% /dev/shm
</span><br>
<span class="quotelev2">&gt;&gt; /dev/sda1             194M   40M  144M  22% /boot
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI, this is a standalone workstation.
</span><br>
<span class="quotelev2">&gt;&gt; MPI is not being used over any network, private or local.
</span><br>
<span class="quotelev2">&gt;&gt; It is all &quot;inside the box&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - are there any revealing messages in /var/log/messages (or equivalent) about failures when the machine hangs?
</span><br>
<span class="quotelev2">&gt;&gt; Parsing kernel messages is not my favorite hobby or league.
</span><br>
<span class="quotelev2">&gt;&gt; In any case, as far as my search could go, there are just standard
</span><br>
<span class="quotelev2">&gt;&gt; kernel messages on /var/log/messages (e.g. ntpd synchronization, etc),
</span><br>
<span class="quotelev2">&gt;&gt; until the system hangs when the hello_c program fails.
</span><br>
<span class="quotelev2">&gt;&gt; Then the the log starts again with the boot process.
</span><br>
<span class="quotelev2">&gt;&gt; This behavior was repeated time and again over my several
</span><br>
<span class="quotelev2">&gt;&gt; attempts to run OpenMPI programs with the &quot;sm&quot; btl on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I am suspicious of these kernel messages during boot.
</span><br>
<span class="quotelev2">&gt;&gt; Are they telling me of a memory misconfiguration, perhaps?
</span><br>
<span class="quotelev2">&gt;&gt; What do the &quot;*BAD*gran_size: ...&quot; mean?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody out there with a sane funnctional Nehalem system
</span><br>
<span class="quotelev2">&gt;&gt; get these funny &quot;*BAD*gran_size: ...&quot; lines
</span><br>
<span class="quotelev2">&gt;&gt; in &quot; dmesg | more&quot; output, or in /var/log/messages during boot?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
</span><br>
<span class="quotelev2">&gt;&gt; total RAM covered: 49144M
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 64K 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 128K 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 256K 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 512K 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 1M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 2M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 4M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 8M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 16M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 32M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 64M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 128M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 256M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 512M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 64K 	chunk_size: 1G 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; *BAD*gran_size: 64K 	chunk_size: 2G 	num_reg: 8  	lose cover RAM: -1G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 128K 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 256K 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 512K 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 1M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 2M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 4M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 8M 	num_reg: 8  	lose cover RAM: 45G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 16M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 32M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 64M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 128M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 256M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 512M 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 128K 	chunk_size: 1G 	num_reg: 8  	lose cover RAM: 0G
</span><br>
<span class="quotelev2">&gt;&gt; *BAD*gran_size: 128K 	chunk_size: 2G 	num_reg: 8  	lose cover RAM: -1G
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ... and it goes on and on ... then stops with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *BAD*gran_size: 512M 	chunk_size: 2G 	num_reg: 8  	lose cover RAM: -520M
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 1G 	chunk_size: 1G 	num_reg: 6  	lose cover RAM: 1016M
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 1G 	chunk_size: 2G 	num_reg: 7  	lose cover RAM: 1016M
</span><br>
<span class="quotelev2">&gt;&gt; gran_size: 2G 	chunk_size: 2G 	num_reg: 5  	lose cover RAM: 2040M
</span><br>
<span class="quotelev2">&gt;&gt; mtrr_cleanup: can not find optimal value
</span><br>
<span class="quotelev2">&gt;&gt; please specify mtrr_gran_size/mtrr_chunk_size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know about the finicky memory configuration details
</span><br>
<span class="quotelev2">&gt;&gt; required by Nehalem, but I didn't put together this system,
</span><br>
<span class="quotelev2">&gt;&gt; or opened the box to see what is inside yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kernel experts and Nehalem Pros:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If something sounds suspicious, please tell me, and I will
</span><br>
<span class="quotelev2">&gt;&gt; check if the memory modules are the right ones and correctly
</span><br>
<span class="quotelev2">&gt;&gt; distributed on the slots.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2010, at 8:35 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Douglas
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, very helpful indeed!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The machine here is a two-way quad-core, and /proc/cpuinfo shows 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors, twice as much as the physical cores,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just like you see on yours.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, HT is turned on for sure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The security guard opened the office door for me,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I could reboot that machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's called Spinoza.  Maybe that's why it is locked.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now the door is locked again, so I will have to wait until tomorrow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to play around with the BIOS settings.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will remember the BIOS double negative that you pointed out:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;When Disabled only one thread per core is enabled&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ain't that English funny?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So far, I can't get no satisfaction.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hence, let's see if Ralph's suggestion works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Never get no hyperthreading turned on,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and you ain't have no problems with Open MPI.  :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have a great Halifax Spring time!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Douglas Guptill wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, May 04, 2010 at 05:34:40PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 4, 2010, at 4:51 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; One possibility is that the sm btl might not like that you have hyperthreading enabled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I remember that hyperthreading was discussed months ago,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in the previous incarnation of this problem/thread/discussion on &quot;Nehalem vs. Open MPI&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (It sounds like one of those supreme court cases ... )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't really administer that machine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; or any machine with hyperthreading,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; so I am not much familiar to the HT nitty-gritty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; How do I turn off hyperthreading?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is it a BIOS or a Linux thing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I may try that.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I believe it can be turned off via an admin-level cmd, but I'm not certain about it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The challenge was too great to resist, so I yielded, and rebooted my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nehalem (Core i7 920 @ 2.67 GHz) to confirm my thoughts on the issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Entering the BIOS setup by pressing &quot;DEL&quot;, and &quot;right-arrowing&quot; over
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to &quot;Advanced&quot;, then &quot;down arrow&quot; to &quot;CPU configuration&quot;, I found a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; setting called &quot;Intel (R) HT Technology&quot;.  The help dialogue says
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;When Disabled only one thread per core is enabled&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mine is &quot;Enabled&quot;, and I see 8 cpus.  The Core i7, to my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; understanding, is a 4 core chip.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Douglas.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
