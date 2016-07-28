<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 09:40:54 2006" -->
<!-- isoreceived="20060105144054" -->
<!-- sent="Thu, 5 Jan 2006 09:40:52 -0500" -->
<!-- isosent="20060105144052" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  [OMPI svn] svn:open-mpi r8643" -->
<!-- id="C564BF3E-4810-412C-8DB5-2BE907F0AFA0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43BD2F77.4030408_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 09:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0656.php">Brian Barrett: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0654.php">Tim S. Woodall: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<li><strong>In reply to:</strong> <a href="0654.php">Tim S. Woodall: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
#@$%@#$%@#$%
<br>
<p>I can't believe I left that junk in there.  Mea culpa.  Will fix  
<br>
immediately.
<br>
<p>:-(
<br>
<p><p>On Jan 5, 2006, at 9:38 AM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; Yo Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-01-04 17:29:09 -0500 (Wed, 04 Jan 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 8643
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Avoid a false positive in bcheck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp.c	2006-01-04 22:18:30 UTC (rev  
</span><br>
<span class="quotelev2">&gt;&gt; 8642)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp.c	2006-01-04 22:29:09 UTC (rev  
</span><br>
<span class="quotelev2">&gt;&gt; 8643)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -463,7 +463,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      OBJ_RELEASE(event);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Some mem checkers don't realize that hdr will guarantee to be
</span><br>
<span class="quotelev2">&gt;&gt; +       fully filled in during the read(), below :-( */
</span><br>
<span class="quotelev2">&gt;&gt; +    OMPI_DEBUG_ZERO(hdr);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      /* recv the process identifier */
</span><br>
<span class="quotelev2">&gt;&gt; +    hdr.msg_src.cellid = 78;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we really want the above line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      while((rc = recv(sd, (char *)&amp;hdr, sizeof(hdr), 0)) != sizeof 
</span><br>
<span class="quotelev2">&gt;&gt; (hdr)) {
</span><br>
<span class="quotelev2">&gt;&gt;          if(rc &gt;= 0) {
</span><br>
<span class="quotelev2">&gt;&gt;              if(mca_oob_tcp_component.tcp_debug &gt; 1) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -480,6 +485,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;              return;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(rc == sizeof(hdr));
</span><br>
<span class="quotelev2">&gt;&gt; +    if (rc != sizeof(hdr)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        abort();
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;      MCA_OOB_TCP_HDR_NTOH(&amp;hdr);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* dispatch based on message type */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0656.php">Brian Barrett: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0654.php">Tim S. Woodall: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
<li><strong>In reply to:</strong> <a href="0654.php">Tim S. Woodall: "Re:  [OMPI svn] svn:open-mpi r8643"</a>
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
