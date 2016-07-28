<?
$subject_val = "Re: [OMPI users] freeing attributes on communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 08:53:55 2009" -->
<!-- isoreceived="20090314125355" -->
<!-- sent="Sat, 14 Mar 2009 08:53:48 -0400" -->
<!-- isosent="20090314125348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] freeing attributes on communicators" -->
<!-- id="3B36EF18-93C9-46EC-BA28-89C663D6816B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090312164342.GK1408_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] freeing attributes on communicators<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 08:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8444.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>In reply to:</strong> <a href="8409.php">Robert Latham: "[OMPI users] freeing attributes on communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Reply:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2009, at 12:43 PM, Robert Latham wrote:
<br>
<p><span class="quotelev1">&gt; I'm using openmpi-1.3 in this example, linux, gcc-4.3.2, configured
</span><br>
<span class="quotelev1">&gt; with nothing special.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run the following simple C code under valgrind, single process, I
</span><br>
<span class="quotelev1">&gt; get some errors about reading and writing already-freed memory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmm.  This is an interesting case.  You end up calling delete_fn()  
<br>
(and therefore MPI_Keyval_free()) twice -- once on each communicator.   
<br>
This definitely borks up OMPI's keyval reference counts and Badness  
<br>
ensues.
<br>
<p>Is is correct to call MPI_Keyval_free() multiple times on the same  
<br>
keyval?  I know you can call it &quot;early&quot;, just like most other  
<br>
MPI_*_FREE functions, but I didn't think you were allowed to call  
<br>
MPI_Keyval_free() multiple times on the same keyval value...?
<br>
<p><span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int delete_fn(MPI_Comm comm, int keyval, void *attr, void *extra) {
</span><br>
<span class="quotelev1">&gt;         MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         MPI_Comm duped;
</span><br>
<span class="quotelev1">&gt;         int keyval;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_dup(MPI_COMM_SELF, &amp;duped);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Keyval_create(MPI_NULL_COPY_FN, delete_fn,  &amp;keyval,  
</span><br>
<span class="quotelev1">&gt; NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Attr_put(MPI_COMM_SELF, keyval, NULL);
</span><br>
<span class="quotelev1">&gt;         MPI_Attr_put(duped, keyval, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_free(&amp;duped);
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8444.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>In reply to:</strong> <a href="8409.php">Robert Latham: "[OMPI users] freeing attributes on communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Reply:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
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
