<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 14:11:26 2009" -->
<!-- isoreceived="20090802181126" -->
<!-- sent="Sun, 02 Aug 2009 20:11:19 +0200" -->
<!-- isosent="20090802181119" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A75D6C7.2090101_at_web.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1249236345.3831.59.camel_at_eddy" -->
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
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 14:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10177.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10177.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Dominik T&#195;&#161;borsk&#195;&#189; wrote:
<br>
<span class="quotelev1">&gt; Okay, now it's getting more confusing since I just found out that it
</span><br>
<span class="quotelev1">&gt; somehow stopped working for me!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, let's find a solution.
</span><br>
<span class="quotelev1">&gt; I found out that there is difference between 
</span><br>
<span class="quotelev1">&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>In this case the $PATH variable is expanded by the shell *before* the 
<br>
ssh executable is called
<br>
<p><span class="quotelev1">&gt; and 
</span><br>
<span class="quotelev1">&gt; ssh node1 'echo $PATH'
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Here path is expanded on node1
<br>
<p><span class="quotelev1">&gt; These command give you different output. 'man ssh' states that it sets
</span><br>
<span class="quotelev1">&gt; its own PATH variable right before the user logs in but after the
</span><br>
<span class="quotelev1">&gt; connection is established. This variable is set during compilation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using dropbear as SSH2 server so I won't be able to guide you if
</span><br>
<span class="quotelev1">&gt; you're using OpenSSH as a server, but the manpages should be sufficient.
</span><br>
<span class="quotelev1">&gt; Look into man ssh and man ssh_config. You should create files ~/.ssh/rc
</span><br>
<span class="quotelev1">&gt; OR ~/.ssh/config OR ~/.ssh/environment. Setting it up in one of these
</span><br>
<span class="quotelev1">&gt; files should be enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will probably recompile dropbear with new default PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I am sure it used to work for me and I have no idea why it
</span><br>
<span class="quotelev1">&gt; stopped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you'd need more help, just ask :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Eddy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 18:45 +0200:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The .bashrc on your master is not run, therefore there are no echos. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's revise once more so that we're sure we understand each other :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On your master - on the computer you run &quot;mpirun&quot; - you put these 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lines into your own .bashrc:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=$PATH:/openMPI/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_RUN_FLAG=$LD_LIBRARY_PATH:/openMPI/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These 2 lines are in /home/tomislav/.bashrc (supposing your user is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tomislav).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On each of your node you can leave .bashrc files. Try putting this line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in them:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, this file is /home/tomislav/.bashrc. It must be the same file. Or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you don't have that file on your nodes, the system-wide bashrc file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be run, which is - I think - /etc/bash.bashrc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, when you run the command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It should print two lines:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1st should be the executed command which should print out new PATH,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2nd should be the command in the node's .bashrc file, which should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the reduced PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, let's try something:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ssh node1 echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1$ echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should print out 3 lines, your master PATH twice and then the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reduced PATH once.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know how that went.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Eddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; are you sure this is the right syntax:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh node1 echo $PATH gives me only the full PATH and doesn't log me on
</span><br>
<span class="quotelev2">&gt;&gt; to node1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, here's what I've tried:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh node1 &amp;&amp; echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gives me first the $PATH on the master, and then the reduced one, as you
</span><br>
<span class="quotelev2">&gt;&gt; said.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt; ssh node1 &amp;&amp; echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gives me the master $PATH twice, and then the reduced one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At least now I know that ~/.bashrc is not being called at all. You see,
</span><br>
<span class="quotelev2">&gt;&gt; I've also tried
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh node1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and if ssh is using non-interactive login bash, it should start a
</span><br>
<span class="quotelev2">&gt;&gt; .bashrc. If it started .bashrc on the master, it would, because of the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; , echo the master $PATH, and if it starts the .bashrc on the slave node,
</span><br>
<span class="quotelev2">&gt;&gt; it would echo the reduced path. Something is not right. I've even
</span><br>
<span class="quotelev2">&gt;&gt; written echo master node and echo slave node in both .bashrc and nothing
</span><br>
<span class="quotelev2">&gt;&gt; echoed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if i try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh mario 'echo $PATH' i get the reduced $PATH still.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One more thing to know, I set ALL environmental variables using
</span><br>
<span class="quotelev2">&gt;&gt; OpenFOAM's bashrc script, both for OpenFOAM and OMPI, but this shouldn't
</span><br>
<span class="quotelev2">&gt;&gt; make any difference because
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; . $FOAM_INST_DIR/OpenFOAM-1.5-dev/etc/bashrc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; script sets all the variables the right way on the master AND slave node
</span><br>
<span class="quotelev2">&gt;&gt; , meaning that I run successful serial simulations on both computers. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10177.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10177.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
