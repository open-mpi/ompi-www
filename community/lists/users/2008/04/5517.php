<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 07:08:46 2008" -->
<!-- isoreceived="20080425110846" -->
<!-- sent="Fri, 25 Apr 2008 07:08:37 -0400" -->
<!-- isosent="20080425110837" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="4559DCD6-4C21-44C2-BAE8-A711404EAFE9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DC314969-DD78-4334-9694-C66ABC95BA51_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] install intel mac with Laopard<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 07:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5518.php">Koun SHIRAI: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5516.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I should have been more specific: how about this?
<br>
<p>**********************************************************************
<br>
It appears that your Fortran 77 compiler is unable to link against
<br>
object files created by your C compiler.  This typically indicates
<br>
one of a few possibilities:
<br>
<p>&nbsp;&nbsp;&nbsp;- A conflict between CFLAGS and FFLAGS
<br>
&nbsp;&nbsp;&nbsp;- A problem with your compiler installation(s)
<br>
&nbsp;&nbsp;&nbsp;- Different default build options between compilers (e.g., C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;building for 32 bit and Fortran building for 64 bit)
<br>
&nbsp;&nbsp;&nbsp;- Incompatible compilers
<br>
<p>Such problems can usually be solved by picking compatible compilers
<br>
and/or CFLAGS and FFLAGS.  More information (including exactly what
<br>
command was given to the compilers and what error resulted when the
<br>
commands were executed) is available in the config.log file in this
<br>
directory.
<br>
**********************************************************************
<br>
<p>On Apr 25, 2008, at 7:00 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; How about a compromise -- I'll extend the message to also include the
</span><br>
<span class="quotelev1">&gt; possibility of architecture mismatches.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5518.php">Koun SHIRAI: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5516.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>In reply to:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5522.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
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
