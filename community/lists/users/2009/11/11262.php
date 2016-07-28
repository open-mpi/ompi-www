<?
$subject_val = "[OMPI users] Program hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 20:24:16 2009" -->
<!-- isoreceived="20091124012416" -->
<!-- sent="Tue, 24 Nov 2009 09:24:10 +0800" -->
<!-- isosent="20091124012410" -->
<!-- name="Jiaye Li" -->
<!-- email="jameslipd_at_[hidden]" -->
<!-- subject="[OMPI users] Program hangs" -->
<!-- id="b5d787260911231724q109489e7s30541edbe36b00e3_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B0B1A5C.7040106_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI users] Program hangs<br>
<strong>From:</strong> Jiaye Li (<em>jameslipd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 20:24:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11263.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Eugene
<br>
<p><p>I am sorry that I may not explain the problem clearly last time. The problem
<br>
is that I tested Ompi with PWscf program on one quadcore node. At the
<br>
initial several hours, the program went on quite well. When the electronic
<br>
scf is going to converge, the program started to hang. For example it hangs
<br>
at the first scf iteration of bfgs steps =23. I waited another 10 hours for
<br>
the program to go on, but in vain
<br>
<p>The kernel is 2.6.29.4-167.fc11.i686.PAE
<br>
The following is the compiler I used to install Ompi. I configured Ompi with
<br>
options of CC=gcc, FC=ifort.
<br>
<p>******************************
<br>
********************************************************************************
<br>
intel-icc101018-10.1.018-1.i386
<br>
libgcc-4.4.0-4.i586
<br>
gcc-4.4.0-4.i586
<br>
gcc-gfortran-4.4.0-4.i586
<br>
gcc-c++-4.4.0-4.i586
<br>
intel-ifort101018-10.1.018-1.i386
<br>
<p>and the architecture is:
<br>
<p>processor    : 0
<br>
vendor_id    : GenuineIntel
<br>
cpu family    : 6
<br>
model        : 23
<br>
model name    : Intel(R) Core(TM)2 Quad CPU    Q9550  @ 2.83GHz
<br>
stepping    : 10
<br>
cpu MHz        : 2825.937
<br>
cache size    : 6144 KB
<br>
physical id    : 0
<br>
siblings    : 4
<br>
core id        : 0
<br>
cpu cores    : 4
<br>
apicid        : 0
<br>
initial apicid    : 0
<br>
fdiv_bug    : no
<br>
hlt_bug        : no
<br>
f00f_bug    : no
<br>
coma_bug    : no
<br>
fpu        : yes
<br>
fpu_exception    : yes
<br>
cpuid level    : 13
<br>
wp        : yes
<br>
flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov
<br>
pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe nx lm constant_tsc
<br>
arch_perfmon pebs bts pni dtes64 monitor ds_cpl vmx smx est tm2 ssse3 cx16
<br>
xtpr pdcm sse4_1 xsave lahf_lm tpr_shadow vnmi flexpriority
<br>
bogomips    : 5651.87
<br>
clflush size    : 64
<br>
power management:
<br>
<p>**************************************************************************************************************
<br>
<p><p>On Tue, Nov 24, 2009 at 7:27 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I can't tell if these problems are related to trac ticket 2043 or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler:  In my experience, trac 2043 depends on GCC 4.4.x.  It isn't
</span><br>
<span class="quotelev1">&gt; necessarily a GCC bug... perhaps it's just exposing an OMPI problem.  I'm
</span><br>
<span class="quotelev1">&gt; confused what compiler Jiaye is using, and Vasilis is apparently seeing a
</span><br>
<span class="quotelev1">&gt; problem when using the PGI compiler.   But, maybe other compilers in
</span><br>
<span class="quotelev1">&gt; addition to GCC 4.4.x are exposing the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Severity:  In my experience, trac 2043 shows up rather dramatically:
</span><br>
<span class="quotelev1">&gt;  within dozens to hundreds of iterations of simple message patterns.  So, a
</span><br>
<span class="quotelev1">&gt; problem that shows up only after hours of execution feels to me to be
</span><br>
<span class="quotelev1">&gt; something different.  But maybe I misunderstand Jiaye's and Vasili's cases:
</span><br>
<span class="quotelev1">&gt;  are the programs running well for several hours before the hang occurs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shared memory:  Trac 2043 appears related to shared memory.  Jiaye seems to
</span><br>
<span class="quotelev1">&gt; run on a single node.  Vasilis talks of running on a &quot;cluster&quot; -- so I don't
</span><br>
<span class="quotelev1">&gt; know if that means over an interconnect or still using sm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, it's hard to know which problems are the same or different when we
</span><br>
<span class="quotelev1">&gt; don't yet really understand what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vasilis gkanis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I also experience a similar problem with the MUMPS solver, when I run it
</span><br>
<span class="quotelev2">&gt;&gt; on a cluster. After several hours of running the code does not produce any
</span><br>
<span class="quotelev2">&gt;&gt; results, although the command top shows that the program occupies 100% of
</span><br>
<span class="quotelev2">&gt;&gt; the CPU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The difference here, however, is that the same program runs fine on my PC.
</span><br>
<span class="quotelev2">&gt;&gt; The differences between my PC and the cluster are:
</span><br>
<span class="quotelev2">&gt;&gt; 1) 32bit vs 64-bit(cluster)
</span><br>
<span class="quotelev2">&gt;&gt; 2) intel compiler vs portland compiler(cluster)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday 20 November 2009 03:50:17 am Jiaye Li wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed openmpi-1.3.3 on my single node(cpu) intel 64bit quad-core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine. The compiler info is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *********************************** intel-icc101018-10.1.018-1.i386
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libgcc-4.4.0-4.i586
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc-4.4.0-4.i586
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc-gfortran-4.4.0-4.i586
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc-c++-4.4.0-4.i586
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel-ifort101018-10.1.018-1.i386
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***********************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled PWscf program with openmpi and tested the program. At the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beginning, the execution of  PW went on well, but after about 10 h, when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the program is going to finish. The program hang there, but the cpu time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is still occupied. (100% taken up by the program). There seems to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something wrong, somewhere. Any ideas? Thank you in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><pre>
-- 
Sincerely yours
Jiaye Li

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11262/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11263.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
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
