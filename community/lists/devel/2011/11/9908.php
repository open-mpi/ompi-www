<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 01:25:27 2011" -->
<!-- isoreceived="20111107062527" -->
<!-- sent="Sun, 06 Nov 2011 23:25:22 -0700" -->
<!-- isosent="20111107062522" -->
<!-- name="Nathan T. Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450" -->
<!-- id="587867c72fda3221ce71c8cf5d1a580e_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2997D39C-40ED-46FC-B545-ED1A5A376764_at_eecs.utk.edu" -->
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
<strong>From:</strong> Nathan T. Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 01:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9909.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9907.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>In reply to:</strong> <a href="9907.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9911.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Reply:</strong> <a href="9911.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Reply:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, I didn't come across that during testing. You are right that we
<br>
should't be compiling with ssl support.
<br>
<p><p>On Mon, 7 Nov 2011 01:17:50 -0500, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt; This commit introduced quite a few warnings on Mac OS X. A snippet is
</span><br>
<span class="quotelev1">&gt; attached below. Btw, why do we need to build buffer event support in
</span><br>
<span class="quotelev1">&gt; libevent? And why ssl ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'bio_bufferevent_read':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:136:
<br>
<span class="quotelev1">&gt; warning: 'BIO_clear_flags' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:209)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:146:
<br>
<span class="quotelev1">&gt; warning: 'BIO_set_flags' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:207)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'bio_bufferevent_write':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:163:
<br>
<span class="quotelev1">&gt; warning: 'BIO_clear_flags' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:209)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:176:
<br>
<span class="quotelev1">&gt; warning: 'BIO_set_flags' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:207)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'BIO_new_bufferevent':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:255:
<br>
<span class="quotelev1">&gt; warning: 'BIO_new' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:581)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'conn_closed':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:494:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_shutdown' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1568)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:501:
<br>
<span class="quotelev1">&gt; warning: 'ERR_peek_error' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/err.h:270)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:521:
<br>
<span class="quotelev1">&gt; warning: 'ERR_get_error' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/err.h:266)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'init_bio_counts':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:538:
<br>
<span class="quotelev1">&gt; warning: 'BIO_number_written' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:562)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:538:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:540:
<br>
<span class="quotelev1">&gt; warning: 'BIO_number_read' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:561)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:540:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_rbio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1376)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'decrement_buckets':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:546:
<br>
<span class="quotelev1">&gt; warning: 'BIO_number_written' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:562)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:546:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:547:
<br>
<span class="quotelev1">&gt; warning: 'BIO_number_read' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:561)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:547:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_rbio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1376)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'do_read':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:580:
<br>
<span class="quotelev1">&gt; warning: 'SSL_read' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1493)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:589:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_error' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1501)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'do_write':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:655:
<br>
<span class="quotelev1">&gt; warning: 'SSL_write' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1495)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:665:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_error' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1501)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'do_handshake':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:897:
<br>
<span class="quotelev1">&gt; warning: 'SSL_do_handshake' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1529)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:912:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_error' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1501)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'opal_libevent2012_bufferevent_ssl_renegotiate':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:991:
<br>
<span class="quotelev1">&gt; warning: 'SSL_renegotiate' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1530)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'be_openssl_destruct':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1092:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1094:
<br>
<span class="quotelev1">&gt; warning: 'BIO_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:590)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1098:
<br>
<span class="quotelev1">&gt; warning: 'SSL_free' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1490)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'be_openssl_ctrl':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1146:
<br>
<span class="quotelev1">&gt; warning: 'BIO_new_socket' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:675)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1147:
<br>
<span class="quotelev1">&gt; warning: 'SSL_set_bio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1375)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'bufferevent_openssl_new_impl':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1207:
<br>
<span class="quotelev1">&gt; warning: 'SSL_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1496)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1230:
<br>
<span class="quotelev1">&gt; warning: 'SSL_set_accept_state' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1549)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1235:
<br>
<span class="quotelev1">&gt; warning: 'SSL_set_connect_state' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1548)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'opal_libevent2012_bufferevent_openssl_filter_new':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1286:
<br>
<span class="quotelev1">&gt; warning: 'SSL_set_bio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1375)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
<br>
<span class="quotelev1">&gt; In function 'opal_libevent2012_bufferevent_openssl_socket_new':
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1300:
<br>
<span class="quotelev1">&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1304:
<br>
<span class="quotelev1">&gt; warning: 'BIO_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:590)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1318:
<br>
<span class="quotelev1">&gt; warning: 'BIO_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:590)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1323:
<br>
<span class="quotelev1">&gt; warning: 'BIO_new_socket' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/bio.h:675)
</span><br>
<span class="quotelev1">&gt;
</span><br>
../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1324:
<br>
<span class="quotelev1">&gt; warning: 'SSL_set_bio' is deprecated (declared at
</span><br>
<span class="quotelev1">&gt; /usr/include/openssl/ssl.h:1375)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2011, at 23:32 , hjelmn_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: hjelmn
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-11-06 23:32:36 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25450
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25450">https://svn.open-mpi.org/trac/ompi/changeset/25450</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; RFC: upgrade to libevent 2.0.13 (removing 2.0.7) timeout. Removed
</span><br>
<span class="quotelev1">&gt; libevent 2.0.7
</span><br>
<span class="quotelev2">&gt;&gt; Removed:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/mca/event/libevent2013/.ompi_ignore
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/mca/event/libevent2013/.ompi_unignore
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/mca/event/libevent207/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deleted: trunk/opal/mca/event/libevent2013/.ompi_ignore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
==============================================================================
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deleted: trunk/opal/mca/event/libevent2013/.ompi_unignore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
==============================================================================
<br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/mca/event/libevent2013/.ompi_unignore	2011-11-06 23:32:36
</span><br>
<span class="quotelev1">&gt; EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev2">&gt;&gt; +++ (empty file)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1,3 +0,0 @@
</span><br>
<span class="quotelev2">&gt;&gt; -jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; -hjelmn
</span><br>
<span class="quotelev2">&gt;&gt; -rhc
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9909.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9907.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>In reply to:</strong> <a href="9907.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9911.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Reply:</strong> <a href="9911.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Reply:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
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
