<?
$subject_val = "Re: [OMPI users] Optimal 3-D Cartesian processor mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 15:36:20 2012" -->
<!-- isoreceived="20120424193620" -->
<!-- sent="Tue, 24 Apr 2012 13:36:13 -0600" -->
<!-- isosent="20120424193613" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal 3-D Cartesian processor mapping" -->
<!-- id="D08368F9-D069-432E-A4A2-63B2E7057830_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1335296034.5406.69.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Optimal 3-D Cartesian processor mapping<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 15:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --display-map to your mpirun cmd line
<br>
<p>On Apr 24, 2012, at 1:33 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I would be interested in such a plugin.  But be advised that I am
</span><br>
<span class="quotelev1">&gt; strictly a fortran programmer, so if it requires any C/C++ talent, I
</span><br>
<span class="quotelev1">&gt; would be in trouble.  So maybe, before jumping into that, I would like
</span><br>
<span class="quotelev1">&gt; to be able to look at what processor/node mapping Open-mpi is actually
</span><br>
<span class="quotelev1">&gt; giving me.  Is there an environmental variable or an MCA option I can
</span><br>
<span class="quotelev1">&gt; add to my 'mpirun' command line that would give that to me?  I am
</span><br>
<span class="quotelev1">&gt; running 1.5.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2012-04-24 at 15:11 -0400, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2012, at 3:01 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is this:  If the cartesian mapping is done so the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spacial dimensions are the 'most rapidly varying' in equivalent 1-D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor mapping, will Open-mpi automatically assign those 2 dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'on-node', and assign the 'ensemble' dimension as the slowest varying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and across nodes?  If not, how can we guarantee this to happen?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sadly, the MPI mapping functions in Open MPI are effectively no-ops -- if you ask for re-ordering, OMPI says &quot;sure!&quot; but then gives you back exactly the same mapping.  :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, the mapping functionality is actually a plugin in Open MPI (in the &quot;topo&quot; framework).  It would not be too difficult to write a plugin for the mapping that you want.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would this be of interest to you?  I'd be happy to talk you through the process of writing such a plugin.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
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
