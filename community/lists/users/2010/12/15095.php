<?
$subject_val = "Re: [OMPI users] Help on Mpi derived datatype for class with static members";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 09:07:59 2010" -->
<!-- isoreceived="20101213140759" -->
<!-- sent="Mon, 13 Dec 2010 09:07:54 -0500" -->
<!-- isosent="20101213140754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Mpi derived datatype for class with static members" -->
<!-- id="DA1EE49C-4C5E-4E74-BD78-E0378016C969_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTims8j88qcNohzFBbnWi=Uvor9Cbd5W802FE6021_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 09:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>In reply to:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should be able to use normal MPI_TYPE_CREATE_STRUCT functionality to skip members that you don't want represented in a struct.
<br>
<p>The general idea is to instantiate one of the classes and then use the addresses of the members to compute the displacement(s) from the base.  The same thing works for C/C++ structs.  Google around to find some examples; I believe there are plenty of them out on the interwebs.
<br>
<p><p><p>On Dec 13, 2010, at 8:42 AM, Riccardo Murri wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 10, 2010 at 2:51 AM, Santosh Ansumali &lt;ansumali_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the &quot;static&quot; data member is shared between all instances of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  class, so it cannot be part of the MPI datatype (it will likely be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  at a fixed memory location);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes! I agree that i is global as far as different instances of class
</span><br>
<span class="quotelev2">&gt;&gt; is concern.   I don't even want it to be part of MPI datatype.
</span><br>
<span class="quotelev2">&gt;&gt; However, I am concern
</span><br>
<span class="quotelev2">&gt;&gt; that as the given class has a static member,  is it ok to just ignore
</span><br>
<span class="quotelev2">&gt;&gt; its existence while creating MPI datatype?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It *should* be.  However, an authoritative answer requires good
</span><br>
<span class="quotelev1">&gt; knowledge of the C++ standard and extensive experience with the
</span><br>
<span class="quotelev1">&gt; compiler (none of which I personally have), so my suggestion would be
</span><br>
<span class="quotelev1">&gt; to post the question on comp.lang.c++ or StackOverflow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - in addition, the &quot;i&quot; member is &quot;static const&quot; of a POD type, meaning
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  the compiler is allowed to optimize it out and not allocate any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  actual memory location for it;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This boils down to: the only data you need to send around in a &quot;class
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test&quot; instance is the &quot;double data[5]&quot; array.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; True! on what computers there is no memory allocation for static const
</span><br>
<span class="quotelev2">&gt;&gt; int member.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I understand it, the &quot;const&quot; is a hint to the compiler that
</span><br>
<span class="quotelev1">&gt; the value will never change, so the storage *could* be optimized out.
</span><br>
<span class="quotelev1">&gt; Whether this happens or not, depends on the compiler and the
</span><br>
<span class="quotelev1">&gt; optimization level (e.g., GCC will never optimize a value out with
</span><br>
<span class="quotelev1">&gt; -O0, but can do it at -O2), and on the actual code as well: if your
</span><br>
<span class="quotelev1">&gt; code references &quot;&amp;i&quot; at some point, then the compiler has to create
</span><br>
<span class="quotelev1">&gt; actual storage for &quot;i&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; True! I just want to show the essential part of the class.  The real
</span><br>
<span class="quotelev2">&gt;&gt; class is inheriting from other class which has no data member.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Beware: if you are using virtual functions in any class of the
</span><br>
<span class="quotelev1">&gt; hierarchy, then the vtable pointer will be a hidden field in the
</span><br>
<span class="quotelev1">&gt; class' storage, and you definitely do not want to overwrite it -- this
</span><br>
<span class="quotelev1">&gt; can influence the start address and/or the displacement of the data.
</span><br>
<span class="quotelev1">&gt; In a simple case like &quot;class test { double data[5]; }&quot; you can just
</span><br>
<span class="quotelev1">&gt; use &quot;&amp;data&quot; as the address of your MPI data, but things may be
</span><br>
<span class="quotelev1">&gt; different in the general case.  Again, my adivce would be to post a
</span><br>
<span class="quotelev1">&gt; question in a dedicated C++ forum for a comprehensive answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are going to send C++ classes via MPI, you might want to have a
</span><br>
<span class="quotelev1">&gt; look at Boost.MPI, which provides an easier interface to sending C++
</span><br>
<span class="quotelev1">&gt; classes around, possibly at some performance and/or memory cost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Riccardo
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
<li><strong>Next message:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>In reply to:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
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
