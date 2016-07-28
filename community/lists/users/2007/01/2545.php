<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 25 14:38:17 2007" -->
<!-- isoreceived="20070125193817" -->
<!-- sent="Thu, 25 Jan 2007 14:38:02 -0500" -->
<!-- isosent="20070125193802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble Building Open MPI on SGI" -->
<!-- id="D0B9F119-C230-4DBE-A3EC-68AD8967C89F_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="e0a2aca06fd6.45b8b77a_at_us.army.mil" -->
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
<strong>Date:</strong> 2007-01-25 14:38:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2546.php">Fisher, Mark S: "[OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2544.php">john.shin1_at_[hidden]: "[OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>In reply to:</strong> <a href="2544.php">john.shin1_at_[hidden]: "[OMPI users] Trouble Building Open MPI on SGI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2007, at 1:58 PM, &lt;john.shin1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; After a while, the make process stops with the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maffinity_first_use_component.c:55: error: syntax error before &#145;,&#146;  
</span><br>
<span class="quotelev1">&gt; token
</span><br>
<span class="quotelev1">&gt; maffinity_first_use_component.c:61: warning: initialization makes  
</span><br>
<span class="quotelev1">&gt; integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; make[2]: *** [maffinity_first_use_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory &#145;/usr/people/jshin/openmpi-1.1.2/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/maffinity/first_use&#146;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory &#145;/usr/people/jshin/openmpi-1.1.2/opal&#146;
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>This is quite interesting -- lines 55 and 61 are part of a static  
<br>
structure initialization, and the #defines in there should all be for  
<br>
internal values.  So they should all be fine.
<br>
<p>Can you send the output of preprocessing this file?  Copy-n-paste the  
<br>
majority of the command to compile this file and remove any &quot;-c&quot; and  
<br>
&quot;-o foo&quot; options, and put in -E.  Redirect that to a file and send it  
<br>
along -- I'd like to see what happens after all the #define's are  
<br>
resolved.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2546.php">Fisher, Mark S: "[OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2544.php">john.shin1_at_[hidden]: "[OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>In reply to:</strong> <a href="2544.php">john.shin1_at_[hidden]: "[OMPI users] Trouble Building Open MPI on SGI"</a>
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
