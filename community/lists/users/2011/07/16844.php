<?
$subject_val = "Re: [OMPI users] Error using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 12:34:04 2011" -->
<!-- isoreceived="20110707163404" -->
<!-- sent="Thu, 7 Jul 2011 18:33:50 +0200" -->
<!-- isosent="20110707163350" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error using hostfile" -->
<!-- id="EDD21328-30C6-4EE3-BB91-0036881182D2_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C47F8344CE6D9B459A06E351D9CF25C90412A748_at_POSTOFFICE.seas.wustl.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 12:33:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16845.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
<li><strong>In reply to:</strong> <a href="16840.php">Mohan, Ashwin: "[OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.07.2011 um 01:09 schrieb Mohan, Ashwin:
<br>
<p><span class="quotelev1">&gt; I use the following command (mpirun --prefix /usr/local/openmpi1.4.3 -np 4 hello) to successfully execute a simple hello world command on a single node.  Each node has 4 slots.  Following the successful execution on one node, I wish to employ 4 nodes and for this purpose wrote a hostfile. I submitted my job using the following command:
</span><br>
<p>looks like you will either have to setup a passphraseless ssh login for each user between the machines, or do it one time inside the cluster using hostbased authentication:
<br>
<p><a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a>
<br>
<p>You have the same users on all machines with the same UID and GID?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; mpirun --prefix /usr/local/openmpi1.4.3 -np 4 --hostfile hostfile hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Copied below is the output. How do I go about fixing this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte48's password: amohan_at_myocyte47's password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte48's password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte47's password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte47's password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amohan_at_myocyte48's password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-with-mic,password).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A daemon (pid 22085) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         myocyte47 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         myocyte48 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashwin.
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
<li><strong>Next message:</strong> <a href="16845.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
<li><strong>In reply to:</strong> <a href="16840.php">Mohan, Ashwin: "[OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
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
