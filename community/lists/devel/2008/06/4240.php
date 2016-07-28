<?
$subject_val = "Re: [OMPI devel] Client connection lost";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 06:37:33 2008" -->
<!-- isoreceived="20080627103733" -->
<!-- sent="Fri, 27 Jun 2008 06:37:25 -0400" -->
<!-- isosent="20080627103725" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Client connection lost" -->
<!-- id="211E7C4B-E1C5-4403-87E3-FBC054165E6F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4226a8f0806261952o5d1b3a07taa43c9cfc37b899e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Client connection lost<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 06:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4241.php">Jeff Squyres: "Re: [OMPI devel] Need help"</a>
<li><strong>Previous message:</strong> <a href="4239.php">Gnanasekar Loganathan: "[OMPI devel] Need help"</a>
<li><strong>In reply to:</strong> <a href="4238.php">Caciano Machado: "[OMPI devel] Client connection lost"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you're posting to the wrong list -- this list is for Open MPI  
<br>
support.  I'm not quite sure what OpenAMQ is, but it seems to be an  
<br>
entirely different application.
<br>
<p>You might want to google around to find support for OpenAMQ.  Good luck.
<br>
<p><p>On Jun 26, 2008, at 10:52 PM, Caciano Machado wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After publishing and consuming some messages (greater than 128KB)
</span><br>
<span class="quotelev1">&gt; suddenly my application loses its connections to the server and prints
</span><br>
<span class="quotelev1">&gt; the following log. If I use only smaller messages then nothing wrong
</span><br>
<span class="quotelev1">&gt; happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 18:14:44: E: Socket error: Bad address, connection to server lost
</span><br>
<span class="quotelev1">&gt; (10.135.250.16:5672)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the server prints this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 18:14:44: E: Socket closing: End of file found, connection
</span><br>
<span class="quotelev1">&gt; to client lost (10.135.250.16:34733, OpenAMQ Kernel Client, 1.2d0, 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas of what could be wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ####################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a &quot;resume&quot; of my configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* QUEUE DECLARE */
</span><br>
<span class="quotelev1">&gt;    amq_client_session_queue_declare (
</span><br>
<span class="quotelev1">&gt;        mom_endpoint_addr.sess, /*  session */
</span><br>
<span class="quotelev1">&gt;        0,                                    /*  ticket */
</span><br>
<span class="quotelev1">&gt;        mom_addr.queue,    /*  queue name */
</span><br>
<span class="quotelev1">&gt;        FALSE,                                /*  passive */
</span><br>
<span class="quotelev1">&gt;        FALSE,                                /*  durable */
</span><br>
<span class="quotelev1">&gt;        TRUE,                                 /*  exclusive */
</span><br>
<span class="quotelev1">&gt;        TRUE,                                 /*  auto-delete */
</span><br>
<span class="quotelev1">&gt;        NULL);                                /*  arguments */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* QUEUE BIND */
</span><br>
<span class="quotelev1">&gt;    amq_client_session_queue_bind (
</span><br>
<span class="quotelev1">&gt;        mom_endpoint_addr.sess, /*  session */
</span><br>
<span class="quotelev1">&gt;        0,                                    /*  ticket */
</span><br>
<span class="quotelev1">&gt;        mom_addr.queue,    /*  queue */
</span><br>
<span class="quotelev1">&gt;        &quot;amq.direct&quot;,                         /*  exchange */
</span><br>
<span class="quotelev1">&gt;        mom_addr.key,      /*  routing-key */
</span><br>
<span class="quotelev1">&gt;        NULL);                                /*  arguments */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* QUEUE CONSUME */
</span><br>
<span class="quotelev1">&gt;    amq_client_session_basic_consume (
</span><br>
<span class="quotelev1">&gt;        mom_endpoint_addr.sess, /* session */
</span><br>
<span class="quotelev1">&gt;        0,                                /* ticket */
</span><br>
<span class="quotelev1">&gt;        mom_addr.queue,    /* queue */
</span><br>
<span class="quotelev1">&gt;        NULL,                             /* consumer-tag */
</span><br>
<span class="quotelev1">&gt;        TRUE,                             /* no-local */
</span><br>
<span class="quotelev1">&gt;        TRUE,                             /* no-ack */
</span><br>
<span class="quotelev1">&gt;        TRUE,                             /* exclusive */
</span><br>
<span class="quotelev1">&gt;        NULL);                            /* arguments */
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    /* RECEIVE MESSAGES */
</span><br>
<span class="quotelev1">&gt;    amq_client_session_wait(mom_endpoint_addr.sess, 30000);
</span><br>
<span class="quotelev1">&gt;    amq_content_basic_get_body(content_recv, (byte*) buf, length));
</span><br>
<span class="quotelev1">&gt;    amq_content_basic_unlink (&amp;content_recv);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    /*  PUBLISH MESSAGE*/
</span><br>
<span class="quotelev1">&gt;    mom_return = amq_client_session_basic_publish (
</span><br>
<span class="quotelev1">&gt;        mom_endpoint-&gt;mom_peer_addr.sess,  /*  session */
</span><br>
<span class="quotelev1">&gt;        content,                           /*  content to send */
</span><br>
<span class="quotelev1">&gt;        0,                                 /*  ticket */
</span><br>
<span class="quotelev1">&gt;        &quot;amq.direct&quot;,
</span><br>
<span class="quotelev1">&gt;        mom_endpoint-&gt;mom_peer-&gt;key,       /*  routing-key */
</span><br>
<span class="quotelev1">&gt;        FALSE,                             /*  mandatory */
</span><br>
<span class="quotelev1">&gt;        FALSE);                            /*  immediate */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ####################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here is a trace log of the server:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmachado_at_xiru-6:~$ amq_server --trace 1
</span><br>
<span class="quotelev1">&gt; OpenAMQ/1.2d0
</span><br>
<span class="quotelev1">&gt; Production release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Copyright (c) 2007-2008 iMatix Corporation
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There  
</span><br>
<span class="quotelev1">&gt; is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:10: W: security warning - logins use default  
</span><br>
<span class="quotelev1">&gt; passwords
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:10: I: hostname is xiru-6 (10.135.250.16)
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:10: I: listening on port 5672, all network interfaces
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:10: I: no failover defined, READY as stand-alone
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:11: I: server ready for incoming AMQ connections
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.start: version_major=0
</span><br>
<span class="quotelev1">&gt; version_minor=9 server_properties=184B mechanisms=5B locales=5B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.start-ok:
</span><br>
<span class="quotelev1">&gt; client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.tune: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
</span><br>
<span class="quotelev1">&gt; capabilities=&quot;&quot; insist=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv queue.declare: ticket=0 queue=&quot;0&quot;
</span><br>
<span class="quotelev1">&gt; passive=0 durable=0 exclusive=1 auto_delete=1 nowait=0 arguments=0B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send queue.declare-ok: queue=&quot;0&quot;
</span><br>
<span class="quotelev1">&gt; message_count=0 consumer_count=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv queue.bind: ticket=0 queue=&quot;0&quot;
</span><br>
<span class="quotelev1">&gt; exchange=&quot;amq.direct&quot; routing_key=&quot;0&quot; nowait=0 arguments=0B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send queue.bind-ok:
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv basic.consume: ticket=0 queue=&quot;0&quot;
</span><br>
<span class="quotelev1">&gt; consumer_tag=&quot;&quot; no_local=1 no_ack=1 exclusive=1 nowait=0 arguments=0B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send basic.consume-ok: consumer_tag=&quot;0&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.start: version_major=0
</span><br>
<span class="quotelev1">&gt; version_minor=9 server_properties=184B mechanisms=5B locales=5B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.start-ok:
</span><br>
<span class="quotelev1">&gt; client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.tune: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
</span><br>
<span class="quotelev1">&gt; capabilities=&quot;&quot; insist=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv queue.declare: ticket=0 queue=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; passive=0 durable=0 exclusive=1 auto_delete=1 nowait=0 arguments=0B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send queue.declare-ok: queue=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; message_count=0 consumer_count=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv queue.bind: ticket=0 queue=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; exchange=&quot;amq.direct&quot; routing_key=&quot;1&quot; nowait=0 arguments=0B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send queue.bind-ok:
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv basic.consume: ticket=0 queue=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; consumer_tag=&quot;&quot; no_local=1 no_ack=1 exclusive=1 nowait=0 arguments=0B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send basic.consume-ok: consumer_tag=&quot;0&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.start: version_major=0
</span><br>
<span class="quotelev1">&gt; version_minor=9 server_properties=184B mechanisms=5B locales=5B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.start: version_major=0
</span><br>
<span class="quotelev1">&gt; version_minor=9 server_properties=184B mechanisms=5B locales=5B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.start-ok:
</span><br>
<span class="quotelev1">&gt; client_properties=184B mechanism=&quot;PLAIN&quot; response=12B
</span><br>
<span class="quotelev1">&gt; locale=&quot;en_US&quot;2008-06-26 21:29:21: I: recv connection.start-ok:
</span><br>
<span class="quotelev1">&gt; client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.tune: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
</span><br>
<span class="quotelev1">&gt; capabilities=&quot;&quot; insist=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.tune: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
</span><br>
<span class="quotelev1">&gt; capabilities=&quot;&quot; insist=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.start: version_major=0
</span><br>
<span class="quotelev1">&gt; version_minor=9 server_properties=184B mechanisms=5B locales=5B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.start-ok:
</span><br>
<span class="quotelev1">&gt; client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.tune: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
</span><br>
<span class="quotelev1">&gt; capabilities=&quot;&quot; insist=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.start: version_major=0
</span><br>
<span class="quotelev1">&gt; version_minor=9 server_properties=184B mechanisms=5B locales=5B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.start-ok:
</span><br>
<span class="quotelev1">&gt; client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.tune: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
</span><br>
<span class="quotelev1">&gt; frame_max=32768 heartbeat=2
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
</span><br>
<span class="quotelev1">&gt; capabilities=&quot;&quot; insist=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv basic.publish: ticket=0
</span><br>
<span class="quotelev1">&gt; exchange=&quot;amq.direct&quot; routing_key=&quot;1&quot; mandatory=0 immediate=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: send basic.deliver: consumer_tag=&quot;0&quot;
</span><br>
<span class="quotelev1">&gt; delivery_tag=0 redelivered=0 exchange=&quot;amq.direct&quot; routing_key=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: I: recv basic.publish: ticket=0
</span><br>
<span class="quotelev1">&gt; exchange=&quot;amq.direct&quot; routing_key=&quot;0&quot; mandatory=0 immediate=0
</span><br>
<span class="quotelev1">&gt; 2008-06-26 21:29:21: E: Socket closing: End of file found, connection
</span><br>
<span class="quotelev1">&gt; to client lost (10.135.250.17:51695, OpenAMQ Kernel Client, 1.2d0, 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ####################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Caciano Machado
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4241.php">Jeff Squyres: "Re: [OMPI devel] Need help"</a>
<li><strong>Previous message:</strong> <a href="4239.php">Gnanasekar Loganathan: "[OMPI devel] Need help"</a>
<li><strong>In reply to:</strong> <a href="4238.php">Caciano Machado: "[OMPI devel] Client connection lost"</a>
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
