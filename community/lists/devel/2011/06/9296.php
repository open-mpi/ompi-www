<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 07:21:36 2011" -->
<!-- isoreceived="20110604112136" -->
<!-- sent="Sat, 4 Jun 2011 13:21:30 +0200" -->
<!-- isosent="20110604112130" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="BANLkTimCEUx2yOH0zi4tu+dyk7qd11wpeQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C63E25FB-F552-465B-8C66-E98FC3236278_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fake Modex<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-04 07:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your replies.
<br>
<p><span class="quotelev1">&gt;After doing that, the MPI_Init procedure calls grpcomm.modex to distribute
</span><br>
the data across all procs in the job. Unfortunately, being a collective, all
<br>
procs must participate. In your case, you'll have to find a different way to
<br>
do it. Upon receipt, each proc updates its own modex db to include the new
<br>
info.
<br>
<p><span class="quotelev1">&gt;Look in orte/mca/grpcomm/bad/grpcomm_bad_module.c at the modex function and
</span><br>
follow that code thru the grpcomm/base functions to see how the modex info
<br>
is retrieved, passed, and decoded on the far end.
<br>
<p>I will take a look to this Ralph and let you know how it goes. But today
<br>
looking at the code with a partner, he suggested to me to try to capture an
<br>
error when sending data through the *btl_tcp_endpoint*, more precisely in *
<br>
mca_btl_tcp_frag_send* and capture there an error when we try to write to
<br>
the fd of the socket. I've tried this but when a process moves and try to
<br>
send a message, or someone try to send a message for him, i cannot capture
<br>
the moment of the failure in the mca_*btl_tcp_frag_send*, but i don't know
<br>
why, it is supposed to fail when someone try to send, is there any other
<br>
place where this is capture? If i do in this way, i can reset connections on
<br>
demand i suppose. What do you think of this? it's a good idea? And after i
<br>
detect this failure, i will try to update de modex db of that process from
<br>
here it's ok?
<br>
<p>Thanks
<br>
<p>Hugo
<br>
<p><p><p>2011/6/3 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Jun 3, 2011, at 10:12 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When an MPI proc calls MPI_Init, each btl pushes its contact info into
</span><br>
<span class="quotelev1">&gt; the modex database - one example is the btl.tcp.1.7 info you found there.
</span><br>
<span class="quotelev1">&gt; That entry is for the TCP btl, which is probably what you are looking for.
</span><br>
<span class="quotelev1">&gt; There is no way for you to edit that data - each btl encodes it in its own
</span><br>
<span class="quotelev1">&gt; way and then adds it to the modex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically, whatever each entity puts into the modex is a blob that
</span><br>
<span class="quotelev1">&gt; is only readable by other entities just like itself.  For example, what one
</span><br>
<span class="quotelev1">&gt; TCP BTL puts in the modex can really only be read by another TCP BTL. The
</span><br>
<span class="quotelev1">&gt; contents of what the TCP BTL puts in there is an opaque binary blob from the
</span><br>
<span class="quotelev1">&gt; modex's point of view.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
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
