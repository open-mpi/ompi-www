<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 14:01:44 2010" -->
<!-- isoreceived="20100506180144" -->
<!-- sent="Thu, 06 May 2010 14:01:35 -0400" -->
<!-- isosent="20100506180135" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="4BE303FF.4020708_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE2F857.9090007_at_oracle.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 14:01:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12932.php">Richard Walsh: "[OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Previous message:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene
<br>
<p>Thanks for the detailed answer.
<br>
<p>*************
<br>
<p>1) Now I can see and use the btl_sm_num_fifos component:
<br>
<p>I had committed already &quot;btl = ^sm&quot; to the openmpi-mca-params.conf
<br>
file.  This apparently hides the btl_sm_num_fifos from ompi_info.
<br>
<p>After I switched to no options in openmpi-mca-params.conf,
<br>
then ompi_info showed the btl_sm_num_fifos component.
<br>
<p>ompi_info --all | grep btl_sm_num_fifos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: 
<br>
&quot;1&quot;, data source: default value)
<br>
<p>A side comment:
<br>
This means that the system administrator can
<br>
hide some Open MPI options from the users, depending on what
<br>
he puts in the openmpi-mca-params.conf file, right?
<br>
<p>*************
<br>
<p>2) However, running with &quot;sm&quot; still breaks, unfortunately:
<br>
<p>Boomer!
<br>
I get the same errors that I reported in my very
<br>
first email, if I increase the number of processes to 16,
<br>
to explore the hyperthreading range.
<br>
<p>This is using &quot;sm&quot; (i.e. not excluded in the mca config file),
<br>
and btl_sm_num_fifos (mpiexec command line)
<br>
<p>The machine hangs, requires a hard reboot, etc, etc,
<br>
as reported earlier.  See the below, please.
<br>
<p>So, I guess the conclusion is that I can use sm,
<br>
but I have to remain within the range of physical cores (8),
<br>
not oversubscribe, not try to explore the HT range.
<br>
Should I expect it to work also for np&gt;number of physical cores?
<br>
<p>I wonder if this would still work with np&lt;=8, but with heavier code.
<br>
(I only used hello_c.c so far.)
<br>
Not sure I'll be able to test this, the user wants to use the machine.
<br>
<p><p>$mpiexec -mca btl_sm_num_fifos 4 -np 4 a.out
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 3 of 4
<br>
<p>$ mpiexec -mca btl_sm_num_fifos 8 -np 8 a.out
<br>
Hello, world, I am 0 of 8
<br>
Hello, world, I am 1 of 8
<br>
Hello, world, I am 2 of 8
<br>
Hello, world, I am 3 of 8
<br>
Hello, world, I am 4 of 8
<br>
Hello, world, I am 5 of 8
<br>
Hello, world, I am 6 of 8
<br>
Hello, world, I am 7 of 8
<br>
<p>$ mpiexec -mca btl_sm_num_fifos 16 -np 16 a.out
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 8 with PID 3659 on node 
<br>
spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
$
<br>
<p>Message from syslogd_at_spinoza at May  6 13:38:13 ...
<br>
&nbsp;&nbsp;kernel:------------[ cut here ]------------
<br>
<p>Message from syslogd_at_spinoza at May  6 13:38:13 ...
<br>
&nbsp;&nbsp;kernel:invalid opcode: 0000 [#1] SMP
<br>
<p>Message from syslogd_at_spinoza at May  6 13:38:13 ...
<br>
&nbsp;&nbsp;kernel:last sysfs file: 
<br>
/sys/devices/system/cpu/cpu15/topology/physical_package_id
<br>
<p>Message from syslogd_at_spinoza at May  6 13:38:13 ...
<br>
&nbsp;&nbsp;kernel:Stack:
<br>
<p>Message from syslogd_at_spinoza at May  6 13:38:13 ...
<br>
&nbsp;&nbsp;kernel:Call Trace:
<br>
<p>Message from syslogd_at_spinoza at May  6 13:38:13 ...
<br>
&nbsp;&nbsp;kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 
<br>
4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 04 
<br>
&lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
<br>
<p>*****************
<br>
<p>Many thanks,
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
<p><p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eugene
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for answering one of my original questions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, there seems to be a problem with the syntax.
</span><br>
<span class="quotelev2">&gt;&gt; Is it really &quot;-mca btl btl_sm_num_fifos=some_number&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  Try &quot;--mca btl_sm_num_fifos 4&quot;.  Or,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % setenv OMPI_MCA_btl_sm_num_fifos 4
</span><br>
<span class="quotelev1">&gt; % ompi_info -a | grep btl_sm_num_fifos     # check that things were set 
</span><br>
<span class="quotelev1">&gt; correctly
</span><br>
<span class="quotelev1">&gt; % mpirun -n 4 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I grep any component starting with btl_sm I get nothing:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all | grep btl_sm
</span><br>
<span class="quotelev2">&gt;&gt; (No output)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm no guru, but I think the reason has something to do with dynamically 
</span><br>
<span class="quotelev1">&gt; loaded somethings.  E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % /home/eugene/ompi/bin/ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev1">&gt; (no output)
</span><br>
<span class="quotelev1">&gt; % setenv OPAL_PREFIX /home/eugene/ompi
</span><br>
<span class="quotelev1">&gt; % set path = ( $OPAL_PREFIX/bin $path )
</span><br>
<span class="quotelev1">&gt; % ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: 
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;, data source: default value)
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
<li><strong>Next message:</strong> <a href="12932.php">Richard Walsh: "[OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Previous message:</strong> <a href="12930.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12928.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
