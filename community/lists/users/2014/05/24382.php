<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 09:35:32 2014" -->
<!-- isoreceived="20140515133532" -->
<!-- sent="Thu, 15 May 2014 13:35:31 +0000" -->
<!-- isosent="20140515133531" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="0BCF426A-7E77-4968-8B92-A67F4EA8A397_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="21FC7CC3-48D3-4ECB-B646-CB833A20FBF1_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 09:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>Previous message:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24379.php">Noam Bernstein: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These are all good points -- thanks for the feedback.
<br>
<p>Just to be clear: my point about the menu system was to generate file that could be used for subsequent installs, very specifically targeted at those who want/need scriptable installations.  
<br>
<p>One possible scenario could be: you download OMPI, run the menu installer so that you can see the options that are available, pick the ones you want, generate the file, and then use it in automated installs (e.g., ./configure --only-build-this-stuff=file_I_created_from_menu_installer).  
<br>
<p>I am presuming that the generated file will be text, so it could be built/edited by hand, too.  This is heavily inspired by the Linux kernel's &quot;make menuconfig&quot;: it generates a .config file that you can use for subsequent builds.
<br>
<p>We can also look at the possibility of providing a template file that lists all options that are available in that particular tarball (similar to the Linux kernel &quot;make config&quot;).  
<br>
<p>This, BTW, is one part where we need to build some new infrastructure: to register and discover all available options (history has shown that just maintaining a text file for a project the size of Open MPI is not feasible -- it'll get stale/out of date).  
<br>
<p>Other large projects do this kind of thing; we need to see if there's any ideas/code we can borrow rather than completely re-inventing the wheel.
<br>
<p>Again, these are just my thoughts after having thought about this for only about 30 minutes -- so this is likely quite rough and may not even resemble what we finally end up with.
<br>
<p><p>On May 15, 2014, at 8:51 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m not sure how this would apply to other options, but for the scheduler, what about no scheduler-related options defaults to everything enabled (like before), but having any explicit scheduler enable option disables by default all the other schedulers? Multiple explicit enable options would enable all the requested schedulers, and disable everything else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 														Noam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>Previous message:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24379.php">Noam Bernstein: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
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
