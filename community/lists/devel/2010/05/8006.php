<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 31 05:10:48 2010" -->
<!-- isoreceived="20100531091048" -->
<!-- sent="Mon, 31 May 2010 11:10:15 +0200 (CEST)" -->
<!-- isosent="20100531091015" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1005311032320.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0A694DD8-46F0-460B-842B-885CECE3BB0C_at_cisco.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-31 05:10:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my case, the error happens in :
<br>
&nbsp;&nbsp;&nbsp;mca_btl_openib_add_procs()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_size_queues()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adjust_cq()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_create_cq_compat()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_create_cq()
<br>
<p>ibv_create_cq() returns an error which goes up until 
<br>
mca_btl_openib_add_procs(). As george mentionned, the openib btl should be 
<br>
completely ignored, since the bitmask is not taken into account when a 
<br>
error is returned. However -I don't know why- openib get called again and 
<br>
crashes.
<br>
<p>So, yes, there must be a bug in openib.
<br>
<p>And I know this is how you guys designed the bml layer. But I was hoping 
<br>
we could improve the design to improve error handling.
<br>
<p>So, this is my last try to explain my opinion. If you disagree, then we'll 
<br>
fix this on the openib side.
<br>
<p>Ignoring BTL errors bugs me because the current errors are all serious. 
<br>
Our try to continue will therefore always leads to a crash (George, you 
<br>
introduced an error return code, not a real error, hence you managed to 
<br>
continue). This confuses the user as of why we have a problem, because the 
<br>
first serious error will be flooded by further errors or crashes. This is 
<br>
true for openib, but also for sm (I would like to stop on the first 
<br>
&quot;malloc()&quot; that fails).
<br>
<p>We have a two-level system (bitmask + return code) we could use to handle 
<br>
non severe errors (bitmask) and severe errors (return code). Currently, we 
<br>
just use the return code as a way to ignore the bitmask, but we could use 
<br>
the return code as a more serious message and thus improve our error 
<br>
management.
<br>
<p>To sum up, my proposition is to change the meaning of an error return code 
<br>
in add_procs() from &quot;I got a problem, continue without me&quot; which can be 
<br>
perfectly handled with the bitmask alone, to &quot;I got a fatal error, please 
<br>
stop the application&quot;.
<br>
<p>I know this can be seen as an attempt to prevent fixing a bug in openib by 
<br>
changing the design of the BML, but in this case, I think changing the BML 
<br>
design would improve the overall behavior.
<br>
<p>Sylvain
<br>
<p>On Fri, 28 May 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; To that point, where exactly in the openib BTL init / query sequence is 
</span><br>
<span class="quotelev1">&gt; it returning an error for you, Sylvain?  Is it just a matter of tidying 
</span><br>
<span class="quotelev1">&gt; something up properly before returning the error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 28, 2010, at 2:21 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 28, 2010, at 10:03 , Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 28 May 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 28, 2010, at 9:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Understood, and I agreed that the bug should be fixed.  Patches would be welcome.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I sent a patch on the bml layer in my first e-mail. We will apply it on our tree, but as always we're trying to send patches back to open-source (that was not my intent to start such a debate).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only problem with your patch is that it solve something that is not supposed to happen. As a proof of concept I did return errors from the tcp and sm BTLs, and Open MPI gracefully deal with them. So, it is not a matter of aborting we're looking at is a matter of the opebib BTL doing something it is not supposed to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Going through the code it looks like the bitmask doesn't matter, if an error is returned by a BTL we zero the bitmask and continue to another BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example: the SM BTL returns OMPI_ERROR after creating all the internal structures.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 4 --host node01 --mca btl sm,self ./ring
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[22047,1],3]) is on host: node01
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[22047,1],0]) is on host: node01
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now if I allow TCP on the node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 4 --host node01 --mca btl sm,self,tcp ./ring
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (4 procs in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 exiting
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented num: 9
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented num: 8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, Open MPI does the right thing when the BTLs are playing the game.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I should clarify rather than being flip:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. I agree: the bug should be fixed.  Clearly, we should never crash.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. After the bug is fixed, there is clearly a choice: some people may want to use a different transport if a given BTL is unavailable. Others may want to abort.  Once the bug is fixed, this seems like a pretty straightforward thing to add.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you use my patch, you still have no choice. Errors on BTLs lead to an immediate stop instead of trying to continue (and crash).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If someone wants to go further on this, then that's great. If nobody does, I think you should take my patch. Maybe it's not the best solution, but it's still better than the current state.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8005.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
