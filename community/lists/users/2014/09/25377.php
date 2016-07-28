<?
$subject_val = "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 15:00:13 2014" -->
<!-- isoreceived="20140923190013" -->
<!-- sent="Tue, 23 Sep 2014 15:00:13 -0400" -->
<!-- isosent="20140923190013" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange affinity messages with 1.8 and torque 5" -->
<!-- id="5421C33D.4050405_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04FF5613-2CAD-4033-A922-6EBFA02BE31E_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange affinity messages with 1.8 and torque 5<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 15:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25376.php">Reuti: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>In reply to:</strong> <a href="25375.php">Brock Palen: "[OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Just an idea here. Do you use cpusets within Torque ? Did you request 
<br>
enough cores to torque ?
<br>
<p>Maxime Boissonneault
<br>
<p>Le 2014-09-23 13:53, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; I found a fun head scratcher, with openmpi 1.8.2  with torque 5 built with TM support, on hereto core layouts  I get the fun thing:
</span><br>
<span class="quotelev1">&gt; mpirun -report-bindings hostname        &lt;-------- Works
</span><br>
<span class="quotelev1">&gt; mpirun -report-bindings -np 64 hostname   &lt;--------- Wat?
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;     Node:        nyx5518
</span><br>
<span class="quotelev1">&gt;     #processes:  2
</span><br>
<span class="quotelev1">&gt;     #cpus:       1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran with --oversubscribed and got the expected host list, which matched $PBS_NODEFILE and was 64 entires long:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -overload-allowed -report-bindings -np 64 --oversubscribe hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What did I do wrong?  I'm stumped why one works one doesn't but the one that doesn't if your force it appears correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25375.php">http://www.open-mpi.org/community/lists/users/2014/09/25375.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25376.php">Reuti: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>In reply to:</strong> <a href="25375.php">Brock Palen: "[OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
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
