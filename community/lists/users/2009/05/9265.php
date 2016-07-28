<?
$subject_val = "[OMPI users] local config files / recursive includes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 04:40:20 2009" -->
<!-- isoreceived="20090508084020" -->
<!-- sent="Fri, 8 May 2009 18:40:03 +1000 (EST)" -->
<!-- isosent="20090508084003" -->
<!-- name="Brett Pemberton" -->
<!-- email="brett_at_[hidden]" -->
<!-- subject="[OMPI users] local config files / recursive includes" -->
<!-- id="1532528058.5639421241772003806.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1247735938.5639391241771831319.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> [OMPI users] local config files / recursive includes<br>
<strong>From:</strong> Brett Pemberton (<em>brett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 04:40:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9266.php">Griffa, Michele: "[OMPI users] mpirun/exec requires ssh ?"</a>
<li><strong>Previous message:</strong> <a href="9264.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9268.php">Jeff Squyres: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>Reply:</strong> <a href="9268.php">Jeff Squyres: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>Maybe reply:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>We have a cluster with infiniband, and openmpi working happily.
<br>
We've just added some new nodes, with no ib.  The scheduler has been told to only schedule jobs onto those nodes, which don't span nodes.  Easy.
<br>
<p>Except that openmpi warns the user that no openib was found, and it's dropping back to another transport (possibly at a penalty).
<br>
This is no problem to me, but it worries our users for no reason.
<br>
<p>My plan was to put some local openmpi mca config files on those nodes that only allow sm,self,tcp which (I'd hope) would eliminate the warning that it can't use openib.  However our openmpi installs are to a global fs.
<br>
<p>Is it possible to put a line in the global $SYSCONFDIR/etc/openmpi-mca-params.conf to tell it to also include a subsequent /etc/openmpi-mca-params.conf
<br>
<p>Any better ways of handling this would also be appreciated.
<br>
<p>cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Brett
<br>
<p><pre>
-- 
Brett Pemberton - VPAC Senior Systems Administrator
<a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9266.php">Griffa, Michele: "[OMPI users] mpirun/exec requires ssh ?"</a>
<li><strong>Previous message:</strong> <a href="9264.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9268.php">Jeff Squyres: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>Reply:</strong> <a href="9268.php">Jeff Squyres: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>Maybe reply:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
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
