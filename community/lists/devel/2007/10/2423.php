<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 11:26:45 2007" -->
<!-- isoreceived="20071011152645" -->
<!-- sent="Thu, 11 Oct 2007 17:26:32 +0200" -->
<!-- isosent="20071011152632" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="20071011152632.GD3354_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E253D8BD-1C0D-40DB-969A-505EEB51BBF8_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-11 11:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Previous message:</strong> <a href="2422.php">George Bosilca: "[OMPI devel] [RFC] update to ompi_request_t"</a>
<li><strong>In reply to:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 05, 2007 at 09:43:44AM +0200, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; David --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb and I just actively re-looked at this problem yesterday; we  
</span><br>
<span class="quotelev1">&gt; think it's related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/">https://svn.open-mpi.org/trac/ompi/ticket/</a> 
</span><br>
<span class="quotelev1">&gt; 1015.  We previously thought this ticket was a different problem, but  
</span><br>
<span class="quotelev1">&gt; our analysis yesterday shows that it could be a real problem in the  
</span><br>
<span class="quotelev1">&gt; openib BTL or ob1 PML (kinda think it's the openib btl because it  
</span><br>
<span class="quotelev1">&gt; doesn't seem to happen on other networks, but who knows...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb is investigating.
</span><br>
Here is the result of the investigation. The problem is different than
<br>
#1015 ticket. What we have here is one rank calls isend() of a small
<br>
message and wait_all() in a loop and another one calls irecv(). The
<br>
problem is that isend() usually doesn't call opal_progress() anywhere
<br>
and wait_all() doesn't call progress if all requests are already completed
<br>
so messages are never progressed. We may force opal_progress() to be called
<br>
by setting btl_openib_free_list_max to 1000. Then wait_all() will call
<br>
progress because not every request will be immediately completed by OB1. Or
<br>
we can limit a number of uncompleted requests that OB1 can allocate by setting
<br>
pml_ob1_free_list_max to 1000. Then opal_progress() will be called from a
<br>
free_list_wait() when max will be reached. The second option works much
<br>
faster for me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2007, at 12:59 AM, David Daniel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been seeing some nasty behaviour in collectives,  
</span><br>
<span class="quotelev2">&gt; &gt; particularly bcast and reduce.  Attached is a reproducer (for bcast).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code will rapidly slow to a crawl (usually interpreted as a  
</span><br>
<span class="quotelev2">&gt; &gt; hang in real applications) and sometimes gets killed with sigbus or  
</span><br>
<span class="quotelev2">&gt; &gt; sigterm.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see this with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   openmpi-1.2.3 or openmpi-1.2.4
</span><br>
<span class="quotelev2">&gt; &gt;   ofed 1.2
</span><br>
<span class="quotelev2">&gt; &gt;   linux 2.6.19 + patches
</span><br>
<span class="quotelev2">&gt; &gt;   gcc (GCC) 3.4.5 20051201 (Red Hat 3.4.5-2)
</span><br>
<span class="quotelev2">&gt; &gt;   4 socket, dual core opterons
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; run as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun --mca btl self,openib --npernode 1 --np 4 bcast-hang
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To my now uneducated eye it looks as if the root process is rushing  
</span><br>
<span class="quotelev2">&gt; &gt; ahead and not progressing earlier bcasts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone else seeing similar?  Any ideas for workarounds?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As a point of reference, mvapich2 0.9.8 works fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, David
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;bcast-hang.c&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Previous message:</strong> <a href="2422.php">George Bosilca: "[OMPI devel] [RFC] update to ompi_request_t"</a>
<li><strong>In reply to:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
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
