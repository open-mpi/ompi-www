<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 17:34:32 2010" -->
<!-- isoreceived="20100506213432" -->
<!-- sent="Thu, 6 May 2010 17:34:26 -0400" -->
<!-- isosent="20100506213426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="2B9FC527-EACD-47DA-BC26-45332247EFCC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE303FF.4020708_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 17:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12945.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2010, at 2:01 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; 1) Now I can see and use the btl_sm_num_fifos component:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had committed already &quot;btl = ^sm&quot; to the openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; file.  This apparently hides the btl_sm_num_fifos from ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After I switched to no options in openmpi-mca-params.conf,
</span><br>
<span class="quotelev1">&gt; then ompi_info showed the btl_sm_num_fifos component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A side comment:
</span><br>
<span class="quotelev1">&gt; This means that the system administrator can
</span><br>
<span class="quotelev1">&gt; hide some Open MPI options from the users, depending on what
</span><br>
<span class="quotelev1">&gt; he puts in the openmpi-mca-params.conf file, right?
</span><br>
<p>Correct.
<br>
<p>BUT: a user can always override the &quot;btl&quot; MCA param and see them again.  For example, you could also have done this:
<br>
<p>&nbsp;&nbsp;&nbsp;echo &quot;btl =&quot; &gt; ~/.openmpi/mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;ompi_info --all | grep btl_sm_num_fifos
<br>
&nbsp;&nbsp;&nbsp;# ...will show the sm params...
<br>
<p><span class="quotelev1">&gt; 2) However, running with &quot;sm&quot; still breaks, unfortunately:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Boomer!
</span><br>
<p>Doh!
<br>
<p><span class="quotelev1">&gt; I get the same errors that I reported in my very
</span><br>
<span class="quotelev1">&gt; first email, if I increase the number of processes to 16,
</span><br>
<span class="quotelev1">&gt; to explore the hyperthreading range.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is using &quot;sm&quot; (i.e. not excluded in the mca config file),
</span><br>
<span class="quotelev1">&gt; and btl_sm_num_fifos (mpiexec command line)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The machine hangs, requires a hard reboot, etc, etc,
</span><br>
<span class="quotelev1">&gt; as reported earlier.  See the below, please.
</span><br>
<p>I saw that only some probably-unrelated dmesg messages were emitted.  Was there anything else revealing on the console and/or /var/log/* files?  Hard reboots absolutely should not be caused by Open MPI.
<br>
<p><span class="quotelev1">&gt; So, I guess the conclusion is that I can use sm,
</span><br>
<span class="quotelev1">&gt; but I have to remain within the range of physical cores (8),
</span><br>
<span class="quotelev1">&gt; not oversubscribe, not try to explore the HT range.
</span><br>
<span class="quotelev1">&gt; Should I expect it to work also for np&gt;number of physical cores?
</span><br>
<p>Your prior explanations of when HT is useful seemed pretty reasonable to me.  Meaning: Nehalem HT will help only in some kinds of codes.  Dense computation codes with few conditional branches may not benefit much from HT.
<br>
<p>But OMPI applications should always run *correctly*, regardless of HT or not-HT -- even if you're oversubscribing.  The performance may suffer (sometimes dramatically) if you oversubscribe physical cores with dense computational code, but it should always run *correctly*.
<br>
<p><span class="quotelev1">&gt; I wonder if this would still work with np&lt;=8, but with heavier code.
</span><br>
<span class="quotelev1">&gt; (I only used hello_c.c so far.)
</span><br>
<p>If hello_c is crashing your computer - even if you're running np&gt;8 or np&gt;16 -- something is wrong outside of Open MPI.  I routinely run np=100 hello_c on machines.
<br>
<p><span class="quotelev1">&gt; $ mpiexec -mca btl_sm_num_fifos 16 -np 16 a.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 8 with PID 3659 on node spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev1">&gt; kernel:------------[ cut here ]------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev1">&gt; kernel:invalid opcode: 0000 [#1] SMP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev1">&gt; kernel:last sysfs file: /sys/devices/system/cpu/cpu15/topology/physical_package_id
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev1">&gt; kernel:Stack:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev1">&gt; kernel:Call Trace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev1">&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
</span><br>
<p>I unfortunately don't know what these messages mean...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12945.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
