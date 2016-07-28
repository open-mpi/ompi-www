<?
$subject_val = "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 09:02:12 2008" -->
<!-- isoreceived="20080401130212" -->
<!-- sent="Tue, 1 Apr 2008 09:02:03 -0400" -->
<!-- isosent="20080401130203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="5B7209ED-DC3A-4D75-88DE-2D58029FF7B0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990804010222s3d651200oe8f401bb2c39aa8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RMAPS rank_file component patch and modifications for review<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-01 09:02:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3597.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, we have no way to &quot;alias&quot; an MCA param.  :-\
<br>
<p>This topic has come up a few times over the past few years, but no  
<br>
one's actually extended the MCA params infrastructure to support  
<br>
aliasing.  I'm guessing that it wouldn't be too hard to do...
<br>
<p><p>On Apr 1, 2008, at 5:22 AM, Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; is there any elegant way to register mpi parameter that will  
</span><br>
<span class="quotelev1">&gt; actually be pointer or alias to hidden opal parameter ?
</span><br>
<span class="quotelev1">&gt; I still want to leave opal_paffinity_alone flag untouched but  
</span><br>
<span class="quotelev1">&gt; instead expose mpi_paffinity_alone for the user.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 31, 2008 at 2:55 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2008, at 8:02 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - I don't think we can delete the MCA param ompi_paffinity_alone;  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exists in the v1.2 series and has historical precedent.
</span><br>
<span class="quotelev2">&gt; &gt; It will not be deleted,
</span><br>
<span class="quotelev2">&gt; &gt; It will just use the same infrastructure ( slot_list parameter and
</span><br>
<span class="quotelev2">&gt; &gt; opal_base functions ). It will be transparent for the user.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; User have 3 ways to setup it
</span><br>
<span class="quotelev2">&gt; &gt; 1.    mca opal_paffinity_alone 1
</span><br>
<span class="quotelev2">&gt; &gt;       This will set paffinity as it did before
</span><br>
<span class="quotelev2">&gt; &gt; 2.    mca opal_paffinity_slot_list &quot;slot_list&quot;
</span><br>
<span class="quotelev2">&gt; &gt;       Used to define slots that will be used for all ranks on all
</span><br>
<span class="quotelev2">&gt; &gt; nodes.
</span><br>
<span class="quotelev2">&gt; &gt; 3.    mca rmaps_rank_file_path rankfile
</span><br>
<span class="quotelev2">&gt; &gt;       Assigning ranks to CPUs according to the file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see the MCA parameter &quot;mpi_paffinity_alone&quot; anymore:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [4:54] svbu-mpi:~/svn/ompi2 % ompi_info --param all all | grep
</span><br>
<span class="quotelev1">&gt; paffinity_alone
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_paffinity_alone&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; [4:54] svbu-mpi:~/svn/ompi2 %
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point is that I don't think we should delete this parameter; there
</span><br>
<span class="quotelev1">&gt; is historical precedence for it (and it has been documented on the web
</span><br>
<span class="quotelev1">&gt; page for a long, long time).  Perhaps it can now simply be a synonym
</span><br>
<span class="quotelev1">&gt; for opal_paffinity_alone (registered in the MPI layer, not opal).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3597.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
