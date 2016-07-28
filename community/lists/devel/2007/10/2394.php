<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 17:22:33 2007" -->
<!-- isoreceived="20071006212233" -->
<!-- sent="Sat, 06 Oct 2007 14:21:01 -0700" -->
<!-- isosent="20071006212101" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Consolidating some IB code" -->
<!-- id="4707FC3D.10907_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B26604ED-679B-44F8-9E0D-3F004A946A43_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 17:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 6, 2007, at 9:59 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I very much care about backward compatibility of the openib name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and MCA parameters...  This is, as I see it, the biggest issue with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changing the name.  Stuff like this has to work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpirun --mca btl openib,self ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpirun --mca btl_openib_foo 32 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Ah that could be fun, do you have ideas or should I try to figure this
</span><br>
<span class="quotelev2">&gt;&gt; out myself?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was kinda assuming that it would be some kind of aliasing in the  
</span><br>
<span class="quotelev1">&gt; MCA parameter engine...?  I dunno -- I hadn't really thought about  
</span><br>
<span class="quotelev1">&gt; this much.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>If creating an aliasing mechanism in the parameter engine for supporting 
<br>
renamed parameters (as opposed to a &quot;macro&quot; facility) , I have some 
<br>
suggestions based on past experience/mistakes:
<br>
<p>1) If the parameters include both the &quot;aliased from&quot; and &quot;aliased to&quot; 
<br>
parameter names in the same invocation, consider this a fatal error.  
<br>
Doing this does require a little bit of extra work, but the extremely 
<br>
confusing/non-obvious behavior that is allowed otherwise is a big 
<br>
headache.  If there is a need to specify the same &quot;effective&quot; parameter 
<br>
multiple times (e.g. command line to override a defaults file), then 
<br>
force the user to use the same parameter name in both/all parameter 
<br>
sources.  You may wish to offer an option to suppress this behavior if 
<br>
one thinks it is to paranoid/draconian.
<br>
<p>2) Consider having something like gcc's deprecated attribute to print a 
<br>
warning that the parameter the user has specified has been replaced by a 
<br>
new name, and that support for the old name will be removed in OpenMPI 
<br>
version x.y.  After all, you don't want the aliases to grow without 
<br>
bound, and we do want to see OpenMPI in use for many years to come.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>In reply to:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
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
