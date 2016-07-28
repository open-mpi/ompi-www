<?
$subject_val = "Re: [OMPI users] switch between ethernet and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 09:03:04 2008" -->
<!-- isoreceived="20081120140304" -->
<!-- sent="Thu, 20 Nov 2008 07:02:56 -0700" -->
<!-- isosent="20081120140256" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] switch between ethernet and infiniband" -->
<!-- id="1DDC233B-EA54-4EC1-AF5C-66C2ED98C599_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B978556F4556A94E82D97D1E5BBF27F47ECD8B_at_xpsys3.ttde.transtec.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] switch between ethernet and infiniband<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 09:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7354.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7351.php">Hailperin, Isaac: "[OMPI users] switch between ethernet and infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;btl&quot; = bit transport layer
<br>
<p>Yes, you can do so (assuming you configured/built support for both  
<br>
transports into OMPI), but you probably don't want to specify things  
<br>
that tightly. Usually, people do:
<br>
<p>-mca btl tcp,sm,self
<br>
<p>or
<br>
<p>-mca btl openib,sm,self
<br>
<p>This also selects the shared memory subsystem that provides  
<br>
performance for processes that share nodes, and a &quot;self&quot; module that  
<br>
supports simplified loopback calls when the code winds up sending  
<br>
something back to the calling process.
<br>
<p><p>On Nov 20, 2008, at 6:22 AM, Hailperin, Isaac wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; am I right in assuming that I as a user can choose between
</span><br>
<span class="quotelev1">&gt; ethernet and infiniband by issuing
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl tcp  my_job
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl openib my_job
</span><br>
<span class="quotelev1">&gt; respectivly ?
</span><br>
<span class="quotelev1">&gt; What does &quot;btl&quot; stand for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isaac
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
<span class="quotelev1">&gt; Vorstand: Ertu Uysal, Axel Queck
</span><br>
<span class="quotelev1">&gt; Vorsitzender des Aufsichtsrats: Bernhard Bruscha
</span><br>
<span class="quotelev1">&gt; Sitz der Gesellschaft: Tuebingen
</span><br>
<span class="quotelev1">&gt; Amtsgericht Stuttgart HRB 381299
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diese E-Mail enthaelt vertrauliche und/oder rechtlich geschuetzte
</span><br>
<span class="quotelev1">&gt; Informationen. Wenn Sie nicht der richtige Adressat sind oder diese
</span><br>
<span class="quotelev1">&gt; E-Mail irrtuemlich erhalten haben, informieren Sie bitte sofort den
</span><br>
<span class="quotelev1">&gt; Absender und vernichten Sie diese Mail. Das unerlaubte Kopieren sowie
</span><br>
<span class="quotelev1">&gt; die unbefugte Weitergabe dieser Mail ist nicht gestattet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail may contain confidential and/or privileged information.
</span><br>
<span class="quotelev1">&gt; If you are not the intended recipient (or have received this e-mail
</span><br>
<span class="quotelev1">&gt; in error) please notify the sender immediately and destroy this
</span><br>
<span class="quotelev1">&gt; e-mail. Any unauthorized copying, disclosure or distribution of the
</span><br>
<span class="quotelev1">&gt; material in this e-mail is strictly forbidden.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7354.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7351.php">Hailperin, Isaac: "[OMPI users] switch between ethernet and infiniband"</a>
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
