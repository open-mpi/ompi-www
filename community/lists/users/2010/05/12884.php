<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 17:44:31 2010" -->
<!-- isoreceived="20100504214431" -->
<!-- sent="Tue, 04 May 2010 17:44:17 -0400" -->
<!-- isosent="20100504214417" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="4BE09531.9040300_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="441ACF3B-34A9-4FF5-B78E-B9A8DF4E87F3_at_cisco.com" -->
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
<strong>Date:</strong> 2010-05-04 17:44:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12885.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12885.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12885.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12886.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Sure, I will certainly try v1.4.2.
<br>
I am downloading it right now.
<br>
As of this morning, when I first downloaded,
<br>
the web site still had 1.4.1.
<br>
Maybe I should have refreshed the web page on my browser.
<br>
<p>I will tell you how it goes.
<br>
<p>Gus
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Gus -- Can you try v1.4.2 which was just released today?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 4, 2010, at 4:18 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;-mca btl ^sm&quot; workaround seems to have solved the problem,
</span><br>
<span class="quotelev2">&gt;&gt; at least for the little hello_c.c test.
</span><br>
<span class="quotelev2">&gt;&gt; I just ran it fine up to 128 processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I confess I am puzzled by this workaround.
</span><br>
<span class="quotelev2">&gt;&gt; * Why should we turn off &quot;sm&quot; in a standalone machine,
</span><br>
<span class="quotelev2">&gt;&gt; where everything is supposed to operate via shared memory?
</span><br>
<span class="quotelev2">&gt;&gt; * Do I incur in a performance penalty by not using &quot;sm&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; * What other mechanism is actually used by OpenMPI for process
</span><br>
<span class="quotelev2">&gt;&gt; communication in this case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be using tcp, because when I try -np 256 I get this error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [spinoza:02715] [[11518,0],0] ORTE_ERROR_LOG: The system limit on number
</span><br>
<span class="quotelev2">&gt;&gt; of network connections a process can open was reached in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c at line 447
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: system limit exceeded on number of network connections that can
</span><br>
<span class="quotelev2">&gt;&gt; be open
</span><br>
<span class="quotelev2">&gt;&gt; This can be resolved by setting the mca parameter
</span><br>
<span class="quotelev2">&gt;&gt; opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev2">&gt;&gt; increasing your limit descriptor setting (using limit or ulimit commands),
</span><br>
<span class="quotelev2">&gt;&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, no big deal, because we don't intend to oversubrcribe the
</span><br>
<span class="quotelev2">&gt;&gt; processors on real jobs anyway (and the very error message suggests a
</span><br>
<span class="quotelev2">&gt;&gt; workaround to increase np, if needed).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would certainly try it -mca btl ^sm and see if that solves the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2010, at 2:38 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear Open MPI experts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I need your help to get Open MPI right on a standalone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machine with Nehalem processors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How to tweak the mca parameters to avoid problems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with Nehalem (and perhaps AMD processors also),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where MPI programs hang, was discussed here before.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, I lost track of the details, how to work around the problem,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and if it was fully fixed already perhaps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, perhaps the problem you're seeing is not what you remember being discussed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps you're thinking of <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .  It's presumably fixed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am now facing the problem directly on a single Nehalem box.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I installed OpenMPI 1.4.1 from source,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and compiled the test hello_c.c with mpicc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then I tried to run it with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) mpirun -np 4 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It ran OK (but seemed to be slow).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) mpirun -np 16 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It hung, and brought the machine to a halt.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any words of wisdom are appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; More info:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * OpenMPI 1.4.1 installed from source (tarball from your site).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Compilers are gcc/g++/gfortran 4.4.3-4.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * OS is Fedora Core 12.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * The machine is a Dell box with Intel Xeon 5540 (quad core)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processors on a two-way motherboard and 48GB of RAM.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * /proc/cpuinfo indicates that hyperthreading is turned on.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (I can see 16 &quot;processors&quot;.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What should I do?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Use -mca btl ^sm  ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Use Both?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do something else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12885.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12885.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12885.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12886.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
