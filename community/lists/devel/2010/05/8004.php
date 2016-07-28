<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 14:21:06 2010" -->
<!-- isoreceived="20100528182106" -->
<!-- sent="Fri, 28 May 2010 14:21:01 -0400" -->
<!-- isosent="20100528182101" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="27EF8AC1-A122-418A-A088-E7BCB4F976CC_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1005281556080.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 14:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2010, at 10:03 , Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 28 May 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 28, 2010, at 9:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Understood, and I agreed that the bug should be fixed.  Patches would be welcome.  :-)
</span><br>
<span class="quotelev1">&gt; I sent a patch on the bml layer in my first e-mail. We will apply it on our tree, but as always we're trying to send patches back to open-source (that was not my intent to start such a debate).
</span><br>
<p>The only problem with your patch is that it solve something that is not supposed to happen. As a proof of concept I did return errors from the tcp and sm BTLs, and Open MPI gracefully deal with them. So, it is not a matter of aborting we're looking at is a matter of the opebib BTL doing something it is not supposed to do.
<br>
<p>Going through the code it looks like the bitmask doesn't matter, if an error is returned by a BTL we zero the bitmask and continue to another BTL. 
<br>
<p>Example: the SM BTL returns OMPI_ERROR after creating all the internal structures.
<br>
<p><span class="quotelev2">&gt;&gt; mpirun -np 4 --host node01 --mca btl sm,self ./ring
</span><br>
<p>--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[22047,1],3]) is on host: node01
<br>
&nbsp;&nbsp;Process 2 ([[22047,1],0]) is on host: node01
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
<p>Now if I allow TCP on the node:
<br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 --host node01 --mca btl sm,self,tcp ./ring
</span><br>
<p>Process 0 sending 10 to 1, tag 201 (4 procs in ring)
<br>
Process 0 sent to 1
<br>
Process 3 exiting
<br>
Process 0 decremented num: 9
<br>
Process 0 decremented num: 8
<br>
<p>Thus, Open MPI does the right thing when the BTLs are playing the game.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should clarify rather than being flip:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I agree: the bug should be fixed.  Clearly, we should never crash.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. After the bug is fixed, there is clearly a choice: some people may want to use a different transport if a given BTL is unavailable. Others may want to abort.  Once the bug is fixed, this seems like a pretty straightforward thing to add.
</span><br>
<span class="quotelev1">&gt; If you use my patch, you still have no choice. Errors on BTLs lead to an immediate stop instead of trying to continue (and crash).
</span><br>
<span class="quotelev1">&gt; If someone wants to go further on this, then that's great. If nobody does, I think you should take my patch. Maybe it's not the best solution, but it's still better than the current state.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
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
<li><strong>Next message:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
