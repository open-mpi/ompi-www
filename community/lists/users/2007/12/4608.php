<?
$subject_val = "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 09:26:31 2007" -->
<!-- isoreceived="20071206142631" -->
<!-- sent="Thu, 06 Dec 2007 07:26:15 -0700" -->
<!-- isosent="20071206142615" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)" -->
<!-- id="C37D5497.B815%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2b5e0c120712050747u576d4cb0s81fc1bbc8fad8507_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 09:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/5/07 8:47 AM, &quot;Brian Dobbins&quot; &lt;bdobbins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe the problem is that you are only applying the MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameters to the first app context instead of all of them:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thank you very much.. applying the parameters with -gmca works fine with the
</span><br>
<span class="quotelev1">&gt; test case (and I'll try the actual one soon).   However and this is minor
</span><br>
<span class="quotelev1">&gt; since it works with method (1),...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; There are two main ways of doing this:
</span><br>
<span class="quotelev2">&gt;&gt;  2) Alternatively you can duplicate the MCA parameters for each app context:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   .. This actually doesn't work.  I had thought of that and tried it, and I
</span><br>
<span class="quotelev1">&gt; still get the same connection problems.  I just rechecked this again to be
</span><br>
<span class="quotelev1">&gt; sure. 
</span><br>
<p>That is correct - the root problem here is that the command line MCA params
<br>
are not propagated to the remote daemons when we launch in 1.2. So launch of
<br>
the remote daemons fails as they are not looking at the correct interface to
<br>
link themselves into the system.
<br>
<p>The apps themselves would have launched okay given the duplicate MCA params
<br>
as we store the params for each app_context and pass them along when the
<br>
daemon spawns them - you just can't get them launched because the daemons
<br>
fail first.
<br>
<p>The aggregated MCA params flow through a different mechanism altogether,
<br>
which is why they work.
<br>
<p>We have fixed this on our development trunk so the command line params get
<br>
passed - should work fine in future releases.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Again, many thanks for the help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   With best wishes,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale University HPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<li><strong>Next message:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4607.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
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
