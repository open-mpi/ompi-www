<?
$subject_val = "Re: [OMPI users] Open MPI Checkpoint Restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 31 19:25:45 2013" -->
<!-- isoreceived="20130531232545" -->
<!-- sent="Fri, 31 May 2013 16:25:38 -0700" -->
<!-- isosent="20130531232538" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI Checkpoint Restart" -->
<!-- id="656C18DD-4DDB-47E2-AA49-B962E5A8B5BC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADdOW1+ZOEa8ytB40zvcPwnAsYvOv=8qeFigSQjQFSO-TBUcKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI Checkpoint Restart<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-31 19:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="22001.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22001.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Reply:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, it should work it that version. It sounds like you didn't configure OMPI with the --with-ft=cr option - yes? Take a look at &quot;./configure -h&quot; for the ft-related options and ensure you build what you need. C/R support is not built by default.
<br>
<p><p>On May 31, 2013, at 3:59 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI 1.5.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 31, 2013 at 3:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What OMPI version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 31, 2013, at 3:17 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I forgot to add. I watched the video of Joshua Hursey and when I type ompi_info | grep FT, I get FT Checkpoint Support: no ( checkpoint thread : no). I do not get anything when I type ompi_info | grep crs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Neel.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="22001.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22001.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Reply:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
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
