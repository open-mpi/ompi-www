<?
$subject_val = "Re: [OMPI users] btl_openib_ib_max_inline_data warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 09:02:35 2009" -->
<!-- isoreceived="20090320130235" -->
<!-- sent="Fri, 20 Mar 2009 08:57:51 -0400" -->
<!-- isosent="20090320125751" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_ib_max_inline_data warnings" -->
<!-- id="49C392CF.2010607_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="91434852-2C6C-4E8D-801E-475D4FED4C48_at_cisco.com" -->
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
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 08:57:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8531.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>In reply to:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I was starting the suspect our mix and match of hardware was 
<br>
causing some problems.
<br>
<p>Gary
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 19, 2009, at 4:02 PM, Gary Draving wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have written a simple ring program that seems to run fine but I get
</span><br>
<span class="quotelev2">&gt;&gt; the following warning even though I am not explicitly defining  the
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_max_inline_data with an MCA parm. I'm only getting the
</span><br>
<span class="quotelev2">&gt;&gt; warning in the 3 machines that have the QLE7240, the other 40+ machines
</span><br>
<span class="quotelev2">&gt;&gt; with Mellanox cards give no such warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mixing vendor HCA's is not a well-tested scenario.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Work is literally just starting now to qualify this kind of environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, what you're doing *should* work (setting the max 
</span><br>
<span class="quotelev1">&gt; inline data to 0).  Expect more news on this front probably beginning 
</span><br>
<span class="quotelev1">&gt; in the 1.5 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         WARNING: The btl_openib_ib_max_inline_data MCA parameter was 
</span><br>
<span class="quotelev2">&gt;&gt; used to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops -- this looks like an outdated help message.  The actual 
</span><br>
<span class="quotelev1">&gt; parameter name is btl_openib_max_inline_data (just drop the &quot;ib_&quot;; we 
</span><br>
<span class="quotelev1">&gt; deprecated the &quot;ib_&quot; part of it when we started supporting iwarp).  
</span><br>
<span class="quotelev1">&gt; I'll fix the help message; sorry about that!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8531.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>In reply to:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
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
