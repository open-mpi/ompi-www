<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 14:22:37 2011" -->
<!-- isoreceived="20110223192237" -->
<!-- sent="Wed, 23 Feb 2011 11:21:56 -0800" -->
<!-- isosent="20110223192156" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="AANLkTingtdiNv5-w1Dw2g0aCLfSXMPDoMhneoXbFZn4d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D655DE2.4020206_at_ias.edu" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 14:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15704.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15704.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would assume you build MPI correctly with ifort?
<br>
<p>On Wed, Feb 23, 2011 at 11:20 AM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I thought the error was this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpif90 -o simplex simplexmain579m.for simplexsubs579
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-config.h(88):
</span><br>
<span class="quotelev2">&gt; &gt; error #6406: Conflicting attributes or multiple declaration of name.
</span><br>
<span class="quotelev2">&gt; &gt; [MPI_STATUS_SIZE]
</span><br>
<span class="quotelev2">&gt; &gt;      parameter (MPI_STATUS_SIZE=5)
</span><br>
<span class="quotelev2">&gt; &gt; -----------------^
</span><br>
<span class="quotelev2">&gt; &gt; simplexmain579m.for(147): error #6591: An automatic object is invalid in
</span><br>
<span class="quotelev2">&gt; &gt; a main program.   [ISTATUS]
</span><br>
<span class="quotelev2">&gt; &gt;        integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which seems to only show the definition in mpif-config.h (which is an
</span><br>
<span class="quotelev1">&gt; internal OMPI file).  I could be mis-interpreting those compiler messages,
</span><br>
<span class="quotelev1">&gt; though...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Off-the-wall guess here: is the program doing both &quot;use mpi&quot; *and*
</span><br>
<span class="quotelev1">&gt; &quot;include mpif.h&quot; in the same subroutine...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspected that and checked for it earlier. I just double-checked, and
</span><br>
<span class="quotelev1">&gt; that is not the problem. Out of the two source files, 'include mpif.h'
</span><br>
<span class="quotelev1">&gt; appears once, and 'use mpi' does not appear at all. I'm beginning to
</span><br>
<span class="quotelev1">&gt; suspect it is the compiler that is the problem. I'm using ifort 11.1.
</span><br>
<span class="quotelev1">&gt; It's not the latest version, but it's only about 1 year old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ifort --version
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 11.1 20100203
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2010 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 23, 2011, at 11:51 AM, Tim Prince wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2/23/2011 8:27 AM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Feb 23, 2011, at 9:48 AM, Tim Prince wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I agree with your logic, but the problem is where the code
</span><br>
<span class="quotelev1">&gt; containing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the error is coming from - it's comping from a header files that's a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; part of Open MPI, which makes me think this is a cmpiler error,
</span><br>
<span class="quotelev1">&gt; since
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm sure there are plenty of people using the same header file. in
</span><br>
<span class="quotelev1">&gt; their
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Are you certain that they all find it necessary to re-define
</span><br>
<span class="quotelev1">&gt; identifiers from that header file, rather than picking parameter names which
</span><br>
<span class="quotelev1">&gt; don't conflict?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Without seeing the code, it sounds like Tim might be right: someone is
</span><br>
<span class="quotelev1">&gt; trying to re-define the MPI_STATUS_SIZE parameter that is being defined by
</span><br>
<span class="quotelev1">&gt; OMPI's mpif-config.h header file.  Regardless of include file/initialization
</span><br>
<span class="quotelev1">&gt; ordering (i.e., regardless of whether mpif-config.h is the first or Nth
</span><br>
<span class="quotelev1">&gt; entity to try to set this parameter), user code should never set this
</span><br>
<span class="quotelev1">&gt; parameter value.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Or any symbol that begins with MPI_, for that matter.  The entire
</span><br>
<span class="quotelev1">&gt; &quot;MPI_&quot; namespace is reserved for MPI.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I understand that, and I checked the code to make sure the programmer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; didn't do anything stupid like that.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The entire code is only a few hundred lines in two different files. In
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the entire program, there is only 1 include statement:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and MPI_STATUS_SIZE appears only once:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have limited knowledge of Fortran programming, but based on this, I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; don't see how MPI_STATUS_SIZE could be getting overwritten.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Earlier, you showed a preceding PARAMETER declaration setting a new
</span><br>
<span class="quotelev1">&gt; value for that name, which would be required to make use of it in this
</span><br>
<span class="quotelev1">&gt; context.  Apparently, you intend to support only compilers which violate the
</span><br>
<span class="quotelev1">&gt; Fortran standard by supporting a separate name space for PARAMETER
</span><br>
<span class="quotelev1">&gt; identifiers, so that you can violate the MPI standard by using MPI_
</span><br>
<span class="quotelev1">&gt; identifiers in a manner which I believe is called shadowing in C.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tim Prince
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15704.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15702.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15704.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
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
