<?
$subject_val = "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 18:38:18 2014" -->
<!-- isoreceived="20140423223818" -->
<!-- sent="Wed, 23 Apr 2014 15:38:16 -0700" -->
<!-- isosent="20140423223816" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="CAAvDA17-CBzKKGc5QcmmvTTXMqEh7jBuNs6ypE6R64F2S1JLFA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5B6BD1D-A3BA-44C9-9ACC-6843C1AC6AB7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PATCH: Mark fd as close-on-exec<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 18:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4137.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, POSIX defines exactly one flag accessed via F_GETFD/F_SETFD and
<br>
that is FD_CLOEXEC.
<br>
However, it does not prohibit a conforming implementation from defining
<br>
additional bits.
<br>
<p>So, a portable program should assume other bits may be set and try to
<br>
preserve them.
<br>
<p>Quoting from section 3.14 of Steven's Advanced Programming in the UNIX
<br>
Environment:
<br>
<p>When we modify either the file descriptor flags or the file status flags,
<br>
we must be
<br>
careful to fetch the existing value, modify it as desired, and then set the
<br>
new flag
<br>
value.  We can't simply issue an F_SETFD or F_SETFL command, as this could
<br>
turn
<br>
off flag bits that were previously set.
<br>
<p>See also the example in
<br>
<a href="http://www.gnu.org/software/libc/manual/html_node/Descriptor-Flags.html">http://www.gnu.org/software/libc/manual/html_node/Descriptor-Flags.html</a>
<br>
<p>-Paul [Who always does what the late W. Richard Stevens says to.]
<br>
<p><p>On Wed, Apr 23, 2014 at 3:11 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; We opened the fd a few lines above with default flags -- is the addition
</span><br>
<span class="quotelev1">&gt; GETFD necessary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/blob/master/src/topology-linux.c#L4595">https://github.com/open-mpi/hwloc/blob/master/src/topology-linux.c#L4595</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2014, at 6:04 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In order to preserve any existing flags, shouldn't this be more like:
</span><br>
<span class="quotelev2">&gt; &gt;   int prev;
</span><br>
<span class="quotelev2">&gt; &gt;   if ((-1 == (prev =  fcntl(root, F_GETFD, 0)) ||
</span><br>
<span class="quotelev2">&gt; &gt;       (-1 == fcntl(root, F_SETFD, FD_CLOEXEC | prev)))
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Apr 23, 2014 at 2:55 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Will do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 23, 2014, at 5:52 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres (jsquyres), le Wed 23 Apr 2014 21:05:55 +0000, a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Any objections to this patch?  In OMPI, we're seeing this fd leak
</span><br>
<span class="quotelev1">&gt; into child processes.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; diff --git a/src/topology-linux.c b/src/topology-linux.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; index e934d4c..8c5fba1 100644
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --- a/src/topology-linux.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +++ b/src/topology-linux.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; @@ -4601,6 +4601,13 @@ hwloc_linux_component_instantiate(struct
</span><br>
<span class="quotelev1">&gt; hwloc_disc_compo
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     data-&gt;is_real_fsroot = 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We probably want an #ifdef FD_CLOEXEC here, not all systems have it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +  /* Since this fd stays open after hwloc returns, mark it as
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +     close-on-exec so that children don't inherit it */
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +      close(root);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +      root = -1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +      goto out_with_data;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #else
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   if (strcmp(fsroot_path, &quot;/&quot;)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     errno = ENOSYS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Samuel
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Je suis maintenant possesseur d'un ordinateur portable Compaq Armada
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1592DT avec port infra-rouge. Auriez-vous connaissance de programmes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; suceptibles d'utiliser ce port afin de servir de t&#233;l&#233;commande ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -+- JN in NPC : ben quoi, c'est pas &#224; &#231;a que &#231;a sert ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4137.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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
