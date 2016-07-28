<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 08:15:04 2011" -->
<!-- isoreceived="20110616121504" -->
<!-- sent="Thu, 16 Jun 2011 14:14:58 +0200" -->
<!-- isosent="20110616121458" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="BANLkTim6BF1zf_ZRpPAFrp2VSfQufmhsXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikTNr6YdeuOnadzsCwGq0jmA7Qpjw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-16 08:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9379.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] new btl"</a>
<li><strong>In reply to:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
<p>Thanks for yours answers.
<br>
<p>I'ts as you said Josh, i'm trying to do something uncoordinated, and on
<br>
demand. What i'm doing now is to put some code in the btl_tcp_endpoint.c and
<br>
others file that allows me to change the attempts of communication in the
<br>
sockets when a failure occurs. At the moment i reset the values in the
<br>
receptor of a message from a restored process, and that is working until the
<br>
recv finish, because when the receptor tries to communicate with the sender
<br>
it fails because the sender does not have an open socket to accept the
<br>
connect i think (am i correct?). So now i will work on that and will give
<br>
you some feedback.
<br>
<p>Thanks a lot for all your help.
<br>
<p>Hugo
<br>
<p>2011/6/13 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I don't think this will help much, but I can tell you how we handled
</span><br>
<span class="quotelev1">&gt; this for the coordinated C/R functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we added automatic recovery and process migration using
</span><br>
<span class="quotelev1">&gt; coordinated checkpoints to the Open MPI trunk (spring/summer 2010) we
</span><br>
<span class="quotelev1">&gt; were able to take advantage of the coordinated nature of the activity.
</span><br>
<span class="quotelev1">&gt; Since all processes were doing the recovery together (with possibly
</span><br>
<span class="quotelev1">&gt; only a subset of the processes actually restarting - in the case of
</span><br>
<span class="quotelev1">&gt; process migration) we were able to flush the modex and repost
</span><br>
<span class="quotelev1">&gt; connection information to all processes that wanted it. The restarted
</span><br>
<span class="quotelev1">&gt; processes will pull the updated modex information, and the existing
</span><br>
<span class="quotelev1">&gt; processes (if any) will pull the modex information from the restarted
</span><br>
<span class="quotelev1">&gt; processes once it is posted. The coordinated nature of the recovery
</span><br>
<span class="quotelev1">&gt; activity made it easy to define a point in time in which the modex was
</span><br>
<span class="quotelev1">&gt; accurate - similar to MPI_Init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like you are trying to do something less coordinated in
</span><br>
<span class="quotelev1">&gt; nature. So you will most likely need to extend the modex, since I do
</span><br>
<span class="quotelev1">&gt; not think it has good support for sending updated contact information
</span><br>
<span class="quotelev1">&gt; (and invalidating old contact information) in the current trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George should know this code path better than I do, so he might be
</span><br>
<span class="quotelev1">&gt; able to help a bit more. For their uncoordinated C/R approach they
</span><br>
<span class="quotelev1">&gt; would have had to deal with this when restarting processes mid-run
</span><br>
<span class="quotelev1">&gt; without halting other processes. So maybe you can use a similar
</span><br>
<span class="quotelev1">&gt; approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 4, 2011 at 10:55 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 4, 2011, at 5:21 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your replies.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;After doing that, the MPI_Init procedure calls grpcomm.modex to
</span><br>
<span class="quotelev1">&gt; distribute
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the data across all procs in the job. Unfortunately, being a collective,
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; procs must participate. In your case, you'll have to find a different
</span><br>
<span class="quotelev1">&gt; way to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; do it. Upon receipt, each proc updates its own modex db to include the
</span><br>
<span class="quotelev1">&gt; new
</span><br>
<span class="quotelev3">&gt; &gt;&gt; info.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Look in orte/mca/grpcomm/bad/grpcomm_bad_module.c at the modex function
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; follow that code thru the grpcomm/base functions to see how the modex
</span><br>
<span class="quotelev1">&gt; info
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is retrieved, passed, and decoded on the far end.
</span><br>
<span class="quotelev2">&gt; &gt; I will take a look to this Ralph and let you know how it goes. But today
</span><br>
<span class="quotelev2">&gt; &gt; looking at the code with a partner, he suggested to me to try to capture
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev2">&gt; &gt; error when sending data through the btl_tcp_endpoint, more precisely
</span><br>
<span class="quotelev2">&gt; &gt; in mca_btl_tcp_frag_send and capture there an error when we try to write
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; the fd of the socket. I've tried this but when a process moves and try to
</span><br>
<span class="quotelev2">&gt; &gt; send a message, or someone try to send a message for him, i cannot
</span><br>
<span class="quotelev1">&gt; capture
</span><br>
<span class="quotelev2">&gt; &gt; the moment of the failure in the mca_btl_tcp_frag_send, but i don't know
</span><br>
<span class="quotelev2">&gt; &gt; why, it is supposed to fail when someone try to send, is there any other
</span><br>
<span class="quotelev2">&gt; &gt; place where this is capture? If i do in this way, i can reset connections
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt; demand i suppose. What do you think of this? it's a good idea? And after
</span><br>
<span class="quotelev1">&gt; i
</span><br>
<span class="quotelev2">&gt; &gt; detect this failure, i will try to update de modex db of that process
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev2">&gt; &gt; here it's ok?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm no expert on the tcp btl - perhaps George can answer?
</span><br>
<span class="quotelev2">&gt; &gt; The run-time has no visibility into MPI connections, and has no
</span><br>
<span class="quotelev2">&gt; &gt; understanding of the modex contents. So if a proc detects that it cannot
</span><br>
<span class="quotelev2">&gt; &gt; make the btl connection, I guess it could send an orte message to the
</span><br>
<span class="quotelev1">&gt; proc
</span><br>
<span class="quotelev2">&gt; &gt; it's trying to reach, and have that proc return a copy of its modex data?
</span><br>
<span class="quotelev2">&gt; &gt; I guess that could work. You may be running into the MPI layer's own
</span><br>
<span class="quotelev2">&gt; &gt; attempts to ensure comm success via retry...I know you won't get a send
</span><br>
<span class="quotelev2">&gt; &gt; failure just because the socket is closed - it'll keep retrying the
</span><br>
<span class="quotelev2">&gt; &gt; connection for awhile before giving up.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Hugo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2011/6/3 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 3, 2011, at 10:12 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; When an MPI proc calls MPI_Init, each btl pushes its contact info into
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the modex database - one example is the btl.tcp.1.7 info you found
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; That entry is for the TCP btl, which is probably what you are looking
</span><br>
<span class="quotelev1">&gt; for.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; There is no way for you to edit that data - each btl encodes it in its
</span><br>
<span class="quotelev1">&gt; own
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; way and then adds it to the modex.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; More specifically, whatever each entity puts into the modex is a blob
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is only readable by other entities just like itself.  For example, what
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; TCP BTL puts in the modex can really only be read by another TCP BTL.
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; contents of what the TCP BTL puts in there is an opaque binary blob from
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; modex's point of view.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9379.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] new btl"</a>
<li><strong>In reply to:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
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
