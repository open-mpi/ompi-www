<?
$subject_val = "Re: [OMPI users] Open MPI Checkpoint Restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 31 19:35:59 2013" -->
<!-- isoreceived="20130531233559" -->
<!-- sent="Sat, 1 Jun 2013 01:35:52 +0200" -->
<!-- isosent="20130531233552" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI Checkpoint Restart" -->
<!-- id="337EEE9C-514F-484F-A3EF-6ECE67164563_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADdOW1+Nn7O00Z=Kf7FpVJTw1iw0DDwssVgNNRnhQ_u=qNuYFg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-31 19:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22006.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="22004.php">Ralph Castain: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Take a look at config.log to see why the FT support has been turned off. Maybe the configure script failed to find BLCR? 
<br>
<p>George.
<br>
<p>On Jun 1, 2013, at 01:31 , Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I did install open mpi with the --with-ft=cr option.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Neel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 31, 2013 at 4:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Okay, it should work it that version. It sounds like you didn't configure OMPI with the --with-ft=cr option - yes? Take a look at &quot;./configure -h&quot; for the ft-related options and ensure you build what you need. C/R support is not built by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 31, 2013, at 3:59 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 31, 2013 at 3:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What OMPI version?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 31, 2013, at 3:17 PM, Neel Sunil Desai &lt;Neel.Desai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I forgot to add. I watched the video of Joshua Hursey and when I type ompi_info | grep FT, I get FT Checkpoint Support: no ( checkpoint thread : no). I do not get anything when I type ompi_info | grep crs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Neel.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22006.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="22004.php">Ralph Castain: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
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
