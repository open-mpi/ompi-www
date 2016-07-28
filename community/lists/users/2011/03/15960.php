<?
$subject_val = "Re: [OMPI users] 1.5.3 and SGE integration?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 09:39:43 2011" -->
<!-- isoreceived="20110322133943" -->
<!-- sent="Tue, 22 Mar 2011 07:39:34 -0600" -->
<!-- isosent="20110322133934" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.5.3 and SGE integration?" -->
<!-- id="2CEDAFB7-BBE0-41DE-867B-AA7837C16E70_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87d3lj1hyx.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.5.3 and SGE integration?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 09:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<li><strong>Previous message:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15957.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2011, at 6:02 AM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should rshd be mentioned in the release notes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just starting the discussion on the best solution going forward. I'd
</span><br>
<span class="quotelev2">&gt;&gt; rather not have to tell SGE users to add this to their cmd line. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure.  I just thought a new component would normally be mentioned in the
</span><br>
<span class="quotelev1">&gt; notes.
</span><br>
<p>You mean the rshd component? Probably should have been, but slipped thru the cracks. All that component does is allow the direct rsh/ssh launch of MPI apps instead of using the OMPI daemon. Only a few special systems use it because there is no way to know that a process died (since no daemon is monitoring it), and thus no way to cleanup if something goes wrong.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<li><strong>Previous message:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15957.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
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
