<?
$subject_val = "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 11:32:30 2016" -->
<!-- isoreceived="20160519153230" -->
<!-- sent="Thu, 19 May 2016 15:32:19 +0000" -->
<!-- isosent="20160519153219" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)" -->
<!-- id="9C14E366-E9BC-414A-8300-26BCAC3D67D5_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5vzWwYa_cDgZcpGeRnEwYHJ7noo0rzUTfCEcCwayUAf0A_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 11:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Previous message:</strong> <a href="19003.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>In reply to:</strong> <a href="19003.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a fix coming shortly; just about to push the PR...
<br>

<br>
<span class="quotelev1">&gt; On May 19, 2016, at 11:29 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note this affects OS X only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in opal/util/ethtool.c, ethtool_cmd_speed must not be defined if not HAVE_STRUCT_ETHTOOL_CMD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will not be able to push a fix until tomorrow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, May 20, 2016, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Travis seems to be broken due to a ethtool issue.
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
<span class="quotelev1">&gt; From: Travis CI &lt;builds_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, May 19, 2016 at 11:06 AM
</span><br>
<span class="quotelev1">&gt; Subject: Errored: open-mpi/ompi#1160 (master - 50b3775)
</span><br>
<span class="quotelev1">&gt; To: bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  open-mpi / ompi (master)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Build #1160 has errored.	 27 minutes and 43 seconds
</span><br>
<span class="quotelev1">&gt; 	George Bosilca	50b3775 Changeset &#226;&#134;&#146;
</span><br>
<span class="quotelev1">&gt;  	Don't overwrite the function argument.
</span><br>
<span class="quotelev1">&gt; In a MPMD setup the app in the jdata can be NULL, so make sure we
</span><br>
<span class="quotelev1">&gt; don't leave the main argument to an inconsistent value.
</span><br>
<span class="quotelev1">&gt; Want to know about upcoming build environment updates?
</span><br>
<span class="quotelev1">&gt; Would you like to stay up-to-date with the upcoming Travis CI build environment updates? We set up a mailing list for you! Sign up here.
</span><br>
<span class="quotelev1">&gt; 	Documentation about Travis CI
</span><br>
<span class="quotelev1">&gt; For help please join our IRC channel irc.freenode.net#travis.
</span><br>
<span class="quotelev1">&gt; Choose who receives these build notification emails in your configuration file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you like to test your private code?
</span><br>
<span class="quotelev1">&gt; Travis CI for Private Projects could be your new best friend!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19003.php">http://www.open-mpi.org/community/lists/devel/2016/05/19003.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Previous message:</strong> <a href="19003.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>In reply to:</strong> <a href="19003.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
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
