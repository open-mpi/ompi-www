<?
$subject_val = "Re: [OMPI users] OpenMPI Internals &amp; Static-Analysis.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 07:24:20 2008" -->
<!-- isoreceived="20080508112420" -->
<!-- sent="Thu, 8 May 2008 07:24:10 -0400" -->
<!-- isosent="20080508112410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Internals &amp;amp; Static-Analysis." -->
<!-- id="C3E40FA3-3CDA-4C29-AF28-764FC505D0AA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3efa6bfc0805080206s39ec7ad5w781f1b580d4df83d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Internals &amp; Static-Analysis.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 07:24:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="5642.php">Terry Frankcombe: "Re: [OMPI users] mpif77 report Old-style type declaration"</a>
<li><strong>In reply to:</strong> <a href="5641.php">Mukesh K Srivastava: "[OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2008, at 5:06 AM, Mukesh K Srivastava wrote:
<br>
<p><span class="quotelev1">&gt; Hi.
</span><br>
<p>Greetings!  There probably isn't much need to CC both lists; this  
<br>
question is probably more suited for the devel list.  I'm following up  
<br>
to both lists so that the answer is archived on the web properly, but  
<br>
if there's any followups to this, let's just use the devel list.   
<br>
Thanks!
<br>
<p><span class="quotelev1">&gt; Out of curiosity, was looking to know -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Query#1: Does OpenMPI has any document related with OpenMPI Internals?
</span><br>
<p>Unfortunately not.  :-(
<br>
<p><span class="quotelev1">&gt; Query#2: Does any slides talks of OpenMPI internals, If yes, any  
</span><br>
<span class="quotelev1">&gt; links for the same?
</span><br>
<p>We have a few papers that talk about the generalities of our  
<br>
internals, but nothing down to the code level details.  FWIW, various  
<br>
parts of OMPI are more documented than others in code comments (e.g.,  
<br>
OPAL is fairly well documented in header files, etc.).  Most framework  
<br>
header files (e.g., &lt;project&gt;/mca/&lt;foo&gt;/&lt;foo&gt;.h) describe the  
<br>
interfaces for their modules and components at least reasonably well.
<br>
<p>The devel list is probably your best bet for asking questions, etc.
<br>
<p><span class="quotelev1">&gt; Query#3: Do any Static-Analysis open-source tools are available for  
</span><br>
<span class="quotelev1">&gt; analyzing OpenMPI?
</span><br>
<span class="quotelev1">&gt;                Probably, Coverity &quot;Prevent&quot; does provide static- 
</span><br>
<span class="quotelev1">&gt; analysis but  does it work for OpenMPI too?
</span><br>
<p>Yes, Coverity is actually an Open MPI project partner.  They analyze  
<br>
the OMPI nightly tarballs (starting with the upcoming v1.3 series --  
<br>
we didn't use Coverity for the v1.2 series).
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
<li><strong>Next message:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="5642.php">Terry Frankcombe: "Re: [OMPI users] mpif77 report Old-style type declaration"</a>
<li><strong>In reply to:</strong> <a href="5641.php">Mukesh K Srivastava: "[OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
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
