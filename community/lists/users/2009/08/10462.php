<?
$subject_val = "Re: [OMPI users] Help: orted: command not found.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 03:37:50 2009" -->
<!-- isoreceived="20090824073750" -->
<!-- sent="Mon, 24 Aug 2009 09:37:27 +0200" -->
<!-- isosent="20090824073727" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: orted: command not found." -->
<!-- id="4A924337.8020802_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="289665360908231842m760d1642vf696bf739b321d99_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: orted: command not found.<br>
<strong>From:</strong> Tomislav Maric (<em>tomislav.maric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 03:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10463.php">Yann JOBIC: "Re: [OMPI users] Help: orted: command not found."</a>
<li><strong>Previous message:</strong> <a href="10461.php">Lee Amy: "[OMPI users] Help: orted: command not found."</a>
<li><strong>In reply to:</strong> <a href="10461.php">Lee Amy: "[OMPI users] Help: orted: command not found."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10463.php">Yann JOBIC: "Re: [OMPI users] Help: orted: command not found."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lee Amy wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run some programs by using OpenMPI 1.3.3 and when I execute the
</span><br>
<span class="quotelev1">&gt; command I encountered such following error messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sh: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 6797) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So could anyone tell me how to fix that problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Amy
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The mpirun cannot be executed on the remote host because the bin and lib
<br>
directory for OMPI haven't been added to the PATH and LD_LIBRARY_PATH.
<br>
<p>Try executing mpirun with the full pathname:
<br>
<p>/path/to/mpirun -np 2 ...
<br>
<p>Besides that, mpirun executes shell commands in non-interactive login
<br>
mode (man sh, or man bash), and since I'm using bash, I have to edit
<br>
.bashrc file on the remote host and add OMPI's bin and lib directories
<br>
to PATH and LD_LIBRARY_PATH. There should be similar file for setting
<br>
the enviroment for non-interactive login mode of the sh shell.
<br>
<p>I have been using LiveCD SLAX linux, so my environmental variables were
<br>
exactly the same on both hosts, that allowed me to copy the output of
<br>
the &quot;printenv&quot; command on the master into .ssh/environment file on the
<br>
remote node. Did you install OMPI in the same places on both machines as
<br>
suggested on the web site?
<br>
<p>Good luck!
<br>
<p>Tomislav
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10463.php">Yann JOBIC: "Re: [OMPI users] Help: orted: command not found."</a>
<li><strong>Previous message:</strong> <a href="10461.php">Lee Amy: "[OMPI users] Help: orted: command not found."</a>
<li><strong>In reply to:</strong> <a href="10461.php">Lee Amy: "[OMPI users] Help: orted: command not found."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10463.php">Yann JOBIC: "Re: [OMPI users] Help: orted: command not found."</a>
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
