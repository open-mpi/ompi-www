<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 08:28:04 2013" -->
<!-- isoreceived="20130211132804" -->
<!-- sent="Mon, 11 Feb 2013 13:27:59 +0000" -->
<!-- isosent="20130211132759" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="14280F67-5051-4581-8723-C0200EB7245F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPa_DOAvFwtrDgwc-TTszph0702JYq16a7W2yurSdJOEYyVWow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.6.3 on OS X 10.8<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 08:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<li><strong>Previous message:</strong> <a href="21364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running mpi job.."</a>
<li><strong>In reply to:</strong> <a href="21356.php">Mark Bolstad: "[OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's very idd; I cant think of why that would happen offhand. I build and run all the time on ML with no problems. Can you deleted that plugin and run ok?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Feb 10, 2013, at 10:22 PM, &quot;Mark Bolstad&quot; &lt;the.render.dude_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I having some difficulties with building/running 1.6.3 on Mountain Lion (10.8.2). I build with no errors and install into a prefix directory. I get the following errors:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:38486] mca: base: component_find: unable to open /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've fiddled with LD_LIBRARY_PATH, DYLD_LIBRARY_PATH, OPAL_PREFIX, in combination and separately, and none of these seem to have much effect. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I decided to try a straight build. The only option was --disable-mpi-f77. It installed into /usr/local. There is no other mpi version installed on the system, and I still get the same errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I did install the version from MacPorts (also 1.6.3), and it works correctly. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would appreciate if anyone had some insight into building on OS X 10.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<li><strong>Previous message:</strong> <a href="21364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] running mpi job.."</a>
<li><strong>In reply to:</strong> <a href="21356.php">Mark Bolstad: "[OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
