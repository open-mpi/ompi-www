<?
$subject_val = "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 21:14:21 2010" -->
<!-- isoreceived="20100729011421" -->
<!-- sent="Wed, 28 Jul 2010 18:13:52 -0700" -->
<!-- isosent="20100729011352" -->
<!-- name="John Hsu" -->
<!-- email="johnhsu_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki" -->
<!-- id="AANLkTi=X8Lio-wxfNESXQ6dhHPgD48We7YTK8v3Gct2d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTik3j8rj1nB7Xe7wrz1iuY3nMC+0THiKSVppGsJx_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki<br>
<strong>From:</strong> John Hsu (<em>johnhsu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 21:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Jeff Squyres: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Radu C: "[OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Radu C: "[OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Jeff Squyres: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
alternaitvely, there's mpich, lambda and intel has their own version of
<br>
mpi.  The mpich installation on wgsgX should be functional as well.
<br>
John
<br>
<p>On Wed, Jul 28, 2010 at 5:58 PM, Radu C &lt;radu.cx+openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having no way to send a report without subscribing to a mailing list, here
</span><br>
<span class="quotelev1">&gt; I am...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just started looking into Open MPI, and so far I found a few errors in
</span><br>
<span class="quotelev1">&gt; the man pages that are posted on the Open MPI website:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.4/man3/MPI.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI.3.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.4/man3/OpenMPI.3.php">http://www.open-mpi.org/doc/v1.4/man3/OpenMPI.3.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that MPI does not guarantee that an MPI pro-
</span><br>
<span class="quotelev1">&gt;        MPI_ERR_BUFFER           1      Invalid buffer pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The note paragraph is truncated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Init_thread.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Init_thread.3.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This one has the note that is truncated in the above page intact, but has
</span><br>
<span class="quotelev1">&gt; something else truncated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE     If  the  process  is  multithreaded,   multiple
</span><br>
<span class="quotelev1">&gt;                                threads  may  call MPI at once with no
</span><br>
<span class="quotelev1">&gt; restric-
</span><br>
<span class="quotelev1">&gt;                                tions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        modifies, interprets, nor distributes them:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Haven't checked other man pages. Still looking for a &quot;Hello World&quot;
</span><br>
<span class="quotelev1">&gt; tutorial, to have a taste of Open MPI, see if I like it and if I'd like some
</span><br>
<span class="quotelev1">&gt; more, on this page: <a href="http://www.open-mpi.org/projects/user-docs/">http://www.open-mpi.org/projects/user-docs/</a> I followed
</span><br>
<span class="quotelev1">&gt; the link to the wiki: <a href="https://svn.open-mpi.org/trac/ompi-user-docs/wiki">https://svn.open-mpi.org/trac/ompi-user-docs/wiki</a>.
</span><br>
<span class="quotelev1">&gt; But it says Environment not found. Ended up on Google, as suggested by the
</span><br>
<span class="quotelev1">&gt; FAQ. Hope I like what I see :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;     Radu C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Jeff Squyres: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Radu C: "[OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Radu C: "[OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Jeff Squyres: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
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
