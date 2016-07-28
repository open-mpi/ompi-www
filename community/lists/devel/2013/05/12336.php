<?
$subject_val = "Re: [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 08:33:31 2013" -->
<!-- isoreceived="20130501123331" -->
<!-- sent="Wed, 1 May 2013 12:33:26 +0000" -->
<!-- isosent="20130501123326" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1D191D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwCXnkFYqPZ-jS9vB2-7KsKjB2ZKEkJbo1aCA3EwZiZ0YQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 08:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12337.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
<li><strong>Previous message:</strong> <a href="12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>In reply to:</strong> <a href="12334.php">Lisandro Dalcin: "[OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right you are -- many thanks for finding the issue.  I just committed a fix to the trunk in SVN r28430; I'll CMR it over to v1.7.
<br>
<p>On May 1, 2013, at 4:56 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It seems that Mrecv() tries to write on the status arg, even when it
</span><br>
<span class="quotelev1">&gt; is STATUS_IGNORE. Looking at the sources (pmrecv.c and pmprobe.c),
</span><br>
<span class="quotelev1">&gt; there are some memcheck code paths that access status but do not check
</span><br>
<span class="quotelev1">&gt; for STATUS_IGNORE, please review them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat tmp.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Message message;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  message = MPI_MESSAGE_NO_PROC;
</span><br>
<span class="quotelev1">&gt;  MPI_Mrecv(NULL, 0, MPI_BYTE, &amp;message, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc tmp.c
</span><br>
<span class="quotelev1">&gt; $ valgrind ./a.out
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ==17489==
</span><br>
<span class="quotelev1">&gt; ==17489== Invalid write of size 8
</span><br>
<span class="quotelev1">&gt; ==17489==    at 0x4CA811C: PMPI_Mrecv (pmrecv.c:62)
</span><br>
<span class="quotelev1">&gt; ==17489==    by 0x400816: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==17489==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==17489==
</span><br>
<span class="quotelev1">&gt; [localhost:17489] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [localhost:17489] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [localhost:17489] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [localhost:17489] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (INTEC/CONICET-UNL)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1011)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12337.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
<li><strong>Previous message:</strong> <a href="12335.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>In reply to:</strong> <a href="12334.php">Lisandro Dalcin: "[OMPI devel] MPI_Mrecv(..., MPI_STATUS_IGNORE) in Open MPI 1.7.1"</a>
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
