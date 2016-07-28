<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 09:11:41 2014" -->
<!-- isoreceived="20141111141141" -->
<!-- sent="Tue, 11 Nov 2014 14:11:37 +0000" -->
<!-- isosent="20141111141137" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CC22AEC_at_HDXDSP53.us.lmco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A80FF63-C336-480A-A19C-CBF4301F5652_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 09:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25751.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>Reply:</strong> <a href="25751.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, that&#226;&#128;&#153;s what I was suspecting.  It&#226;&#128;&#153;s a bug, right?  I asked for 4 processes and I supplied a host file with 4 lines in it, and mpirun didn&#226;&#128;&#153;t launch the processes where I told it to launch them.
<br>

<br>
Do you know when or if this changed?  I can&#226;&#128;&#153;t recall seeing this this behavior in 1.6.5 or 1.4 or 1.2, and I know I&#226;&#128;&#153;ve run cases across workstation clusters, so I think I would have noticed this behavior.
<br>

<br>
Can I throw another one at you, most likely related?  On a system where node01, node02, node03, and node04 already had a full load of work (i.e. other applications were running a number of processes equal to the number of cores on each node), I had a hosts file like this:  node01, node01, node02, node02.   I asked for 4 processes.  mpirun launched them as I would think: rank 0 and rank 1 on node01, and rank 2 and 3 on node02.  Then I tried node01, node01, node02, node03.  In this case, all 4 processes were launched on node01.  Is there a logical explanation for this behavior as well?
<br>

<br>
Thanks again,
<br>

<br>
Ed
<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, November 07, 2014 11:51 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Question on mapping processes to hosts file
<br>

<br>
Ah, yes - so here is what is happening. When no slot info is provided, we use the number of detected cores on each node as the #slots. So if you want to loadbalance across the nodes, you need to set &#226;&#128;&#148;map-by node
<br>

<br>
Or add slots=1 to each line of your host file to override the default behavior
<br>

<br>
On Nov 7, 2014, at 8:52 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Here&#226;&#128;&#153;s my command:
<br>

<br>
&lt;path_to_OpenMPI_1.8.3&gt;/bin/mpirun &lt;unrelated MCA options&gt; --machinefile hosts.dat -np 4 &lt;executable&gt;
<br>

<br>
Here&#226;&#128;&#153;s my hosts.dat file:
<br>

<br>
% cat hosts.dat
<br>
node01
<br>
node02
<br>
node03
<br>
node04
<br>

<br>
All 4 ranks are launched on node01.  I don&#226;&#128;&#153;t believe I&#226;&#128;&#153;ve ever seen this before.  I had to do a sanity check, so I tried MVAPICH2-2.1a and got what I expected: 1 process runs on each of the 4 nodes.  The mpirun man page says &#226;&#128;&#152;round-robin&#226;&#128;&#153;, which I take to mean that one process would be launched per line in the hosts file, so this really seems like incorrect behavior.
<br>

<br>
What could be the possibilities here?
<br>

<br>
Thanks for the help!
<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25707.php">http://www.open-mpi.org/community/lists/users/2014/11/25707.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25742/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25708.php">Ralph Castain: "Re: [OMPI users] Question on mapping processes to hosts file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25751.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>Reply:</strong> <a href="25751.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
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
