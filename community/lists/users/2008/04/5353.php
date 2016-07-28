<?
$subject_val = "Re: [OMPI users] submitted job stops";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 16:18:07 2008" -->
<!-- isoreceived="20080409201807" -->
<!-- sent="Wed, 09 Apr 2008 22:17:59 +0200" -->
<!-- isosent="20080409201759" -->
<!-- name="Danesh Daroui" -->
<!-- email="Danesh.D_at_[hidden]" -->
<!-- subject="Re: [OMPI users] submitted job stops" -->
<!-- id="47FD2477.1010109_at_bredband.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0804090909j727a4c22ubd32db623f0fced9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] submitted job stops<br>
<strong>From:</strong> Danesh Daroui (<em>Danesh.D_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 16:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5354.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5352.php">Bailey, Eric: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>In reply to:</strong> <a href="5346.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Reply:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark Kosmowski skrev:
<br>
<span class="quotelev1">&gt; Danesh:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried &quot;mpirun -np 4 --hostfile hosts hostname&quot; to verify that
</span><br>
<span class="quotelev1">&gt; ompi is working?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>When I run &quot;mpirun -np 4 --hostfile hosts hostname&quot; same thing happens 
<br>
and it just hangs. Can it be a clue?
<br>
<p><span class="quotelev1">&gt; Can you remote access from each node to each other node?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes all nodes can have access to each other via SSH and can login 
<br>
without being prompted for password.
<br>
<p><span class="quotelev1">&gt; If any node has more than 1 network device, are you using the ompi
</span><br>
<span class="quotelev1">&gt; options to specify which device to use?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Each node has one network interface which works properly.
<br>
<p>Regards,
<br>
<p>Danesh
<br>
<p><p><span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Message: 5
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 9 Apr 2008 14:15:34 +0200 (CEST)
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;danesh.d_at_[hidden]&quot; &lt;danesh.d_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Ang: Re:  submitted job stops
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;24351656.56761207743334738.JavaMail.defaultUser_at_defaultHost&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain;charset=&quot;ISO-8859-15&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually my program is very simple MPI program &quot;Hello World&quot; which
</span><br>
<span class="quotelev2">&gt;&gt; just prints rank of each processor and then terminates. When I run
</span><br>
<span class="quotelev2">&gt;&gt; my program on a single processor machine with e.g 4 processors
</span><br>
<span class="quotelev2">&gt;&gt; (oversubscribing) it shows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor with rank 0
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor with rank 3
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor with rank 1
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor with rank 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but when I use my remote machines everything just stops when
</span><br>
<span class="quotelev2">&gt;&gt; I run the program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No I do not use any queuing system. I simply run it like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 --hostfile hosts ./hw
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then it just tops until I terminate it manually. As I said,
</span><br>
<span class="quotelev2">&gt;&gt; I monitored all machines (master+2 slaves) and found out that
</span><br>
<span class="quotelev2">&gt;&gt; in all machines, &quot;orted&quot; daemon starts when I run the program, but
</span><br>
<span class="quotelev2">&gt;&gt; after few seconds the daemon is terminated. What can be the reason?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Danesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----Ursprungligt meddelande----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fr?n: reuti_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Datum: 09-04-2008 13:26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Till: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ?rende: Re: [OMPI users] submitted job stops
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 08.04.2008 um 21:58 schrieb Danesh Daroui:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had posted a message about my problem and I did all solutions but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem is not solved it. The problem is that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have installed Open-MPI on three machines (1 master+2 slaves).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; submit a job to master I can see that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;orted&quot; daemon is launched on all machines (by running &quot;top&quot; on all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machines) but all &quot;orted&quot; daemons terminate after
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; few seconds and nothing will happen. First I thought that it can be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because remote machines can not launch &quot;orted&quot; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now I am sure that it can be run on all machines without problem. Any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggestion?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the question is more: is your MPI program running successfully or is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there simply no output from mpiexec/-run? And: by &quot;submit&quot; you mean
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you use any queuingsystem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 863, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; *************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5354.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5352.php">Bailey, Eric: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>In reply to:</strong> <a href="5346.php">Mark Kosmowski: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Reply:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
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
