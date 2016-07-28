<?
$subject_val = "[OMPI devel] Bad parameter in file  oob_tcp.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 18:20:09 2014" -->
<!-- isoreceived="20140304232009" -->
<!-- sent="Wed, 05 Mar 2014 00:19:59 +0100" -->
<!-- isosent="20140304231959" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI devel] Bad parameter in file  oob_tcp.c" -->
<!-- id="53165F9F.7060407_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Bad parameter in file  oob_tcp.c<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 18:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14290.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
noted on cygwin with 1.7.4 and on 1.7.5rc1
<br>
<p>$ mpirun -n 4 ./hello_c.exe
<br>
[MATZERI:06212] [[62628,1],0] ORTE_ERROR_LOG: Bad parameter in file 
<br>
/pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c 
<br>
at line 292
<br>
[MATZERI:05620] [[62628,1],1] ORTE_ERROR_LOG: Bad parameter in file 
<br>
/pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c 
<br>
at line 292
<br>
[MATZERI:06892] [[62628,1],2] ORTE_ERROR_LOG: Bad parameter in file 
<br>
/pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c 
<br>
at line 292
<br>
[MATZERI:03908] [[62628,1],3] ORTE_ERROR_LOG: Bad parameter in file 
<br>
/pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c 
<br>
at line 292
<br>
Hello, world, I am 1 of 4, (Open MPI v1.7.5rc1, package: Open MPI 
<br>
marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
<br>
Hello, world, I am 2 of 4, (Open MPI v1.7.5rc1, package: Open MPI 
<br>
marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
<br>
Hello, world, I am 3 of 4, (Open MPI v1.7.5rc1, package: Open MPI 
<br>
marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
<br>
Hello, world, I am 0 of 4, (Open MPI v1.7.5rc1, package: Open MPI 
<br>
marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
<br>
<p>any idea what could be the cause ?
<br>
<p>I don't remember it in previous 1.7.x releases
<br>
<p>the relevant code is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((rc = parse_uri(pop-&gt;af_family, pop-&gt;net, pop-&gt;port, (struct 
<br>
sockaddr*) &amp;inaddr)) != ORTE_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14290.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
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
