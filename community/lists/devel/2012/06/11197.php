<?
$subject_val = "[OMPI devel] u_int32_t typo in nbc_internal.h?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 22:45:47 2012" -->
<!-- isoreceived="20120628024547" -->
<!-- sent="Wed, 27 Jun 2012 22:45:39 -0400" -->
<!-- isosent="20120628024539" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] u_int32_t typo in nbc_internal.h?" -->
<!-- id="4FEBC553.9010808_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] u_int32_t typo in nbc_internal.h?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 22:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
<li><strong>Previous message:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
<li><strong>Reply:</strong> <a href="11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ompi/mca/coll/libnbc/nbc_internal.h
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;259    /* Schedule cache structures/functions */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;260    u_int32_t adler32(u_int32_t adler, int8_t *buf, int len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;261    void NBC_SchedCache_args_delete(void *entry);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;262    void NBC_SchedCache_args_delete_key_dummy(void *k);
<br>
<p>u_int32_t
<br>
-&gt;
<br>
uint32_t
<br>
<p>perhaps?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
<li><strong>Previous message:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
<li><strong>Reply:</strong> <a href="11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
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
