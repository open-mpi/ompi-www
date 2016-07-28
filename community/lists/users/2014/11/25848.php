<?
$subject_val = "Re: [OMPI users] job running out of memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 10:41:57 2014" -->
<!-- isoreceived="20141120154157" -->
<!-- sent="Thu, 20 Nov 2014 07:41:51 -0800" -->
<!-- isosent="20141120154151" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job running out of memory" -->
<!-- id="FA393C40-5067-47DF-995A-4AD81ADCECD5_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="321E9E17D18E084488F038FCE6624C3E010D02FBC2_at_IBWMBX04" -->
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
<strong>Subject:</strong> Re: [OMPI users] job running out of memory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 10:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25849.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI SC'14 BOF slides"</a>
<li><strong>Previous message:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25860.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25860.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It wouldn&#226;&#128;&#153;t be maffinity - that just tells the OS on a single node to ensure that the memory is local to the process.
<br>
<p>If you have a managed environment (i.e., there is a scheduler running that assigns nodes to jobs), then you would need to configure the scheduler to support that option (assuming it does, you usually have to tell it to turn that option on), and the user would have to specify that they want &#226;&#128;&#156;large memory&#226;&#128;&#157; nodes.
<br>
<p>If it is an unmanaged environment where you are specifying nodes using a hostfile, then you could provide a hostfile that contains &#226;&#128;&#156;large memory&#226;&#128;&#157; nodes.
<br>
<p>If you only have a limited number of large memory nodes, you know which rank is the one in question, and you don&#226;&#128;&#153;t want to use large memory nodes for the entire job, then things get a little more complicated. OMPI doesn&#226;&#128;&#153;t have an automatic mapper that handles this use-case at the moment, so you would have to create a file that tells us where to put the various ranks, or do it via the cmd line:
<br>
<p>* command line: use the same trick I gate you earlier for valgrind
<br>
<p>mpirun -n (M-1) -host ^large myapp : mpirun -n 1 -host large myapp : mpirun -n (N-M) -host ^large myapp
<br>
<p>* rankfile - stipulate where to run each rank (see &quot;man mpirun&#226;&#128;&#157; for syntax)
<br>
<p>* seq - provide a list of node names and we&#226;&#128;&#153;ll put each rank in order on the nodes in the list.
<br>
<p>If you don&#226;&#128;&#153;t know which process(es) are memory intensive, then there really isn&#226;&#128;&#153;t anything OMPI can do - there is no way for us to know in advance which ranks will take a lot of memory.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Nov 19, 2014, at 11:51 PM, Jerry Mersel &lt;jerry.mersel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since there is no way to share memory across nodes is there a way to tell openmpi to run memory intensive
</span><br>
<span class="quotelev1">&gt; Processes on nodes with a lot of memory?
</span><br>
<span class="quotelev1">&gt; I think that it is called  &#226;&#128;&#156;maffinity&#226;&#128;&#157;, but am not sure how to use it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; With Blessings, always,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Jerry Mersel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image001.png&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    System Administrator
</span><br>
<span class="quotelev1">&gt;    IT Infrastructure Branch | Division of Information Systems
</span><br>
<span class="quotelev1">&gt;     Weizmann Institute of Science
</span><br>
<span class="quotelev1">&gt;     Rehovot 76100, Israel
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;    Tel:  +972-8-9342363
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;allow our heart, the heart of each and every one of us, to  to see the good qualities of our friends and not their shortcomings...&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt;       --Reb Elimelech of Lizhensk
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;We learn something by doing it. There is no other way.&quot;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;John Holt
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 18, 2014 5:56 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] job running out of memory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Unfortunately, there is no way to share memory across nodes. Running out of memory as you describe can be due to several factors, including most typically:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * a memory leak in the application, or the application simply growing too big for the environment
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * one rank running slow, causing it to build a backlog of messages that eventually consumes too much memory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What you can do:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * add --display-map to your mpirun cmd line to see what MPI ranks are running on each node
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * run &quot;top&quot; on each node to see which process is getting too large. Generally, you'll see the pid for the processes run in order from the lowest local rank to the highest since that is the order in which they are spawned, so you can figure out which rank is causing the problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * run valgrind on that rank. This isn't as hard as it might sound, though the cmd line is a tad tricky. If rank M (out of a total job of N ranks) is the one with the memory problem, then you would do this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -n (M-1) myapp : mpirun -n 1 valgrind myapp : mpirun -n (N-M) myapp
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Obviously, you can add whatever options you want to the various pieces of the cmd line
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This will affect the timing, so a race condition might be hidden - but it is a start at tracking it down.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If you find that this isn't a leak, but rather a legitimate behavior, then you can try using the mapping and ranking options to redistribute the processes - maybe oversubscribe some of the nodes or increase the size of the allocation so the memory hog can run alone.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 18, 2014 at 7:10 AM, Jerry Mersel &lt;jerry.mersel_at_[hidden] &lt;mailto:jerry.mersel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   I am running openmpi 1.6.5 and a job which is memory intensive.
</span><br>
<span class="quotelev1">&gt;   The job runs on 7 hosts using 16 core on each. On one of the hosts the memory is exhausted so the kernel starts to
</span><br>
<span class="quotelev1">&gt;   Kill the processes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   It could be that there is plenty of free memory on one of the other hosts.
</span><br>
<span class="quotelev1">&gt;   Is there a way for openmpi to use the memory on one of the other hosts when the memory on one host is gone.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   If yes please tell me how.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    Thank you.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; With Blessings, always,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Jerry Mersel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image001.png&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    System Administrator
</span><br>
<span class="quotelev1">&gt;    IT Infrastructure Branch | Division of Information Systems
</span><br>
<span class="quotelev1">&gt;     Weizmann Institute of Science
</span><br>
<span class="quotelev1">&gt;     Rehovot 76100, Israel
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;    Tel:  +972-8-9342363 &lt;tel:%2B972-8-9342363&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;allow our heart, the heart of each and every one of us, to  to see the good qualities of our friends and not their shortcomings...&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt;       --Reb Elimelech of Lizhensk
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;We learn something by doing it. There is no other way.&quot;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;John Holt
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25839.php">http://www.open-mpi.org/community/lists/users/2014/11/25839.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25839.php">http://www.open-mpi.org/community/lists/users/2014/11/25839.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25846.php">http://www.open-mpi.org/community/lists/users/2014/11/25846.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25846.php">http://www.open-mpi.org/community/lists/users/2014/11/25846.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25849.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI SC'14 BOF slides"</a>
<li><strong>Previous message:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25860.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25860.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
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
