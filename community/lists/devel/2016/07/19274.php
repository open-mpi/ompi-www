<?
$subject_val = "Re: [OMPI devel] Jenkins setup";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 23 02:09:16 2016" -->
<!-- isoreceived="20160723060916" -->
<!-- sent="Sat, 23 Jul 2016 15:09:05 +0900" -->
<!-- isosent="20160723060905" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins setup" -->
<!-- id="CAAkFZ5uhS9oe89Ada=krRwbKMwZYxwkw9KsvQKEZpD-BeBB-ag_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-23 02:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19273.php">Josh Hursey: "Re: [OMPI devel] Jenkins setup"</a>
<li><strong>In reply to:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I am not sure of what you mean by &quot;hook&quot;
<br>
<p>there are basically two ways to trigger a build
<br>
- github webhook contact your Jenkins server. your server must be
<br>
publically accessible, and you need to register it's url in github. new
<br>
build start right after a pr is created
<br>
- poll from the Jenkins server. your server periodically check github if
<br>
there are any new pr to build.
<br>
no need for any github config, nor any public ip for your server. if you
<br>
want to make log accessible, it is up to you to do that (fwiw, ibm upload
<br>
latest logs into a gist)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, July 23, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19273.php">Josh Hursey: "Re: [OMPI devel] Jenkins setup"</a>
<li><strong>In reply to:</strong> <a href="19272.php">Ralph Castain: "[OMPI devel] Jenkins setup"</a>
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
