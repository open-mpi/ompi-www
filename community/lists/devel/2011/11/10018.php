<?
$subject_val = "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 09:34:37 2011" -->
<!-- isoreceived="20111122143437" -->
<!-- sent="Tue, 22 Nov 2011 09:34:22 -0500" -->
<!-- isosent="20111122143422" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Rename &amp;quot;vader&amp;quot; BTL to &amp;quot;xpmem&amp;quot;" -->
<!-- id="4ECBB2EE.4020107_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5514705-B6AD-4B14-A118-239A2976BB46_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 09:34:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10019.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="10017.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>In reply to:</strong> <a href="10017.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10019.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="10019.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So with the aliasing scheme the code for openib would still under 
<br>
ompi/mca/btl/openib but you could access it with -mca btl ofrc?  Ok, so 
<br>
when an error happens in the openib btl how does it identify itself?  
<br>
Does it use openib or ofrc?  This seems like there could be some user 
<br>
confusion by adopting the aliasing scheme.
<br>
<p>--td
<br>
<p>On 11/22/2011 9:22 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Here's what Nathan and I discussed / decided:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Nathan shied away from the name &quot;xpmem&quot; in case some other shared memory scheme basically did the same thing as XPMEM (i.e., single copy techniques).  (just FYI: xpmem's setup is a little different from KNEM, though, so they didn't merge in KNEM support to vader)  Hence, he wanted a neutral name that could apply to xpmem and others.  He and Sam have some possible names that could be suitable (&quot;single copy ...something...&quot;; I don't remember offhand).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We've long talked about having an MCA component aliasing scheme.  Perhaps now is the time to do it.  Such a scheme would do two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     - provide alias names for components.  For example, both of the following
</span><br>
<span class="quotelev1">&gt;       would be equivalent:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           mpirun --mca btl openib,self ...
</span><br>
<span class="quotelev1">&gt;           mpirun --mca btl ofrc,self ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     - automatically register alias MCA parameters.  For example, both of the
</span><br>
<span class="quotelev1">&gt;       following would be equivalent:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           mpirun --mca btl_openib_param 1 ...
</span><br>
<span class="quotelev1">&gt;           mpirun --mca btl_ofrc_param 1 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would solve two problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2a. Finally be able to rename the &quot;openib&quot; module to something more sensical; &quot;ofrc&quot;, perhaps?  (&quot;ofrc&quot; = OpenFabrics reliable connected transport, as opposed to the existing &quot;ofud&quot; = OpenFabrics unreliable datagram transport BTL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2b. Rename vader to be xpmem, because it only supports xpmem at the moment.  If that component is expanded in the future to support other similar single-copy schemes, it can be renamed to some neutral name and have &quot;xpmem&quot; as an alias.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathan agreed to look into a module aliasing scheme / vader-&gt;xpmem rename after he works the hide-OB1/BTL-descriptor-lengths issue that was previously discussed on the list.  This will likely be in early/mid December.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 17, 2011, at 8:11 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After having to explain to someone at SC for the umpteenth time this week that the &quot;vader&quot; BTL uses the XPMEM transport under the covers, I'd like to put forth an appeal to rename the &quot;vader&quot; BTL to be &quot;xpmem.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's my rationale for why:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Although we have a history of Star Wars-related names, the &quot;ob1&quot; and &quot;r2&quot; components got their names because they're mainly algorithms that have no obvious name that describes what they do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. All other components that tie into some back-end system are named reflecting the back-end system (e.g., tcp, mx, portals, ...etc.).  &quot;openib&quot; is the weakest example, but we all know that it was named way back when OFED was named &quot;OpenIB&quot;, and the name has kinda stuck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. The BTL name &quot;xpmem&quot; follows the law of least astonishment from the user's perspective.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Cute names rarely seem so after 6 months.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll even volunteer to do the work to rename it (a bunch of file moves and global search-and-replaces).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10018/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10019.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="10017.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>In reply to:</strong> <a href="10017.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10019.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="10019.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
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
