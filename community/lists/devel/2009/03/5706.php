<?
$subject_val = "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 10:54:50 2009" -->
<!-- isoreceived="20090326145450" -->
<!-- sent="Thu, 26 Mar 2009 16:54:44 +0200" -->
<!-- isosent="20090326145444" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infinite Loop: ompi_free_list_wait" -->
<!-- id="453d39990903260754i506ca6bcxa76ca0123e60f19e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f6ed2720903231111h61a6fce5v3e465ad003e3b8a3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Infinite Loop: ompi_free_list_wait<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 10:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the error that you are getting from compilation failure?
<br>
<p>Lenny.
<br>
<p>On 3/23/09, Timothy Hayes &lt;hayesti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a relief to know, although I'm still a bit concerned. I'm looking at
</span><br>
<span class="quotelev1">&gt; the code for the OpenMPI 1.3 trunk and in the ob1 component I can see the
</span><br>
<span class="quotelev1">&gt; following sequence:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_frag_callback_match -&gt; append_frag_to_list -&gt;
</span><br>
<span class="quotelev1">&gt; MCA_PML_OB1_RECV_FRAG_ALLOC -&gt; OMPI_FREE_LIST_WAIT -&gt; __ompi_free_list_wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so I'm guessing unless the deadlock issue has been resolved for that
</span><br>
<span class="quotelev1">&gt; function, it will still fail non deterministically. I'm quite eager to give
</span><br>
<span class="quotelev1">&gt; it a try, but my component doesn't compile as is with the 1.3 source. Is it
</span><br>
<span class="quotelev1">&gt; trivial to convert it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or maybe you were suggesting that I go into the code of ob1 myself and
</span><br>
<span class="quotelev1">&gt; manually change every _wait to _get?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/3/23 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is a known problem. When the freelist is empty going in the
</span><br>
<span class="quotelev2">&gt;&gt; ompi_free_list_wait will block the process until at least one fragment
</span><br>
<span class="quotelev2">&gt;&gt; became available. As a fragment can became available only when returned by
</span><br>
<span class="quotelev2">&gt;&gt; the BTL, this can lead to deadlocks in some cases. The workaround is to ban
</span><br>
<span class="quotelev2">&gt;&gt; the usage of the blocking _wait function, and replace it with the
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking version _get. The PML has all the required logic to deal with
</span><br>
<span class="quotelev2">&gt;&gt; the cases where a fragment cannot be allocated. We changed most of the BTLs
</span><br>
<span class="quotelev2">&gt;&gt; to use _get instead of _wait few months ago.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 23, 2009, at 11:58 , Timothy Hayes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm working on an OpenMPI BTL component and am having a recurring
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem, I was wondering if anyone could shed some light on it. I have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component that's quite straight forward, it uses a pair of lightweight
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sockets to take advantage of being in a virtualised environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (specifically Xen). My code is a bit messy and has lots of inefficiencies,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but the logic seems sound enough. I've been able to execute a few simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs successfully using the component, and they work most of the time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem I'm having is actually happening in higher layers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically in my asynchronous receive handler, when I call the callback
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function (cbfunc) that was set by the PML in the BTL initialisation phase.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to be getting stuck in an infinite loop at __ompi_free_list_wait(),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this function there is a condition variable which should get set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eventually but just doesn't. I've stepped through it with GDB and I get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; backtrace of something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_xen_endpoint_recv_handler -&gt; mca_btl_xen_endpoint_start_recv -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_ob1_recv_frag_callback -&gt; mca_pml_ob1_recv_frag_match -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __ompi_free_list_wait -&gt; opal_condition_wait
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and from there it just loops. Although this is happening in higher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; levels, I haven't noticed something like this happening in any of the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL components so chances are there's something in my code that's causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this. I very much doubt that it's actually waiting for a list item to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returned since this infinite loop can occur non deterministically and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometimes even on the first receive callback.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm really not too sure what else to include with this e-mail. I could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send my source code (a bit nasty right now) if it would be helpful, but I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hoping that someone might have noticed this problem before or something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar. Maybe I'm making a common mistake. Any advice would be really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI 1.2.9 from the SVN tag repository.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Hayes
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5706/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
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
