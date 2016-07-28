<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 11:17:12 2007" -->
<!-- isoreceived="20071213161712" -->
<!-- sent="Thu, 13 Dec 2007 13:17:06 -0300" -->
<!-- isosent="20071213161706" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="e7ba66e40712130817u2ede243do6c90de55d6db2fa9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5312AE81-A825-42D5-BED9-EDCDEC61A529_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 11:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4667.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4665.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4674.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4674.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/13/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 7:47 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt; Specifically: it would probably require some significant hackery in
</span><br>
<span class="quotelev1">&gt; the OMPI build process to put in a #define that indicates whether OMPI
</span><br>
<span class="quotelev1">&gt; is being built statically or not.  But the AM/LT process shields this
</span><br>
<span class="quotelev1">&gt; information from the build process by design (part of the issue is
</span><br>
<span class="quotelev1">&gt; that AM/LT allows both static and shared libraries to be built
</span><br>
<span class="quotelev1">&gt; simultaneously).
</span><br>
<p>I see.
<br>
<p><span class="quotelev1">&gt; We'd then have to introduce some global symbol that
</span><br>
<span class="quotelev1">&gt; could be queried that is outside of the MPI interface.  Neither of
</span><br>
<span class="quotelev1">&gt; these things are attractive.  :-(
</span><br>
<p>You are right, a globlal symbols is not attractive at all just for this.
<br>
<p><span class="quotelev2">&gt; &gt; AFAIK, Python does not. It uses specific, private code for this,
</span><br>
<span class="quotelev2">&gt; &gt; handling the loading of extension modules according to the OS's and
</span><br>
<span class="quotelev2">&gt; &gt; their idiosyncracies. However, Python enable users to change the flags
</span><br>
<span class="quotelev2">&gt; &gt; used for dlopen'ing your extension modules; the tricky part is to get
</span><br>
<span class="quotelev2">&gt; &gt; the correct values RTLD_GLOBAL in a portable way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's somewhat surprising -- there's no public interfaces for modules
</span><br>
<span class="quotelev1">&gt; to portably load sub-modules?  Bummer.
</span><br>
<p>Perhaps I was not clear enough. There are many public ways of
<br>
importing modules in Python. Modules can came mainly from two sources:
<br>
pure Python code, or C compiled code. In the later case (called
<br>
extension modules), they are normally a shared object
<br>
(.so,.dylib,.dll) exporting only a simbol: 'void
<br>
init&lt;modulename&gt;(void)', this functions bootstraps the initialization
<br>
of the extension module. What is somewhat hidden is the actual way
<br>
Python loads this shared object and calls the init function. I believe
<br>
the reason for this is related to de gory details of dlopen()ing in
<br>
different OS's/archs combination.
<br>
<p>Anyway, Python enables you to temporarily change the flags to be used
<br>
in dlopen() calls, what is not (currently) so easy is to get the value
<br>
of RTLD_GLOBAL in a portable way.
<br>
<p>Jeff, in short: I believe I solved (with the help of Brian) the issue
<br>
in the context of Python and the platforms we have access to. So, from
<br>
our side, things are working.
<br>
<p>However, I believe this issue is going to cause trouble to any other
<br>
guy trying  to load shared objects using MPI. This makes me think that
<br>
Open MPI should be in charge or solving this, but I understand the
<br>
situation is complex and all us are usually out of time. I'll try to
<br>
re-read all the stuff to better understand the beast.
<br>
<p>Regards,
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
<li><strong>Next message:</strong> <a href="4667.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4665.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4674.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4674.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
