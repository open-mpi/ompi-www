<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 12:35:35 2011" -->
<!-- isoreceived="20110223173535" -->
<!-- sent="Wed, 23 Feb 2011 12:35:30 -0500" -->
<!-- isosent="20110223173530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="5E581415-3498-460D-91B4-E9935AE0A577_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D653B17.1020302_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What's wrong with this code?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 12:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15700.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought the error was this:
<br>
<p>$ mpif90 -o simplex simplexmain579m.for simplexsubs579
<br>
/usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-config.h(88):
<br>
error #6406: Conflicting attributes or multiple declaration of name.
<br>
[MPI_STATUS_SIZE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter (MPI_STATUS_SIZE=5)
<br>
-----------------^
<br>
simplexmain579m.for(147): error #6591: An automatic object is invalid in
<br>
a main program.   [ISTATUS]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr,istatus(MPI_STATUS_SIZE)
<br>
---------------------^
<br>
<p>which seems to only show the definition in mpif-config.h (which is an internal OMPI file).  I could be mis-interpreting those compiler messages, though...
<br>
<p>Off-the-wall guess here: is the program doing both &quot;use mpi&quot; *and* &quot;include mpif.h&quot; in the same subroutine...?
<br>
<p><p>On Feb 23, 2011, at 11:51 AM, Tim Prince wrote:
<br>
<p><span class="quotelev1">&gt; On 2/23/2011 8:27 AM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 23, 2011, at 9:48 AM, Tim Prince wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I agree with your logic, but the problem is where the code containing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the error is coming from - it's comping from a header files that's a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; part of Open MPI, which makes me think this is a cmpiler error, since
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm sure there are plenty of people using the same header file. in their
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you certain that they all find it necessary to re-define identifiers from that header file, rather than picking parameter names which don't conflict?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without seeing the code, it sounds like Tim might be right: someone is trying to re-define the MPI_STATUS_SIZE parameter that is being defined by OMPI's mpif-config.h header file.  Regardless of include file/initialization ordering (i.e., regardless of whether mpif-config.h is the first or Nth entity to try to set this parameter), user code should never set this parameter value.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or any symbol that begins with MPI_, for that matter.  The entire &quot;MPI_&quot; namespace is reserved for MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I understand that, and I checked the code to make sure the programmer
</span><br>
<span class="quotelev2">&gt;&gt; didn't do anything stupid like that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The entire code is only a few hundred lines in two different files. In
</span><br>
<span class="quotelev2">&gt;&gt; the entire program, there is only 1 include statement:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and MPI_STATUS_SIZE appears only once:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have limited knowledge of Fortran programming, but based on this, I
</span><br>
<span class="quotelev2">&gt;&gt; don't see how MPI_STATUS_SIZE could be getting overwritten.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Earlier, you showed a preceding PARAMETER declaration setting a new value for that name, which would be required to make use of it in this context.  Apparently, you intend to support only compilers which violate the Fortran standard by supporting a separate name space for PARAMETER identifiers, so that you can violate the MPI standard by using MPI_ identifiers in a manner which I believe is called shadowing in C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15700.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
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
