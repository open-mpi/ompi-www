<?
$subject_val = "Re: [OMPI users] Help on Mpi derived datatype for class with static members";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 16:15:11 2010" -->
<!-- isoreceived="20101209211511" -->
<!-- sent="Thu, 9 Dec 2010 22:15:05 +0100" -->
<!-- isosent="20101209211505" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Mpi derived datatype for class with static members" -->
<!-- id="AANLkTinToi=q+BBnSGt4HFXm1uc5=oqKs8kn=GcxQHP9_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTinJEk=GQ4qW72cJ9vhy=Ph-O4xfbPFjzcEPQqR0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on Mpi derived datatype for class with static members<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 16:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15057.php">David Mathog: "[OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15055.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15047.php">Santosh Ansumali: "[OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 8, 2010 at 10:04 PM, Santosh Ansumali &lt;ansumali_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; &#194;&#160; I am confused with the use of MPI derived datatype for classes with
</span><br>
<span class="quotelev1">&gt; static member. How to create derived datatype for something like
</span><br>
<span class="quotelev1">&gt; class test{
</span><br>
<span class="quotelev1">&gt; static const int i=5;
</span><br>
<span class="quotelev1">&gt; double data[5];
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This looks like C++ code, and I think there can be a couple of
<br>
problems with sending this as an MPI derived datatype:
<br>
<p>- the &quot;static&quot; data member is shared between all instances of the
<br>
&nbsp;&nbsp;class, so it cannot be part of the MPI datatype (it will likely be
<br>
&nbsp;&nbsp;at a fixed memory location);
<br>
<p>- in addition, the &quot;i&quot; member is &quot;static const&quot; of a POD type, meaning
<br>
&nbsp;&nbsp;the compiler is allowed to optimize it out and not allocate any
<br>
&nbsp;&nbsp;actual memory location for it;
<br>
<p>This boils down to: the only data you need to send around in a &quot;class
<br>
test&quot; instance is the &quot;double data[5]&quot; array.
<br>
<p>If the static member were not &quot;const&quot;, you could send it in a separate
<br>
message.
<br>
<p>Best regards,
<br>
Riccardo
<br>
<p><p>P.S. Besides, all members in a &quot;class&quot; are private by default and
<br>
&quot;class test&quot; does not have a constructor, so there's no way you can
<br>
put any useful values into this &quot;test&quot; class.  (But I guess this is
<br>
just an oversight when stripping down the code for the example...)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15057.php">David Mathog: "[OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15055.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15047.php">Santosh Ansumali: "[OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
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
