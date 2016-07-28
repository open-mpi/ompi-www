<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 00:55:56 2009" -->
<!-- isoreceived="20090723045556" -->
<!-- sent="Thu, 23 Jul 2009 10:25:52 +0530" -->
<!-- isosent="20090723045552" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="fa4af8200907222155w6791e306uca47ac91f5722424_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC17109D-77A8-40F7-95B1-5E4661067448_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network connection check<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 00:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10047.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10045.php">Gus Correa: "[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10039.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you asking to find out this information before issuing &quot;mpirun&quot;?  Open
</span><br>
<span class="quotelev1">&gt; MPI does assume that the nodes you are trying to use are reachable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;NO,
<br>
<p>Scenario is a pair of processes are running one in &quot;master&quot; node say
<br>
&quot;masterprocess&quot; and one in &quot;slave&quot; node say &quot;slaveprocess&quot;. When
<br>
&quot;masterprocess&quot; needs service of slave process, it sends message to
<br>
&quot;slaveprocess&quot; and &quot;slaveprocess&quot; serves its request. In case of Network
<br>
failure(by any means) &quot;masterprocess&quot; will keep trying to send message to
<br>
&quot;slaveprocess&quot; without knowing that it is not reachable. So how
<br>
&quot;masterprocess&quot; should finds out that &quot;slaveprocess&quot; can't be reached and
<br>
leave attempting to send messages till Connection is not up.
<br>
<p><p>Thanks &amp; Regards,
<br>
<pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10047.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10045.php">Gus Correa: "[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10039.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
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
