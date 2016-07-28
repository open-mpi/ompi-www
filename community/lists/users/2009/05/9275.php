<?
$subject_val = "Re: [OMPI users] local config files / recursive includes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  9 00:54:55 2009" -->
<!-- isoreceived="20090509045455" -->
<!-- sent="Sat, 9 May 2009 14:54:45 +1000 (EST)" -->
<!-- isosent="20090509045445" -->
<!-- name="Brett Pemberton" -->
<!-- email="brett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] local config files / recursive includes" -->
<!-- id="14847766.5681751241844885439.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="115685855.5681731241844563721.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Brett Pemberton (<em>brett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-09 00:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Previous message:</strong> <a href="9274.php">Allan Menezes: "[OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Maybe in reply to:</strong> <a href="9265.php">Brett Pemberton: "[OMPI users] local config files / recursive includes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Didn't even think of that!
<br>
<p>Yes, when I unload the pointless ib kernel drivers on the non-ib nodes, it quiets the warnings.
<br>
<p>thanks for that,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Brett
<br>
<p><p>----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Starting in the v1.3 series, we put in slightly better checks about  
</span><br>
<span class="quotelev1">&gt; when to issue this warning or not.  It *shouldn't* display the  
</span><br>
<span class="quotelev1">&gt; warnings if the OpenFabrics drivers are not loaded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you verify if your OpenFabrics drivers are loaded on your new,
</span><br>
<span class="quotelev1">&gt; non- 
</span><br>
<span class="quotelev1">&gt; IB nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 8, 2009, at 4:40 AM, Brett Pemberton wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hey,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have a cluster with infiniband, and openmpi working happily.
</span><br>
<span class="quotelev2">&gt; &gt; We've just added some new nodes, with no ib.  The scheduler has been
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; told to only schedule jobs onto those nodes, which don't span  
</span><br>
<span class="quotelev2">&gt; &gt; nodes.  Easy.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Except that openmpi warns the user that no openib was found, and  
</span><br>
<span class="quotelev2">&gt; &gt; it's dropping back to another transport (possibly at a penalty).
</span><br>
<span class="quotelev2">&gt; &gt; This is no problem to me, but it worries our users for no reason.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My plan was to put some local openmpi mca config files on those  
</span><br>
<span class="quotelev2">&gt; &gt; nodes that only allow sm,self,tcp which (I'd hope) would eliminate 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; the warning that it can't use openib.  However our openmpi installs 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; are to a global fs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to put a line in the global $SYSCONFDIR/etc/openmpi-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mca-params.conf to tell it to also include a subsequent
</span><br>
<span class="quotelev1">&gt; /etc/openmpi- 
</span><br>
<span class="quotelev2">&gt; &gt; mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any better ways of handling this would also be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      / Brett
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Brett Pemberton - VPAC Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
-- 
Brett Pemberton - VPAC Senior Systems Administrator
<a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Previous message:</strong> <a href="9274.php">Allan Menezes: "[OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Maybe in reply to:</strong> <a href="9265.php">Brett Pemberton: "[OMPI users] local config files / recursive includes"</a>
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
