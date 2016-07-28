<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 10:39:46 2007" -->
<!-- isoreceived="20070420143946" -->
<!-- sent="Fri, 20 Apr 2007 16:39:40 +0200" -->
<!-- isosent="20070420143940" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435" -->
<!-- id="4628D0AC.1030100_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39C5EE38-C3B2-4DBB-BD91-AB9F07167F20_at_cisco.com" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-20 10:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>Previous message:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 20, 2007, at 7:58 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Because ${datarootdir} is not expanded i tryied another variable in  
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper.c:
</span><br>
<span class="quotelev2">&gt;&gt;       asprintf(&amp;datafile, &quot;%s%s%s-wrapper-data.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;              opal_install_dirs.pkgdatadir, OPAL_PATH_SEP, appname);
</span><br>
<span class="quotelev2">&gt;&gt; 		    ^
</span><br>
<span class="quotelev2">&gt;&gt; 		    |
</span><br>
<span class="quotelev2">&gt;&gt; 	     opal_install_dirs.libdir
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be absolutely sure -- you did re-run autogen.sh/configure/ 
</span><br>
<span class="quotelev1">&gt; make clean after svn updating to this version of the v1.2 branch,  
</span><br>
<span class="quotelev1">&gt; right?  There were changes in configure that should have caused the  
</span><br>
<span class="quotelev1">&gt; proper substitution to occur.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
When i do i checkout. I alway do ./autogen.sh; configure cycle and the 
<br>
last couple of days i have experienced this problem.
<br>
<p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>Previous message:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
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
