<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 08:53:33 2006" -->
<!-- isoreceived="20060830125333" -->
<!-- sent="Wed, 30 Aug 2006 06:53:30 -0600" -->
<!-- isosent="20060830125330" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF with OpenMPI" -->
<!-- id="C11AE66A.42A3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8AB53209-C17A-4928-86AD-65119F236969_at_ieee.org" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 08:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1800.php">Brian Barrett: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1798.php">Michael Kluskens: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1798.php">Michael Kluskens: "Re: [OMPI users] LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/30/06 6:40 AM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I suspect that the problem is not that LSF does not copy the
</span><br>
<span class="quotelev1">&gt; environment over but that Open MPI is accessing the other nodes not
</span><br>
<span class="quotelev1">&gt; using LSF's method.  Below is a related message by you that I have
</span><br>
<span class="quotelev1">&gt; not tried to figure out yet, I was hoping for pointers by those
</span><br>
<span class="quotelev1">&gt; people that use LSF:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2006, at 8:18 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you use the LSF drop-in replacement for rsh (lsgrun), you should be
</span><br>
<span class="quotelev2">&gt;&gt; ok because it will use LSF's native job-launching mechanisms behind
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; scenes (and therefore can use LSF's native job-termination mechanisms
</span><br>
<span class="quotelev2">&gt;&gt; when necessary).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If this turns out to be all that is needed then is it possible for
</span><br>
<span class="quotelev1">&gt; OpenMPI to autodetect when it is running under LSF and then use
</span><br>
<span class="quotelev1">&gt; lsgrun instead of rsh/ssh?
</span><br>
<p>You would need to do the following:
<br>
<p>1. add a LSF component to the RAS framework. Currently, there is one there
<br>
called &quot;lsf_bproc&quot;, but that is actually defunct - we don't use it. You
<br>
would need one that read the environment to find the assigned nodes and put
<br>
them on the registry. You can look at any of the other RAS components to see
<br>
the essential steps.
<br>
<p>2. add a LSF component to the PLS framework. You *might* be able to just
<br>
copy the rsh/ssh launcher and substitute &quot;lsgrun&quot; for the ssh program for
<br>
the launch part. However, there are several other key functions that you
<br>
would need to alter to use LSF's job-termination mechanisms. Hence, just
<br>
using the rsh/ssh launcher won't work - you'll need something more
<br>
LSF-specific or use our job-termination mechanisms (and not LSF's).
<br>
<p>3. In both of those components, you'll need a configure.m4 that checks for
<br>
an LSF-specific include file so you can decide if it's okay to build that
<br>
component. I'm no m4 expert, but you can obtain help here if necessary.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2006, at 7:01 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's somewhat odd.  I have very little experience with LSF, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; surprised that they don't copy the environment over (others do).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; None of us have LSF, unfortunately, so we haven't done any work to
</span><br>
<span class="quotelev2">&gt;&gt; try to
</span><br>
<span class="quotelev2">&gt;&gt; make OMPI work on it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/25/06 10:14 AM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there anyone running OpenMPI on a machine with LSF batch queueing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last time I attempted this I discovered that PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were not making it to the client nodes.  I could force PATH to work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using an OpenMPI option but I could not even force LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over to the client nodes.  I'd rather fix both and all other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environmental variables with one fix so my test case is simply to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi to run hostname.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Before I started on this again I'd like to know if anyone has made
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more progress than I have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1800.php">Brian Barrett: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1798.php">Michael Kluskens: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1798.php">Michael Kluskens: "Re: [OMPI users] LSF with OpenMPI"</a>
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
