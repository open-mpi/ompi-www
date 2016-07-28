<?
$subject_val = "Re: [OMPI users] Machinefile option in opempi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 10:57:32 2009" -->
<!-- isoreceived="20090620145732" -->
<!-- sent="Sat, 20 Jun 2009 10:57:27 -0400" -->
<!-- isosent="20090620145727" -->
<!-- name="Rajesh Sudarsan" -->
<!-- email="rsudarsan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Machinefile option in opempi-1.3.2" -->
<!-- id="41935ab00906200757t5cc793c0j444e5afc219c567a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0906200728s2225f8e7tf070799502b75151_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-20 10:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9657.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph. It worked.
<br>
<p>Regards,
<br>
Rajesh
<br>
<p>On Sat, Jun 20, 2009 at 10:28 AM, Ralph Castain&lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ah, yes - that is definitely true. What you need to use is the &quot;seq&quot; (for
</span><br>
<span class="quotelev1">&gt; &quot;sequential&quot;) mapper. Do the following on your cmd line:
</span><br>
<span class="quotelev1">&gt; --hostfile hostfile -mca rmaps seq
</span><br>
<span class="quotelev1">&gt; This will cause OMPI to map the process ranks according to the order in the
</span><br>
<span class="quotelev1">&gt; hostfile. You need to specify one line for each node/rank, just as you have
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 19, 2009 at 10:24 PM, Rajesh Sudarsan &lt;rsudarsan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply. &#160;The default mapper does round-robin assignment
</span><br>
<span class="quotelev2">&gt;&gt; as long as I do not specify the machinefile in the following format:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n1
</span><br>
<span class="quotelev2">&gt;&gt; n2
</span><br>
<span class="quotelev2">&gt;&gt; n2
</span><br>
<span class="quotelev2">&gt;&gt; n1 &#160; &#160;where, n1 and n2 are two nodes in the cluster and I use two
</span><br>
<span class="quotelev2">&gt;&gt; slots within each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have pasted the output and the display map for execution on 2, 4,8
</span><br>
<span class="quotelev2">&gt;&gt; and 16 processors. The mapper does not use the nodes in which it is
</span><br>
<span class="quotelev2">&gt;&gt; listed in the file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machinefile that I tested with uses two nodes n105 and n106 with 8
</span><br>
<span class="quotelev2">&gt;&gt; cores in each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n106
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt; n105
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run a hello world program on 2 processors which prints the
</span><br>
<span class="quotelev2">&gt;&gt; hostname, the output and the display map are &#160;as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec --display-map -machinefile m3 -np 2 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;======================== &#160; JOB MAP &#160; ========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Data for node: Name: n106 &#160; &#160; &#160;Num procs: 2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7838,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7838,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;=============================================================
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4 processors the output is as follows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec --display-map -machinefile m3 -np 4 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;======================== &#160; JOB MAP &#160; ========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Data for node: Name: n106 &#160; &#160; &#160;Num procs: 4
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7294,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7294,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7294,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7294,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;=============================================================
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 3 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 2 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8 processors the output is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec --display-map -machinefile m3 -np 8 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;======================== &#160; JOB MAP &#160; ========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Data for node: Name: n106 &#160; &#160; &#160;Num procs: 8
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 4
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 5
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 6
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7264,1] Process rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;=============================================================
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 3 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 7 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 2 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 4 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 6 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 5 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 16 nodes the output is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec --display-map -machinefile m3 -np 16 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;======================== &#160; JOB MAP &#160; ========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Data for node: Name: n106 &#160; &#160; &#160;Num procs: 8
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 4
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 5
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 6
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Data for node: Name: n105 &#160; &#160; &#160;Num procs: 8
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 8
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 9
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 10
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 11
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 12
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 13
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 14
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;Process OMPI jobid: [7266,1] Process rank: 15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;=============================================================
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 10 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 12 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 13 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 14 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0 is present in C version of Hello World...hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 1 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 3 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 6 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 7 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 15 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 8 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 11 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 4 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 2 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 5 of C version says: Hello world!..hostname = n106
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Rank 9 of C version says: Hello world!..hostname = n105
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rajesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jun 19, 2009 at 10:40 PM, Ralph Castain&lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If you do &quot;man orte_hosts&quot;, you'll see a full explanation of how the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; various
</span><br>
<span class="quotelev3">&gt;&gt; &gt; machinefile options work.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The default mapper doesn't do any type of sorting - it is a round-robin
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mapper that just works its way through the provided nodes. We don't
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reorder
</span><br>
<span class="quotelev3">&gt;&gt; &gt; them in any way.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, it does depend on the number of slots we are told each node
</span><br>
<span class="quotelev3">&gt;&gt; &gt; has, so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that might be what you are encountering. If you do a --display-map and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; send
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it along, I might be able to spot the issue.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Fri, Jun 19, 2009 at 1:35 PM, Rajesh Sudarsan &lt;rsudarsan_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I tested a simple hello world program on 5 nodes each with dual
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; quad-core processors. I noticed that openmpi does not always follow
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the order of the processors indicated in the machinefile. Depending
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; upon the number of processors requested, openmpi does some type of
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; sorting to find the best node fit for a particular job and runs on
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; them. &#160;Is there a way to make openmpi to turn off this sorting and
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; strictly follow the order indicated in the machinefile?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mpiexec supports three options to specify the machinefile -
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; default-machinefile, hostfile, and machinefile. Can anyone tell what
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; is the difference between these three options?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Rajesh
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9657.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9655.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
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
