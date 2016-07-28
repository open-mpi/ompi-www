<?
$subject_val = "Re: [OMPI devel] Bad parameter in file oob_tcp.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 22:06:58 2014" -->
<!-- isoreceived="20140305030658" -->
<!-- sent="Tue, 4 Mar 2014 19:06:58 -0800" -->
<!-- isosent="20140305030658" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bad parameter in file oob_tcp.c" -->
<!-- id="CAMD57oeknZiMrM=X=9+eVK9Fwgn78WXBcfwz2xY_GJOUbrHPNg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53165F9F.7060407_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bad parameter in file oob_tcp.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 22:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14294.php">Guillaume Papauré: "[OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>Previous message:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14291.php">Marco Atzeri: "[OMPI devel] Bad parameter in file  oob_tcp.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14295.php">Marco Atzeri: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14295.php">Marco Atzeri: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14301.php">George Bosilca: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The code generating the error is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in-&gt;sin_addr.s_addr = inet_addr(host);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (in-&gt;sin_addr.s_addr == INADDR_ANY) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_BAD_PARAM;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>The address is resolving to INADDR_ANY instead of a regular address. Does
<br>
cygwin require some other method for resolving a hostname to an IP address?
<br>
<p>Ralph
<br>
<p><p><p>On Tue, Mar 4, 2014 at 3:19 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; noted on cygwin with 1.7.4 and on 1.7.5rc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 ./hello_c.exe
</span><br>
<span class="quotelev1">&gt; [MATZERI:06212] [[62628,1],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; at line 292
</span><br>
<span class="quotelev1">&gt; [MATZERI:05620] [[62628,1],1] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; at line 292
</span><br>
<span class="quotelev1">&gt; [MATZERI:06892] [[62628,1],2] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; at line 292
</span><br>
<span class="quotelev1">&gt; [MATZERI:03908] [[62628,1],3] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; at line 292
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4, (Open MPI v1.7.5rc1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4, (Open MPI v1.7.5rc1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4, (Open MPI v1.7.5rc1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4, (Open MPI v1.7.5rc1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any idea what could be the cause ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't remember it in previous 1.7.x releases
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the relevant code is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if ((rc = parse_uri(pop-&gt;af_family, pop-&gt;net, pop-&gt;port, (struct
</span><br>
<span class="quotelev1">&gt; sockaddr*) &amp;inaddr)) != ORTE_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; community/lists/devel/2014/03/index.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14294.php">Guillaume Papauré: "[OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>Previous message:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14291.php">Marco Atzeri: "[OMPI devel] Bad parameter in file  oob_tcp.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14295.php">Marco Atzeri: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14295.php">Marco Atzeri: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14301.php">George Bosilca: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
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
