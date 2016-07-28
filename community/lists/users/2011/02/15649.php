<?
$subject_val = "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 04:09:45 2011" -->
<!-- isoreceived="20110218090945" -->
<!-- sent="Fri, 18 Feb 2011 01:09:35 -0800" -->
<!-- isosent="20110218090935" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="C9837619.E6EF%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="32442C64-196F-4389-A652-552E3B2408EA_at_cisco.com" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 04:09:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15650.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15640.php">Jeff Squyres: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15651.php">Ashley Pittman: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15651.php">Ashley Pittman: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I have chosen to call this thread &quot;This must be ssh problem, but I
<br>
can't figure out what it is...&quot;  It turns out that's really wrong!
<br>
<p>EC2 allows users to create what is called security group.  A security
<br>
group is made of one or more security rules, which is basically a
<br>
port based firewall rule specification.  (Networking is not my forte
<br>
and I might use wrong terminology, but I am trying to convey concept.)
<br>
<p>I had created a security group &quot;intra.&quot;  I opened ssh port from 0 to
<br>
65535, and launched instances (I unleashed 2 at a time in a same
<br>
geography zone) each belonging to the group intra.  So, here, ssh
<br>
is a security rule of a security group intra.  A field for each
<br>
rule is &quot;source.&quot;  I had different settings for the source field,
<br>
but what I had been failing to do is to have this field known by
<br>
the name of the group, namely intra.  By doing so, each instance
<br>
that belongs to this group can get to each other.
<br>
<p>I have not exhausted all the tests I have in mind, but so far it
<br>
looks promising.  I will expand my test to wider set tomorrow.
<br>
<p>Many thanks for your guidance all along.  In a week or two, I look
<br>
forward to put together a mini &quot;how-to openMPI on cloud&quot;.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/17/11 6:52 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 16, 2011, at 6:17 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For now, may I point out something I noticed out of the
</span><br>
<span class="quotelev2">&gt;&gt; DEBUG3 Output last night?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found this line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug1: Sending command:  orted --daemonize -mca ess env -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_jobid 125566976 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hnp-uri &quot;125566976.0;tcp://10.96.118.236:56064&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What this means is that ssh sent the &quot;orted ...&quot; command to the remote side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Gus mentioned, &quot;orted&quot; is the &quot;Open MPI Run-Time Environment daemon&quot; --
</span><br>
<span class="quotelev1">&gt; it's a helper thingy that mpirun launches on the remote nodes before launching
</span><br>
<span class="quotelev1">&gt; your actual application.  All those parameters (from --daemonize through
</span><br>
<span class="quotelev1">&gt; ...:56064&quot;) are options for orted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of that gorp is considered internal to Open MPI -- most people never see
</span><br>
<span class="quotelev1">&gt; that stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Followed by:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel 0: request exec confirm 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: fd 3 setting TCP_NODELAY
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: callback done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel 0: open confirm rwindow 0 rmax 32768
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug3: Wrote 272 bytes for a total of 1893
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel 0: rcvd adjust 2097152
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel_input_status_confirm: type 99 id 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is just more status information about the ssh connection; it doesn't
</span><br>
<span class="quotelev1">&gt; really have any direct relation to Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know offhand if ssh displays the ack that a command successfully ran.
</span><br>
<span class="quotelev1">&gt; If you're not convinced that it did, then login to the other node while the
</span><br>
<span class="quotelev1">&gt; command is hung and run a ps to see if the orted is actually running or not.
</span><br>
<span class="quotelev1">&gt; I *suspect* that it is running, but that it's just hung for some reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's some suggestions to try debugging:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On your new linux AMI instances (some of this may be redundant with what you
</span><br>
<span class="quotelev1">&gt; did already):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - ensure that firewalling is disabled on all instances
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - ensure that your .bashrc (or whatever startup file is relevant to your
</span><br>
<span class="quotelev1">&gt; shell) is set to prefix PATH and LD_LIBRARY_PATH to your Open MPI
</span><br>
<span class="quotelev1">&gt; installation.  Ensure the *PREFIX* these variables to guarantee that you don't
</span><br>
<span class="quotelev1">&gt; get interference from already-installed versions of Open MPI (e.g., if Open
</span><br>
<span class="quotelev1">&gt; MPI is installed by default on your AMI and you weren't aware of it)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - setup a simple, per-user SSH key, perhaps something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ rm -rf $HOME/.ssh
</span><br>
<span class="quotelev1">&gt;    (remove what you had before; let's just start over)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ ssh-keygen -t dsa
</span><br>
<span class="quotelev1">&gt;    (hit enter to accept all defaults and set no passphrase)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ cd $HOME/.ssh
</span><br>
<span class="quotelev1">&gt;      A$ cp id_dsa.pub authorized_keys
</span><br>
<span class="quotelev1">&gt;      A$ chmod 644 authorized_keys
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode
</span><br>
<span class="quotelev1">&gt;    (login to node B)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      B$ ssh-keygen -t dsa
</span><br>
<span class="quotelev1">&gt;    (hit enter to accept all defaults and set no passphrase; just to create
</span><br>
<span class="quotelev1">&gt; $HOME/.ssh with the right permissions, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      B$ scp @firstnode:.ssh/id_dsa\* .
</span><br>
<span class="quotelev1">&gt;    (enter your password on A -- we're overwriting all the files here)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      B$ cp id_dsa.pub authorized_keys
</span><br>
<span class="quotelev1">&gt;      B$ chmod 644 authorized_keys
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now you should be able to ssh from one node to the other without passwords:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode hostname
</span><br>
<span class="quotelev1">&gt;      B
</span><br>
<span class="quotelev1">&gt;      A$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      B$ ssh firstnode hostname
</span><br>
<span class="quotelev1">&gt;      A
</span><br>
<span class="quotelev1">&gt;      B$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't just test with &quot;ssh othernode&quot; -- test with &quot;ssh othernode &lt;command&gt;&quot; to
</span><br>
<span class="quotelev1">&gt; ensure that non-interactive logins work properly.  That's what Open MPI will
</span><br>
<span class="quotelev1">&gt; use under the covers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Now ensure that PATH and LD_LIBRARY_PATH are set for non-interactive ssh
</span><br>
<span class="quotelev1">&gt; sessions (i.e., some .bashrc's will exit &quot;early&quot; if they detect that it is a
</span><br>
<span class="quotelev1">&gt; non-interactive session).  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode env | grep -i path
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ensure that the output shows the path and ld_library_path locations for Open
</span><br>
<span class="quotelev1">&gt; MPI at the beginning of those variables.  To go for the gold, you can try
</span><br>
<span class="quotelev1">&gt; this, too:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode which ompi_info
</span><br>
<span class="quotelev1">&gt;      (if all paths are set right, this should show the ompi_info of your 1.4.3
</span><br>
<span class="quotelev1">&gt; install)
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode ompi_info
</span><br>
<span class="quotelev1">&gt;      (should show all the info about your 1.4.3 install)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - If all the above works, then test with a simple, non-MPI application across
</span><br>
<span class="quotelev1">&gt; both nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ mpirun --host firstnode,othernode -np 2 hostname
</span><br>
<span class="quotelev1">&gt;      A
</span><br>
<span class="quotelev1">&gt;      B
</span><br>
<span class="quotelev1">&gt;      A$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - When that works, you should be able to test with a simple MPI application
</span><br>
<span class="quotelev1">&gt; (e.g., the examples/ring_c.c file in the Open MPI distribution):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A$ cd /path/to/open/mpi/source
</span><br>
<span class="quotelev1">&gt;      A$ cd examples
</span><br>
<span class="quotelev1">&gt;      A$ make
</span><br>
<span class="quotelev1">&gt;      ...
</span><br>
<span class="quotelev1">&gt;      A$ scp ring_c @othernode:/path/to/open/mpi/source/examples
</span><br>
<span class="quotelev1">&gt;      ...
</span><br>
<span class="quotelev1">&gt;      A$ mpirun --host firstnode,othernode -np 4 ring_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15650.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15640.php">Jeff Squyres: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15651.php">Ashley Pittman: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15651.php">Ashley Pittman: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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
