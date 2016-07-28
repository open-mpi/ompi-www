<?
$subject_val = "Re: [OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 13 20:16:27 2011" -->
<!-- isoreceived="20110514001627" -->
<!-- sent="Fri, 13 May 2011 18:16:17 -0600" -->
<!-- isosent="20110514001617" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="2F768776-6335-4A4D-A305-53FCFEEF6A40_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=uXGZ7hxk-RJA=Oj9bTAcePJGQQg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-13 20:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16542.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I answered that question. You can use the hostfile info key, or you can use the host info key - either one will do what you require.
<br>
<p>On May 13, 2011, at 4:11 PM, Rodrigo Silva Oliveira wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I was not specific enough. I need to spawn the copies of a process in a unique mpi_spawn call. It is, I have to specify a list of machines and how many copies of the process will be spawned on each one. Is it possible?
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
<span class="quotelev1">&gt; After an unique call to spawn, I want the copies running in this fashion. I tried use a hostfile with the option slot, but I'm not sure if it is the best way.
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
<span class="quotelev1">&gt; www.dcc.ufmg.br/~rsilva
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16541/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16542.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16540.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
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
