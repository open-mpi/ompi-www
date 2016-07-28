<?
$subject_val = "Re: [OMPI users] mpirun error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 13:25:41 2013" -->
<!-- isoreceived="20130509172541" -->
<!-- sent="Thu, 09 May 2013 13:25:35 -0400" -->
<!-- isosent="20130509172535" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error" -->
<!-- id="518BDC0F.4040507_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="loom.20130509T180907-350_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 13:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="21889.php">Pepito Perez: "Re: [OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="21889.php">Pepito Perez: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>It looks like your PATH is pointing to the Intel MPI mpirun,
<br>
not to the Open MPI mpirun/mpiexec.
<br>
<p>echo $PATH
<br>
may give you a clue of what is going on.
<br>
<p>Make sure you use the same MPI implementation
<br>
to compile (mpicc, mpif90, etc)
<br>
and to launch the program (mpirun/mpiexec).
<br>
<p>Check the OpenMPI FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
<p><p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 05/09/2013 12:15 PM, Pepito Perez wrote:
<br>
<span class="quotelev1">&gt; Pradeep Jha&lt;pradeep&lt;at&gt;  ccs.engg.nagoya-u.ac.jp&gt;  writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; When I am trying to run a perfectly running parallel code on a new Linux
</span><br>
<span class="quotelev1">&gt; machine, using the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 name_of_executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpirun: line 96:
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpivars.sh: No such file
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This machine already has installed in it. Any ideas what can be the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Pradeep
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users&lt;at&gt;  open-mpi.org
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pradeep I have the same problem.I get the same message when I use mpirun Did
</span><br>
<span class="quotelev1">&gt; you solve it? Can you tell me how you did it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pepito
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="21889.php">Pepito Perez: "Re: [OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="21889.php">Pepito Perez: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
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
