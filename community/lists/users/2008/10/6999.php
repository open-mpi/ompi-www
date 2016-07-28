<?
$subject_val = "Re: [OMPI users] on SEEK_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 09:08:48 2008" -->
<!-- isoreceived="20081016130848" -->
<!-- sent="Thu, 16 Oct 2008 15:08:39 +0200" -->
<!-- isosent="20081016130839" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on SEEK_*" -->
<!-- id="20081016130839.GD30398_at_brakk.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9D5884F3-0D34-4144-B5B6-EE50A1E83756_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] on SEEK_*<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 09:08:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu 2008-10-16 08:21, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FWIW: <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/20">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/20</a> is a  
</span><br>
<span class="quotelev1">&gt; placemarker for discussion for the upcoming MPI Forum meeting (next  
</span><br>
<span class="quotelev1">&gt; week).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, be aware that OMPI's 1.2.7 solution isn't perfect, either.  You  
</span><br>
<span class="quotelev1">&gt; can see from ticket 20 that it actually causes a problem if you try to  
</span><br>
<span class="quotelev1">&gt; use SEEK_SET in a switch/case statement.  But we did this a little  
</span><br>
<span class="quotelev1">&gt; better in the trunk/v1.3 (see 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/19494">https://svn.open-mpi.org/trac/ompi/changeset/19494</a>); this solution *does* 
</span><br>
<span class="quotelev1">&gt; allow for SEEK_SET to be used in a case statement, but it does always 
</span><br>
<span class="quotelev1">&gt; bring in &lt;stdio.h&gt; (probably not a huge deal).
</span><br>
<p>I see.
<br>
<p><span class="quotelev1">&gt; The real solution is that we're likely going to change these names to  
</span><br>
<span class="quotelev1">&gt; something else in the MPI spec itself.  And/or drop the C++ bindings  
</span><br>
<span class="quotelev1">&gt; altogether (see <a href="http://lists.mpi-forum.org/mpi-22/2008/10/0177.php">http://lists.mpi-forum.org/mpi-22/2008/10/0177.php</a>).
</span><br>
<p>Radical.  I don't use the C++ bindings anyway.  I especially like
<br>
proposal (4) Data in User-Defined Callbacks.
<br>
<p>On a related note, it would be nice to be able to call an MPI_Op from
<br>
user code.  For instance, I have an irregular Reduce-like operation
<br>
where each proc needs to reduce data from a few other procs (much fewer
<br>
than the entire communicator).  I implement this using a few nonblocking
<br>
point-to-point calls followed by a local reduction.  I would like my
<br>
special reduction to accept an arbitrary MPI_Op, but I currently use a
<br>
function pointer.  Having a public version of ompi_op_reduce would make
<br>
this much cleaner.
<br>
<p><span class="quotelev1">&gt; Additionally -- I should have pointed this out in my first mail -- you  
</span><br>
<span class="quotelev1">&gt; can also just use MPI_SEEK_SET (and friends).  The spec defines that  
</span><br>
<span class="quotelev1">&gt; these constants must have the same values as their MPI::SEEK_*  
</span><br>
<span class="quotelev1">&gt; counterparts.
</span><br>
<p>Right, MPI::SEEK_* is never used.
<br>
<p>Thanks Jeff.
<br>
<p>Jed
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6999/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
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
