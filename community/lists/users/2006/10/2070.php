<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 10:56:16 2006" -->
<!-- isoreceived="20061027145616" -->
<!-- sent="Fri, 27 Oct 2006 16:56:15 +0200" -->
<!-- isosent="20061027145615" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error Handling Problem" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A666061BA2CD_at_anubis2.clb.tcfr.thales" -->
<!-- inreplyto="[OMPI users] Error Handling Problem" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Error%20Handling%20Problem"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-10-27 10:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2069.php">Durga Choudhury: "Re: [OMPI users] abut openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="2054.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Error Handling Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2076.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Reply:</strong> <a href="2076.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error Handling Problem
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;EF68521D-C116-4E75-8FAC-5CE918E56D15_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about changing the default error handler ?
</span><br>
<p>I did change the default error handler (using Mpi_Comm_set_errhandler) in the main_exe program. I replaced it with a printf.
<br>
My error handler is never called, but main_exe receives a SIGPIPE signal.
<br>
So the only solution I found is to catch SIGPIPE and forget it...&gt; 
<br>
<p><span class="quotelev1">&gt; It is not supposed to work, and if you find an MPI implementation  
</span><br>
<span class="quotelev1">&gt; that support this approach please tell me. I know the paper 
</span><br>
<span class="quotelev1">&gt; where you  
</span><br>
<span class="quotelev1">&gt; read about this, but even with their MPI library this approach does  
</span><br>
<span class="quotelev1">&gt; not work.
</span><br>
<p>which paper are you talking about ?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Soon, Open MPI will be able to support this feature. Several fault  
</span><br>
<span class="quotelev1">&gt; tolerant modes are under way, but no precise timeline yet.
</span><br>
<p>OK. I keep watching for new versions of Open MPI. 
<br>
<p>Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2006, at 10:19 AM, Laurent.POREZ_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I developped a launcher application :
</span><br>
<span class="quotelev2">&gt; &gt; a MPI  application (say main_exe) lauches 2 MPI applications (say  
</span><br>
<span class="quotelev2">&gt; &gt; exe1 and exe2), using MPI_Comm_spawn_multiple.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, I'm looking at the behavior when an exe crashes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What I can see is the following :
</span><br>
<span class="quotelev2">&gt; &gt; 1) when everybody is launched, I see the followings processes,  
</span><br>
<span class="quotelev2">&gt; &gt; using 'ps' :
</span><br>
<span class="quotelev2">&gt; &gt; - the 'mpiexec -v -d -n 1 ./main_exe' command
</span><br>
<span class="quotelev2">&gt; &gt; - the orted server used for 'main_exe' (say 'orted1')
</span><br>
<span class="quotelev2">&gt; &gt; - main_exe
</span><br>
<span class="quotelev2">&gt; &gt; - the orted server used for 'exe1' and 'exe2' (say 'orted2')
</span><br>
<span class="quotelev2">&gt; &gt; - exe1
</span><br>
<span class="quotelev2">&gt; &gt; - exe2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) I use kill -9 to 'crash' exe2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3) orted2 and exe1 finish.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4) with ps, I see it remains the following processes : mpiexec,  
</span><br>
<span class="quotelev2">&gt; &gt; 'orted1', main_exe
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 5) main_exe tries to send a message to exe1, using MPI_Bsend :
</span><br>
<span class="quotelev2">&gt; &gt; main_exe gets killed by a SIG_PIPE signal !!!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So what I see is that when a part of an MPI application crashes,  
</span><br>
<span class="quotelev2">&gt; &gt; the whole application crashes !
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to get an other behavior ? For exemple, MPI_Bsend  
</span><br>
<span class="quotelev2">&gt; &gt; could return an error message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A few additionnal informations :
</span><br>
<span class="quotelev2">&gt; &gt; - I work on linux, with Open-MPI 1.1.1.
</span><br>
<span class="quotelev2">&gt; &gt; - I'm developping in C and C++.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; 	Laurent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2071.php">shane kennedy: "Re: [OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2069.php">Durga Choudhury: "Re: [OMPI users] abut openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="2054.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Error Handling Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2076.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Reply:</strong> <a href="2076.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
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
