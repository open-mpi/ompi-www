<?
$subject_val = "Re: [OMPI users] Problem with the receive buffer size?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  4 10:53:18 2010" -->
<!-- isoreceived="20100904145318" -->
<!-- sent="Sat, 4 Sep 2010 08:52:54 -0600" -->
<!-- isosent="20100904145254" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with the receive buffer size?" -->
<!-- id="AANLkTi=o17Mjhw6bdNnmo10ePxdOUrR2AaV+Q-r8sWcs_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="755826.42341.qm_at_web24813.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with the receive buffer size?<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-04 10:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14179.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Previous message:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
<li><strong>In reply to:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
when you use Ireceive, did you also use mpi_wait on the status from
<br>
Ireceive?
<br>
<p>On Sat, Sep 4, 2010 at 7:46 AM, &lt;dbbmyx-franzxaver_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some problems with my mpi-project.
</span><br>
<span class="quotelev1">&gt; I try to send some information from one process to another one. To realize
</span><br>
<span class="quotelev1">&gt; this I use the Issend and the Iprobe and Ireceive Operation.
</span><br>
<span class="quotelev1">&gt; When using the Issend and the Ireceive operation I use the MPI_CHAR
</span><br>
<span class="quotelev1">&gt; datatype because I try to send/receive a serialized object as a std::string.
</span><br>
<span class="quotelev1">&gt; This works for most operations. But when I send a larger string it seems to
</span><br>
<span class="quotelev1">&gt; be that only a part of it is received at the other process. The Iprobe
</span><br>
<span class="quotelev1">&gt; operation set the size of the message correctly. But the receiving string
</span><br>
<span class="quotelev1">&gt; ist not as large as the sending one.
</span><br>
<span class="quotelev1">&gt; Is there any size-limits at the buffers? Is it possible to change the
</span><br>
<span class="quotelev1">&gt; buffer-size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am thankful for all your informations
</span><br>
<span class="quotelev1">&gt; Greetings Franz Xaver
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14179.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Previous message:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
<li><strong>In reply to:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
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
