<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 18:02:59 2006" -->
<!-- isoreceived="20060208230259" -->
<!-- sent="Wed, 8 Feb 2006 18:04:07 -0500" -->
<!-- isosent="20060208230407" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  [OMPI svn] svn:open-mpi r8940" -->
<!-- id="D740E716-025E-4BC6-9ED0-C473C8D134FE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0602081612550.20157_at_enterprise" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 18:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
<li><strong>Previous message:</strong> <a href="0723.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a disagreement between my brain and my fingers ...  
<br>
Everything seems to be back to normal by now. However the IU mail  
<br>
server is really really slow. I'm still waiting for the email for  
<br>
revision 8943 when I already commit 30 minutes ago the revision 8945 ...
<br>
But if you update your ompi copy you will get the correct version.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 8, 2006, at 4:13 PM, Graham E Fagg wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 8 Feb 2006 bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Remove the second lock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt;&gt; +        OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev2">&gt;&gt;         MCA_PML_OB1_SEND_REQUEST_PML_COMPLETE(sendreq);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; looks like adding an extra lock??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  	Graham.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
</span><br>
<span class="quotelev1">&gt; Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
</span><br>
<span class="quotelev1">&gt; Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
</span><br>
<span class="quotelev1">&gt; University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
</span><br>
<span class="quotelev1">&gt; Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
</span><br>
<span class="quotelev1">&gt; Broken complex systems are always derived from working simple systems
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
<li><strong>Previous message:</strong> <a href="0723.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
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
