<?
$subject_val = "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 19:16:46 2012" -->
<!-- isoreceived="20120716231646" -->
<!-- sent="Mon, 16 Jul 2012 23:16:36 +0000" -->
<!-- isosent="20120716231636" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB710DD21DA_at_FMSMSX108.amr.corp.intel.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="697F25A3-0920-4D4B-A2E0-46B841C0577D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-16 19:16:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19779.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19783.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or you could just do:
<br>
<p>mpirun --slot-list 0-3 -np 4 hostname
<br>
<p>That will put the four procs on the cpu numbers 0-3, which should all be on the first socket
<br>
[Tom]
<br>
Agreed.  &quot;physical id : 0&quot; on each of CPUs 0-3 from your /proc/cpuinfo output confirms this.
<br>
<p>-Tom
<br>
<p><p>On Jul 16, 2012, at 3:23 PM, Dominik Goeddeke wrote:
<br>
<p><p>in the &quot;old&quot; 1.4.x and 1.5.x, I achieved this by using rankfiles (see FAQ), and it worked very well. With these versions, --byslot etc. didn't work for me, I always needed the rankfiles. I haven't tried the overhauled &quot;convenience wrappers&quot; in 1.6 that you are using for this feature yet, but I see no reason why the &quot;old&quot; way should not work, although it requires some shell magic if rankfiles are to be generated automatically from e.g. PBS or SLURM node lists.
<br>
<p>Dominik
<br>
<p>On 07/17/2012 12:13 AM, Anne M. Hammond wrote:
<br>
There are 2 physical processors, each with 4 cores (no hyperthreading).
<br>
<p>I want to instruct openmpi to run only on the first processor, using 4 cores.
<br>
<p><p>[hammond_at_node48 ~]$ cat /proc/cpuinfo
<br>
processor : 0
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 0
<br>
siblings : 4
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
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.38
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>processor : 1
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 0
<br>
siblings : 4
<br>
core id : 1
<br>
cpu cores : 4
<br>
apicid : 1
<br>
initial apicid : 1
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.17
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>processor : 2
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 0
<br>
siblings : 4
<br>
core id : 2
<br>
cpu cores : 4
<br>
apicid : 2
<br>
initial apicid : 2
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.19
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>processor : 3
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 0
<br>
siblings : 4
<br>
core id : 3
<br>
cpu cores : 4
<br>
apicid : 3
<br>
initial apicid : 3
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.16
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>processor : 4
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 1
<br>
siblings : 4
<br>
core id : 0
<br>
cpu cores : 4
<br>
apicid : 4
<br>
initial apicid : 4
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.16
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>processor : 5
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 1
<br>
siblings : 4
<br>
core id : 1
<br>
cpu cores : 4
<br>
apicid : 5
<br>
initial apicid : 5
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.16
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>processor : 6
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 1
<br>
siblings : 4
<br>
core id : 2
<br>
cpu cores : 4
<br>
apicid : 6
<br>
initial apicid : 6
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.17
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>processor : 7
<br>
vendor_id : AuthenticAMD
<br>
cpu family : 16
<br>
model : 4
<br>
model name : Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping : 2
<br>
cpu MHz : 2311.694
<br>
cache size : 512 KB
<br>
physical id : 1
<br>
siblings : 4
<br>
core id : 3
<br>
cpu cores : 4
<br>
apicid : 7
<br>
initial apicid : 7
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 5
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips : 4623.18
<br>
TLB size : 1024 4K pages
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p>On Jul 16, 2012, at 4:09 PM, Elken, Tom wrote:
<br>
<p><p>Anne,
<br>
<p>output from &quot;cat /proc/cpuinfo&quot; on your node &quot;hostname&quot;  may help those trying to answer.
<br>
<p>-Tom
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Monday, July 16, 2012 2:47 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2
<br>
<p>I gather there are two sockets on this node? So the second cmd line is equivalent
<br>
to leaving &quot;num-sockets&quot; off of the cmd line?
<br>
<p>I haven't tried what you are doing, so it is quite possible this is a bug.
<br>
<p><p>On Jul 16, 2012, at 1:49 PM, Anne M. Hammond wrote:
<br>
<p>Thanks!
<br>
<p>Built the latest snapshot.  Still getting an error when trying to run
<br>
on only one socket (see below):  Is there a workaround?
<br>
<p>[hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 1 --npersocket 4
<br>
hostname
<br>
----------------------------------------------------------------------
<br>
---- An invalid physical processor ID was returned when attempting to
<br>
bind an MPI process to a unique processor.
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M).  Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host.
<br>
<p>You job will now abort.
<br>
----------------------------------------------------------------------
<br>
<pre>
----
----------------------------------------------------------------------
---- mpirun was unable to start the specified application as it
encountered an error:
Error name: Fatal
Node: node65.cl.corp.com&lt;<a href="http://node65.cl.corp.com/">http://node65.cl.corp.com/</a>&gt;
when attempting to start process rank 0.
----------------------------------------------------------------------
----
4 total processes failed to start
[hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 2 --npersocket 4
hostname node65.cl.corp.com&lt;<a href="http://node65.cl.corp.com/">http://node65.cl.corp.com/</a>&gt; node65.cl.corp.com&lt;<a href="http://node65.cl.corp.com/">http://node65.cl.corp.com/</a>&gt; node65.cl.corp.com&lt;<a href="http://node65.cl.corp.com/">http://node65.cl.corp.com/</a>&gt;
node65.cl.corp.com&lt;<a href="http://node65.cl.corp.com/">http://node65.cl.corp.com/</a>&gt;
[hammond_at_node65 bin]$
On Jul 16, 2012, at 12:56 PM, Ralph Castain wrote:
Jeff is at the MPI Forum this week, so his answers will be delayed. Last I
heard, it was close, but no specific date has been set.
On Jul 16, 2012, at 11:49 AM, Michael E. Thomadakis wrote:
When is the expected date for the official 1.6.1 (or 1.6.2 ?) to be available ?
mike
On 07/16/2012 01:44 PM, Ralph Castain wrote:
You can get it here:
<a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
On Jul 16, 2012, at 10:22 AM, Anne M. Hammond wrote:
Hi,
For benchmarking, we would like to use openmpi with
--num-sockets 1
This fails in 1.6, but Bug Report #3119 indicates it is changed in
1.6.1.
Is 1.6.1 or 1.6.2 available in tar.gz form?
Thanks!
Anne
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Anne M. Hammond - Systems / Network Administration - Tech-X Corp
                hammond_at_txcorp.com 720-974-1840
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Anne M. Hammond - Systems / Network Administration - Tech-X Corp
                  hammond_at_txcorp.com 720-974-1840
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
Institut f&#252;r Angewandte Mathematik (LS III)
Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
--
Sent from my old-fashioned computer and not from a mobile device.
I proudly boycott 24/7 availability.
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19779.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19783.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
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
