<?
$subject_val = "Re: [OMPI users] Optimal 3-D Cartesian processor mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 15:54:27 2012" -->
<!-- isoreceived="20120424195427" -->
<!-- sent="Tue, 24 Apr 2012 12:54:38 -0700" -->
<!-- isosent="20120424195438" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal 3-D Cartesian processor mapping" -->
<!-- id="1335297278.5406.71.camel_at_cedar.reachone.com" -->
<!-- inreplyto="D08368F9-D069-432E-A4A2-63B2E7057830_at_open-mpi.org" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 15:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19105.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19106.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do.  My machine is currently quite busy, so it will be a while
<br>
before I get answers.  Stay tuned.
<br>
<p>T. Rosmond
<br>
<p><p>On Tue, 2012-04-24 at 13:36 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Add --display-map to your mpirun cmd line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2012, at 1:33 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I would be interested in such a plugin.  But be advised that I am
</span><br>
<span class="quotelev2">&gt; &gt; strictly a fortran programmer, so if it requires any C/C++ talent, I
</span><br>
<span class="quotelev2">&gt; &gt; would be in trouble.  So maybe, before jumping into that, I would like
</span><br>
<span class="quotelev2">&gt; &gt; to be able to look at what processor/node mapping Open-mpi is actually
</span><br>
<span class="quotelev2">&gt; &gt; giving me.  Is there an environmental variable or an MCA option I can
</span><br>
<span class="quotelev2">&gt; &gt; add to my 'mpirun' command line that would give that to me?  I am
</span><br>
<span class="quotelev2">&gt; &gt; running 1.5.4.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; T. Rosmond
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2012-04-24 at 15:11 -0400, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 24, 2012, at 3:01 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My question is this:  If the cartesian mapping is done so the two
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; spacial dimensions are the 'most rapidly varying' in equivalent 1-D
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; processor mapping, will Open-mpi automatically assign those 2 dimensions
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 'on-node', and assign the 'ensemble' dimension as the slowest varying
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and across nodes?  If not, how can we guarantee this to happen?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sadly, the MPI mapping functions in Open MPI are effectively no-ops -- if you ask for re-ordering, OMPI says &quot;sure!&quot; but then gives you back exactly the same mapping.  :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That being said, the mapping functionality is actually a plugin in Open MPI (in the &quot;topo&quot; framework).  It would not be too difficult to write a plugin for the mapping that you want.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would this be of interest to you?  I'd be happy to talk you through the process of writing such a plugin.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19105.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19106.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
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
