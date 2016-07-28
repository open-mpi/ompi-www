<?
$subject_val = "Re: [OMPI users] local config files / recursive includes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 10:21:53 2009" -->
<!-- isoreceived="20090508142153" -->
<!-- sent="Fri, 8 May 2009 10:21:47 -0400" -->
<!-- isosent="20090508142147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] local config files / recursive includes" -->
<!-- id="0A3E2239-68C0-4248-AA3C-C0DC63D90DF4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1532528058.5639421241772003806.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] local config files / recursive includes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 10:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9267.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh ?"</a>
<li><strong>In reply to:</strong> <a href="9265.php">Brett Pemberton: "[OMPI users] local config files / recursive includes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Starting in the v1.3 series, we put in slightly better checks about  
<br>
when to issue this warning or not.  It *shouldn't* display the  
<br>
warnings if the OpenFabrics drivers are not loaded.
<br>
<p>Can you verify if your OpenFabrics drivers are loaded on your new, non- 
<br>
IB nodes?
<br>
<p><p>On May 8, 2009, at 4:40 AM, Brett Pemberton wrote:
<br>
<p><span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a cluster with infiniband, and openmpi working happily.
</span><br>
<span class="quotelev1">&gt; We've just added some new nodes, with no ib.  The scheduler has been  
</span><br>
<span class="quotelev1">&gt; told to only schedule jobs onto those nodes, which don't span  
</span><br>
<span class="quotelev1">&gt; nodes.  Easy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Except that openmpi warns the user that no openib was found, and  
</span><br>
<span class="quotelev1">&gt; it's dropping back to another transport (possibly at a penalty).
</span><br>
<span class="quotelev1">&gt; This is no problem to me, but it worries our users for no reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My plan was to put some local openmpi mca config files on those  
</span><br>
<span class="quotelev1">&gt; nodes that only allow sm,self,tcp which (I'd hope) would eliminate  
</span><br>
<span class="quotelev1">&gt; the warning that it can't use openib.  However our openmpi installs  
</span><br>
<span class="quotelev1">&gt; are to a global fs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to put a line in the global $SYSCONFDIR/etc/openmpi- 
</span><br>
<span class="quotelev1">&gt; mca-params.conf to tell it to also include a subsequent /etc/openmpi- 
</span><br>
<span class="quotelev1">&gt; mca-params.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any better ways of handling this would also be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      / Brett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brett Pemberton - VPAC Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9267.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh ?"</a>
<li><strong>In reply to:</strong> <a href="9265.php">Brett Pemberton: "[OMPI users] local config files / recursive includes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
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
