<?
$subject_val = "Re: [OMPI users] Dynamic libraries in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 13:47:57 2010" -->
<!-- isoreceived="20100507174757" -->
<!-- sent="Fri, 07 May 2010 13:47:52 -0400" -->
<!-- isosent="20100507174752" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic libraries in OpenMPI" -->
<!-- id="4BE45248.7090001_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="m2ideba11b21005070737s70a0bf24gc2d015a16eb9145f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic libraries in OpenMPI<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 13:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12973.php">Prentice Bisbal: "Re: [OMPI users] open mpi installation error"</a>
<li><strong>Previous message:</strong> <a href="12971.php">Jeff Squyres: "Re: [OMPI users] open mpi installation error"</a>
<li><strong>In reply to:</strong> <a href="12968.php">Miguel &#193;ngel V&#225;zquez: "[OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12987.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12987.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Miguel &#193;ngel V&#225;zquez wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a C++ program which uses dynamic libraries under mpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compilation command looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpiCC `pkg-config --cflags itpp`  -o montecarlo  montecarlo.cpp
</span><br>
<span class="quotelev1">&gt; `pkg-config --libs itpp`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And it works if I executed it in one machine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -H localhost montecarlo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested this both in the &quot;master node&quot; and in the &quot;compute nodes&quot; and
</span><br>
<span class="quotelev1">&gt; it works. However, when I try to run it with two different machines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -H localhost,hpcnode1 montecarlo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program claims that it can't find the shared libraries:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; montecarlo: error while loading shared libraries: libitpp.so.6: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The LD_LIBRARY_PATH is set properly at every machine, any idea where the
</span><br>
<span class="quotelev1">&gt; problem is? I attached you the config.log and the result of the omp-info
</span><br>
<span class="quotelev1">&gt; --all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Miguel
</span><br>
<p>Miguel,
<br>
<p>Shells behave differently depending on whether it is an interactive
<br>
login shell or a non-interactive shell. For example, the bash shell uses
<br>
.bash_profile in case, but .bashrc in the other. Check the documentation
<br>
for your shell and see what files it uses in each case, and make sure
<br>
the non-login config file has the necessary settings for your MPI jobs.
<br>
&nbsp;It sounds like your login shell environment is okay, but your non-login
<br>
environment isn't setup correctly. This is a common problem.
<br>
<p>I use bash, and to keep it simple, my .bash_profile is just a symbolic
<br>
link to .bashrc. That way, both shell types have the same environment.
<br>
This isn't always a good idea, but in my case it's fine.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12973.php">Prentice Bisbal: "Re: [OMPI users] open mpi installation error"</a>
<li><strong>Previous message:</strong> <a href="12971.php">Jeff Squyres: "Re: [OMPI users] open mpi installation error"</a>
<li><strong>In reply to:</strong> <a href="12968.php">Miguel &#193;ngel V&#225;zquez: "[OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12987.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12987.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
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
