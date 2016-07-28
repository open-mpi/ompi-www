<?
$subject_val = "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 08:55:30 2009" -->
<!-- isoreceived="20090325125530" -->
<!-- sent="Wed, 25 Mar 2009 05:55:25 -0700" -->
<!-- isosent="20090325125525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infinite Loop: ompi_free_list_wait" -->
<!-- id="2F39F20C-2BE2-4AA2-BE0F-14E9076BC6C7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 08:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5698.php">Hartmut Häfner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>In reply to:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5706.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -- correct me if I'm wrong -- we went through and audited ob1  
<br>
and the relevant BTLs.  The only places where WAIT remains are places  
<br>
that are guaranteed to not be problematic.
<br>
<p>So you shouldn't need to edit ob1 at all.
<br>
<p>If you're working with Open MPI, you might want to investigate using  
<br>
Mercurial.  We use it fairly successfully internally for &quot;branching&quot;  
<br>
from the main Open MPI development SVN.  There's an official Open MPI  
<br>
mercurial repository (it's a mirror of our SVN repository) that you  
<br>
can clone and work from.  This will make it relatively easy to keep up  
<br>
with the Open MPI SVN trunk, if you're interested.  See these pages  
<br>
for some details:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a>
<br>
<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/">http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/</a>
<br>
<p>As for upgrading your BTL from 1.2 to 1.3, I'm afraid I don't remember  
<br>
the details of what changed.  It shouldn't be *too* hard...?
<br>
<p><p>On Mar 23, 2009, at 11:11 AM, Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; That's a relief to know, although I'm still a bit concerned. I'm  
</span><br>
<span class="quotelev1">&gt; looking at the code for the OpenMPI 1.3 trunk and in the ob1  
</span><br>
<span class="quotelev1">&gt; component I can see the following sequence:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_frag_callback_match -&gt; append_frag_to_list -&gt;  
</span><br>
<span class="quotelev1">&gt; MCA_PML_OB1_RECV_FRAG_ALLOC -&gt; OMPI_FREE_LIST_WAIT -&gt;  
</span><br>
<span class="quotelev1">&gt; __ompi_free_list_wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so I'm guessing unless the deadlock issue has been resolved for that  
</span><br>
<span class="quotelev1">&gt; function, it will still fail non deterministically. I'm quite eager  
</span><br>
<span class="quotelev1">&gt; to give it a try, but my component doesn't compile as is with the  
</span><br>
<span class="quotelev1">&gt; 1.3 source. Is it trivial to convert it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or maybe you were suggesting that I go into the code of ob1 myself  
</span><br>
<span class="quotelev1">&gt; and manually change every _wait to _get?
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
<span class="quotelev1">&gt; It is a known problem. When the freelist is empty going in the  
</span><br>
<span class="quotelev1">&gt; ompi_free_list_wait will block the process until at least one  
</span><br>
<span class="quotelev1">&gt; fragment became available. As a fragment can became available only  
</span><br>
<span class="quotelev1">&gt; when returned by the BTL, this can lead to deadlocks in some cases.  
</span><br>
<span class="quotelev1">&gt; The workaround is to ban the usage of the blocking _wait function,  
</span><br>
<span class="quotelev1">&gt; and replace it with the non-blocking version _get. The PML has all  
</span><br>
<span class="quotelev1">&gt; the required logic to deal with the cases where a fragment cannot be  
</span><br>
<span class="quotelev1">&gt; allocated. We changed most of the BTLs to use _get instead of _wait  
</span><br>
<span class="quotelev1">&gt; few months ago.
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
<span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5698.php">Hartmut Häfner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>In reply to:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5706.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
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
