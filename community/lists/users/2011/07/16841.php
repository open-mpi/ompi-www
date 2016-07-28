<?
$subject_val = "Re: [OMPI users] Error using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 19:46:00 2011" -->
<!-- isoreceived="20110706234600" -->
<!-- sent="Wed, 6 Jul 2011 17:45:50 -0600" -->
<!-- isosent="20110706234550" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error using hostfile" -->
<!-- id="3AC767BB-F127-46C7-BF8D-D944FF537737_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 19:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16842.php">zhuangchao: "[OMPI users] a question about mpirun"</a>
<li><strong>Previous message:</strong> <a href="16840.php">Mohan, Ashwin: "[OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16840.php">Mohan, Ashwin: "[OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
<br>
<p><p>On Jul 6, 2011, at 5:09 PM, Mohan, Ashwin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16842.php">zhuangchao: "[OMPI users] a question about mpirun"</a>
<li><strong>Previous message:</strong> <a href="16840.php">Mohan, Ashwin: "[OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16840.php">Mohan, Ashwin: "[OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
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
