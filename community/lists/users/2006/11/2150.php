<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 23:36:05 2006" -->
<!-- isoreceived="20061108043605" -->
<!-- sent="Tue, 7 Nov 2006 23:35:44 -0500" -->
<!-- isosent="20061108043544" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="62C91D25-9371-4F7B-A47D-58846E4AEC8B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1c16cdf90611072007x27373b0bjbf50ba2597f01f68_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-07 23:35:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The quick answers are yes and nothing. Open MPI seamlessly support  
<br>
shared memory communications when we detect that 2 processes are on  
<br>
the same node. In fact Open MPI can use different communication  
<br>
methods (read networks) between the processes of the same application.
<br>
<p>Please read our FAQ for more information on how to specify which  
<br>
network you want to be used and which not.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 7, 2006, at 11:07 PM, Chevchenkovic Chevchenkovic wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    Thanks for the reply,
</span><br>
<span class="quotelev1">&gt; A few Additional questions,
</span><br>
<span class="quotelev1">&gt; 1. Does OpenMPI has the optimisations required to ensure that when  
</span><br>
<span class="quotelev1">&gt; send/recv is called between 2 ranks on the same node, the shared  
</span><br>
<span class="quotelev1">&gt; memory kind of methods should be used?
</span><br>
<span class="quotelev1">&gt; 2.  If a programmer wants to implement such a logic(optimisations  
</span><br>
<span class="quotelev1">&gt; for local send/recv) , what part of the code should he modify from  
</span><br>
<span class="quotelev1">&gt; the openMPI stack ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     regards,
</span><br>
<span class="quotelev1">&gt; -Chev
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
<li><strong>Next message:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
