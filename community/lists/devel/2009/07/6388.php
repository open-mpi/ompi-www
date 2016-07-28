<?
$subject_val = "Re: [OMPI devel] MPI_Recv pre memory checks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 18:07:24 2009" -->
<!-- isoreceived="20090707220724" -->
<!-- sent="Tue, 07 Jul 2009 18:07:38 -0400" -->
<!-- isosent="20090707220738" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Recv pre memory checks" -->
<!-- id="200907071807.39419.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="610ca1a30907071335p1108d3b0g46eec7a0705b8716_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Recv pre memory checks<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 18:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6389.php">Eugene Loh: "[OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6387.php">George Bosilca: "[OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6386.php">Prasadcse Perera: "[OMPI devel] MPI_Recv pre memory checks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
the checks inside of ompi/mpi/c/send.c and ompi/mpi/c/recv.c are checking the 
<br>
user's parameters to the p2p functions (and others).
<br>
As You report, one of the checks done are checking whether the caller has 
<br>
properly allocated enough memory (recv-side) and that the data to be send is 
<br>
properly initialized (send-side).
<br>
The opal_memchecker_base_isaddressable test is telling valgrind-memcheck to 
<br>
issue error-messages if the passed count &amp; datatype does not match with the 
<br>
allocated buffer sizes.
<br>
<p>These checks however are unrelated to the MPI-semantics of sending more data, 
<br>
then expected, or sending less data (truncation). The latter is allowed...
<br>
<p>Whether more checks are required? Hmm, I may be wrong, but (at least for p2p) 
<br>
as we're checking the definedness on the sender side, there should not be any 
<br>
further need to check on the receiver side, that the communicated data has 
<br>
actually been written. (at least not for end-user correctness)...
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p><p>On Tuesday 07 July 2009 04:35:26 pm Prasadcse Perera wrote:
<br>
<span class="quotelev1">&gt; I'm new to open mpi and I'm currently studying the code and writing my own
</span><br>
<span class="quotelev1">&gt; simple parallel test programs. I wrote a simple program to send and receive
</span><br>
<span class="quotelev1">&gt; a character buffer using
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Send,   MPI::COMM_WORLD.Recv function calls. After playing
</span><br>
<span class="quotelev1">&gt; with some stupid parameters I could observe the following:
</span><br>
<span class="quotelev1">&gt; When I passed a buffer of length say 10, and set the receiving count to say
</span><br>
<span class="quotelev1">&gt; 100, I could see that even the sending buffer (around 30 - 40)  exceeds 
</span><br>
<span class="quotelev1">&gt; the receiving buffer, the characters were successfully copied. And at some
</span><br>
<span class="quotelev1">&gt; points, after increasing  these values, the receiving buffer started to
</span><br>
<span class="quotelev1">&gt; show some garbage characters due to usage of unassigned memory. I took a
</span><br>
<span class="quotelev1">&gt; look at the implementation and saw that opal_memchecker_base_isaddressable
</span><br>
<span class="quotelev1">&gt; is used to check if the buffer is addressible and OMPI_WANT_MEMCHECKER is
</span><br>
<span class="quotelev1">&gt; used as a flag too. But unfortunately I couldnt find the impl of
</span><br>
<span class="quotelev1">&gt; opal_memchecker_base_isaddressable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my questions is, Do we have to set OMPI_WANT_MEMCHECKER in order to
</span><br>
<span class="quotelev1">&gt; verify the recieving buffer internally? if it is, then shouldn't it be
</span><br>
<span class="quotelev1">&gt; always done ?
</span><br>
<span class="quotelev1">&gt; I know its a stupid thing to burden these functions to do this since its up
</span><br>
<span class="quotelev1">&gt; to the programmer to make the sanity checks or make sure not to feed up
</span><br>
<span class="quotelev1">&gt; with wrong parameters, yet since it leaves to dangerous memory
</span><br>
<span class="quotelev1">&gt; allocation/usage, doesn't it serve as a security threat ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pardon me if I misunderstood things since I'm still learning and testing
</span><br>
<span class="quotelev1">&gt; with these codes...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prasad.
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6389.php">Eugene Loh: "[OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6387.php">George Bosilca: "[OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6386.php">Prasadcse Perera: "[OMPI devel] MPI_Recv pre memory checks"</a>
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
