<?
$subject_val = "Re: [OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 11:59:05 2008" -->
<!-- isoreceived="20080711155905" -->
<!-- sent="Fri, 11 Jul 2008 16:58:59 +0100" -->
<!-- isosent="20080711155859" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Functionality" -->
<!-- id="1215791939.6514.55.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="166827.64261.qm_at_web55406.mail.re4.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind Functionality<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 11:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6059.php">Carlos Henrique da Silva Santos: "[OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2008-07-08 at 18:01 -0700, Tom Riddle wrote:
<br>
<span class="quotelev1">&gt; Thanks Ashley, after going through your suggestions we tried our test
</span><br>
<span class="quotelev1">&gt; with valgrind 3.3.0 and with glibc-devel-2.5-18.el5_1.1, both exhibit
</span><br>
<span class="quotelev1">&gt; the same results. A simple non-MPI test prog however returns expected
</span><br>
<span class="quotelev1">&gt; responses, so valgrind itself look ok. We then checked that the same
</span><br>
<span class="quotelev1">&gt; (shared) libc gets linked in both the MPI and non-MPI cases, adding
</span><br>
<span class="quotelev1">&gt; -pthread to the cc command line yields the same result, the only
</span><br>
<span class="quotelev1">&gt; difference it appears is the open mpi libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now mpicc links against libopen-pal which defines malloc for it's own
</span><br>
<span class="quotelev1">&gt; purposes. The big difference seems to be that libopen-pal.so is
</span><br>
<span class="quotelev1">&gt; providing its own malloc replacement 
</span><br>
<p>This will be the problem, I've tested on a openmpi (1.2.6) machine here
<br>
and I see exactly the same behaviour as you.  I re-compiled the
<br>
application without libopen-pal and valgrind works as expected.  To do
<br>
this I used mpicc -show to see what compile line it was using and ran
<br>
the command myself without the -lopen-pal option.  This clearly isn't a
<br>
acceptable long-term solution but might help you in the short term.
<br>
<p>I'm a MPI expert but work on a different MPI to openmpi normally, I have
<br>
however done a lot of work with Valgrind on different platforms so pick
<br>
up questions related to it here.  I think this problem is going to need
<br>
input from one of the openmpi guys...
<br>
<p>The problem seems to be the presence of malloc() and free() functions in
<br>
the libopen-pal library is preventing valgrind from intercepting these
<br>
functions in glibc and hence dramatically reducing the benefit which
<br>
valgrind brings.
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6059.php">Carlos Henrique da Silva Santos: "[OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
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
