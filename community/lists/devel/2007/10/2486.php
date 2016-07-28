<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 09:40:51 2007" -->
<!-- isoreceived="20071023134051" -->
<!-- sent="Tue, 23 Oct 2007 09:40:45 -0400" -->
<!-- isosent="20071023134045" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="C343721D.82F%gshipman_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071011152632.GD3354_at_minantech.com" -->
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
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 09:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2485.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So this problem goes WAY back..
<br>
<p>The problem here is that the PML marks MPI completion just prior to calling
<br>
btl_send and then returns to the user. This wouldn't be a problem if the BTL
<br>
then did something, but in the case of OpenIB this fragment may not actually
<br>
be on the wire (the joys of user level flow control).
<br>
<p>One solution that we proposed was to allow btl_send to return either
<br>
OMPI_SUCCESS or OMPI_NOT_ON_WIRE. OMPI_NOT_ON_WIRE would allow the PML to
<br>
not mark MPI completion of the fragment and then MPI_WAITALL and others will
<br>
do there job properly.
<br>
<p>- Galen 
<br>
<p><p><p>On 10/11/07 11:26 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Oct 05, 2007 at 09:43:44AM +0200, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; David --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gleb and I just actively re-looked at this problem yesterday; we
</span><br>
<span class="quotelev2">&gt;&gt; think it's related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/">https://svn.open-mpi.org/trac/ompi/ticket/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 1015.  We previously thought this ticket was a different problem, but
</span><br>
<span class="quotelev2">&gt;&gt; our analysis yesterday shows that it could be a real problem in the
</span><br>
<span class="quotelev2">&gt;&gt; openib BTL or ob1 PML (kinda think it's the openib btl because it
</span><br>
<span class="quotelev2">&gt;&gt; doesn't seem to happen on other networks, but who knows...).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gleb is investigating.
</span><br>
<span class="quotelev1">&gt; Here is the result of the investigation. The problem is different than
</span><br>
<span class="quotelev1">&gt; #1015 ticket. What we have here is one rank calls isend() of a small
</span><br>
<span class="quotelev1">&gt; message and wait_all() in a loop and another one calls irecv(). The
</span><br>
<span class="quotelev1">&gt; problem is that isend() usually doesn't call opal_progress() anywhere
</span><br>
<span class="quotelev1">&gt; and wait_all() doesn't call progress if all requests are already completed
</span><br>
<span class="quotelev1">&gt; so messages are never progressed. We may force opal_progress() to be called
</span><br>
<span class="quotelev1">&gt; by setting btl_openib_free_list_max to 1000. Then wait_all() will call
</span><br>
<span class="quotelev1">&gt; progress because not every request will be immediately completed by OB1. Or
</span><br>
<span class="quotelev1">&gt; we can limit a number of uncompleted requests that OB1 can allocate by setting
</span><br>
<span class="quotelev1">&gt; pml_ob1_free_list_max to 1000. Then opal_progress() will be called from a
</span><br>
<span class="quotelev1">&gt; free_list_wait() when max will be reached. The second option works much
</span><br>
<span class="quotelev1">&gt; faster for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 5, 2007, at 12:59 AM, David Daniel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been seeing some nasty behaviour in collectives,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particularly bcast and reduce.  Attached is a reproducer (for bcast).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code will rapidly slow to a crawl (usually interpreted as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hang in real applications) and sometimes gets killed with sigbus or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sigterm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see this with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.2.3 or openmpi-1.2.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ofed 1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   linux 2.6.19 + patches
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   gcc (GCC) 3.4.5 20051201 (Red Hat 3.4.5-2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4 socket, dual core opterons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun --mca btl self,openib --npernode 1 --np 4 bcast-hang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To my now uneducated eye it looks as if the root process is rushing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ahead and not progressing earlier bcasts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone else seeing similar?  Any ideas for workarounds?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a point of reference, mvapich2 0.9.8 works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, David
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bcast-hang.c&gt;
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
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
<li><strong>Next message:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2485.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2487.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
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
