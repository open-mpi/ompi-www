<?
$subject_val = "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 08:40:21 2013" -->
<!-- isoreceived="20130702124021" -->
<!-- sent="Tue, 2 Jul 2013 12:40:16 +0000" -->
<!-- isosent="20130702124016" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6CC733_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130702030616.GS25597_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 08:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22227.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22225.php">Justin Bronder: "[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox"</a>
<li><strong>In reply to:</strong> <a href="22225.php">Justin Bronder: "[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed upstream at <a href="https://svn.open-mpi.org/trac/ompi/changeset/28702">https://svn.open-mpi.org/trac/ompi/changeset/28702</a>, and filed CMRs for the v1.6 and v1.7 series.
<br>
<p>I don't know if there will be another release in the 1.6 series, but if there is, this will be in there.
<br>
<p>Thank you!
<br>
<p><p>On Jul 1, 2013, at 11:06 PM, Justin Bronder &lt;jsbronder_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As described in the comments in the source, Gentoo's own version of
</span><br>
<span class="quotelev1">&gt; fakeroot, sandbox, also runs into hangs when malloc is overridden.
</span><br>
<span class="quotelev1">&gt; Sandbox environments can easily be detected by looking for SANDBOX_PID
</span><br>
<span class="quotelev1">&gt; in the environment.  When detected, employ the same fix used for
</span><br>
<span class="quotelev1">&gt; fakeroot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See <a href="https://bugs.gentoo.org/show_bug.cgi?id=462602">https://bugs.gentoo.org/show_bug.cgi?id=462602</a>
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux/hooks.c | 11 +++++++++--
</span><br>
<span class="quotelev1">&gt; 1 file changed, 9 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/memory/linux/hooks.c b/opal/mca/memory/linux/hooks.c
</span><br>
<span class="quotelev1">&gt; index 6a1646f..ce91e76 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/memory/linux/hooks.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/memory/linux/hooks.c
</span><br>
<span class="quotelev1">&gt; @@ -747,9 +747,16 @@ static void opal_memory_linux_malloc_init_hook(void)
</span><br>
<span class="quotelev1">&gt;        &quot;fakeroot&quot; build environment that allocates memory during
</span><br>
<span class="quotelev1">&gt;        stat() (see <a href="http://bugs.debian.org/531522">http://bugs.debian.org/531522</a>).  It may not be
</span><br>
<span class="quotelev1">&gt;        necessary any more since we're using access(), not stat().  But
</span><br>
<span class="quotelev1">&gt; -       we'll leave the check, anyway. */
</span><br>
<span class="quotelev1">&gt; +       we'll leave the check, anyway.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +       This is also an issue when using Gentoo's version of 'fakeroot',
</span><br>
<span class="quotelev1">&gt; +       sandbox v2.5.  Sandbox environments can also be detected fairly
</span><br>
<span class="quotelev1">&gt; +       easily by looking for SANDBOX_PID.
</span><br>
<span class="quotelev1">&gt; +    */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     if (getenv(&quot;FAKEROOTKEY&quot;) != NULL ||
</span><br>
<span class="quotelev1">&gt; -        getenv(&quot;FAKED_MODE&quot;) != NULL) {
</span><br>
<span class="quotelev1">&gt; +        getenv(&quot;FAKED_MODE&quot;) != NULL ||
</span><br>
<span class="quotelev1">&gt; +        getenv(&quot;SANDBOX_PID&quot;) != NULL ) {
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.8.1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Justin Bronder
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22227.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22225.php">Justin Bronder: "[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox"</a>
<li><strong>In reply to:</strong> <a href="22225.php">Justin Bronder: "[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox"</a>
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
