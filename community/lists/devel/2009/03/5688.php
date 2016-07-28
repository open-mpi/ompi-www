<?
$subject_val = "[OMPI devel] Infinite Loop: ompi_free_list_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 11:58:32 2009" -->
<!-- isoreceived="20090323155832" -->
<!-- sent="Mon, 23 Mar 2009 15:58:27 +0000" -->
<!-- isosent="20090323155827" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="[OMPI devel] Infinite Loop: ompi_free_list_wait" -->
<!-- id="f6ed2720903230858t1e59c2a1ia9eea901fb0cb3a3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Infinite Loop: ompi_free_list_wait<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 11:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5687.php">Ralph Castain: "Re: [OMPI devel] 1.3.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm working on an OpenMPI BTL component and am having a recurring problem, I
<br>
was wondering if anyone could shed some light on it. I have a component
<br>
that's quite straight forward, it uses a pair of lightweight sockets to take
<br>
advantage of being in a virtualised environment (specifically Xen). My code
<br>
is a bit messy and has lots of inefficiencies, but the logic seems sound
<br>
enough. I've been able to execute a few simple programs successfully using
<br>
the component, and they work most of the time.
<br>
<p>The problem I'm having is actually happening in higher layers, specifically
<br>
in my asynchronous receive handler, when I call the callback function
<br>
(cbfunc) that was set by the PML in the BTL initialisation phase. It seems
<br>
to be getting stuck in an infinite loop at __ompi_free_list_wait(), in this
<br>
function there is a condition variable which should get set eventually but
<br>
just doesn't. I've stepped through it with GDB and I get a backtrace of
<br>
something like this:
<br>
<p>mca_btl_xen_endpoint_recv_handler -&gt; mca_btl_xen_endpoint_start_recv -&gt;
<br>
mca_pml_ob1_recv_frag_callback -&gt; mca_pml_ob1_recv_frag_match -&gt;
<br>
__ompi_free_list_wait -&gt; opal_condition_wait
<br>
<p>and from there it just loops. Although this is happening in higher levels, I
<br>
haven't noticed something like this happening in any of the other BTL
<br>
components so chances are there's something in my code that's causing this.
<br>
I very much doubt that it's actually waiting for a list item to be returned
<br>
since this infinite loop can occur non deterministically and sometimes even
<br>
on the first receive callback.
<br>
<p>I'm really not too sure what else to include with this e-mail. I could send
<br>
my source code (a bit nasty right now) if it would be helpful, but I'm
<br>
hoping that someone might have noticed this problem before or something
<br>
similar. Maybe I'm making a common mistake. Any advice would be really
<br>
appreciated!
<br>
<p>I'm using OpenMPI 1.2.9 from the SVN tag repository.
<br>
<p>Kind regards
<br>
Tim Hayes
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5687.php">Ralph Castain: "Re: [OMPI devel] 1.3.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
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
