<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 11:53:17 2007" -->
<!-- isoreceived="20070831155317" -->
<!-- sent="Fri, 31 Aug 2007 11:52:56 -0400" -->
<!-- isosent="20070831155256" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] starting mtt" -->
<!-- id="243A484F-0233-4F07-83C3-9FA3EBEBD8B7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E3533B5D-835E-43C8-AC29-7C39EC864750_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-31 11:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/09/0388.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other INI params"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2007, at 4:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I've been using a funclet to get my DB password recently,  
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = cisco
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = &amp;cat(&quot;/home/mpiteam/mtt-db-password.txt&quot;)
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = svbu-mpi
</span><br>
<p>I neglected to say that this will not work on the release branch -- I  
<br>
use this on the development MTT branch.  We're actually likely to  
<br>
change this in the near future to
<br>
<p>mttdatabase_password = &amp;head(1, &amp;cat(&quot;/home/mpiteam/mtt-db- 
<br>
password.txt&quot;))
<br>
<p>because having &amp;cat() return a scalar when there was only one line in  
<br>
the file made it behave somewhat inconsistently and made it somewhat  
<br>
confusing.  So it's a little longer to type, but it gets the right  
<br>
result.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/09/0388.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other INI params"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
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
