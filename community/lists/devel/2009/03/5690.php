<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 13:23:59 2009" -->
<!-- isoreceived="20090323172359" -->
<!-- sent="Mon, 23 Mar 2009 11:23:48 -0600 (MDT)" -->
<!-- isosent="20090323172348" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value" -->
<!-- id="60766.128.165.0.81.1237829028.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="web-118257817_at_uni-stuttgart.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 13:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kiril,
<br>
<p>Appreciate the quick response.
<br>
<p><span class="quotelev1">&gt; Hi Samuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, 21 Mar 2009 18:18:54 -0600 (MDT)
</span><br>
<span class="quotelev1">&gt;   &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm writing a simple profiling library which utilizes
</span><br>
<span class="quotelev2">&gt;&gt;PERUSE.  My callback
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So am I :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; function counts communication events (see example code
</span><br>
<span class="quotelev2">&gt;&gt;below).  I noticed
</span><br>
<span class="quotelev2">&gt;&gt; that in OMPI v1.3 spec-&gt;peer is sometimes a negative
</span><br>
<span class="quotelev2">&gt;&gt;value (OMPI v1.2.6
</span><br>
<span class="quotelev2">&gt;&gt; did not exhibit this behavior).  I added some boundary
</span><br>
<span class="quotelev2">&gt;&gt;checks, but it
</span><br>
<span class="quotelev2">&gt;&gt; seems as if this is a bug?  I hope I'm not missing
</span><br>
<span class="quotelev2">&gt;&gt;something...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It took me quite some time to reproduce the error - I also
</span><br>
<p>Sorry about that - I should have provided more information.
<br>
<p><span class="quotelev1">&gt; got peer value &quot;-1&quot; for the Peruse peruse_comm_spec_t
</span><br>
<span class="quotelev1">&gt; struct. I only managed to reproduce this with
</span><br>
<span class="quotelev1">&gt; communication of a process with itself, which is an
</span><br>
<span class="quotelev1">&gt; unusual scenario. Anyway, for all the tests I did, the
</span><br>
<span class="quotelev1">&gt; error happened only when:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -a process communicates with itself
</span><br>
<span class="quotelev1">&gt; -the MPI receive call is made
</span><br>
<span class="quotelev1">&gt; -the Peruse event &quot;PERUSE_COMM_MSG_REMOVE_FROM_UNEX_Q&quot; is
</span><br>
<span class="quotelev1">&gt; triggered
</span><br>
<p>That's interesting... Nice work!
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file ompi/mca/pml/ob1/pml_ob1_recvreq.c seems to be
</span><br>
<span class="quotelev1">&gt; the place where the above event is called with a wrong
</span><br>
<span class="quotelev1">&gt; value of the peer attribute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will let you know if I find something.
</span><br>
<p>I will also take a look.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Kiril
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The peruse test provided in the OMPI v1.3 source
</span><br>
<span class="quotelev2">&gt;&gt;exhibits similar behavior:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./mpi_peruse | grep peer:-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int callback(peruse_event_h event_h, MPI_Aint unique_id,
</span><br>
<span class="quotelev2">&gt;&gt; peruse_comm_spec_t *spec, void *param) {
</span><br>
<span class="quotelev2">&gt;&gt;    if (spec-&gt;peer == rank) {
</span><br>
<span class="quotelev2">&gt;&gt;        return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    rrCounts[spec-&gt;peer]++;
</span><br>
<span class="quotelev2">&gt;&gt;    return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any insight is greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Appreciate the help,
<br>
<p>Samuel K. Gutierrez
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5691.php">George Bosilca: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5689.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
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
