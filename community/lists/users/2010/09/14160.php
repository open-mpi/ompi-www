<?
$subject_val = "Re: [OMPI users] Problem including C MPI code from C++ using C linkage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  2 08:41:35 2010" -->
<!-- isoreceived="20100902124135" -->
<!-- sent="Thu, 2 Sep 2010 08:41:31 -0400" -->
<!-- isosent="20100902124131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem including C MPI code from C++ using C linkage" -->
<!-- id="4916B32C-CEB0-49AE-B02A-E74EC60549D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTima3+FbYywHN200SszqOVBgrudr=PzbYQY2wQgE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem including C MPI code from C++ using C linkage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-02 08:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14161.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14143.php">Patrik Jonsson: "[OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Reply:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 31, 2010, at 5:39 PM, Patrik Jonsson wrote:
<br>
<p><span class="quotelev1">&gt; It seems a bit presumptuous of mpi.h to just include mpicxx.h just
</span><br>
<span class="quotelev1">&gt; because __cplusplus is defined, since that makes it impossible to link
</span><br>
<span class="quotelev1">&gt; C MPI code from C++.
</span><br>
<p>The MPI standard requires that &lt;mpi.h&gt; work in both C and C++ applications.  It also requires that &lt;mpi.h&gt; include all the C++ binding prototypes when relevant.  Hence, there's not much we can do here.
<br>
<p><span class="quotelev1">&gt; I've had to resort to something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; #undef __cplusplus
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #define __cplusplus
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<p>As you noted, that doesn't seem like a good idea.
<br>
<p><span class="quotelev1">&gt; in c-code.h, which seems to work but isn't exactly smooth. Is there
</span><br>
<span class="quotelev1">&gt; another way around this, or has linking C MPI code with C++ never come
</span><br>
<span class="quotelev1">&gt; up before?
</span><br>
<p>Just to be clear: this isn't a linking issue; it's a compiling issue.  
<br>
<p>As Lisandro noted, it's probably best to separate &lt;mpi.h&gt; outside of your &lt;c-code.h&gt; file.
<br>
<p>Or, you can make your &lt;c-code.h&gt; file be safe for C++ by doing something like in c-code.h:
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#ifdef __cplusplus
<br>
#extern &quot;C&quot; {
<br>
#endif
<br>
...all your C declarations...
<br>
#ifdef __cplusplus
<br>
}
<br>
#endif
<br>
<p>This is probably preferable because then your &lt;c-code.h&gt; is safe for both C and C++, and you keep &lt;mpi.h&gt; contained inside it (assumedly preserving some abstraction barriers in your code by keeping the MPI prototypes bundled with &lt;c-code.h&gt;).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="14161.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14143.php">Patrik Jonsson: "[OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Reply:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
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
