<?
$subject_val = "Re: [OMPI users] Passing a rank specific argument to the JVM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 11:29:23 2015" -->
<!-- isoreceived="20150719152923" -->
<!-- sent="Sun, 19 Jul 2015 08:29:19 -0700" -->
<!-- isosent="20150719152919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing a rank specific argument to the JVM" -->
<!-- id="655D58DA-655C-46E9-8BC6-6B30E6CABF67_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAbhqc7L7S-5E45vWrSq3ksD-rzRzMTtgSyd0MAjB5QPdVORgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passing a rank specific argument to the JVM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-19 11:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Previous message:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or you can just do (assuming you don&#226;&#128;&#153;t have a large number of ranks):
<br>
<p>mpirun -np 1 java &lt;port-for-rank0&gt; MyProgram : -np 1 java &lt;port-for-rank2&gt; MyProgram
<br>
<p>They will all wind up in the same comm_world.
<br>
<p><p><span class="quotelev1">&gt; On Jul 19, 2015, at 12:30 AM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wrap the call in a bash script or the like, there are several examples on this mailing list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am sorry I am not at my computer so cannot find them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 19 Jul 2015 06:34, &quot;Saliya Ekanayake&quot; &lt;esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to profile one of our applications and would like each rank to report to a profiler through a specific port. This is a Java program, so the way I would like to do this is to pass the port as a command line argument to the JVM. For example,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 java &lt;port&gt; MyProgram
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the port is passed as an option to the java command and not to the program. Now the port has to be different for the 2 MPI procs and I am not sure how this could be done. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27287.php">http://www.open-mpi.org/community/lists/users/2015/07/27287.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27287.php">http://www.open-mpi.org/community/lists/users/2015/07/27287.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27288.php">http://www.open-mpi.org/community/lists/users/2015/07/27288.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27289/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Previous message:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
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
