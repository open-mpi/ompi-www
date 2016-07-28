<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 14:05:51 2009" -->
<!-- isoreceived="20090802180551" -->
<!-- sent="Sun, 02 Aug 2009 20:05:45 +0200" -->
<!-- isosent="20090802180545" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="1249236345.3831.59.camel_at_eddy" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A75C291.6050405_at_gmx.com" -->
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
<strong>Date:</strong> 2009-08-02 14:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, now it's getting more confusing since I just found out that it
<br>
somehow stopped working for me!
<br>
<p>Anyway, let's find a solution.
<br>
I found out that there is difference between 
<br>
ssh node1 echo $PATH
<br>
and 
<br>
ssh node1 'echo $PATH'
<br>
These command give you different output. 'man ssh' states that it sets
<br>
its own PATH variable right before the user logs in but after the
<br>
connection is established. This variable is set during compilation.
<br>
<p>I am using dropbear as SSH2 server so I won't be able to guide you if
<br>
you're using OpenSSH as a server, but the manpages should be sufficient.
<br>
Look into man ssh and man ssh_config. You should create files ~/.ssh/rc
<br>
OR ~/.ssh/config OR ~/.ssh/environment. Setting it up in one of these
<br>
files should be enough.
<br>
<p>I will probably recompile dropbear with new default PATH.
<br>
<p>Anyway, I am sure it used to work for me and I have no idea why it
<br>
stopped.
<br>
<p>If you'd need more help, just ask :-)
<br>
<p>Dr. Eddy
<br>
<p><p><p><p>Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 18:45 +0200:
<br>
<span class="quotelev1">&gt; Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The .bashrc on your master is not run, therefore there are no echos. 
</span><br>
<span class="quotelev2">&gt; &gt; Let's revise once more so that we're sure we understand each other :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On your master - on the computer you run &quot;mpirun&quot; - you put these 2
</span><br>
<span class="quotelev2">&gt; &gt; lines into your own .bashrc:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=$PATH:/openMPI/bin
</span><br>
<span class="quotelev2">&gt; &gt; export LD_RUN_FLAG=$LD_LIBRARY_PATH:/openMPI/lib
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; These 2 lines are in /home/tomislav/.bashrc (supposing your user is
</span><br>
<span class="quotelev2">&gt; &gt; tomislav).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On each of your node you can leave .bashrc files. Try putting this line
</span><br>
<span class="quotelev2">&gt; &gt; in them:
</span><br>
<span class="quotelev2">&gt; &gt; echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Again, this file is /home/tomislav/.bashrc. It must be the same file. Or
</span><br>
<span class="quotelev2">&gt; &gt; if you don't have that file on your nodes, the system-wide bashrc file
</span><br>
<span class="quotelev2">&gt; &gt; should be run, which is - I think - /etc/bash.bashrc.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now, when you run the command:
</span><br>
<span class="quotelev2">&gt; &gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It should print two lines:
</span><br>
<span class="quotelev2">&gt; &gt; 1st should be the executed command which should print out new PATH,
</span><br>
<span class="quotelev2">&gt; &gt; 2nd should be the command in the node's .bashrc file, which should be
</span><br>
<span class="quotelev2">&gt; &gt; the reduced PATH.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, let's try something:
</span><br>
<span class="quotelev2">&gt; &gt; $ echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; $ ssh node1 echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; node1$ echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This should print out 3 lines, your master PATH twice and then the
</span><br>
<span class="quotelev2">&gt; &gt; reduced PATH once.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Let me know how that went.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Eddy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; are you sure this is the right syntax:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh node1 echo $PATH gives me only the full PATH and doesn't log me on
</span><br>
<span class="quotelev1">&gt; to node1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, here's what I've tried:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh node1 &amp;&amp; echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gives me first the $PATH on the master, and then the reduced one, as you
</span><br>
<span class="quotelev1">&gt; said.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo $PATH
</span><br>
<span class="quotelev1">&gt; ssh node1 &amp;&amp; echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gives me the master $PATH twice, and then the reduced one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At least now I know that ~/.bashrc is not being called at all. You see,
</span><br>
<span class="quotelev1">&gt; I've also tried
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh node1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and if ssh is using non-interactive login bash, it should start a
</span><br>
<span class="quotelev1">&gt; .bashrc. If it started .bashrc on the master, it would, because of the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo $PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; , echo the master $PATH, and if it starts the .bashrc on the slave node,
</span><br>
<span class="quotelev1">&gt; it would echo the reduced path. Something is not right. I've even
</span><br>
<span class="quotelev1">&gt; written echo master node and echo slave node in both .bashrc and nothing
</span><br>
<span class="quotelev1">&gt; echoed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i try
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh mario 'echo $PATH' i get the reduced $PATH still.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One more thing to know, I set ALL environmental variables using
</span><br>
<span class="quotelev1">&gt; OpenFOAM's bashrc script, both for OpenFOAM and OMPI, but this shouldn't
</span><br>
<span class="quotelev1">&gt; make any difference because
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; . $FOAM_INST_DIR/OpenFOAM-1.5-dev/etc/bashrc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; script sets all the variables the right way on the master AND slave node
</span><br>
<span class="quotelev1">&gt; , meaning that I run successful serial simulations on both computers. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
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
<li><strong>Next message:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10176.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
