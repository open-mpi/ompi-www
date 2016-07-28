<?
$subject_val = "Re: [OMPI devel] problem when binding to socket on a single socket node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 14:18:51 2010" -->
<!-- isoreceived="20100412181851" -->
<!-- sent="Mon, 12 Apr 2010 12:18:41 -0600" -->
<!-- isosent="20100412181841" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem when binding to socket on a single socket node" -->
<!-- id="23E44ADD-E5DA-4E6B-BCEB-304484C0D961_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BC36267.7040904_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem when binding to socket on a single socket node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-12 14:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7742.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7740.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7740.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me put this succinctly - I DO NOT CARE!
<br>
<p>I wrote this stuff, warning you folks from Sun in particular that you were opening a can of worms. As I said then, I'll do it once, but the vast range of corner cases will make this a nightmare that I will NOT continue to chase.
<br>
<p>Welcome to YOUR nightmare. :-)
<br>
<p><p>On Apr 12, 2010, at 12:11 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If someone tells us -bind-to-socket, but there is only one socket, then we really cannot bind them to anything. Any check by their code would reveal that they had not, in fact, been bound - raising questions as to whether or not OMPI is performing the request. Our operating standard has been to error out if the user specifies something we cannot do to avoid that kind of confusion. This is what generated the code in the system today.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now I can see an argument that -bind-to-socket with one socket maybe shouldn't generate an error, but that decision then has to get reflected in other code areas as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But first we need to resolve the question: should this scenario return an error or not?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, so my bind-to-board example didn't pass muster.  How about this one?  This is a node with 8 cores: 0-7:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -H mynode -n 1 -slot-list 0-7 -report-bindings hostname
</span><br>
<span class="quotelev1">&gt; [mynode:27978] [[17644,0],0] odls:default:fork binding child [[17644,1],0] to slot_list 0-7
</span><br>
<span class="quotelev1">&gt; mynode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I bind to all cores.  mpirun does not complain.  Indeed, it reports that I'm bound to all cores.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7742.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7740.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7740.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
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
