<?
$subject_val = "Re: [OMPI users] Help on Mpi derived datatype for class with static members";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 08:42:08 2010" -->
<!-- isoreceived="20101213134208" -->
<!-- sent="Mon, 13 Dec 2010 14:42:02 +0100" -->
<!-- isosent="20101213134202" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Mpi derived datatype for class with static members" -->
<!-- id="AANLkTims8j88qcNohzFBbnWi=Uvor9Cbd5W802FE6021_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTimarWkWjo+YgaEjy11J0AMq27uRTFAJ_BQ4V2-U_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-12-13 08:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15095.php">Jeff Squyres: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15093.php">peifan: "[OMPI users] how to set the connecttimeout para?"</a>
<li><strong>In reply to:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15095.php">Jeff Squyres: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15095.php">Jeff Squyres: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Fri, Dec 10, 2010 at 2:51 AM, Santosh Ansumali &lt;ansumali_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; - the &quot;static&quot; data member is shared between all instances of the
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;class, so it cannot be part of the MPI datatype (it will likely be
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;at a fixed memory location);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes! I agree that i is global as far as different instances of class
</span><br>
<span class="quotelev1">&gt; is concern. &#194;&#160; I don't even want it to be part of MPI datatype.
</span><br>
<span class="quotelev1">&gt; However, I am concern
</span><br>
<span class="quotelev1">&gt; that as the given class has a static member, &#194;&#160;is it ok to just ignore
</span><br>
<span class="quotelev1">&gt; its existence while creating MPI datatype?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It *should* be.  However, an authoritative answer requires good
<br>
knowledge of the C++ standard and extensive experience with the
<br>
compiler (none of which I personally have), so my suggestion would be
<br>
to post the question on comp.lang.c++ or StackOverflow.
<br>
<p><p><span class="quotelev2">&gt;&gt; - in addition, the &quot;i&quot; member is &quot;static const&quot; of a POD type, meaning
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;the compiler is allowed to optimize it out and not allocate any
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;actual memory location for it;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This boils down to: the only data you need to send around in a &quot;class
</span><br>
<span class="quotelev2">&gt;&gt; test&quot; instance is the &quot;double data[5]&quot; array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True! on what computers there is no memory allocation for static const
</span><br>
<span class="quotelev1">&gt; int member.
</span><br>
<p>As far as I understand it, the &quot;const&quot; is a hint to the compiler that
<br>
the value will never change, so the storage *could* be optimized out.
<br>
Whether this happens or not, depends on the compiler and the
<br>
optimization level (e.g., GCC will never optimize a value out with
<br>
-O0, but can do it at -O2), and on the actual code as well: if your
<br>
code references &quot;&amp;i&quot; at some point, then the compiler has to create
<br>
actual storage for &quot;i&quot;.
<br>
<p><p><span class="quotelev1">&gt; True! I just want to show the essential part of the class. &#194;&#160;The real
</span><br>
<span class="quotelev1">&gt; class is inheriting from other class which has no data member.
</span><br>
<p>Beware: if you are using virtual functions in any class of the
<br>
hierarchy, then the vtable pointer will be a hidden field in the
<br>
class' storage, and you definitely do not want to overwrite it -- this
<br>
can influence the start address and/or the displacement of the data.
<br>
In a simple case like &quot;class test { double data[5]; }&quot; you can just
<br>
use &quot;&amp;data&quot; as the address of your MPI data, but things may be
<br>
different in the general case.  Again, my adivce would be to post a
<br>
question in a dedicated C++ forum for a comprehensive answer.
<br>
<p>If you are going to send C++ classes via MPI, you might want to have a
<br>
look at Boost.MPI, which provides an easier interface to sending C++
<br>
classes around, possibly at some performance and/or memory cost.
<br>
<p>Best regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15095.php">Jeff Squyres: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15093.php">peifan: "[OMPI users] how to set the connecttimeout para?"</a>
<li><strong>In reply to:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15095.php">Jeff Squyres: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15095.php">Jeff Squyres: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
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
