<?
$subject_val = "Re: [OMPI devel] Jenkins setup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 23:07:18 2016" -->
<!-- isoreceived="20160723030718" -->
<!-- sent="Fri, 22 Jul 2016 22:07:07 -0500" -->
<!-- isosent="20160723030707" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins setup" -->
<!-- id="CAANzjE=qELkP1qPoL3ghVcDpPs5kEMdAeO_nWa6oBaXAif_qQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BED888AE-D0F1-42A1-A4C8-D82A57C9DA1F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Jenkins setup<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-22 23:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19274.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins setup"</a>
<li><strong>Previous message:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
<li><strong>In reply to:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19274.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins setup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two pages that I know of:
<br>
&nbsp;* <a href="https://github.com/open-mpi/ompi/wiki/PRJenkins">https://github.com/open-mpi/ompi/wiki/PRJenkins</a>
<br>
&nbsp;* <a href="https://github.com/open-mpi/ompi/wiki/PRJenkinsSetupFirewall">https://github.com/open-mpi/ompi/wiki/PRJenkinsSetupFirewall</a>
<br>
<p>I wrote the second one, and it includes some details on how to setup the
<br>
Pull Request Builder. You probably don't need all of it, since it also has
<br>
the work around for the firewall. But it should get you started.
<br>
<p>Another thing that is helpful is to get access to the IU Jenkins setup so
<br>
you can see the configuration used there. Then try to mimic that. It would
<br>
be good to document those details too - I tried to do that in the
<br>
PRJenkinsSetupFirewall page, but it's probably not clear enough where the
<br>
'basic' setup ends and the additional 'firewall' part starts.
<br>
<p><p>On Fri, Jul 22, 2016 at 7:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m setting up a local Jenkins server on my box and could use some
</span><br>
<span class="quotelev1">&gt; directions. I have Jenkins up, and have pulled down
</span><br>
<span class="quotelev1">&gt; the jenkinsci/ghprb-plugin.git repo, but I can&#226;&#128;&#153;t find on our wiki pages
</span><br>
<span class="quotelev1">&gt; the instructions on how to configure Jenkins jobs for this purpose, or how
</span><br>
<span class="quotelev1">&gt; to setup the &#226;&#128;&#156;hook&#226;&#128;&#157; to make it all work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone point me to the relevant wiki pages? I&#226;&#128;&#153;ll then add them to the
</span><br>
<span class="quotelev1">&gt; nav bar so others can find them. If we don&#226;&#128;&#153;t have this documented, then
</span><br>
<span class="quotelev1">&gt; please send me the instructions and I&#226;&#128;&#153;ll add the docs to the wiki.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19272.php">http://www.open-mpi.org/community/lists/devel/2016/07/19272.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19274.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins setup"</a>
<li><strong>Previous message:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
<li><strong>In reply to:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19274.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins setup"</a>
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
