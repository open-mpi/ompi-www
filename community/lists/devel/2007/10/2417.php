<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 10:16:30 2007" -->
<!-- isoreceived="20071010141630" -->
<!-- sent="Wed, 10 Oct 2007 10:16:26 -0400" -->
<!-- isosent="20071010141626" -->
<!-- name="Jinhui Qin" -->
<!-- email="jhqin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in runing MPI job through XGrid" -->
<!-- id="11a712d60710100716ue59b46dt6e99a6f0fb92ab8e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="485EEACF-364E-483D-B856-314E6454D0F7_at_open-mpi.org" -->
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
<strong>From:</strong> Jinhui Qin (<em>jhqin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 10:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2418.php">Torje Henriksen: "[OMPI devel] Create a new component (for btl)"</a>
<li><strong>Previous message:</strong> <a href="2416.php">Terry Dontje: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<li><strong>In reply to:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I found the problem. It looks like xgrid need to do more work on fault
<br>
tolerance. It seems that xgrid controller distributed jobs to each available
<br>
agent only in certain fixed order, if one of the agents has problem in
<br>
communicating with the controller, all jobs failed, even when there are
<br>
still more available agents.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In my case, the third node that the controller always contacted is
<br>
node6, which has problem to reach it (I found the problem when I try to do
<br>
remote desktop to check each node, I could not reach that node properly, the
<br>
rest of other nodes are fine). After I turn of the agent on node6, the
<br>
previous problem was solved, everything works fine.
<br>
<p>Thank you .
<br>
Jinhui
<br>
<p><p>On 10/9/07, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2007, at 3:06 PM, Jinhui Qin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; sib:sharcnet$ mpirun -n 3 ~/openMPI_stuff/Hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Process 0.1.1 is unable to reach 0.1.2 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt; &gt; usable components.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is very odd -- it looks like two of the processes don't think
</span><br>
<span class="quotelev1">&gt; they can talk to each other.  Can you try running with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -n 3 -mca btl tcp,self &lt;app&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that fails, then the next piece of information that would be
</span><br>
<span class="quotelev1">&gt; useful is the IP addresses and netmasks for all the nodes in your
</span><br>
<span class="quotelev1">&gt; cluster.  We have some logic in our TCP communication system that can
</span><br>
<span class="quotelev1">&gt; cause some interesting results for some network topologies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to verify it's not an XGrid problem, you might want to try
</span><br>
<span class="quotelev1">&gt; running with a hostfile -- I think you'll find that the results are
</span><br>
<span class="quotelev1">&gt; the same, but it's always good to verify.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2417/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2418.php">Torje Henriksen: "[OMPI devel] Create a new component (for btl)"</a>
<li><strong>Previous message:</strong> <a href="2416.php">Terry Dontje: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<li><strong>In reply to:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
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
