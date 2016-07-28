<?
$subject_val = "Re: [OMPI users] Error using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 14:57:42 2011" -->
<!-- isoreceived="20110708185742" -->
<!-- sent="Fri, 8 Jul 2011 12:57:30 -0600" -->
<!-- isosent="20110708185730" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error using hostfile" -->
<!-- id="68DB5794-8F7D-4060-83D7-120C8DA89FAB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C47F8344CE6D9B459A06E351D9CF25C90412A8F9_at_POSTOFFICE.seas.wustl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error using hostfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 14:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16871.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16871.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16892.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a firewall in the way? The error indicates that daemons were launched on the remote machines, but failed to communicate back.
<br>
<p>Also, check that your remote PATH and LD_LIBRARY_PATH are being set to the right place to pickup this version of OMPI. Lots of systems deploy with default versions that may not be compatible, so if you wind up running a daemon on the remote node that comes from another installation, things won't work.
<br>
<p><p>On Jul 8, 2011, at 10:52 AM, Mohan, Ashwin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am following up on a previous error posted. Based on the previous recommendation, I did set up a password less SSH login.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I created a hostfile comprising of 4 nodes (w/ each node having 4 slots). I tried to run my job on 4 slots but get no output. Hence, I end up killing the job. I am trying to run a simple MPI program on 4 nodes and trying to figure out what could be the issue.  What could I check to ensure that I can run jobs on 4 nodes (each node has 4 slots)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here is the simple MPI program I am trying to execute on 4 nodes
</span><br>
<span class="quotelev1">&gt; **************************
</span><br>
<span class="quotelev1">&gt; if (my_rank != 0)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         sprintf(message, &quot;Greetings from the process %d!&quot;, my_rank);
</span><br>
<span class="quotelev1">&gt;         dest = 0;
</span><br>
<span class="quotelev1">&gt;         MPI_Send(message, strlen(message)+1, MPI_CHAR, dest, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; for (source = 1;source &lt; p; source++)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(message, 100, MPI_CHAR, source, tag, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%s\n&quot;, message);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ****************************
</span><br>
<span class="quotelev1">&gt; My hostfile looks like this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [amohan_at_myocyte48 ~]$ cat hostfile
</span><br>
<span class="quotelev1">&gt; myocyte46
</span><br>
<span class="quotelev1">&gt; myocyte47
</span><br>
<span class="quotelev1">&gt; myocyte48
</span><br>
<span class="quotelev1">&gt; myocyte49
</span><br>
<span class="quotelev1">&gt; *******************************
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I use the following run command: : mpirun --hostfile hostfile -np 4 new46
</span><br>
<span class="quotelev1">&gt; And receive a blank screen. Hence, I have to kill the job.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; OUTPUT ON KILLING JOB:
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         myocyte46 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         myocyte47 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         myocyte49 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ashwin.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 06, 2011 6:46 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error using hostfile
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please see <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2011, at 5:09 PM, Mohan, Ashwin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I use the following command (mpirun --prefix /usr/local/openmpi1.4.3 -np 4 hello) to successfully execute a simple hello world command on a single node.  Each node has 4 slots.  Following the successful execution on one node, I wish to employ 4 nodes and for this purpose wrote a hostfile. I submitted my job using the following command:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/local/openmpi1.4.3 -np 4 --hostfile hostfile hello
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Copied below is the output. How do I go about fixing this issue.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte48's password: amohan_at_myocyte47's password:
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte48's password:
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte47's password:
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte47's password:
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte48's password:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-with-mic,password).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 22085) died unexpectedly with status 255 while attempting
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         myocyte47 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         myocyte48 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ashwin.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16871.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16871.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16892.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
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
