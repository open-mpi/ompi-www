<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 09:39:31 2007" -->
<!-- isoreceived="20070829133931" -->
<!-- sent="Wed, 29 Aug 2007 09:40:30 -0400" -->
<!-- isosent="20070829134030" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] SM BTL hang issue" -->
<!-- id="46D5774E.4070602_at_sun.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 09:40:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2252.php">Terry D. Dontje: "[OMPI devel] vpath and vt-integration tmp branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a program that does a simple bucket brigade of sends and receives 
<br>
where rank 0 is the start and repeatedly sends to rank 1 until a certain 
<br>
amount of time has passed and then it sends and all done packet.
<br>
<p>Running this under np=2 always works.  However, when I run with greater 
<br>
than 2 using only the SM btl the program usually hangs and one of the 
<br>
processes has a long stack that has a lot of the following 3 calls in it:
<br>
<p>&nbsp;[25] opal_progress(), line 187 in &quot;opal_progress.c&quot;
<br>
&nbsp;&nbsp;[26] mca_btl_sm_component_progress(), line 397 in &quot;btl_sm_component.c&quot;
<br>
&nbsp;&nbsp;[27] mca_bml_r2_progress(), line 110 in &quot;bml_r2.c&quot;
<br>
<p>When stepping through the ompi_fifo_write_to_head routine it looks like 
<br>
the fifo has overflowed.
<br>
<p>I am wondering if what is happening is rank 0 has sent a bunch of 
<br>
messages that have exhausted the
<br>
resources such that one of the middle ranks which is in the process of 
<br>
sending cannot send and therefore
<br>
never gets to the point of trying to receive the messages from rank 0?
<br>
<p>Is the above a possible scenario or are messages periodically bled off 
<br>
the SM BTL's fifos?
<br>
<p>Note, I have seen np=3 pass sometimes and I can get it to pass reliably 
<br>
if I raise the shared memory space used by the BTL.   This is using the 
<br>
trunk.
<br>
<p><p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2252.php">Terry D. Dontje: "[OMPI devel] vpath and vt-integration tmp branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
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
