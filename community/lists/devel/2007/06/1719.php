<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 10:43:33 2007" -->
<!-- isoreceived="20070614144333" -->
<!-- sent="Thu, 14 Jun 2007 08:43:23 -0600" -->
<!-- isosent="20070614144323" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="AD56510D-65FD-466A-93A1-8B6D2228C56B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070614103728.GI482_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-14 10:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1720.php">Jeff Squyres: "Re: [OMPI devel] [MTT users] IBM thread tests"</a>
<li><strong>Previous message:</strong> <a href="1718.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch applies to ib_multifrag as is without a conflict. But the  
</span><br>
<span class="quotelev1">&gt; branch
</span><br>
<span class="quotelev1">&gt; doesn't compile with or without the patch so I was not able to test  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt; Do you have some uncommitted changes that may generate a conflict? Can
</span><br>
<span class="quotelev1">&gt; you commit them so they can be resolved? If there is no conflict  
</span><br>
<span class="quotelev1">&gt; between
</span><br>
<span class="quotelev1">&gt; your work and this patch may be it is a good idea to commit it to your
</span><br>
<span class="quotelev1">&gt; branch and trunk for testing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have a whole pile of changes that need to be committed, and even  
<br>
with these changes, it still doesn't compile as I am reworking names,  
<br>
and data structures, etc.
<br>
I will commit what I have now, and will work on this a bit more over  
<br>
the weekend.
<br>
- Galen
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Galen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 13, 2007, at 7:27 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   I encountered a problem with openib on depend connection code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basically
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it works only by pure luck if you have more then one endpoint for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc and sometimes breaks in mysterious ways.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The algo works like this: A wants to connect to B so it creates QP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and sends it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to B. B receives the QP from A and looks for endpoint that is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yet associated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with remote endpoint, creates QP for it and sends info back. Now A
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; receives
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the QP and goes through the same logic as B i.e looks for endpoint
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yet connected, BUT there is no guaranty that it will find the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endpoint that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initiated the connection in the first place! And if it finds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; another one it will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; create QP for it and will send it back to B and so on and so forth.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I sometimes receive a peculiar mesh of connection where no QP has a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back to it from the peer process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To overcome this problem B needs to send back some info that will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allow A to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; determine the endpoint that initiated a connection request. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lid:qp pair
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will allow for this. But even then the problem will remain if two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; procs initiate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection at the same time. To dial with simultaneous connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; asymmetry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; protocol have to be used one peer became master another slave.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Slave alway
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initiate a connection to master. Master choose local endpoint to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; satisfy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; incoming request and sends info back to a slave. If master wants to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initiate a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection it send message to a slave and slave initiate connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Included patch implements an algorithm described above and work for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scenarios for which current code fails to create a connection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;fix_openib_wireup.diff&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="1720.php">Jeff Squyres: "Re: [OMPI devel] [MTT users] IBM thread tests"</a>
<li><strong>Previous message:</strong> <a href="1718.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
