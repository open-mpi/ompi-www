<?
$subject_val = "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 13:28:27 2009" -->
<!-- isoreceived="20090323172827" -->
<!-- sent="Mon, 23 Mar 2009 13:28:17 -0400" -->
<!-- isosent="20090323172817" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infinite Loop: ompi_free_list_wait" -->
<!-- id="B593A518-76DE-4588-9070-D8277DC18C19_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 13:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>In reply to:</strong> <a href="5688.php">Timothy Hayes: "[OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a known problem. When the freelist is empty going in the  
<br>
ompi_free_list_wait will block the process until at least one fragment  
<br>
became available. As a fragment can became available only when  
<br>
returned by the BTL, this can lead to deadlocks in some cases. The  
<br>
workaround is to ban the usage of the blocking _wait function, and  
<br>
replace it with the non-blocking version _get. The PML has all the  
<br>
required logic to deal with the cases where a fragment cannot be  
<br>
allocated. We changed most of the BTLs to use _get instead of _wait  
<br>
few months ago.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 23, 2009, at 11:58 , Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on an OpenMPI BTL component and am having a recurring  
</span><br>
<span class="quotelev1">&gt; problem, I was wondering if anyone could shed some light on it. I  
</span><br>
<span class="quotelev1">&gt; have a component that's quite straight forward, it uses a pair of  
</span><br>
<span class="quotelev1">&gt; lightweight sockets to take advantage of being in a virtualised  
</span><br>
<span class="quotelev1">&gt; environment (specifically Xen). My code is a bit messy and has lots  
</span><br>
<span class="quotelev1">&gt; of inefficiencies, but the logic seems sound enough. I've been able  
</span><br>
<span class="quotelev1">&gt; to execute a few simple programs successfully using the component,  
</span><br>
<span class="quotelev1">&gt; and they work most of the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem I'm having is actually happening in higher layers,  
</span><br>
<span class="quotelev1">&gt; specifically in my asynchronous receive handler, when I call the  
</span><br>
<span class="quotelev1">&gt; callback function (cbfunc) that was set by the PML in the BTL  
</span><br>
<span class="quotelev1">&gt; initialisation phase. It seems to be getting stuck in an infinite  
</span><br>
<span class="quotelev1">&gt; loop at __ompi_free_list_wait(), in this function there is a  
</span><br>
<span class="quotelev1">&gt; condition variable which should get set eventually but just doesn't.  
</span><br>
<span class="quotelev1">&gt; I've stepped through it with GDB and I get a backtrace of something  
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_btl_xen_endpoint_recv_handler -&gt; mca_btl_xen_endpoint_start_recv  
</span><br>
<span class="quotelev1">&gt; -&gt; mca_pml_ob1_recv_frag_callback -&gt; mca_pml_ob1_recv_frag_match -&gt;  
</span><br>
<span class="quotelev1">&gt; __ompi_free_list_wait -&gt; opal_condition_wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and from there it just loops. Although this is happening in higher  
</span><br>
<span class="quotelev1">&gt; levels, I haven't noticed something like this happening in any of  
</span><br>
<span class="quotelev1">&gt; the other BTL components so chances are there's something in my code  
</span><br>
<span class="quotelev1">&gt; that's causing this. I very much doubt that it's actually waiting  
</span><br>
<span class="quotelev1">&gt; for a list item to be returned since this infinite loop can occur  
</span><br>
<span class="quotelev1">&gt; non deterministically and sometimes even on the first receive  
</span><br>
<span class="quotelev1">&gt; callback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm really not too sure what else to include with this e-mail. I  
</span><br>
<span class="quotelev1">&gt; could send my source code (a bit nasty right now) if it would be  
</span><br>
<span class="quotelev1">&gt; helpful, but I'm hoping that someone might have noticed this problem  
</span><br>
<span class="quotelev1">&gt; before or something similar. Maybe I'm making a common mistake. Any  
</span><br>
<span class="quotelev1">&gt; advice would be really appreciated!
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
<li><strong>Next message:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>In reply to:</strong> <a href="5688.php">Timothy Hayes: "[OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Reply:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
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
