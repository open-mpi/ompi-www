<?
$subject_val = "Re: [OMPI users] freeing attributes on communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 17:07:06 2009" -->
<!-- isoreceived="20090314210706" -->
<!-- sent="Sat, 14 Mar 2009 17:06:56 -0400" -->
<!-- isosent="20090314210656" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] freeing attributes on communicators" -->
<!-- id="C3EC80AF-09D2-4630-A0BE-46AB700C04A9_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3B36EF18-93C9-46EC-BA28-89C663D6816B_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 17:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Previous message:</strong> <a href="8451.php">Ted Yu: "[OMPI users] core dump while running openmpi"</a>
<li><strong>In reply to:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on my understanding of the MPI standard, the attribute copy and  
<br>
delete functions have to be called every time we duplicate or free a  
<br>
communicator (if the attribute is attached to it). As in this  
<br>
particular case, the copy function is empty (redirected to  
<br>
MPI_NULL_COPY_FN) it should be illegal for the user to call  
<br>
MPI_Keyval_free until the last reference to the attribute is gone. To  
<br>
be more specific, if we kept a reference count on the keyval, your  
<br>
code will not be correct because as a user you will only get one  
<br>
reference count and you release this keyval twice (without talking  
<br>
about the fact that we are not supposed to give you the keyval the  
<br>
second time as you already free it in the first call to delete_fn).
<br>
<p>I tend to say that if someone should have reference counts in this  
<br>
particular case, is the user.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 14, 2009, at 08:53 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 12, 2009, at 12:43 PM, Robert Latham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi-1.3 in this example, linux, gcc-4.3.2, configured
</span><br>
<span class="quotelev2">&gt;&gt; with nothing special.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run the following simple C code under valgrind, single  
</span><br>
<span class="quotelev2">&gt;&gt; process, I
</span><br>
<span class="quotelev2">&gt;&gt; get some errors about reading and writing already-freed memory:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  This is an interesting case.  You end up calling delete_fn()  
</span><br>
<span class="quotelev1">&gt; (and therefore MPI_Keyval_free()) twice -- once on each  
</span><br>
<span class="quotelev1">&gt; communicator.  This definitely borks up OMPI's keyval reference  
</span><br>
<span class="quotelev1">&gt; counts and Badness ensues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is is correct to call MPI_Keyval_free() multiple times on the same  
</span><br>
<span class="quotelev1">&gt; keyval?  I know you can call it &quot;early&quot;, just like most other  
</span><br>
<span class="quotelev1">&gt; MPI_*_FREE functions, but I didn't think you were allowed to call  
</span><br>
<span class="quotelev1">&gt; MPI_Keyval_free() multiple times on the same keyval value...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int delete_fn(MPI_Comm comm, int keyval, void *attr, void *extra) {
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev2">&gt;&gt;        return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm duped;
</span><br>
<span class="quotelev2">&gt;&gt;        int keyval;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm_dup(MPI_COMM_SELF, &amp;duped);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Keyval_create(MPI_NULL_COPY_FN, delete_fn,  &amp;keyval,  
</span><br>
<span class="quotelev2">&gt;&gt; NULL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Attr_put(MPI_COMM_SELF, keyval, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Attr_put(duped, keyval, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm_free(&amp;duped);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;        return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Previous message:</strong> <a href="8451.php">Ted Yu: "[OMPI users] core dump while running openmpi"</a>
<li><strong>In reply to:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
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
