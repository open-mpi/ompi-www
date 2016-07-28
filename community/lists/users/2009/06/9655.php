<?
$subject_val = "Re: [OMPI users] Machinefile option in opempi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 10:29:04 2009" -->
<!-- isoreceived="20090620142904" -->
<!-- sent="Sat, 20 Jun 2009 08:28:58 -0600" -->
<!-- isosent="20090620142858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Machinefile option in opempi-1.3.2" -->
<!-- id="71d2d8cc0906200728s2225f8e7tf070799502b75151_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41935ab00906192124v3d79ac65tc9e53876c67c4332_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-20 10:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, yes - that is definitely true. What you need to use is the &quot;seq&quot; (for
<br>
&quot;sequential&quot;) mapper. Do the following on your cmd line:
<br>
--hostfile hostfile -mca rmaps seq
<br>
<p>This will cause OMPI to map the process ranks according to the order in the
<br>
hostfile. You need to specify one line for each node/rank, just as you have
<br>
done.
<br>
<p>Ralph
<br>
<p><p>On Fri, Jun 19, 2009 at 10:24 PM, Rajesh Sudarsan &lt;rsudarsan_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the reply.  The default mapper does round-robin assignment
</span><br>
<span class="quotelev1">&gt; as long as I do not specify the machinefile in the following format:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; n1
</span><br>
<span class="quotelev1">&gt; n2
</span><br>
<span class="quotelev1">&gt; n2
</span><br>
<span class="quotelev1">&gt; n1    where, n1 and n2 are two nodes in the cluster and I use two
</span><br>
<span class="quotelev1">&gt; slots within each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have pasted the output and the display map for execution on 2, 4,8
</span><br>
<span class="quotelev1">&gt; and 16 processors. The mapper does not use the nodes in which it is
</span><br>
<span class="quotelev1">&gt; listed in the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machinefile that I tested with uses two nodes n105 and n106 with 8
</span><br>
<span class="quotelev1">&gt; cores in each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n106
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt; n105
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run a hello world program on 2 processors which prints the
</span><br>
<span class="quotelev1">&gt; hostname, the output and the display map are  as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec --display-map -machinefile m3 -np 2 ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n106      Num procs: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7838,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7838,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4 processors the output is as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec --display-map -machinefile m3 -np 4 ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n106      Num procs: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7294,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7294,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7294,1] Process rank: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7294,1] Process rank: 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 3 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 2 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8 processors the output is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec --display-map -machinefile m3 -np 8 ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n106      Num procs: 8
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 3
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 5
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 6
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7264,1] Process rank: 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt;  Rank 3 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 7 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 2 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 4 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 6 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 5 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 16 nodes the output is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec --display-map -machinefile m3 -np 16 ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n106      Num procs: 8
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 3
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 5
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 6
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n105      Num procs: 8
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 8
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 9
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 10
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 11
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 12
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 13
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 14
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7266,1] Process rank: 15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt;  Rank 10 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt;  Rank 12 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt;  Rank 13 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt;  Rank 14 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 3 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 6 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 7 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 15 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt;  Rank 8 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt;  Rank 11 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt;  Rank 4 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 2 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 5 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev1">&gt;  Rank 9 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rajesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 19, 2009 at 10:40 PM, Ralph Castain&lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; If you do &quot;man orte_hosts&quot;, you'll see a full explanation of how the
</span><br>
<span class="quotelev1">&gt; various
</span><br>
<span class="quotelev2">&gt; &gt; machinefile options work.
</span><br>
<span class="quotelev2">&gt; &gt; The default mapper doesn't do any type of sorting - it is a round-robin
</span><br>
<span class="quotelev2">&gt; &gt; mapper that just works its way through the provided nodes. We don't
</span><br>
<span class="quotelev1">&gt; reorder
</span><br>
<span class="quotelev2">&gt; &gt; them in any way.
</span><br>
<span class="quotelev2">&gt; &gt; However, it does depend on the number of slots we are told each node has,
</span><br>
<span class="quotelev1">&gt; so
</span><br>
<span class="quotelev2">&gt; &gt; that might be what you are encountering. If you do a --display-map and
</span><br>
<span class="quotelev1">&gt; send
</span><br>
<span class="quotelev2">&gt; &gt; it along, I might be able to spot the issue.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jun 19, 2009 at 1:35 PM, Rajesh Sudarsan &lt;rsudarsan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tested a simple hello world program on 5 nodes each with dual
</span><br>
<span class="quotelev3">&gt; &gt;&gt; quad-core processors. I noticed that openmpi does not always follow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the order of the processors indicated in the machinefile. Depending
</span><br>
<span class="quotelev3">&gt; &gt;&gt; upon the number of processors requested, openmpi does some type of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sorting to find the best node fit for a particular job and runs on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; them.  Is there a way to make openmpi to turn off this sorting and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; strictly follow the order indicated in the machinefile?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpiexec supports three options to specify the machinefile -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default-machinefile, hostfile, and machinefile. Can anyone tell what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is the difference between these three options?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rajesh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9654.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9656.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
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
