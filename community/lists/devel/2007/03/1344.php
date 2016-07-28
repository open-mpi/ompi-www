<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 09:30:01 2007" -->
<!-- isoreceived="20070306143001" -->
<!-- sent="Tue, 6 Mar 2007 09:29:42 -0500" -->
<!-- isosent="20070306142942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()" -->
<!-- id="9351CB30-45A2-43FA-9379-18873AEAAB86_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45ED7556.5070005_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 09:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Previous message:</strong> <a href="1343.php">Bert Wesarg: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>In reply to:</strong> <a href="1343.php">Bert Wesarg: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, MPI_THREAD_MULTIPLE has never received a lot of  
<br>
testing in any version of OMPI (including v1.1).  Various members  
<br>
tested the bozo cases (e.g., ensure we don't double lock, etc.), and  
<br>
periodically tested/debugged simple multi-threaded apps, but not much  
<br>
more than that.
<br>
<p>As such, it's probably pretty lucky that v1.1 works with  
<br>
THREAD_MULTIPLE.  Indeed, v1.2 has changed quite a bit since v1.2,  
<br>
and only the same level of THREAD_MULTIPLE testing has occurred (so  
<br>
far) -- checking for the bozo cases.
<br>
<p>We do expect to improve this over the next several months; as Tim  
<br>
mentioned, for the v1.3 timeframe.
<br>
<p><p>On Mar 6, 2007, at 9:06 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is realy sad, version 1.1.2 works quite good with threads  
</span><br>
<span class="quotelev1">&gt; (multiple
</span><br>
<span class="quotelev1">&gt; threads which starts mpi requests), only 1 of 10 (or even less)  
</span><br>
<span class="quotelev1">&gt; kills with
</span><br>
<span class="quotelev1">&gt; a SIGSEGV. And this this simple test program works even longer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Bert Wesarg,
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your quick testing of 1.2rc1.  1.2 is expected to  
</span><br>
<span class="quotelev2">&gt;&gt; fail when
</span><br>
<span class="quotelev2">&gt;&gt; using MPI_THREAD_MULTIPLE.  I suspect that a working and tested
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE will be one of our goals for 1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/6/07, Bert Wesarg &lt;wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I followed the call to test the rc1, but a simple test programm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non deterministic. all but one orted have quit. but no cpu eating  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted or mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The test system is a xeon cluster with myrinet interconnect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the outouts are splited into two mails (100kb limit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Previous message:</strong> <a href="1343.php">Bert Wesarg: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>In reply to:</strong> <a href="1343.php">Bert Wesarg: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
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
