<?
$subject_val = "Re: [OMPI devel] xensocket btl and migration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 11:21:05 2008" -->
<!-- isoreceived="20080318152105" -->
<!-- sent="Tue, 18 Mar 2008 11:20:59 -0400" -->
<!-- isosent="20080318152059" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] xensocket btl and migration" -->
<!-- id="0B0A53A6-8680-49D7-8673-44241971DBE4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="198651.28366.qm_at_web52102.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] xensocket btl and migration<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 11:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3455.php">Jeff Squyres: "[OMPI devel] 1.2.6 man page fixes: done"</a>
<li><strong>Previous message:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3480.php">Muhammad Atif: "Re: [OMPI devel] xensocket btl and migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Muhammad,
<br>
<p>With regard to your question on migration you will likely have to  
<br>
reload the BTL components when a migration occurs. Open MPI currently  
<br>
assumes that once the set of BTLs are decided upon in a process they  
<br>
are to be used until the application completes. There is some limited  
<br>
support for failover in which if one BTL 'fails' then it is  
<br>
disregarded and a previously defined alternative path is used. For  
<br>
example if between two peers Open MPI has the choice of using tcp or  
<br>
openib then it will use openib. If openib were to fail during the  
<br>
running of the job then it may be possible for Open MPI to fail over  
<br>
and use just tcp. I'm not sure how well tested this ability is, others  
<br>
can comment if you are interested in this.
<br>
<p>However failover is not really want you are looking for. What it seem  
<br>
you are looking for is the ability to tell two processes that they  
<br>
should no longer communicate over tcp, but continue communication over  
<br>
xensockets or visa versa. One technique would be upon migration, if  
<br>
unload the BTLs (component_close) then reopen (component_open) and  
<br>
reselect (component_select) then reexchange the modex the processes  
<br>
should settle into the new configuration. You will have to make sure  
<br>
that any state Open MPI has cached such as network addresses and node  
<br>
name data is refreshed upon restart. Take a look at the checkpoint/ 
<br>
restart logic for how I do this in the code base ([opal|orte|ompi]/ 
<br>
runtime/*_cr.c).
<br>
<p>It is likely that there is another, more efficient method but I don't  
<br>
have anything to point you to at the moment. One idea would be to add  
<br>
a refresh function to the modex which would force the reexchange of a  
<br>
single processes address set. There are a slew of problems with this  
<br>
that you will have to overcome including race conditions, but I think  
<br>
they can be surmounted.
<br>
<p>I'd be interested in hearing your experiences implementing this in  
<br>
Open MPI. Let me know if I can be of any more help.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 9, 2008, at 6:13 AM, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; Okay guys.. with all your support and help in understanding ompi  
</span><br>
<span class="quotelev1">&gt; architecture, I was able to get Xensocket to work.  Only minor  
</span><br>
<span class="quotelev1">&gt; changes to the xensocket kernel module made it compatible with  
</span><br>
<span class="quotelev1">&gt; libevent. I am getting results which are bad but I am sure, I have  
</span><br>
<span class="quotelev1">&gt; to cleanup the code. At least my results have improved over native  
</span><br>
<span class="quotelev1">&gt; netfront-netback of xen for messages of size larger than 1 MB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I started with making minor changes in the TCP btl, but it seems it  
</span><br>
<span class="quotelev1">&gt; is not the best way, as changes are quite huge and it is better to  
</span><br>
<span class="quotelev1">&gt; have separate dedicated btl for xensockets. As you guys might be  
</span><br>
<span class="quotelev1">&gt; aware Xen supports live migration, now I have one stupid question.  
</span><br>
<span class="quotelev1">&gt; My knowledge so far suggests that btl component is initialized only  
</span><br>
<span class="quotelev1">&gt; once. The scerario here is if my guest os is migrated from one  
</span><br>
<span class="quotelev1">&gt; physical node to another, and realizes that the communicating  
</span><br>
<span class="quotelev1">&gt; processes are now on one physical host and they should abandon use  
</span><br>
<span class="quotelev1">&gt; of TCP btl and make use of Xensocket btl. I am sure it would not  
</span><br>
<span class="quotelev1">&gt; happen out of the box, but is it possible without making heavy  
</span><br>
<span class="quotelev1">&gt; changes in the openmpi architecture?
</span><br>
<span class="quotelev1">&gt; With the current design, i am running a mix of tcp and xensocket  
</span><br>
<span class="quotelev1">&gt; btls, and endpoints check periodically if they are on same physical  
</span><br>
<span class="quotelev1">&gt; host or not. This has quite a big penalty in terms of time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another question is (good thing i am using email otherwise you guys  
</span><br>
<span class="quotelev1">&gt; would beat the hell outta me, its such a basic question). I am not  
</span><br>
<span class="quotelev1">&gt; able to track MPI_Recv(...) api call and its alike calls. Once in  
</span><br>
<span class="quotelev1">&gt; the code of MPI_Recv(..) we give a call to rc =  
</span><br>
<span class="quotelev1">&gt; MCA_PML_CALL(recv(buf, count ... ). This call goes to the macro, and  
</span><br>
<span class="quotelev1">&gt; pml.recv(..) gets invoked (mca_pml_base_module_recv_fn_t          
</span><br>
<span class="quotelev1">&gt; pml_recv;) . Where can I find the actual function? I get totally  
</span><br>
<span class="quotelev1">&gt; lost when trying to pinpoint what exactly is happening. Basically, I  
</span><br>
<span class="quotelev1">&gt; am looking for a place where tcp btl recv is getting called with all  
</span><br>
<span class="quotelev1">&gt; the goodies and  parameters which were passed by the MPI programmer.  
</span><br>
<span class="quotelev1">&gt; I hope I have made my question understandable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Muhammad Atif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----
</span><br>
<span class="quotelev1">&gt; From: Brian W. Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, February 6, 2008 2:57:31 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] xensocket - callbacks through OPAL/libevent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 4 Feb 2008, Muhammad Atif wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to port xensockets to openmpi. In principle, I have the
</span><br>
<span class="quotelev2">&gt; &gt; framework and everything, but there seems to be a small issue, I  
</span><br>
<span class="quotelev1">&gt; cannot
</span><br>
<span class="quotelev2">&gt; &gt; get libevent (or OPAL) to give callbacks for receive (or send) for
</span><br>
<span class="quotelev2">&gt; &gt; xensockets. I have tried to implement native code for xensockets  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt; &gt; libevent library, again the same issue.  No call backs! . With  
</span><br>
<span class="quotelev1">&gt; normal
</span><br>
<span class="quotelev2">&gt; &gt; sockets, callbacks do come easily.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So question is, do the socket/file descriptors have to have some  
</span><br>
<span class="quotelev1">&gt; special
</span><br>
<span class="quotelev2">&gt; &gt; mechanism attached to them to support callbacks for libevent/opal?  
</span><br>
<span class="quotelev1">&gt; i.e
</span><br>
<span class="quotelev2">&gt; &gt; some structure/magic?. i.e. maybe the developers of xensockets did  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev2">&gt; &gt; add that callback/interrupt thing at the time of creation.  
</span><br>
<span class="quotelev1">&gt; Xensockets is
</span><br>
<span class="quotelev2">&gt; &gt; open source, but my knowledge about these issues is limited. So I  
</span><br>
<span class="quotelev1">&gt; though
</span><br>
<span class="quotelev2">&gt; &gt; some pointer in right direction might be useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes and no :).  As you discovered, the OPAL interface just  
</span><br>
<span class="quotelev1">&gt; repackages a
</span><br>
<span class="quotelev1">&gt; library called libevent to handle its socket multiplexing.  Libevent  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; use a number of different mechanisms to look for activity on sockets,
</span><br>
<span class="quotelev1">&gt; including select() and poll() calls.  On Linux, it will generally use
</span><br>
<span class="quotelev1">&gt; poll().  poll() requires some kernel support to do its thing, so if
</span><br>
<span class="quotelev1">&gt; Xensockets doesn't implement the right magic to trigger poll() events,
</span><br>
<span class="quotelev1">&gt; then libevent won't work for Xensockets.  There's really nothing you  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; do from the Open MPI front to work around this issue -- it would  
</span><br>
<span class="quotelev1">&gt; have to
</span><br>
<span class="quotelev1">&gt; be fixed as part of Xensockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Second question is, what if we cannot have the callbacks. What is  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; recommended way to implement the btl component for such a device?  
</span><br>
<span class="quotelev1">&gt; Do we
</span><br>
<span class="quotelev2">&gt; &gt; need to do this with event timers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have a look at any of the BTLs that isn't TCP -- none of them use  
</span><br>
<span class="quotelev1">&gt; libevent
</span><br>
<span class="quotelev1">&gt; callbacks for progress.  Instead, they provide a progress function  
</span><br>
<span class="quotelev1">&gt; as part
</span><br>
<span class="quotelev1">&gt; of the BTL interface, which is called on a regular basis whenever  
</span><br>
<span class="quotelev1">&gt; progress
</span><br>
<span class="quotelev1">&gt; needs to be made.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be a better friend, newshound, and know-it-all with Yahoo! Mobile.  
</span><br>
<span class="quotelev1">&gt; Try it now._______________________________________________
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
<li><strong>Next message:</strong> <a href="3455.php">Jeff Squyres: "[OMPI devel] 1.2.6 man page fixes: done"</a>
<li><strong>Previous message:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3480.php">Muhammad Atif: "Re: [OMPI devel] xensocket btl and migration"</a>
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
