<?
$subject_val = "Re: [OMPI users] 'readv failed: Connection timed out' issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 09:24:22 2010" -->
<!-- isoreceived="20100420132422" -->
<!-- sent="Tue, 20 Apr 2010 09:24:17 -0400" -->
<!-- isosent="20100420132417" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'readv failed: Connection timed out' issue" -->
<!-- id="2F79D224-F80D-44E4-98CA-2AFF9B96B220_at_scinet.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BCDA9A9.3090904_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'readv failed: Connection timed out' issue<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 09:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2010-04-20, at 9:18AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jonathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know what the top level function is or communication pattern?  Is it some type of collective or a pattern that has a many to one. 
</span><br>
<p>Ah, should have mentioned.  The best-characterized code that we're seeing this with is an absolutely standard (logically) regular grid hydrodynamics code, only does nearest neighbour communication for exchanging guardcells; the Wait in this case is, I think, just a matter of overlapping communication with computation of the inner zones.    There are things like allreduces in there, as well, for setting timesteps, but the communication pattern is overall extremely regular and well-behaved.
<br>
<p><span class="quotelev1">&gt; What might be happening is that since OMPI uses a lazy connections by default if all processes are trying to establish communications to the same process you might run into the below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might want to see if setting &quot;--mca mpi_preconnect_all 1&quot; helps any.  But beware this will cause your startup to increase.  However, this might give us insight as to whether the problem is flooding a single rank with connect requests.
</span><br>
<p>I'm certainly willing to try it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<p><pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
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
