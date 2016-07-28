<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 17:18:43 2010" -->
<!-- isoreceived="20100504211843" -->
<!-- sent="Tue, 04 May 2010 17:18:34 -0400" -->
<!-- isosent="20100504211834" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="4BE08F2A.6000101_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A16EFDD4-DC36-4B8F-AA04-19138805764A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-05-04 17:18:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12879.php">Shaun Jackman: "[OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Thank you very much.
<br>
The &quot;-mca btl ^sm&quot; workaround seems to have solved the problem,
<br>
at least for the little hello_c.c test.
<br>
I just ran it fine up to 128 processes.
<br>
<p>I confess I am puzzled by this workaround.
<br>
* Why should we turn off &quot;sm&quot; in a standalone machine,
<br>
where everything is supposed to operate via shared memory?
<br>
* Do I incur in a performance penalty by not using &quot;sm&quot;?
<br>
* What other mechanism is actually used by OpenMPI for process
<br>
communication in this case?
<br>
<p>It seems to be using tcp, because when I try -np 256 I get this error:
<br>
<p>[spinoza:02715] [[11518,0],0] ORTE_ERROR_LOG: The system limit on number 
<br>
of network connections a process can open was reached in file 
<br>
../../../../../orte/mca/oob/tcp/oob_tcp.c at line 447
<br>
--------------------------------------------------------------------------
<br>
Error: system limit exceeded on number of network connections that can 
<br>
be open
<br>
This can be resolved by setting the mca parameter 
<br>
opal_set_max_sys_limits to 1,
<br>
increasing your limit descriptor setting (using limit or ulimit commands),
<br>
or asking the system administrator to increase the system limit.
<br>
--------------------------------------------------------------------------
<br>
<p>Anyway, no big deal, because we don't intend to oversubrcribe the
<br>
processors on real jobs anyway (and the very error message suggests a 
<br>
workaround to increase np, if needed).
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I would certainly try it -mca btl ^sm and see if that solves the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 4, 2010, at 2:38 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI experts
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need your help to get Open MPI right on a standalone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine with Nehalem processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How to tweak the mca parameters to avoid problems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Nehalem (and perhaps AMD processors also),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where MPI programs hang, was discussed here before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I lost track of the details, how to work around the problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and if it was fully fixed already perhaps.
</span><br>
<span class="quotelev2">&gt;&gt; Yes, perhaps the problem you're seeing is not what you remember being discussed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps you're thinking of <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .  It's presumably fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am now facing the problem directly on a single Nehalem box.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed OpenMPI 1.4.1 from source,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and compiled the test hello_c.c with mpicc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then I tried to run it with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) mpirun -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It ran OK (but seemed to be slow).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) mpirun -np 16 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It hung, and brought the machine to a halt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any words of wisdom are appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * OpenMPI 1.4.1 installed from source (tarball from your site).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Compilers are gcc/g++/gfortran 4.4.3-4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * OS is Fedora Core 12.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * The machine is a Dell box with Intel Xeon 5540 (quad core)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors on a two-way motherboard and 48GB of RAM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * /proc/cpuinfo indicates that hyperthreading is turned on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I can see 16 &quot;processors&quot;.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What should I do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use -mca btl ^sm  ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use Both?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do something else? 
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
<li><strong>Next message:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12879.php">Shaun Jackman: "[OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
