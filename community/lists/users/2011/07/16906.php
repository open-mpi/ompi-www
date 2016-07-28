<?
$subject_val = "Re: [OMPI users] OpenMPI vs Intel Efficiency question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 23:06:51 2011" -->
<!-- isoreceived="20110713030651" -->
<!-- sent="Tue, 12 Jul 2011 22:06:47 -0500" -->
<!-- isosent="20110713030647" -->
<!-- name="Mohan, Ashwin" -->
<!-- email="ashmohan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI vs Intel Efficiency question" -->
<!-- id="C47F8344CE6D9B459A06E351D9CF25C9022490EC_at_POSTOFFICE.seas.wustl.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E1D0147.40809_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI vs Intel Efficiency question<br>
<strong>From:</strong> Mohan, Ashwin (<em>ashmohan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 23:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Previous message:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>In reply to:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Reply:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim, 
<br>
<p>Thanks for your message. I was however not clear about your suggestions. Would appreciate if you could clarify.
<br>
<p>You say,&quot; So, if you want a sane comparison but aren't willing to study the compiler manuals, you might use (if your source code doesn't violate the aliasing rules) mpiicpc -prec-div -prec-sqrt -ansi-alias  and at least (if your linux compiler is g++) mpiCC -O2 possibly with some of the other options I mentioned earlier.&quot;
<br>
###From your response above, I understand to use, for Intel, this syntax: &quot;mpiicpc -prec-div -prec-sqrt -ansi-alias&quot; and for OPENMPI use &quot;mpiCC -O2&quot;. I am not certain about the other options you mention.  
<br>
<p>###Also, I presently use a hostfile while submitting my mpirun. Each node has four slots and my hostfile was &quot;nodename slots=4&quot;. My compile code is mpiCC -o xxx.xpp &lt;filename&gt;. 
<br>
<p>If you have as ancient a g++ as your indication of FC3 implies, it really isn't fair to compare it with a currently supported compiler.
<br>
###Do you suggest upgrading the current installation of g++? Would that help?
<br>
<p>###How do I ensure that all 4 slots are active when i submit a mpirun -np 4 &lt;filename&gt; command. When I do &quot;top&quot;, I notice that all 4 slots are active. I noticed this when I did &quot;top&quot; with the Intel machine too, that is, it showed four slots active. 
<br>
<p>Thank you..ashwin.
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Tim Prince
<br>
Sent: Tue 7/12/2011 9:21 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OpenMPI vs Intel Efficiency question
<br>
&nbsp;
<br>
On 7/12/2011 7:45 PM, Mohan, Ashwin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed that the exact same code took 50% more time to run on OpenMPI
</span><br>
<span class="quotelev1">&gt; than Intel. I use the following syntax to compile and run:
</span><br>
<span class="quotelev1">&gt; Intel MPI Compiler: (Redhat Fedora Core release 3 (Heidelberg), Kernel
</span><br>
<span class="quotelev1">&gt; version: Linux 2.6.9-1.667smp x86_64**
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpiicpc -o xxxx.cpp&lt;filename&gt;  -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.3: (Centos 5.5 w/ python 2.4.3, Kernel version: Linux
</span><br>
<span class="quotelev1">&gt; 2.6.18-194.el5 x86_64)**
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       	mpiCC xxxx.cpp -o&lt;filename
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI run command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       	mpirun -np 4&lt;filename&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **Other hardware specs**
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      processor       : 0
</span><br>
<span class="quotelev1">&gt;      vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt;      cpu family      : 15
</span><br>
<span class="quotelev1">&gt;      model           : 3
</span><br>
<span class="quotelev1">&gt;      model name      : Intel(R) Xeon(TM) CPU 3.60GHz
</span><br>
<span class="quotelev1">&gt;      stepping        : 4
</span><br>
<span class="quotelev1">&gt;      cpu MHz         : 3591.062
</span><br>
<span class="quotelev1">&gt;      cache size      : 1024 KB
</span><br>
<span class="quotelev1">&gt;      physical id     : 0
</span><br>
<span class="quotelev1">&gt;      siblings        : 2
</span><br>
<span class="quotelev1">&gt;      core id         : 0
</span><br>
<span class="quotelev1">&gt;      cpu cores       : 1
</span><br>
<span class="quotelev1">&gt;      apicid          : 0
</span><br>
<span class="quotelev1">&gt;      fpu             : yes
</span><br>
<span class="quotelev1">&gt;      fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt;      cpuid level     : 5
</span><br>
<span class="quotelev1">&gt;      wp              : yes
</span><br>
<span class="quotelev1">&gt;      flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev1">&gt; pge mca cmov pat pse36
</span><br>
<span class="quotelev1">&gt;      clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall lmconstant_tsc
</span><br>
<span class="quotelev1">&gt; pni monitor ds_cpl est tm2
</span><br>
<span class="quotelev1">&gt;       cid xtpr
</span><br>
<span class="quotelev1">&gt;       bogomips        : 7182.12
</span><br>
<span class="quotelev1">&gt;      clflush size    : 64
</span><br>
<span class="quotelev1">&gt;      cache_alignment : 128
</span><br>
<span class="quotelev1">&gt;      address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;      power management:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can the issue of efficiency be deciphered from the above info?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the compiler flags have an effect on the efficiency of the
</span><br>
<span class="quotelev1">&gt; simulation. If so, what flags maybe useful to check to be included for
</span><br>
<span class="quotelev1">&gt; Open MPI.
</span><br>
The default options for icpc are roughly equivalent to the quite 
<br>
aggressive choice
<br>
g++ -fno-strict-aliasing -ffast-math -fnocx-limited-range -O3 
<br>
-funroll-loops --param max-unroll-times=2
<br>
while you apparently used default -O0 for your mpiCC (if it is g++), 
<br>
neither of which is a very good initial choice for performance analysis. 
<br>
So, if you want a sane comparison but aren't willing to study the 
<br>
compiler manuals, you might use (if your source code doesn't violate the 
<br>
aliasing rules)
<br>
mpiicpc -prec-div -prec-sqrt -ansi-alias
<br>
and at least
<br>
(if your linux compiler is g++)
<br>
mpiCC -O2
<br>
possibly with some of the other options I mentioned earlier.
<br>
If you have as ancient a g++ as your indication of FC3 implies, it 
<br>
really isn't fair to compare it with a currently supported compiler.
<br>
<p>Then, Intel MPI, by default, would avoid using HyperThreading, even 
<br>
though you have it enabled on your CPU, so, I suppose, if you are 
<br>
running on a single core, it will be rotating among your 4 MPI processes 
<br>
1 at a time.  The early Intel HyperThread CPUs typically took 15% longer 
<br>
to run MPI jobs when running 2 processes per core.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will including MPICH2 increase efficiency in running simulations using
</span><br>
<span class="quotelev1">&gt; OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
You have to choose a single MPI.  Having MPICH2 installed shouldn't 
<br>
affect performance of OpenMPI or Intel MPI, except to break your 
<br>
installation if you don't keep things sorted out.
<br>
OpenMPI and Intel MPI normally perform very close, if using equivalent 
<br>
settings, when working within the environments for which both are suited.
<br>
<pre>
-- 
Tim Prince
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Previous message:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>In reply to:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Reply:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
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
