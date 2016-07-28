<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 16:34:39 2009" -->
<!-- isoreceived="20090323203439" -->
<!-- sent="Mon, 23 Mar 2009 16:34:28 -0400" -->
<!-- isosent="20090323203428" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value" -->
<!-- id="4BA374A5-0A9C-44AC-AEE0-08BB0F719FEB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="60766.128.165.0.81.1237829028.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 16:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5694.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are absolutely right, the peer should never be set to -1 on any of  
<br>
the PERUSE callbacks. I checked the code this morning and figure out  
<br>
what was the problem. We report the peer and the tag attached to a  
<br>
request before setting the right values (some code moved around). I  
<br>
submitted a patch and created a &quot;move request&quot; to have this correction  
<br>
as soon as possible on one of our stable releases. The move request  
<br>
can be followed using our TRAC system and the following link (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1845">https://svn.open-mpi.org/trac/ompi/ticket/1845</a> 
<br>
). If you want to play with this change please update your Open MPI  
<br>
installation to a nightly build or a fresh checkout from the SVN with  
<br>
at least revision 20844 (a nightly including this change will be  
<br>
posted on our website tomorrow morning).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 23, 2009, at 13:23 , Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi Kiril,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate the quick response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Samuel,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, 21 Mar 2009 18:18:54 -0600 (MDT)
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm writing a simple profiling library which utilizes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PERUSE.  My callback
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So am I :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function counts communication events (see example code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below).  I noticed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that in OMPI v1.3 spec-&gt;peer is sometimes a negative
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value (OMPI v1.2.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did not exhibit this behavior).  I added some boundary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checks, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems as if this is a bug?  I hope I'm not missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It took me quite some time to reproduce the error - I also
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about that - I should have provided more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; got peer value &quot;-1&quot; for the Peruse peruse_comm_spec_t
</span><br>
<span class="quotelev2">&gt;&gt; struct. I only managed to reproduce this with
</span><br>
<span class="quotelev2">&gt;&gt; communication of a process with itself, which is an
</span><br>
<span class="quotelev2">&gt;&gt; unusual scenario. Anyway, for all the tests I did, the
</span><br>
<span class="quotelev2">&gt;&gt; error happened only when:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -a process communicates with itself
</span><br>
<span class="quotelev2">&gt;&gt; -the MPI receive call is made
</span><br>
<span class="quotelev2">&gt;&gt; -the Peruse event &quot;PERUSE_COMM_MSG_REMOVE_FROM_UNEX_Q&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; triggered
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's interesting... Nice work!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file ompi/mca/pml/ob1/pml_ob1_recvreq.c seems to be
</span><br>
<span class="quotelev2">&gt;&gt; the place where the above event is called with a wrong
</span><br>
<span class="quotelev2">&gt;&gt; value of the peer attribute.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will let you know if I find something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will also take a look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Kiril
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The peruse test provided in the OMPI v1.3 source
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exhibits similar behavior:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 ./mpi_peruse | grep peer:-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int callback(peruse_event_h event_h, MPI_Aint unique_id,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; peruse_comm_spec_t *spec, void *param) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (spec-&gt;peer == rank) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return MPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   rrCounts[spec-&gt;peer]++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return MPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any insight is greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate the help,
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
<li><strong>Next message:</strong> <a href="5694.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="5692.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5690.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
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
