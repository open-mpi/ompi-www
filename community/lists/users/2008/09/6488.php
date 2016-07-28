<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1000, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 15:19:00 2008" -->
<!-- isoreceived="20080909191900" -->
<!-- sent="Tue, 9 Sep 2008 15:18:42 -0400" -->
<!-- isosent="20080909191842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1000, Issue 1" -->
<!-- id="D982222A-F7FB-49DE-86BD-D13925A419FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D56C1B06-80B5-4403-B929-D6CB6CD9096F_at_gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1000, Issue 1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 15:18:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6489.php">Amidu Oloso: "[OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6487.php">Jeremy Stout: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6487.php">Jeremy Stout: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9, 2008, at 3:05 PM, Christopher Tanner wrote:
<br>
<p><span class="quotelev1">&gt; I think I've found the problem / solution. With Ubuntu, there's a  
</span><br>
<span class="quotelev1">&gt; program called 'ldconfig' that updates the dynamic linker run-time  
</span><br>
<span class="quotelev1">&gt; bindings. Since Open MPI was compiled to use dynamic linking, these  
</span><br>
<span class="quotelev1">&gt; have to be updated. Thus, these commands have to be run on all of  
</span><br>
<span class="quotelev1">&gt; the nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ sudo ldconfig -v /usr/local/lib
</span><br>
<span class="quotelev1">&gt; $ sudo ldconfig -v /usr/local/lib/openmpi
</span><br>
<p>Note that you shouldn't need the 2nd of those -- the only things that  
<br>
should be in /usr/local/lib/openmpi should be plugins.
<br>
<p>FWIW, I do not believe that this is a side effect of the Open MPI  
<br>
installation.  The libraries you cited are part of the Intel compiler  
<br>
suite, not Open MPI.  The above would work if the Intel libraries are  
<br>
also installed in /usr/local/lib.  More specifically, if you had OMPI  
<br>
and the Intel compilers installed in different directories, you'd  
<br>
either need to run ldconfig on both of them or adjust your  
<br>
LD_LIBRARY_PATH to include both.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6489.php">Amidu Oloso: "[OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6487.php">Jeremy Stout: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="6486.php">Christopher Tanner: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6487.php">Jeremy Stout: "Re: [OMPI users] users Digest, Vol 1000, Issue 1"</a>
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
