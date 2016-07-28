<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 04:48:17 2011" -->
<!-- isoreceived="20110315084817" -->
<!-- sent="15 Mar 2011 08:48:12 +0000" -->
<!-- isosent="20110315084812" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="Prayer.1.3.3.1103150848120.15652_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F55A5CEF-4E87-4ABE-B83D-DA8D9202898C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Fwd:  multi-threaded test]<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 04:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9065.php">Terry Dontje: "[OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9048.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15 2011, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nobody challenged your statements about threading or about the 
</span><br>
<span class="quotelev1">&gt; correctness of the POSIX standard. However, such concerns are better 
</span><br>
<span class="quotelev1">&gt; voiced on forums related to that specific subject, where they have a 
</span><br>
<span class="quotelev1">&gt; chance to be taken into account by people who understand them.
</span><br>
<p>That would be true if I were still trying to get the shambles fixed;
<br>
I am not, because I tried and failed at the appropriate time.  I am
<br>
warning OpenMPI people that the infrastructure threading support it
<br>
NECESSARILY relies on is NOT RELIABLE.
<br>
<p><span class="quotelev1">&gt; This particular topic was about MPI level threading support, more 
</span><br>
<span class="quotelev1">&gt; specifically about the threading support Open MPI would like to provide. 
</span><br>
<span class="quotelev1">&gt; In this limited context, people interested in using thread and MPI 
</span><br>
<span class="quotelev1">&gt; together are well aware about the limitations imposed on their 
</span><br>
<span class="quotelev1">&gt; application, as well as the pitfalls they have to avoid. Moreover, with 
</span><br>
<span class="quotelev1">&gt; the new endpoint proposal (the one I was pointing on my previous email), 
</span><br>
<span class="quotelev1">&gt; the threads will become first-class citizen in MPI.
</span><br>
<p>If you think that even relative experts are well aware of the limitations
<br>
and pitfalls, you are living in a fantasy world.  But that is not the
<br>
real point.
<br>
<p>It is that OpenMPI CANNOT make them first-class citizens, no matter what
<br>
it does, because the infrastructure does not support that.  At best, it
<br>
can make them APPEAR to be so, with the specification that sometimes they
<br>
will work and sometimes they won't, nobody will know where the boundary
<br>
lies - and almost all failures will be rare, system-, configuration- and
<br>
workload-dependent, unpredictable and non-repeatable.
<br>
<p>I would a thousand times sooner not have a 'facility' like that.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9065.php">Terry Dontje: "[OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9048.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
