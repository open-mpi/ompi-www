<?
$subject_val = "Re: [OMPI devel] Bad parameter in file oob_tcp.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 17:08:27 2014" -->
<!-- isoreceived="20140305220827" -->
<!-- sent="Wed, 5 Mar 2014 17:08:26 -0500" -->
<!-- isosent="20140305220826" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bad parameter in file oob_tcp.c" -->
<!-- id="8D9ACD42-E7B5-47EB-9DD2-E4497FF3B82D_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57oeknZiMrM=X=9+eVK9Fwgn78WXBcfwz2xY_GJOUbrHPNg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-05 17:08:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14302.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Previous message:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14302.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14302.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#146;m afraid the snippet pointed by Ralph is incorrect, as INADDR_ANY should not be a valid return for inet_addr. Here is a quick check on different OSes.
<br>
<p>On Linux, the man Page states:
<br>
<p><span class="quotelev1">&gt; If the input is invalid, INADDR_NONE (usually -1) is returned.
</span><br>
<p>On Mac OS X:
<br>
<p><span class="quotelev1">&gt; The constant INADDR_NONE is returned by inet_addr() and inet_network() for malformed requests.
</span><br>
<p>On Windows things are slightly more complicated:
<br>
<p><span class="quotelev1">&gt; On Windows Server 2003 and later if the string in the cp parameter is an empty string, then inet_addr returns the value INADDR_NONE. If NULL is passed in the cp parameter, then inet_addrreturns the value INADDR_NONE.
</span><br>
<span class="quotelev1">&gt; On Windows XP and earlier if the string in the cp parameter is an empty string, then inet_addr returns the value INADDR_ANY. If NULL is passed in the cp parameter, then inet_addr returns the value INADDR_NONE.
</span><br>
<p>Thus, we should compare with INADDR_NONE and not with INADDR_ANY.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Mar 4, 2014, at 22:06 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The code generating the error is here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         in-&gt;sin_addr.s_addr = inet_addr(host);
</span><br>
<span class="quotelev1">&gt;         if (in-&gt;sin_addr.s_addr == INADDR_ANY) {
</span><br>
<span class="quotelev1">&gt;             return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The address is resolving to INADDR_ANY instead of a regular address. Does cygwin require some other method for resolving a hostname to an IP address?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 4, 2014 at 3:19 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; noted on cygwin with 1.7.4 and on 1.7.5rc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 ./hello_c.exe
</span><br>
<span class="quotelev1">&gt; [MATZERI:06212] [[62628,1],0] ORTE_ERROR_LOG: Bad parameter in file /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c at line 292
</span><br>
<span class="quotelev1">&gt; [MATZERI:05620] [[62628,1],1] ORTE_ERROR_LOG: Bad parameter in file /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c at line 292
</span><br>
<span class="quotelev1">&gt; [MATZERI:06892] [[62628,1],2] ORTE_ERROR_LOG: Bad parameter in file /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c at line 292
</span><br>
<span class="quotelev1">&gt; [MATZERI:03908] [[62628,1],3] ORTE_ERROR_LOG: Bad parameter in file /pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/orte/mca/oob/tcp/oob_tcp.c at line 292
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4, (Open MPI v1.7.5rc1, package: Open MPI marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4, (Open MPI v1.7.5rc1, package: Open MPI marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4, (Open MPI v1.7.5rc1, package: Open MPI marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4, (Open MPI v1.7.5rc1, package: Open MPI marco_at_MATZERI Distribution, ident: 1.7.5rc1, Mar 01, 2014, 102)
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
<span class="quotelev1">&gt;     if ((rc = parse_uri(pop-&gt;af_family, pop-&gt;net, pop-&gt;port, (struct sockaddr*) &amp;inaddr)) != ORTE_SUCCESS) {
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
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/index.php">http://www.open-mpi.org/community/lists/devel/2014/03/index.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/index.php">http://www.open-mpi.org/community/lists/devel/2014/03/index.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14302.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Previous message:</strong> <a href="14300.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>In reply to:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14302.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Reply:</strong> <a href="14302.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
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
