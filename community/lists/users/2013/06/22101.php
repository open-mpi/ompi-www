<?
$subject_val = "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 19:37:08 2013" -->
<!-- isoreceived="20130614233708" -->
<!-- sent="Fri, 14 Jun 2013 16:37:00 -0700" -->
<!-- isosent="20130614233700" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple" -->
<!-- id="578415BB-7D91-4E90-B3A8-9D70ED6E4CEF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAO2TwbkuZ-rQkbrOgPg6y6VUzdsp54GnAh9Aezdv-LNC1sywQw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 19:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22102.php">Hayato KUNIIE: "[OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2013, at 9:09 PM, Roland Schulz &lt;roland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 28, 2013 at 9:20 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I believe that yes, you have to compile enable-mpi-thread-multiple to
</span><br>
<span class="quotelev1">&gt; get anything other than SINGLE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just tested that compiling with enable-opal-multi-threads also makes MPI_Init_thread return MPI_THREAD_FUNNELED.
</span><br>
<p>Yes, that is what it should do.
<br>
<p><span class="quotelev1">&gt; Does enable-opal-multi-threads have any performance impact?
</span><br>
<p>Sadly, it most certainly does.
<br>
<p><span class="quotelev1">&gt; According to <a href="http://www.open-mpi.org/community/lists/users/2012/10/20587.php">http://www.open-mpi.org/community/lists/users/2012/10/20587.php</a> enable-mpi-thread-multiple has significant performance impact (at least for IB). But I couldn't find any description of whether this is also true for enable-opal-multi-threads.
</span><br>
<p>Yes, it turns &quot;on&quot; all the thread locking code, so you will see a distinct drop-off in performance.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also why is enable-opal-multi-threads required for MPI_THREAD_FUNNELED? This was asked before (e.g. <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7900.php">http://www.open-mpi.org/community/lists/devel/2010/05/7900.php</a>) but I couldn't find any answer. What does the option change?
</span><br>
<p>It turns on the thread locking code. Even though all the MPI is funneled, you are still accessing those calls from different threads - so thread locking at the interface level is required.
<br>
<p><span class="quotelev1">&gt; The README states: &quot;Enables thread lock support in the OPAL and ORTE layers.&quot;, but that is not very useful for a user. Also why is it not enabled by default?
</span><br>
<p>Because those who don't want to use threads shouldn't suffer the performance penalty. I suppose it should be automatically turned on if you set enable-mpi-thread-multiple. It used to be that way, but probably bit-rotted at some time. We can take a look at that.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Roland
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
</span><br>
<span class="quotelev1">&gt; 865-241-1537, ORNL PO BOX 2008 MS6309
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22101/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22102.php">Hayato KUNIIE: "[OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
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
