<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 19:48:04 2007" -->
<!-- isoreceived="20071213004804" -->
<!-- sent="Wed, 12 Dec 2007 21:47:59 -0300" -->
<!-- isosent="20071213004759" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="e7ba66e40712121647o3a997ff8t6ad698757546a19c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9FB6C061-31A5-457D-BE7D-420BEA9D5043_at_cisco.com" -->
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
<strong>Date:</strong> 2007-12-12 19:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4660.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4656.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/12/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 6:32 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Do I have the libtool API calls available when linking against
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should, yes.
</span><br>
<p>OK, but now I realize that I cannot simply call libtool dlopen()
<br>
inconditionally, as libmpi.so could not exist in a static lib build.
<br>
<p><span class="quotelev1">&gt; Also, see my later post: doesn't perl/python have some kind of
</span><br>
<span class="quotelev1">&gt; portable dlopen anyway?  They're opening your module...?
</span><br>
<p>AFAIK, Python does not. It uses specific, private code for this,
<br>
handling the loading of extension modules according to the OS's and
<br>
their idiosyncracies. However, Python enable users to change the flags
<br>
used for dlopen'ing your extension modules; the tricky part is to get
<br>
the correct values RTLD_GLOBAL in a portable way.
<br>
<p><span class="quotelev2">&gt; &gt; Is there any another way of setting a MCA parameter?
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>.
</span><br>
<p>OK, it seems there isn't a programatic way. Anyway, putenv() should
<br>
not be a souce of portability problems.
<br>
<p>Jeff, once you have this parameter enabled, please write me in order I
<br>
can do some testing. Many tanks for your clarifications and help.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="4660.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4656.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
