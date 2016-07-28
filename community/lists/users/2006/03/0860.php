<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 11:24:12 2006" -->
<!-- isoreceived="20060315162412" -->
<!-- sent="Wed, 15 Mar 2006 11:22:38 -0500 (EST)" -->
<!-- isosent="20060315162238" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_get_envelope fails for no obvious reason" -->
<!-- id="Pine.OSX.4.61.0603151121000.3851_at_applebasket.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200603031555.44949.julian_at_valgrind.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-15 11:22:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0861.php">Davide Bergamasco: "[OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
<li><strong>In reply to:</strong> <a href="0772.php">Julian Seward: "[OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Julian,
<br>
<p>Starting from revision 9191 this bug is corrected on the trunk. It will go 
<br>
in the 1.0.2 release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Fri, 3 Mar 2006, Julian Seward wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to write a routine which unpicks user defined datatypes
</span><br>
<span class="quotelev1">&gt; using MPI_Type_get_{envelope,contents}.  I'm having a problem that
</span><br>
<span class="quotelev1">&gt; a derived type returned by a call of MPI_Type_get_contents, when handed
</span><br>
<span class="quotelev1">&gt; onwards to MPI_Type_get_envelope, causes the system to bomb:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [suse10:15004] *** An error occurred in MPI_Type_get_envelope
</span><br>
<span class="quotelev1">&gt; [suse10:15004] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [suse10:15004] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [suse10:15004] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Close inspection of the MPI2 specification for MPI_Type_get_envelope
</span><br>
<span class="quotelev1">&gt; does not appear to reveal any limitations on the types or
</span><br>
<span class="quotelev1">&gt; committedness-state of types that may be passed to MPI_Type_get_envelope.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with Open MPI 1.0.1 on SuSE 10.0 (x86), built from source.
</span><br>
<span class="quotelev1">&gt; This build otherwise appears to work and has run various MPI apps
</span><br>
<span class="quotelev1">&gt; successfully over the past month.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A test case is attached.  What am I doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; J
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0861.php">Davide Bergamasco: "[OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
<li><strong>In reply to:</strong> <a href="0772.php">Julian Seward: "[OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
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
