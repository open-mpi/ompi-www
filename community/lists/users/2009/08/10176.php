<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 12:45:14 2009" -->
<!-- isoreceived="20090802164514" -->
<!-- sent="Sun, 02 Aug 2009 18:45:05 +0200" -->
<!-- isosent="20090802164505" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A75C291.6050405_at_gmx.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1249229785.3831.28.camel_at_eddy" -->
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
<strong>Date:</strong> 2009-08-02 12:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10177.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10175.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10175.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10177.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10177.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominik T&#195;&#161;borsk&#195;&#189; wrote:
<br>
<span class="quotelev1">&gt; The .bashrc on your master is not run, therefore there are no echos. 
</span><br>
<span class="quotelev1">&gt; Let's revise once more so that we're sure we understand each other :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On your master - on the computer you run &quot;mpirun&quot; - you put these 2
</span><br>
<span class="quotelev1">&gt; lines into your own .bashrc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/openMPI/bin
</span><br>
<span class="quotelev1">&gt; export LD_RUN_FLAG=$LD_LIBRARY_PATH:/openMPI/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These 2 lines are in /home/tomislav/.bashrc (supposing your user is
</span><br>
<span class="quotelev1">&gt; tomislav).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On each of your node you can leave .bashrc files. Try putting this line
</span><br>
<span class="quotelev1">&gt; in them:
</span><br>
<span class="quotelev1">&gt; echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, this file is /home/tomislav/.bashrc. It must be the same file. Or
</span><br>
<span class="quotelev1">&gt; if you don't have that file on your nodes, the system-wide bashrc file
</span><br>
<span class="quotelev1">&gt; should be run, which is - I think - /etc/bash.bashrc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, when you run the command:
</span><br>
<span class="quotelev1">&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should print two lines:
</span><br>
<span class="quotelev1">&gt; 1st should be the executed command which should print out new PATH,
</span><br>
<span class="quotelev1">&gt; 2nd should be the command in the node's .bashrc file, which should be
</span><br>
<span class="quotelev1">&gt; the reduced PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, let's try something:
</span><br>
<span class="quotelev1">&gt; $ echo $PATH
</span><br>
<span class="quotelev1">&gt; $ ssh node1 echo $PATH
</span><br>
<span class="quotelev1">&gt; node1$ echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should print out 3 lines, your master PATH twice and then the
</span><br>
<span class="quotelev1">&gt; reduced PATH once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know how that went.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Eddy
</span><br>
<p>are you sure this is the right syntax:
<br>
<p>ssh node1 echo $PATH
<br>
<p>?
<br>
<p>ssh node1 echo $PATH gives me only the full PATH and doesn't log me on
<br>
to node1.
<br>
<p>OK, here's what I've tried:
<br>
<p>ssh node1 &amp;&amp; echo $PATH
<br>
<p>gives me first the $PATH on the master, and then the reduced one, as you
<br>
said.
<br>
<p><p>echo $PATH
<br>
ssh node1 &amp;&amp; echo $PATH
<br>
<p>gives me the master $PATH twice, and then the reduced one.
<br>
<p>At least now I know that ~/.bashrc is not being called at all. You see,
<br>
I've also tried
<br>
<p>ssh node1
<br>
<p>and if ssh is using non-interactive login bash, it should start a
<br>
.bashrc. If it started .bashrc on the master, it would, because of the
<br>
<p>echo $PATH
<br>
<p>, echo the master $PATH, and if it starts the .bashrc on the slave node,
<br>
it would echo the reduced path. Something is not right. I've even
<br>
written echo master node and echo slave node in both .bashrc and nothing
<br>
echoed.
<br>
<p>if i try
<br>
<p>ssh mario 'echo $PATH' i get the reduced $PATH still.
<br>
<p>One more thing to know, I set ALL environmental variables using
<br>
OpenFOAM's bashrc script, both for OpenFOAM and OMPI, but this shouldn't
<br>
make any difference because
<br>
<p>. $FOAM_INST_DIR/OpenFOAM-1.5-dev/etc/bashrc
<br>
<p>script sets all the variables the right way on the master AND slave node
<br>
, meaning that I run successful serial simulations on both computers. :)
<br>
<p>Any suggestions?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10177.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10175.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10175.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10177.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10177.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
