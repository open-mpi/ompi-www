<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 16:08:21 2010" -->
<!-- isoreceived="20100406200821" -->
<!-- sent="Tue, 6 Apr 2010 16:08:16 -0400" -->
<!-- isosent="20100406200816" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="2135608E-D94E-4F70-9999-6F00CA890F1E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF5120380B.D30C6708-ON852576FD.0064E5EC-852576FD.0065C135_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hide Abort output<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 16:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12566.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For those wishing to follow the thread Dick started on the MPI forum list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.mpi-forum.org/mpi-forum/2010/04/0606.php">http://lists.mpi-forum.org/mpi-forum/2010/04/0606.php</a>
<br>
<p><p>On Apr 6, 2010, at 2:31 PM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; The MPI standard says that MPI_Abort makes a &quot;best effort&quot;. It also says that an MPI implementation is free to lose the value passed into MPI_Abort and deliver some other RC.. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The standard does not say that MPI_Abort becomes a valid way to end a parallel job if it is passed a zero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To me it seems pretty clear the name MPI_Abort is was chosen to imply failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think modifying the standard to be explicit about what must happen when MPI_Abort is passed zero would be an option. It is a ugly one in my view but it would give this kind of application the equivalent of MPI_Quit. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, someone who passes a zero to MPI_Abort would have a hard time claiming his application is valid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick Treumann - MPI Team 
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;&quot;Terry Frankcombe&quot; ---04/06/2010 01:33:53 PM---&gt; Jeff - &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; From:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Terry Frankcombe&quot; &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Date:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; 04/06/2010 01:33 PM
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I started a discussion of MPI_Quit on the MPI Forum reflector.  I raised
</span><br>
<span class="quotelev2">&gt; &gt; the question because I do not think using MPI_Abort is appropriate.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The situation is when  a single task decides the parallel program has
</span><br>
<span class="quotelev2">&gt; &gt; arrived at the desired answer and therefore whatever the other tasks are
</span><br>
<span class="quotelev2">&gt; &gt; currently doing has become irrelevant.  The other tasks do not know that
</span><br>
<span class="quotelev2">&gt; &gt; the answer has been found by one of them so they cannot just call
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do we need a clean and portable way for the task that detects that the
</span><br>
<span class="quotelev2">&gt; &gt; answer has been found and written out to do a single handed termination of
</span><br>
<span class="quotelev2">&gt; &gt; the parallel job?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not Jeff.  But isn't that MPI_Abort with an appropriate errorcode
</span><br>
<span class="quotelev1">&gt; argument, provided we can get it to shut up?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12566.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
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
