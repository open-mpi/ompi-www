<?
$subject_val = "Re: [OMPI users] configure: mpi-threads disabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 06:55:57 2011" -->
<!-- isoreceived="20110505105557" -->
<!-- sent="Thu, 5 May 2011 11:55:51 +0100 (BST)" -->
<!-- isosent="20110505105551" -->
<!-- name="Mark Dixon" -->
<!-- email="m.c.dixon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: mpi-threads disabled by default" -->
<!-- id="alpine.SOC.2.00.1105051057010.12752_at_sunserv3" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4DC18123.4000405_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure: mpi-threads disabled by default<br>
<strong>From:</strong> Mark Dixon (<em>m.c.dixon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-05 06:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16452.php">Bartłomiej W: "[OMPI users] All processes have id 0 of 1"</a>
<li><strong>Previous message:</strong> <a href="16450.php">Cizmas, Paul: "Re: [OMPI users] cputype (7) does not match previous	archive	members cputype"</a>
<li><strong>In reply to:</strong> <a href="16445.php">Eugene Loh: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 4 May 2011, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Depending on what version you use, the option has been renamed
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, there is widespread concern whether the support is robust.  The
</span><br>
<span class="quotelev1">&gt; support is known to be limited and the performance poor.
</span><br>
<p>Thanks :)
<br>
<p>I absolutely see why support for MPI_THREAD_MULTIPLE is a configure option 
<br>
(not at all related to the fact I'm on a platform where my best 
<br>
interconnect gets disabled if you ask for it).
<br>
<p>However, do the same concerns apply to MPI_THREAD_FUNNELED and 
<br>
MPI_THREAD_SERIALIZED? They are disabled by default too and they look 
<br>
difficult to enable without enabling some other functionality.
<br>
<p><p>Details:
<br>
<p>Jeff said (on this list, Tue, 14 Dec 2010 22:52:40) that, in OpenMPI, 
<br>
there's no difference between MPI_THREAD_SINGLE and MPI_THREAD_FUNNELED. 
<br>
Yet, with the default configure options, MPI_Init_thread will always 
<br>
return MPI_THREAD_SINGLE.
<br>
<p>* Release 1.4.3 - MPI_THREAD_(FUNNELED|SERIALIZED) are only available if 
<br>
you specify &quot;--mpi-threads&quot;. Codes that sensibly negotiate their thread 
<br>
level automatically start using MPI_THREAD_MULTIPLE and my interconnect 
<br>
(openib) is disabled.
<br>
<p>* Release 1.5.3 - MPI_THREAD_(FUNNELED|SERIALIZED) are only available if 
<br>
you specify &quot;--mpi-threads&quot; (same problems as with 1.4.3), or enable 
<br>
asynchronous communication progress (whatever that is - but it sounds 
<br>
scary) with &quot;--enable-progress-threads&quot;
<br>
<p>Things do look different again in trunk, but seem to require you to at 
<br>
least ask for &quot;--enable-opal-multi-threads&quot;.
<br>
<p><p>Are we supposed to be able to use MPI_THREAD_FUNNELED by default or not?
<br>
<p>Best wishes,
<br>
<p>Mark
<br>
<pre>
-- 
-----------------------------------------------------------------
Mark Dixon                       Email    : m.c.dixon_at_[hidden]
HPC/Grid Systems Support         Tel (int): 35429
Information Systems Services     Tel (ext): +44(0)113 343 5429
University of Leeds, LS2 9JT, UK
-----------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16452.php">Bartłomiej W: "[OMPI users] All processes have id 0 of 1"</a>
<li><strong>Previous message:</strong> <a href="16450.php">Cizmas, Paul: "Re: [OMPI users] cputype (7) does not match previous	archive	members cputype"</a>
<li><strong>In reply to:</strong> <a href="16445.php">Eugene Loh: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
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
