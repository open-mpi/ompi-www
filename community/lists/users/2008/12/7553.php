<?
$subject_val = "Re: [OMPI users] ompi-checkpoint is hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 18:35:33 2008" -->
<!-- isoreceived="20081216233533" -->
<!-- sent="Tue, 16 Dec 2008 15:35:27 -0800" -->
<!-- isosent="20081216233527" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint is hanging" -->
<!-- id="FDBD6BCD-574B-48DF-80E8-3757A6F3F995_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="490B3710.7060109_at_cs.tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint is hanging<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-16 18:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7554.php">Ethan Mallove: "[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthias,
<br>
<p>I think that the patch attached to the ticket below should address  
<br>
your issue:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1619">https://svn.open-mpi.org/trac/ompi/ticket/1619</a>
<br>
<p>I was able to reproduce this problem fairly reliably with a particular  
<br>
benchmark, on a particular configuration and very frequent  
<br>
checkpoints. With this patch I was not able to reproduce the problem,  
<br>
so I think this fixes the problem.
<br>
<p>In the process of tracking this bug, I believe that there is a problem  
<br>
with the way the checkpoint/restart coordination component handles  
<br>
MPI_ANY_SOURCE and MPI_ANY_TAG. I'll pursue a fix for these cases, but  
<br>
it will be much more involved than the one currently attached to the  
<br>
ticket.
<br>
<p>Let me know if this patch fixes the problem that you are seeing.
<br>
<p>Thank you for your patience and the bug report,
<br>
Josh
<br>
<p>On Oct 31, 2008, at 9:49 AM, Matthias Hovestadt wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll work on a patch, and let you know when it is ready.  
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately it probably won't be for a couple weeks. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, thanks a lot for letting me know. In three weeks we'll
</span><br>
<span class="quotelev1">&gt; have a booth at ICT
</span><br>
<span class="quotelev1">&gt; (<a href="http://ec.europa.eu/information_society/events/ict/2008">http://ec.europa.eu/information_society/events/ict/2008</a>)
</span><br>
<span class="quotelev1">&gt; where we plan to showcase fault tolerance mechanisms, having
</span><br>
<span class="quotelev1">&gt; OMPI as major checkpointing component. I think I will use the
</span><br>
<span class="quotelev1">&gt; time until ICT for finding a workaround for this issue... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
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
<li><strong>Next message:</strong> <a href="7554.php">Ethan Mallove: "[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7162.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
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
