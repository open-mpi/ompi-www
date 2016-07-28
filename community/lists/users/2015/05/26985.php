<?
$subject_val = "Re: [OMPI users] How can I discover valid values for MCA parameters?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 12:14:48 2015" -->
<!-- isoreceived="20150529161448" -->
<!-- sent="Fri, 29 May 2015 16:14:45 +0000" -->
<!-- isosent="20150529161445" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How can I discover valid values for MCA parameters?" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CCD2111_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CCD20A1_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How can I discover valid values for MCA parameters?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 12:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26984.php">Nathan Hjelm: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Follow-up to the 2nd question which I now realize is something else.
<br>
<p>I can see output when I do:     ompi_info --param coll fca      with a version of OpenMPI that was built with --prefix set to its installed location.
<br>
<p>I cannot get the output when I use a relocated version, i.e. built in one place and installed in another, even after I set OPAL_PREFIX to reflect the installed location.
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Blosch, Edwin L
<br>
Sent: Friday, May 29, 2015 11:06 AM
<br>
To: Open MPI Users (users_at_[hidden])
<br>
Subject: EXTERNAL: [OMPI users] How can I discover valid values for MCA parameters?
<br>
<p>Sometimes I want to use one of the option flags, for example today it is mtl_mxm_verbose.  How do I discover the valid possible values of various MCA parameters?
<br>
<p>I've tried ompi_info --all but it does not show the possible values, only the current value
<br>
<p>I've tried ompi_info --param &lt;framework&gt; all      but no matter what string I give for framework, I get no output at all.
<br>
<p>Thanks
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26985/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26984.php">Nathan Hjelm: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
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
