<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 14:53:07 2008" -->
<!-- isoreceived="20080404185307" -->
<!-- sent="Fri, 04 Apr 2008 13:52:03 -0500" -->
<!-- isosent="20080404185203" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="47F678D3.8020700_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="adak5jdtqvy.fsf_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Affect of compression on modex and launch messages<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 14:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3664.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3669.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
actually, we used lzo a looong time ago with PACX-MPI, it was indeed 
<br>
faster then zlib. Our findings at that time were however similar to what 
<br>
George mentioned, namely a benefit from compression was only visible if 
<br>
the network latency was really high (e.g. multiple ms)...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Roland Dreier wrote:
<br>
<span class="quotelev2">&gt;  &gt; Based on some discussion on this list, I integrated a zlib-based compression
</span><br>
<span class="quotelev2">&gt;  &gt; ability into ORTE. Since the launch message sent to the orteds and the modex
</span><br>
<span class="quotelev2">&gt;  &gt; between the application procs are the only places where messages of any size
</span><br>
<span class="quotelev2">&gt;  &gt; are sent, I only implemented compression for those two exchanges.
</span><br>
<span class="quotelev2">&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; I have found virtually no benefit to the compression. Essentially, the
</span><br>
<span class="quotelev2">&gt;  &gt; overhead consumed in compression/decompressing the messages pretty much
</span><br>
<span class="quotelev2">&gt;  &gt; balances out any transmission time differences. However, I could only test
</span><br>
<span class="quotelev2">&gt;  &gt; this for 64 nodes, 8ppn, so perhaps there is some benefit at larger sizes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A faster compression library might change the balance... eg LZO
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.oberhumer.com/opensource/lzo">http://www.oberhumer.com/opensource/lzo</a>) might be worth a look although
</span><br>
<span class="quotelev1">&gt; I'm not an expert on all the compression libraries that are out there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - R.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3664.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3669.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
