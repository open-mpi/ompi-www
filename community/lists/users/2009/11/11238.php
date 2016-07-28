<?
$subject_val = "[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 13:21:51 2009" -->
<!-- isoreceived="20091119182151" -->
<!-- sent="Thu, 19 Nov 2009 19:21:46 +0100" -->
<!-- isosent="20091119182146" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &amp;quot;ulimit -s&amp;quot;" -->
<!-- id="4B058CBA.3000105_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 13:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi volks,
<br>
<p>we see an exeedingly *virtual* memory consumtion through MPI processes 
<br>
if &quot;ulimit -s&quot; (stack size)in profile configuration was setted higher.
<br>
<p>Furthermore we believe, every mpi process started, wastes about the 
<br>
double size of `ulimit -s` value which will be set in a fresh console 
<br>
(that is, the value is configurated in e.g.  .zshenv, *not* the value 
<br>
actually setted in the console from which the mpiexec runs).
<br>
<p>Sun MPI 8.2.1, an empty mpi-HelloWorld program
<br>
! either if running both processes on the same host..
<br>
<p>.zshenv: ulimit -s 10240   --&gt; VmPeak:    180072 kB
<br>
.zshenv: ulimit -s 102400  --&gt; VmPeak:    364392 kB
<br>
.zshenv: ulimit -s 1024000 --&gt; VmPeak:    2207592 kB
<br>
.zshenv: ulimit -s 2024000 --&gt; VmPeak:    4207592 kB
<br>
.zshenv: ulimit -s 20240000 --&gt; VmPeak:   39.7 GB!!!!
<br>
(see the attached files; the a.out binary is a mpi helloworld program 
<br>
running an never ending loop).
<br>
<p><p><p>Normally, the stack size ulimit is set to some 10 MB by us, but we see a 
<br>
lot of codes which needs *a lot* of stack space, e.g. Fortran codes, 
<br>
OpenMP codes (and especially fortran OpenMP codes). Users tends to 
<br>
hard-code the setting-up the higher value for stack size ulimit.
<br>
<p>Normally, the using of a lot of virtual memory is no problem, because 
<br>
there is a lot of this thing :-) But... If more than one person is 
<br>
allowed to work on a computer, you have to divide the ressources in such 
<br>
a way that nobody can crash the box. We do not know how to limit the 
<br>
real RAM used so we need to divide the RAM by means of setting virtual 
<br>
memory ulimit (in our batch system e.g.. That is, for us
<br>
&quot;virtual memory consumption&quot; = &quot;real memory consumption&quot;.
<br>
And real memory is not that way cheap than virtual memory.
<br>
<p><p>So, why consuming the *twice* amount of stack size for each process?
<br>
<p>And, why consuming the virtual memory at all? We guess this virtual 
<br>
memory is allocated for the stack (why else it will be related to the 
<br>
stack size ulimit). But, is such allocation really needed? Is there a 
<br>
way to avoid the vaste of virtual memory?
<br>
<p>best regards,
<br>
Paul Kapinos
<br>
<p><p><p><p><p><p><p><p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915


</pre>
<p>
<p>
<br><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-11238/VmPeak_SMPI-8.2.1.png" alt="VmPeak_SMPI-8.2.1.png">
<!-- attachment="VmPeak_SMPI-8.2.1.png" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11238/mpihelloworld.f90">mpihelloworld.f90</a>
</ul>
<!-- attachment="mpihelloworld.f90" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11238/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11237.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
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
