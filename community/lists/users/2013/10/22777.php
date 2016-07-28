<?
$subject_val = "[OMPI users] Unterminated log buffer causes corrupt log messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 10:40:29 2013" -->
<!-- isoreceived="20131009144029" -->
<!-- sent="Wed, 9 Oct 2013 14:40:28 +0000" -->
<!-- isosent="20131009144028" -->
<!-- name="Kevin M. Hildebrand" -->
<!-- email="kevin_at_[hidden]" -->
<!-- subject="[OMPI users] Unterminated log buffer causes corrupt log messages" -->
<!-- id="D6070DAA269E4F44967B5872A5022ADC6B24BA9D_at_OITMX1002.AD.UMD.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Unterminated log buffer causes corrupt log messages<br>
<strong>From:</strong> Kevin M. Hildebrand (<em>kevin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 10:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22778.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Previous message:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22778.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Reply:</strong> <a href="22778.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Reply:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I just noticed a bug in the common logging code in both 1.6.5 and 1.7.2.  For sites with hostnames longer than 32 characters, the terminating NULL is getting cut off the hostname string.
<br>
<p>Here's a simple patch to fix:
<br>
<p>diff -c -r1.1 opal/util/output.c
<br>
*** opal/util/output.c  2013/10/09 14:09:47     1.1
<br>
--- opal/util/output.c  2013/10/09 14:12:06
<br>
***************
<br>
*** 140,145 ****
<br>
--- 140,146 ----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;#endif  /* defined(__WINDOWS__) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gethostname(hostname, sizeof(hostname));
<br>
+     hostname[sizeof(hostname)-1] = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;verbose.lds_want_stderr = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;verbose.lds_prefix, &quot;[%s:%05d] &quot;, hostname, getpid());
<br>
<p><p><p>Thanks!
<br>
Kevin
<br>
<p><pre>
--
Kevin Hildebrand
University of Maryland, College Park
Division of IT
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22777/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22778.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Previous message:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22778.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Reply:</strong> <a href="22778.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Reply:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
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
