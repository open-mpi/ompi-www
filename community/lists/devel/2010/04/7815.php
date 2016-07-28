<?
$subject_val = "[OMPI devel] Is there a way to knit multiple ompi-servers into a broader network ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 01:25:24 2010" -->
<!-- isoreceived="20100427052524" -->
<!-- sent="Tue, 27 Apr 2010 10:55:17 +0530 (IST)" -->
<!-- isosent="20100427052517" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="[OMPI devel] Is there a way to knit multiple ompi-servers into a broader network ?" -->
<!-- id="495850.25531.qm_at_web8703.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI devel] Is there a way to knit multiple ompi-servers into a broader network ?<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 01:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7816.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tested this on my machines and it worked, so hopefully it will meet your needs. You only need to run one &quot;ompi-server&quot; period, so long as you locate it where all of the processes can find the contact file and can open a TCP socket to the daemon. There is a way to knit multiple ompi-servers into a broader network (e.g., to connect processes that cannot directly access a server due to network segmentation), but it's a tad tricky - let me know if you require it and I'll try to help. 

In one of reply <a href="http://www.open-mpi.org/community/lists/users/2010/04/12763.php">http://www.open-mpi.org/community/lists/users/2010/04/12763.php</a> you said the above thing

Actually i am very much interested in doing that. Can you please let me know how it can be done?

If anyone has done this before can you please help. I would appreciate any help.


<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7816.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
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
