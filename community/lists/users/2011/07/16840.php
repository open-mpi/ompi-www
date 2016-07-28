<?
$subject_val = "[OMPI users] Error using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 19:09:13 2011" -->
<!-- isoreceived="20110706230913" -->
<!-- sent="Wed, 6 Jul 2011 18:09:08 -0500" -->
<!-- isosent="20110706230908" -->
<!-- name="Mohan, Ashwin" -->
<!-- email="ashmohan_at_[hidden]" -->
<!-- subject="[OMPI users] Error using hostfile" -->
<!-- id="C47F8344CE6D9B459A06E351D9CF25C90412A748_at_POSTOFFICE.seas.wustl.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Error using hostfile<br>
<strong>From:</strong> Mohan, Ashwin (<em>ashmohan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 19:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Previous message:</strong> <a href="16839.php">Jeff Squyres: "Re: [OMPI users] Run error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16844.php">Reuti: "Re: [OMPI users] Error using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I use the following command (mpirun --prefix /usr/local/openmpi1.4.3 -np
<br>
4 hello) to successfully execute a simple hello world command on a
<br>
single node.  Each node has 4 slots.  Following the successful execution
<br>
on one node, I wish to employ 4 nodes and for this purpose wrote a
<br>
hostfile. I submitted my job using the following command: 
<br>
<p>&nbsp;
<br>
<p>mpirun --prefix /usr/local/openmpi1.4.3 -np 4 --hostfile hostfile hello
<br>
<p>&nbsp;
<br>
<p>Copied below is the output. How do I go about fixing this issue. 
<br>
<p>&nbsp;
<br>
<p>**********************************************************************
<br>
<p>&nbsp;
<br>
<p>amohan_at_myocyte48's password: amohan_at_myocyte47's password:
<br>
<p>Permission denied, please try again.
<br>
<p>amohan_at_myocyte48's password:
<br>
<p>Permission denied, please try again.
<br>
<p>amohan_at_myocyte47's password:
<br>
<p>Permission denied, please try again.
<br>
<p>amohan_at_myocyte47's password:
<br>
<p>Permission denied, please try again.
<br>
<p>amohan_at_myocyte48's password:
<br>
<p>&nbsp;
<br>
<p>Permission denied (publickey,gssapi-with-mic,password).
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
A daemon (pid 22085) died unexpectedly with status 255 while attempting
to launch so we are aborting.
 
There may be more information reported by the environment (see above).
 
This may be because the daemon was unable to find all the needed shared
libraries on the remote node. You may set your LD_LIBRARY_PATH to have
the
location of the shared libraries on the remote nodes and this will
automatically be forwarded to the remote nodes.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpirun noticed that the job aborted, but has no info as to the process
that caused that situation.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpirun was unable to cleanly terminate the daemons on the nodes shown
below. Additional manual cleanup may be required - please refer to
the &quot;orte-clean&quot; tool for assistance.
------------------------------------------------------------------------
--
        myocyte47 - daemon did not report back when launched
        myocyte48 - daemon did not report back when launched
 
**********************************************************************
 
Thanks,
Ashwin.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Previous message:</strong> <a href="16839.php">Jeff Squyres: "Re: [OMPI users] Run error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16844.php">Reuti: "Re: [OMPI users] Error using hostfile"</a>
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
