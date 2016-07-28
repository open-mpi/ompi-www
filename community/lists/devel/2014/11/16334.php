<?
$subject_val = "Re: [OMPI devel] question to OMPI_DECLSPEC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 11:24:47 2014" -->
<!-- isoreceived="20141125162447" -->
<!-- sent="Tue, 25 Nov 2014 10:24:49 -0600" -->
<!-- isosent="20141125162449" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question to OMPI_DECLSPEC" -->
<!-- id="5474AD51.6020909_at_cs.uh.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A94AA161-6EEC-4FB2-BAE2-56ECC14EFC15_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] question to OMPI_DECLSPEC<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 11:24:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16335.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16336.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Reply:</strong> <a href="16336.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/25/2014 10:18 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;no, nothing has changed with regard to declspec that I know
</span><br>
<span class="quotelev1">&gt; about. I&#226;&#128;&#153;ll ask the obvious things to check:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * does that component have the proper include to find this function?
</span><br>
<span class="quotelev1">&gt; Could be that it used to be found thru some chain, but the chain is
</span><br>
<span class="quotelev1">&gt; now broken and it needs to be directly included
</span><br>
<p>header is included, I double checked.
<br>
<p><span class="quotelev1">&gt; * is that function in the base code, or down in a component? If the
</span><br>
<span class="quotelev1">&gt; latter, then that&#226;&#128;&#153;s a problem, but I&#226;&#128;&#153;m assuming you didn&#226;&#128;&#153;t make that
</span><br>
<span class="quotelev1">&gt; mistake.
</span><br>
<p><p>I am not sure what you mean. The function is in a component, but I am 
<br>
not aware that it is illegal to call a function of a component from 
<br>
another component.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2014, at 8:07 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has something changed recently on the trunk/master regarding
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC? The reason I ask is because we get now errors about
</span><br>
<span class="quotelev2">&gt;&gt; unresolved symbols, e.g.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt; /home/gabriel/OpenMPI/lib64/openmpi/mca_fcoll_dynamic.so: undefined
</span><br>
<span class="quotelev2">&gt;&gt; symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and that problem was not there roughly two weeks back the last time
</span><br>
<span class="quotelev2">&gt;&gt; I tested. I did verify that the the function listed there has an
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC before its definition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Edgar -- Edgar Gabriel Associate Professor Parallel Software
</span><br>
<span class="quotelev2">&gt;&gt; Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> Department of Computer
</span><br>
<span class="quotelev2">&gt;&gt; Science          University of Houston Philip G. Hoffman Hall, Room
</span><br>
<span class="quotelev2">&gt;&gt; 524        Houston, TX-77204, USA Tel: +1 (713) 743-3857
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16332.php">http://www.open-mpi.org/community/lists/devel/2014/11/16332.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16333.php">http://www.open-mpi.org/community/lists/devel/2014/11/16333.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16335.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16336.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Reply:</strong> <a href="16336.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
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
