<?
$subject_val = "Re: [OMPI users] Dynamic libraries in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 08:01:47 2010" -->
<!-- isoreceived="20100510120147" -->
<!-- sent="Mon, 10 May 2010 06:01:38 -0600" -->
<!-- isosent="20100510120138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic libraries in OpenMPI" -->
<!-- id="DF419C69-A1B9-436C-8263-C28623F9D41C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 08:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12994.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12992.php">Dave Love: "[OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="12987.php">Miguel &#193;ngel V&#225;zquez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12994.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12994.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI? What shell?
<br>
<p>On May 10, 2010, at 2:05 AM, Miguel &#193;ngel V&#225;zquez wrote:
<br>
<p><span class="quotelev1">&gt; Hello Prentice,
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
<span class="quotelev1">&gt; 2010/5/7 Prentice Bisbal &lt;prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Miguel &#193;ngel V&#225;zquez wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run a C++ program which uses dynamic libraries under mpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The compilation command looks like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mpiCC `pkg-config --cflags itpp`  -o montecarlo  montecarlo.cpp
</span><br>
<span class="quotelev2">&gt; &gt; `pkg-config --libs itpp`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And it works if I executed it in one machine:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -H localhost montecarlo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tested this both in the &quot;master node&quot; and in the &quot;compute nodes&quot; and
</span><br>
<span class="quotelev2">&gt; &gt; it works. However, when I try to run it with two different machines:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -H localhost,hpcnode1 montecarlo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The program claims that it can't find the shared libraries:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; montecarlo: error while loading shared libraries: libitpp.so.6: cannot
</span><br>
<span class="quotelev2">&gt; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The LD_LIBRARY_PATH is set properly at every machine, any idea where the
</span><br>
<span class="quotelev2">&gt; &gt; problem is? I attached you the config.log and the result of the omp-info
</span><br>
<span class="quotelev2">&gt; &gt; --all
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Miguel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Miguel,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shells behave differently depending on whether it is an interactive
</span><br>
<span class="quotelev1">&gt; login shell or a non-interactive shell. For example, the bash shell uses
</span><br>
<span class="quotelev1">&gt; .bash_profile in case, but .bashrc in the other. Check the documentation
</span><br>
<span class="quotelev1">&gt; for your shell and see what files it uses in each case, and make sure
</span><br>
<span class="quotelev1">&gt; the non-login config file has the necessary settings for your MPI jobs.
</span><br>
<span class="quotelev1">&gt;  It sounds like your login shell environment is okay, but your non-login
</span><br>
<span class="quotelev1">&gt; environment isn't setup correctly. This is a common problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use bash, and to keep it simple, my .bash_profile is just a symbolic
</span><br>
<span class="quotelev1">&gt; link to .bashrc. That way, both shell types have the same environment.
</span><br>
<span class="quotelev1">&gt; This isn't always a good idea, but in my case it's fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12994.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12992.php">Dave Love: "[OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="12987.php">Miguel &#193;ngel V&#225;zquez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12994.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12994.php">Miguel 聲gel V嫙quez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
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
