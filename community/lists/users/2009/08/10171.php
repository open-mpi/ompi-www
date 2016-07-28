<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 10:10:00 2009" -->
<!-- isoreceived="20090802141000" -->
<!-- sent="Sun, 02 Aug 2009 16:09:52 +0200" -->
<!-- isosent="20090802140952" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A759E30.5040508_at_gmx.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1249214273.3831.5.camel_at_eddy" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob<br>
<strong>From:</strong> Tomislav Maric (<em>tomislav.maric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 10:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10172.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10170.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10168.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10173.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10173.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominik T&#195;&#161;borsk&#195;&#189; wrote:
<br>
<span class="quotelev1">&gt; Hi Tomislav,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also had this issue. When you try to trace it, you'll find out that
</span><br>
<span class="quotelev1">&gt; when you manually connect to a machine and immediately execute a
</span><br>
<span class="quotelev1">&gt; command, it will inherit your environment, not the environment of the
</span><br>
<span class="quotelev1">&gt; node. See:
</span><br>
<span class="quotelev1">&gt; $ ssh node1 &amp;&amp; echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will echo the PATH on your computer, the master one, not the node.
</span><br>
<span class="quotelev1">&gt; But if you do this:
</span><br>
<span class="quotelev1">&gt; $ ssh node1
</span><br>
<span class="quotelev1">&gt; node1$ echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it will echo the PATH on your node.
</span><br>
<p>I've tried it:
<br>
<p>$ ssh node1 &amp;&amp; echo $PATH
<br>
<p>at first does nothing, leaving me loged in on the node, but when I exit,
<br>
it writes out the $PATH on the master node.
<br>
<p>ssh node1
<br>
<p>slax_at_node1$ echo $PATH
<br>
<p>gives me the path on the slave node1
<br>
<p>and
<br>
<p>slax_at_master$ ssh  node1 'echo $PATH'
<br>
<p>gives me the reduced path on the slave node. I think that the problem is
<br>
exactly the same as the last line - when I execute a bash script, it is
<br>
envoked in a non-interactive mode (login mode, because of the ssh), and
<br>
maybe some other config file is read instead of .bash_profile or
<br>
.bashrc? This reduced PATH and LD_LIBRARY_PATH cause problems for mpirun
<br>
to find the right libraries and binaries.
<br>
<p><span class="quotelev1">&gt; Solution to this is to write the path to the executables and path to
</span><br>
<span class="quotelev1">&gt; libraries to the variables you have set on your own computer, tha
</span><br>
<span class="quotelev1">&gt; master.
</span><br>
<p>The master computer already has everything set, because the Live DVD is
<br>
configured properly (i ran a test case on dual core - mpirun runs fine
<br>
locally), I'm not sure I understand, could you please explain a bit more
<br>
- this is all new to me.
<br>
<p>Thank you very much for your advice and time!
<br>
<p>Best regards,
<br>
<p>Tomislav
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know how that works for you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Eddy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 13:09 +0200:
</span><br>
<span class="quotelev2">&gt;&gt; Prasadcse Perera wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One workaround is you can define PATH and LD_LIBRARY_PATH in your common
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .bashrc and have a resembling  paths of installation in two nodes. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works for me nicely with my three node installation :).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for the advice. Actually I'm running OpenFOAM (read:
</span><br>
<span class="quotelev2">&gt;&gt; a program parallelized to run with Open MPI) from SLAX Live DVD, so the
</span><br>
<span class="quotelev2">&gt;&gt; installation paths are identical, as well as everything else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've added commands that set enviromental variables in .bashrc on both
</span><br>
<span class="quotelev2">&gt;&gt; nodes, but you mention &quot;common .bashrc&quot;. Common in what way? I'm sorry
</span><br>
<span class="quotelev2">&gt;&gt; for newbish question, again, I'm supposed to be a Mechanical Engineer.
</span><br>
<span class="quotelev2">&gt;&gt; :))))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenFOAM toolkit carries a separate directory for third-party support
</span><br>
<span class="quotelev2">&gt;&gt; software. In this directory there are programs for postprocessing
</span><br>
<span class="quotelev2">&gt;&gt; simulation results and analyze data and Open MPI. Therefore, in my case,
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is built in a separate directory and the build is automated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After the build of both programs, there is a special bashrc located in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; some/path/OpenFOAM/OpenFOAM-1.5-dev/etc/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that sets all the variables needed to use Open FOAM, such as
</span><br>
<span class="quotelev2">&gt;&gt; FOAM_TUTORIALS (where are the tutorials), FOAM_RUN (where is the working
</span><br>
<span class="quotelev2">&gt;&gt; dir), WM_COMPILER (what compiler to use), etc. This bashrc also sets
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH and PATH so that locally installed Open MPI can be found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried this installation on the Live DVD on my laptop with two
</span><br>
<span class="quotelev2">&gt;&gt; cores, decomposed the case and ran the simulation in parallel without a
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this information is more helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tomislav
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
<li><strong>Next message:</strong> <a href="10172.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10170.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10168.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10173.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10173.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
