<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 10:23:41 2007" -->
<!-- isoreceived="20070828142341" -->
<!-- sent="Tue, 28 Aug 2007 10:23:19 -0400" -->
<!-- isosent="20070828142319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Please, forward this question to open-mpi developers" -->
<!-- id="F47C0D3C-34C2-46A8-B22B-53802F0F3601_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6C2C79E72C305246B504CBA17B5500C902258027_at_mtlexch01.mtl.com" -->
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
<strong>Date:</strong> 2007-08-28 10:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0378.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>In reply to:</strong> <a href="0373.php">Shai Venter: "[MTT users] Please, forward this question to open-mpi developers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 28, 2007, at 4:15 AM, Shai Venter wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt; Ive found that when entering &quot;./ompi_info --param oob tcp&quot;  for  
</span><br>
<span class="quotelev1">&gt; help on
</span><br>
<span class="quotelev1">&gt; the oob, I see this:
</span><br>
<span class="quotelev1">&gt; 	MCA oob: parameter &quot;oob_tcp_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;       MCA oob: parameter &quot;oob_tcp_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should'nt it be oob_tcp_if_include , oob_tcp_if_exclude ?
</span><br>
<p>This question is better suited for the OMPI user's list (http:// 
<br>
www.open-mpi.org/mailman/listinfo.cgi/users).
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a> -- we  
<br>
know they're named inconsistently and have fixed them in the both the  
<br>
trunk (what will eventually become v1.3) and the v1.2 branch such  
<br>
that oob_tcp_include and oob_tcp_if_include are synonyms (similar for  
<br>
exclude).
<br>
<p>I don't remember exactly when the fix went in to the v1.2 branch,  
<br>
whether it is starting with what will become 1.2.4 or before that.
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
<li><strong>Next message:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0378.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>In reply to:</strong> <a href="0373.php">Shai Venter: "[MTT users] Please, forward this question to open-mpi developers"</a>
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
