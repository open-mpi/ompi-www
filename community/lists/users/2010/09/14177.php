<?
$subject_val = "[OMPI users] Problem with the receive buffer size?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  4 09:46:40 2010" -->
<!-- isoreceived="20100904134640" -->
<!-- sent="Sat, 4 Sep 2010 13:46:34 +0000 (GMT)" -->
<!-- isosent="20100904134634" -->
<!-- name="dbbmyx-franzxaver_at_[hidden]" -->
<!-- email="dbbmyx-franzxaver_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with the receive buffer size?" -->
<!-- id="755826.42341.qm_at_web24813.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Problem with the receive buffer size?<br>
<strong>From:</strong> <a href="mailto:dbbmyx-franzxaver_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20with%20the%20receive%20buffer%20size?"><em>dbbmyx-franzxaver_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-09-04 09:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Reply:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Maybe reply:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Reply:</strong> <a href="14183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with the receive buffer size?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have some problems with my mpi-project.
<br>
I try to send some information from one process to another one. To realize this I use the Issend and the Iprobe and Ireceive Operation.
<br>
When using the Issend and the Ireceive operation I use the MPI_CHAR datatype because I try to send/receive a serialized object as a std::string. This works for most operations. But when I send a larger string it seems to be that only a part of it is received at the other process. The Iprobe operation set the size of the message correctly. But the receiving string ist not as large as the sending one.
<br>
Is there any size-limits at the buffers? Is it possible to change the buffer-size?
<br>
<p>I am thankful for all your informations
<br>
Greetings Franz Xaver
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14177/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Reply:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Maybe reply:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Reply:</strong> <a href="14183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with the receive buffer size?"</a>
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
