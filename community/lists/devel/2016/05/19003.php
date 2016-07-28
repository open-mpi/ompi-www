<?
$subject_val = "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 11:29:42 2016" -->
<!-- isoreceived="20160519152942" -->
<!-- sent="Fri, 20 May 2016 00:29:41 +0900" -->
<!-- isosent="20160519152941" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)" -->
<!-- id="CAAkFZ5vzWwYa_cDgZcpGeRnEwYHJ7noo0rzUTfCEcCwayUAf0A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWLWr11QPHQr7kTPpbJ0gAKhbQCjRYNQk95L4d+u8dAXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 11:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Previous message:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>In reply to:</strong> <a href="19001.php">George Bosilca: "[OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Reply:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note this affects OS X only.
<br>
<p>in opal/util/ethtool.c, ethtool_cmd_speed must not be defined if not
<br>
HAVE_STRUCT_ETHTOOL_CMD
<br>
<p>I will not be able to push a fix until tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, May 20, 2016, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Travis seems to be broken due to a ethtool issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Travis CI &lt;builds_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','builds_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, May 19, 2016 at 11:06 AM
</span><br>
<span class="quotelev1">&gt; Subject: Errored: open-mpi/ompi#1160 (master - 50b3775)
</span><br>
<span class="quotelev1">&gt; To: bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','bosilca_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *open-mpi / ompi &lt;<a href="https://travis-ci.org/open-mpi/ompi">https://travis-ci.org/open-mpi/ompi</a>&gt;* (master
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/open-mpi/ompi/tree/master">https://github.com/open-mpi/ompi/tree/master</a>&gt;)
</span><br>
<span class="quotelev1">&gt; Build #1160 has errored.
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://travis-ci.org/open-mpi/ompi/builds/131434404">https://travis-ci.org/open-mpi/ompi/builds/131434404</a>&gt;
</span><br>
<span class="quotelev1">&gt; 27 minutes and 43 seconds
</span><br>
<span class="quotelev1">&gt; *George Bosilca* 50b3775
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/open-mpi/ompi/commit/50b37758d4a41a4322fee0d7d9cdf1924c8f42de">https://github.com/open-mpi/ompi/commit/50b37758d4a41a4322fee0d7d9cdf1924c8f42de</a>&gt; Changeset
</span><br>
<span class="quotelev1">&gt; &#226;&#134;&#146; &lt;<a href="https://github.com/open-mpi/ompi/compare/fd93d236b141...50b37758d4a4">https://github.com/open-mpi/ompi/compare/fd93d236b141...50b37758d4a4</a>&gt;
</span><br>
<span class="quotelev1">&gt;   Don't overwrite the function argument.
</span><br>
<span class="quotelev1">&gt; In a MPMD setup the app in the jdata can be NULL, so make sure we
</span><br>
<span class="quotelev1">&gt; don't leave the main argument to an inconsistent value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Want to know about upcoming build environment updates?*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you like to stay up-to-date with the upcoming Travis CI build
</span><br>
<span class="quotelev1">&gt; environment updates? We set up a mailing list for you! Sign up here
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://eepurl.com/9OCsP">http://eepurl.com/9OCsP</a>&gt;.
</span><br>
<span class="quotelev1">&gt; Documentation &lt;<a href="https://docs.travis-ci.com">https://docs.travis-ci.com</a>&gt; about Travis CI
</span><br>
<span class="quotelev1">&gt; For help please join our IRC channel irc.freenode.net#travis.
</span><br>
<span class="quotelev1">&gt; Choose who receives these build notification emails in your configuration
</span><br>
<span class="quotelev1">&gt; file &lt;<a href="https://docs.travis-ci.com/user/notifications">https://docs.travis-ci.com/user/notifications</a>&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Would you like to test your private code?*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Travis CI for Private Projects
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://travis-ci.com?utm_source=build_email_footer&amp;utm_campaign=travis-ci.org&amp;utm_medium=email">https://travis-ci.com?utm_source=build_email_footer&amp;utm_campaign=travis-ci.org&amp;utm_medium=email</a>&gt;
</span><br>
<span class="quotelev1">&gt; could be your new best friend!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Previous message:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>In reply to:</strong> <a href="19001.php">George Bosilca: "[OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Reply:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
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
