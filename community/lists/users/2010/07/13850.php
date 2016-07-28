<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 15:59:30 2010" -->
<!-- isoreceived="20100728195930" -->
<!-- sent="Wed, 28 Jul 2010 15:59:03 -0400" -->
<!-- isosent="20100728195903" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTiksC=Xi7GkoYmQ3_yYm4GYt5hPONGL4zdo1C2-j_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C5084FB.8000602_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI shared with NFS, but says different version<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 15:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13849.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13849.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13855.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13855.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 28, 2010 at 3:28 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Cristobal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 28, 2010 at 11:09 AM, Gus Correa &lt;gus_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    In case you are not using full path name for mpiexec/mpirun,
</span><br>
<span class="quotelev2">&gt;&gt;    what does &quot;which mpirun&quot; say?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; $which mpirun
</span><br>
<span class="quotelev2">&gt;&gt;      /opt/openmpi-1.4.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Often times this is a source of confusion, old versions may
</span><br>
<span class="quotelev2">&gt;&gt;    be first on the PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Gus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openMPI version problem is now gone, i can confirm that the version is
</span><br>
<span class="quotelev2">&gt;&gt; consistent now :), thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This is good news.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  however, i keep getting this kernel crash randomnly when i execute with
</span><br>
<span class="quotelev2">&gt;&gt; -np higher than 5
</span><br>
<span class="quotelev2">&gt;&gt; these are Xeons, with Hyperthreading On, is that a problem??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The problem may be with Hyperthreading, maybe not.
</span><br>
<span class="quotelev1">&gt; Which Xeons?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--&gt; they are not so old, not so new either
<br>
fcluster_at_agua:~$ cat /proc/cpuinfo | more
<br>
processor : 0
<br>
vendor_id : GenuineIntel
<br>
cpu family : 6
<br>
model : 26
<br>
model name : Intel(R) Xeon(R) CPU           E5520  @ 2.27GHz
<br>
stepping : 5
<br>
cpu MHz : 1596.000
<br>
cache size : 8192 KB
<br>
physical id : 0
<br>
siblings : 8
<br>
core id : 0
<br>
cpu cores : 4
<br>
apicid : 0
<br>
initial apicid : 0
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 11
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat
<br>
pse36 clflush dts acpi mmx fxsr sse sse2 ss h
<br>
t tm pbe syscall nx rdtscp lm constant_tsc arch_perfmon pebs bts rep_good
<br>
xtopology nonstop_tsc aperfmperf pni dtes64 monitor ds_
<br>
cpl vmx est tm2 ssse3 cx16 xtpr pdcm dca sse4_1 sse4_2 popcnt lahf_lm ida
<br>
tpr_shadow vnmi flexpriority ept vpid
<br>
bogomips : 4522.21
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 40 bits physical, 48 bits virtual
<br>
power management:
<br>
...same for cpu1, 2, 3, ..., 15.
<br>
<p>information on how the cpu is distributed
<br>
fcluster_at_agua:~$ lstopo
<br>
System(7992MB)
<br>
&nbsp;&nbsp;Socket#0 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#14
<br>
&nbsp;&nbsp;Socket#1 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P#15
<br>
<p><p><p><p><p><span class="quotelev1">&gt; If I remember right, the old hyperthreading on old Xeons was problematic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OTOH, about 1-2 months ago I had trouble with OpenMPI on a relatively new
</span><br>
<span class="quotelev1">&gt; Xeon Nehalem machine with (the new) Hyperthreading turned on,
</span><br>
<span class="quotelev1">&gt; and Fedora Core 13.
</span><br>
<span class="quotelev1">&gt; The machine would hang with the OpenMPI connectivity example.
</span><br>
<span class="quotelev1">&gt; I reported this to the list, you may find in the archives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--i foudn the archives recently about an hour ago, was not sure if it was
<br>
the same problem but i removed HT for testing with setting the online flag
<br>
to 0 on the extra cpus showed with lstopo, unfortenately i also crashes, so
<br>
HT may not be the problem.
<br>
<p><span class="quotelev1">&gt; Apparently other people got everything (OpenMPI with HT on Nehalem)
</span><br>
<span class="quotelev1">&gt; working in more stable distributions (CentOS, RHEL, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That problem was likely to be in the FC13 kernel,
</span><br>
<span class="quotelev1">&gt; because even turning off HT I still had the machine hanging.
</span><br>
<span class="quotelev1">&gt; Nothing worked with shared memory turned on,
</span><br>
<span class="quotelev1">&gt; so I had to switch OpenMPI to use tcp instead,
</span><br>
<span class="quotelev1">&gt; which is kind of ridiculous in a standalone machine.
</span><br>
<p><p>--&gt; very interesting, sm can be the problem
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  im trying to locate the kernel error on logs, but after rebooting a crash,
</span><br>
<span class="quotelev2">&gt;&gt; the error is not in the kern.log (neither kern.log.1).
</span><br>
<span class="quotelev2">&gt;&gt; all i remember is that it starts with &quot;Kernel BUG...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and somepart it mentions a certain CPU X, where that cpu can be any from 0
</span><br>
<span class="quotelev2">&gt;&gt; to 15 (im testing only in main node).  Someone knows where the log of kernel
</span><br>
<span class="quotelev2">&gt;&gt; error could be?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried to turn off hyperthreading?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--&gt; yes, tried, same crashes.
<br>
<p><p><span class="quotelev1">&gt; In any case, depending on the application, it may not help much performance
</span><br>
<span class="quotelev1">&gt; to have HT on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A more radical alternative is to try
</span><br>
<span class="quotelev1">&gt; -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; in the mpirun command line.
</span><br>
<span class="quotelev1">&gt; That is what worked in the case I mentioned above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>wow!, this worked really :),  you pointed out the problem, it was shared
<br>
memory.
<br>
i have 4 nodes, so anyways there will be node comunication, do you think i
<br>
can rely on working with -mca btl tcp,self?? i dont mind small lag.
<br>
<p>i just have one more question, is this a problem of the ubuntu server
<br>
kernel?? from the Nehalem Cpus?? from openMPI (i dont think) ??
<br>
<p>and on what depends that in the future, sm could be possible on the same
<br>
configuration i have?? kernel update?.
<br>
<p>Thanks very much Gus, really!
<br>
Cristobal
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Does it run only on the head node alone?
</span><br>
<span class="quotelev2">&gt;&gt;           (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev2">&gt;&gt;           Try to put only the head node on the hostfile and execute
</span><br>
<span class="quotelev2">&gt;&gt;        with mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt; i will try only with the head node, and post results back
</span><br>
<span class="quotelev2">&gt;&gt;           This may help sort out what is going on.
</span><br>
<span class="quotelev2">&gt;&gt;           Hopefully it will run on the head node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev2">&gt;&gt;           The error messages refer to the openib btl (i.e. Infiniband),
</span><br>
<span class="quotelev2">&gt;&gt;           and complains of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        no we are just using normal network 100MBit/s , since i am just
</span><br>
<span class="quotelev2">&gt;&gt;        testing yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev2">&gt;&gt;           version of Open MPI?&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;           It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt; i agree, somewhere there must be the remains of the older
</span><br>
<span class="quotelev2">&gt;&gt;        version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Did you configure/build OpenMPI from source, or did you install
</span><br>
<span class="quotelev2">&gt;&gt;           it with apt-get?
</span><br>
<span class="quotelev2">&gt;&gt;           It may be easier/less confusing to install from source.
</span><br>
<span class="quotelev2">&gt;&gt;           If you did, what configure options did you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt;i installed from source, ./configure
</span><br>
<span class="quotelev2">&gt;&gt;        --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid
</span><br>
<span class="quotelev2">&gt;&gt;        --disable--static
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev2">&gt;&gt;           it is not enough to set it on
</span><br>
<span class="quotelev2">&gt;&gt;           the command line, because it will be effective only on the
</span><br>
<span class="quotelev2">&gt;&gt;        head node.
</span><br>
<span class="quotelev2">&gt;&gt;           You need to either add them to the PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;           on your .bashrc/.cshrc files (assuming these files and your home
</span><br>
<span class="quotelev2">&gt;&gt;           directory are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev2">&gt;&gt;           or use the --prefix option of mpiexec to point to the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;        main
</span><br>
<span class="quotelev2">&gt;&gt;           directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        yes, all nodes have their PATH and LD_LIBRARY_PATH set up
</span><br>
<span class="quotelev2">&gt;&gt;        properly inside the login scripts ( .bashrc in my case  )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Needless to say, you need to check and ensure that the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;           directory (and maybe your home directory, and your work
</span><br>
<span class="quotelev2">&gt;&gt;        directory)
</span><br>
<span class="quotelev2">&gt;&gt;           is (are)
</span><br>
<span class="quotelev2">&gt;&gt;           really mounted on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt; yes, doublechecked that they are
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt; thanks really!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Update: i just reinstalled openMPI, with the same parameters,
</span><br>
<span class="quotelev2">&gt;&gt;        and it
</span><br>
<span class="quotelev2">&gt;&gt;           seems that the problem has gone, i couldnt test entirely but
</span><br>
<span class="quotelev2">&gt;&gt;        when i
</span><br>
<span class="quotelev2">&gt;&gt;           get back to lab ill confirm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        best regards! Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13850/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13849.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13849.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13855.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13855.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
