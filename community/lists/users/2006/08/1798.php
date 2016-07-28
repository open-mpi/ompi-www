<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 08:40:58 2006" -->
<!-- isoreceived="20060830124058" -->
<!-- sent="Wed, 30 Aug 2006 08:40:50 -0400" -->
<!-- isosent="20060830124050" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF with OpenMPI" -->
<!-- id="8AB53209-C17A-4928-86AD-65119F236969_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C11A3F88.24C38%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 08:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1797.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>In reply to:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect that the problem is not that LSF does not copy the  
<br>
environment over but that Open MPI is accessing the other nodes not  
<br>
using LSF's method.  Below is a related message by you that I have  
<br>
not tried to figure out yet, I was hoping for pointers by those  
<br>
people that use LSF:
<br>
<p>On Jul 18, 2006, at 8:18 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; If you use the LSF drop-in replacement for rsh (lsgrun), you should be
</span><br>
<span class="quotelev1">&gt; ok because it will use LSF's native job-launching mechanisms behind  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; scenes (and therefore can use LSF's native job-termination mechanisms
</span><br>
<span class="quotelev1">&gt; when necessary).
</span><br>
<p>If this turns out to be all that is needed then is it possible for  
<br>
OpenMPI to autodetect when it is running under LSF and then use  
<br>
lsgrun instead of rsh/ssh?
<br>
<p>Michael
<br>
<p>On Aug 29, 2006, at 7:01 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; That's somewhat odd.  I have very little experience with LSF, but I'm
</span><br>
<span class="quotelev1">&gt; surprised that they don't copy the environment over (others do).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of us have LSF, unfortunately, so we haven't done any work to  
</span><br>
<span class="quotelev1">&gt; try to
</span><br>
<span class="quotelev1">&gt; make OMPI work on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/25/06 10:14 AM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anyone running OpenMPI on a machine with LSF batch queueing
</span><br>
<span class="quotelev2">&gt;&gt; system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Last time I attempted this I discovered that PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; were not making it to the client nodes.  I could force PATH to work
</span><br>
<span class="quotelev2">&gt;&gt; using an OpenMPI option but I could not even force LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; over to the client nodes.  I'd rather fix both and all other
</span><br>
<span class="quotelev2">&gt;&gt; environmental variables with one fix so my test case is simply to use
</span><br>
<span class="quotelev2">&gt;&gt; openmpi to run hostname.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before I started on this again I'd like to know if anyone has made
</span><br>
<span class="quotelev2">&gt;&gt; more progress than I have.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1797.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>In reply to:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
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
