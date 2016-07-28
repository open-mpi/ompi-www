<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct  7 12:53:36 2007" -->
<!-- isoreceived="20071007165336" -->
<!-- sent="Sun, 7 Oct 2007 18:53:25 +0200" -->
<!-- isosent="20071007165325" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Consolidating some IB code" -->
<!-- id="174E5021-BB3E-4AC7-98C1-088FA283768C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4707FC3D.10907_at_lbl.gov" -->
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
<strong>Date:</strong> 2007-10-07 12:53:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2396.php">Jeff Squyres: "[OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2394.php">Paul H. Hargrove: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2394.php">Paul H. Hargrove: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul!
<br>
<p>I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/1161">https://svn.open-mpi.org/trac/ompi/ticket/1161</a> with the  
<br>
action of renaming the BTL and included a link to your post with the  
<br>
suggestions.
<br>
<p><p>On Oct 6, 2007, at 11:21 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 6, 2007, at 9:59 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, I very much care about backward compatibility of the openib  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and MCA parameters...  This is, as I see it, the biggest issue with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changing the name.  Stuff like this has to work:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	mpirun --mca btl openib,self ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	mpirun --mca btl_openib_foo 32 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah that could be fun, do you have ideas or should I try to figure  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out myself?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was kinda assuming that it would be some kind of aliasing in the
</span><br>
<span class="quotelev2">&gt;&gt; MCA parameter engine...?  I dunno -- I hadn't really thought about
</span><br>
<span class="quotelev2">&gt;&gt; this much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If creating an aliasing mechanism in the parameter engine for  
</span><br>
<span class="quotelev1">&gt; supporting
</span><br>
<span class="quotelev1">&gt; renamed parameters (as opposed to a &quot;macro&quot; facility) , I have some
</span><br>
<span class="quotelev1">&gt; suggestions based on past experience/mistakes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) If the parameters include both the &quot;aliased from&quot; and &quot;aliased to&quot;
</span><br>
<span class="quotelev1">&gt; parameter names in the same invocation, consider this a fatal error.
</span><br>
<span class="quotelev1">&gt; Doing this does require a little bit of extra work, but the extremely
</span><br>
<span class="quotelev1">&gt; confusing/non-obvious behavior that is allowed otherwise is a big
</span><br>
<span class="quotelev1">&gt; headache.  If there is a need to specify the same &quot;effective&quot;  
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev1">&gt; multiple times (e.g. command line to override a defaults file), then
</span><br>
<span class="quotelev1">&gt; force the user to use the same parameter name in both/all parameter
</span><br>
<span class="quotelev1">&gt; sources.  You may wish to offer an option to suppress this behavior if
</span><br>
<span class="quotelev1">&gt; one thinks it is to paranoid/draconian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Consider having something like gcc's deprecated attribute to  
</span><br>
<span class="quotelev1">&gt; print a
</span><br>
<span class="quotelev1">&gt; warning that the parameter the user has specified has been replaced  
</span><br>
<span class="quotelev1">&gt; by a
</span><br>
<span class="quotelev1">&gt; new name, and that support for the old name will be removed in OpenMPI
</span><br>
<span class="quotelev1">&gt; version x.y.  After all, you don't want the aliases to grow without
</span><br>
<span class="quotelev1">&gt; bound, and we do want to see OpenMPI in use for many years to come.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2396.php">Jeff Squyres: "[OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2394.php">Paul H. Hargrove: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2394.php">Paul H. Hargrove: "Re: [OMPI devel] Consolidating some IB code"</a>
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
