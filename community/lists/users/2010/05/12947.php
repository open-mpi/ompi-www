<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 17:41:37 2010" -->
<!-- isoreceived="20100506214137" -->
<!-- sent="Thu, 6 May 2010 15:41:30 -0600" -->
<!-- isosent="20100506214130" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="04858EA6-2412-4863-A69B-CB41D130E002_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BE33485.9090202_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 17:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12945.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Doh!  I didn't see the kernel-related messages after the segfault  
<br>
message.  Definitely some weirdness here that is beyond your  
<br>
control... Sorry about that.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On May 6, 2010, at 3:28 PM, Gus Correa wrote:
&gt; Hi Samuel
&gt;
&gt; Samuel K. Gutierrez wrote:
&gt;&gt; Hi Gus,
&gt;&gt; This may not help, but it's worth a try.  If it's not too much  
&gt;&gt; trouble, can you please reconfigure your Open MPI installation with  
&gt;&gt; --enable-debug and then rebuild?  After that, may we see the stack  
&gt;&gt; trace from a core file that is produced after the segmentation fault?
&gt;&gt; Thanks,
&gt;&gt; -- 
&gt;&gt; Samuel K. Gutierrez
&gt;&gt; Los Alamos National Laboratory
&gt;
&gt; Thank you for the suggestion.
&gt;
&gt; I am a bit reluctant to try this because when it fails,
&gt; it *really* fails.
&gt; Most of the times the machine doesn't even return the prompt,
&gt; and in all cases it freezes and requires a hard reboot.
&gt; It is not a segfault that the OS can catch, I guess.
&gt; I wonder if enabling debug mode would do much for us,
&gt; and get to the point of dumping a core, or just die before that.
&gt;
&gt; Gus Correa
&gt; ---------------------------------------------------------------------
&gt; Gustavo Correa
&gt; Lamont-Doherty Earth Observatory - Columbia University
&gt; Palisades, NY, 10964-8000 - USA
&gt; ---------------------------------------------------------------------
&gt;
&gt;&gt; On May 6, 2010, at 12:01 PM, Gus Correa wrote:
&gt;&gt;&gt; Hi Eugene
&gt;&gt;&gt;
&gt;&gt;&gt; Thanks for the detailed answer.
&gt;&gt;&gt;
&gt;&gt;&gt; *************
&gt;&gt;&gt;
&gt;&gt;&gt; 1) Now I can see and use the btl_sm_num_fifos component:
&gt;&gt;&gt;
&gt;&gt;&gt; I had committed already &quot;btl = ^sm&quot; to the openmpi-mca-params.conf
&gt;&gt;&gt; file.  This apparently hides the btl_sm_num_fifos from ompi_info.
&gt;&gt;&gt;
&gt;&gt;&gt; After I switched to no options in openmpi-mca-params.conf,
&gt;&gt;&gt; then ompi_info showed the btl_sm_num_fifos component.
&gt;&gt;&gt;
&gt;&gt;&gt; ompi_info --all | grep btl_sm_num_fifos
&gt;&gt;&gt;                MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current  
&gt;&gt;&gt; value: &quot;1&quot;, data source: default value)
&gt;&gt;&gt;
&gt;&gt;&gt; A side comment:
&gt;&gt;&gt; This means that the system administrator can
&gt;&gt;&gt; hide some Open MPI options from the users, depending on what
&gt;&gt;&gt; he puts in the openmpi-mca-params.conf file, right?
&gt;&gt;&gt;
&gt;&gt;&gt; *************
&gt;&gt;&gt;
&gt;&gt;&gt; 2) However, running with &quot;sm&quot; still breaks, unfortunately:
&gt;&gt;&gt;
&gt;&gt;&gt; Boomer!
&gt;&gt;&gt; I get the same errors that I reported in my very
&gt;&gt;&gt; first email, if I increase the number of processes to 16,
&gt;&gt;&gt; to explore the hyperthreading range.
&gt;&gt;&gt;
&gt;&gt;&gt; This is using &quot;sm&quot; (i.e. not excluded in the mca config file),
&gt;&gt;&gt; and btl_sm_num_fifos (mpiexec command line)
&gt;&gt;&gt;
&gt;&gt;&gt; The machine hangs, requires a hard reboot, etc, etc,
&gt;&gt;&gt; as reported earlier.  See the below, please.
&gt;&gt;&gt;
&gt;&gt;&gt; So, I guess the conclusion is that I can use sm,
&gt;&gt;&gt; but I have to remain within the range of physical cores (8),
&gt;&gt;&gt; not oversubscribe, not try to explore the HT range.
&gt;&gt;&gt; Should I expect it to work also for np&gt;number of physical cores?
&gt;&gt;&gt;
&gt;&gt;&gt; I wonder if this would still work with np&lt;=8, but with heavier code.
&gt;&gt;&gt; (I only used hello_c.c so far.)
&gt;&gt;&gt; Not sure I'll be able to test this, the user wants to use the  
&gt;&gt;&gt; machine.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; $mpiexec -mca btl_sm_num_fifos 4 -np 4 a.out
&gt;&gt;&gt; Hello, world, I am 0 of 4
&gt;&gt;&gt; Hello, world, I am 1 of 4
&gt;&gt;&gt; Hello, world, I am 2 of 4
&gt;&gt;&gt; Hello, world, I am 3 of 4
&gt;&gt;&gt;
&gt;&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 8 -np 8 a.out
&gt;&gt;&gt; Hello, world, I am 0 of 8
&gt;&gt;&gt; Hello, world, I am 1 of 8
&gt;&gt;&gt; Hello, world, I am 2 of 8
&gt;&gt;&gt; Hello, world, I am 3 of 8
&gt;&gt;&gt; Hello, world, I am 4 of 8
&gt;&gt;&gt; Hello, world, I am 5 of 8
&gt;&gt;&gt; Hello, world, I am 6 of 8
&gt;&gt;&gt; Hello, world, I am 7 of 8
&gt;&gt;&gt;
&gt;&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 16 -np 16 a.out
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; mpiexec noticed that process rank 8 with PID 3659 on node  
&gt;&gt;&gt; spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; $
&gt;&gt;&gt;
&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
&gt;&gt;&gt; kernel:------------[ cut here ]------------
&gt;&gt;&gt;
&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
&gt;&gt;&gt; kernel:invalid opcode: 0000 [#1] SMP
&gt;&gt;&gt;
&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
&gt;&gt;&gt; kernel:last sysfs file: /sys/devices/system/cpu/cpu15/topology/ 
&gt;&gt;&gt; physical_package_id
&gt;&gt;&gt;
&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
&gt;&gt;&gt; kernel:Stack:
&gt;&gt;&gt;
&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
&gt;&gt;&gt; kernel:Call Trace:
&gt;&gt;&gt;
&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
&gt;&gt;&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00  
&gt;&gt;&gt; 00 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39  
&gt;&gt;&gt; d0 73 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94  
&gt;&gt;&gt; 24 00 01
&gt;&gt;&gt;
&gt;&gt;&gt; *****************
&gt;&gt;&gt;
&gt;&gt;&gt; Many thanks,
&gt;&gt;&gt; Gus Correa
&gt;&gt;&gt; ---------------------------------------------------------------------
&gt;&gt;&gt; Gustavo Correa
&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
&gt;&gt;&gt; ---------------------------------------------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Eugene Loh wrote:
&gt;&gt;&gt;&gt; Gus Correa wrote:
&gt;&gt;&gt;&gt;&gt; Hi Eugene
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Thank you for answering one of my original questions.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; However, there seems to be a problem with the syntax.
&gt;&gt;&gt;&gt;&gt; Is it really &quot;-mca btl btl_sm_num_fifos=some_number&quot;?
&gt;&gt;&gt;&gt; No.  Try &quot;--mca btl_sm_num_fifos 4&quot;.  Or,
&gt;&gt;&gt;&gt; % setenv OMPI_MCA_btl_sm_num_fifos 4
&gt;&gt;&gt;&gt; % ompi_info -a | grep btl_sm_num_fifos     # check that things  
&gt;&gt;&gt;&gt; were set correctly
&gt;&gt;&gt;&gt; % mpirun -n 4 a.out
&gt;&gt;&gt;&gt;&gt; When I grep any component starting with btl_sm I get nothing:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; ompi_info --all | grep btl_sm
&gt;&gt;&gt;&gt;&gt; (No output)
&gt;&gt;&gt;&gt; I'm no guru, but I think the reason has something to do with  
&gt;&gt;&gt;&gt; dynamically loaded somethings.  E.g.,
&gt;&gt;&gt;&gt; % /home/eugene/ompi/bin/ompi_info --all | grep btl_sm_num_fifos
&gt;&gt;&gt;&gt; (no output)
&gt;&gt;&gt;&gt; % setenv OPAL_PREFIX /home/eugene/ompi
&gt;&gt;&gt;&gt; % set path = ( $OPAL_PREFIX/bin $path )
&gt;&gt;&gt;&gt; % ompi_info --all | grep btl_sm_num_fifos
&gt;&gt;&gt;&gt;               MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current  
&gt;&gt;&gt;&gt; value: &quot;1&quot;, data source: default value)
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12948.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12945.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
