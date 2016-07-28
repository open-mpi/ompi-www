<?
$subject_val = "Re: [OMPI devel] A Couple of Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 13:45:51 2009" -->
<!-- isoreceived="20090414174551" -->
<!-- sent="Tue, 14 Apr 2009 18:45:46 +0100" -->
<!-- isosent="20090414174546" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] A Couple of Questions" -->
<!-- id="f6ed2720904141045l2036d168g989ba6934cb2c735_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16389003-ECA9-481F-BBDD-B48210188FC3_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] A Couple of Questions<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 13:45:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5823.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #1881: Remove -lopenmpi-malloc support"</a>
<li><strong>Previous message:</strong> <a href="5821.php">Rayson Ho: "[OMPI devel] MIPS/Linux port?"</a>
<li><strong>In reply to:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that seemed to do the trick, thank you. I'm curious though, is there a
<br>
constant somewhere in code that indicates what the maximum size the PML
<br>
header can be? I appreciate it's 32 right now, but I never feel right just
<br>
hard coding that in.
<br>
<p>2009/4/13 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 12, 2009, at 21:58 , Timothy Hayes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I was wondering if someone might be able to shed some light on a couple of
</span><br>
<span class="quotelev2">&gt;&gt; questions I have.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you receive a fragment/base_descriptor in a BTL module, is the raw
</span><br>
<span class="quotelev2">&gt;&gt; data allowed to be fragmented when you invoke the callback function? By that
</span><br>
<span class="quotelev2">&gt;&gt; I mean, I'm using a circular buffer in each endpoint so sometimes data loops
</span><br>
<span class="quotelev2">&gt;&gt; back around. Currently I'm doing a two step copy: from my socket to the
</span><br>
<span class="quotelev2">&gt;&gt; circular buffer and then from the circular buffer to the fragment. This
</span><br>
<span class="quotelev2">&gt;&gt; actually effects my total throughput quite a bit, it would be much nicer to
</span><br>
<span class="quotelev2">&gt;&gt; just point to the buffer instead. When I tried using two base_segments to
</span><br>
<span class="quotelev2">&gt;&gt; point to the start and end of buffer I got some pretty strange errors. I'm
</span><br>
<span class="quotelev2">&gt;&gt; just wondering if someone could confirm or deny that you can or can't do
</span><br>
<span class="quotelev2">&gt;&gt; this, maybe those errors were down to human error instead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the descriptor you can set a number of iovec containing the raw data.
</span><br>
<span class="quotelev1">&gt; You don't have to make it contiguous prior to calling up in the PML. I think
</span><br>
<span class="quotelev1">&gt; the PML header has to be contiguous, so you have to make sure that the first
</span><br>
<span class="quotelev1">&gt; 32 bytes of the message are contiguous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   My other question is about the BTL failover system. Would someone be able
</span><br>
<span class="quotelev2">&gt;&gt; to briefly explain how it works or maybe point me to some docs? I'm actually
</span><br>
<span class="quotelev2">&gt;&gt; expecting the file descriptors in my module to fail a certain point during
</span><br>
<span class="quotelev2">&gt;&gt; an Open MPI job and I'd like my BTL module to fail gracefully and allow the
</span><br>
<span class="quotelev2">&gt;&gt; TCP module to take over in its place. I'm not sure how to explicitly make
</span><br>
<span class="quotelev2">&gt;&gt; the the BTL module say to the rest of Open MPI &quot;don't use my anymore&quot;
</span><br>
<span class="quotelev2">&gt;&gt; though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no way to say don't use me &quot;at all&quot; anymore. This is per peer
</span><br>
<span class="quotelev1">&gt; based, so you will have to return an error on every peer. Try returning
</span><br>
<span class="quotelev1">&gt; OMPI_ERR_OUT_OF_RESOURCE from all functions that allocate descriptors
</span><br>
<span class="quotelev1">&gt; (_alloc, _prepare_src and _prepare_dst), and the PML will end-up removing
</span><br>
<span class="quotelev1">&gt; this BTL from the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Happy Easter
</span><br>
<span class="quotelev2">&gt;&gt; Tim
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5823.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #1881: Remove -lopenmpi-malloc support"</a>
<li><strong>Previous message:</strong> <a href="5821.php">Rayson Ho: "[OMPI devel] MIPS/Linux port?"</a>
<li><strong>In reply to:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
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
