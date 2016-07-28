<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 10:04:22 2007" -->
<!-- isoreceived="20070420140422" -->
<!-- sent="Fri, 20 Apr 2007 10:04:11 -0400" -->
<!-- isosent="20070420140411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435" -->
<!-- id="39C5EE38-C3B2-4DBB-BD91-AB9F07167F20_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4628AADD.7000409_at_sara.nl" -->
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
<strong>Date:</strong> 2007-04-20 10:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3110.php">Donald Kerr: "Re: [OMPI users] uDAPL"</a>
<li><strong>In reply to:</strong> <a href="3108.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2007, at 7:58 AM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev1">&gt; Because ${datarootdir} is not expanded i tryied another variable in  
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c:
</span><br>
<span class="quotelev1">&gt;       asprintf(&amp;datafile, &quot;%s%s%s-wrapper-data.txt&quot;,
</span><br>
<span class="quotelev1">&gt;              opal_install_dirs.pkgdatadir, OPAL_PATH_SEP, appname);
</span><br>
<span class="quotelev1">&gt; 		    ^
</span><br>
<span class="quotelev1">&gt; 		    |
</span><br>
<span class="quotelev1">&gt; 	     opal_install_dirs.libdir
</span><br>
<p>Ok.
<br>
<p>Just to be absolutely sure -- you did re-run autogen.sh/configure/ 
<br>
make clean after svn updating to this version of the v1.2 branch,  
<br>
right?  There were changes in configure that should have caused the  
<br>
proper substitution to occur.
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
<li><strong>Next message:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3110.php">Donald Kerr: "Re: [OMPI users] uDAPL"</a>
<li><strong>In reply to:</strong> <a href="3108.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
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
