<?
$subject_val = "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 10:32:28 2012" -->
<!-- isoreceived="20120613143228" -->
<!-- sent="Wed, 13 Jun 2012 16:32:23 +0200 (CEST)" -->
<!-- isosent="20120613143223" -->
<!-- name="Xuan Wang" -->
<!-- email="xuan.wang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI" -->
<!-- id="8546005.41292.1339597943409.JavaMail.root_at_epsilon" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8CDC60E9-EEBD-4D2E-86D8-AC738F7DEBC5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI<br>
<strong>From:</strong> Xuan Wang (<em>xuan.wang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 10:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19530.php">Ralph Castain: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19522.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>you are right, the monitor hurts the performance, if the monitor has to sent the monitoring results to the data warehouse during the execution of the I/O operation. But actually, we don't need this parallel execution for the monitor. The monitor only need to gather the information such as the duration of read/write, the bandwidth, the number of used processes, the algorithm ID and some other small information. This information can be stored as txt file and sent to the data warehouse when the file system is free, which means the monitor sends information to the data warehouse &quot;OFFLINE&quot;.
<br>
<p>I will try to find out the impact of comm_spawn to the whole performance. Besides starting another MPI process to monitoring the performance, is there any possibility to integrating a monitoring function within the MPI process or even within the MPI I/O operation? That means we start one MPI process, there are multiple threads for I/O operations, in which one thread is in charge of monitoring. Will that hurt a lot of performance? If necessary, the Open MPI source code has to be overwritten for this purpose.
<br>
<p>The database is actually independent to the I/O operation. The only disadvantage I can see, is that the MPI process has to wait for accessing the database. Especially the table in very large.
<br>
<p>The goal of this concept is to automatically adjust the I/O operation parameters according to the historical I/O operation results, so that each I/O operation will execute at least not worse than last similar I/O operations. Therefore the system includes a learning phase - the better combination of the parameters and algorithm replaces the older and worse one.
<br>
<p>By the way, I don't understand what do you mean exactly about &quot;OMPI's design is intended to embed such &quot;hints&quot; in its selection logic. So if there are algos for determining which params are best given number of procs etc, then the idea is to embed those algos, and then let the sys admin or users &quot;tune&quot; them by setting default params in their default MCA param files.&quot; The selection of the parameters and algorithm is base on the historical executions, which are stored in the database.
<br>
<p>Best Regards!
<br>
Xuan
<br>
<p>----- Original Message -----
<br>
From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Wednesday, June 13, 2012 3:35:56 PM
<br>
Subject: Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI
<br>
<p>So...you want the remove MPI process to comm_spawn another MPI process that will monitor the MPI I/O operation? That sounds expensive - comm_spawn is a rather slow operation in itself.
<br>
<p>&lt;shrug&gt; it would work, but I can't imagine it would be very performant. Note that the spawned &quot;monitor&quot; would only live for the lifetime of the job, so I'm not sure what value it adds. You might as well just monitor performance in the original app and dump that data into the database.
<br>
<p>FWIW: OMPI's design is intended to embed such &quot;hints&quot; in its selection logic. So if there are algos for determining which params are best given number of procs etc, then the idea is to embed those algos, and then let the sys admin or users &quot;tune&quot; them by setting default params in their default MCA param files.
<br>
<p>Not saying that a database is a bad idea - just saying it is a design departure. We haven't done it because monitoring performance automatically hurts the performance of the app being monitored.
<br>
<p><p>On Jun 13, 2012, at 7:13 AM, Xuan Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you for the advice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are right, the deamon is NOT MPI processes. I would like to use the Open MPI I/O module to implement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my opinion, the commends sent by the client will start an MPI I/O operation, therefore, the client can start an MPI process. In addition, I have found a similar &quot;select logic&quot; module in the OMPIO, which is a new MPI I/O architecture in Open MPI (besides the ROMIO). Therefore, the whole process from &quot;client call&quot; to &quot;returning result&quot; is an MPI process, if I have not made a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards!
</span><br>
<span class="quotelev1">&gt; Xuan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 2:44:31 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One flaw in the idea: the daemons are not MPI processes, and therefore have no way to run an MPI I/O operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2012, at 5:40 AM, Xuan Wang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have an idea about using database to support a kind of semi-automatic optimized parallel I/O operations and want to know if it is realizable or not. Hope you guys can give me more advices and point out the shortage of the idea. Thank you all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As the performance of the parallel I/O depends on the parallel I/O algorithm, the file storage in file system, the number of processes used for I/O and so on, we can use the MPI hints to control the parameters manually. But sometime, the client or the people who call the I/O operation don&#226;&#128;&#153;t know which parameters are the best.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, we think about using the data warehouse and an I/O monitor to realize the optimization phase. Please take a look at the attached picture first.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Process explanations:
</span><br>
<span class="quotelev2">&gt;&gt; 1. The client sends the I/O commends with hints (optional) to deamon. The select model will decide if it is necessary to call the I/O database in order to get the optimized I/O operation strategy.
</span><br>
<span class="quotelev2">&gt;&gt; 2. If yes, the select model sends the I/O commends with those parameters, which can be used to choose the optimized I/O algorithm, to the knowledge base or database.
</span><br>
<span class="quotelev2">&gt;&gt; 3 &amp; 4. The select model gets the optimized algorithm and runs the I/O operation.
</span><br>
<span class="quotelev2">&gt;&gt; 5 &amp; 6. During the I/O operation, the monitor will gather the performance related information and sends it to the data warehouse, which is used to analyze the performance of the optimized algorithm and support the semi-automatic optimization.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These are the basic thought about the whole process. Please be free to ask any details about this system/concept. I will try my best to explain it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am happy if someone can take part in the discussion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards!
</span><br>
<span class="quotelev2">&gt;&gt; Xuan Wang&lt;1.PNG&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19530.php">Ralph Castain: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19522.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
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
