<?
$subject_val = "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 12:46:38 2013" -->
<!-- isoreceived="20130614164638" -->
<!-- sent="Fri, 14 Jun 2013 09:46:30 -0700" -->
<!-- isosent="20130614164630" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple" -->
<!-- id="CANjXV6_hDZd28v1WoJqW5nobcDosTbcfAQZLum=GaxDo=Eg_0A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 12:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22098.php">Hans Ekkehard Plesser: "[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22096.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to bump this question.  I also wanted to ask:  I've been
<br>
searching the archives, and it seems that in past versions of OMPI,
<br>
only MPI_THREAD_SINGLE was available from the default configuration of
<br>
OMPI.  It seems that as long as calls to MPI were serialized, however,
<br>
there were no issues.  Is this still the case in 1.6 and 1.7 series?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p>On Mon, Feb 4, 2013 at 9:09 PM, Roland Schulz &lt;roland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 28, 2013 at 9:20 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe that yes, you have to compile enable-mpi-thread-multiple to
</span><br>
<span class="quotelev2">&gt;&gt; get anything other than SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested that compiling with enable-opal-multi-threads also makes
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread return MPI_THREAD_FUNNELED.
</span><br>
<span class="quotelev1">&gt; Does enable-opal-multi-threads have any performance impact? According to
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/10/20587.php">http://www.open-mpi.org/community/lists/users/2012/10/20587.php</a>
</span><br>
<span class="quotelev1">&gt; enable-mpi-thread-multiple has significant performance impact (at least for
</span><br>
<span class="quotelev1">&gt; IB). But I couldn't find any description of whether this is also true for
</span><br>
<span class="quotelev1">&gt; enable-opal-multi-threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also why is enable-opal-multi-threads required for MPI_THREAD_FUNNELED? This
</span><br>
<span class="quotelev1">&gt; was asked before (e.g.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7900.php">http://www.open-mpi.org/community/lists/devel/2010/05/7900.php</a>) but I
</span><br>
<span class="quotelev1">&gt; couldn't find any answer. What does the option change? The README states:
</span><br>
<span class="quotelev1">&gt; &quot;Enables thread lock support in the OPAL and ORTE layers.&quot;, but that is not
</span><br>
<span class="quotelev1">&gt; very useful for a user. Also why is it not enabled by default?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roland
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 22, 2013 at 12:56 PM, Roland Schulz &lt;roland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiling 1.6.1 or 1.6.2 without enable-mpi-thread-multiple returns from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Init_thread as provided level MPI_THREAD_SINGLE. Is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; enable-mpi-thread-multiple required even for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_THREAD_FUNNELED/MPI_THREAD_SERIALIZED?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This question has been asked before:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2011/05/16451.php">http://www.open-mpi.org/community/lists/users/2011/05/16451.php</a> but I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; couldn't find an answer.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Roland
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 865-241-1537, ORNL PO BOX 2008 MS6309
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="22098.php">Hans Ekkehard Plesser: "[OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22096.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21296.php">Roland Schulz: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22100.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
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
