<?
$subject_val = "[OMPI devel] Fwd: MTT test has completed, status: failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 10:14:05 2015" -->
<!-- isoreceived="20150624141405" -->
<!-- sent="Wed, 24 Jun 2015 08:14:02 -0600" -->
<!-- isosent="20150624141402" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: MTT test has completed, status: failed" -->
<!-- id="CAF1Cqj52p5vNUohy-_HnE_2En2=42UdVnYGGJeT8r__3TQipEA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201506241304.t5OD4e42017348_at_c1479.nersc.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: MTT test has completed, status: failed<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-24 10:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT test has completed, status: failed"</a>
<li><strong>Previous message:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT test has completed, status: failed"</a>
<li><strong>Reply:</strong> <a href="17526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT test has completed, status: failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I'm seeing some MTT failures from last nite in the form of run failures
<br>
and/or timeouts.
<br>
Is anyone else seeing these?
<br>
<p>On the ibm dataplex system I'm seeing these kinds of assertion failures in
<br>
ob1:
<br>
<p>c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion
<br>
`((0xdeafbeedULL &lt;&lt; 32) +
<br>
0xdeafbeedULL) == ((opal_object_t *)
<br>
(mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
<br>
[c1476:07379] *** Process received signal ***
<br>
[c1476:07379] Signal: Aborted (6)
<br>
[c1476:07379] Signal code:  (-6)
<br>
c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion
<br>
`((0xdeafbeedULL &lt;&lt; 32) +
<br>
0xdeafbeedULL) == ((opal_object_t *)
<br>
(mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
<br>
[c1475:18949] *** Process received signal ***
<br>
[c1475:18949] Signal: Aborted (6)
<br>
c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion
<br>
`((0xdeafbeedULL &lt;&lt; 32) +
<br>
0xdeafbeedULL) == ((opal_object_t *)
<br>
(mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
<br>
c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion
<br>
`((0xdeafbeedULL &lt;&lt; 32) +
<br>
0xdeafbeedULL) == ((opal_object_t *)
<br>
(mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
<br>
[c1476:07375] *** Process received signal ***
<br>
c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion
<br>
`((0xdeafbeedULL &lt;&lt; 32) +
<br>
0xdeafbeedULL) == ((opal_object_t *)
<br>
(mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
<br>
[c1475:18951] *** Process received signal ***
<br>
[c1475:18951] Signal: Aborted (6)
<br>
[c1477:19137] Signal: Aborted (6)
<br>
[c1477:19137] Signal code:  (-6)
<br>
[c1476:07375] Signal: Aborted (6)
<br>
c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion
<br>
`((0xdeafbeedULL &lt;&lt; 32) +
<br>
0xdeafbeedULL) == ((opal_object_t *)
<br>
(mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
<br>
<p>---------- Forwarded message ----------
<br>
From: Howard Pritchard &lt;hpp_at_[hidden]&gt;
<br>
Date: 2015-06-24 7:04 GMT-06:00
<br>
Subject: MTT test has completed, status: failed
<br>
To: hppritcha_at_[hidden]
<br>
<p><p>Subject: MTT test has completed, status: failed
<br>
hostname: c1479
<br>
uname: Linux c1479 2.6.32-358.18.1.el6.nersc.x86_64 #1 SMP Wed Aug 28
<br>
02:17:42 PDT 2013 x86_64 x86_64 x86_64 GNU/Linux
<br>
who am i:
<br>
<p>+----------+---------+-------------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
<br>
| Phase    | Section | MPI Version       | Duration | Pass | Fail | Time
<br>
out | Skip | Detailed report
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
+----------+---------+-------------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
<br>
| Test Run | trivial | dev-1936-gdb3c59b | 00:39    | 3    | 3    |
<br>
&nbsp;&nbsp;|      |
<br>
Test_Run-trivial-ompi-nightly-master-dev-1936-gdb3c59b-pgi_warnings.html |
<br>
+----------+---------+-------------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;Total Tests:    6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Failures: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Passed:   3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Total Duration: 39 secs. (00:39)
<br>
<p><p><p>Test Scratch Directory is /global/homes/h/hpp/mtt_carver_tmp
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT test has completed, status: failed"</a>
<li><strong>Previous message:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT test has completed, status: failed"</a>
<li><strong>Reply:</strong> <a href="17526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT test has completed, status: failed"</a>
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
