<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 18:17:57 2010" -->
<!-- isoreceived="20100504221757" -->
<!-- sent="Tue, 4 May 2010 16:17:48 -0600" -->
<!-- isosent="20100504221748" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="0D4ABFDD-9802-4D77-BF70-C7EC3198F32A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE09531.9040300_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 18:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12886.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12884.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12884.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12887.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12887.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One possibility is that the sm btl might not like that you have hyperthreading enabled.
<br>
<p>Another thing to check: do you have any paffinity settings turned on (e.g., mpi_paffinity_alone)? Our paffinity system doesn't handle hyperthreading at this time.
<br>
<p>I'm just suspicious of the HT since you have a quad-core machine, and the limit where things work seems to be 4...
<br>
<p>On May 4, 2010, at 3:44 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, I will certainly try v1.4.2.
</span><br>
<span class="quotelev1">&gt; I am downloading it right now.
</span><br>
<span class="quotelev1">&gt; As of this morning, when I first downloaded,
</span><br>
<span class="quotelev1">&gt; the web site still had 1.4.1.
</span><br>
<span class="quotelev1">&gt; Maybe I should have refreshed the web page on my browser.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will tell you how it goes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gus -- Can you try v1.4.2 which was just released today?
</span><br>
<span class="quotelev2">&gt;&gt; On May 4, 2010, at 4:18 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;-mca btl ^sm&quot; workaround seems to have solved the problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at least for the little hello_c.c test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just ran it fine up to 128 processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I confess I am puzzled by this workaround.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Why should we turn off &quot;sm&quot; in a standalone machine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where everything is supposed to operate via shared memory?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Do I incur in a performance penalty by not using &quot;sm&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * What other mechanism is actually used by OpenMPI for process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication in this case?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to be using tcp, because when I try -np 256 I get this error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [spinoza:02715] [[11518,0],0] ORTE_ERROR_LOG: The system limit on number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of network connections a process can open was reached in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c at line 447
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: system limit exceeded on number of network connections that can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This can be resolved by setting the mca parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; increasing your limit descriptor setting (using limit or ulimit commands),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, no big deal, because we don't intend to oversubrcribe the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors on real jobs anyway (and the very error message suggests a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; workaround to increase np, if needed).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would certainly try it -mca btl ^sm and see if that solves the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 4, 2010, at 2:38 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI experts
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I need your help to get Open MPI right on a standalone
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; machine with Nehalem processors.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; How to tweak the mca parameters to avoid problems
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with Nehalem (and perhaps AMD processors also),
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; where MPI programs hang, was discussed here before.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, I lost track of the details, how to work around the problem,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and if it was fully fixed already perhaps.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, perhaps the problem you're seeing is not what you remember being discussed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps you're thinking of <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .  It's presumably fixed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am now facing the problem directly on a single Nehalem box.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I installed OpenMPI 1.4.1 from source,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and compiled the test hello_c.c with mpicc.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Then I tried to run it with:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1) mpirun -np 4 a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It ran OK (but seemed to be slow).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2) mpirun -np 16 a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It hung, and brought the machine to a halt.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any words of wisdom are appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; More info:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * OpenMPI 1.4.1 installed from source (tarball from your site).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Compilers are gcc/g++/gfortran 4.4.3-4.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * OS is Fedora Core 12.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * The machine is a Dell box with Intel Xeon 5540 (quad core)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processors on a two-way motherboard and 48GB of RAM.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * /proc/cpuinfo indicates that hyperthreading is turned on.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (I can see 16 &quot;processors&quot;.)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What should I do?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Use -mca btl ^sm  ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Use Both?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do something else?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="12886.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12884.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12884.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12887.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12887.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
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
