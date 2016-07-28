<?
$subject_val = "[OMPI devel] Client connection lost";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 22:52:18 2008" -->
<!-- isoreceived="20080627025218" -->
<!-- sent="Thu, 26 Jun 2008 23:52:11 -0300" -->
<!-- isosent="20080627025211" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="[OMPI devel] Client connection lost" -->
<!-- id="4226a8f0806261952o5d1b3a07taa43c9cfc37b899e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Client connection lost<br>
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-26 22:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4239.php">Gnanasekar Loganathan: "[OMPI devel] Need help"</a>
<li><strong>Previous message:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4240.php">Jeff Squyres: "Re: [OMPI devel] Client connection lost"</a>
<li><strong>Reply:</strong> <a href="4240.php">Jeff Squyres: "Re: [OMPI devel] Client connection lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>After publishing and consuming some messages (greater than 128KB)
<br>
suddenly my application loses its connections to the server and prints
<br>
the following log. If I use only smaller messages then nothing wrong
<br>
happens.
<br>
<p>18:14:44: E: Socket error: Bad address, connection to server lost
<br>
(10.135.250.16:5672)
<br>
<p>the server prints this one:
<br>
<p>2008-06-26 18:14:44: E: Socket closing: End of file found, connection
<br>
to client lost (10.135.250.16:34733, OpenAMQ Kernel Client, 1.2d0, 0)
<br>
<p>Any ideas of what could be wrong?
<br>
<p>####################################################################
<br>
<p>Here is a &quot;resume&quot; of my configuration:
<br>
<p>&nbsp;&nbsp;/* QUEUE DECLARE */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amq_client_session_queue_declare (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_endpoint_addr.sess, /*  session */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,                                    /*  ticket */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_addr.queue,    /*  queue name */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FALSE,                                /*  passive */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FALSE,                                /*  durable */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUE,                                 /*  exclusive */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUE,                                 /*  auto-delete */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL);                                /*  arguments */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* QUEUE BIND */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amq_client_session_queue_bind (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_endpoint_addr.sess, /*  session */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,                                    /*  ticket */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_addr.queue,    /*  queue */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;amq.direct&quot;,                         /*  exchange */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_addr.key,      /*  routing-key */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL);                                /*  arguments */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* QUEUE CONSUME */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amq_client_session_basic_consume (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_endpoint_addr.sess, /* session */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,                                /* ticket */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_addr.queue,    /* queue */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,                             /* consumer-tag */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUE,                             /* no-local */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUE,                             /* no-ack */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUE,                             /* exclusive */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL);                            /* arguments */
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* RECEIVE MESSAGES */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amq_client_session_wait(mom_endpoint_addr.sess, 30000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amq_content_basic_get_body(content_recv, (byte*) buf, length));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amq_content_basic_unlink (&amp;content_recv);
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/*  PUBLISH MESSAGE*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mom_return = amq_client_session_basic_publish (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_endpoint-&gt;mom_peer_addr.sess,  /*  session */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content,                           /*  content to send */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,                                 /*  ticket */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;amq.direct&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mom_endpoint-&gt;mom_peer-&gt;key,       /*  routing-key */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FALSE,                             /*  mandatory */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FALSE);                            /*  immediate */
<br>
<p>####################################################################
<br>
<p>And here is a trace log of the server:
<br>
<p>cmachado_at_xiru-6:~$ amq_server --trace 1
<br>
OpenAMQ/1.2d0
<br>
Production release
<br>
<p>Copyright (c) 2007-2008 iMatix Corporation
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>2008-06-26 21:29:10: W: security warning - logins use default passwords
<br>
2008-06-26 21:29:10: I: hostname is xiru-6 (10.135.250.16)
<br>
2008-06-26 21:29:10: I: listening on port 5672, all network interfaces
<br>
2008-06-26 21:29:10: I: no failover defined, READY as stand-alone
<br>
2008-06-26 21:29:11: I: server ready for incoming AMQ connections
<br>
2008-06-26 21:29:21: I: send connection.start: version_major=0
<br>
version_minor=9 server_properties=184B mechanisms=5B locales=5B
<br>
2008-06-26 21:29:21: I: recv connection.start-ok:
<br>
client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
<br>
2008-06-26 21:29:21: I: send connection.tune: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
<br>
capabilities=&quot;&quot; insist=0
<br>
2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
<br>
2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
<br>
2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
<br>
2008-06-26 21:29:21: I: recv queue.declare: ticket=0 queue=&quot;0&quot;
<br>
passive=0 durable=0 exclusive=1 auto_delete=1 nowait=0 arguments=0B
<br>
2008-06-26 21:29:21: I: send queue.declare-ok: queue=&quot;0&quot;
<br>
message_count=0 consumer_count=0
<br>
2008-06-26 21:29:21: I: recv queue.bind: ticket=0 queue=&quot;0&quot;
<br>
exchange=&quot;amq.direct&quot; routing_key=&quot;0&quot; nowait=0 arguments=0B
<br>
2008-06-26 21:29:21: I: send queue.bind-ok:
<br>
2008-06-26 21:29:21: I: recv basic.consume: ticket=0 queue=&quot;0&quot;
<br>
consumer_tag=&quot;&quot; no_local=1 no_ack=1 exclusive=1 nowait=0 arguments=0B
<br>
2008-06-26 21:29:21: I: send basic.consume-ok: consumer_tag=&quot;0&quot;
<br>
2008-06-26 21:29:21: I: send connection.start: version_major=0
<br>
version_minor=9 server_properties=184B mechanisms=5B locales=5B
<br>
2008-06-26 21:29:21: I: recv connection.start-ok:
<br>
client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
<br>
2008-06-26 21:29:21: I: send connection.tune: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
<br>
capabilities=&quot;&quot; insist=0
<br>
2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
<br>
2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
<br>
2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
<br>
2008-06-26 21:29:21: I: recv queue.declare: ticket=0 queue=&quot;1&quot;
<br>
passive=0 durable=0 exclusive=1 auto_delete=1 nowait=0 arguments=0B
<br>
2008-06-26 21:29:21: I: send queue.declare-ok: queue=&quot;1&quot;
<br>
message_count=0 consumer_count=0
<br>
2008-06-26 21:29:21: I: recv queue.bind: ticket=0 queue=&quot;1&quot;
<br>
exchange=&quot;amq.direct&quot; routing_key=&quot;1&quot; nowait=0 arguments=0B
<br>
2008-06-26 21:29:21: I: send queue.bind-ok:
<br>
2008-06-26 21:29:21: I: recv basic.consume: ticket=0 queue=&quot;1&quot;
<br>
consumer_tag=&quot;&quot; no_local=1 no_ack=1 exclusive=1 nowait=0 arguments=0B
<br>
2008-06-26 21:29:21: I: send basic.consume-ok: consumer_tag=&quot;0&quot;
<br>
2008-06-26 21:29:21: I: send connection.start: version_major=0
<br>
version_minor=9 server_properties=184B mechanisms=5B locales=5B
<br>
2008-06-26 21:29:21: I: send connection.start: version_major=0
<br>
version_minor=9 server_properties=184B mechanisms=5B locales=5B
<br>
2008-06-26 21:29:21: I: recv connection.start-ok:
<br>
client_properties=184B mechanism=&quot;PLAIN&quot; response=12B
<br>
locale=&quot;en_US&quot;2008-06-26 21:29:21: I: recv connection.start-ok:
<br>
client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
<br>
2008-06-26 21:29:21: I: send connection.tune: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
<p>2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
<br>
capabilities=&quot;&quot; insist=0
<br>
2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
<br>
2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
<br>
2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
<br>
2008-06-26 21:29:21: I: send connection.tune: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
<br>
capabilities=&quot;&quot; insist=0
<br>
2008-06-26 21:29:21: I: send connection.start: version_major=0
<br>
version_minor=9 server_properties=184B mechanisms=5B locales=5B
<br>
2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
<br>
2008-06-26 21:29:21: I: recv connection.start-ok:
<br>
client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
<br>
2008-06-26 21:29:21: I: send connection.tune: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
<br>
capabilities=&quot;&quot; insist=0
<br>
2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
<br>
2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
<br>
2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
<br>
2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
<br>
2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
<br>
2008-06-26 21:29:21: I: send connection.start: version_major=0
<br>
version_minor=9 server_properties=184B mechanisms=5B locales=5B
<br>
2008-06-26 21:29:21: I: recv connection.start-ok:
<br>
client_properties=184B mechanism=&quot;PLAIN&quot; response=12B locale=&quot;en_US&quot;
<br>
2008-06-26 21:29:21: I: send connection.tune: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.tune-ok: channel_max=1
<br>
frame_max=32768 heartbeat=2
<br>
2008-06-26 21:29:21: I: recv connection.open: virtual_host=&quot;/&quot;
<br>
capabilities=&quot;&quot; insist=0
<br>
2008-06-26 21:29:21: I: send connection.open-ok: known_hosts=&quot;&quot;
<br>
2008-06-26 21:29:21: I: recv channel.open: out_of_band=&quot;&quot;
<br>
2008-06-26 21:29:21: I: send channel.open-ok: channel_id=4B
<br>
2008-06-26 21:29:21: I: recv basic.publish: ticket=0
<br>
exchange=&quot;amq.direct&quot; routing_key=&quot;1&quot; mandatory=0 immediate=0
<br>
2008-06-26 21:29:21: I: send basic.deliver: consumer_tag=&quot;0&quot;
<br>
delivery_tag=0 redelivered=0 exchange=&quot;amq.direct&quot; routing_key=&quot;1&quot;
<br>
2008-06-26 21:29:21: I: recv basic.publish: ticket=0
<br>
exchange=&quot;amq.direct&quot; routing_key=&quot;0&quot; mandatory=0 immediate=0
<br>
2008-06-26 21:29:21: E: Socket closing: End of file found, connection
<br>
to client lost (10.135.250.17:51695, OpenAMQ Kernel Client, 1.2d0, 0)
<br>
<p>####################################################################
<br>
<p>Regards,
<br>
Caciano Machado
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4239.php">Gnanasekar Loganathan: "[OMPI devel] Need help"</a>
<li><strong>Previous message:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4240.php">Jeff Squyres: "Re: [OMPI devel] Client connection lost"</a>
<li><strong>Reply:</strong> <a href="4240.php">Jeff Squyres: "Re: [OMPI devel] Client connection lost"</a>
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
