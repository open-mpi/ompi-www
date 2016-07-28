<?
$subject_val = "Re: [OMPI devel] Problem in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 11:56:59 2012" -->
<!-- isoreceived="20120625155659" -->
<!-- sent="Mon, 25 Jun 2012 09:56:52 -0600" -->
<!-- isosent="20120625155652" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem in oob/tcp" -->
<!-- id="D5D5259D-1092-4870-9FC4-E2F03217797F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF93CAB357.DC13395F-ONC1257A28.005741A1-C1257A28.005741AC_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem in oob/tcp<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 11:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11168.php">Barrett, Brian W: "[OMPI devel] Fwd: Component Maintainers"</a>
<li><strong>Previous message:</strong> <a href="11166.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Problem in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="11166.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Problem in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version?
<br>
<p>On Jun 25, 2012, at 9:53 AM, Ludovic.Hablot_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm facing a problem in orte/oob/tcp/, more particularly in file oob_tcp_msg.c. Some network interruptions were making my program hanging and not crashing (a basic helloworld).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus, I reproduced the problem with gdb, by simulating an error on read (jumping from line 357 to 367, oob_tcp_msg.c). Then, openmpi close the socket, make the shutdown and then is hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that there is an exception callback function (mca_oob_tcp.oob_exception_callback) &quot;planned&quot; but not implemented yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea on how to solve this problem ? Or is this the expected behavior when we lose connection ? Did I missed anything ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ludovic
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11168.php">Barrett, Brian W: "[OMPI devel] Fwd: Component Maintainers"</a>
<li><strong>Previous message:</strong> <a href="11166.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Problem in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="11166.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Problem in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
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
