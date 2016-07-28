<?
$subject_val = "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 08:52:31 2009" -->
<!-- isoreceived="20090330125231" -->
<!-- sent="Mon, 30 Mar 2009 14:52:25 +0200" -->
<!-- isosent="20090330125225" -->
<!-- name="Alessandro Surace" -->
<!-- email="zioalex_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PML add procs failed --&amp;gt; Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="adbbb9af0903300552w6f05f0a7v5aad24ebaa082cd6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] PML add procs failed --&amp;gt; Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
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
<strong>Subject:</strong> Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> Alessandro Surace (<em>zioalex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 08:52:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8629.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Previous message:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and all,
<br>
I've find that this question is a known bug
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/972">https://svn.open-mpi.org/trac/ompi/ticket/972</a> .
<br>
<p>This bug is resolved in version 1.3.1.
<br>
I've created the BIN RPM without the known issue with -D_FORTIFY_SOURCE=2.
<br>
<p>You can DL the bin RPM at:
<br>
<a href="http://www.itss.it/public_ftp/openmpi/openmpi-1.3.1-1.i386.rpm.without_FORTIFY_SOURCE">http://www.itss.it/public_ftp/openmpi/openmpi-1.3.1-1.i386.rpm.without_FORTIFY_SOURCE</a>
<br>
<p>or the souce one at:
<br>
<a href="http://www.itss.it/public_ftp/openmpi/openmpi-1.3.1-1.src.rpm.without_FORTIFY_SOURCE">http://www.itss.it/public_ftp/openmpi/openmpi-1.3.1-1.src.rpm.without_FORTIFY_SOURCE</a>
<br>
<p>Bye
<br>
Alex
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8629.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Previous message:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
