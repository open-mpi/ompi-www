<?
$subject_val = "Re: [OMPI users] Automatic checkpoint/restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 11:51:46 2009" -->
<!-- isoreceived="20090421155146" -->
<!-- sent="Tue, 21 Apr 2009 11:54:28 -0400" -->
<!-- isosent="20090421155428" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Automatic checkpoint/restart in OpenMPI" -->
<!-- id="D2949990-CEDC-4D90-9737-E62645CAA0E8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fc97b14811e.49ecdb0f_at_costarricense.cr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Automatic checkpoint/restart in OpenMPI<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 11:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="9008.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8992.php">ESTEBAN MENESES ROJAS: "[OMPI users] Automatic checkpoint/restart in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2009, at 9:29 PM, ESTEBAN MENESES ROJAS wrote:
<br>
<p><span class="quotelev1">&gt;    Hello.
</span><br>
<span class="quotelev1">&gt;    Is there any way to automatically checkpoint/restart an  
</span><br>
<span class="quotelev1">&gt; application in OpenMPI? This is, checkpointing the application  
</span><br>
<span class="quotelev1">&gt; without using the command ompi-checkpoint, perhaps via a function  
</span><br>
<span class="quotelev1">&gt; call in the application's code itself. The same with the restart  
</span><br>
<span class="quotelev1">&gt; after a failure.
</span><br>
<p>Currently Open MPI only supports checkpointing/restart applications  
<br>
using the ompi-checkpoint command and restarting with the ompi-restart  
<br>
command. We do not expose a function call for the application to start  
<br>
the checkpoint operation internally.
<br>
<p>On a temporary branch, I developed an interface as part of a proposal  
<br>
to the MPI Forum. It works for a coordinated checkpoint (all processes  
<br>
must call the function similar to barrier). In its current state, it  
<br>
is not ready to come to the trunk just yet since there is some support  
<br>
structure missing that I am still working on.
<br>
<p>This branch does not expose an interface to restart a process. What  
<br>
that interface should look like quickly becomes a much more difficult  
<br>
question. If you have ideas on the interface signature and semantics I  
<br>
would be interested in hearing about them.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    On a related note, what is the default behavior of an OpenMPI  
</span><br>
<span class="quotelev1">&gt; application after one process fails? Does the runtime shut down the  
</span><br>
<span class="quotelev1">&gt; whole application?
</span><br>
<p>If a process fails Open MPI, by default, will terminate the whole  
<br>
application. Work is in progress by a couple of the core development  
<br>
teams to provide alternative failure modes, but I do not think any of  
<br>
this work has made it to the development trunk yet.
<br>
<p>Best,
<br>
Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks. _______________________________________________
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
<li><strong>Next message:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="9008.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8992.php">ESTEBAN MENESES ROJAS: "[OMPI users] Automatic checkpoint/restart in OpenMPI"</a>
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
