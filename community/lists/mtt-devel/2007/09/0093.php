<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 10:50:35 2007" -->
<!-- isoreceived="20070911145035" -->
<!-- sent="Tue, 11 Sep 2007 10:50:24 -0400" -->
<!-- isosent="20070911145024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] No toggle for running autogen.sh in GNU_Install?" -->
<!-- id="3A0F61B7-5AA2-413C-93BE-A6B141C30F71_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070906200020.GW12598_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-11 10:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<li><strong>Previous message:</strong> <a href="0092.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>In reply to:</strong> <a href="0090.php">Ethan Mallove: "[MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2007, at 4:00 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Would it make sense to add a &quot;run_autogen&quot; boolean parameter
</span><br>
<span class="quotelev1">&gt; of some kind for GNU_Install.pm? Or is there a reason the
</span><br>
<span class="quotelev1">&gt; autogen step has been left out for this Install plug-in?
</span><br>
<p>It was intentionally left out.  &quot;autogen.sh&quot; is not a GNU-standard  
<br>
name -- it's fairly OMPI-specific (although I think a smattering of  
<br>
other open source projects use that name as well -- I think we  
<br>
originally copied the name from someone else).  Other projects either  
<br>
have their own bootstrap scripts or just manually invoke autoconf/ 
<br>
automake/libtool/etc.
<br>
<p>Regardless, there is no standardized bootstraping step to getting the  
<br>
GNU auto* tools setup on a project.  We wrote the autogen.sh script  
<br>
in OMPI a) for convenience of the developers, and b) because we do  
<br>
some extra special secret sauce for finding all of OMPI's components  
<br>
and incorporating them into the build process (something that  
<br>
Automake doesn't like to do by itself).
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
<li><strong>Next message:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<li><strong>Previous message:</strong> <a href="0092.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>In reply to:</strong> <a href="0090.php">Ethan Mallove: "[MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
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
