<?
$subject_val = "Re: [OMPI users] Dynamic libraries in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 04:05:41 2010" -->
<!-- isoreceived="20100510080541" -->
<!-- sent="Mon, 10 May 2010 10:05:35 +0200" -->
<!-- isosent="20100510080535" -->
<!-- name="Miguel &#193;ngel V&#225;zquez" -->
<!-- email="mavazquez.at.cttc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic libraries in OpenMPI" -->
<!-- id="AANLkTimgeWeJDEQInv4dpTimVuUiDkkAcnIy7ehmrzRr_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE45248.7090001_at_ias.edu" -->
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
<strong>Date:</strong> 2010-05-10 04:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12988.php">NGUYEN Laurent: "[OMPI users] Questions about binding processes"</a>
<li><strong>Previous message:</strong> <a href="12986.php">Tim Prince: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12972.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12993.php">Ralph Castain: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12993.php">Ralph Castain: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Prentice,
<br>
<p>Thank you for your advice but that doesn't solve the problem.
<br>
<p>The non-login bash updates properly the $LD_LIBRARY_PATH value.
<br>
<p>Any other idea?
<br>
<p>Thanks,
<br>
<p>Miguel
<br>
<p>2010/5/7 Prentice Bisbal &lt;prentice_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12987/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12988.php">NGUYEN Laurent: "[OMPI users] Questions about binding processes"</a>
<li><strong>Previous message:</strong> <a href="12986.php">Tim Prince: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12972.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12993.php">Ralph Castain: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12993.php">Ralph Castain: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
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
