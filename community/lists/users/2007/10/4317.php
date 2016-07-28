<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 21:31:22 2007" -->
<!-- isoreceived="20071025013122" -->
<!-- sent="Wed, 24 Oct 2007 21:31:13 -0400" -->
<!-- isosent="20071025013113" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot suppress openib error message" -->
<!-- id="969DCAFA-414F-4105-A39C-A488CB9211FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18207.61453.855252.569538_at_ron.nulle.part" -->
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
<strong>Date:</strong> 2007-10-24 21:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4316.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4316.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2007, at 9:23 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; | If I had to guess, the systems where you don't see the warning are
</span><br>
<span class="quotelev1">&gt; | systems that have OFED loaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am pretty sure that none of the systems (at work) have IB  
</span><br>
<span class="quotelev1">&gt; hardware.  I am
</span><br>
<span class="quotelev1">&gt; very sure that my home systems do not, and there the 'btl = ^openib'
</span><br>
<span class="quotelev1">&gt; successfully suppresses the warning --- whereas at work it doesn't.
</span><br>
<p>Note that you don't need to have IB hardware -- all you need is the  
<br>
OFED software loaded.  I don't know if Debian ships the OFED  
<br>
libraries by default...?  In particular, look for libibverbs:
<br>
<p>[18:28] svbu-mpi:~/svn/ompi % ldd $bogus/lib/openmpi/mca_btl_openib.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1  
<br>
(0x0000002a956c2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a957cd000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a958e4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a959e8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0  
<br>
(0x0000002a95b6e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a95c83000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a95eb8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
<br>
<p>However, I note something in your last reply that I may have missed  
<br>
before -- can you clarify a point for me: are you saying that on your  
<br>
home machine, this generates the openib &quot;file not found&quot; warning:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 hello
<br>
<p>but this does not:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 --mca btl ^openib hello
<br>
<p>If so, can you confirm which version of Open MPI you are running?   
<br>
The only reason that I can think that that would happen is if you are  
<br>
running a trunk nightly download of Open MPI...  If not, then there's  
<br>
something else going on that would be worth understanding.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4316.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4316.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
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
