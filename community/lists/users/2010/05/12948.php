<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 20:36:25 2010" -->
<!-- isoreceived="20100507003625" -->
<!-- sent="Thu, 06 May 2010 20:36:16 -0400" -->
<!-- isosent="20100507003616" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="4BE36080.8000500_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B9FC527-EACD-47DA-BC26-45332247EFCC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 20:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12949.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12949.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12949.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Answers inline.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 6, 2010, at 2:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) Now I can see and use the btl_sm_num_fifos component:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had committed already &quot;btl = ^sm&quot; to the openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; file.  This apparently hides the btl_sm_num_fifos from ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After I switched to no options in openmpi-mca-params.conf,
</span><br>
<span class="quotelev2">&gt;&gt; then ompi_info showed the btl_sm_num_fifos component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A side comment:
</span><br>
<span class="quotelev2">&gt;&gt; This means that the system administrator can
</span><br>
<span class="quotelev2">&gt;&gt; hide some Open MPI options from the users, depending on what
</span><br>
<span class="quotelev2">&gt;&gt; he puts in the openmpi-mca-params.conf file, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BUT: a user can always override the &quot;btl&quot; MCA param and see them again.  For example, you could also have done this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    echo &quot;btl =&quot; &gt; ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt;    ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev1">&gt;    # ...will show the sm params...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Aha!
<br>
Can they override my settings?!
<br>
Can't anymore.
<br>
I'm gonna write a BOFH cron script to run every 10 minutes,
<br>
check for and delete any ~/.openmpi directory,
<br>
shutdown the recalcitrant account, make a tarball of its ~ ,
<br>
and send it to the mass store.  Quarantined. :)
<br>
<p><p><span class="quotelev2">&gt;&gt; 2) However, running with &quot;sm&quot; still breaks, unfortunately:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Boomer!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doh!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the same errors that I reported in my very
</span><br>
<span class="quotelev2">&gt;&gt; first email, if I increase the number of processes to 16,
</span><br>
<span class="quotelev2">&gt;&gt; to explore the hyperthreading range.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is using &quot;sm&quot; (i.e. not excluded in the mca config file),
</span><br>
<span class="quotelev2">&gt;&gt; and btl_sm_num_fifos (mpiexec command line)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machine hangs, requires a hard reboot, etc, etc,
</span><br>
<span class="quotelev2">&gt;&gt; as reported earlier.  See the below, please.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw that only some probably-unrelated dmesg messages were emitted.  Was there anything else revealing on the console and/or /var/log/* files?  Hard reboots absolutely should not be caused by Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I don't think the problem is with Open MPI.
<br>
So, it may not be easy to find a logical link between the kernel
<br>
messages and the MPI hello_c that was running.
<br>
<p><span class="quotelev2">&gt;&gt; So, I guess the conclusion is that I can use sm,
</span><br>
<span class="quotelev2">&gt;&gt; but I have to remain within the range of physical cores (8),
</span><br>
<span class="quotelev2">&gt;&gt; not oversubscribe, not try to explore the HT range.
</span><br>
<span class="quotelev2">&gt;&gt; Should I expect it to work also for np&gt;number of physical cores?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your prior explanations of when HT is useful 
</span><br>
<span class="quotelev1">&gt; seemed pretty reasonable to me.  
</span><br>
<span class="quotelev1">&gt; Meaning: Nehalem HT will help only in some kinds of codes.  
</span><br>
<span class="quotelev1">&gt; Dense computation codes with few conditional branches may 
</span><br>
<span class="quotelev1">&gt; not benefit much from HT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>When there aren't frequent requests to change the code,
<br>
to include new features, one can think about optimizing for
<br>
dense computation, avoid inner loop branches, etc.
<br>
That is the situation reported by Doug Reeder on this thread,
<br>
where his optimized finite element code shows a 2/3 degraded
<br>
speed when HT is used.
<br>
<p>However, most of the codes we run here seem to have been optimized at
<br>
some point of their early life, but then aggregated so many new
<br>
features that the if/elseif/elseif... branches are abundant.
<br>
The logic can get so complicated to de-tangle and streamline that
<br>
nobody dares to rewrite the code, afraid to produce wrong results,
<br>
or to have to face a long code re-development cycle (without support).
<br>
It is like fixing the plumbing or wiring of an old house.
<br>
OO that goes OOverboard also plays a role, often misses the
<br>
point, and can add more overhead.
<br>
I would guess that this is not a specific situation of
<br>
Earth Science applications (which tend to be big and complex).
<br>
<p>So, chances are that hyperthreading may give us a little edge,
<br>
harnessing the code imperfections.
<br>
Not a big one, maybe 10-20%, I would guess.
<br>
I experienced that type of speedup with SMT/HT on an IBM machine
<br>
with one of these big codes.
<br>
<p><span class="quotelev1">&gt; But OMPI applications should always run *correctly*, 
</span><br>
<span class="quotelev1">&gt; regardless of HT or not-HT -- even if you're oversubscribing. 
</span><br>
<span class="quotelev1">&gt; The performance may suffer (sometimes dramatically) 
</span><br>
<span class="quotelev1">&gt; if you oversubscribe physical cores with dense computational code, 
</span><br>
<span class="quotelev1">&gt; but it should always run *correctly*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That is what I was seeking first place.
<br>
Not performance with HT, but correctness with HT.
<br>
<p>Whether we would use HT or not was to be decided later,
<br>
after testing how the atmospheric model would perform
<br>
with and without HT.
<br>
<p><p><span class="quotelev2">&gt;&gt; I wonder if this would still work with np&lt;=8, but with heavier code.
</span><br>
<span class="quotelev2">&gt;&gt; (I only used hello_c.c so far.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If hello_c is crashing your computer - 
</span><br>
<span class="quotelev1">&gt; even if you're running np&gt;8 or np&gt;16 -- 
</span><br>
<span class="quotelev1">&gt; something is wrong outside of Open MPI.  
</span><br>
<span class="quotelev1">&gt; I routinely run np=100 hello_c on machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've got hello_c to run correctly with heavy oversubscription on
<br>
our cluster nodes (up to 1024 on a 8-core node IIRR).
<br>
Heavier programs don't go this far, but still run with light
<br>
oversubscription.
<br>
<p>But on that Nehalem + Fedora 12 machine it doesn't work.
<br>
So, the evidence is clear.
<br>
The problem is not with Open MPI.
<br>
<p><span class="quotelev2">&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 16 -np 16 a.out
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 8 with PID 3659 on node spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; $
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:------------[ cut here ]------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:invalid opcode: 0000 [#1] SMP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:last sysfs file: /sys/devices/system/cpu/cpu15/topology/physical_package_id
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Stack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Call Trace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I unfortunately don't know what these messages mean...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I think the last one is hexa for Dante Alighieri's Inferno:
<br>
<p>&quot;Lasciate ogni speranza voi ch'entrate&quot;
<br>
<p><p>Cheers,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12949.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12949.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12949.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
