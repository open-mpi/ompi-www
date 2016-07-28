<?
$subject_val = "Re: [OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 09:29:37 2016" -->
<!-- isoreceived="20160604132937" -->
<!-- sent="Sat, 4 Jun 2016 13:29:19 +0000" -->
<!-- isosent="20160604132919" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="4052F8EB-E484-45ED-9E53-D2909BF58270_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVqZxVCn0au1uTFN6jzmG1nT2oT0uK5KhjyC8HutBEMLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Seldom deadlock in mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-04 09:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19071.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19069.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19069.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19071.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19071.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2016, at 11:07 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After finalize. As I said in my original email I se all the output the application is generating, and all processes (which are local as this happens on my laptop) are in zombie mode (Z+). This basically means whoever was supposed to get the SIGCHLD, didn't do it's job of cleaning them up.
</span><br>
<p>Ah -- so perhaps threads 1,2,3 are red herrings: the real problem here is that the parent didn't catch the child exits (which presumably should have been caught in threads 4 or 5).
<br>
<p>Ralph: is there any state from threads 4 or 5 that would be helpful to examine to see if they somehow missed catching children exits?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19071.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19069.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19069.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19071.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19071.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
