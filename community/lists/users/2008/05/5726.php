<?
$subject_val = "Re: [OMPI users] More OpenMPI errors: how to debug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 15:07:51 2008" -->
<!-- isoreceived="20080523190751" -->
<!-- sent="Fri, 23 May 2008 15:07:41 -0400" -->
<!-- isosent="20080523190741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More OpenMPI errors: how to debug?" -->
<!-- id="EC37FC83-48E1-4D34-97A8-03D264C4DDB9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0805220952i5ef05b0fh9f76078181f1312e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] More OpenMPI errors: how to debug?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 15:07:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>Previous message:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>In reply to:</strong> <a href="5720.php">Jim Kusznir: "[OMPI users] More OpenMPI errors: how to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>Reply:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2008, at 12:52 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; I installed openmpi 1.2.6 on my system, but now my users are
</span><br>
<span class="quotelev1">&gt; complaining about even more errors.  I'm getting this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-23.local:26164] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;    help-orte-runtime
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>Everything below this message is a consequence of the first message  
<br>
(above).
<br>
<p>There's two problems here:
<br>
<p>1. Where are the help files -- why can't OMPI find them?  That's  
<br>
really weird; it suggests a broken Open MPI install.  You have a few  
<br>
pending e-mails to me about RPM builds that I need to go read (I'm  
<br>
sorry; I'm way backed up :-( ); I wonder if this is somehow related...?
<br>
<p>2. The specific error that is occurring is that the ORTE layer in OMPI  
<br>
is unable to initialize its out-of-band messaging system (we call it  
<br>
the &quot;RML&quot;) which is *really* weird.  The only reason that I can think  
<br>
that that would occur is a broken OMPI install.
<br>
<p>Is there any chance that there are some files missing from your OMPI  
<br>
installs?  For example, do you see these two files under $prefix/lib/ 
<br>
openmpi (or wherever $pkglibdir was set to):
<br>
<p>mca_rml_oob.la*
<br>
mca_rml_oob.so*
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
<li><strong>Next message:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>Previous message:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>In reply to:</strong> <a href="5720.php">Jim Kusznir: "[OMPI users] More OpenMPI errors: how to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>Reply:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
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
