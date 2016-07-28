<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 10:59:31 2010" -->
<!-- isoreceived="20101129155931" -->
<!-- sent="Mon, 29 Nov 2010 10:59:26 -0500" -->
<!-- isosent="20101129155926" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk" -->
<!-- id="702E6D3C-4C8B-48E8-AEA2-E972F1A8E841_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CED33CE.2080501_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 10:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8722.php">Doron Shoham: "[OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>In reply to:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8725.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8725.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great!  
<br>
<p>Are those final changes committed back to the bitbucket?  If so, I'll give it a whirl.
<br>
<p><p>On Nov 24, 2010, at 10:48 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the unified diff.
</span><br>
<span class="quotelev1">&gt; As only the romio subtree is modified, I made the following command:
</span><br>
<span class="quotelev1">&gt;   diff -u -r -x .svn ompi-trunk/ompi/mca/io/romio/romio/ NEW-ROMIO-FOR-OPENMPI/ompi/mca/io/romio/romio/ &gt; DIFF_UPDATE
</span><br>
<span class="quotelev1">&gt;   tar cvzf DIFF_UPDATE.TGZ DIFF_UPDATE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compilation is OK. I run the ROMIO tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are a few new modifications that are not in bitbucket. I think it is not necessary to update bitbucket (<a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a> ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Pascal!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any change you could send a unified diff of the tip of your hg vs. the SVN trunk HEAD?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; E.g., if you have an hg+ssh combo tree, could you &quot;hg up&quot; in there to get all your work, and then &quot;svn diff &gt; diff.out&quot; and then compress and send the diff.out?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2010, at 8:43 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Port the lastest ROMIO version from MPICH2-1.3 into the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: There is a considerable interest in updating the ROMIO branch that was ported from mpich2-1.0.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: ompi/mca/io/romio/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Before 1.5.2, so asap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Next Tuesday teleconf, 23 Nov 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am in charge of ticket 1888 (see at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have made the porting of ROMIO available in bitbucket since September 17th 2010. (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Until now, I do not have any report on this porting and it's now time to bring it into the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All modified files are located under the romio subtree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pascal Dev&#232;ze
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;DIFF_UPDATE.TGZ&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8722.php">Doron Shoham: "[OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>In reply to:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8725.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8725.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
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
