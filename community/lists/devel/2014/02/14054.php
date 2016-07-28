<?
$subject_val = "Re: [OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 16:49:48 2014" -->
<!-- isoreceived="20140208214948" -->
<!-- sent="Sat, 8 Feb 2014 22:49:47 +0100" -->
<!-- isosent="20140208214947" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new CRS component added (criu)" -->
<!-- id="20140208214947.GE4981_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3E73D97D-EA33-4C11-92E5-2C613B432851_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] new CRS component added (criu)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 16:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14055.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14053.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 07, 2014 at 10:08:48PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Sweet -- +1 for CRIU support!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I see you modeled your configure.m4 off the blcr configure.m4, but I'd actually go with making it a bit simpler.  For example, I typically structure my configure.m4's like this (typed in mail client -- forgive mistakes...):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;    AS_IF([...some test....], [crs_criu_happy=1], [crs_criu_happy=0])
</span><br>
<span class="quotelev1">&gt;    # Only bother doing the next test if the previous one passed
</span><br>
<span class="quotelev1">&gt;    AS_IF([test $crs_criu_happy -eq 1 &amp;&amp; ...next test....], 
</span><br>
<span class="quotelev1">&gt;          [crs_criu_happy=1], [crs_criu_happy=0])
</span><br>
<span class="quotelev1">&gt;    # Only bother doing the next test if the previous one passed
</span><br>
<span class="quotelev1">&gt;    AS_IF([test $crs_criu_happy -eq 1 &amp;&amp; ...next test....], 
</span><br>
<span class="quotelev1">&gt;          [crs_criu_happy=1], [crs_criu_happy=0])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ...etc...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    # Put a single execution of $2 and $3 at the end, depending on how the 
</span><br>
<span class="quotelev1">&gt;    # above tests go.  If a human asked for criu (e.g., --with-criu) and
</span><br>
<span class="quotelev1">&gt;    # we can't find criu support, that's a fatal error.
</span><br>
<span class="quotelev1">&gt;    AS_IF([test $crs_criu_happy -eq 1],
</span><br>
<span class="quotelev1">&gt;          [$2],
</span><br>
<span class="quotelev1">&gt;          [AS_IF([test &quot;$with_criu&quot; != &quot;x&quot; &amp;&amp; &quot;x$with_criu&quot; != &quot;xno&quot;],
</span><br>
<span class="quotelev1">&gt;                 [AC_MSG_WARN([You asked for CRIU support, but I can't find it.])
</span><br>
<span class="quotelev1">&gt;                  AC_MSG_ERROR([Cannot continue])],
</span><br>
<span class="quotelev1">&gt;                 [$1])
</span><br>
<span class="quotelev1">&gt;           ])
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I note you have a stray $3 at the end of your configure.m4, too (it might supposed to be $2?).
</span><br>
<p>I think I do not really understand configure.m4 and was happy to just
<br>
copy it from blcr. Especially what $2 and $3 mean and how they are
<br>
supposed to be used. I will try to simplify my configure.m4. Is there an
<br>
example which I can have a look at?
<br>
<p><span class="quotelev1">&gt; Finally, I note you're looking for libcriu.  Last time I checked with the CRIU guys -- which was quite a while ago -- that didn't exist (but I put in my $0.02 that OMPI would like to see such a userspace library).  I take it that libcriu now exists?
</span><br>
<p>Yes criu has introduced libcriu with the 1.1 release. It is used to
<br>
create RPCs to the criu process running as a service. I submitted a few
<br>
patches to criu to actually install the headers and libraries and
<br>
included it in the Fedora package:
<br>
<p><a href="https://admin.fedoraproject.org/updates/criu-1.1-4.fc20">https://admin.fedoraproject.org/updates/criu-1.1-4.fc20</a>
<br>
<p>This is what I am currently using to build against criu.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14055.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14053.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
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
