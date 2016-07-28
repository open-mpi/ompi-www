<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 12:16:31 2009" -->
<!-- isoreceived="20090802161631" -->
<!-- sent="Sun, 02 Aug 2009 18:16:25 +0200" -->
<!-- isosent="20090802161625" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="1249229785.3831.28.camel_at_eddy" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A75A9B1.1040601_at_gmx.com" -->
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
<strong>Date:</strong> 2009-08-02 12:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The .bashrc on your master is not run, therefore there are no echos. 
<br>
Let's revise once more so that we're sure we understand each other :-)
<br>
<p>On your master - on the computer you run &quot;mpirun&quot; - you put these 2
<br>
lines into your own .bashrc:
<br>
<p>export PATH=$PATH:/openMPI/bin
<br>
export LD_RUN_FLAG=$LD_LIBRARY_PATH:/openMPI/lib
<br>
<p>These 2 lines are in /home/tomislav/.bashrc (supposing your user is
<br>
tomislav).
<br>
<p>On each of your node you can leave .bashrc files. Try putting this line
<br>
in them:
<br>
echo $PATH
<br>
<p>Again, this file is /home/tomislav/.bashrc. It must be the same file. Or
<br>
if you don't have that file on your nodes, the system-wide bashrc file
<br>
should be run, which is - I think - /etc/bash.bashrc.
<br>
<p>Now, when you run the command:
<br>
ssh node1 echo $PATH
<br>
<p>It should print two lines:
<br>
1st should be the executed command which should print out new PATH,
<br>
2nd should be the command in the node's .bashrc file, which should be
<br>
the reduced PATH.
<br>
<p>Anyway, let's try something:
<br>
$ echo $PATH
<br>
$ ssh node1 echo $PATH
<br>
node1$ echo $PATH
<br>
<p>This should print out 3 lines, your master PATH twice and then the
<br>
reduced PATH once.
<br>
<p>Let me know how that went.
<br>
<p>Dr. Eddy
<br>
<p><p>Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 16:58 +0200:
<br>
<span class="quotelev1">&gt; Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is it:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; slax_at_master$ ssh  node1 'echo $PATH'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gives me the reduced path on the slave node.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry, I was wrong. You typed it correctly. AFAIK, this command logs
</span><br>
<span class="quotelev2">&gt; &gt; in your node but the PATH variable is still just as on your master. I
</span><br>
<span class="quotelev2">&gt; &gt; had this issue and I solved it by editing the .bashrc file on the
</span><br>
<span class="quotelev2">&gt; &gt; master, NOT the node. That worked for me. Try editing the PATH and
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH on the master, on the computer you run the mpirun
</span><br>
<span class="quotelev2">&gt; &gt; command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So, for example, if you have on the nodes the MPI installation
</span><br>
<span class="quotelev2">&gt; &gt; in /openMPI/, with subfolders &quot;bin&quot; and &quot;lib&quot;, try putting these lines
</span><br>
<span class="quotelev2">&gt; &gt; into your .bashrc file on the master:
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=$PATH:/openMPI/bin
</span><br>
<span class="quotelev2">&gt; &gt; export LD_RUN_FLAG=$LD_LIBRARY_PATH:/openMPI/lib
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It shouldn't matter where is your MPI installation on the master. The
</span><br>
<span class="quotelev2">&gt; &gt; nodes matter!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note: I am a openMPI beginner, I am not involved in development, I'm
</span><br>
<span class="quotelev2">&gt; &gt; just sharing my experience on the same problem and how I solved it. No
</span><br>
<span class="quotelev2">&gt; &gt; guarantee...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm really gratefull for your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried leaving only .bashrc at the master node and I have set the
</span><br>
<span class="quotelev1">&gt; variables as you have suggested, but nothing changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've even read again in the man pages about ssh invoked bash, and it
</span><br>
<span class="quotelev1">&gt; realy reads and executes/etc/bash.bashrc file and ~/.bashrc -  which
</span><br>
<span class="quotelev1">&gt; ever comes first. I've added echo commands to .bashrc on the master, but
</span><br>
<span class="quotelev1">&gt; nothing is echoed, and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh node1 'echo $PATH'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gives the reduced path again. I'm frustrated. I'm a step away from
</span><br>
<span class="quotelev1">&gt; running OpenFOAM on a LAN over a LiveDVD... :(
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
<li><strong>Next message:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10174.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
