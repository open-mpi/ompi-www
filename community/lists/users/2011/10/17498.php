<?
$subject_val = "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  4 10:54:25 2011" -->
<!-- isoreceived="20111004145425" -->
<!-- sent="Tue, 4 Oct 2011 07:54:17 -0700" -->
<!-- isosent="20111004145417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Non-continous ranks with &amp;quot;--np 4 -npernode 3 -bynode&amp;quot;" -->
<!-- id="36520A6C-11BF-4DE0-881E-AA9A502F7A2B_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAN7CqrcDAGnGu9LjX60h58H+c97mkfkUDe1tuTmVmMeWNMk51Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-04 10:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17499.php">.-=Kiwi=-.: "[OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17497.php">Andrew Senin: "[OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<li><strong>In reply to:</strong> <a href="17497.php">Andrew Senin: "[OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like a bug - can address next week. Very unusual use of npernode...
<br>
<p><p>Sent from my iPad
<br>
<p>On Oct 4, 2011, at 4:55 AM, Andrew Senin &lt;andrew.senin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed a strange behaviour in 1.5.4 which seems to me as a bug. I'm trying to launch 4 ranks on 2 nodes. If I add &quot;-npernode 3 -bynode&quot; parameters mpirun freezes on start. When I tried with the &quot;-display-map&quot; parameter it shows the following:
</span><br>
<span class="quotelev1">&gt; ./mpirun --np 4 --host mir1,mir2 -npernode 3 -display-map -bynode ./hello 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: mir1    Num procs: 3
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [42759,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [42759,1] Process rank: 2
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [42759,1] Process rank: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: mir2    Num procs: 1
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [42759,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which seems as a problem since there supposed to be no rank #4 as np=4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also tried with trunk. The application also freezes but does not show the map of ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please assist if this is a bug or I'm doing something improperly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, 
</span><br>
<span class="quotelev1">&gt; Andrew Senin
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17499.php">.-=Kiwi=-.: "[OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17497.php">Andrew Senin: "[OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<li><strong>In reply to:</strong> <a href="17497.php">Andrew Senin: "[OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
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
