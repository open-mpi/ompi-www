<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 09:08:07 2007" -->
<!-- isoreceived="20071211140807" -->
<!-- sent="Tue, 11 Dec 2007 11:08:01 -0300" -->
<!-- isosent="20071211140801" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="e7ba66e40712110608i7cde9c9fy7d9de09ae864c53c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C4255D9-BE7A-43AC-B6D2-AF178E3B2F6E_at_cisco.com" -->
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
<strong>Date:</strong> 2007-12-11 09:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4634.php">Thomas Ropars: "[OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/10/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Brian / Lisandro --
</span><br>
<span class="quotelev1">&gt; I don't think that I heard back from you on this issue.  Would you
</span><br>
<span class="quotelev1">&gt; have major heartburn if I remove all linking of our components against
</span><br>
<span class="quotelev1">&gt; libmpi (etc.)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (for a nicely-formatted refresher of the issues, check out <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>)
</span><br>
<p>Sorry for the late response...
<br>
<p>I've finally 'solved' this issue by using RTLD_GLOBAL for loading the
<br>
Python extension module that actually calls MPI_Init(). However, I'm
<br>
not completelly sure if my hackery is completelly portable.
<br>
<p>Looking briefly at the end of the link to the wiki page, you say that
<br>
if the explicit linking to libmpi on componets is removed, then
<br>
dlopen() has to be explicitelly called.
<br>
<p>Well, this would be a mayor headhace for me, because portability
<br>
issues. Please note that I've developed mpi4py on a rather old 32 bits
<br>
linux box, but it works in many different plataforms and OS's. I do
<br>
really do not have the time of testing and figure out how to
<br>
appropriatelly call dlopen() in platforms/OS's that I even do not have
<br>
access!!
<br>
<p>Anyway, perhaps OpenMPI could provide an extension: a function call,
<br>
let say 'ompi_load_dso()' or something like that, that can be called
<br>
before MPI_Init() for setting-up the monster. What to you think about
<br>
this? Would it be hard for you?
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
<li><strong>Next message:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4634.php">Thomas Ropars: "[OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
