<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 19 14:12:14 2006" -->
<!-- isoreceived="20061219191214" -->
<!-- sent="Tue, 19 Dec 2006 06:36:01 -0700" -->
<!-- isosent="20061219133601" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] crashed openmpi job fails to clean up ...." -->
<!-- id="C1AD38D1.6822%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0612190950370.23414_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-19 08:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2380.php">Brock Palen: "[OMPI users] segv at runtime with ifort"</a>
<li><strong>Previous message:</strong> <a href="2378.php">Lydia Heck: "[OMPI users] crashed openmpi job fails to clean up ...."</a>
<li><strong>In reply to:</strong> <a href="2378.php">Lydia Heck: "[OMPI users] crashed openmpi job fails to clean up ...."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lydia
<br>
<p>I would like to say we clean up perfectly, but.... :-(
<br>
<p>The system does try its best. I'm a little surprised here since we usually
<br>
clean up when an application process fails. Our only known problems are when
<br>
one or more of the orteds fail, usually due to a node rebooting or failing.
<br>
We hope to plug that &quot;hole&quot; in the spring.
<br>
<p>You might try updating to a later version (we are at r12890+ now). I don't
<br>
think that will totally solve the problem, but it might help.
<br>
<p>We are working on an &quot;orteclean&quot; program that people can use when the system
<br>
doesn't clean up properly - it will go through and kill any remaining orteds
<br>
and cleanup those session directories. Hopefully, we will have something out
<br>
in that regard in Jan.
<br>
<p>Meantime, I'll take a look again at the scenario you described and see what
<br>
I can do.
<br>
<p>Thanks for your patience!
<br>
Ralph
<br>
<p><p>On 12/19/06 2:53 AM, &quot;Lydia Heck&quot; &lt;lydia.heck_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A job which crashes with an floating point underflow (or any IEEE floating
</span><br>
<span class="quotelev1">&gt; point
</span><br>
<span class="quotelev1">&gt; exception) fails to clean up after itself using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r12695 ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nodes with copies of slaves are sitting there ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also noticed that orted are left behind on other crashed jobs ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I have to expect this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
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
<li><strong>Next message:</strong> <a href="2380.php">Brock Palen: "[OMPI users] segv at runtime with ifort"</a>
<li><strong>Previous message:</strong> <a href="2378.php">Lydia Heck: "[OMPI users] crashed openmpi job fails to clean up ...."</a>
<li><strong>In reply to:</strong> <a href="2378.php">Lydia Heck: "[OMPI users] crashed openmpi job fails to clean up ...."</a>
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
