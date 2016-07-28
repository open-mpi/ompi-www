<?
$subject_val = "Re: [OMPI users] job running out of memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 02:51:51 2014" -->
<!-- isoreceived="20141120075151" -->
<!-- sent="Thu, 20 Nov 2014 07:51:42 +0000" -->
<!-- isosent="20141120075142" -->
<!-- name="Jerry Mersel" -->
<!-- email="jerry.mersel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job running out of memory" -->
<!-- id="321E9E17D18E084488F038FCE6624C3E010D02FBC2_at_IBWMBX04" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57oe3ubKD07eaxagT6Q==JNPuVQ70whmQN=iwTLErtsoT_w_at_mail.gmail.com" -->
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
<strong>From:</strong> Jerry Mersel (<em>jerry.mersel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 02:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25840.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25848.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25848.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since there is no way to share memory across nodes is there a way to tell openmpi to run memory intensive
<br>
Processes on nodes with a lot of memory?
<br>
I think that it is called  &#226;&#128;&#156;maffinity&#226;&#128;&#157;, but am not sure how to use it.
<br>

<br>
With Blessings, always,
<br>

<br>
&nbsp;&nbsp;&nbsp;Jerry Mersel
<br>

<br>
[cid:image003.png_at_01CF80E7.62B7D810]
<br>

<br>
&nbsp;&nbsp;&nbsp;System Administrator
<br>
&nbsp;&nbsp;&nbsp;IT Infrastructure Branch | Division of Information Systems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Weizmann Institute of Science
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rehovot 76100, Israel
<br>

<br>
&nbsp;&nbsp;&nbsp;Tel:  +972-8-9342363
<br>

<br>
&#226;&#128;&#156;allow our heart, the heart of each and every one of us, to  to see the good qualities of our friends and not their shortcomings...&#226;&#128;&#157;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Reb Elimelech of Lizhensk
<br>

<br>
&quot;We learn something by doing it. There is no other way.&quot;
<br>
&#226;&#128;&#148;John Holt
<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, November 18, 2014 5:56 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] job running out of memory
<br>

<br>
Unfortunately, there is no way to share memory across nodes. Running out of memory as you describe can be due to several factors, including most typically:
<br>

<br>
* a memory leak in the application, or the application simply growing too big for the environment
<br>

<br>
* one rank running slow, causing it to build a backlog of messages that eventually consumes too much memory
<br>

<br>
What you can do:
<br>

<br>
* add --display-map to your mpirun cmd line to see what MPI ranks are running on each node
<br>

<br>
* run &quot;top&quot; on each node to see which process is getting too large. Generally, you'll see the pid for the processes run in order from the lowest local rank to the highest since that is the order in which they are spawned, so you can figure out which rank is causing the problem.
<br>

<br>
* run valgrind on that rank. This isn't as hard as it might sound, though the cmd line is a tad tricky. If rank M (out of a total job of N ranks) is the one with the memory problem, then you would do this:
<br>

<br>
mpirun -n (M-1) myapp : mpirun -n 1 valgrind myapp : mpirun -n (N-M) myapp
<br>

<br>
Obviously, you can add whatever options you want to the various pieces of the cmd line
<br>

<br>
This will affect the timing, so a race condition might be hidden - but it is a start at tracking it down.
<br>

<br>
If you find that this isn't a leak, but rather a legitimate behavior, then you can try using the mapping and ranking options to redistribute the processes - maybe oversubscribe some of the nodes or increase the size of the allocation so the memory hog can run alone.
<br>

<br>
HTH
<br>
Ralph
<br>

<br>

<br>
On Tue, Nov 18, 2014 at 7:10 AM, Jerry Mersel &lt;jerry.mersel_at_[hidden]&lt;mailto:jerry.mersel_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hi all:
<br>

<br>
&nbsp;&nbsp;I am running openmpi 1.6.5 and a job which is memory intensive.
<br>
&nbsp;&nbsp;The job runs on 7 hosts using 16 core on each. On one of the hosts the memory is exhausted so the kernel starts to
<br>
&nbsp;&nbsp;Kill the processes.
<br>

<br>
&nbsp;&nbsp;It could be that there is plenty of free memory on one of the other hosts.
<br>
&nbsp;&nbsp;Is there a way for openmpi to use the memory on one of the other hosts when the memory on one host is gone.
<br>

<br>
&nbsp;&nbsp;If yes please tell me how.
<br>

<br>
&nbsp;&nbsp;&nbsp;Thank you.
<br>

<br>

<br>
With Blessings, always,
<br>

<br>
&nbsp;&nbsp;&nbsp;Jerry Mersel
<br>

<br>
[cid:image003.png_at_01CF80E7.62B7D810]
<br>

<br>
&nbsp;&nbsp;&nbsp;System Administrator
<br>
&nbsp;&nbsp;&nbsp;IT Infrastructure Branch | Division of Information Systems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Weizmann Institute of Science
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rehovot 76100, Israel
<br>

<br>
&nbsp;&nbsp;&nbsp;Tel:  +972-8-9342363&lt;tel:%2B972-8-9342363&gt;
<br>

<br>
&#226;&#128;&#156;allow our heart, the heart of each and every one of us, to  to see the good qualities of our friends and not their shortcomings...&#226;&#128;&#157;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--Reb Elimelech of Lizhensk
<br>

<br>
&quot;We learn something by doing it. There is no other way.&quot;
<br>
&#226;&#128;&#148;John Holt
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
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25839.php">http://www.open-mpi.org/community/lists/users/2014/11/25839.php</a>
<br>

<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-25846/image001.png" alt="image001.png
">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25847.php">Faraj, Daniel A: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25840.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25848.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Reply:</strong> <a href="25848.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
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
