<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 12:08:56 2007" -->
<!-- isoreceived="20070613160856" -->
<!-- sent="Wed, 13 Jun 2007 19:08:51 +0300" -->
<!-- isosent="20070613160851" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="20070613160851.GB6519_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="70667107-3A53-4856-9855-3111D7C46DA8_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 12:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 13, 2007 at 09:38:21AM -0600, Galen Shipman wrote:
<br>
<span class="quotelev1">&gt; Hi Gleb,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As we have discussed before I am working on adding support for  
</span><br>
<span class="quotelev1">&gt; multiple QPs with either per peer resources or shared resources.
</span><br>
<span class="quotelev1">&gt; As a result of this I am trying to clean up a lot of the OpenIB code.  
</span><br>
<span class="quotelev1">&gt; It has grown up organically over the years and needs some attention.
</span><br>
<span class="quotelev1">&gt; Perhaps we can coordinate on commits or even work from the same temp  
</span><br>
<span class="quotelev1">&gt; branch to do an overall cleanup as well as addressing the issue you  
</span><br>
<span class="quotelev1">&gt; describe in this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I bring this up because this commit will conflict quite a bit with  
</span><br>
<span class="quotelev1">&gt; what I am working on, I can always merge it by hand but it may make  
</span><br>
<span class="quotelev1">&gt; sense for us to get this all done in one area and then bring it all  
</span><br>
<span class="quotelev1">&gt; over?
</span><br>
<p>I am not committing this yet. I want people to review my logic and the
<br>
patch. If the change is OK with everyone how cares then I want this
<br>
change to go into 1.2 branch.
<br>
<p>I don't care how this change will get to the trunk. I can use patched
<br>
version for a while. If you branch is in working state right now I can
<br>
merge this change into it tomorrow.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 7:27 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I encountered a problem with openib on depend connection code.  
</span><br>
<span class="quotelev2">&gt; &gt; Basically
</span><br>
<span class="quotelev2">&gt; &gt; it works only by pure luck if you have more then one endpoint for  
</span><br>
<span class="quotelev2">&gt; &gt; the same
</span><br>
<span class="quotelev2">&gt; &gt; proc and sometimes breaks in mysterious ways.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The algo works like this: A wants to connect to B so it creates QP  
</span><br>
<span class="quotelev2">&gt; &gt; and sends it
</span><br>
<span class="quotelev2">&gt; &gt; to B. B receives the QP from A and looks for endpoint that is not  
</span><br>
<span class="quotelev2">&gt; &gt; yet associated
</span><br>
<span class="quotelev2">&gt; &gt; with remote endpoint, creates QP for it and sends info back. Now A  
</span><br>
<span class="quotelev2">&gt; &gt; receives
</span><br>
<span class="quotelev2">&gt; &gt; the QP and goes through the same logic as B i.e looks for endpoint  
</span><br>
<span class="quotelev2">&gt; &gt; that is not
</span><br>
<span class="quotelev2">&gt; &gt; yet connected, BUT there is no guaranty that it will find the  
</span><br>
<span class="quotelev2">&gt; &gt; endpoint that
</span><br>
<span class="quotelev2">&gt; &gt; initiated the connection in the first place! And if it finds  
</span><br>
<span class="quotelev2">&gt; &gt; another one it will
</span><br>
<span class="quotelev2">&gt; &gt; create QP for it and will send it back to B and so on and so forth.  
</span><br>
<span class="quotelev2">&gt; &gt; In the end
</span><br>
<span class="quotelev2">&gt; &gt; I sometimes receive a peculiar mesh of connection where no QP has a  
</span><br>
<span class="quotelev2">&gt; &gt; connection
</span><br>
<span class="quotelev2">&gt; &gt; back to it from the peer process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To overcome this problem B needs to send back some info that will  
</span><br>
<span class="quotelev2">&gt; &gt; allow A to
</span><br>
<span class="quotelev2">&gt; &gt; determine the endpoint that initiated a connection request. The  
</span><br>
<span class="quotelev2">&gt; &gt; lid:qp pair
</span><br>
<span class="quotelev2">&gt; &gt; will allow for this. But even then the problem will remain if two  
</span><br>
<span class="quotelev2">&gt; &gt; procs initiate
</span><br>
<span class="quotelev2">&gt; &gt; connection at the same time. To dial with simultaneous connection  
</span><br>
<span class="quotelev2">&gt; &gt; asymmetry
</span><br>
<span class="quotelev2">&gt; &gt; protocol have to be used one peer became master another slave.  
</span><br>
<span class="quotelev2">&gt; &gt; Slave alway
</span><br>
<span class="quotelev2">&gt; &gt; initiate a connection to master. Master choose local endpoint to  
</span><br>
<span class="quotelev2">&gt; &gt; satisfy
</span><br>
<span class="quotelev2">&gt; &gt; incoming request and sends info back to a slave. If master wants to  
</span><br>
<span class="quotelev2">&gt; &gt; initiate a
</span><br>
<span class="quotelev2">&gt; &gt; connection it send message to a slave and slave initiate connection  
</span><br>
<span class="quotelev2">&gt; &gt; back to
</span><br>
<span class="quotelev2">&gt; &gt; master.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Included patch implements an algorithm described above and work for  
</span><br>
<span class="quotelev2">&gt; &gt; all
</span><br>
<span class="quotelev2">&gt; &gt; scenarios for which current code fails to create a connection.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; &lt;fix_openib_wireup.diff&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1681.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
