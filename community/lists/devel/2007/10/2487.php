<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 10:19:12 2007" -->
<!-- isoreceived="20071023141912" -->
<!-- sent="Tue, 23 Oct 2007 16:19:07 +0200" -->
<!-- isosent="20071023141907" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="20071023141907.GB12525_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C343721D.82F%gshipman_at_ornl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 10:19:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2488.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 23, 2007 at 09:40:45AM -0400, Shipman, Galen M. wrote:
<br>
<span class="quotelev1">&gt; So this problem goes WAY back..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem here is that the PML marks MPI completion just prior to calling
</span><br>
<span class="quotelev1">&gt; btl_send and then returns to the user. This wouldn't be a problem if the BTL
</span><br>
<span class="quotelev1">&gt; then did something, but in the case of OpenIB this fragment may not actually
</span><br>
<span class="quotelev1">&gt; be on the wire (the joys of user level flow control).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One solution that we proposed was to allow btl_send to return either
</span><br>
<span class="quotelev1">&gt; OMPI_SUCCESS or OMPI_NOT_ON_WIRE. OMPI_NOT_ON_WIRE would allow the PML to
</span><br>
<span class="quotelev1">&gt; not mark MPI completion of the fragment and then MPI_WAITALL and others will
</span><br>
<span class="quotelev1">&gt; do there job properly.
</span><br>
I even implemented this once, but there is a problem. Currently we mark
<br>
request as completed on MPI level and then do btl_send(). Whenever IB completion
<br>
will happen the request will be marked as complete on PML level and
<br>
freed. The fix requires to change the order like this: Call btl_send(),
<br>
check return value from BTL and mark request complete as necessary. The
<br>
problem is that because we allow BTL to call opal_progress() internally the
<br>
request may be already completed on MPI and MPL levels and freed before return from
<br>
the call to btl_send().
<br>
<p>I did a code review to see how hard it will be to get rid of recursion
<br>
in Open MPI and I think this is doable. We have to disallow calling
<br>
progress() (or other functions that may call progress() internally) from
<br>
BTL and from ULP callbacks that are called by BTL. There is no much
<br>
places that break this law. The main offenders are calls to
<br>
FREE_LIST_WAIT(), but those never actually call progress if they can
<br>
grow without limit and this is the most common use of FREE_LIST_WAIT()
<br>
so they may be safely changed to FREE_LIST_GET(). After we will solve
<br>
recursion problem the fix to the problem will be a couple of lines of
<br>
code.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Galen 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/11/07 11:26 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 05, 2007 at 09:43:44AM +0200, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; David --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gleb and I just actively re-looked at this problem yesterday; we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; think it's related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/">https://svn.open-mpi.org/trac/ompi/ticket/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1015.  We previously thought this ticket was a different problem, but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; our analysis yesterday shows that it could be a real problem in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openib BTL or ob1 PML (kinda think it's the openib btl because it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; doesn't seem to happen on other networks, but who knows...).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gleb is investigating.
</span><br>
<span class="quotelev2">&gt; &gt; Here is the result of the investigation. The problem is different than
</span><br>
<span class="quotelev2">&gt; &gt; #1015 ticket. What we have here is one rank calls isend() of a small
</span><br>
<span class="quotelev2">&gt; &gt; message and wait_all() in a loop and another one calls irecv(). The
</span><br>
<span class="quotelev2">&gt; &gt; problem is that isend() usually doesn't call opal_progress() anywhere
</span><br>
<span class="quotelev2">&gt; &gt; and wait_all() doesn't call progress if all requests are already completed
</span><br>
<span class="quotelev2">&gt; &gt; so messages are never progressed. We may force opal_progress() to be called
</span><br>
<span class="quotelev2">&gt; &gt; by setting btl_openib_free_list_max to 1000. Then wait_all() will call
</span><br>
<span class="quotelev2">&gt; &gt; progress because not every request will be immediately completed by OB1. Or
</span><br>
<span class="quotelev2">&gt; &gt; we can limit a number of uncompleted requests that OB1 can allocate by setting
</span><br>
<span class="quotelev2">&gt; &gt; pml_ob1_free_list_max to 1000. Then opal_progress() will be called from a
</span><br>
<span class="quotelev2">&gt; &gt; free_list_wait() when max will be reached. The second option works much
</span><br>
<span class="quotelev2">&gt; &gt; faster for me.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 5, 2007, at 12:59 AM, David Daniel wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have been seeing some nasty behaviour in collectives,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; particularly bcast and reduce.  Attached is a reproducer (for bcast).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The code will rapidly slow to a crawl (usually interpreted as a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hang in real applications) and sometimes gets killed with sigbus or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sigterm.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I see this with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   openmpi-1.2.3 or openmpi-1.2.4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   ofed 1.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   linux 2.6.19 + patches
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   gcc (GCC) 3.4.5 20051201 (Red Hat 3.4.5-2)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   4 socket, dual core opterons
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; run as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   mpirun --mca btl self,openib --npernode 1 --np 4 bcast-hang
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To my now uneducated eye it looks as if the root process is rushing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ahead and not progressing earlier bcasts.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Anyone else seeing similar?  Any ideas for workarounds?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As a point of reference, mvapich2 0.9.8 works fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks, David
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;bcast-hang.c&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2488.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
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
