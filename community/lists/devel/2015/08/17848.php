<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 11:03:09 2015" -->
<!-- isoreceived="20150825150309" -->
<!-- sent="Tue, 25 Aug 2015 11:03:03 -0400" -->
<!-- isosent="20150825150303" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="CAMJJpkWbnz4p-VMbBr41jG6HzSHirKqPB0USYyi7cYYdFv6Esg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55DC67F6.60301_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 11:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17849.php">Howard Pritchard: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This seems to be the case only with the TKR interface. All the others are
<br>
either calling the OMPI version directly (mpif-h), or are calling some
<br>
other internal (or weak symbol function).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Aug 25, 2015 at 9:04 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On 08/25/2015 02:44 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran some basic tests with IPM profiler-like
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/nerscadmin/IPM">https://github.com/nerscadmin/IPM</a> and found that when fortran calls an
</span><br>
<span class="quotelev2">&gt;&gt; mpi subroutine, this is accounted twice.
</span><br>
<span class="quotelev2">&gt;&gt; IPM defines both MPI_* subroutines and their fortran mpi_*_ counterpart.
</span><br>
<span class="quotelev2">&gt;&gt; since the ompi fortran calls the MPI_* symbol (and not the PMPI_* one),
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; IPM does nothing to prevent double accounting, all subroutines are
</span><br>
<span class="quotelev2">&gt;&gt; accounted twice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what is the rationale for calling MPI_* from fortran instead of PMPI_* ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; basically, I can see three options
</span><br>
<span class="quotelev2">&gt;&gt; 1. we do nothing, this is an IPM problem, not an Open MPI one
</span><br>
<span class="quotelev2">&gt;&gt; 2. we change ompi to call the PMPI_* symbols
</span><br>
<span class="quotelev2">&gt;&gt; 3. we add a configure option to call PMPI_* symbols instead of the MPI_*
</span><br>
<span class="quotelev2">&gt;&gt; ones
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any thoughts ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more datapoint, also from a monitor tool (Score-P, as some of you
</span><br>
<span class="quotelev1">&gt; know): The Open SHMEM part of Open MPI also calls the MPI interface, not
</span><br>
<span class="quotelev1">&gt; the PMPI. That may result in performance data from MPI calls in SHMEM
</span><br>
<span class="quotelev1">&gt; applications, which seems weird too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17843.php">http://www.open-mpi.org/community/lists/devel/2015/08/17843.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17849.php">Howard Pritchard: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
