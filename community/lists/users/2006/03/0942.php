<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 12:07:27 2006" -->
<!-- isoreceived="20060331170727" -->
<!-- sent="Fri, 31 Mar 2006 12:07:12 -0500" -->
<!-- isosent="20060331170712" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General ORTE questions" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5B21E2_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] General ORTE questions" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 12:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0943.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Rolf Vandevaart
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 30, 2006 3:43 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] General ORTE questions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. From what I can tell, there is no way to specify the slots argument
</span><br>
<span class="quotelev1">&gt; with the -host argument.  For example, I cannot do this:
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -host node1:slots=4,node2:slots=4 a.out
</span><br>
<span class="quotelev1">&gt; Just wanted to confirm that.
</span><br>
<p>Right now, I do believe that if you list a host more than once, it bumps
<br>
the slots count.  This is somewhat inelegant, but something like:
<br>
<p>shell$ mpirun -host node1 -host node1 ...
<br>
Same as:
<br>
shell% mpirun -host node1,node1 ...
<br>
<p>Will make node1 have a slot count of 2.  We can certainly change this,
<br>
though -- it wasn't implemented simply because I didn't think of this
<br>
case.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0943.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
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
