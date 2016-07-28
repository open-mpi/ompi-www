<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  1 07:45:37 2006" -->
<!-- isoreceived="20060901114537" -->
<!-- sent="Fri, 01 Sep 2006 07:45:25 -0400" -->
<!-- isosent="20060901114525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] little endian - big endian conversion" -->
<!-- id="C11D9595.25226%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="10d61530a39.alfonso.isola_at_tin.it" -->
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
<strong>Date:</strong> 2006-09-01 07:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1810.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1804.php">Eng. A.A. Isola: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/30/06 7:03 PM, &quot;Eng. A.A. Isola&quot; &lt;alfonso.isola_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &quot;As of Open MPI 1.1, we do support endian conversion between peers.   It
</span><br>
<span class="quotelev1">&gt; has not been as well tested as the rest of the code base, but it
</span><br>
<span class="quotelev1">&gt; should work.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then if I send for example a MPI_CHAR between a solaris SPARC
</span><br>
<span class="quotelev1">&gt; and a LINUX pc both with a 32bit architecture, the communication
</span><br>
<span class="quotelev1">&gt; will be correctly?
</span><br>
<p>Note that a CHAR is typically 1 byte and therefore not subject to endian
<br>
conversion.  Therefore, yes, it should work.
<br>
<p><span class="quotelev1">&gt; I want know only if the Open MPI v.1.1 support the
</span><br>
<span class="quotelev1">&gt; endian conversion.
</span><br>
<p>As Brian stated, starting with v1.1, Open MPI is able to do endian
<br>
conversion between processes on nodes with opposite endian (it happens
<br>
automatically).  Open MPI does not yet handle types with different sizes,
<br>
however (e.g., if sizeof(long)==4 on one node and sizeof(long)==8 on
<br>
another).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1810.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1804.php">Eng. A.A. Isola: "Re: [OMPI users] little endian - big endian conversion"</a>
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
