<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 19:37:59 2007" -->
<!-- isoreceived="20071009233759" -->
<!-- sent="Tue, 9 Oct 2007 08:06:30 -0600" -->
<!-- isosent="20071009140630" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in runing MPI job through XGrid" -->
<!-- id="485EEACF-364E-483D-B856-314E6454D0F7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="11a712d60710041406s5f5997dfy9bc236b813efb3a1_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 10:06:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2415.php">Jeff Squyres: "[OMPI devel] DDT for v1.2 branch"</a>
<li><strong>Previous message:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>In reply to:</strong> <a href="2381.php">Jinhui Qin: "[OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2417.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2417.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 4, 2007, at 3:06 PM, Jinhui Qin wrote:
<br>
<span class="quotelev1">&gt; sib:sharcnet$ mpirun -n 3 ~/openMPI_stuff/Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.2 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is very odd -- it looks like two of the processes don't think  
<br>
they can talk to each other.  Can you try running with:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -n 3 -mca btl tcp,self &lt;app&gt;
<br>
<p>If that fails, then the next piece of information that would be  
<br>
useful is the IP addresses and netmasks for all the nodes in your  
<br>
cluster.  We have some logic in our TCP communication system that can  
<br>
cause some interesting results for some network topologies.
<br>
<p>Just to verify it's not an XGrid problem, you might want to try  
<br>
running with a hostfile -- I think you'll find that the results are  
<br>
the same, but it's always good to verify.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2415.php">Jeff Squyres: "[OMPI devel] DDT for v1.2 branch"</a>
<li><strong>Previous message:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>In reply to:</strong> <a href="2381.php">Jinhui Qin: "[OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2417.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2417.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
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
