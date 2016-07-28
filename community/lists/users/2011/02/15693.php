<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 10:16:54 2011" -->
<!-- isoreceived="20110223151654" -->
<!-- sent="Wed, 23 Feb 2011 10:16:49 -0500" -->
<!-- isosent="20110223151649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="FC63AC79-9B9A-4437-8E38-24C8A40AD15C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D651E34.8010109_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What's wrong with this code?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 10:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15694.php">Henderson, Brent: "[OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15696.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15696.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 23, 2011, at 9:48 AM, Tim Prince wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I agree with your logic, but the problem is where the code containing
</span><br>
<span class="quotelev2">&gt;&gt; the error is coming from - it's comping from a header files that's a
</span><br>
<span class="quotelev2">&gt;&gt; part of Open MPI, which makes me think this is a cmpiler error, since
</span><br>
<span class="quotelev2">&gt;&gt; I'm sure there are plenty of people using the same header file. in their
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Are you certain that they all find it necessary to re-define identifiers from that header file, rather than picking parameter names which don't conflict?
</span><br>
<p>Without seeing the code, it sounds like Tim might be right: someone is trying to re-define the MPI_STATUS_SIZE parameter that is being defined by OMPI's mpif-config.h header file.  Regardless of include file/initialization ordering (i.e., regardless of whether mpif-config.h is the first or Nth entity to try to set this parameter), user code should never set this parameter value.  
<br>
<p>Or any symbol that begins with MPI_, for that matter.  The entire &quot;MPI_&quot; namespace is reserved for MPI.
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
<li><strong>Next message:</strong> <a href="15694.php">Henderson, Brent: "[OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15696.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15696.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
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
