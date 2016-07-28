<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 14:44:03 2009" -->
<!-- isoreceived="20090806184403" -->
<!-- sent="Thu, 06 Aug 2009 20:43:51 +0200" -->
<!-- isosent="20090806184351" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A7B2467.6010901_at_gmx.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="67A3061C-F402-40C2-940E-9B2A8F4CE946_at_cisco.com" -->
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
<strong>Date:</strong> 2009-08-06 14:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Previous message:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thank you very much for your reply! :)
<br>
<p>the problem wasn't only in the OMPI libs and bins, it was in other
<br>
binaries as well: OpenFOAM simulation suite is also installed locally so
<br>
&nbsp;&nbsp;a short PATH could't be informative enough.
<br>
<p>Actually, I know that the environment is exactly the same, because I'm
<br>
running liveDVDs with a sole purpose of setting up a NOW and running
<br>
simulations.
<br>
<p>Therefore, --prefix and /full/path/mpirun gave me the ability to find
<br>
orted and similar stuff needed for OMPI, but failed to give me the
<br>
linkage :) to OpenFOAM binaries and libs. That's why my solver
<br>
complained that it coulnd't link the .so libraries.
<br>
<p>I'm not quite sure how secure is my solution, it seems a bit radical,
<br>
but I have tried everything, even sending vars with -x option but gave
<br>
up because there's like 50 of them. I would have to cat the -x arguments
<br>
from a file or smth. :)
<br>
<p>Thanks,
<br>
Tomislav
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for not replying earlier -- travel to the MPI Forum last week  
</span><br>
<span class="quotelev1">&gt; put me waaaay behind on my INBOX.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think you want to &quot;printenv &gt; ~/.ssh/environment&quot; -- you don't/ 
</span><br>
<span class="quotelev1">&gt; can't know for sure that the remote environment should be exactly the  
</span><br>
<span class="quotelev1">&gt; same as your local environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead, you might want to use OMPI's built-in &quot;set the PATH /  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH remotely&quot; functionality.  Use the full path name to  
</span><br>
<span class="quotelev1">&gt; mpirun, like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And that should tell mpirun to set the PATH and LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt; remotely.  Note that this functionality assumes that Open MPI is  
</span><br>
<span class="quotelev1">&gt; installed in exactly the same filesystem location on the node where  
</span><br>
<span class="quotelev1">&gt; mpirun is invoked and the back-end compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, you can also use the --prefix argument to mpirun; the &quot;/opt/ 
</span><br>
<span class="quotelev1">&gt; openmpi/bin/mpirun ...&quot; behavior is a shortcut for that same behavior  
</span><br>
<span class="quotelev1">&gt; (we emulated the idea of using the full pathname to mpirun from HP MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, you can force Open MPI to use the --prefix behavior by  
</span><br>
<span class="quotelev1">&gt; default if you configure/build Open MPI with the --enable-mpirun- 
</span><br>
<span class="quotelev1">&gt; prefix-by-default configure switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2009, at 7:35 AM, Tomislav Maric wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Dominik for all your help!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've solved the problem: execute : printenv &gt; ~/.ssh/environment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; edit /etc/ssh/sshd_config and set PermitUserEnvironment to &quot;yes&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; check that UseLogin is set to &quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; scp hostname ~/.ssh/environment user_at_hostname:~/.ssh/environment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; edit sshd_config on the other host and set the same things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Works like a charm!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tomislav
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dominik T&#225;borsk&#253; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry, I can't help you with NFS. I have never had it on my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good luck anyway... :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tomislav Maric p&#237;&#154;e v Ne 02. 08. 2009 v 20:18 +0200:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dominik T&#225;borsk&#253; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Okay, now it's getting more confusing since I just found out that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; somehow stopped working for me!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anyway, let's find a solution.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I found out that there is difference between
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh node1 echo $PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh node1 'echo $PATH'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; These command give you different output. 'man ssh' states that it  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sets
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; its own PATH variable right before the user logs in but after the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection is established. This variable is set during compilation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using dropbear as SSH2 server so I won't be able to guide  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you're using OpenSSH as a server, but the manpages should be  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sufficient.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Look into man ssh and man ssh_config. You should create files  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ~/.ssh/rc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OR ~/.ssh/config OR ~/.ssh/environment. Setting it up in one of  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; files should be enough.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I will probably recompile dropbear with new default PATH.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anyway, I am sure it used to work for me and I have no idea why it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stopped.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you'd need more help, just ask :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dr. Eddy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you very much!! I'm also finding out about those files and I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using OpenSSH. I'll try and configure it to work. The weirdest  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thing is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that people who use Ubuntu on OpenFOAM forum just had to comment a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in .bashrc that returns if the bash is run in non-interactive mode.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just don't get it. Let me ask you just one thing, before the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; next 5-6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hours of fighting with config files:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what about NFS?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What if I export the directory? On OMPI pages is written that nfs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simplifies things. I'm noob in networking so I don't know if this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; benefit me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I edit ~/.ssh/environment then I have to manually set  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VARIABLE=VALUE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and there are dozens of variables to set. I think I'll try the rc  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you again!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tomislav
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Previous message:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10226.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
