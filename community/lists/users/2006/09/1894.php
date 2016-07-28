<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 08:57:22 2006" -->
<!-- isoreceived="20060926125722" -->
<!-- sent="Tue, 26 Sep 2006 08:57:18 -0400" -->
<!-- isosent="20060926125718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_reduce_op" -->
<!-- id="C13E9BEE.28585%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0609251352360.19510_at_diablo.cs.fsu.edu" -->
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
<strong>Date:</strong> 2006-09-26 08:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1895.php">Brock Palen: "[OMPI users] C --&gt; LOGICAL"</a>
<li><strong>Previous message:</strong> <a href="1893.php">Ahmad Faraj: "[OMPI users] ompi_reduce_op"</a>
<li><strong>In reply to:</strong> <a href="1893.php">Ahmad Faraj: "[OMPI users] ompi_reduce_op"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/25/06 1:54 PM, &quot;Ahmad Faraj&quot; &lt;faraj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to call the internal function &quot;ompi_op_reduce&quot; from my code.
</span><br>
<span class="quotelev1">&gt; is there a way to do this, can I link with any library under the /lib
</span><br>
<span class="quotelev1">&gt; directory of where openmpi is imstalled.
</span><br>
<p>This function is internal to Open MPI, and is therefore not prototyped in
<br>
mpi.h.  You can call any function in libmpi that you want (including
<br>
ompi_op_reduce), but you'll need to either prototype it yourself or
<br>
configure Open MPI with --with-devel-headers that will allow you to include
<br>
&quot;ompi/op/op.h&quot;, where it is prototyped.
<br>
<p>However, I'd advise against this for the following reasons:
<br>
<p>- your code will be non-portable
<br>
- it's not a public function, and is therefore subject to change at any time
<br>
(i.e., we may change its prototype, how it works, etc. -- this is unlikely,
<br>
but certainly possible)
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
<li><strong>Next message:</strong> <a href="1895.php">Brock Palen: "[OMPI users] C --&gt; LOGICAL"</a>
<li><strong>Previous message:</strong> <a href="1893.php">Ahmad Faraj: "[OMPI users] ompi_reduce_op"</a>
<li><strong>In reply to:</strong> <a href="1893.php">Ahmad Faraj: "[OMPI users] ompi_reduce_op"</a>
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
