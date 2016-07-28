<?
$subject_val = "[OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 17:59:41 2009" -->
<!-- isoreceived="20090916215941" -->
<!-- sent="Wed, 16 Sep 2009 18:59:37 -0300" -->
<!-- isosent="20090916215937" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk" -->
<!-- id="e7ba66e40909161459v13248915qbca56f84bdba9290_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 17:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.. I have to contact you again about the issues related to
<br>
dlopen()ing libmpi with RTLD_LOCAL, as many dynamic languages (Python
<br>
in my case) do.
<br>
<p>So far, I've been able to manage the issues (despite the &quot;do nothing&quot;
<br>
policy from Open MPI devs, which I understand) in a more or less
<br>
portable manner by taking advantage of the availability of libtool
<br>
ltdl symbols in the Open MPI libraries (specifically, in libopen-pal).
<br>
For reference, all this hackery is here:
<br>
<a href="http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h">http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h</a>
<br>
<p>However, I noticed that in current trunk (v1.4, IIUC) things have
<br>
changed and libtool symbols are not externally available. Again, I
<br>
understand the reason and acknowledge that such change is a really
<br>
good thing. However, this change has broken all my hackery for
<br>
dlopen()ing libmpi before the call to MPI_Init().
<br>
<p>Is there any chance that libopen-pal could provide some properly
<br>
prefixed (let say, using &quot;opal_&quot; as a prefix) wrapper calls to a small
<br>
subset of the libtool ltdl API? The following set of wrapper calls
<br>
would is the minimum required to properly load libmpi in a portable
<br>
manner and cleanup resources (let me abuse of my previous suggestion
<br>
and add the opal_ prefix):
<br>
<p>opal_lt_dlinit()
<br>
opal_lt_dlexit()
<br>
<p>opal_lt_dladvise_init(a)
<br>
opal_lt_dladvise_destroy(a)
<br>
opal_lt_dladvise_global(a)
<br>
opal_lt_dladvise_ext(a)
<br>
<p>opal_lt_dlopenadvise(n,a)
<br>
opal_lt_dlclose(h)
<br>
<p>Any chance this request could be considered? I would really like to
<br>
have this before any Open MPI tarball get released without libtool
<br>
symbols exposed...
<br>
<p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
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
