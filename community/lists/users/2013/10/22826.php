<?
$subject_val = "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 13:56:19 2013" -->
<!-- isoreceived="20131023175619" -->
<!-- sent="Wed, 23 Oct 2013 19:56:17 +0200" -->
<!-- isosent="20131023175617" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="52680DC1.9060702_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGKz=uJpYy0L9eKp6sFeVzMHHt7t-S83x0ZEaLJ-FMLz8CV9Qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 13:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AFAIK,
<br>
since 1.7.x the MPI_THREAD_SERIALIZED is available by default, anf for 
<br>
MPI_THREAD_MULTIPLE you have to set the --with-verbs flag (1.6.x and older: 
<br>
--with-openib) at configure time.
<br>
<p>Note that activating MPI_THREAD_MULTIPLE silently disable InfiniBand, so your 
<br>
program may get very bad performance without being verbose.
<br>
<p><p>Best
<br>
<p>Paul
<br>
<p>Is there no bug in MPI_THREAD_MULTIPLE implementation in 1.7.2 and 1.7.3? My 
<br>
test program just hang now
<br>
<p><p><p>On 10/23/13 19:47, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt; On Wed, Oct 23, 2013 at 12:02 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 10/22/13 10:23 AM, &quot;Jai Dayal&quot; &lt;dayalsoap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm asking because I'm using an open_mpi build ontop of infiniband, and the
</span><br>
<span class="quotelev2">&gt;&gt; maximum thread mode is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That doesn't seem right; which version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last time I looked at this, OpenMPI only supported
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE by default and if you ask for any higher thread
</span><br>
<span class="quotelev1">&gt; level, you get MPI_THREAD_MULTIPLE, which requires a configure-time
</span><br>
<span class="quotelev1">&gt; switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe something has changed dramatically more recently than I tested.
</span><br>
<span class="quotelev1">&gt; Squyres told me some thread-oriented refactoring was going on.  All of
</span><br>
<span class="quotelev1">&gt; this was over a year ago so it is entirely reasonable for me to be
</span><br>
<span class="quotelev1">&gt; wrong about all of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22826/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
