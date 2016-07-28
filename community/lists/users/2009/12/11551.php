<?
$subject_val = "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 23:12:01 2009" -->
<!-- isoreceived="20091216041201" -->
<!-- sent="Tue, 15 Dec 2009 21:11:57 -0700" -->
<!-- isosent="20091216041157" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184" -->
<!-- id="auto-000021432141_at_sci.utah.edu" -->
<!-- inreplyto="c7269c9e0912151912p23da5313y640d2256162362de_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 23:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>Reply:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>Maybe reply:</strong> <a href="11588.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simon Su &lt;newsgroup4ssu_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; Hi Tom,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the standard openmpi package that run on all the cluster
</span><br>
<span class="quotelev1">&gt; machines here at Princeton. So, maybe I shouldn't touch openmpi. But,
</span><br>
<span class="quotelev1">&gt; removing -lrdmacm from the MPI_LIBS line in the machinename.conf file
</span><br>
<span class="quotelev1">&gt; worked.  Any implication from doing this?
</span><br>
<p>The only thing it could possibly do is disable RDMA for you.  However,
<br>
since removing it did not produce any undefined symbol errors, my guess
<br>
is that your OpenMPI isn't using RDMA anyway.
<br>
<p>There might be an OpenMPI bug here, though.  I've cc'd the OpenMPI
<br>
community to see if they have any input.  As a summary for them: Simon
<br>
is trying to build our MPI-enabled application.  A script which tries
<br>
to automate this adds the output of &quot;mpic++ -show&quot;.  His build then
<br>
failed because it attempted to link against librdmacm, which does not
<br>
exist in his normal search paths (or maybe at all).  Is it possible
<br>
that `mpic++ -show' includes/adds &quot;-lrdmacm&quot; even when OpenMPI is not
<br>
itself using the library?
<br>
<p>Thanks,
<br>
<p>-tom
<br>
<p><span class="quotelev1">&gt; On Tue, Dec 15, 2009 at 8:46 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Simon Su &lt;newsgroup4ssu_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am getting this error message while building 9184.
</span><br>
<span class="quotelev2">&gt; &gt; [snip]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -lz -lm -ldl  -lpthread -L/usr/local/openmpi/1.3.3/gcc/x86_64/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -lmpi_cxx -lmpi -lopen-rte -lopen-pal -lrdmacm -libverbs -lnuma -ldl
</span><br>
<span class="quotelev2">&gt; &gt; -lnsl
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -lutil -lm  -lcognomen \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         -L/usr/local/openmpi/1.3.3/gcc/x86_64/lib64 -lmpi_cxx -lmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -lopen-rte -lopen-pal -lrdmacm -libverbs -lnuma -ldl -lnsl -lutil -lm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -lcognomen
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/bin/ld: cannot find -lrdmacm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your OpenMPI install (incorrectly?) thinks it has librdmacm available,
</span><br>
<span class="quotelev2">&gt; &gt; but the library isn't in your search path.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It apparently defaults to enabled in 1.3.3.  That seems rather
</span><br>
<span class="quotelev2">&gt; &gt; silly, since I imagine the library requires RDMA hardware, which
</span><br>
<span class="quotelev2">&gt; &gt; is of course not ubiquitous.  Anyway, try configuring OpenMPI with
</span><br>
<span class="quotelev2">&gt; &gt; --disable-openib-rdmacm and then rerunning build_visit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, if you actually have an RDMA cluster, you'll want to delve
</span><br>
<span class="quotelev2">&gt; &gt; deeper.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -tom
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11550.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>Reply:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>Maybe reply:</strong> <a href="11588.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
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
