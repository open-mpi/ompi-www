<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 12:37:04 2009" -->
<!-- isoreceived="20090603163704" -->
<!-- sent="Wed, 3 Jun 2009 10:36:59 -0600" -->
<!-- isosent="20090603163659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="71d2d8cc0906030936r5efc7031s102732778aaa281d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B61AF82-1B4F-4A6A-BB0E-B2BB06CE7B98_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 12:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The changes Jeff mentioned are not in the 1.3 branch - not sure if they will
<br>
come over there or not.
<br>
<p>I'm a little concerned in this thread that someone is reporting the process
<br>
affinity binding changing - that shouldn't be happening, and my guess is
<br>
that something outside of our control may be changing it.
<br>
<p>One other thing to consider that has been an issue around here, and will be
<br>
an even bigger issue with the change to bind at app start. If your app is
<br>
threaded, we will bind *all* threads to the same processor, thus potentially
<br>
hampering performance. We have found that multi-threaded apps often provide
<br>
better performance if users do *not* set processor affinity via MPI, but
<br>
instead embed binding calls inside the individual threads so they can be
<br>
placed on separate processors.
<br>
<p>All depends on the exact nature of the application, of course!
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Wed, Jun 3, 2009 at 10:02 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 3, 2009, at 11:40 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Wasn't there a discussion about this recently on the list, OMPI binds
</span><br>
<span class="quotelev2">&gt;&gt; during MPI_Init() so it's possible for memory to be allocated on the
</span><br>
<span class="quotelev2">&gt;&gt; wrong quad, the discussion was about moving the binding to the orte
</span><br>
<span class="quotelev2">&gt;&gt; process as I recall?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  It's been fixed in OMPI devel trunk.  I'm not sure it made it to the
</span><br>
<span class="quotelev1">&gt; v1.3 branch, but it's definitely not in a released version yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *thought* that HPL did all allocation after MPI_INIT.  But I could be
</span><br>
<span class="quotelev1">&gt; wrong.  If so, then using numactl to bind before the MPI app starts will
</span><br>
<span class="quotelev1">&gt; likely give better results -- you're right (until we get our fixes in such
</span><br>
<span class="quotelev1">&gt; that we bind pre-main).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, if something is *changing* the affinity after MPI_INIT, then
</span><br>
<span class="quotelev1">&gt; there's little OMPI can do about that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;From my testing of process affinity you tend to get much more consistent
</span><br>
<span class="quotelev2">&gt;&gt; results with it on and much more unpredictable results with it off, I'd
</span><br>
<span class="quotelev2">&gt;&gt; questing that it's working properly if you are seeing a 88-93% range in
</span><br>
<span class="quotelev2">&gt;&gt; the results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
