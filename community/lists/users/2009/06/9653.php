<?
$subject_val = "Re: [OMPI users] Machinefile option in opempi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 00:25:04 2009" -->
<!-- isoreceived="20090620042504" -->
<!-- sent="Sat, 20 Jun 2009 00:24:59 -0400" -->
<!-- isosent="20090620042459" -->
<!-- name="Rajesh Sudarsan" -->
<!-- email="rsudarsan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Machinefile option in opempi-1.3.2" -->
<!-- id="41935ab00906192124v3d79ac65tc9e53876c67c4332_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0906191940p34fe49ecj55d4057727c6e27c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Machinefile option in opempi-1.3.2<br>
<strong>From:</strong> Rajesh Sudarsan (<em>rsudarsan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-20 00:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9652.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>In reply to:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the reply.  The default mapper does round-robin assignment
<br>
as long as I do not specify the machinefile in the following format:
<br>
<p>n1
<br>
n2
<br>
n2
<br>
n1    where, n1 and n2 are two nodes in the cluster and I use two
<br>
slots within each node.
<br>
<p><p>I have pasted the output and the display map for execution on 2, 4,8
<br>
and 16 processors. The mapper does not use the nodes in which it is
<br>
listed in the file.
<br>
<p>The machinefile that I tested with uses two nodes n105 and n106 with 8
<br>
cores in each node.
<br>
<p>n105
<br>
n105
<br>
n105
<br>
n105
<br>
n106
<br>
n106
<br>
n106
<br>
n106
<br>
n106
<br>
n106
<br>
n106
<br>
n106
<br>
n105
<br>
n105
<br>
n105
<br>
n105
<br>
<p>When I run a hello world program on 2 processors which prints the
<br>
hostname, the output and the display map are  as follows:
<br>
<p><p>$ mpiexec --display-map -machinefile m3 -np 2 ./hello
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: n106	Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7838,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7838,1] Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
Rank 0 is present in C version of Hello World...hostname = n106
<br>
&nbsp;&nbsp;Rank 1 of C version says: Hello world!..hostname = n106
<br>
<p><p><p><p>On 4 processors the output is as follows
<br>
<p>$ mpiexec --display-map -machinefile m3 -np 4 ./hello
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: n106	Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7294,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7294,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7294,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7294,1] Process rank: 3
<br>
<p>&nbsp;=============================================================
<br>
Rank 0 is present in C version of Hello World...hostname = n106
<br>
&nbsp;&nbsp;Rank 1 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 3 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 2 of C version says: Hello world!..hostname = n106
<br>
<p><p><p><p>On 8 processors the output is as follows:
<br>
<p>$ mpiexec --display-map -machinefile m3 -np 8 ./hello
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: n106	Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7264,1] Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
&nbsp;&nbsp;Rank 3 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 7 of C version says: Hello world!..hostname = n106
<br>
Rank 0 is present in C version of Hello World...hostname = n106
<br>
&nbsp;&nbsp;Rank 2 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 4 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 6 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 5 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 1 of C version says: Hello world!..hostname = n106
<br>
<p><p><p>On 16 nodes the output is as follows:
<br>
<p>$ mpiexec --display-map -machinefile m3 -np 16 ./hello
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: n106	Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 7
<br>
<p>&nbsp;Data for node: Name: n105	Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [7266,1] Process rank: 15
<br>
<p>&nbsp;=============================================================
<br>
&nbsp;&nbsp;Rank 10 of C version says: Hello world!..hostname = n105
<br>
&nbsp;&nbsp;Rank 12 of C version says: Hello world!..hostname = n105
<br>
&nbsp;&nbsp;Rank 13 of C version says: Hello world!..hostname = n105
<br>
&nbsp;&nbsp;Rank 14 of C version says: Hello world!..hostname = n105
<br>
Rank 0 is present in C version of Hello World...hostname = n106
<br>
&nbsp;&nbsp;Rank 1 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 3 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 6 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 7 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 15 of C version says: Hello world!..hostname = n105
<br>
&nbsp;&nbsp;Rank 8 of C version says: Hello world!..hostname = n105
<br>
&nbsp;&nbsp;Rank 11 of C version says: Hello world!..hostname = n105
<br>
&nbsp;&nbsp;Rank 4 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 2 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 5 of C version says: Hello world!..hostname = n106
<br>
&nbsp;&nbsp;Rank 9 of C version says: Hello world!..hostname = n105
<br>
<p><p><p>Thanks,
<br>
Rajesh
<br>
<p><p><p><p><p>On Fri, Jun 19, 2009 at 10:40 PM, Ralph Castain&lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you do &quot;man orte_hosts&quot;, you'll see a full explanation of how the various
</span><br>
<span class="quotelev1">&gt; machinefile options work.
</span><br>
<span class="quotelev1">&gt; The default mapper doesn't do any type of sorting - it is a round-robin
</span><br>
<span class="quotelev1">&gt; mapper that just works its way through the provided nodes. We don't reorder
</span><br>
<span class="quotelev1">&gt; them in any way.
</span><br>
<span class="quotelev1">&gt; However, it does depend on the number of slots we are told each node has, so
</span><br>
<span class="quotelev1">&gt; that might be what you are encountering. If you do a --display-map and send
</span><br>
<span class="quotelev1">&gt; it along, I might be able to spot the issue.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 19, 2009 at 1:35 PM, Rajesh Sudarsan &lt;rsudarsan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tested a simple hello world program on 5 nodes each with dual
</span><br>
<span class="quotelev2">&gt;&gt; quad-core processors. I noticed that openmpi does not always follow
</span><br>
<span class="quotelev2">&gt;&gt; the order of the processors indicated in the machinefile. Depending
</span><br>
<span class="quotelev2">&gt;&gt; upon the number of processors requested, openmpi does some type of
</span><br>
<span class="quotelev2">&gt;&gt; sorting to find the best node fit for a particular job and runs on
</span><br>
<span class="quotelev2">&gt;&gt; them. &#160;Is there a way to make openmpi to turn off this sorting and
</span><br>
<span class="quotelev2">&gt;&gt; strictly follow the order indicated in the machinefile?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec supports three options to specify the machinefile -
</span><br>
<span class="quotelev2">&gt;&gt; default-machinefile, hostfile, and machinefile. Can anyone tell what
</span><br>
<span class="quotelev2">&gt;&gt; is the difference between these three options?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rajesh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9652.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>In reply to:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
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
