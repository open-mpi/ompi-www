<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 31 10:27:15 2010" -->
<!-- isoreceived="20100531142715" -->
<!-- sent="Mon, 31 May 2010 08:27:04 -0600" -->
<!-- isosent="20100531142704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="6D97031E-0C1A-4485-BC10-D891D3EC3487_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1005311032320.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-31 10:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8006.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8006.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just curious - your proposed fix sounds exactly like what was done in the OPAL SOS work. Are you therefore proposing to use SOS to provide a more informational status return?
<br>
<p>If so, then it would seem the only real dispute here is: is there -any- condition whereby a given BTL should have the authority to tell OMPI to terminate an application, even if other BTLs could still function?
<br>
<p>I guess that is what is unclear to me. How would an error in the IB network translate into &quot;you must terminate the application, even if you could run just fine over the TCP transport&quot;?
<br>
<p>I understand that the current code may not yet support that operation, but I do believe that was the intent of the design. So only the case where -all- BTLs say &quot;I can't do it&quot; would result in termination. Rather than change that design, I believe the intent is to work towards completing that implementation. In the interim, it would seem most sensible to me that we add an MCA param that specifies the termination behavior (i.e., attempt to continue or terminate on first fatal BTL error).
<br>
<p>Could you perhaps provide an example where the IB network should dictate that the application must terminate, even if other BTLs could function?
<br>
<p><p>On May 31, 2010, at 3:10 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; In my case, the error happens in :
</span><br>
<span class="quotelev1">&gt;  mca_btl_openib_add_procs()
</span><br>
<span class="quotelev1">&gt;    mca_btl_openib_size_queues()
</span><br>
<span class="quotelev1">&gt;      adjust_cq()
</span><br>
<span class="quotelev1">&gt;        ibv_create_cq_compat()
</span><br>
<span class="quotelev1">&gt;          ibv_create_cq()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ibv_create_cq() returns an error which goes up until mca_btl_openib_add_procs(). As george mentionned, the openib btl should be completely ignored, since the bitmask is not taken into account when a error is returned. However -I don't know why- openib get called again and crashes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, yes, there must be a bug in openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I know this is how you guys designed the bml layer. But I was hoping we could improve the design to improve error handling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, this is my last try to explain my opinion. If you disagree, then we'll fix this on the openib side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ignoring BTL errors bugs me because the current errors are all serious. Our try to continue will therefore always leads to a crash (George, you introduced an error return code, not a real error, hence you managed to continue). This confuses the user as of why we have a problem, because the first serious error will be flooded by further errors or crashes. This is true for openib, but also for sm (I would like to stop on the first &quot;malloc()&quot; that fails).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a two-level system (bitmask + return code) we could use to handle non severe errors (bitmask) and severe errors (return code). Currently, we just use the return code as a way to ignore the bitmask, but we could use the return code as a more serious message and thus improve our error management.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To sum up, my proposition is to change the meaning of an error return code in add_procs() from &quot;I got a problem, continue without me&quot; which can be perfectly handled with the bitmask alone, to &quot;I got a fatal error, please stop the application&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know this can be seen as an attempt to prevent fixing a bug in openib by changing the design of the BML, but in this case, I think changing the BML design would improve the overall behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 28 May 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To that point, where exactly in the openib BTL init / query sequence is it returning an error for you, Sylvain?  Is it just a matter of tidying something up properly before returning the error?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 28, 2010, at 2:21 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 28, 2010, at 10:03 , Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, 28 May 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 28, 2010, at 9:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Understood, and I agreed that the bug should be fixed.  Patches would be welcome.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I sent a patch on the bml layer in my first e-mail. We will apply it on our tree, but as always we're trying to send patches back to open-source (that was not my intent to start such a debate).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only problem with your patch is that it solve something that is not supposed to happen. As a proof of concept I did return errors from the tcp and sm BTLs, and Open MPI gracefully deal with them. So, it is not a matter of aborting we're looking at is a matter of the opebib BTL doing something it is not supposed to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Going through the code it looks like the bitmask doesn't matter, if an error is returned by a BTL we zero the bitmask and continue to another BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Example: the SM BTL returns OMPI_ERROR after creating all the internal structures.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 4 --host node01 --mca btl sm,self ./ring
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process 1 ([[22047,1],3]) is on host: node01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process 2 ([[22047,1],0]) is on host: node01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  BTLs attempted: self sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now if I allow TCP on the node:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 4 --host node01 --mca btl sm,self,tcp ./ring
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (4 procs in ring)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented num: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented num: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, Open MPI does the right thing when the BTLs are playing the game.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I should clarify rather than being flip:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. I agree: the bug should be fixed.  Clearly, we should never crash.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. After the bug is fixed, there is clearly a choice: some people may want to use a different transport if a given BTL is unavailable. Others may want to abort.  Once the bug is fixed, this seems like a pretty straightforward thing to add.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you use my patch, you still have no choice. Errors on BTLs lead to an immediate stop instead of trying to continue (and crash).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If someone wants to go further on this, then that's great. If nobody does, I think you should take my patch. Maybe it's not the best solution, but it's still better than the current state.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8008.php">Samuel K. Gutierrez: "[OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8006.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8006.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
