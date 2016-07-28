<?
$subject_val = "[OMPI devel] ORTE async operations";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 20 15:23:33 2012" -->
<!-- isoreceived="20120520192333" -->
<!-- sent="Sun, 20 May 2012 13:23:27 -0600" -->
<!-- isosent="20120520192327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE async operations" -->
<!-- id="C074E34C-5C4A-4B49-AAE8-834D68C5D117_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] ORTE async operations<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-20 15:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11005.php">Josh Hursey: "[OMPI devel] Building Open MPI without Java"</a>
<li><strong>Previous message:</strong> <a href="11003.php">P. Martin: "[OMPI devel] 1.6.0 - make check failures on OSX Lion using clang-3.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Just an FYI: I have committed a change to the developer's trunk that allows ORTE to use an asynchronous progress thread for application processes. This allows out-of-band communications to progress independently from any calls down into the MPI library. This capability is -only- on if you configure OMPI to use it by adding:
<br>
<p>--enable-orte-progress-threads --enable-event-thread-support
<br>
<p>to your configuration. I have only begun testing this, but so far found it to work fine with both shared memory and TCP btl's. We will be working on extending and further testing this capability as part of the 1.7 series objective of achieving complete MPI-3 compliance, so please feel free to experiment - and please do share your findings!
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11005.php">Josh Hursey: "[OMPI devel] Building Open MPI without Java"</a>
<li><strong>Previous message:</strong> <a href="11003.php">P. Martin: "[OMPI devel] 1.6.0 - make check failures on OSX Lion using clang-3.1"</a>
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
