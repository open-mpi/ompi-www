<?
$subject_val = "Re: [OMPI users] Question on Mapping and Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 12:49:19 2014" -->
<!-- isoreceived="20141222174919" -->
<!-- sent="Mon, 22 Dec 2014 09:49:12 -0800" -->
<!-- isosent="20141222174912" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on Mapping and Binding" -->
<!-- id="E1E67226-41EF-4DA6-B7E4-25E7B189A5A4_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+ssbKW1+b+dM7QAQw2JWOGsGrcHyz2uGb+mqPvChOGQdYO+-A_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 12:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Previous message:</strong> <a href="26052.php">Siegmar Gross: "[OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>In reply to:</strong> <a href="26051.php">Saliya Ekanayake: "[OMPI users] Question on Mapping and Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Reply:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They will be bound to whatever level you specified - I believe by default we bind to socket when mapping by socket. If you want them bound to core, you might need to add &#226;&#128;&#148;bind-to core.
<br>
<p>I can take a look at it - I *thought* we had reset that to bind-to core when PE=N was specified, but maybe that got lost.
<br>
<p><p><span class="quotelev1">&gt; On Dec 22, 2014, at 8:32 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been using --map-by socket:PE=N, where N is used to control the number of cores a proc gets mapped to. Does this also guarantee that a proc is bound to N cores in the socket? I am asking this because I see some threads spawned by the process run outside the given N cores in the socket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this expected or I guess I am missing some binding parameter here? Also, is there some documentation on these different choices? Are the options in [1] available in current release?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a> &lt;<a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>&gt;
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
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26051.php">http://www.open-mpi.org/community/lists/users/2014/12/26051.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Previous message:</strong> <a href="26052.php">Siegmar Gross: "[OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>In reply to:</strong> <a href="26051.php">Saliya Ekanayake: "[OMPI users] Question on Mapping and Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Reply:</strong> <a href="26054.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
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
