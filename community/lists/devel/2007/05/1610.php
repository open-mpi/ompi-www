<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 14:15:07 2007" -->
<!-- isoreceived="20070529181507" -->
<!-- sent="Tue, 29 May 2007 12:15:02 -0600" -->
<!-- isosent="20070529181502" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="1DEB405A-506A-4998-80D8-6482260683F9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070529133527.GA9039_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 14:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1611.php">Anya Tatashina: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Previous message:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>In reply to:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2007, at 7:35 AM, Jack Howarth wrote:
<br>
<p><span class="quotelev1">&gt; and if you see environ undefined, identify which library
</span><br>
<span class="quotelev1">&gt; it is in and which object file it came from. I would also
</span><br>
<span class="quotelev1">&gt; note that my patch reveals that several instances of the
</span><br>
<span class="quotelev1">&gt; environ variable being declared that are missing the Windows
</span><br>
<span class="quotelev1">&gt; wrappers. So if anything, adding the Darwin patch will
</span><br>
<span class="quotelev1">&gt; increase the probability that both targets are properly
</span><br>
<span class="quotelev1">&gt; maintained.
</span><br>
<p>Yes, there are significant portions of the code base that are &quot;Unix- 
<br>
only&quot; and not built on Windows.  There are regular builds of Open MPI  
<br>
on Windows to ensure that problems are quickly resolved when they  
<br>
creep into the code base.  The places where the Windows environ fixes  
<br>
are missing are likely that way because they are in parts of the code  
<br>
that doesn't build on Windows.
<br>
<p>As I've said, I'd be happy to commit a Mac OS X-specific fix for the  
<br>
environ problem if we can find a test case where it fails without the  
<br>
fix.  I'm not going to commit portability fixes to Open MPI for a  
<br>
problem that we can't replicate.  Based on what Peter said on the  
<br>
apple list, there is no problem with having an undefined symbol in a  
<br>
shared library (other than the fact that *that* shared library must  
<br>
be built with a flat namespace).  I'm working with someone here to  
<br>
get ParaView built on my Mac so I can trace down the problem and  
<br>
figure out if Open MPI is responsible for the missing symbol.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1611.php">Anya Tatashina: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Previous message:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>In reply to:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
