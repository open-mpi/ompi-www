<?
$subject_val = "[OMPI users] False positive from valgrind in sec_basic.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 18:29:33 2014" -->
<!-- isoreceived="20140521222933" -->
<!-- sent="Wed, 21 May 2014 15:29:28 -0700" -->
<!-- isosent="20140521222928" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="[OMPI users] False positive from valgrind in sec_basic.c" -->
<!-- id="537D28C8.7010708_at_earthlink.net" -->
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
<strong>Subject:</strong> [OMPI users] False positive from valgrind in sec_basic.c<br>
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-21 18:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Previous message:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When running under valgrind, I get warnings from each MPI process at 
<br>
MPI_Init time.  The warnings come from function sec_basic.c at lines 70 
<br>
and 71 (openmpi v1.8.1):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_cred.credential = strdup(&quot;12345&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_cred.size = strlen(my_cred.credential)+1;  // include 
<br>
the NULL
<br>
<p>This is because strdup(3c) and strlen(3c) are apparently optimized to 
<br>
use 4-byte integer loads to speed up the copy and search operations, and 
<br>
&quot;overrun&quot; the malloced area.  (In fact, since malloc tends to pad 
<br>
allocations, it is safe.  But valgrind doesn't know that.)
<br>
<p>Since the &quot;12345&quot; appears to be a dummy string, would it be ok to add a 
<br>
couple of additional characters in the strdup call to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_cred.credential = strdup(&quot;1234567&quot;);
<br>
<p>This gives an 8 byte string (counting the NULL) and quiets valgrind down.
<br>
<p>Walter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Previous message:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
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
