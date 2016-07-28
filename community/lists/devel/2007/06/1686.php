<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 12:53:02 2007" -->
<!-- isoreceived="20070613165302" -->
<!-- sent="Wed, 13 Jun 2007 10:52:53 -0600" -->
<!-- isosent="20070613165253" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="8BE24C3E-3CC0-4931-ABFB-FB94844CCFF1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6BF10518-E530-4D2B-B660-BA524CA23287_at_cisco.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 12:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1692.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1692.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 10:48 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I wonder if this is bringing up the point that there are several of
</span><br>
<span class="quotelev1">&gt; us working in the openib code base -- I wonder if it would be
</span><br>
<span class="quotelev1">&gt; worthwhile to have a [short] teleconference to discuss what we're all
</span><br>
<span class="quotelev1">&gt; doing in openib, where we're doing it (trunk, branch, whatever), when
</span><br>
<span class="quotelev1">&gt; we expect to have it done, what version we need it in, etc.  Just a
</span><br>
<span class="quotelev1">&gt; coordination kind of teleconference.  If people think this is a good
</span><br>
<span class="quotelev1">&gt; idea, I can setup the call.
</span><br>
<p>sounds good to me.
<br>
<p>- Galen
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, don't forget that Nysal and I have the openib btl port-
</span><br>
<span class="quotelev1">&gt; selection stuff off in /tmp/jnysal-openib-wireup (the btl_openib_if_
</span><br>
<span class="quotelev1">&gt; [in|ex]clude MCA params).  Per my prior e-mail, if no one objects, I
</span><br>
<span class="quotelev1">&gt; will be bringing that stuff in to the trunk tomorrow evening (I'm
</span><br>
<span class="quotelev1">&gt; pretty sure it won't conflict with what Galen is doing; Galen and I
</span><br>
<span class="quotelev1">&gt; discussed on the phone this morning).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 11:38 AM, Galen Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gleb,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As we have discussed before I am working on adding support for
</span><br>
<span class="quotelev2">&gt;&gt; multiple QPs with either per peer resources or shared resources.
</span><br>
<span class="quotelev2">&gt;&gt; As a result of this I am trying to clean up a lot of the OpenIB code.
</span><br>
<span class="quotelev2">&gt;&gt; It has grown up organically over the years and needs some attention.
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps we can coordinate on commits or even work from the same temp
</span><br>
<span class="quotelev2">&gt;&gt; branch to do an overall cleanup as well as addressing the issue you
</span><br>
<span class="quotelev2">&gt;&gt; describe in this email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I bring this up because this commit will conflict quite a bit with
</span><br>
<span class="quotelev2">&gt;&gt; what I am working on, I can always merge it by hand but it may make
</span><br>
<span class="quotelev2">&gt;&gt; sense for us to get this all done in one area and then bring it all
</span><br>
<span class="quotelev2">&gt;&gt; over?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 13, 2007, at 7:27 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I encountered a problem with openib on depend connection code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works only by pure luck if you have more then one endpoint for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc and sometimes breaks in mysterious ways.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The algo works like this: A wants to connect to B so it creates QP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and sends it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to B. B receives the QP from A and looks for endpoint that is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yet associated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with remote endpoint, creates QP for it and sends info back. Now A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the QP and goes through the same logic as B i.e looks for endpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yet connected, BUT there is no guaranty that it will find the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; endpoint that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initiated the connection in the first place! And if it finds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another one it will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; create QP for it and will send it back to B and so on and so forth.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the end
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I sometimes receive a peculiar mesh of connection where no QP has a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back to it from the peer process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To overcome this problem B needs to send back some info that will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow A to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; determine the endpoint that initiated a connection request. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lid:qp pair
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will allow for this. But even then the problem will remain if two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs initiate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection at the same time. To dial with simultaneous connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; asymmetry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protocol have to be used one peer became master another slave.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Slave alway
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initiate a connection to master. Master choose local endpoint to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; satisfy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incoming request and sends info back to a slave. If master wants to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initiate a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection it send message to a slave and slave initiate connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Included patch implements an algorithm described above and work for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scenarios for which current code fails to create a connection.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;fix_openib_wireup.diff&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="1687.php">Nysal Jan: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1692.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1692.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
