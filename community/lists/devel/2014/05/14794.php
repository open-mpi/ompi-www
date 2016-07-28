<?
$subject_val = "Re: [OMPI devel] Please provide the pshmem_finalize symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 09:15:17 2014" -->
<!-- isoreceived="20140514131517" -->
<!-- sent="Wed, 14 May 2014 16:15:14 +0300" -->
<!-- isosent="20140514131514" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Please provide the pshmem_finalize symbol" -->
<!-- id="CAAO1KyYoVwonWruZUsHzS4BkB9hr6bxtFt1iPPCyS3J8wSobww_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53730AEA.8020101_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Please provide the pshmem_finalize symbol<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 09:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<li><strong>Previous message:</strong> <a href="14793.php">Bert Wesarg: "[OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>In reply to:</strong> <a href="14793.php">Bert Wesarg: "[OMPI devel] Please provide the pshmem_finalize symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Reply:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
here it goes, <a href="https://svn.open-mpi.org/trac/ompi/changeset/31751">https://svn.open-mpi.org/trac/ompi/changeset/31751</a>
<br>
<p><p><p>On Wed, May 14, 2014 at 9:19 AM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the Score-P community is currently in the process to support the OpenSHMEM
</span><br>
<span class="quotelev1">&gt; API in its performance measurement infrastructure Score-P [1]. And we are
</span><br>
<span class="quotelev1">&gt; near a release of a new major version of it. Now that Open MPI also
</span><br>
<span class="quotelev1">&gt; provides an OpenSHMEM implementation, we extended our testing also to the
</span><br>
<span class="quotelev1">&gt; new 1.8 version of Open MPI. We already submitted some bug reports while we
</span><br>
<span class="quotelev1">&gt; are working on this, but the last one isn't really a bug though:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OpenSHMEM standard does not include the shmem_finalize API, though
</span><br>
<span class="quotelev1">&gt; Open MPI provides one and also ensures (via the destructor attribute) that
</span><br>
<span class="quotelev1">&gt; this function is called in the end. But when a performance monitor like
</span><br>
<span class="quotelev1">&gt; Score-P intercepts the library calls via weak symbols we finally need to
</span><br>
<span class="quotelev1">&gt; call the original function too. As the user is free to call this function
</span><br>
<span class="quotelev1">&gt; itself, but Score-P still needs the parallel context to finalize the
</span><br>
<span class="quotelev1">&gt; measurement after exiting main, we need to intercept shmem_finalize and
</span><br>
<span class="quotelev1">&gt; call the real shmem_finalize after we are done. But unfortunately we can't
</span><br>
<span class="quotelev1">&gt; call the original shmem_finalize as there is no pshmem_finalize in Open
</span><br>
<span class="quotelev1">&gt; MPI. But without finalizing the Open MPI library orterun will report errors
</span><br>
<span class="quotelev1">&gt; because the application did not call shmem_finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So our pledge to the Open MPI community is to provide the pshmem_finalize
</span><br>
<span class="quotelev1">&gt; symbol, even though this function is not (yet) in the OpenSHMEM standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.vi-hps.org/projects/score-p">http://www.vi-hps.org/projects/score-p</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; E-Mail: Bert.Wesarg_at_tu-dresden.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14793.php">http://www.open-mpi.org/community/lists/devel/2014/05/14793.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<li><strong>Previous message:</strong> <a href="14793.php">Bert Wesarg: "[OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>In reply to:</strong> <a href="14793.php">Bert Wesarg: "[OMPI devel] Please provide the pshmem_finalize symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Reply:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
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
