<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 14:06:38 2009" -->
<!-- isoreceived="20090806180638" -->
<!-- sent="Thu, 6 Aug 2009 14:06:32 -0400" -->
<!-- isosent="20090806180632" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="67A3061C-F402-40C2-940E-9B2A8F4CE946_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="4A76CB82.70006_at_gmx.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 14:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
<li><strong>In reply to:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for not replying earlier -- travel to the MPI Forum last week  
<br>
put me waaaay behind on my INBOX.  :-(
<br>
<p>I don't think you want to &quot;printenv &gt; ~/.ssh/environment&quot; -- you don't/ 
<br>
can't know for sure that the remote environment should be exactly the  
<br>
same as your local environment.
<br>
<p>Instead, you might want to use OMPI's built-in &quot;set the PATH /  
<br>
LD_LIBRARY_PATH remotely&quot; functionality.  Use the full path name to  
<br>
mpirun, like:
<br>
<p>/opt/openmpi/bin/mpirun ...
<br>
<p>And that should tell mpirun to set the PATH and LD_LIBRARY_PATH  
<br>
remotely.  Note that this functionality assumes that Open MPI is  
<br>
installed in exactly the same filesystem location on the node where  
<br>
mpirun is invoked and the back-end compute nodes.
<br>
<p>FWIW, you can also use the --prefix argument to mpirun; the &quot;/opt/ 
<br>
openmpi/bin/mpirun ...&quot; behavior is a shortcut for that same behavior  
<br>
(we emulated the idea of using the full pathname to mpirun from HP MPI).
<br>
<p>Additionally, you can force Open MPI to use the --prefix behavior by  
<br>
default if you configure/build Open MPI with the --enable-mpirun- 
<br>
prefix-by-default configure switch.
<br>
<p>Hope that helps!
<br>
<p><p><p>On Aug 3, 2009, at 7:35 AM, Tomislav Maric wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Dominik for all your help!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've solved the problem: execute : printenv &gt; ~/.ssh/environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; edit /etc/ssh/sshd_config and set PermitUserEnvironment to &quot;yes&quot; and
</span><br>
<span class="quotelev1">&gt; check that UseLogin is set to &quot;no&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; scp hostname ~/.ssh/environment user_at_hostname:~/.ssh/environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; edit sshd_config on the other host and set the same things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Works like a charm!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tomislav
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dominik T&#225;borsk&#253; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry, I can't help you with NFS. I have never had it on my  
</span><br>
<span class="quotelev2">&gt;&gt; network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck anyway... :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tomislav Maric p&#237;&#154;e v Ne 02. 08. 2009 v 20:18 +0200:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dominik T&#225;borsk&#253; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, now it's getting more confusing since I just found out that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somehow stopped working for me!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyway, let's find a solution.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I found out that there is difference between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh node1 'echo $PATH'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These command give you different output. 'man ssh' states that it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sets
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; its own PATH variable right before the user logs in but after the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection is established. This variable is set during compilation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using dropbear as SSH2 server so I won't be able to guide  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you're using OpenSSH as a server, but the manpages should be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sufficient.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Look into man ssh and man ssh_config. You should create files  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~/.ssh/rc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OR ~/.ssh/config OR ~/.ssh/environment. Setting it up in one of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; files should be enough.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will probably recompile dropbear with new default PATH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyway, I am sure it used to work for me and I have no idea why it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stopped.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you'd need more help, just ask :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dr. Eddy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much!! I'm also finding out about those files and I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using OpenSSH. I'll try and configure it to work. The weirdest  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that people who use Ubuntu on OpenFOAM forum just had to comment a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in .bashrc that returns if the bash is run in non-interactive mode.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just don't get it. Let me ask you just one thing, before the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; next 5-6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hours of fighting with config files:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what about NFS?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What if I export the directory? On OMPI pages is written that nfs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simplifies things. I'm noob in networking so I don't know if this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benefit me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I edit ~/.ssh/environment then I have to manually set  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VARIABLE=VALUE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and there are dozens of variables to set. I think I'll try the rc  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you again!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tomislav
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
<li><strong>In reply to:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10227.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
