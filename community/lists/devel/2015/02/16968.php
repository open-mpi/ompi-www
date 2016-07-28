<?
$subject_val = "[OMPI devel] opal_dss.load question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 17:57:43 2015" -->
<!-- isoreceived="20150211225743" -->
<!-- sent="Wed, 11 Feb 2015 15:57:42 -0700" -->
<!-- isosent="20150211225742" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_dss.load question" -->
<!-- id="CAF1Cqj7srmrvcDLhWb45ibm8wAW7zHm+yzPTL-nGd+niip2Ziw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] opal_dss.load question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-11 17:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
<li><strong>Previous message:</strong> <a href="16967.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item for Tuesday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
<li><strong>Reply:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Folks,
<br>
<p>I've got a question about the opal_dss.load functionality.
<br>
<p>If I have a construct like
<br>
<p><p>buf = OBJ_NEW(opal_buffer_t);
<br>
opal_dss.load(buffer, input_ptr, num_bytes_to_load);
<br>
<p>OBJ_RELEASE(buf);
<br>
<p>I'm finding that input_ptr has to have been something
<br>
returned by malloc and friends or else I get heap corruption.
<br>
<p>I can't do something like
<br>
<p>oob_allgatherv(input_ptr, bytes_from_each_rank, output_ptr);
<br>
<p>for (cptr = output_ptr, i = 0 ; i &lt; pmix_size ;i ++) {
<br>
opal_dss.load(buf, cptr, bytes_from_each_rank[i]);
<br>
unpack message into dstore
<br>
cptr += bytes_from_each_rank[i];
<br>
}
<br>
<p>I have to create a separate malloc'd buffer each time through the
<br>
loop and do a memcpy into the tmp buffer, then call opal_dss.load
<br>
for that particular tmp buffer.
<br>
<p>Is this expected behavior of opal_dss.load?  Is there a way to
<br>
avoid these extra mallocs/memcopy's?
<br>
<p>If I don't do the above technique, the heap allocator blows up
<br>
in OBJ_RELEASE of buffer.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
<li><strong>Previous message:</strong> <a href="16967.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item for Tuesday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
<li><strong>Reply:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
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
