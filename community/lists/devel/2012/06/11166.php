<?
$subject_val = "[OMPI devel] Problem in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 11:53:08 2012" -->
<!-- isoreceived="20120625155308" -->
<!-- sent="Mon, 25 Jun 2012 17:53:04 +0200" -->
<!-- isosent="20120625155304" -->
<!-- name="Ludovic.Hablot_at_[hidden]" -->
<!-- email="Ludovic.Hablot_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem in oob/tcp" -->
<!-- id="OF93CAB357.DC13395F-ONC1257A28.005741A1-C1257A28.005741AC_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Problem in oob/tcp<br>
<strong>From:</strong> <a href="mailto:Ludovic.Hablot_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Problem%20in%20oob/tcp"><em>Ludovic.Hablot_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-25 11:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11165.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="11165.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="11167.php">Ralph Castain: "Re: [OMPI devel] Problem in oob/tcp"</a>
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
