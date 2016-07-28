<?
$subject_val = "Re: [OMPI users] Several questions about new Java bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 08:09:59 2013" -->
<!-- isoreceived="20131203130959" -->
<!-- sent="Tue, 3 Dec 2013 05:09:58 -0800" -->
<!-- isosent="20131203130958" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Several questions about new Java bindings" -->
<!-- id="CAMD57ofurbrhf=UZC5Lo0hMftQSaGXy-pQbNNep2ENgcPXdkdg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFqp7_yqhqUTb+b6UiwvsUxaq_1wiYXCoFwOgxS9Pxx41yZAUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Several questions about new Java bindings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 08:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23137.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23130.php">Ivan Borisov: "[OMPI users] Several questions about new Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23142.php">Oscar Vega-Gisbert: "Re: [OMPI users] Several questions about new Java bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Java bindings were revised because (a) the old ones had significantly
<br>
bit-rotted, (b) we wanted to improve performance by making the code truly a
<br>
&quot;binding&quot; instead of just a wrapper around MPI calls, and (c) we wanted to
<br>
extend coverage to all of the current MPI standard. Hence the changes.
<br>
<p>The bindings are now stable, which is why they are now coming to a release
<br>
series. Things in our devel trunk are not guaranteed stable. Note that
<br>
things in a &quot;feature&quot; series (one that has an odd number in the second part
<br>
- e.g., 1.7) are not necessarily fully stable as they can undergo changes
<br>
prior to inclusion in a &quot;super-stable&quot; series (an even number in the second
<br>
part). At that time, only bug fixes are allowed.
<br>
<p>That said, we don't anticipate changes to the Java binding APIs.
<br>
<p>The new bindings are documented via javadocs and man pages, which should
<br>
help in the transition. If you have specific questions, I suspect some of
<br>
the folks more directly involved will try to help.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p>On Tue, Dec 3, 2013 at 2:22 AM, Ivan Borisov &lt;68vano89_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed nightly 1.7.4 recently and it's Java API is completely
</span><br>
<span class="quotelev1">&gt; different from mpiJava.
</span><br>
<span class="quotelev1">&gt; Is there guide or something to new Open MPI Java bindings? Or will it
</span><br>
<span class="quotelev1">&gt; come out later (in some resonable time)?
</span><br>
<span class="quotelev1">&gt; Specifically, I'm interested in how to port existing sources from old
</span><br>
<span class="quotelev1">&gt; mpiJava to new Open MPI Java bindings
</span><br>
<span class="quotelev1">&gt; and comments explaining reasons of changing each part of API.
</span><br>
<span class="quotelev1">&gt; Is there determined time when new Java bindings will become stable or
</span><br>
<span class="quotelev1">&gt; it's done when it's done?
</span><br>
<span class="quotelev1">&gt; Also, what is the best version of Java API implementation for now?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if I'm asking too much :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ivan Borisov.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23137.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23130.php">Ivan Borisov: "[OMPI users] Several questions about new Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23142.php">Oscar Vega-Gisbert: "Re: [OMPI users] Several questions about new Java bindings"</a>
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
