<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 09:50:17 2011" -->
<!-- isoreceived="20111107145017" -->
<!-- sent="Mon, 7 Nov 2011 07:50:08 -0700" -->
<!-- isosent="20111107145008" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450" -->
<!-- id="0029E5F5-01BC-42B5-A1B7-3B30084B58DC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="587867c72fda3221ce71c8cf5d1a580e_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 09:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9912.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9910.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm fixing it now - I haven't seen those warnings before, and I've been using this component for a long time now. But I do see a configure mistake and will fix it.
<br>
<p>On Nov 6, 2011, at 11:25 PM, Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Hmm, I didn't come across that during testing. You are right that we
</span><br>
<span class="quotelev1">&gt; should't be compiling with ssl support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 7 Nov 2011 01:17:50 -0500, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This commit introduced quite a few warnings on Mac OS X. A snippet is
</span><br>
<span class="quotelev2">&gt;&gt; attached below. Btw, why do we need to build buffer event support in
</span><br>
<span class="quotelev2">&gt;&gt; libevent? And why ssl ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'bio_bufferevent_read':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:136:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_clear_flags' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:209)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:146:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_set_flags' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:207)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'bio_bufferevent_write':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:163:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_clear_flags' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:209)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:176:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_set_flags' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:207)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'BIO_new_bufferevent':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:255:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_new' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:581)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'conn_closed':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:494:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_shutdown' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1568)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:501:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'ERR_peek_error' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/err.h:270)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:521:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'ERR_get_error' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/err.h:266)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'init_bio_counts':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:538:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_number_written' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:562)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:538:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:540:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_number_read' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:561)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:540:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_rbio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1376)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'decrement_buckets':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:546:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_number_written' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:562)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:546:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:547:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_number_read' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:561)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:547:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_rbio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1376)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'do_read':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:580:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_read' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1493)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:589:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_error' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1501)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'do_write':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:655:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_write' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1495)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:665:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_error' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1501)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'do_handshake':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:897:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_do_handshake' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1529)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:912:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_error' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1501)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'opal_libevent2012_bufferevent_ssl_renegotiate':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:991:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_renegotiate' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1530)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'be_openssl_destruct':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1092:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1094:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:590)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1098:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_free' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1490)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'be_openssl_ctrl':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1146:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_new_socket' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:675)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1147:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_set_bio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1375)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'bufferevent_openssl_new_impl':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1207:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1496)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1230:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_set_accept_state' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1549)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1235:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_set_connect_state' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1548)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'opal_libevent2012_bufferevent_openssl_filter_new':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1286:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_set_bio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1375)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'opal_libevent2012_bufferevent_openssl_socket_new':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1300:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_get_wbio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1377)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1304:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:590)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1318:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_ctrl' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:590)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1323:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'BIO_new_socket' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/bio.h:675)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/opal/mca/event/libevent2013/libevent/bufferevent_openssl.c:1324:
</span><br>
<span class="quotelev2">&gt;&gt; warning: 'SSL_set_bio' is deprecated (declared at
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openssl/ssl.h:1375)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 6, 2011, at 23:32 , hjelmn_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: hjelmn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-11-06 23:32:36 EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 25450
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25450">https://svn.open-mpi.org/trac/ompi/changeset/25450</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RFC: upgrade to libevent 2.0.13 (removing 2.0.7) timeout. Removed
</span><br>
<span class="quotelev2">&gt;&gt; libevent 2.0.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Removed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/mca/event/libevent2013/.ompi_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/mca/event/libevent2013/.ompi_unignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/mca/event/libevent207/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deleted: trunk/opal/mca/event/libevent2013/.ompi_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deleted: trunk/opal/mca/event/libevent2013/.ompi_unignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/event/libevent2013/.ompi_unignore	2011-11-06 23:32:36
</span><br>
<span class="quotelev2">&gt;&gt; EST (Sun, 06 Nov 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ (empty file)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1,3 +0,0 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -jsquyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -hjelmn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="9912.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9910.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9908.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
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
