<?
$subject_val = "Re: [OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 14:20:01 2011" -->
<!-- isoreceived="20110516182001" -->
<!-- sent="Mon, 16 May 2011 15:19:56 -0300" -->
<!-- isosent="20110516181956" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="BANLkTi=SZiStb4-ObP7-OG8CPcaDizTaEQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F768776-6335-4A4D-A305-53FCFEEF6A40_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scheduling dynamically spawned processes<br>
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-16 14:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16546.php">Paul van der Walt: "[OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I have the same issue and I've been searching how to do this, but I couldn't
<br>
find.
<br>
<p>What exactly must be the string in the host info key to do what Rodrigo
<br>
described?
<br>
<p>&lt;&lt;&lt; Inside your master, you would create an MPI_Info key &quot;host&quot; that has a
<br>
value
<br>
&lt;&lt;&lt; consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you
<br>
want
<br>
&lt;&lt;&lt; your slave to execute upon. Those hosts must have been included in
<br>
&lt;&lt;&lt; my_hostfile. Include that key in the MPI_Info array passed to your
<br>
Spawn.
<br>
<p>I tried to do what you said above but ompi ignores the repetition of hosts.
<br>
Using Rodrigo's example I did:
<br>
<p>host info key = &quot;m1,m2,m2,m2,m3&quot; and number of processes = 5 and the result
<br>
was
<br>
<p>m1 -&gt; 2
<br>
m2 -&gt; 2
<br>
m3 -&gt; 1
<br>
<p>and not
<br>
<p>m1 -&gt; 1
<br>
m2 -&gt; 3
<br>
m3 -&gt; 1
<br>
<p>as I wanted.
<br>
<p>Thanks in advance.
<br>
<p>Thatyene Ramos
<br>
<p>On Fri, May 13, 2011 at 9:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe I answered that question. You can use the hostfile info key, or
</span><br>
<span class="quotelev1">&gt; you can use the host info key - either one will do what you require.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 13, 2011, at 4:11 PM, Rodrigo Silva Oliveira wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I was not specific enough. I need to spawn the copies of a process
</span><br>
<span class="quotelev1">&gt; in a unique mpi_spawn call. It is, I have to specify a list of machines and
</span><br>
<span class="quotelev1">&gt; how many copies of the process will be spawned on each one. Is it possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be something like that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; machines     #copies
</span><br>
<span class="quotelev1">&gt; m1                1
</span><br>
<span class="quotelev1">&gt; m2                3
</span><br>
<span class="quotelev1">&gt; m3                1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After an unique call to spawn, I want the copies running in this fashion. I
</span><br>
<span class="quotelev1">&gt; tried use a hostfile with the option slot, but I'm not sure if it is the
</span><br>
<span class="quotelev1">&gt; best way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m1 slots=1
</span><br>
<span class="quotelev1">&gt; m2 slots=3
</span><br>
<span class="quotelev1">&gt; m3 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rodrigo Silva Oliveira
</span><br>
<span class="quotelev1">&gt; M.Sc. Student - Computer Science
</span><br>
<span class="quotelev1">&gt; Universidade Federal de Minas Gerais
</span><br>
<span class="quotelev1">&gt; www.dcc.ufmg.br/~rsilva &lt;<a href="http://www.dcc.ufmg.br/%7Ersilva">http://www.dcc.ufmg.br/%7Ersilva</a>&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16546.php">Paul van der Walt: "[OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
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
