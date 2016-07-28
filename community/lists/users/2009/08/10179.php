<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 14:18:49 2009" -->
<!-- isoreceived="20090802181849" -->
<!-- sent="Sun, 02 Aug 2009 20:18:38 +0200" -->
<!-- isosent="20090802181838" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A75D87E.7020107_at_gmx.com" -->
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
<strong>From:</strong> Tomislav Maric (<em>tomislav.maric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 14:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10180.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10177.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10180.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10180.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominik T&#195;&#161;borsk&#195;&#189; wrote:
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
<span class="quotelev1">&gt; and 
</span><br>
<span class="quotelev1">&gt; ssh node1 'echo $PATH'
</span><br>
<span class="quotelev1">&gt; These command give you different output. 'man ssh' states that it sets
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
<p>Thank you very much!! I'm also finding out about those files and I'm
<br>
using OpenSSH. I'll try and configure it to work. The weirdest thing is
<br>
that people who use Ubuntu on OpenFOAM forum just had to comment a line
<br>
in .bashrc that returns if the bash is run in non-interactive mode.
<br>
<p>I just don't get it. Let me ask you just one thing, before the next 5-6
<br>
hours of fighting with config files:
<br>
<p>what about NFS?
<br>
<p>What if I export the directory? On OMPI pages is written that nfs
<br>
simplifies things. I'm noob in networking so I don't know if this would
<br>
benefit me.
<br>
<p>If I edit ~/.ssh/environment then I have to manually set VARIABLE=VALUE,
<br>
and there are dozens of variables to set. I think I'll try the rc file
<br>
first.
<br>
<p>Thank you again!
<br>
<p>Best regards,
<br>
Tomislav
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10180.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10178.php">Dorian Krause: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10177.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10180.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10180.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
