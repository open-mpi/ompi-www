<?
$subject_val = "Re: [OMPI users] Help: How to accomplish processors affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 02:44:04 2009" -->
<!-- isoreceived="20090817064404" -->
<!-- sent="Mon, 17 Aug 2009 09:43:59 +0300" -->
<!-- isosent="20090817064359" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: How to accomplish processors affinity" -->
<!-- id="453d39990908162343l3f6c3313s6f51894a9b72e888_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="289665360908132050k2498ee0bh2edec8d83b40e38f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: How to accomplish processors affinity<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 02:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10376.php">jody: "[OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10374.php">Klymak Jody: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>In reply to:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10388.php">Eugene Loh: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
I am not familiar with this cluster, but in the FAQ ( see link above ) you
<br>
can find an example of the rankfile.
<br>
another simple example is the following:
<br>
$cat rankfile
<br>
rank 0=host1 slot=0
<br>
rank 1=host2 slot=0
<br>
rank 2=host3 slot=0
<br>
rank 3=host4 slot=0
<br>
$mpirun -np 4 -H host1,host2,host3,host4 -rf rankfile ./app
<br>
if you OS sees your cluster as a one machine and $cat /proc/cpuinfo shows 4
<br>
CPUs ( let's assume 0-3 ) and one IP and hostname,
<br>
then try this:
<br>
$cat rankfile
<br>
rank 0=host1 slot=0
<br>
rank 1=host1 slot=1
<br>
rank 2=host1 slot=2
<br>
rank 3=host1 slot=3
<br>
$mpirun -np 4 -H host1 -rf rankfile ./app
<br>
best regards
<br>
Lenny.
<br>
<p>On Fri, Aug 14, 2009 at 6:50 AM, Lee Amy &lt;openlinuxsource_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read some howtos at OpenMPI official site but i still have some problems
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I build a Kerrighed Clusters with 4 nodes so they look like a big SMP
</span><br>
<span class="quotelev1">&gt; machine. every node has 1 processor with dingle core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Dose MPI programs could be running on such kinds of machine? If
</span><br>
<span class="quotelev1">&gt; yes, could anyone show me some examples?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) In this SMP machine there are 4 processors I could see. So how do I
</span><br>
<span class="quotelev1">&gt; use OpenMPI to run some programs on these CPUs? Though I read how to
</span><br>
<span class="quotelev1">&gt; make a rank file but I am still feel confused. Could anyone show me a
</span><br>
<span class="quotelev1">&gt; simple rank file example for my Clusters?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amy Lee
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10375/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10376.php">jody: "[OMPI users] rank file error: Rankfile claimed..."</a>
<li><strong>Previous message:</strong> <a href="10374.php">Klymak Jody: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>In reply to:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10388.php">Eugene Loh: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
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
