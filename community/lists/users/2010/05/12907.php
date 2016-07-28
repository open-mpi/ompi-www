<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 13:30:45 2010" -->
<!-- isoreceived="20100505173045" -->
<!-- sent="Wed, 05 May 2010 13:30:34 -0400" -->
<!-- isosent="20100505173034" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?" -->
<!-- id="4BE1AB3A.4010504_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10B2585F-576A-4B18-A83E-E8E16582329C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 13:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12908.php">Fred Marquis: "[OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Ralph, list.
<br>
<p>Sorry for the long email, and the delay to answer.
<br>
I had to test MPI/reboot the machine several times
<br>
to address the questions.
<br>
Hopefully with answers to all your questions inline below.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'd actually be a little surprised if HT was the problem.  
</span><br>
<span class="quotelev1">&gt; I run with HT enabled on my nehalem boxen all the time.  
</span><br>
<span class="quotelev1">&gt; It's pretty surprising that Open MPI is causing a hard lockup 
</span><br>
<span class="quotelev1">&gt; of your system; user-level processes shouldn't be able to do that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I hope I can do the same here!  :)
<br>
<p><span class="quotelev1">&gt; Notes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. With HT enabled, as you noted, Linux will just see 
</span><br>
<span class="quotelev1">&gt; 2x as many cores as you actually have.  
</span><br>
<span class="quotelev1">&gt; Depending on your desired workload, 
</span><br>
<span class="quotelev1">&gt; this may or may not help you.  
</span><br>
<span class="quotelev1">&gt; But that shouldn't affect the correctness of running your 
</span><br>
<span class="quotelev1">&gt; MPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I agree and that is what I seek.
<br>
Correctness first, performance later.
<br>
I want OpenMPI to work correctly, with or without hyperthreading,
<br>
and preferably using the &quot;sm&quot; BTL.
<br>
In order, let's see what is possible, what works, what performs better.
<br>
<p>***
<br>
<p>Reporting the most recent experiments with v1.4.2,
<br>
1) hyperthreading turned ON,
<br>
2) then HT turned OFF, on the BIOS.
<br>
<p>In both cases I tried
<br>
A) &quot;-mca btl ^sm&quot; and
<br>
B) without it.
<br>
<p>(Just in case, I checked and /proc/cpuinfo reports a number of cores
<br>
consistent with the BIOS setting for HT.)
<br>
<p>Details below, but first off,
<br>
my conclusion is that HT OFF or ON makes *NO difference*.
<br>
The problem seems to be with the &quot;sm&quot; btl.
<br>
When &quot;sm&quot; is on (default) OpenMPI breaks (at least on this computer).
<br>
<p>################################
<br>
1) With hyperthreading turned ON:
<br>
################################
<br>
<p>A) with -mca btl ^sm (i.e. &quot;sm&quot; OFF):
<br>
Ran fine with 4,8,...,128 processes and fails with 256,
<br>
due to system limit on the number of open TCP connections,
<br>
as reported before with 1.4.1.
<br>
<p>B) withOUT any -mca parameters (i.e. &quot;sm&quot; ON)&quot;
<br>
Ran fine with 4,...,32, but failed with 64 processes,
<br>
with the same segfault and syslog error messages I reported
<br>
before for both 1.4.1 and 1.4.2.
<br>
(see below)
<br>
<p>Of course np=64 is oversubscribing, but this is just a &quot;hello world&quot;
<br>
lightweight test.
<br>
Moreover, in the previous experiments with both 1.4.1 and 1.4.2
<br>
the failures happened even earlier, with np = 16, which is the
<br>
exactly number of (virtual) processors with hyperthreading turned on,
<br>
i.e., with no oversubscription.
<br>
<p>The machine returns the prompt, but hangs right after.
<br>
<p>Could the failures be traced to some funny glitch in the
<br>
Fedora Core 12 (2.6.32.11-99.fc12.x86_6) SMP kernel?
<br>
<p>[gus_at_spinoza ~]$ uname -a
<br>
Linux spinoza.ldeo.columbia.edu 2.6.32.11-99.fc12.x86_64 #1 SMP Mon Apr 
<br>
5 19:59:38 UTC 2010 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p>********
<br>
ERROR messages:
<br>
<p>&nbsp;&nbsp;/opt/sw/openmpi/1.4.2/gnu-4.4.3-4/bin/mpiexec -np 64 a.out
<br>
<p>Message from syslogd_at_spinoza at May  4 22:28:15 ...
<br>
&nbsp;&nbsp;kernel:------------[ cut here ]------------
<br>
<p>Message from syslogd_at_spinoza at May  4 22:28:15 ...
<br>
&nbsp;&nbsp;kernel:invalid opcode: 0000 [#1] SMP
<br>
<p>Message from syslogd_at_spinoza at May  4 22:28:15 ...
<br>
&nbsp;&nbsp;kernel:last sysfs file: 
<br>
/sys/devices/system/cpu/cpu15/topology/physical_package_id
<br>
<p>Message from syslogd_at_spinoza at May  4 22:28:15 ...
<br>
&nbsp;&nbsp;kernel:Stack:
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 63 with PID 6587 on node 
<br>
spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Message from syslogd_at_spinoza at May  4 22:28:15 ...
<br>
&nbsp;&nbsp;kernel:Call Trace:
<br>
<p>Message from syslogd_at_spinoza at May  4 22:28:15 ...
<br>
&nbsp;&nbsp;kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 
<br>
4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 04 
<br>
&lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
<br>
<p>************
<br>
################################
<br>
2) Now with hyperthreading OFF:
<br>
################################
<br>
<p>A) with -mca btl ^sm (i.e. &quot;sm&quot; OFF):
<br>
Ran fine with 4,8,...,128 processes and fails with 256,
<br>
due to system limit on the number of open TCP connections,
<br>
as reported before with 1.4.1.
<br>
This is exactly the same result as with HT ON.
<br>
<p>B) withOUT any -mca parameters (i.e. &quot;sm&quot; ON)&quot;
<br>
Ran fine with 4,...,32, but failed with 64 processes,
<br>
with the same syslog messages, but hung before showing
<br>
the Open MPI segfault message (see below).
<br>
So, again, very similar behavior as with HT ON
<br>
<p>-------------------------------------------------------
<br>
My conclusion is that HT OFF or ON makes NO difference.
<br>
The problem seems to be with the &quot;sm&quot; btl.
<br>
-------------------------------------------------------
<br>
<p>***********
<br>
ERROR MESSAGES
<br>
<p>[root_at_spinoza examples]# /opt/sw/openmpi/1.4.2/gnu-4.4.3-4/bin/mpiexec 
<br>
-np 64 a.out
<br>
<p>Message from syslogd_at_spinoza at May  5 12:04:05 ...
<br>
&nbsp;&nbsp;kernel:------------[ cut here ]------------
<br>
<p>Message from syslogd_at_spinoza at May  5 12:04:05 ...
<br>
&nbsp;&nbsp;kernel:invalid opcode: 0000 [#1] SMP
<br>
<p>Message from syslogd_at_spinoza at May  5 12:04:05 ...
<br>
&nbsp;&nbsp;kernel:last sysfs file: 
<br>
/sys/devices/system/cpu/cpu7/topology/physical_package_id
<br>
<p>Message from syslogd_at_spinoza at May  5 12:04:05 ...
<br>
&nbsp;&nbsp;kernel:Stack:
<br>
<p>Message from syslogd_at_spinoza at May  5 12:04:05 ...
<br>
&nbsp;&nbsp;kernel:Call Trace:
<br>
<p><p><p><p>***********
<br>
<span class="quotelev1">&gt; 2. To confirm: yes, TCP will be quite a bit slower than sm 
</span><br>
<span class="quotelev1">&gt; (but again, that depends on how much MPI traffic you're sending).  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thank you, the clarification is really important.
<br>
I suppose then that &quot;sm&quot; is preferred, if I can get it to work right.
<br>
<p>The main goal is to run yet another atmospheric model on this machine.
<br>
It is a typical domain decomposition problem,
<br>
with a bunch of 2D arrays being exchanged
<br>
across domain boundaries at each time step.
<br>
This is the MPI traffic.
<br>
There are probably some collectives too,
<br>
but I haven't checked out the code.
<br>
<p><span class="quotelev1">&gt; 3. Yes, you can disable the 2nd thread on each core via Linux, 
</span><br>
<span class="quotelev1">&gt; but you need root-level access to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have root-level access.
<br>
However, so far I only learned the BIOS way, which requires a reboot.
<br>
<p>Doing it in Linux would be more convenient, avoiding reboots,
<br>
I suppose.
<br>
How do I do it in Linux.
<br>
Should I overwrite something in /proc ?
<br>
Something else.
<br>
<p><span class="quotelev1">&gt; Some questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - is the /tmp directory on your local disk?
</span><br>
<p>Yes.
<br>
And there is plenty of room in the / filesystem and the
<br>
/tmp directory:
<br>
<p>[root_at_spinoza ~]# ll -d /tmp
<br>
drwxrwxrwt 22 root root 4096 2010-05-05 12:36 /tmp
<br>
<p>[root_at_spinoza ~]# df -h
<br>
Filesystem            Size  Used Avail Use% Mounted on
<br>
/dev/mapper/vg_spinoza-lv_root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.8T  504G  1.2T  30% /
<br>
tmpfs                  24G     0   24G   0% /dev/shm
<br>
/dev/sda1             194M   40M  144M  22% /boot
<br>
<p><p>FYI, this is a standalone workstation.
<br>
MPI is not being used over any network, private or local.
<br>
It is all &quot;inside the box&quot;.
<br>
<p><span class="quotelev1">&gt; - are there any revealing messages in 
</span><br>
<span class="quotelev1">&gt; /var/log/messages (or equivalent) 
</span><br>
<span class="quotelev1">&gt; about failures when the machine hangs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Parsing kernel messages is not my favorite hobby or league.
<br>
In any case, as far as my search could go, there are just standard
<br>
kernel messages on /var/log/messages (e.g. ntpd synchronization, etc),
<br>
until the system hangs when the hello_c program fails.
<br>
Then the the log starts again with the boot process.
<br>
This behavior was repeated time and again over my several
<br>
attempts to run OpenMPI programs with the &quot;sm&quot; btl on.
<br>
<p>***
<br>
<p>However, I am suspicious of these kernel messages during boot.
<br>
Are they telling me of a memory misconfiguration, perhaps?
<br>
What do the &quot;*BAD*gran_size: ...&quot; mean?
<br>
<p>Does anybody out there with a sane funnctional Nehalem system
<br>
get these funny &quot;*BAD*gran_size: ...&quot; lines
<br>
in &quot; dmesg | more&quot; output, or in /var/log/messages during boot?
<br>
<p>%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
<br>
total RAM covered: 49144M
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 64K 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 128K 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 256K 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 512K 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 1M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 2M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 4M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 8M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 16M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 32M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 64M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 128M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 256M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 512M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 64K 	chunk_size: 1G 	num_reg: 8  	lose cover RAM: 0G
<br>
*BAD*gran_size: 64K 	chunk_size: 2G 	num_reg: 8  	lose cover RAM: -1G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 128K 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 256K 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 512K 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 1M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 2M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 4M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 8M 	num_reg: 8  	lose cover RAM: 45G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 16M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 32M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 64M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 128M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 256M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 512M 	num_reg: 8  	lose cover RAM: 0G
<br>
&nbsp;&nbsp;gran_size: 128K 	chunk_size: 1G 	num_reg: 8  	lose cover RAM: 0G
<br>
*BAD*gran_size: 128K 	chunk_size: 2G 	num_reg: 8  	lose cover RAM: -1G
<br>
<p><p>... and it goes on and on ... then stops with
<br>
<p><p>*BAD*gran_size: 512M 	chunk_size: 2G 	num_reg: 8  	lose cover RAM: -520M
<br>
&nbsp;&nbsp;gran_size: 1G 	chunk_size: 1G 	num_reg: 6  	lose cover RAM: 1016M
<br>
&nbsp;&nbsp;gran_size: 1G 	chunk_size: 2G 	num_reg: 7  	lose cover RAM: 1016M
<br>
&nbsp;&nbsp;gran_size: 2G 	chunk_size: 2G 	num_reg: 5  	lose cover RAM: 2040M
<br>
mtrr_cleanup: can not find optimal value
<br>
please specify mtrr_gran_size/mtrr_chunk_size
<br>
<p>...
<br>
<p>%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
<br>
<p>I know about the finicky memory configuration details
<br>
required by Nehalem, but I didn't put together this system,
<br>
or opened the box to see what is inside yet.
<br>
<p>Kernel experts and Nehalem Pros:
<br>
<p>If something sounds suspicious, please tell me, and I will
<br>
check if the memory modules are the right ones and correctly
<br>
distributed on the slots.
<br>
<p>**
<br>
<p>Thank you very much,
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
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 4, 2010, at 8:35 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Douglas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, very helpful indeed!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machine here is a two-way quad-core, and /proc/cpuinfo shows 16
</span><br>
<span class="quotelev2">&gt;&gt; processors, twice as much as the physical cores,
</span><br>
<span class="quotelev2">&gt;&gt; just like you see on yours.
</span><br>
<span class="quotelev2">&gt;&gt; So, HT is turned on for sure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The security guard opened the office door for me,
</span><br>
<span class="quotelev2">&gt;&gt; and I could reboot that machine.
</span><br>
<span class="quotelev2">&gt;&gt; It's called Spinoza.  Maybe that's why it is locked.
</span><br>
<span class="quotelev2">&gt;&gt; Now the door is locked again, so I will have to wait until tomorrow
</span><br>
<span class="quotelev2">&gt;&gt; to play around with the BIOS settings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will remember the BIOS double negative that you pointed out:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;When Disabled only one thread per core is enabled&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Ain't that English funny?
</span><br>
<span class="quotelev2">&gt;&gt; So far, I can't get no satisfaction.
</span><br>
<span class="quotelev2">&gt;&gt; Hence, let's see if Ralph's suggestion works.
</span><br>
<span class="quotelev2">&gt;&gt; Never get no hyperthreading turned on,
</span><br>
<span class="quotelev2">&gt;&gt; and you ain't have no problems with Open MPI.  :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Have a great Halifax Spring time!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Gus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Douglas Guptill wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, May 04, 2010 at 05:34:40PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 4, 2010, at 4:51 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; One possibility is that the sm btl might not like that you have hyperthreading enabled.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I remember that hyperthreading was discussed months ago,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the previous incarnation of this problem/thread/discussion on &quot;Nehalem vs. Open MPI&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (It sounds like one of those supreme court cases ... )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't really administer that machine,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or any machine with hyperthreading,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; so I am not much familiar to the HT nitty-gritty.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How do I turn off hyperthreading?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it a BIOS or a Linux thing?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I may try that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe it can be turned off via an admin-level cmd, but I'm not certain about it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The challenge was too great to resist, so I yielded, and rebooted my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nehalem (Core i7 920 @ 2.67 GHz) to confirm my thoughts on the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Entering the BIOS setup by pressing &quot;DEL&quot;, and &quot;right-arrowing&quot; over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to &quot;Advanced&quot;, then &quot;down arrow&quot; to &quot;CPU configuration&quot;, I found a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting called &quot;Intel (R) HT Technology&quot;.  The help dialogue says
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;When Disabled only one thread per core is enabled&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mine is &quot;Enabled&quot;, and I see 8 cpus.  The Core i7, to my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understanding, is a 4 core chip.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope that helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Douglas.
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12908.php">Fred Marquis: "[OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
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
