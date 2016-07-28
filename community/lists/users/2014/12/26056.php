<?
$subject_val = "Re: [OMPI users] Question on Mapping and Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 13:45:47 2014" -->
<!-- isoreceived="20141222184547" -->
<!-- sent="Mon, 22 Dec 2014 13:45:40 -0500" -->
<!-- isosent="20141222184540" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on Mapping and Binding" -->
<!-- id="CA+ssbKU2SELNQMMO4zOQuMhiJb+Fr77Lo7T8FOKmoC3+r+i87Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D50FA248-E3E6-42F9-9B8D-C4754DAD1D8E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on Mapping and Binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 13:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26057.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Previous message:</strong> <a href="26055.php">Brock Palen: "Re: [OMPI users] best function to send data"</a>
<li><strong>In reply to:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26057.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Reply:</strong> <a href="26057.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Yes the report bindings show the correct binding as expected for the
<br>
processes. The doubt I am having is, say I spawn a thread within my
<br>
process. If I don't specify affinity for it, is it possible for it to get
<br>
scheduled to run in a core outside that of the process?
<br>
<p>Second question is, does MPI provides an API such that I can retrieve the
<br>
binding info from program to take decisions on setting thread affinity?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p>On Mon, Dec 22, 2014 at 1:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: it looks like we are indeed binding to core if PE is set, so if you
</span><br>
<span class="quotelev1">&gt; are seeing something different, then we may have a bug somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you add &#226;&#128;&#148;report-bindings to your cmd line, you should see where we
</span><br>
<span class="quotelev1">&gt; bound the procs - does that look correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2014, at 9:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They will be bound to whatever level you specified - I believe by default
</span><br>
<span class="quotelev1">&gt; we bind to socket when mapping by socket. If you want them bound to core,
</span><br>
<span class="quotelev1">&gt; you might need to add &#226;&#128;&#148;bind-to core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can take a look at it - I *thought* we had reset that to bind-to core
</span><br>
<span class="quotelev1">&gt; when PE=N was specified, but maybe that got lost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2014, at 8:32 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been using --map-by socket:PE=N, where N is used to control the
</span><br>
<span class="quotelev1">&gt; number of cores a proc gets mapped to. Does this also guarantee that a proc
</span><br>
<span class="quotelev1">&gt; is bound to N cores in the socket? I am asking this because I see some
</span><br>
<span class="quotelev1">&gt; threads spawned by the process run outside the given N cores in the socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected or I guess I am missing some binding parameter here?
</span><br>
<span class="quotelev1">&gt; Also, is there some documentation on these different choices? Are the
</span><br>
<span class="quotelev1">&gt; options in [1] available in current release?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26051.php">http://www.open-mpi.org/community/lists/users/2014/12/26051.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26054.php">http://www.open-mpi.org/community/lists/users/2014/12/26054.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26057.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Previous message:</strong> <a href="26055.php">Brock Palen: "Re: [OMPI users] best function to send data"</a>
<li><strong>In reply to:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26057.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Reply:</strong> <a href="26057.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
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
