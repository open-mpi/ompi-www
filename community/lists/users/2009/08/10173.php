<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 10:30:09 2009" -->
<!-- isoreceived="20090802143009" -->
<!-- sent="Sun, 02 Aug 2009 16:30:02 +0200" -->
<!-- isosent="20090802143002" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="1249223402.3831.16.camel_at_eddy" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A759E30.5040508_at_gmx.com" -->
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
<strong>From:</strong> Dominik T&#225;borsk&#253; (<em>bremby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 10:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10172.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This is it:
<br>
<span class="quotelev1">&gt; slax_at_master$ ssh  node1 'echo $PATH'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gives me the reduced path on the slave node.
</span><br>
<p>I'm sorry, I was wrong. You typed it correctly. AFAIK, this command logs
<br>
in your node but the PATH variable is still just as on your master. I
<br>
had this issue and I solved it by editing the .bashrc file on the
<br>
master, NOT the node. That worked for me. Try editing the PATH and
<br>
LD_LIBRARY_PATH on the master, on the computer you run the mpirun
<br>
command.
<br>
<p>So, for example, if you have on the nodes the MPI installation
<br>
in /openMPI/, with subfolders &quot;bin&quot; and &quot;lib&quot;, try putting these lines
<br>
into your .bashrc file on the master:
<br>
export PATH=$PATH:/openMPI/bin
<br>
export LD_RUN_FLAG=$LD_LIBRARY_PATH:/openMPI/lib
<br>
<p>It shouldn't matter where is your MPI installation on the master. The
<br>
nodes matter!
<br>
<p>Note: I am a openMPI beginner, I am not involved in development, I'm
<br>
just sharing my experience on the same problem and how I solved it. No
<br>
guarantee...
<br>
<p>Dr. Eddy
<br>
<p>Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 16:09 +0200:
<br>
<span class="quotelev1">&gt; Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Tomislav,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I also had this issue. When you try to trace it, you'll find out that
</span><br>
<span class="quotelev2">&gt; &gt; when you manually connect to a machine and immediately execute a
</span><br>
<span class="quotelev2">&gt; &gt; command, it will inherit your environment, not the environment of the
</span><br>
<span class="quotelev2">&gt; &gt; node. See:
</span><br>
<span class="quotelev2">&gt; &gt; $ ssh node1 &amp;&amp; echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This will echo the PATH on your computer, the master one, not the node.
</span><br>
<span class="quotelev2">&gt; &gt; But if you do this:
</span><br>
<span class="quotelev2">&gt; &gt; $ ssh node1
</span><br>
<span class="quotelev2">&gt; &gt; node1$ echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; it will echo the PATH on your node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ssh node1 &amp;&amp; echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at first does nothing, leaving me loged in on the node, but when I exit,
</span><br>
<span class="quotelev1">&gt; it writes out the $PATH on the master node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh node1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; slax_at_node1$ echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gives me the path on the slave node1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; slax_at_master$ ssh  node1 'echo $PATH'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gives me the reduced path on the slave node. I think that the problem is
</span><br>
<span class="quotelev1">&gt; exactly the same as the last line - when I execute a bash script, it is
</span><br>
<span class="quotelev1">&gt; envoked in a non-interactive mode (login mode, because of the ssh), and
</span><br>
<span class="quotelev1">&gt; maybe some other config file is read instead of .bash_profile or
</span><br>
<span class="quotelev1">&gt; .bashrc? This reduced PATH and LD_LIBRARY_PATH cause problems for mpirun
</span><br>
<span class="quotelev1">&gt; to find the right libraries and binaries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Solution to this is to write the path to the executables and path to
</span><br>
<span class="quotelev2">&gt; &gt; libraries to the variables you have set on your own computer, tha
</span><br>
<span class="quotelev2">&gt; &gt; master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The master computer already has everything set, because the Live DVD is
</span><br>
<span class="quotelev1">&gt; configured properly (i ran a test case on dual core - mpirun runs fine
</span><br>
<span class="quotelev1">&gt; locally), I'm not sure I understand, could you please explain a bit more
</span><br>
<span class="quotelev1">&gt; - this is all new to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your advice and time!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tomislav
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Let me know how that works for you!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Eddy
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 13:09 +0200:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Prasadcse Perera wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; One workaround is you can define PATH and LD_LIBRARY_PATH in your common
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; .bashrc and have a resembling  paths of installation in two nodes. This
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; works for me nicely with my three node installation :).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you very much for the advice. Actually I'm running OpenFOAM (read:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a program parallelized to run with Open MPI) from SLAX Live DVD, so the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installation paths are identical, as well as everything else.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've added commands that set enviromental variables in .bashrc on both
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes, but you mention &quot;common .bashrc&quot;. Common in what way? I'm sorry
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for newbish question, again, I'm supposed to be a Mechanical Engineer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; :))))
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenFOAM toolkit carries a separate directory for third-party support
</span><br>
<span class="quotelev3">&gt; &gt;&gt; software. In this directory there are programs for postprocessing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; simulation results and analyze data and Open MPI. Therefore, in my case,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI is built in a separate directory and the build is automated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; After the build of both programs, there is a special bashrc located in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; some/path/OpenFOAM/OpenFOAM-1.5-dev/etc/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that sets all the variables needed to use Open FOAM, such as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FOAM_TUTORIALS (where are the tutorials), FOAM_RUN (where is the working
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dir), WM_COMPILER (what compiler to use), etc. This bashrc also sets
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LD_LIBRARY_PATH and PATH so that locally installed Open MPI can be found.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've tried this installation on the Live DVD on my laptop with two
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cores, decomposed the case and ran the simulation in parallel without a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I hope this information is more helpful.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tomislav
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10172.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
