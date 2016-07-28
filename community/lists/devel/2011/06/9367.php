<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 09:00:32 2011" -->
<!-- isoreceived="20110613130032" -->
<!-- sent="Mon, 13 Jun 2011 09:00:26 -0400" -->
<!-- isosent="20110613130026" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="BANLkTikTNr6YdeuOnadzsCwGq0jmA7Qpjw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="85055CEF-C255-4FA9-A267-03F6FDE8FF84_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-13 09:00:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9368.php">Lawrence Stewart: "[OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9366.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9380.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9380.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think this will help much, but I can tell you how we handled
<br>
this for the coordinated C/R functionality.
<br>
<p>When we added automatic recovery and process migration using
<br>
coordinated checkpoints to the Open MPI trunk (spring/summer 2010) we
<br>
were able to take advantage of the coordinated nature of the activity.
<br>
Since all processes were doing the recovery together (with possibly
<br>
only a subset of the processes actually restarting - in the case of
<br>
process migration) we were able to flush the modex and repost
<br>
connection information to all processes that wanted it. The restarted
<br>
processes will pull the updated modex information, and the existing
<br>
processes (if any) will pull the modex information from the restarted
<br>
processes once it is posted. The coordinated nature of the recovery
<br>
activity made it easy to define a point in time in which the modex was
<br>
accurate - similar to MPI_Init.
<br>
<p>It sounds like you are trying to do something less coordinated in
<br>
nature. So you will most likely need to extend the modex, since I do
<br>
not think it has good support for sending updated contact information
<br>
(and invalidating old contact information) in the current trunk.
<br>
<p>George should know this code path better than I do, so he might be
<br>
able to help a bit more. For their uncoordinated C/R approach they
<br>
would have had to deal with this when restarting processes mid-run
<br>
without halting other processes. So maybe you can use a similar
<br>
approach.
<br>
<p>-- Josh
<br>
<p><p>On Sat, Jun 4, 2011 at 10:55 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2011, at 5:21 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your replies.
</span><br>
<span class="quotelev2">&gt;&gt;After doing that, the MPI_Init procedure calls grpcomm.modex to distribute
</span><br>
<span class="quotelev2">&gt;&gt; the data across all procs in the job. Unfortunately, being a collective, all
</span><br>
<span class="quotelev2">&gt;&gt; procs must participate. In your case, you'll have to find a different way to
</span><br>
<span class="quotelev2">&gt;&gt; do it. Upon receipt, each proc updates its own modex db to include the new
</span><br>
<span class="quotelev2">&gt;&gt; info.
</span><br>
<span class="quotelev2">&gt;&gt;Look in orte/mca/grpcomm/bad/grpcomm_bad_module.c at the modex function and
</span><br>
<span class="quotelev2">&gt;&gt; follow that code thru the grpcomm/base functions to see how the modex info
</span><br>
<span class="quotelev2">&gt;&gt; is retrieved, passed, and decoded on the far end.
</span><br>
<span class="quotelev1">&gt; I will take a look to this Ralph and let you know how it goes. But today
</span><br>
<span class="quotelev1">&gt; looking at the code with a partner, he suggested to me to try to capture an
</span><br>
<span class="quotelev1">&gt; error when sending data through the btl_tcp_endpoint, more precisely
</span><br>
<span class="quotelev1">&gt; in&#160;mca_btl_tcp_frag_send&#160;and capture there an error when we try to write to
</span><br>
<span class="quotelev1">&gt; the fd of the socket. I've tried this but when a process moves and try to
</span><br>
<span class="quotelev1">&gt; send a message, or someone try to send a message for him, i cannot capture
</span><br>
<span class="quotelev1">&gt; the moment of the failure in the mca_btl_tcp_frag_send, but i don't know
</span><br>
<span class="quotelev1">&gt; why, it is supposed to fail when someone try to send, is there any other
</span><br>
<span class="quotelev1">&gt; place where this is capture? If i do in this way, i can reset connections on
</span><br>
<span class="quotelev1">&gt; demand i suppose. What do you think of this? it's a good idea? And after i
</span><br>
<span class="quotelev1">&gt; detect this failure, i will try to update de modex db of that process from
</span><br>
<span class="quotelev1">&gt; here it's ok?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm no expert on the tcp btl - perhaps George can answer?
</span><br>
<span class="quotelev1">&gt; The run-time has no visibility into MPI connections, and has no
</span><br>
<span class="quotelev1">&gt; understanding of the modex contents. So if a proc detects that it cannot
</span><br>
<span class="quotelev1">&gt; make the btl connection, I guess it could send an orte message to the proc
</span><br>
<span class="quotelev1">&gt; it's trying to reach, and have that proc return a copy of its modex data?
</span><br>
<span class="quotelev1">&gt; I guess that could work. You may be running into the MPI layer's own
</span><br>
<span class="quotelev1">&gt; attempts to ensure comm success via retry...I know you won't get a send
</span><br>
<span class="quotelev1">&gt; failure just because the socket is closed - it'll keep retrying the
</span><br>
<span class="quotelev1">&gt; connection for awhile before giving up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/6/3 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 3, 2011, at 10:12 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When an MPI proc calls MPI_Init, each btl pushes its contact info into
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the modex database - one example is the btl.tcp.1.7 info you found there.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; That entry is for the TCP btl, which is probably what you are looking for.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There is no way for you to edit that data - each btl encodes it in its own
</span><br>
<span class="quotelev3">&gt;&gt; &gt; way and then adds it to the modex.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More specifically, whatever each entity puts into the modex is a blob that
</span><br>
<span class="quotelev2">&gt;&gt; is only readable by other entities just like itself. &#160;For example, what one
</span><br>
<span class="quotelev2">&gt;&gt; TCP BTL puts in the modex can really only be read by another TCP BTL. The
</span><br>
<span class="quotelev2">&gt;&gt; contents of what the TCP BTL puts in there is an opaque binary blob from the
</span><br>
<span class="quotelev2">&gt;&gt; modex's point of view.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9368.php">Lawrence Stewart: "[OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9366.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9380.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9380.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
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
