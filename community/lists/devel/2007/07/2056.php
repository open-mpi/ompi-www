<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 31 16:52:38 2007" -->
<!-- isoreceived="20070731205238" -->
<!-- sent="Tue, 31 Jul 2007 17:52:34 -0300" -->
<!-- isosent="20070731205234" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="e7ba66e40707311352g5594282du6f64fd0f468915fb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070731114401.GA11798_at_mhdmobile.wis.kuleuven.be" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-31 16:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2055.php">George Bosilca: "Re: [OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>In reply to:</strong> <a href="2054.php">Dries Kimpe: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/31/07, Dries Kimpe &lt;Dries.Kimpe_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The MPI_File_get_view description in the standard has some issues related
</span><br>
<span class="quotelev1">&gt; to copies and named datatypes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev1">&gt; <a href="http://www-unix.mcs.anl.gov/~gropp/projects/parallel/MPI/mpi-errata/discuss/fileview/fileview-1-clean.txt">http://www-unix.mcs.anl.gov/~gropp/projects/parallel/MPI/mpi-errata/discuss/fileview/fileview-1-clean.txt</a>
</span><br>
<p>Indeed, your comment was exactly the source of my comment (BTW, thank
<br>
you, this helped me to fix my Python wrappers)
<br>
<p>In general, I think MPI standard should be fixed/clarified in many
<br>
places regarding to handling of returned references. Testing for
<br>
predefined Comm a Group handling is rather easy, but for Datatypes is
<br>
really cumbersome. Perhaps a MPI_Type_is_named(MPI_Datatype, int*flag)
<br>
would help a lot. What do you think?
<br>
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2055.php">George Bosilca: "Re: [OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>In reply to:</strong> <a href="2054.php">Dries Kimpe: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
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
