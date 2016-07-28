<?
$subject_val = "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 14:42:56 2009" -->
<!-- isoreceived="20091119194256" -->
<!-- sent="Thu, 19 Nov 2009 19:42:51 +0000" -->
<!-- isosent="20091119194251" -->
<!-- name="mtcreekmore_at_[hidden]" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &amp;quot;ulimit -s&amp;quot;" -->
<!-- id="COL117-W5704AC118D0C0CE3E19C2E9A20_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B058CBA.3000105_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;<br>
<strong>From:</strong> <a href="mailto:mtcreekmore_at_[hidden]?Subject=Re:%20[OMPI%20users]%20exceedingly%20virtual%20memory%20consumption%20of%20MPI%20environment%20if%20higher-setting%20&amp;amp;quot;ulimit%20-s&amp;amp;quot;"><em>mtcreekmore_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-11-19 14:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<li><strong>Previous message:</strong> <a href="11238.php">Paul Kapinos: "[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="11238.php">Paul Kapinos: "[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
People can correct me if I am wrong, but are you NOT suppose to run applications directly and only suppose to submit them using the batch process  &quot;qsub&quot; to prevent all this overuse of resources?
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p>&nbsp;
<br>
<span class="quotelev1">&gt; Date: Thu, 19 Nov 2009 19:21:46 +0100
</span><br>
<span class="quotelev1">&gt; From: kapinos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi volks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we see an exeedingly *virtual* memory consumtion through MPI processes 
</span><br>
<span class="quotelev1">&gt; if &quot;ulimit -s&quot; (stack size)in profile configuration was setted higher.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Furthermore we believe, every mpi process started, wastes about the 
</span><br>
<span class="quotelev1">&gt; double size of `ulimit -s` value which will be set in a fresh console 
</span><br>
<span class="quotelev1">&gt; (that is, the value is configurated in e.g. .zshenv, *not* the value 
</span><br>
<span class="quotelev1">&gt; actually setted in the console from which the mpiexec runs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun MPI 8.2.1, an empty mpi-HelloWorld program
</span><br>
<span class="quotelev1">&gt; ! either if running both processes on the same host..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 10240 --&gt; VmPeak: 180072 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 102400 --&gt; VmPeak: 364392 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 1024000 --&gt; VmPeak: 2207592 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 2024000 --&gt; VmPeak: 4207592 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 20240000 --&gt; VmPeak: 39.7 GB!!!!
</span><br>
<span class="quotelev1">&gt; (see the attached files; the a.out binary is a mpi helloworld program 
</span><br>
<span class="quotelev1">&gt; running an never ending loop).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Normally, the stack size ulimit is set to some 10 MB by us, but we see a 
</span><br>
<span class="quotelev1">&gt; lot of codes which needs *a lot* of stack space, e.g. Fortran codes, 
</span><br>
<span class="quotelev1">&gt; OpenMP codes (and especially fortran OpenMP codes). Users tends to 
</span><br>
<span class="quotelev1">&gt; hard-code the setting-up the higher value for stack size ulimit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Normally, the using of a lot of virtual memory is no problem, because 
</span><br>
<span class="quotelev1">&gt; there is a lot of this thing :-) But... If more than one person is 
</span><br>
<span class="quotelev1">&gt; allowed to work on a computer, you have to divide the ressources in such 
</span><br>
<span class="quotelev1">&gt; a way that nobody can crash the box. We do not know how to limit the 
</span><br>
<span class="quotelev1">&gt; real RAM used so we need to divide the RAM by means of setting virtual 
</span><br>
<span class="quotelev1">&gt; memory ulimit (in our batch system e.g.. That is, for us
</span><br>
<span class="quotelev1">&gt; &quot;virtual memory consumption&quot; = &quot;real memory consumption&quot;.
</span><br>
<span class="quotelev1">&gt; And real memory is not that way cheap than virtual memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, why consuming the *twice* amount of stack size for each process?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And, why consuming the virtual memory at all? We guess this virtual 
</span><br>
<span class="quotelev1">&gt; memory is allocated for the stack (why else it will be related to the 
</span><br>
<span class="quotelev1">&gt; stack size ulimit). But, is such allocation really needed? Is there a 
</span><br>
<span class="quotelev1">&gt; way to avoid the vaste of virtual memory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos - High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23, D 52074 Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<li><strong>Previous message:</strong> <a href="11238.php">Paul Kapinos: "[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="11238.php">Paul Kapinos: "[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
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
