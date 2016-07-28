<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 10:59:06 2009" -->
<!-- isoreceived="20090802145906" -->
<!-- sent="Sun, 02 Aug 2009 16:58:57 +0200" -->
<!-- isosent="20090802145857" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A75A9B1.1040601_at_gmx.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1249223402.3831.16.camel_at_eddy" -->
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
<strong>Date:</strong> 2009-08-02 10:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10175.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10173.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10173.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10175.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10175.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominik T&#195;&#161;borsk&#195;&#189; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is it:
</span><br>
<span class="quotelev2">&gt;&gt; slax_at_master$ ssh  node1 'echo $PATH'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gives me the reduced path on the slave node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry, I was wrong. You typed it correctly. AFAIK, this command logs
</span><br>
<span class="quotelev1">&gt; in your node but the PATH variable is still just as on your master. I
</span><br>
<span class="quotelev1">&gt; had this issue and I solved it by editing the .bashrc file on the
</span><br>
<span class="quotelev1">&gt; master, NOT the node. That worked for me. Try editing the PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH on the master, on the computer you run the mpirun
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, for example, if you have on the nodes the MPI installation
</span><br>
<span class="quotelev1">&gt; in /openMPI/, with subfolders &quot;bin&quot; and &quot;lib&quot;, try putting these lines
</span><br>
<span class="quotelev1">&gt; into your .bashrc file on the master:
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/openMPI/bin
</span><br>
<span class="quotelev1">&gt; export LD_RUN_FLAG=$LD_LIBRARY_PATH:/openMPI/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It shouldn't matter where is your MPI installation on the master. The
</span><br>
<span class="quotelev1">&gt; nodes matter!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note: I am a openMPI beginner, I am not involved in development, I'm
</span><br>
<span class="quotelev1">&gt; just sharing my experience on the same problem and how I solved it. No
</span><br>
<span class="quotelev1">&gt; guarantee...
</span><br>
<p>I'm really gratefull for your help!
<br>
<p>I tried leaving only .bashrc at the master node and I have set the
<br>
variables as you have suggested, but nothing changed.
<br>
<p>I've even read again in the man pages about ssh invoked bash, and it
<br>
realy reads and executes/etc/bash.bashrc file and ~/.bashrc -  which
<br>
ever comes first. I've added echo commands to .bashrc on the master, but
<br>
nothing is echoed, and
<br>
<p>ssh node1 'echo $PATH'
<br>
<p>gives the reduced path again. I'm frustrated. I'm a step away from
<br>
running OpenFOAM on a LAN over a LiveDVD... :(
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10175.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10173.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10173.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10175.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10175.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
