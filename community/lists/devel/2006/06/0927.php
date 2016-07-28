<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 09:39:08 2006" -->
<!-- isoreceived="20060605133908" -->
<!-- sent="Mon, 5 Jun 2006 09:39:06 -0400 (EDT)" -->
<!-- isosent="20060605133906" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="49338.128.165.148.155.1149514746.squirrel_at_www.osl.iu.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20060506024635.GN10323_at_TopQuark.net" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 09:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also noticed another bug in the scheduler:
</span><br>
<span class="quotelev1">&gt; hostfile:
</span><br>
<span class="quotelev1">&gt;  A slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;  B slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; 'mpirun -np 5' quits with an over-subscription error
</span><br>
<span class="quotelev1">&gt; 'mpirun -np 3 --host B' hangs and just chews up CPU cycles forever
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Just as a quick followup on the 'hang' seen above. This was filed as
<br>
ticket #27 in our bug tracker:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/27">https://svn.open-mpi.org/trac/ompi/ticket/27</a>
<br>
And was fixed in subversion (trunk r10131) and moved to the v1.1 and v1.0
<br>
branches. The current tarballs on the website should have this fix.
<br>
<p>Thanks for finding that bug.
<br>
<p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
