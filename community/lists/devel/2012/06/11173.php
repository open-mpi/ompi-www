<?
$subject_val = "Re: [OMPI devel] Problem in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 03:09:45 2012" -->
<!-- isoreceived="20120626070945" -->
<!-- sent="Tue, 26 Jun 2012 09:09:39 +0200" -->
<!-- isosent="20120626070939" -->
<!-- name="Ludovic.Hablot_at_[hidden]" -->
<!-- email="Ludovic.Hablot_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem in oob/tcp" -->
<!-- id="OFDEFE7A83.86FD0708-ONC1257A29.00275626-C1257A29.0027562D_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D5D5259D-1092-4870-9FC4-E2F03217797F_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:Ludovic.Hablot_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Problem%20in%20oob/tcp"><em>Ludovic.Hablot_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-26 03:09:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11174.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>In reply to:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11174.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="11174.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Version 1.6. But it's already there in 1.5.4.
<br>
<p>-----devel-bounces_at_[hidden] a &#233;crit : -----
<br>
A : Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
De : Ralph Castain 
<br>
Envoy&#233; par : devel-bounces_at_[hidden]
<br>
Date : 25/06/2012 17:57
<br>
Objet : Re: [OMPI devel] Problem in oob/tcp
<br>
<p>What version?
<br>
<p>On Jun 25, 2012, at 9:53 AM, Ludovic.Hablot_at_[hidden] wrote:
<br>
<p>Hi everybody,
<br>
<p>I'm facing a problem in orte/oob/tcp/, more particularly in file oob_tcp_msg.c. Some network interruptions were making my program hanging and not crashing (a basic helloworld).
<br>
<p>Thus, I reproduced the problem with gdb, by simulating an error on read (jumping from line 357 to 367, oob_tcp_msg.c). Then, openmpi close the socket, make the shutdown and then is hanging.
<br>
<p>It seems that there is an exception callback function (mca_oob_tcp.oob_exception_callback) &quot;planned&quot; but not implemented yet.
<br>
<p>Any idea on how to solve this problem ? Or is this the expected behavior when we lose connection ? Did I missed anything ?
<br>
<p>Thanks in advance,
<br>
<p>Ludovic
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11174.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11172.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>In reply to:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11174.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="11174.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
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
