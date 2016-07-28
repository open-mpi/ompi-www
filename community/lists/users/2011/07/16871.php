<?
$subject_val = "Re: [OMPI users] Error using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 18:25:55 2011" -->
<!-- isoreceived="20110708222555" -->
<!-- sent="Fri, 8 Jul 2011 17:25:46 -0500" -->
<!-- isosent="20110708222546" -->
<!-- name="Mohan, Ashwin" -->
<!-- email="ashmohan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error using hostfile" -->
<!-- id="C47F8344CE6D9B459A06E351D9CF25C90412A99D_at_POSTOFFICE.seas.wustl.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="68DB5794-8F7D-4060-83D7-120C8DA89FAB_at_open-mpi.org" -->
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
<strong>From:</strong> Mohan, Ashwin (<em>ashmohan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 18:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16872.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16865.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16875.php">jody: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16875.php">jody: "Re: [OMPI users] Error using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph.
<br>
<p>&nbsp;
<br>
<p>I have emailed the network admin on the firewall issue. 
<br>
<p>&nbsp;
<br>
<p>About the PATH and LIBRARY PATH issue, is it sufficient evidence that
<br>
the path are set alright if I am able to compile and run successfully on
<br>
individual nodes mentioned in the machine file. 
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
Ashwin.
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Friday, July 08, 2011 1:58 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error using hostfile
<br>
<p>&nbsp;
<br>
<p>Is there a firewall in the way? The error indicates that daemons were
<br>
launched on the remote machines, but failed to communicate back.
<br>
<p>&nbsp;
<br>
<p>Also, check that your remote PATH and LD_LIBRARY_PATH are being set to
<br>
the right place to pickup this version of OMPI. Lots of systems deploy
<br>
with default versions that may not be compatible, so if you wind up
<br>
running a daemon on the remote node that comes from another
<br>
installation, things won't work.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Jul 8, 2011, at 10:52 AM, Mohan, Ashwin wrote:
<br>
<p><p><p><p><p>Hi,
<br>
<p>I am following up on a previous error posted. Based on the previous
<br>
recommendation, I did set up a password less SSH login.
<br>
<p>&nbsp;
<br>
<p>I created a hostfile comprising of 4 nodes (w/ each node having 4
<br>
slots). I tried to run my job on 4 slots but get no output. Hence, I end
<br>
up killing the job. I am trying to run a simple MPI program on 4 nodes
<br>
and trying to figure out what could be the issue.  What could I check to
<br>
ensure that I can run jobs on 4 nodes (each node has 4 slots)
<br>
<p>&nbsp;
<br>
<p>Here is the simple MPI program I am trying to execute on 4 nodes
<br>
<p>**************************
<br>
<p>if (my_rank != 0)
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(message, &quot;Greetings from the process %d!&quot;, my_rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(message, strlen(message)+1, MPI_CHAR, dest, tag,
<br>
MPI_COMM_WORLD);
<br>
<p>}
<br>
<p>else
<br>
<p>{
<br>
<p>for (source = 1;source &lt; p; source++)
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(message, 100, MPI_CHAR, source, tag, MPI_COMM_WORLD,
<br>
&amp;status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s\n&quot;, message);
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>****************************
<br>
<p>My hostfile looks like this:
<br>
<p>&nbsp;
<br>
<p>[amohan_at_myocyte48 ~]$ cat hostfile
<br>
<p>myocyte46
<br>
<p>myocyte47
<br>
<p>myocyte48
<br>
<p>myocyte49
<br>
<p>*******************************
<br>
<p>&nbsp;
<br>
<p>I use the following run command: : mpirun --hostfile hostfile -np 4
<br>
new46
<br>
<p>And receive a blank screen. Hence, I have to kill the job.
<br>
<p>&nbsp;
<br>
<p>OUTPUT ON KILLING JOB:
<br>
<p>mpirun: killing job...
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
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
        myocyte46 - daemon did not report back when launched
        myocyte47 - daemon did not report back when launched
        myocyte49 - daemon did not report back when launched
 
Thanks,
Ashwin.
 
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Ralph Castain
Sent: Wednesday, July 06, 2011 6:46 PM
To: Open MPI Users
Subject: Re: [OMPI users] Error using hostfile
 
Please see <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
 
 
On Jul 6, 2011, at 5:09 PM, Mohan, Ashwin wrote:
Hi,
 
I use the following command (mpirun --prefix /usr/local/openmpi1.4.3 -np
4 hello) to successfully execute a simple hello world command on a
single node.  Each node has 4 slots.  Following the successful execution
on one node, I wish to employ 4 nodes and for this purpose wrote a
hostfile. I submitted my job using the following command:
 
mpirun --prefix /usr/local/openmpi1.4.3 -np 4 --hostfile hostfile hello
 
Copied below is the output. How do I go about fixing this issue.
 
**********************************************************************
 
amohan_at_myocyte48's password: amohan_at_myocyte47's password:
Permission denied, please try again.
amohan_at_myocyte48's password:
Permission denied, please try again.
amohan_at_myocyte47's password:
Permission denied, please try again.
amohan_at_myocyte47's password:
Permission denied, please try again.
amohan_at_myocyte48's password:
 
Permission denied (publickey,gssapi-with-mic,password).
------------------------------------------------------------------------
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16871/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16872.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16865.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16875.php">jody: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Reply:</strong> <a href="16875.php">jody: "Re: [OMPI users] Error using hostfile"</a>
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
