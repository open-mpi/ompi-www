<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 15:33:33 2007" -->
<!-- isoreceived="20070720193333" -->
<!-- sent="Fri, 20 Jul 2007 15:34:49 -0400" -->
<!-- isosent="20070720193449" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] Locking issue with OB1 PML" -->
<!-- id="46A10E59.3030000_at_sun.com" -->
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
<strong>Date:</strong> 2007-07-20 15:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1966.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I've found a problem that is causing at least some of my runs of 
<br>
the MT tests to abort or hang.  The issue is that in the OB1 request 
<br>
structure there is a req_send_range_lock that is never initialized with 
<br>
the appropriate (pthread_)mutex_init call.  I've put in the following 
<br>
patch (given to me by Jeff) in ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
<p>Index: pml_ob1_sendreq.c
<br>
===================================================================
<br>
--- pml_ob1_sendreq.c   (revision 15535)
<br>
+++ pml_ob1_sendreq.c   (working copy)
<br>
@@ -136,12 +136,18 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req-&gt;req_rdma_cnt = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req-&gt;req_throttle_sends = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;req-&gt;req_send_ranges, opal_list_t);
<br>
+    OBJ_CONSTRUCT(&amp;req-&gt;req_send_range_lock, opal_mutex_t);
<br>
}
<br>
+static void mca_pml_ob1_send_request_destruct 
<br>
(mca_pml_ob1_send_request_t* req)
<br>
+{
<br>
+    OBJ_DESTRUCT(&amp;req-&gt;req_send_range_lock);
<br>
+}
<br>
+
<br>
OBJ_CLASS_INSTANCE( mca_pml_ob1_send_request_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_base_send_request_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_construct,
<br>
-                    NULL );
<br>
+                    mca_pml_ob1_send_request_destruct);
<br>
/**
<br>
&nbsp;&nbsp;* Completion of a short message - nothing left to schedule. Note  that 
<br>
this
<br>
<p>The above seems to at least allow one of my tests to consistently pass 
<br>
(haven't tried the other tests yet). I was wanting to see if the above 
<br>
fix makes sense and if possibly there are similar issues with the other 
<br>
PMLs.
<br>
<p>Thanks,
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1966.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
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
