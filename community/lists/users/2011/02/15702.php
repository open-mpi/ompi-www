<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 14:20:08 2011" -->
<!-- isoreceived="20110223192008" -->
<!-- sent="Wed, 23 Feb 2011 14:20:02 -0500" -->
<!-- isosent="20110223192002" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="4D655DE2.4020206_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5E581415-3498-460D-91B4-E9935AE0A577_at_cisco.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 14:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15703.php">David Zhang: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15701.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15699.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15703.php">David Zhang: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15703.php">David Zhang: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15704.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I thought the error was this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpif90 -o simplex simplexmain579m.for simplexsubs579
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-config.h(88):
</span><br>
<span class="quotelev1">&gt; error #6406: Conflicting attributes or multiple declaration of name.
</span><br>
<span class="quotelev1">&gt; [MPI_STATUS_SIZE]
</span><br>
<span class="quotelev1">&gt;      parameter (MPI_STATUS_SIZE=5)
</span><br>
<span class="quotelev1">&gt; -----------------^
</span><br>
<span class="quotelev1">&gt; simplexmain579m.for(147): error #6591: An automatic object is invalid in
</span><br>
<span class="quotelev1">&gt; a main program.   [ISTATUS]
</span><br>
<span class="quotelev1">&gt;        integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt; ---------------------^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which seems to only show the definition in mpif-config.h (which is an internal OMPI file).  I could be mis-interpreting those compiler messages, though...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Off-the-wall guess here: is the program doing both &quot;use mpi&quot; *and* &quot;include mpif.h&quot; in the same subroutine...?
</span><br>
<p>Jeff,
<br>
<p>I suspected that and checked for it earlier. I just double-checked, and
<br>
that is not the problem. Out of the two source files, 'include mpif.h'
<br>
appears once, and 'use mpi' does not appear at all. I'm beginning to
<br>
suspect it is the compiler that is the problem. I'm using ifort 11.1.
<br>
It's not the latest version, but it's only about 1 year old.
<br>
<p>$ ifort --version
<br>
ifort (IFORT) 11.1 20100203
<br>
Copyright (C) 1985-2010 Intel Corporation.  All rights reserved.
<br>
<p><pre>
--
Prentice
&gt; 
&gt; 
&gt; On Feb 23, 2011, at 11:51 AM, Tim Prince wrote:
&gt; 
&gt;&gt; On 2/23/2011 8:27 AM, Prentice Bisbal wrote:
&gt;&gt;&gt; Jeff Squyres wrote:
&gt;&gt;&gt;&gt; On Feb 23, 2011, at 9:48 AM, Tim Prince wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I agree with your logic, but the problem is where the code containing
&gt;&gt;&gt;&gt;&gt;&gt; the error is coming from - it's comping from a header files that's a
&gt;&gt;&gt;&gt;&gt;&gt; part of Open MPI, which makes me think this is a cmpiler error, since
&gt;&gt;&gt;&gt;&gt;&gt; I'm sure there are plenty of people using the same header file. in their
&gt;&gt;&gt;&gt;&gt;&gt; code.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Are you certain that they all find it necessary to re-define identifiers from that header file, rather than picking parameter names which don't conflict?
&gt;&gt;&gt;&gt; Without seeing the code, it sounds like Tim might be right: someone is trying to re-define the MPI_STATUS_SIZE parameter that is being defined by OMPI's mpif-config.h header file.  Regardless of include file/initialization ordering (i.e., regardless of whether mpif-config.h is the first or Nth entity to try to set this parameter), user code should never set this parameter value.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Or any symbol that begins with MPI_, for that matter.  The entire &quot;MPI_&quot; namespace is reserved for MPI.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt; I understand that, and I checked the code to make sure the programmer
&gt;&gt;&gt; didn't do anything stupid like that.
&gt;&gt;&gt;
&gt;&gt;&gt; The entire code is only a few hundred lines in two different files. In
&gt;&gt;&gt; the entire program, there is only 1 include statement:
&gt;&gt;&gt;
&gt;&gt;&gt; include 'mpif.h'
&gt;&gt;&gt;
&gt;&gt;&gt; and MPI_STATUS_SIZE appears only once:
&gt;&gt;&gt;
&gt;&gt;&gt; integer ierr,istatus(MPI_STATUS_SIZE)
&gt;&gt;&gt;
&gt;&gt;&gt; I have limited knowledge of Fortran programming, but based on this, I
&gt;&gt;&gt; don't see how MPI_STATUS_SIZE could be getting overwritten.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt; Earlier, you showed a preceding PARAMETER declaration setting a new value for that name, which would be required to make use of it in this context.  Apparently, you intend to support only compilers which violate the Fortran standard by supporting a separate name space for PARAMETER identifiers, so that you can violate the MPI standard by using MPI_ identifiers in a manner which I believe is called shadowing in C.
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Tim Prince
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15703.php">David Zhang: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15701.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15699.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15703.php">David Zhang: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15703.php">David Zhang: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15704.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
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
