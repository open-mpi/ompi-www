<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 07:35:41 2009" -->
<!-- isoreceived="20090803113541" -->
<!-- sent="Mon, 03 Aug 2009 13:35:30 +0200" -->
<!-- isosent="20090803113530" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A76CB82.70006_at_gmx.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1249237979.3831.61.camel_at_eddy" -->
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
<strong>Date:</strong> 2009-08-03 07:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10186.php">David Doria: "[OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10184.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10180.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Dominik for all your help!!
<br>
<p>I've solved the problem: execute : printenv &gt; ~/.ssh/environment
<br>
<p>edit /etc/ssh/sshd_config and set PermitUserEnvironment to &quot;yes&quot; and
<br>
check that UseLogin is set to &quot;no&quot;
<br>
<p>scp hostname ~/.ssh/environment user_at_hostname:~/.ssh/environment
<br>
<p>edit sshd_config on the other host and set the same things.
<br>
<p>Works like a charm!
<br>
<p>Tomislav
<br>
<p>Dominik T&#195;&#161;borsk&#195;&#189; wrote:
<br>
<span class="quotelev1">&gt; I'm sorry, I can't help you with NFS. I have never had it on my network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck anyway... :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 20:18 +0200:
</span><br>
<span class="quotelev2">&gt;&gt; Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, now it's getting more confusing since I just found out that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somehow stopped working for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, let's find a solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found out that there is difference between 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh node1 'echo $PATH'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These command give you different output. 'man ssh' states that it sets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its own PATH variable right before the user logs in but after the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection is established. This variable is set during compilation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using dropbear as SSH2 server so I won't be able to guide you if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're using OpenSSH as a server, but the manpages should be sufficient.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Look into man ssh and man ssh_config. You should create files ~/.ssh/rc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OR ~/.ssh/config OR ~/.ssh/environment. Setting it up in one of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files should be enough.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will probably recompile dropbear with new default PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, I am sure it used to work for me and I have no idea why it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stopped.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you'd need more help, just ask :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Eddy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much!! I'm also finding out about those files and I'm
</span><br>
<span class="quotelev2">&gt;&gt; using OpenSSH. I'll try and configure it to work. The weirdest thing is
</span><br>
<span class="quotelev2">&gt;&gt; that people who use Ubuntu on OpenFOAM forum just had to comment a line
</span><br>
<span class="quotelev2">&gt;&gt; in .bashrc that returns if the bash is run in non-interactive mode.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just don't get it. Let me ask you just one thing, before the next 5-6
</span><br>
<span class="quotelev2">&gt;&gt; hours of fighting with config files:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what about NFS?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What if I export the directory? On OMPI pages is written that nfs
</span><br>
<span class="quotelev2">&gt;&gt; simplifies things. I'm noob in networking so I don't know if this would
</span><br>
<span class="quotelev2">&gt;&gt; benefit me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I edit ~/.ssh/environment then I have to manually set VARIABLE=VALUE,
</span><br>
<span class="quotelev2">&gt;&gt; and there are dozens of variables to set. I think I'll try the rc file
</span><br>
<span class="quotelev2">&gt;&gt; first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you again!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tomislav
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
<li><strong>Next message:</strong> <a href="10186.php">David Doria: "[OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10184.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10180.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
