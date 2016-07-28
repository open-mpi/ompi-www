<?
$subject_val = "Re: [OMPI users] on SEEK_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 07:43:59 2008" -->
<!-- isoreceived="20081016114359" -->
<!-- sent="Thu, 16 Oct 2008 07:43:54 -0400" -->
<!-- isosent="20081016114354" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on SEEK_*" -->
<!-- id="A843C2D8-18FA-421E-BA45-1A4B4551A185_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20081016102901.GG10378_at_brakk.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] on SEEK_*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 07:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2008, at 6:29 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; but when SEEK_* is not present and iostream has been included, OMPI- 
</span><br>
<span class="quotelev1">&gt; dev
</span><br>
<span class="quotelev1">&gt; gives these errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:53: error:  
</span><br>
<span class="quotelev1">&gt; &#145;SEEK_SET&#146; was not declared in this scope
</span><br>
<span class="quotelev1">&gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:54: error:  
</span><br>
<span class="quotelev1">&gt; &#145;SEEK_CUR&#146; was not declared in this scope
</span><br>
<span class="quotelev1">&gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:55: error:  
</span><br>
<span class="quotelev1">&gt; &#145;SEEK_END&#146; was not declared in this scope
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a subtle difference between OMPI 1.2.7 and -dev at least with
</span><br>
<span class="quotelev1">&gt; GCC 4.3.2.  If iostream was included before mpi.h and then SEEK_* are
</span><br>
<span class="quotelev1">&gt; #undef'd then 1.2.7 succeeds while -dev fails with the message above.
</span><br>
<span class="quotelev1">&gt; If stdio.h is included and SEEK_* are #undef'd then both OMPI versions
</span><br>
<span class="quotelev1">&gt; fail.  MPICH2 requires in both cases that SEEK_* be #undef'd.
</span><br>
<p>Open MPI doesn't require undef'ing of anything.  It should also not  
<br>
require any special ordering of include files.  Specifically, the  
<br>
following codes both compile fine for me with 1.2.8 and the OMPI SVN  
<br>
trunk (which is what I assume you mean by &quot;-dev&quot;?):
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int a = MPI::SEEK_SET;
<br>
<p>and
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
int a = MPI::SEEK_SET;
<br>
<p>So in short: don't #undef anything and OMPI should do the Right things.
<br>
<p><span class="quotelev1">&gt; What do you recommend to remain portable?  Is this really an MPICH2
</span><br>
<span class="quotelev1">&gt; issue?  The standard doesn't seem to address this issue.  The MPICH2  
</span><br>
<span class="quotelev1">&gt; FAQ
</span><br>
<span class="quotelev1">&gt; has this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/research/projects/mpich2/support/index.php?s=faqs#cxxseek">http://www.mcs.anl.gov/research/projects/mpich2/support/index.php?s=faqs#cxxseek</a>
</span><br>
<p><p>This is actually a problem in the MPI-2 spec; the names  
<br>
&quot;MPI::SEEK_SET&quot; (and friends) were unfortunately chosen poorly.   
<br>
Hopefully that'll be fixed relatively soon, in MPI-2.2.
<br>
<p>MPICH chose to handle this situation a different way than we did, and  
<br>
apparently requires that you either #undef something or you #define an  
<br>
MPICH-specific macro.  I guess the portable way might be to just  
<br>
always define that MPICH-specific macro.  It should be harmless for  
<br>
OMPI.
<br>
<p>FWIW, I was chatting with the MPICH developers at the recent MPI Forum  
<br>
meeting and showed them how we did our SEEK_* solution in Open MPI.
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
<li><strong>Next message:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
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
