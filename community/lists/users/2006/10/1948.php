<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  7 07:03:16 2006" -->
<!-- isoreceived="20061007110316" -->
<!-- sent="Sat, 07 Oct 2006 07:03:11 -0400" -->
<!-- isosent="20061007110311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support" -->
<!-- id="C14D01AF.29F3D%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B6EB93FF-0E5D-44FF-8A5F-0D22DB597132_at_mac.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-07 07:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="1947.php">Ralph Castain: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1909.php">Josh Durham: "[OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report!
<br>
<p>I've created ticket #483 about this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/ompi/ticket/483">http://svn.open-mpi.org/trac/ompi/ticket/483</a>
<br>
<p><p>On 9/29/06 5:54 PM, &quot;Josh Durham&quot; &lt;joshdurham_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Below are the changes needed to build OMPI on OSX with ifort and
</span><br>
<span class="quotelev1">&gt; icc.  Basically, the Xgrid component doesn't have a libtool tag
</span><br>
<span class="quotelev1">&gt; defined for ObjC code.  Adding this makes it consistent with the rest
</span><br>
<span class="quotelev1">&gt; of the build - all the other Makefiles has --tag=CC.  This was
</span><br>
<span class="quotelev1">&gt; configured with './configure CC=icc CXX=icpc'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In orte/mca/pls/xgrid/Makefile.in:
</span><br>
<span class="quotelev1">&gt; 215c215
</span><br>
<span class="quotelev1">&gt; &lt; LTOBJCCOMPILE = $(LIBTOOL) --mode=compile $(OBJC) $(DEFS) \
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; LTOBJCCOMPILE = $(LIBTOOL) --tag=CC --mode=compile $(OBJC) $(DEFS) \
</span><br>
<span class="quotelev1">&gt; 219c219
</span><br>
<span class="quotelev1">&gt; &lt; OBJCLINK = $(LIBTOOL) --mode=link $(OBJCLD) $(AM_OBJCFLAGS) \
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; OBJCLINK = $(LIBTOOL) --tag=CC --mode=link $(OBJCLD) $
</span><br>
<span class="quotelev1">&gt; (AM_OBJCFLAGS) \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll leave it up to the developers to figure out how to get the
</span><br>
<span class="quotelev1">&gt; automake stuff to generate this properly.  I have no clue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Josh
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="1947.php">Ralph Castain: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1909.php">Josh Durham: "[OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
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
