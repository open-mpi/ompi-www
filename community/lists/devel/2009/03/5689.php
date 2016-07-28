<?
$subject_val = "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 12:54:05 2009" -->
<!-- isoreceived="20090323165405" -->
<!-- sent="Mon, 23 Mar 2009 18:53:51 +0200" -->
<!-- isosent="20090323165351" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infinite Loop: ompi_free_list_wait" -->
<!-- id="453d39990903230953p458d2494ocf6213dcd9180924_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f6ed2720903230858t1e59c2a1ia9eea901fb0cb3a3_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-03-23 12:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5688.php">Timothy Hayes: "[OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5688.php">Timothy Hayes: "[OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
did you try it with OpenMPI 1.3.1 version?
<br>
<p>There have been few changes and bug fixes (example  r20591, fix in ob1 PML)
<br>
.
<br>
<p>Lenny.
<br>
<p>2009/3/23 Timothy Hayes &lt;hayesti_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on an OpenMPI BTL component and am having a recurring problem,
</span><br>
<span class="quotelev1">&gt; I was wondering if anyone could shed some light on it. I have a component
</span><br>
<span class="quotelev1">&gt; that's quite straight forward, it uses a pair of lightweight sockets to take
</span><br>
<span class="quotelev1">&gt; advantage of being in a virtualised environment (specifically Xen). My code
</span><br>
<span class="quotelev1">&gt; is a bit messy and has lots of inefficiencies, but the logic seems sound
</span><br>
<span class="quotelev1">&gt; enough. I've been able to execute a few simple programs successfully using
</span><br>
<span class="quotelev1">&gt; the component, and they work most of the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem I'm having is actually happening in higher layers, specifically
</span><br>
<span class="quotelev1">&gt; in my asynchronous receive handler, when I call the callback function
</span><br>
<span class="quotelev1">&gt; (cbfunc) that was set by the PML in the BTL initialisation phase. It seems
</span><br>
<span class="quotelev1">&gt; to be getting stuck in an infinite loop at __ompi_free_list_wait(), in this
</span><br>
<span class="quotelev1">&gt; function there is a condition variable which should get set eventually but
</span><br>
<span class="quotelev1">&gt; just doesn't. I've stepped through it with GDB and I get a backtrace of
</span><br>
<span class="quotelev1">&gt; something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_btl_xen_endpoint_recv_handler -&gt; mca_btl_xen_endpoint_start_recv -&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_frag_callback -&gt; mca_pml_ob1_recv_frag_match -&gt;
</span><br>
<span class="quotelev1">&gt; __ompi_free_list_wait -&gt; opal_condition_wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and from there it just loops. Although this is happening in higher levels,
</span><br>
<span class="quotelev1">&gt; I haven't noticed something like this happening in any of the other BTL
</span><br>
<span class="quotelev1">&gt; components so chances are there's something in my code that's causing this.
</span><br>
<span class="quotelev1">&gt; I very much doubt that it's actually waiting for a list item to be returned
</span><br>
<span class="quotelev1">&gt; since this infinite loop can occur non deterministically and sometimes even
</span><br>
<span class="quotelev1">&gt; on the first receive callback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm really not too sure what else to include with this e-mail. I could send
</span><br>
<span class="quotelev1">&gt; my source code (a bit nasty right now) if it would be helpful, but I'm
</span><br>
<span class="quotelev1">&gt; hoping that someone might have noticed this problem before or something
</span><br>
<span class="quotelev1">&gt; similar. Maybe I'm making a common mistake. Any advice would be really
</span><br>
<span class="quotelev1">&gt; appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.2.9 from the SVN tag repository.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; Tim Hayes
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5688.php">Timothy Hayes: "[OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5688.php">Timothy Hayes: "[OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
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
