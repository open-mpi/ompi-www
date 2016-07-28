<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 02:44:02 2006" -->
<!-- isoreceived="20060616064402" -->
<!-- sent="Fri, 16 Jun 2006 02:43:51 -0400" -->
<!-- isosent="20060616064351" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tests/datatype: srandomdev" -->
<!-- id="8CE59E7C-9416-4C9E-B5ED-128C5474182F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060616055808.GA30266_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 02:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0943.php">Matthijs Richard Koot: "[OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
<li><strong>Previous message:</strong> <a href="0941.php">Ralf Wildenhues: "[OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>In reply to:</strong> <a href="0941.php">Ralf Wildenhues: "[OMPI devel] tests/datatype: srandomdev"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's just one of my data-type tests. It's not that it is very useful  
<br>
all the time, it's purpose it's to test the checksum function. I just  
<br>
needed one way to get random numbers. I will modify it in order to  
<br>
use some other function. I don't want to have to add a function test  
<br>
in configure just for a [slightly useful] test.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 16, 2006, at 1:58 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently 'make check' is failing for me in the tests/datatype
</span><br>
<span class="quotelev1">&gt; directory, because my system (GNU/Linux, glibc 2.3.6) doesn't  
</span><br>
<span class="quotelev1">&gt; provide a
</span><br>
<span class="quotelev1">&gt; srandomdev function, called in checksum.c.  I believe it's BSD  
</span><br>
<span class="quotelev1">&gt; specific;
</span><br>
<span class="quotelev1">&gt; if you need it, I guess you could add a configure time check for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers, and keep up the good work,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="0943.php">Matthijs Richard Koot: "[OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
<li><strong>Previous message:</strong> <a href="0941.php">Ralf Wildenhues: "[OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>In reply to:</strong> <a href="0941.php">Ralf Wildenhues: "[OMPI devel] tests/datatype: srandomdev"</a>
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
