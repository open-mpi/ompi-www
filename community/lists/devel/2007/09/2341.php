<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 19:25:00 2007" -->
<!-- isoreceived="20070919232500" -->
<!-- sent="Wed, 19 Sep 2007 19:24:55 -0400" -->
<!-- isosent="20070919232455" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD Support?" -->
<!-- id="46F1AFC7.7030900_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="65609FB9-03A8-4080-BB75-518570A234EF_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 19:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is fixed in r16164.
<br>
<p>Tim
<br>
<p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Sep 19, 2007, at 4:11 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is where it gets nasty. On FreeBSD, /usr/include/string.h  
</span><br>
<span class="quotelev2">&gt;&gt; includes
</span><br>
<span class="quotelev2">&gt;&gt; strings.h in some cases. But there is a strings.h in the ompi/mpi/f77
</span><br>
<span class="quotelev2">&gt;&gt; directory, so that is getting included instead of the proper
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/strings.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suppose we could rename our strings.h to f77_strings.h, or something
</span><br>
<span class="quotelev2">&gt;&gt; similar. Does anyone have an opinion on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this is the best path forward.  Ugh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
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
