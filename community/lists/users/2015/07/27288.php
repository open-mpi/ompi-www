<?
$subject_val = "Re: [OMPI users] Passing a rank specific argument to the JVM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 03:30:48 2015" -->
<!-- isoreceived="20150719073048" -->
<!-- sent="Sun, 19 Jul 2015 09:30:47 +0200" -->
<!-- isosent="20150719073047" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing a rank specific argument to the JVM" -->
<!-- id="CAAbhqc7L7S-5E45vWrSq3ksD-rzRzMTtgSyd0MAjB5QPdVORgg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKXC9PMvijQms3RBs8XjcJbBE-XJmqw_6sX8HL5sqzZa+w_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-19 03:30:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27287.php">Saliya Ekanayake: "[OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27287.php">Saliya Ekanayake: "[OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wrap the call in a bash script or the like, there are several examples on
<br>
this mailing list.
<br>
<p>I am sorry I am not at my computer so cannot find them.
<br>
On 19 Jul 2015 06:34, &quot;Saliya Ekanayake&quot; &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to profile one of our applications and would like each rank to
</span><br>
<span class="quotelev1">&gt; report to a profiler through a specific port. This is a Java program, so
</span><br>
<span class="quotelev1">&gt; the way I would like to do this is to pass the port as a command line
</span><br>
<span class="quotelev1">&gt; argument to the JVM. For example,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 java &lt;port&gt; MyProgram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the port is passed as an option to the java command and not to the
</span><br>
<span class="quotelev1">&gt; program. Now the port has to be different for the 2 MPI procs and I am not
</span><br>
<span class="quotelev1">&gt; sure how this could be done.
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
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27287.php">http://www.open-mpi.org/community/lists/users/2015/07/27287.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27287.php">Saliya Ekanayake: "[OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27287.php">Saliya Ekanayake: "[OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
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
