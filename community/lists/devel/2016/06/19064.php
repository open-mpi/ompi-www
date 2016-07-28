<?
$subject_val = "[OMPI devel] BTL flags";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 21:07:28 2016" -->
<!-- isoreceived="20160603010728" -->
<!-- sent="Fri, 3 Jun 2016 10:07:27 +0900" -->
<!-- isosent="20160603010727" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] BTL flags" -->
<!-- id="CAMJJpkWqHW4Z6i4KrnHsc0EZgE95AMQj0RFwbLvCkcVaJwEjnw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] BTL flags<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 21:07:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19065.php">Nathan Hjelm: "Re: [OMPI devel] BTL flags"</a>
<li><strong>Previous message:</strong> <a href="19063.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19065.php">Nathan Hjelm: "Re: [OMPI devel] BTL flags"</a>
<li><strong>Reply:</strong> <a href="19065.php">Nathan Hjelm: "Re: [OMPI devel] BTL flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>I see a lot of [for once valid] complains from clang regarding the last
<br>
UGNI related commit. More precisely the MCA_BTL_ATOMIC_SUPPORTS_FLOAT value
<br>
is too large with respect to the fact that ISO C restricts a enum to int.
<br>
<p>Can we pack the enums ?
<br>
<p>George.
<br>
<p><p>../../../../../ompi/opal/mca/btl/btl.h:326:5: warning: ISO C restricts
<br>
enumerator values to range of 'int'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2147483648 is too large) [-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_ATOMIC_SUPPORTS_FLOAT  = 0x80000000,
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19064/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19065.php">Nathan Hjelm: "Re: [OMPI devel] BTL flags"</a>
<li><strong>Previous message:</strong> <a href="19063.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19065.php">Nathan Hjelm: "Re: [OMPI devel] BTL flags"</a>
<li><strong>Reply:</strong> <a href="19065.php">Nathan Hjelm: "Re: [OMPI devel] BTL flags"</a>
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
