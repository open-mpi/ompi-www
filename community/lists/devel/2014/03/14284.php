<?
$subject_val = "[OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 03:12:35 2014" -->
<!-- isoreceived="20140304081235" -->
<!-- sent="Tue, 4 Mar 2014 12:12:34 +0400" -->
<!-- isosent="20140304081234" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="[OMPI devel] -mca coll &amp;quot;ml&amp;quot; cause segv or hangs with different command lines." -->
<!-- id="CANhOtjYtZDCDWN7qPKra7yMz+Nz11yCX-L_p5kkX4m3kTUaS6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.<br>
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 03:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Recently I often meet hangs and seg faults with different command lines and
<br>
there are &quot;ml&quot; functions in the stack trace.
<br>
When I just turn &quot;ml&quot; off by do -mca coll ^ml, problems disappear.
<br>
For example,
<br>
oshrun -np 4 --map-by node --display-map  ./ring_oshmem
<br>
fails with seg fault while
<br>
oshrun -np 4 --map-by node --display-map -mca coll ^ml ./ring_oshmem
<br>
passes.
<br>
<p>The &quot;ml&quot; priority is low (27), but it could have issues during comm_query
<br>
(it does all initialization staff there).
<br>
<p>&quot;Ml&quot; is unreliable component. So It may be reasonable do not to build this
<br>
component by default to avoid such problems.
<br>
<p>What do you think?
<br>
<p>Best regards,
<br>
Elena
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
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
