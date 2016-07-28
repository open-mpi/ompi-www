<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 09:17:05 2007" -->
<!-- isoreceived="20070529131705" -->
<!-- sent="Tue, 29 May 2007 16:16:55 +0300" -->
<!-- isosent="20070529131655" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] Fix for deadlock in OB1 RDMA protocol" -->
<!-- id="20070529131654.GK4715_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 09:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;Attached are two patches. First one implements new function
<br>
mca_pml_ob1_send_requst_copy_in_out(req, offset, len) that sends
<br>
given range of the request by copying data in/out internal buffers.
<br>
It also changes the behaviour of the pipeline protocol to send data from
<br>
an end of a user buffer. The second patch fixes deadlock by sending
<br>
memory by copying if registration fails. It uses the facility introduced
<br>
in the fist patch. 
<br>
<p>Comments are welcome. As always if there will be no complains I'll
<br>
commit this to the trunk, so better complain before commit :)
<br>
<p><pre>
--
			Gleb.


</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1600/request_frag_copy.diff">request_frag_copy.diff</a>
</ul>
<!-- attachment="request_frag_copy.diff" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1600/send_from_end.diff">send_from_end.diff</a>
</ul>
<!-- attachment="send_from_end.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1599.php">Ralph Castain: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
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
