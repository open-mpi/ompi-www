<?
$subject_val = "Re: [OMPI users] Dynamic libraries in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 11:20:51 2010" -->
<!-- isoreceived="20100510152051" -->
<!-- sent="Mon, 10 May 2010 11:20:46 -0400" -->
<!-- isosent="20100510152046" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic libraries in OpenMPI" -->
<!-- id="4BE8244E.8020704_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimgeWeJDEQInv4dpTimVuUiDkkAcnIy7ehmrzRr_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-05-10 11:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13002.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12987.php">Miguel &#193;ngel V&#225;zquez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you runing thee jobs through a queuing system like PBS, Torque, or SGE?
<br>
<p>Prentice
<br>
<p>Miguel &#193;ngel V&#225;zquez wrote:
<br>
<span class="quotelev1">&gt; Hello Prentice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your advice but that doesn't solve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The non-login bash updates properly the $LD_LIBRARY_PATH value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Miguel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/5/7 Prentice Bisbal &lt;prentice_at_[hidden] &lt;mailto:prentice_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Miguel &#193;ngel V&#225;zquez wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Dear all,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am trying to run a C++ program which uses dynamic libraries
</span><br>
<span class="quotelev1">&gt;     under mpi.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The compilation command looks like:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;  mpiCC `pkg-config --cflags itpp`  -o montecarlo  montecarlo.cpp
</span><br>
<span class="quotelev2">&gt;     &gt; `pkg-config --libs itpp`
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; And it works if I executed it in one machine:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; mpirun -np 2 -H localhost montecarlo
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I tested this both in the &quot;master node&quot; and in the &quot;compute nodes&quot; and
</span><br>
<span class="quotelev2">&gt;     &gt; it works. However, when I try to run it with two different machines:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; mpirun -np 2 -H localhost,hpcnode1 montecarlo
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The program claims that it can't find the shared libraries:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; montecarlo: error while loading shared libraries: libitpp.so.6: cannot
</span><br>
<span class="quotelev2">&gt;     &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The LD_LIBRARY_PATH is set properly at every machine, any idea
</span><br>
<span class="quotelev1">&gt;     where the
</span><br>
<span class="quotelev2">&gt;     &gt; problem is? I attached you the config.log and the result of the
</span><br>
<span class="quotelev1">&gt;     omp-info
</span><br>
<span class="quotelev2">&gt;     &gt; --all
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thank you in advance,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Miguel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Miguel,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Shells behave differently depending on whether it is an interactive
</span><br>
<span class="quotelev1">&gt;     login shell or a non-interactive shell. For example, the bash shell uses
</span><br>
<span class="quotelev1">&gt;     .bash_profile in case, but .bashrc in the other. Check the documentation
</span><br>
<span class="quotelev1">&gt;     for your shell and see what files it uses in each case, and make sure
</span><br>
<span class="quotelev1">&gt;     the non-login config file has the necessary settings for your MPI jobs.
</span><br>
<span class="quotelev1">&gt;      It sounds like your login shell environment is okay, but your non-login
</span><br>
<span class="quotelev1">&gt;     environment isn't setup correctly. This is a common problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I use bash, and to keep it simple, my .bash_profile is just a symbolic
</span><br>
<span class="quotelev1">&gt;     link to .bashrc. That way, both shell types have the same environment.
</span><br>
<span class="quotelev1">&gt;     This isn't always a good idea, but in my case it's fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Prentice
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13002.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12987.php">Miguel &#193;ngel V&#225;zquez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
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
