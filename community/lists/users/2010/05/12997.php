<?
$subject_val = "Re: [OMPI users] Dynamic libraries in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 08:52:58 2010" -->
<!-- isoreceived="20100510125258" -->
<!-- sent="Mon, 10 May 2010 14:52:51 +0200" -->
<!-- isosent="20100510125251" -->
<!-- name="Miguel &#193;ngel V&#225;zquez" -->
<!-- email="mavazquez.at.cttc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic libraries in OpenMPI" -->
<!-- id="AANLkTimbdhUfCx-HtRhxg7Aose43aXWEajhHiBNyWdrr_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="993CB6D3-2985-4382-92A8-9D0453619AEB_at_open-mpi.org" -->
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
<strong>From:</strong> Miguel &#193;ngel V&#225;zquez (<em>mavazquez.at.cttc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 08:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12998.php">Christophe Peyret: "[OMPI users] openmpi + share points"</a>
<li><strong>Previous message:</strong> <a href="12996.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
<li><strong>In reply to:</strong> <a href="12995.php">Ralph Castain: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, thank you, I'll contact my sysadmin.
<br>
<p>2010/5/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Doesn't that indicate precisely what Prentice said? ssh isn't picking up
</span><br>
<span class="quotelev1">&gt; your remote .bashrc file and executing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try just doing &quot;mpirun -n 1 -H hpcnode1 printenv&quot; and see if you get the
</span><br>
<span class="quotelev1">&gt; envars you expect from you .bashrc. If not, talk to your sysadmin about how
</span><br>
<span class="quotelev1">&gt; to fix the problem - could be a system config issue, permissions on your
</span><br>
<span class="quotelev1">&gt; .bashrc (typical source of this kind of trouble), etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 10, 2010, at 6:15 AM, Miguel &#193;ngel V&#225;zquez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version: OMPI 1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shell: bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already fixed the problem with a shell script like
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH= ...
</span><br>
<span class="quotelev1">&gt; ./montecarlo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, it seems that openmpi look neither bash_profile not .bashrc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Miguel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/5/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI? What shell?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 10, 2010, at 2:05 AM, Miguel &#193;ngel V&#225;zquez wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; 2010/5/7 Prentice Bisbal &lt;prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Miguel &#193;ngel V&#225;zquez wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am trying to run a C++ program which uses dynamic libraries under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The compilation command looks like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  mpiCC `pkg-config --cflags itpp`  -o montecarlo  montecarlo.cpp
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; `pkg-config --libs itpp`
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; And it works if I executed it in one machine:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun -np 2 -H localhost montecarlo
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I tested this both in the &quot;master node&quot; and in the &quot;compute nodes&quot; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; it works. However, when I try to run it with two different machines:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun -np 2 -H localhost,hpcnode1 montecarlo
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The program claims that it can't find the shared libraries:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; montecarlo: error while loading shared libraries: libitpp.so.6: cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The LD_LIBRARY_PATH is set properly at every machine, any idea where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; problem is? I attached you the config.log and the result of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; omp-info
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --all
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thank you in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Miguel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Miguel,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shells behave differently depending on whether it is an interactive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; login shell or a non-interactive shell. For example, the bash shell uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .bash_profile in case, but .bashrc in the other. Check the documentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for your shell and see what files it uses in each case, and make sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the non-login config file has the necessary settings for your MPI jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  It sounds like your login shell environment is okay, but your non-login
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment isn't setup correctly. This is a common problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use bash, and to keep it simple, my .bash_profile is just a symbolic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link to .bashrc. That way, both shell types have the same environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This isn't always a good idea, but in my case it's fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prentice
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12998.php">Christophe Peyret: "[OMPI users] openmpi + share points"</a>
<li><strong>Previous message:</strong> <a href="12996.php">Terry Dontje: "Re: [OMPI users] Questions about binding processes"</a>
<li><strong>In reply to:</strong> <a href="12995.php">Ralph Castain: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
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
