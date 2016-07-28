<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 14:33:05 2009" -->
<!-- isoreceived="20090802183305" -->
<!-- sent="Sun, 02 Aug 2009 20:32:59 +0200" -->
<!-- isosent="20090802183259" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="1249237979.3831.61.camel_at_eddy" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A75D87E.7020107_at_gmx.com" -->
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
<strong>Date:</strong> 2009-08-02 14:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10181.php">Lee Amy: "[OMPI users] Help: Processors Binding"</a>
<li><strong>Previous message:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry, I can't help you with NFS. I have never had it on my network.
<br>
<p>Good luck anyway... :)
<br>
<p><p>Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 20:18 +0200:
<br>
<span class="quotelev1">&gt; Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Okay, now it's getting more confusing since I just found out that it
</span><br>
<span class="quotelev2">&gt; &gt; somehow stopped working for me!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, let's find a solution.
</span><br>
<span class="quotelev2">&gt; &gt; I found out that there is difference between 
</span><br>
<span class="quotelev2">&gt; &gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; and 
</span><br>
<span class="quotelev2">&gt; &gt; ssh node1 'echo $PATH'
</span><br>
<span class="quotelev2">&gt; &gt; These command give you different output. 'man ssh' states that it sets
</span><br>
<span class="quotelev2">&gt; &gt; its own PATH variable right before the user logs in but after the
</span><br>
<span class="quotelev2">&gt; &gt; connection is established. This variable is set during compilation.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using dropbear as SSH2 server so I won't be able to guide you if
</span><br>
<span class="quotelev2">&gt; &gt; you're using OpenSSH as a server, but the manpages should be sufficient.
</span><br>
<span class="quotelev2">&gt; &gt; Look into man ssh and man ssh_config. You should create files ~/.ssh/rc
</span><br>
<span class="quotelev2">&gt; &gt; OR ~/.ssh/config OR ~/.ssh/environment. Setting it up in one of these
</span><br>
<span class="quotelev2">&gt; &gt; files should be enough.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I will probably recompile dropbear with new default PATH.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I am sure it used to work for me and I have no idea why it
</span><br>
<span class="quotelev2">&gt; &gt; stopped.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you'd need more help, just ask :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Eddy
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much!! I'm also finding out about those files and I'm
</span><br>
<span class="quotelev1">&gt; using OpenSSH. I'll try and configure it to work. The weirdest thing is
</span><br>
<span class="quotelev1">&gt; that people who use Ubuntu on OpenFOAM forum just had to comment a line
</span><br>
<span class="quotelev1">&gt; in .bashrc that returns if the bash is run in non-interactive mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just don't get it. Let me ask you just one thing, before the next 5-6
</span><br>
<span class="quotelev1">&gt; hours of fighting with config files:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what about NFS?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What if I export the directory? On OMPI pages is written that nfs
</span><br>
<span class="quotelev1">&gt; simplifies things. I'm noob in networking so I don't know if this would
</span><br>
<span class="quotelev1">&gt; benefit me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I edit ~/.ssh/environment then I have to manually set VARIABLE=VALUE,
</span><br>
<span class="quotelev1">&gt; and there are dozens of variables to set. I think I'll try the rc file
</span><br>
<span class="quotelev1">&gt; first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you again!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Tomislav
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
<li><strong>Next message:</strong> <a href="10181.php">Lee Amy: "[OMPI users] Help: Processors Binding"</a>
<li><strong>Previous message:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10179.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
