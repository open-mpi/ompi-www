<?
$subject_val = "Re: [OMPI users] Dynamic libraries in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 03:41:41 2010" -->
<!-- isoreceived="20100512074141" -->
<!-- sent="Wed, 12 May 2010 09:41:36 +0200" -->
<!-- isosent="20100512074136" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic libraries in OpenMPI" -->
<!-- id="AANLkTikL_ezzDfVRos1Dl2lhuw2o469_AdaLDJIc_DfS_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE8244E.8020704_at_ias.edu" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 03:41:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Previous message:</strong> <a href="13024.php">Damien: "[OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>In reply to:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be sure:
<br>
Is there a copy of  the shared library on the other host (hpcnode1) ?
<br>
<p>jody
<br>
<p>On Mon, May 10, 2010 at 5:20 PM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Are you runing thee jobs through a queuing system like PBS, Torque, or SGE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Miguel &#193;ngel V&#225;zquez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Prentice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your advice but that doesn't solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The non-login bash updates properly the $LD_LIBRARY_PATH value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any other idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Miguel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/5/7 Prentice Bisbal &lt;prentice_at_[hidden] &lt;mailto:prentice_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; Miguel &#193;ngel V&#225;zquez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; I am trying to run a C++ program which uses dynamic libraries
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; under mpi.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; The compilation command looks like:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; &#160;mpiCC `pkg-config --cflags itpp` &#160;-o montecarlo &#160;montecarlo.cpp
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; `pkg-config --libs itpp`
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; And it works if I executed it in one machine:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; mpirun -np 2 -H localhost montecarlo
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; I tested this both in the &quot;master node&quot; and in the &quot;compute nodes&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; it works. However, when I try to run it with two different machines:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; mpirun -np 2 -H localhost,hpcnode1 montecarlo
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; The program claims that it can't find the shared libraries:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; montecarlo: error while loading shared libraries: libitpp.so.6: cannot
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; The LD_LIBRARY_PATH is set properly at every machine, any idea
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; where the
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; problem is? I attached you the config.log and the result of the
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; omp-info
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; --all
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; Thank you in advance,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &gt; Miguel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; Miguel,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; Shells behave differently depending on whether it is an interactive
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; login shell or a non-interactive shell. For example, the bash shell uses
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; .bash_profile in case, but .bashrc in the other. Check the documentation
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; for your shell and see what files it uses in each case, and make sure
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; the non-login config file has the necessary settings for your MPI jobs.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;It sounds like your login shell environment is okay, but your non-login
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; environment isn't setup correctly. This is a common problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; I use bash, and to keep it simple, my .bash_profile is just a symbolic
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; link to .bashrc. That way, both shell types have the same environment.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; This isn't always a good idea, but in my case it's fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; --
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; Prentice
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Previous message:</strong> <a href="13024.php">Damien: "[OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>In reply to:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
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
