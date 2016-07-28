<?
$subject_val = "Re: [OMPI devel] MTT test has completed, status: failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 10:39:46 2015" -->
<!-- isoreceived="20150624143946" -->
<!-- sent="Wed, 24 Jun 2015 14:39:43 +0000" -->
<!-- isosent="20150624143943" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT test has completed, status: failed" -->
<!-- id="52174210-C1C3-4DB0-A7F8-837F1ED6190F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj52p5vNUohy-_HnE_2En2=42UdVnYGGJeT8r__3TQipEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT test has completed, status: failed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-24 10:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17527.php">Devendar Bureddy: "[OMPI devel] mpich test ini file"</a>
<li><strong>Previous message:</strong> <a href="17525.php">Howard Pritchard: "[OMPI devel] Fwd: MTT test has completed, status: failed"</a>
<li><strong>In reply to:</strong> <a href="17525.php">Howard Pritchard: "[OMPI devel] Fwd: MTT test has completed, status: failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is fixed by Nathan's PR:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/pull/653">https://github.com/open-mpi/ompi/pull/653</a>
<br>
<p>It's waiting for George's review -- George?
<br>
<p><p><span class="quotelev1">&gt; On Jun 24, 2015, at 7:14 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing some MTT failures from last nite in the form of run failures and/or timeouts.
</span><br>
<span class="quotelev1">&gt; Is anyone else seeing these?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the ibm dataplex system I'm seeing these kinds of assertion failures in ob1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev1">&gt; 0xdeafbeedULL) == ((opal_object_t *) (mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [c1476:07379] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [c1476:07379] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [c1476:07379] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev1">&gt; 0xdeafbeedULL) == ((opal_object_t *) (mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [c1475:18949] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [c1475:18949] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev1">&gt; 0xdeafbeedULL) == ((opal_object_t *) (mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev1">&gt; 0xdeafbeedULL) == ((opal_object_t *) (mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [c1476:07375] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev1">&gt; 0xdeafbeedULL) == ((opal_object_t *) (mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [c1475:18951] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [c1475:18951] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [c1477:19137] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [c1477:19137] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [c1476:07375] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; c_ring: pml_ob1_component.c:308: mca_pml_ob1_component_fini: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
</span><br>
<span class="quotelev1">&gt; 0xdeafbeedULL) == ((opal_object_t *) (mca_pml_ob1_recvreq))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Howard Pritchard &lt;hpp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 2015-06-24 7:04 GMT-06:00
</span><br>
<span class="quotelev1">&gt; Subject: MTT test has completed, status: failed
</span><br>
<span class="quotelev1">&gt; To: hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: MTT test has completed, status: failed
</span><br>
<span class="quotelev1">&gt; hostname: c1479
</span><br>
<span class="quotelev1">&gt; uname: Linux c1479 2.6.32-358.18.1.el6.nersc.x86_64 #1 SMP Wed Aug 28 02:17:42 PDT 2013 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; who am i:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +----------+---------+-------------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | Phase    | Section | MPI Version       | Duration | Pass | Fail | Time out | Skip | Detailed report                                                          |
</span><br>
<span class="quotelev1">&gt; +----------+---------+-------------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | Test Run | trivial | dev-1936-gdb3c59b | 00:39    | 3    | 3    |          |      | Test_Run-trivial-ompi-nightly-master-dev-1936-gdb3c59b-pgi_warnings.html |
</span><br>
<span class="quotelev1">&gt; +----------+---------+-------------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Total Tests:    6
</span><br>
<span class="quotelev1">&gt;     Total Failures: 3
</span><br>
<span class="quotelev1">&gt;     Total Passed:   3
</span><br>
<span class="quotelev1">&gt;     Total Duration: 39 secs. (00:39)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Test Scratch Directory is /global/homes/h/hpp/mtt_carver_tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17525.php">http://www.open-mpi.org/community/lists/devel/2015/06/17525.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17527.php">Devendar Bureddy: "[OMPI devel] mpich test ini file"</a>
<li><strong>Previous message:</strong> <a href="17525.php">Howard Pritchard: "[OMPI devel] Fwd: MTT test has completed, status: failed"</a>
<li><strong>In reply to:</strong> <a href="17525.php">Howard Pritchard: "[OMPI devel] Fwd: MTT test has completed, status: failed"</a>
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
