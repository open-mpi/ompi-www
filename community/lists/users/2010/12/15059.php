<?
$subject_val = "Re: [OMPI users] Help on Mpi derived datatype for class with static members";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 20:51:38 2010" -->
<!-- isoreceived="20101210015138" -->
<!-- sent="Fri, 10 Dec 2010 07:21:33 +0530" -->
<!-- isosent="20101210015133" -->
<!-- name="Santosh Ansumali" -->
<!-- email="ansumali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Mpi derived datatype for class with static members" -->
<!-- id="AANLkTimarWkWjo+YgaEjy11J0AMq27uRTFAJ_BQ4V2-U_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinToi=q+BBnSGt4HFXm1uc5=oqKs8kn=GcxQHP9_at_mail.gmail.com" -->
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
<strong>From:</strong> Santosh Ansumali (<em>ansumali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 20:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>In reply to:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks every one.
<br>
<p><span class="quotelev1">&gt; - the &quot;static&quot; data member is shared between all instances of the
</span><br>
<span class="quotelev1">&gt; &#160;class, so it cannot be part of the MPI datatype (it will likely be
</span><br>
<span class="quotelev1">&gt; &#160;at a fixed memory location);
</span><br>
<p>Yes! I agree that i is global as far as different instances of class
<br>
is concern.   I don't even want it to be part of MPI datatype.
<br>
However, I am concern
<br>
that as the given class has a static member,  is it ok to just ignore
<br>
its existence while creating MPI datatype?
<br>
<p><p><span class="quotelev1">&gt; - in addition, the &quot;i&quot; member is &quot;static const&quot; of a POD type, meaning
</span><br>
<span class="quotelev1">&gt; &#160;the compiler is allowed to optimize it out and not allocate any
</span><br>
<span class="quotelev1">&gt; &#160;actual memory location for it;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This boils down to: the only data you need to send around in a &quot;class
</span><br>
<span class="quotelev1">&gt; test&quot; instance is the &quot;double data[5]&quot; array.
</span><br>
<p><p><p><p>True! on what computers there is no memory allocation for static const
<br>
int member. As stated, one is not even interested in sending static
<br>
member.
<br>
Thus, just ignoring existence of this static member might work.
<br>
However, my question  is how to write this code in a generic way.  Is
<br>
it always guaranteed that an array created from a class consisting of
<br>
static member will be contiguous in memory? As I have not seen any MPI
<br>
data creation
<br>
for a class with static member,  I am curious to know what the
<br>
standard is before proceeding further. May be a simple example will
<br>
do.
<br>
<p><p><span class="quotelev1">&gt; If the static member were not &quot;const&quot;, you could send it in a separate
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. Besides, all members in a &quot;class&quot; are private by default and
</span><br>
<span class="quotelev1">&gt; &quot;class test&quot; does not have a constructor, so there's no way you can
</span><br>
<span class="quotelev1">&gt; put any useful values into this &quot;test&quot; class. &#160;(But I guess this is
</span><br>
<span class="quotelev1">&gt; just an oversight when stripping down the code for the example...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>True! I just want to show the essential part of the class.  The real
<br>
class is inheriting from other class which has no data member.
<br>
template &lt;typename dataType, class INPUT &gt;
<br>
&nbsp;class baseET {
<br>
&nbsp;&nbsp;&nbsp;public:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;typedef const INPUT&amp; INPUT_REF;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Return Reference to object T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operator INPUT_REF   () const{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return static_cast&lt;INPUT_REF&gt; (*this ) ;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;dataType  value(const int i) const{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return static_cast&lt;INPUT_REF&gt; (*this ).value(i) ;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;};
<br>
<p>Then after stripping all functions the class is
<br>
<p>template &lt;typename dataType, int N&gt;
<br>
class vectET :public baseET&lt;dataType, vectET&lt;dataType, N&gt; &gt;
<br>
{
<br>
&nbsp;&nbsp;public:
<br>
&nbsp;&nbsp;&nbsp;........
<br>
&nbsp;&nbsp;private:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static const int numELEM =N;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;myReal data[numELEM];
<br>
};
<br>
<p>Further, main code is creating nD array of this class and I want to
<br>
create MPI data for exchange of array of such 3D class.
<br>
<p><p><pre>
-- 
Santosh Ansumali,
Faculty Fellow,
Engineering Mechanics Unit
Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
&#160;Jakkur, Bangalore-560 064, India
Tel: + 91 80 22082938
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>In reply to:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
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
