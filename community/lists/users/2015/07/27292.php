<?
$subject_val = "Re: [OMPI users] Passing a rank specific argument to the JVM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 14:25:58 2015" -->
<!-- isoreceived="20150719182558" -->
<!-- sent="Sun, 19 Jul 2015 11:25:52 -0700" -->
<!-- isosent="20150719182552" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing a rank specific argument to the JVM" -->
<!-- id="6E961534-1C14-4071-9026-4CEF97B06660_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+ssbKX0jZL1D6QpDeFcpoyNUK39KoqkkqtChTn1mbuspHbgkg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-19 14:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27293.php">Juan Liu: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Previous message:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes
<br>
<p><span class="quotelev1">&gt; On Jul 19, 2015, at 10:47 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So does this mean I can have different options for each process by separating them with colons? That'll be ideal for me, because profiling one rank would be enough, so I can pass a port only to that rank and let others just run. Is this the case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Jul 19, 2015 at 11:29 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Or you can just do (assuming you don&#226;&#128;&#153;t have a large number of ranks):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 java &lt;port-for-rank0&gt; MyProgram : -np 1 java &lt;port-for-rank2&gt; MyProgram
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They will all wind up in the same comm_world.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 19, 2015, at 12:30 AM, Nick Papior &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wrap the call in a bash script or the like, there are several examples on this mailing list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry I am not at my computer so cannot find them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 19 Jul 2015 06:34, &quot;Saliya Ekanayake&quot; &lt;esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to profile one of our applications and would like each rank to report to a profiler through a specific port. This is a Java program, so the way I would like to do this is to pass the port as a command line argument to the JVM. For example,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 java &lt;port&gt; MyProgram
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note the port is passed as an option to the java command and not to the program. Now the port has to be different for the 2 MPI procs and I am not sure how this could be done. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27287.php">http://www.open-mpi.org/community/lists/users/2015/07/27287.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27287.php">http://www.open-mpi.org/community/lists/users/2015/07/27287.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27288.php">http://www.open-mpi.org/community/lists/users/2015/07/27288.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27288.php">http://www.open-mpi.org/community/lists/users/2015/07/27288.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27289.php">http://www.open-mpi.org/community/lists/users/2015/07/27289.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27289.php">http://www.open-mpi.org/community/lists/users/2015/07/27289.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27291.php">http://www.open-mpi.org/community/lists/users/2015/07/27291.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27293.php">Juan Liu: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Previous message:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
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
