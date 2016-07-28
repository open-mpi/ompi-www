<?
$subject_val = "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 14:11:38 2009" -->
<!-- isoreceived="20090323181138" -->
<!-- sent="Mon, 23 Mar 2009 18:11:32 +0000" -->
<!-- isosent="20090323181132" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infinite Loop: ompi_free_list_wait" -->
<!-- id="f6ed2720903231111h61a6fce5v3e465ad003e3b8a3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B593A518-76DE-4588-9070-D8277DC18C19_at_eecs.utk.edu" -->
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
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 14:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5706.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a relief to know, although I'm still a bit concerned. I'm looking at
<br>
the code for the OpenMPI 1.3 trunk and in the ob1 component I can see the
<br>
following sequence:
<br>
<p>mca_pml_ob1_recv_frag_callback_match -&gt; append_frag_to_list -&gt;
<br>
MCA_PML_OB1_RECV_FRAG_ALLOC -&gt; OMPI_FREE_LIST_WAIT -&gt; __ompi_free_list_wait
<br>
<p>so I'm guessing unless the deadlock issue has been resolved for that
<br>
function, it will still fail non deterministically. I'm quite eager to give
<br>
it a try, but my component doesn't compile as is with the 1.3 source. Is it
<br>
trivial to convert it?
<br>
<p>Or maybe you were suggesting that I go into the code of ob1 myself and
<br>
manually change every _wait to _get?
<br>
<p>Kind regards
<br>
Tim
<br>
<p>2009/3/23 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; It is a known problem. When the freelist is empty going in the
</span><br>
<span class="quotelev1">&gt; ompi_free_list_wait will block the process until at least one fragment
</span><br>
<span class="quotelev1">&gt; became available. As a fragment can became available only when returned by
</span><br>
<span class="quotelev1">&gt; the BTL, this can lead to deadlocks in some cases. The workaround is to ban
</span><br>
<span class="quotelev1">&gt; the usage of the blocking _wait function, and replace it with the
</span><br>
<span class="quotelev1">&gt; non-blocking version _get. The PML has all the required logic to deal with
</span><br>
<span class="quotelev1">&gt; the cases where a fragment cannot be allocated. We changed most of the BTLs
</span><br>
<span class="quotelev1">&gt; to use _get instead of _wait few months ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2009, at 11:58 , Timothy Hayes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on an OpenMPI BTL component and am having a recurring problem,
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering if anyone could shed some light on it. I have a component
</span><br>
<span class="quotelev2">&gt;&gt; that's quite straight forward, it uses a pair of lightweight sockets to take
</span><br>
<span class="quotelev2">&gt;&gt; advantage of being in a virtualised environment (specifically Xen). My code
</span><br>
<span class="quotelev2">&gt;&gt; is a bit messy and has lots of inefficiencies, but the logic seems sound
</span><br>
<span class="quotelev2">&gt;&gt; enough. I've been able to execute a few simple programs successfully using
</span><br>
<span class="quotelev2">&gt;&gt; the component, and they work most of the time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem I'm having is actually happening in higher layers,
</span><br>
<span class="quotelev2">&gt;&gt; specifically in my asynchronous receive handler, when I call the callback
</span><br>
<span class="quotelev2">&gt;&gt; function (cbfunc) that was set by the PML in the BTL initialisation phase.
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be getting stuck in an infinite loop at __ompi_free_list_wait(),
</span><br>
<span class="quotelev2">&gt;&gt; in this function there is a condition variable which should get set
</span><br>
<span class="quotelev2">&gt;&gt; eventually but just doesn't. I've stepped through it with GDB and I get a
</span><br>
<span class="quotelev2">&gt;&gt; backtrace of something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_xen_endpoint_recv_handler -&gt; mca_btl_xen_endpoint_start_recv -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_recv_frag_callback -&gt; mca_pml_ob1_recv_frag_match -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __ompi_free_list_wait -&gt; opal_condition_wait
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and from there it just loops. Although this is happening in higher levels,
</span><br>
<span class="quotelev2">&gt;&gt; I haven't noticed something like this happening in any of the other BTL
</span><br>
<span class="quotelev2">&gt;&gt; components so chances are there's something in my code that's causing this.
</span><br>
<span class="quotelev2">&gt;&gt; I very much doubt that it's actually waiting for a list item to be returned
</span><br>
<span class="quotelev2">&gt;&gt; since this infinite loop can occur non deterministically and sometimes even
</span><br>
<span class="quotelev2">&gt;&gt; on the first receive callback.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm really not too sure what else to include with this e-mail. I could
</span><br>
<span class="quotelev2">&gt;&gt; send my source code (a bit nasty right now) if it would be helpful, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; hoping that someone might have noticed this problem before or something
</span><br>
<span class="quotelev2">&gt;&gt; similar. Maybe I'm making a common mistake. Any advice would be really
</span><br>
<span class="quotelev2">&gt;&gt; appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.2.9 from the SVN tag repository.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; Tim Hayes
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5706.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
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
