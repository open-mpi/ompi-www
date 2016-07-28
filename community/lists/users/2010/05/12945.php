<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 17:28:46 2010" -->
<!-- isoreceived="20100506212846" -->
<!-- sent="Thu, 06 May 2010 17:28:37 -0400" -->
<!-- isosent="20100506212837" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="4BE33485.9090202_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A70200B0-1EBA-4212-A0D6-22CB3405339E_at_lanl.gov" -->
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
<strong>Date:</strong> 2010-05-06 17:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12944.php">Eugene Loh: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>In reply to:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel
<br>
<p>Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may not help, but it's worth a try.  If it's not too much trouble, 
</span><br>
<span class="quotelev1">&gt; can you please reconfigure your Open MPI installation with 
</span><br>
<span class="quotelev1">&gt; --enable-debug and then rebuild?  After that, may we see the stack trace 
</span><br>
<span class="quotelev1">&gt; from a core file that is produced after the segmentation fault?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thank you for the suggestion.
<br>
<p>I am a bit reluctant to try this because when it fails,
<br>
it *really* fails.
<br>
Most of the times the machine doesn't even return the prompt,
<br>
and in all cases it freezes and requires a hard reboot.
<br>
It is not a segfault that the OS can catch, I guess.
<br>
I wonder if enabling debug mode would do much for us,
<br>
and get to the point of dumping a core, or just die before that.
<br>
<p>Gus Correa
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
<p><span class="quotelev1">&gt; On May 6, 2010, at 12:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eugene
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the detailed answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *************
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;, data source: default value)
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) However, running with &quot;sm&quot; still breaks, unfortunately:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Boomer!
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I guess the conclusion is that I can use sm,
</span><br>
<span class="quotelev2">&gt;&gt; but I have to remain within the range of physical cores (8),
</span><br>
<span class="quotelev2">&gt;&gt; not oversubscribe, not try to explore the HT range.
</span><br>
<span class="quotelev2">&gt;&gt; Should I expect it to work also for np&gt;number of physical cores?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if this would still work with np&lt;=8, but with heavier code.
</span><br>
<span class="quotelev2">&gt;&gt; (I only used hello_c.c so far.)
</span><br>
<span class="quotelev2">&gt;&gt; Not sure I'll be able to test this, the user wants to use the machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $mpiexec -mca btl_sm_num_fifos 4 -np 4 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 8 -np 8 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 2 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 3 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 4 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 5 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 6 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 7 of 8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 16 -np 16 a.out
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 8 with PID 3659 on node 
</span><br>
<span class="quotelev2">&gt;&gt; spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; kernel:last sysfs file: 
</span><br>
<span class="quotelev2">&gt;&gt; /sys/devices/system/cpu/cpu15/topology/physical_package_id
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
<span class="quotelev2">&gt;&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 
</span><br>
<span class="quotelev2">&gt;&gt; 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 
</span><br>
<span class="quotelev2">&gt;&gt; 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
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
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Eugene
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for answering one of my original questions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, there seems to be a problem with the syntax.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it really &quot;-mca btl btl_sm_num_fifos=some_number&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No.  Try &quot;--mca btl_sm_num_fifos 4&quot;.  Or,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % setenv OMPI_MCA_btl_sm_num_fifos 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % ompi_info -a | grep btl_sm_num_fifos     # check that things were 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -n 4 a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I grep any component starting with btl_sm I get nothing:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info --all | grep btl_sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (No output)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm no guru, but I think the reason has something to do with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamically loaded somethings.  E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % /home/eugene/ompi/bin/ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (no output)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % setenv OPAL_PREFIX /home/eugene/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % set path = ( $OPAL_PREFIX/bin $path )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12944.php">Eugene Loh: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>In reply to:</strong> <a href="12934.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12947.php">Samuel K. Gutierrez: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
