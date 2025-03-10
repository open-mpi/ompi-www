<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 17:52:49 2006" -->
<!-- isoreceived="20061027215249" -->
<!-- sent="Fri, 27 Oct 2006 17:52:26 -0400" -->
<!-- isosent="20061027215226" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error Handling Problem" -->
<!-- id="883245CE-A9E6-4C29-AF8B-ECCC60291CE2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2F8EE677D406514ABE53EF9C0934A666061BA2CD_at_anubis2.clb.tcfr.thales" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-27 17:52:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="2075.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2006, at 10:56 AM, Laurent.POREZ_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I did change the default error handler (using  
</span><br>
<span class="quotelev1">&gt; Mpi_Comm_set_errhandler) in the main_exe program. I replaced it  
</span><br>
<span class="quotelev1">&gt; with a printf.
</span><br>
<span class="quotelev1">&gt; My error handler is never called, but main_exe receives a SIGPIPE  
</span><br>
<span class="quotelev1">&gt; signal.
</span><br>
<span class="quotelev1">&gt; So the only solution I found is to catch SIGPIPE and forget it...&gt;
</span><br>
<p>I wonder how this SIGPIPE get generated ... And why we didn't catch it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is not supposed to work, and if you find an MPI implementation
</span><br>
<span class="quotelev2">&gt;&gt; that support this approach please tell me. I know the paper
</span><br>
<span class="quotelev2">&gt;&gt; where you  read about this, but even with their MPI library this  
</span><br>
<span class="quotelev2">&gt;&gt; approach does
</span><br>
<span class="quotelev2">&gt;&gt; not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which paper are you talking about ?
</span><br>
<p>I was talking about W. Gropp paper called &quot;Fault Tolerance in MPI  
<br>
Programs&quot;. I don't remember where it was published,   it might be one  
<br>
of the Euro PVM/MPI conferences. Here is a link to the paper (http:// 
<br>
www-unix.mcs.anl.gov/~gropp/bib/papers/2002/mpi-fault.pdf)
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 	Laurent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 26, 2006, at 10:19 AM, Laurent.POREZ_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I developped a launcher application :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a MPI  application (say main_exe) lauches 2 MPI applications (say
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exe1 and exe2), using MPI_Comm_spawn_multiple.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, I'm looking at the behavior when an exe crashes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I can see is the following :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) when everybody is launched, I see the followings processes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using 'ps' :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the 'mpiexec -v -d -n 1 ./main_exe' command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the orted server used for 'main_exe' (say 'orted1')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - main_exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the orted server used for 'exe1' and 'exe2' (say 'orted2')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - exe1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - exe2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) I use kill -9 to 'crash' exe2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) orted2 and exe1 finish.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) with ps, I see it remains the following processes : mpiexec,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'orted1', main_exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) main_exe tries to send a message to exe1, using MPI_Bsend :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main_exe gets killed by a SIG_PIPE signal !!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what I see is that when a part of an MPI application crashes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the whole application crashes !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to get an other behavior ? For exemple, MPI_Bsend
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could return an error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A few additionnal informations :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I work on linux, with Open-MPI 1.1.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I'm developping in C and C++.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Laurent.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="2075.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
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
