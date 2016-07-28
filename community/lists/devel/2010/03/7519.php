<?
$subject_val = "Re: [OMPI devel] Rankfile related problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 09:45:33 2010" -->
<!-- isoreceived="20100302144533" -->
<!-- sent="Tue, 2 Mar 2010 07:45:27 -0700" -->
<!-- isosent="20100302144527" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Rankfile related problems" -->
<!-- id="71d2d8cc1003020645v6fd631ebr7b3bea7777e2798d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c609bc801003020347q340d6479mbe0cab46a171a020_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Rankfile related problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 09:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Previous message:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 2, 2010 at 4:47 AM, Bogdan Costescu &lt;bcostescu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Mar 1, 2010 at 9:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Tracking this down has reminded me of all the reasons why I despise the
</span><br>
<span class="quotelev1">&gt; rankfile mapper... :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all your efforts ! I'm using the rankfile mapper as this is
</span><br>
<span class="quotelev1">&gt; the documented (in the FAQ) affinity-related one at least for the
</span><br>
<span class="quotelev1">&gt; stable series. If there's a better way which I've missed, I'd be eager
</span><br>
<span class="quotelev1">&gt; to learn...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It depends on what you are trying to do. Rankfile is really only useful if
<br>
you need to specify rank-by-rank precise bindings. Otherwise, you can
<br>
specify bind-to-core or bind-to-socket to get a more general automatic
<br>
binding pattern. You can also specify cores-per-task and get each process
<br>
bound to the specified number of  cores.
<br>
<p>So there are a lot of options, including rankfile. Unfortunately, I see that
<br>
these options are not documented on the FAQ or the wiki. :-/
<br>
<p>Take a look at &quot;man mpirun&quot; and you'll see more info about all this in the
<br>
part on process binding options.
<br>
<p><p><p><p><p><span class="quotelev2">&gt; &gt; I have created a fix for this mess and will submit it for inclusion in
</span><br>
<span class="quotelev1">&gt; 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've applied to a 1.4.1 tree the patches from tickets #2318 and #2321
</span><br>
<span class="quotelev1">&gt; and I can confirm that both problems reported earlier are fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks - appreciate the confirmation!
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks - not your fault, so pardon the comments. Just had my fill of this
</span><br>
<span class="quotelev1">&gt; particular code since the creators of it no longer support it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No offense taken :-) I appreciate your efforts and I understand your
</span><br>
<span class="quotelev1">&gt; frustration about unmaintaned code. Thanks again !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Bogdan
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Previous message:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>In reply to:</strong> <a href="7518.php">Bogdan Costescu: "Re: [OMPI devel] Rankfile related problems"</a>
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
