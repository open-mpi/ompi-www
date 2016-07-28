<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 10:48:43 2010" -->
<!-- isoreceived="20101124154843" -->
<!-- sent="Wed, 24 Nov 2010 16:48:30 +0100" -->
<!-- isosent="20101124154830" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk" -->
<!-- id="4CED33CE.2080501_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57E1D5FA-77C5-412A-ADBE-7B2AE0E80030_at_cisco.com" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 10:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8721.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8673.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8723.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8723.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Here is the unified diff.
<br>
As only the romio subtree is modified, I made the following command:
<br>
&nbsp;&nbsp;diff -u -r -x .svn ompi-trunk/ompi/mca/io/romio/romio/ 
<br>
NEW-ROMIO-FOR-OPENMPI/ompi/mca/io/romio/romio/ &gt; DIFF_UPDATE
<br>
&nbsp;&nbsp;tar cvzf DIFF_UPDATE.TGZ DIFF_UPDATE
<br>
<p>Compilation is OK. I run the ROMIO tests.
<br>
<p>There are a few new modifications that are not in bitbucket. I think it 
<br>
is not necessary to update bitbucket 
<br>
(<a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a> ).
<br>
<p>Pascal
<br>
&nbsp;
<br>
Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Thanks Pascal!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any change you could send a unified diff of the tip of your hg vs. the SVN trunk HEAD?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., if you have an hg+ssh combo tree, could you &quot;hg up&quot; in there to get all your work, and then &quot;svn diff &gt; diff.out&quot; and then compress and send the diff.out?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2010, at 8:43 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Port the lastest ROMIO version from MPICH2-1.3 into the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: There is a considerable interest in updating the ROMIO branch that was ported from mpich2-1.0.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ompi/mca/io/romio/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Before 1.5.2, so asap
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Next Tuesday teleconf, 23 Nov 2010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am in charge of ticket 1888 (see at <a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>).
</span><br>
<span class="quotelev2">&gt;&gt; I have made the porting of ROMIO available in bitbucket since September 17th 2010. (<a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a> )
</span><br>
<span class="quotelev2">&gt;&gt; Until now, I do not have any report on this porting and it's now time to bring it into the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; All modified files are located under the romio subtree.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pascal Dev&#232;ze
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8720/DIFF_UPDATE.TGZ">DIFF_UPDATE.TGZ</a>
</ul>
<!-- attachment="DIFF_UPDATE.TGZ" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8721.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8719.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8673.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8723.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8723.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
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
