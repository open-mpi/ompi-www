<?
$subject_val = "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 08:36:46 2009" -->
<!-- isoreceived="20090314123646" -->
<!-- sent="Sat, 14 Mar 2009 08:36:41 -0400" -->
<!-- isosent="20090314123641" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators" -->
<!-- id="DEFCBBA1-DF3C-403B-881C-BC6013D4D2CD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66e540fe0903131415m63a0462bv3aa23f208f6d2d25_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 08:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Previous message:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2009, at 5:15 PM, Mikael Djurfeldt wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Mar 13, 2009 at 9:28 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; No you should not need to do this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any chance you could upgrade to Open MPI v1.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. It works without a Barrier under v1.3.  Is this a known problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Possibly...?  I can't name any particular issue offhand that is a  
<br>
known culprit for this, but it's possible someone else can.  There are  
<br>
many changes and fixes in the v1.3 series as compared to the v1.2  
<br>
series.
<br>
<p><span class="quotelev1">&gt; What is the best way for me to test in my configure script that I'm
</span><br>
<span class="quotelev1">&gt; running under OpenMPI version &gt;= 1.3 so that I can disable the Barrier
</span><br>
<span class="quotelev1">&gt; for such versions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>In mpi.h, we have a few macros that should help you:
<br>
<p>-----
<br>
/*
<br>
&nbsp;&nbsp;* Just in case you need it.  :-)
<br>
&nbsp;&nbsp;*/
<br>
#define OPEN_MPI 1
<br>
<p>/* Major, minor, and release version of Open MPI */
<br>
#define OMPI_MAJOR_VERSION 1
<br>
#define OMPI_MINOR_VERSION 3
<br>
#define OMPI_RELEASE_VERSION 0
<br>
-----
<br>
<p>You should be able to construct a fairly simple AC_TRY_RUN test that  
<br>
checks #if defined(), etc.
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
<li><strong>Next message:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Previous message:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
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
