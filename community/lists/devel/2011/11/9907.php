<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 01:17:56 2011" -->
<!-- isoreceived="20111107061756" -->
<!-- sent="Mon, 7 Nov 2011 01:17:50 -0500" -->
<!-- isosent="20111107061750" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450" -->
<!-- id="2997D39C-40ED-46FC-B545-ED1A5A376764_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201111070432.pA74WaEZ002429_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 01:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Previous message:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Reply:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit introduced quite a few warnings on Mac OS X. A snippet is attached below. Btw, why do we need to build buffer event support in libevent? And why ssl ...
<br>
<p>../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'bio_bufferevent_read':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:136: warning: 'BIO_clear_flags' is deprecated (declared at /usr/include/openssl/bio.h:209)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:146: warning: 'BIO_set_flags' is deprecated (declared at /usr/include/openssl/bio.h:207)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'bio_bufferevent_write':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:163: warning: 'BIO_clear_flags' is deprecated (declared at /usr/include/openssl/bio.h:209)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:176: warning: 'BIO_set_flags' is deprecated (declared at /usr/include/openssl/bio.h:207)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'BIO_new_bufferevent':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:255: warning: 'BIO_new' is deprecated (declared at /usr/include/openssl/bio.h:581)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'conn_closed':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:494: warning: 'SSL_get_shutdown' is deprecated (declared at /usr/include/openssl/ssl.h:1568)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:501: warning: 'ERR_peek_error' is deprecated (declared at /usr/include/openssl/err.h:270)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:521: warning: 'ERR_get_error' is deprecated (declared at /usr/include/openssl/err.h:266)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'init_bio_counts':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:538: warning: 'BIO_number_written' is deprecated (declared at /usr/include/openssl/bio.h:562)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:538: warning: 'SSL_get_wbio' is deprecated (declared at /usr/include/openssl/ssl.h:1377)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:540: warning: 'BIO_number_read' is deprecated (declared at /usr/include/openssl/bio.h:561)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:540: warning: 'SSL_get_rbio' is deprecated (declared at /usr/include/openssl/ssl.h:1376)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'decrement_buckets':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:546: warning: 'BIO_number_written' is deprecated (declared at /usr/include/openssl/bio.h:562)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:546: warning: 'SSL_get_wbio' is deprecated (declared at /usr/include/openssl/ssl.h:1377)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:547: warning: 'BIO_number_read' is deprecated (declared at /usr/include/openssl/bio.h:561)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:547: warning: 'SSL_get_rbio' is deprecated (declared at /usr/include/openssl/ssl.h:1376)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'do_read':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:580: warning: 'SSL_read' is deprecated (declared at /usr/include/openssl/ssl.h:1493)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:589: warning: 'SSL_get_error' is deprecated (declared at /usr/include/openssl/ssl.h:1501)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'do_write':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:655: warning: 'SSL_write' is deprecated (declared at /usr/include/openssl/ssl.h:1495)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:665: warning: 'SSL_get_error' is deprecated (declared at /usr/include/openssl/ssl.h:1501)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'do_handshake':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:897: warning: 'SSL_do_handshake' is deprecated (declared at /usr/include/openssl/ssl.h:1529)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:912: warning: 'SSL_get_error' is deprecated (declared at /usr/include/openssl/ssl.h:1501)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'opal_libevent2012_bufferevent_ssl_renegotiate':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:991: warning: 'SSL_renegotiate' is deprecated (declared at /usr/include/openssl/ssl.h:1530)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'be_openssl_destruct':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1092: warning: 'SSL_get_wbio' is deprecated (declared at /usr/include/openssl/ssl.h:1377)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1094: warning: 'BIO_ctrl' is deprecated (declared at /usr/include/openssl/bio.h:590)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1098: warning: 'SSL_free' is deprecated (declared at /usr/include/openssl/ssl.h:1490)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'be_openssl_ctrl':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1146: warning: 'BIO_new_socket' is deprecated (declared at /usr/include/openssl/bio.h:675)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1147: warning: 'SSL_set_bio' is deprecated (declared at /usr/include/openssl/ssl.h:1375)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'bufferevent_openssl_new_impl':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1207: warning: 'SSL_ctrl' is deprecated (declared at /usr/include/openssl/ssl.h:1496)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1230: warning: 'SSL_set_accept_state' is deprecated (declared at /usr/include/openssl/ssl.h:1549)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1235: warning: 'SSL_set_connect_state' is deprecated (declared at /usr/include/openssl/ssl.h:1548)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'opal_libevent2012_bufferevent_openssl_filter_new':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1286: warning: 'SSL_set_bio' is deprecated (declared at /usr/include/openssl/ssl.h:1375)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c: In function 'opal_libevent2012_bufferevent_openssl_socket_new':
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1300: warning: 'SSL_get_wbio' is deprecated (declared at /usr/include/openssl/ssl.h:1377)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1304: warning: 'BIO_ctrl' is deprecated (declared at /usr/include/openssl/bio.h:590)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1318: warning: 'BIO_ctrl' is deprecated (declared at /usr/include/openssl/bio.h:590)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1323: warning: 'BIO_new_socket' is deprecated (declared at /usr/include/openssl/bio.h:675)
<br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1324: warning: 'SSL_set_bio' is deprecated (declared at /usr/include/openssl/ssl.h:1375)
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Nov 6, 2011, at 23:32 , hjelmn_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn
</span><br>
<span class="quotelev1">&gt; Date: 2011-11-06 23:32:36 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25450
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25450">https://svn.open-mpi.org/trac/ompi/changeset/25450</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; RFC: upgrade to libevent 2.0.13 (removing 2.0.7) timeout. Removed libevent 2.0.7
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent2013/.ompi_ignore
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent2013/.ompi_unignore
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/opal/mca/event/libevent2013/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/opal/mca/event/libevent2013/.ompi_unignore
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/event/libevent2013/.ompi_unignore	2011-11-06 23:32:36 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev1">&gt; +++ (empty file)
</span><br>
<span class="quotelev1">&gt; @@ -1,3 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -jsquyres
</span><br>
<span class="quotelev1">&gt; -hjelmn
</span><br>
<span class="quotelev1">&gt; -rhc
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Previous message:</strong> <a href="9906.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Reply:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
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
