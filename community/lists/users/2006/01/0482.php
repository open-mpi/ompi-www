<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 09:12:00 2006" -->
<!-- isoreceived="20060105141200" -->
<!-- sent="Thu, 5 Jan 2006 09:11:52 -0500" -->
<!-- isosent="20060105141152" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0" -->
<!-- id="6183ED47-23D5-493F-AB80-A4B9AF1A94A8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A03314D1-B133-483C-944B-84059BF6A6D4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-01-05 09:11:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0483.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Previous message:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>In reply to:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2006, at 11:35 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; The problem is that Torque (and all the PBS derivatives I've seen)
</span><br>
<span class="quotelev1">&gt; only provide static libraries and we are trying to build a shared
</span><br>
<span class="quotelev1">&gt; library linked against those static libraries.  This happens to work
</span><br>
<span class="quotelev1">&gt; for x86 code, but not for x86_64 code.  Unfortunately, the only
</span><br>
<span class="quotelev1">&gt; solution at this time is to build Open MPI as static libraries with
</span><br>
<span class="quotelev1">&gt; the configure options &quot;--enable-static --disable-shared&quot;.
</span><br>
<p>We talked about this issue a bit more off-list, and even talked to  
<br>
the Torque developers about it.
<br>
<p>I have amended the FAQ to include specific information about this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#build-rte">http://www.open-mpi.org/faq/?category=building#build-rte</a>
<br>
<p>Torque plans to ship shared libraries someday (at which point this  
<br>
issue becomes moot), but the exact timing is currently unknown.
<br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0483.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Previous message:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>In reply to:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
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
