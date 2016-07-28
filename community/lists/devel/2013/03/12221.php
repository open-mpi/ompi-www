<?
$subject_val = "[OMPI devel] OpenMPI error with error codes. The proposed solution.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 25 05:00:01 2013" -->
<!-- isoreceived="20130325090001" -->
<!-- sent="Mon, 25 Mar 2013 12:59:56 +0400" -->
<!-- isosent="20130325085956" -->
<!-- name="&#228;&#205;&#201;&#212;&#210;&#201;&#202; &#228;&#207;&#206;&#195;&#207;&#215;" -->
<!-- email="dvdontsov_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI error with error codes. The proposed solution." -->
<!-- id="d931a0896a118056104db60802c3f331_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI error with error codes. The proposed solution.<br>
<strong>From:</strong> &#228;&#205;&#201;&#212;&#210;&#201;&#202; &#228;&#207;&#206;&#195;&#207;&#215; (<em>dvdontsov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-25 04:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12222.php">Joshua Ladd: "Re: [OMPI devel] Linux memory hooks testing"</a>
<li><strong>Previous message:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Reply:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p><p><p>I've found error in OpenMPI with error codes.
<br>
<p>According to MPI standard (2.2 and later):
<br>
<p>MPI_ERR_LASTCODE must be equals to last error code and MPI_LASTUSEDCODE
<br>
must be greater than or equal to MPI_ERR_LASTCODE.
<br>
<p><p><p>In OpenMPI MPI_ERR_LASTCODE is greater than real last error code
<br>
(MPI_ERR_WIN) for 1 and MPI_LASTUSEDCODE hardcoded linked with MPI_ERR_WIN.
<br>
So, possible situation when MPI_LASTUSEDCODE (equals to MPI_ERR_WIN) is
<br>
less than MPI_ERR_LASTCODE.
<br>
<p><p><p>I've investigated it and prepared patch (based on non-configured
<br>
openmpi-1.7rc8 code) which corrects it and makes appending of new
<br>
predefined error codes more easy. Please find it in attachments.
<br>
<p><p><p><p><p>Best regards,
<br>
<p>Dmitry
<br>
<p><p><p>/**********************************
<br>
<p>* mobile: +7 (920) 111-2882
<br>
<p>* Skype : dontsov.dmitry
<br>
<p>**********************************/
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12221/openmpi.patch">openmpi.patch</a>
</ul>
<!-- attachment="openmpi.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12222.php">Joshua Ladd: "Re: [OMPI devel] Linux memory hooks testing"</a>
<li><strong>Previous message:</strong> <a href="12220.php">Ralph Castain: "Re: [OMPI devel] Hostfile info argument with MPI_COMM_SPAWN in a Torque environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Reply:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
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
