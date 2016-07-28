<?
$subject_val = "[OMPI devel] [RFC] Remove explicit call to progress() from ob1.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 05:27:25 2008" -->
<!-- isoreceived="20080212102725" -->
<!-- sent="Tue, 12 Feb 2008 12:27:17 +0200" -->
<!-- isosent="20080212102717" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Remove explicit call to progress() from ob1." -->
<!-- id="20080212102717.GJ10354_at_minantech.com" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] Remove explicit call to progress() from ob1.<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 05:27:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>Previous message:</strong> <a href="3193.php">Rainer Keller: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Reply:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am planning to commit the following patch. Those two progress() calls
<br>
are responsible for most of our deep recursion troubles. And I also
<br>
think they are completely unnecessary.
<br>
<p>diff --git a/ompi/mca/pml/ob1/pml_ob1_recvreq.c b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
index 5899243..641176e 100644
<br>
--- a/ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
+++ b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
@@ -704,9 +704,6 @@ int mca_pml_ob1_recv_request_schedule_once(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_base_free(bml_btl,dst);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-
<br>
-        /* run progress as the prepare (pinning) can take some time */
<br>
-        mca_bml.bml_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
diff --git a/ompi/mca/pml/ob1/pml_ob1_sendreq.c b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
index 0998a05..9d7f3f9 100644
<br>
--- a/ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
+++ b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
@@ -968,7 +968,6 @@ cannot_pack:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_base_free(bml_btl,des);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        mca_bml.bml_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3195.php">Matthias Jurenz: "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>Previous message:</strong> <a href="3193.php">Rainer Keller: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Reply:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
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
