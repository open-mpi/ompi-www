<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:38:31 2007" -->
<!-- isoreceived="20070613153831" -->
<!-- sent="Wed, 13 Jun 2007 09:38:21 -0600" -->
<!-- isosent="20070613153821" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="70667107-3A53-4856-9855-3111D7C46DA8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070613132719.GC482_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-13 11:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1673.php">Gleb Natapov: "[OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb,
<br>
<p>As we have discussed before I am working on adding support for  
<br>
multiple QPs with either per peer resources or shared resources.
<br>
As a result of this I am trying to clean up a lot of the OpenIB code.  
<br>
It has grown up organically over the years and needs some attention.
<br>
Perhaps we can coordinate on commits or even work from the same temp  
<br>
branch to do an overall cleanup as well as addressing the issue you  
<br>
describe in this email.
<br>
<p>I bring this up because this commit will conflict quite a bit with  
<br>
what I am working on, I can always merge it by hand but it may make  
<br>
sense for us to get this all done in one area and then bring it all  
<br>
over?
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Jun 13, 2007, at 7:27 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I encountered a problem with openib on depend connection code.  
</span><br>
<span class="quotelev1">&gt; Basically
</span><br>
<span class="quotelev1">&gt; it works only by pure luck if you have more then one endpoint for  
</span><br>
<span class="quotelev1">&gt; the same
</span><br>
<span class="quotelev1">&gt; proc and sometimes breaks in mysterious ways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The algo works like this: A wants to connect to B so it creates QP  
</span><br>
<span class="quotelev1">&gt; and sends it
</span><br>
<span class="quotelev1">&gt; to B. B receives the QP from A and looks for endpoint that is not  
</span><br>
<span class="quotelev1">&gt; yet associated
</span><br>
<span class="quotelev1">&gt; with remote endpoint, creates QP for it and sends info back. Now A  
</span><br>
<span class="quotelev1">&gt; receives
</span><br>
<span class="quotelev1">&gt; the QP and goes through the same logic as B i.e looks for endpoint  
</span><br>
<span class="quotelev1">&gt; that is not
</span><br>
<span class="quotelev1">&gt; yet connected, BUT there is no guaranty that it will find the  
</span><br>
<span class="quotelev1">&gt; endpoint that
</span><br>
<span class="quotelev1">&gt; initiated the connection in the first place! And if it finds  
</span><br>
<span class="quotelev1">&gt; another one it will
</span><br>
<span class="quotelev1">&gt; create QP for it and will send it back to B and so on and so forth.  
</span><br>
<span class="quotelev1">&gt; In the end
</span><br>
<span class="quotelev1">&gt; I sometimes receive a peculiar mesh of connection where no QP has a  
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt; back to it from the peer process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To overcome this problem B needs to send back some info that will  
</span><br>
<span class="quotelev1">&gt; allow A to
</span><br>
<span class="quotelev1">&gt; determine the endpoint that initiated a connection request. The  
</span><br>
<span class="quotelev1">&gt; lid:qp pair
</span><br>
<span class="quotelev1">&gt; will allow for this. But even then the problem will remain if two  
</span><br>
<span class="quotelev1">&gt; procs initiate
</span><br>
<span class="quotelev1">&gt; connection at the same time. To dial with simultaneous connection  
</span><br>
<span class="quotelev1">&gt; asymmetry
</span><br>
<span class="quotelev1">&gt; protocol have to be used one peer became master another slave.  
</span><br>
<span class="quotelev1">&gt; Slave alway
</span><br>
<span class="quotelev1">&gt; initiate a connection to master. Master choose local endpoint to  
</span><br>
<span class="quotelev1">&gt; satisfy
</span><br>
<span class="quotelev1">&gt; incoming request and sends info back to a slave. If master wants to  
</span><br>
<span class="quotelev1">&gt; initiate a
</span><br>
<span class="quotelev1">&gt; connection it send message to a slave and slave initiate connection  
</span><br>
<span class="quotelev1">&gt; back to
</span><br>
<span class="quotelev1">&gt; master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Included patch implements an algorithm described above and work for  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev1">&gt; scenarios for which current code fails to create a connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; &lt;fix_openib_wireup.diff&gt;
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
<li><strong>Next message:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1676.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1673.php">Gleb Natapov: "[OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1678.php">Torsten Hoefler: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1685.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
