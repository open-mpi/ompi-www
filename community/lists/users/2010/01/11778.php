<?
$subject_val = "Re: [OMPI users] More NetBSD fixes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 15:17:02 2010" -->
<!-- isoreceived="20100114201702" -->
<!-- sent="Thu, 14 Jan 2010 15:16:58 -0500" -->
<!-- isosent="20100114201658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More NetBSD fixes" -->
<!-- id="C3EFC718-9AA2-4CF9-A7D7-1DD16FA090B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87vdf4mxu0.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] More NetBSD fixes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 15:16:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
<li><strong>Previous message:</strong> <a href="11777.php">Jeff Squyres: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>In reply to:</strong> <a href="11772.php">Aleksej Saushev: "[OMPI users] More NetBSD fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11782.php">Aleksej Saushev: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Reply:</strong> <a href="11782.php">Aleksej Saushev: "Re: [OMPI users] More NetBSD fixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I have this queued up to commit in a few hours (we try not to commit autogen/configure-worthy changes during the US workday).
<br>
<p><p>On Jan 14, 2010, at 11:54 AM, Aleksej Saushev wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Flawed logic: Linux isn't the only system with procfs.
</span><br>
<span class="quotelev1">&gt; NetBSD has procfs too and may have /proc/cpuinfo as well,
</span><br>
<span class="quotelev1">&gt; but it isn't Linux.
</span><br>
<span class="quotelev1">&gt; I didn't check if FreeBSD has &quot;cpuinfo&quot; as well,
</span><br>
<span class="quotelev1">&gt; FreeBSD 6.3 doesn't but it's being desupported soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Difference against openmpi-1.5a1r22193 snapshot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- opal/mca/pstat/linux/configure.m4.orig      2009-11-04 17:57:36.000000000 +0300
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/pstat/linux/configure.m4   2010-01-14 02:16:08.000000000 +0300
</span><br>
<span class="quotelev1">&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([MCA_pstat_linux_CONFIG],[
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     case &quot;${host}&quot; in
</span><br>
<span class="quotelev1">&gt; -   i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*)
</span><br>
<span class="quotelev1">&gt; +   i?86-*linux*|x86_64*linux*|ia64-*linux*|powerpc-*linux*|powerpc64-*linux*|sparc*-*linux*)
</span><br>
<span class="quotelev1">&gt;                AS_IF([test -r &quot;/proc/cpuinfo&quot;],
</span><br>
<span class="quotelev1">&gt;                       [pstat_linux_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;                       [pstat_linux_happy=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; HE CE3OH...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
<li><strong>Previous message:</strong> <a href="11777.php">Jeff Squyres: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>In reply to:</strong> <a href="11772.php">Aleksej Saushev: "[OMPI users] More NetBSD fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11782.php">Aleksej Saushev: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Reply:</strong> <a href="11782.php">Aleksej Saushev: "Re: [OMPI users] More NetBSD fixes"</a>
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
