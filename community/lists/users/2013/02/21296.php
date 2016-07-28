<?
$subject_val = "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 00:09:34 2013" -->
<!-- isoreceived="20130205050934" -->
<!-- sent="Tue, 5 Feb 2013 00:09:09 -0500" -->
<!-- isosent="20130205050909" -->
<!-- name="Roland Schulz" -->
<!-- email="roland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple" -->
<!-- id="CAO2TwbkuZ-rQkbrOgPg6y6VUzdsp54GnAh9Aezdv-LNC1sywQw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a889f05122554048b2b87ba2802a3a27_at_CH1PRD0202HT013.namprd02.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple<br>
<strong>From:</strong> Roland Schulz (<em>roland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 00:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21196.php">Roland Schulz: "[OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22101.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 28, 2013 at 9:20 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe that yes, you have to compile enable-mpi-thread-multiple to
</span><br>
<span class="quotelev1">&gt; get anything other than SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I just tested that compiling with enable-opal-multi-threads also makes
<br>
MPI_Init_thread return MPI_THREAD_FUNNELED.
<br>
Does enable-opal-multi-threads have any performance impact? According to
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/10/20587.phpenable-mpi-thread-multiple">http://www.open-mpi.org/community/lists/users/2012/10/20587.phpenable-mpi-thread-multiple</a>
<br>
has significant performance impact (at least for
<br>
IB). But I couldn't find any description of whether this is also true for
<br>
enable-opal-multi-threads.
<br>
<p>Also why is enable-opal-multi-threads required for MPI_THREAD_FUNNELED? This
<br>
was asked before (e.g.
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/05/7900.php">http://www.open-mpi.org/community/lists/devel/2010/05/7900.php</a>) but I
<br>
couldn't find any answer. What does the option change? The README
<br>
states: &quot;Enables
<br>
thread lock support in the OPAL and ORTE layers.&quot;, but that is not very
<br>
useful for a user. Also why is it not enabled by default?
<br>
<p>Roland
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 22, 2013 at 12:56 PM, Roland Schulz &lt;roland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compiling 1.6.1 or 1.6.2 without enable-mpi-thread-multiple returns from
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init_thread as provided level MPI_THREAD_SINGLE. Is
</span><br>
<span class="quotelev2">&gt; &gt; enable-mpi-thread-multiple required even for
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_FUNNELED/MPI_THREAD_SERIALIZED?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This question has been asked before:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2011/05/16451.php">http://www.open-mpi.org/community/lists/users/2011/05/16451.php</a> but I
</span><br>
<span class="quotelev2">&gt; &gt; couldn't find an answer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Roland
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
</span><br>
<span class="quotelev2">&gt; &gt; 865-241-1537, ORNL PO BOX 2008 MS6309
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
865-241-1537, ORNL PO BOX 2008 MS6309
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21295.php">HM Li: "Re: [OMPI users] How openmpi-1.6.3 using nodes which not LSF	dispatch?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21196.php">Roland Schulz: "[OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22097.php">Brian Budge: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22101.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
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
