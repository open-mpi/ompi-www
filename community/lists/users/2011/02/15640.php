<?
$subject_val = "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 09:52:50 2011" -->
<!-- isoreceived="20110217145250" -->
<!-- sent="Thu, 17 Feb 2011 09:52:44 -0500" -->
<!-- isosent="20110217145244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="32442C64-196F-4389-A652-552E3B2408EA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C98199D2.E655%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 09:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15641.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15639.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>In reply to:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2011, at 6:17 PM, Tena Sakai wrote:
<br>
<p><span class="quotelev1">&gt; For now, may I point out something I noticed out of the
</span><br>
<span class="quotelev1">&gt; DEBUG3 Output last night?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found this line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  debug1: Sending command:  orted --daemonize -mca ess env -mca
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_jobid 125566976 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2
</span><br>
<span class="quotelev2">&gt;&gt; --hnp-uri &quot;125566976.0;tcp://10.96.118.236:56064&quot;
</span><br>
<p>What this means is that ssh sent the &quot;orted ...&quot; command to the remote side.  
<br>
<p>As Gus mentioned, &quot;orted&quot; is the &quot;Open MPI Run-Time Environment daemon&quot; -- it's a helper thingy that mpirun launches on the remote nodes before launching your actual application.  All those parameters (from --daemonize through ...:56064&quot;) are options for orted.  
<br>
<p>All of that gorp is considered internal to Open MPI -- most people never see that stuff.
<br>
<p><span class="quotelev1">&gt; Followed by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  debug2: channel 0: request exec confirm 1
</span><br>
<span class="quotelev2">&gt;&gt;  debug2: fd 3 setting TCP_NODELAY
</span><br>
<span class="quotelev2">&gt;&gt;  debug2: callback done
</span><br>
<span class="quotelev2">&gt;&gt;  debug2: channel 0: open confirm rwindow 0 rmax 32768
</span><br>
<span class="quotelev2">&gt;&gt;  debug3: Wrote 272 bytes for a total of 1893
</span><br>
<span class="quotelev2">&gt;&gt;  debug2: channel 0: rcvd adjust 2097152
</span><br>
<span class="quotelev2">&gt;&gt;  debug2: channel_input_status_confirm: type 99 id 0
</span><br>
<p>This is just more status information about the ssh connection; it doesn't really have any direct relation to Open MPI.
<br>
<p>I don't know offhand if ssh displays the ack that a command successfully ran.  If you're not convinced that it did, then login to the other node while the command is hung and run a ps to see if the orted is actually running or not.  I *suspect* that it is running, but that it's just hung for some reason.
<br>
<p>-----
<br>
<p>Here's some suggestions to try debugging:
<br>
<p>On your new linux AMI instances (some of this may be redundant with what you did already):
<br>
<p>- ensure that firewalling is disabled on all instances
<br>
<p>- ensure that your .bashrc (or whatever startup file is relevant to your shell) is set to prefix PATH and LD_LIBRARY_PATH to your Open MPI installation.  Ensure the *PREFIX* these variables to guarantee that you don't get interference from already-installed versions of Open MPI (e.g., if Open MPI is installed by default on your AMI and you weren't aware of it)
<br>
<p>- setup a simple, per-user SSH key, perhaps something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ rm -rf $HOME/.ssh
<br>
&nbsp;&nbsp;&nbsp;(remove what you had before; let's just start over)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ ssh-keygen -t dsa
<br>
&nbsp;&nbsp;&nbsp;(hit enter to accept all defaults and set no passphrase)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ cd $HOME/.ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ cp id_dsa.pub authorized_keys
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ chmod 644 authorized_keys
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ ssh othernode
<br>
&nbsp;&nbsp;&nbsp;(login to node B)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B$ ssh-keygen -t dsa
<br>
&nbsp;&nbsp;&nbsp;(hit enter to accept all defaults and set no passphrase; just to create $HOME/.ssh with the right permissions, etc.)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B$ scp @firstnode:.ssh/id_dsa\* .
<br>
&nbsp;&nbsp;&nbsp;(enter your password on A -- we're overwriting all the files here)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B$ cp id_dsa.pub authorized_keys
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B$ chmod 644 authorized_keys
<br>
<p>Now you should be able to ssh from one node to the other without passwords:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ ssh othernode hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$
<br>
<p>and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B$ ssh firstnode hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B$
<br>
<p>Don't just test with &quot;ssh othernode&quot; -- test with &quot;ssh othernode &lt;command&gt;&quot; to ensure that non-interactive logins work properly.  That's what Open MPI will use under the covers.
<br>
<p>- Now ensure that PATH and LD_LIBRARY_PATH are set for non-interactive ssh sessions (i.e., some .bashrc's will exit &quot;early&quot; if they detect that it is a non-interactive session).  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ ssh othernode env | grep -i path
<br>
<p>Ensure that the output shows the path and ld_library_path locations for Open MPI at the beginning of those variables.  To go for the gold, you can try this, too:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ ssh othernode which ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(if all paths are set right, this should show the ompi_info of your 1.4.3 install)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ ssh othernode ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(should show all the info about your 1.4.3 install)
<br>
<p>- If all the above works, then test with a simple, non-MPI application across both nodes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ mpirun --host firstnode,othernode -np 2 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$
<br>
<p>- When that works, you should be able to test with a simple MPI application (e.g., the examples/ring_c.c file in the Open MPI distribution):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ cd /path/to/open/mpi/source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ cd examples
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ scp ring_c @othernode:/path/to/open/mpi/source/examples
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A$ mpirun --host firstnode,othernode -np 4 ring_c
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15641.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15639.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>In reply to:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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
