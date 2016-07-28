<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 22 20:45:53 2009" -->
<!-- isoreceived="20090323004553" -->
<!-- sent="Mon, 23 Mar 2009 01:45:45 +0100" -->
<!-- isosent="20090323004545" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value" -->
<!-- id="web-118257817_at_uni-stuttgart.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37242.128.165.0.81.1237681134.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-22 20:45:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI devel] Next week: WebEx remote attendance of OpenFabricsSonoma conference"</a>
<li><strong>Previous message:</strong> <a href="5682.php">Samuel K. Gutierrez: "[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value"</a>
<li><strong>In reply to:</strong> <a href="5682.php">Samuel K. Gutierrez: "[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>On Sat, 21 Mar 2009 18:18:54 -0600 (MDT)
<br>
&nbsp;&nbsp;&quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm writing a simple profiling library which utilizes 
</span><br>
<span class="quotelev1">&gt;PERUSE.  My callback
</span><br>
<p>So am I :)
<br>
<p><span class="quotelev1">&gt; function counts communication events (see example code 
</span><br>
<span class="quotelev1">&gt;below).  I noticed
</span><br>
<span class="quotelev1">&gt; that in OMPI v1.3 spec-&gt;peer is sometimes a negative 
</span><br>
<span class="quotelev1">&gt;value (OMPI v1.2.6
</span><br>
<span class="quotelev1">&gt; did not exhibit this behavior).  I added some boundary 
</span><br>
<span class="quotelev1">&gt;checks, but it
</span><br>
<span class="quotelev1">&gt; seems as if this is a bug?  I hope I'm not missing 
</span><br>
<span class="quotelev1">&gt;something...
</span><br>
<p>It took me quite some time to reproduce the error - I also 
<br>
got peer value &quot;-1&quot; for the Peruse peruse_comm_spec_t 
<br>
struct. I only managed to reproduce this with 
<br>
communication of a process with itself, which is an 
<br>
unusual scenario. Anyway, for all the tests I did, the 
<br>
error happened only when:
<br>
<p>-a process communicates with itself
<br>
-the MPI receive call is made
<br>
-the Peruse event &quot;PERUSE_COMM_MSG_REMOVE_FROM_UNEX_Q&quot; is 
<br>
triggered
<br>
<p><p>The file ompi/mca/pml/ob1/pml_ob1_recvreq.c seems to be 
<br>
the place where the above event is called with a wrong 
<br>
value of the peer attribute.
<br>
<p>I will let you know if I find something.
<br>
<p><p>Best regards,
<br>
Kiril
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The peruse test provided in the OMPI v1.3 source 
</span><br>
<span class="quotelev1">&gt;exhibits similar behavior:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./mpi_peruse | grep peer:-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int callback(peruse_event_h event_h, MPI_Aint unique_id,
</span><br>
<span class="quotelev1">&gt; peruse_comm_spec_t *spec, void *param) {
</span><br>
<span class="quotelev1">&gt;    if (spec-&gt;peer == rank) {
</span><br>
<span class="quotelev1">&gt;        return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    rrCounts[spec-&gt;peer]++;
</span><br>
<span class="quotelev1">&gt;    return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any insight is greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI devel] Next week: WebEx remote attendance of OpenFabricsSonoma conference"</a>
<li><strong>Previous message:</strong> <a href="5682.php">Samuel K. Gutierrez: "[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value"</a>
<li><strong>In reply to:</strong> <a href="5682.php">Samuel K. Gutierrez: "[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
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
