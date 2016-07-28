<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 11:44:03 2010" -->
<!-- isoreceived="20101110164403" -->
<!-- sent="Wed, 10 Nov 2010 11:43:58 -0500" -->
<!-- isosent="20101110164358" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk" -->
<!-- id="57E1D5FA-77C5-412A-ADBE-7B2AE0E80030_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CDAA192.2030807_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 11:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8674.php">Jeff Squyres: "[OMPI devel] Default download page on www.open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="8672.php">Pascal Deveze: "[OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8672.php">Pascal Deveze: "[OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Pascal!
<br>
<p>Is there any change you could send a unified diff of the tip of your hg vs. the SVN trunk HEAD?
<br>
<p>E.g., if you have an hg+ssh combo tree, could you &quot;hg up&quot; in there to get all your work, and then &quot;svn diff &gt; diff.out&quot; and then compress and send the diff.out?
<br>
<p>Thanks!
<br>
<p><p><p>On Nov 10, 2010, at 8:43 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Port the lastest ROMIO version from MPICH2-1.3 into the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: There is a considerable interest in updating the ROMIO branch that was ported from mpich2-1.0.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mca/io/romio/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Before 1.5.2, so asap
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Next Tuesday teleconf, 23 Nov 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am in charge of ticket 1888 (see at <a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>).
</span><br>
<span class="quotelev1">&gt; I have made the porting of ROMIO available in bitbucket since September 17th 2010. (<a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a> )
</span><br>
<span class="quotelev1">&gt; Until now, I do not have any report on this porting and it's now time to bring it into the trunk.
</span><br>
<span class="quotelev1">&gt; All modified files are located under the romio subtree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal Dev&#232;ze
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8674.php">Jeff Squyres: "[OMPI devel] Default download page on www.open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="8672.php">Pascal Deveze: "[OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8672.php">Pascal Deveze: "[OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
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
