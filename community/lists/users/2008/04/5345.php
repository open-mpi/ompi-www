<?
$subject_val = "[OMPI users] Ang: Re:  submitted job stops";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 08:15:41 2008" -->
<!-- isoreceived="20080409121541" -->
<!-- sent="Wed, 9 Apr 2008 14:15:34 +0200 (CEST)" -->
<!-- isosent="20080409121534" -->
<!-- name="danesh.d_at_[hidden]" -->
<!-- email="danesh.d_at_[hidden]" -->
<!-- subject="[OMPI users] Ang: Re:  submitted job stops" -->
<!-- id="24351656.56761207743334738.JavaMail.defaultUser_at_defaultHost" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Ang: Re:  submitted job stops<br>
<strong>From:</strong> <a href="mailto:danesh.d_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Ang:%20Re:%20%20submitted%20job%20stops"><em>danesh.d_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-09 08:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5346.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5344.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually my program is very simple MPI program &quot;Hello World&quot; which 
<br>
just prints rank of each processor and then terminates. When I run 
<br>
my program on a single processor machine with e.g 4 processors 
<br>
(oversubscribing) it shows:
<br>
<p>Hello world from processor with rank 0
<br>
Hello world from processor with rank 3
<br>
Hello world from processor with rank 1
<br>
Hello world from processor with rank 2
<br>
<p>but when I use my remote machines everything just stops when 
<br>
I run the program.
<br>
<p>No I do not use any queuing system. I simply run it like this:
<br>
<p>mpirun -np 4 --hostfile hosts ./hw
<br>
<p>and then it just tops until I terminate it manually. As I said,
<br>
I monitored all machines (master+2 slaves) and found out that 
<br>
in all machines, &quot;orted&quot; daemon starts when I run the program, but 
<br>
after few seconds the daemon is terminated. What can be the reason?
<br>
<p>Thanks,
<br>
<p>Danesh
<br>
<p><p><p><span class="quotelev1">&gt;----Ursprungligt meddelande----
</span><br>
<span class="quotelev1">&gt;Fr&#229;n: reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Datum: 09-04-2008 13:26
</span><br>
<span class="quotelev1">&gt;Till: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&#196;rende: Re: [OMPI users] submitted job stops
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Am 08.04.2008 um 21:58 schrieb Danesh Daroui:
</span><br>
<span class="quotelev2">&gt;&gt; I had posted a message about my problem and I did all solutions but  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; problem is not solved it. The problem is that
</span><br>
<span class="quotelev2">&gt;&gt; I have installed Open-MPI on three machines (1 master+2 slaves).  
</span><br>
<span class="quotelev2">&gt;&gt; When I
</span><br>
<span class="quotelev2">&gt;&gt; submit a job to master I can see that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orted&quot; daemon is launched on all machines (by running &quot;top&quot; on all
</span><br>
<span class="quotelev2">&gt;&gt; machines) but all &quot;orted&quot; daemons terminate after
</span><br>
<span class="quotelev2">&gt;&gt; few seconds and nothing will happen. First I thought that it can be
</span><br>
<span class="quotelev2">&gt;&gt; because remote machines can not launch &quot;orted&quot; but
</span><br>
<span class="quotelev2">&gt;&gt; now I am sure that it can be run on all machines without problem. Any
</span><br>
<span class="quotelev2">&gt;&gt; suggestion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the question is more: is your MPI program running successfully or is  
</span><br>
<span class="quotelev1">&gt;there simply no output from mpiexec/-run? And: by &quot;submit&quot; you mean  
</span><br>
<span class="quotelev1">&gt;you use any queuingsystem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Reuti
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5346.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5344.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
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
