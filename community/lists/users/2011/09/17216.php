<?
$subject_val = "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 08:55:31 2011" -->
<!-- isoreceived="20110912125531" -->
<!-- sent="Mon, 12 Sep 2011 06:55:24 -0600" -->
<!-- isosent="20110912125524" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="07B22328-E27E-4287-BE2E-3EEE1FD94950_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8f3da75a2bf5f00d89ce8c5f98957058.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 08:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17217.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband Error"</a>
<li><strong>Previous message:</strong> <a href="17215.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17213.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17219.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ask because those are set via MCA param. So ompi_info would show the &quot;default&quot; if the param isn't set in the environment or param file, but the app could see something different if you set the param on the mpirun cmd line.
<br>
<p>Those are the default values, but it looks like the MCA param is being picked up correctly in the code. You might check that you spelled it right as there is no warning if you typoed the name.
<br>
<p><p>On Sep 11, 2011, at 8:03 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you getting those messages from ompi_info? Or from an MPI app
</span><br>
<span class="quotelev2">&gt;&gt; (and if so, what are you doing to get them)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They're coming out of a user's application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reason I just wanted to check about what the errors are saying is
</span><br>
<span class="quotelev1">&gt; that things are still in tesing mode wrt the IB kit though, as I
</span><br>
<span class="quotelev1">&gt; say, I thought I had poked two variables into the node-local MPI
</span><br>
<span class="quotelev1">&gt; environment, so was surprised to see the second of those numbers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am getting the user to run the code with those variables set
</span><br>
<span class="quotelev1">&gt; explictly, which might answer the supposition I have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kevin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt; Computer Science
</span><br>
<span class="quotelev1">&gt; Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt; New Zealand
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17217.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband Error"</a>
<li><strong>Previous message:</strong> <a href="17215.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17213.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17219.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
