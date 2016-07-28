<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 09:38:53 2006" -->
<!-- isoreceived="20060105143853" -->
<!-- sent="Thu, 05 Jan 2006 07:38:47 -0700" -->
<!-- isosent="20060105143847" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  [OMPI svn] svn:open-mpi r8643" -->
<!-- id="43BD2F77.4030408_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200601042229.k04MTBVA024982_at_magrathea.osl.iu.edu" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 09:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0655.php">Jeff Squyres: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<li><strong>Previous message:</strong> <a href="0653.php">Ralf Wildenhues: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0655.php">Jeff Squyres: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<li><strong>Reply:</strong> <a href="0655.php">Jeff Squyres: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Jeff,
<br>
<p><p>jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2006-01-04 17:29:09 -0500 (Wed, 04 Jan 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 8643
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Avoid a false positive in bcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/tcp/oob_tcp.c	2006-01-04 22:18:30 UTC (rev 8642)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp.c	2006-01-04 22:29:09 UTC (rev 8643)
</span><br>
<span class="quotelev1">&gt; @@ -463,7 +463,12 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      OBJ_RELEASE(event);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    /* Some mem checkers don't realize that hdr will guarantee to be
</span><br>
<span class="quotelev1">&gt; +       fully filled in during the read(), below :-( */
</span><br>
<span class="quotelev1">&gt; +    OMPI_DEBUG_ZERO(hdr);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* recv the process identifier */
</span><br>
<span class="quotelev1">&gt; +    hdr.msg_src.cellid = 78;
</span><br>
<p>Do we really want the above line?
<br>
<p><span class="quotelev1">&gt;      while((rc = recv(sd, (char *)&amp;hdr, sizeof(hdr), 0)) != sizeof(hdr)) {
</span><br>
<span class="quotelev1">&gt;          if(rc &gt;= 0) {
</span><br>
<span class="quotelev1">&gt;              if(mca_oob_tcp_component.tcp_debug &gt; 1) {
</span><br>
<span class="quotelev1">&gt; @@ -480,6 +485,10 @@
</span><br>
<span class="quotelev1">&gt;              return;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    assert(rc == sizeof(hdr));
</span><br>
<span class="quotelev1">&gt; +    if (rc != sizeof(hdr)) {
</span><br>
<span class="quotelev1">&gt; +        abort();
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;      MCA_OOB_TCP_HDR_NTOH(&amp;hdr);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* dispatch based on message type */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0655.php">Jeff Squyres: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<li><strong>Previous message:</strong> <a href="0653.php">Ralf Wildenhues: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0655.php">Jeff Squyres: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<li><strong>Reply:</strong> <a href="0655.php">Jeff Squyres: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
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
