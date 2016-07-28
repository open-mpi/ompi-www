<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to	hosts file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 12:30:59 2014" -->
<!-- isoreceived="20141111173059" -->
<!-- sent="Tue, 11 Nov 2014 09:30:55 -0800" -->
<!-- isosent="20141111173055" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to	hosts file" -->
<!-- id="4B0FF946-CFDC-4FB5-A739-9063DCC52AD4_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CC22BC1_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to	hosts file<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 12:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<li><strong>Previous message:</strong> <a href="25753.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25752.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to	hosts file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I checked that bug using the current 1.8.4 branch and I can&#226;&#128;&#153;t replicate it - looks like it might have already been fixed. If I give a hostfile like the one you described:
<br>
node1
<br>
node1
<br>
node2
<br>
node3
<br>
<p>and then ask to launch four processes:
<br>
mpirun -n 4 --display-allocation --display-map --do-not-launch --do-not-resolve -hostfile ./hosts hostname
<br>
<p>I get the following allocation and map:
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bend001: slots=6 max_slots=0 slots_inuse=0 state=UP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node1: slots=2 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node2: slots=12 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node3: slots=12 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
=================================================================
<br>
&nbsp;Data for JOB [54391,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: node1	Num slots: 2	Max slots: 0	Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [54391,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [54391,1] App: 0 Process rank: 1
<br>
<p>&nbsp;Data for node: node2	Num slots: 12	Max slots: 0	Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [54391,1] App: 0 Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [54391,1] App: 0 Process rank: 3
<br>
<p>Note that we see the host where mpirun is executing in the &#226;&#128;&#156;allocation&#226;&#128;&#157;, but it isn&#226;&#128;&#153;t used as we specified a hostfile that didn&#226;&#128;&#153;t include it. Also, you see the impact of the autodetect algo. Since I specified node1 more than once, we assume this is intended to provide a slot count and use that instead of what we detect. Since node2 and node3 were only given once, we autodetect those cores and set the slots equal to them.
<br>
<p>The job map matches what I would have expected, so I think we are okay here.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Nov 11, 2014, at 8:10 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Ralph.  I&#226;&#128;&#153;ll experiment with these options.  Much appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 11, 2014 10:00 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2014, at 6:11 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden] &lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; OK, that&#226;&#128;&#153;s what I was suspecting.  It&#226;&#128;&#153;s a bug, right?  I asked for 4 processes and I supplied a host file with 4 lines in it, and mpirun didn&#226;&#128;&#153;t launch the processes where I told it to launch them. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Actually, no - it&#226;&#128;&#153;s an intended &#226;&#128;&#156;feature&#226;&#128;&#157;. When the dinosaurs still roamed the earth and OMPI was an infant, we had no way of detecting the number of processors on a node in advance of the map/launch phase. During that time, users were required to tell us that info in the hostfile, which was a source of constant complaint.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Since that time, we have changed the launch procedure so we do have access to that info when we need it. Accordingly, we now check to see if you told us the number of slots on each node in the hostfile - if not, then we autodetect it for you.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Quite honestly, it sounds to me like you might be happier using the &#226;&#128;&#156;sequential&#226;&#128;&#157; mapper for this use case. It will place one proc on each of the indicated nodes, with the rank set by the order in the hostfile. So a hostfile like this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; node1
</span><br>
<span class="quotelev1">&gt; node2
</span><br>
<span class="quotelev1">&gt; node1
</span><br>
<span class="quotelev1">&gt; node3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; will result in
</span><br>
<span class="quotelev1">&gt; rank 0 -&gt; node1
</span><br>
<span class="quotelev1">&gt; rank 1 -&gt; node2
</span><br>
<span class="quotelev1">&gt; rank 2 -&gt; node1
</span><br>
<span class="quotelev1">&gt; rank 3 -&gt; node3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; etc. To use it, just add &quot;-mca rmaps seq&quot; to you cmd line. Alternatively, you could add &#226;&#128;&#156;--map-by node&quot; to your cmd line and we will round-robin by node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Do you know when or if this changed?  I can&#226;&#128;&#153;t recall seeing this this behavior in 1.6.5 or 1.4 or 1.2, and I know I&#226;&#128;&#153;ve run cases across workstation clusters, so I think I would have noticed this behavior. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It changed early in the 1.7 series, and has remained consistent since then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can I throw another one at you, most likely related?  On a system where node01, node02, node03, and node04 already had a full load of work (i.e. other applications were running a number of processes equal to the number of cores on each node), I had a hosts file like this:  node01, node01, node02, node02.   I asked for 4 processes.  mpirun launched them as I would think: rank 0 and rank 1 on node01, and rank 2 and 3 on node02.  Then I tried node01, node01, node02, node03.  In this case, all 4 processes were launched on node01.  Is there a logical explanation for this behavior as well?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Now that one is indeed a bug! I&#226;&#128;&#153;ll dig it up and fix it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, November 07, 2014 11:51 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Question on mapping processes to hosts file
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ah, yes - so here is what is happening. When no slot info is provided, we use the number of detected cores on each node as the #slots. So if you want to loadbalance across the nodes, you need to set &#226;&#128;&#148;map-by node
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Or add slots=1 to each line of your host file to override the default behavior
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2014, at 8:52 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden] &lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here&#226;&#128;&#153;s my command:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;path_to_OpenMPI_1.8.3&gt;/bin/mpirun &lt;unrelated MCA options&gt; --machinefile hosts.dat -np 4 &lt;executable&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here&#226;&#128;&#153;s my hosts.dat file:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; % cat hosts.dat
</span><br>
<span class="quotelev1">&gt; node01
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; node03
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; All 4 ranks are launched on node01.  I don&#226;&#128;&#153;t believe I&#226;&#128;&#153;ve ever seen this before.  I had to do a sanity check, so I tried MVAPICH2-2.1a and got what I expected: 1 process runs on each of the 4 nodes.  The mpirun man page says &#226;&#128;&#152;round-robin&#226;&#128;&#153;, which I take to mean that one process would be launched per line in the hosts file, so this really seems like incorrect behavior.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What could be the possibilities here?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the help!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25707.php">http://www.open-mpi.org/community/lists/users/2014/11/25707.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25707.php">http://www.open-mpi.org/community/lists/users/2014/11/25707.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25742.php">http://www.open-mpi.org/community/lists/users/2014/11/25742.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25742.php">http://www.open-mpi.org/community/lists/users/2014/11/25742.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25752.php">http://www.open-mpi.org/community/lists/users/2014/11/25752.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25752.php">http://www.open-mpi.org/community/lists/users/2014/11/25752.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25754/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<li><strong>Previous message:</strong> <a href="25753.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25752.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to	hosts file"</a>
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
