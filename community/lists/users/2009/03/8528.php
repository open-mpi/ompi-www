<?
$subject_val = "Re: [OMPI users] btl_openib_ib_max_inline_data warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 08:37:53 2009" -->
<!-- isoreceived="20090320123753" -->
<!-- sent="Fri, 20 Mar 2009 08:37:48 -0400" -->
<!-- isosent="20090320123748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_ib_max_inline_data warnings" -->
<!-- id="91434852-2C6C-4E8D-801E-475D4FED4C48_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C2A4F3.20308_at_calvin.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_ib_max_inline_data warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 08:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Previous message:</strong> <a href="8527.php">Marcelo Souza: "[OMPI users] OpenMPI 1.3.1 x86_64 (amd64) Package for Debian 5.0 (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Reply:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2009, at 4:02 PM, Gary Draving wrote:
<br>
<p><span class="quotelev1">&gt; I have written a simple ring program that seems to run fine but I get
</span><br>
<span class="quotelev1">&gt; the following warning even though I am not explicitly defining  the
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_max_inline_data with an MCA parm. I'm only getting the
</span><br>
<span class="quotelev1">&gt; warning in the 3 machines that have the QLE7240, the other 40+  
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt; with Mellanox cards give no such warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Mixing vendor HCA's is not a well-tested scenario.  :-\
<br>
<p>Work is literally just starting now to qualify this kind of environment.
<br>
<p>That being said, what you're doing *should* work (setting the max  
<br>
inline data to 0).  Expect more news on this front probably beginning  
<br>
in the 1.5 series.
<br>
<p><span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         WARNING: The btl_openib_ib_max_inline_data MCA parameter was  
</span><br>
<span class="quotelev1">&gt; used to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Oops -- this looks like an outdated help message.  The actual  
<br>
parameter name is btl_openib_max_inline_data (just drop the &quot;ib_&quot;; we  
<br>
deprecated the &quot;ib_&quot; part of it when we started supporting iwarp).   
<br>
I'll fix the help message; sorry about that!
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
<li><strong>Next message:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Previous message:</strong> <a href="8527.php">Marcelo Souza: "[OMPI users] OpenMPI 1.3.1 x86_64 (amd64) Package for Debian 5.0 (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Reply:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
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
